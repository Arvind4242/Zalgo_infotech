<!-- Overlay Start -->
<div class="overlay"></div>
<!-- Overlay End -->

<!-- Sidebar Overlay End -->
<div class="side-overlay"></div>
<!-- Sidebar Overlay End -->

<!-- Custom Toast Message start -->
<div id="toast-container"></div>
<!-- Custom Toast Message End -->

<!--  Scroll to Top End Here  -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Scroll to Top End Here -->

<!-- Custom Cursor Start -->
<div class="cursor"></div>
<span class="dot"></span>
<!-- Custom Cursor End -->

<!-- Mobile Menu Start Here -->
<div
    class="mobile-menu d-lg-none d-block scroll-sm position-fixed bg-white tw-w-300-px tw-h-screen overflow-y-auto tw-p-6 tw-z-999 tw--translate-x-full tw-pb-68 ">

    <button type="button"
        class="close-button position-absolute tw-end-0 top-0 tw-me-2 tw-mt-2 tw-w-605 tw-h-605 rounded-circle d-flex justify-content-center align-items-center text-neutral-900 bg-neutral-200 hover-bg-neutral-900 hover-text-white">
        <i class="ph ph-x"></i>
    </button>

    <div class="mobile-menu__inner">
        <a href="{{route('home')}}" class="mobile-menu__logo">
            <img src="{{asset('assets/images/logo/zalgo_logo.png')}}" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav menu Start -->
            <ul class="nav-menu d-lg-flex align-items-center nav-menu--mobile d-block tw-mt-8">
                <li class="nav-menu__item has-submenu position-relative activePage">
                    <a href="javascript:void(0)"
                        class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Company</a>
                    <ul
                        class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                        <li class="nav-menu__item activePage">
                            <a href="{{route('about')}}"
                                class="mega-item">
                               <div>About Company</div>
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="javascript:void(0)"
                                class="mega-item">
                               <div>Engagement Models</div>
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('indexThree')}}"
                                class="mega-item">
                                <div>Life At ZalgoInfotec</div>
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('indexFour')}}"
                                class="mega-item">
                               <div> Infrastructure</div>
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('indexFive')}}"
                                class="mega-item">
                                <div>Culture & Values</div>
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('testimonial')}}"
                                class="mega-item">
                                <div>Client Testimonials</div>
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('blog')}}"
                                class="mega-item">
                                <div>Blogs</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item has-submenu position-relative">
                    <a href="javascript:void(0)"
                        class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Our Services</a>
                    <ul
                        class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('web.development')}}" class="mega-item">
                                        <div>
                                            Web Development
                                        </div>
                                    </a>
                                </li>    
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('cms.development')}}" class="mega-item">
                                        <div>
                                            CMS Development
                                        </div>
                                    </a>
                                </li>    
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('react.development')}}" class="mega-item">
                                        <div>
                                            ReactJS Development
                                        </div>
                                    </a>
                                </li>    
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="{{route('shopify.development')}}" class="mega-item">
                                        <div>
                                            Shopify Development
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="{{route('nodejs.development')}}" class="mega-item">
                                            <div>
                                                NodeJS Development
                                            </div>
                                        </a>
                                    </li>    
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="{{route('ecommerce.development')}}" class="mega-item">
                                            <div>
                                                E-commerce Development
                                            </div>
                                        </a>
                                    </li>    
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="{{route('python.development')}}" class="mega-item">
                                            <div>
                                                python Development
                                            </div>
                                        </a>
                                    </li>    
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="{{route('ai.development')}}" class="mega-item">
                                            <div>
                                                AI Development
                                            </div>
                                        </a>
                                    </li>        
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="{{route('laravel.development')}}" class="mega-item">
                                            <div>
                                                Laravel Development
                                            </div>
                                        </a>
                                    </li>    
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="{{route('maintenanceservices.development')}}" class="mega-item">
                                            <div>
                                                Maintenance Services
                                            </div>
                                        </a>
                                    </li>    
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="{{route('seoservices.development')}}" class="mega-item">
                                            <div>
                                                SEO Services
                                            </div>
                                        </a>
                                    </li>    
                                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                        <a href="{{route('digitalservices.development')}}" class="mega-item">
                                            <div>
                                                Digital Marketing
                                            </div>
                                        </a>
                                    </li>    
                    </ul>
                </li>
                <li class="nav-menu__item has-submenu position-relative">
                    <a href="javascript:void(0)"
                        class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Hire Developers</a>
                    <ul
                        class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('hireweb.developer')}}" class="mega-item">
                                <div>
                                    Hire Web Developers
                                </div>
                            </a>
                        </li>

                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('hirewordpressdeveloper')}}" class="mega-item">
                                <div>
                                    Hire WordPress Developers
                                </div>
                            </a>
                        </li>

                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('hirelaraveldeveloper')}}" class="mega-item">
                                <div>
                                    Hire Laravel Developers
                                </div>
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('hirenodejsdeveloper')}}" class="mega-item">
                                <div>
                                    Hire Node.js Developers
                                </div>
                            </a>
                        </li>

                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('hirephpdeveloper')}}" class="mega-item">
                                <div>
                                    Hire PHP Developers
                                </div>
                            </a>
                        </li>

                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('hireaideveloper')}}" class="mega-item">
                                <div>
                                    Hire AI Developers
                                </div>
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('hirereactjsdeveloper')}}" class="mega-item">
                                <div>
                                    Hire ReactJS Developers
                                </div>
                            </a>
                        </li>

                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('hirenextjsdeveloper')}}" class="mega-item">
                                <div>
                                    Hire NextJS Developers
                                </div>
                            </a>
                        </li>

                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('hirepythondeveloper')}}" class="mega-item">
                                <div>
                                    Hire python Developers
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item">
                    <a href="{{route('casestudy')}}"
                                class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Case Study</a>
                </li>
            </ul>
            <!-- Nav menu End -->

        </div>
        <a href="{{route('contact')}}"
            class="btn btn-main-two hover-style-two button--stroke d-sm-none d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-8 rounded-pill tw-mt-6"
            data-block="button">
            <span class="button__flair"></span>
            <span class="button__label">Contact</span>
        </a>
    </div>
</div>
<!-- Mobile Menu End Here -->
