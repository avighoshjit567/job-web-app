<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\JobPost;
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
