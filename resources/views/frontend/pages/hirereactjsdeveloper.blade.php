@extends('frontend.layouts.app')
@section('title', 'Hire PHP Developer - Hire Dedicated PHP Developers')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
    <!-- =========================================
   HERO / BANNER SECTION
========================================= -->
<div id="smooth-content">

        <!-- Banner Three Section start -->
        <section class="banner-three gradient-bg-five position-relative z-1 overflow-hidden">
            <img src="{{asset('assets/images/shapes/cloud-sky.png')}}" alt="Cloud Shape"
                class="position-absolute top-50 tw-end-0 left-right-scale-animation d-sm-block d-none z-n1">

            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="banner-three-content max-w-570-px">
                            <h1 class="splitTextStyleOne text-white text-capitalize tw-leading-none">
                                Hire Dedicated  
                                <span class="text-gradient-teal font-dm-serif fst-italic fw-normal">ReactJS Developers</span>
                                For High-Performance Websites
                            </h1>
                            <p class="splitTextStyleOne text-white tw-text-lg tw-mt-8">Build-<span
                                    class="text-yellow">fast, scalable, and interactive</span> web applications with our experienced React JS developers. 
                                    Hire skilled professionals for full-time, part-time, or project-based React development — globally.
</p>

                            <div class="d-flex align-items-center tw-gap-7 tw-mt-11" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <a href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Hire React JS Developer</span>
                                        <span class="icon">
                                            <img src="{{asset('assets/images/icons/download-cloud-icon.png')}}" alt="Icon">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            

                            <div class="d-flex align-items-center tw-gap-7 tw-mt-10">
                                <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span
                                        class="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                                        <i class="ph-bold ph-check"></i>
                                    </span>
                                    <span class="text-white">NDA Protected</span>
                                </div>
                                 <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span
                                        class="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                                        <i class="ph-bold ph-check"></i>
                                    </span>
                                    <span class="text-white">Flexible Hiring Models</span>
                                </div>
                                <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                                        <i class="ph-bold ph-check"></i>
                                    </span>
                                    <span class="text-white">Global Time-Zone Support</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-three-thumb position-lg-absolute tw-end-0 bottom-0 max-w-58-percent">
                            <img src="{{asset('assets/images/thumbs/banner-three-img.png')}}" alt="Thumb" data-aos="fade-left"
                                data-aos-duration="700">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Three Section End -->

        <!-- Automation Section start -->
        <section class="automation pt-120 position-relative z-1 tw-pb-94-px">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="automation-content">
                            <div class="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <div class="text-gradient-teal">
                                    Save Up to <span class="text-yellow text-stroke-yellow">60%</span> on Development Costs
                                </div>
                            </div>
                            <h2 class="splitTextStyleOne text-heading text-capitalize">
                                Why Clients 
                                <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">Choose</span>
                                 Our Developers
                            </h2>
                            <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                You work directly with skilled developers — no middle layers.</p>

                            <div class="tw-mt-9 d-flex flex-column align-items-start tw-gap-6">
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">Experienced & vetted developers</span>
                                </div>
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">Proven development process</span>
                                </div>
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">Clear communication</span>
                                </div>
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">Flexible engagement models</span>
                                </div>
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">Source code ownership</span>
                                </div>
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">NDA & IP protection</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center tw-gap-7 tw-mt-12" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <a href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Start Free Trial</span>
                                        <span class="icon">
                                            <img src="{{asset('assets/images/icons/download-cloud-icon.png')}}" alt="Icon">
                                        </span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="automation-thumb position-lg-absolute tw-end-0 bottom-0 me-lg-5 pe-xl-5 max-w-58-percent">
                            <img src="{{asset('assets/images/thumbs/automation-thumb.png')}}" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Automation Section End -->

        <!-- Task manager Section start -->
        <section class="task-manager pt-120">
            <div class="container">
                <div class="row gy-4 flex-wrap-reverse">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <div class="task-manager__thumb tw--ms-110-px">
                            <img src="{{asset('assets/images/thumbs/task-manager-thumb.png')}}" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <div class="task-manager__content">
                            <div class="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <div class="text-gradient-teal">
                                    Up to <span class="text-yellow text-stroke-yellow">70%</span> Flexible Engagement
                                </div>
                            </div>
                            <h2 class="splitTextStyleOne text-heading text-capitalize">
                                Flexible 
                                <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">Hiring Options</span>
                            </h2>
                            <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                Easily scale up or down based on your project needs.</p>

                            <div class="tw-mt-13 d-flex flex-column tw-gap-12">
                                <div class="d-flex align-items-start tw-gap-10 animation-item" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span class="tw-mt-105 animate__wobble">
                                        <img src="{{asset('assets/images/icons/task-manager-icon1.svg')}}" alt="Icon">
                                    </span>
                                    <div class="">
                                        <h5 class="tw-mb-6">Dedicated Developer</h5>
                                        <p class="text-neutral-600 max-w-432-px">Monthly basis</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start tw-gap-10 animation-item" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-mt-105 animate__wobble">
                                        <img src="{{asset('assets/images/icons/task-manager-icon2.svg')}}" alt="Icon">
                                    </span>
                                    <div class="">
                                        <h5 class="tw-mb-6">Hourly Hiring </h5>
                                        <p class="text-neutral-600 max-w-432-px">Pay as you go</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start tw-gap-10 animation-item" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span class="tw-mt-105 animate__wobble">
                                        <img src="{{asset('assets/images/icons/task-manager-icon1.svg')}}" alt="Icon">
                                    </span>
                                    <div class="">
                                        <h5 class="tw-mb-6">Project-Based Hiring </h5>
                                        <p class="text-neutral-600 max-w-432-px">Fixed scope & cost</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Task manager Section End -->


        <!-- About Two Section start -->
        <section class="about-two py-120 position-relative z-1 overflow-hidden">
            <img src="{{asset('assets/images/shapes/squre-box-shape.png')}}" alt="Square shape"
                class="position-absolute top-50 tw-start-0 tw-ms-128-px animate__wobble__two z-n1 d-lg-block d-none" />

            <div class="container">
                <div class="row gy-4 flex-wrap-reverse">
                    <!-- About two thumbs slider start -->
                    <div class="col-lg-5">
                        <div class="tw-rounded-lg background-img tw-px-7 bg-img position-relative max-w-570-px"
                            data-background-image="{{asset('assets/images/thumbs/about-two-img-bg.png')}}">
                            <img src="{{asset('assets/images/shapes/finger-shape.png')}}" alt="Shape"
                                class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />

                            <div class="d-flex tw-gap-6 tw-max-h-666-px">
                                <!-- First Slider start -->
                                <div class="swiper overflow-hidden about-two-thumbs-slider-one w-50">
                                    <div class="swiper-wrapper transition-timing-linear tw-gap-6">
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img1.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img2.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img3.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img1.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img2.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img3.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img1.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img2.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img3.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- First Slider end -->

                                <!-- Second Slider start -->
                                <div class="swiper overflow-hidden about-two-thumbs-slider-two w-50">
                                    <div class="swiper-wrapper transition-timing-linear tw-gap-6">
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img1.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img2.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img3.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img1.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img2.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img3.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img1.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img2.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tw-rounded-2xl overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/about-slide-img3.png')}}" alt="Image"
                                                    class="w-100 h-100 object-fit-cover" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Second Slider end -->
                            </div>
                        </div>
                    </div>
                    <!-- About two thumbs slider End -->

                    <!-- About two content start -->
                    <div class="col-lg-7 ps-lg-5">
                        <div class="">
                            <div class="bg-neutral-100 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <span class="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                                Up to <span class="text-yellow">60%</span>Cost-Effective React JS Development
                            </div>
                            <h2 class="splitTextStyleOne text-heading text-capitalize">
                               React JS 
                                <span class="font-dm-serif fst-italic fw-normal">Developers</span>
                                Can Help You With:
                            </h2>
                            <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                In today’s fast-paced digital landscape, businesses need dynamic, scalable, and 
                                high-performing web applications. Our React JS developers specialize in building 
                                modern user interfaces and robust frontends that deliver exceptional 
                                user experiences and measurable business results.
                            </p>

                            <div class="tw-mt-8">
                                <div class="d-flex align-items-center tw-gap-16">
                                    <div class="d-flex flex-column tw-gap-305">
                                        <div class="d-flex align-items-center tw-gap-405 animation-item"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            <span
                                                class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                <i class="animate__heartBeat ph-bold ph-magnifying-glass"></i>
                                            </span>
                                            <a href="{{route('pricing')}}"
                                                class="fw-bold tw-text-lg text-heading hover-underline">Custom React JS application development</a>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-405 animation-item"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            <span
                                                class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                <i class="animate__heartBeat ph-bold ph-dresser"></i>
                                            </span>
                                            <a href="{{route('pricing')}}"
                                                class="fw-bold tw-text-lg text-heading hover-underline">Single Page Applications (SPAs) using React</a>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-405 animation-item"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            <span
                                                class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                <i class="animate__heartBeat ph-bold ph-certificate"></i>
                                            </span>
                                            <a href="{{route('pricing')}}"
                                                class="fw-bold tw-text-lg text-heading hover-underline">Responsive & mobile-first UI development</a>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-405 animation-item"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            <span
                                                class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                <i class="animate__heartBeat ph-bold ph-envelope"></i>
                                            </span>
                                            <a href="{{route('pricing')}}"
                                                class="fw-bold tw-text-lg text-heading hover-underline">Reusable component-based architecture</a>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-405 animation-item"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            <span
                                                class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                <i class="animate__heartBeat ph-bold ph-envelope"></i>
                                            </span>
                                            <a href="{{route('pricing')}}"
                                                class="fw-bold tw-text-lg text-heading hover-underline">State management (Redux, Context API, Zustand)</a>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-405 animation-item"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            <span
                                                class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                <i class="animate__heartBeat ph-bold ph-envelope"></i>
                                            </span>
                                            <a href="{{route('pricing')}}"
                                                class="fw-bold tw-text-lg text-heading hover-underline">API integration (REST & GraphQL)</a>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-405 animation-item"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            <span
                                                class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                <i class="animate__heartBeat ph-bold ph-envelope"></i>
                                            </span>
                                            <a href="{{route('pricing')}}"
                                                class="fw-bold tw-text-lg text-heading hover-underline">Performance optimization & code splitting</a>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-405 animation-item"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            <span
                                                class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                <i class="animate__heartBeat ph-bold ph-envelope"></i>
                                            </span>
                                            <a href="{{route('pricing')}}"
                                                class="fw-bold tw-text-lg text-heading hover-underline">Maintenance, upgrades & ongoing support</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center tw-gap-9 tw-ms-705 d-sm-flex d-none flex-shrink-0">
                                        <span class="tw-h-114-px tw-w-1-px bg-neutral-200"></span>
                                        <span class="fw-bold tw-text-lg text-heading text-uppercase">OR</span>
                                    </div>
                                    <div class="tw-ms-205 left-right-animation d-sm-flex d-none">
                                        <img src="{{asset('assets/images/shapes/curve-arrow-two.png')}}" alt="img" />
                                    </div>
                                </div>
                            </div>
                            <div class="tw-mt-8 max-w-500-px" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <a href="{{route('pricing')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-lg-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-15 tw-rounded-md tw-py-505 fw-medium"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Get Free Consultation</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- About two content end -->
                </div>
            </div>
        </section>
        <!-- About Two Section end -->


        <!-- Distraction section start -->
        <section class="distraction pb-120">
            <div class="container max-w-1290-px">
                <div class="position-relative distraction__inner">

                    <div
                        class="max-w-602-px w-100 text-center mx-auto position-absolute z-1 tw-start-50 translate-middle-x top-0 mt-5 pt-lg-5 pt-4">
                        <h2 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
                            ReactJS 
                            <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">Tech </span>
                            Stack
                        </h2>
                    </div>


                    <div class="">
                        <img src="{{asset('assets/images/shapes/net-shape.png')}}" alt="Net Shape" data-aos="zoom-in"
                            data-aos-duration="1500">
                    </div>
                    <div class="">
                        <div class="distraction-icon one position-absolute z-1 animation-scalation">
                            <img src="{{asset('assets/images/thumbs/distraction-icon1.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon two position-absolute z-1 animation-upDown">
                            <img src="{{asset('assets/images/thumbs/distraction-icon2.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon three position-absolute z-1 animation-upDown animation-delay-1">
                            <img src="{{asset('assets/images/thumbs/distraction-icon3.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon four position-absolute z-1 animation-upDown animation-delay-2">
                            <img src="{{asset('assets/images/thumbs/distraction-icon4.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon five position-absolute z-1 animation-scalation animation-delay-1">
                            <img src="{{asset('assets/images/thumbs/distraction-icon5.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon six position-absolute z-1 animation-scalation animation-delay-2">
                            <img src="{{asset('assets/images/thumbs/distraction-icon6.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon seven position-absolute z-1">
                            <img src="{{asset('assets/images/thumbs/distraction-icon7.png')}}" alt="Icon Image" class="">
                        </div>
                    </div>


                    <div class="d-flex align-items-center justify-content-center tw-gap-7 position-absolute z-1 tw-start-50 translate-middle-x bottom-0 mb-2 w-100"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                        <a href="javascript:void(0)"
                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                            data-block="button">
                            <span class="button__flair"></span>
                            <div class="d-flex align-items-center tw-gap-2 z-1">
                                <span class="button__label">Start Free Trial</span>
                                <span class="icon">
                                    <img src="{{asset('assets/images/icons/download-cloud-icon.png')}}" alt="Icon">
                                </span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Distraction section End -->


        <!-- Roadmap section start -->
        <section class="py-120 section-bg-one">
            <div class="container max-w-1440-px">
                <!-- what we do Start -->
                <div class="bg-main-two-600 tw-rounded-3xl overflow-hidden position-relative" id="roadmap-section">
                    <div class="tw-ps-74-px tw-pe-6">
                        <div class="d-flex flex-xl-nowrap flex-wrap tw-gap-126-px">
                            <div class="max-w-432-px w-100 flex-shrink-0">
                                <div class="pt-120 tw-pb-9 position-relative">
                                    <img src="{{asset('assets/images/shapes/curve-arrow-white.png')}}" alt="Arrow"
                                        class="position-absolute top-0 tw-end-0 animate__wobble__two" />

                                    
                                    <h3 class="splitTextStyleOne fw-light tw-leading-104 text-white tw-mb-6">
                                        <span class="d-inline-block fw-semibold">Our Development Process </span>
                                    </h3>
                                    <p class="splitTextStyleOne text-neutral-400 max-w-432-px">
                                        We follow a structured and transparent 
                                        Node.js development process to 
                                        reduce risk, ensure quality, and 
                                        deliver scalable solutions on time.
                                    </p>
                                    <div class="tw-mt-11 d-flex align-items-center tw-gap-42-px flex-wrap">
                                        <a href="{{route('contact')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-three button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800" data-block="button">
                                            <span class="button__flair"></span>
                                            <span class="button__label">Hire Web Developer</span>
                                        </a>
                                        <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800">
                                            <div class="d-flex align-items-center tw-gap-4">
                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative z-2">
                                                        <img src="{{asset('assets/images/thumbs/client-img1.png')}}" alt="Client Image"
                                                            class="w-100 h-100 object-fit-cover" />
                                                    </div>
                                                    <div
                                                        class="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px z-1">
                                                        <img src="{{asset('assets/images/thumbs/client-img2.png')}}" alt="Client Image"
                                                            class="w-100 h-100 object-fit-cover" />
                                                    </div>
                                                    <div
                                                        class="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px">
                                                        <img src="{{asset('assets/images/thumbs/client-img3.png')}}" alt="Client Image"
                                                            class="w-100 h-100 object-fit-cover" />
                                                    </div>
                                                </div>
                                                <span class="h5 counter text-white">5+</span>
                                            </div>
                                            <p
                                                class="fw-bold tw-text-sm font-heading text-heading tw-mt-2 counter text-white">
                                                5000+ Hours completed
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-grow-1">
                                <div class="d-flex tw-gap-3 flex-wrap">
                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-main-600 tw-mt-705">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">01</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon1.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Requirement Discussion
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-dark-deep tw--mt-8-px">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">02</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon2.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Project Planning & Architecture
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-sky-deep tw-mt-505">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">03</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon3.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Timeline & Cost Finalization
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-dark-deep tw--mt-28-px">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">04</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon4.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Node.js Developer Selection
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-dark-deep tw-mt-8">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">05</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon5.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Onboarding & Kickoff
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-pink tw--mt-8-px">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">06</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon6.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Agile Node.js Development
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-main-600 tw-mt-4">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">07</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon7.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Testing & Quality Assurance
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-sky-deep tw--mt-28-px">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">08</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon8.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Deployment & Ongoing Support
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tw-pb-9">
                        <img src="{{asset('assets/images/shapes/curve-line.png')}}" alt="" class="w-100" />
                    </div>
                </div>
                <!-- what we do end -->
            </div>
        </section>
        <!-- Roadmap section End -->



        <!-- FAQ section start -->
        <section class="faq py-120 position-relative z-1 overflow-hidden">
            <img src="{{asset('assets/images/shapes/faq-bg.png')}}" alt=""
                class="position-absolute tw-start-0 top-0 w-100 h-100 z-n1" />

            <div class="container">
                <div class="tw-mb-8">
                    <span
                        class="tw-py-1 tw-px-705 bg-white text-main-600 tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">tech
                        solution</span>
                    <div class="d-flex flex-lg-nowrap flex-wrap justify-content-between align-items-center">
                        <div class="max-w-672-px">
                            <h3 class="splitTextStyleOne fw-light tw-leading-104">
                                <span class="d-inline-block ">Who Should <br>
                                </span>
                            </h3>
                            <h3 class="splitTextStyleOne fw-light tw-leading-104">
                                <span class="d-inline-block fw-semibold">Hire Our React JS Developers 
                                </span>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-5">
                            <p class="splitTextStyleOne text-neutral-600 max-w-500-px tw-mb-15">
                            Hire experienced React JS developers to build fast, scalable, and interactive web applications tailored to your business needs.
                        </p>
                        <div class="accordion common-accordion accordion-border-left" id="accordionExample">
                            <div class="accordion-item tw-py-4 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <h5 class="accordion-header">
                                    <button
                                        class="accordion-button tw-pb-8 tw-pt-4 shadow-none px-0 bg-transparent h5 collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo"
                                        data-img="{{asset('assets/images/thumbs/faq-thumb2.png')}}">
                                    Companies Building React Applications
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <p class="text-neutral-500">
                                        Modern, high-performance React applications built for speed, scalability, and great user experience.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item tw-py-4 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <h5 class="accordion-header">
                                    <button class="accordion-button tw-pb-8 tw-pt-4 shadow-none px-0 bg-transparent h5"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne"
                                        data-img="{{asset('assets/images/thumbs/faq-thumb1.png')}}">
                                        Teams Needing Dedicated React JS Developers
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <p class="text-neutral-500">
                                           Extend your in-house team with skilled React developers for long-term or project-based needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item tw-py-4 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <h5 class="accordion-header">
                                    <button class="accordion-button tw-pb-8 tw-pt-4 shadow-none px-0 bg-transparent h5"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2"
                                        aria-expanded="false" aria-controls="collapseOne2"
                                        data-img="{{asset('assets/images/thumbs/faq-thumb1.png')}}">
                                        Businesses Scaling Frontend Platforms
                                    </button>
                                </h5>
                                <div id="collapseOne2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <p class="text-neutral-500">
                                      Optimize and scale existing React frontends to handle growth and high user traffic.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item tw-py-4 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <h5 class="accordion-header">
                                    <button class="accordion-button tw-pb-8 tw-pt-4 shadow-none px-0 bg-transparent h5"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                                        aria-expanded="false" aria-controls="collapseOne1"
                                        data-img="{{asset('assets/images/thumbs/faq-thumb1.png')}}">
                                       Enterprises With Complex Web Systems
                                    </button>
                                </h5>
                                <div id="collapseOne1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <p class="text-neutral-500">
                                            Robust React solutions for enterprise-grade applications with advanced integrations.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="position-relative tw-pb-8 tw-ps-12 h-100">
                            <div class="bg-white tw-p-205 tw-rounded-3xl h-100 tw-min-h-400-px">
                                <img src="{{asset('assets/images/thumbs/faq-thumb1.png')}}" id="faqImage" alt="Image"
                                    class="w-100 h-100 object-fit-cover tw-rounded-2xl tw-duration-300" />
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
        <!-- FAQ section end -->       

                
        <!-- Faq Two Section Start -->
        <section class="faq-two py-120">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="">
                            
                            <h3 class="splitTextStyleOne text-heading text-capitalize">
                                Frequently ask
                                <span class="font-dm-serif fst-italic fw-normal">Questions</span>
                            </h3>
                            <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-350-px fw-medium">
                                Everything you need to know before hiring our Node.js developers.
                            </p>

                            <div class="tw-mt-9" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="900">
                                <a href="{{route('contact')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Talk to Our Experts</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ps-xl-5">
                            <div class="accordion common-accordion style-two arrow-bg-orange" id="accordionExample2">
                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_2"
                                            aria-expanded="false" aria-controls="collapseOne_2">
                                           ❓ What does “Hire Dedicated Developer” mean?
                                        </button>
                                    </h5>
                                    <div id="collapseOne_2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                                Hiring a dedicated developer means you get a 
                                                skilled professional who works exclusively on your project, 
                                                just like an in-house employee, but at a much lower cost and with full flexibility.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo_2"
                                            aria-expanded="true" aria-controls="collapseTwo_2">
                                           ❓ Can I hire developers on a full-time, part-time, or hourly basis?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo_2" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                                        Yes. We offer flexible hiring models:</p>
                                                             
                                                            <ul class="d-flex flex-column tw-gap-0">
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                           Full-time
                                                        </p>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                           Part-time
                                                        </p>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                            Hourly
                                                        </p>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                            Project-based
                                                        </p>
                                                    </li>
                                                    
                                                </ul> 
                                                      <p class="text-neutral-500">  You can choose the model that best fits your business needs.</p>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree_2"
                                            aria-expanded="false" aria-controls="collapseThree_2">
                                           ❓ How quickly can I hire a developer?
                                        </button>
                                    </h5>
                                    <div id="collapseThree_2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                               You can start within 24–48 hours after requirement discussion and developer selection.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour_2"
                                            aria-expanded="false" aria-controls="collapseFour_2">
                                           ❓ Will the developer work in my time zone?
                                        </button>
                                    </h5>
                                    <div id="collapseFour_2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                                Yes. Our developers provide global time-zone 
                                                support and can work according to US, UK, Canada, Australia, or 
                                                your local business hours.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive_2"
                                            aria-expanded="false" aria-controls="collapseFive_2">
                                          ❓ How do I communicate with the hired developer?
                                        </button>
                                    </h5>
                                    <div id="collapseFive_2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                               <p class="text-neutral-500">
                                                        You can communicate directly via:</p>
                                                             
                                                            <ul class="d-flex flex-column tw-gap-0">
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                           Slack
                                                        </p>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                           Team
                                                        </p>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                            Zoom / Google Meet
                                                        </p>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                            Email
                                                        </p>
                                                    </li>
                                                    
                                                </ul> 
                                                      <p class="text-neutral-500">You will have direct access to the developer.</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix_2"
                                            aria-expanded="false" aria-controls="collapseSix_2">
                                           ❓ Is my project and data secure?
                                        </button>
                                    </h5>
                                    <div id="collapseSix_2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                               Absolutely. We follow strict security practices and provide <b>NDA (Non-Disclosure Agreement) protection</b> to keep your project and data fully confidential.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix_2"
                                            aria-expanded="false" aria-controls="collapseSix_2">
                                           ❓ Can I replace the developer if I’m not satisfied?
                                        </button>
                                    </h5>
                                    <div id="collapseSix_2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                                Yes. If you are not satisfied with the developer’s performance, we offer free replacement within the agreed trial period.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix_2"
                                            aria-expanded="false" aria-controls="collapseSix_2">
                                          ❓ Who manages the developer?
                                        </button>
                                    </h5>
                                    <div id="collapseSix_2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                             You can manage the developer directly, or we can provide project management support if required.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix_2"
                                            aria-expanded="false" aria-controls="collapseSix_2">
                                        ❓ What is your pricing model?
                                        </button>
                                    </h5>
                                    <div id="collapseSix_2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                           <p class="text-neutral-500">
                                                        Our pricing is transparent and cost-effective, based on:</p>
                                                             
                                                            <ul class="d-flex flex-column tw-gap-0">
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                           Skill level
                                                        </p>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                           Technology
                                                        </p>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                            Engagement model
                                                        </p>
                                                    </li>
                                                    <li class="d-flex align-items-center tw-gap-4 group">
                                                        <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                                            <i class="ph-bold ph-check"></i>
                                                        </span>
                                                        <p class="text-neutral-600">
                                                            No hidden charges.
                                                        </p>
                                                    </li>
                                                    
                                                </ul> 
                                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix_2"
                                            aria-expanded="false" aria-controls="collapseSix_2">
                                         ❓ What technologies do your developers work with?
                                        </button>
                                    </h5>
                                    <div id="collapseSix_2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                            Our developers work with a wide range of technologies including:
                                            Web, Mobile, Backend, Frontend, AI/ML, Cloud, CMS, E-commerce, and Custom Software solutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq Two Section End -->
        
        <!--  Driven section Start -->
        <section class="py-120">
            <div class="container">
                <div class="">
                    <img src="{{asset('assets/images/thumbs/driven-img.png')}}" alt="Thumb" />
                    <div class="max-w-780-px text-center mx-auto">
                        <div class="tw-mb-10 max-w-672-px mx-auto text-center">
                            <h4 class="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                                Ready to Hire a ReactJS Developer?
                            </h4>
                            <h2 class="splitTextStyleOne text-heading text-capitalize">
                                <span class="fw-normal">Let’s discuss your requirements</span>
                                and get started.
                            </h2>
                        </div>
                        <div class="d-flex align-items-center tw-gap-4 justify-content-center tw-mt-10">
                            <div class="d-inline-flex align-items-center tw-gap-5 tw-mt-8 flex-wrap"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <a href="javascript:void(0)"
                                    class="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Hire Now</span>
                                </a>
                                <a href="javascript:void(0)"
                                    class="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-orange-outline hover-style-five hover-text-white button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold bg-white"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Talk to an Expert</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Driven section End -->





<!-- footer area -->
@include('frontend.includes.footers.footerOne')
<!-- footer area end -->
</div>
@endsection
