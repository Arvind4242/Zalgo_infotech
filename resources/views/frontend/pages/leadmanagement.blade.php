@extends('frontend.layouts.app')

@section('title', 'Lead Management System - Case Study | React + Vite + Node.js CRM Platform')

@section('content')

<!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">

<style>
.lead-hero-mockup { background: #1a2332; border-radius: 16px; overflow: hidden; box-shadow: 0 24px 60px rgba(0,0,0,0.18); }
.lead-mockup-bar { background: #0f1825; padding: 10px 16px; display: flex; align-items: center; gap: 8px; }
.lead-mockup-dot { width: 10px; height: 10px; border-radius: 50%; display: inline-block; }
.lead-mockup-url { background: #1e2d40; color: #8aafc4; font-size: 11px; padding: 3px 14px; border-radius: 20px; flex: 1; margin-left: 8px; }
.lead-mockup-body { padding: 0; }
.lead-sidebar { background: #0f1825; width: 56px; min-height: 220px; display: flex; flex-direction: column; align-items: center; gap: 18px; padding: 18px 0; }
.lead-sidebar-icon { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #8aafc4; }
.lead-sidebar-icon.active { background: hsl(var(--main)); color: #fff; }
.lead-main-content { background: #f5f9ff; flex: 1; padding: 14px; }
.lead-stat-mini { background: #fff; border-radius: 8px; padding: 10px 14px; flex: 1; min-width: 0; }
.lead-stat-mini .num { font-size: 1.1rem; font-weight: 700; color: hsl(var(--main)); }
.lead-stat-mini .lbl { font-size: 10px; color: #888; }
.lead-table-row { background: #fff; border-radius: 6px; padding: 8px 12px; margin-bottom: 6px; display: flex; align-items: center; gap: 10px; font-size: 11px; }
.lead-table-row .av { width: 24px; height: 24px; border-radius: 50%; background: hsl(var(--main-h),var(--main-s),85%); display: flex; align-items: center; justify-content: center; color: hsl(var(--main)); font-size: 10px; font-weight: 700; }
.lead-status { font-size: 10px; font-weight: 700; padding: 2px 8px; border-radius: 20px; }
.lead-status.new { background: #dbeafe; color: #1d4ed8; }
.lead-status.contacted { background: #fef9c3; color: #a16207; }
.lead-status.qualified { background: #dcfce7; color: #15803d; }
.lead-status.closed { background: #d1fae5; color: hsl(var(--main)); }
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
.pipeline-stage { background: #fff; border: 2px solid #e5e7eb; border-radius: 10px; padding: 10px 14px; text-align: center; flex: 1; min-width: 0; position: relative; }
.pipeline-stage.active { border-color: hsl(var(--main)); background: hsl(var(--main-h),var(--main-s),97%); }
.pipeline-stage .stage-count { font-size: 1.2rem; font-weight: 800; color: hsl(var(--main)); }
.pipeline-stage .stage-label { font-size: 9px; color: #888; text-transform: uppercase; letter-spacing: 0.5px; }
.pipeline-arrow { color: #cbd5e1; font-size: 14px; display: flex; align-items: center; }
</style>


<!-- ======================== HERO SECTION ======================== -->
<section style="background: linear-gradient(135deg, #f0fafa 0%, #e0f5f5 60%, #fff 100%); padding: 80px 0 60px;" class="overflow-hidden">
    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- Left: Text -->
            <div class="col-lg-6">
                <div class="d-flex align-items-center gap-2 flex-wrap mb-4">
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">React 18</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Vite</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Node.js</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Lead CRM</span>
                </div>
                <h1 class="fw-bold lh-sm mb-3" style="font-size: clamp(1.8rem, 4vw, 3rem);">
                    Building a Smart
                    <span class="text-main">Lead Management</span>
                    System from Scratch
                </h1>
                <p class="text-body mb-2" style="font-size: 1.05rem;">
                    React + Vite &nbsp;|&nbsp; Node.js &nbsp;|&nbsp; Follow-up Automation &nbsp;|&nbsp; Payment Handling
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

            <!-- Right: Lead Dashboard Mockup -->
            <div class="col-lg-6">
                <div class="lead-hero-mockup">
                    <div class="lead-mockup-bar">
                        <span class="lead-mockup-dot" style="background:#ff5f57;"></span>
                        <span class="lead-mockup-dot" style="background:#ffbd2e;"></span>
                        <span class="lead-mockup-dot" style="background:#28c840;"></span>
                        <span class="lead-mockup-url">leads.example.com/dashboard</span>
                    </div>
                    <div class="lead-mockup-body d-flex">
                        <!-- Sidebar -->
                        <div class="lead-sidebar">
                            <div class="lead-sidebar-icon active"><i class="ph ph-squares-four"></i></div>
                            <div class="lead-sidebar-icon"><i class="ph ph-funnel"></i></div>
                            <div class="lead-sidebar-icon"><i class="ph ph-users"></i></div>
                            <div class="lead-sidebar-icon"><i class="ph ph-currency-circle-dollar"></i></div>
                            <div class="lead-sidebar-icon"><i class="ph ph-bell-ringing"></i></div>
                            <div class="lead-sidebar-icon"><i class="ph ph-clock-clockwise"></i></div>
                            <div class="lead-sidebar-icon"><i class="ph ph-chart-bar"></i></div>
                        </div>
                        <!-- Content -->
                        <div class="lead-main-content">
                            <div class="text-heading-color fw-bold mb-2" style="font-size:12px;">Lead Pipeline Overview</div>
                            <!-- Pipeline stages -->
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <div class="pipeline-stage active">
                                    <div class="stage-count">24</div>
                                    <div class="stage-label">New</div>
                                </div>
                                <div class="pipeline-arrow"><i class="ph ph-caret-right"></i></div>
                                <div class="pipeline-stage">
                                    <div class="stage-count">18</div>
                                    <div class="stage-label">Contacted</div>
                                </div>
                                <div class="pipeline-arrow"><i class="ph ph-caret-right"></i></div>
                                <div class="pipeline-stage">
                                    <div class="stage-count">11</div>
                                    <div class="stage-label">Qualified</div>
                                </div>
                                <div class="pipeline-arrow"><i class="ph ph-caret-right"></i></div>
                                <div class="pipeline-stage">
                                    <div class="stage-count">7</div>
                                    <div class="stage-label">Closed</div>
                                </div>
                            </div>
                            <div class="text-heading-color fw-semibold mb-2" style="font-size:11px;">Recent Leads</div>
                            <div class="lead-table-row">
                                <div class="av">RS</div>
                                <span style="flex:1;">Rahul Sharma — ₹45,000</span>
                                <span class="lead-status qualified">Qualified</span>
                            </div>
                            <div class="lead-table-row">
                                <div class="av">AP</div>
                                <span style="flex:1;">Anjali Patel — ₹1,20,000</span>
                                <span class="lead-status new">New</span>
                            </div>
                            <div class="lead-table-row">
                                <div class="av">MK</div>
                                <span style="flex:1;">Mohammed Khan — ₹80,000</span>
                                <span class="lead-status closed">Closed</span>
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
                ['ph-funnel','Project Type','Lead CRM / SaaS'],
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
                    <strong>Lead Management System</strong> is a full-stack CRM platform built with a React 18 + Vite frontend and a Node.js + Express REST API backend. It enables sales teams to capture leads, track pipeline stages, manage payments, automate follow-ups, and send real-time notifications — all from a single fast SPA.
                </p>
                <p class="text-body lh-lg mb-5">
                    Built as a monorepo with <code>packages/frontend</code>, <code>packages/backend</code>, and <code>packages/shared</code>, the system shares TypeScript types and Zod validators across both apps, keeping the lead data contracts consistent end-to-end.
                </p>
                <div class="d-flex align-items-center gap-4 flex-wrap">
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">5</div>
                        <div class="text-body" style="font-size:0.82rem;">Pipeline Stages</div>
                    </div>
                    <div style="width:1px;height:40px;background:#e5e7eb;"></div>
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">3</div>
                        <div class="text-body" style="font-size:0.82rem;">User Roles</div>
                    </div>
                    <div style="width:1px;height:40px;background:#e5e7eb;"></div>
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">Auto</div>
                        <div class="text-body" style="font-size:0.82rem;">Follow-up Engine</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Pipeline stages visual -->
                <div class="bg-white rounded-3 border border-neutral-200 p-4 mb-3">
                    <div class="fw-bold text-heading-color mb-3" style="font-size:0.88rem;">Lead Pipeline Stages</div>
                    @foreach([
                        ['New','Lead just captured — awaiting first contact','#dbeafe','#1d4ed8','ph-plus-circle'],
                        ['Contacted','First touchpoint made — call or email sent','#fef9c3','#a16207','ph-phone'],
                        ['Qualified','Needs confirmed — proposal stage','#f3e8ff','#7c3aed','ph-check-circle'],
                        ['Negotiation','Pricing discussed — awaiting decision','#fff7ed','#c2410c','ph-handshake'],
                        ['Closed / Won','Payment received — deal complete','#dcfce7','#15803d','ph-seal-check'],
                    ] as $stage)
                    <div class="d-flex align-items-center gap-3 mb-2 p-2 rounded-2" style="background:{{ $stage[2] }};">
                        <i class="ph {{ $stage[4] }}" style="color:{{ $stage[3] }};font-size:1.1rem;"></i>
                        <div>
                            <span class="fw-semibold" style="color:{{ $stage[3] }};font-size:0.82rem;">{{ $stage[0] }}</span>
                            <span class="text-body ms-2" style="font-size:0.75rem;">{{ $stage[1] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Role Cards -->
                <div class="row gy-2 gx-2">
                    @foreach([
                        ['ph-shield-star','Admin','Full CRM control &amp; team management'],
                        ['ph-user-circle-gear','Sales Manager','Assign leads, set targets &amp; view reports'],
                        ['ph-user','Sales Agent','Handle leads, update status &amp; log follow-ups'],
                    ] as $r)
                    <div class="col-4">
                        <div class="role-card flex-column text-center p-3">
                            <div class="role-icon mx-auto mb-2"><i class="ph {{ $r[0] }}"></i></div>
                            <div class="fw-bold text-heading-color" style="font-size:0.78rem;">{{ $r[1] }}</div>
                            <div class="text-body" style="font-size:0.7rem;">{!! $r[2] !!}</div>
                        </div>
                    </div>
                    @endforeach
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
                <p class="text-body lh-lg mb-4">The sales team had no centralized system to manage leads, track follow-ups, or collect payments:</p>
                <div class="rounded-3 p-5 d-flex flex-column align-items-center justify-content-center text-center"
                     style="background:linear-gradient(135deg,#e0f5f5,#f0fafa);min-height:260px;">
                    <i class="ph ph-warning-circle text-main" style="font-size:4rem;"></i>
                    <div class="fw-bold text-heading-color mt-3 mb-1">Leads Falling Through the Cracks</div>
                    <div class="text-body" style="font-size:0.88rem;max-width:220px;">No visibility into pipeline stage, missed follow-ups, and lost revenue</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="d-flex flex-column gap-3 mt-lg-5 pt-lg-3">
                    @foreach([
                        ['01','No centralized place to capture and track incoming leads'],
                        ['02','Lead status was managed in spreadsheets — prone to errors and stale data'],
                        ['03','No follow-up reminders — agents missed callbacks and email sequences'],
                        ['04','Payment collection was handled outside the system with no audit trail'],
                        ['05','No automated notifications when a lead moved to a new stage'],
                        ['06','Managers had no real-time visibility into team performance or pipeline health'],
                        ['07','Separate tools for CRM, payments, and email meant duplicated data entry'],
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
                <p class="text-body mb-4">We designed and developed the full system end-to-end — React SPA, Node.js API, automation engine, payment integration, and notification pipeline.</p>
                <div class="d-flex flex-column gap-3">
                    @foreach([
                        ['ph-atom','React 18 + Vite SPA — Kanban-style lead pipeline board'],
                        ['ph-node','Node.js + Express REST API with JWT role-based auth'],
                        ['ph-funnel','Lead capture, assignment, and status change workflows'],
                        ['ph-clock-clockwise','Follow-up automation engine — scheduled Node.js cron jobs'],
                        ['ph-currency-circle-dollar','Payment handling with Stripe/Razorpay &amp; invoice generation'],
                        ['ph-bell-ringing','Real-time notifications via Node.js WebSocket (Socket.io)'],
                        ['ph-envelope','Automated email sequences triggered on status changes'],
                        ['ph-chart-bar','Sales analytics dashboard with React Query + Chart.js'],
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
                        ['ph-clipboard-text','Phase 1: Requirement Analysis','Mapped sales workflows, pipeline stages, and notification triggers'],
                        ['ph-git-branch','Phase 2: Monorepo Setup','npm workspaces, shared TS types, ESLint &amp; Prettier across packages'],
                        ['ph-atom','Phase 3: React Frontend','Kanban board, lead forms, payment UI — built with Vite + React Query'],
                        ['ph-node','Phase 4: Node.js API + Automation','REST API, follow-up cron engine, Socket.io &amp; payment webhooks'],
                        ['ph-rocket-launch','Phase 5: Deployment &amp; Live','Docker, CI/CD pipeline, SSL — production ready'],
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
                <p class="text-body mb-5">A complete Lead Management CRM — React Kanban board on the frontend, Node.js API + automation engine on the backend, and a shared types package in the middle.</p>
                <div class="row gy-3 gx-3">
                    @foreach([
                        ['ph-funnel','Lead Pipeline Board','Drag-and-drop Kanban board to move leads across 5 status stages.'],
                        ['ph-clock-clockwise','Follow-up Automation','Node.js cron jobs auto-schedule calls, emails &amp; reminders per stage.'],
                        ['ph-currency-circle-dollar','Payment Handling','Stripe/Razorpay payments with invoice generation &amp; payment status tracking.'],
                        ['ph-bell-ringing','Real-time Notifications','Socket.io push alerts for stage changes, new leads &amp; payment events.'],
                        ['ph-envelope','Email Sequences','Automated Nodemailer email drips triggered on status transitions.'],
                        ['ph-chart-bar','Analytics Dashboard','Conversion funnel, revenue pipeline &amp; team performance with Chart.js.'],
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
                            <span class="fw-bold" style="font-size:1.1rem;color:#61dafb;">Full<br>Stack</span>
                        </div>
                        <span class="text-white fw-semibold" style="font-size:1.1rem;">Lead CRM Platform</span>
                    </div>
                    <h3 class="text-white fw-bold mb-4">Technology Stack</h3>
                    <ul class="d-flex flex-column gap-3 list-unstyled">
                        @foreach([
                            ['Frontend','React 18 + Vite','#61dafb'],
                            ['Backend','Node.js + Express','#68a063'],
                            ['Database','MySQL via Prisma ORM','#fff'],
                            ['Auth','JWT + Role Middleware','#fff'],
                            ['Realtime','Socket.io (WebSocket)','#25c2a0'],
                            ['Automation','Node-cron (follow-up jobs)','#f0db4f'],
                            ['Email','Nodemailer + SMTP','#fff'],
                            ['Payments','Stripe / Razorpay','#635bff'],
                            ['Styling','Tailwind CSS + shadcn/ui','#38bdf8'],
                            ['Repo','Monorepo (npm workspaces)','#f0db4f'],
                        ] as $tech)
                        <li class="d-flex align-items-center gap-2">
                            <i class="ph ph-caret-right flex-shrink-0" style="color:{{ $tech[2] }};"></i>
                            <span style="color:rgba(255,255,255,0.9);font-size:0.88rem;"><strong style="color:{{ $tech[2] }};">{{ $tech[0] }}:</strong> {{ $tech[1] }}</span>
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


<!-- ======================== KEY FEATURES ======================== -->
<section class="py-120 bg-neutral-50">
    <div class="container">
        <div class="text-center mb-60">
            <span class="section-label d-block">Core Features</span>
            <h2 class="fw-bold">Lead System in <span class="text-main">Action</span></h2>
            <p class="text-body mt-2 mx-auto" style="max-width:540px;">Every feature built around the sales workflow — from first capture to closed deal and payment collection.</p>
        </div>
        <div class="row gy-4 gx-4">
            @foreach([
                ['ph-funnel','Lead Capture &amp; Assignment','Capture leads via forms or API import, auto-assign to agents by round-robin or manual rule.'],
                ['ph-arrows-left-right','Status Management','Drag-and-drop Kanban board to move leads across New → Contacted → Qualified → Negotiation → Closed.'],
                ['ph-clock-clockwise','Follow-up Automation','Node-cron jobs auto-schedule follow-up reminders, callbacks, and escalations per pipeline stage.'],
                ['ph-currency-circle-dollar','Payment Handling','Collect payments via Stripe/Razorpay links, track partial &amp; full payments, generate invoices.'],
                ['ph-bell-ringing','Real-time Notifications','Socket.io pushes instant alerts to agents and managers on lead changes, payments, and deadlines.'],
                ['ph-envelope','Email Drip Sequences','Nodemailer sends automated email sequences triggered by lead stage transitions.'],
                ['ph-device-mobile','SMS Alerts','Twilio-powered SMS sent to leads and agents at key pipeline milestones.'],
                ['ph-chart-line','Conversion Analytics','React + Chart.js funnel charts, win/loss rates, revenue pipeline, and agent leaderboards.'],
                ['ph-note','Activity Log','Full audit trail of every status change, note, call log, and payment event per lead.'],
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


<!-- ======================== AUTOMATION DEEP DIVE ======================== -->
<section class="py-120 bg-white">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-5">
                <span class="section-label">Follow-up Engine</span>
                <h2 class="fw-bold mb-4">Automation &amp; <span class="text-main">Notifications</span></h2>
                <p class="text-body lh-lg mb-4">
                    The Node.js follow-up engine runs scheduled cron jobs that evaluate every lead's last-contact date and pipeline stage, then automatically triggers the next action — zero manual effort for the sales team.
                </p>
                <p class="text-body lh-lg mb-5">
                    All notification channels (Socket.io, Email, SMS) are unified through a single <code>NotificationService</code> in the shared package, so any Node.js event can push to all channels at once.
                </p>
                <div class="d-flex flex-column gap-3">
                    @foreach([
                        ['ph-clock-clockwise','Node-cron runs every 15 mins to check overdue follow-ups'],
                        ['ph-envelope','Nodemailer sends stage-specific email templates automatically'],
                        ['ph-device-mobile','Twilio SMS fires at key deal milestones &amp; deadlines'],
                        ['ph-bell-ringing','Socket.io pushes real-time in-app alerts to dashboard'],
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
            <div class="col-lg-7">
                <!-- Automation flow card -->
                <div class="rounded-3 p-4" style="background:#0f1825;">
                    <div class="text-white fw-bold mb-4" style="font-size:0.88rem;letter-spacing:1px;">FOLLOW-UP AUTOMATION FLOW</div>
                    @foreach([
                        ['Lead Created','Agent assigned, welcome email sent via Nodemailer','#61dafb','ph-plus-circle'],
                        ['No contact in 24h','Node-cron fires → agent gets Socket.io alert + SMS reminder','#f0db4f','ph-clock'],
                        ['Status → Contacted','Email drip #1 sent to lead, CRM activity log updated','#68a063','ph-envelope'],
                        ['Status → Qualified','Payment link generated via Stripe &amp; sent to lead by email','#a78bfa','ph-currency-circle-dollar'],
                        ['Payment Received','Webhook triggers invoice PDF, lead marked Closed/Won','#34d399','ph-seal-check'],
                        ['Deal Lost','Automated re-engagement email scheduled for 30 days later','#f87171','ph-arrow-counter-clockwise'],
                    ] as $flow)
                    <div class="d-flex align-items-start gap-3 mb-4">
                        <span class="d-flex align-items-center justify-content-center rounded-circle flex-shrink-0"
                              style="width:32px;height:32px;min-width:32px;background:rgba(255,255,255,0.08);">
                            <i class="ph {{ $flow[3] }}" style="color:{{ $flow[2] }};font-size:14px;"></i>
                        </span>
                        <div>
                            <div class="fw-semibold" style="color:{{ $flow[2] }};font-size:0.82rem;">{{ $flow[0] }}</div>
                            <div style="color:#8aafc4;font-size:0.78rem;">{!! $flow[1] !!}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================== RESULTS ======================== -->
<section class="py-120 bg-neutral-50">
    <div class="container">
        <div class="text-center mb-60">
            <span class="section-label d-block">Outcomes</span>
            <h2 class="fw-bold">Results &amp; <span class="text-main">Impact</span></h2>
            <p class="text-body mt-2 mx-auto" style="max-width:540px;">Measurable improvements across the sales team after Lead Management System implementation.</p>
        </div>
        <div class="row gy-4 justify-content-center">
            @foreach([
                ['40%','Increase in lead conversion rate','ph-trend-up'],
                ['0','Missed follow-ups with automation engine','ph-clock-clockwise'],
                ['3x','Faster pipeline visibility for managers','ph-lightning'],
                ['100%','Payments tracked with full audit trail','ph-currency-circle-dollar'],
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
<section class="py-120 bg-white">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6">
                <span class="section-label">The Takeaway</span>
                <h2 class="fw-bold mb-5">Why This <span class="text-main">Case Study</span> Matters</h2>
                <div class="row gy-4">
                    @foreach([
                        ['ph-rocket-launch','Proves real-world CRM scalability with React + Node.js stack'],
                        ['ph-clock-clockwise','Demonstrates expertise in building backend automation engines'],
                        ['ph-currency-circle-dollar','Shows end-to-end payment integration inside a CRM system'],
                        ['ph-handshake','Builds trust for sales-heavy businesses needing a custom CRM'],
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
                        ['Lead Conversion Rate','40%↑',70],
                        ['Follow-up Automation','100%',100],
                        ['Payment Tracking','100%',100],
                        ['Pipeline Visibility','Real-time',90],
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
                    <span class="text-white fw-semibold" style="font-size:0.88rem;">Ready to Build Your Custom Lead CRM?</span>
                </span>
                <h2 class="text-white fw-bold mb-4" style="font-size:clamp(1.6rem,3vw,2.5rem);">
                    Ready to automate <span style="color:rgba(255,255,255,0.75);">your sales pipeline?</span>
                </h2>
                <p class="mb-5" style="color:rgba(255,255,255,0.8);font-size:1.05rem;">
                    Talk to our experts and get a tailored Lead Management System with follow-up automation, payment handling, and real-time notifications.
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
                    @foreach(['React 18','Vite','Node.js','TypeScript','Prisma ORM','Socket.io','Node-cron','Nodemailer','Twilio SMS','Stripe Payments','JWT Auth','Docker','CI/CD Pipeline'] as $tag)
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
