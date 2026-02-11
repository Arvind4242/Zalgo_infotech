@extends('frontend.layouts.app')
@section('title', 'About Us')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">
        <!-- About Banner section Start -->
        <section class="about-banner tw-mt-15">
            <div class="container max-w-1800-px">
                <div class="section-bg-two tw-rounded-3xl tw-pb-84-px tw-pt-134-px">
                    <div class="container">
                        <div class="position-relative tw-pt-180-px tw-pb-200-px z-1">
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-7 col-sm-8">
                                    <div class="text-center">
                                        <img src="{{asset('assets/images/logo/favicon-two.png')}}" alt="Favicon" />
                                        <h1 class="tw-mt-405">
                                            Powering businesses with reliable and scalable IT solutions.
                                        </h1>
                                        <p>Zalgo Infotech partners with global brands to create secure, high-impact digital products.</p>
                                        <div
                                            class="d-flex align-items-center tw-gap-4 justify-content-center tw-mt-12 flex-wrap">
                                            <a href="{{route('register')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn btn-main hover-style-one"
                                                data-block="button">
                                                <span class="button__flair"></span>
                                                <span class="button__label">Let’s Talk</span>
                                            </a>
                                            <a href="{{route('register')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                                                data-block="button">
                                                <span class="button__flair"></span>
                                                <span class="button__label">View Services</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown one">
                                    <img src="{{asset('assets/images/thumbs/a06.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 two">
                                    <img src="{{asset('assets/images/thumbs/a07.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown three">
                                    <img src="{{asset('assets/images/thumbs/a01.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 four">
                                    <img src="{{asset('assets/images/thumbs/a02.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown five">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img5.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 six">
                                    <img src="{{asset('assets/images/thumbs/a03.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown seven">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img7.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 eight">
                                    <img src="{{asset('assets/images/thumbs/a04.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown nine">
                                    <img src="{{asset('assets/images/thumbs/a05.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 ten">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img10.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown eleven">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img11.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 twelve">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img12.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Banner section End -->

        <!-- About Counter section Start -->
        <section class="about-counter py-120">
            <div class="container p-0">
                <div class="text-center tw-mb-12 mx-auto">
                    <div class="text-center tw-mb-3">
                        <img src="{{asset('assets/images/icons/sparkle.png')}}" alt="Icon" />
                    </div>
                    <h3 class="splitTextStyleOne text-capitaliz fw-semibold">
                        Our Growth, Measured Through Web-Driven Results                        
                        <span class="fw-normal">insights from our</span>
                        Powered by technology, performance, and trust                    </h3>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div
                            class="max-w-295-px tw-max-h-295-px text-center rounded-circle w-100 h-100 aspect-1 d-flex flex-column justify-content-center align-items-center hover-bg-neutral-100 tw-transition tw-duration-200">
                            <h3 class="h1">
                                <span class="counter">20</span><span class="h2">M</span>
                            </h3>
                            <span class="h6 text-uppercase tw-text-base tw-mt-5">User Interactions Managed</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="700">
                        <div
                            class="max-w-295-px tw-max-h-295-px text-center rounded-circle w-100 h-100 aspect-1 d-flex flex-column justify-content-center align-items-center hover-bg-neutral-100 tw-transition tw-duration-200">
                            <h3 class="h1">
                                <span class="counter">95</span><span class="h2">%</span>
                            </h3>
                            <span class="h6 text-uppercase tw-text-base tw-mt-5">Client Retention Rate</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <div
                            class="max-w-295-px tw-max-h-295-px text-center rounded-circle w-100 h-100 aspect-1 d-flex flex-column justify-content-center align-items-center hover-bg-neutral-100 tw-transition tw-duration-200">
                            <h3 class="h1">
                                <span class="counter">3</span><span class="h2">x</span>
                            </h3>
                            <span class="h6 text-uppercase tw-text-base tw-mt-5">Business Growth Enabled</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="900">
                        <div
                            class="max-w-295-px tw-max-h-295-px text-center rounded-circle w-100 h-100 aspect-1 d-flex flex-column justify-content-center align-items-center hover-bg-neutral-100 tw-transition tw-duration-200">
                            <h3 class="h1">
                                <span class="counter">99</span><span class="h2">k+</span>
                            </h3>
                            <span class="h6 text-uppercase tw-text-base tw-mt-5">Hours of Technical Experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Counter section End -->



        <!-- About Features section Start -->
        <section class="about-features py-120 section-bg-two">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between flex-wrap tw-gap-6 tw-mb-12">
                    <div class="max-w-532-px">
                        <h3 class="splitTextStyleOne text-capitalize">
                            Reliable web solutions backed by experience, process, and performance
                        </h3>
                    </div>
                    <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <p class="splitTextStyleOne text-neutral-500 max-w-490-px fw-medium tw-ps-5 border-start border-app-landing border-2">
                            We help businesses build scalable, secure, and high-performance web solutions.
                            Our approach combines technical expertise, transparent communication, and long-term client support.
                        </p>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div
                            class="tw-rounded-2xl bg-white bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-200 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-icon1.png')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat" />
                            </span>
                            <h5 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                Proven Web Expertise
                            </h5>
                            <p class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                Custom websites and web applications built for performance, security, and scalability.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <div
                            class="tw-rounded-2xl bg-white bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-200 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-icon2.png')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat" />
                            </span>
                            <h5 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                               User-Focused Design
                            </h5>
                            <p class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                Clean, responsive, and intuitive interfaces that improve engagement and conversions.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1000">
                        <div
                            class="tw-rounded-2xl bg-white bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-200 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-icon3.png')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat" />
                            </span>
                            <h5 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                Business-Driven Solutions
                            </h5>
                            <p class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                We develop technology aligned with your business goals, not just code.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1200">
                        <div
                            class="tw-rounded-2xl bg-white bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-200 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-icon4.png')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat" />
                            </span>
                            <h5 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                Transparent Process & Support
                            </h5>
                            <p class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                Clear timelines, regular updates, and reliable post-delivery support.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Features section End -->

        <!-- About Team section Start -->
        <section class="about-team py-120">
            <div class="container">
                <div class="max-w-602-px text-center mx-auto tw-mb-13">
                    <h3 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
                        Meet our experts
                    </h3>
                    <p class="splitTextStyleOne text-neutral-500 tw-mt-8 mx-auto max-w-500-px fw-medium">
                        Create tasks with various custom statuses to
                        focus more on your keep track of the progress of
                        each why
                    </p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="about-team group-item">
                            <div class="position-relative tw-rounded-xl overflow-hidden">
                                <img src="{{asset('assets/images/thumbs/sanjeev.png')}}" alt="Thumb"
                                    class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300" />
                                <ul
                                    class="list-social position-absolute top-50 tw-end-0 translate-middle-y d-flex flex-column">
                                    <li>
                                        <a href="https://www.facebook.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-facebook-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-twitter-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-instagram-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-pinterest-logo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tw-mt-705 text-center">
                                <h6 class="tw-mb-2">Sanjeev</h6>
                                <span class="text-capitalize text-neutral-500 tw-text-sm">Business Development Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <div class="about-team group-item">
                            <div class="position-relative tw-rounded-xl overflow-hidden">
                                <img src="{{asset('assets/images/thumbs/vaibhav.png')}}" alt="Thumb"
                                    class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300" />
                                <ul
                                    class="list-social position-absolute top-50 tw-end-0 translate-middle-y d-flex flex-column">
                                    <li>
                                        <a href="https://www.facebook.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-facebook-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-twitter-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-instagram-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-pinterest-logo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tw-mt-705 text-center">
                                <h6 class="tw-mb-2">Vaibhav</h6>
                                <span class="text-capitalize text-neutral-500 tw-text-sm">Business Development Executive</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1000">
                        <div class="about-team group-item">
                            <div class="position-relative tw-rounded-xl overflow-hidden">
                                <img src="{{asset('assets/images/thumbs/ashu.png')}}" alt="Thumb"
                                    class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300" />
                                <ul
                                    class="list-social position-absolute top-50 tw-end-0 translate-middle-y d-flex flex-column">
                                    <li>
                                        <a href="https://www.facebook.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-facebook-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-twitter-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-instagram-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-pinterest-logo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tw-mt-705 text-center">
                                <h6 class="tw-mb-2">Ashu</h6>
                                <span class="text-capitalize text-neutral-500 tw-text-sm">Creative Head</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1200">
                        <div class="about-team group-item">
                            <div class="position-relative tw-rounded-xl overflow-hidden">
                                <img src="{{asset('assets/images/thumbs/annu.png')}}" alt="Thumb"
                                    class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300" />
                                <ul
                                    class="list-social position-absolute top-50 tw-end-0 translate-middle-y d-flex flex-column">
                                    <li>
                                        <a href="https://www.facebook.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-facebook-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-twitter-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-instagram-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-pinterest-logo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tw-mt-705 text-center">
                                <h6 class="tw-mb-2">Annu</h6>
                                <span class="text-capitalize text-neutral-500 tw-text-sm">AI & Python Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Team section End -->

        <!-- Testimonials section start= -->
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
                                    <p class="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
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
        <!-- Testimonials section End= -->

        <!-- Brand Three section start= -->
        <div class="brand-three pt-120">
            <div class="container">
                <div class="text-center tw-mb-16">
                    <h5 class="mb-0 line-clamp-1">
                        Loved by next-gen B2B
                        <span class="text-gradient-teal">SaaS</span>
                        compnaies.....
                    </h5>
                </div>
                <div class="brand-three-slider swiper left-right-gradient gradient-width-200">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img1.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img2.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img3.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img4.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img5.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img6.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img7.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img5.png')}}" alt="Logo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Three section end= -->

        <!-- Fouder  start -->
        <section class="founder-section-new pt-120">
            <div class="align-items-end founder-container p-0" style="background-image:url({{asset('assets/images/thumbs/founder-bg.png')}});">
                
                <!-- Left: Founder Image -->
                <div class="founder-image">
                    <img src="{{asset('assets/images/thumbs/bhupendra.png')}}" alt="Founder - Zalgo Infotech">
                </div>

                <!-- Right: Founder Content -->
                <div class="founder-content p-5 ps-0">
                    <span class="founder-badge">Founder & Visionary Leader</span>

                    <h2 class="founder-name">Bhupendra Singh Parmar</h2>
                    <h4 class="founder-title">Founder & CEO, Zalgo Infotech</h4>

                    <p>
                        At Zalgo Infotech, our foundation has always been built on relationships — not revenue.
                    </p>
                    <p>
                    From the very beginning of my journey, I have believed that long-term partnerships matter more than short-term profits. 
                    Over the years, I’ve had the privilege of working with global clients for 4+ and 6+ years 
                    continuously — a testament to the trust, transparency, and commitment we deliver.
                    </p>
                    <p>
                    I have never focused on chasing payments; instead, my priority has always been 
                    delivering exceptional service, being available whenever clients need support, and ensuring their business grows with confidence.
                    </p>
                    <p>
                        For me, success is not measured by how much we earn —<br>
                        it is measured by how long our clients stay with us.
                    </p>
                    <ul class="founder-points">
                        <li>Long-Term Client Relationships</li>
                        <li>Service-First, Profit-Second Approach</li>
                        <li>Client-Centric & Transparent Approach</li>
                        <li>Trust, Transparency & Consistency</li>
                    </ul>

                    <p>
                        At Zalgo Infotech, our goal is simple: <br>
                        Build relationships that last — and success follows naturally.
                    </p>

                    <a href="https://www.linkedin.com/company/zalgo-infotech/" target="_blank" class="active--translate-y-2 active--translate-y-scale-9 align-items-center btn btn-main button--stroke d-none d-sm-flex fw-semibold group hover--translate-y-1 hover-style-one justify-content-center rounded-pill tw-gap-5 tw-py-05">
                      <img src="{{asset('assets/images/icons/linkdin.png')}}" alt="Linkd In">  Connect on LinkedIn
                    </a>
                </div>
            </div>
        </section>
        <!-- Founder End -->

        <!-- Task Management Section Start -->
        <section class="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half pt-120">
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
                                Trusted  
                                <span class="text-yellow text-stroke-yellow">IT</span>
                                Partner for Growing Businesses
                            </div>
                        </div>
                        <h3 class="splitTextStyleOne text-white">
                            Ready to Transform Your Digital Vision into Reality?
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
                                        <span class="button__label">Talk to our experts</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Get free consult</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tw-pt-8 text-center">
                        <div
                            class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">Custom Web Development</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-paste rounded-pill">Dedicated Developers</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading gradient-bg-six rounded-pill">AI & Automation Solutions</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-yellow rounded-pill">Node.js & Laravel Experts</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-orange rounded-pill">Cloud & DevOps Services</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading gradient-bg-six rounded-pill">UI/UX Focused Design</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-orange rounded-pill">Agile Project Management</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading gradient-bg-six rounded-pill">Scalable Architecture</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-paste rounded-pill">Long-term Tech Partnership</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white text-heading bg-pink rounded-pill">Transparent Communication</span>
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
</div

@endsection
