<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Uploads;
use App\Providers\UserActivityEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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

    // Home
    public function home()
    {
        $hero_title = Settings::where('name', 'home.hero.title')->pluck('value')[0];
        $hero_subtitle = Settings::where('name', 'home.hero.subtitle')->pluck('value')[0];
        $hero_vid = Settings::where('name', 'home.hero.vid')->pluck('value')[0];
        $hero_bg = Settings::where('name', 'home.hero.bg')->pluck('value')[0];

        $news_title = Settings::where('name', 'home.news.title')->pluck('value')[0];
        $news_subtitle = Settings::where('name', 'home.news.subtitle')->pluck('value')[0];

        $gallery_title = Settings::where('name', 'home.gallery.title')->pluck('value')[0];
        $gallery_subtitle = Settings::where('name', 'home.gallery.subtitle')->pluck('value')[0];
        // $gallery_images = Uploads::where('name', 'home.gallery')->get();

        $quotes = Quote::all();

        $quote_bg = Settings::where('name', 'home.quote.bg')->pluck('value')[0];

        $donate_title = Settings::where('name', 'home.donate.title')->pluck('value')[0];
        $donate_subtitle = Settings::where('name', 'home.donate.subtitle')->pluck('value')[0];

        return view('main_settings.home', compact(
            'hero_title',
            'hero_subtitle',
            'hero_vid',
            'hero_bg',
            'news_title',
            'news_subtitle',
            'gallery_title',
            'gallery_subtitle',
            // 'gallery_images',
            'quotes',
            'quote_bg',
            'donate_title',
            'donate_subtitle',
        ));
    }

    public function update_hero(Request $request)
    {
        // update title
        Settings::where('name', 'home.hero.title')
            ->update([
                'value' => $request->title,
            ]);

        // update subtitle
        Settings::where('name', 'home.hero.subtitle')
            ->update([
                'value' => $request->subtitle,
            ]);

        // update vid url
        Settings::where('name', 'home.hero.vid')
            ->update([
                'value' => $request->vid,
            ]);

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Updating hero title, subtitle and video URL'));

        return back()->with('success', 'Hero title, subtitle and video URL successfully updated!');
    }

    public function update_hero_bg(Request $request)
    {
        $settings = Settings::where('name', 'home.hero.bg')->first();

        $request->validate([
            'wallpaper' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (File::exists(public_path($settings->value))) {
            File::delete(public_path($settings->value));
        }

        // creating name and path for the file
        // time() is current unix timestamp
        $fileName = time() .
            '_hero_' . $request->file('wallpaper')->getClientOriginalName();;

        try {
            $request->wallpaper->move(public_path('upload/home_bg'), $fileName);

            // updating details in db
            Settings::where('name', 'home.hero.bg')
                ->update([
                    'value' => 'upload/home_bg/' . $fileName,
                ]);
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Update hero background wallpaper'));

        return back()->with('success', 'Hero background wallpaper successfully updated!');
    }

    public function update_news(Request $request)
    {
        // update title
        Settings::where('name', 'home.news.title')
            ->update([
                'value' => $request->title,
            ]);

        // update subtitle
        Settings::where('name', 'home.news.subtitle')
            ->update([
                'value' => $request->subtitle,
            ]);

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Updating news title and subtitle'));

        return back()->with('success', 'News title and subtitle successfully updated!');
    }

    public function update_gallery(Request $request)
    {
        // update title
        Settings::where('name', 'home.gallery.title')
            ->update([
                'value' => $request->title,
            ]);

        // update subtitle
        Settings::where('name', 'home.gallery.subtitle')
            ->update([
                'value' => $request->subtitle,
            ]);

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Updating gallery title and subtitle'));

        return back()->with('success', 'Gallery title and subtitle successfully updated!');
    }

    public function quote_add(Request $request)
    {
        $add = $request->all();

        // add role in db
        Quote::create($add);

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Add quote'));

        return back()->with('success', 'Quote successfully added!');
    }

    public function quote_delete(Request $request)
    {
        Quote::where('id', $request->id)
            ->delete();

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Delete a quote'));

        return back()->with('success', 'Quote has been successfully deleted');
    }

    public function update_quote_bg(Request $request)
    {
        $settings = Settings::where('name', 'home.quote.bg')->first();

        $request->validate([
            'wallpaper' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (File::exists(public_path($settings->value))) {
            File::delete(public_path($settings->value));
        }

        // creating name and path for the file
        // time() is current unix timestamp
        $fileName = time() .
            '_quote_' . $request->file('wallpaper')->getClientOriginalName();;

        try {
            $request->wallpaper->move(public_path('upload/home_bg'), $fileName);

            // updating details in db
            Settings::where('name', 'home.quote.bg')
                ->update([
                    'value' => 'upload/home_bg/' . $fileName,
                ]);
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Update quote background wallpaper'));

        return back()->with('success', 'Quote background wallpaper successfully updated!');
    }

    public function update_donate(Request $request)
    {
        // update title
        Settings::where('name', 'home.donate.title')
            ->update([
                'value' => $request->title,
            ]);

        // update subtitle
        Settings::where('name', 'home.donate.subtitle')
            ->update([
                'value' => $request->subtitle,
            ]);

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Updating donate title and subtitle'));

        return back()->with('success', 'Donate title and subtitle successfully updated!');
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