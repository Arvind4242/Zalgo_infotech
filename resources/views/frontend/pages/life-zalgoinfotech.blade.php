@extends('frontend.layouts.app')
@section('title', 'About Us')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
<style>
      :root {
    --blue-dark: #0a2a5e;
    --blue-mid: #1a4bbd;
    --blue-light: #2563eb;
    --blue-accent: #3b82f6;
    --white: #ffffff;
    --gray-light: #f4f7fc;
    --gray-text: #6b7280;
    --text-dark: #1e293b;
  }
    /* ── HERO ── */
 
  .hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 70% 50%, rgba(59,130,246,0.35) 0%, transparent 70%);
  }
  .hero-bg-dots {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(255,255,255,0.08) 1px, transparent 1px);
    background-size: 32px 32px;
  }
  /* ── SECTIONS ── */
  .section { padding: 80px 20px; max-width: 1100px; margin: 0 auto; }
  .section-full { padding: 80px 20px; }
  .section-title {
    text-align: center;
    font-size: clamp(1.5rem, 3vw, 2.2rem);
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 50px;
  }
  .section-title span { color: var(--blue-light); }

  /* ── CULTURE SPLIT ── */
  .culture-split {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    padding: 80px 40px;
    max-width: 1100px;
    margin: 0 auto;
  }
  .culture-text h2 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--blue-light);
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
  }
  .culture-text h3 {
    font-size: clamp(1.6rem, 3vw, 2.3rem);
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 16px;
  }
  .culture-text p { color: var(--gray-text); line-height: 1.8; margin-bottom: 24px; }
  .culture-checklist { list-style: none; }
  .culture-checklist li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 8px 0;
    color: var(--text-dark);
    font-size: 0.95rem;
  }
  .culture-checklist li::before {
    content: '✓';
    background: var(--blue-light);
    color: white;
    width: 22px;
    height: 22px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    font-weight: 700;
    flex-shrink: 0;
    margin-top: 1px;
  }
  .culture-img {
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(26,75,189,0.18);
  }
  .culture-img img { width: 100%; height: 320px; object-fit: cover; display: block; }
  .culture-img-placeholder {
    width: 100%;
    height: 320px;
    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 4rem;
  }

  /* ── VALUES GRID ── */
  .values-section { background: var(--gray-light); }
  .values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .value-card {
    background: white;
    border-radius: 12px;
    padding: 30px 24px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    transition: transform 0.25s, box-shadow 0.25s;
  }
  .value-card:hover { transform: translateY(-6px); box-shadow: 0 12px 40px rgba(26,75,189,0.12); }
  .value-icon { font-size: 2.4rem; margin-bottom: 14px; display: block; }
  .value-card h4 { font-size: 1rem; font-weight: 700; color: var(--blue-dark); margin-bottom: 8px; }
  .value-card p { font-size: 0.875rem; color: var(--gray-text); line-height: 1.6; }

  /* ── INSIDE GALLERY ── */
  .gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: auto auto;
    gap: 16px;
    max-width: 1100px;
    margin: 0 auto;
  }
  .gallery-grid .g-item {
    border-radius: 12px;
    overflow: hidden;
    background: linear-gradient(135deg, #dbeafe, #bfdbfe);
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    position: relative;
  }
  .g-item img { width: 100%; height: 100%; object-fit: cover; }
  .why-box {
    background: white;
    border-radius: 12px;
    padding: 32px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.07);
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .why-box h3 { font-size: 1.2rem; font-weight: 700; color: var(--blue-dark); margin-bottom: 20px; }
  .why-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    list-style: none;
  }
  .why-list li {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.875rem;
    color: var(--text-dark);
  }
  .why-list li::before {
    content: '✓';
    color: var(--blue-light);
    font-weight: 700;
    font-size: 0.85rem;
  }
  .gallery-bottom {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    max-width: 1100px;
    margin: 16px auto 0;
  }

  /* ── TECH STACK ── */
  .tech-section { background: var(--gray-light); padding: 70px 20px; }
  .tech-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 14px;
    max-width: 900px;
    margin: 0 auto;
  }
  .tech-badge {
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 12px 22px;
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--text-dark);
    display: flex;
    align-items: center;
    gap: 8px;
    transition: box-shadow 0.2s, transform 0.2s;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
  }
  .tech-badge:hover { box-shadow: 0 6px 20px rgba(26,75,189,0.12); transform: translateY(-2px); }
  .tech-badge .dot { width: 10px; height: 10px; border-radius: 50%; }

  /* ── CTA ── */
  .cta-section {
    background: linear-gradient(135deg, var(--blue-dark), var(--blue-mid));
    color: white;
    text-align: center;
    padding: 80px 20px;
    position: relative;
    overflow: hidden;
  }
  .cta-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(255,255,255,0.05) 1px, transparent 1px);
    background-size: 28px 28px;
  }
  .cta-section h2 { font-size: clamp(1.6rem, 3vw, 2.3rem); font-weight: 700; margin-bottom: 12px; position: relative; }
  .cta-section p { opacity: 0.85; margin-bottom: 36px; font-size: 1rem; position: relative; }
  .cta-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; position: relative; }
  .btn-white {
    background: white;
    color: var(--blue-dark);
    padding: 13px 30px;
    border-radius: 6px;
    font-weight: 700;
    font-size: 0.95rem;
    text-decoration: none;
    transition: all 0.2s;
    display: inline-block;
  }
  .btn-white:hover { background: #dbeafe; transform: translateY(-2px); }

  /* ── QUOTE BAR ── */
  .quote-bar {
    background: var(--blue-dark);
    color: white;
    text-align: center;
    padding: 30px 20px;
    font-size: 1.05rem;
    font-style: italic;
    opacity: 0.9;
  }
  .quote-bar span { color: #93c5fd; font-weight: 600; font-style: normal; }

  @media (max-width: 768px) {
    .culture-split { grid-template-columns: 1fr; gap: 30px; padding: 50px 20px; }
    .gallery-grid { grid-template-columns: 1fr 1fr; }
    .gallery-bottom { grid-template-columns: 1fr; }
    .why-list { grid-template-columns: 1fr; }
  }
</style>

   <div id="smooth-content">
    
   
   
   <!-- HERO -->
<section style="background-image:url({{asset('assets/images/bg/mash-gradient-bg1.png')}});" class="hero banner-two position-relative z-1 pb-0">
    <div class="banner-two__inner position-relative">
        <div class="container">
            <div class="text-center">
                <div class="">
                    <div class="position-relative d-inline-block">
                        <h1 class="splitTextStyleOne text-capitalize fw-bold tw-leading-none tw-pb-205">
                            Life at Zalgo Infotech
                        </h1>
                    </div>
                </div>
                <p class="splitTextStyleOne text-neutral-600 tw-text-lg tw-mt-405 tw-mt-8 max-w-672-px mx-auto fw-medium">
                  We build technology with passion, teamwork, and innovation.  
                </p>

                <div class="d-inline-flex align-items-center tw-gap-5 tw-mt-8 flex-wrap" data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                    <a target="blank" href="https://calendly.com/zalgoinfotec/30min"
                        class="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold"
                        data-block="button">
                        <span class="button__flair"></span>
                        <span class="button__label">View Open Position</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-orange-outline hover-style-five hover-text-white button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold bg-white"
                        data-block="button">
                        <span class="button__flair"></span>
                        <span class="button__label">Join Our Team</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- CULTURE SPLIT -->
<div class="culture-split">
  <div class="culture-text">
    <h2>Our Culture</h2>
    <h3>A Culture That Empowers You</h3>
    <p>At Zalgo Infotech, we believe great products are built by happy and motivated people. We encourage creativity, continuous learning, and ownership in everything we do.</p>
  </div>
  <div class="culture-img">
    <div class="culture-img-placeholder">🤝</div>
  </div>
</div>

<!-- CORE VALUES -->
<section class="values-section section-full">
  <div class="section" style="padding-top:0; padding-bottom:0;">
    <h2 class="section-title">Our <span>Core Values</span></h2>
  </div>
  <div class="values-grid">
    <div class="value-card">
      <span class="value-icon">🚀</span>
      <h4>Innovation First</h4>
      <p>We love solving complex problems.</p>
    </div>
    <div class="value-card">
      <span class="value-icon">🤝</span>
      <h4>Teamwork</h4>
      <p>Collaboration over competition.</p>
    </div>
    <div class="value-card">
      <span class="value-icon">📚</span>
      <h4>Continuous Learning</h4>
      <p>Grow your skills every day.</p>
    </div>
    <div class="value-card">
      <span class="value-icon">⚖️</span>
      <h4>Work-Life Balance</h4>
      <p>Smart work, not overwork.</p>
    </div>
  </div>
</section>

<!-- INSIDE ZALGO -->
<section class="section-full" style="padding: 80px 20px;">
  <h2 class="section-title">Inside <span>Zalgo Infotech</span></h2>
  <div class="gallery-grid">
    <div class="g-item">🏢</div>
    <div class="g-item">💬</div>
    <div class="g-item">👥</div>
  </div>
  <div class="gallery-bottom" style="max-width:1100px; margin: 16px auto 0;">
    <div class="g-item" style="height:220px; border-radius:12px; background:linear-gradient(135deg,#dbeafe,#bfdbfe); display:flex; align-items:center; justify-content:center; font-size:3rem;">💻</div>
    <div class="why-box">
      <h3>Why Work With Us</h3>
      <ul class="why-list">
        <li>Flexible working hours</li>
        <li>Skill development & training</li>
        <li>Remote & hybrid work options</li>
        <li>Career growth opportunities</li>
        <li>Friendly management</li>
        <li>Competitive salary packages</li>
      </ul>
    </div>
  </div>
</section>

<!-- TECH STACK -->
        <!-- Brand Three section start= -->
        <div class="brand-three pt-120">
            <div class="container">
                <div class="text-center tw-mb-16">
                    <h5 class="mb-0 line-clamp-1">
                       Our Technology Partners
                    </h5>
                </div>
                <div class="brand-three-slider swiper left-right-gradient gradient-width-200">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/logo/paypal.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/logo/Zoho.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="">
                                <img src="{{asset('assets/images/logo/upwork.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/logo/envato.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/logo/shopify.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="">
                                <img src="{{asset('assets/images/logo/godaddy.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/logo/digitalocean.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/logo/Stripe.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/logo//HubSpot.svg')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/logo/cloudflare.png')}}" alt="Logo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Three section end= -->

<!-- CTA -->
<!-- Cta section start -->
            <section class="cta py-md-0 py-5">
                <div class="container">
                    <div class="row gy-4 align-items-center">
                        <div class="col-md-6 d-md-block d-none">
                            <div class="pe-lg-2">
                                <div class="position-relative">
                                    <img src="{{asset('assets/images/thumbs/model-img.png')}}" alt="Model" />
                                    <img src="{{asset('assets/images/shapes/arrow-right-curve.png')}}" alt="Arrow shape"
                                        class="position-absolute top-0 tw-end-0 tw-mt-160-px animate__wobble__two" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ps-lg-4 max-w-532-px">
                                <span
                                    class="tw-py-1 tw-px-705 bg-main-600 text-white tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">Have a Project?</span>
                                <h3 class="splitTextStyleOne fw-light tw-leading-104 tw-mb-5 d-flex gap-2">
                                    <span class="d-inline-block fw-semibold">
                                        <span class="fw-normal">Let’s </span>
                                        Turn Your Idea Into a Scalable 
                                        <span class="fw-normal">
                                            Digital Solution</span>
                                    </span>
                                </h3>
                                <p class="text-neutral-600 tw-text-lg splitTextStyleOne">
                                    Talk to our experts and get clear guidance, realistic timelines, and a solution tailored to your business goals.
                                </p>
                                <a href="{{route('contact')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-0 tw-py-5 w-100 tw-mt-10"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Speak With Our Experts</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Cta section End -->
   
   
   <!-- footer area -->
        @include('frontend.includes.footers.footerOne')
        <!-- footer area end -->
    </div>
@endsection 