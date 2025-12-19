@extends('frontend.layouts.app')
@section('title', 'Shop Details')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">
                <!-- Breadcrumb Start Here -->
                <section class="breadcrumb section-bg-two mb-0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center">
                                    <span class="tw-mb-4">
                                        <img
                                            src="{{asset('assets/images/logo/favicon-two.png')}}"
                                            alt="Favicon Two"
                                        />
                                    </span>
                                    <h1
                                        class="mb-0 splitTextStyleOne text-capitalize"
                                    >
                                        shop Details
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->

                <!-- Shop Details Start -->
                <section class="bg-white py-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-11">
                                <div class="row gy-5">
                                    <div class="col-lg-6 pe-xxl-5">
                                        <div class="swiper shop-thumbs">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div
                                                        class="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/shop-details-thumb1.png')}}"
                                                            alt="Thumb"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div
                                                        class="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/shop-details-thumb2.png')}}"
                                                            alt="Thumb"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div
                                                        class="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/shop-details-thumb3.png')}}"
                                                            alt="Thumb"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div
                                                        class="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/shop-details-thumb4.png')}}"
                                                            alt="Thumb"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div
                                                        class="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/shop-details-thumb5.png')}}"
                                                            alt="Thumb"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="swiper shop-small-thumbs tw-mt-8"
                                        >
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide h-100">
                                                    <div
                                                        class="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden tw-h-92-px"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/shop-details-small-thumb1.png')}}"
                                                            alt="Small Thumb"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide h-100">
                                                    <div
                                                        class="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden tw-h-92-px"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/shop-details-small-thumb2.png')}}"
                                                            alt="Small Thumb"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide h-100">
                                                    <div
                                                        class="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden tw-h-92-px"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/shop-details-small-thumb3.png')}}"
                                                            alt="Small Thumb"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide h-100">
                                                    <div
                                                        class="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden tw-h-92-px"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/shop-details-small-thumb4.png')}}"
                                                            alt="Small Thumb"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide h-100">
                                                    <div
                                                        class="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden tw-h-92-px"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/shop-details-small-thumb5.png')}}"
                                                            alt="Small Thumb"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="ps-lg-5">
                                            <div
                                                class="d-flex align-items-center tw-gap-5 tw-mb-3"
                                            >
                                                <span
                                                    class="bg-danger text-white tw-px-2 tw-py-05 tw-text-sm fw-bold tw-rounded"
                                                    >-5%</span
                                                >
                                                <div
                                                    class="d-flex align-items-center tw-gap-2"
                                                >
                                                    <ul
                                                        class="d-flex align-items-center tw-gap-1"
                                                    >
                                                        <li
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                        >
                                                            <i
                                                                class="ph-fill ph-star"
                                                            ></i>
                                                        </li>
                                                        <li
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                        >
                                                            <i
                                                                class="ph-fill ph-star"
                                                            ></i>
                                                        </li>
                                                        <li
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                        >
                                                            <i
                                                                class="ph-fill ph-star"
                                                            ></i>
                                                        </li>
                                                        <li
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                        >
                                                            <i
                                                                class="ph-fill ph-star"
                                                            ></i>
                                                        </li>
                                                        <li
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                        >
                                                            <i
                                                                class="ph-fill ph-star"
                                                            ></i>
                                                        </li>
                                                    </ul>
                                                    <span
                                                        class="text-neutral-600 fw-medium"
                                                        >( 2 Reviews )</span
                                                    >
                                                </div>
                                            </div>
                                            <h3
                                                class="tw-mb-4 text-44-px splitTextStyleOne"
                                            >
                                                Smart Wirless Headphone
                                            </h3>
                                            <p
                                                class="text-neutral-600 splitTextStyleOne fw-medium"
                                            >
                                                There are many variations of
                                                passages of Lorem Ipsum
                                                available, but majority have
                                                suffered teration in some form,
                                                by injected humour, or
                                                randomised
                                            </p>
                                            <div class="tw-mt-705">
                                                <div
                                                    class="d-flex align-items-center tw-gap-7 flex-wrap"
                                                >
                                                    <h4 class="tw-text-3xl">
                                                        $600.00
                                                    </h4>
                                                    <h6 class="text-main-600">
                                                        $,900.00
                                                    </h6>
                                                </div>
                                                <div
                                                    class="tw-my-8 d-flex align-items-center tw-gap-6 flex-wrap"
                                                >
                                                    <span
                                                        class="fw-bold tw-text-base"
                                                        >Color :</span
                                                    >
                                                    <div
                                                        class="d-flex align-items-center tw-gap-3"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="color-picker border border-neutral-300 tw-w-5 tw-h-5 rounded-circle d-flex justify-content-center align-items-center"
                                                        >
                                                            <span
                                                                class="color-picker__color tw-w-3 tw-h-3 rounded-circle tw-duration-300 product-bg-1"
                                                            ></span>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="color-picker border border-neutral-300 tw-w-5 tw-h-5 rounded-circle d-flex justify-content-center align-items-center"
                                                        >
                                                            <span
                                                                class="color-picker__color tw-w-3 tw-h-3 rounded-circle tw-duration-300 product-bg-2"
                                                            ></span>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="color-picker border border-neutral-300 tw-w-5 tw-h-5 rounded-circle d-flex justify-content-center align-items-center"
                                                        >
                                                            <span
                                                                class="color-picker__color tw-w-3 tw-h-3 rounded-circle tw-duration-300 product-bg-3"
                                                            ></span>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="color-picker border border-neutral-300 tw-w-5 tw-h-5 rounded-circle d-flex justify-content-center align-items-center"
                                                        >
                                                            <span
                                                                class="color-picker__color tw-w-3 tw-h-3 rounded-circle tw-duration-300 product-bg-4"
                                                            ></span>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="color-picker border border-neutral-300 tw-w-5 tw-h-5 rounded-circle d-flex justify-content-center align-items-center"
                                                        >
                                                            <span
                                                                class="color-picker__color tw-w-3 tw-h-3 rounded-circle tw-duration-300 product-bg-5"
                                                            ></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="tw-my-8 d-flex align-items-center tw-gap-6 flex-wrap"
                                                >
                                                    <span
                                                        class="fw-bold tw-text-base"
                                                        >Size :</span
                                                    >
                                                    <div
                                                        class="d-flex align-items-center tw-gap-3"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="size-btn border border-neutral-300 tw-py-05 tw-px-205 tw-rounded text-heading fw-semibold"
                                                        >
                                                            XL
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="size-btn border border-neutral-300 tw-py-05 tw-px-205 tw-rounded text-heading fw-semibold"
                                                        >
                                                            XXL
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="size-btn border border-neutral-300 tw-py-05 tw-px-205 tw-rounded text-heading fw-semibold"
                                                        >
                                                            M
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="size-btn border border-neutral-300 tw-py-05 tw-px-205 tw-rounded text-heading fw-semibold"
                                                        >
                                                            L
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="size-btn border border-neutral-300 tw-py-05 tw-px-205 tw-rounded text-heading fw-semibold"
                                                        >
                                                            4XL
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="tw-my-8 d-flex align-items-center tw-gap-6 flex-wrap"
                                                >
                                                    <span
                                                        class="fw-bold tw-text-base"
                                                        >Quantity:</span
                                                    >
                                                    <div
                                                        class="d-flex align-items-center tw-gap-3"
                                                    >
                                                        <div
                                                            class="border border-neutral-400 tw-h-15 tw-rounded-md d-flex align-items-center py-4 tw-px-5 tw-gap-6"
                                                        >
                                                            <button
                                                                type="button"
                                                                class="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-leading-none decrement-btn"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-minus"
                                                                ></i>
                                                            </button>
                                                            <input
                                                                type="text"
                                                                class="border-0 text-center focus-outline-0 text-heading fw-bold tw-w-11 input-value"
                                                                value="0"
                                                            />
                                                            <button
                                                                type="button"
                                                                class="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-leading-none increment-btn"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-plus"
                                                                ></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="tw-my-8 d-flex align-items-center tw-gap-6 flex-wrap"
                                                >
                                                    <a
                                                        href="{{route('cart')}}"
                                                        class="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-2 group active--translate-y-2 fw-medium flex-shrink-0 hover--translate-y-1 active--translate-y-scale-9 rounded-pill tw-py-5 max-w-420-px w-100"
                                                        data-block="button"
                                                    >
                                                        <span
                                                            class="button__flair"
                                                        ></span>
                                                        <span
                                                            class="text-white tw-text-xl tw-rounded d-flex justify-content-center align-items-center position-relative group-hover-text-main-600 tw-duration-500"
                                                        >
                                                            <i
                                                                class="ph ph-basket"
                                                            ></i>
                                                        </span>
                                                        <span
                                                            class="button__label"
                                                            >Add To Cart</span
                                                        >
                                                    </a>
                                                    <button
                                                        type="button"
                                                        class="tw-w-15 tw-h-15 bg-white common-shadow-fifteen d-flex justify-content-center align-items-center tw-text-2xl rounded-circle hover-bg-main-600 hover-text-white tw-duration-300"
                                                    >
                                                        <i
                                                            class="ph ph-star"
                                                        ></i>
                                                    </button>
                                                </div>
                                                <div class="tw-mt-9">
                                                    <p
                                                        class="text-heading fw-medium tw-mb-605"
                                                    >
                                                        Ground delivery charge
                                                        <span class="fw-bold"
                                                            >$180.00</span
                                                        >
                                                    </p>
                                                    <div
                                                        class="d-flex flex-column tw-gap-205"
                                                    >
                                                        <p
                                                            class="text-heading fw-medium"
                                                        >
                                                            <span
                                                                class="fw-bold"
                                                                >SKU:</span
                                                            >
                                                            N/A
                                                        </p>
                                                        <p
                                                            class="text-heading fw-medium"
                                                        >
                                                            <span
                                                                class="fw-bold"
                                                                >Category: </span
                                                            >Pizza
                                                        </p>
                                                        <p
                                                            class="text-heading fw-medium"
                                                        >
                                                            <span
                                                                class="fw-bold"
                                                                >Tags:
                                                            </span>
                                                            Burgers, Tacos
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Shop Details End -->

                <!-- Product Tabs Start -->
                <section class="py-120 section-bg-two">
                    <div class="container">
                        <div class="">
                            <ul
                                class="nav nav-pills style-border tw-mb-11 tw-gap-9 flex-wrap"
                                id="pills-tab"
                                role="tablist"
                            >
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link tw-px-6 tw-py-3 bg-white text-heading fw-bold tw-text-sm border border-white text-uppercase tw-rounded-lg active"
                                        id="pills-ProductDetails-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-ProductDetails"
                                        type="button"
                                        role="tab"
                                        aria-controls="pills-ProductDetails"
                                        aria-selected="true"
                                    >
                                        Product Details
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link tw-px-6 tw-py-3 bg-white text-heading fw-bold tw-text-sm border border-white text-uppercase tw-rounded-lg"
                                        id="pills-additionalInformation-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-additionalInformation"
                                        type="button"
                                        role="tab"
                                        aria-controls="pills-additionalInformation"
                                        aria-selected="false"
                                    >
                                        additional Information
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link tw-px-6 tw-py-3 bg-white text-heading fw-bold tw-text-sm border border-white text-uppercase tw-rounded-lg"
                                        id="pills-Review-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-Review"
                                        type="button"
                                        role="tab"
                                        aria-controls="pills-Review"
                                        aria-selected="false"
                                    >
                                        Review (09)
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link tw-px-6 tw-py-3 bg-white text-heading fw-bold tw-text-sm border border-white text-uppercase tw-rounded-lg"
                                        id="pills-faq-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-faq"
                                        type="button"
                                        role="tab"
                                        aria-controls="pills-faq"
                                        aria-selected="false"
                                    >
                                        faq
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div
                                    class="tab-pane fade show active"
                                    id="pills-ProductDetails"
                                    role="tabpanel"
                                    aria-labelledby="pills-ProductDetails-tab"
                                    tabindex="0"
                                >
                                    <div class="">
                                        <div class="">
                                            <h4 class="tw-mb-3">
                                                Experience is over the world
                                                visit
                                            </h4>
                                            <p
                                                class="text-neutral-600 tw-text-lg"
                                            >
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.
                                                Curabitur vulputate vestibulum
                                                Phasellus rhoncus, dolor eget
                                                viverra pretium, dolor tellus
                                                aliquet nu vitae ultricies erat
                                                elit eu lacus. Vestibulum non
                                                justo consectetur, cursus ante,
                                                tincidunt sapien. Nulla quis
                                                diam sit amet turpis interdum
                                                accumsan quis nec enim. Vivamus
                                                faucibus ex sed nibh egestas
                                                elementum. Mauris et bibendum
                                                dui. Aenean consequat pulvinar
                                                luctus
                                            </p>
                                        </div>
                                        <div class="tw-mt-17">
                                            <h5 class="tw-mb-7">
                                                More Details :
                                            </h5>
                                            <div class="row gy-4">
                                                <div class="col-sm-6">
                                                    <div
                                                        class="d-flex flex-column tw-gap-8"
                                                    >
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum is
                                                                simply dummy
                                                                text of the
                                                                printing and
                                                                typesetting
                                                                industry
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum has
                                                                been the ‘s
                                                                standard dummy
                                                                text. Lorem
                                                                Ipsumum is
                                                                simply dummy
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                type here your
                                                                detail one by
                                                                one li more add
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                has been the
                                                                industry’s
                                                                standard dummy
                                                                text ever since.
                                                                Lorem Ips
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                has been the
                                                                industry’s
                                                                standard dummy
                                                                text ever since.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div
                                                        class="d-flex flex-column tw-gap-8"
                                                    >
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                If you are going
                                                                to use a
                                                                passage.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                If you are going
                                                                to use a
                                                                passage.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="pills-additionalInformation"
                                    role="tabpanel"
                                    aria-labelledby="pills-additionalInformation-tab"
                                    tabindex="0"
                                >
                                    <div class="">
                                        <div class="">
                                            <h4 class="tw-mb-3">
                                                Experience is over the world
                                                visit
                                            </h4>
                                            <p
                                                class="text-neutral-600 tw-text-lg"
                                            >
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.
                                                Curabitur vulputate vestibulum
                                                Phasellus rhoncus, dolor eget
                                                viverra pretium, dolor tellus
                                                aliquet nu vitae ultricies erat
                                                elit eu lacus. Vestibulum non
                                                justo consectetur, cursus ante,
                                                tincidunt sapien. Nulla quis
                                                diam sit amet turpis interdum
                                                accumsan quis nec enim. Vivamus
                                                faucibus ex sed nibh egestas
                                                elementum. Mauris et bibendum
                                                dui. Aenean consequat pulvinar
                                                luctus
                                            </p>
                                        </div>
                                        <div class="tw-mt-17">
                                            <h5 class="tw-mb-7">
                                                More Details :
                                            </h5>
                                            <div class="row gy-4">
                                                <div class="col-sm-6">
                                                    <div
                                                        class="d-flex flex-column tw-gap-8"
                                                    >
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum is
                                                                simply dummy
                                                                text of the
                                                                printing and
                                                                typesetting
                                                                industry
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum has
                                                                been the ‘s
                                                                standard dummy
                                                                text. Lorem
                                                                Ipsumum is
                                                                simply dummy
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                type here your
                                                                detail one by
                                                                one li more add
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                has been the
                                                                industry’s
                                                                standard dummy
                                                                text ever since.
                                                                Lorem Ips
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                has been the
                                                                industry’s
                                                                standard dummy
                                                                text ever since.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div
                                                        class="d-flex flex-column tw-gap-8"
                                                    >
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                If you are going
                                                                to use a
                                                                passage.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                If you are going
                                                                to use a
                                                                passage.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="pills-Review"
                                    role="tabpanel"
                                    aria-labelledby="pills-Review-tab"
                                    tabindex="0"
                                >
                                    <div class="">
                                        <div class="">
                                            <h4 class="tw-mb-3">
                                                Experience is over the world
                                                visit
                                            </h4>
                                            <p
                                                class="text-neutral-600 tw-text-lg"
                                            >
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.
                                                Curabitur vulputate vestibulum
                                                Phasellus rhoncus, dolor eget
                                                viverra pretium, dolor tellus
                                                aliquet nu vitae ultricies erat
                                                elit eu lacus. Vestibulum non
                                                justo consectetur, cursus ante,
                                                tincidunt sapien. Nulla quis
                                                diam sit amet turpis interdum
                                                accumsan quis nec enim. Vivamus
                                                faucibus ex sed nibh egestas
                                                elementum. Mauris et bibendum
                                                dui. Aenean consequat pulvinar
                                                luctus
                                            </p>
                                        </div>
                                        <div class="tw-mt-17">
                                            <h5 class="tw-mb-7">
                                                More Details :
                                            </h5>
                                            <div class="row gy-4">
                                                <div class="col-sm-6">
                                                    <div
                                                        class="d-flex flex-column tw-gap-8"
                                                    >
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum is
                                                                simply dummy
                                                                text of the
                                                                printing and
                                                                typesetting
                                                                industry
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum has
                                                                been the ‘s
                                                                standard dummy
                                                                text. Lorem
                                                                Ipsumum is
                                                                simply dummy
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                type here your
                                                                detail one by
                                                                one li more add
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                has been the
                                                                industry’s
                                                                standard dummy
                                                                text ever since.
                                                                Lorem Ips
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                has been the
                                                                industry’s
                                                                standard dummy
                                                                text ever since.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div
                                                        class="d-flex flex-column tw-gap-8"
                                                    >
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                If you are going
                                                                to use a
                                                                passage.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                If you are going
                                                                to use a
                                                                passage.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="pills-faq"
                                    role="tabpanel"
                                    aria-labelledby="pills-faq-tab"
                                    tabindex="0"
                                >
                                    <div class="">
                                        <div class="">
                                            <h4 class="tw-mb-3">
                                                Experience is over the world
                                                visit
                                            </h4>
                                            <p
                                                class="text-neutral-600 tw-text-lg"
                                            >
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.
                                                Curabitur vulputate vestibulum
                                                Phasellus rhoncus, dolor eget
                                                viverra pretium, dolor tellus
                                                aliquet nu vitae ultricies erat
                                                elit eu lacus. Vestibulum non
                                                justo consectetur, cursus ante,
                                                tincidunt sapien. Nulla quis
                                                diam sit amet turpis interdum
                                                accumsan quis nec enim. Vivamus
                                                faucibus ex sed nibh egestas
                                                elementum. Mauris et bibendum
                                                dui. Aenean consequat pulvinar
                                                luctus
                                            </p>
                                        </div>
                                        <div class="tw-mt-17">
                                            <h5 class="tw-mb-7">
                                                More Details :
                                            </h5>
                                            <div class="row gy-4">
                                                <div class="col-sm-6">
                                                    <div
                                                        class="d-flex flex-column tw-gap-8"
                                                    >
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum is
                                                                simply dummy
                                                                text of the
                                                                printing and
                                                                typesetting
                                                                industry
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum has
                                                                been the ‘s
                                                                standard dummy
                                                                text. Lorem
                                                                Ipsumum is
                                                                simply dummy
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                type here your
                                                                detail one by
                                                                one li more add
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                has been the
                                                                industry’s
                                                                standard dummy
                                                                text ever since.
                                                                Lorem Ips
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                has been the
                                                                industry’s
                                                                standard dummy
                                                                text ever since.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div
                                                        class="d-flex flex-column tw-gap-8"
                                                    >
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                If you are going
                                                                to use a
                                                                passage.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                Lorem Ipsum
                                                                generators on
                                                                the tend to
                                                                repeat.
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center tw-gap-4"
                                                        >
                                                            <span
                                                                class="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg"
                                                            >
                                                                <i
                                                                    class="ph-bold ph-check"
                                                                ></i>
                                                            </span>
                                                            <p
                                                                class="fw-medium"
                                                            >
                                                                If you are going
                                                                to use a
                                                                passage.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Product Tabs End -->

                <!-- Featured Products Start -->
                <section class="shop py-120">
                    <div class="container">
                        <div class="max-w-672-px text-start tw-mb-12">
                            <span class="text-main-600 tw-text-lg fw-semibold"
                                >Featured Product</span
                            >
                            <h3
                                class="splitTextStyleOne text-heading text-capitalize"
                            >
                                Featured Products
                            </h3>
                        </div>

                        <div class="row gy-4 product-item-wrapper">
                            <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                                <div
                                    class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                >
                                    <div
                                        class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                    >
                                        <a
                                            href="{{route('shop.details')}}"
                                            class="d-block"
                                        >
                                            <img
                                                src="{{asset('assets/images/thumbs/product-img1.png')}}"
                                                alt="Product Thumbnail"
                                                class="group-hover-item-scale-12 tw-duration-300"
                                            />
                                        </a>
                                        <div
                                            class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                        >
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i class="ph-bold ph-eye"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i class="ph-bold ph-star"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i
                                                    class="ph-bold ph-arrows-down-up"
                                                ></i>
                                            </button>
                                        </div>
                                        <div
                                            class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                        >
                                            <a
                                                href="{{route('cart')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <span class="button__label"
                                                    >Add To Cart</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item__content text-center tw-px-2"
                                    >
                                        <ul
                                            class="d-inline-flex align-items-center tw-gap-1"
                                        >
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                        </ul>
                                        <h6 class="tw-text-base tw-my-205">
                                            <a href="{{route('shop.details')}}" class=""
                                                >Smart wireless headphone</a
                                            >
                                        </h6>
                                        <span class="text-heading fw-medium"
                                            >$112.00</span
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                                <div
                                    class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                >
                                    <div
                                        class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                    >
                                        <a
                                            href="{{route('shop.details')}}"
                                            class="d-block"
                                        >
                                            <img
                                                src="{{asset('assets/images/thumbs/product-img2.png')}}"
                                                alt="Product Thumbnail"
                                                class="group-hover-item-scale-12 tw-duration-300"
                                            />
                                        </a>
                                        <div
                                            class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                        >
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i class="ph-bold ph-eye"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i class="ph-bold ph-star"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i
                                                    class="ph-bold ph-arrows-down-up"
                                                ></i>
                                            </button>
                                        </div>
                                        <div
                                            class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                        >
                                            <a
                                                href="{{route('cart')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <span class="button__label"
                                                    >Add To Cart</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item__content text-center tw-px-2"
                                    >
                                        <ul
                                            class="d-inline-flex align-items-center tw-gap-1"
                                        >
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                        </ul>
                                        <h6 class="tw-text-base tw-my-205">
                                            <a href="{{route('shop.details')}}" class=""
                                                >Go pro hero action camera</a
                                            >
                                        </h6>
                                        <span class="text-heading fw-medium"
                                            >$112.00</span
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                                <div
                                    class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                >
                                    <div
                                        class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                    >
                                        <a
                                            href="{{route('shop.details')}}"
                                            class="d-block"
                                        >
                                            <img
                                                src="{{asset('assets/images/thumbs/product-img3.png')}}"
                                                alt="Product Thumbnail"
                                                class="group-hover-item-scale-12 tw-duration-300"
                                            />
                                        </a>
                                        <div
                                            class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                        >
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i class="ph-bold ph-eye"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i class="ph-bold ph-star"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i
                                                    class="ph-bold ph-arrows-down-up"
                                                ></i>
                                            </button>
                                        </div>
                                        <div
                                            class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                        >
                                            <a
                                                href="{{route('cart')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <span class="button__label"
                                                    >Add To Cart</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item__content text-center tw-px-2"
                                    >
                                        <ul
                                            class="d-inline-flex align-items-center tw-gap-1"
                                        >
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                        </ul>
                                        <h6 class="tw-text-base tw-my-205">
                                            <a href="{{route('shop.details')}}" class=""
                                                >Colorful apple Ipad</a
                                            >
                                        </h6>
                                        <span class="text-heading fw-medium"
                                            >$112.00</span
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-4 col-sm-6 col-xs-6">
                                <div
                                    class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                >
                                    <div
                                        class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                    >
                                        <a
                                            href="{{route('shop.details')}}"
                                            class="d-block"
                                        >
                                            <img
                                                src="{{asset('assets/images/thumbs/product-img4.png')}}"
                                                alt="Product Thumbnail"
                                                class="group-hover-item-scale-12 tw-duration-300"
                                            />
                                        </a>
                                        <div
                                            class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                        >
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i class="ph-bold ph-eye"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i class="ph-bold ph-star"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                            >
                                                <i
                                                    class="ph-bold ph-arrows-down-up"
                                                ></i>
                                            </button>
                                        </div>
                                        <div
                                            class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                        >
                                            <a
                                                href="{{route('cart')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <span class="button__label"
                                                    >Add To Cart</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item__content text-center tw-px-2"
                                    >
                                        <ul
                                            class="d-inline-flex align-items-center tw-gap-1"
                                        >
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-main-600 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                            <li
                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                            >
                                                <i class="ph-fill ph-star"></i>
                                            </li>
                                        </ul>
                                        <h6 class="tw-text-base tw-my-205">
                                            <a href="{{route('shop.details')}}" class=""
                                                >Humidifiler white grow</a
                                            >
                                        </h6>
                                        <span class="text-heading fw-medium"
                                            >$112.00</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Featured Products end -->

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
                @include('frontend.includes.footers.footerThree')
                <!-- footer area end -->
            </div>
        </div>

@endsection
