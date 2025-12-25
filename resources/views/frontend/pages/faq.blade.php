@extends('frontend.layouts.app')
@section('title', 'Wishlist')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">
                <!-- Integrated apps start -->
                <section
                    class="tw-pt-224-px section-bg-two pb-120 overflow-hidden"
                >
                    <div class="container max-w-1290-px">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="text-center">
                                    <h3 class="tw-mb-6">
                                        Hello, what can we help you find?
                                    </h3>
                                    <p class="fw-medium text-neutral-500">
                                        Docly is a fully featured knowledge base
                                        theme for WordPress.
                                    </p>
                                    <form
                                        action="#"
                                        class="position-relative tw-mt-11"
                                    >
                                        <input
                                            type="text"
                                            class="tw-px-10 tw-py-705 bg-white rounded-pill border-transparent focus-border-main-600 focus-outline-0 w-100 tw-pe-200-px common-shadow-seventeen"
                                            placeholder="Search What You Want To Know"
                                        />
                                        <button
                                            type="submit"
                                            class="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-2 group active--translate-y-2 fw-semibold flex-shrink-0 tw-py-6 tw-px-12 rounded-pill position-sm-in-box"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <span
                                                class="text-white tw-text-sm tw-rounded d-flex justify-content-center align-items-center position-relative group-hover-text-main-600 tw-duration-500"
                                            >
                                                <i
                                                    class="ph-bold ph-magnifying-glass"
                                                ></i>
                                            </span>
                                            <span class="button__label"
                                                >Search</span
                                            >
                                        </button>
                                    </form>

                                    <div
                                        class="d-inline-flex align-items-center tw-gap-6 tw-mt-8 flex-wrap"
                                    >
                                        <span
                                            class="fw-semibold tw-text-lg text-heading"
                                            >Popular:</span
                                        >
                                        <div
                                            class="d-inline-flex align-items-center tw-gap-4 flex-wrap"
                                        >
                                            <button
                                                type="button"
                                                class="tw-px-405 tw-py-105 bg-white tw-rounded-md text-neutral-500 tw-text-sm bg-white common-shadow-eighteen hover-bg-main-600 hover-text-white tw-transition tw-duration-200 fw-medium"
                                            >
                                                Coding
                                            </button>
                                            <button
                                                type="button"
                                                class="tw-px-405 tw-py-105 bg-white tw-rounded-md text-neutral-500 tw-text-sm bg-white common-shadow-eighteen hover-bg-main-600 hover-text-white tw-transition tw-duration-200 fw-medium"
                                            >
                                                Traveling
                                            </button>
                                            <button
                                                type="button"
                                                class="tw-px-405 tw-py-105 bg-white tw-rounded-md text-neutral-500 tw-text-sm bg-white common-shadow-eighteen hover-bg-main-600 hover-text-white tw-transition tw-duration-200 fw-medium"
                                            >
                                                aeroplane
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Integrated apps End -->

                <!-- Faq Two Section Start -->
                <section class="faq-two py-120">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <div class="">
                                    <h3
                                        class="splitTextStyleOne text-heading text-capitalize"
                                    >
                                        Frequently ask
                                        <span
                                            class="font-dm-serif fst-italic fw-normal"
                                            >Questions</span
                                        >
                                    </h3>
                                    <p
                                        class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-500-px tw-leading-212 fw-medium"
                                    >
                                        Create tasks with various custom
                                        statuses to focus more on your keep
                                        track of the progress of each why in
                                    </p>

                                    <div
                                        class="tw-mt-9"
                                        data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="900"
                                    >
                                        <a
                                            href="{{route('register')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <span class="button__label"
                                                >Contact Us</span
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ps-xl-5">
                                    <div
                                        class="accordion common-accordion style-two arrow-bg-orange"
                                        id="accordionExample"
                                    >
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo"
                                                    aria-expanded="false"
                                                    aria-controls="collapseTwo"
                                                >
                                                    What is Sassly?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseTwo"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne"
                                                >
                                                    Why should I choose Sassly?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseOne"
                                                class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree"
                                                >
                                                    Can I upgrade to a different
                                                    plan at a later time?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseThree"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour"
                                                    aria-expanded="false"
                                                    aria-controls="collapseFour"
                                                >
                                                    What’s the cost of
                                                    additional users?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseFour"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFive"
                                                    aria-expanded="false"
                                                    aria-controls="collapseFive"
                                                >
                                                    What’s the commitment?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseFive"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSix"
                                                    aria-expanded="false"
                                                    aria-controls="collapseSix"
                                                >
                                                    What languages does Sassly
                                                    AI support?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseSix"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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

                <!-- Faq Section Start -->
                <section class="pb-120">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-5">
                                <div class="">
                                    <h3
                                        class="splitTextStyleOne text-heading text-capitalize"
                                    >
                                        Navigating the Digital Marketing
                                        Landscape FAQs Unveiled
                                    </h3>
                                    <p
                                        class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-500-px tw-leading-212 fw-medium"
                                    >
                                        Sed ut perspiciatis unde omnis iste
                                        natus voluptatem accusantium doloremque
                                        laudantium totamto aperiame eaque ipsa
                                        quae ab illo inventore veritatis
                                    </p>

                                    <div
                                        class="tw-mt-9"
                                        data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="900"
                                    >
                                        <a
                                            href="{{route('register')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main hover-style-one"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <span class="button__label"
                                                >get started trial</span
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="ps-xl-5">
                                    <div
                                        class="accordion common-accordion style-two style-two-three arrow-bg-orange"
                                        id="accordionExampleTwo"
                                    >
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwoTwo"
                                                    aria-expanded="false"
                                                    aria-controls="collapseTwoTwo"
                                                >
                                                    What is Sassly?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseTwoTwo"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleTwo"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOneTwo"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOneTwo"
                                                >
                                                    Why should I choose Sassly?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseOneTwo"
                                                class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionExampleTwo"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThreeTwo"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThreeTwo"
                                                >
                                                    Can I upgrade to a different
                                                    plan at a later time?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseThreeTwo"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleTwo"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFourTwo"
                                                    aria-expanded="false"
                                                    aria-controls="collapseFourTwo"
                                                >
                                                    What’s the cost of
                                                    additional users?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseFourTwo"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleTwo"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFiveTwo"
                                                    aria-expanded="false"
                                                    aria-controls="collapseFiveTwo"
                                                >
                                                    What’s the commitment?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseFiveTwo"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleTwo"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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
                                        <div
                                            class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                            data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800"
                                        >
                                            <h5
                                                class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                            >
                                                <button
                                                    class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSixTwo"
                                                    aria-expanded="false"
                                                    aria-controls="collapseSixTwo"
                                                >
                                                    What languages does Sassly
                                                    AI support?
                                                </button>
                                            </h5>
                                            <div
                                                id="collapseSixTwo"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleTwo"
                                            >
                                                <div
                                                    class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                >
                                                    <p
                                                        class="text-neutral-500 tw-leading-212"
                                                    >
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
                <!-- Faq Section End -->

                <!-- Task Management Section Start -->
                <section
                    class="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half"
                >
                    <div class="container">
                        <div
                            class="text-end tw--mb-40-px position-relative z-2"
                        >
                            <img
                                src="{{asset('assets/images/thumbs/laptop-man.png')}}"
                                alt="Image"
                                class="tw-me-84-px"
                            />
                        </div>

                        <div
                            class="bg-green-deep tw-rounded-3xl bg-green-deep tw-pt-100-px position-relative z-1"
                        >
                            <img
                                src="{{asset('assets/images/shapes/hill-shape.png')}}"
                                alt="Hill Shape"
                                class="position-absolute w-100 h-100 top-0 tw-start-0 z-n1"
                            />
                            <img
                                src="{{asset('assets/images/thumbs/task-management-img.png')}}"
                                alt="Image"
                                class="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none"
                            />

                            <div
                                class="tw-mb-8 text-center max-w-570-px mx-auto"
                            >
                                <div
                                    class="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13"
                                    data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="600"
                                >
                                    <div class="">
                                        Up to
                                        <span
                                            class="text-yellow text-stroke-yellow"
                                            >70%</span
                                        >
                                        off managed cloud hosting
                                    </div>
                                </div>
                                <h3 class="splitTextStyleOne text-white">
                                    Ready to revolutionize our service?
                                </h3>

                                <div class="d-none">
                                    <a
                                        href="javascript:void(0)"
                                        class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold tw-mt-7"
                                        data-block="button"
                                    >
                                        <span class="button__flair"></span>
                                        <div
                                            class="d-flex align-items-center tw-gap-2 z-1"
                                        >
                                            <span class="button__label"
                                                >Download for free</span
                                            >
                                        </div>
                                    </a>
                                </div>
                                <div class="d-block">
                                    <div
                                        class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap"
                                    >
                                        <a
                                            href="javascript:void(0)"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <div
                                                class="d-flex align-items-center tw-gap-2 z-1"
                                            >
                                                <span class="button__label"
                                                    >Get Started Trial</span
                                                >
                                            </div>
                                        </a>
                                        <a
                                            href="javascript:void(0)"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <div
                                                class="d-flex align-items-center tw-gap-2 z-1"
                                            >
                                                <span class="button__label"
                                                    >Get Started Trial</span
                                                >
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-pt-8 text-center">
                                <div
                                    class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6"
                                >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill"
                                        >Project management</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill"
                                        >Technology</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                        >Technology</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill"
                                        >Project management</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill"
                                        >Technology</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                        >Technology</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill"
                                        >Project management</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                        >Technology</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill"
                                        >Project management</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill"
                                        >Technology</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Task Management Section End -->

                <!-- footer area -->
                @include('frontend.includes.footers.footerOne')
                <!-- footer area end -->
            </div>
        </div>

@endsection
