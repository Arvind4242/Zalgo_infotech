@extends('frontend.layouts.app')
@section('title', 'Client Testmonial')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">

     <!-- Breadcrumb Start Here -->
                <section class="py-120 section-bg-two">
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
                                        Client Testimonials
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->
        
        <!-- Website Owner section start -->
                <section class="website-owner py-120 position-relative z-1">
                    <img src="{{asset('assets/images/shapes/moon-shape.png')}}" alt="Moon Shape"
                        class="position-absolute top-50 tw-start-50 translate-middle z-n1" />

                    <div class="container">
                        <div class="d-flex align-items-center justify-content-between tw-gap-6 tw-mb-12">
                            <div class="max-w-672-px">
                                <div class="bg-neutral-200 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span class="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                                    Verified reviews from <span class="text-yellow">Clutch</span> &amp; Google
                                </div>
                                <h2 class="splitTextStyleOne text-heading text-capitalize">
                                    What Our Clients Say
                                    <span class="font-dm-serif fst-italic fw-normal">
                                        About Us
                                    </span>
                                </h2>
                            </div>
                            <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="800">
                                <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-490-px fw-medium">
                                    Real feedback from real clients — sourced directly from Clutch and Google Reviews. We let our work speak through the voices of those who've experienced it firsthand.
                                </p>
                            </div>
                        </div>

                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <div class="row gy-4">
                                    <!-- Review 1 — Clutch -->
                                    <div class="col-lg-12 col-md-6" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                        <div
                                            class="common-shadow-ten tw-rounded-2xl tw-p-10 tw-pe-9 bg-white h-100 animation-item">
                                            <div class="d-flex align-items-center justify-content-between tw-mb-5">
                                                <img src="{{asset('assets/images/thumbs/website-owner-img1.png')}}" alt="Logo"
                                                    class="animate__flipInY" />
                                                <span class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold tw-text-xs"
                                                    style="background:#ff4e27; color:#fff; font-size:11px;">
                                                    &#9670; Clutch
                                                </span>
                                            </div>
                                            <div class="">
                                                <p class="text-neutral-500 tw-text-xl">
                                                    Zalgo transformed our outdated platform into a sleek, high-performance web app. Their team understood our business goals from day one and delivered ahead of schedule. The quality of code and attention to detail was outstanding — we saw a 40% jump in user engagement within the first month.
                                                </p>
                                                <span class="d-block tw-h-px bg-neutral-100 tw-my-6"></span>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h6 class="tw-text-lg tw-mb-205">Marcus T.</h6>
                                                        <span class="text-neutral-500">
                                                            CTO,
                                                            <span class="text-main-600">NexaRetail</span>
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1 bg-main-600 tw-py-05 tw-px-3 rounded-pill">
                                                        <span class="text-white fw-bold tw-text-sm">5.0</span>
                                                        <span class="text-white d-flex">
                                                            <img src="{{asset('assets/images/icons/star.svg')}}" alt="img" />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Review 2 — Google -->
                                    <div class="col-lg-12 col-md-6" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                        <div
                                            class="common-shadow-ten tw-rounded-2xl tw-p-10 tw-pe-9 bg-white h-100 animation-item">
                                            <div class="d-flex align-items-center justify-content-between tw-mb-5">
                                                <img src="{{asset('assets/images/thumbs/website-owner-img2.png')}}" alt="Logo"
                                                    class="animate__flipInY" />
                                                <span class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold"
                                                    style="background:#4285F4; color:#fff; font-size:11px;">
                                                    G Google
                                                </span>
                                            </div>
                                            <div class="">
                                                <p class="text-neutral-500 tw-text-xl">
                                                    Extremely professional team. They built our e-commerce site from scratch and handled everything — design, backend, payment integration, and SEO. Communication was seamless throughout the project. Highly recommend Zalgo to any business serious about their digital presence.
                                                </p>
                                                <span class="d-block tw-h-px bg-neutral-100 tw-my-6"></span>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h6 class="tw-text-lg tw-mb-205">Priya Mehta</h6>
                                                        <span class="text-neutral-500">
                                                            Founder,
                                                            <span class="text-main-600">Bloom & Cart</span>
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1 bg-main-600 tw-py-05 tw-px-3 rounded-pill">
                                                        <span class="text-white fw-bold tw-text-sm">5.0</span>
                                                        <span class="text-white d-flex">
                                                            <img src="{{asset('assets/images/icons/star.svg')}}" alt="img" />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row gy-4">
                                    <!-- Review 3 — Clutch -->
                                    <div class="col-lg-12 col-md-6" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                        <div
                                            class="common-shadow-ten tw-rounded-2xl tw-p-10 tw-pe-9 bg-white h-100 animation-item">
                                            <div class="d-flex align-items-center justify-content-between tw-mb-5">
                                                <img src="{{asset('assets/images/thumbs/website-owner-img3.png')}}" alt="Logo"
                                                    class="animate__flipInY" />
                                                <span class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold"
                                                    style="background:#ff4e27; color:#fff; font-size:11px;">
                                                    &#9670; Clutch
                                                </span>
                                            </div>
                                            <div class="">
                                                <p class="text-neutral-500 tw-text-xl">
                                                    We hired Zalgo for a complex SaaS dashboard project with tight deadlines. Not only did they deliver on time, but they also proactively identified and fixed performance bottlenecks we hadn't even noticed. Their developers are skilled, responsive, and genuinely invested in your product's success.
                                                </p>
                                                <span class="d-block tw-h-px bg-neutral-100 tw-my-6"></span>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h6 class="tw-text-lg tw-mb-205">Liam O'Brien</h6>
                                                        <span class="text-neutral-500">
                                                            Product Manager,
                                                            <span class="text-main-600">CloudPilot</span>
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1 bg-main-600 tw-py-05 tw-px-3 rounded-pill">
                                                        <span class="text-white fw-bold tw-text-sm">4.9</span>
                                                        <span class="text-white d-flex">
                                                            <img src="{{asset('assets/images/icons/star.svg')}}" alt="img" />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Review 4 — Google -->
                                    <div class="col-lg-12 col-md-6" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                        <div
                                            class="common-shadow-ten tw-rounded-2xl tw-p-10 tw-pe-9 bg-white h-100 animation-item">
                                            <div class="d-flex align-items-center justify-content-between tw-mb-5">
                                                <img src="{{asset('assets/images/thumbs/website-owner-img4.png')}}" alt="Logo"
                                                    class="animate__flipInY" />
                                                <span class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold"
                                                    style="background:#4285F4; color:#fff; font-size:11px;">
                                                    G Google
                                                </span>
                                            </div>
                                            <div class="">
                                                <p class="text-neutral-500 tw-text-xl">
                                                    Working with Zalgo was a game-changer for our startup. They rebuilt our entire mobile app backend in six weeks and the stability improvement was night and day. The team is transparent, honest about timelines, and truly cares about delivering results that matter.
                                                </p>
                                                <span class="d-block tw-h-px bg-neutral-100 tw-my-6"></span>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h6 class="tw-text-lg tw-mb-205">Sara Kim</h6>
                                                        <span class="text-neutral-500">
                                                            CEO,
                                                            <span class="text-main-600">PocketHive</span>
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1 bg-main-600 tw-py-05 tw-px-3 rounded-pill">
                                                        <span class="text-white fw-bold tw-text-sm">5.0</span>
                                                        <span class="text-white d-flex">
                                                            <img src="{{asset('assets/images/icons/star.svg')}}" alt="img" />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row gy-4">
                                    <!-- Review 5 — Clutch -->
                                    <div class="col-lg-12 col-md-6" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <div
                                            class="common-shadow-ten tw-rounded-2xl tw-p-10 tw-pe-9 bg-white h-100 animation-item">
                                            <div class="d-flex align-items-center justify-content-between tw-mb-5">
                                                <img src="{{asset('assets/images/thumbs/website-owner-img5.png')}}" alt="Logo"
                                                    class="animate__flipInY" />
                                                <span class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold"
                                                    style="background:#ff4e27; color:#fff; font-size:11px;">
                                                    &#9670; Clutch
                                                </span>
                                            </div>
                                            <div class="">
                                                <p class="text-neutral-500 tw-text-xl">
                                                    Exceptional work from start to finish. Zalgo took our rough wireframes and turned them into a polished, conversion-optimized website. Their UI/UX suggestions were spot-on and the final product exceeded every expectation we had. We've since engaged them for two more projects.
                                                </p>
                                                <span class="d-block tw-h-px bg-neutral-100 tw-my-6"></span>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h6 class="tw-text-lg tw-mb-205">James Whitfield</h6>
                                                        <span class="text-neutral-500">
                                                            Director of Marketing,
                                                            <span class="text-main-600">VentureFlow</span>
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1 bg-main-600 tw-py-05 tw-px-3 rounded-pill">
                                                        <span class="text-white fw-bold tw-text-sm">4.9</span>
                                                        <span class="text-white d-flex">
                                                            <img src="{{asset('assets/images/icons/star.svg')}}" alt="img" />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Review 6 — Google -->
                                    <div class="col-lg-12 col-md-6" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <div
                                            class="common-shadow-ten tw-rounded-2xl tw-p-10 tw-pe-9 bg-white h-100 animation-item">
                                            <div class="d-flex align-items-center justify-content-between tw-mb-5">
                                                <img src="{{asset('assets/images/thumbs/website-owner-img6.png')}}" alt="Logo"
                                                    class="animate__flipInY" />
                                                <span class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold"
                                                    style="background:#4285F4; color:#fff; font-size:11px;">
                                                    G Google
                                                </span>
                                            </div>
                                            <div class="">
                                                <p class="text-neutral-500 tw-text-xl">
                                                    I was skeptical at first, but Zalgo proved themselves within the first two weeks. Fast communication, clean code, and zero back-and-forth on revisions. They built our booking platform with custom integrations and it works flawlessly. Five stars without hesitation.
                                                </p>
                                                <span class="d-block tw-h-px bg-neutral-100 tw-my-6"></span>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h6 class="tw-text-lg tw-mb-205">Anika Patel</h6>
                                                        <span class="text-neutral-500">
                                                            Operations Head,
                                                            <span class="text-main-600">StayEasy</span>
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1 bg-main-600 tw-py-05 tw-px-3 rounded-pill">
                                                        <span class="text-white fw-bold tw-text-sm">5.0</span>
                                                        <span class="text-white d-flex">
                                                            <img src="{{asset('assets/images/icons/star.svg')}}" alt="img" />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tw-mt-13 text-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="900">
                            <a href="javascript:void(0)"
                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-17 rounded-pill tw-py-505 fw-medium"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label">Read More Story</span>
                            </a>
                        </div>
                    </div>
                </section>
                <!-- Website Owner section End -->

        <!-- footer area -->
        @include('frontend.includes.footers.footerOne')
        <!-- footer area end -->
    </div>
@endsection
