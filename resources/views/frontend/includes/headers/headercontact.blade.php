<!-- navbar Start -->
@include('frontend.includes.partials.navbar')
<!-- navbar end -->

<div id="smooth-wrapper">

    <!-- Top Header Start -->
    <div class="bg-main-600 tw-py-205 d-sm-block d-none">
        <div class="container">
            <div class="d-flex justify-content-center">
                <p class="text-white bg-white-13 d-inline-block tw-py-1 tw-px-5 rounded-pill fw-normal">
                   Delivering reliable IT solutions tailored for growing businesses worldwide
                </p>
            </div>
        </div>
    </div>
    <!-- Top Header End -->

    <!-- Header Start Here -->
    <header class="p-4 header bg-white transition-all fixed-header">
        <div class="container container-two">
            <nav class="d-flex align-items-center justify-content-between position-relative">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="{{route('home')}}" class="link hover--translate-y-1 active--translate-y-scale-9">
                        <img src="{{asset('assets/images/logo/zalgo_logo.png')}}" alt="Logo" class="max-w-200-px">
                    </a>
                </div>
                <!-- Logo End  -->

                <!-- Header Right start -->
                <div class="d-flex align-items-center tw-gap-6">
                    <a href="{{route('contact')}}"
                        class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-4 fw-semibold"
                        data-block="button">
                        <span class="button__flair"></span>
                        <span class="button__label">Go Back</span>
                    </a>
                </div>
                <!-- Header Right End  -->
            </nav>
        </div>
    </header>
    <!-- Header End Here -->