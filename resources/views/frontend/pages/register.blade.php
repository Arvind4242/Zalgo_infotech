@extends('frontend.layouts.app')
@section('title', 'Register')
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
                            Sign Up
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End Here -->

    <!-- Account Section start= -->
    <section class="account py-120">
        <div class="container">
            <div class="max-w-514-px bg-white common-shadow-twentyOne tw-rounded-2xl tw-p-60-px mx-auto">
                <h4 class="tw-mb-8 text-capitalize fst-italic fw-bold text-center max-w-250-px mx-auto">
                    Start Your Journey with us
                </h4>
                <form action="{{ route('register.store') }}" method="POST" class="form-submit d-flex flex-column tw-gap-6">
    @csrf

    <!-- Name -->
    <div>
        <label class="fw-semibold">Enter your name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <!-- Username -->
    <div>
        <label class="fw-semibold">Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>

    <!-- Email -->
    <div>
        <label class="fw-semibold">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <!-- Password -->
    <div>
        <label class="fw-semibold">Create Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <!-- Confirm Password -->
    <div>
        <label class="fw-semibold">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>

    <!-- Terms -->
    <div class="form-check">
        <input type="checkbox" name="terms" value="1" class="form-check-input" required>
        <label class="form-check-label">I agree to Terms</label>
    </div>

    <button type="submit" class="btn btn-primary w-100">
        Create account
    </button>
</form>

                <div class="form-check-label text-neutral-600 fw-semibold tw-mt-405 text-center">
                    <span>Already have an account?</span>
                    <a href="{{route('login')}}"
                        class="text-decoration-underline text-neutral-600 fw-semibold hover--translate-y-1 active-scale-09 hover-text-main-600">Login</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Section End = -->

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

<<<<<<< Updated upstream
        <!-- footer area -->
        @include('frontend.includes.footers.footerOne')
        <!-- footer area end -->
    </div>
=======
    <!-- footer area -->
    @include('frontend.includes.footers.footerThree')
    <!-- footer area end -->
</div>
>>>>>>> Stashed changes
</div>

@endsection