@extends('frontend.layouts.app')
@section('title', 'Blog')

@section('content')
@include('frontend.includes.headers.headerOne')
<style>
.tabs {

}    
.tab-menu {
    display: flex;
    gap: 20px;
    justify-content: center;
}
.tab-link {
    background: none;
    border: none;
    font-size: 20px;
    cursor: pointer;
    padding: 10px 30px;
    color: #006d75;
    font-weight: 500;
    position: relative;
 }
/* .tab-link:after {
    content: "";
    position: absolute;
    right: 0;
    height: 80%;
    width: 2px;
    background: #fff;
    top: 10%;
} */
.tab-link:first-child {
    border-left: 0;
}
.tab-link:hover,
.tab-link.active{
   color:#fff;
   background-color:#006d75;
   border-radius:10px;
}

.tab-content{
    display:none;
    padding:60px 20px 0;
}

.tab-content.active{
display:block;
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
                <h1 class="mb-0 splitTextStyleOne text-capitalize">Case Study</h1>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->


<div class="tabs pt-120 pb-120">

  <div class="tab-menu container">
    <div class="row">
        <div class="col-12 d-flex gap-2">
            <button class="tab-link bg-white common-shadow-eighteen d-flex fw-medium gap-2 hover-bg-main-600 hover-text-white p-3 tab-btn text-neutral-500 tw-duration-200 tw-px-405 tw-py-105 tw-rounded-md tw-text-md tw-transition  active" data-tab="tab1">WordPress</button>
            <button class="tab-link bg-white common-shadow-eighteen d-flex fw-medium gap-2 hover-bg-main-600 hover-text-white p-3 tab-btn text-neutral-500 tw-duration-200 tw-px-405 tw-py-105 tw-rounded-md tw-text-md tw-transition" data-tab="tab2">Laravel</button>
            <button class="tab-link bg-white common-shadow-eighteen d-flex fw-medium gap-2 hover-bg-main-600 hover-text-white p-3 tab-btn text-neutral-500 tw-duration-200 tw-px-405 tw-py-105 tw-rounded-md tw-text-md tw-transition" data-tab="tab3">NodeJS</button>
            <button class="tab-link bg-white common-shadow-eighteen d-flex fw-medium gap-2 hover-bg-main-600 hover-text-white p-3 tab-btn text-neutral-500 tw-duration-200 tw-px-405 tw-py-105 tw-rounded-md tw-text-md tw-transition" data-tab="tab4">ReactJS</button>
        </div>
    </div>
  </div>

  <div class="tab-content active" id="tab1">
      <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/case-study/bioage-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">Roland Thomas</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                       <i class="ph-bold ph-shopping-bag"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">E-commerce</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">6+ Years Engagement</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('bioage') }}" class="splitTextStyleOne">
                                    BIOAGE — Scaling a 7-Figure E-commerce Brand
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Long-Term Strategic Tech Partner</h6> 
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                    BIOAGE is a high-performing e-commerce brand generating 7-figure monthly revenue. 
                                    For over 6 years, we have managed end-to-end technology, performance 
                                    optimization, security, marketing integration, and continuous platform growth.

                            </p>
                            
                            <h4 class="pb-3">Tech Stack:</h4>
                            WordPress, WooCommerce, SiteGround, Sucuri, Payment Gateways



                            <a href="{{ route('bioage') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/case-study/experthe-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                       <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">Milissa</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-shopping-bag"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">E-commerce</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">4+ Years Engagement</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    Expert Heavy Equipment – Website Redesign & Security Enhancement
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                Expert Heavy Equipment is a trusted business in the heavy equipment industry, serving customers 
                                who require reliable machinery and professional service. The client needed a strong, secure 
                                online presence to represent their brand and support long-term growth.
                            </p>

                            <h4 class="pb-3">Tech Stack:</h4>
                            WordPress, WooCommerce, Twilio, Wordfence

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img1.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Mehedii .H</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-chats-circle"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Comments (03)</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">3 min Read</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    The whimsically named Egg Canvas branch
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img1.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Mehedii .H</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-chats-circle"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Comments (03)</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">3 min Read</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    The whimsically named Egg Canvas branch
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="tab-content" id="tab2">
      <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/case-study/bioage-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">Roland Thomas</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                       <i class="ph-bold ph-shopping-bag"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">E-commerce</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">6+ Years Engagement</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('bioage') }}" class="splitTextStyleOne">
                                    BIOAGE — Scaling a 7-Figure E-commerce Brand
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Long-Term Strategic Tech Partner</h6> 
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                    BIOAGE is a high-performing e-commerce brand generating 7-figure monthly revenue. 
                                    For over 6 years, we have managed end-to-end technology, performance 
                                    optimization, security, marketing integration, and continuous platform growth.

                            </p>
                            
                            <h4 class="pb-3">Tech Stack:</h4>
                            WordPress, WooCommerce, SiteGround, Sucuri, Payment Gateways



                            <a href="{{ route('bioage') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/case-study/experthe-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                       <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">Milissa</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-shopping-bag"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">E-commerce</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">4+ Years Engagement</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    Expert Heavy Equipment – Website Redesign & Security Enhancement
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                Expert Heavy Equipment is a trusted business in the heavy equipment industry, serving customers 
                                who require reliable machinery and professional service. The client needed a strong, secure 
                                online presence to represent their brand and support long-term growth.
                            </p>

                            <h4 class="pb-3">Tech Stack:</h4>
                            WordPress, WooCommerce, Twilio, Wordfence

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img1.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Mehedii .H</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-chats-circle"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Comments (03)</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">3 min Read</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    The whimsically named Egg Canvas branch
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img1.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Mehedii .H</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-chats-circle"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Comments (03)</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">3 min Read</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    The whimsically named Egg Canvas branch
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="tab-content" id="tab3">
      <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/case-study/bioage-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">Roland Thomas</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                       <i class="ph-bold ph-shopping-bag"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">E-commerce</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">6+ Years Engagement</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('bioage') }}" class="splitTextStyleOne">
                                    BIOAGE — Scaling a 7-Figure E-commerce Brand
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Long-Term Strategic Tech Partner</h6> 
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                    BIOAGE is a high-performing e-commerce brand generating 7-figure monthly revenue. 
                                    For over 6 years, we have managed end-to-end technology, performance 
                                    optimization, security, marketing integration, and continuous platform growth.

                            </p>
                            
                            <h4 class="pb-3">Tech Stack:</h4>
                            WordPress, WooCommerce, SiteGround, Sucuri, Payment Gateways



                            <a href="{{ route('bioage') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/case-study/experthe-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                       <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">Milissa</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-shopping-bag"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">E-commerce</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">4+ Years Engagement</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    Expert Heavy Equipment – Website Redesign & Security Enhancement
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                Expert Heavy Equipment is a trusted business in the heavy equipment industry, serving customers 
                                who require reliable machinery and professional service. The client needed a strong, secure 
                                online presence to represent their brand and support long-term growth.
                            </p>

                            <h4 class="pb-3">Tech Stack:</h4>
                            WordPress, WooCommerce, Twilio, Wordfence

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img1.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Mehedii .H</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-chats-circle"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Comments (03)</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">3 min Read</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    The whimsically named Egg Canvas branch
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img1.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Mehedii .H</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-chats-circle"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Comments (03)</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">3 min Read</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    The whimsically named Egg Canvas branch
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="tab-content" id="tab4">
      <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/case-study/bioage-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">Roland Thomas</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                       <i class="ph-bold ph-shopping-bag"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">E-commerce</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">6+ Years Engagement</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('bioage') }}" class="splitTextStyleOne">
                                    BIOAGE — Scaling a 7-Figure E-commerce Brand
                                </a>
                            </h4>
                            <h6 class="pb-2">✓ Long-Term Strategic Tech Partner</h6> 
                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                    BIOAGE is a high-performing e-commerce brand generating 7-figure monthly revenue. 
                                    For over 6 years, we have managed end-to-end technology, performance 
                                    optimization, security, marketing integration, and continuous platform growth.

                            </p>
                            
                            <h4 class="pb-3">Tech Stack:</h4>
                            WordPress, WooCommerce, SiteGround, Sucuri, Payment Gateways



                            <a href="{{ route('bioage') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                View Case Study
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/case-study/experthe-case-study.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                       <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">Milissa</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-shopping-bag"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">E-commerce</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-lg">4+ Years Engagement</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    Expert Heavy Equipment – Website Redesign & Security Enhancement
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                Expert Heavy Equipment is a trusted business in the heavy equipment industry, serving customers 
                                who require reliable machinery and professional service. The client needed a strong, secure 
                                online presence to represent their brand and support long-term growth.
                            </p>

                            <h4 class="pb-3">Tech Stack:</h4>
                            WordPress, WooCommerce, Twilio, Wordfence

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img1.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Mehedii .H</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-chats-circle"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Comments (03)</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">3 min Read</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    The whimsically named Egg Canvas branch
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column tw-gap-15">
                    <div class="d-flex gap-5 case-study-item flex-column" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img1.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                            <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-user"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Mehedii .H</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph-bold ph-chats-circle"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">Comments (03)</span>
                                </div>

                                <span class="tw-w-205 border border-neutral-200"></span>

                                <div class="d-flex align-items-center tw-gap-2">
                                    <span class="text-main-600 tw-text-lg">
                                        <i class="ph ph-clock"></i>
                                    </span>
                                    <span class="text-neutral-600 tw-text-sm">3 min Read</span>
                                </div>

                            </div>

                            <h4 class="tw-mb-4">
                                <a href="{{ route('blog.details') }}" class="splitTextStyleOne">
                                    The whimsically named Egg Canvas branch
                                </a>
                            </h4>

                            <p class="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">
                                There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>

                            <a href="{{ route('blog.details') }}"
                               class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                Read More
                                <span>
                                    <img src="{{ asset('assets/images/icons/arrow-long.svg') }}" alt="arrow"/>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

</div>

@include('frontend.includes.footers.footerOne')

</div>

@endsection
