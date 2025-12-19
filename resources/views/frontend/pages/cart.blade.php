@extends('frontend.layouts.app')
@section('title', 'Cart')
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

                <!-- Cart Page Start -->
                <section class="bg-white py-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-11">
                                <div class="row gy-4">
                                    <div class="col-lg-8 pe-lg-5">
                                        <div class="table-responsive">
                                            <table
                                                class="table border border-neutral-200 min-w-max"
                                            >
                                                <thead>
                                                    <tr>
                                                        <th
                                                            scope="col"
                                                            class="fw-semibold tw-text-base important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            Product
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            class="fw-semibold tw-text-base important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            Price
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            class="fw-semibold tw-text-base important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            Quantity
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            class="fw-semibold tw-text-base important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            Subtotal
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="delete-item">
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <div
                                                                class="d-flex align-items-center tw-gap-4 group-item"
                                                            >
                                                                <div
                                                                    class="position-relative max-w-74-px tw-h-84-px w-100"
                                                                >
                                                                    <a
                                                                        href="{{route('shop.details')}}"
                                                                        class="d-flex justify-content-center align-items-center position-relative d-block"
                                                                    >
                                                                        <img
                                                                            src="{{asset('assets/images/thumbs/cart-img1.png')}}"
                                                                            alt="Thumb"
                                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                                        />
                                                                    </a>
                                                                    <button
                                                                        type="button"
                                                                        class="text-danger tw-text-xl hover-scale-14 position-absolute top-0 tw-end-0 tw-duration-300 tw--mt-8-px tw--me-8-px delete-button"
                                                                    >
                                                                        <i
                                                                            class="ph-fill ph-x-circle"
                                                                        ></i>
                                                                    </button>
                                                                </div>
                                                                <a
                                                                    href="{{route('shop.details')}}"
                                                                    class="fw-bold tw-text-lg text-heading hover-text-main-600 line-clamp-1"
                                                                    >Apple
                                                                    Watch</a
                                                                >
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <span
                                                                class="fw-bold tw-text-lg text-heading"
                                                                >$12.00</span
                                                            >
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <div class="d-flex">
                                                                <button
                                                                    type="button"
                                                                    class="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-w-11 tw-h-11 border border-neutral-200 tw-leading-none decrement-btn"
                                                                >
                                                                    <i
                                                                        class="ph-bold ph-minus"
                                                                    ></i>
                                                                </button>
                                                                <input
                                                                    type="text"
                                                                    class="border border-neutral-200 bg-neutral-200 tw-w-11 tw-h-11 text-center focus-outline-0 text-heading fw-bold tw-w-11 input-value"
                                                                    value="0"
                                                                />
                                                                <button
                                                                    type="button"
                                                                    class="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-w-11 tw-h-11 border border-neutral-200 tw-leading-none increment-btn"
                                                                >
                                                                    <i
                                                                        class="ph-bold ph-plus"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <span
                                                                class="fw-bold tw-text-lg text-heading"
                                                                >$60.00</span
                                                            >
                                                        </td>
                                                    </tr>
                                                    <tr class="delete-item">
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <div
                                                                class="d-flex align-items-center tw-gap-4 group-item"
                                                            >
                                                                <div
                                                                    class="position-relative max-w-74-px tw-h-84-px w-100"
                                                                >
                                                                    <a
                                                                        href="{{route('shop.details')}}"
                                                                        class="d-flex justify-content-center align-items-center position-relative d-block"
                                                                    >
                                                                        <img
                                                                            src="{{asset('assets/images/thumbs/cart-img2.png')}}"
                                                                            alt="Thumb"
                                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                                        />
                                                                    </a>
                                                                    <button
                                                                        type="button"
                                                                        class="text-danger tw-text-xl hover-scale-14 position-absolute top-0 tw-end-0 tw-duration-300 tw--mt-8-px tw--me-8-px delete-button"
                                                                    >
                                                                        <i
                                                                            class="ph-fill ph-x-circle"
                                                                        ></i>
                                                                    </button>
                                                                </div>
                                                                <a
                                                                    href="{{route('shop.details')}}"
                                                                    class="fw-bold tw-text-lg text-heading hover-text-main-600 line-clamp-1"
                                                                    >Sumsang
                                                                    Hand Set</a
                                                                >
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <span
                                                                class="fw-bold tw-text-lg text-heading"
                                                                >$34.00</span
                                                            >
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <div class="d-flex">
                                                                <button
                                                                    type="button"
                                                                    class="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-w-11 tw-h-11 border border-neutral-200 tw-leading-none decrement-btn"
                                                                >
                                                                    <i
                                                                        class="ph-bold ph-minus"
                                                                    ></i>
                                                                </button>
                                                                <input
                                                                    type="text"
                                                                    class="border border-neutral-200 bg-neutral-200 tw-w-11 tw-h-11 text-center focus-outline-0 text-heading fw-bold tw-w-11 input-value"
                                                                    value="0"
                                                                />
                                                                <button
                                                                    type="button"
                                                                    class="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-w-11 tw-h-11 border border-neutral-200 tw-leading-none increment-btn"
                                                                >
                                                                    <i
                                                                        class="ph-bold ph-plus"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <span
                                                                class="fw-bold tw-text-lg text-heading"
                                                                >$68.00</span
                                                            >
                                                        </td>
                                                    </tr>
                                                    <tr class="delete-item">
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <div
                                                                class="d-flex align-items-center tw-gap-4 group-item"
                                                            >
                                                                <div
                                                                    class="position-relative max-w-74-px tw-h-84-px w-100"
                                                                >
                                                                    <a
                                                                        href="{{route('shop.details')}}"
                                                                        class="d-flex justify-content-center align-items-center position-relative d-block"
                                                                    >
                                                                        <img
                                                                            src="{{asset('assets/images/thumbs/cart-img3.png')}}"
                                                                            alt="Thumb"
                                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                                        />
                                                                    </a>
                                                                    <button
                                                                        type="button"
                                                                        class="text-danger tw-text-xl hover-scale-14 position-absolute top-0 tw-end-0 tw-duration-300 tw--mt-8-px tw--me-8-px delete-button"
                                                                    >
                                                                        <i
                                                                            class="ph-fill ph-x-circle"
                                                                        ></i>
                                                                    </button>
                                                                </div>
                                                                <a
                                                                    href="{{route('shop.details')}}"
                                                                    class="fw-bold tw-text-lg text-heading hover-text-main-600 line-clamp-1"
                                                                    >Tata Brand
                                                                    Car</a
                                                                >
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <span
                                                                class="fw-bold tw-text-lg text-heading"
                                                                >$345.00</span
                                                            >
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <div class="d-flex">
                                                                <button
                                                                    type="button"
                                                                    class="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-w-11 tw-h-11 border border-neutral-200 tw-leading-none decrement-btn"
                                                                >
                                                                    <i
                                                                        class="ph-bold ph-minus"
                                                                    ></i>
                                                                </button>
                                                                <input
                                                                    type="text"
                                                                    class="border border-neutral-200 bg-neutral-200 tw-w-11 tw-h-11 text-center focus-outline-0 text-heading fw-bold tw-w-11 input-value"
                                                                    value="0"
                                                                />
                                                                <button
                                                                    type="button"
                                                                    class="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-w-11 tw-h-11 border border-neutral-200 tw-leading-none increment-btn"
                                                                >
                                                                    <i
                                                                        class="ph-bold ph-plus"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <span
                                                                class="fw-bold tw-text-lg text-heading"
                                                                >$345.00</span
                                                            >
                                                        </td>
                                                    </tr>
                                                    <tr class="delete-item">
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <div
                                                                class="d-flex align-items-center tw-gap-4 group-item"
                                                            >
                                                                <div
                                                                    class="position-relative max-w-74-px tw-h-84-px w-100"
                                                                >
                                                                    <a
                                                                        href="{{route('shop.details')}}"
                                                                        class="d-flex justify-content-center align-items-center position-relative d-block"
                                                                    >
                                                                        <img
                                                                            src="{{asset('assets/images/thumbs/cart-img4.png')}}"
                                                                            alt="Thumb"
                                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                                        />
                                                                    </a>
                                                                    <button
                                                                        type="button"
                                                                        class="text-danger tw-text-xl hover-scale-14 position-absolute top-0 tw-end-0 tw-duration-300 tw--mt-8-px tw--me-8-px delete-button"
                                                                    >
                                                                        <i
                                                                            class="ph-fill ph-x-circle"
                                                                        ></i>
                                                                    </button>
                                                                </div>
                                                                <a
                                                                    href="{{route('shop.details')}}"
                                                                    class="fw-bold tw-text-lg text-heading hover-text-main-600 line-clamp-1"
                                                                    >Sumsang
                                                                    Hand Set</a
                                                                >
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <span
                                                                class="fw-bold tw-text-lg text-heading"
                                                                >$34.00</span
                                                            >
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <div class="d-flex">
                                                                <button
                                                                    type="button"
                                                                    class="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-w-11 tw-h-11 border border-neutral-200 tw-leading-none decrement-btn"
                                                                >
                                                                    <i
                                                                        class="ph-bold ph-minus"
                                                                    ></i>
                                                                </button>
                                                                <input
                                                                    type="text"
                                                                    class="border border-neutral-200 bg-neutral-200 tw-w-11 tw-h-11 text-center focus-outline-0 text-heading fw-bold tw-w-11 input-value"
                                                                    value="0"
                                                                />
                                                                <button
                                                                    type="button"
                                                                    class="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-w-11 tw-h-11 border border-neutral-200 tw-leading-none increment-btn"
                                                                >
                                                                    <i
                                                                        class="ph-bold ph-plus"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                                                        >
                                                            <span
                                                                class="fw-bold tw-text-lg text-heading"
                                                                >$68.00</span
                                                            >
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td
                                                            colspan="4"
                                                            class="important-tw-py-5 important-tw-px-9 border-top border-neutral-200 text-center"
                                                        >
                                                            <div
                                                                class="d-flex align-items-center justify-content-between tw-gap-4 flex-wrap"
                                                            >
                                                                <button
                                                                    type="button"
                                                                    class="tw-py-3 tw-px-6 rounded-pill border border-neutral-200 text-neutral-600 fw-semibold tw-text-sm text-capitalize hover-bg-main-600 hover-text-white hover-border-main-600 tw-duration-300"
                                                                >
                                                                    Return to
                                                                    Shop
                                                                </button>
                                                                <button
                                                                    type="button"
                                                                    class="tw-py-3 tw-px-6 rounded-pill border border-neutral-200 text-neutral-600 fw-semibold tw-text-sm text-capitalize hover-bg-main-600 hover-text-white hover-border-main-600 tw-duration-300"
                                                                >
                                                                    Update Cart
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            colspan="4"
                                                            class="important-tw-py-5 important-tw-px-9 border-top border-neutral-200 text-center"
                                                        >
                                                            <div
                                                                class="d-flex align-items-center tw-gap-10"
                                                            >
                                                                <span
                                                                    class="fw-bold tw-text-lg text-heading line-clamp-1"
                                                                    >Coupon
                                                                    Code</span
                                                                >
                                                                <form
                                                                    action="#"
                                                                    class="d-flex tw-gap-5 form-submit flex-grow-1"
                                                                >
                                                                    <div
                                                                        class="position-relative flex-grow-1"
                                                                    >
                                                                        <input
                                                                            type="text"
                                                                            class="tw-h-14 tw-rounded-lg bg-white tw-ps-12 border border-neutral-200 focus-border-main-600 text-heading focus-outline-0 w-100 tw-pe-6 common-shadow-twenty"
                                                                            placeholder="Email Address"
                                                                        />
                                                                        <span
                                                                            class="text-heading tw-text-lg position-absolute top-50 tw-start-0 tw--translate-y-50 tw-ms-5 d-flex"
                                                                        >
                                                                            <i
                                                                                class="ph ph-envelope-simple"
                                                                            ></i>
                                                                        </span>
                                                                    </div>
                                                                    <button
                                                                        type="submit"
                                                                        class="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-2 group active--translate-y-2 fw-semibold flex-shrink-0 hover--translate-y-1 active--translate-y-scale-9 tw-px-10"
                                                                        data-block="button"
                                                                    >
                                                                        <span
                                                                            class="button__flair"
                                                                        ></span>
                                                                        <span
                                                                            class="button__label"
                                                                            >Apply
                                                                            Coupon</span
                                                                        >
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div
                                            class="border border-neutral-200 tw-p-5"
                                        >
                                            <h5
                                                class="text-center tw-text-lg tw-mb-10"
                                            >
                                                Calculate Shipping
                                            </h5>
                                            <div
                                                class="d-flex flex-column tw-gap-4"
                                            >
                                                <div
                                                    class="border tw-rounded tw-py-3 tw-px-5 text-heading d-flex align-items-center justify-content-between"
                                                >
                                                    <span
                                                        class="fw-semibold tw-text-base text-capitalize"
                                                        >Bangladesh</span
                                                    >
                                                    <span
                                                        class="fw-medium tw-text-base text-capitalize text-neutral-600"
                                                        >country</span
                                                    >
                                                </div>
                                                <div
                                                    class="border tw-rounded tw-py-3 tw-px-5 text-heading d-flex align-items-center justify-content-between"
                                                >
                                                    <span
                                                        class="fw-semibold tw-text-base text-capitalize"
                                                        >Mirpur Dohs
                                                    </span>
                                                    <span
                                                        class="fw-medium tw-text-base text-capitalize text-neutral-600"
                                                        >Dhaka-1200</span
                                                    >
                                                </div>
                                                <div
                                                    class="border tw-rounded tw-py-3 tw-px-5 text-heading d-flex align-items-center justify-content-between"
                                                >
                                                    <span
                                                        class="fw-semibold tw-text-base text-capitalize"
                                                        >Postal Code</span
                                                    >
                                                    <span
                                                        class="fw-medium tw-text-base text-capitalize text-neutral-600"
                                                        >3215</span
                                                    >
                                                </div>
                                                <div
                                                    class="border tw-rounded tw-py-3 tw-px-5 text-heading d-flex align-items-center justify-content-between"
                                                >
                                                    <span
                                                        class="fw-semibold tw-text-base text-capitalize"
                                                        >Bangladesh</span
                                                    >
                                                    <span
                                                        class="fw-medium tw-text-base text-capitalize text-neutral-600"
                                                        >country</span
                                                    >
                                                </div>
                                            </div>
                                            <div class="tw-mt-6">
                                                <a
                                                    href="{{route('checkout')}}"
                                                    class="tw-rounded-md tw-py-3 tw-px-6 bg-neutral-200 text-heading fw-bold w-100 text-center hover-bg-main-600 hover-text-white active-scale-094 tw-duration-200"
                                                    >Calculate Shipping</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="border border-neutral-200 tw-p-5 tw-mt-10"
                                        >
                                            <h5
                                                class="text-center tw-text-lg tw-mb-10"
                                            >
                                                Total Cart
                                            </h5>
                                            <div
                                                class="d-flex flex-column tw-gap-4"
                                            >
                                                <div
                                                    class="border tw-rounded tw-py-3 tw-px-5 text-heading d-flex align-items-center justify-content-between"
                                                >
                                                    <span
                                                        class="fw-semibold tw-text-base text-uppercase"
                                                        >Subtotal</span
                                                    >
                                                    <span
                                                        class="fw-medium tw-text-base text-capitalize text-heading"
                                                        >$345.00</span
                                                    >
                                                </div>
                                                <div
                                                    class="border tw-rounded tw-py-3 tw-px-5 text-heading d-flex align-items-center justify-content-between"
                                                >
                                                    <span
                                                        class="fw-semibold tw-text-base text-uppercase"
                                                        >Total</span
                                                    >
                                                    <span
                                                        class="fw-semibold tw-text-base text-capitalize text-heading"
                                                        >$450.00</span
                                                    >
                                                </div>
                                            </div>
                                            <div class="tw-mt-6">
                                                <a
                                                    href="{{route('checkout')}}"
                                                    class="hover--translate-y-1 bg-crm active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 px-xxl-5 px-xl-4 px-3 tw-py-405 fw-medium btn-main-two hover-style-two w-100"
                                                    data-block="button"
                                                >
                                                    <span
                                                        class="button__flair"
                                                    ></span>
                                                    <span class="button__label"
                                                        >Proceed to
                                                        checkout</span
                                                    >
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Cart Page End -->

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
