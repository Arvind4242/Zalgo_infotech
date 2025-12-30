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

                <!-- Breadcrumb Start Here -->
                <section class="breadcrumb section-bg-two mb-0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center">
                                    <span class="tw-mb-4">
                                        <img
                                            src="{{asset('assets/images/logo/favicon-two.png')}}"
                                            alt="Favicon Two"
                                        />
                                    </span>
                                    <h1
                                        class="mb-0 splitTextStyleOne text-capitalize"
                                    >
                                        Hire PHP Developer
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->


                <!-- Download App section start -->
                <section class="download-app py-120">
                    <div class="container">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-6">
                                <div class="">
                                    <img src="{{asset('assets/images/thumbs/download-app-thumb.png')}}" alt="Thumbnail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <div class="max-w-780-px text-start mx-auto">
                                        <div class="bg-main-600 tw-py-2 tw-px-7 rounded-pill text-white fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-6 min-w-max common-shadow-twentyNine"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                            what we offering
                                        </div>
                                        <h2 class="splitTextStyleOne text-heading text-capitalize tw-leading-none">Why should
                                            you choose Sassly mobile app.</h2>
                                        <p
                                            class="text-neutral-600 tw-text-lg tw-mt-605 splitTextStyleOne max-w-5 fw-medium tw-leading-145 max-w-570-px">
                                            Sassly-CRM in the past allowing you to focus more on your business simply enjoy your
                                            newfound legal time to reflect leaving pen</p>
                                    </div>


                                    <div class="d-flex flex-column tw-gap-5 tw-mt-12">
                                        <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                            <span
                                                class="tw-w-8 tw-h-8 bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center tw-text-lg text-heading">
                                                <i class="ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading tw-text-lg fw-semibold">Registration and
                                                onboarding</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="900">
                                            <span
                                                class="tw-w-8 tw-h-8 bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center tw-text-lg text-heading">
                                                <i class="ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading tw-text-lg fw-semibold">Transaction management</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="1100">
                                            <span
                                                class="tw-w-8 tw-h-8 bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center tw-text-lg text-heading">
                                                <i class="ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading tw-text-lg fw-semibold"> Standard banking layout</span>
                                        </div>
                                    </div>
                                    <div class="tw-mt-13" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="1200">
                                        <a href="{{route('register')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-505 fw-semibold common-shadow-inset-one"
                                            data-block="button">
                                            <span class="button__flair"></span>
                                            <span class="button__label">Download app now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Download App section end -->



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
