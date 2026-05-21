@extends('frontend.layouts.app')

@section('title', 'ERP System Case Study - Institute Management Platform | React + Node.js + Vite Monorepo')

@section('content')


<!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">

<style>
.erp-hero-mockup { background: #1a2332; border-radius: 16px; overflow: hidden; box-shadow: 0 24px 60px rgba(0,0,0,0.18); }
.erp-mockup-bar { background: #0f1825; padding: 10px 16px; display: flex; align-items: center; gap: 8px; }
.erp-mockup-dot { width: 10px; height: 10px; border-radius: 50%; display: inline-block; }
.erp-mockup-url { background: #1e2d40; color: #8aafc4; font-size: 11px; padding: 3px 14px; border-radius: 20px; flex: 1; margin-left: 8px; }
.erp-mockup-body { padding: 0; }
.erp-sidebar { background: #0f1825; width: 56px; min-height: 220px; display: flex; flex-direction: column; align-items: center; gap: 18px; padding: 18px 0; }
.erp-sidebar-icon { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #8aafc4; }
.erp-sidebar-icon.active { background: hsl(var(--main)); color: #fff; }
.erp-main-content { background: #f5f9ff; flex: 1; padding: 14px; }
.erp-stat-mini { background: #fff; border-radius: 8px; padding: 10px 14px; flex: 1; min-width: 0; }
.erp-stat-mini .num { font-size: 1.1rem; font-weight: 700; color: hsl(var(--main)); }
.erp-stat-mini .lbl { font-size: 10px; color: #888; }
.erp-table-row { background: #fff; border-radius: 6px; padding: 8px 12px; margin-bottom: 6px; display: flex; align-items: center; gap: 10px; font-size: 11px; }
.erp-table-row .av { width: 24px; height: 24px; border-radius: 50%; background: hsl(var(--main-h),var(--main-s),85%); display: flex; align-items: center; justify-content: center; color: hsl(var(--main)); font-size: 10px; font-weight: 700; }
.section-label { font-size: 0.82rem; letter-spacing: 1.5px; text-transform: uppercase; font-weight: 600; color: hsl(var(--main)); margin-bottom: 8px; display: block; }
.module-card { background: #fff; border: 1px solid #e5e7eb; border-radius: 14px; padding: 28px 24px; height: 100%; transition: box-shadow 0.2s, transform 0.2s; }
.module-card:hover { box-shadow: 0 8px 32px rgba(0,118,122,0.12); transform: translateY(-3px); }
.module-icon { width: 56px; height: 56px; border-radius: 14px; background: hsl(var(--main-h),var(--main-s),95%); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: hsl(var(--main)); margin-bottom: 16px; }
.challenge-item { display: flex; align-items: flex-start; gap: 14px; padding: 14px 16px; background: #fff; border-radius: 10px; border: 1px solid #f0f0f0; }
.challenge-num { width: 32px; height: 32px; min-width: 32px; border-radius: 50%; background: hsl(var(--main-h),var(--main-s),95%); color: hsl(var(--main)); font-weight: 700; font-size: 0.85rem; display: flex; align-items: center; justify-content: center; }
.role-card { background: #fff; border-radius: 12px; padding: 18px 20px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 14px; transition: box-shadow 0.2s; }
.role-card:hover { box-shadow: 0 4px 20px rgba(0,118,122,0.1); }
.role-icon { width: 44px; height: 44px; min-width: 44px; border-radius: 10px; background: hsl(var(--main-h),var(--main-s),95%); display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: hsl(var(--main)); }
.result-stat { background: #fff; border-radius: 14px; padding: 32px 24px; text-align: center; border: 1px solid #e5e7eb; height: 100%; }
.result-stat .big { font-size: 2.2rem; font-weight: 800; color: hsl(var(--main)); line-height: 1; margin-bottom: 8px; }
.timeline-item { position: relative; padding-left: 40px; padding-bottom: 28px; }
.timeline-item:not(:last-child)::before { content: ''; position: absolute; left: 15px; top: 32px; width: 2px; bottom: 0; background: hsl(var(--main-h),var(--main-s),90%); }
.timeline-dot { position: absolute; left: 0; top: 4px; width: 32px; height: 32px; border-radius: 50%; background: hsl(var(--main)); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 14px; }
.why-card { background: #fff; border-radius: 14px; padding: 28px 24px; border: 1px solid #e5e7eb; height: 100%; display: flex; flex-direction: column; gap: 14px; }
.cta-bg { background: linear-gradient(135deg, hsl(var(--main)) 0%, hsl(184,100%,18%) 100%); }
.monorepo-badge { background: #0f1825; color: #61dafb; font-family: monospace; font-size: 11px; padding: 4px 10px; border-radius: 6px; display: inline-flex; align-items: center; gap: 5px; }
/* Module cards — mobile slider only */
.module-cards-swiper { padding-bottom: 40px; }
.module-cards-swiper .swiper-slide { height: auto; }
.module-cards-swiper .swiper-pagination-bullet-active { background: hsl(var(--main)); }
@media (min-width: 768px) {
    .module-cards-swiper { overflow: visible !important; padding-bottom: 0; }
    .module-cards-swiper .swiper-wrapper { flex-wrap: wrap !important; transform: none !important; width: 100% !important; gap: 24px; }
    .module-cards-swiper .swiper-slide { width: calc(33.333% - 16px) !important; margin-right: 0 !important; }
    .module-cards-swiper .swiper-pagination { display: none !important; }
}
/* Meta cards — mobile slider only */
.meta-cards-swiper { padding-bottom: 40px; }
.meta-cards-swiper .swiper-slide { height: auto; }
.meta-cards-swiper .swiper-pagination-bullet-active { background: hsl(var(--main)); }
@media (min-width: 768px) {
    .meta-cards-swiper { overflow: visible !important; padding-bottom: 0; }
    .meta-cards-swiper .swiper-wrapper { flex-wrap: wrap !important; transform: none !important; width: 100% !important; gap: 16px; }
    .meta-cards-swiper .swiper-slide { width: calc(20% - 13px) !important; margin-right: 0 !important; }
    .meta-cards-swiper .swiper-pagination { display: none !important; }
}
</style>


<!-- ======================== HERO SECTION ======================== -->
<section style="background: linear-gradient(135deg, #f0fafa 0%, #e0f5f5 60%, #fff 100%); padding: 80px 0 60px;" class="overflow-hidden">
    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- Left: Text -->
            <div class="col-lg-6">
                <div class="d-flex align-items-center gap-2 flex-wrap mb-4">
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">React 18</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Node.js</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Vite</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Monorepo</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">ERP System</span>
                </div>
                <h1 class="fw-bold lh-sm mb-3" style="font-size: clamp(1.8rem, 4vw, 3rem);">
                    Building a Powerful
                    <span class="text-main">Institute Management</span>
                    ERP System from Scratch
                </h1>
                <p class="text-body mb-2" style="font-size: 1.05rem;">
                    React + Node.js &nbsp;|&nbsp; Vite &nbsp;|&nbsp; Monorepo &nbsp;|&nbsp; ERP Platform
                </p>
                <div class="d-flex align-items-center gap-2 flex-wrap mb-5">
                    <span class="monorepo-badge"><i class="ph ph-git-branch"></i> packages/frontend</span>
                    <span class="monorepo-badge"><i class="ph ph-git-branch"></i> packages/backend</span>
                    <span class="monorepo-badge"><i class="ph ph-git-branch"></i> packages/shared</span>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <a href="https://erp.zalgostore.com/" target="_blank" rel="noopener noreferrer"
                       class="btn btn-main px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2">
                        <i class="ph ph-arrow-square-out"></i> Visit Live ERP
                    </a>
                    <a href="{{ url('/contact') }}"
                       class="btn px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2"
                       style="border:2px solid hsl(var(--main));color:hsl(var(--main));background:transparent;">
                        <i class="ph ph-chat-circle-dots"></i> Request a Quote
                    </a>
                </div>
            </div>

            <!-- Right: ERP Dashboard Mockup -->
            <div class="col-lg-6">
                <div class="erp-hero-mockup">
                    <div class="erp-mockup-bar">
                        <span class="erp-mockup-dot" style="background:#ff5f57;"></span>
                        <span class="erp-mockup-dot" style="background:#ffbd2e;"></span>
                        <span class="erp-mockup-dot" style="background:#28c840;"></span>
                        <span class="erp-mockup-url">erp.zalgostore.com</span>
                    </div>
                    <div class="erp-mockup-body d-flex">
                        <!-- Sidebar -->
                        <div class="erp-sidebar">
                            <div class="erp-sidebar-icon active"><i class="ph ph-squares-four"></i></div>
                            <div class="erp-sidebar-icon"><i class="ph ph-student"></i></div>
                            <div class="erp-sidebar-icon"><i class="ph ph-users"></i></div>
                            <div class="erp-sidebar-icon"><i class="ph ph-currency-circle-dollar"></i></div>
                            <div class="erp-sidebar-icon"><i class="ph ph-calendar-check"></i></div>
                            <div class="erp-sidebar-icon"><i class="ph ph-exam"></i></div>
                            <div class="erp-sidebar-icon"><i class="ph ph-chart-bar"></i></div>
                        </div>
                        <!-- Content -->
                        <div class="erp-main-content">
                            <div class="text-heading-color fw-bold mb-3" style="font-size:12px;">Dashboard Overview</div>
                            <div class="d-flex gap-2 mb-3">
                                <div class="erp-stat-mini">
                                    <div class="num">1,240</div>
                                    <div class="lbl">Students</div>
                                </div>
                                <div class="erp-stat-mini">
                                    <div class="num">84</div>
                                    <div class="lbl">Teachers</div>
                                </div>
                                <div class="erp-stat-mini">
                                    <div class="num">96%</div>
                                    <div class="lbl">Attendance</div>
                                </div>
                                <div class="erp-stat-mini">
                                    <div class="num">₹4.2L</div>
                                    <div class="lbl">Fees Due</div>
                                </div>
                            </div>
                            <div class="text-heading-color fw-semibold mb-2" style="font-size:11px;">Recent Enrollments</div>
                            <div class="erp-table-row">
                                <div class="av">AK</div>
                                <span style="flex:1;">Arjun Kumar — Grade 9A</span>
                                <span style="color:hsl(var(--main));font-weight:600;">Active</span>
                            </div>
                            <div class="erp-table-row">
                                <div class="av">PS</div>
                                <span style="flex:1;">Priya Sharma — Grade 11B</span>
                                <span style="color:hsl(var(--main));font-weight:600;">Active</span>
                            </div>
                            <div class="erp-table-row">
                                <div class="av">MR</div>
                                <span style="flex:1;">Mohammed Raza — Grade 7C</span>
                                <span style="color:#f59e0b;font-weight:600;">Pending</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meta Cards -->
        <div class="swiper meta-cards-swiper mt-5">
            <div class="swiper-wrapper">
            @foreach([
                ['ph-atom','Frontend','React 18 + Vite'],
                ['ph-terminal','Backend','Node.js + Express'],
                ['ph-git-branch','Architecture','Monorepo (npm workspaces)'],
                ['ph-clock','Duration','Ongoing'],
                ['ph-globe','Region','Global'],
            ] as $m)
            <div class="swiper-slide h-auto">
                <div class="d-flex flex-column align-items-center text-center p-4 bg-white border border-neutral-200 rounded-3 h-100 shadow-sm">
                    <span class="d-flex align-items-center justify-content-center rounded-circle bg-main-50 text-main mb-3"
                          style="width:52px;height:52px;font-size:1.4rem;"><i class="ph {{ $m[0] }}"></i></span>
                    <span class="text-body fw-medium d-block mb-1" style="font-size:0.82rem;">{{ $m[1] }}</span>
                    <span class="fw-bold text-heading-color">{{ $m[2] }}</span>
                </div>
            </div>
            @endforeach
            </div>
            <div class="swiper-pagination text-center tw-mt-8"></div>
        </div>
    </div>
</section>


<!-- ======================== PROJECT OVERVIEW ======================== -->
<section class="py-120 bg-neutral-50">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <span class="section-label">About the Project</span>
                <h2 class="fw-bold mb-4">Project <span class="text-main">Overview</span></h2>
                <p class="text-body lh-lg mb-4">
                    <strong>Zalgo Infotech ERP</strong> is a comprehensive Institute Management System built as a <strong>monorepo</strong> with a React 18 + Vite frontend and a Node.js + Express REST API backend. It provides educational institutions with a centralized platform to manage students, staff, attendance, fees, exams, timetables, and more — delivered as a blazing-fast SPA.
                </p>
                <p class="text-body lh-lg mb-5">
                    The monorepo structure (<code>packages/frontend</code>, <code>packages/backend</code>, <code>packages/shared</code>) enables shared TypeScript types, validators, and utilities across both apps — ensuring a single source of truth for the entire system.
                </p>
                <div class="d-flex align-items-center gap-4 flex-wrap">
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">50+</div>
                        <div class="text-body" style="font-size:0.82rem;">Modules</div>
                    </div>
                    <div style="width:1px;height:40px;background:#e5e7eb;"></div>
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">4</div>
                        <div class="text-body" style="font-size:0.82rem;">User Roles</div>
                    </div>
                    <div style="width:1px;height:40px;background:#e5e7eb;"></div>
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">3</div>
                        <div class="text-body" style="font-size:0.82rem;">Monorepo Packages</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- 4 User Role Cards -->
                <div class="row gy-3 gx-3">
                    @foreach([
                        ['ph-shield-star','Admin','Full system control &amp; configuration'],
                        ['ph-chalkboard-teacher','Teacher','Classes, attendance &amp; grades'],
                        ['ph-student','Student','Portal, results &amp; timetable'],
                        ['ph-users','Parent','Child progress &amp; fee status'],
                    ] as $r)
                    <div class="col-6">
                        <div class="role-card">
                            <div class="role-icon"><i class="ph {{ $r[0] }}"></i></div>
                            <div>
                                <div class="fw-bold text-heading-color" style="font-size:0.9rem;">{{ $r[1] }}</div>
                                <div class="text-body" style="font-size:0.78rem;">{!! $r[2] !!}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Monorepo structure banner -->
                <div class="mt-4 rounded-3 p-4"
                     style="background:#0f1825;">
                    <div class="text-white fw-semibold mb-3" style="font-size:0.82rem;letter-spacing:1px;">MONOREPO STRUCTURE</div>
                    @foreach([
                        ['ph-folder','packages/frontend','React 18 + Vite SPA','#61dafb'],
                        ['ph-folder','packages/backend','Node.js + Express API','#68a063'],
                        ['ph-folder','packages/shared','TypeScript types &amp; validators','#f0db4f'],
                    ] as $pkg)
                    <div class="d-flex align-items-center gap-2 mb-2" style="font-family:monospace;font-size:11px;">
                        <i class="ph {{ $pkg[0] }}" style="color:{{ $pkg[3] }};font-size:14px;"></i>
                        <span style="color:{{ $pkg[3] }};">{{ $pkg[1] }}</span>
                        <span style="color:#8aafc4;margin-left:auto;">{!! $pkg[2] !!}</span>
                    </div>
                    @endforeach
                    <div class="mt-3 pt-2" style="border-top:1px solid rgba(255,255,255,0.1);">
                        <span style="color:#8aafc4;font-size:10px;font-family:monospace;">npm workspaces • shared ESLint &amp; Prettier config</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================== BUSINESS CHALLENGES ======================== -->
<section class="py-120 bg-white">
    <div class="container">
        <div class="row gy-5 align-items-start">
            <div class="col-lg-5">
                <span class="section-label">Pain Points</span>
                <h2 class="fw-bold mb-3">Business <span class="text-main">Challenges</span></h2>
                <p class="text-body lh-lg mb-4">The institution faced operational complexity and lacked a unified digital system:</p>
                <div class="rounded-3 p-5 d-flex flex-column align-items-center justify-content-center text-center"
                     style="background:linear-gradient(135deg,#e0f5f5,#f0fafa);min-height:260px;">
                    <i class="ph ph-warning-circle text-main" style="font-size:4rem;"></i>
                    <div class="fw-bold text-heading-color mt-3 mb-1">Multiple Disconnected Systems</div>
                    <div class="text-body" style="font-size:0.88rem;max-width:220px;">Manual processes causing delays, errors, and missed communications</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="d-flex flex-column gap-3 mt-lg-5 pt-lg-3">
                    @foreach([
                        ['01','Manual student enrollment and fee collection processes'],
                        ['02','No real-time attendance tracking for students and staff'],
                        ['03','Disconnected communication between teachers, students, and parents'],
                        ['04','Lack of centralized exam, result, and report card management'],
                        ['05','Difficulty managing timetables, holidays, and academic calendar'],
                        ['06','No role-based access control for multi-department management'],
                        ['07','Multiple separate codebases causing duplicated logic and inconsistency'],
                    ] as $c)
                    <div class="challenge-item">
                        <span class="challenge-num">{{ $c[0] }}</span>
                        <span class="text-body">{{ $c[1] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================== OUR ROLE ======================== -->
<section class="py-120 bg-neutral-50">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6">
                <span class="section-label">What We Did</span>
                <h2 class="fw-bold mb-3">Our Role &amp; <span class="text-main">Responsibilities</span></h2>
                <p class="text-body mb-4">We architected and built the full monorepo from scratch — React frontend, Node.js API, and shared package — through to deployment.</p>
                <div class="d-flex flex-column gap-3">
                    @foreach([
                        ['ph-atom','React 18 SPA with Vite — component-driven UI architecture'],
                        ['ph-terminal','Node.js + Express REST API with JWT authentication'],
                        ['ph-git-branch','Monorepo setup with npm workspaces &amp; shared TypeScript types'],
                        ['ph-lock-key','Role-based auth guards (Admin, Teacher, Student, Parent)'],
                        ['ph-currency-circle-dollar','Fee management with invoice generation &amp; payment tracking'],
                        ['ph-calendar-check','Attendance module with real-time updates via React Query'],
                        ['ph-exam','Exam scheduling, result entry, and report card generation'],
                        ['ph-cloud-arrow-up','Cloud deployment, CI/CD pipeline setup &amp; ongoing maintenance'],
                    ] as $item)
                    <div class="d-flex align-items-center gap-3">
                        <span class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle bg-main-50 text-main"
                              style="width:36px;height:36px;min-width:36px;font-size:1.1rem;">
                            <i class="ph {{ $item[0] }}"></i>
                        </span>
                        <span class="text-body">{!! $item[1] !!}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded-3 p-4 shadow-sm">
                    <div class="fw-bold text-heading-color mb-4" style="font-size:1rem;">Development Timeline</div>
                    @foreach([
                        ['ph-clipboard-text','Phase 1: Requirement Analysis','Mapped all institute workflows and monorepo package structure'],
                        ['ph-git-branch','Phase 2: Monorepo Setup','Bootstrapped npm workspaces, shared TS config, ESLint &amp; Prettier'],
                        ['ph-atom','Phase 3: React Frontend','Built all 50+ pages &amp; components with Vite HMR &amp; React Query'],
                        ['ph-terminal','Phase 4: Node.js API','Designed RESTful API with Express, JWT auth &amp; MySQL via Prisma'],
                        ['ph-rocket-launch','Phase 5: Deployment &amp; Live','Docker-based deployment, CI/CD, SSL — live with v2.0'],
                    ] as $t)
                    <div class="timeline-item">
                        <div class="timeline-dot"><i class="ph {{ $t[0] }}" style="font-size:14px;"></i></div>
                        <div class="fw-semibold text-heading-color" style="font-size:0.9rem;">{!! $t[1] !!}</div>
                        <div class="text-body" style="font-size:0.82rem;">{{ $t[2] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================== SOLUTION DELIVERED ======================== -->
<section class="py-120 bg-white">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-7">
                <span class="section-label">What We Built</span>
                <h2 class="fw-bold mb-3">Solution <span class="text-main">Delivered</span></h2>
                <p class="text-body mb-5">A full-stack monorepo ERP — React SPA on the frontend, Node.js REST API on the backend, and a shared package for types and business logic.</p>
                <div class="row gy-3 gx-3">
                    @foreach([
                        ['ph-atom','React SPA','50+ pages built with React 18, React Router v6, and Tailwind CSS.'],
                        ['ph-terminal','Node.js REST API','Express-based API with JWT auth, role middleware &amp; Prisma ORM.'],
                        ['ph-git-branch','Shared Package','Common TypeScript types, Zod validators &amp; utility functions.'],
                        ['ph-lightning','Vite Build','Sub-second HMR in dev, optimised production bundles with code-splitting.'],
                        ['ph-files','Report Cards','Dynamic PDF export via server-side Node.js Puppeteer rendering.'],
                        ['ph-chart-bar','Analytics Dashboard','Live stats with React Query + Chart.js for admin reporting.'],
                    ] as $s)
                    <div class="col-sm-6">
                        <div class="module-card">
                            <div class="module-icon"><i class="ph {{ $s[0] }}"></i></div>
                            <div class="fw-semibold text-heading-color mb-1" style="font-size:0.92rem;">{{ $s[1] }}</div>
                            <div class="text-body" style="font-size:0.82rem;">{!! $s[2] !!}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Tech Stack Card -->
            <div class="col-lg-5">
                <div class="rounded-3 h-100 p-5 position-relative overflow-hidden"
                     style="background:#0f1825;">
                    <div class="d-flex align-items-center gap-3 mb-5">
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width:72px;height:72px;min-width:72px;background:#1e2d40;">
                            <span class="fw-bold" style="font-size:1.3rem;color:#61dafb;">50+</span>
                        </div>
                        <span class="text-white fw-semibold" style="font-size:1.1rem;">ERP Modules</span>
                    </div>
                    <h3 class="text-white fw-bold mb-4">Technology Stack</h3>
                    <ul class="d-flex flex-column gap-3 list-unstyled">
                        @foreach([
                            ['Frontend','React 18 + Vite','#61dafb'],
                            ['Backend','Node.js + Express','#68a063'],
                            ['Database','MySQL via Prisma ORM','#fff'],
                            ['Auth','JWT + Role Middleware','#fff'],
                            ['Styling','Tailwind CSS + shadcn/ui','#38bdf8'],
                            ['State','React Query + Zustand','#fff'],
                            ['Repo','Monorepo (npm workspaces)','#f0db4f'],
                            ['Deploy','Docker + CI/CD Pipeline','#fff'],
                        ] as $tech)
                        <li class="d-flex align-items-center gap-2">
                            <i class="ph ph-caret-right flex-shrink-0" style="color:{{ $tech[2] }};"></i>
                            <span style="color:rgba(255,255,255,0.9);"><strong style="color:{{ $tech[2] }};">{{ $tech[0] }}:</strong> {{ $tech[1] }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="mt-5">
                        <a href="https://erp.zalgostore.com/" target="_blank" rel="noopener noreferrer"
                           class="btn fw-semibold px-4 py-3 rounded-pill d-inline-flex align-items-center gap-2"
                           style="background:hsl(var(--main));color:#fff;">
                            <i class="ph ph-arrow-square-out"></i> View Live System
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================== KEY MODULES ======================== -->
<section class="py-120 bg-neutral-50">
    <div class="container">
        <div class="text-center mb-60">
            <span class="section-label d-block">System Modules</span>
            <h2 class="fw-bold">ERP in <span class="text-main">Action</span></h2>
            <p class="text-body mt-2 mx-auto" style="max-width:540px;">Every React page backed by a dedicated Node.js API route — from admission to graduation.</p>
        </div>
        <div class="swiper module-cards-swiper">
            <div class="swiper-wrapper">
            @foreach([
                ['ph-student','Student Management','Enrollment, profiles, documents, academic history, and section assignment.'],
                ['ph-calendar-check','Attendance Tracking','Real-time attendance with React state updates and instant parent alerts.'],
                ['ph-currency-circle-dollar','Fee Management','Fee structure builder, invoice generation, and payment gateway integration.'],
                ['ph-exam','Exam &amp; Results','Exam scheduling, marks entry, automated result calculation, and PDF export.'],
                ['ph-chalkboard-teacher','Staff &amp; HR','Staff profiles, payroll, leave management, and performance records.'],
                ['ph-clock','Timetable Builder','Interactive React drag-and-drop timetable with conflict detection.'],
                ['ph-book-open','Library Module','Book catalog, issue/return tracking, and overdue fine management.'],
                ['ph-bus','Transport Module','Route management, vehicle tracking, and student transport assignment.'],
                ['ph-bell-ringing','Notice Board','Real-time announcements with push notifications via Node.js WebSocket.'],
            ] as $mod)
            <div class="swiper-slide h-auto">
                <div class="module-card">
                    <div class="module-icon"><i class="ph {{ $mod[0] }}"></i></div>
                    <div class="fw-semibold text-heading-color mb-2" style="font-size:0.95rem;">{!! $mod[1] !!}</div>
                    <div class="text-body" style="font-size:0.83rem;">{!! $mod[2] !!}</div>
                </div>
            </div>
            @endforeach
            </div>
            <div class="swiper-pagination text-center tw-mt-8"></div>
        </div>
        <div class="text-center mt-5">
            <a href="https://erp.zalgostore.com/" target="_blank" rel="noopener noreferrer"
               class="btn btn-main px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2">
                <i class="ph ph-monitor"></i> Explore the Full System
            </a>
        </div>
    </div>
</section>


<!-- ======================== RESULTS ======================== -->
<section class="py-120 bg-white">
    <div class="container">
        <div class="text-center mb-60">
            <span class="section-label d-block">Outcomes</span>
            <h2 class="fw-bold">Results &amp; <span class="text-main">Impact</span></h2>
            <p class="text-body mt-2 mx-auto" style="max-width:540px;">Measurable improvements across every department after ERP implementation.</p>
        </div>
        <div class="row gy-4 justify-content-center">
            @foreach([
                ['80%','Reduction in admin workload','ph-trend-down'],
                ['96%','Attendance accuracy &amp; real-time tracking','ph-calendar-check'],
                ['3x','Faster page loads with Vite-optimised bundles','ph-lightning'],
                ['50+','Modules covering every institute function','ph-squares-four'],
            ] as $r)
            <div class="col-6 col-lg-3">
                <div class="result-stat shadow-sm">
                    <div class="big">{{ $r[0] }}</div>
                    <span class="d-flex align-items-center justify-content-center rounded-circle bg-main-50 text-main mx-auto mb-3"
                          style="width:44px;height:44px;font-size:1.2rem;">
                        <i class="ph {{ $r[2] }}"></i>
                    </span>
                    <div class="fw-semibold text-heading-color" style="font-size:0.88rem;">{!! $r[1] !!}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- ======================== WHY THIS MATTERS ======================== -->
<section class="py-120 bg-neutral-50">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6">
                <span class="section-label">The Takeaway</span>
                <h2 class="fw-bold mb-5">Why This <span class="text-main">Case Study</span> Matters</h2>
                <div class="row gy-4">
                    @foreach([
                        ['ph-rocket-launch','Proves real-world monorepo scalability for large ERP systems'],
                        ['ph-atom','Demonstrates full-stack React + Node.js expertise with Vite'],
                        ['ph-git-branch','Shows ability to architect and manage complex monorepo codebases'],
                        ['ph-handshake','Builds trust for global education &amp; enterprise SaaS clients'],
                    ] as $w)
                    <div class="col-sm-6">
                        <div class="why-card">
                            <span class="d-flex align-items-center justify-content-center rounded-2 bg-main-50 text-main"
                                  style="width:52px;height:52px;font-size:1.4rem;">
                                <i class="ph {{ $w[0] }}"></i>
                            </span>
                            <h5 class="fw-semibold text-heading-color mb-0" style="font-size:0.92rem;">{!! $w[1] !!}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded-3 shadow p-5">
                    <div class="fw-bold text-heading-color mb-4">System Highlights</div>
                    @foreach([
                        ['Students Enrolled','1,200+',85],
                        ['Attendance Rate','96%',96],
                        ['Fee Collection','₹48L+',78],
                        ['Active Modules','50+',100],
                    ] as $stat)
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-body" style="font-size:0.85rem;">{{ $stat[0] }}</span>
                            <span class="fw-bold text-main" style="font-size:0.85rem;">{{ $stat[1] }}</span>
                        </div>
                        <div class="rounded-pill overflow-hidden" style="height:6px;background:#e5e7eb;">
                            <div class="rounded-pill h-100" style="width:{{ $stat[2] }}%;background:hsl(var(--main));"></div>
                        </div>
                    </div>
                    @endforeach
                    <a href="https://erp.zalgostore.com/" target="_blank" rel="noopener noreferrer"
                       class="btn btn-main w-100 py-3 rounded-pill fw-semibold d-flex align-items-center justify-content-center gap-2 mt-3">
                        <i class="ph ph-arrow-square-out"></i> Open Live ERP System
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================== CTA / TASK MANAGEMENT ======================== -->
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
                    <div class="">
                        <span class="text-yellow text-stroke-yellow">50+</span> ERP Modules — Built for Your Institute
                    </div>
                </div>

                <h3 class="splitTextStyleOne text-white">
                    Ready to Modernize Your Institute?
                </h3>

                <div class="d-block">
                    <div class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                        <a href="{{ route('contact') }}"
                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                            data-block="button">
                            <span class="button__flair"></span>
                            <div class="d-flex align-items-center tw-gap-2 z-1">
                                <span class="button__label">Request a Quote</span>
                            </div>
                        </a>
                        <a target="_blank" href="https://erp.zalgostore.com/"
                            class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                            data-block="button">
                            <span class="button__flair"></span>
                            <div class="d-flex align-items-center tw-gap-2 z-1">
                                <span class="button__label">Visit Live ERP</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tw-pt-8 text-center">
                <div class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">React 18</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Node.js + Express</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Vite Monorepo</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill">TypeScript</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Prisma ORM</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">React Query</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Tailwind CSS</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">JWT Auth</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Docker</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill">CI/CD Pipeline</span>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- footer area -->
        @include('frontend.includes.footers.footerOne')
        <!-- footer area end -->
    </div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof Swiper !== 'undefined' && window.innerWidth < 768) {
        new Swiper('.module-cards-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: { el: '.module-cards-swiper .swiper-pagination', clickable: true },
        });
        new Swiper('.meta-cards-swiper', {
            slidesPerView: 2,
            spaceBetween: 16,
            pagination: { el: '.meta-cards-swiper .swiper-pagination', clickable: true },
        });
    }
});
</script>
@endsection
