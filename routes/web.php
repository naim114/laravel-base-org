<?php

use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 *  ban - route to redirect to if user status is Banned
 */
Route::get('/ban', function () {
    return view('errors.ban');
})->name('ban');

/**
 *  home - route to homepage
 */
Route::get(
    '/',
    [HomeController::class, 'view_home']
)->name('main.home');

// Route::get(
//     '/en/home',
//     [HomeController::class, 'view_home']
// )->name('main.home');

Route::get(
    '/en/about/organization',
    [HomeController::class, 'view_org']
)->name('main.about.organization');

Route::get(
    '/en/about/history',
    [HomeController::class, 'view_history'],
)->name('main.about.history');

Route::get(
    '/en/about/committee',
    [HomeController::class, 'view_committee'],
)->name('main.about.committee');

Route::get(
    '/en/news',
    [HomeController::class, 'view_news'],
)->name('main.news');

Route::get(
    '/en/article',
    [HomeController::class, 'view_article'],
)->name('main.article');

Route::get(
    '/en/join/form',
    [HomeController::class, 'view_form'],
)->name('main.join.form');

Route::get(
    '/en/join/membership',
    [HomeController::class, 'view_membership'],
)->name('main.join.membership');

Route::get(
    '/en/join/donate',
    [HomeController::class, 'view_donate'],
)->name('main.join.donate');

Route::get(
    '/en/contact',
    [HomeController::class, 'view_contact'],
)->name('main.contact');

// ======================================================================================== //
// Auth Routes
// generated from laravel/ui package
// php artisan route:list to see if the routes is really there
// ======================================================================================== //

Auth::routes();

// ======================================================================================== //
// Authorised (Logged In) Routes
// only authorised user can access these route
// ======================================================================================== //

