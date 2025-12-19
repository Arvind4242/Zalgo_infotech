@extends('frontend.layouts.app')
@section('title', 'Checkout')
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
                                <img src="{{asset('assets/images/logo/favicon-two.png')}}" alt="Favicon Two" />
                            </span>
                            <h1 class="mb-0 splitTextStyleOne text-capitalize">
                                Checkout
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb End Here -->

        <!-- Checkout Page Start -->
        <section class="py-120">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-xxl-8 col-lg-7">
                        <div class="">
                            <h6 class="tw-mb-8">
                                Delivery Information
                            </h6>
                            <form action="#" class="form-submit">
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                                                placeholder="First Name" />
                                            <span
                                                class="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                                                <i class="ph-fill ph-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                                                placeholder="Last Name" />
                                            <span
                                                class="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                                                <i class="ph-fill ph-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                                                placeholder="Address here" />
                                            <span
                                                class="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                                                <i class="ph-fill ph-map-pin"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="position-relative">
                                            <select
                                                class="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none">
                                                <option value="current City">
                                                    Current City
                                                </option>
                                                <option value="Old City">
                                                    Old City
                                                </option>
                                            </select>
                                            <span
                                                class="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                                                <i class="ph-bold ph-caret-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                                                placeholder="House Number & street number" />
                                            <span
                                                class="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                                                <i class="ph-bold ph-house"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                                                placeholder="Apartment, suit, Unit etc" />
                                            <span
                                                class="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                                                <i class="ph-fill ph-map-pin"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                                                placeholder="Zip Code" />
                                            <span
                                                class="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                                                <i class="ph-fill ph-map-pin-simple"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                                                placeholder="Your Phone" />
                                            <span
                                                class="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                                                <i class="ph-fill ph-phone"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="position-relative">
                                            <textarea
                                                class="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none tw-min-h-210-px"
                                                placeholder="Write Something...."></textarea>
                                            <span
                                                class="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-0 tw-mt-6 tw-end-0 tw-me-6">
                                                <i class="ph-fill ph-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-px-4 tw-py-505 fw-medium btn-main hover-style-one w-100 tw-rounded-lg"
                                            data-block="button">
                                            <span class="button__flair"></span>
                                            <span class="button__label">Save All
                                                Information</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-lg-5">
                        <div class="">
                            <h5 class="text-center tw-text-2xl tw-mb-10">
                                Order Summery
                            </h5>
                            <div class="bg-neutral-100 tw-py-16 tw-px-11 tw-rounded-lg">
                                <div class="d-flex flex-column tw-gap-7">
                                    <div
                                        class="tw-rounded-md tw-py-3 tw-px-6 text-neutral-600 d-flex align-items-center justify-content-between bg-white">
                                        <span class="fw-semibold tw-text-base text-capitalize">Subtotal</span>
                                        <span class="fw-bold tw-text-base text-capitalize text-heading">$345.00</span>
                                    </div>
                                    <div
                                        class="tw-rounded-md tw-py-3 tw-px-6 text-neutral-600 d-flex align-items-center justify-content-between bg-white">
                                        <span class="fw-semibold tw-text-base text-capitalize">Shipping Fee</span>
                                        <span class="fw-bold tw-text-base text-capitalize text-heading">$34.00</span>
                                    </div>
                                    <div class="">
                                        <form action="#" class="form-submit position-relative">
                                            <input type="text"
                                                class="form-control tw-rounded-md tw-py-4 tw-px-6 text-neutral-600 bg-white shadow-none border border-transparent focus-border-main-600 placeholder-neutral-600 fw-bold tw-pe-140-px"
                                                placeholder="Enter voucher Code" />
                                            <button type="submit"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-px-6 tw-py-405 fw-medium btn-main hover-style-one position-absolute top-0 tw-end-0 h-100"
                                                data-block="button">
                                                <span class="button__flair"></span>
                                                <span class="button__label">Apply code</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tw-my-8">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fw-semibold tw-text-xl text-capitalize">Total</span>
                                        <span class="fw-bold tw-text-base text-capitalize text-heading">$345.00</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="bg-white tw-rounded-xl tw-p-705 d-flex flex-column tw-gap-305">
                                        <div class="form-check common-check common-radio tw-gap-3 mb-0">
                                            <input class="form-check-input bg-neutral-200" name="paymentOption"
                                                type="radio" id="bankTransfer" />
                                            <label class="form-check-label fw-medium text-heading"
                                                for="bankTransfer">Direct Bank
                                                transfer</label>
                                        </div>
                                        <div class="form-check common-check common-radio tw-gap-3 mb-0">
                                            <input class="form-check-input bg-neutral-200" name="paymentOption"
                                                type="radio" id="CheckPayments" />
                                            <label class="form-check-label fw-medium text-heading"
                                                for="CheckPayments">Check Payments</label>
                                        </div>
                                        <div class="form-check common-check common-radio tw-gap-3 mb-0">
                                            <input class="form-check-input bg-neutral-200" name="paymentOption"
                                                type="radio" id="CashOnDelivery" />
                                            <label class="form-check-label fw-medium text-heading"
                                                for="CashOnDelivery">Cash On Delivery</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-mt-10">
                                    <a href="javascript:void(0)"
                                        class="hover--translate-y-1 bg-crm active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 px-xxl-5 px-xl-4 px-3 tw-py-405 fw-medium btn-main-two hover-style-two w-100"
                                        data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Proceed to pay</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Checkout Page End -->

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
