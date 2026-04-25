@extends('frontend.layouts.app')

@section('title', 'LMS Case Study - Learning Management System | React + Node.js + Vite Monorepo')

@section('content')

<!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">

<style>
.lms-hero-mockup { background: #1a2332; border-radius: 16px; overflow: hidden; box-shadow: 0 24px 60px rgba(0,0,0,0.18); }
.lms-mockup-bar { background: #0f1825; padding: 10px 16px; display: flex; align-items: center; gap: 8px; }
.lms-mockup-dot { width: 10px; height: 10px; border-radius: 50%; display: inline-block; }
.lms-mockup-url { background: #1e2d40; color: #8aafc4; font-size: 11px; padding: 3px 14px; border-radius: 20px; flex: 1; margin-left: 8px; }
.lms-mockup-body { padding: 0; }
.lms-sidebar { background: #0f1825; width: 56px; min-height: 220px; display: flex; flex-direction: column; align-items: center; gap: 18px; padding: 18px 0; }
.lms-sidebar-icon { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #8aafc4; }
.lms-sidebar-icon.active { background: hsl(var(--main)); color: #fff; }
.lms-main-content { background: #f5f9ff; flex: 1; padding: 14px; }
.lms-stat-mini { background: #fff; border-radius: 8px; padding: 10px 14px; flex: 1; min-width: 0; }
.lms-stat-mini .num { font-size: 1.1rem; font-weight: 700; color: hsl(var(--main)); }
.lms-stat-mini .lbl { font-size: 10px; color: #888; }
.lms-table-row { background: #fff; border-radius: 6px; padding: 8px 12px; margin-bottom: 6px; display: flex; align-items: center; gap: 10px; font-size: 11px; }
.lms-table-row .av { width: 24px; height: 24px; border-radius: 50%; background: hsl(var(--main-h),var(--main-s),85%); display: flex; align-items: center; justify-content: center; color: hsl(var(--main)); font-size: 10px; font-weight: 700; }
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
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">LMS</span>
                </div>
                <h1 class="fw-bold lh-sm mb-3" style="font-size: clamp(1.8rem, 4vw, 3rem);">
                    Building a Powerful
                    <span class="text-main">Learning Management</span>
                    System from Scratch
                </h1>
                <p class="text-body mb-2" style="font-size: 1.05rem;">
                    React + Node.js &nbsp;|&nbsp; Vite &nbsp;|&nbsp; Monorepo &nbsp;|&nbsp; E-Learning Platform
                </p>
                <div class="d-flex align-items-center gap-2 flex-wrap mb-5">
                    <span class="monorepo-badge"><i class="ph ph-git-branch"></i> packages/frontend</span>
                    <span class="monorepo-badge"><i class="ph ph-git-branch"></i> packages/backend</span>
                    <span class="monorepo-badge"><i class="ph ph-git-branch"></i> packages/shared</span>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <a href="{{ url('/contact') }}"
                       class="btn btn-main px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2">
                        <i class="ph ph-paper-plane-tilt"></i> Request a Demo
                    </a>
                    <a href="{{ url('/contact') }}"
                       class="btn px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2"
                       style="border:2px solid hsl(var(--main));color:hsl(var(--main));background:transparent;">
                        <i class="ph ph-chat-circle-dots"></i> Request a Quote
                    </a>
                </div>
            </div>

            <!-- Right: LMS Dashboard Mockup -->
            <div class="col-lg-6">
                <div class="lms-hero-mockup">
                    <div class="lms-mockup-bar">
                        <span class="lms-mockup-dot" style="background:#ff5f57;"></span>
                        <span class="lms-mockup-dot" style="background:#ffbd2e;"></span>
                        <span class="lms-mockup-dot" style="background:#28c840;"></span>
                        <span class="lms-mockup-url">lms.example.com/dashboard</span>
                    </div>
                    <div class="lms-mockup-body d-flex">
                        <!-- Sidebar -->
                        <div class="lms-sidebar">
                            <div class="lms-sidebar-icon active"><i class="ph ph-squares-four"></i></div>
                            <div class="lms-sidebar-icon"><i class="ph ph-books"></i></div>
                            <div class="lms-sidebar-icon"><i class="ph ph-video"></i></div>
                            <div class="lms-sidebar-icon"><i class="ph ph-users"></i></div>
                            <div class="lms-sidebar-icon"><i class="ph ph-exam"></i></div>
                            <div class="lms-sidebar-icon"><i class="ph ph-certificate"></i></div>
                            <div class="lms-sidebar-icon"><i class="ph ph-chart-bar"></i></div>
                        </div>
                        <!-- Content -->
                        <div class="lms-main-content">
                            <div class="text-heading-color fw-bold mb-3" style="font-size:12px;">LMS Dashboard Overview</div>
                            <div class="d-flex gap-2 mb-3">
                                <div class="lms-stat-mini">
                                    <div class="num">2,540</div>
                                    <div class="lbl">Students</div>
                                </div>
                                <div class="lms-stat-mini">
                                    <div class="num">128</div>
                                    <div class="lbl">Courses</div>
                                </div>
                                <div class="lms-stat-mini">
                                    <div class="num">94%</div>
                                    <div class="lbl">Completion</div>
                                </div>
                                <div class="lms-stat-mini">
                                    <div class="num">340</div>
                                    <div class="lbl">Certs</div>
                                </div>
                            </div>
                            <div class="text-heading-color fw-semibold mb-2" style="font-size:11px;">Recent Enrollments</div>
                            <div class="lms-table-row">
                                <div class="av">RS</div>
                                <span style="flex:1;">Rahul Sharma — Web Development</span>
                                <span style="color:hsl(var(--main));font-weight:600;">Active</span>
                            </div>
                            <div class="lms-table-row">
                                <div class="av">AP</div>
                                <span style="flex:1;">Anjali Patel — Data Science</span>
                                <span style="color:hsl(var(--main));font-weight:600;">Active</span>
                            </div>
                            <div class="lms-table-row">
                                <div class="av">MK</div>
                                <span style="flex:1;">Mohammed Khan — UI/UX Design</span>
                                <span style="color:#f59e0b;font-weight:600;">Pending</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meta Cards -->
        <div class="row gy-4 mt-5">
            @foreach([
                ['ph-atom','Frontend','React 18 + Vite'],
                ['ph-node','Backend','Node.js + Express'],
                ['ph-git-branch','Architecture','Monorepo (npm workspaces)'],
                ['ph-clock','Duration','Ongoing'],
                ['ph-globe','Region','Global'],
            ] as $m)
            <div class="col-6 col-md-4 col-lg">
                <div class="d-flex flex-column align-items-center text-center p-4 bg-white border border-neutral-200 rounded-3 h-100 shadow-sm">
                    <span class="d-flex align-items-center justify-content-center rounded-circle bg-main-50 text-main mb-3"
                          style="width:52px;height:52px;font-size:1.4rem;"><i class="ph {{ $m[0] }}"></i></span>
                    <span class="text-body fw-medium d-block mb-1" style="font-size:0.82rem;">{{ $m[1] }}</span>
                    <span class="fw-bold text-heading-color">{{ $m[2] }}</span>
                </div>
            </div>
            @endforeach
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
                    <strong>LMS Platform</strong> is a full-stack Learning Management System built as a <strong>monorepo</strong> with a React 18 + Vite frontend and a Node.js + Express REST API backend. It empowers educators to create and deliver courses with video lessons, quizzes, assignments, and automated certificate generation — all as a blazing-fast SPA.
                </p>
                <p class="text-body lh-lg mb-5">
                    The monorepo structure (<code>packages/frontend</code>, <code>packages/backend</code>, <code>packages/shared</code>) shares TypeScript types and validators across both apps, eliminating duplication and keeping the entire platform in sync.
                </p>
                <div class="d-flex align-items-center gap-4 flex-wrap">
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">30+</div>
                        <div class="text-body" style="font-size:0.82rem;">Features</div>
                    </div>
                    <div style="width:1px;height:40px;background:#e5e7eb;"></div>
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">3</div>
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
                <!-- User Role Cards -->
                <div class="row gy-3 gx-3">
                    @foreach([
                        ['ph-shield-star','Admin','Full platform control, user &amp; course management'],
                        ['ph-chalkboard-teacher','Instructor','Create courses, upload lessons &amp; grade assignments'],
                        ['ph-student','Student','Enroll, learn, take quizzes &amp; earn certificates'],
                        ['ph-buildings','Institution','Multi-branch course &amp; enrollment management'],
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
                <p class="text-body lh-lg mb-4">The institution faced fragmented tools and no unified digital learning environment:</p>
                <div class="rounded-3 p-5 d-flex flex-column align-items-center justify-content-center text-center"
                     style="background:linear-gradient(135deg,#e0f5f5,#f0fafa);min-height:260px;">
                    <i class="ph ph-warning-circle text-main" style="font-size:4rem;"></i>
                    <div class="fw-bold text-heading-color mt-3 mb-1">No Centralized Learning Platform</div>
                    <div class="text-body" style="font-size:0.88rem;max-width:220px;">Scattered tools causing poor engagement and zero progress visibility</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="d-flex flex-column gap-3 mt-lg-5 pt-lg-3">
                    @foreach([
                        ['01','No centralized platform to host and deliver online courses'],
                        ['02','Instructors had no way to track student progress or engagement'],
                        ['03','Manual quiz and assignment grading was slow and inconsistent'],
                        ['04','No automated certificate issuance upon course completion'],
                        ['05','Students lacked a self-service portal for lessons and materials'],
                        ['06','No payment gateway integration for paid course enrollment'],
                        ['07','Separate frontend/backend repos causing duplicated types and inconsistent API contracts'],
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
                <span class="section-label">What We Built</span>
                <h2 class="fw-bold mb-3">Our Role &amp; <span class="text-main">Responsibilities</span></h2>
                <p class="text-body mb-4">We architected and built the full monorepo from scratch — React frontend, Node.js API, and shared package — through to deployment.</p>
                <div class="d-flex flex-column gap-3">
                    @foreach([
                        ['ph-atom','React 18 SPA with Vite — component-driven course &amp; lesson UI'],
                        ['ph-node','Node.js + Express REST API with JWT authentication'],
                        ['ph-git-branch','Monorepo setup with npm workspaces &amp; shared TypeScript types'],
                        ['ph-lock-key','Role-based auth guards (Admin, Instructor, Student)'],
                        ['ph-video','Video lesson upload, HLS streaming &amp; watch-progress tracking'],
                        ['ph-exam','Quiz builder with auto-grading via React state &amp; Node.js API'],
                        ['ph-certificate','PDF certificate generation via Node.js Puppeteer on completion'],
                        ['ph-currency-circle-dollar','Stripe/Razorpay payment integration for paid enrollments'],
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
                        ['ph-clipboard-text','Phase 1: Requirement Analysis','Mapped course workflows, user roles, and API contract definitions'],
                        ['ph-git-branch','Phase 2: Monorepo Setup','Bootstrapped npm workspaces, shared TS config, ESLint &amp; Prettier'],
                        ['ph-atom','Phase 3: React Frontend','Built all course pages &amp; components with Vite HMR &amp; React Query'],
                        ['ph-node','Phase 4: Node.js API','Designed RESTful API with Express, JWT auth &amp; MySQL via Prisma'],
                        ['ph-rocket-launch','Phase 5: Deployment &amp; Live','Docker-based deployment, CI/CD pipeline, SSL — launched v1.0'],
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
                <p class="text-body mb-5">A full-stack monorepo LMS — React SPA on the frontend, Node.js REST API on the backend, and a shared package for types and business logic.</p>
                <div class="row gy-3 gx-3">
                    @foreach([
                        ['ph-atom','React SPA','30+ pages built with React 18, React Router v6, and Tailwind CSS.'],
                        ['ph-node','Node.js REST API','Express API with JWT auth, role middleware &amp; Prisma ORM.'],
                        ['ph-git-branch','Shared Package','Common TypeScript types, Zod validators &amp; utility functions.'],
                        ['ph-lightning','Vite Build','Sub-second HMR in dev, optimised bundles with lazy-loaded routes.'],
                        ['ph-certificate','Certificate Engine','Puppeteer-based PDF certificates on course completion.'],
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
                            <span class="fw-bold" style="font-size:1.3rem;color:#61dafb;">30+</span>
                        </div>
                        <span class="text-white fw-semibold" style="font-size:1.1rem;">LMS Features</span>
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
                            ['Payments','Stripe / Razorpay','#635bff'],
                            ['PDF','Node.js Puppeteer','#fff'],
                        ] as $tech)
                        <li class="d-flex align-items-center gap-2">
                            <i class="ph ph-caret-right flex-shrink-0" style="color:{{ $tech[2] }};"></i>
                            <span style="color:rgba(255,255,255,0.9);"><strong style="color:{{ $tech[2] }};">{{ $tech[0] }}:</strong> {{ $tech[1] }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="mt-5">
                        <a href="{{ url('/contact') }}"
                           class="btn fw-semibold px-4 py-3 rounded-pill d-inline-flex align-items-center gap-2"
                           style="background:hsl(var(--main));color:#fff;">
                            <i class="ph ph-paper-plane-tilt"></i> Request a Demo
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
            <h2 class="fw-bold">LMS in <span class="text-main">Action</span></h2>
            <p class="text-body mt-2 mx-auto" style="max-width:540px;">Every React page backed by a dedicated Node.js API route — from enrollment to certification.</p>
        </div>
        <div class="row gy-4 gx-4">
            @foreach([
                ['ph-books','Course Builder','Structured course creation with sections, lessons, and downloadable resources.'],
                ['ph-video','Video Lessons','Upload &amp; stream HLS video with chapter-based progress tracking in React.'],
                ['ph-exam','Quiz Builder','MCQ, true/false &amp; descriptive quizzes with Node.js auto-grading.'],
                ['ph-student','Student Portal','React SPA self-service portal for enrollments, lessons, and certificates.'],
                ['ph-chalkboard-teacher','Instructor Dashboard','Manage courses, view real-time student progress via React Query.'],
                ['ph-certificate','Certificate Generator','Puppeteer-based PDF certificates auto-issued on course completion.'],
                ['ph-currency-circle-dollar','Payment Gateway','Free and paid courses with Stripe/Razorpay via Node.js webhooks.'],
                ['ph-bell-ringing','Notification System','Email/SMS alerts triggered from Node.js event emitters.'],
                ['ph-chart-bar','Analytics &amp; Reports','Admin dashboard with Chart.js enrollment trends &amp; revenue stats.'],
            ] as $mod)
            <div class="col-sm-6 col-lg-4">
                <div class="module-card">
                    <div class="module-icon"><i class="ph {{ $mod[0] }}"></i></div>
                    <div class="fw-semibold text-heading-color mb-2" style="font-size:0.95rem;">{!! $mod[1] !!}</div>
                    <div class="text-body" style="font-size:0.83rem;">{!! $mod[2] !!}</div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="{{ url('/contact') }}"
               class="btn btn-main px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2">
                <i class="ph ph-monitor"></i> Request a Live Demo
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
            <p class="text-body mt-2 mx-auto" style="max-width:540px;">Measurable improvements in learning outcomes and operational efficiency after LMS implementation.</p>
        </div>
        <div class="row gy-4 justify-content-center">
            @foreach([
                ['2,500+','Learners enrolled across all courses','ph-student'],
                ['94%','Average course completion rate','ph-check-circle'],
                ['3x','Faster load time with Vite-optimised bundles','ph-lightning'],
                ['30+','Features covering the full learning lifecycle','ph-books'],
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
                        ['ph-rocket-launch','Proves real-world monorepo scalability for LMS &amp; EdTech platforms'],
                        ['ph-atom','Demonstrates full-stack React + Node.js expertise with Vite'],
                        ['ph-git-branch','Shows ability to architect and maintain complex monorepo codebases'],
                        ['ph-handshake','Builds trust for global education &amp; corporate training clients'],
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
                    <div class="fw-bold text-heading-color mb-4">Platform Highlights</div>
                    @foreach([
                        ['Learners Enrolled','2,500+',85],
                        ['Course Completion Rate','94%',94],
                        ['Certificates Issued','340+',70],
                        ['Active Features','30+',100],
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
                    <a href="{{ url('/contact') }}"
                       class="btn btn-main w-100 py-3 rounded-pill fw-semibold d-flex align-items-center justify-content-center gap-2 mt-3">
                        <i class="ph ph-paper-plane-tilt"></i> Request a Demo
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================== CTA ======================== -->
<section class="py-120 cta-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="d-inline-flex align-items-center gap-2 px-4 py-2 rounded-pill mb-4"
                      style="background:rgba(255,255,255,0.15);">
                    <i class="ph ph-lightning text-white"></i>
                    <span class="text-white fw-semibold" style="font-size:0.88rem;">Ready to Build Your Custom LMS?</span>
                </span>
                <h2 class="text-white fw-bold mb-4" style="font-size:clamp(1.6rem,3vw,2.5rem);">
                    Ready to transform <span style="color:rgba(255,255,255,0.75);">your learning experience?</span>
                </h2>
                <p class="mb-5" style="color:rgba(255,255,255,0.8);font-size:1.05rem;">
                    Talk to our experts and get a tailored React + Node.js LMS for your institution or corporate training program.
                </p>
                <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap mb-5">
                    <a href="{{ url('/contact') }}"
                       class="btn btn-lg px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2"
                       style="background:#fff;color:hsl(var(--main));">
                        <i class="ph ph-paper-plane-tilt"></i> Request a Quote
                    </a>
                    <a href="{{ url('/contact') }}"
                       class="btn btn-lg px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2"
                       style="border:2px solid rgba(255,255,255,0.6);color:#fff;background:transparent;">
                        <i class="ph ph-chat-circle-dots"></i> Schedule a Demo
                    </a>
                </div>
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    @foreach(['React 18','Node.js','Vite','Monorepo','TypeScript','Express API','Prisma ORM','React Query','Tailwind CSS','JWT Auth','Stripe Payments','Docker','CI/CD Pipeline'] as $tag)
                    <span class="badge px-3 py-2 rounded-pill" style="background:rgba(255,255,255,0.15);color:#fff;font-size:0.78rem;">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- footer area -->
        @include('frontend.includes.footers.footerOne')
        <!-- footer area end -->
    </div>
@endsection
