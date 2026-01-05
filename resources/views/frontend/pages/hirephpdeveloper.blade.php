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
                                Simplify task
                                <span class="text-gradient-teal font-dm-serif fst-italic fw-normal">management</span>
                                and prioritize work
                            </h1>
                            <p class="splitTextStyleOne text-white tw-text-lg tw-mt-8">Sassly-<span
                                    class="text-yellow">CRM</span> in the past allowing you to focus more on your business
                                or simply enjoy your newfound legal time to reflect leaving</p>

                            <div class="d-flex align-items-center tw-gap-7 tw-mt-11" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="800">
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

                            <div class="d-flex align-items-center tw-gap-7 tw-mt-10">
                                <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span
                                        class="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                                        <i class="ph-bold ph-check"></i>
                                    </span>
                                    <span class="text-white">3-Day Free Trial</span>
                                </div>
                                <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                                        <i class="ph-bold ph-check"></i>
                                    </span>
                                    <span class="text-white">No Credit Card</span>
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
                                    Up to <span class="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                                </div>
                            </div>
                            <h2 class="splitTextStyleOne text-heading text-capitalize">
                                Supercharge
                                <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">daily work</span>
                                with built-in automation
                            </h2>
                            <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                Sassly-CRM in the past allowing you to focus more on your business simply enjoy your
                                newfound legal time to reflect leaving pen</p>

                            <div class="tw-mt-9 d-flex flex-column align-items-start tw-gap-6">
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">Workflow streamlining</span>
                                </div>
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">Expedite onboarding with clear prioritization</span>
                                </div>
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">Collaborate on ideas 7x faster</span>
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
                                    Up to <span class="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                                </div>
                            </div>
                            <h2 class="splitTextStyleOne text-heading text-capitalize">
                                Powerful & life-saving
                                <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">task manager</span>
                            </h2>
                            <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                Sassly-CRM in the past allowing you to focus more on your business simply enjoy your
                                newfound legal time to reflect leaving pen</p>

                            <div class="tw-mt-13 d-flex flex-column tw-gap-12">
                                <div class="d-flex align-items-start tw-gap-10 animation-item" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span class="tw-mt-105 animate__wobble">
                                        <img src="{{asset('assets/images/icons/task-manager-icon1.svg')}}" alt="Icon">
                                    </span>
                                    <div class="">
                                        <h5 class="tw-mb-6">Automate Task Creation</h5>
                                        <p class="text-neutral-600 max-w-432-px">In today's competitive business, the
                                            demand for efficient cost-effective IT solutions has never been more critic.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start tw-gap-10 animation-item" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-mt-105 animate__wobble">
                                        <img src="{{asset('assets/images/icons/task-manager-icon2.svg')}}" alt="Icon">
                                    </span>
                                    <div class="">
                                        <h5 class="tw-mb-6">Simplify your daily routines</h5>
                                        <p class="text-neutral-600 max-w-432-px">In today's competitive business, the
                                            demand for efficient cost-effective IT solutions has never been more critic.</p>
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

                            <div class="d-flex tw-gap-6 tw-max-h-588-px">
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
                                Up to <span class="text-yellow">70%</span> off managed cloud
                                hosting
                            </div>
                            <h2 class="splitTextStyleOne text-heading text-capitalize">
                                Sasstech makes you a better
                                <span class="font-dm-serif fst-italic fw-normal">elevating</span>
                                your team's
                            </h2>
                            <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                In today's competitive business, the demand for efficient In
                                today's competitive cost-effective IT solutions has never
                                been more critic. business
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
                                                class="fw-bold tw-text-lg text-heading hover-underline">Domain</a>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-405 animation-item"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            <span
                                                class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                <i class="animate__heartBeat ph-bold ph-dresser"></i>
                                            </span>
                                            <a href="{{route('pricing')}}"
                                                class="fw-bold tw-text-lg text-heading hover-underline">Web Hosting ₹
                                                79.00/mo</a>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-405 animation-item"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            <span
                                                class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                <i class="animate__heartBeat ph-bold ph-certificate"></i>
                                            </span>
                                            <a href="{{route('pricing')}}"
                                                class="fw-bold tw-text-lg text-heading hover-underline">SSL
                                                Certificates</a>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-405 animation-item"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            <span
                                                class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                <i class="animate__heartBeat ph-bold ph-envelope"></i>
                                            </span>
                                            <a href="{{route('pricing')}}"
                                                class="fw-bold tw-text-lg text-heading hover-underline">Professional
                                                Email</a>
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
                                    <span class="button__label">See Plan & Pricing</span>
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
        <section class="distraction">
            <div class="container max-w-1290-px">
                <div class="position-relative distraction__inner">

                    <div
                        class="max-w-602-px w-100 text-center mx-auto position-absolute z-1 tw-start-50 translate-middle-x top-0 mt-5 pt-lg-5 pt-4">
                        <h2 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
                            Avoid
                            <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">distractions</span>
                            with app integrations
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
        <section class="py-120">
            <div class="container-fluid p-0">
                <!-- what we do Start -->
                <div class="bg-crm overflow-hidden position-relative" id="roadmap-section">
                    <div class="tw-ps-74-px tw-pe-6">
                        <div class="d-flex flex-xl-nowrap flex-wrap tw-gap-126-px">
                            <div class="max-w-432-px w-100 flex-shrink-0">
                                <div class="pt-120 tw-pb-9 position-relative">
                                    <img src="{{asset('assets/images/shapes/curve-arrow-white.png')}}" alt="Arrow"
                                        class="position-absolute top-0 tw-end-0 animate__wobble__two" />

                                    <span
                                        class="tw-py-1 tw-px-705 bg-white-13 text-white tw-text-sm fw-semibold text-capitalize rounded-pill tw-mb-3">What
                                        we do</span>
                                    <h3 class="splitTextStyleOne fw-light tw-leading-104 text-white tw-mb-6">
                                        <span class="d-inline-block fw-semibold">Working Roadmap</span>
                                    </h3>
                                    <p class="splitTextStyleOne text-neutral-400 max-w-432-px">
                                        In today's competitive business,
                                        the demand for efficient and
                                        cost-effective IT solutions has
                                        never been more critical.
                                    </p>
                                    <div class="tw-mt-11 d-flex align-items-center tw-gap-42-px flex-wrap">
                                        <a href="{{route('register')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-three button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800" data-block="button">
                                            <span class="button__flair"></span>
                                            <span class="button__label">Get Started</span>
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
                                                <span class="h5 counter text-white">2.3M+</span>
                                            </div>
                                            <p
                                                class="fw-bold tw-text-sm font-heading text-heading tw-mt-2 counter text-white">
                                                5000+ Client reviews
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
                                            Brainstorming
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-dark-deep tw--mt-8-px">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">02</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon2.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            UX <br />
                                            Research
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-sky-deep tw-mt-505">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">03</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon3.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Product Designing
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-dark-deep tw--mt-28-px">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">04</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon4.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Front-End Development
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-dark-deep tw-mt-8">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">05</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon5.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Usability <br />
                                            Testing
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-pink tw--mt-8-px">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">06</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon6.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Back-End Development
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-main-600 tw-mt-4">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">07</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon7.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            SEO Optimization
                                        </h6>
                                    </div>

                                    <div
                                        class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-sky-deep tw--mt-28-px">
                                        <span
                                            class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">08</span>
                                        <img src="{{asset('assets/images/icons/roadmap-icon8.svg')}}" alt="Icon"
                                            class="animate__swing" />
                                        <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                            Digital Marketing
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

                <!-- Global Increase Start -->
                <div class="pt-120">
                    <h3 class="splitTextStyleOne fw-light tw-leading-104 tw-mb-14 text-center">
                        <span class="d-inline-block">We Makes Globally
                        </span>
                        <span class="d-inline-block fw-semibold">
                             Growth & Increase
                        </span>
                        <span class="d-inline-block">Revenue</span>
                    </h3>
                    <div class="d-flex flex-wrap justify-content-center">
                        <div class="tw-min-h-184-px bg-main-600 tw-py-4 tw-px-4 rounded-pill text-center max-w-388-px w-100"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-white tw-mb-4 fw-medium">
                                $29k
                            </h3>
                            <p class="text-white max-w-228-px mx-auto">
                                Average revenue growth for per
                                successful clients
                            </p>
                        </div>

                        <div class="tw-min-h-184-px bg-main-600 tw-py-4 tw-px-4 rounded-pill max-w-514-px w-100 d-flex align-items-center tw-gap-505 justify-content-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-white tw-mb-4 fw-medium d-inline-flex align-items-center tw-gap-4">
                                <img src="{{asset('assets/images/icons/arrow-up-green.svg')}}" alt="" />
                                88%
                            </h3>
                            <p class="text-white max-w-194-px">
                                Average revenue growth for per
                                successful clients
                            </p>
                        </div>

                        <div class="tw-min-h-184-px bg-white tw-py-4 tw-px-4 rounded-pill max-w-388-px w-100 d-flex align-items-center tw-gap-505 justify-content-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-main-600 fw-medium d-inline-flex align-items-center tw-gap-4">
                                3x
                            </h3>
                            <div class="d-flex align-items-center tw-gap-2">
                                <span class="text-main-two-600 tw-text-2xl fw-semibold">//</span>
                                <p class="text-main-two-600 max-w-194-px">
                                    Faster time to launch
                                </p>
                            </div>
                        </div>

                        <div class="tw-min-h-184-px bg-white tw-py-4 tw-px-4 rounded-pill max-w-490-px w-100 d-flex align-items-center tw-gap-505 justify-content-center border border-main-50"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-main-600 fw-medium d-inline-flex align-items-center tw-gap-4">
                                50%
                            </h3>
                            <p class="text-main-two-600 max-w-194-px">
                                Effective in financial growth than
                                before growth
                            </p>
                        </div>

                        <div class="tw-min-h-184-px bg-main-600 tw-py-4 tw-px-4 rounded-pill text-center max-w-288-px w-100 tw-mt-1 d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-white fw-medium">
                                95%
                            </h3>
                            <p class="text-white max-w-228-px mx-auto">
                                Average positive review
                            </p>
                        </div>

                        <div class="tw-min-h-184-px bg-white tw-py-4 tw-px-4 rounded-pill max-w-514-px w-100 d-flex align-items-center tw-gap-505 justify-content-center border border-main-50"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-main-600 fw-medium d-inline-flex align-items-center tw-gap-4">
                                1.3m
                            </h3>
                            <div class="d-flex align-items-center tw-gap-2">
                                <p class="text-main-two-600 max-w-194-px">
                                    Average revenue growth for per
                                    successful clients
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Global Increase End -->
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
                                        <span class="d-inline-block ">Our Flexible <br>
                                        </span>
                                    </h3>
                                    <h3 class="splitTextStyleOne fw-light tw-leading-104">
                                        <span class="d-inline-block fw-semibold">Hiring Models
                                        </span>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="row gy-4">
                            <div class="col-lg-5">
                                <p class="splitTextStyleOne text-neutral-600 max-w-500-px tw-mb-15">
                                    In today's competitive business, the demand
                                    for efficient and cost-effective IT
                                    solutions has never been more critical.
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
                                            Fixed-price Project
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0">
                                                <p class="text-neutral-500">
                                                    We customize our technology
                                                    to fit your specific need
                                                    ensuring the best possible
                                                    outcomes.
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
                                                Hourly Biling
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0">
                                                <p class="text-neutral-500">
                                                    We customize our technology
                                                    to fit your specific need
                                                    ensuring the best possible
                                                    outcomes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-4 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <h5 class="accordion-header">
                                            <button
                                                class="accordion-button tw-pb-8 tw-pt-4 shadow-none px-0 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree"
                                                data-img="{{asset('assets/images/thumbs/faq-thumb3.png')}}">
                                                Dedicated PHP Development Team
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0">
                                                <p class="text-neutral-500">
                                                    We customize our technology
                                                    to fit your specific need
                                                    ensuring the best possible
                                                    outcomes.
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


                <!-- Pricing Plan three start -->
                <section class="pricing-plan-three py-120">
                    <div class="container">
                        <div class="max-w-602-px text-center mx-auto tw-mb-13">
                            <div class="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <div class="text-gradient-teal">
                                    Up to
                                    <span class="text-yellow text-stroke-yellow">70%</span>
                                    off managed cloud hosting
                                </div>
                            </div>
                            <h2 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
                                Our Expert 
                                <span style="width:130px" class="font-dm-serif fst-italic fw-normal text-gradient-teal">PHP</span>
                               Developer Profiles
                            </h2>
                        </div>

                        <div class="row gy-4">
                            <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600">
                                <div class="position-relative bg-neutral-100 tw-px-7 tw-py-16 bg-white hover-border-main-600">
                                    <div class="">
                                        <div class="tw-ps-205">
                                            <h5 class="tw-mb-1">Entry-level Developer</h5>
                                            <p class="text-neutral-500">
                                                Customized anything in anytime
                                            </p>
                                            <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                            <div class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10">
                                                <h2 class="mb-0">
                                                    $1.99<span class="tw-text-xl fw-medium">/Yearly</span>
                                                </h2>
                                            </div>
                                        </div>
                                        <a href="{{route('login')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                                            data-block="button">
                                            <span class="button__flair"></span>
                                            <div class="d-flex align-items-center tw-gap-2 z-1">
                                                <span class="button__label">Start Free Trial</span>
                                            </div>
                                        </a>
                                        <span class="text-heading tw-mt-3 text-center d-block fw-medium">Renews at
                                            $9.88/month</span>

                                        <div class="tw-ps-205">
                                            <div class="d-flex flex-column tw-gap-5 tw-mt-10">
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Real-time tracking and
                                                        notifications</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Real-time
                                                        analytics</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="640">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Drag and drop
                                                        templates</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="660">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Project
                                                        Management</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="680">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">24/7 email and chat
                                                        support</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="800">
                                <div class="position-relative bg-neutral-100 tw-px-7 tw-py-16 bg-white hover-border-main-600">
                                    <div class="">
                                        <div class="tw-ps-205">
                                            <h5 class="tw-mb-1">
                                                Mid-level Developer
                                            </h5>
                                            <p class="text-neutral-500">
                                                Customized anything in anytime
                                            </p>
                                            <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                            <div class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10">
                                                <h2 class="mb-0">
                                                    $9.99<span class="tw-text-xl fw-medium">/Yearly</span>
                                                </h2>
                                            </div>
                                        </div>
                                        <a href="{{route('login')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                                            data-block="button">
                                            <span class="button__flair"></span>
                                            <div class="d-flex align-items-center tw-gap-2 z-1">
                                                <span class="button__label">Start Free Trial</span>
                                            </div>
                                        </a>
                                        <span class="text-heading tw-mt-3 text-center d-block fw-medium">Renews at
                                            $9.88/month</span>

                                        <div class="tw-ps-205">
                                            <div class="d-flex flex-column tw-gap-5 tw-mt-10">
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Real-time tracking and
                                                        notifications</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Real-time
                                                        analytics</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="640">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Drag and drop
                                                        templates</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="660">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Project
                                                        Management</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="680">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">24/7 email and chat
                                                        support</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="900">
                                <div class="position-relative bg-neutral-100 tw-px-7 tw-py-16 bg-white hover-border-main-600">
                                    <div class="">
                                        <div class="tw-ps-205">
                                            <h5 class="tw-mb-1">Senior-level Developer</h5>
                                            <p class="text-neutral-500">
                                                Customized anything in anytime
                                            </p>
                                            <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                            <div class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10">
                                                <h2 class="mb-0">
                                                    $19.99<span class="tw-text-xl fw-medium">/Yearly</span>
                                                </h2>
                                            </div>
                                        </div>
                                        <a href="{{route('login')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                                            data-block="button">
                                            <span class="button__flair"></span>
                                            <div class="d-flex align-items-center tw-gap-2 z-1">
                                                <span class="button__label">Start Free Trial</span>
                                            </div>
                                        </a>
                                        <span class="text-heading tw-mt-3 text-center d-block fw-medium">Renews at
                                            $9.88/month</span>

                                        <div class="tw-ps-205">
                                            <div class="d-flex flex-column tw-gap-5 tw-mt-10">
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Real-time tracking and
                                                        notifications</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Real-time
                                                        analytics</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="640">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Drag and drop
                                                        templates</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="660">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">Project
                                                        Management</span>
                                                </div>
                                                <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom" data-aos-duration="680">
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                        <i class="text-gradient-teal ph-bold ph-check"></i>
                                                    </span>
                                                    <span class="text-heading fw-semibold tw-text-base">24/7 email and chat
                                                        support</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pricing Plan three End -->

                
                <!-- About Features section Start -->
                <section class="about-features">
                    <div class="container">
                        <div class="text-center mx-auto tw-pb-15 max-w-910-px">
                            <div class="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"> what we
                                offering
                            </div>
                            <h2 class="splitTextStyleOne text-heading text-capitalize tw-leading-none">Simplifying your
                                investment journey</h2>
                            <p class="splitTextStyleOne text-neutral-500 max-w-602-px mx-auto fw-medium tw-mt-5">Discover how
                                Upshift not only simplifies your investment process but also empowers you to make smarter,
                                data-driven decisions.</p>
                        </div>

                        <div class="row gy-4">
                            <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600">
                                <div
                                    class="tw-rounded-2xl bg-neutral-50 bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-100 group animation-item group-item tw-transition tw-duration-200 h-100">
                                    <span
                                        class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                        <img src="{{asset('assets/images/icons/about-features-two-icon1.svg')}}" alt="Icon"
                                            class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                                    </span>
                                    <h4 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                        Query Review</h4>
                                    <p
                                        class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                        Web hosting provides everything idea online. From where your</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="800">
                                <div
                                    class="tw-rounded-2xl bg-neutral-50 bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-100 group animation-item group-item tw-transition tw-duration-200 h-100">
                                    <span
                                        class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                        <img src="{{asset('assets/images/icons/about-features-two-icon2.svg')}}" alt="Icon"
                                            class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                                    </span>
                                    <h4 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                        Initial Interview</h4>
                                    <p
                                        class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                        Web hosting provides everything idea online. From where your</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="1000">
                                <div
                                    class="tw-rounded-2xl bg-neutral-50 bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-100 group animation-item group-item tw-transition tw-duration-200 h-100">
                                    <span
                                        class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                        <img src="{{asset('assets/images/icons/about-features-two-icon3.svg')}}" alt="Icon"
                                            class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                                    </span>
                                    <h4 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                        Technical Assessment</h4>
                                    <p class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                        Web hosting provides everything idea online. From where your</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="1200">
                                <div
                                    class="tw-rounded-2xl bg-neutral-50 bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-100 group animation-item group-item tw-transition tw-duration-200 h-100">
                                    <span
                                        class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                        <img src="{{asset('assets/images/icons/about-features-two-icon4.svg')}}" alt="Icon"
                                            class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                                    </span>
                                    <h4 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                        Final Interview & Offer</h4>
                                    <p
                                        class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                        Web hosting provides everything idea online. From where your</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- About Features section End -->

                
                <!-- Faq Two Section Start -->
                <section class="faq-two py-120">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <div class="">
                                    <div class="bg-neutral-100 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                        <span class="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                                        Up to
                                        <span class="text-yellow">70%</span> off
                                        managed cloud hosting
                                    </div>
                                    <h3 class="splitTextStyleOne text-heading text-capitalize">
                                        Frequently ask
                                        <span class="font-dm-serif fst-italic fw-normal">Questions</span>
                                    </h3>
                                    <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-350-px fw-medium">
                                        Create tasks with various custom
                                        statuses to focus more on your keep
                                        track of the progress of each why in
                                    </p>

                                    <div class="tw-mt-9" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="900">
                                        <a href="{{route('register')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                                            data-block="button">
                                            <span class="button__flair"></span>
                                            <span class="button__label">get started trial</span>
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
                                                    What is Sassly?
                                                </button>
                                            </h5>
                                            <div id="collapseOne_2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample2">
                                                <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                    <p class="text-neutral-500">
                                                        GoDaddy offers more than just a platform...
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
                                                    Why should I choose Sassly?
                                                </button>
                                            </h5>
                                            <div id="collapseTwo_2" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionExample2">
                                                <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                    <p class="text-neutral-500">
                                                        GoDaddy offers more than just a platform...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                            <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                                <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree_2"
                                                    aria-expanded="false" aria-controls="collapseThree_2">
                                                    Can I upgrade to a different plan at a later time?
                                                </button>
                                            </h5>
                                            <div id="collapseThree_2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample2">
                                                <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                    <p class="text-neutral-500">
                                                        GoDaddy offers more than just a platform...
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
                                                    What’s the cost of additional users?
                                                </button>
                                            </h5>
                                            <div id="collapseFour_2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample2">
                                                <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                    <p class="text-neutral-500">
                                                        GoDaddy offers more than just a platform...
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
                                                    What’s the commitment?
                                                </button>
                                            </h5>
                                            <div id="collapseFive_2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample2">
                                                <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                    <p class="text-neutral-500">
                                                        GoDaddy offers more than just a platform...
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
                                                    What languages does Sassly AI support?
                                                </button>
                                            </h5>
                                            <div id="collapseSix_2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample2">
                                                <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                    <p class="text-neutral-500">
                                                        GoDaddy offers more than just a platform...
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
                 

                <!-- Task Management Section Start -->
                <section class="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half">
                    <div class="container">
                        <div class="text-end tw--mb-40-px position-relative z-2">
                            <img src="{{asset('assets/images/thumbs/laptop-man.png')}}" alt="Image" class="tw-me-84-px" />
                        </div>

                        <div class="bg-green-deep tw-rounded-3xl bg-green-deep tw-pt-100-px position-relative z-1">
                            <img src="{{asset('assets/images/shapes/hill-shape.png')}}" alt="Hill Shape"
                                class="position-absolute w-100 h-100 top-0 tw-start-0 z-n1" />
                            <img src="{{asset('assets/images/thumbs/task-management-img.png')}}" alt="Image"
                                class="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none" />

                            <div class="tw-mb-8 text-center max-w-570-px mx-auto">
                                <div class="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <div class="">
                                        Up to
                                        <span class="text-yellow text-stroke-yellow">70%</span>
                                        off managed cloud hosting
                                    </div>
                                </div>
                                <h3 class="splitTextStyleOne text-white">
                                    Ready to revolutionize our service?
                                </h3>

                                <div class="d-none">
                                    <a href="javascript:void(0)"
                                        class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold tw-mt-7"
                                        data-block="button">
                                        <span class="button__flair"></span>
                                        <div class="d-flex align-items-center tw-gap-2 z-1">
                                            <span class="button__label">Download for free</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-block">
                                    <div class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                                        <a href="javascript:void(0)"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                            data-block="button">
                                            <span class="button__flair"></span>
                                            <div class="d-flex align-items-center tw-gap-2 z-1">
                                                <span class="button__label">Get Started Trial</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                            data-block="button">
                                            <span class="button__flair"></span>
                                            <div class="d-flex align-items-center tw-gap-2 z-1">
                                                <span class="button__label">Get Started Trial</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-pt-8 text-center">
                                <div
                                    class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">Project
                                        management</span>
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-paste rounded-pill">Technology</span>
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading gradient-bg-six rounded-pill">Technology</span>
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-yellow rounded-pill">Project
                                        management</span>
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-orange rounded-pill">Technology</span>
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading gradient-bg-six rounded-pill">Technology</span>
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-orange rounded-pill">Project
                                        management</span>
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading gradient-bg-six rounded-pill">Technology</span>
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-paste rounded-pill">Project
                                        management</span>
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-pink rounded-pill">Technology</span>
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
@endsection
