<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Login 
    public function login()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.login', compact('bodyClass'));
    }

    // Register 
    public function register()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.register', compact('bodyClass'));
    }

    // Shop
    public function shop()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.shop', compact('bodyClass'));
    }

    // Shop Details
    public function shopDetails()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.shopDetails', compact('bodyClass'));
    }

    // Cart
    public function cart()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.cart', compact('bodyClass'));
    }

    // Checkout
    public function checkout()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.checkout', compact('bodyClass'));
    }

    // Pricing
    public function pricing()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.pricing', compact('bodyClass'));
    }

    // About
    public function about()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.about', compact('bodyClass'));
    }

    // App Intigration
    public function appIntigration()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.appIntigration', compact('bodyClass'));
    }

    // Policy Privacy
    public function policyPrivacy()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.policyPrivacy', compact('bodyClass'));
    }

    // Faq
    public function faq()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.faq', compact('bodyClass'));
    }

    // Project Details
    public function projectDetails()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.projectDetails', compact('bodyClass'));
    }

    // Service Details
    public function serviceDetails()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.serviceDetails', compact('bodyClass'));
    }

    // Blog
    public function blog()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.blog', compact('bodyClass'));
    }

    // Blog Details
    public function blogDetails()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.blogDetails', compact('bodyClass'));
    }

    // Contact 
    public function contact()
    {
        $bodyClass = 'home-one';
        return view('frontend.pages.contact', compact('bodyClass'));
    }
}
