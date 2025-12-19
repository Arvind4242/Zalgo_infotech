<!-- Mobile Menu Start Here -->
@include('frontend.includes.partials.navbar')
<!-- Mobile Menu End Here -->


<div id="smooth-wrapper">
    <!-- Top header two start -->
    <div class="tw-pt-3 tw-pb-4 position-absolute top-0 tw-start-0 tw-end-0 w-100 tw-z-991">
        <div class="container max-w-1290-px">
            <div class="d-flex align-items-center justify-content-between tw-gap-4 flex-wrap">
                <div class="d-flex align-items-center tw-gap-2 d-sm-flex d-none">
                    <span class="text-white tw-text-base d-flex tw-leading-none">
                        <i class="ph-bold ph-envelope-simple"></i>
                    </span>
                    <span class="text-neutral-300 fw-medium tw-text-sm">example@gmail.com</span>
                </div>

                <div class="d-flex align-items-center tw-gap-2 d-lg-flex d-none">
                    <span class="text-white tw-text-base d-flex tw-leading-none">
                        <i class="ph-bold ph-tag"></i>
                    </span>
                    <span class="text-neutral-300 fw-medium tw-text-sm">Hosting Flash Sale: Starting at $2.59/mo for a
                        limited
                        time</span>
                </div>

                <div
                    class="d-flex align-items-center tw-gap-705 justify-content-between justify-content-sm-start flex-sm-grow-0 flex-grow-1">
                    <div class="d-flex align-items-center tw-gap-2">
                        <span class="text-white tw-text-base d-flex tw-leading-none">
                            <i class="ph-bold ph-chat"></i>
                        </span>
                        <a href="javascript:void(0)" class="text-neutral-300 fw-medium tw-text-sm hover-text-white">Live
                            Chat</a>
                    </div>
                    <div class="d-flex align-items-center tw-gap-2">
                        <span class="text-white tw-text-base d-flex tw-leading-none">
                            <i class="ph-bold ph-user"></i>
                        </span>
                        <a href="{{route('login')}}" class="text-neutral-300 fw-medium tw-text-sm hover-text-white">Login</a>
                    </div>

                    <div class="group-item has-submenu has-submenu--arrow-end position-relative">
                        <a href="javascript:void(0)"
                            class="selected-text text-neutral-300 fw-medium tw-text-sm hover-text-white tw-pe-405">US
                            Dollar
                        </a>
                        <ul
                            class="selectable-text-list tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-transition tw-duration-200 bg-neutral-700 tw-py-4 d-flex flex-column tw-gap-1 shadow tw-rounded-md position-absolute top-100 tw-end-0 tw-w-140-px tw-z-99 tw-max-h-260-px overflow-y-auto scroll-sm">
                            <li>
                                <a href="javascript:void(0)"
                                    class="text-neutral-300 fw-medium tw-text-sm hover-text-white tw-transition tw-px-4">
                                    US Dollar
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="text-neutral-300 fw-medium tw-text-sm hover-text-white tw-transition tw-px-4">
                                    British Pound
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="text-neutral-300 fw-medium tw-text-sm hover-text-white tw-transition tw-px-4">
                                    Japanese Yen
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="text-neutral-300 fw-medium tw-text-sm hover-text-white tw-transition tw-px-4">
                                    Swiss Franc
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="text-neutral-300 fw-medium tw-text-sm hover-text-white tw-transition tw-px-4">
                                    Canadian Dollar
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top header two end -->

    <!-- Header Two Start Here -->
    <header class="header home-two-header py-0 top-0 tw-start-0 tw-end-0 w-100 tw-z-99 tw-mt-13">
        <div class="container">
            <div
                class="header-box-inner py-2 py-lg-0 tw-gap-4 tw-lg-ps-12 ps-4 tw-pe-705 bg-white transition-all tw-rounded-lg">
                <nav class="d-flex align-items-center justify-content-between">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="{{route('indexTwo')}}" class="link hover--translate-y-1 active--translate-y-scale-9">
                            <img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo" class="max-w-200-px" />
                        </a>
                    </div>
                    <!-- Logo End -->

                    <!-- Menu Start -->
                    <div class="header-menu d-lg-block d-none">
                        <!-- Nav menu Two Start -->
                        <ul class="nav-menu d-lg-flex align-items-center tw-gap-7">
                            <li class="nav-menu__item has-submenu position-relative activePage">
                                <a href="javascript:void(0)"
                                    class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Home</a>
                                <ul
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
                                </ul>
                            </li>
                            <li class="nav-menu__item has-submenu position-relative">
                                <a href="javascript:void(0)"
                                    class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Pages</a>
                                <ul
                                    class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="{{route('pricing')}}"
                                            class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                            Pricing
                                        </a>
                                    </li>
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="{{route('about')}}"
                                            class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                            About Us
                                        </a>
                                    </li>
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="{{route('app.intigration')}}"
                                            class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                            App Integration
                                        </a>
                                    </li>
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
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
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item has-submenu position-relative">
                                <a href="javascript:void(0)"
                                    class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Hosting</a>
                                <ul
                                    class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="javascript:void(0)"
                                            class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                            Hosting
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item has-submenu position-relative">
                                <a href="javascript:void(0)"
                                    class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Domain</a>
                                <ul
                                    class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="javascript:void(0)"
                                            class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                            Domain
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item has-submenu position-relative">
                                <a href="javascript:void(0)"
                                    class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Technology</a>
                                <ul
                                    class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="javascript:void(0)"
                                            class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                            Technology
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item has-submenu position-relative">
                                <a href="javascript:void(0)"
                                    class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Help
                                    Center</a>
                                <ul
                                    class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="javascript:void(0)"
                                            class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                            Help Center
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Nav menu Two End -->
                    </div>
                    <!-- Menu End -->

                    <!-- Header Right start -->
                    <div class="d-flex align-items-center tw-gap-6">
                        <div class="d-flex align-items-center tw-gap-6">
                            <a href="{{route('login')}}"
                                class="d-flex align-items-center tw-gap-105 d-xl-flex d-none text-heading hover-text-main-600">
                                <span class="tw-text-base text-main-600 d-flex tw-leading-none">
                                    <i class="ph-bold ph-user"></i>
                                </span>
                                <span class="fw-semibold tw-text-sm">Sign in</span>
                            </a>

                            <a href="{{route('register')}}"
                                class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke d-lg-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 px-xxl-5 px-xl-4 px-3 tw-py-405 fw-medium rounded-pill btn-main hover-style-one"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label">Get Started</span>
                            </a>
                        </div>
                        <button type="button"
                            class="toggle-mobileMenu leading-none d-lg-none text-neutral-800 tw-text-9">
                            <i class="ph ph-list"></i>
                        </button>
                    </div>
                    <!-- Header Right End -->
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Two End Here -->
