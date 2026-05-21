@extends('frontend.layouts.app')
@section('title', 'Client Testimonials')

@section('css')
<style>
    .testimonial-slider { overflow: hidden; }
    .testimonial-slider .swiper-slide {
        height: auto;
        display: flex;
        flex-direction: column;
    }
    .testimonial-slider .swiper-slide > div { flex: 1; }

    .t-nav-btn {
        width: 42px; height: 42px; border-radius: 50%;
        border: 1.5px solid #e5e7eb; background: #fff;
        display: inline-flex; align-items: center; justify-content: center;
        cursor: pointer; transition: all .25s; font-size: 18px;
        color: #374151; flex-shrink: 0; line-height: 1;
    }
    .t-nav-btn:hover { background: #111827; color: #fff; border-color: #111827; }
    .t-nav-btn:disabled { opacity: .4; cursor: default; }

    .t-pagination { position: static !important; width: auto !important; display: flex; align-items: center; gap: 6px; }
    .t-pagination .swiper-pagination-bullet {
        width: 8px; height: 8px; background: #d1d5db; opacity: 1;
        transition: all .3s; margin: 0 !important;
    }
    .t-pagination .swiper-pagination-bullet-active {
        background: #111827; width: 24px; border-radius: 4px;
    }

    @media (max-width: 991px) {
        .testi-section-header { flex-direction: column !important; align-items: flex-start !important; }
        .testi-section-header .max-w-672-px { max-width: 100% !important; }
        .testi-section-header p { max-width: 100% !important; margin-top: 0 !important; }
    }
    @media (max-width: 575px) {
        .website-owner.py-120 { padding-top: 60px !important; padding-bottom: 60px !important; }
        .py-120.section-bg-two { padding-top: 60px !important; padding-bottom: 60px !important; }
    }
</style>
@endsection

@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">

        <!-- Breadcrumb -->
        <section class="py-120 section-bg-two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <span class="tw-mb-4">
                                <img src="{{asset('assets/images/logo/favicon-two.png')}}" alt="Favicon Two" />
                            </span>
                            <h1 class="mb-0 splitTextStyleOne text-capitalize">Client Testimonials</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reviews Section -->
        <section class="website-owner py-120 position-relative z-1">
            <img src="{{asset('assets/images/shapes/moon-shape.png')}}" alt="Moon Shape"
                 class="position-absolute top-50 tw-start-50 translate-middle z-n1" />

            <div class="container">

                <!-- Section Header -->
                <div class="d-flex testi-section-header align-items-center justify-content-between tw-gap-6 tw-mb-12">
                    <div class="max-w-672-px">
                        <div class="bg-neutral-200 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405"
                             data-aos="fade-up" data-aos-duration="600">
                            <span class="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                            Verified reviews from <span class="text-yellow">Clutch</span>, Upwork &amp; GoodFirms
                        </div>
                        <h2 class="splitTextStyleOne text-heading text-capitalize">
                            What Our Clients Say
                            <span class="font-dm-serif fst-italic fw-normal">About Us</span>
                        </h2>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="800">
                        <p class="text-neutral-500 tw-mt-8 max-w-490-px fw-medium">
                            Real feedback from real clients — sourced directly from Clutch, Upwork, and GoodFirms. We let our work speak through the voices of those who've experienced it firsthand.
                        </p>
                    </div>
                </div>

                <!-- ── Clutch & GoodFirms Slider ───────────────────────── -->
                <div class="tw-mb-14">
                    <div class="d-flex align-items-center flex-wrap tw-gap-3 tw-mb-8" data-aos="fade-up" data-aos-duration="600">
                        <a href="https://clutch.co/profile/zalgo-infotech#reviews" target="_blank" rel="noopener noreferrer"
                           class="d-inline-flex align-items-center tw-gap-2 tw-px-4 tw-py-2 rounded-pill fw-semibold text-decoration-none"
                           style="background:#ff4e27;color:#fff;font-size:13px;">&#9670;&nbsp;Clutch Reviews</a>
                        <a href="https://www.goodfirms.co/company/zalgo-infotech-pvt-ltd" target="_blank" rel="noopener noreferrer"
                           class="d-inline-flex align-items-center tw-gap-2 tw-px-4 tw-py-2 rounded-pill fw-semibold text-decoration-none"
                           style="background:#2c3ed5;color:#fff;font-size:13px;">&#9733;&nbsp;GoodFirms Reviews</a>
                        <span class="text-neutral-500 fw-medium">3 Verified Reviews &middot; Overall 5.0 &#9733;</span>
                    </div>

                    <div class="swiper testimonial-slider clutch-reviews-slider">
                        <div class="swiper-wrapper">

                            <!-- GoodFirms: Linda MT -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-4">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#2c3ed5;width:44px;height:44px;min-width:44px;font-size:18px;">L</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">Linda MT</div>
                                                <div class="text-neutral-500" style="font-size:11px;">Co-Owner, BIOAGE Inc.</div>
                                            </div>
                                        </div>
                                        <a href="https://www.goodfirms.co/company/zalgo-infotech-pvt-ltd" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#2c3ed5;color:#fff;font-size:11px;">&#9733; GoodFirms</a>
                                    </div>
                                    <div class="tw-mb-3"><span style="color:#2c3ed5;font-size:18px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">
                                        "I have worked with Zalgo Infotech for several years and have been pleased with their services. Bhupendra (Vishu) is available 24/7 and provides rapid, effective assistance. Communication is clear and professional — he makes complex technical matters easy to understand. I highly recommend Zalgo Infotech for anyone seeking reliable, fast, and knowledgeable technical support."
                                    </p>
                                    <div class="tw-p-4 rounded-3 tw-mb-4" style="background:#eef0ff;border-left:3px solid #2c3ed5;">
                                        <p class="text-neutral-600 fst-italic" style="font-size:13px;margin:0;">"I'm pleased with the company's support, and my requests have always been handled in a timely manner."</p>
                                    </div>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-4"></span>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="text-neutral-500" style="font-size:12px;">Web Development &amp; Software Development</span>
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#2c3ed5;">
                                            <span class="text-white fw-bold tw-text-sm">5.0</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Clutch: Roland Thomas -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-4">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#ff4e27;width:44px;height:44px;min-width:44px;font-size:18px;">R</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">Roland Thomas</div>
                                                <div class="text-neutral-500" style="font-size:11px;">CEO, BIOAGE Inc.</div>
                                            </div>
                                        </div>
                                        <a href="https://clutch.co/profile/zalgo-infotech#reviews" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#ff4e27;color:#fff;font-size:11px;">&#9670; Clutch</a>
                                    </div>
                                    <div class="tw-mb-3"><span style="color:#ff4e27;font-size:18px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">
                                        "Zalgo Infotech PVT LTD's efforts have helped us achieve 100% uptime and top visibility on Google. The team delivers on time and communicates effectively. Their technical skills and 24/7 support are hallmarks of their work."
                                    </p>
                                    <div class="tw-p-4 rounded-3 tw-mb-4" style="background:#fff5f3;border-left:3px solid #ff4e27;">
                                        <p class="text-neutral-600 fst-italic" style="font-size:13px;margin:0;">"Great communication, suggestions for improvements, and 24/7 support are impressive."</p>
                                    </div>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-4"></span>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="text-neutral-500" style="font-size:12px;">Web Development &middot; Jan 2018 &ndash; Ongoing</span>
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#ff4e27;">
                                            <span class="text-white fw-bold tw-text-sm">5.0</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Clutch: Ryan Daniel -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-4">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#ff4e27;width:44px;height:44px;min-width:44px;font-size:18px;">R</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">Ryan Daniel</div>
                                                <div class="text-neutral-500" style="font-size:11px;">President, Molly-Mae</div>
                                            </div>
                                        </div>
                                        <a href="https://clutch.co/profile/zalgo-infotech#reviews" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#ff4e27;color:#fff;font-size:11px;">&#9670; Clutch</a>
                                    </div>
                                    <div class="tw-mb-3"><span style="color:#ff4e27;font-size:18px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">
                                        "Zalgo Infotech PVT LTD improved our website's design and delivered exactly what we asked for. The team led a timely process and handled requests quickly and professionally."
                                    </p>
                                    <div class="tw-p-4 rounded-3 tw-mb-4" style="background:#fff5f3;border-left:3px solid #ff4e27;">
                                        <p class="text-neutral-600 fst-italic" style="font-size:13px;margin:0;">"Bhupendra has been a wonderful help."</p>
                                    </div>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-4"></span>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="text-neutral-500" style="font-size:12px;">Web Development &middot; Jan 2019 &ndash; Apr 2026</span>
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#ff4e27;">
                                            <span class="text-white fw-bold tw-text-sm">5.0</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center tw-gap-4 tw-mt-8">
                        <button class="t-nav-btn clutch-prev" aria-label="Previous">&#8592;</button>
                        <div class="swiper-pagination t-pagination clutch-pagination"></div>
                        <button class="t-nav-btn clutch-next" aria-label="Next">&#8594;</button>
                    </div>
                </div>

                <!-- ── Upwork Reviews Slider ──────────────────────────────── -->
                <div class="tw-mb-14">
                    <div class="d-flex align-items-center flex-wrap tw-gap-3 tw-mb-8" data-aos="fade-up" data-aos-duration="600">
                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                           class="d-inline-flex align-items-center tw-gap-2 tw-px-4 tw-py-2 rounded-pill fw-semibold text-decoration-none"
                           style="background:#14a800;color:#fff;font-size:13px;">&#10003;&nbsp;Upwork Reviews</a>
                        <span class="text-neutral-500 fw-medium">10 Verified Reviews</span>
                    </div>

                    <div class="swiper testimonial-slider upwork-reviews-slider">
                        <div class="swiper-wrapper">

                            <!-- Upwork 1: Sahil B. -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-3">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#14a800;width:40px;height:40px;min-width:40px;font-size:16px;">S</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">Sahil B.</div>
                                                <div class="text-neutral-500" style="font-size:11px;">Jul 1, 2021</div>
                                            </div>
                                        </div>
                                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#14a800;color:#fff;font-size:11px;">&#10003; Upwork</a>
                                    </div>
                                    <div class="text-neutral-400 tw-mb-2" style="font-size:12px;">WordPress Designer for Medical Website</div>
                                    <div class="tw-mb-3"><span style="color:#14a800;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">"An excellent web designer who was very helpful and catered to all my requirements. Will definitely hire again."</p>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-3"></span>
                                    <div class="d-flex justify-content-end">
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#14a800;">
                                            <span class="text-white fw-bold tw-text-sm">5.0</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upwork 2: Matt J. -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-3">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#14a800;width:40px;height:40px;min-width:40px;font-size:16px;">M</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">Matt J.</div>
                                                <div class="text-neutral-500" style="font-size:11px;">Sep 7, 2019</div>
                                            </div>
                                        </div>
                                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#14a800;color:#fff;font-size:11px;">&#10003; Upwork</a>
                                    </div>
                                    <div class="text-neutral-400 tw-mb-2" style="font-size:12px;">WordPress Customization</div>
                                    <div class="tw-mb-3"><span style="color:#14a800;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">"That was very fast. Gave the task and completed in 15 mins. Awesome :)"</p>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-3"></span>
                                    <div class="d-flex justify-content-end">
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#14a800;">
                                            <span class="text-white fw-bold tw-text-sm">5.0</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upwork 3: Milissa W. -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-3">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#14a800;width:40px;height:40px;min-width:40px;font-size:16px;">M</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">Milissa W.</div>
                                                <div class="text-neutral-500" style="font-size:11px;">Jan 12, 2019</div>
                                            </div>
                                        </div>
                                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#14a800;color:#fff;font-size:11px;">&#10003; Upwork</a>
                                    </div>
                                    <div class="text-neutral-400 tw-mb-2" style="font-size:12px;">Redesign of Company Website</div>
                                    <div class="tw-mb-3"><span style="color:#14a800;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">"Took direction well and great communication. I will continue to use him in the future."</p>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-3"></span>
                                    <div class="d-flex justify-content-end">
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#14a800;">
                                            <span class="text-white fw-bold tw-text-sm">5.0</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upwork 4: Chris P. -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-3">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#14a800;width:40px;height:40px;min-width:40px;font-size:16px;">C</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">Chris P.</div>
                                                <div class="text-neutral-500" style="font-size:11px;">Jan 10, 2019</div>
                                            </div>
                                        </div>
                                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#14a800;color:#fff;font-size:11px;">&#10003; Upwork</a>
                                    </div>
                                    <div class="text-neutral-400 tw-mb-2" style="font-size:12px;">Responsive Web Designer &mdash; Small Task</div>
                                    <div class="tw-mb-3"><span style="color:#14a800;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">"Very good and very fast!"</p>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-3"></span>
                                    <div class="d-flex justify-content-end">
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#14a800;">
                                            <span class="text-white fw-bold tw-text-sm">5.0</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upwork 5: Kirk L. -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-3">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#14a800;width:40px;height:40px;min-width:40px;font-size:16px;">K</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">Kirk L.</div>
                                                <div class="text-neutral-500" style="font-size:11px;">Dec 19, 2018</div>
                                            </div>
                                        </div>
                                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#14a800;color:#fff;font-size:11px;">&#10003; Upwork</a>
                                    </div>
                                    <div class="text-neutral-400 tw-mb-2" style="font-size:12px;">WordPress Divi CSS Responsive Fix</div>
                                    <div class="tw-mb-3"><span style="color:#14a800;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">"Bhupendra did an excellent job of quickly fixing WordPress CSS issues."</p>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-3"></span>
                                    <div class="d-flex justify-content-end">
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#14a800;">
                                            <span class="text-white fw-bold tw-text-sm">4.9</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upwork 6: Ryan F. -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-3">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#14a800;width:40px;height:40px;min-width:40px;font-size:16px;">R</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">Ryan F.</div>
                                                <div class="text-neutral-500" style="font-size:11px;">May 22, 2018</div>
                                            </div>
                                        </div>
                                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#14a800;color:#fff;font-size:11px;">&#10003; Upwork</a>
                                    </div>
                                    <div class="text-neutral-400 tw-mb-2" style="font-size:12px;">CSS Expert &mdash; Visual Composer</div>
                                    <div class="tw-mb-3"><span style="color:#14a800;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">"Did a great job. Very efficient and pleasant to work with."</p>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-3"></span>
                                    <div class="d-flex justify-content-end">
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#14a800;">
                                            <span class="text-white fw-bold tw-text-sm">5.0</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upwork 7: WooCommerce Plugin -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-3">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#14a800;width:40px;height:40px;min-width:40px;font-size:16px;">C</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">Client</div>
                                                <div class="text-neutral-500" style="font-size:11px;">May 16, 2018</div>
                                            </div>
                                        </div>
                                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#14a800;color:#fff;font-size:11px;">&#10003; Upwork</a>
                                    </div>
                                    <div class="text-neutral-400 tw-mb-2" style="font-size:12px;">WordPress / WooCommerce Plugin Development</div>
                                    <div class="tw-mb-3"><span style="color:#14a800;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">"Highly recommended freelancer. Would use again without hesitation. Reliable and understood job well. Great communication and very quick to complete tasks."</p>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-3"></span>
                                    <div class="d-flex justify-content-end">
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#14a800;">
                                            <span class="text-white fw-bold tw-text-sm">5.0</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upwork 8: George A. -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-3">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#14a800;width:40px;height:40px;min-width:40px;font-size:16px;">G</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">George A.</div>
                                                <div class="text-neutral-500" style="font-size:11px;">May 3, 2018</div>
                                            </div>
                                        </div>
                                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#14a800;color:#fff;font-size:11px;">&#10003; Upwork</a>
                                    </div>
                                    <div class="text-neutral-400 tw-mb-2" style="font-size:12px;">WordPress Website Content Updating</div>
                                    <div class="tw-mb-3"><span style="color:#14a800;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">"Good work and fast response."</p>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-3"></span>
                                    <div class="d-flex justify-content-end">
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#14a800;">
                                            <span class="text-white fw-bold tw-text-sm">5.0</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upwork 9: Client 3.7 -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-3">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#9ca3af;width:40px;height:40px;min-width:40px;font-size:16px;">C</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">Client</div>
                                                <div class="text-neutral-500" style="font-size:11px;">Oct 17, 2017</div>
                                            </div>
                                        </div>
                                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#14a800;color:#fff;font-size:11px;">&#10003; Upwork</a>
                                    </div>
                                    <div class="text-neutral-400 tw-mb-2" style="font-size:12px;">WooCommerce Custom Functions</div>
                                    <div class="tw-mb-3"><span style="color:#f59e0b;font-size:16px;">&#9733;&#9733;&#9733;&#9734;&#9734;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">"While Bhupendra Parmar's tech skills are not bad, communicating with him was a challenge, which eventually resulted in delays and missed deadlines."</p>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-3"></span>
                                    <div class="d-flex justify-content-end">
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#9ca3af;">
                                            <span class="text-white fw-bold tw-text-sm">3.7</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upwork 10: ASP I. -->
                            <div class="swiper-slide">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                                    <div class="d-flex align-items-center justify-content-between tw-mb-3">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                                                 style="background:#14a800;width:40px;height:40px;min-width:40px;font-size:16px;">A</div>
                                            <div>
                                                <div class="fw-semibold text-heading" style="font-size:14px;line-height:1.3;">ASP I.</div>
                                                <div class="text-neutral-500" style="font-size:11px;">Sep 6, 2017</div>
                                            </div>
                                        </div>
                                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                                           class="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                                           style="background:#14a800;color:#fff;font-size:11px;">&#10003; Upwork</a>
                                    </div>
                                    <div class="text-neutral-400 tw-mb-2" style="font-size:12px;">Manual Bookmarking to 3000 Websites</div>
                                    <div class="tw-mb-3"><span style="color:#14a800;font-size:16px;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                                    <p class="text-neutral-500 tw-text-xl tw-mb-4">"Very communicative."</p>
                                    <span class="d-block tw-h-px bg-neutral-100 tw-my-3"></span>
                                    <div class="d-flex justify-content-end">
                                        <div class="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill" style="background:#14a800;">
                                            <span class="text-white fw-bold tw-text-sm">5.0</span>
                                            <span class="text-white d-flex"><img src="{{asset('assets/images/icons/star.svg')}}" alt="star" /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center tw-gap-4 tw-mt-8">
                        <button class="t-nav-btn upwork-prev" aria-label="Previous">&#8592;</button>
                        <div class="swiper-pagination t-pagination upwork-pagination"></div>
                        <button class="t-nav-btn upwork-next" aria-label="Next">&#8594;</button>
                    </div>
                </div>

                <!-- ── GoodFirms CTA ─────────────────────────────── -->
                <div class="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white tw-mb-14 animation-item" data-aos="fade-up" data-aos-duration="700">
                    <div class="d-flex align-items-center justify-content-between flex-wrap tw-gap-4">
                        <div class="d-flex align-items-center tw-gap-4">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"
                                 style="width:56px;height:56px;background:#2c3ed5;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="white">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                                </svg>
                            </div>
                            <div>
                                <h5 class="text-heading fw-bold tw-mb-1" style="font-size:16px;">Also Verified on GoodFirms</h5>
                                <p class="text-neutral-500 tw-mb-0" style="font-size:13px;">Explore our B2B profile and verified ratings &mdash; one of the world's most trusted research &amp; review platforms.</p>
                            </div>
                        </div>
                        <a href="https://www.goodfirms.co/company/zalgo-infotech-pvt-ltd" target="_blank" rel="noopener noreferrer"
                           class="d-inline-flex align-items-center tw-gap-2 tw-px-6 tw-py-3 rounded-pill fw-semibold text-white text-decoration-none flex-shrink-0"
                           style="background:#2c3ed5;font-size:13px;">
                            View on GoodFirms
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- ── Platform Badges ─────────────────────────────── -->
                <div class="tw-mt-8" data-aos="fade-up" data-aos-duration="900">
                    <p class="text-center text-neutral-500 fw-medium tw-mb-8">Read our verified reviews on</p>
                    <div class="d-flex align-items-center justify-content-center flex-wrap tw-gap-4">
                        <a href="https://clutch.co/profile/zalgo-infotech#reviews" target="_blank" rel="noopener noreferrer"
                           class="d-inline-flex align-items-center tw-gap-2 tw-px-6 tw-py-3 rounded-pill text-white fw-semibold text-decoration-none"
                           style="background:#ff4e27;box-shadow:0 4px 15px rgba(255,78,39,0.3);font-size:14px;">&#9670; Clutch</a>
                        <a href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1" target="_blank" rel="noopener noreferrer"
                           class="d-inline-flex align-items-center tw-gap-2 tw-px-6 tw-py-3 rounded-pill text-white fw-semibold text-decoration-none"
                           style="background:#14a800;box-shadow:0 4px 15px rgba(20,168,0,0.3);font-size:14px;">&#10003; Upwork</a>
                        <a href="https://www.goodfirms.co/company/zalgo-infotech-pvt-ltd" target="_blank" rel="noopener noreferrer"
                           class="d-inline-flex align-items-center tw-gap-2 tw-px-6 tw-py-3 rounded-pill text-white fw-semibold text-decoration-none"
                           style="background:#2c3ed5;box-shadow:0 4px 15px rgba(44,62,213,0.3);font-size:14px;">&#9733; GoodFirms</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- footer area -->
        @include('frontend.includes.footers.footerOne')
        <!-- footer area end -->
    </div>
@endsection

@section('script')
<script>
    new Swiper('.clutch-reviews-slider', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        pagination: { el: '.clutch-pagination', clickable: true },
        navigation: { nextEl: '.clutch-next', prevEl: '.clutch-prev' },
        breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 20 },
            1024: { slidesPerView: 3, spaceBetween: 24 }
        }
    });

    new Swiper('.upwork-reviews-slider', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        pagination: { el: '.upwork-pagination', clickable: true },
        navigation: { nextEl: '.upwork-next', prevEl: '.upwork-prev' },
        breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 20 },
            1024: { slidesPerView: 3, spaceBetween: 24 }
        }
    });
</script>
@endsection
