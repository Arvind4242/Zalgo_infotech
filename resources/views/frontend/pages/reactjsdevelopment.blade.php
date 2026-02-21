@extends('frontend.layouts.app')
@section('title', 'WordPress Development')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
    
        <div id="smooth-content">
             <!-- Banner Four Start -->
            <section style="background-image:url({{asset('assets/images/bg/mash-gradient-bg1.png')}});" class="banner-two position-relative z-1 pb-0">
                <div class="banner-two__inner position-relative">
                    <div class="container">
                        <div class="text-center">
                            <span class="text-capitalize font-caveat fw-bold tw-mb-6 h3">Scalable React & Next.js Development </span>
                            <div class="">
                                <div class="position-relative d-inline-block">
                                    <h1 class="splitTextStyleOne text-capitalize fw-bold tw-leading-none tw-pb-205">
                                        For High-Performance, <br>SEO-Optimized Web Applications
                                    </h1>
                                    <div class="text-end svg-line d-sm-block d-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="489" height="18"
                                            viewBox="0 0 489 18" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M207.684 1.72387C184.71 2.31462 162.007 3.04101 139.867 3.83514C108.526 4.95854 77.1964 6.12068 46.056 7.96073C36.2537 8.5418 26.2994 8.90979 16.5584 9.63613C10.4436 10.0913 2.33552 10.7401 1.27144 10.8757C0.714878 10.9531 0.472071 11.0695 0.393613 11.1082C-0.158042 11.3794 -0.0573853 11.6407 0.253993 11.8441C0.379035 11.9313 0.695229 12.1444 1.57297 12.1735C60.274 14.1588 120.299 10.285 179.071 9.87824C280.993 9.18096 386.003 11.9507 487.115 17.9938C487.998 18.0423 488.856 17.8001 488.979 17.4418C489.126 17.0931 488.489 16.7542 487.606 16.7057C386.322 10.6529 281.14 7.87347 179.022 8.58044C124.249 8.95813 68.3944 12.3575 13.5451 11.1953C14.8053 11.0985 16.0411 11.0016 17.1689 10.9144C26.8707 10.1881 36.7833 9.8298 46.5464 9.24873C77.6205 7.40868 108.886 6.24654 140.186 5.13282C179.022 3.73826 219.55 2.53737 260.397 1.97567C275.01 2.06283 289.574 2.15003 304.137 2.25656C335.643 2.48899 367.296 3.16691 398.728 4.07725C408.192 4.3581 417.656 4.64861 427.12 4.9004C430.258 4.98757 438.349 5.23932 439.477 5.21995C440.875 5.20058 441.144 4.73577 441.169 4.65829C441.242 4.48397 441.193 4.24185 440.507 4.03847C440.433 4.00942 439.992 3.91251 439.011 3.85441C381.86 0.426099 320.834 -0.145196 260.446 0.677985C196.749 0.319659 132.806 0.164636 69.2697 0C68.3601 0 67.6172 0.290577 67.6098 0.648903C67.6049 1.00723 68.338 1.29782 69.2476 1.3075C115.253 1.42371 161.492 1.53986 207.684 1.72387Z"
                                                fill="#006d75" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <p
                                class="splitTextStyleOne text-neutral-600 tw-text-lg tw-mt-405 tw-mt-8 max-w-672-px mx-auto fw-medium">
                                        We build fast, secure, and scalable React & Next.js solutions
                                        for startups and enterprises worldwide.
                            </p>

                            <div class="d-inline-flex align-items-center tw-gap-5 tw-mt-8 flex-wrap" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <a target="blank" href="https://calendly.com/zalgoinfotec/30min"
                                    class="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Get a Free Consultation</span>
                                </a>
                                <a href="{{route('contact')}}"
                                    class="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-orange-outline hover-style-five hover-text-white button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold bg-white"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Request a Quote</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner Four End -->
            
            <!-- About Two Section start -->
            <section class="about-two pt-120 position-relative z-1 overflow-hidden">
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
                                    Up to <span class="text-yellow">90%</span> Faster & SEO-Optimized Frontend Solutions
                                </div>
                                <h2 class="splitTextStyleOne text-heading text-capitalize">
                                   Our React & Next.js Solutions  
                                    <span class="font-dm-serif fst-italic fw-normal">Power High-Performance, SEO-Ready </span>
                                    Digital Experiences
                                </h2>
                                <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                        We build fast, scalable, and SEO-optimized React & Next.js applications
                                        designed for modern user experiences, blazing-fast load times, and
                                        business growth—helping your product convert better and scale effortlessly.
                                </p>

                                <div class="tw-mt-8">
                                    <div class="d-flex align-items-center tw-gap-16">
                                        <div class="d-flex flex-column tw-gap-305">
                                            <div class="d-flex align-items-center tw-gap-405 animation-item"
                                                data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="600">
                                                <span
                                                    class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                    <i class="animate__heartBeat ph-bold ph-check"></i>
                                                </span>
                                                <a href="javascript:void(0)"
                                                    class="fw-bold tw-text-lg text-heading hover-underline">Blazing-fast React & Next.js experiences</a>
                                            </div>
                                            <div class="d-flex align-items-center tw-gap-405 animation-item"
                                                data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="600">
                                                <span
                                                    class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                    <i class="animate__heartBeat ph-bold ph-check"></i>
                                                </span>
                                                <a href="javascript:void(0)"
                                                    class="fw-bold tw-text-lg text-heading hover-underline">SEO-first architecture for higher visibility</a>
                                            </div>
                                            <div class="d-flex align-items-center tw-gap-405 animation-item"
                                                data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="600">
                                                <span
                                                    class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                    <i class="animate__heartBeat ph-bold ph-check"></i>
                                                </span>
                                                <a href="javascript:void(0)"
                                                    class="fw-bold tw-text-lg text-heading hover-underline">Pixel-perfect, conversion-focused UI</a>
                                            </div>
                                            <div class="d-flex align-items-center tw-gap-405 animation-item"
                                                data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="600">
                                                <span
                                                    class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                    <i class="animate__heartBeat ph-bold ph-check"></i>
                                                </span>
                                                <a href="javascript:void(0)"
                                                    class="fw-bold tw-text-lg text-heading hover-underline">Scalable frontend built for growth</a>
                                            </div>
                                            <div class="d-flex align-items-center tw-gap-405 animation-item"
                                                data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="600">
                                                <span
                                                    class="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                                                    <i class="animate__heartBeat ph-bold ph-check"></i>
                                                </span>
                                                <a href="javascript:void(0)"
                                                    class="fw-bold tw-text-lg text-heading hover-underline">Modern, maintainable codebase</a>
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
                                        <span class="button__label">Talk to Our Experts</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- About two content end -->
                    </div>
                </div>
            </section>
            <!-- About Two Section end -->

            <!-- seamless integration section Start -->
            <section class="seamless-integration py-120">
                <div class="container max-w-1400-px">
                    <div class="max-w-672-px text-center mx-auto tw-mb-12">
                        <h3 class="splitTextStyleOne text-heading text-capitalize">
                           Seamless Frontend Solutions That Elevate User Experience
                        </h3>
                        <p class="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">
                            We craft modern React & Next.js frontends that integrate smoothly with your backend,
                            deliver exceptional performance, and scale as your business grows.
                        </p>
                    </div>

                    <div class="border border-neutral-200 tw-rounded-xl common-shadow-sixteen">
                        <div class="row col-border-wrapper">
                            <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
                                <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                    <span class="tw-mb-8">
                                        <img src="{{asset('assets/images/icons/Custom-Development.png')}}" alt="Icon" />
                                    </span>
                                    <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                        Custom Frontend Development
                                    </h6>
                                    <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                        We build tailored React & Next.js 
                                        interfaces aligned with your brand, 
                                        business goals, and user needs—ensuring 
                                        speed, scalability, and consistency.
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
                                <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                    <span class="tw-mb-8">
                                        <img src="{{asset('assets/images/icons/API-development.png')}}" alt="Icon" />
                                    </span>
                                    <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                       API & Backend Integration
                                    </h6>
                                    <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                        We seamlessly connect React & Next.js apps 
                                        with APIs, CMSs, and backend systems for 
                                        smooth data flow and real-time experiences.
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
                                <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                    <span class="tw-mb-8">
                                        <img src="{{asset('assets/images/icons/Third-party-integrations.png')}}" alt="Icon" />
                                    </span>
                                    <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                        Third-Party Integrations
                                    </h6>
                                    <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                        We integrate analytics, payment gateways, CRMs, and 
                                        other third-party tools to enhance functionality and improve user engagement.
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
                                <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                    <span class="tw-mb-8">
                                        <img src="{{asset('assets/images/icons/Maintenance-support.png')}}" alt="Icon" />
                                    </span>
                                    <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                         Performance Optimization & Support
                                    </h6>
                                    <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                        We continuously optimize, monitor, and 
                                        maintain your frontend to ensure 
                                        fast load times, security, and long-term stability.
                                    </p>
                                    
                                </div>
                            </div>
                            <!-- <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
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
                            <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
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
                            <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
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
                            <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0">
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
                                        <a href="{{route('contact')}}"
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
                                                <span class="h5 counter text-white">20M+</span>
                                            </div>
                                            <p
                                                class="fw-bold tw-text-sm font-heading text-heading tw-mt-2 counter text-white">
                                                150+ Success Projects
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

            </div>
        </section>
        <!-- Roadmap section End -->

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

                                <img src="{{asset('assets/images/shapes/reactjs-development2.png')}}" alt="Icons"
                                    class="position-absolute top-50 start-50 animation-rotate-right" />
                                <img src="{{asset('assets/images/shapes/reactjs-development.png')}}" alt="Icons"
                                    class="position-absolute top-50 start-50 animation-rotate-left" />
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <h3 class="">
                                        <span class="counter">94.3</span>%
                                    </h3>
                                    <span class="text-heading">Performance <br>Optimized UI</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="">
                                <div class="text-start mx-auto tw-mb-12">
                                    <div class="tw-mb-10">
                                        <h4 class="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-orange">
                                            With Modern React.js & Next.js…
                                        </h4>
                                        <h2 class="splitTextStyleOne text-heading text-capitalize max-w-532-px">
                                            Fast, SEO-Friendly & Scalable
                                            React.js & Next.js
                                            Frontend Solutions
                                        </h2>
                                        <p
                                            class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                            We build high-performance React.js and Next.js 
                                            applications that deliver lightning-fast load times, 
                                            seamless user experiences, and SEO-friendly architecture.
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Integrated apps End -->
            
            <!-- Services section start -->
            <section class="gradient-bg-five position-relative py-120 services z-1">
                <img src="{{asset('assets/images/shapes/rope-shape.png')}}" alt="Rope"
                    class="position-absolute tw-start-0 tw-ms-80-px tw-mt-16 top-0 z-n1" />
                <img src="{{asset('assets/images/shapes/matherboard-shape.png')}}" alt="Shape"
                    class="position-absolute top-0 tw-start-0 tw-mt-160-px tw-ms-128-px d-lg-block d-none z-n1 opacity-1" />

                <div class="container max-w-1552-px">
                    <div class="max-w-672-px text-center mx-auto tw-mb-12">
                        <div class="bg-white-06 tw-py-3 tw-px-305 rounded-pill text-white fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max aos-init aos-animate"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <span class="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                            Why Zalgo Infotech
                        </div>
                        <h2 class="splitTextStyleOne text-white">
                            Powering Modern Frontend Applications
                            <span class="font-dm-serif fst-italic fw-normal">
                                With React & Next.js</span>Expertise
                        </h2>
                        <p class="text-neutral-300 tw-mt-5 splitTextStyleOne max-w-570-px mx-auto">
                            Our React and Next.js solutions are built 
                            for speed, scalability, and exceptional user 
                            experience—delivering high-performance, SEO-friendly, and 
                            future-ready web applications for startups and enterprises.
                        </p>
                    </div>

                    <div class="service-slider swiper">
                        <div class="d-flex flex-wrap gap-3 swiper-wrapper1 why-choose-us">
                            <div class="swiper-slide w-25 tw-pb-105" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <div
                                    class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                    <div
                                        class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                        <span class="tw-mb-13 group-hover-item-text-invert">
                                            <img src="{{asset('assets/images/icons/Why-Choose-Us-for-Nodejs-Development.png')}}" alt="Icon"
                                                class="animate__heartBeat" />
                                        </span>
                                        <div class="">
                                            <div class="group-hover-item-d-none tw-mb-4">
                                                <span
                                                    class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">
                                                    Performance Optimized</span>
                                            </div>
                                            <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                                High-Performance Frontend Development
                                            </h5>
                                            <p class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                                We build fast, responsive, and interactive 
                                                applications using React and Next.js, optimized 
                                                for smooth UI performance, cross-device 
                                                compatibility, and real-time user engagement.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide w-25 tw-pb-105" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                <div
                                    class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                    <div
                                        class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                        <span class="tw-mb-13 group-hover-item-text-invert">
                                            <img src="{{asset('assets/images/icons/Experienced-Nodejs-Team.png')}}" alt="Icon"
                                                class="animate__heartBeat" />
                                        </span>
                                        <div class="">
                                            <div class="group-hover-item-d-none tw-mb-4">
                                                <span
                                                    class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">
                                                    Proven Industry Experience</span>
                                            </div>
                                            <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                               Experienced React & Next.js Team
                                            </h5>
                                            <p
                                                class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                                Our expert developers specialize in 
                                                React component-driven development 
                                                and Next.js advanced features like 
                                                SSR, SSG, and API routes—ensuring clean, 
                                                scalable, and maintainable code.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide w-25 tw-pb-105" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <div
                                    class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                    <div
                                        class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                        <span class="tw-mb-13 group-hover-item-text-invert">
                                            <img src="{{asset('assets/images/icons/Scalable-Architecture.png')}}" alt="Icon"
                                                class="animate__heartBeat" />
                                        </span>
                                        <div class="">
                                            <div class="group-hover-item-d-none tw-mb-4">
                                                <span
                                                class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">
                                                Built for Growth</span>
                                            </div>
                                            <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                                Scalable & SEO-Friendly Architecture
                                            </h5>
                                            <p
                                                class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                                We design modern frontend architectures 
                                                that scale effortlessly. With Next.js SEO 
                                                optimization and React modularity, your 
                                                application stays fast, discoverable, and growth-ready.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide w-25 tw-pb-105" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="900">
                                <div
                                    class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                                    <div
                                        class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                        <span class="tw-mb-13 group-hover-item-text-invert">
                                            <img src="{{asset('assets/images/icons/Secure-Backend-Solutions.png')}}" alt="Icon"
                                                class="animate__heartBeat" />
                                        </span>
                                        <div class="">
                                            <div class="group-hover-item-d-none tw-mb-4">
                                                <span
                                                    class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">
                                                Advanced Protection</span>
                                            </div>
                                            <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                                Secure & Production-Ready Solutions
                                            </h5>
                                            <p
                                                class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                                We implement industry-standard security practices, 
                                                secure authentication, optimized APIs, and 
                                                reliable deployment workflows for stable, 
                                                enterprise-grade React & Next.js applications.
                                            </p>
                                            
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
                                            <img src="{{asset('assets/images/icons/API-Integration-Expertise.png')}}" alt="Icon"
                                                class="animate__heartBeat" />
                                        </span>
                                        <div class="">
                                            <div class="group-hover-item-d-none tw-mb-4">
                                                <span
                                                    class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">
                                                    Custom API Solutions</span>
                                            </div>
                                            <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                                API & Integration Expertise
                                            </h5>
                                            <p
                                                class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                               From REST APIs to third-party service integrations, 
                                               we connect React and Next.js applications seamlessly 
                                               with backend systems, payment gateways, CRMs, and cloud services.
                                            </p>
                                            
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
                                            <img src="{{asset('assets/images/icons/Agile-Transparent-Process.png')}}" alt="Icon"
                                                class="animate__heartBeat" />
                                        </span>
                                        <div class="">
                                            <div class="group-hover-item-d-none tw-mb-4">
                                                <span
                                                    class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">
                                                    Client-Centric Approach</span>
                                            </div>
                                            <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                                Agile & Transparent Process
                                            </h5>
                                            <p
                                                class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                                We follow an agile development approach 
                                                with clear communication, regular updates, and 
                                                milestone-based delivery—keeping 
                                                you fully informed at every stage.
                                            </p>
                                            
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
                                            <img src="{{asset('assets/images/icons/Cost-Effective-for-USA-Market.png')}}" alt="Icon"
                                                class="animate__heartBeat" />
                                        </span>
                                        <div class="">
                                            <div class="group-hover-item-d-none tw-mb-4">
                                                <span
                                                    class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">
                                                    Value-Driven Pricing</span>
                                            </div>
                                            <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                                Cost-Effective for Global Market
                                            </h5>
                                            <p
                                                class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                               Our React & Next.js development services are 
                                               optimized for quality and affordability, offering cost-effective 
                                               solutions tailored for USA-based startups and enterprises.
                                            </p>
                                            
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
                                            <img src="{{asset('assets/images/icons/Ongoing-Support-Maintenance.png')}}" alt="Icon"
                                                class="animate__heartBeat" />
                                        </span>
                                        <div class="">
                                            <div class="group-hover-item-d-none tw-mb-4">
                                                <span
                                                    class="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">
                                                    Long-Term Partnership</span>
                                            </div>
                                            <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">
                                                Ongoing Support & Maintenance
                                            </h5>
                                            <p
                                                class="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                                                Beyond development, we provide continuous 
                                                support, performance optimization, feature enhancements, 
                                                and maintenance to keep your application running smoothly.
                                            </p>
                                            
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

            <!-- Faq Two Section Start -->
            @include('frontend.includes.partials.testimonial')

