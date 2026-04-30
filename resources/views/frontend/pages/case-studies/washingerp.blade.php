@extends('frontend.layouts.app')

@section('title', 'Washing ERP Case Study - Vehicle Washing Center SaaS | React + Vite + Node.js')

@section('content')

<!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">

<style>
.wash-hero-mockup { background: #1a2332; border-radius: 16px; overflow: hidden; box-shadow: 0 24px 60px rgba(0,0,0,0.18); }
.wash-mockup-bar { background: #0f1825; padding: 10px 16px; display: flex; align-items: center; gap: 8px; }
.wash-mockup-dot { width: 10px; height: 10px; border-radius: 50%; display: inline-block; }
.wash-mockup-url { background: #1e2d40; color: #8aafc4; font-size: 11px; padding: 3px 14px; border-radius: 20px; flex: 1; margin-left: 8px; }
.wash-mockup-body { padding: 0; }
.wash-sidebar { background: #0f1825; width: 56px; min-height: 220px; display: flex; flex-direction: column; align-items: center; gap: 18px; padding: 18px 0; }
.wash-sidebar-icon { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #8aafc4; }
.wash-sidebar-icon.active { background: hsl(var(--main)); color: #fff; }
.wash-main-content { background: #f5f9ff; flex: 1; padding: 12px; }
.wash-stat-mini { background: #fff; border-radius: 8px; padding: 8px 10px; flex: 1; min-width: 0; }
.wash-stat-mini .num { font-size: 1rem; font-weight: 700; color: hsl(var(--main)); }
.wash-stat-mini .lbl { font-size: 9px; color: #888; }
.slot-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 4px; }
.slot-box { border-radius: 5px; padding: 4px 3px; text-align: center; font-size: 9px; font-weight: 600; }
.slot-box.booked { background: #fee2e2; color: #b91c1c; }
.slot-box.available { background: #dcfce7; color: #15803d; }
.slot-box.selected { background: hsl(var(--main)); color: #fff; }
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
.plan-card { background: #fff; border: 2px solid #e5e7eb; border-radius: 16px; padding: 28px 22px; height: 100%; transition: border-color 0.2s, box-shadow 0.2s; }
.plan-card.popular { border-color: hsl(var(--main)); box-shadow: 0 8px 32px rgba(0,118,122,0.15); }
.plan-badge { background: hsl(var(--main)); color: #fff; font-size: 0.7rem; font-weight: 700; padding: 3px 10px; border-radius: 20px; }
.reward-bar { background: #e5e7eb; border-radius: 20px; height: 8px; overflow: hidden; }
.reward-fill { background: linear-gradient(90deg, hsl(var(--main)), hsl(184,100%,30%)); height: 100%; border-radius: 20px; }
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
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Vite</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Node.js</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">SaaS ERP</span>
                    <span class="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">Vehicle Washing</span>
                </div>
                <h1 class="fw-bold lh-sm mb-3" style="font-size: clamp(1.8rem, 4vw, 3rem);">
                    Building a Smart
                    <span class="text-main">Vehicle Washing Center</span>
                    ERP SaaS Platform
                </h1>
                <p class="text-body mb-2" style="font-size: 1.05rem;">
                    React + Vite &nbsp;|&nbsp; Node.js &nbsp;|&nbsp; Slot Booking &nbsp;|&nbsp; Rewards &nbsp;|&nbsp; Multi-tenant SaaS
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

            <!-- Right: Dashboard Mockup -->
            <div class="col-lg-6">
                <div class="wash-hero-mockup">
                    <div class="wash-mockup-bar">
                        <span class="wash-mockup-dot" style="background:#ff5f57;"></span>
                        <span class="wash-mockup-dot" style="background:#ffbd2e;"></span>
                        <span class="wash-mockup-dot" style="background:#28c840;"></span>
                        <span class="wash-mockup-url">washingcenter.example.com/dashboard</span>
                    </div>
                    <div class="wash-mockup-body d-flex">
                        <!-- Sidebar -->
                        <div class="wash-sidebar">
                            <div class="wash-sidebar-icon active"><i class="ph ph-squares-four"></i></div>
                            <div class="wash-sidebar-icon"><i class="ph ph-calendar"></i></div>
                            <div class="wash-sidebar-icon"><i class="ph ph-car"></i></div>
                            <div class="wash-sidebar-icon"><i class="ph ph-clock"></i></div>
                            <div class="wash-sidebar-icon"><i class="ph ph-star"></i></div>
                            <div class="wash-sidebar-icon"><i class="ph ph-receipt"></i></div>
                            <div class="wash-sidebar-icon"><i class="ph ph-chart-bar"></i></div>
                        </div>
                        <!-- Content -->
                        <div class="wash-main-content">
                            <div class="text-heading-color fw-bold mb-2" style="font-size:11px;">Today's Slot Availability — Mon, 20 Apr</div>
                            <!-- Stats row -->
                            <div class="d-flex gap-2 mb-3">
                                <div class="wash-stat-mini">
                                    <div class="num">18</div>
                                    <div class="lbl">Total Slots</div>
                                </div>
                                <div class="wash-stat-mini">
                                    <div class="num">11</div>
                                    <div class="lbl">Booked</div>
                                </div>
                                <div class="wash-stat-mini">
                                    <div class="num">7</div>
                                    <div class="lbl">Available</div>
                                </div>
                                <div class="wash-stat-mini">
                                    <div class="num">₹4,200</div>
                                    <div class="lbl">Today</div>
                                </div>
                            </div>
                            <!-- Slot grid -->
                            <div class="text-heading-color fw-semibold mb-1" style="font-size:10px;">Slot Board</div>
                            <div class="slot-grid mb-2">
                                <div class="slot-box booked">9:00 AM</div>
                                <div class="slot-box booked">9:30 AM</div>
                                <div class="slot-box available">10:00 AM</div>
                                <div class="slot-box selected">10:30 AM</div>
                                <div class="slot-box booked">11:00 AM</div>
                                <div class="slot-box available">11:30 AM</div>
                                <div class="slot-box available">12:00 PM</div>
                                <div class="slot-box booked">12:30 PM</div>
                            </div>
                            <div class="d-flex gap-2" style="font-size:9px;">
                                <span class="d-flex align-items-center gap-1"><span style="width:8px;height:8px;background:#fee2e2;border-radius:2px;display:inline-block;"></span>Booked</span>
                                <span class="d-flex align-items-center gap-1"><span style="width:8px;height:8px;background:#dcfce7;border-radius:2px;display:inline-block;"></span>Available</span>
                                <span class="d-flex align-items-center gap-1"><span style="width:8px;height:8px;background:hsl(var(--main));border-radius:2px;display:inline-block;"></span>Selected</span>
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
                ['ph-git-branch','Architecture','Multi-tenant SaaS Monorepo'],
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
                    <strong>Washing ERP</strong> is a multi-tenant SaaS platform built with React 18 + Vite frontend and Node.js + Express backend. Any vehicle washing center owner can purchase a subscription, set up their service center, configure working hours, divide their day into booking slots, and start accepting customer bookings — all within minutes.
                </p>
                <p class="text-body lh-lg mb-5">
                    Customers earn reward points on every wash, admins manage schedules, invoices, and plans, while the platform handles multi-tenant isolation, subscription billing, and notifications automatically.
                </p>
                <div class="d-flex align-items-center gap-4 flex-wrap">
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">Multi</div>
                        <div class="text-body" style="font-size:0.82rem;">Tenant SaaS</div>
                    </div>
                    <div style="width:1px;height:40px;background:#e5e7eb;"></div>
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">4</div>
                        <div class="text-body" style="font-size:0.82rem;">User Roles</div>
                    </div>
                    <div style="width:1px;height:40px;background:#e5e7eb;"></div>
                    <div class="text-center">
                        <div class="fw-bold text-main" style="font-size:2rem;">3</div>
                        <div class="text-body" style="font-size:0.82rem;">Subscription Plans</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- User Roles -->
                <div class="row gy-3 gx-3 mb-3">
                    @foreach([
                        ['ph-shield-star','Super Admin','Manages all tenants, plans &amp; platform billing'],
                        ['ph-building','Center Owner','Sets up center, slots, holidays &amp; rewards'],
                        ['ph-wrench','Wash Staff','View schedule, mark wash done &amp; issue invoice'],
                        ['ph-user','Customer','Book slots, earn reward points &amp; view history'],
                    ] as $r)
                    <div class="col-6">
                        <div class="role-card">
                            <div class="role-icon"><i class="ph {{ $r[0] }}"></i></div>
                            <div>
                                <div class="fw-bold text-heading-color" style="font-size:0.88rem;">{{ $r[1] }}</div>
                                <div class="text-body" style="font-size:0.76rem;">{!! $r[2] !!}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Monorepo structure -->
                <div class="rounded-3 p-4" style="background:#0f1825;">
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
                        <span style="color:#8aafc4;font-size:10px;font-family:monospace;">npm workspaces • multi-tenant schema per subscription</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================== SAAS SUBSCRIPTION PLANS ======================== -->
<section class="py-120 bg-white">
    <div class="container">
        <div class="text-center mb-60">
            <span class="section-label d-block">SaaS Onboarding</span>
            <h2 class="fw-bold">Purchase, Setup &amp; <span class="text-main">Go Live</span></h2>
            <p class="text-body mt-2 mx-auto" style="max-width:520px;">Any washing center owner can sign up, choose a plan, fill their center details, and be live in minutes — no code needed.</p>
        </div>

        <!-- Onboarding Steps -->
        <div class="row gy-4 mb-60">
            @foreach([
                ['1','ph-user-plus','Register Account','Center owner signs up on the platform with basic details.','#61dafb'],
                ['2','ph-storefront','Fill Center Details','Add center name, address, services, vehicle types &amp; pricing.','#68a063'],
                ['3','ph-credit-card','Choose a Plan','Select Starter, Pro, or Enterprise and pay via Stripe/Razorpay.','#a78bfa'],
                ['4','ph-calendar','Configure Schedule','Set working days, holidays, opening hours &amp; slot duration.','#f0db4f'],
                ['5','ph-rocket-launch','Go Live','Share booking link — customers can now see slots and book.','#34d399'],
            ] as $step)
            <div class="col-6 col-lg">
                <div class="d-flex flex-column align-items-center text-center p-4 bg-white border border-neutral-200 rounded-3 h-100 shadow-sm">
                    <span class="fw-bold rounded-circle d-flex align-items-center justify-content-center mb-3"
                          style="width:44px;height:44px;background:{{ $step[4] }}20;color:{{ $step[4] }};font-size:1.1rem;border:2px solid {{ $step[4] }};">
                        {{ $step[0] }}
                    </span>
                    <i class="ph {{ $step[2] }} text-main mb-2" style="font-size:1.4rem;"></i>
                    <div class="fw-semibold text-heading-color mb-1" style="font-size:0.88rem;">{{ $step[2] }}</div>
                    <div class="text-body" style="font-size:0.78rem;">{!! $step[3] !!}</div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Subscription Plans -->
        <div class="row gy-4 justify-content-center">
            @foreach([
                ['Starter','₹999/mo','For small single-bay washing centers',false,[
                    'Up to 20 slots/day',
                    'Basic booking management',
                    'Invoice generation',
                    'Customer reward points',
                    'Email notifications',
                ]],
                ['Pro','₹2,499/mo','For growing multi-service wash centers',true,[
                    'Unlimited slots/day',
                    'Holiday &amp; schedule manager',
                    'Advanced reward system',
                    'SMS + Email notifications',
                    'Analytics dashboard',
                    'Payment gateway integration',
                ]],
                ['Enterprise','₹5,999/mo','For multi-branch chains &amp; franchises',false,[
                    'Multi-branch management',
                    'Custom branding',
                    'API access',
                    'Dedicated support',
                    'White-label option',
                    'Advanced reporting',
                ]],
            ] as $plan)
            <div class="col-md-6 col-lg-4">
                <div class="plan-card {{ $plan[3] ? 'popular' : '' }}">
                    @if($plan[3])
                    <div class="mb-3"><span class="plan-badge">Most Popular</span></div>
                    @endif
                    <div class="fw-bold text-heading-color mb-1" style="font-size:1.1rem;">{{ $plan[0] }}</div>
                    <div class="fw-bold text-main mb-1" style="font-size:1.8rem;">{{ $plan[1] }}</div>
                    <div class="text-body mb-4" style="font-size:0.82rem;">{{ $plan[2] }}</div>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                        @foreach($plan[4] as $feat)
                        <li class="d-flex align-items-center gap-2">
                            <i class="ph ph-check-circle text-main flex-shrink-0"></i>
                            <span class="text-body" style="font-size:0.83rem;">{!! $feat !!}</span>
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ url('/contact') }}"
                       class="btn w-100 py-2 rounded-pill fw-semibold {{ $plan[3] ? 'btn-main' : '' }}"
                       style="{{ $plan[3] ? '' : 'border:2px solid hsl(var(--main));color:hsl(var(--main));' }}">
                        Get Started
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- ======================== BUSINESS CHALLENGES ======================== -->
<section class="py-120 bg-neutral-50">
    <div class="container">
        <div class="row gy-5 align-items-start">
            <div class="col-lg-5">
                <span class="section-label">Pain Points</span>
                <h2 class="fw-bold mb-3">Business <span class="text-main">Challenges</span></h2>
                <p class="text-body lh-lg mb-4">Vehicle washing centers had no digital system to manage bookings, schedules, or customer loyalty:</p>
                <div class="rounded-3 p-5 d-flex flex-column align-items-center justify-content-center text-center"
                     style="background:linear-gradient(135deg,#e0f5f5,#f0fafa);min-height:260px;">
                    <i class="ph ph-warning-circle text-main" style="font-size:4rem;"></i>
                    <div class="fw-bold text-heading-color mt-3 mb-1">Walk-ins Only, No System</div>
                    <div class="text-body" style="font-size:0.88rem;max-width:220px;">Long queues, no-shows, missed revenue, and zero customer retention</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="d-flex flex-column gap-3 mt-lg-5 pt-lg-3">
                    @foreach([
                        ['01','No slot booking — customers just showed up causing long queues'],
                        ['02','No way to define working days, holidays, or shift hours digitally'],
                        ['03','No customer loyalty program to incentivize repeat visits'],
                        ['04','Invoices were handwritten or not issued at all'],
                        ['05','Owners had no dashboard to see daily bookings or revenue'],
                        ['06','No multi-tenant SaaS option — every center needed a custom build'],
                        ['07','No automated reminders to reduce no-shows and last-minute cancellations'],
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
<section class="py-120 bg-white">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6">
                <span class="section-label">What We Built</span>
                <h2 class="fw-bold mb-3">Our Role &amp; <span class="text-main">Responsibilities</span></h2>
                <p class="text-body mb-4">We designed and developed the full SaaS ERP end-to-end — multi-tenant architecture, React SPA, Node.js API, slot engine, reward system, invoicing, and notification pipeline.</p>
                <div class="d-flex flex-column gap-3">
                    @foreach([
                        ['ph-atom','React 18 + Vite SPA — booking UI, admin panel &amp; customer portal'],
                        ['ph-terminal','Node.js + Express REST API with JWT multi-tenant auth'],
                        ['ph-calendar','Working day &amp; holiday schedule manager per center'],
                        ['ph-clock','Dynamic slot engine — divides working hours into bookable slots'],
                        ['ph-star','Customer reward points engine with admin-configurable rules'],
                        ['ph-receipt','Automated invoice generation per wash booking'],
                        ['ph-bell-ringing','Email/SMS booking confirmations, reminders &amp; receipts'],
                        ['ph-credit-card','Stripe/Razorpay subscription billing for SaaS plans'],
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
                <div class="bg-white rounded-3 p-4 shadow-sm border">
                    <div class="fw-bold text-heading-color mb-4" style="font-size:1rem;">Development Timeline</div>
                    @foreach([
                        ['ph-clipboard-text','Phase 1: Requirement Analysis','Mapped center workflows, slot logic, reward rules &amp; SaaS billing needs'],
                        ['ph-git-branch','Phase 2: Monorepo + Multi-tenant Setup','npm workspaces, per-tenant DB schema isolation with Prisma'],
                        ['ph-atom','Phase 3: React Frontend','Booking UI, admin schedule config, reward dashboard — Vite + React Query'],
                        ['ph-terminal','Phase 4: Node.js API + Slot Engine','REST API, dynamic slot generator, reward engine &amp; invoice service'],
                        ['ph-rocket-launch','Phase 5: Deployment &amp; Live','Docker, CI/CD pipeline, Stripe webhooks, SSL — production ready'],
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


<!-- ======================== SLOT SYSTEM DEEP DIVE ======================== -->
<section class="py-120 bg-neutral-50">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6">
                <span class="section-label">Slot Booking Engine</span>
                <h2 class="fw-bold mb-4">Schedule, Slots &amp; <span class="text-main">Bookings</span></h2>
                <p class="text-body lh-lg mb-4">
                    The admin sets the center's working hours and slot duration (e.g. 30 mins). The Node.js slot engine automatically divides the day into equal time slots. The React frontend shows customers a live color-coded slot board — green for available, red for booked.
                </p>
                <div class="d-flex flex-column gap-3">
                    @foreach([
                        ['ph-calendar-check','Admin marks specific dates as working days or holidays'],
                        ['ph-clock','Sets opening &amp; closing time + slot duration (15/30/60 min)'],
                        ['ph-squares-four','Node.js auto-generates all slots for the day on the fly'],
                        ['ph-eye','Customer sees real-time slot availability in the React SPA'],
                        ['ph-check-square','Customer selects slot, enters vehicle info &amp; confirms booking'],
                        ['ph-bell-ringing','Email + SMS confirmation sent instantly via Node.js events'],
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
                <!-- Visual slot calendar -->
                <div class="bg-white rounded-3 p-4 shadow-sm border mb-3">
                    <div class="fw-bold text-heading-color mb-3" style="font-size:0.9rem;">Weekly Schedule Config</div>
                    @foreach([
                        ['Monday','9:00 AM – 6:00 PM','18 slots','working'],
                        ['Tuesday','9:00 AM – 6:00 PM','18 slots','working'],
                        ['Wednesday','10:00 AM – 4:00 PM','12 slots','working'],
                        ['Thursday','9:00 AM – 6:00 PM','18 slots','working'],
                        ['Friday','9:00 AM – 6:00 PM','18 slots','working'],
                        ['Saturday','10:00 AM – 2:00 PM','8 slots','working'],
                        ['Sunday','—','Holiday','holiday'],
                    ] as $day)
                    <div class="d-flex align-items-center gap-3 py-2" style="border-bottom:1px solid #f3f4f6;">
                        <span class="text-body" style="width:80px;font-size:0.82rem;font-weight:600;">{{ $day[0] }}</span>
                        @if($day[3] === 'holiday')
                        <span class="badge rounded-pill" style="background:#fee2e2;color:#b91c1c;font-size:0.72rem;">Holiday</span>
                        @else
                        <span class="text-body" style="font-size:0.78rem;">{{ $day[1] }}</span>
                        <span class="badge rounded-pill bg-main-50 text-main ms-auto" style="font-size:0.72rem;">{{ $day[2] }}</span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================== REWARD SYSTEM DEEP DIVE ======================== -->
<section class="py-120 bg-white">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-5">
                <span class="section-label">Customer Loyalty</span>
                <h2 class="fw-bold mb-4">Reward Points <span class="text-main">Engine</span></h2>
                <p class="text-body lh-lg mb-4">
                    After every completed vehicle wash, the system automatically credits reward points to the customer's wallet. The admin configures how many points are earned per wash type and what rewards are redeemable.
                </p>
                <div class="d-flex flex-column gap-3">
                    @foreach([
                        ['ph-star','Admin sets points per wash type (e.g. 10 pts for basic, 25 for premium)'],
                        ['ph-coins','Points credited to customer wallet automatically after wash is marked done'],
                        ['ph-gift','Customers redeem points for free washes or discounts at checkout'],
                        ['ph-chart-bar','Admin dashboard shows top reward earners &amp; redemption history'],
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
                <!-- Reward dashboard mockup card -->
                <div class="bg-white rounded-3 p-4 shadow-sm border">
                    <div class="fw-bold text-heading-color mb-4" style="font-size:0.9rem;">Customer Reward Wallet</div>
                    @foreach([
                        ['Rahul Sharma','Gold Member','1,240 pts','92%','#f59e0b'],
                        ['Anjali Patel','Silver Member','780 pts','58%','#94a3b8'],
                        ['Mohammed Khan','Gold Member','1,095 pts','81%','#f59e0b'],
                        ['Priya Singh','Bronze Member','320 pts','24%','#b45309'],
                    ] as $cust)
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rounded-circle bg-main-50 d-flex align-items-center justify-content-center flex-shrink-0"
                             style="width:36px;height:36px;font-size:0.75rem;font-weight:700;color:hsl(var(--main));">
                            {{ substr($cust[0], 0, 2) }}
                        </div>
                        <div style="flex:1;min-width:0;">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold text-heading-color" style="font-size:0.82rem;">{{ $cust[0] }}</span>
                                <span class="fw-bold text-main" style="font-size:0.78rem;">{{ $cust[2] }}</span>
                            </div>
                            <div class="reward-bar">
                                <div class="reward-fill" style="width:{{ $cust[3] }};"></div>
                            </div>
                            <div style="font-size:0.7rem;color:#888;margin-top:2px;">
                                <span style="color:{{ $cust[4] }};">{{ $cust[1] }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Reward config row -->
                    <div class="rounded-3 p-3 mt-3" style="background:#f8fafc;border:1px solid #e5e7eb;">
                        <div class="fw-semibold text-heading-color mb-2" style="font-size:0.82rem;">Admin Reward Config</div>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach(['Basic Wash = 10 pts','Premium = 25 pts','Full Detail = 50 pts','100 pts = ₹50 discount'] as $cfg)
                            <span class="badge bg-main-50 text-main rounded-pill" style="font-size:0.72rem;">{{ $cfg }}</span>
                            @endforeach
                        </div>
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
            <span class="section-label d-block">Platform Modules</span>
            <h2 class="fw-bold">Washing ERP in <span class="text-main">Action</span></h2>
            <p class="text-body mt-2 mx-auto" style="max-width:540px;">Every module built around the washing center workflow — from booking to payment to loyalty rewards.</p>
        </div>
        <div class="swiper module-cards-swiper">
            <div class="swiper-wrapper">
            @foreach([
                ['ph-calendar-check','Schedule Manager','Admin defines working days, holidays, opening hours &amp; slot duration per center.'],
                ['ph-clock','Slot Booking Engine','Node.js auto-generates time slots; customers see real-time availability &amp; book online.'],
                ['ph-car','Booking Management','View, confirm, reschedule, or cancel bookings with full vehicle and customer info.'],
                ['ph-star','Reward Points System','Auto-credit points per wash; admin configures earn rates and redemption rules.'],
                ['ph-receipt','Invoice Generator','Auto-generate branded PDF invoices per booking with itemised wash services.'],
                ['ph-credit-card','Subscription Billing','SaaS plan management — center owners pay monthly/yearly via Stripe/Razorpay.'],
                ['ph-bell-ringing','Notifications','Email + SMS confirmations, reminders, and receipts triggered by Node.js events.'],
                ['ph-chart-bar','Analytics Dashboard','Daily revenue, slot utilisation, top customers, and reward redemption reports.'],
                ['ph-buildings','Multi-tenant Management','Super admin oversees all registered centers, plans, and platform-level settings.'],
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
    </div>
</section>


<!-- ======================== TECH STACK ======================== -->
<section class="py-120 bg-white">
    <div class="container">
        <div class="row gy-5 align-items-stretch">
            <div class="col-lg-6">
                <div class="rounded-3 h-100 p-5" style="background:#0f1825;">
                    <div class="d-flex align-items-center gap-3 mb-5">
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width:72px;height:72px;min-width:72px;background:#1e2d40;">
                            <i class="ph ph-car" style="font-size:2rem;color:hsl(var(--main));"></i>
                        </div>
                        <span class="text-white fw-semibold" style="font-size:1.1rem;">Washing ERP Tech Stack</span>
                    </div>
                    <ul class="d-flex flex-column gap-3 list-unstyled">
                        @foreach([
                            ['Frontend','React 18 + Vite','#61dafb'],
                            ['Backend','Node.js + Express','#68a063'],
                            ['Database','MySQL via Prisma ORM','#fff'],
                            ['Auth','JWT + Multi-tenant Middleware','#fff'],
                            ['Styling','Tailwind CSS + shadcn/ui','#38bdf8'],
                            ['State','React Query + Zustand','#fff'],
                            ['Email','Nodemailer + SMTP','#fff'],
                            ['SMS','Twilio','#f472b6'],
                            ['Payments','Stripe (SaaS) + Razorpay (booking)','#635bff'],
                            ['PDF','Node.js Puppeteer (invoices)','#fff'],
                            ['Repo','Monorepo (npm workspaces)','#f0db4f'],
                            ['Deploy','Docker + CI/CD Pipeline','#fff'],
                        ] as $tech)
                        <li class="d-flex align-items-center gap-2">
                            <i class="ph ph-caret-right flex-shrink-0" style="color:{{ $tech[2] }};"></i>
                            <span style="color:rgba(255,255,255,0.9);font-size:0.88rem;"><strong style="color:{{ $tech[2] }};">{{ $tech[0] }}:</strong> {{ $tech[1] }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column gap-4 h-100">
                    <div>
                        <span class="section-label">Solution Delivered</span>
                        <h2 class="fw-bold mb-3">What We <span class="text-main">Built</span></h2>
                        <p class="text-body lh-lg">A production-ready multi-tenant SaaS ERP that any washing center can subscribe to, configure, and use immediately — with zero technical knowledge required.</p>
                    </div>
                    <div class="row gy-3 gx-3">
                        @foreach([
                            ['ph-atom','React SPA','Dynamic booking UI, admin panel, and customer reward wallet.'],
                            ['ph-terminal','Node.js API','Multi-tenant REST API with slot engine, reward engine &amp; invoice service.'],
                            ['ph-clock','Slot Engine','Auto-divides working hours into bookable slots based on admin config.'],
                            ['ph-star','Reward Engine','Points credited per wash, redeemable at checkout with admin control.'],
                            ['ph-receipt','Invoice Service','Puppeteer PDF invoices auto-generated and emailed per booking.'],
                            ['ph-credit-card','SaaS Billing','Stripe subscription management for Starter / Pro / Enterprise plans.'],
                        ] as $s)
                        <div class="col-6">
                            <div class="module-card p-3">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <i class="ph {{ $s[0] }} text-main" style="font-size:1.1rem;"></i>
                                    <span class="fw-semibold text-heading-color" style="font-size:0.82rem;">{{ $s[1] }}</span>
                                </div>
                                <div class="text-body" style="font-size:0.76rem;">{!! $s[2] !!}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
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
            <p class="text-body mt-2 mx-auto" style="max-width:540px;">Measurable improvements for washing centers after switching to the Washing ERP SaaS platform.</p>
        </div>
        <div class="row gy-4 justify-content-center">
            @foreach([
                ['70%','Reduction in walk-in queue wait time','ph-trend-down'],
                ['0','No-shows with automated booking reminders','ph-bell-ringing'],
                ['100%','Invoices auto-generated per booking','ph-receipt'],
                ['3x','Higher repeat customer rate with reward points','ph-star'],
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
                        ['ph-rocket-launch','Proves multi-tenant SaaS architecture at scale with React + Node.js'],
                        ['ph-clock','Demonstrates expertise in dynamic slot generation &amp; scheduling engines'],
                        ['ph-star','Shows end-to-end loyalty &amp; reward system design inside a SaaS product'],
                        ['ph-handshake','Builds trust for service-based businesses needing a custom SaaS ERP'],
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
                        ['Queue Wait Time Reduced','70%',70],
                        ['Booking Automation','100%',100],
                        ['Invoice Coverage','100%',100],
                        ['Repeat Customer Rate','3x↑',80],
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
                        Multi-tenant SaaS — Go Live in
                        <span class="text-yellow text-stroke-yellow">Minutes</span>
                    </div>
                </div>

                <h3 class="splitTextStyleOne text-white">
                    Ready to Launch Your Washing Center ERP?
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
                        <a target="blank" href="https://calendly.com/zalgoinfotec/30min"
                            class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                            data-block="button">
                            <span class="button__flair"></span>
                            <div class="d-flex align-items-center tw-gap-2 z-1">
                                <span class="button__label">Talk to Expert</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tw-pt-8 text-center">
                <div class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">React 18 + Vite</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Multi-tenant SaaS</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Slot Booking Engine</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill">Reward Points</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Invoice PDF</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Stripe Billing</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Twilio SMS</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Node.js + Express</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Prisma ORM</span>
                    <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill">Docker CI/CD</span>
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
