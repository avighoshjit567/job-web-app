<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\JobPost;
use App\Models\JobApply;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Requests\Auth\LoginRequest;

class FrontendController extends Controller
{
    // Function for contact page
    public function home()
    {
        $jobCategories = JobCategory::withCount('jobs')->get();
        $popularJobs = JobPost::where('status', 'active')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        return view('home',compact('jobCategories','popularJobs'));
    }
    
    // Function for contact page
    public function contact()
    {
        return view('website.contact');
    }

    // Function for about page
    public function about()
    {
        return view('website.about');
    }
    
    // Function for category page
    public function category()
    {
        $jobCategories = JobCategory::withCount('jobs')->get();
        return view('website.category',compact('jobCategories'));
    }

    public function categoryDetails($slug)
    {
        $category = JobCategory::where('slug', $slug)->first();
        if (!$category) {
            abort(404, 'Category not found');
        }
        $jobs = $category->jobs()->where('status', 'active')->get();
        return view('website.category_details', compact('category', 'jobs'));
    }
    
    // Function for job post page
    public function jobPost()
    {
        $jobPosts = JobPost::where('status', 'active')->get();
        return view('website.job_post',compact('jobPosts'));
    }
    
    // Function for job details page
    public function jobPostDetails($slug)
    {
        $jobPost = JobPost::where('slug', $slug)->first();
        if (!$jobPost) {
            abort(404, 'Job post not found');
        }
        $releatedJobs = JobPost::where('category_id', $jobPost->category_id)
            ->where('id', '!=', $jobPost->id)
            ->where('status', 'active')
            ->take(6)
            ->get();
        return view('website.job_post_details',compact('jobPost','releatedJobs'));
    }

    public function jobApply($slug)
    {
        if(Auth::check()){
            $user = Auth::user();
            // Redirect based on user type
            if ($user->type === 'admin') {
                return redirect()->route('dashboard');
            }

            $jobPost = JobPost::where('slug', $slug)->first();
            if (!$jobPost) {
                abort(404, 'Job post not found');
            }
            return view('website.job_apply', compact('jobPost'));
        }else{
            return redirect()->route('user.login')->with('error', 'Please login to apply for the job.');
        }
        
    }

    public function jobApplyStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|numeric|digits_between:10,15',
            'skills' => 'required|string|max:255',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $jobPost = JobPost::find($request->job_id);

        // Handle the job application logic here
        $jobApply = new JobApply();
        $jobApply->name = $request->name;
        $jobApply->email = $request->email;
        $jobApply->mobile = $request->mobile;
        $jobApply->about = $request->about;
        $jobApply->salary = $request->salary;
        $jobApply->skills = $request->skills;
        $jobApply->qualifications = $request->qualifications;
        $jobApply->experience = $request->experience;
        $jobApply->address = $request->address;
        $jobApply->status = 'active';
        $jobApply->user_id = Auth::id();
        $jobApply->job_id = $request->job_id;

        // Handle image upload if exists
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
            $cvName = time() . '_' . $cv->getClientOriginalName();
            $cv->move(public_path('uploads/job-applications'), $cvName);
            $jobApply->cv = 'uploads/job-applications/' . $cvName;
        }

        $jobApply->save();

        return redirect()->route('thankyou',$jobPost->slug);
    }

    public function thankYou($slug)
    {
        if(Auth::check()){
            $user = Auth::user();
            // Redirect based on user type
            if ($user->type === 'admin') {
                return redirect()->route('dashboard');
            }

            $jobPost = JobPost::where('slug', $slug)->first();
            if (!$jobPost) {
                abort(404, 'Job post not found');
            }
            return view('website.thankyou', compact('jobPost'));
        }else{
            return redirect()->route('user.login')->with('error', 'Please login to apply for the job.');
        }
        
    }

    // Function for login page
    public function login()
    {
        return view('website.login');
    }

    public function loginProcess(Request $request)
    {
        // Validate email and password
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Redirect based on user type
            if ($user->type === 'admin') {
                return redirect()->route('dashboard');
            } elseif ($user->type === 'employer') {
                return redirect()->route('employer.dashboard');
            } else {
                return redirect()->route('home');
            }
        }

        // Authentication failed
        return redirect()->back()->with('login_error', 'Invalid email or password.');
    }
    
    // Function for login page
    public function logout()
    {
        Auth::logout();
        return redirect(route('home', absolute: false));
    }
    
    // Function for login page
    public function register()
    {
        return view('website.register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => 'user'
        ]);

        Auth::login($user);

        return redirect(route('home', absolute: false));
    }

    public function userProfile()
    {
        $user = Auth::user();
        $userProfile = UserInfo::where('user_id', $user->id)->first();
        $user_image = $userProfile->image ?? null;
        return view('website.user_profile', compact('user', 'userProfile', 'user_image'));
    }

    public function userProfileUpdate(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'firstname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'date_of_birth' => 'required|date',
            'image' => 'nullable|image|max:2048',
        ]);

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/user'), $imageName);
            $imagePath = 'uploads/user/' . $imageName;
        }

        $userProfile = UserInfo::where('user_id', $user->id)->first();
        if ($userProfile) {
            $userProfile->update([
                'name' => $request->firstname,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'date_of_birth' => $request->date_of_birth,
                'bio' => $request->bio,
                'address' => $request->address,
                'image' => $imagePath ?? $userProfile->image,
            ]);
        }else{
            UserInfo::create([
                'user_id' => $user->id,
                'name' => $request->firstname,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'date_of_birth' => $request->date_of_birth,
                'address' => $request->address,
                'bio' => $request->bio,
                'image' => $imagePath ?? null,
            ]);
        }

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    // Function for search page
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $employment_type = $request->input('employment_type');
        $jobPosts = JobPost::where('status', 'active')
            ->where(function ($query) use ($keyword) {
                $query->where('title', 'like', '%' . $keyword . '%')
                      ->orWhere('description', 'like', '%' . $keyword . '%');
            });
        if ($employment_type) {
            $jobPosts->where('employment_type', $employment_type);
        }
        $jobPosts = $jobPosts->get();
        return view('website.search_results', compact('jobPosts', 'keyword'));
    }

}