<section class="faq-two py-120">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div class="">
                               
                                <h2 class="splitTextStyleOne text-heading text-capitalize">
                                    Have Questions? 
                                    <span class="font-dm-serif fst-italic fw-normal">We’ve Got Answers</span>
                                </h2>
                                <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-350-px fw-medium">
                                    Everything you need to know about our development services, 
                                    timelines, and engagement models—all in one place.
                                </p>

                                <div class="tw-mt-9" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="900">
                                    <a href="javascript:void(0)"
                                        class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-17 rounded-pill tw-py-505 fw-medium"
                                        data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Talk to Our Experts</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="ps-xl-5">
                                <div class="accordion common-accordion style-two" id="accordionExample">
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5
                                            class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button
                                                class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="true" aria-controls="collapseTwo">
                                                <span>❓</span> How do you estimate the project cost?
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500">
                                                   Project cost depends on scope, features, technology stack, 
                                                   and timeline. After a free consultation, we provide a 
                                                   transparent and detailed estimate with no hidden charges.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">


                                        <h5
                                            class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button
                                                class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                               <span>❓</span> What is the typical project timeline?
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500">
                                                    Timelines vary based on complexity and requirements. Small to mid-scale 
                                                    projects usually take 4–8 weeks, while larger 
                                                    applications may take longer. We always share a clear delivery roadmap.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5
                                            class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button
                                                class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                <span>❓</span> Are React & Next.js scalable?
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500">
                                                   Yes. React and Next.js are ideal for 
                                                   building fast, scalable, and 
                                                   high-performance web applications 
                                                   with modern UI and optimized rendering.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5
                                            class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button
                                                class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                <span>❓</span> Do you build SPAs & SEO websites?
                                            </button>
                                        </h5>
                                        <div id="collapseFive" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500">
                                                   Absolutely. We develop SPAs, 
                                                   dashboards, admin panels, 
                                                   and SEO-friendly websites using React and Next.js.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5
                                            class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button
                                                class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseelven" aria-expanded="false"
                                                aria-controls="collapseelven">
                                                <span>❓</span> Do you sign an NDA?
                                            </button>
                                        </h5>
                                        <div id="collapseelven" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500">
                                                   Yes. We sign a Non-Disclosure Agreement (NDA) 
                                                   to ensure complete confidentiality and protect 
                                                   your idea, data, and intellectual property.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5
                                            class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button
                                                class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                <span>❓</span> Will I get regular project updates?
                                            </button>
                                        </h5>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500">
                                                    Absolutely. We follow an agile approach and provide regular 
                                                    updates through email, calls, or project management 
                                                    tools like Jira, Trello, or Slack.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5
                                            class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button
                                                class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSix" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                <span>❓</span> Can you work with clients in different time zones?
                                            </button>
                                        </h5>
                                        <div id="collapseSix" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500">
                                                   Yes. We work with clients across the US, Europe, Middle East, 
                                                   and Asia. Our team is flexible and ensures smooth communication across time zones.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5
                                            class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button
                                                class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseseven" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                <span>❓</span> Who owns the source code?
                                            </button>
                                        </h5>
                                        <div id="collapseseven" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500">
                                                   Once the project is completed and payment terms are 
                                                   fulfilled, you own 100% of the source code and intellectual property.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5
                                            class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button
                                                class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseeight" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                <span>❓</span> How do we get started?
                                            </button>
                                        </h5>
                                        <div id="collapseeight" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500">
                                                  Simply click on “Get a Free Consultation” or “Request a Quote”, 
                                                  share your requirements, and our experts will get in touch within 24 hours.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5
                                            class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button
                                                class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsenine" aria-expanded="false"
                                                aria-controls="collapsenine">
                                                <span>❓</span> Can you scale the team if my project grows?
                                            </button>
                                        </h5>
                                        <div id="collapsenine" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500">
                                                   Yes. We can quickly scale resources based on your 
                                                   project needs, whether you require additional 
                                                   developers, AI engineers, or long-term support.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5
                                            class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button
                                                class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                aria-expanded="false" aria-controls="collapseTen">
                                                <span>❓</span> Do you provide post-launch support and maintenance?
                                            </button>
                                        </h5>
                                        <div id="collapseTen" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500">
                                                    Yes. We offer ongoing support, maintenance, performance 
                                                    optimization, and feature enhancements after project delivery.
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
                                    Build Fast & Scalable React & Next.js Applications
                                </div>
                            </div>
                            <h3 class="splitTextStyleOne text-white">
                                Ready to Build a High-Performance React & Next.js Application for Your Business?
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
                                                >Start Your React & Next.js Project</span
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
                                                >Talk to Our Experts</span
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
                                    >Lightning-Fast React UI</span
                                >
                                <span
                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill"
                                    >Next.js SEO Boost</span
                                >
                                <span
                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                    >SSR & SSG Power</span
                                >
                                <span
                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill"
                                    >Scalable Frontend Apps</span
                                >
                                <span
                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill"
                                    >Component-Driven Design</span
                                >
                                <span
                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                    >API-Ready Frontends</span
                                >
                                <span
                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill"
                                    >Cloud-Deployed Apps</span
                                >
                                <span
                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                    >Startup to Enterprise</span
                                >
                                <span
                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill"
                                    >Performance Optimized</span
                                >
                                <span
                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill"
                                    >Quality Assurance</span
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
