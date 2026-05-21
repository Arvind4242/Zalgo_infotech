@extends('frontend.layouts.app')
@section('title', 'Expert Heavy Equipment – Case Study')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">

        <!-- Banner Section Start -->
        <section class="case-study-banner tw-py-10 overflow-hidden position-relative">
            <div class="container max-w-1400-px">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6 mt-0">
                        <div class="case-study-content">
                            <h1 class="splitTextStyleOne fw-light tw-leading-104">
                                <span class="d-inline-block">Building a Trusted</span>
                                <span class="text-green d-inline-block fw-semibold">Digital Presence</span>
                                <span class="d-inline-block fw-semibold">for a</span>
                                <span class="text-green d-inline-block fw-semibold">Veteran-Owned</span>
                                <span class="d-inline-block fw-semibold">Heavy Equipment Business</span>
                            </h1>
                            <p style="color:rgb(33 74 2);" class="fs-4 h5 mt-3 pt-1 text-heading tw-mt-20 tw-text-lg">
                                WordPress | WooCommerce | Twilio | Wordfence | SEO
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('assets/images/case-study/experthe-case-study.png')}}" alt="Expert Heavy Equipment" class="w-100 h-100 object-fit-cover" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->

        <!-- Project Meta -->
        <section class="search-domain-two tw-pt-10 tw-pb-10 position-relative z-1 zal-projet-type">
            <div class="container">
                <div class="row gy-4 select-domain-wrapper">
                    <div class="col-md-12">
                        <div class="d-flex tw-gap-305 flex-wrap">
                            <div class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item pb-3">
                                <img src="{{asset('assets/images/thumbs/pltform.gif')}}" alt="Platform" class="animate__wobble" />
                                <span class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">Platform</span>
                                <span class="p-type">WordPress</span>
                            </div>
                            <div class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item pb-3">
                                <img src="{{asset('assets/images/thumbs/industry.gif')}}" alt="Industry" class="animate__wobble" />
                                <span class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">Industry</span>
                                <span class="p-type">Heavy Equipment</span>
                            </div>
                            <div class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item pb-3">
                                <img src="{{asset('assets/images/thumbs/project-type.gif')}}" alt="Project Type" class="animate__wobble" />
                                <span class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">Project Type</span>
                                <span class="p-type">Long Term</span>
                            </div>
                            <div class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item pb-3">
                                <img src="{{asset('assets/images/thumbs/duration.gif')}}" alt="Duration" class="animate__wobble" />
                                <span class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">Duration</span>
                                <span class="p-type">4+ Years</span>
                            </div>
                            <div class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item pb-3">
                                <img src="{{asset('assets/images/thumbs/region.gif')}}" alt="Region" class="animate__wobble" />
                                <span class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">Region</span>
                                <span class="p-type">USA – Texas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Client Overview -->
        <section class="bg-body-secondary client-overview position-relative py-120 z-1">
            <div class="container">
                <div class="row gy-4 select-domain-wrapper">
                    <div class="col-md-12">
                        <h1 class="splitTextStyleOne fw-light tw-leading-104 text-center">
                            <span class="d-inline-block">Client</span>
                            <span class="text-green d-inline-block fw-semibold">Overview</span>
                        </h1>
                        <p class="fs-3 lh-sm mt-3 h5 mx-auto text-center w-75">
                            Expert Heavy Equipment Inc. (EHE) is a Marine Corps Veteran-owned business based in League City, Texas. They specialize in buying and selling used construction and heavy equipment — nationally and internationally. With approximately 95% of business coming from referrals and returning clients, EHE needed a strong, secure, and professional digital presence to match their reputation in the field.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Business Challenges -->
        <section class="brand-marketing py-120">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6 col-md-12">
                        <div class="ps-5 position-relative pe-lg-5 tw-pb-4 h-100">
                            <div class="tw-rounded-28-px overflow-hidden h-100">
                                <img src="{{asset('assets/images/case-study/bio-img1.jpg')}}" alt="Challenges" class="w-100 h-100 object-fit-cover" />
                            </div>
                            <img src="{{asset('assets/images/shapes/finger-shape.png')}}" alt="Shape"
                                class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="">
                            <h2 class="splitTextStyleOne text-heading fw-semibold text-capitalize">
                                Business
                                <span class="font-dm-serif fw-semibold text-green">Challenges</span>
                            </h2>
                            <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">
                                As EHE grew, several critical challenges needed to be addressed:
                            </p>
                            <div class="tw-mt-5 d-flex flex-column">
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">No professional online presence to showcase their heavy equipment inventory</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Establishing credibility and trust in a competitive used equipment market</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Reaching national and international buyers through digital channels</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Communicating their unique due diligence process (NICB checks, ECM verification) clearly online</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Managing customer inquiries and leads from multiple regions (English & Spanish)</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Ensuring website security and uptime for a business-critical platform</p>
                                </div>
                            </div>
                            <p class="fs-3 fw-medium lh-sm tw-mt-8 tw-text-lg">
                                EHE needed one trusted technology partner to build and sustain their entire digital presence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Role & Responsibilities -->
        <section class="brand-marketing bg-success-subtle py-120">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6 col-md-12">
                        <div class="">
                            <h2 class="splitTextStyleOne text-heading fw-semibold text-capitalize">
                                Our Role &
                                <span class="font-dm-serif fw-semibold text-green">Responsibilities</span>
                            </h2>
                            <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">
                                We acted as EHE's complete digital partner — from website design to security and ongoing support.
                            </p>
                            <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">Our responsibilities included:</p>
                            <div class="tw-mt-5 d-flex flex-column">
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Custom WordPress website design & development</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">WooCommerce integration for equipment listings and inquiries</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Twilio SMS integration for real-time customer communication (English & Spanish lines)</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Website security hardening with Wordfence</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">SEO optimization for heavy equipment & construction keywords</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Mobile-responsive design for on-the-field access by buyers and staff</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Content strategy showcasing EHE's 4 key differentiators (Due Diligence, Research, Pricing, IEDA)</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Ongoing maintenance, updates, and performance monitoring</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="ps-5 position-relative tw-pb-4 h-100">
                            <div class="tw-rounded-28-px overflow-hidden h-100">
                                <img src="{{asset('assets/images/case-study/bio-img2.jpg')}}" alt="Our Role" class="w-100 h-100 object-fit-cover" />
                            </div>
                            <img src="{{asset('assets/images/shapes/finger-shape.png')}}" alt="Shape"
                                class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solution Delivered -->
        <section class="brand-marketing py-120">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6 col-md-12">
                        <div class="ps-5 position-relative pe-lg-5 tw-pb-4 h-100">
                            <div class="tw-rounded-28-px overflow-hidden h-100">
                                <img src="{{asset('assets/images/case-study/bio-img3.jpg')}}" alt="Solution" class="w-100 h-100 object-fit-cover" />
                            </div>
                            <img src="{{asset('assets/images/shapes/finger-shape.png')}}" alt="Shape"
                                class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="">
                            <h2 class="splitTextStyleOne text-heading fw-semibold text-capitalize">
                                Solution
                                <span class="font-dm-serif fw-semibold text-green">Delivered</span>
                            </h2>
                            <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">
                                We built a professional, secure, and conversion-optimised WordPress website that authentically represents Expert Heavy Equipment's brand and process.
                            </p>
                            <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">Key Solutions:</p>
                            <div class="tw-mt-5 d-flex flex-column">
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Custom WordPress site reflecting their Marine Veteran-owned brand identity</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Equipment listing pages for Backhoes, Excavators, Boom Lifts, Skid Steers & more</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Wordfence security to protect against threats and unauthorized access</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Twilio SMS for instant bilingual (EN/ES) lead communication</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">Trust-building design clearly presenting their NICB checks, ECM research, and IEDA membership</p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">SEO-optimised pages driving national & international buyer traffic</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology Stack -->
        <section class="pb-120 overflow-hidden position-relative">
            <img src="{{asset('assets/images/bg/mash-gradient-bg6.png')}}" alt="Gradient BG"
                class="position-absolute tw-start-0 top-0 w-100 h-100 z-n1" />
            <div class="container max-w-1290-px">
                <div class="row gy-5 align-items-center flex-wrap-reverse">
                    <div class="col-xl-6" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                        <div class="position-relative tw-p-12 text-center">
                            <img src="{{asset('assets/images/shapes/rounded-circle.png')}}" alt="Bg Round" />
                            <img src="{{asset('assets/images/shapes/cms-development.png')}}" alt="Icons"
                                class="position-absolute top-50 start-50 animation-rotate-right" />
                            <img src="{{asset('assets/images/shapes/cms-development2.png')}}" alt="Icons"
                                class="position-absolute top-50 start-50 animation-rotate-left" />
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <h3><span class="counter">4</span>+</h3>
                                <span class="text-heading">Years Partner</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="">
                            <div class="text-start mx-auto tw-mb-12">
                                <div class="tw-mb-10">
                                    <h2 class="splitTextStyleOne text-heading text-capitalize max-w-532-px">
                                        Technology Stack
                                    </h2>
                                    <p class="flex-column d-flex text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                        <span><b>CMS:</b> WordPress</span>
                                        <span><b>E-commerce:</b> WooCommerce</span>
                                        <span><b>Communication:</b> Twilio SMS (EN & ES lines)</span>
                                        <span><b>Security:</b> Wordfence</span>
                                        <span><b>SEO Tools & Analytics</b></span>
                                        <span><b>Location:</b> League City & La Marque, Texas</span>
                                    </p>
                                </div>
                                <div class="tw-mt-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
                                    <a href="{{route('contact')}}"
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
            </div>
        </section>

        <!-- Results & Impact -->
        <section class="seamless-integration py-120">
            <div class="container max-w-1400-px">
                <div class="max-w-672-px text-center mx-auto tw-mb-12">
                    <h3 class="splitTextStyleOne text-heading text-capitalize">Results & Impact</h3>
                    <p class="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">
                        A professional digital transformation that delivered measurable business growth
                    </p>
                </div>
                <div class="border border-neutral-200 tw-rounded-xl common-shadow-sixteen">
                    <div class="row col-border-wrapper">
                        <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon1.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">$3M+ in sales within 18 months of launch</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon2.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">95% business from referrals & returning clients</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon3.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">National & international buyer reach</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon4.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">4+ years of successful ongoing partnership</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why This Case Study Matters -->
        <section class="services py-120 position-relative z-1 gradient-bg-five">
            <img src="{{asset('assets/images/shapes/rope-shape.png')}}" alt="Rope"
                class="position-absolute tw-start-0 tw-ms-80-px tw-mt-16 top-0 z-n1" />
            <div class="container max-w-1552-px">
                <div class="max-w-672-px text-center mx-auto tw-mb-12">
                    <h2 class="splitTextStyleOne text-white">
                        Why This <span class="font-dm-serif fst-italic fw-normal">Case Study</span> Matters
                    </h2>
                </div>
                <div class="service-slider1">
                    <div class="d-flex flex-wrap gap-3 why-choose-us">
                        <div class="w-25 tw-pb-105" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                            <div class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                <div class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                    <span class="tw-mb-13 group-hover-item-text-invert">
                                        <img src="{{asset('assets/images/icons/marketing-report.png')}}" alt="Icon" class="animate__heartBeat" />
                                    </span>
                                    <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">Proves digital growth for traditional industries</h5>
                                </div>
                            </div>
                        </div>
                        <div class="w-25 tw-pb-105" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                            <div class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                <div class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                    <span class="tw-mb-13 group-hover-item-text-invert">
                                        <img src="{{asset('assets/images/icons/satisfaction.png')}}" alt="Icon" class="animate__heartBeat" />
                                    </span>
                                    <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">Demonstrates WordPress & WooCommerce expertise for non-retail sectors</h5>
                                </div>
                            </div>
                        </div>
                        <div class="w-25 tw-pb-105" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                            <div class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                <div class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                    <span class="tw-mb-13 group-hover-item-text-invert">
                                        <img src="{{asset('assets/images/icons/system.png')}}" alt="Icon" class="animate__heartBeat" />
                                    </span>
                                    <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">Shows bilingual communication integration with Twilio SMS</h5>
                                </div>
                            </div>
                        </div>
                        <div class="w-25 tw-pb-105" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                            <div class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                <div class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                    <span class="tw-mb-13 group-hover-item-text-invert">
                                        <img src="{{asset('assets/images/icons/trust.png')}}" alt="Icon" class="animate__heartBeat" />
                                    </span>
                                    <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">Builds trust for B2B clients in high-value equipment industries</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half pt-120">
            <div class="container">
                <div class="text-end tw--mb-40-px position-relative z-2">
                    <img src="{{asset('assets/images/thumbs/laptop-man.png')}}" alt="Image" class="tw-me-84-px" />
                </div>
                <div class="bg-green-deep tw-rounded-3xl tw-pt-100-px position-relative z-1">
                    <img src="{{asset('assets/images/shapes/hill-shape.png')}}" alt="Hill Shape"
                        class="position-absolute w-100 h-100 top-0 tw-start-0 z-n1" />
                    <img src="{{asset('assets/images/thumbs/task-management-img.png')}}" alt="Image"
                        class="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none" />
                    <div class="tw-mb-8 text-center max-w-570-px mx-auto">
                        <div class="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div>Want results like Expert Heavy Equipment? <span class="text-yellow text-stroke-yellow">Let's talk</span></div>
                        </div>
                        <h3 class="splitTextStyleOne text-white">Ready to build your digital presence?</h3>
                        <div class="d-block">
                            <div class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                                <a href="{{ route('contact') }}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Request a Quote</span>
                                </a>
                                <a target="blank" href="https://calendly.com/zalgoinfotec/30min"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Talk to Expert</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tw-pt-8 text-center">
                        <div class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">WordPress Development</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">WooCommerce Listings</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Twilio SMS Integration</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill">Wordfence Security</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">SEO Strategy</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Heavy Equipment Industry</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Mobile Responsive Design</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Veteran-Owned Business</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Lead Generation</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill">Bilingual Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer area -->
        @include('frontend.includes.footers.footerOne')
        <!-- footer area end -->

    </div>
    </div>

@endsection
