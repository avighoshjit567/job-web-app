<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\JobPost;
use App\Models\JobApply;
use App\Models\User;
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
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

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

        // if ($request->hasFile('resume')) {
        //     $jobApply->resume = $request->file('resume')->store('resumes');
        // }

        $jobApply->save();

        return redirect()->route('home')->with('success', 'Your application has been submitted successfully.');
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
}
