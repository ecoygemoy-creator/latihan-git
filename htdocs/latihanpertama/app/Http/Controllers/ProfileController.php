<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function about()
    {
        return view('about');
    }
}