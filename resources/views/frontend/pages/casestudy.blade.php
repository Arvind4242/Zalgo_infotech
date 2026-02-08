@extends('frontend.layouts.app')
@section('title', 'Blog')

@section('content')

@include('frontend.includes.headers.headerOne')

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


<!-- Blog Start -->
<section class="py-120">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="d-flex flex-column tw-gap-15">

                    <div class="d-flex gap-5 case-study-item" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img1.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white mt-120 p-5 rounded-5 shadow-lg case-study-item-right">
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

                            <p class="tw-text-lg text-neutral-600 max-w-730-px splitTextStyleOne">
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

                    <div class="d-flex gap-5 case-study-item" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img2.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white mt-120 p-5 rounded-5 shadow-lg case-study-item-right">
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

                            <p class="tw-text-lg text-neutral-600 max-w-730-px splitTextStyleOne">
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

                    <div class="d-flex gap-5 case-study-item" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img3.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white mt-120 p-5 rounded-5 shadow-lg case-study-item-right">
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

                            <p class="tw-text-lg text-neutral-600 max-w-730-px splitTextStyleOne">
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

                    <div class="d-flex gap-5 case-study-item" data-aos="fade-up" data-aos-duration="800">

                        <div class="position-relative case-study-item-left">
                            <a href="{{ route('blog.details') }}" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
                                <img src="{{ asset('assets/images/thumbs/blog-page-img1.png') }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                     alt="blog"/>
                            </a>
                        </div>

                        <div class="bg-white mt-120 p-5 rounded-5 shadow-lg case-study-item-right">
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

                            <p class="tw-text-lg text-neutral-600 max-w-730-px splitTextStyleOne">
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
</section>
<!-- Blog End -->


@include('frontend.includes.footers.footerOne')

</div>

@endsection
