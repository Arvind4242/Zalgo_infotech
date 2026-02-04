<!-- navbar Start -->
@include('frontend.includes.partials.navbar')
<!-- navbar end -->

<div id="smooth-wrapper">

    

    <!-- Header Start Here -->
    <header class="header bg-white transition-all p-0">

        <!-- Top Header Start -->
        <div class="bg-main-600 header-top-bar tw-py-205 d-sm-block">
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
                        <li class="nav-menu__item has-submenu about">
                            <a href="{{route('about')}}" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100"> Company</a>
                             <div class="new-header-mega-menu-inner nav-submenu scroll-sm">
                                    <div class="mega-inner">
                                        <!-- Column 1 -->
                                        <div class="mega-col">

                                            <a class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/about-company.png')}}" alt=""></span>
                                                <div class="align-items-center d-flex"> 
                                                    <strong>About Company</strong>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/engagement-models.png')}}" alt=""> </span>
                                                <div class="align-items-center d-flex">
                                                    <strong>Engagement Models</strong>
                                                </div>
                                            </a>

                                            
                                        </div>
                                        <!-- Column 2 -->
                                        <div class="mega-col">
                                            <a class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/life-at-zalgolnfotec.png')}}" alt=""></span>
                                                <div class="align-items-center d-flex">
                                                    <strong>Life At ZalgoInfotec</strong>
                                                </div>
                                            </a>
                                            <a class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/infrastructure.png')}}" alt=""></span>
                                                <div class="align-items-center d-flex">
                                                    <strong>Infrastructure</strong>
                                                </div>
                                            </a>
                                            
                                        </div>
                                         <!-- Column 2 -->
                                        <div class="mega-col">
                                            <a class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/culture-values.png')}}" alt=""></span>
                                                <div class="align-items-center d-flex">
                                                    <strong>Culture & Values</strong>
                                                </div>
                                            </a>

                                            <a class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/Career.png')}}" alt=""></span>
                                                <div class="align-items-center d-flex">
                                                    <strong>Career</strong>
                                                </div>
                                            </a>
                                            
                                        </div>

                                         <!-- Column 2 -->
                                        <div class="mega-col">
                                            <a href="{{route('testimonial')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/client-testimonials.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Client Testimonials</strong>
                                                </div>
                                            </a>
                                            <a href="{{route('testimonial')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/client-testimonials.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Blogs</strong>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="nav-menu__item has-submenu">
                            <a href="{{route('industry')}}" class="nav-menu__link  tw-pe-5 hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100">Industry</a>
                              <div class="new-header-mega-menu-inner nav-submenu scroll-sm">
                                    <div class="align-items-center mega-inner">
                                        <!-- LEFT GRID -->
                                        <div class="mega-left">
                                            <div class="app-grid">
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/healthcare.png')}}" alt="">
                                                <span>HealthCare</span>
                                                </div>
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/destination.png')}}" alt="">
                                                <span>Travel</span>
                                                </div>
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/online-shop.png')}}" alt="">
                                                <span>E-Commerce</span>
                                                </div>
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/education.png')}}" alt="">
                                                <span>Education</span>
                                                </div>
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/building.png')}}" alt="">
                                                <span>Real Estate</span>
                                                </div>

                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/cinema.png')}}" alt="">
                                                <span>Entertainment</span>
                                                </div>
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/customer-service.png')}}" alt="">
                                                <span>Business Services</span>
                                                </div>
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/holding-hands.png')}}" alt="">
                                                <span>Non Profit</span>
                                                </div>
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/asset-management.png')}}" alt="">
                                                <span>Finance</span>
                                                </div>
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/cutlery.png')}}" alt="">
                                                <span>Food & Restaurant</span>
                                                </div>
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/enviromentally-friendly.png')}}" alt="">
                                                <span>Manufacturing</span>
                                                </div>
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/law.png')}}" alt="">
                                                <span>Lawyer</span>
                                                </div>
                                                <div class="app-box">
                                                <img src="{{asset('assets/images/icons/crm.png')}}" alt="">
                                                <span>CRM</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- RIGHT CARD -->
                                        <div class="audit-box">  
                                                <div class="autid-detail">
                                                    <h3>Get a Free Strategy Audit</h3>
                                                    <ul class="audit-list">
                                                        <li>Free Website Audit</li>
                                                        <li>Free SEO / Ads Analysis</li>
                                                        <li>30-min Expert Call</li>
                                                        <li>No Obligation</li>
                                                    </ul>
                                                    <a href="#" class="w-100 hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill">Claim Free Audit</a>
                                                </div>
                                                <div class="contact-info">
                                                    <p><strong>📞</strong> +91 92442 13332</p>
                                                    <p><strong>✉️</strong> hello@zalgoinfotech.com</p>
                                                </div>

                                                <div class="serving">
                                                    <p><strong>🌍 Serving Clients:</strong></p>
                                                    <span>USA • Canada • UK • UAE • India</span>
                                                </div>

                                                <a href="#" class="w-100 hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill">Claim Free Audit</a>

                                            </div>
                                    </div>
                                </div>
                        </li>
                        <li class="nav-menu__item has-submenu">
                            <a href="javascript:void(0)" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Our Services</a>
                                <div class="new-header-mega-menu-inner nav-submenu scroll-sm">
                                    <div class="align-items-center mega-inner">
                                        <!-- Column 1 -->
                                        <div class="mega-col">
                                            <a href="{{route('web.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/domain.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Web Development</strong>
                                                    <p>Custom Websites</p>
                                                </div>
                                            </a>
                                            <a href="{{route('cms.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/cms.png')}}" alt=""></span>
                                                <div>
                                                    <strong>CMS Development</strong>
                                                    <p>Easy Management</p>
                                                </div>
                                            </a>
                                            <a href="{{route('react.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/react.png')}}" alt=""></span>
                                                <div>
                                                    <strong>ReactJS Development</strong>
                                                    <p>Modern Frontend</p>
                                                </div>
                                            </a>
                                            <a href="{{route('shopify.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/shopify.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Shopify Development</strong>
                                                    <p>Shopify Stores</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Column 2 -->
                                        <div class="mega-col">
                                            <a href="{{route('nodejs.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/nodejs.png')}}" alt=""></span>
                                                <div>
                                                    <strong>NodeJS Development</strong>
                                                    <p>Scalable Backend</p>
                                                </div>
                                            </a>
                                            <a href="{{route('ecommerce.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/ecommerce.png')}}" alt=""></span>
                                                <div>
                                                    <strong>E-commerce Development</strong>
                                                    <p>Online Stores</p>
                                                </div>
                                            </a>
                                            <a href="{{route('python.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/python.png')}}" alt=""></span>
                                                <div>
                                                    <strong>python Development</strong>
                                                    <p>Backend Solutions</p>
                                                </div>
                                            </a>
                                            <a href="{{route('ai.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/ai-processor.png')}}" alt=""></span>
                                                <div>
                                                    <strong>AI Development</strong>
                                                    <p>Smart Automation</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Column 3 -->
                                        <div class="mega-col">
                                            <a href="{{route('laravel.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/laravel.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Laravel Development</strong>
                                                    <p>Secure Applications</p>
                                                </div>
                                            </a>
                                            <a href="{{route('maintenanceservices.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/maintenance.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Maintenance Services</strong>
                                                    <p>Ongoing Support</p>
                                                </div>
                                            </a>
                                            <a href="{{route('seoservices.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/seo.png')}}" alt=""></span>
                                                <div>
                                                    <strong>SEO Services</strong>
                                                    <p>Search Growth</p>
                                                </div>
                                            </a>
                                            <a href="{{route('digitalservices.development')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/dm.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Digital Marketing</strong>
                                                    <p>Online Growth</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Right Card -->
                                           <div class="audit-box">  
                                                <div class="autid-detail">
                                                    <h3>Get a Free Strategy Audit</h3>
                                                    <ul class="audit-list">
                                                        <li>Free Website Audit</li>
                                                        <li>Free SEO / Ads Analysis</li>
                                                        <li>30-min Expert Call</li>
                                                        <li>No Obligation</li>
                                                    </ul>
                                                    <a href="#" class="w-100 hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill">Claim Free Audit</a>
                                                </div>
                                                <div class="contact-info">
                                                    <p><strong>📞</strong> +91 92442 13332</p>
                                                    <p><strong>✉️</strong> hello@zalgoinfotech.com</p>
                                                </div>

                                                <div class="serving">
                                                    <p><strong>🌍 Serving Clients:</strong></p>
                                                    <span>USA • Canada • UK • UAE • India</span>
                                                </div>

                                                <a href="#" class="w-100 hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill">Claim Free Audit</a>

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

                                            <a href="{{route('hireweb.developer')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/hire-web-developers.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Hire Web Developers</strong>
                                                    <p>Custom Websites</p>
                                                </div>
                                            </a>

                                            <a href="{{route('hirewordpressdeveloper')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/hire-wordpress-developers.png')}}" alt=""> </span>
                                                <div>
                                                    <strong>Hire WordPress Developers</strong>
                                                    <p>WordPress Experts</p>
                                                </div>
                                            </a>

                                            <a href="{{route('hirelaraveldeveloper')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/hire-laravel-developers.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Hire Laravel Developers</strong>
                                                    <p>Secure Apps</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Column 2 -->
                                        <div class="mega-col">

                                            <a href="{{route('hirenodejsdeveloper')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/hire-nodejsdevelopers.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Hire Node.js Developers</strong>
                                                    <p>Fast Backend</p>
                                                </div>
                                            </a>

                                            <a href="{{route('hirephpdeveloper')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/hire-php-developers.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Hire PHP Developers</strong>
                                                    <p>PHP Experts</p>
                                                </div>
                                            </a>

                                            <a href="{{route('hireaideveloper')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/hire-ai-developers.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Hire AI Developers</strong>
                                                    <p>AI Solutions</p>
                                                </div>
                                            </a>
                                            
                                        </div>
                                        <!-- Column 3 -->
                                        <div class="mega-col">
                                            <a href="{{route('hirereactjsdeveloper')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/hire-reactjs-developers.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Hire ReactJS Developers</strong>
                                                    <p>Modern UI</p>
                                                </div>
                                            </a>

                                            <a href="{{route('hirenextjsdeveloper')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/hire-nextjs-developers.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Hire NextJS Developers</strong>
                                                    <p>Fast Websites</p>
                                                </div>
                                            </a>

                                            <a href="{{route('hirepythondeveloper')}}" class="mega-item">
                                                <span class="icon"><img width="20px" src="{{asset('assets/images/icons/hire-paython-developers.png')}}" alt=""></span>
                                                <div>
                                                    <strong>Hire python Developers</strong>
                                                    <p>Smart Backend</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Right Card -->
                                       <div class="audit-box">  
                                                <div class="autid-detail">
                                                    <h3>Get a Free Strategy Audit</h3>
                                                    <ul class="audit-list">
                                                        <li>Free Website Audit</li>
                                                        <li>Free SEO / Ads Analysis</li>
                                                        <li>30-min Expert Call</li>
                                                        <li>No Obligation</li>
                                                    </ul>
                                                    <a href="#" class="w-100 hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill">Claim Free Audit</a>
                                                </div>
                                                <div class="contact-info">
                                                    <p><strong>📞</strong> +91 92442 13332</p>
                                                    <p><strong>✉️</strong> hello@zalgoinfotech.com</p>
                                                </div>

                                                <div class="serving">
                                                    <p><strong>🌍 Serving Clients:</strong></p>
                                                    <span>USA • Canada • UK • UAE • India</span>
                                                </div>

                                                <a href="#" class="w-100 hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill">Claim Free Audit</a>

                                            </div>

                                    </div>
                                </div>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{route('blog')}}"
                                class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Case Study</a>
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