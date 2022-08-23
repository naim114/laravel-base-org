<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Uploads;

class HomeController extends Controller
{
    // View Main/Home
    public function view_home()
    {
        $hero_title = Settings::where('name', 'home.hero.title')->pluck('value')[0];
        $hero_subtitle = Settings::where('name', 'home.hero.subtitle')->pluck('value')[0];
        $hero_vid = Settings::where('name', 'home.hero.vid')->pluck('value')[0];
        $hero_bg = Settings::where('name', 'home.hero.bg')->pluck('value')[0];

        $news_title = Settings::where('name', 'home.news.title')->pluck('value')[0];
        $news_subtitle = Settings::where('name', 'home.news.subtitle')->pluck('value')[0];

        $gallery_title = Settings::where('name', 'home.gallery.title')->pluck('value')[0];
        $gallery_subtitle = Settings::where('name', 'home.gallery.subtitle')->pluck('value')[0];
        $gallery_images = Uploads::where('name', 'home.gallery')->get();

        $quotes = Quote::all();

        $quote_bg = Settings::where('name', 'home.quote.bg')->pluck('value')[0];

        $donate_title = Settings::where('name', 'home.donate.title')->pluck('value')[0];
        $donate_subtitle = Settings::where('name', 'home.donate.subtitle')->pluck('value')[0];

        return view('main.index', compact(
            'hero_title',
            'hero_subtitle',
            'hero_vid',
            'hero_bg',
            'news_title',
            'news_subtitle',
            'gallery_title',
            'gallery_subtitle',
            'gallery_images',
            'quotes',
            'quote_bg',
            'donate_title',
            'donate_subtitle',
        ));
    }

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