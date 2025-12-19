<!-- Mobile Menu Start Here -->
@include('frontend.includes.partials.navbar')
<!-- Mobile Menu End Here -->

<div id="smooth-wrapper">

    <!-- Header Three Start Here -->
    <header class="header py-0 top-0 tw-start-0 tw-end-0 w-100 tw-z-99 tw-mt-8 position-absolute">
        <div class="container">
            <div
                class="header-three__inner py-2 py-lg-0 tw-lg-ps-12 ps-4 tw-pe-705 bg-white-06 transition-all tw-rounded-lg common-shadow-eleven">
                <nav class="d-flex align-items-center justify-content-between">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="{{route('indexThree')}}" class="link hover--translate-y-1 active--translate-y-scale-9">
                            <img src="{{asset('assets/images/logo/logo-white-two.png')}}" alt="Logo" class="max-w-200-px">
                        </a>
                    </div>
                    <!-- Logo End  -->

                    <!-- Menu Start  -->
                    <div class="header-menu d-lg-block d-none">
                        <!-- Nav menu Three Start -->
                        <ul class="nav-menu d-lg-flex align-items-center tw-gap-7">
                            <li class="nav-menu__item has-submenu position-relative activePage">
                                <a href="javascript:void(0)"
                                    class="nav-menu__link hover--translate-y-1 tw-pe-5 text-white tw-py-9 fw-semibold w-100">Home</a>
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
                                    class="nav-menu__link hover--translate-y-1 tw-pe-5 text-white tw-py-9 fw-semibold w-100">Pages</a>
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
                                    class="nav-menu__link hover--translate-y-1 tw-pe-5 text-white tw-py-9 fw-semibold w-100">Shop</a>
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
                                    class="nav-menu__link hover--translate-y-1 tw-pe-5 text-white tw-py-9 fw-semibold w-100">Blog</a>
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
                                    class="nav-menu__link hover--translate-y-1 text-white tw-py-9 fw-semibold w-100">Contact</a>
                            </li>
                        </ul>
                        <!-- Nav menu Three End  -->

                    </div>
                    <!-- Menu End  -->

                    <!-- Header Right start -->
                    <div class="d-flex align-items-center tw-gap-6">
                        <div class="d-flex align-items-center tw-gap-6">
                            <a href="{{route('login')}}"
                                class="d-flex align-items-center tw-gap-105 d-xl-flex d-none text-white">
                                <span class="text-spring-green d-flex tw-leading-none">
                                    <i class="ph-bold ph-user"></i>
                                </span>
                                <span class="fw-semibold tw-text-sm ">Sign in</span>
                            </a>

                            <a href="{{route('register')}}"
                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-lg-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 px-xl-4 px-3 tw-rounded-md tw-py-405 fw-bold"
                                data-block="button">
                                <span class="button__flair"></span>
                                <div class="d-flex align-items-center tw-gap-2 z-1">
                                    <span class="button__label">Start Free Trial</span>
                                    <span class="icon"><i class="ph-fill ph-cloud-arrow-down"></i></span>
                                </div>
                            </a>
                        </div>
                        <button type="button" class="toggle-mobileMenu leading-none d-lg-none text-white tw-text-9">
                            <i class="ph ph-list"></i>
                        </button>
                    </div>
                    <!-- Header Right End  -->
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Three End Here -->
