@extends('frontend.layouts.app')
@section('title', 'WordPress & WooCommerce Maintenance Services')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">

        <style>
            /* ---- Hero ---- */
            .wpm-hero-section { background: #fff; padding: 90px 0 60px; }
            .wpm-badge { color: #00B5AD; font-size: 12px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 14px; display: block; }
            .wpm-h1 { font-size: clamp(2rem, 3.8vw, 3rem); font-weight: 800; line-height: 1.15; color: #0d1b2a; margin-bottom: 18px; }
            .wpm-h1 .wpm-blue { color: #00B5AD; }
            .wpm-subtitle { font-size: 16px; color: #5a6a7e; margin-bottom: 24px; max-width: 460px; line-height: 1.7; }
            .wpm-checks { list-style: none; padding: 0; margin: 0 0 32px; display: flex; flex-direction: column; gap: 10px; }
            .wpm-checks li { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 500; color: #2d3748; }
            .wpm-check-icon { width: 22px; height: 22px; background: #00B5AD; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0; }
            .wpm-check-icon svg { width: 12px; height: 12px; fill: none; stroke: #fff; stroke-width: 2.5; }
            .wpm-btn-primary { background: #0d1b2a; color: #fff; border: none; padding: 14px 28px; border-radius: 8px; font-weight: 700; font-size: 15px; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; transition: background .2s; }
            .wpm-btn-primary:hover { background: #00B5AD; color: #fff; }
            .wpm-btn-outline { background: #fff; color: #0d1b2a; border: 2px solid #d1d9e0; padding: 13px 28px; border-radius: 8px; font-weight: 700; font-size: 15px; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; transition: all .2s; }
            .wpm-btn-outline:hover { border-color: #00B5AD; color: #00B5AD; }

            /* ---- Dashboard Mockup ---- */
            .wpm-device-wrap { position: relative; max-width: 520px; margin: 0 auto; }
            .wpm-device-frame { background: #1e293b; border-radius: 16px; padding: 12px 12px 0; box-shadow: 0 30px 80px rgba(0,0,0,0.18); }
            .wpm-device-screen { background: #f0f2f5; border-radius: 8px 8px 0 0; overflow: hidden; display: flex; }
            /* Sidebar */
            .wpm-db-sidebar { background: #1d2327; width: 90px; flex-shrink: 0; padding: 14px 0; }
            .wpm-db-sidebar-logo { text-align: center; margin-bottom: 14px; }
            .wpm-db-sidebar-logo svg { width: 28px; height: 28px; fill: #00B5AD; }
            .wpm-db-nav { list-style: none; margin: 0; padding: 0; }
            .wpm-db-nav li { padding: 7px 10px; font-size: 9px; color: rgba(255,255,255,0.55); text-align: center; cursor: pointer; }
            .wpm-db-nav li.active { color: #fff; background: rgba(255,255,255,0.07); }
            /* Main content */
            .wpm-db-main { flex: 1; padding: 14px; }
            .wpm-db-title { font-size: 13px; font-weight: 700; color: #1e293b; margin-bottom: 12px; }
            .wpm-db-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
            .wpm-db-card { background: #fff; border-radius: 8px; padding: 10px 12px; box-shadow: 0 1px 4px rgba(0,0,0,0.06); }
            .wpm-db-card-label { font-size: 9px; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
            .wpm-db-card-value { font-size: 20px; font-weight: 800; line-height: 1; margin-bottom: 4px; }
            .wpm-db-card-sub { font-size: 9px; font-weight: 600; }
            .wpm-db-sparkline { height: 24px; margin-top: 6px; }
            .wpm-db-sparkline svg { width: 100%; height: 100%; }
            /* Device base */
            .wpm-device-base { height: 12px; background: #e2e8f0; border-radius: 0 0 8px 8px; }
            .wpm-device-stand { width: 40%; height: 6px; background: #cbd5e1; border-radius: 0 0 6px 6px; margin: 0 auto; }

            /* ---- Trust Bar ---- */
            .wpm-trust-bar { background: #fff; padding: 48px 0; border-top: 1px solid #e8edf2; border-bottom: 1px solid #e8edf2; }
            .wpm-trust-card { text-align: center; padding: 28px 20px; }
            .wpm-trust-icon { width: 56px; height: 56px; margin: 0 auto 14px; background: #E0F5F5; border-radius: 12px; display: flex; align-items: center; justify-content: center; }
            .wpm-trust-icon svg { width: 28px; height: 28px; fill: #00B5AD; }
            .wpm-trust-number { font-size: 2.4rem; font-weight: 800; color: #0d1b2a; line-height: 1; margin-bottom: 4px; }
            .wpm-trust-title { font-size: 15px; font-weight: 700; color: #0d1b2a; margin-bottom: 2px; }
            .wpm-trust-sub { font-size: 13px; color: #7a8a9a; }
            .wpm-trust-divider { width: 1px; background: #e8edf2; align-self: stretch; margin: 20px 0; }
        </style>

        <!-- ===================== HERO ===================== -->
        <section class="wpm-hero-section">
            <div class="container">
                <div class="row align-items-center gy-5">
                    <!-- Left -->
                    <div class="col-lg-6">
                        <span class="wpm-badge">WordPress Maintenance Experts</span>
                        <h1 class="wpm-h1">
                            WordPress &amp;<br>
                            <span class="wpm-blue">WooCommerce</span><br>
                            Maintenance Services
                        </h1>
                        <p class="wpm-subtitle">Keep Your Website Secure, Fast &amp; Updated Without Hiring an In-House Developer.</p>
                        <ul class="wpm-checks">
                            @foreach (['5+ Year Client Relationships','WooCommerce Specialists','Security & Performance Monitoring','Ongoing Technical Support'] as $item)
                            <li>
                                <span class="wpm-check-icon">
                                    <svg viewBox="0 0 12 12"><polyline points="1.5,6 4.5,9.5 10.5,2.5"/></svg>
                                </span>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                        <div class="d-flex align-items-center gap-3 flex-wrap">
                            <a href="{{ route('contact') }}" class="wpm-btn-primary">
                                Get Free Website Audit &nbsp;&#8594;
                            </a>
                            <a href="{{ route('casestudy') }}" class="wpm-btn-outline">
                                View Case Studies
                            </a>
                        </div>
                    </div>

                    <!-- Right: HTML Dashboard Mockup -->
                    <div class="col-lg-6">
                        <div class="wpm-device-wrap">
                            <div class="wpm-device-frame">
                                <div class="wpm-device-screen">
                                    <!-- Sidebar -->
                                    <div class="wpm-db-sidebar">
                                        <div class="wpm-db-sidebar-logo">
                                            <svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="24" fill="#00B5AD"/><text x="50%" y="56%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="28" font-family="serif" font-weight="bold">W</text></svg>
                                        </div>
                                        <ul class="wpm-db-nav">
                                            <li class="active">Dashboard</li>
                                            <li>Updates</li>
                                            <li>Security</li>
                                            <li>Backups</li>
                                            <li>Performance</li>
                                            <li>Uptime</li>
                                            <li>Support</li>
                                        </ul>
                                    </div>
                                    <!-- Main -->
                                    <div class="wpm-db-main">
                                        <div class="wpm-db-title">Your Website Status</div>
                                        <div class="wpm-db-grid">
                                            <!-- Uptime -->
                                            <div class="wpm-db-card">
                                                <div class="wpm-db-card-label">Uptime</div>
                                                <div class="wpm-db-card-value" style="color:#16a34a;">99.9%</div>
                                                <div class="wpm-db-sparkline">
                                                    <svg viewBox="0 0 80 24" preserveAspectRatio="none">
                                                        <polyline points="0,20 10,18 20,16 30,14 40,15 50,10 60,8 70,6 80,4" fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- Security -->
                                            <div class="wpm-db-card">
                                                <div class="wpm-db-card-label">Security</div>
                                                <div class="d-flex align-items-center gap-1 mt-1">
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="#16a34a"><path d="M12 2L3 7v5c0 5.25 3.75 10.15 9 11.35C17.25 22.15 21 17.25 21 12V7z"/></svg>
                                                    <span style="font-size:13px;font-weight:700;color:#16a34a;">Protected</span>
                                                </div>
                                                <div class="wpm-db-card-sub" style="color:#16a34a;margin-top:6px;">No Threats Found</div>
                                            </div>
                                            <!-- Backups -->
                                            <div class="wpm-db-card">
                                                <div class="wpm-db-card-label">Backups</div>
                                                <div class="wpm-db-card-value" style="color:#00B5AD;font-size:15px;margin-top:4px;">Weekly</div>
                                                <div class="wpm-db-card-sub" style="color:#94a3b8;margin-top:4px;">Last backup: 2 Days</div>
                                            </div>
                                            <!-- WooCommerce -->
                                            <div class="wpm-db-card">
                                                <div class="wpm-db-card-label">WooCommerce</div>
                                                <div class="d-flex align-items-center gap-1 mt-1">
                                                    <span style="font-size:13px;background:#96588a;color:#fff;padding:2px 7px;border-radius:4px;font-weight:700;">Woo</span>
                                                    <span style="font-size:12px;font-weight:700;color:#16a34a;">Healthy</span>
                                                </div>
                                                <div class="wpm-db-sparkline">
                                                    <svg viewBox="0 0 80 24" preserveAspectRatio="none">
                                                        <polyline points="0,20 15,15 25,16 35,10 50,12 65,8 80,5" fill="none" stroke="#96588a" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpm-device-base"></div>
                            </div>
                            <div class="wpm-device-stand"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero End -->

        <!-- ===================== TRUST BAR ===================== -->
        <section class="wpm-trust-bar">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="wpm-trust-card">
                            <div class="wpm-trust-icon">
                                <!-- People Icon -->
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                            </div>
                            <div class="wpm-trust-number">5+</div>
                            <div class="wpm-trust-title">Years</div>
                            <div class="wpm-trust-sub">Long-Term Client<br>Relationships</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="wpm-trust-card">
                            <div class="wpm-trust-icon">
                                <!-- Dollar Icon -->
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg>
                            </div>
                            <div class="wpm-trust-number">$1M+</div>
                            <div class="wpm-trust-title">WooCommerce Revenue</div>
                            <div class="wpm-trust-sub">Supported</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="wpm-trust-card">
                            <div class="wpm-trust-icon">
                                <!-- Briefcase Icon -->
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 6h-2.18c.07-.23.18-.49.18-.83C18 3.87 16.86 3 16 3h-4C11.14 3 10 3.87 10 5.17c0 .34.11.6.18.83H8c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-8-1h4c.28 0 .5.29.5.5s-.22.5-.5.5h-4c-.28 0-.5-.29-.5-.5S11.72 5 12 5zm8 14H8v-2h12v2zm0-5H8V8h12v6z"/></svg>
                            </div>
                            <div class="wpm-trust-number">40+</div>
                            <div class="wpm-trust-title">Successful</div>
                            <div class="wpm-trust-sub">Projects</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="wpm-trust-card">
                            <div class="wpm-trust-icon">
                                <!-- Chart/Growth Icon -->
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/></svg>
                            </div>
                            <div class="wpm-trust-number">96%</div>
                            <div class="wpm-trust-title">Upwork Job</div>
                            <div class="wpm-trust-sub">Success Score</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Trust Bar End -->

        <!-- ===================== PROBLEMS WE SOLVE ===================== -->
        <section class="py-120 position-relative" style="background: #071414;">
            <div class="container">
                <div class="text-center tw-mb-14">
                    <h2 class="splitTextStyleOne text-white fw-bold tw-mb-4">Is Your Website Costing You Customers?</h2>
                    <p class="text-neutral-400 fw-medium tw-text-lg mx-auto" style="max-width: 560px;">We Fix Issues That Affect Your WordPress Performance, Security &amp; Conversions</p>
                </div>
                <div class="row gy-4 justify-content-center">
                    @php
                        $problems = [
                            ['icon' => '&#9654;', 'title' => 'Slow Loading Website'],
                            ['icon' => '&#9881;', 'title' => 'Outdated Plugins'],
                            ['icon' => '&#128272;', 'title' => 'Security Risks'],
                            ['icon' => '&#128722;', 'title' => 'WooCommerce Checkout Issues'],
                            ['icon' => '&#128231;', 'title' => 'Broken Contact Forms'],
                            ['icon' => '&#128279;', 'title' => 'Hosting Problems'],
                            ['icon' => '&#128269;', 'title' => 'Technical SEO Issues'],
                            ['icon' => '&#9888;', 'title' => 'Website Downtime'],
                        ];
                    @endphp
                    @foreach ($problems as $problem)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center tw-gap-3 tw-py-5 tw-px-5 rounded-3" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08);">
                            <span class="fs-3 text-red-600" style="color:#ff4d4d;">&#10007;</span>
                            <span class="text-white fw-medium">{{ $problem['title'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Problems End -->

        <!-- ===================== WHY BUSINESSES WORK WITH US ===================== -->
        <section class="py-120 bg-white position-relative z-1 overflow-hidden">
            <img src="{{ asset('assets/images/shapes/squre-box-shape.png') }}" alt="Shape"
                class="position-absolute top-50 tw-start-0 tw-ms-128-px animate__wobble__two z-n1 d-lg-block d-none" />
            <div class="container">
                <div class="row gy-5 align-items-center flex-wrap-reverse">
                    <!-- Left Image -->
                    <div class="col-lg-5">
                        <div class="tw-rounded-lg bg-img position-relative max-w-570-px"
                            data-background-image="{{ asset('assets/images/thumbs/about-two-img-bg.png') }}">
                            <div class="d-flex tw-gap-6 tw-max-h-666-px">
                                <div class="swiper overflow-hidden about-two-thumbs-slider-one w-50">
                                    <div class="swiper-wrapper transition-timing-linear tw-gap-6">
                                        @for ($i = 1; $i <= 10; $i++)
                                        <div class="swiper-slide"><div class="tw-rounded-2xl overflow-hidden">
                                            <img src="{{ asset('assets/images/service-product/zalgo'.$i.'.png') }}" alt="Image" class="w-100 h-100 object-fit-cover" />
                                        </div></div>
                                        @endfor
                                    </div>
                                </div>
                                <div class="swiper overflow-hidden about-two-thumbs-slider-two w-50">
                                    <div class="swiper-wrapper transition-timing-linear tw-gap-6">
                                        @for ($i = 1; $i <= 10; $i++)
                                        <div class="swiper-slide"><div class="tw-rounded-2xl overflow-hidden">
                                            <img src="{{ asset('assets/images/service-product/zalgo'.$i.'.png') }}" alt="Image" class="w-100 h-100 object-fit-cover" />
                                        </div></div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right Content -->
                    <div class="col-lg-7 ps-lg-5">
                        <span class="tw-py-1 tw-px-705 bg-neutral-100 text-heading fw-medium text-capitalize rounded-pill tw-mb-4 d-inline-block">Long-Term WordPress Support</span>
                        <h2 class="splitTextStyleOne text-heading text-capitalize tw-mb-5">
                            Long-Term WordPress Support<br>
                            <span class="font-dm-serif fst-italic fw-normal">You Can Rely On</span>
                        </h2>
                        <p class="text-neutral-500 fw-medium tw-text-lg tw-mb-8" style="max-width: 540px;">
                            Instead of fixing problems after they happen, we proactively maintain, secure, and optimize your website.
                        </p>
                        <div class="row gy-4">
                            @php
                                $services = [
                                    ['icon' => 'ph-shield-check', 'title' => 'Security Monitoring'],
                                    ['icon' => 'ph-lightning', 'title' => 'Speed Optimization'],
                                    ['icon' => 'ph-arrows-clockwise', 'title' => 'Plugin Updates'],
                                    ['icon' => 'ph-cloud-arrow-up', 'title' => 'Backups'],
                                    ['icon' => 'ph-shopping-cart', 'title' => 'WooCommerce Support'],
                                    ['icon' => 'ph-wrench', 'title' => 'Custom Development'],
                                ];
                            @endphp
                            @foreach ($services as $svc)
                            <div class="col-md-4 col-sm-6">
                                <div class="d-flex align-items-center tw-gap-3 tw-py-4 tw-px-4 border border-neutral-100 rounded-3">
                                    <span class="tw-w-10 tw-h-10 bg-main-50 text-main-600 rounded-2 d-flex align-items-center justify-content-center fs-5">
                                        <i class="ph-bold {{ $svc['icon'] }}"></i>
                                    </span>
                                    <span class="fw-semibold text-heading tw-text-sm">{{ $svc['title'] }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Businesses End -->

        <!-- ===================== FEATURED CASE STUDY ===================== -->
        <section class="py-120" style="background: #f7f9fc;">
            <div class="container max-w-1400-px">
                <div class="text-center tw-mb-4">
                    <span class="tw-py-1 tw-px-705 bg-main-50 text-main-600 tw-text-sm fw-semibold text-uppercase rounded-pill">Featured Case Study</span>
                </div>
                <div class="row gy-5 align-items-center">
                    <!-- Left: Screenshot -->
                    <div class="col-lg-5">
                        <div class="position-relative rounded-4 overflow-hidden shadow-lg">
                            <img src="{{ asset('assets/images/case-study/bioage.png') }}" alt="BioAge" class="w-100 h-100 object-fit-cover" />
                            <div class="position-absolute bottom-0 tw-start-0 tw-end-0 tw-p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.75));">
                                <div class="text-white fw-semibold">BioAge</div>
                                <div class="text-neutral-300 tw-text-sm">Managed Since 2019</div>
                            </div>
                        </div>
                    </div>
                    <!-- Right: Content -->
                    <div class="col-lg-7 ps-lg-5">
                        <h2 class="splitTextStyleOne text-heading fw-bold tw-mb-3">BioAge</h2>
                        <p class="text-neutral-500 fw-semibold tw-mb-6">Managed Since 2019</p>
                        <ul class="list-unstyled d-flex flex-column tw-gap-3 tw-mb-8">
                            @php $cs_items = [
                                'WooCommerce Store Management',
                                'Security Management with Sucuri',
                                'Technical SEO & Speed Optimization',
                                'Hosting & Server Management',
                                'Payment Gateway Management',
                                'Ongoing Maintenance & Support',
                            ]; @endphp
                            @foreach ($cs_items as $item)
                            <li class="d-flex align-items-center tw-gap-3 text-neutral-700 fw-medium">
                                <span class="tw-w-5 tw-h-5 bg-main-600 text-white rounded-circle d-flex align-items-center justify-content-center" style="font-size: 11px;">&#10003;</span>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                        <!-- Highlight box -->
                        <div class="d-flex align-items-center tw-gap-6 tw-p-6 rounded-4 tw-mb-8" style="background: #fff; border-left: 4px solid var(--main-600); box-shadow: 0 4px 24px rgba(0,0,0,0.06);">
                            <div>
                                <div class="fs-2 fw-bold text-main-600">$1M+</div>
                                <div class="text-neutral-600 tw-text-sm fw-medium">Revenue Supported while providing ongoing maintenance and technical support since 2019.</div>
                            </div>
                        </div>
                        <a href="{{ route('bioage') }}"
                            class="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group tw-px-10 rounded-pill tw-py-505 fw-bold"
                            data-block="button">
                            <span class="button__flair"></span>
                            <span class="button__label">View Website &#8594;</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Case Study End -->

        <!-- ===================== CLIENT REVIEWS ===================== -->
        <section class="py-120 bg-white position-relative z-1">
            <img src="{{ asset('assets/images/shapes/faq-bg.png') }}" alt="" class="position-absolute tw-start-0 top-0 w-100 h-100 z-n1" />
            <div class="container">
                <!-- Heading -->
                <div class="text-center tw-mb-14">
                    <span class="tw-py-1 tw-px-705 bg-neutral-100 tw-text-sm fw-medium text-capitalize rounded-pill tw-mb-3 d-inline-block">Trusted by Clients</span>
                    <h2 class="splitTextStyleOne text-heading fw-bold tw-mb-3">What Our Clients Say</h2>
                    <p class="text-neutral-500 fw-medium">Real Reviews from Real Clients on Different Platforms</p>
                </div>

                <div class="row gy-5 align-items-stretch">
                    <!-- Left: Video Testimonial -->
                    <div class="col-lg-4">
                        <div class="wpm-review-video-card h-100 rounded-4 overflow-hidden border border-neutral-100 bg-white d-flex flex-column">
                            <div class="position-relative overflow-hidden" style="height: 240px;">
                                <iframe width="100%" height="100%"
                                    src="https://www.youtube.com/embed/TxjsRFwDvbQ?si=LA4zrJXjOhfKCdMM"
                                    title="Client Testimonial"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                                    style="display:block;"></iframe>
                            </div>
                            <div class="tw-p-6 text-center flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                                <div class="d-flex tw-gap-1 justify-content-center tw-mb-3">
                                    @for($s=0;$s<5;$s++)<span style="color:#f59e0b;font-size:18px;">&#9733;</span>@endfor
                                </div>
                                <p class="text-neutral-600 fw-medium tw-text-sm tw-mb-4" style="line-height:1.7;">
                                    "Over the past five years, they have managed our complete eCommerce infrastructure — SEO, payments, and 24/7 support. Their proactive approach has driven consistent growth."
                                </p>
                                <div class="d-flex align-items-center tw-gap-3">
                                    <img src="{{ asset('assets/images/thumbs/testimonials-short-img3.png') }}" alt="Roland" class="rounded-circle" style="width:44px;height:44px;object-fit:cover;" />
                                    <div class="text-start">
                                        <div class="fw-bold text-heading tw-text-sm">Roland Thomas</div>
                                        <div class="text-neutral-500 tw-text-xs">CEO &amp; Founder</div>
                                    </div>
                                </div>
                                <div class="tw-mt-3 tw-text-xs text-neutral-400 fw-medium text-uppercase tracking-wide">&#127916; Video Testimonial · Client Review</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Platform Review Cards -->
                    <div class="col-lg-8">
                        <div class="d-flex flex-column tw-gap-5 h-100">

                            <!-- Clutch -->
                            <div class="wpm-review-card rounded-4 tw-p-6 border border-neutral-100 bg-white d-flex tw-gap-5 align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="fw-black" style="font-size:22px;color:#FF3D2E;letter-spacing:-1px;">clutch</div>
                                    <div class="d-flex tw-gap-1 tw-mt-1">
                                        @for($s=0;$s<5;$s++)<span style="color:#FF3D2E;font-size:15px;">&#9733;</span>@endfor
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-neutral-700 fw-medium tw-text-sm tw-mb-3" style="line-height:1.7;">
                                        "Zalgo Infotech has been an outstanding partner for our WordPress and WooCommerce needs. Highly professional and a reliable team."
                                    </p>
                                    <div class="d-flex align-items-center tw-gap-2">
                                        <span class="tw-w-6 tw-h-6 bg-main-50 rounded-circle d-flex align-items-center justify-content-center" style="font-size:11px;color:#006d75;">&#10003;</span>
                                        <span class="tw-text-xs text-neutral-500 fw-semibold">Verified Review</span>
                                    </div>
                                </div>
                            </div>

                            <!-- GoodFirms -->
                            <div class="wpm-review-card rounded-4 tw-p-6 border border-neutral-100 bg-white d-flex tw-gap-5 align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="fw-black" style="font-size:18px;color:#1a73e8;letter-spacing:0px;">GoodFirms</div>
                                    <div class="d-flex tw-gap-1 tw-mt-1">
                                        @for($s=0;$s<5;$s++)<span style="color:#1a73e8;font-size:15px;">&#9733;</span>@endfor
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-neutral-700 fw-medium tw-text-sm tw-mb-3" style="line-height:1.7;">
                                        "They deliver quality work on time and provide excellent support. Our website is in safe hands with Zalgo Infotech."
                                    </p>
                                    <div class="d-flex align-items-center tw-gap-2">
                                        <span class="tw-w-6 tw-h-6 bg-main-50 rounded-circle d-flex align-items-center justify-content-center" style="font-size:11px;color:#006d75;">&#10003;</span>
                                        <span class="tw-text-xs text-neutral-500 fw-semibold">Verified Review</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Upwork -->
                            <div class="wpm-review-card rounded-4 tw-p-6 border border-neutral-100 bg-white d-flex tw-gap-5 align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="fw-black" style="font-size:20px;color:#14a800;">upwork</div>
                                    <div class="d-flex tw-gap-1 tw-mt-1">
                                        @for($s=0;$s<5;$s++)<span style="color:#14a800;font-size:15px;">&#9733;</span>@endfor
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-neutral-700 fw-medium tw-text-sm tw-mb-3" style="line-height:1.7;">
                                        "Great experience working with Zalgo Infotech. Very skilled, responsive and always goes the extra mile!"
                                    </p>
                                    <div class="d-flex align-items-center tw-gap-2">
                                        <span class="tw-w-6 tw-h-6 bg-main-50 rounded-circle d-flex align-items-center justify-content-center" style="font-size:11px;color:#006d75;">&#10003;</span>
                                        <span class="tw-text-xs text-neutral-500 fw-semibold">Verified Review</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Reviews End -->

        <!-- ===================== MAINTENANCE PLANS ===================== -->
        <section class="py-120 bg-white" id="plans">
            <div class="container">
                <div class="text-center tw-mb-14">
                    <h2 class="splitTextStyleOne text-heading fw-bold tw-mb-4">WordPress Maintenance Plans</h2>
                    <p class="text-neutral-500 fw-medium tw-text-lg">Choose the plan that best fits your business needs.</p>
                </div>
                <div class="row gy-4 justify-content-center align-items-stretch">

                    <!-- Essential Care -->
                    <div class="col-lg-4 col-md-6">
                        <div class="wpm-plan-card h-100 d-flex flex-column tw-p-8 rounded-4 border border-neutral-100" style="background: #f9fafb;">
                            <div class="tw-mb-6">
                                <div class="text-neutral-500 fw-semibold text-uppercase tw-text-sm tw-mb-2">Essential Care</div>
                                <div class="fs-1 fw-bold text-heading">$99<span class="fs-5 fw-normal text-neutral-500">/month</span></div>
                            </div>
                            <ul class="list-unstyled d-flex flex-column tw-gap-3 flex-grow-1 tw-mb-8">
                                @php $ess = ['WordPress Core Updates','Plugin & Theme Updates','Weekly Backups','Security Monitoring','Uptime Monitoring','Email Support']; @endphp
                                @foreach ($ess as $f)
                                <li class="d-flex align-items-center tw-gap-3 text-neutral-700">
                                    <span class="text-main-600 fw-bold">&#10003;</span> {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                            <button type="button" onclick="openPlanModal('Essential Care – $99/month')"
                                class="btn btn-outline-secondary rounded-pill tw-py-4 fw-semibold w-100 border border-neutral-300 text-heading">
                                Choose Plan
                            </button>
                        </div>
                    </div>

                    <!-- Growth Care (Most Popular) -->
                    <div class="col-lg-4 col-md-6">
                        <div class="wpm-plan-card h-100 d-flex flex-column tw-p-8 rounded-4 position-relative" style="background: var(--main-600); color: #fff; box-shadow: 0 20px 60px rgba(0,109,117,0.25);">
                            <div class="position-absolute top-0 start-50 translate-middle">
                                <span class="bg-yellow text-heading fw-bold tw-px-4 tw-py-1 rounded-pill tw-text-xs text-uppercase">&#11088; Most Popular</span>
                            </div>
                            <div class="tw-mb-6 tw-mt-4">
                                <div class="fw-semibold text-uppercase tw-text-sm tw-mb-2" style="color:rgba(255,255,255,0.75);">Growth Care</div>
                                <div class="fs-1 fw-bold text-white">$199<span class="fs-5 fw-normal" style="color:rgba(255,255,255,0.7);">/month</span></div>
                            </div>
                            <div class="tw-text-sm tw-mb-3 fw-medium" style="color:rgba(255,255,255,0.85);">Everything in Essential Care +</div>
                            <ul class="list-unstyled d-flex flex-column tw-gap-3 flex-grow-1 tw-mb-8">
                                @php $gro = ['Speed Optimization','Monthly Performance Reports','Database Optimization','Priority Support','Bug Fixes & Minor Changes']; @endphp
                                @foreach ($gro as $f)
                                <li class="d-flex align-items-center tw-gap-3" style="color:rgba(255,255,255,0.9);">
                                    <span class="fw-bold text-yellow">&#10003;</span> {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                            <button type="button" onclick="openPlanModal('Growth Care – $199/month')"
                                class="btn bg-white text-main-600 fw-bold rounded-pill tw-py-4 w-100 hover--translate-y-1">
                                Choose Plan
                            </button>
                        </div>
                    </div>

                    <!-- WooCommerce Care -->
                    <div class="col-lg-4 col-md-6">
                        <div class="wpm-plan-card h-100 d-flex flex-column tw-p-8 rounded-4 border border-neutral-100" style="background: #f9fafb;">
                            <div class="tw-mb-6">
                                <div class="text-neutral-500 fw-semibold text-uppercase tw-text-sm tw-mb-2">WooCommerce Care</div>
                                <div class="fs-1 fw-bold text-heading">Custom</div>
                            </div>
                            <div class="tw-text-sm tw-mb-3 fw-medium text-neutral-600">Everything in Growth Care +</div>
                            <ul class="list-unstyled d-flex flex-column tw-gap-3 flex-grow-1 tw-mb-8">
                                @php $woo = ['WooCommerce Updates','Checkout Monitoring','Payment Gateway Support','Store Maintenance','Advanced Support']; @endphp
                                @foreach ($woo as $f)
                                <li class="d-flex align-items-center tw-gap-3 text-neutral-700">
                                    <span class="text-main-600 fw-bold">&#10003;</span> {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                            <button type="button" onclick="openPlanModal('WooCommerce Care – Custom')"
                                class="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center group rounded-pill tw-py-4 fw-bold w-100"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label">Contact Us</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Plans End -->

        <!-- ===================== PORTFOLIO ===================== -->
        <section class="py-120" style="background: #f7f9fc;">
            <div class="container">
                <div class="text-center tw-mb-14">
                    <h2 class="splitTextStyleOne text-heading fw-bold tw-mb-4">Our Recent Work</h2>
                </div>
                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="wpm-portfolio-card rounded-4 overflow-hidden border border-neutral-100 bg-white h-100 d-flex flex-column">
                            <div class="overflow-hidden" style="height: 220px;">
                                <img src="{{ asset('assets/images/case-study/bioage.png') }}" alt="BioAge" class="w-100 h-100 object-fit-cover" style="transition: transform 0.4s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" />
                            </div>
                            <div class="tw-p-6 d-flex flex-column flex-grow-1">
                                <h5 class="fw-bold text-heading tw-mb-1">BioAge</h5>
                                <p class="text-neutral-500 tw-text-sm tw-mb-1">Managed Since 2019</p>
                                <p class="text-neutral-400 tw-text-sm tw-mb-4">WooCommerce Maintenance &amp; Support</p>
                                <div class="mt-auto">
                                    <a href="{{ route('bioage') }}" class="d-inline-flex align-items-center tw-gap-2 text-main-600 fw-semibold hover-underline">
                                        Visit Site <i class="ph-bold ph-arrow-right tw-text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="wpm-portfolio-card rounded-4 overflow-hidden border border-neutral-100 bg-white h-100 d-flex flex-column">
                            <div class="overflow-hidden" style="height: 220px;">
                                <img src="{{ asset('assets/images/case-study/experthe-case-study.png') }}" alt="Experthe" class="w-100 h-100 object-fit-cover" style="transition: transform 0.4s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" />
                            </div>
                            <div class="tw-p-6 d-flex flex-column flex-grow-1">
                                <h5 class="fw-bold text-heading tw-mb-1">Experthe</h5>
                                <p class="text-neutral-500 tw-text-sm tw-mb-1">WordPress &amp; WooCommerce</p>
                                <p class="text-neutral-400 tw-text-sm tw-mb-4">Security &amp; Performance Overhaul</p>
                                <div class="mt-auto">
                                    <a href="{{ route('experthe') }}" class="d-inline-flex align-items-center tw-gap-2 text-main-600 fw-semibold hover-underline">
                                        Visit Site <i class="ph-bold ph-arrow-right tw-text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="wpm-portfolio-card rounded-4 overflow-hidden border border-neutral-100 bg-white h-100 d-flex flex-column">
                            <div class="overflow-hidden" style="height: 220px;">
                                <img src="{{ asset('assets/images/thumbs/Awakeningthegeniuswithin.jpg') }}" alt="Awakening The Genius Within" class="w-100 h-100 object-fit-cover" style="transition: transform 0.4s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" />
                            </div>
                            <div class="tw-p-6 d-flex flex-column flex-grow-1">
                                <h5 class="fw-bold text-heading tw-mb-1">Awakening The Genius Within</h5>
                                <p class="text-neutral-500 tw-text-sm tw-mb-1">WordPress · Wellness Platform</p>
                                <p class="text-neutral-400 tw-text-sm tw-mb-4">Ongoing Maintenance &amp; Support</p>
                                <div class="mt-auto">
                                    <a href="{{ route('awakeningthegeniuswithin') }}" class="d-inline-flex align-items-center tw-gap-2 text-main-600 fw-semibold hover-underline">
                                        Visit Site <i class="ph-bold ph-arrow-right tw-text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Portfolio End -->

        <!-- ===================== CTA / FREE AUDIT FORM ===================== -->
        <section class="py-120 position-relative overflow-hidden" style="background: linear-gradient(135deg, #071414 0%, #0a2828 100%);">
            <img src="{{ asset('assets/images/shapes/hill-shape.png') }}" alt="" class="position-absolute w-100 h-100 top-0 tw-start-0 z-0" style="opacity: 0.05;" />
            <div class="container position-relative z-1">
                <div class="row gy-5 align-items-start">
                    <!-- Left: CTA Text -->
                    <div class="col-lg-5">
                        <h2 class="splitTextStyleOne text-white fw-bold tw-mb-5">
                            Get a Free WordPress<br>
                            <span class="text-main-300">Website Audit</span>
                        </h2>
                        <p class="text-neutral-300 fw-medium tw-text-lg tw-mb-8" style="max-width: 440px;">
                            We'll review your website and identify security, performance, and maintenance opportunities to help your business grow.
                        </p>
                        <div class="d-flex flex-column tw-gap-4">
                            <div class="d-flex align-items-center tw-gap-3 text-neutral-300">
                                <span class="tw-w-8 tw-h-8 bg-white-13 rounded-circle d-flex align-items-center justify-content-center">&#10003;</span>
                                No Obligation
                            </div>
                            <div class="d-flex align-items-center tw-gap-3 text-neutral-300">
                                <span class="tw-w-8 tw-h-8 bg-white-13 rounded-circle d-flex align-items-center justify-content-center">&#10003;</span>
                                100% Free
                            </div>
                            <div class="d-flex align-items-center tw-gap-3 text-neutral-300">
                                <span class="tw-w-8 tw-h-8 bg-white-13 rounded-circle d-flex align-items-center justify-content-center">&#10003;</span>
                                Actionable Insights
                            </div>
                        </div>
                    </div>
                    <!-- Right: Form -->
                    <div class="col-lg-7">
                        <div class="bg-white rounded-4 tw-p-8 shadow-lg">
                            <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-4">
                                        <input type="text" name="name" placeholder="Your Name" required
                                            class="form-control rounded-3 border border-neutral-200 tw-py-3 tw-px-4" />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" name="email" placeholder="Your Email" required
                                            class="form-control rounded-3 border border-neutral-200 tw-py-3 tw-px-4" />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="url" name="website" placeholder="Website URL"
                                            class="form-control rounded-3 border border-neutral-200 tw-py-3 tw-px-4" />
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" rows="3" placeholder="Message (Optional)"
                                            class="form-control rounded-3 border border-neutral-200 tw-py-3 tw-px-4"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                            class="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-3 group tw-px-10 rounded-pill tw-py-505 fw-bold w-100"
                                            data-block="button">
                                            <span class="button__flair"></span>
                                            <span class="button__label">Request Free Audit &#8594;</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Form End -->

        <!-- footer area -->
        @include('frontend.includes.footers.footerOne')
        <!-- footer area end -->

    </div>

<!-- ===================== PLAN INQUIRY MODAL ===================== -->
<div id="planModal" style="display:none;position:fixed;inset:0;z-index:99999;background:rgba(13,27,42,0.6);backdrop-filter:blur(4px);overflow-y:auto;">
    <div style="min-height:100%;display:flex;align-items:center;justify-content:center;padding:24px;">
        <div id="planModalBox" style="background:#fff;border-radius:20px;width:100%;max-width:540px;padding:40px;position:relative;box-shadow:0 32px 80px rgba(0,0,0,0.18);transform:translateY(30px);opacity:0;transition:transform .3s ease, opacity .3s ease;">
            <!-- Close -->
            <button onclick="closePlanModal()" style="position:absolute;top:16px;right:20px;background:none;border:none;font-size:22px;color:#94a3b8;cursor:pointer;line-height:1;" aria-label="Close">&times;</button>

            <!-- Header -->
            <div style="margin-bottom:24px;">
                <div style="font-size:12px;font-weight:700;color:#00B5AD;text-transform:uppercase;letter-spacing:1px;margin-bottom:8px;">Get Started</div>
                <h3 style="font-size:22px;font-weight:800;color:#0d1b2a;margin:0 0 6px;">Tell Us About Your Website</h3>
                <p id="planModalSubtitle" style="font-size:14px;color:#64748b;margin:0;"></p>
            </div>

            <!-- Selected Plan Badge -->
            <div id="planBadge" style="background:#E0F5F5;border-radius:8px;padding:10px 16px;margin-bottom:24px;display:flex;align-items:center;gap:10px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="#00B5AD"><path d="M12 2L3 7v5c0 5.25 3.75 10.15 9 11.35C17.25 22.15 21 17.25 21 12V7z"/></svg>
                <span style="font-size:14px;font-weight:700;color:#00B5AD;" id="selectedPlanLabel"></span>
            </div>

            <!-- Alerts -->
            <div id="planSuccess" style="display:none;background:#dcfce7;border-radius:10px;padding:14px 18px;margin-bottom:20px;color:#166534;font-weight:600;font-size:14px;">
                &#10003; Thank you! We'll get in touch within 24 hours.
            </div>
            <div id="planError" style="display:none;background:#fee2e2;border-radius:10px;padding:14px 18px;margin-bottom:20px;color:#991b1b;font-weight:600;font-size:14px;"></div>

            <!-- Form -->
            <form id="planInquiryForm" novalidate>
                @csrf
                <input type="hidden" name="plan" id="planField" />

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px;">
                    <div>
                        <label style="font-size:13px;font-weight:600;color:#374151;margin-bottom:5px;display:block;">Full Name <span style="color:#ef4444;">*</span></label>
                        <input type="text" name="name" required placeholder="John Smith"
                            style="width:100%;padding:11px 14px;border:1.5px solid #e2e8f0;border-radius:10px;font-size:14px;color:#0d1b2a;outline:none;transition:border-color .2s;"
                            onfocus="this.style.borderColor='#00B5AD'" onblur="this.style.borderColor='#e2e8f0'" />
                    </div>
                    <div>
                        <label style="font-size:13px;font-weight:600;color:#374151;margin-bottom:5px;display:block;">Email <span style="color:#ef4444;">*</span></label>
                        <input type="email" name="email" required placeholder="you@example.com"
                            style="width:100%;padding:11px 14px;border:1.5px solid #e2e8f0;border-radius:10px;font-size:14px;color:#0d1b2a;outline:none;transition:border-color .2s;"
                            onfocus="this.style.borderColor='#00B5AD'" onblur="this.style.borderColor='#e2e8f0'" />
                    </div>
                </div>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px;">
                    <div>
                        <label style="font-size:13px;font-weight:600;color:#374151;margin-bottom:5px;display:block;">Phone <span style="color:#ef4444;">*</span></label>
                        <input type="tel" name="phone" required placeholder="+1 (555) 000-0000"
                            style="width:100%;padding:11px 14px;border:1.5px solid #e2e8f0;border-radius:10px;font-size:14px;color:#0d1b2a;outline:none;transition:border-color .2s;"
                            onfocus="this.style.borderColor='#00B5AD'" onblur="this.style.borderColor='#e2e8f0'" />
                    </div>
                    <div>
                        <label style="font-size:13px;font-weight:600;color:#374151;margin-bottom:5px;display:block;">Website URL</label>
                        <input type="text" name="website" placeholder="https://yoursite.com"
                            style="width:100%;padding:11px 14px;border:1.5px solid #e2e8f0;border-radius:10px;font-size:14px;color:#0d1b2a;outline:none;transition:border-color .2s;"
                            onfocus="this.style.borderColor='#00B5AD'" onblur="this.style.borderColor='#e2e8f0'" />
                    </div>
                </div>

                <div style="margin-bottom:24px;">
                    <label style="font-size:13px;font-weight:600;color:#374151;margin-bottom:5px;display:block;">Message <span style="color:#94a3b8;font-weight:400;">(Optional)</span></label>
                    <textarea name="message" rows="3" placeholder="Tell us about your website or any specific needs..."
                        style="width:100%;padding:11px 14px;border:1.5px solid #e2e8f0;border-radius:10px;font-size:14px;color:#0d1b2a;outline:none;resize:vertical;transition:border-color .2s;"
                        onfocus="this.style.borderColor='#00B5AD'" onblur="this.style.borderColor='#e2e8f0'"></textarea>
                </div>

                <button type="submit" id="planSubmitBtn"
                    style="width:100%;padding:14px;background:#0d1b2a;color:#fff;border:none;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer;transition:background .2s;display:flex;align-items:center;justify-content:center;gap:8px;">
                    <span id="planBtnText">Request Your Plan &#8594;</span>
                    <svg id="planSpinner" style="display:none;animation:spin .7s linear infinite;" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5"><circle cx="12" cy="12" r="10" stroke-opacity=".25"/><path d="M12 2a10 10 0 0 1 10 10"/></svg>
                </button>
            </form>
        </div>
    </div>
</div>

<style>
@keyframes spin { to { transform: rotate(360deg); } }
.wpm-review-card:hover { box-shadow: 0 8px 32px rgba(0,0,0,0.07); transform: translateY(-2px); transition: all .25s; }
</style>

<script>
var planModalCsrf = '{{ csrf_token() }}';
var planInquiryUrl = '{{ route("plan.inquiry") }}';

function openPlanModal(plan) {
    document.getElementById('planField').value = plan;
    document.getElementById('selectedPlanLabel').textContent = '&#128312; Selected: ' + plan;
    document.getElementById('planModalSubtitle').textContent = 'You selected: ' + plan + '. Fill in your details and we\'ll reach out within 24 hours.';
    document.getElementById('planSuccess').style.display = 'none';
    document.getElementById('planError').style.display = 'none';
    document.getElementById('planInquiryForm').reset();
    document.getElementById('planField').value = plan;
    document.getElementById('selectedPlanLabel').textContent = 'Selected: ' + plan;

    var modal = document.getElementById('planModal');
    var box   = document.getElementById('planModalBox');
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
    requestAnimationFrame(function() {
        box.style.transform = 'translateY(0)';
        box.style.opacity   = '1';
    });
}

function closePlanModal() {
    var modal = document.getElementById('planModal');
    var box   = document.getElementById('planModalBox');
    box.style.transform = 'translateY(30px)';
    box.style.opacity   = '0';
    setTimeout(function() {
        modal.style.display = 'none';
        document.body.style.overflow = '';
    }, 280);
}

// Close on backdrop click
document.getElementById('planModal').addEventListener('click', function(e) {
    if (e.target === this) closePlanModal();
});

// Close on Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closePlanModal();
});

// Form submit via AJAX
document.getElementById('planInquiryForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var btn     = document.getElementById('planSubmitBtn');
    var btnText = document.getElementById('planBtnText');
    var spinner = document.getElementById('planSpinner');
    var errDiv  = document.getElementById('planError');
    var okDiv   = document.getElementById('planSuccess');

    btnText.style.display = 'none';
    spinner.style.display = 'inline-block';
    btn.disabled = true;
    errDiv.style.display = 'none';

    var formData = new FormData(this);
    formData.set('_token', planModalCsrf);

    fetch(planInquiryUrl, {
        method: 'POST',
        headers: { 'X-CSRF-TOKEN': planModalCsrf, 'Accept': 'application/json' },
        body: formData
    })
    .then(function(r) { return r.json(); })
    .then(function(data) {
        if (data.success) {
            okDiv.style.display = 'block';
            document.getElementById('planInquiryForm').reset();
            setTimeout(closePlanModal, 2800);
        } else {
            var msg = data.message || 'Something went wrong. Please try again.';
            if (data.errors) {
                msg = Object.values(data.errors).flat().join(' ');
            }
            errDiv.textContent = msg;
            errDiv.style.display = 'block';
        }
    })
    .catch(function() {
        errDiv.textContent = 'Network error. Please check your connection and try again.';
        errDiv.style.display = 'block';
    })
    .finally(function() {
        btnText.style.display = 'inline';
        spinner.style.display = 'none';
        btn.disabled = false;
    });
});
</script>

@endsection
