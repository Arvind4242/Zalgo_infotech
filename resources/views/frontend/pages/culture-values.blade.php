@extends('frontend.layouts.app')
@section('title', 'About Us')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
<style>

.brand-marketing > img {
    right: 0 !important;
    margin: 0;
    width: 100%;
    z-index: -1;
    height:100%;
}


  .values-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
    margin-bottom:18px;
}
 .voice-card:hover { transform: translateY(-4px); }
  .voice-header { display: flex; align-items: center; gap: 14px; margin-bottom: 16px; }
  .voice-avatar {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--blue-mid), var(--blue-accent));
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    flex-shrink: 0;
  }    
  .values-grid-2 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
    margin: 0 auto;
  }
  .value-card {
    background: white;
    border-radius: 12px;
    padding: 28px 20px;
    text-align: center;
    box-shadow: 0 4px 18px rgba(0,0,0,0.06);
    transition: transform 0.25s, box-shadow 0.25s;
  }
  .value-card:hover { transform: translateY(-5px); box-shadow: 0 14px 40px rgba(26,75,189,0.13); }
  .value-icon { font-size: 2.2rem; margin-bottom: 12px; display: block; }
  .value-card h4 { font-size: 1.25rem; font-weight: 700; color: var(--blue-dark); margin-bottom: 8px; }
.value-card p {
    font-size: 1rem;
    line-height: 1.25rem;
}
  /* ── BEHIND THE SCENES ── */

  .scenes-grid {
    display: grid;
    grid-template-columns: 2fr 1.2fr 1.2fr;
    gap: 14px;
    margin: 0 auto;
  }
  .scene-img {
    border-radius: 12px;
    overflow: hidden;
    background: linear-gradient(135deg, #dbeafe, #bfdbfe);
    height: 220px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3.5rem;
  }

  /* ── VOICES ── */
  .voices-section { background: var(--gray-light); }
  .voices-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }
  .voice-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    transition: transform 0.2s;
  }
 
  .voice-info h5 { font-size: 0.95rem; font-weight: 700; color: var(--text-dark); }
  .voice-info span { font-size: 0.8rem; color: var(--blue-light); font-weight: 500; }
  .voice-card p { font-size: 0.875rem; color: var(--gray-text); line-height: 1.7; font-style: italic; }
  .voice-card p::before { content: '"'; font-size: 1.5rem; color: var(--blue-accent); line-height: 0; vertical-align: -0.4em; margin-right: 4px; }

@media (max-width: 1024px) {
  section{
    padding:80px 0 !important;
  }
}

  @media (max-width: 900px) {

    .values-grid, .values-grid-2 { grid-template-columns: repeat(2, 1fr); }
    .scenes-grid { grid-template-columns: 1fr 1fr; }
    .voices-grid { grid-template-columns: 1fr; }
  }
  @media (max-width: 600px) {
    .values-grid, .values-grid-2 { grid-template-columns: 1fr 1fr; }
    .scenes-grid { grid-template-columns: 1fr; }
  }
</style>
    <div id="smooth-content">

<!-- HERO -->
        <!-- Banner Section Start -->
        <section class="banner tw-py-80-px overflow-hidden section-bg-three position-relative">
            <img src="{{asset('assets/images/shapes/sqaure_shape.png')}}" alt="Shape"
                class="position-absolute top-0 tw-end-0 tw-me-12-percent" />

            <div class="container max-w-1400-px">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="">
                            <h1 class="splitTextStyleOne fw-light tw-leading-104">
                                Our Culture & Value
                            </h1>
                            <p class="text-neutral-500 tw-text-lg max-w-500-px fw-medium splitTextStyleOne mt-3 mb-3">
                               How we make Zalgo Infotech awesome
                            </p>
                            <div class="d-flex align-items-center tw-gap-42-px flex-wrap">
                                <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <a href="{{route('contact')}}"
                                        class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
                                        data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Get Started</span>
                                    </a>
                                </div>
                               
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-none">
                        <div class="tw-ps-98-px position-relative tw-pb-8">
                            <div class="position-relative z-1">
                                <img src="{{asset('assets/images/thumbs/banner-img.png')}}" alt="" data-aos="zoom-in"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="1000" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->


        <section class="brand-marketing py-120 overflow-hidden position-relative">
          <img src="{{asset('assets/images/shapes/bg-image.png')}}" alt="Shape"
                class="position-absolute top-0 tw-end-0 tw-me-12-percent" />
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6 col-md-12">
                        <div class="">
                            <h2 class="splitTextStyleOne text-heading fw-semibold text-capitalize">
                                <span class="font-dm-serif fw-semibold text-green">Empowering Growth</span>
                                and Innovation
                            </h2>
                            <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">
                                At Zalgo Infotech, our culture is built on values that empower and inspire our team. We believe in fostering an environment where everyone can thrive.
                            </p>

                            <div class="tw-mt-5 d-flex flex-column">
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Foster creativity and collaboration.
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Smart work over long hours.
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Encourage ownership of projects.
                                    </p>
                                </div>
                                <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                                        <i class="ph ph-check"></i>
                                    </span>
                                    <p class="tw-text-lg fw-medium text-heading flex-grow-1">
                                        Continuous learning is key to success.
                                    </p>
                                </div>                               
                            </div>

                            <div class="tw-mt-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="900">
                                <a href="{{route('contact')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-17 rounded-pill tw-py-505 fw-medium"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Get Started</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="ps-5 position-relative pe-lg-5 tw-pb-4 h-100">
                            <div class="tw-rounded-28-px overflow-hidden h-100">
                                <img src="{{asset('assets/images/case-study/bio-img1.jpg')}}" alt="Image"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>

                            <img src="{{asset('assets/images/shapes/finger-shape.png')}}" alt="Shape"
                                class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>   


