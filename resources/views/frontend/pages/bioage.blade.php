@extends('frontend.layouts.app')
@section('title', 'Web Designs')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
    
        <div id="smooth-content">
            <!-- ================= HERO ================= -->
        <!-- Banner Section Start -->
        <section class="case-study-banner tw-py-10 overflow-hidden position-relative">
            <div class="container max-w-1400-px">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6 mt-0">
                        <div class="case-study-content">
                            <h1 class="splitTextStyleOne fw-light tw-leading-104">
                                <span class="d-inline-block">Scaling a
                                </span>
                                <span class="text-green d-inline-block fw-semibold">
                                     WooCommerce
                                </span>
                                 <span class="text-green d-inline-block fw-semibold">
                                    E-commerce
                                </span>
                                <span class="d-inline-block fw-semibold">Brand to</span>
                                <span style="color:rgb(65 137 8);" class=" d-inline-block fw-semibold"> $ 1M+ </span>
                                <span class="d-inline-block fw-semibold"> Monthly Revenue</span>
                            </h1>
                            <p style="color:rgb(33 74 2);" class="fs-4 h5 mt-3 pt-1 text-heading tw-mt-20 tw-text-lg">
                                WooCommerce | E-commerce | SEO | Digital Marketing
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <img src="{{asset('assets/images/thumbs/brand-marketing-img.png')}}" alt="Image" class="w-100 h-100 object-fit-cover" />                     
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->
        <section class="search-domain-two tw-pt-10 tw-pb-10 position-relative z-1">
            <div class="container">              
                <div class="row gy-4 select-domain-wrapper">
                    <div class="col-md-12">
                        <div class="d-flex tw-gap-305 flex-wrap">
                            <div
                                class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item"
                                data-domain=".shop">
                                <img src="{{asset('assets/images/thumbs/search-domain-two-img2.png')}}" alt="Logo"
                                    class="animate__wobble" />
                                <span
                                    class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">$13.34/Yearly</span>
                            </div>
                            <div
                                class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item"
                                data-domain=".icu">
                                <img src="{{asset('assets/images/thumbs/search-domain-two-img3.png')}}" alt="Logo"
                                    class="animate__wobble" />
                                <span
                                    class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">$13.34/Yearly</span>
                            </div>
                            <div
                                class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item"
                                data-domain=".site">
                                <img src="{{asset('assets/images/thumbs/search-domain-two-img4.png')}}" alt="Logo"
                                    class="animate__wobble" />
                                <span
                                    class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">$13.34/Yearly</span>
                            </div>
                            <div
                                class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item"
                                data-domain=".in">
                                <img src="{{asset('assets/images/thumbs/search-domain-two-img5.png')}}" alt="Logo"
                                    class="animate__wobble" />
                                <span
                                    class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">$13.34/Yearly</span>
                            </div>
                            <div
                                class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item"
                                data-domain=".gives">
                                <img src="{{asset('assets/images/thumbs/search-domain-two-img6.png')}}" alt="Logo"
                                    class="animate__wobble" />
                                <span
                                    class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">$13.34/Yearly</span>
                            </div>
                        </div>
                    </div>
                </div>         
            </div>
        </section>

        <section class="bg-body-secondary client-overview position-relative py-120 z-1">
            <div class="container">              
                <div class="row gy-4 select-domain-wrapper">
                    <div class="col-md-12">
                       <h1 class="splitTextStyleOne fw-light tw-leading-104 text-center">
                            <span class="d-inline-block">Client</span>
                            <span class="text-green d-inline-block fw-semibold">Overview</span>
                        </h1>
                        <p class="fs-3 lh-sm mt-3 h5 mx-auto text-center w-75">BIOAGE is a growing e-commerce brand operating in a competitive online market. The client required a stable, secure, and scalable e-commerce platform along with continuous marketing and technical support to drive long-term growth.</p>
                    </div>
                </div>         
            </div>
        </section>
        
        <section class="brand-marketing py-120">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-md-6">
                        <div class="ps-5 position-relative pe-lg-5 tw-pb-4 h-100">
                            <div class="tw-rounded-28-px overflow-hidden h-100">
                                <img src="{{asset('assets/images/thumbs/brand-marketing-img.png')}}" alt="Image"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>

                            <img src="{{asset('assets/images/shapes/finger-shape.png')}}" alt="Shape"
                                class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <h2 class="splitTextStyleOne text-heading fw-semibold text-capitalize">
                                Business
                                <span class="font-dm-serif fw-semibold text-green">Challenges</span>
                                
                            </h2>
                            <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">
                                As the business scaled, several challenges emerged:
                            </p>

                            <div class="tw-mt-5 d-flex flex-column">
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Handling increasing traffic and sales volume
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Maintaining website performance and uptime
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Securing the store against attacks and vulnerabilities
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Managing SEO and digital marketing consistently
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Ensuring smooth and reliable payment gateway operations
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Ongoing maintenance without downtime
                                    </p>
                                </div>
                            </div>

                            <p class="fs-3 fw-medium lh-sm tw-mt-8 tw-text-lg">
                                The client needed one reliable technical partner to manage everything.
                            </p>

                            <div class="tw-mt-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="900">
                                <a href="{{route('register')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-17 rounded-pill tw-py-505 fw-medium"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Get Started</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
        
        
        <section class="brand-marketing bg-success-subtle py-120">
            <div class="container">
                <div class="row gy-5">
                     <div class="col-md-6">
                        <div class="">
                            <h2 class="splitTextStyleOne text-heading fw-semibold text-capitalize">
                                Our Role &
                                <span class="font-dm-serif fw-semibold text-green">Responsibilities</span>
                                
                            </h2>
                            <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">
                                We handled the project end-to-end, acting as their complete technical and growth partner.
                            </p>

                            <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">
                                Our responsibilities included:
                            </p>

                            <div class="tw-mt-5 d-flex flex-column">
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        WooCommerce & WordPress development
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Website optimization and performance tuning
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Full SEO strategy and execution
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Digital marketing management
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Security implementation using Sucuri
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Hosting management on SiteGround
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Payment gateway setup & maintenance
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Continuous updates, monitoring, and support
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Sales and conversion optimization
                                    </p>
                                </div>
                            </div>

                            <p class="fs-3 fw-medium lh-sm tw-mt-8 tw-text-lg">
                                The client needed one reliable technical partner to manage everything.
                            </p>

                            <div class="tw-mt-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="900">
                                <a href="{{route('register')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-17 rounded-pill tw-py-505 fw-medium"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Get Started</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ps-5 position-relative pe-lg-5 tw-pb-4 h-100">
                            <div class="tw-rounded-28-px overflow-hidden h-100">
                                <img src="{{asset('assets/images/thumbs/brand-marketing-img.png')}}" alt="Image"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>

                            <img src="{{asset('assets/images/shapes/finger-shape.png')}}" alt="Shape"
                                class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />
                        </div>
                    </div>
                </div>
            </div>
        </section>   

         <section class="brand-marketing py-120">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-md-6">
                        <div class="ps-5 position-relative pe-lg-5 tw-pb-4 h-100">
                            <div class="tw-rounded-28-px overflow-hidden h-100">
                                <img src="{{asset('assets/images/thumbs/brand-marketing-img.png')}}" alt="Image"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>

                            <img src="{{asset('assets/images/shapes/finger-shape.png')}}" alt="Shape"
                                class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <h2 class="splitTextStyleOne text-heading fw-semibold text-capitalize">
                                Solution
                                <span class="font-dm-serif fw-semibold text-green">Delivered</span>
                                
                            </h2>
                            <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">
                               We built and maintained a high-performance WooCommerce e-commerce system optimized for scalability, security, and conversions.
                            </p>

                            <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">
                              Key Solutions:
                            </p>

                            <div class="tw-mt-5 d-flex flex-column">
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Optimized WooCommerce store architecture
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Advanced security setup with Sucuri
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        High-performance hosting configuration on SiteGround
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                       SEO-driven content and technical optimization
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Conversion-focused website improvements
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Stable and secure payment gateway integrations
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   

        <!-- Integrated apps start -->
        <section class="pt-120 pb-120 overflow-hidden position-relative">
            <img src="{{asset('assets/images/bg/mash-gradient-bg6.png')}}" alt="Gradient BG"
                class="position-absolute tw-start-0 top-0 w-100 h-100 z-n1" />

            <div class="container max-w-1290-px">
                <div class="row gy-5 align-items-center flex-wrap-reverse">
                    <div class="col-xl-6" data-aos="zoom-in" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="2000">
                        <div class="position-relative tw-p-12 text-center">
                            <img src="{{asset('assets/images/shapes/rounded-circle.png')}}" alt="Bg Round" />

                            <img src="{{asset('assets/images/shapes/round-icons-big.png')}}" alt="Icons"
                                class="position-absolute top-50 start-50 animation-rotate-right" />
                            <img src="{{asset('assets/images/shapes/round-icons-small.png')}}" alt="Icons"
                                class="position-absolute top-50 start-50 animation-rotate-left" />
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <h3 class="">
                                    <span class="counter">2</span>k+
                                </h3>
                                <span class="text-heading">Integration</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="">
                            <div class="text-start mx-auto tw-mb-12">
                                <div class="tw-mb-10">
                                    <h4 class="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-orange">
                                        with the world's favorite CRM
                                    </h4>
                                    <h2 class="splitTextStyleOne text-heading text-capitalize max-w-532-px">
                                        Simple set up,easy to stay
                                        organized
                                    </h2>
                                    <p
                                        class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                        Sassly-CRM in the past allowing
                                        you to focus more on your
                                        business simply enjoy your
                                        newfound legal time to reflect
                                        leaving pen
                                    </p>
                                </div>
                                <div class="tw-mt-9" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="900">
                                    <a href="{{route('pricing')}}"
                                        class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 tw-py-505 fw-bold rounded-pill btn-main hover-style-one common-shadow-inset-one"
                                        data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">See all Integrations</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Integrated apps End -->


        <!-- seamless integration section Start -->
        <section class="seamless-integration py-120">
            <div class="container max-w-1400-px">
                <div class="max-w-672-px text-center mx-auto tw-mb-12">
                    <h3 class="splitTextStyleOne text-heading text-capitalize">
                        Seamless Integrations That Enhance Digital Experiences
                    </h3>
                    <p class="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">
                        We connect your systems, tools, and platforms into a unified ecosystem—ensuring smooth data flow, better performance, and scalable growth.
                    </p>
                </div>

                <div class="border border-neutral-200 tw-rounded-xl common-shadow-sixteen">
                    <div class="row col-border-wrapper">
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon1.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Custom Development
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    We design and develop custom web and 
                                    software solutions tailored to your 
                                    business requirements, ensuring flexibility, 
                                    performance, and long-term scalability.
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    Explore Custom Solutions
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon2.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    API development
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build secure, high-performance APIs 
                                    that enable seamless communication between 
                                    applications, platforms, and services.
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    View API Services
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon3.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Third-party integrations
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    We integrate CRMs, payment gateways, 
                                    analytics, and cloud services to 
                                    streamline operations and improve efficiency.
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon4.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                        Maintenance & support
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Ongoing monitoring, updates, and 
                                    technical support to keep your 
                                    systems secure, fast, and running smoothly.
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    Get Support
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon5.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Zapier Social Media
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon6.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Slack Contacts Sync
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon7.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Shopify Contacts Sync
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon8.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Github integration
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- seamless integration section End -->

        <!-- seamless integration section Start -->
        <section class="seamless-integration py-120 bg-light">
            <div class="container max-w-1400-px">
                <div class="max-w-672-px text-center mx-auto tw-mb-12">
                    <h3 class="splitTextStyleOne text-heading text-capitalize">
                        <span class="d-inline-block fw-semibold"> Client Trust & </span>
                        <span class="text-green d-inline-block fw-semibold">Recognition</span>
                    </h3>
                    <p class="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">
                        We built and maintained a high-performance WooCommerce e-commerce system optimized for scalability, security, and conversions.                          </p>
                    </p>        
                </div>

                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="position-relative tw-pb-8 tw-ps-12 h-100">
                            <div class="bg-white tw-p-205 tw-rounded-3xl h-100 tw-min-h-400-px">
                                <div class="position-relative max-w-390-px w-100">
                                                <img
                                                    src="{{asset('assets/images/thumbs/service-details-video-img.jpg')}}"
                                                    alt="Thumb"
                                                    class="w-100 h-100 object-fit-cover"/>
                                                <a
                                                    href="https://www.youtube.com/watch?v=MFLVmAE4cqg"
                                                    class="play-button bg-light-animation tw-w-75-px tw-h-75-px d-inline-flex justify-content-center align-items-center bg-white text-main-600 hover-text-main-two-700 rounded-circle tw-text-xl position-absolute tw-start-50 tw--translate-middle top-50 z-1"
                                                >
                                                    <i
                                                        class="ph-fill ph-play"
                                                    ></i>
                                                </a>
                                            </div>
                            </div>
                            <img src="{{asset('assets/images/thumbs/faq-img-1.png')}}" alt=""
                                class="position-absolute top-0 tw-end-0 tw-mt-9 tw--me-48-px" />
                            <img src="{{asset('assets/images/thumbs/faq-img-2.png')}}" alt=""
                                class="position-absolute bottom-0 tw-end-0 tw--me-32-px" />
                            <img src="{{asset('assets/images/thumbs/faq-img-3.png')}}" alt=""
                                class="position-absolute bottom-0 tw-start-0 tw--ms-24-px" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- seamless integration section End -->

        <!-- Services section start -->
        <section class="services py-120 position-relative z-1 gradient-bg-five">
            <img src="{{asset('assets/images/shapes/rope-shape.png')}}" alt="Rope"
                class="position-absolute tw-start-0 tw-ms-80-px tw-mt-16 top-0 z-n1" />
            <img src="{{asset('assets/images/shapes/matherboard-shape.png')}}" alt="Shape"
                class="position-absolute top-0 tw-start-0 tw-mt-160-px tw-ms-128-px d-lg-block d-none z-n1 opacity-1" />

            <div class="container max-w-1552-px">
                <div class="max-w-672-px text-center mx-auto tw-mb-12">
                    <h2 class="splitTextStyleOne text-white">
                        Speed.
                        <span class="font-dm-serif fst-italic fw-normal">
                            Reliability</span>. Efficiency.
                    </h2>
                    <p class="text-neutral-300 tw-mt-5 splitTextStyleOne max-w-570-px mx-auto">
                        In today's competitive business, the demand for efficient In
                        today's competitive cost-effective IT solutions has never been
                        more critic. business
                    </p>
                </div>

                <div class="service-slider swiper">
                    <div class="d-flex flex-wrap gap-3 swiper-wrapper1 why-choose-us">
                        <div class="swiper-slide w-25 tw-pb-105" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                            <div
                                class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                <div
                                    class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                    <span class="tw-mb-13 group-hover-item-text-invert">
                                        <img src="{{asset('assets/images/icons/service-icon3.svg')}}" alt="Icon"
                                            class="animate__heartBeat" />
                                    </span>
                                    <div class="">
                                        <div class="group-hover-item-d-none tw-mb-4">
                                            <span
                                                class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">Easy
                                                Invoicing</span>
                                        </div>
                                        <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                            Live and kicking. 24/7.
                                        </h5>
                                        <p
                                            class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                            Web hosting provides everything you idea online. From
                                            where your website
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center tw-gap-205 text-main-600 fw-bold d-lg-flex align-items-center tw-gap-305 group-hover-text-white tw-duration-200 tw-mt-6 tw-transition-0">
                                            Learn More
                                            <i class="ph ph-arrow-right tw-text-sm"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide w-25 tw-pb-105" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                            <div
                                class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                <div
                                    class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                    <span class="tw-mb-13 group-hover-item-text-invert">
                                        <img src="{{asset('assets/images/icons/service-icon3.svg')}}" alt="Icon"
                                            class="animate__heartBeat" />
                                    </span>
                                    <div class="">
                                        <div class="group-hover-item-d-none tw-mb-4">
                                            <span
                                                class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">Easy
                                                Invoicing</span>
                                        </div>
                                        <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                            Live and kicking. 24/7.
                                        </h5>
                                        <p
                                            class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                            Web hosting provides everything you idea online. From
                                            where your website
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center tw-gap-205 text-main-600 fw-bold d-lg-flex align-items-center tw-gap-305 group-hover-text-white tw-duration-200 tw-mt-6 tw-transition-0">
                                            Learn More
                                            <i class="ph ph-arrow-right tw-text-sm"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide w-25 tw-pb-105" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                            <div
                                class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                <div
                                    class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                    <span class="tw-mb-13 group-hover-item-text-invert">
                                        <img src="{{asset('assets/images/icons/service-icon3.svg')}}" alt="Icon"
                                            class="animate__heartBeat" />
                                    </span>
                                    <div class="">
                                        <div class="group-hover-item-d-none tw-mb-4">
                                            <span
                                                class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">Easy
                                                Invoicing</span>
                                        </div>
                                        <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                            Live and kicking. 24/7.
                                        </h5>
                                        <p
                                            class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                            Web hosting provides everything you idea online. From
                                            where your website
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center tw-gap-205 text-main-600 fw-bold d-lg-flex align-items-center tw-gap-305 group-hover-text-white tw-duration-200 tw-mt-6 tw-transition-0">
                                            Learn More
                                            <i class="ph ph-arrow-right tw-text-sm"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide w-25 tw-pb-105" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                            <div
                                class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                <div
                                    class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                    <span class="tw-mb-13 group-hover-item-text-invert">
                                        <img src="{{asset('assets/images/icons/service-icon3.svg')}}" alt="Icon"
                                            class="animate__heartBeat" />
                                    </span>
                                    <div class="">
                                        <div class="group-hover-item-d-none tw-mb-4">
                                            <span
                                                class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">Easy
                                                Invoicing</span>
                                        </div>
                                        <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                            Live and kicking. 24/7.
                                        </h5>
                                        <p
                                            class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                            Web hosting provides everything you idea online. From
                                            where your website
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center tw-gap-205 text-main-600 fw-bold d-lg-flex align-items-center tw-gap-305 group-hover-text-white tw-duration-200 tw-mt-6 tw-transition-0">
                                            Learn More
                                            <i class="ph ph-arrow-right tw-text-sm"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div
                    class="service-slider-pagination pagination-style-two d-lg-non d-flex align-items-center justify-content-center tw-mt-605">
                </div> -->
            </div>
        </section>
        <!-- Services section End -->

        <!-- Task Management Section Start -->
        <section class="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half">
            <div class="container">
                <div
                    class="text-end tw--mb-40-px position-relative z-2"
                >
                    <img
                        src="{{asset('assets/images/thumbs/laptop-man.png')}}"
                        alt="Image"
                        class="tw-me-84-px"
                    />
                </div>

                <div
                    class="bg-green-deep tw-rounded-3xl bg-green-deep tw-pt-100-px position-relative z-1"
                >
                    <img
                        src="{{asset('assets/images/shapes/hill-shape.png')}}"
                        alt="Hill Shape"
                        class="position-absolute w-100 h-100 top-0 tw-start-0 z-n1"
                    />
                    <img
                        src="{{asset('assets/images/thumbs/task-management-img.png')}}"
                        alt="Image"
                        class="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none"
                    />

                    <div
                        class="tw-mb-8 text-center max-w-570-px mx-auto"
                    >
                        <div
                            class="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13"
                            data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600"
                        >
                            <div class="">
                                Up to
                                <span
                                    class="text-yellow text-stroke-yellow"
                                    >70%</span
                                >
                                off managed cloud hosting
                            </div>
                        </div>
                        <h3 class="splitTextStyleOne text-white">
                            Ready to revolutionize our service?
                        </h3>

                        <div class="d-none">
                            <a
                                href="javascript:void(0)"
                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold tw-mt-7"
                                data-block="button"
                            >
                                <span class="button__flair"></span>
                                <div
                                    class="d-flex align-items-center tw-gap-2 z-1"
                                >
                                    <span class="button__label"
                                        >Download for free</span
                                    >
                                </div>
                            </a>
                        </div>
                        <div class="d-block">
                            <div
                                class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap"
                            >
                                <a
                                    href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                    data-block="button"
                                >
                                    <span class="button__flair"></span>
                                    <div
                                        class="d-flex align-items-center tw-gap-2 z-1"
                                    >
                                        <span class="button__label"
                                            >Get Started Trial</span
                                        >
                                    </div>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                    data-block="button"
                                >
                                    <span class="button__flair"></span>
                                    <div
                                        class="d-flex align-items-center tw-gap-2 z-1"
                                    >
                                        <span class="button__label"
                                            >Get Started Trial</span
                                        >
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tw-pt-8 text-center">
                        <div
                            class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6"
                        >
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill"
                                >Project management</span
                            >
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill"
                                >Technology</span
                            >
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                >Technology</span
                            >
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill"
                                >Project management</span
                            >
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill"
                                >Technology</span
                            >
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                >Technology</span
                            >
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill"
                                >Project management</span
                            >
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                >Technology</span
                            >
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill"
                                >Project management</span
                            >
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill"
                                >Technology</span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Task Management Section End -->



        <!-- footer area -->
            @include('frontend.includes.footers.footerOne')
        <!-- footer area end -->

    </div>
    </div>



@endsection
