<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function master()
    {
        return view('master');
    }

    public function about()
    {
        return view('about');
    }

    public function price()
    {
        return view('price');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function teacher()
    {
        return view('teacher');
    }

    public function contact()
    {
        return view('contact');
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }
}
