<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Function for contact page
    public function home()
    {
        return view('home');
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
