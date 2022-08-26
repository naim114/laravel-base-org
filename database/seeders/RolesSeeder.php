<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Settings;
use App\Models\UsefulLink;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Super Admin',
            'display_name' => 'Super Admin',
            'description' => 'Total control administrator.',
            'removable' => false
        ]);

        Role::create([
            'name' => 'Admin',
            'display_name' => 'Admin',
            'description' => 'System administrator.',
            'removable' => false
        ]);

        Role::create([
            'name' => 'User',
            'display_name' => 'User',
            'description' => 'Default system user.',
            'removable' => false
        ]);

        Settings::create([
            'name' => 'app-name',
            'display_name' => 'Application Name',
            'value' => 'Laravel Base',
        ]);

        Settings::create([
            'name' => 'copyright',
            'display_name' => 'Copyright',
            'value' => 'https://github.com/naim114',
        ]);

        Settings::create([
            'name' => 'privacy-policy',
            'display_name' => 'Privacy Policy',
            'value' => 'https://github.com/naim114',
        ]);

        Settings::create([
            'name' => 'terms-conditions',
            'display_name' => 'Terms & Conditions',
            'value' => 'https://github.com/naim114',
        ]);

        Settings::create([
            'name' => 'favicon',
            'display_name' => 'Favicon',
            'value' => 'assets/img/default-image.jpg',
        ]);

        Settings::create([
            'name' => 'logo',
            'display_name' => 'Logo',
            'value' => 'assets/img/default-image.jpg',
        ]);

        Settings::create([
            'name' => 'wallpaper.auth',
            'display_name' => 'Login/Register Background Wallpaper',
            'value' => 'assets/img/mozaic-wallpaper.jpg',
        ]);

        Settings::create([
            'name' => 'color.primary.hex',
            'display_name' => 'Primary Color Hex',
            'value' => '#345d6a',
        ]);

        Settings::create([
            'name' => 'color.secondary.hex',
            'display_name' => 'Secondary Color Hex',
            'value' => '#6c757d',
        ]);

        Settings::create([
            'name' => 'color.success.hex',
            'display_name' => 'Success Color Hex',
            'value' => '#198754',
        ]);

        Settings::create([
            'name' => 'color.info.hex',
            'display_name' => 'Info Color Hex',
            'value' => '#0dcaf0',
        ]);

        Settings::create([
            'name' => 'color.warning.hex',
            'display_name' => 'Warning Color Hex',
            'value' => '#ffc107',
        ]);

        Settings::create([
            'name' => 'color.danger.hex',
            'display_name' => 'Danger Color Hex',
            'value' => '#dc3545',
        ]);

        Settings::create([
            'name' => 'color.primary.rgb',
            'display_name' => 'Primary Color',
            'value' => '52,93,106',
        ]);

        Settings::create([
            'name' => 'color.secondary.rgb',
            'display_name' => 'Secondary Color',
            'value' => '108,117,125',
        ]);

        Settings::create([
            'name' => 'color.success.rgb',
            'display_name' => 'Success Color',
            'value' => '25,135,84',
        ]);

        Settings::create([
            'name' => 'color.info.rgb',
            'display_name' => 'Info Color',
            'value' => '13,202,240',
        ]);

        Settings::create([
            'name' => 'color.warning.rgb',
            'display_name' => 'Warning Color',
            'value' => '255,193,7',
        ]);

        Settings::create([
            'name' => 'color.danger.rgb',
            'display_name' => 'Danger Color',
            'value' => '220,53,69',
        ]);

        Settings::create([
            'name' => 'home.hero.title',
            'display_name' => 'Hero Title',
            'value' => 'Welcome to Laravel Base Org',
        ]);

        Settings::create([
            'name' => 'home.hero.subtitle',
            'display_name' => 'Hero Subtitle',
            'value' => 'We are team of talented designers making websites with Bootstrap',
        ]);

        Settings::create([
            'name' => 'home.hero.vid',
            'display_name' => 'Hero Video URL',
            'value' => 'https://www.youtube.com/watch?v=rPHPfyJEW8s',
        ]);

        Settings::create([
            'name' => 'home.hero.bg',
            'display_name' => 'Hero Background Wallpaper',
            'value' => 'upload/home_bg/hero.jpg',
        ]);

        Settings::create([
            'name' => 'home.news.title',
            'display_name' => 'Home News Title',
            'value' => 'Read Our Latest News',
        ]);

        Settings::create([
            'name' => 'home.news.subtitle',
            'display_name' => 'Home News Subtitle',
            'value' => 'Get the latest news, events, announcement, public statements directly from us.',
        ]);

        Settings::create([
            'name' => 'home.gallery.title',
            'display_name' => 'Home Gallery Title',
            'value' => 'Gallery',
        ]);

        Settings::create([
            'name' => 'home.gallery.subtitle',
            'display_name' => 'Home Gallery Subtitle',
            'value' => 'Check out what we have been up to.',
        ]);

        DB::table('upload')->insert(array(
            'name' => 'home.gallery',
            'path' => 'upload/home_gallery/1.jpg',
        ));

        DB::table('upload')->insert(array(
            'name' => 'home.gallery',
            'path' => 'upload/home_gallery/2.jpg',
        ));

        DB::table('upload')->insert(array(
            'name' => 'home.gallery',
            'path' => 'upload/home_gallery/3.jpg',
        ));

        DB::table('upload')->insert(array(
            'name' => 'home.gallery',
            'path' => 'upload/home_gallery/4.jpg',
        ));

        DB::table('upload')->insert(array(
            'name' => 'home.gallery',
            'path' => 'upload/home_gallery/5.jpg',
        ));

        Settings::create([
            'name' => 'home.donate.title',
            'display_name' => 'Home Donate Title',
            'value' => 'Support Us By Donating',
        ]);

        Settings::create([
            'name' => 'home.donate.subtitle',
            'display_name' => 'Home Donate Subtitle',
            'value' => 'Besides buying our products you can straight away support us by donating.',
        ]);

        Settings::create([
            'name' => 'home.quote.bg',
            'display_name' => 'Quote Background Wallpaper',
            'value' => 'upload/home_bg/quote.jpg',
        ]);

        DB::table('quote')->insert(array(
            'name' => 'Saul Goodman',
            'title' => 'CEO & Founder',
            'quote' => 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
        ));

        DB::table('quote')->insert(array(
            'name' => 'Zach Wilson',
            'title' => 'QB at Jets',
            'quote' => 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
        ));

        DB::table('quote')->insert(array(
            'name' => 'Aaron Donald',
            'title' => 'Rams Edge',
            'quote' => 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
        ));

        DB::table('quote')->insert(array(
            'name' => 'Trevon Diggs',
            'title' => 'Cowboys Corner',
            'quote' => 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
        ));

        DB::table('quote')->insert(array(
            'name' => 'Alvin Kamara',
            'title' => 'Saints Running Back',
            'quote' => 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
        ));

        Settings::create([
            'name' => 'contact.address',
            'display_name' => 'Address',
            'value' => 'A108 Adam Street, New York, NY 535022',
        ]);

        Settings::create([
            'name' => 'contact.email',
            'display_name' => 'Email',
            'value' => 'contact@example.com',
        ]);

        Settings::create([
            'name' => 'contact.phone',
            'display_name' => 'Phone Number',
            'value' => '+1 5589 55488 55',
        ]);

        Settings::create([
            'name' => 'contact.twitter',
            'display_name' => 'Twitter',
            'value' => 'exampletwt',
        ]);

        Settings::create([
            'name' => 'contact.facebook',
            'display_name' => 'Facebook',
            'value' => 'examplefb',
        ]);

        Settings::create([
            'name' => 'contact.instagram',
            'display_name' => 'Instagram',
            'value' => 'exampleig',
        ]);

        Settings::create([
            'name' => 'contact.linkedin',
            'display_name' => 'LinkedIn',
            'value' => 'exampleli',
        ]);

        UsefulLink::create([
            'display_name' => 'Main Portal',
            'url' => 'https://github.com/naim114',
        ]);
    }
}