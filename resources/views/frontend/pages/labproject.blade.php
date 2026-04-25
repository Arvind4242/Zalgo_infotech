@extends('frontend.layouts.app')

@section('title', 'Lab Report Generation System - Case Study | Automated Lab Reports & Analytics Platform')

@section('content')

<!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">

<style>
.lab-hero-mockup { background: #1a2332; border-radius: 16px; overflow: hidden; box-shadow: 0 24px 60px rgba(0,0,0,0.18); }
.lab-mockup-bar { background: #0f1825; padding: 10px 16px; display: flex; align-items: center; gap: 8px; }
.lab-mockup-dot { width: 10px; height: 10px; border-radius: 50%; display: inline-block; }
.lab-mockup-url { background: #1e2d40; color: #8aafc4; font-size: 11px; padding: 3px 14px; border-radius: 20px; flex: 1; margin-left: 8px; }
.lab-mockup-body { padding: 0; }
.lab-sidebar { background: #0f1825; width: 56px; min-height: 220px; display: flex; flex-direction: column; align-items: center; gap: 18px; padding: 18px 0; }
.lab-sidebar-icon { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #8aafc4; }
.lab-sidebar-icon.active { background: hsl(var(--main)); color: #fff; }
.lab-main-content { background: #f5f9ff; flex: 1; padding: 14px; }
.lab-stat-mini { background: #fff; border-radius: 8px; padding: 10px 14px; flex: 1; min-width: 0; }
.lab-stat-mini .num { font-size: 1.1rem; font-weight: 700; color: hsl(var(--main)); }
.lab-stat-mini .lbl { font-size: 10px; color: #888; }
.lab-table-row { background: #fff; border-radius: 6px; padding: 8px 12px; margin-bottom: 6px; display: flex; align-items: center; gap: 10px; font-size: 11px; }
.lab-table-row .av { width: 24px; height: 24px; border-radius: 50%; background: hsl(var(--main-h),var(--main-s),85%); display: flex; align-items: center; justify-content: center; color: hsl(var(--main)); font-size: 10px; font-weight: 700; }
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
</style>


<!-- ======================== HERO SECTION ======================== -->
<section style="background: linear-gradient(135deg, #f0fafa 0%, #e0f5f5 60%, #fff 100%); padding: 80px 0 60px;" class="overflow-hidden">
    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- Left: Text -->
            <div class="col-lg-6">
                <div class="d-flex align-items-center gap-2 flex-wrap mb-4">
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Laravel</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Lab Management</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Report Generation</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">SaaS</span>
                </div>
                <h1 class="fw-bold lh-sm mb-3" style="font-size: clamp(1.8rem, 4vw, 3rem);">
                    Building a Smart
                    <span class="text-main">Lab Report Generation</span>
                    System from Scratch
                </h1>
                <p class="text-body mb-5" style="font-size: 1.05rem;">
                    Laravel &nbsp;|&nbsp; PDF Generation &nbsp;|&nbsp; Lab Analytics &nbsp;|&nbsp; SaaS Platform
                </p>
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

            <!-- Right: Lab Dashboard Mockup -->
            <div class="col-lg-6">
                <div class="lab-hero-mockup">
                    <div class="lab-mockup-bar">
                        <span class="lab-mockup-dot" style="background:#ff5f57;"></span>
                        <span class="lab-mockup-dot" style="background:#ffbd2e;"></span>
                        <span class="lab-mockup-dot" style="background:#28c840;"></span>
                        <span class="lab-mockup-url">lab-reports.example.com/dashboard</span>
                    </div>
                    <div class="lab-mockup-body d-flex">
                        <!-- Sidebar -->
                        <div class="lab-sidebar">
                            <div class="lab-sidebar-icon active"><i class="ph ph-squares-four"></i></div>
                            <div class="lab-sidebar-icon"><i class="ph ph-flask"></i></div>
                            <div class="lab-sidebar-icon"><i class="ph ph-file-text"></i></div>
                            <div class="lab-sidebar-icon"><i class="ph ph-users"></i></div>
                            <div class="lab-sidebar-icon"><i class="ph ph-chart-bar"></i></div>
                            <div class="lab-sidebar-icon"><i class="ph ph-printer"></i></div>
                            <div class="lab-sidebar-icon"><i class="ph ph-gear"></i></div>
                        </div>
                        <!-- Content -->
                        <div class="lab-main-content">
                            <div class="text-heading-color fw-bold mb-3" style="font-size:12px;">Lab Dashboard Overview</div>
                            <div class="d-flex gap-2 mb-3">
                                <div class="lab-stat-mini">
                                    <div class="num">320</div>
                                    <div class="lbl">Samples</div>
                                </div>
                                <div class="lab-stat-mini">
                                    <div class="num">148</div>
                                    <div class="lbl">Reports</div>
                                </div>
                                <div class="lab-stat-mini">
                                    <div class="num">98%</div>
                                    <div class="lbl">Accuracy</div>
                                </div>
                                <div class="lab-stat-mini">
                                    <div class="num">12</div>
                                    <div class="lbl">Pending</div>
                                </div>
                            </div>
                            <div class="text-heading-color fw-semibold mb-2" style="font-size:11px;">Recent Reports Generated</div>
                            <div class="lab-table-row">
                                <div class="av">BT</div>
                                <span style="flex:1;">Blood Test — Patient #1042</span>
                                <span style="color:hsl(var(--main));font-weight:600;">Ready</span>
                            </div>
                            <div class="lab-table-row">
                                <div class="av">UR</div>
                                <span style="flex:1;">Urine Analysis — Patient #1038</span>
                                <span style="color:hsl(var(--main));font-weight:600;">Ready</span>
                            </div>
                            <div class="lab-table-row">
                                <div class="av">CB</div>
                                <span style="flex:1;">CBC Report — Patient #1055</span>
                                <span style="color:#f59e0b;font-weight:600;">Processing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meta Cards -->
        <div class="row gy-4 mt-5">
            @foreach([
                ['ph-code','Platform','Laravel PHP'],
                ['ph-flask','Industry','Healthcare / Lab'],
                ['ph-stack','Project Type','SaaS / Lab System'],
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
                    <strong>Lab Report Generation System</strong> is a comprehensive laboratory management platform built on Laravel. It enables labs and healthcare facilities to automate sample tracking, test result entry, PDF report generation, and patient data management — all from a single, intuitive dashboard.
                </p>
                <p class="text-body lh-lg mb-5">
                    The project required a scalable, multi-role SaaS solution deployable for labs of varying sizes, with role-based access for admins, lab technicians, doctors, and patients.
                </p>
                <div class="d-flex align-items-center gap-4 flex-wrap">
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">20+</div>
                        <div class="text-body" style="font-size:0.82rem;">Report Types</div>
                    </div>
                    <div style="width:1px;height:40px;background:#e5e7eb;"></div>
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">4</div>
                        <div class="text-body" style="font-size:0.82rem;">User Roles</div>
                    </div>
                    <div style="width:1px;height:40px;background:#e5e7eb;"></div>
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">v1.0</div>
                        <div class="text-body" style="font-size:0.82rem;">Current Version</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- 4 User Role Cards -->
                <div class="row gy-3 gx-3">
                    @foreach([
                        ['ph-shield-star','Admin','Full system control &amp; configuration'],
                        ['ph-flask','Lab Technician','Sample entry, test processing &amp; results'],
                        ['ph-stethoscope','Doctor','View reports &amp; patient records'],
                        ['ph-user','Patient','Access personal lab reports online'],
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
                <!-- System banner -->
                <div class="mt-4 rounded-3 p-4 d-flex align-items-center gap-4"
                     style="background:linear-gradient(135deg,hsl(var(--main)) 0%,hsl(184,100%,18%) 100%);">
                    <span class="d-flex align-items-center justify-content-center rounded-circle bg-white text-main"
                          style="width:52px;height:52px;min-width:52px;font-size:1.4rem;">
                        <i class="ph ph-flask"></i>
                    </span>
                    <div class="flex-grow-1">
                        <div class="text-white fw-bold">Lab Report System v1.0</div>
                        <div style="color:rgba(255,255,255,0.7);font-size:0.82rem;">Automated Lab Reporting Platform — Live &amp; Running</div>
                    </div>
                    <a href="{{ url('/contact') }}"
                       class="btn btn-sm bg-white text-main fw-semibold rounded-pill px-3 d-flex align-items-center gap-1 flex-shrink-0">
                        <i class="ph ph-chat-circle-dots"></i> Contact
                    </a>
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
                <p class="text-body lh-lg mb-4">The lab faced operational bottlenecks and lacked a unified digital reporting system:</p>
                <div class="rounded-3 p-5 d-flex flex-column align-items-center justify-content-center text-center"
                     style="background:linear-gradient(135deg,#e0f5f5,#f0fafa);min-height:260px;">
                    <i class="ph ph-warning-circle text-main" style="font-size:4rem;"></i>
                    <div class="fw-bold text-heading-color mt-3 mb-1">Manual & Error-Prone Processes</div>
                    <div class="text-body" style="font-size:0.88rem;max-width:220px;">Paper-based reports causing delays, errors, and data loss</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="d-flex flex-column gap-3 mt-lg-5 pt-lg-3">
                    @foreach([
                        ['01','Manual report creation was time-consuming and error-prone'],
                        ['02','No centralized system to track sample status and test progress'],
                        ['03','Patients had no digital access to their own lab reports'],
                        ['04','Difficulty generating formatted PDF reports with lab letterhead'],
                        ['05','Lack of test result history and trend analysis for patients'],
                        ['06','No role-based access control for doctors, technicians, and admins'],
                        ['07','Needed a single platform to digitize all lab operations end-to-end'],
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
                <p class="text-body mb-4">We developed the Lab Report System end-to-end, from architecture planning to deployment and ongoing support.</p>
                <div class="d-flex flex-column gap-3">
                    @foreach([
                        ['ph-code','Full-stack Laravel development (backend + frontend)'],
                        ['ph-lock-key','Role-based authentication (Admin, Technician, Doctor, Patient)'],
                        ['ph-flask','Sample registration, tracking, and test assignment'],
                        ['ph-file-pdf','Automated PDF report generation with custom templates'],
                        ['ph-chart-line','Patient result history, trend charts &amp; analytics'],
                        ['ph-bell-ringing','Email/SMS notifications when reports are ready'],
                        ['ph-printer','Print-ready formatted reports with lab branding'],
                        ['ph-cloud-arrow-up','Cloud deployment, server setup &amp; ongoing maintenance'],
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
                <!-- Development Timeline -->
                <div class="bg-white rounded-3 p-4 shadow-sm">
                    <div class="fw-bold text-heading-color mb-4" style="font-size:1rem;">Development Timeline</div>
                    @foreach([
                        ['ph-clipboard-text','Phase 1: Requirement Analysis','Mapped all lab workflows, test types, and reporting formats'],
                        ['ph-blueprint','Phase 2: Architecture &amp; DB Design','Designed multi-role schema with patient &amp; sample relationships'],
                        ['ph-hammer','Phase 3: Core Development','Built all modules with Laravel + Blade + Bootstrap + DomPDF'],
                        ['ph-device-mobile','Phase 4: UI/UX &amp; Testing','Responsive design, role testing, and QA across all user types'],
                        ['ph-rocket-launch','Phase 5: Deployment &amp; Live','Deployed to cloud VPS, configured SSL, launched v1.0'],
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
                <p class="text-body mb-5">We designed and deployed a complete Lab Report Generation System — scalable, secure, and ready for any diagnostic lab or healthcare facility.</p>
                <div class="row gy-3 gx-3">
                    @foreach([
                        ['ph-flask','Sample Management','Register, track, and manage lab samples from collection to result.'],
                        ['ph-lock','Multi-Role Security','Role-based access with Spatie Permissions &amp; Laravel Auth.'],
                        ['ph-file-pdf','PDF Report Generation','Auto-generate branded PDF reports with DomPDF on result entry.'],
                        ['ph-bell-ringing','Smart Notifications','Email/SMS to patients when their reports are ready.'],
                        ['ph-chart-line','Result Analytics','Trend charts and historical comparison for patient test data.'],
                        ['ph-chart-bar','Admin Dashboard','Live stats, pending samples, and activity reports for admins.'],
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
                     style="background:linear-gradient(135deg,hsl(var(--main)) 0%,hsl(184,100%,18%) 100%);">
                    <div class="d-flex align-items-center gap-3 mb-5">
                        <div class="bg-white rounded-circle d-flex align-items-center justify-content-center"
                             style="width:72px;height:72px;min-width:72px;">
                            <span class="fw-bold text-main" style="font-size:1.3rem;">20+</span>
                        </div>
                        <span class="text-white fw-semibold" style="font-size:1.1rem;">Report Types</span>
                    </div>
                    <h3 class="text-white fw-bold mb-4">Technology Stack</h3>
                    <ul class="d-flex flex-column gap-3 list-unstyled">
                        @foreach([
                            ['Framework','Laravel 10 (PHP 8.2)'],
                            ['Database','MySQL'],
                            ['Frontend','Blade, Bootstrap 5, jQuery'],
                            ['PDF Engine','DomPDF / Laravel PDF'],
                            ['Auth','Multi-Role — Spatie Permissions'],
                            ['Notifications','Email + SMS Gateway'],
                        ] as $tech)
                        <li class="d-flex align-items-center gap-2">
                            <i class="ph ph-caret-right text-white flex-shrink-0"></i>
                            <span class="text-white"><strong>{{ $tech[0] }}:</strong> {{ $tech[1] }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="mt-5">
                        <a href="{{ url('/contact') }}"
                           class="btn fw-semibold px-4 py-3 rounded-pill d-inline-flex align-items-center gap-2"
                           style="background:#fff;color:hsl(var(--main));">
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
            <h2 class="fw-bold">Lab System in <span class="text-main">Action</span></h2>
            <p class="text-body mt-2 mx-auto" style="max-width:540px;">Every module built to streamline a specific lab workflow — from sample registration to final report delivery.</p>
        </div>
        <div class="row gy-4 gx-4">
            @foreach([
                ['ph-flask','Sample Registration','Register patient samples with barcode/ID tracking and test assignment.'],
                ['ph-test-tube','Test Management','Define test parameters, reference ranges, and result entry templates.'],
                ['ph-file-pdf','Report Generation','Auto-generate formatted PDF reports instantly upon result submission.'],
                ['ph-user','Patient Portal','Patients can log in, view, and download their own lab reports online.'],
                ['ph-stethoscope','Doctor Access','Doctors can view assigned patient reports and add clinical notes.'],
                ['ph-chart-line','Result History','Longitudinal trend analysis and historical result comparison per patient.'],
                ['ph-bell-ringing','Notification System','Automated email/SMS alerts when reports are ready for pickup or viewing.'],
                ['ph-printer','Print Module','Print-ready report layouts with lab logo, letterhead, and signature fields.'],
                ['ph-chart-bar','Admin Analytics','Dashboard with daily reports count, pending samples, and lab throughput.'],
            ] as $mod)
            <div class="col-sm-6 col-lg-4">
                <div class="module-card">
                    <div class="module-icon"><i class="ph {{ $mod[0] }}"></i></div>
                    <div class="fw-semibold text-heading-color mb-2" style="font-size:0.95rem;">{{ $mod[1] }}</div>
                    <div class="text-body" style="font-size:0.83rem;">{{ $mod[2] }}</div>
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
            <p class="text-body mt-2 mx-auto" style="max-width:540px;">Measurable improvements across every lab operation after system implementation.</p>
        </div>
        <div class="row gy-4 justify-content-center">
            @foreach([
                ['90%','Reduction in manual report preparation time','ph-trend-down'],
                ['98%','Report accuracy with automated result validation','ph-check-circle'],
                ['100%','Automated PDF generation on result submission','ph-file-pdf'],
                ['20+','Report types covering all common lab tests','ph-flask'],
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
                        ['ph-rocket-launch','Proves real-world lab system scalability for clinics &amp; hospitals'],
                        ['ph-code-block','Demonstrates full-stack Laravel &amp; PDF generation expertise'],
                        ['ph-gear-six','Shows ability to manage complex multi-role healthcare systems'],
                        ['ph-handshake','Builds trust for healthcare &amp; diagnostic lab clients worldwide'],
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
                <!-- Stats visual card -->
                <div class="bg-white rounded-3 shadow p-5">
                    <div class="fw-bold text-heading-color mb-4">System Highlights</div>
                    @foreach([
                        ['Reports Generated','500+',85],
                        ['Report Accuracy','98%',98],
                        ['Processing Time Saved','90%',90],
                        ['Active Modules','20+',100],
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
                    <span class="text-white fw-semibold" style="font-size:0.88rem;">Ready to Build Your Custom Lab System?</span>
                </span>
                <h2 class="text-white fw-bold mb-4" style="font-size:clamp(1.6rem,3vw,2.5rem);">
                    Ready to automate <span style="color:rgba(255,255,255,0.75);">your lab reports?</span>
                </h2>
                <p class="mb-5" style="color:rgba(255,255,255,0.8);font-size:1.05rem;">
                    Talk to our experts and get a tailored Lab Report Generation System for your diagnostic lab or healthcare facility.
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
                    @foreach(['Laravel Development','Lab Report System','PDF Generation','Role-Based Access','Patient Portal','Sample Tracking','Result Analytics','Cloud Hosting','SMS Notifications','Custom Report Templates'] as $tag)
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
