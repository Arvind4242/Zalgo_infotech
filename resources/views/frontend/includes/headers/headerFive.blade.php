<!-- navbar Start -->
@include('frontend.includes.partials.navbar')
<!-- navbar end -->

<div id="smooth-wrapper">

    <!-- Top Header Start -->
    <div class="bg-main-600 tw-py-205 d-sm-block d-none">
        <div class="container">
            <div class="d-flex justify-content-center">
                <p class="text-white bg-white-13 d-inline-block tw-py-1 tw-px-5 rounded-pill fw-normal">We're introducing
                    an exceptionally crafted UI/UX template on ThemeForest, designed to deliver outstanding conversion
                    results!</p>
            </div>
        </div>
    </div>
    <!-- Top Header End -->

    <!-- Header Five Start Here -->
    <header class="header bg-white transition-all">
        <div class="container container-two">
            <nav class="d-flex align-items-center justify-content-between">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="{{route('indexFive')}}" class="link hover--translate-y-1 active--translate-y-scale-9">
                        <img src="{{asset('assets/images/logo/logo-three.png')}}" alt="Logo" class="max-w-200-px">
                    </a>
                </div>
                <!-- Logo End  -->

                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    <!-- Nav menu Start -->
                    <ul class="nav-menu d-lg-flex align-items-center tw-gap-14">
                        <li class="nav-menu__item has-submenu position-relative activePage">
                            <a href="javascript:void(0)"
                                class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Home</a>
                            <!-- <ul
                                class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                <li class="nav-menu__item activePage">
                                    <a href="{{route('home')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        IT Solution
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('indexTwo')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Web Hosting
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('indexThree')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Task Management
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('indexFour')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        CRM Software
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('indexFive')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        App Landing
                                    </a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="nav-menu__item has-submenu position-relative">
                            <a href="javascript:void(0)"
                                class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Pages</a>
                            <ul
                                class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                <!-- <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('pricing')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Pricing
                                    </a>
                                </li> -->
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('about')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        About Us
                                    </a>
                                </li>
                                <!-- <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('app.intigration')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        App Integration
                                    </a>
                                </li> -->
                                <!-- <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('intigration.details')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Integration Details
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('policy.privacy')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('faq')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('project.details')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Project Details
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('service.details')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Service Details
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="nav-menu__item has-submenu position-relative">
                            <a href="javascript:void(0)"
                                class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Shop</a>
                            <ul
                                class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('shop')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Shop
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('shop.details')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Shop Details
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('cart')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Cart
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('checkout')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Checkout
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item has-submenu position-relative">
                            <a href="javascript:void(0)"
                                class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Blog</a>
                            <ul
                                class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('blog')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Blog
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('blog.details')}}"
                                        class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Blog Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{route('contact')}}"
                                class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100">Contact</a>
                        </li>
                    </ul>
                    <!-- Nav menu End -->

                </div>
                <!-- Menu End -->

                <!-- Header Right start -->
                <div class="d-flex align-items-center tw-gap-6">
                    <a href="{{route('register')}}"
                        class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-4 fw-semibold common-shadow-inset-one"
                        data-block="button">
                        <span class="button__flair"></span>
                        <span class="button__label">Sign Up Now</span>
                    </a>
                    <button type="button" class="toggle-mobileMenu leading-none d-lg-none text-neutral-800 tw-text-9">
                        <i class="ph ph-list"></i>
                    </button>
                </div>
                <!-- Header Right End -->
            </nav>
        </div>
    </header>
    <!-- Header Five End Here -->
