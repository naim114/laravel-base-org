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
            'text' => "Capital A Berhad, (MYX: 5099) operating as AirAsia (stylized as airasia) is a Malaysian multinational low-cost airline headquartered near Kuala Lumpur, Malaysia. It is the largest airline in Malaysia by fleet size and destinations. AirAsia operates scheduled domestic and international flights to more than 165 destinations spanning 25 countries.[4] Its main base is klia2, the low-cost carrier terminal at Kuala Lumpur International Airport (KLIA) in Sepang, Selangor, Malaysia. Its affiliate airlines Thai AirAsia, Indonesia AirAsia, Philippines AirAsia, and AirAsia India have bases in Bangkok–Don Mueang, Jakarta–Soekarno-Hatta, Manila–Ninoy Aquino, and Bangalore–Kempegowda airports respectively, while its sister airline, AirAsia X, focuses on long-haul routes. AirAsia's registered office is in Petaling Jaya, Selangor while its head office is at Kuala Lumpur International Airport. ",
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

        Article::create([
            'title' => 'History',
            'description' => 'Read the history of our organization.',
            'text' => "Malaysia Airlines Berhad (MAB; Malay: Penerbangan Malaysia Berhad), formerly known as Malaysian Airline System (MAS; Sistem Penerbangan Malaysia), and branded as Malaysia Airlines, is the flag carrier airline of Malaysia and a member of the Oneworld airline alliance. (The MAS initials are still being kept by subsidiaries MAS Kargo and MAS Wings.) The company headquarters are at Kuala Lumpur International Airport. In August 2014, the Malaysian government's sovereign wealth fund Khazanah Nasional—which then owned 69.37% of the airline—announced its intention to purchase the remaining ownership from minority shareholders and delist the airline from Malaysia's stock exchange, thereby renationalising the airline. It operates primarily from Kuala Lumpur International Airport and from secondary hubs in Kota Kinabalu and Kuching to destinations throughout Asia, Oceania, and Europe.",
        ]);

        ArticleUpload::create([
            'article_id' => 2,
            'type' => 'image',
            'path' => 'upload/article/2/1.jpg',
        ]);

        ArticleUpload::create([
            'article_id' => 2,
            'type' => 'image',
            'path' => 'upload/article/2/2.jpg',
        ]);

        $text = <<<EOT
            <p>Throughout the late 1950s and into the 1960s, the United States and the Soviet Union had been developing missile systems with the ability to shoot down incoming <a title="Intercontinental ballistic missile" href="https://en.wikipedia.org/wiki/Intercontinental_ballistic_missile">Intercontinental ballistic missile</a> (ICBM) warheads. During this period, the US considered the defense of the US as part of reducing the overall damage inflicted in a full nuclear exchange. As part of this defense, <a title="Canada" href="https://en.wikipedia.org/wiki/Canada">Canada</a> and the US established the North American Air Defense Command (now called <a title="NORAD" href="https://en.wikipedia.org/wiki/NORAD">North American Aerospace Defense Command</a>).</p>
            <p><img class="thumbimage" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Carter_Brezhnev_sign_SALT_II.jpg/290px-Carter_Brezhnev_sign_SALT_II.jpg" alt="" width="290" height="196" data-file-width="630" data-file-height="425" /></p>
            <p>By the early 1950s, US research on the <a title="Project Nike" href="https://en.wikipedia.org/wiki/Project_Nike">Nike Zeus</a> missile system had developed to the point where small improvements would allow it to be used as the basis of an operational ABM system. Work started on a short-range, high-speed counterpart known as <a title="Sprint (missile)" href="https://en.wikipedia.org/wiki/Sprint_(missile)">Sprint</a> to provide defense for the ABM sites themselves. By the mid-1960s, both systems showed enough promise to start development of base selection for a limited ABM system dubbed <a class="mw-redirect" title="National Missile Defense" href="https://en.wikipedia.org/wiki/National_Missile_Defense#Sentinel_Program">Sentinel</a>. In 1967, the US announced that Sentinel itself would be scaled down to the smaller and less expensive <a title="Safeguard Program" href="https://en.wikipedia.org/wiki/Safeguard_Program">Safeguard</a>. Soviet doctrine called for development of its own ABM system and return to strategic parity with the US. This was achieved with the operational deployment of the <a title="A-35 anti-ballistic missile system" href="https://en.wikipedia.org/wiki/A-35_anti-ballistic_missile_system">A-35 ABM system</a> and its successors, which remain operational to this day.</p>
            <p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/NIKE_Zeus.jpg/300px-NIKE_Zeus.jpg" alt="NIKE Zeus.jpg" width="300" height="380" data-file-width="372" data-file-height="471" /></p>
            <p>The development of multiple independently targetable reentry vehicle (<a class="mw-redirect" title="MIRV" href="https://en.wikipedia.org/wiki/MIRV">MIRV</a>) systems allowed a single ICBM to deliver as many as ten separate warheads at a time. An ABM defense system could be overwhelmed with the sheer number of warheads.<sup id="cite_ref-4" class="reference"><a href="https://en.wikipedia.org/wiki/Anti-Ballistic_Missile_Treaty#cite_note-4">[4]</a></sup> Upgrading it to counter the additional warheads would be economically unfeasible: The defenders required one rocket per incoming warhead, whereas the attackers could place 10 warheads on a single missile at a reasonable cost. To further protect against ABM systems, the Soviet MIRV missiles were equipped with decoys; <a title="R-36 (missile)" href="https://en.wikipedia.org/wiki/R-36_(missile)">R-36M</a> heavy missiles carried as many as 40.<sup id="cite_ref-Decoys_5-0" class="reference"><a href="https://en.wikipedia.org/wiki/Anti-Ballistic_Missile_Treaty#cite_note-Decoys-5">[5]</a></sup> These decoys would appear as warheads to an ABM, effectively requiring engagement of five times as many targets and rendering defense even less effective.</p>
        EOT;

        Article::create([
            'title' => 'Anti-Ballistic Missile Treaty',
            'description' => 'ABM Treaty or ABMT was an arms control treaty between the United States and the Soviet Union on the limitation of the anti-ballistic missile (ABM).',
            'author' => 2,
            'text' => $text,
        ]);

        ArticleUpload::create([
            'article_id' => 3,
            'type' => 'thumbnail',
            'path' => 'upload/article/3/thumbnail.jpg',
        ]);

        $text = <<<EOT
            <p><strong>NeXT, Inc.</strong> (later <strong>NeXT Computer, Inc.</strong> and <strong>NeXT Software, Inc.</strong>) was an American technology company that specialized in computer <a title="Workstation" href="https://en.wikipedia.org/wiki/Workstation">workstations</a> intended for <a title="" href="https://en.wikipedia.org/wiki/Higher_education">higher education</a> and business use. Based in <a title="Redwood City, California" href="https://en.wikipedia.org/wiki/Redwood_City,_California">Redwood City, California</a>, and founded by <a title="Apple Inc." href="https://en.wikipedia.org/wiki/Apple_Inc.">Apple Computer</a> co-founder and CEO <a title="Steve Jobs" href="https://en.wikipedia.org/wiki/Steve_Jobs">Steve Jobs</a> after he was forced out of Apple, the company introduced their first product, the <a title="NeXT Computer" href="https://en.wikipedia.org/wiki/NeXT_Computer">NeXT Computer</a>, in 1988, and then the smaller <a title="NeXTcube" href="https://en.wikipedia.org/wiki/NeXTcube">NeXTcube</a> and <a title="NeXTstation" href="https://en.wikipedia.org/wiki/NeXTstation">NeXTstation</a> in 1990. These computers had relatively limited sales, with only about 50,000 units shipped in total. Nevertheless, their <a title="Object-oriented programming" href="https://en.wikipedia.org/wiki/Object-oriented_programming">object-oriented programming</a> and <a title="Graphical user interface" href="https://en.wikipedia.org/wiki/Graphical_user_interface">graphical user interfaces</a> were trendsetters of computer innovation, and highly influential.</p>
            <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/NeXT_logo.svg/220px-NeXT_logo.svg.png" alt="NeXT's logo, a 28&deg; black cube with letters of NeXT engraved in the front" width="220" height="220" data-file-width="300" data-file-height="300" /></p>
            <p>NeXT partnered with <a title="Sun Microsystems" href="https://en.wikipedia.org/wiki/Sun_Microsystems">Sun Microsystems</a> to create a <a class="mw-redirect" title="Application programming interface" href="https://en.wikipedia.org/wiki/Application_programming_interface">programming environment</a> called OpenStep, which was the <a title="NeXTSTEP" href="https://en.wikipedia.org/wiki/NeXTSTEP">NeXTSTEP</a> operating system's application layer hosted on a third-party <a title="Operating system" href="https://en.wikipedia.org/wiki/Operating_system">operating system</a>. In 1993, NeXT withdrew from the hardware industry to concentrate on marketing <a title="OpenStep" href="https://en.wikipedia.org/wiki/OpenStep#OPENSTEP_for_Mach">OPENSTEP for Mach</a>, its own OpenStep implementation, for several <a title="Original equipment manufacturer" href="https://en.wikipedia.org/wiki/Original_equipment_manufacturer">original equipment manufacturers</a> (OEMs). NeXT also developed <a title="WebObjects" href="https://en.wikipedia.org/wiki/WebObjects">WebObjects</a>, one of the first enterprise <a title="Web framework" href="https://en.wikipedia.org/wiki/Web_framework">web application frameworks</a>, and although it was not very popular because of its high price of <a title="United States dollar" href="https://en.wikipedia.org/wiki/United_States_dollar">$</a>50,000, it is a prominent early example of a web server that is based on <a title="Dynamic web page" href="https://en.wikipedia.org/wiki/Dynamic_web_page">dynamic page generation</a> rather than <a class="mw-redirect" title="Static content" href="https://en.wikipedia.org/wiki/Static_content">static content</a>.</p>
            <p><img class="wp-image-6394426 size-full" style="display: block; margin-left: auto; margin-right: auto;" src="https://images.indianexpress.com/2020/05/Steve-Jobs-Tim-Cook.jpg" alt="Steve Jobs, Steve Jobs NeXT, NeXT computer, NeXT Cube, Steve Jobs NeXT failed, NeXT computer company, unknown facts about Steve Jobs" width="273" height="152" data-lazy-loaded="true" /></p>
            <p>Apple purchased NeXT in 1997 for $429 million and 1.5 million shares of Apple stock, and Jobs, the Chairman and CEO of NeXT, was given an advisory role at Apple. Apple also promised that NeXT's operating system would be ported to Macintosh hardware, and combined with the <a title="Classic Mac OS" href="https://en.wikipedia.org/wiki/Classic_Mac_OS">classic Mac OS</a> operating system, which would yield <a class="mw-redirect" title="Mac OS X" href="https://en.wikipedia.org/wiki/Mac_OS_X">Mac OS X</a>, later called macOS.</p>
            <p>&nbsp;</p>
        EOT;

        Article::create([
            'title' => 'NeXT, Inc.',
            'description' => 'Remembering Steve Jobs’ NeXT, a computer company he founded in 1985. Chances are that you’ve never heard of NeXT Inc, a computer company Steve Jobs founded in 1985 after leaving Apple. ',
            'author' => 2,
            'text' => $text,
        ]);

        ArticleUpload::create([
            'article_id' => 4,
            'type' => 'thumbnail',
            'path' => 'upload/article/4/thumbnail.png',
        ]);

        $text = <<<EOT
            <p>Big-game hunter Sanger Rainsford and his friend, Whitney, are traveling to the <a title="Amazon rainforest" href="https://en.wikipedia.org/wiki/Amazon_rainforest">Amazon rainforest</a> for a <a title="Jaguar" href="https://en.wikipedia.org/wiki/Jaguar">jaguar</a> hunt. After a discussion about how they are "the hunters" instead of "the hunted," Whitney goes to bed and Rainsford hears gunshots. He climbs onto the yacht's rail and accidentally falls overboard, swimming to Ship-Trap Island, which is notorious for shipwrecks. On the island, he finds a palatial chateau inhabited by two <a class="mw-redirect" title="Cossack" href="https://en.wikipedia.org/wiki/Cossack">Cossacks</a>: the owner, General Zaroff, and his gigantic <a title="Deaf-mute" href="https://en.wikipedia.org/wiki/Deaf-mute">deaf-mute</a> servant, Ivan.<sup id="cite_ref-10" class="reference"><a href="https://en.wikipedia.org/wiki/The_Most_Dangerous_Game#cite_note-10">[10]</a></sup></p>
            <p>Zaroff, another big-game hunter, knows of Rainsford from his published account of hunting <a title="Snow leopard" href="https://en.wikipedia.org/wiki/Snow_leopard">snow leopards</a> in <a title="Tibet" href="https://en.wikipedia.org/wiki/Tibet">Tibet</a>. Over dinner, the middle-aged Zaroff explains that although he has been hunting animals since he was a boy, he has decided that killing big game has become boring for him, so after escaping the <a title="Russian Revolution" href="https://en.wikipedia.org/wiki/Russian_Revolution">Russian Revolution</a> he moved to Ship-Trap Island, which he has rigged with lights that lure passing ships into the jagged rocks that surround it. He takes the survivors captive and hunts them for sport, giving them food, clothing, a knife, and a three-hour head start, and using only a small-caliber pistol for himself. Any captives who can elude Zaroff, Ivan, and a pack of <a title="Hunting dog" href="https://en.wikipedia.org/wiki/Hunting_dog">hunting dogs</a> for three days are set free. He reveals that he has won every hunt to date. Captives are offered a choice between being hunted or turned over to Ivan, who once served as official <a title="Knout" href="https://en.wikipedia.org/wiki/Knout">knouter</a> for the <a title="Alexander III of Russia" href="https://en.wikipedia.org/wiki/Alexander_III_of_Russia">Great White Czar</a>. Rainsford denounces the hunt as barbarism, but Zaroff replies by claiming that "<a title="Survival of the fittest" href="https://en.wikipedia.org/wiki/Survival_of_the_fittest">life is for the strong</a>." Zaroff is enthused to have another world-class hunter as a companion and, at breakfast, offers to take Rainsford along with him on his next hunt. Rainsford staunchly refuses, disappointing Zaroff who then has another epiphany: he will hunt Rainsford. Zaroff becomes impersonal and lays out the parameters of the game as he would to any captive sailor. He leaves the dining room as Ivan enters with Rainsford's meager gear for the time he'll spend as prey. Realizing he has no way out, Rainsford reluctantly agrees to be hunted.</p>
            <p>During his head start, Rainsford lays an intricate trail in the forest and then climbs a tree. Zaroff finds him easily, but decides to play with him as a cat would with a mouse, standing underneath the tree Rainsford is hiding in, smoking a cigarette, and then abruptly departing. After the failed attempt at eluding Zaroff, Rainsford builds a Malay man-catcher, a <a class="mw-redirect" title="Deadfall trap" href="https://en.wikipedia.org/wiki/Deadfall_trap">weighted log attached to a trigger</a>. This contraption injures Zaroff's shoulder, causing him to return home for the night, but he shouts his respect for the trap before departing. The next day Rainsford creates a <a title="Trapping pit" href="https://en.wikipedia.org/wiki/Trapping_pit">Burmese tiger pit</a>, which kills one of Zaroff's hounds. He sacrifices his knife and ties it to a sapling to make another trap, which kills Ivan when he stumbles into it. To escape Zaroff and his approaching hounds, Rainsford dives off a cliff into the sea; Zaroff, disappointed at Rainsford's apparent suicide, returns home. Zaroff smokes a pipe by his fireplace, but two issues keep him from attaining peace of mind: the difficulty of replacing Ivan and the uncertainty of whether Rainsford perished in his dive.</p>
            <p>Zaroff locks himself in his bedroom and turns on the lights, only to find Rainsford waiting for him; he had swum around the island in order to sneak into the chateau without the dogs finding him. Zaroff congratulates him on winning the "game", but Rainsford decides to fight him, saying he is still a beast-at-bay and that the original hunt is not over. Accepting the challenge, a delighted Zaroff says that the loser will be fed to the dogs, while the winner will sleep in the bed, and then challenges Rainsford to a duel to the death. Then the story abruptly concludes later that night by stating that Rainsford enjoyed the comfort of Zaroff's bed, implying that he won the duel.</p>
            <p>In 1976, Hayes Noel, Bob Gurnsey, and <a title="Charles Gaines (writer)" href="https://en.wikipedia.org/wiki/Charles_Gaines_(writer)">Charles Gaines</a> discussed Gaines's recent trip to Africa and his experiences hunting <a title="African buffalo" href="https://en.wikipedia.org/wiki/African_buffalo">African buffalo</a>. Inspired in part by Gaines's memories and in part by "The Most Dangerous Game", they created <a title="Paintball" href="https://en.wikipedia.org/wiki/Paintball">paintball</a> in 1981.<sup id="cite_ref-11" class="reference"><a href="https://en.wikipedia.org/wiki/The_Most_Dangerous_Game#cite_note-11">[11]</a></sup></p>
            <p>There is a possible reference to "The Most Dangerous Game" in letters that the <a title="Zodiac Killer" href="https://en.wikipedia.org/wiki/Zodiac_Killer">Zodiac Killer</a> wrote to newspapers in the <a title="San Francisco Bay Area" href="https://en.wikipedia.org/wiki/San_Francisco_Bay_Area">San Francisco Bay Area</a> in his three-part cipher: "Man is the most dangerous animal of all to kill", though he may have come up with the idea independently.<sup id="cite_ref-12" class="reference"><a href="https://en.wikipedia.org/wiki/The_Most_Dangerous_Game#cite_note-12">[12]</a></sup> The 1932 film version of <em><a title="The Most Dangerous Game (1932 film)" href="https://en.wikipedia.org/wiki/The_Most_Dangerous_Game_(1932_film)">The Most Dangerous Game</a></em> is mentioned a number of times in the 2007 film, <em><a title="Zodiac (film)" href="https://en.wikipedia.org/wiki/Zodiac_(film)">Zodiac</a></em>, a fictionalized depiction of the Zodiac Killer.<sup id="cite_ref-13" class="reference"><a href="https://en.wikipedia.org/wiki/The_Most_Dangerous_Game#cite_note-13">[13]</a></sup></p>
            <p><img class="transparent" style="display: block; margin-left: auto; margin-right: auto;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Colliers11924b.png/166px-Colliers11924b.png" alt="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Colliers11924b.png/166px-Colliers11924b.png" /><img style="display: block; margin-left: auto; margin-right: auto;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/ConnellColliers22.jpg/143px-ConnellColliers22.jpg" alt="The story first appeared in the January 19, 1924 issue of Collier's." width="143" height="200" data-file-width="825" data-file-height="1150" /></p>
        EOT;

        Article::create([
            'title' => 'The Most Dangerous Game by Richard Connell',
            'description' => '"The Most Dangerous Game", also published as "The Hounds of Zaroff", is a short story by Richard Connell,[1] first published in Collier\'s on January 19, 1924, with illustrations by Wilmot Emerton Heitland.',
            'author' => 2,
            'text' => $text,
        ]);

        ArticleUpload::create([
            'article_id' => 5,
            'type' => 'thumbnail',
            'path' => 'upload/article/5/thumbnail.png',
        ]);
    }
}