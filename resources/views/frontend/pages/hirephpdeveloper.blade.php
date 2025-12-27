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
    <section class="hero-section banner tw-py-80-px overflow-hidden section-bg-three position-relative">
    <img src="images/shapes/square-shape.png" class="shape-1 position-absolute top-0 tw-end-0 tw-me-12-percent" alt="shape">

    <div class="container max-w-1400-px">
        <div class="row align-items-center gy-4">

            <!-- Left Content -->
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="title splitTextStyleOne fw-light tw-leading-104">
                        <span>Hire</span>
                        <span class="fw-semibold">Apple Vision Pro</span>
                        <span>Developers</span>
                    </h1>

                    <p class="hero-desc text-neutral-500 tw-text-lg max-w-500-px fw-medium tw-mt-8">
                        Build immersive VisionOS apps with expert developers
                        experienced in spatial computing.
                    </p>

                    <div class="hero-buttons tw-mt-11 d-flex align-items-center tw-gap-42-px flex-wrap">
                        <a href="#" class="btn btn-main rounded-pill tw-px-56-px tw-py-5 fw-semibold">
                            Get Started
                        </a>

                        <div class="client-stats d-flex align-items-center tw-gap-4">
                            <div class="client-imgs d-flex">
                                <img src="images/client1.png" class="client-img" alt="">
                                <img src="images/client2.png" class="client-img tw--ms-10-px" alt="">
                                <img src="images/client3.png" class="client-img tw--ms-10-px" alt="">
                            </div>
                            <span class="h5 fw-bold tw-text-sm">5000+ Reviews</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6">
                <div class="hero-image-wrapper tw-ps-98-px position-relative">

                    <img src="images/vision-pro-banner.png" class="hero-main-img" alt="Vision Pro Developer">

                    <!-- Ratings Card -->
                    <div class="ratings-card bg-white shadow-lg position-absolute top-0 tw-end-0">
                        <span class="rating-badge bg-green text-white fw-bold">4.9 ★</span>
                        <img src="images/ratings.svg" class="w-100" alt="">
                    </div>

                    <!-- Years Experience -->
                    <div class="experience-badge bg-main-600 text-white tw-rounded-xl position-absolute">
                        <h2 class="counter">8+</h2>
                        <span>Years Experience</span>
                    </div>

                    <!-- Revenue Widget -->
                    <div class="revenue-box bg-white-7 border bg-blur-20 tw-rounded-2xl d-flex align-items-center position-absolute">
                        <div class="revenue-info">
                            <span class="tw-text-sm text-neutral-500">Revenue</span>
                            <h5 class="counter">$4820.00</h5>

                            <!-- Tabs -->
                            <ul class="nav nav-pills mt-2">
                                <li><button class="nav-link active">Daily</button></li>
                                <li><button class="nav-link">Weekly</button></li>
                                <li><button class="nav-link">Monthly</button></li>
                            </ul>
                        </div>

                        <img src="images/revenue-chart.png" alt="chart">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================
   IS YOUR BUSINESS READY?
========================================= -->
<section class="business-ready py-100">
    <div class="container">
        <div class="row align-items-center gy-4">

            <div class="col-lg-6">
                <img src="images/ready-img.png" class="w-100 rounded-4" alt="">
            </div>

            <div class="col-lg-6">
                <h2 class="section-title">Is Your Business Ready for Apple Vision Pro?</h2>

                <div class="faq-list">
                    <div class="faq-item">Immersive app prototyping</div>
                    <div class="faq-item">Hands-free user experience</div>
                    <div class="faq-item">3D content collaboration</div>
                    <div class="faq-item">AI-powered interaction</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================
   TECH EXPERTISE
========================================= -->
<section class="tech-expertise py-100 bg-light">
    <div class="container">

        <h2 class="section-title text-center mb-5">Our Tech Expertise</h2>

        <div class="row justify-content-center gy-4">

            <div class="col-lg-6">
                <ul class="expertise-list">
                    <li>VisionOS App Development</li>
                    <li>Spatial UI/UX Design</li>
                    <li>RealityKit / ARKit Development</li>
                    <li>3D Product Visualization</li>
                    <li>Gesture & Eye-tracking Apps</li>
                </ul>

                <a href="#" class="btn btn-main rounded-pill mt-4">Hire Now</a>
            </div>

            <div class="col-lg-6">
                <img src="images/expertise.png" class="w-100 rounded-4" alt="">
            </div>

        </div>
    </div>
</section>

<!-- =========================================
   PRICING / HIRE SECTION
========================================= -->
<section class="hire-section py-100">
    <div class="container text-center">
        <h2 class="section-title">Hire Vision OS Developer as per Your Need</h2>

        <div class="pricing-box d-flex justify-content-center gap-4 mt-5">
            <div class="price-card">$25/hr</div>
            <div class="price-card">$3500/month</div>
        </div>

        <a href="#" class="btn btn-main rounded-pill mt-4">Get a Quote</a>
    </div>
</section>

<!-- =========================================
   FORM – RISK FREE TRIAL
========================================= -->
<section class="trial-form-section py-100 bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4">Onboard a Developer with 15 Days Risk-Free Trial</h2>

        <form class="trial-form max-w-600 mx-auto">
            <input type="text" placeholder="Full Name">
            <input type="email" placeholder="Email ID">
            <input type="text" placeholder="Project Type">
            <button class="btn btn-main rounded-pill mt-3">Start Trial</button>
        </form>
    </div>
</section>

<!-- =========================================
   SUCCESS STORIES
========================================= -->
<section class="success-stories py-100">
    <div class="container">

        <h2 class="section-title text-center">Our Success Stories</h2>

        <div class="row align-items-center gy-4 mt-5">
            <div class="col-lg-6">
                <div class="story-box p-4">
                    <h4>Project: VisionOS Prototype</h4>
                    <p>We built a complete immersive onboarding experience...</p>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="images/success.png" class="w-100 rounded-4" alt="">
            </div>
        </div>

    </div>
</section>

<!-- =========================================
   INDUSTRIES
========================================= -->
<section class="industries py-100 bg-light">
    <div class="container text-center">
        <h2 class="section-title">Industries We Specialize In</h2>

        <div class="industry-list d-flex justify-content-center gap-4 mt-4 flex-wrap">
            <div class="industry-item">Healthcare</div>
            <div class="industry-item">Real Estate</div>
            <div class="industry-item">E-Commerce</div>
            <div class="industry-item">Education</div>
            <div class="industry-item">Gaming</div>
        </div>
    </div>
</section>

<!-- =========================================
   FAQ
========================================= -->
<section class="faq-section py-100">
    <div class="container">
        <h2 class="section-title text-center">Frequently Asked Questions</h2>

        <div class="faq-wrapper mt-5">
            <div class="faq-item">How long does development take?</div>
            <div class="faq-item">What skills do VisionOS developers need?</div>
            <div class="faq-item">Do you offer dedicated teams?</div>
            <div class="faq-item">Can I replace a developer anytime?</div>
        </div>
    </div>
</section>

        <!-- footer area -->
        @include('frontend.includes.footers.footerOne')
        <!-- footer area end -->
    </div>
@endsection
