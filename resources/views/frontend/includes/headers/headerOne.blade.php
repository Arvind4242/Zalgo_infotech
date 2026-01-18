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
                                    <div class="align-items-center mega-inner">
                                        <!-- Column 1 -->
                                        <div class="mega-col">

                                            <a class="mega-item">
                                                <span class="icon">🏠</span>
                                                <div>
                                                    <strong>Web Development</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">🏠</span>
                                                <div>
                                                    <strong>CMS Development</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">🅦</span>
                                                <div>
                                                    <strong>ReactJS Development</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">🛒</span>
                                                <div>
                                                    <strong>Shopify Development</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Column 2 -->
                                        <div class="mega-col">

                                            <a class="mega-item">
                                                <span class="icon">W</span>
                                                <div>
                                                    <strong>NodeJS Development</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>
                                            
                                            <a class="mega-item">
                                                <span class="icon">W</span>
                                                <div>
                                                    <strong>E-commerce Development</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">W</span>
                                                <div>
                                                    <strong>Paython Development</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">📰</span>
                                                <div>
                                                    <strong>AI Development</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Column 3 -->
                                        <div class="mega-col">
                                            <a class="mega-item">
                                                <span class="icon">💼</span>
                                                <div>
                                                    <strong>Laravel Development</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">💼</span>
                                                <div>
                                                    <strong>Maintenance Services</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">⏳</span>
                                                <div>
                                                    <strong>SEO Services</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">🎤</span>
                                                <div>
                                                    <strong>Digital Marketing</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Right Card -->
                                        <div class="mega-card">
                                            <h4 class="text-green">Contact Info</h4>
                                            <div class="mega-item align-items-center d-flex mb-2">
                                                <span class="">🏠</span>
                                                <div>
                                                    <a class="text-green" href="mailto:zalgoinfotec@gmail.com">zalgoinfotec@gmail.com</a>
                                                </div>
                                            </div>
                                            <div class="mega-item align-items-center d-flex mb-2">
                                                <span class="">🏠</span>
                                                <div>
                                                    <a class="text-green" href="mailto:zalgoinfotec@gmail.com">zalgoinfotec@gmail.com</a>
                                                </div>
                                            </div>
                                            <div class="mega-item align-items-center d-flex mb-2">
                                                <span class="">🏠</span>
                                                <div>
                                                    <a class="text-green" href="tel:924421332">+91 924421332</a>
                                                </div>
                                            </div>

                                            <div class="mega-item align-items-center d-flex mb-2">
                                                <span class="">🏠</span>
                                                <div>
                                                    <a class="text-green" href="tel:924421332">+91 924421332</a>
                                                </div>
                                            </div>
                                            
                                            <div class="mega-item align-items-center d-flex mb-3">
                                                <span class="">🏠</span>
                                                <div>
                                                    <a class="text-green" href="#">zalgoinfotech</a>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-main">Contact Us</a>
                                        </div>

                                    </div>
                                </div>
                        </li>
                        <li class="nav-menu__item has-submenu">
                            <a href="javascript:void(0)"
                                class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Hire Developers</a>
                                <div class="new-header-mega-menu-inner nav-submenu scroll-sm">
                                    <div class="align-items-center mega-inner">
                                        <!-- Column 1 -->
                                        <div class="mega-col">

                                            <a class="mega-item">
                                                <span class="icon">🏠</span>
                                                <div>
                                                    <strong>Hire Web Developers</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon"><tool_call>  </span>
                                                <div>
                                                    <strong>Hire WordPress Developers</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">🛒</span>
                                                <div>
                                                    <strong>Hire Laravel Developers</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Column 2 -->
                                        <div class="mega-col">

                                            <a class="mega-item">
                                                <span class="icon">W</span>
                                                <div>
                                                    <strong>Hire Node.js Developers</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">W</span>
                                                <div>
                                                    <strong>Hire PHP Developers</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">📰</span>
                                                <div>
                                                    <strong>Hire CodeIgniter Developers</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Column 3 -->
                                        <div class="mega-col">
                                            <a class="mega-item">
                                                <span class="icon">💼</span>
                                                <div>
                                                    <strong>Hire ReactJS Developers</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">⏳</span>
                                                <div>
                                                    <strong>Hire Shopify Developers</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon">🎤</span>
                                                <div>
                                                    <strong>Hire Paython Developers</strong>
                                                    <p>Lorem ipsum dolor</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Right Card -->
                                        <div class="mega-card">
                                            <h4 class="text-green">Contact Info</h4>
                                            <div class="mega-item align-items-center d-flex mb-2">
                                                <span class="">🏠</span>
                                                <div>
                                                    <a class="text-green" href="mailto:zalgoinfotec@gmail.com">zalgoinfotec@gmail.com</a>
                                                </div>
                                            </div>
                                            <div class="mega-item align-items-center d-flex mb-2">
                                                <span class="">🏠</span>
                                                <div>
                                                    <a class="text-green" href="mailto:zalgoinfotec@gmail.com">zalgoinfotec@gmail.com</a>
                                                </div>
                                            </div>
                                            <div class="mega-item align-items-center d-flex mb-2">
                                                <span class="">🏠</span>
                                                <div>
                                                    <a class="text-green" href="tel:924421332">+91 924421332</a>
                                                </div>
                                            </div>

                                            <div class="mega-item align-items-center d-flex mb-2">
                                                <span class="">🏠</span>
                                                <div>
                                                    <a class="text-green" href="tel:924421332">+91 924421332</a>
                                                </div>
                                            </div>
                                            
                                            <div class="mega-item align-items-center d-flex mb-3">
                                                <span class="">🏠</span>
                                                <div>
                                                    <a class="text-green" href="#">zalgoinfotech</a>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-main">Contact Us</a>
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