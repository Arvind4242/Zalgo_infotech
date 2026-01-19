@extends('frontend.layouts.app')
@section('title', 'Index One')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">
        <!-- Top Features Section start -->
        <div class="bg-white border-top border-neutral-100 tw-py-4 common-shadow-one">
            <div class="container">
                <div class="top-features-slider overflow-hidden left-right-gradient position-relative">
                    <div class="d-flex align-items-center tw-gap-4">
                        <!-- <span>
                            <img src="{{asset('assets/images/icons/chart-icon.svg')}}" alt="" />
                        </span> -->
                        <span class="text-heading fw-medium tw-text-base">⚙️End-to-End IT Services</span>
                    </div>
                    <div class="d-flex align-items-center tw-gap-4">
                        <!-- <span>
                            <img src="{{asset('assets/images/icons/chart-icon.svg')}}" alt="" />
                        </span> -->
                        <span class="text-heading fw-medium tw-text-base">🚀 Built for Performance & Growth</span>
                    </div>
                    <div class="d-flex align-items-center tw-gap-4">
                        <!-- <span>
                            <img src="{{asset('assets/images/icons/chart-icon.svg')}}" alt="" />
                        </span> -->
                        <span class="text-heading fw-medium tw-text-base">🔐 Secure & Reliable Technology</span>
                    </div>
                    <div class="d-flex align-items-center tw-gap-4">
                        <!-- <span>
                            <img src="{{asset('assets/images/icons/chart-icon.svg')}}" alt="" />
                        </span> -->
                        <span class="text-heading fw-medium tw-text-base">🎯 Solutions That Scale</span>
                    </div>
                    <div class="d-flex align-items-center tw-gap-4">
                        <!-- <span>
                            <img src="{{asset('assets/images/icons/chart-icon.svg')}}" alt="" />
                        </span> -->
                        <span class="text-heading fw-medium tw-text-base">🤝 Your Trusted IT Partner</span>
                    </div>
                    <div class="d-flex align-items-center tw-gap-4">
                        <!-- <span>
                            <img src="{{asset('assets/images/icons/chart-icon.svg')}}" alt="" />
                        </span> -->
                        <span class="text-heading fw-medium tw-text-base">🛠️ Long-Term Technical Support</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Features Section end -->

        <!-- Banner Section Start -->
        <section class="banner tw-py-80-px overflow-hidden section-bg-three position-relative">
            <img src="{{asset('assets/images/shapes/sqaure_shape.png')}}" alt="Shape"
                class="position-absolute top-0 tw-end-0 tw-me-12-percent" />

            <div class="container max-w-1400-px">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="">
                            <h1 class="splitTextStyleOne fw-light tw-leading-104">
                                <span class="d-inline-block">Transform
                                </span>
                                <span class="d-inline-block fw-semibold">
                                     Your
                                </span>
                                <span class="d-inline-block fw-semibold">Business</span>
                                <span class="d-inline-block fw-semibold"> with AI-Powered </span>
                                <span class="d-inline-block fw-semibold"> Strategic</span>
                                <span class="d-inline-block"> IT Solutions</span>
                            </h1>
                            <p class="text-neutral-500 tw-text-lg max-w-500-px fw-medium tw-mt-8 splitTextStyleOne">
                                We build intelligent AI chatbots and scalable IT solutions that automate customer support, enable multilingual conversations, and drive global growth.
                            </p>
                            <div class="tw-mt-11 d-flex align-items-center tw-gap-42-px flex-wrap">
                                <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <a href="{{route('register')}}"
                                        class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
                                        data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Get Started</span>
                                    </a>
                                </div>
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
                                        <span class="h5 counter">2.3M+</span>
                                    </div>
                                    <p class="fw-bold tw-text-sm font-heading text-heading tw-mt-2 counter">
                                        5000+ Client reviews
                                    </p>
                                </div>
                                <div class="d-flex align-items-cente flex-wrap row-gap-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                    <div class="d-flex align-items-center tw-gap-305 w-50 " data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                        <span class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                            <i class="text-gradient-teal ph-bold ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-semibold tw-text-base">Paid ChatGPT Integration</span>
                                    </div>
                                    <div class="d-flex align-items-center tw-gap-305 w-50" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                        <span class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                            <i class="text-gradient-teal ph-bold ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-semibold tw-text-base">Geo-Location</span>
                                    </div>
                                    <div class="d-flex align-items-center tw-gap-305 w-50" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                        <span class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                            <i class="text-gradient-teal ph-bold ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-semibold tw-text-base">Multilingual</span>
                                    </div>
                                    <div class="d-flex align-items-center tw-gap-305 w-50" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                        <span class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                            <i class="text-gradient-teal ph-bold ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-semibold tw-text-base">Chat History</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="tw-ps-98-px position-relative tw-pb-8">
                            <div class="position-relative z-1">
                                <img src="{{asset('assets/images/thumbs/banner-img.png')}}" alt="" data-aos="zoom-in"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="1000" />
                            </div>
                            <!-- Review -->
                            <div
                                class="bg-white tw-rounded-3xl tw-p-6 max-w-218-px position-absolute tw-end-0 top-0 w-100 tw--mt-8-px tw--me-8-px common-shadow-two z-1">
                                <div
                                    class="d-inline-flex align-items-center tw-gap-1 bg-green tw-py-05 tw-px-3 rounded-pill position-absolute top-0 tw-end-0 tw--mt-12-px tw--me-12-px">
                                    <span class="text-white fw-bold tw-text-sm">4.9</span>
                                    <span class="text-white d-flex">
                                        <img src="{{asset('assets/images/icons/star.svg')}}" alt="" />
                                    </span>
                                </div>
                                <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="" class="" />
                                <div class="tw-mt-3 d-flex align-items-center justify-content-between max-w-154-px">
                                    <span class="tw-text-lg text-heading fw-semibold">Trust pilot</span>
                                    <img src="{{asset('assets/images/icons/verified-icon.svg')}}" alt="" />
                                </div>
                            </div>
                            <!-- Review -->

                            <!-- Experience -->
                            <div class="bg-main-600 tw-p-12 tw-pe-6 d-inline-block tw-rounded-xl clip-path-one position-absolute bottom-0 tw-end-0 z-1 tw--me-70-px tw-mb-205"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
                                <h2 class="text-white counter">8+</h2>
                                <span class="text-white">Years Experience</span>
                            </div>
                            <!-- Experience -->

                            <!-- Revenue -->
                            <div class="bg-white-7 tw-py-6 tw-px-7 tw-rounded-2xl border border-white bg-blur-20 position-absolute bottom-0 tw-start-0 z-1 d-flex align-items-center tw-gap-8 common-shadow-two"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <img src="{{asset('assets/images/shapes/revenue-shape.png')}}" alt=""
                                    class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />

                                <div class="">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-Daily" role="tabpanel"
                                            aria-labelledby="pills-Daily-tab" tabindex="0">
                                            <span class="tw-text-sm text-neutral-500 tw-mb-1 text-uppercase">Revenue</span>
                                            <h5 class="tw-mb-6 counter">
                                                $4820.00
                                            </h5>
                                        </div>
                                        <div class="tab-pane fade" id="pills-Weekly" role="tabpanel"
                                            aria-labelledby="pills-Weekly-tab" tabindex="0">
                                            <span class="tw-text-sm text-neutral-500 tw-mb-1 text-uppercase">Revenue</span>
                                            <h5 class="tw-mb-6 counter">
                                                $2445.00
                                            </h5>
                                        </div>
                                        <div class="tab-pane fade" id="pills-Monthly" role="tabpanel"
                                            aria-labelledby="pills-Monthly-tab" tabindex="0">
                                            <span class="tw-text-sm text-neutral-500 tw-mb-1 text-uppercase">Revenue</span>
                                            <h5 class="tw-mb-6 counter">
                                                $8221.00
                                            </h5>
                                        </div>
                                    </div>

                                    <ul class="nav nav-pills common-tab d-flex align-items-center tw-gap-205"
                                        id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link bg-transparent hover--translate-y-1 tw-transition-all tw-duration-300 text-neutral-500 tw-text-sm fw-medium p-0 active"
                                                id="pills-Daily-tab" data-bs-toggle="pill" data-bs-target="#pills-Daily"
                                                type="button" role="tab" aria-controls="pills-Daily"
                                                aria-selected="true">
                                                Daily
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link bg-transparent hover--translate-y-1 tw-transition-all tw-duration-300 text-neutral-500 tw-text-sm fw-medium p-0"
                                                id="pills-Weekly-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-Weekly" type="button" role="tab"
                                                aria-controls="pills-Weekly" aria-selected="false">
                                                Weekly
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link bg-transparent hover--translate-y-1 tw-transition-all tw-duration-300 text-neutral-500 tw-text-sm fw-medium p-0"
                                                id="pills-Monthly-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-Monthly" type="button" role="tab"
                                                aria-controls="pills-Monthly" aria-selected="false">
                                                Monthly
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <img src="{{asset('assets/images/thumbs/revenue-chart.png')}}" alt="" />
                                </div>
                            </div>
                            <!-- Revenue -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->

        <!-- brand slider start -->
        <div class="brand-slider-wrapper">
            <div class="brand-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                        <div class="text-center">
                            <img src="{{asset('assets/images/thumbs/wordpress.svg')}}" alt="Logo" class="w-50" />
                        </div>
                    </div>
                    <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                        <div class="text-center">
                            <img src="{{asset('assets/images/thumbs/woocommerce-logo.svg')}}" alt="Logo" class="w-50" />
                        </div>
                    </div>
                    <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                        <div class="text-center">
                            <img src="{{asset('assets/images/thumbs/laravel.svg')}}" alt="Logo" class="w-50" />
                        </div>
                    </div>
                    <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                        <div class="text-center">
                            <img src="{{asset('assets/images/thumbs/stripe.svg')}}" alt="Logo" class="w-50" />
                        </div>
                    </div>
                    <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                        <div class="text-center">
                            <img src="{{asset('assets/images/thumbs/google-cloud.svg')}}" alt="Logo" class="w-50" />
                        </div>
                    </div>
                    <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                        <div class="text-center">
                            <img src="{{asset('assets/images/thumbs/php.svg')}}" alt="Logo" class="w-50" />
                        </div>
                    </div>
                    <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                        <div class="text-center">
                            <img src="{{asset('assets/images/thumbs/razorpay.svg')}}" alt="Logo" class="w-50" />
                        </div>
                    </div>
                    <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                        <div class="text-center">
                            <img src="{{asset('assets/images/thumbs/mysql.svg')}}" alt="Logo" class="w-50" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand slider end -->

        <!-- About section start -->
        <section class="py-120 drag-rotate-element-section">
            <div class="container">
                <div class="tw-rounded-50-px gradient-bg-one tw-px-36-px tw-pt-9">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="tw-pe-12 position-relative">
                                <div class="row g-2">
                                    <div class="col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <div
                                            class="bg-main-600 tw-rounded-3xl tw-p-8 text-center h-100 d-flex flex-column justify-content-center align-items-center">
                                            <h3 class="text-white d-inline-flex align-items-center tw-gap-3 tw-mb-9">
                                                <span class="d-flex">
                                                    <img src="{{asset('assets/images/icons/arrow-up.svg')}}" alt="" />
                                                </span>
                                                88%
                                            </h3>
                                            <p class="text-white tw-text-sm">
                                                Average client retention across long-term projects
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <div
                                            class="bg-main-two-600 tw-rounded-3xl tw-h-300-px d-flex flex-column justify-content-center align-items-center position-relative">
                                            <img src="{{asset('assets/images/thumbs/model.png')}}" alt=""
                                                class="position-absolute tw-start-50 bottom-0 tw-translate-x-50" />
                                        </div>

                                        <div
                                            class="bg-white tw-rounded-lg common-shadow-one border-bottom border-3 border-main-600 tw-px-4 tw-py-2 d-flex align-items-center tw-gap-3 z-1 position-absolute top-0 tw-end-0 tw-mt-194-px">
                                            <span
                                                class="bg-neutral-200 tw-w-10 tw-h-10 tw-rounded-xl d-flex justify-content-center align-items-center text-neutral-500">
                                                <i class="ph-bold ph-smiley"></i>
                                            </span>
                                            <div class="">
                                                <h6 class="">99.8%</h6>
                                                <p class="fw-medium tw-text-sm text-neutral-500">
                                                    Client satisfaction
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <div
                                            class="bg-main-two-600 tw-rounded-3xl tw-p-8 text-center d-flex flex-column justify-content-center align-items-center tw-h-300-px">
                                            <div class="circle-border d-inline-block">
                                                <svg class="radial-progress" data-percentage="78" viewBox="0 0 80 80">
                                                    <circle class="incomplete" cx="40" cy="40" r="35">
                                                    </circle>
                                                    <circle class="complete" cx="40" cy="40" r="35">
                                                    </circle>
                                                    <text class="percentage" x="50%" y="57%"
                                                        transform="matrix(0, 1, -1, 0, 80, 0)">
                                                        78%
                                                    </text>
                                                </svg>
                                            </div>
                                            <p class="text-white tw-text-sm tw-mt-5">
                                                Projects resulting in measurable performance improvement
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <div
                                            class="myContainer position-relative d-flex flex-column justify-content-center align-items-center h-100 tw-gap-705 overflow-hidden">
                                            <span
                                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-1 fw-semibold text-white bg-main-two-600 rounded-pill">Cybersecurity</span>
                                            <span
                                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-4 tw-py-1 fw-semibold text-white bg-pink rounded-pill">Infrastructure
                                                Management</span>
                                            <span
                                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-1 fw-semibold text-white bg-main-600 rounded-pill">Operational
                                                Excellence</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="common-shadow-three tw-rounded-40-px bg-white tw-ps-56-px tw-pe-6 tw-py-84-px">
                                <div class="tw-mb-14">
                                    <span class="tw-py-1 tw-px-705 bg-main-50 text-main-600 tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">
                                        About Zalgo Infotech
                                    </span>
                                    <h3 class="splitTextStyleOne fw-light tw-leading-104">
                                        <span class="d-inline-block fw-semibold">Driving </span>
                                        <span class="d-inline-block fw-semibold">Business  </span>
                                        <span class="d-inline-block">Growth </span>
                                        <span class="d-inline-block fw-semibold">Through </span>
                                        <span class="d-inline-block">
                                            Reliable 
                                        </span>
                                        <span class="d-inline-block fw-semibold">
                                            IT Solutions</span>
                                    </h3>
                                </div>
                                <div class="d-flex flex-column tw-gap-10">
                                    <div class="d-flex align-items-start tw-gap-26-px animation-item" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                        <span class="tw-w-14 d-flex justify-content-center align-items-center">
                                            <img src="{{asset('assets/images/icons/about-icon1.svg')}}" alt=""
                                                class="animate__bounce" />
                                        </span>
                                        <div class="">
                                            <h6 class="tw-mb-4">
                                                Innovation at our core
                                            </h6>
                                            <p class="text-neutral-500 max-w-400-px">
                                               We don’t just build websites — we craft scalable, future-ready IT solutions tailored to your business goals and industry needs.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start tw-gap-26-px animation-item" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                        <span class="tw-w-14 d-flex justify-content-center align-items-center">
                                            <img src="{{asset('assets/images/icons/about-icon2.svg')}}" alt=""
                                                class="animate__bounce" />
                                        </span>
                                        <div class="">
                                            <h6 class="tw-mb-4">
                                                Simplifying complexity
                                            </h6>
                                            <p class="text-neutral-500 max-w-400-px">
                                               From development to deployment and maintenance, we manage the technical complexity so you can focus on running and growing your business.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start tw-gap-26-px animation-item" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                        <span class="tw-w-14 d-flex justify-content-center align-items-center">
                                            <img src="{{asset('assets/images/icons/about-icon3.svg')}}" alt=""
                                                class="animate__bounce" />
                                        </span>
                                        <div class="">
                                            <h6 class="tw-mb-4">
                                                Empowering growth.
                                            </h6>
                                            <p class="text-neutral-500 max-w-400-px">
                                               Our solutions are designed to improve performance, enhance security, and support steady business growth without unnecessary overheads.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section End -->

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
                                        <span class="d-inline-block fw-semibold">Our Proven Working Roadmap</span>
                                    </h3>
                                    <p class="splitTextStyleOne text-neutral-400 max-w-432-px">
                                       A structured, transparent process that helps us deliver reliable, scalable, and performance-driven IT solutions for growing businesses.
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
                        <span class="d-inline-block">Delivering
                        </span>
                        <span class="d-inline-block fw-semibold">
                             Scalable IT Solutions 
                        </span>
                        <span class="d-inline-block">That Drive Growth</span>
                    </h3>
                    <div class="d-flex flex-wrap justify-content-center">
                        <div class="tw-min-h-184-px bg-main-600 tw-py-4 tw-px-4 rounded-pill text-center max-w-388-px w-100"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-white tw-mb-4 fw-medium">
                               10+ Years
                            </h3>
                            <p class="text-white max-w-228-px mx-auto">
                                Industry experience delivering IT solutions
                            </p>
                        </div>

                        <div class="tw-min-h-184-px bg-main-600 tw-py-4 tw-px-4 rounded-pill max-w-514-px w-100 d-flex align-items-center tw-gap-505 justify-content-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-white tw-mb-4 fw-medium d-inline-flex align-items-center tw-gap-4">
                                <img src="{{asset('assets/images/icons/arrow-up-green.svg')}}" alt="" />
                                90%+
                            </h3>
                            <p class="text-white max-w-194-px">
                                Client retention across long-term engagements
                            </p>
                        </div>

                        <div class="tw-min-h-184-px bg-white tw-py-4 tw-px-4 rounded-pill max-w-388-px w-100 d-flex align-items-center tw-gap-505 justify-content-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-main-600 fw-medium d-inline-flex align-items-center tw-gap-4">
                                3×
                            </h3>
                            <div class="d-flex align-items-center tw-gap-2">
                                <!-- <span class="text-main-two-600 tw-text-2xl fw-semibold">//</span> -->
                                <p class="text-main-two-600 max-w-194-px">  
                                    Project delivery with optimized workflows
                                </p>
                            </div>
                        </div>

                        <div class="tw-min-h-184-px bg-white tw-py-4 tw-px-4 rounded-pill max-w-490-px w-100 d-flex align-items-center tw-gap-505 justify-content-center border border-main-50"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-main-600 fw-medium d-inline-flex align-items-center tw-gap-4">
                                50%
                            </h3>
                            <p class="text-main-two-600 max-w-194-px">
                                Improvement in operational efficiency
                            </p>
                        </div>

                        <div class="tw-min-h-184-px bg-main-600 tw-py-4 tw-px-4 rounded-pill text-center max-w-288-px w-100 tw-mt-1 d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-white fw-medium">
                                95%
                            </h3>
                            <p class="text-white max-w-228-px mx-auto">
                                Client satisfaction & positive feedback
                            </p>
                        </div>

                        <div class="tw-min-h-184-px bg-white tw-py-4 tw-px-4 rounded-pill max-w-514-px w-100 d-flex align-items-center tw-gap-505 justify-content-center border border-main-50"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <h3 class="h1 counter text-main-600 fw-medium d-inline-flex align-items-center tw-gap-4">
                                1.3m
                            </h3>
                            <div class="d-flex align-items-center tw-gap-2">
                                <p class="text-main-two-600 max-w-194-px">
                                    Clients across multiple industries worldwide
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Global Increase End -->
            </div>
        </section>
        <!-- Roadmap section End -->

        <!-- Offer section start -->
        <section class="offer py-120 overflow-hidden">
            <div class="container">
                <div class="tw-mb-13">
                    <span
                        class="tw-py-1 tw-px-705 bg-main-50 text-main-600 tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">What
                        We Offering</span>
                    <div class="d-flex flex-lg-nowrap flex-wrap justify-content-between align-items-center">
                        <div class="max-w-672-px">
                            <h3 class="splitTextStyleOne tw-leading-104">
                                Provides Full-Cycle Custom IT
                                Development Cervices.
                            </h3>
                        </div>
                        <p class="splitTextStyleOne text-neutral-500 max-w-500-px">
                            In today's competitive business, the demand
                            for efficient and cost-effective IT
                            solutions has never been more critical.
                        </p>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="row gy-4">
                            <div class="col-lg-12 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600">
                                <div
                                    class="group-item position-relative tw-rounded-3xl overflow-hidden z-1 h-100 tw-pt-15 bg-pink-dark tw-px-40-px tw-pb-84-px tw-duration-300">
                                    <span class="tw-text-base fw-semibold tw-mb-2 text-pink">Excellent Performance</span>
                                    <h4 class="splitTextStyleOne tw-mb-5 max-w-218-px">
                                        IT Management Service
                                    </h4>
                                    <a href="{{route('service.details')}}"
                                        class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9">
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                    <img src="{{asset('assets/images/thumbs/offer-img1.png')}}" alt="Image"
                                        class="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600">
                                <div
                                    class="group-item position-relative tw-rounded-3xl overflow-hidden z-1 h-100 tw-pt-15 bg-pink-lighter tw-px-40-px tw-pb-136-px tw-duration-300">
                                    <span class="tw-text-base fw-semibold tw-mb-2 text-pink">Excellent Performance</span>
                                    <h4 class="splitTextStyleOne fw-light tw-mb-5 max-w-330-px">
                                        <span class="d-inline-block fw-semibold">WowCommerce System
                                            Development</span>
                                    </h4>
                                    <a href="{{route('service.details')}}"
                                        class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-pink-light tw-text-2xl text-white hover--translate-y-1 active--translate-y-scale-9">
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                    <img src="{{asset('assets/images/thumbs/offer-img2.png')}}" alt="Image"
                                        class="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div
                            class="group-item position-relative tw-rounded-3xl overflow-hidden z-1 tw-pt-15 bg-main-50 tw-px-40-px tw-pb-84-px tw-duration-300 h-100">
                            <span class="text-main-600 fw-semibold tw-mb-2">Excellent Performance</span>
                            <h4 class="splitTextStyleOne tw-mb-5 max-w-218-px">
                                Website Design & Development
                            </h4>
                            <a href="{{route('service.details')}}"
                                class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle text-white tw-text-2xl bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9">
                                <i class="ph-bold ph-arrow-up-right"></i>
                            </a>
                            <img src="{{asset('assets/images/thumbs/offer-img3.png')}}" alt="Image"
                                class="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1 tw-mx-4 tw-mb-12 d-md-block d-none" />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="row gy-4">
                            <div class="col-lg-12 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600">
                                <div
                                    class="group-item position-relative tw-rounded-3xl overflow-hidden z-1 tw-pt-15 h-100 bg-purple-light tw-px-40-px tw-pb-84-px tw-duration-300">
                                    <span class="tw-text-base fw-semibold tw-mb-2 text-purple">Excellent Performance</span>
                                    <h4 class="splitTextStyleOne tw-mb-5 max-w-218-px">
                                        CRM Software Solution
                                    </h4>
                                    <a href="{{route('service.details')}}"
                                        class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9">
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                    <img src="{{asset('assets/images/thumbs/offer-img4.png')}}" alt="Image"
                                        class="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600">
                                <div
                                    class="group-item position-relative tw-rounded-3xl overflow-hidden z-1 tw-pt-15 h-100 bg-paste-light tw-px-40-px tw-pb-136-px tw-duration-300">
                                    <span class="tw-text-base fw-semibold tw-mb-2 text-pink">Excellent Performance</span>
                                    <h4 class="splitTextStyleOne fw-light tw-mb-5 max-w-330-px">
                                        <span class="d-inline-block fw-semibold">WowCommerce System
                                            Development</span>
                                    </h4>
                                    <a href="{{route('service.details')}}"
                                        class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-paste tw-text-2xl text-white hover--translate-y-1 active--translate-y-scale-9">
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                    <img src="{{asset('assets/images/thumbs/offer-img5.png')}}" alt="Image"
                                        class="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offer section end -->

        <!-- FAQ section start -->
        <section class="faq py-120 position-relative z-1 overflow-hidden">
            <img src="{{asset('assets/images/shapes/faq-bg.png')}}" alt=""
                class="position-absolute tw-start-0 top-0 w-100 h-100 z-n1" />

            <div class="container">
                <div class="tw-mb-8">
                    <span class="tw-py-1 tw-px-705 bg-white text-main-600 tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">
                        Enterprise IT Services
                    </span>
                    <div class="d-flex flex-lg-nowrap flex-wrap justify-content-between align-items-center">
                        <div class="max-w-672-px">
                            <h3 class="splitTextStyleOne fw-light tw-leading-104">
                                <span class="d-inline-block">Technology 
                                </span>
                                <span class="d-inline-block fw-semibold">Solutions Built 
                                </span>
                                <span class="d-inline-block">To
                                </span>
                                <span class="d-inline-block fw-semibold">
                                    Power
                                </span>
                                <span class="d-inline-block fw-semibold">Modern 
                                </span>
                                <span class="d-inline-block fw-semibold">Businesses</span>
                            </h3>
                        </div>
                        <a href="{{route('register')}}"
                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
                            data-block="button">
                            <span class="button__flair"></span>
                            <span class="button__label">Get a Free Consultation</span>
                        </a>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-5">
                        <p class="splitTextStyleOne text-neutral-600 max-w-500-px tw-mb-15">
                            In today’s competitive business environment, organizations need reliable, scalable, and secure IT solutions to streamline operations and drive sustainable growth.
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
                                        Tailored solution
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <p class="text-neutral-500">
                                            Custom-built IT solutions designed to match your business goals, workflows, and growth roadmap.
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
                                        Cutting-edge technology
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <p class="text-neutral-500">
                                            We leverage modern frameworks and proven technologies to deliver secure, scalable, and high-performance solutions aligned with your business goals.
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
                                        Discovery & Analysis
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <p class="text-neutral-500">
                                           We analyze your business requirements, workflows, and technical challenges to design solutions that deliver measurable results.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item tw-py-4 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <h5 class="accordion-header">
                                    <button
                                        class="accordion-button tw-pb-8 tw-pt-4 shadow-none px-0 bg-transparent h5 collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour"
                                        data-img="{{asset('assets/images/thumbs/faq-thumb4.png')}}">
                                        Deployment & Support
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <p class="text-neutral-500">
                                            From smooth deployment to continuous monitoring and support, we ensure your systems remain reliable, optimized, and future-ready.
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

        <!-- Choose Us section start -->
        <section class="py-120 overflow-hidden">
            <div class="container">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-5 d-sm-block d-none">
                        <div class="tw-ps-8 position-relative z-1 overflow-hidden" id="box-wrapper">
                            <img src="{{asset('assets/images/thumbs/choose-us-img.png')}}" alt="Image"
                                class="w-100 h-100 object-fit-cover tw-rounded-3xl" />

                            <div
                                class="bg-white max-w-150-px tw-h-150-px w-100 d-flex justify-content-center align-items-center tw-rounded-xl common-shadow-four box position-absolute tw-start-0 top-0 tw-mt-705 z-1">
                                <img src="{{asset('assets/images/thumbs/choose-us-icon1.png')}}" alt="" />
                            </div>
                            <div
                                class="bg-white max-w-150-px tw-h-150-px w-100 d-flex justify-content-center align-items-center tw-rounded-xl common-shadow-four box position-absolute tw-end-0 top-0 tw-mt-705 z-1 tw-me-14">
                                <img src="{{asset('assets/images/thumbs/choose-us-icon2.png')}}" alt="" />
                            </div>
                            <div
                                class="bg-white max-w-150-px tw-h-150-px w-100 d-flex justify-content-center align-items-center tw-rounded-xl common-shadow-four box position-absolute tw-start-0 top-0 z-1 tw-mt-194-px tw-ms-148-px">
                                <img src="{{asset('assets/images/thumbs/choose-us-icon3.png')}}" alt="" />
                            </div>
                            <div
                                class="bg-white max-w-150-px tw-h-150-px w-100 d-flex justify-content-center align-items-center tw-rounded-xl common-shadow-four box position-absolute tw-end-0 bottom-0 tw-me-90-px z-1 tw-mb-148-px">
                                <img src="{{asset('assets/images/thumbs/choose-us-icon4.png')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="ps-lg-5">
                            <span class="tw-py-1 tw-px-705 bg-main-600 text-white tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">
                                Why Choose Us</span>
                            <div class="max-w-672-px">
                                <h3 class="fw-light tw-leading-104 cursor-big tw-mb-9 d-flex gap-2">
                                    <span class="splitTextStyleOne d-inline-block fw-medium">
                                        <span class="fw-semibold">Zalgo Infotech</span>
                                        helps businesses scale smarter with reliable IT solutions.
                                    </span>
                                </h3>
                                <p class="splitTextStyleOne text-neutral-600 max-w-500-px">
                                    In today’s competitive business landscape, we deliver cost-effective, scalable, and results-driven technology solutions that fuel long-term growth.
                            </div>

                            <div class="tw-mt-10">
                                <div class="row gy-4">
                                    <div class="col-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="600">
                                        <div
                                            class="bg-neutral-50 tw-ps-705 tw-pe-4 tw-py-9 border border-neutral-50 hover-border-main-600 tw-rounded-lg tw-duration-300">
                                            <h6 class="tw-mb-2">
                                                Expertise & Specialization
                                            </h6>
                                            <p class="text-neutral-500">
                                                Our team brings deep expertise across modern web technologies, delivering high-quality, secure, and performance-driven solutions.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="600">
                                        <div
                                            class="bg-neutral-50 tw-ps-705 tw-pe-4 tw-py-9 border border-neutral-50 hover-border-main-600 tw-rounded-lg tw-duration-300">
                                            <h6 class="tw-mb-2">
                                               Tailored Solutions
                                            </h6>
                                            <p class="text-neutral-500">
                                                We craft customized IT solutions aligned with your business goals, workflows, and scalability needs—never one-size-fits-all.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="600">
                                        <div class="d-flex align-items-center tw-gap-505 tw-mt-8" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <h3 class="h1 text-main-600 d-inline-flex align-items-center tw-gap-4">
                                        1.3M+
                                    </h3>
                                    <p class="text-main-two-600 fw-medium max-w-228-px">
                                        Average revenue growth delivered to our successful clients through technology-driven solutions.
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
        <!-- Choose Us section end -->

        <!-- Show-case section start -->
        <section class="show-case py-120 bg-main-two-600 overflow-hidden">
            <div class="max-w-602-px mx-auto text-center tw-mb-15">
                <span
                    class="tw-py-1 tw-px-705 bg-white-13 text-white tw-text-sm fw-medium text-capitalize rounded-pill tw-mb-205">Work
                    Showcase</span>
                <h3 class="fw-light tw-leading-104 tw-mb-9 text-white">
                    <span class="splitTextStyleOne d-inline-block fw-medium">
                        <span class="fw-semibold">Comprehensive IT Solution
                        </span>
                        <span class=""> Growth</span>
                        <span class="fw-semibold">& Efficiency</span>
                    </span>
                </h3>
            </div>

            <div class="show-case-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="group-item">
                            <div class="position-relative">
                                <a href="{{route('project.details')}}"
                                    class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px">
                                    <img src="{{asset('assets/images/thumbs/Awakeningthegeniuswithin.jpg')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300" />
                                </a>
                                <a href="{{route('project.details')}}"
                                    class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1">
                                    <i class="ph-bold ph-arrow-up-right"></i>
                                </a>
                            </div>
                            <div class="tw-mt-8">
                                <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                <h5 class="text-white tw-mt-1">
                                    <a href="{{route('project.details')}}"
                                        class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1">Mobile
                                        Application
                                        Development</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="group-item">
                            <div class="position-relative">
                                <a href="{{route('project.details')}}"
                                    class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px">
                                    <img src="{{asset('assets/images/thumbs/Finance-Manager-Training.jpg')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300" />
                                </a>
                                <a href="{{route('project.details')}}"
                                    class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1">
                                    <i class="ph-bold ph-arrow-up-right"></i>
                                </a>
                            </div>
                            <div class="tw-mt-8">
                                <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                <h5 class="text-white tw-mt-1">
                                    <a href="{{route('project.details')}}"
                                        class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1">Mobile
                                        Application
                                        Development</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="group-item">
                            <div class="position-relative">
                                <a href="{{route('project.details')}}"
                                    class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px">
                                    <img src="{{asset('assets/images/thumbs/Bioage.jpg')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300" />
                                </a>
                                <a href="{{route('project.details')}}"
                                    class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1">
                                    <i class="ph-bold ph-arrow-up-right"></i>
                                </a>
                            </div>
                            <div class="tw-mt-8">
                                <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                <h5 class="text-white tw-mt-1">
                                    <a href="{{route('project.details')}}"
                                        class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1">Cloud
                                        Computing System</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="group-item">
                            <div class="position-relative">
                                <a href="{{route('project.details')}}"
                                    class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px">
                                    <img src="{{asset('assets/images/thumbs/Dobramoc.jpg')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300" />
                                </a>
                                <a href="{{route('project.details')}}"
                                    class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1">
                                    <i class="ph-bold ph-arrow-up-right"></i>
                                </a>
                            </div>
                            <div class="tw-mt-8">
                                <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                <h5 class="text-white tw-mt-1">
                                    <a href="{{route('project.details')}}"
                                        class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1">Mobile
                                        Application
                                        Development</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="group-item">
                            <div class="position-relative">
                                <a href="{{route('project.details')}}"
                                    class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px">
                                    <img src="{{asset('assets/images/thumbs/Experthe.jpg')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300" />
                                </a>
                                <a href="{{route('project.details')}}"
                                    class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1">
                                    <i class="ph-bold ph-arrow-up-right"></i>
                                </a>
                            </div>
                            <div class="tw-mt-8">
                                <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                <h5 class="text-white tw-mt-1">
                                    <a href="{{route('project.details')}}"
                                        class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1">Creative
                                        UI/UX Designing</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="group-item">
                            <div class="position-relative">
                                <a href="{{route('project.details')}}"
                                    class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px">
                                    <img src="{{asset('assets/images/thumbs/Lifetreeanatomical.jpg')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300" />
                                </a>
                                <a href="{{route('project.details')}}"
                                    class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1">
                                    <i class="ph-bold ph-arrow-up-right"></i>
                                </a>
                            </div>
                            <div class="tw-mt-8">
                                <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                <h5 class="text-white tw-mt-1">
                                    <a href="{{route('project.details')}}"
                                        class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1">Cloud
                                        Computing System</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="group-item">
                            <div class="position-relative">
                                <a href="{{route('project.details')}}"
                                    class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px">
                                    <img src="{{asset('assets/images/thumbs/towelsoutlet.jpg')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300" />
                                </a>
                                <a href="{{route('project.details')}}"
                                    class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1">
                                    <i class="ph-bold ph-arrow-up-right"></i>
                                </a>
                            </div>
                            <div class="tw-mt-8">
                                <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                <h5 class="text-white tw-mt-1">
                                    <a href="{{route('project.details')}}"
                                        class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1">Mobile
                                        Application
                                        Development</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Show-case section End -->

        <!-- Testimonials section start -->
        <section class="testimonials py-120 bg-neutral-50 position-relative z-1">
            <img src="{{asset('assets/images/shapes/faq-bg.png')}}" alt=""
                class="position-absolute tw-start-0 top-0 w-100 h-100 z-n1" />

            <div class="container">
                <div class="max-w-602-px mx-auto text-center tw-mb-15">
                    <span
                        class="tw-py-1 tw-px-705 bg-neutral-100 tw-text-sm fw-medium text-capitalize rounded-pill tw-mb-205">Work
                        Showcase</span>
                    <h3 class="splitTextStyleOne fw-light tw-leading-104 tw-mb-9 d-flex gap-2">
                        <span class="d-inline-block fw-medium">
                            <span class="">What </span>
                            <span class="fw-semibold">
                                Our Client
                            </span>
                            <span class=""> Say</span>
                            <span class="fw-semibold">About Us</span>
                        </span>
                    </h3>
                </div>

                <div class="d-flex tw-gap-6 testimonials-item-wrapper flex-wrap">
                    <!-- Testimonials Item Start -->
                    <div class="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100">
                        <div class="current-content">
                            <div class="tw-max-h-397-px overflow-hidden text-center">
                                <img src="{{asset('assets/images/thumbs/testimonials-img1.png')}}" alt="Image" class="" />
                            </div>
                            <div class="tw-py-8 tw-px-4 text-center">
                                <h6 class="tw-mb-2">Webcly jhonson</h6>
                                <span class="text-neutral-600 fw-medium tw-text-sm">
                                    <span class="fw-semibold text-neutral-600">Tung Phan -</span>
                                    Ceo and Founder
                                </span>
                            </div>
                        </div>

                        <div class="hidden-content tw-px-56-px tw-py-76-px">
                            <div class="">
                                <span class="tw-mb-6 animate-left-right animation-delay-02 tw-duration-200">
                                    <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="" class="" />
                                </span>
                                <div class="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                                    <p
                                        class="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                                        “Zalgo Infotech hires great people
                                        from a widely variety of
                                        backgrounds, which simply makes
                                        our compan stronger, and we
                                        couldn't be prouder of that.
                                        elevating your optimizing
                                        Business Growth.”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                                <div class="tw-h-84-px tw-w-84-px rounded-circle">
                                    <img src="{{asset('assets/images/thumbs/testimonials-short-img1.png')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="">
                                    <h6 class="tw-mb-2">
                                        Webcly jhonson
                                    </h6>
                                    <span class="text-neutral-600">
                                        <span class="fw-semibold text-neutral-600">Tung Phan -
                                        </span>
                                        and Founder
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials Item End -->

                    <!-- Testimonials Item Start -->
                    <div
                        class="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100 active">
                        <div class="current-content">
                            <div class="tw-max-h-397-px overflow-hidden text-center">
                                <img src="{{asset('assets/images/thumbs/testimonials-img3.png')}}" alt="Image" class="" />
                            </div>
                            <div class="tw-py-8 tw-px-4 text-center">
                                <h6 class="tw-mb-2">James anderson</h6>
                                <span class="text-neutral-600 fw-medium tw-text-sm">
                                    <span class="fw-semibold text-main-600">CEO -</span>
                                    and Founder
                                </span>
                            </div>
                        </div>

                        <div class="hidden-content tw-px-56-px tw-py-76-px">
                            <div class="">
                                <span class="tw-mb-6 animate-left-right animation-delay-02 tw-duration-200">
                                    <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="" class="" />
                                </span>
                                <div class="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                                    <p
                                        class="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                                        “Zalgo Infotech hires great people
                                        from a widely variety of
                                        backgrounds, which simply makes
                                        our compan stronger, and we
                                        couldn't be prouder of that.
                                        elevating your optimizing
                                        Business Growth.”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                                <div class="tw-h-84-px tw-w-84-px rounded-circle">
                                    <img src="{{asset('assets/images/thumbs/testimonials-short-img3.png')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="">
                                    <h6 class="tw-mb-2">
                                        James anderson
                                    </h6>
                                    <span class="text-neutral-600">
                                        <span class="fw-semibold text-main-600">CEO</span>
                                        and Founder
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials Item End -->

                    <!-- Testimonials Item Start -->
                    <div class="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100">
                        <div class="current-content">
                            <div class="tw-max-h-397-px overflow-hidden text-center">
                                <img src="{{asset('assets/images/thumbs/testimonials-img2.png')}}" alt="Image" class="" />
                            </div>
                            <div class="tw-py-8 tw-px-4 text-center">
                                <h6 class="tw-mb-2">John Doe</h6>
                                <span class="text-neutral-600 fw-medium tw-text-sm">
                                    <span class="fw-semibold text-neutral-600">Developer -</span>
                                    Web Developer
                                </span>
                            </div>
                        </div>

                        <div class="hidden-content tw-px-56-px tw-py-76-px">
                            <div class="">
                                <span class="tw-mb-6 animate-left-right animation-delay-02 tw-duration-200">
                                    <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="" class="" />
                                </span>
                                <div class="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                                    <p
                                        class="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                                        “Zalgo Infotech hires great people
                                        from a widely variety of
                                        backgrounds, which simply makes
                                        our compan stronger, and we
                                        couldn't be prouder of that.
                                        elevating your optimizing
                                        Business Growth.”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                                <div class="tw-h-84-px tw-w-84-px rounded-circle">
                                    <img src="{{asset('assets/images/thumbs/testimonials-short-img2.png')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="">
                                    <h6 class="tw-mb-2">
                                        Webcly jhonson
                                    </h6>
                                    <span class="text-neutral-600 fw-medium tw-text-sm">
                                        <span class="fw-semibold text-neutral-600">Developer -</span>
                                        Web Developer
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials Item End -->
                </div>
            </div>
        </section>
        <!-- Testimonials section End -->

        <div class="position-relative z-1">
            <img src="{{asset('assets/images/shapes/shape-image.png')}}" alt="Shape"
                class="position-absolute w-100 tw-start-0 bottom-0 z-n1" />
            <!-- Blog section start -->
            <section class="blog">
                <div class="container">
                    <div class="bg-white common-shadow-five py-120 tw-px-90-px">
                        <span class="line w-0 tw-h-2 bg-main-600 tw-mb-4"></span>
                        <div class="d-flex align-items-center justify-content-between tw-mb-12">
                            <h6 class="">
                                Insights to help you do what you do
                                better, faster and more profitably.
                            </h6>
                            <a href="{{route('register')}}"
                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-4"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label">Sign Up Now</span>
                            </a>
                        </div>

                        <!-- Blog items start -->
                        <div class="row gy-4">
                            <div class="col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="200">
                                <div class="group-item">
                                    <a href="{{route('blog.details')}}" class="w-100 h-100 overflow-hidden">
                                        <img src="{{asset('assets/images/thumbs/blog-img1.png')}}" alt="Blog Image"
                                            class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300" />
                                    </a>
                                    <div class="tw-mt-7 d-flex align-items-center tw-gap-5 flex-wrap">
                                        <span
                                            class="text-heading fw-medium tw-py-05 tw-px-405 border border-neutral-400 rounded-pill tw-text-base">02
                                            Apr 2021</span>
                                        <span class="text-heading fw-medium tw-text-base">Comments (03)</span>
                                    </div>
                                    <h5 class="tw-mt-4">
                                        <a href="{{route('blog.details')}}"
                                            class="hover-text-main-600 line-clamp-1 tw-mb-3 hover--translate-y-1">15 Best
                                            AI Apps for Android
                                            to Make Life Easier</a>
                                    </h5>
                                    <a href="{{route('blog.details')}}"
                                        class="text-main-600 fw-medium tw-text-lg hover--translate-y-1">
                                        Learn More
                                        <span class="d-inline-flex tw-text-sm">
                                            <i class="ph-bold ph-arrow-up-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="400">
                                <div class="group-item">
                                    <a href="{{route('blog.details')}}" class="w-100 h-100 overflow-hidden">
                                        <img src="{{asset('assets/images/thumbs/blog-img2.png')}}" alt="Blog Image"
                                            class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300" />
                                    </a>
                                    <div class="tw-mt-7 d-flex align-items-center tw-gap-5 flex-wrap">
                                        <span
                                            class="text-heading fw-medium tw-py-05 tw-px-405 border border-neutral-400 rounded-pill tw-text-base">02
                                            Apr 2021</span>
                                        <span class="text-heading fw-medium tw-text-base">Comments (03)</span>
                                    </div>
                                    <h5 class="tw-mt-4">
                                        <a href="{{route('blog.details')}}"
                                            class="hover-text-main-600 line-clamp-1 tw-mb-3 hover--translate-y-1">15 Best
                                            man-made
                                            intelligence Applications
                                            for Android to Make Life
                                            More straightforward</a>
                                    </h5>
                                    <a href="{{route('blog.details')}}"
                                        class="text-main-600 fw-medium tw-text-lg hover--translate-y-1">
                                        Learn More
                                        <span class="d-inline-flex tw-text-sm">
                                            <i class="ph-bold ph-arrow-up-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog items end -->
                    </div>
                </div>
            </section>
            <!-- Blog section End -->
            <!-- Cta section start -->
            <section class="cta py-md-0 py-5">
                <div class="container">
                    <div class="row gy-4 align-items-center">
                        <div class="col-md-6 d-md-block d-none">
                            <div class="pe-lg-2">
                                <div class="position-relative">
                                    <img src="{{asset('assets/images/thumbs/model-img.png')}}" alt="Model" />
                                    <img src="{{asset('assets/images/shapes/arrow-right-curve.png')}}" alt="Arrow shape"
                                        class="position-absolute top-0 tw-end-0 tw-mt-160-px animate__wobble__two" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ps-lg-4 max-w-532-px">
                                <span
                                    class="tw-py-1 tw-px-705 bg-main-600 text-white tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">Have a Project?</span>
                                <h3 class="splitTextStyleOne fw-light tw-leading-104 tw-mb-5 d-flex gap-2">
                                    <span class="d-inline-block fw-semibold">
                                        <span class="fw-normal">Let’s </span>
                                        Turn Your Idea Into a Scalable 
                                        <span class="fw-normal">
                                            Digital Solution</span>
                                    </span>
                                </h3>
                                <p class="text-neutral-600 tw-text-lg splitTextStyleOne">
                                    Talk to our experts and get clear guidance, realistic timelines, and a solution tailored to your business goals.
                                </p>
                                <a href="{{route('register')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-0 tw-py-5 w-100 tw-mt-10"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Speak With Our Experts</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Cta section End -->
        </div>

        <!-- footer area -->
        @include('frontend.includes.footers.footerOne')
        <!-- footer area end -->
    </div>
@endsection
