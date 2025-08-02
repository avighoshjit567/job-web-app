<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\JobPost;

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
}
