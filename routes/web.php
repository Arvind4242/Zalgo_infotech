<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomeController;
use App\Http\Controllers\FrontendController\PageController;
// use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\JobApplicationController as AdminJobController;

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/thankyou', [ContactController::class, 'thankYou'])->name('thankyou.page');

// Route::get('/admin/login', [AuthController::class, 'loginForm'])
//     ->name('admin.login');

// Route::post('/admin/login', [AuthController::class, 'login'])
//     ->name('admin.login.submit');

// Route::post('/admin/logout', [AuthController::class, 'logout'])
//     ->name('admin.logout');

// /* ================= ADMIN PROTECTED ================= */

// Route::prefix('admin')
//     ->middleware('admin.auth')
//     ->group(function () {

//         Route::get('/applications', [AdminJobController::class, 'index'])
//             ->name('admin.applications');

//         Route::get('/applications/{id}', [AdminJobController::class, 'show'])
//             ->name('admin.applications.show');

//         Route::post('/applications/{id}/status', [AdminJobController::class, 'updateStatus'])
//             ->name('admin.applications.status');

//         Route::delete('/applications/{id}', [AdminJobController::class, 'destroy'])
//             ->name('admin.applications.delete');
// });
/**
 *    Frontend
 */

// All Index Pages Routing



Route::post('/apply', [JobApplicationController::class, 'store'])
    ->name('job.apply');

Route::get('/register', [PageController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::view('/privacy-policy', 'privacy-policy')->name('privacy');
Route::view('/cookie-policy', 'cookie-policy')->name('cookie');


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
    // Route::get('register', 'register')->name('register');
    
    // Shop
    Route::get('shop', 'shop')->name('shop');
    Route::get('shop-details', 'shopDetails')->name('shop.details');
    Route::get('cart', 'cart')->name('cart');
    Route::get('checkout', 'checkout')->name('checkout');
    Route::get('testimonial', 'testimonial')->name('testimonial');

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
    Route::get('webdesign', 'webDesigns')->name('web.design');
    Route::get('industry', 'industry')->name('industry');
    Route::get('web-development', 'webDevelopment')->name('web.development');
    Route::get('cmsdevelopment', 'cmsDevelopment')->name('cms.development');
    Route::get('reactjsdevelopment', 'ReactJSDevelopment')->name('react.development');
    Route::get('shopify', 'shopifyDevelopment')->name('shopify.development');
    Route::get('nodejs', 'NodejsDevelopment')->name('nodejs.development');
    Route::get('wordpressdevelopment', 'WordpressDevelopment')->name('wordpressdevelopment.development');
    Route::get('ecommerce', 'ecommerceDevelopment')->name('ecommerce.development');
    Route::get('python', 'pythonDevelopment')->name('python.development');
    Route::get('aidevelopement', 'aiDevelopment')->name('ai.development');
    Route::get('laravel', 'laravelDevelopment')->name('laravel.development');
    Route::get('maintenanceservices', 'maintenanceServices')->name('maintenanceservices.development');
    Route::get('seoservices', 'seoServices')->name('seoservices.development');
    Route::get('digitalservices', 'digitalMarketing')->name('digitalservices.development');
    Route::get('culturevalue', 'CultureValue')->name('culture-value');
    Route::get('lifezalgo', 'LifeZalgo')->name('life-zalgoinfotech');

    // Hire Devlopers Pages
    Route::get('hirewebdeveloper', 'hireWebdeveloper')->name('hireweb.developer');
    Route::get('hirewordpressdeveloper', 'hireWordpressdeveloper')->name('hirewordpressdeveloper');
    Route::get('hirelaraveldeveloper', 'hireLaraveldeveloper')->name('hirelaraveldeveloper');
    Route::get('hirenodejsdeveloper', 'hireNodejsdeveloper')->name('hirenodejsdeveloper');
    Route::get('hirephpdeveloper', 'hirePHPdeveloper')->name('hirephpdeveloper');
    Route::get('hireaideveloper', 'hireAideveloper')->name('hireaideveloper');
    Route::get('hirereactjsdeveloper', 'hireReactjsdeveloper')->name('hirereactjsdeveloper');
    Route::get('hirenextjsdeveloper', 'hireNextjsdeveloper')->name('hirenextjsdeveloper');
    Route::get('hirepythondeveloper', 'hirePythondeveloper')->name('hirepythondeveloper');


    //Case Study
    Route::get('bioage', 'BioAge')->name('bioage');
    Route::get('career', 'career')->name('career');
    Route::get('experthe', 'Experthe')->name('experthe');
    Route::get('dobramoc', 'Dobramoc')->name('dobramoc');
    Route::get('lifetreeanatomical', 'Lifetreeanatomical')->name('lifetreeanatomical');
    Route::get('towelsoutlet', 'Towelsoutlet')->name('towelsoutlet');
    Route::get('awakeningthegeniuswithin', 'Awakeningthegeniuswithin')->name('awakeningthegeniuswithin');
    Route::get('financemanagertraining', 'FinanceManagerTraining')->name('financemanagertraining');

    // Blog
    Route::get('blog', 'blog')->name('blog');
    Route::get('casestudy', 'casestudy')->name('casestudy');
    Route::get('blog-details', 'blogDetails')->name('blog.details');

    // Contact
    Route::get('contact', 'contact')->name('contact');
});