<!-- KEY VALUES ROW 1 -->
<section class="values-section pt-120 pb-120">
<div class="container">
    <div class="row">
        <div class="col-md-12">
              <h2 class="fw-semibold mb-5 splitTextStyleOne text-capitalize text-center text-heading">
        Our<span class="font-dm-serif fw-semibold text-green">Key Values</span>
        and Innovation
    </h2>
  <div class="values-grid">
    <div class="value-card">
      <span class="value-icon">🚀</span>
      <h4>Innovation First</h4>
      <p>Creative solutions for tough problems.</p>
    </div>
    <div class="value-card">
      <span class="value-icon">🤝</span>
      <h4>Teamwork</h4>
      <p>Together we achieve more.</p>
    </div>
    <div class="value-card">
      <span class="value-icon">📚</span>
      <h4>Continuous Learning</h4>
      <p>Always growing our skills.</p>
    </div>
    <div class="value-card">
      <span class="value-icon">⚖️</span>
      <h4>Ownership</h4>
      <p>We take pride and responsibility.</p>
    </div>
  </div>
  <div class="values-grid-2">
    <div class="value-card">
      <span class="value-icon">🎯</span>
      <h4>Ownership</h4>
      <p>We take pride and responsibility.</p>
    </div>
    <div class="value-card">
      <span class="value-icon">⚖️</span>
      <h4>Work-Life Balance</h4>
      <p>Smart work, not overwork.</p>
    </div>
    <div class="value-card">
      <span class="value-icon">🎉</span>
      <h4>Fun &amp; Inclusivity</h4>
      <p>Everyone belongs, and we celebrate together.</p>
    </div>
    <div class="value-card">
      <span class="value-icon">👏</span>
      <h4>Fun &amp; Inclusivity</h4>
      <p>Something special in every opportunity.</p>
    </div>
  </div>
        </div>
    </div>
</div>
</section>

<!-- BEHIND THE SCENES -->
<section class="scenes-section pt-120 pb-120" style="background: linear-gradient(135deg, #f8fafc 0%, #eef2f7 100%);">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
             <h2 class="fw-semibold mb-5 splitTextStyleOne text-capitalize text-center text-heading">
        Behind the Scenes at<span class="font-dm-serif fw-semibold text-green"> Zalgo</span>
    </h2>
  <div class="scenes-grid">
    <div class="scene-img" style="font-size:4rem;">
      <img src="{{asset('assets/images/case-study/bio-img1.jpg')}}" alt="Image"
                                    class="w-100 h-100 object-fit-cover" />
    </div>
    <div class="scene-img"><img src="{{asset('assets/images/case-study/bio-img1.jpg')}}" alt="Image"
                                    class="w-100 h-100 object-fit-cover" /></div>
    <div class="scene-img"><img src="{{asset('assets/images/case-study/bio-img1.jpg')}}" alt="Image"
                                    class="w-100 h-100 object-fit-cover" /></div>
  </div>
    </h2>
</section>

<!-- VOICES -->
<section class="voices-section pt-120 pb-120">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
             <h2 class="fw-semibold mb-5 splitTextStyleOne text-capitalize text-center text-heading">
        Voices from<span class="font-dm-serif fw-semibold text-green"> Zalgo Infotech</span>
    </h2>
  <div class="voices-grid">
    <div class="voice-card">
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/TxjsRFwDvbQ?si=LA4zrJXjOhfKCdMM" title="Dummy Video For Website" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                               
    </div>
    <div class="voice-card">
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/TxjsRFwDvbQ?si=LA4zrJXjOhfKCdMM" title="Dummy Video For Website" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                               
    </div>
    <div class="voice-card">
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/TxjsRFwDvbQ?si=LA4zrJXjOhfKCdMM" title="Dummy Video For Website" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
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