<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('owner.dashboard'); // Adjust this path according to your view location
    }
    public function owner()
    {
        return view('owner.dashboard'); // Adjust this path according to your view location
    }
}
