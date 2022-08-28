<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Form;
use App\Models\Quote;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Gallery;
use App\Models\UsefulLink;
use App\Providers\UserActivityEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Main/Home View
     */
    // Home
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
        $gallery_images = Gallery::all();

        $quotes = Quote::all();

        $quote_bg = Settings::where('name', 'home.quote.bg')->pluck('value')[0];

        $donate_title = Settings::where('name', 'home.donate.title')->pluck('value')[0];
        $donate_subtitle = Settings::where('name', 'home.donate.subtitle')->pluck('value')[0];

        $useful_links = UsefulLink::all();

        return view('main.index', compact(
            'useful_links',
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

    // Organization
    public function view_org()
    {
        $useful_links = UsefulLink::all();

        return view('main.about.organization', compact(
            'useful_links',
        ));
    }

    // History
    public function view_history()
    {
        $useful_links = UsefulLink::all();

        return view('main.about.history', compact(
            'useful_links',
        ));
    }

    // Committee
    public function view_committee()
    {
        $useful_links = UsefulLink::all();

        return view('main.about.committee', compact(
            'useful_links',
        ));
    }

    // News
    public function view_news()
    {
        $useful_links = UsefulLink::all();

        return view('main.news', compact(
            'useful_links',
        ));
    }

    // Article
    public function view_article()
    {
        $useful_links = UsefulLink::all();

        return view('main.article', compact(
            'useful_links',
        ));
    }

    // Form
    public function view_form()
    {
        $useful_links = UsefulLink::all();
        $forms = Form::all();

        return view('main.join.form', compact(
            'useful_links',
            'forms',
        ));
    }

    // Membership
    public function view_membership()
    {
        $useful_links = UsefulLink::all();

        return view('main.join.membership', compact(
            'useful_links',
        ));
    }

    // Donate
    public function view_donate()
    {
        $useful_links = UsefulLink::all();

        return view('main.join.donate', compact(
            'useful_links',
        ));
    }

    // Contact
    public function view_contact()
    {
        $address = Settings::where('name', 'contact.address')->pluck('value')[0];
        $email = Settings::where('name', 'contact.email')->pluck('value')[0];
        $phone = Settings::where('name', 'contact.phone')->pluck('value')[0];
        $twitter = Settings::where('name', 'contact.twitter')->pluck('value')[0];
        $facebook = Settings::where('name', 'contact.facebook')->pluck('value')[0];
        $instagram = Settings::where('name', 'contact.instagram')->pluck('value')[0];
        $linkedin = Settings::where('name', 'contact.linkedin')->pluck('value')[0];

        $useful_links = UsefulLink::all();

        return view('main.contact', compact(
            'useful_links',
            'address',
            'email',
            'phone',
            'twitter',
            'facebook',
            'instagram',
            'linkedin',
        ));
    }

    /**
     * Main/Home Settings Functions
     */
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

    public function hero_update(Request $request)
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

    public function hero_bg_update(Request $request)
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

        $request->wallpaper->move(public_path('upload/home_bg'), $fileName);

        // updating details in db
        Settings::where('name', 'home.hero.bg')
            ->update([
                'value' => 'upload/home_bg/' . $fileName,
            ]);

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Update hero background wallpaper'));

        return back()->with('success', 'Hero background wallpaper successfully updated!');
    }

    public function news_update(Request $request)
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

    public function gallery_update(Request $request)
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

    public function gallery_img_update(Request $request)
    {
        $request->validate([
            'images.*' => 'image|mimes:png,jpg,jpeg,gif,svg|max:2048',
        ]);

        // if images more than 5 return error
        if (count($request->file('images')) < 1 || count($request->file('images')) > 5) {
            return back()->with('error', 'Please upload not more than 5 images');
        }

        // clear gallery in db and public folder
        $images = Gallery::all();

        foreach ($images as $image) {
            if (File::exists(public_path($image->path))) {
                File::delete(public_path($image->path));
            }

            Gallery::whereNotNull('id')
                ->delete();
        }

        // store images
        $images = $request->file('images');

        foreach ($images as $image) {
            // creating name and path for the file
            // time() is current unix timestamp
            $fileName = time() .
                '_gallery_' . $image->getClientOriginalName();

            $image->move(public_path('upload/gallery'), $fileName);

            // updating details in db
            Gallery::create([
                'path' => 'upload/gallery/' . $fileName,
            ]);
        }

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Add images to home gallery'));

        return back()->with('success', 'Home gallery successfully added!');
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
        // Check if there is only one quote
        $count = Quote::all()->count();

        if ($count <= 1) {
            return back()->with('error', 'There should be at least one quote');
        }

        Quote::where('id', $request->id)
            ->delete();

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Delete a quote'));

        return back()->with('success', 'Quote successfully deleted');
    }

    public function quote_bg_update(Request $request)
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

        $request->wallpaper->move(public_path('upload/home_bg'), $fileName);

        // updating details in db
        Settings::where('name', 'home.quote.bg')
            ->update([
                'value' => 'upload/home_bg/' . $fileName,
            ]);

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Update quote background wallpaper'));

        return back()->with('success', 'Quote background wallpaper successfully updated!');
    }

    public function donate_update(Request $request)
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
        $committees = Committee::all();

        return view('main_settings.committee', compact('committees'));
    }

    public function committee_add(Request $request)
    {
        # code...
    }

    public function committee_update(Request $request)
    {
        # code...
    }

    public function committee_delete(Request $request)
    {
        # code...
    }

    public function news()
    {
        return view('main_settings.news');
    }

    public function form()
    {
        $forms = Form::all();

        return view('main_settings.form', compact('forms'));
    }

    public function form_add(Request $request)
    {
        $request->validate([
            'file' => 'max:5120',
        ]);

        // creating name and path for the file
        // time() is current unix timestamp
        $fileName = time() . '_' . $request->file('file')->getClientOriginalName();;

        $request->file->move(public_path('upload/form'), $fileName);

        // add details in db
        Form::create([
            'name' => $request->name,
            'path' => 'upload/form/' . $fileName,
        ]);

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Add form'));

        return back()->with('success', 'Form successfully added!');
    }

    public function form_delete(Request $request)
    {
        // delete from public folder
        $form = Form::where('id', $request->id)
            ->get();

        $form = $form[0];

        if (File::exists(public_path($form->path))) {
            File::delete(public_path($form->path));
        }

        // delete form db
        Form::where('id', $request->id)
            ->delete();

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Delete a form'));

        return back()->with('success', 'Form successfully deleted');
    }

    public function donate()
    {
        return view('main_settings.donate');
    }

    public function contact()
    {
        $address = Settings::where('name', 'contact.address')->pluck('value')[0];
        $email = Settings::where('name', 'contact.email')->pluck('value')[0];
        $phone = Settings::where('name', 'contact.phone')->pluck('value')[0];
        $twitter = Settings::where('name', 'contact.twitter')->pluck('value')[0];
        $facebook = Settings::where('name', 'contact.facebook')->pluck('value')[0];
        $instagram = Settings::where('name', 'contact.instagram')->pluck('value')[0];
        $linkedin = Settings::where('name', 'contact.linkedin')->pluck('value')[0];

        $useful_links = UsefulLink::all();

        return view('main_settings.contact', compact(
            'useful_links',
            'address',
            'email',
            'phone',
            'twitter',
            'facebook',
            'instagram',
            'linkedin',
        ));
    }

    public function contact_update(Request $request)
    {
        // update address
        Settings::where('name', 'contact.address')
            ->update([
                'value' => $request->address,
            ]);

        // update email
        Settings::where('name', 'contact.email')
            ->update([
                'value' => $request->email,
            ]);

        // update phone
        Settings::where('name', 'contact.phone')
            ->update([
                'value' => $request->phone,
            ]);

        // update twitter
        Settings::where('name', 'contact.twitter')
            ->update([
                'value' => $request->twitter,
            ]);

        // update facebook
        Settings::where('name', 'contact.facebook')
            ->update([
                'value' => $request->facebook,
            ]);
        // update instagram
        Settings::where('name', 'contact.instagram')
            ->update([
                'value' => $request->instagram,
            ]);
        // update linkedin
        Settings::where('name', 'contact.linkedin')
            ->update([
                'value' => $request->linkedin,
            ]);

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Updating contact information'));

        return back()->with('success', 'Contact informations successfully updated!');
    }

    public function link_add(Request $request)
    {
        $add = $request->all();

        // add item in db
        UsefulLink::create($add);

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Add useful link'));

        return back()->with('success', 'Useful link successfully added!');
    }

    public function link_delete(Request $request)
    {
        UsefulLink::where('id', $request->id)
            ->delete();

        // user activity log
        event(new UserActivityEvent(Auth::user(), $request, 'Delete a useful link '));

        return back()->with('success', 'Useful link successfully deleted');
    }
}