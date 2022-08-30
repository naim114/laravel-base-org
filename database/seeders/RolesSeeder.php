<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleUpload;
use App\Models\Committee;
use App\Models\Gallery;
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

        Gallery::create([
            'path' => 'upload/gallery/1.jpg',
        ]);

        Gallery::create([
            'path' => 'upload/gallery/2.jpg',
        ]);

        Gallery::create([
            'path' => 'upload/gallery/3.jpg',
        ]);

        Gallery::create([
            'path' => 'upload/gallery/4.jpg',
        ]);

        Gallery::create([
            'path' => 'upload/gallery/5.jpg',
        ]);

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

        Committee::create([
            'name' => 'Saul Goodman',
            'title' => 'Law',
            'path' => 'upload/committee/1.jpg',
        ]);

        Committee::create([
            'name' => 'Walter White',
            'title' => 'Chemistry',
            'path' => 'upload/committee/2.jpg',
        ]);

        Article::create([
            'title' => 'Organization',
            'description' => 'Get to know our organization aims and objectives.',
            'text' => '<p style="text-align: center;"><strong>Republican Party</strong>, by name <em>Grand Old Party</em> (GOP), in the United States, one of the two <strong>major political parties</strong>, the other being the <strong>Democratic Party</strong>. During the 19th century the Republican Party stood against the extension of slavery to the country&rsquo;s new territories and, ultimately, for slavery&rsquo;s complete abolition. During the 20th and 21st centuries the party came to be <strong>associated with laissez-faire capitalism, low taxes, and conservative social policies</strong>. The party acquired the acronym GOP, widely understood as &ldquo;<em>Grand Old Party</em>,&rdquo; in the 1870s. The party&rsquo;s official logo, the elephant, is derived from a cartoon by Thomas Nast and also dates from the 1870s. <br /><br />The term <strong><em>Republican </em></strong>was adopted in 1792 by supporters of Thomas Jefferson, who favoured a decentralized government with limited powers. Although Jefferson&rsquo;s political philosophy is consistent with the outlook of the modern Republican Party, his faction, which soon became known as the Democratic-Republican Party, ironically evolved by the 1830s into the Democratic Party, the modern Republican Party&rsquo;s chief rival. <br /><br />The Republican Party traces its roots to the 1850s, when antislavery leaders (including former members of the Democratic, Whig, and Free-Soil parties) joined forces to oppose the extension of slavery into the Kansas and Nebraska territories by the proposed Kansas-Nebraska Act. At meetings in Ripon, Wisconsin (May 1854), and Jackson, Michigan (July 1854), they recommended forming a new party, which was duly established at the political convention in Jackson.</p>',
        ]);

        ArticleUpload::create([
            'article_id' => 1,
            'type' => 'image',
            'path' => 'upload/article/1/1.jpg',
        ]);

        ArticleUpload::create([
            'article_id' => 1,
            'type' => 'image',
            'path' => 'upload/article/1/2.jpg',
        ]);

        ArticleUpload::create([
            'article_id' => 1,
            'type' => 'video',
            'path' => 'upload/article/1/mov_bbb.mp4',
        ]);
    }
}