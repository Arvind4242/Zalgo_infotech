<!-- navbar Start -->
@include('frontend.includes.partials.navbar')
<!-- navbar end -->

<div id="smooth-wrapper">

    

    <!-- Header Start Here -->
    <header class="header bg-white transition-all">

        <!-- Top Header Start -->
        <div class="bg-main-600 header-top-bar tw-py-205 d-sm-block d-none">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <p class="text-white bg-white-13 d-inline-block tw-py-1 tw-px-5 rounded-pill fw-normal">
                        Delivering reliable IT solutions tailored for growing businesses worldwide
                    </p>
                </div>
            </div>
        </div>
        <!-- Top Header End -->

        <div class="container container-two">
            <nav class="d-flex align-items-center justify-content-between position-relative">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="{{route('home')}}" class="link hover--translate-y-1 active--translate-y-scale-9">
                        <img src="{{asset('assets/images/logo/zalgo_logo.png')}}" alt="Logo" class="max-w-200-px">
                    </a>
                </div>
                <!-- Logo End  -->

                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    <!-- Nav menu Start -->
                    <ul class="nav-menu d-lg-flex align-items-center tw-gap-14">
                        <li class="nav-menu__item  position-relative">
                            <a href="{{route('about')}}" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100"> About Us</a>

                        </li>
                        <li class="nav-menu__item activePage">
                            <a href="{{route('industry')}}" class="nav-menu__link  tw-pe-5 hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100">Industry</a>
                        </li>
                        <li class="nav-menu__item has-submenu">
                            <a href="javascript:void(0)" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Our Services</a>
                                <div class="new-header-mega-menu-inner nav-submenu scroll-sm">
                                    <div class="new-header-mega-menu-wrap-inner menu-list-item-main">
                                        <div class="new-header-mega-menu-about-company menu-list-item-inner">
                                            <div class="new-header-mega-heading h3">
                                                <a href="#">Web &amp; CMS Development</a>
                                            </div>
                                            <ul class="new-header-mega-list-wrap">
                                                <li class="wordpress"><a href="{{route('wordpress.development')}}">WordPress Web Development</a> </li>
                                                <li class="php"><a href="#">PHP Web Development</a></li>
                                                <li class="laravel"><a href="#">Laravel Web Development</a> </li>
                                                <li class="api"><a href="#">Web API Development</a> </li>
                                                <li class="drupal"><a href="#">Drupal Development</a> </li>
                                            </ul>
                                        </div>
                                        <div class="new-header-mega-menu-about-company menu-list-item-inner">
                                            <div class="new-header-mega-heading h3">
                                                <a href="#">E-Commerce Development</a>
                                            </div>
                                            <ul class="new-header-mega-list-wrap">
                                                <li class="marketplace"><a href="#">Marketplace Development</a></li>
                                                <li class="woocommerce"><a href="#">WooCommerce Development</a></li>
                                                <li class="shopify"><a href="#">Shopify Web Development</a></li>
                                            </ul>
                                        </div>
                                        <div class="new-header-mega-menu-about-company menu-list-item-inner">
                                            <div class="new-header-mega-heading h3">
                                                <a href="#">Designing Services</a>
                                            </div>
                                            <ul class="new-header-mega-list-wrap">
                                                <li><a href="#">Website Design</a></li>
                                                <li><a href="#">WordPress Theme Design</a></li>
                                            </ul>
                                        </div>
                                        <div class="new-header-mega-menu-about-company menu-list-item-inner">
                                            <div class="new-header-mega-heading h3"><a href="#">Plugin Development</a></div>
                                            <ul class="new-header-mega-list-wrap">
                                                <li><a href="#">WordPress Plugin Development</a></li>
                                                <li><a href="#">WooCommerce Plugin Development</a> </li>
                                                <li><a href="#">EDD Plugin Development Services</a> </li>
                                            </ul>
                                        </div>
                                        <div class="new-header-mega-menu-about-company menu-list-item-inner">
                                            <div class="new-header-mega-heading h3">
                                                <a href="#">Digital Marketing</a>
                                            </div>
                                            <ul class="new-header-mega-list-wrap">
                                                <li class="seo"><a href="#">SEO Services</a></li>
                                                <li class="internet-marketing"><a href="#">Internet Marketing</a></li>
                                                <li class="ppc"><a href="#">PPC Services</a></li>
                                            </ul>
                                        </div>
                                        <div class="new-header-mega-menu-about-company menu-list-item-inner">
                                            <div class="new-header-mega-heading h3"><a href="#">Open Source Development</a></div>
                                            <ul class="new-header-mega-list-wrap">
                                                <li class="angular"><a href="#">AngularJS Development Services</a></li>
                                                <li class="node"><a href="#">Node.js Development</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                <div class="new-header-menu-get-touch-inner">
                                    <div class="text-white h3 new-header-mega-heading">GET IN TOUCH</div>
                                    <div class="new-header-menu-get-touch-wrap">
                                        <div class="new-header-menu-get-touch-mail"><img src="{{asset('assets/images/Group-1-1.svg')}}" alt="gmail-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner"> 
                                                <a class="text-white body-semibold" href="mailto:zalgoinfotec@gmail.com">zalgoinfotec@gmail.com</a>
                                                <a class="text-white body-semibold" href="mailto:zalgoinfotec@gmail.com">zalgoinfotec@gmail.com</a>
                                            </div>
                                        </div>
                                        <div class="new-header-menu-get-touch-mail">
                                            <img src="{{asset('assets/images/phone.svg')}}" alt="phone-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner">
                                                <a class="text-white body-semibold" href="tel:+919244213326">
                                                    <img src="{{asset('assets/images/Group-3.webp')}}" alt="india-flag" class="site-country-flag" loading="lazy"> +91 9244213326
                                                </a>
                                                <a class="text-white body-semibold" href="tel:+919244213326">
                                                    <img src="{{asset('assets/images/Group-4.webp')}}" alt="usa-flag" class="site-country-flag" loading="lazy"> +91 9244213326
                                                </a>
                                            </div>
                                        </div>
                                        <div class="new-header-menu-get-touch-mail">
                                            <img src="{{asset('assets/images/On-hover-Menubar.svg')}}" alt="skype-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner">
                                                <a class="text-white body-semibold" href="#">zalgoinfotech</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </li>
                        <li class="nav-menu__item has-submenu">
                            <a href="javascript:void(0)"
                                class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Hire Developers</a>
                                <div class="new-header-mega-menu-inner">
                                    <div class="new-header-mega-menu-wrap-inner">
                                        <div class="new-header-mega-menu-about-company new-header-mega-menu-hiring-wrap">
                                            <div class="new-header-mega-heading h3">
                                                <a href="#">Hire Dedicated Developers</a></div>
                                            <ul class="new-header-mega-list-wrap">
                                                <li>
                                                    <a href="#">Hire Web Developers</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('hire.php')}}">Hire PHP Developers</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('hire.php')}}">Hire WordPress Developers</a> </li>
                                                <li>
                                                    <a href="#">Hire CodeIgniter Developers</a> </li>
                                                <li>
                                                    <a href="#">Hire Laravel Developers</a> </li>
                                                <li>
                                                    <a href="#">Hire ReactJS Developers</a> </li>
                                                <li>
                                                    <a href="#">Hire Node.js Developers</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                <div class="new-header-menu-get-touch-inner">
                                    <div class="text-white h3 new-header-mega-heading">GET IN TOUCH</div>
                                    <div class="new-header-menu-get-touch-wrap">
                                        <div class="new-header-menu-get-touch-mail"><img src="{{asset('assets/images/Group-1-1.svg')}}" alt="gmail-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner"> 
                                                <a class="text-white body-semibold" href="mailto:zalgoinfotec@gmail.com">zalgoinfotec@gmail.com</a>
                                                <a class="text-white body-semibold" href="mailto:zalgoinfotec@gmail.com">zalgoinfotec@gmail.com</a>
                                            </div>
                                        </div>
                                        <div class="new-header-menu-get-touch-mail">
                                            <img src="{{asset('assets/images/phone.svg')}}" alt="phone-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner">
                                                <a class="text-white body-semibold" href="tel:+919244213326">
                                                    <img src="{{asset('assets/images/Group-3.webp')}}" alt="india-flag" class="site-country-flag" loading="lazy"> +91 9244213326
                                                </a>
                                                <a class="text-white body-semibold" href="tel:+919244213326">
                                                    <img src="{{asset('assets/images/Group-4.webp')}}" alt="usa-flag" class="site-country-flag" loading="lazy"> +91 9244213326
                                                </a>
                                            </div>
                                        </div>
                                        <div class="new-header-menu-get-touch-mail">
                                            <img src="{{asset('assets/images/On-hover-Menubar.svg')}}" alt="skype-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner">
                                                <a class="text-white body-semibold" href="#">zalgoinfotech</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{route('blog')}}"
                                class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Blog</a>
                        </li>
                       
                    </ul>
                    <!-- Nav menu End  -->

                </div>
                <!-- Menu End  -->

                <!-- Header Right start -->
                <div class="d-flex align-items-center tw-gap-6">
                    <a href="{{route('contact')}}"
                        class="hover--translate-y-1 btn active--translate-y-scale-9 btn-main-two hover-style-two button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-4 fw-semibold"
                        data-block="button">
                        <span class="button__flair"></span>
                        <span class="button__label">Contact Us</span>
                    </a>
                    <button type="button"
                        class="toggle-mobileMenu leading-none d-lg-none text-neutral-800 tw-text-9">
                        <i class="ph ph-list"></i>
                    </button>
                </div>
                <!-- Header Right End  -->
            </nav>
        </div>
    </header>
    <!-- Header End Here -->