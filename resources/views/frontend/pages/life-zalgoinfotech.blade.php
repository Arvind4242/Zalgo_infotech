@extends('frontend.layouts.app')
@section('title', 'Life at Zalgo Infotech – Our Team, Culture & Work Environment')
@section('content')
@include('frontend.includes.headers.headerOne')

<style>
/* ── image quality ── */
.lz-img-mosaic img,
.lz-gallery-item img,
.lz-team-card img {
    image-rendering: auto;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transform: translateZ(0);
}
/* ── shared ── */
.lz-badge { display:inline-block; background:#e8f4fd; color:#0077b6; font-size:12px; font-weight:700; letter-spacing:.8px; text-transform:uppercase; padding:5px 14px; border-radius:20px; margin-bottom:14px; }
.lz-heading { font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:800; color:#0d1b2a; line-height:1.2; }
.lz-sub { font-size:16px; color:#64748b; line-height:1.8; font-weight:500; }

/* ── hero ── */
.lz-hero { background-image:url('{{ asset("assets/images/bg/mash-gradient-bg1.png") }}'); background-size:cover; padding:110px 0 70px; }

/* ── stats bar ── */
.lz-stats { background:#0d1b2a; padding:40px 0; }
.lz-stat-item { text-align:center; border-right:1px solid rgba(255,255,255,.1); }
.lz-stat-item:last-child { border-right:none; }
.lz-stat-num { font-size:2.4rem; font-weight:800; color:#fff; line-height:1; }
.lz-stat-label { font-size:13px; color:rgba(255,255,255,.6); font-weight:500; margin-top:4px; }

/* ── culture split ── */
.lz-img-mosaic { display:grid; grid-template-columns:1fr 1fr; grid-template-rows:200px 200px; gap:12px; }
.lz-img-mosaic .lz-m-wide { grid-column:1/3; }
.lz-img-mosaic img { width:100%; height:100%; object-fit:cover; border-radius:12px; display:block; }

/* ── values ── */
.lz-value-card { background:#fff; border:1px solid #e8edf2; border-radius:16px; padding:32px 26px; transition:all .25s; }
.lz-value-card:hover { transform:translateY(-6px); box-shadow:0 20px 50px rgba(0,119,182,.1); border-color:#bae6fd; }
.lz-value-icon { width:56px; height:56px; background:#e8f4fd; border-radius:14px; display:flex; align-items:center; justify-content:center; margin-bottom:18px; }
.lz-value-icon svg { width:28px; height:28px; fill:#0077b6; }
.lz-value-card h4 { font-size:16px; font-weight:800; color:#0d1b2a; margin-bottom:8px; }
.lz-value-card p { font-size:14px; color:#64748b; line-height:1.7; margin:0; }

/* ── gallery ── */
.lz-gallery { display:grid; grid-template-columns:repeat(3,1fr); gap:14px; }
.lz-gallery-item { border-radius:14px; overflow:hidden; position:relative; }
.lz-gallery-item img { width:100%; height:220px; object-fit:cover; display:block; transition:transform .4s; }
.lz-gallery-item:hover img { transform:scale(1.06); }
.lz-gallery-item.tall img { height:460px; }
.lz-gallery-col { display:flex; flex-direction:column; gap:14px; }

/* ── benefits ── */
.lz-benefit { display:flex; align-items:flex-start; gap:16px; padding:20px 22px; background:#f8fafc; border-radius:12px; border:1px solid #e8edf2; }
.lz-benefit-icon { width:44px; height:44px; background:#0077b6; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
.lz-benefit-icon svg { width:22px; height:22px; fill:#fff; }
.lz-benefit-text h5 { font-size:15px; font-weight:700; color:#0d1b2a; margin-bottom:4px; }
.lz-benefit-text p { font-size:13px; color:#64748b; margin:0; line-height:1.6; }

/* ── team ── */
.lz-team-card { background:#fff; border:1px solid #e8edf2; border-radius:16px; overflow:hidden; text-align:center; transition:all .25s; }
.lz-team-card:hover { transform:translateY(-6px); box-shadow:0 20px 50px rgba(0,0,0,.09); }
.lz-team-card img { width:100%; height:240px; object-fit:cover; object-position:top; display:block; }
.lz-team-info { padding:20px 16px 24px; }
.lz-team-info h5 { font-size:16px; font-weight:800; color:#0d1b2a; margin-bottom:4px; }
.lz-team-info span { font-size:13px; color:#0077b6; font-weight:600; }
.lz-team-socials { display:flex; justify-content:center; gap:10px; margin-top:12px; }
.lz-team-socials a { width:32px; height:32px; background:#f0f9ff; border-radius:8px; display:flex; align-items:center; justify-content:center; text-decoration:none; transition:background .2s; }
.lz-team-socials a:hover { background:#0077b6; }
.lz-team-socials a:hover svg { fill:#fff; }
.lz-team-socials svg { width:15px; height:15px; fill:#0077b6; transition:fill .2s; }

/* ── quote ── */
.lz-quote { background:linear-gradient(135deg,#0d1b2a,#0f3460); color:#fff; padding:64px 0; text-align:center; }
.lz-quote blockquote { font-size:clamp(1.2rem,2.5vw,1.7rem); font-weight:700; max-width:800px; margin:0 auto; line-height:1.5; }
.lz-quote cite { display:block; margin-top:18px; font-size:14px; color:rgba(255,255,255,.6); font-style:normal; }

@media(max-width:768px){
    .lz-gallery { grid-template-columns:1fr 1fr; }
    .lz-gallery-item.tall img { height:220px; }
    .lz-img-mosaic { grid-template-columns:1fr; }
    .lz-img-mosaic .lz-m-wide { grid-column:1; }
}
@media(max-width:576px){ .lz-gallery { grid-template-columns:1fr; } }
</style>

<div id="smooth-content">

<!-- ══ HERO ══ -->
<section class="lz-hero">
    <div class="container">
        <div class="text-center">
            <span class="lz-badge">Our Workplace</span>
            <h1 class="splitTextStyleOne lz-heading tw-mb-5">
                Life at <span class="text-main-600">Zalgo Infotech</span>
            </h1>
            <p class="lz-sub mx-auto tw-mb-8" style="max-width:600px;">
                We build world-class digital products — but more importantly, we build a team where every person grows, contributes, and loves what they do every day.
            </p>
            <div class="d-inline-flex align-items-center gap-3 flex-wrap justify-content-center">
                <a href="{{ route('career') }}"
                    class="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center gap-2 group tw-px-10 rounded-pill tw-py-505 fw-bold"
                    data-block="button">
                    <span class="button__flair"></span>
                    <span class="button__label">View Open Positions</span>
                </a>
                <a href="{{ route('contact') }}"
                    class="hover--translate-y-1 btn btn-orange-outline hover-style-five hover-text-white button--stroke d-inline-flex align-items-center justify-content-center gap-2 group tw-px-10 rounded-pill tw-py-505 fw-bold bg-white"
                    data-block="button">
                    <span class="button__flair"></span>
                    <span class="button__label">Join Our Team</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ══ STATS BAR ══ -->
<section class="lz-stats">
    <div class="container">
        <div class="row gy-4">
            @php $stats = [
                ['num'=>'5+',  'label'=>'Years of Innovation'],
                ['num'=>'40+', 'label'=>'Successful Projects'],
                ['num'=>'15+', 'label'=>'Team Members'],
                ['num'=>'10+', 'label'=>'Countries Served'],
                ['num'=>'96%', 'label'=>'Upwork Job Success'],
            ]; @endphp
            @foreach($stats as $s)
            <div class="col lz-stat-item">
                <div class="lz-stat-num">{{ $s['num'] }}</div>
                <div class="lz-stat-label">{{ $s['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══ CULTURE SPLIT ══ -->
<section class="py-120 bg-white overflow-hidden position-relative">
    <img src="{{ asset('assets/images/shapes/squre-box-shape.png') }}" alt=""
        class="position-absolute top-50 start-0 ms-5 animate__wobble__two z-0 d-lg-block d-none opacity-50" />
    <div class="container position-relative z-1">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6">
                <span class="lz-badge">Who We Are</span>
                <h2 class="splitTextStyleOne lz-heading tw-mb-5">
                    A Culture That<br>
                    <span class="font-dm-serif fst-italic fw-normal text-main-600">Empowers Everyone</span>
                </h2>
                <p class="lz-sub tw-mb-5">
                    At Zalgo Infotech, we believe great products are built by happy, motivated people. We nurture a culture of trust, creativity, continuous learning, and collective ownership.
                </p>
                <p class="lz-sub tw-mb-8">
                    Whether you're a developer, designer, or strategist — you'll find a place where your ideas are heard, your growth is supported, and your work genuinely matters.
                </p>
                <div class="d-flex flex-column gap-3">
                    @foreach([
                        'Open, transparent communication at every level',
                        'Freedom to experiment and ship bold ideas',
                        'Regular knowledge-sharing sessions & workshops',
                        'Flexible hours with a results-first mindset',
                    ] as $item)
                    <div class="d-flex align-items-center gap-3">
                        <span class="tw-w-6 tw-h-6 bg-main-600 text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="font-size:11px;">&#10003;</span>
                        <span class="fw-medium text-neutral-700">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="lz-img-mosaic">
                    <div class="lz-m-wide">
                        <img src="{{ asset('assets/images/thumbs/Tailored-solution.jpg') }}" alt="Zalgo team at work" />
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/thumbs/faq-thumb1.png') }}" alt="Zalgo office" />
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/thumbs/hire-img1.png') }}" alt="Team collaboration" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ CORE VALUES ══ -->
<section class="py-120" style="background:#f8fafc;">
    <div class="container">
        <div class="text-center tw-mb-14">
            <span class="lz-badge">What Drives Us</span>
            <h2 class="splitTextStyleOne lz-heading tw-mb-4">Our Core Values</h2>
            <p class="lz-sub mx-auto" style="max-width:560px;">These aren't just words on a wall — they guide every decision, every product, and every interaction.</p>
        </div>
        <div class="row gy-4">
            @php $values = [
                ['icon'=>'<path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7z"/>',
                  'title'=>'Innovation First',
                  'desc'=>'We love solving complex problems with creative thinking. Every challenge is an opportunity to build something better than what existed before.'],
                ['icon'=>'<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>',
                  'title'=>'Teamwork Over Ego',
                  'desc'=>'Collaboration beats competition every time. We share knowledge, lift each other up, and celebrate wins together as one united team.'],
                ['icon'=>'<path d="M12 3L1 9l4 2.18V15h2v-2.82L9 13.5V17h6v-3.5l2-1.08V15h2v-3.82L23 9 12 3zm6 8.99L12 15 6 11.99V11l6 3 6-3v.99z"/>',
                  'title'=>'Continuous Learning',
                  'desc'=>'Technology never stops evolving, and neither do we. We invest in skills, attend conferences, run internal sessions, and always stay curious.'],
                ['icon'=>'<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/>',
                  'title'=>'Ownership Mindset',
                  'desc'=>'Every team member takes pride in their work. We own outcomes, not just tasks — and we hold ourselves accountable to deliver the best results.'],
                ['icon'=>'<path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/>',
                  'title'=>'Work-Life Balance',
                  'desc'=>'Smart work beats long hours. We respect personal time, encourage healthy boundaries, and believe a rested mind produces the best work.'],
                ['icon'=>'<path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>',
                  'title'=>'Client Trust',
                  'desc'=>'We treat every client relationship as a long-term partnership. Honesty, transparency, and delivering on commitments are non-negotiable principles.'],
                ['icon'=>'<path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>',
                  'title'=>'Open Communication',
                  'desc'=>'We speak openly, give honest feedback, and resolve differences directly. No politics, no silos — just clear, respectful conversations that move things forward.'],
                ['icon'=>'<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm4.24 16L12 15.45 7.77 18l1.12-4.81-3.73-3.23 4.92-.42L12 5l1.92 4.53 4.92.42-3.73 3.23L16.23 18z"/>',
                  'title'=>'Excellence Always',
                  'desc'=>'Good enough is never good enough. We obsess over quality in every line of code, every design decision, and every client interaction we have.'],
            ]; @endphp
            @foreach($values as $v)
            <div class="col-lg-3 col-md-6">
                <div class="lz-value-card h-100">
                    <div class="lz-value-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">{!! $v['icon'] !!}</svg>
                    </div>
                    <h4>{{ $v['title'] }}</h4>
                    <p>{{ $v['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══ INSIDE ZALGO – PHOTO GALLERY ══ -->
<section class="py-120 bg-white">
    <div class="container">
        <div class="text-center tw-mb-14">
            <span class="lz-badge">Our Workspace</span>
            <h2 class="splitTextStyleOne lz-heading tw-mb-4">Inside Zalgo Infotech</h2>
            <p class="lz-sub mx-auto" style="max-width:520px;">A glimpse into the space where ideas turn into products — collaborative, energetic, and always moving forward.</p>
        </div>
        <div class="row gy-3">
            <div class="col-lg-4">
                <div class="lz-gallery-col h-100">
                    <div class="lz-gallery-item" style="flex:1;">
                        <img src="{{ asset('assets/images/thumbs/blog-page-img1.png') }}" alt="Zalgo workspace" style="height:100%;min-height:200px;" />
                    </div>
                    <div class="lz-gallery-item" style="flex:1;">
                        <img src="{{ asset('assets/images/thumbs/faq-thumb2.png') }}" alt="Team at work" style="height:100%;min-height:200px;" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="lz-gallery-item h-100">
                    <img src="{{ asset('assets/images/thumbs/workplace-tab-thumb.png') }}" alt="Office life" style="height:100%;min-height:440px;" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="lz-gallery-col h-100">
                    <div class="lz-gallery-item" style="flex:1;">
                        <img src="{{ asset('assets/images/thumbs/hire-img2.png') }}" alt="Team collaboration" style="height:100%;min-height:200px;" />
                    </div>
                    <div class="lz-gallery-item" style="flex:1;">
                        <img src="{{ asset('assets/images/thumbs/blog-page-img2.png') }}" alt="Daily standup" style="height:100%;min-height:200px;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-3 mt-0">
            <div class="col-md-4">
                <div class="lz-gallery-item">
                    <img src="{{ asset('assets/images/case-study/erpsystem-thumb.jpg') }}" alt="Brainstorming session" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="lz-gallery-item">
                    <img src="{{ asset('assets/images/case-study/lms.jpg') }}" alt="Pair programming" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="lz-gallery-item">
                    <img src="{{ asset('assets/images/case-study/washing.jpeg') }}" alt="Project review" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ WHY WORK WITH US ══ -->
<section class="py-120" style="background:#f8fafc;">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-5">
                <span class="lz-badge">Benefits & Perks</span>
                <h2 class="splitTextStyleOne lz-heading tw-mb-5">Why Work With Zalgo Infotech?</h2>
                <p class="lz-sub">
                    We don't just offer jobs — we offer careers built around growth, flexibility, and a team that genuinely cares about your success inside and outside of work.
                </p>
                <div class="mt-4">
                    <a href="{{ route('career') }}"
                        class="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center gap-2 group tw-px-10 rounded-pill tw-py-505 fw-bold"
                        data-block="button">
                        <span class="button__flair"></span>
                        <span class="button__label">See Open Roles</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <div class="row gy-3">
                    @php $benefits = [
                        ['icon'=>'<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67V7z"/>',
                         'title'=>'Flexible Working Hours', 'desc'=>'Work at your most productive time. We focus on results, not rigid schedules.'],
                        ['icon'=>'<path d="M12 3L1 9l4 2.18V15h2v-2.82L9 13.5V17h6v-3.5l2-1.08V15h2v-3.82L23 9 12 3zm6 8.99L12 15 6 11.99V11l6 3 6-3v.99z"/>',
                         'title'=>'Skill Development & Training', 'desc'=>'Access courses, workshops, and mentorship programs to accelerate your growth.'],
                        ['icon'=>'<path d="M20 6h-2.18c.07-.23.18-.49.18-.83C18 3.87 16.86 3 16 3h-4C11.14 3 10 3.87 10 5.17c0 .34.11.6.18.83H8c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2z"/>',
                         'title'=>'Remote & Hybrid Options', 'desc'=>'Work from home or the office — we trust you to choose what works best for you.'],
                        ['icon'=>'<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>',
                         'title'=>'Career Growth Opportunities', 'desc'=>'Clear growth paths with regular reviews, promotions, and leadership opportunities.'],
                        ['icon'=>'<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/>',
                         'title'=>'Exciting Real-World Projects', 'desc'=>'Work on live products for global clients across healthcare, e-commerce, SaaS, and more.'],
                        ['icon'=>'<path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>',
                         'title'=>'Competitive Salary Packages', 'desc'=>'Market-competitive compensation reviewed annually, plus performance bonuses.'],
                    ]; @endphp
                    @foreach($benefits as $b)
                    <div class="col-md-6">
                        <div class="lz-benefit h-100">
                            <div class="lz-benefit-icon">
                                <svg viewBox="0 0 24 24">{!! $b['icon'] !!}</svg>
                            </div>
                            <div class="lz-benefit-text">
                                <h5>{{ $b['title'] }}</h5>
                                <p>{{ $b['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ MEET THE TEAM ══ -->
<section class="py-120 bg-white">
    <div class="container">
        <div class="text-center tw-mb-14">
            <span class="lz-badge">The People Behind the Work</span>
            <h2 class="splitTextStyleOne lz-heading tw-mb-4">Meet Our Team</h2>
            <p class="lz-sub mx-auto" style="max-width:520px;">Passionate individuals who bring expertise, creativity, and dedication to every project we take on.</p>
        </div>
        <div class="row gy-4">
            @php $team = [
                ['img'=>'annu.png',     'name'=>'Annu',      'role'=>'UI/UX Designer',      'linkedin'=>'#'],
                ['img'=>'ashu.png',     'name'=>'Ashu',      'role'=>'Full Stack Developer', 'linkedin'=>'#'],
                ['img'=>'bhupendra.png','name'=>'Bhupendra', 'role'=>'Backend Engineer',     'linkedin'=>'#'],
            ]; @endphp
            @foreach($team as $member)
            <div class="col-lg-4 col-md-6">
                <div class="lz-team-card">
                    <img src="{{ asset('assets/images/thumbs/'.$member['img']) }}" alt="{{ $member['name'] }}" />
                    <div class="lz-team-info">
                        <h5>{{ $member['name'] }}</h5>
                        <span>{{ $member['role'] }}</span>
                        <div class="lz-team-socials">
                            <a href="{{ $member['linkedin'] }}" title="LinkedIn">
                                <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            <a href="mailto:sales@zalgoinfotech.com" title="Email">
                                <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══ QUOTE ══ -->
<div class="lz-quote">
    <div class="container">
        <blockquote>
            "We don't just hire talent — we invest in people, nurture potential, and build careers that last."
        </blockquote>
        <cite>— Zalgo Infotech Leadership Team</cite>
    </div>
</div>

<!-- ══ TECH PARTNERS ══ -->
<div class="position-relative z-1">
    <img src="{{ asset('assets/images/shapes/shape-image.png') }}" alt="" class="position-absolute w-100 start-0 bottom-0 z-n1" />
    <div class="brand-three pt-120 mb-5">
        <div class="container">
            <div class="text-center tw-mb-10">
                <span class="lz-badge">Ecosystem</span>
                <h2 class="splitTextStyleOne lz-heading">Our Technology Partners</h2>
            </div>
            <div class="brand-three-slider swiper left-right-gradient gradient-width-200">
                <div class="swiper-wrapper">
                    @foreach(['paypal','Zoho','upwork','envato','shopify','godaddy','digitalocean','Stripe','HubSpot','cloudflare'] as $logo)
                    <div class="swiper-slide d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/images/logo/'.$logo.'.'.($logo==='HubSpot'?'svg':'png')) }}" alt="{{ $logo }}" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <section class="cta py-md-0 py-5">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-md-6 d-md-block d-none">
                    <div class="pe-lg-2 position-relative">
                        <img src="{{ asset('assets/images/thumbs/model-img.png') }}" alt="Model" />
                        <img src="{{ asset('assets/images/shapes/arrow-right-curve.png') }}" alt="" class="position-absolute top-0 end-0 mt-5 animate__wobble__two" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ps-lg-4 max-w-532-px">
                        <span class="tw-py-1 tw-px-705 bg-main-600 text-white tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">Join the Team</span>
                        <h3 class="splitTextStyleOne fw-light tw-leading-104 tw-mb-5">
                            <span class="fw-semibold">Ready to Build Something <span class="fw-normal">Amazing With Us?</span></span>
                        </h3>
                        <p class="text-neutral-600 tw-text-lg splitTextStyleOne">
                            We're always on the lookout for talented, passionate people who want to make a real impact. Check out our open positions or send us your CV.
                        </p>
                        <div class="d-flex gap-3 flex-wrap mt-4">
                            <a href="{{ route('career') }}"
                                class="hover--translate-y-1 btn btn-main-two hover-style-two button--stroke d-sm-inline-flex align-items-center justify-content-center gap-2 group tw-px-9 rounded-0 tw-py-5 tw-mt-6"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label">See Open Positions</span>
                            </a>
                            <a href="{{ route('contact') }}"
                                class="hover--translate-y-1 btn btn-orange-outline hover-style-five hover-text-white button--stroke d-sm-inline-flex align-items-center justify-content-center gap-2 group tw-px-9 rounded-0 tw-py-5 tw-mt-6 bg-white"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label">Send Your CV</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('frontend.includes.footers.footerOne')
</div>

@endsection
