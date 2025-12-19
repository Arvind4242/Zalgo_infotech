<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomeController;
use App\Http\Controllers\FrontendController\PageController;

/**
 *    Frontend
 */

// All Index Pages Routing
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'indexOne')->name('home');
    Route::get('index-two', 'indexTwo')->name('indexTwo');
    Route::get('index-three', 'indexThree')->name('indexThree');
    Route::get('index-four', 'indexFour')->name('indexFour');
    Route::get('index-five', 'indexFive')->name('indexFive');
});

// Other Pages Routing
Route::controller(PageController::class)->group(function () {
    // Authentication
    Route::get('login', 'login')->name('login');
    Route::get('register', 'register')->name('register');
    
    // Shop
    Route::get('shop', 'shop')->name('shop');
    Route::get('shop-details', 'shopDetails')->name('shop.details');
    Route::get('cart', 'cart')->name('cart');
    Route::get('checkout', 'checkout')->name('checkout');

    // Portfolio
    Route::get('portfolio', 'portfolio')->name('portfolio');

    // Pages
    Route::get('pricing', 'pricing')->name('pricing');
    Route::get('about-us', 'about')->name('about');
    Route::get('app-intigration', 'appIntigration')->name('app.intigration');
    Route::get('intigration-details', 'intigrationDetails')->name('intigration.details');
    Route::get('policy-privacy', 'policyPrivacy')->name('policy.privacy');
    Route::get('faq', 'faq')->name('faq');
    Route::get('project-details', 'projectDetails')->name('project.details');
    Route::get('service-details', 'serviceDetails')->name('service.details');

    // Blog
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-details', 'blogDetails')->name('blog.details');

    // Contact
    Route::get('contact', 'contact')->name('contact');
});
