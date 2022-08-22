<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // View Main/Home

    // Main/Home Settings Functions
    public function home()
    {
        return view('main_settings.home');
    }

    public function organization()
    {
        return view('main_settings.org');
    }

    public function history()
    {
        return view('main_settings.history');
    }

    public function committee()
    {
        return view('main_settings.committee');
    }

    public function news()
    {
        return view('main_settings.news');
    }

    public function form()
    {
        return view('main_settings.form');
    }

    public function donate()
    {
        return view('main_settings.donate');
    }

    public function contact()
    {
        return view('main_settings.contact');
    }
}