Route::group(['middleware' => ['auth', 'status']], function () {
    /**
     *  test - test route
     */
    Route::get(
        '/test/{id}',
        [TestController::class, 'index']
    )->name('test')->middleware('permissions:users.activity');

    /**
     *  dashboard - view apps data/stats
     */
    Route::get(
        '/dashboard',
        [DashboardController::class, 'index']
    )->name('dashboard')->middleware('auth');;


    /**
     *  profile - manage personal profile
     */
    Route::get(
        '/profile',
        [ProfileController::class, 'index']
    )->name('profile')->middleware('auth');

    Route::post(
        '/avatar',
        [ProfileController::class, 'storeAvatar']
    )->name('profile.avatar')->middleware('auth');

    Route::post(
        '/update/profile',
        [ProfileController::class, 'updateProfile']
    )->name('profile.update_profile')->middleware('auth');

    Route::post(
        '/update/auth',
        [ProfileController::class, 'updateAuth']
    )->name('profile.update_auth')->middleware('auth');

    /**
     *  activity - personal activity log
     */
    Route::get(
        '/activity',
        [ActivityLogController::class, 'index']
    )->name('activity')->middleware('auth');

    /**
     *  users - manage users
     */
    Route::get(
        '/users',
        [UsersController::class, 'index']
    )->name('users')->middleware('permissions:users.manage');

    Route::get(
        '/users/{action}/{id}',
        [UsersController::class, 'view']
    )->name('users.view')->middleware('permissions:users.manage');

    Route::post(
        '/users/add',
        [UsersController::class, 'add']
    )->name('users.add')->middleware('permissions:users.manage');

    Route::post(
        '/users/avatar',
        [UsersController::class, 'avatar']
    )->name('users.avatar')->middleware('permissions:users.manage');

    Route::post(
        '/users/edit',
        [UsersController::class, 'edit']
    )->name('users.edit')->middleware('permissions:users.manage');

    Route::post(
        '/users/ban',
        [UsersController::class, 'ban']
    )->name('users.ban')->middleware('permissions:users.manage');

    Route::post(
        '/users/delete',
        [UsersController::class, 'delete']
    )->name('users.delete')->middleware('permissions:users.manage');

    // all user
    Route::get(
        '/users/activity',
        [UsersController::class, 'activityAll']
    )->name('users.users_activity')->middleware('permissions:users.activity');

    /**
     *  roles - manage roles
     */
    Route::get(
        '/roles',
        [RoleController::class, 'index']
    )->name('roles')->middleware('permissions:roles.manage');

    Route::post(
        '/roles/add',
        [RoleController::class, 'add']
    )->name('roles.add')->middleware('permissions:roles.manage');

    Route::post(
        '/roles/edit',
        [RoleController::class, 'edit']
    )->name('roles.edit')->middleware('permissions:roles.manage');

    Route::post(
        '/roles/delete',
        [RoleController::class, 'delete']
    )->name('roles.delete')->middleware('permissions:roles.manage');

    /**
     *  permissions - manage permissions
     */
    Route::get(
        '/permissions',
        [PermissionController::class, 'index']
    )->name('permissions')->middleware('permissions:permissions.manage');

    Route::post(
        '/permissions/add',
        [PermissionController::class, 'add']
    )->name('permissions.add')->middleware('permissions:permissions.manage');

    Route::post(
        '/permissions/edit',
        [PermissionController::class, 'edit']
    )->name('permissions.edit')->middleware('permissions:permissions.manage');

    Route::post(
        '/permissions/delete',
        [PermissionController::class, 'delete']
    )->name('permissions.delete')->middleware('permissions:permissions.manage');

    Route::get(
        '/permissions/role/view/{id}',
        [PermissionController::class, 'permission_role']
    )->name('permissions_role')->middleware('permissions:permissions.manage');

    Route::post(
        '/permissions/role/add',
        [PermissionController::class, 'permission_role_add']
    )->name('permissions_role.add')->middleware('permissions:permissions.manage');

    Route::post(
        '/permissions/role/delete',
        [PermissionController::class, 'permission_role_delete']
    )->name('permissions_role.delete')->middleware('permissions:permissions.manage');

    /**
     *  settings - manage settings
     */
    Route::get(
        '/settings',
        [SettingsController::class, 'index']
    )->name('settings')->middleware('permissions:settings.general');

    Route::post(
        '/settings/update',
        [SettingsController::class, 'update']
    )->name('settings.update')->middleware('permissions:settings.general');

    Route::post(
        '/settings/color',
        [SettingsController::class, 'color']
    )->name('settings.color')->middleware('permissions:settings.general');

    Route::post(
        '/settings/color/default',
        [SettingsController::class, 'color_default']
    )->name('settings.color.default')->middleware('permissions:settings.general');

    Route::post(
        '/settings/wallpaper/auth',
        [SettingsController::class, 'wallpaper_auth']
    )->name('settings.wallpaper.auth')->middleware('permissions:settings.general');

    Route::post(
        '/settings/logo',
        [SettingsController::class, 'logo']
    )->name('settings.logo')->middleware('permissions:settings.general');

    Route::post(
        '/settings/favicon',
        [SettingsController::class, 'favicon']
    )->name('settings.favicon')->middleware('permissions:settings.general');

    /**
     *  main - manage main/home settings
     */
    Route::get(
        '/main/home',
        [HomeController::class, 'home']
    )->name('main.settings.home')->middleware('permissions:main.manage');

    Route::post(
        '/main/home/hero/update',
        [HomeController::class, 'hero_update']
    )->name('main.settings.home.update')->middleware('permissions:main.manage');

    Route::post(
        '/main/home/hero/bg',
        [HomeController::class, 'hero_bg_update']
    )->name('main.settings.home.bg')->middleware('permissions:main.manage');

    Route::post(
        '/main/home/news/update',
        [HomeController::class, 'news_update']
    )->name('main.settings.news.update')->middleware('permissions:main.manage');

    Route::post(
        '/main/home/gallery/update',
        [HomeController::class, 'gallery_update']
    )->name('main.settings.gallery.update')->middleware('permissions:main.manage');

    Route::post(
        '/main/home/gallery/images',
        [HomeController::class, 'gallery_img_update']
    )->name('main.settings.gallery.images')->middleware('permissions:main.manage');

    Route::post(
        '/main/home/quote/add',
        [HomeController::class, 'quote_add']
    )->name('main.settings.quote.add')->middleware('permissions:main.manage');

    Route::post(
        '/main/home/quote/delete',
        [HomeController::class, 'quote_delete']
    )->name('main.settings.quote.delete')->middleware('permissions:main.manage');

    Route::post(
        '/main/home/quote/bg',
        [HomeController::class, 'quote_bg_update']
    )->name('main.settings.quote.bg')->middleware('permissions:main.manage');

    Route::post(
        '/main/home/donate/update',
        [HomeController::class, 'donate_update']
    )->name('main.settings.donate.update')->middleware('permissions:main.manage');

    Route::get(
        '/main/about/organization',
        [HomeController::class, 'organization']
    )->name('main.settings.organization')->middleware('permissions:main.manage');

    Route::get(
        '/main/about/history',
        [HomeController::class, 'history']
    )->name('main.settings.history')->middleware('permissions:main.manage');

    Route::get(
        '/main/about/committee',
        [HomeController::class, 'committee']
    )->name('main.settings.comittee')->middleware('permissions:main.manage');

    Route::post(
        '/main/about/committee/add',
        [HomeController::class, 'committee_add']
    )->name('main.settings.comittee.add')->middleware('permissions:main.manage');

    Route::post(
        '/main/about/committee/update',
        [HomeController::class, 'committee_update']
    )->name('main.settings.comittee.update')->middleware('permissions:main.manage');

    Route::post(
        '/main/about/committee/delete',
        [HomeController::class, 'committee_delete']
    )->name('main.settings.comittee.delete')->middleware('permissions:main.manage');

    Route::get(
        '/main/news',
        [HomeController::class, 'news']
    )->name('main.settings.news')->middleware('permissions:main.manage');

    Route::get(
        '/main/article/view/{id}',
        [HomeController::class, 'article_view']
    )->name('main.settings.article.view')->middleware('permissions:main.manage');

    Route::post(
        '/main/article/add',
        [HomeController::class, 'article_add']
    )->name('main.settings.article.add')->middleware('permissions:main.manage');

    Route::post(
        '/main/article/update',
        [HomeController::class, 'article_update']
    )->name('main.settings.article.update')->middleware('permissions:main.manage');

    Route::post(
        '/main/article/delete',
        [HomeController::class, 'article_delete']
    )->name('main.settings.article.delete')->middleware('permissions:main.manage');

    Route::get(
        '/main/join/form',
        [HomeController::class, 'form']
    )->name('main.settings.form')->middleware('permissions:main.manage');

    Route::post(
        '/main/join/form/add',
        [HomeController::class, 'form_add']
    )->name('main.settings.form.add')->middleware('permissions:main.manage');

    Route::post(
        '/main/join/form/delete',
        [HomeController::class, 'form_delete']
    )->name('main.settings.form.delete')->middleware('permissions:main.manage');

    Route::get(
        '/main/join/donate',
        [HomeController::class, 'donate']
    )->name('main.settings.donate')->middleware('permissions:main.manage');

    Route::get(
        '/main/contact',
        [HomeController::class, 'contact']
    )->name('main.settings.contact')->middleware('permissions:main.manage');

    Route::post(
        '/main/contact/update',
        [HomeController::class, 'contact_update']
    )->name('main.settings.contact.update')->middleware('permissions:main.manage');

    Route::post(
        '/main/useful-link/add',
        [HomeController::class, 'link_add']
    )->name('main.settings.link.add')->middleware('permissions:main.manage');

    Route::post(
        '/main/useful-link/delete',
        [HomeController::class, 'link_delete']
    )->name('main.settings.link.delete')->middleware('permissions:main.manage');
});