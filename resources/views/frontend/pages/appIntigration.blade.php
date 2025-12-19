@extends('frontend.layouts.app')
@section('title', 'App Intigration')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">
        <!-- Distraction page start -->
        <section class="tw-pt-224-px section-bg-two pb-120">
            <div class="container max-w-1290-px">
                <div class="position-relative distraction__inner">
                    <div
                        class="max-w-602-px w-100 text-center mx-auto position-absolute z-1 tw-start-50 translate-middle-x top-0 mt-5 pt-lg-5 pt-4">
                        <h3 class="splitTextStyleOne text-heading h1 text-capitalize text-capitalize">
                            App Integration
                        </h3>
                        <p class="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">
                            Create tasks with various custom statuses to
                            focus more on your keep track of the
                            progress of each why
                        </p>
                    </div>

                    <div class="">
                        <img src="{{asset('assets/images/shapes/net-shape.png')}}" alt="Net Shape" data-aos="zoom-in"
                            data-aos-duration="1500" />
                    </div>
                    <div class="">
                        <div class="distraction-icon one position-absolute z-1 animation-scalation">
                            <img src="{{asset('assets/images/thumbs/distraction-icon1.png')}}" alt="Icon Image" />
                        </div>
                        <div class="distraction-icon two position-absolute z-1 animation-upDown">
                            <img src="{{asset('assets/images/thumbs/distraction-icon2.png')}}" alt="Icon Image" />
                        </div>
                        <div class="distraction-icon three position-absolute z-1 animation-upDown animation-delay-1">
                            <img src="{{asset('assets/images/thumbs/distraction-icon3.png')}}" alt="Icon Image" />
                        </div>
                        <div class="distraction-icon four position-absolute z-1 animation-upDown animation-delay-2">
                            <img src="{{asset('assets/images/thumbs/distraction-icon4.png')}}" alt="Icon Image" />
                        </div>
                        <div class="distraction-icon five position-absolute z-1 animation-scalation animation-delay-1">
                            <img src="{{asset('assets/images/thumbs/distraction-icon5.png')}}" alt="Icon Image" />
                        </div>
                        <div class="distraction-icon six position-absolute z-1 animation-scalation animation-delay-2">
                            <img src="{{asset('assets/images/thumbs/distraction-icon6.png')}}" alt="Icon Image" />
                        </div>
                        <div class="distraction-icon seven position-absolute z-1">
                            <img src="{{asset('assets/images/thumbs/distraction-icon7.png')}}" alt="Icon Image" class="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Distraction page End -->

        <!-- seamless integration section Start -->
        <section class="seamless-integration py-120">
            <div class="container max-w-1400-px">
                <div class="max-w-672-px text-center mx-auto tw-mb-12">
                    <h3 class="splitTextStyleOne text-heading text-capitalize">
                        Seamless Integration for enhancing experience
                    </h3>
                    <p class="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">
                        Create tasks with various custom statuses
                        tofocus more on your keep track of the progress
                        of each why in
                    </p>
                </div>

                <div class="border border-neutral-200 tw-rounded-xl common-shadow-sixteen">
                    <div class="row col-border-wrapper">
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon1.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Hubspot Contacts Sync
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon2.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Spotify Online Platform
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon3.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Dropbox Streaming
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon4.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Google Photos Social Medea
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon5.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Zapier Social Media
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon6.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Slack Contacts Sync
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon7.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Shopify Contacts Sync
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8">
                                    <img src="{{asset('assets/images/icons/seamless-icon8.png')}}" alt="Icon" />
                                </span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">
                                    Github integration
                                </h6>
                                <p class="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                                    Build online communities with
                                    effective audience communication
                                    with various track
                                </p>
                                <a href="{{route('intigration.details')}}"
                                    class="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline">
                                    See integration
                                    <i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- seamless integration section End -->

        <!-- Counter Up section Start -->
        <section class="section-bg-two py-120">
            <div class="container">
                <div class="max-w-780-px text-center mx-auto tw-mb-13">
                    <div class="bg-white tw-py-2 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                        <div class="text-gradient-teal">
                            what we offering
                        </div>
                    </div>
                    <h3 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
                        Trusted by
                        <span class="font-dm-serif fst-italic text-gradient-teal">3+ million
                        </span>
                        website owners worldwide
                    </h3>
                </div>

                <div
                    class="border-top border-bottom d-flex align-items-center justify-content-between flex-sm-nowrap flex-wrap tw-gap-148-px">
                    <div
                        class="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
                        <h2 class="h1">
                            <span class="counter">282</span><span class="">+</span>
                        </h2>
                        <span class="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
                    </div>

                    <div class="d-flex">
                        <div class="tw-w-1-px h-100 bg-neutral-200"></div>
                    </div>

                    <div
                        class="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
                        <h2 class="h1">
                            <span class="counter">95</span><span class="">%</span>
                        </h2>
                        <span class="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
                    </div>

                    <div class="d-flex">
                        <div class="tw-w-1-px h-100 bg-neutral-200"></div>
                    </div>

                    <div
                        class="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
                        <h2 class="h1">
                            <span class="counter">282</span><span class="">+</span>
                        </h2>
                        <span class="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter Up section End -->

        <!-- Driven section Start -->
        <section class="py-120">
            <div class="container">
                <div class="">
                    <img src="{{asset('assets/images/thumbs/driven-img.png')}}" alt="Thumb" />
                    <div class="max-w-780-px text-center mx-auto tw-mb-13">
                        <h3 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
                            Driven your business today next level by
                            sasstech
                        </h3>
                        <div class="d-flex align-items-center tw-gap-4 justify-content-center tw-mt-10">
                            <a href="{{route('register')}}"
                                class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn btn-main hover-style-one"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label">get started trial</span>
                            </a>
                            <a href="{{route('register')}}"
                                class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                                data-block="button">
                                <span class="button__flair"></span>
                                <span class="button__label">see pricing plan</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Driven section End -->

        <!-- Faq Two Section Start -->
        <section class="faq-two py-120">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="">
                            <div class="bg-neutral-100 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <span class="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                                Up to
                                <span class="text-yellow">70%</span> off
                                managed cloud hosting
                            </div>
                            <h3 class="splitTextStyleOne text-heading text-capitalize">
                                Frequently ask
                                <span class="font-dm-serif fst-italic fw-normal">Questions</span>
                            </h3>
                            <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-350-px fw-medium">
                                Create tasks with various custom
                                statuses to focus more on your keep
                                track of the progress of each why in
                            </p>

                            <div class="tw-mt-9" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="900">
                                <a href="{{route('register')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">get started trial</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ps-xl-5">
                            <div class="accordion common-accordion style-two arrow-bg-orange" id="accordionExample">
                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5
                                        class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button
                                            class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            What is Sassly?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                                GoDaddy offers more than
                                                just a platform to build
                                                your website, we offer
                                                everything you need to
                                                create an effective,
                                                memorable online
                                                presence. Already have a
                                                site? We offer hosting
                                                plans that will keep it
                                                fast, secure and online.
                                                Our professional
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5
                                        class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Why should I choose Sassly?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                                GoDaddy offers more than
                                                just a platform to build
                                                your website, we offer
                                                everything you need to
                                                create an effective,
                                                memorable online
                                                presence. Already have a
                                                site? We offer hosting
                                                plans that will keep it
                                                fast, secure and online.
                                                Our professional
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5
                                        class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button
                                            class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Can I upgrade to a different
                                            plan at a later time?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                                GoDaddy offers more than
                                                just a platform to build
                                                your website, we offer
                                                everything you need to
                                                create an effective,
                                                memorable online
                                                presence. Already have a
                                                site? We offer hosting
                                                plans that will keep it
                                                fast, secure and online.
                                                Our professional
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5
                                        class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button
                                            class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            What’s the cost of
                                            additional users?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                                GoDaddy offers more than
                                                just a platform to build
                                                your website, we offer
                                                everything you need to
                                                create an effective,
                                                memorable online
                                                presence. Already have a
                                                site? We offer hosting
                                                plans that will keep it
                                                fast, secure and online.
                                                Our professional
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5
                                        class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button
                                            class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            What’s the commitment?
                                        </button>
                                    </h5>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                                GoDaddy offers more than
                                                just a platform to build
                                                your website, we offer
                                                everything you need to
                                                create an effective,
                                                memorable online
                                                presence. Already have a
                                                site? We offer hosting
                                                plans that will keep it
                                                fast, secure and online.
                                                Our professional
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <h5
                                        class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                        <button
                                            class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            What languages does Sassly
                                            AI support?
                                        </button>
                                    </h5>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                            <p class="text-neutral-500">
                                                GoDaddy offers more than
                                                just a platform to build
                                                your website, we offer
                                                everything you need to
                                                create an effective,
                                                memorable online
                                                presence. Already have a
                                                site? We offer hosting
                                                plans that will keep it
                                                fast, secure and online.
                                                Our professional
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq Two Section End -->

        <!-- Task Management Section Start -->
        <section class="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half">
            <div class="container">
                <div class="text-end tw--mb-40-px position-relative z-2">
                    <img src="{{asset('assets/images/thumbs/laptop-man.png')}}" alt="Image" class="tw-me-84-px" />
                </div>

                <div class="bg-green-deep tw-rounded-3xl bg-green-deep tw-pt-100-px position-relative z-1">
                    <img src="{{asset('assets/images/shapes/hill-shape.png')}}" alt="Hill Shape"
                        class="position-absolute w-100 h-100 top-0 tw-start-0 z-n1" />
                    <img src="{{asset('assets/images/thumbs/task-management-img.png')}}" alt="Image"
                        class="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none" />

                    <div class="tw-mb-8 text-center max-w-570-px mx-auto">
                        <div class="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                Up to
                                <span class="text-yellow text-stroke-yellow">70%</span>
                                off managed cloud hosting
                            </div>
                        </div>
                        <h3 class="splitTextStyleOne text-white">
                            Ready to revolutionize our service?
                        </h3>

                        <div class="d-none">
                            <a href="javascript:void(0)"
                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold tw-mt-7"
                                data-block="button">
                                <span class="button__flair"></span>
                                <div class="d-flex align-items-center tw-gap-2 z-1">
                                    <span class="button__label">Download for free</span>
                                </div>
                            </a>
                        </div>
                        <div class="d-block">
                            <div class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                                <a href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Get Started Trial</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Get Started Trial</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tw-pt-8 text-center">
                        <div
                            class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">Project
                                management</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Technology</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Technology</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill">Project
                                management</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Technology</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Technology</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Project
                                management</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Technology</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Project
                                management</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill">Technology</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Task Management Section End -->

        <!-- footer area -->
        @include('frontend.includes.footers.footerThree')
        <!-- footer area end -->
    </div>
</div>

@endsection
