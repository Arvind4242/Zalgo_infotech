<!-- navbar Start -->
@include('frontend.includes.partials.navbar')
<!-- navbar end -->

<div id="smooth-wrapper">

    <!-- Top Header Start -->
    <div class="bg-main-600 tw-py-205 d-sm-block d-none">
        <div class="container">
            <div class="d-flex justify-content-center">
                <p class="text-white bg-white-13 d-inline-block tw-py-1 tw-px-5 rounded-pill fw-normal">
                    We're introducing an exceptionally crafted UI/UX template on ThemeForest, designed to deliver outstanding conversion results!
                </p>
            </div>
        </div>
    </div>
    <!-- Top Header End -->

    <!-- Header Start Here -->
    <header class="header bg-white transition-all">
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
                        <li class="nav-menu__item activePage">
                            <a href="javascript:void(0)" class="nav-menu__link  tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Home</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{route('about')}}" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100"> About Us</a>
                        </li>
                        <li class="nav-menu__item activePage">
                            <a href="javascript:void(0)" class="nav-menu__link  tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Industry</a>
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
                                                <li><a href="#">WordPress Web Development</a> </li>
                                                <li><a href="#">PHP Web Development</a></li>
                                                <li><a href="#">Laravel Web Development</a> </li>
                                                <li><a href="#">Web API Development</a> </li>
                                                <li><a href="#">Drupal Development</a> </li>
                                            </ul>
                                        </div>
                                        <div class="new-header-mega-menu-about-company menu-list-item-inner">
                                            <div class="new-header-mega-heading h3">
                                                <a href="#">E-Commerce Development</a>
                                            </div>
                                            <ul class="new-header-mega-list-wrap">
                                                <li><a href="#">Marketplace Development</a></li>
                                                <li><a href="#">WooCommerce Development</a></li>
                                                <li><a href="#">Shopify Web Development</a></li>
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
                                                <li><a href="#">SEO Services</a></li>
                                                <li><a href="#">Internet Marketing</a></li>
                                                <li><a href="#">PPC Services</a></li>
                                            </ul>
                                        </div>
                                        <div class="new-header-mega-menu-about-company menu-list-item-inner">
                                            <div class="new-header-mega-heading h3"><a href="#">Open Source Development</a></div>
                                            <ul class="new-header-mega-list-wrap">
                                                <li><a href="#">AngularJS Development Services</a></li>
                                                <li><a href="#">Node.js Development</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                <div class="new-header-menu-get-touch-inner">
                                    <div class="h3 new-header-mega-heading">GET IN TOUCH</div>
                                    <div class="new-header-menu-get-touch-wrap">
                                        <div class="new-header-menu-get-touch-mail"><img src="{{asset('assets/images/Group-1-1.svg')}}" alt="gmail-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner"> 
                                                    <a class="body-semibold" href="mailto:biz@worldwebtechnology.com">biz@worldwebtechnology.com</a>
                                                    <a class="body-semibold" href="mailto:career@worldwebtechnology.com">career@worldwebtechnology.com</a></div>
                                        </div>
                                        <div class="new-header-menu-get-touch-mail">
                                            <img src="{{asset('assets/images/phone.svg')}}" alt="phone-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner">
                                                <a class="body-semibold" href="tel:+917940086872">
                                                    <img src="{{asset('assets/images/Group-3.webp')}}" alt="india-flag" class="site-country-flag" loading="lazy"> +91 (79) 4008 6872
                                                </a>
                                                <a class="body-semibold" href="tel:+16465832776">
                                                    <img src="{{asset('assets/images/Group-4.webp')}}" alt="usa-flag" class="site-country-flag" loading="lazy"> +1 646 583 2776
                                                </a>
                                            </div>
                                        </div>
                                        <div class="new-header-menu-get-touch-mail">
                                            <img src="https://www.worldwebtechnology.com/wp-content/uploads/2025/06/On-hover-Menubar.svg" alt="skype-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner">
                                                <a class="body-semibold" href="msteams:/l/chat/0/0?users=info@worldwebtechnology.com">worldwebtechnology</a> 
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
                                                    <a href="#">Hire PHP Developers</a>
                                                </li>
                                                <li>
                                                    <a href="#">Hire WordPress Developers</a> </li>
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
                                    <div class="h3 new-header-mega-heading">GET IN TOUCH</div>
                                    <div class="new-header-menu-get-touch-wrap">
                                        <div class="new-header-menu-get-touch-mail"><img src="{{asset('assets/images/Group-1-1.svg')}}" alt="gmail-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner"> 
                                                    <a class="body-semibold" href="mailto:biz@worldwebtechnology.com">biz@worldwebtechnology.com</a>
                                                    <a class="body-semibold" href="mailto:career@worldwebtechnology.com">career@worldwebtechnology.com</a></div>
                                        </div>
                                        <div class="new-header-menu-get-touch-mail">
                                            <img src="{{asset('assets/images/phone.svg')}}" alt="phone-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner">
                                                <a class="body-semibold" href="tel:+917940086872">
                                                    <img src="{{asset('assets/images/Group-3.webp')}}" alt="india-flag" class="site-country-flag" loading="lazy"> +91 (79) 4008 6872
                                                </a>
                                                <a class="body-semibold" href="tel:+16465832776">
                                                    <img src="{{asset('assets/images/Group-4.webp')}}" alt="usa-flag" class="site-country-flag" loading="lazy"> +1 646 583 2776
                                                </a>
                                            </div>
                                        </div>
                                        <div class="new-header-menu-get-touch-mail">
                                            <img src="https://www.worldwebtechnology.com/wp-content/uploads/2025/06/On-hover-Menubar.svg" alt="skype-icon" loading="lazy">
                                            <div class="new-header-menu-get-touch-mail-inner">
                                                <a class="body-semibold" href="msteams:/l/chat/0/0?users=info@worldwebtechnology.com">worldwebtechnology</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-menu__item">
                            <a href="javascript:void(0)"
                                class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Blog</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{route('contact')}}"
                                class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100">Contact</a>
                        </li>
                    </ul>
                    <!-- Nav menu End  -->

                </div>
                <!-- Menu End  -->

                <!-- Header Right start -->
                <div class="d-flex align-items-center tw-gap-6">
                    <a href="{{route('contact')}}"
                        class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-4 fw-semibold"
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