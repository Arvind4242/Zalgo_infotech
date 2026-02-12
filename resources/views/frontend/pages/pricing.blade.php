@extends('frontend.layouts.app')
@section('title', 'Pricing')
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
                                        Pricing Package
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->

                <!-- Pricing Plan one Start -->
                <section class="pricing-plan-one py-120">
                    <div class="container">
                      <!-- Calendly inline widget begin -->
                        <div class="calendly-inline-widget" data-url="https://calendly.com/zalgoinfotec" style="min-width:320px;height:700px;"></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                        <!-- Calendly inline widget end -->
                    </div>
                </section>
                <!-- Pricing Plan one End -->

                <!-- footer area -->
                @include('frontend.includes.footers.footerOne')
                <!-- footer area end -->
            </div>
        </div>

@endsection
