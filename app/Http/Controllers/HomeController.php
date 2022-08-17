<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('main_settings.home');
    }

    public function organization()
    {
        return view('main.about.organization');
    }

    public function history()
    {
        return view('main.about.history');
    }

    public function committee()
    {
        return view('main.about.committee');
    }

    public function news()
    {
        return view('main.news');
    }

    public function form()
    {
        return view('main.join.form');
    }

    public function membership()
    {
        return view('main.join.membership');
    }

    public function donate()
    {
        return view('main.join.donate');
    }

    public function contact()
    {
        return view('main.contact');
    }
}