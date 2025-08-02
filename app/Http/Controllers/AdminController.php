<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Function for admin dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
