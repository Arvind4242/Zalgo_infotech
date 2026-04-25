@extends('frontend.layouts.app')
@section('title', 'Case Studies')

@section('content')
@include('frontend.includes.headers.headerOne')

<style>
.cs-filter-wrap {
    display: flex;
    gap: 10px;
    justify-content: center;
    flex-wrap: wrap;
}
.cs-filter-btn {
    background: #fff;
    border: 2px solid #e5e7eb;
    font-size: 14px;
    cursor: pointer;
    padding: 10px 22px;
    color: #006d75;
    font-weight: 600;
    border-radius: 50px;
    transition: all 0.2s;
    white-space: nowrap;
    box-shadow: 0 2px 8px rgba(0,0,0,0.06);
}
.cs-filter-btn:hover {
    border-color: #006d75;
    background: #006d75;
    color: #fff;
}
.cs-filter-btn.active {
    background: #006d75 !important;
    border-color: #006d75 !important;
    color: #fff !important;
}
.cs-card-wrap {
    display: none;
    padding-top: 60px;
}
.cs-card-wrap.active {
    display: block;
}
.cs-tech-tag {
    display: inline-block;
    background: hsl(var(--main-h),var(--main-s),95%);
    color: hsl(var(--main));
    font-size: 0.72rem;
    font-weight: 600;
    padding: 3px 10px;
    border-radius: 20px;
}
</style>

<div id="smooth-content">

<!-- Breadcrumb Start -->
<section class="pt-120 pb-120 section-bg-two mb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="tw-mb-4">
                    <img src="{{ asset('assets/images/logo/favicon-two.png') }}" alt="Favicon Two"/>
                </span>
                <h1 class="mb-0 splitTextStyleOne text-capitalize">Case Studies</h1>
                <p class="text-body mt-3 mx-auto" style="max-width:520px;">Real projects. Real results. Explore how we build SaaS platforms, ERP systems, and web applications for clients worldwide.</p>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->


<div class="pt-120 pb-120">

    <div class="container">
        <div class="cs-filter-wrap">
            <button class="cs-filter-btn active" data-filter="all">All Projects</button>
            <button class="cs-filter-btn" data-filter="react">React + Node.js</button>
            <button class="cs-filter-btn" data-filter="laravel">Laravel</button>
            <button class="cs-filter-btn" data-filter="wordpress">WordPress</button>
        </div>
    </div>


    {{-- ===================== ALL ===================== --}}
    <div class="cs-card-wrap active" data-category="all">
        <div class="container">
            <div class="row gy-5">

                {{-- ERP System --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('erpsystem') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/erpsystem-thumb.jpg') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="ERP System"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-atom"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">React + Node.js</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-buildings"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Education Tech</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Ongoing</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('erpsystem') }}" class="splitTextStyleOne">
                                    Institute Management ERP — React + Node.js Monorepo
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Full-Stack Monorepo SaaS ERP</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                A comprehensive Institute Management ERP built as a monorepo with React 18 + Vite frontend and Node.js + Express backend. Manages students, staff, attendance, fees, exams, and timetables — all in one blazing-fast SPA.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['React 18','Vite','Node.js','Prisma ORM','JWT Auth','Tailwind CSS','Monorepo'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('erpsystem') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- LMS --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('lms') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/lms.jpg') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="LMS"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-atom"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">React + Node.js</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-graduation-cap"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">E-Learning</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Ongoing</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('lms') }}" class="splitTextStyleOne">
                                    Learning Management System — React + Node.js Monorepo
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Full-Stack Monorepo E-Learning SaaS</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                A complete LMS built as a monorepo with React 18 + Vite and Node.js. Delivers video lessons, quizzes, auto-grading, certificate generation, and payment-gated course enrollment for 2,500+ learners.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['React 18','Vite','Node.js','Prisma ORM','Stripe','Puppeteer PDF','Monorepo'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('lms') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Lead Management --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('leadmanagement') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/finance-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="Lead Management"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-atom"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">React + Node.js</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-funnel"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Sales CRM</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Ongoing</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('leadmanagement') }}" class="splitTextStyleOne">
                                    Lead Management CRM — Follow-up Automation & Payment Handling
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ React + Node.js CRM with Automation Engine</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                A full-stack Lead CRM with Kanban pipeline, status management, follow-up automation via Node-cron, Stripe payment handling, Socket.io real-time notifications, and email/SMS drip sequences.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['React 18','Vite','Node.js','Socket.io','Node-cron','Nodemailer','Stripe'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('leadmanagement') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Washing ERP --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('washingerp') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/experthe-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="Washing ERP"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-atom"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">React + Node.js</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-car"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Vehicle Washing SaaS</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Ongoing</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('washingerp') }}" class="splitTextStyleOne">
                                    Washing Center ERP — Slot Booking, Rewards & Multi-tenant SaaS
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Multi-tenant SaaS ERP for Vehicle Washing Centers</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                A SaaS ERP where washing center owners subscribe, configure working days, set time slots, and accept customer bookings online. Includes a customer reward points engine, invoice generator, and automated SMS/email notifications.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['React 18','Vite','Node.js','Multi-tenant','Stripe','Twilio SMS','Prisma ORM'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('washingerp') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Lab Project --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('labproject') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/bioage-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="Lab Report System"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-code"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Laravel PHP</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-flask"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Healthcare / Lab</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Ongoing</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('labproject') }}" class="splitTextStyleOne">
                                    Lab Report Generation System — Automated PDF Reports & Analytics
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Laravel-based Lab Management & Report Platform</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                A comprehensive lab management platform built on Laravel. Automates sample tracking, test result entry, and PDF report generation. Patients access their own reports online while admins manage test workflows end-to-end.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['Laravel 10','MySQL','DomPDF','Spatie Permissions','Bootstrap 5','SMS Gateway'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('labproject') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- BioAge --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('bioage') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/bioage-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="BioAge"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-user"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Roland Thomas</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph-bold ph-shopping-bag"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">E-commerce</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">6+ Years</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('bioage') }}" class="splitTextStyleOne">
                                    BIOAGE — Scaling a 7-Figure E-commerce Brand
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Long-Term Strategic Tech Partner</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                BIOAGE is a high-performing e-commerce brand generating 7-figure monthly revenue. For over 6 years, we have managed end-to-end technology, performance optimization, security, and continuous platform growth.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['WordPress','WooCommerce','SiteGround','Sucuri','Payment Gateways'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('bioage') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>{{-- end all --}}


    {{-- ===================== REACT + NODE.JS ===================== --}}
    <div class="cs-card-wrap" data-category="react">
        <div class="container">
            <div class="row gy-5">

                {{-- ERP System --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('erpsystem') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/erpsystem-thumb.jpg') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="ERP System"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-atom"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">React + Node.js</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-buildings"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Education Tech</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Ongoing</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('erpsystem') }}" class="splitTextStyleOne">
                                    Institute Management ERP — React + Node.js Monorepo
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Full-Stack Monorepo SaaS ERP</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                A comprehensive Institute Management ERP built as a monorepo with React 18 + Vite frontend and Node.js + Express backend. 50+ modules covering students, staff, attendance, fees, exams, and timetables.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['React 18','Vite','Node.js','Prisma ORM','JWT Auth','Tailwind CSS','Monorepo'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('erpsystem') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- LMS --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('lms') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/lms.jpg') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="LMS"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-atom"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">React + Node.js</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-graduation-cap"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">E-Learning</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Ongoing</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('lms') }}" class="splitTextStyleOne">
                                    Learning Management System — React + Node.js Monorepo
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Full-Stack E-Learning SaaS Platform</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                A complete LMS with video lessons, quizzes, auto-grading, Puppeteer certificate generation, and Stripe-gated course enrollment — serving 2,500+ learners on a React 18 + Node.js monorepo.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['React 18','Vite','Node.js','Prisma ORM','Stripe','Puppeteer PDF','Monorepo'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('lms') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Lead Management --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('leadmanagement') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/finance-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="Lead Management"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-atom"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">React + Node.js</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-funnel"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Sales CRM</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Ongoing</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('leadmanagement') }}" class="splitTextStyleOne">
                                    Lead Management CRM — Follow-up Automation & Payment Handling
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ CRM with Kanban Pipeline & Automation Engine</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                A full-stack Lead CRM with drag-and-drop Kanban pipeline, Node-cron follow-up automation, Stripe payment handling, Socket.io real-time notifications, and automated email/SMS drip sequences.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['React 18','Vite','Node.js','Socket.io','Node-cron','Nodemailer','Stripe'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('leadmanagement') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Washing ERP --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('washingerp') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/experthe-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="Washing ERP"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-atom"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">React + Node.js</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-car"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Vehicle Washing SaaS</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Ongoing</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('washingerp') }}" class="splitTextStyleOne">
                                    Washing Center ERP — Slot Booking, Rewards & Multi-tenant SaaS
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Multi-tenant SaaS for Vehicle Washing Centers</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                A SaaS ERP where washing center owners subscribe, configure working days & time slots, and accept online bookings. Includes reward points engine, auto invoice generation, and SMS/email notifications.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['React 18','Vite','Node.js','Multi-tenant','Stripe','Twilio SMS','Prisma ORM'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('washingerp') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>{{-- end react --}}


    {{-- ===================== LARAVEL ===================== --}}
    <div class="cs-card-wrap" data-category="laravel">
        <div class="container">
            <div class="row gy-5">

                {{-- Lab Project --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('labproject') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/bioage-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="Lab Report System"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-code"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Laravel PHP</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-flask"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Healthcare / Lab</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Ongoing</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('labproject') }}" class="splitTextStyleOne">
                                    Lab Report Generation System — Automated PDF Reports & Analytics
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Laravel Lab Management & Report Platform</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                A comprehensive lab management platform built on Laravel that automates sample tracking, test result entry, and PDF report generation. Patients access reports online while admins manage workflows end-to-end.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['Laravel 10','MySQL','DomPDF','Spatie Permissions','Bootstrap 5','SMS Gateway'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('labproject') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>{{-- end laravel --}}


    {{-- ===================== WORDPRESS ===================== --}}
    <div class="cs-card-wrap" data-category="wordpress">
        <div class="container">
            <div class="row gy-5">

                {{-- BioAge --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('bioage') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/bioage-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="BioAge"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-user"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Roland Thomas</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph-bold ph-shopping-bag"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">E-commerce</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">6+ Years</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('bioage') }}" class="splitTextStyleOne">
                                    BIOAGE — Scaling a 7-Figure E-commerce Brand
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Long-Term Strategic Tech Partner</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                BIOAGE is a high-performing e-commerce brand generating 7-figure monthly revenue. For over 6 years, we have managed end-to-end technology, performance optimization, security, marketing integration, and continuous platform growth.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['WordPress','WooCommerce','SiteGround','Sucuri','Payment Gateways'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('bioage') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Experthe --}}
                <div class="col-lg-6">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">
                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('experthe') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                                <img src="{{ asset('assets/images/case-study/experthe-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" alt="Experthe"/>
                            </a>
                        </div>
                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-user"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">Milissa</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph-bold ph-shopping-bag"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">E-commerce</span>
                                </div>
                                <span class="tw-w-205 border border-neutral-200"></span>
                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg"><i class="ph ph-clock"></i></span>
                                    <span class="text-neutral-600 tw-text-lg">4+ Years</span>
                                </div>
                            </div>
                            <h4 class="tw-mb-4">
                                <a href="{{ route('experthe') }}" class="splitTextStyleOne">
                                    Expert Heavy Equipment – Website Redesign & Security Enhancement
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Security & Performance Overhaul</h6>
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                Expert Heavy Equipment is a trusted business in the heavy equipment industry. The client needed a strong, secure online presence to represent their brand and support long-term growth with integrated communication tools.
                            </p>
                            <h4 class="pb-2">Tech Stack:</h4>
                            <div class="d-flex flex-wrap gap-2 pb-3">
                                @foreach(['WordPress','WooCommerce','Twilio','Wordfence'] as $t)
                                <span class="cs-tech-tag">{{ $t }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('experthe') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span><img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>{{-- end wordpress --}}

</div>{{-- end outer wrapper --}}

@include('frontend.includes.footers.footerOne')

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var btns     = document.querySelectorAll('.cs-filter-btn');
    var sections = document.querySelectorAll('.cs-card-wrap');

    btns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            // update button states
            btns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');

            var filter = btn.getAttribute('data-filter');

            // show / hide sections
            sections.forEach(function (sec) {
                if (sec.getAttribute('data-category') === filter) {
                    sec.classList.add('active');
                } else {
                    sec.classList.remove('active');
                }
            });
        });
    });
});
</script>

@endsection
