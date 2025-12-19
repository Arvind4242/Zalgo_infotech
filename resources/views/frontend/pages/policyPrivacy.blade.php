@extends('frontend.layouts.app')
@section('title', 'Policy Privacy')
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
                                        Sasstech is here to help you launch
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->

                <!-- Privacy Policy Start -->
                <section class="privacy-policy py-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-11">
                                <div class="row gy-5">
                                    <div class="col-md-4">
                                        <div
                                            class="tw-py-13 tw-px-7 bg-neutral-100"
                                        >
                                            <div
                                                class="nav flex-column nav-pills active-bg-white-border-primary"
                                                id="v-pills-tab"
                                                role="tablist"
                                                aria-orientation="vertical"
                                            >
                                                <button
                                                    class="nav-link tw-px-8 tw-py-5 text-neutral-500 fw-semibold text-start w-100 tw-rounded-md active"
                                                    id="v-pills-home-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-home"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="v-pills-home"
                                                    aria-selected="true"
                                                >
                                                    Bookings & Prices
                                                </button>
                                                <button
                                                    class="nav-link tw-px-8 tw-py-5 text-neutral-500 fw-semibold text-start w-100 tw-rounded-md"
                                                    id="v-pills-profile-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-profile"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="v-pills-profile"
                                                    aria-selected="false"
                                                >
                                                    Payments, Refunds & Credits
                                                </button>
                                                <button
                                                    class="nav-link tw-px-8 tw-py-5 text-neutral-500 fw-semibold text-start w-100 tw-rounded-md"
                                                    id="v-pills-disabled-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-disabled"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="v-pills-disabled"
                                                    aria-selected="false"
                                                >
                                                    Changes
                                                </button>
                                                <button
                                                    class="nav-link tw-px-8 tw-py-5 text-neutral-500 fw-semibold text-start w-100 tw-rounded-md"
                                                    id="v-pills-messages-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-messages"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="v-pills-messages"
                                                    aria-selected="false"
                                                >
                                                    Cancellations
                                                </button>
                                                <button
                                                    class="nav-link tw-px-8 tw-py-5 text-neutral-500 fw-semibold text-start w-100 tw-rounded-md"
                                                    id="v-pills-settings-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-settings"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="v-pills-settings"
                                                    aria-selected="false"
                                                >
                                                    Included Services
                                                </button>
                                                <button
                                                    class="nav-link tw-px-8 tw-py-5 text-neutral-500 fw-semibold text-start w-100 tw-rounded-md"
                                                    id="v-pills-TripOperation-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-TripOperation"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="v-pills-TripOperation"
                                                    aria-selected="false"
                                                >
                                                    Trip Operation
                                                </button>
                                                <button
                                                    class="nav-link tw-px-8 tw-py-5 text-neutral-500 fw-semibold text-start w-100 tw-rounded-md"
                                                    id="v-pills-Participation-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-Participation"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="v-pills-Participation"
                                                    aria-selected="false"
                                                >
                                                    Participation
                                                </button>
                                                <button
                                                    class="nav-link tw-px-8 tw-py-5 text-neutral-500 fw-semibold text-start w-100 tw-rounded-md"
                                                    id="v-pills-Passports-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-Passports"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="v-pills-Passports"
                                                    aria-selected="false"
                                                >
                                                    Passports, Visas & Entry
                                                    Require
                                                </button>
                                                <button
                                                    class="nav-link tw-px-8 tw-py-5 text-neutral-500 fw-semibold text-start w-100 tw-rounded-md"
                                                    id="v-pills-Information-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-Information"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="v-pills-Information"
                                                    aria-selected="false"
                                                >
                                                    Your Information & Privacy
                                                </button>
                                                <button
                                                    class="nav-link tw-px-8 tw-py-5 text-neutral-500 fw-semibold text-start w-100 tw-rounded-md"
                                                    id="v-pills-Miscellanea-tab"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-Miscellanea"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="v-pills-Miscellanea"
                                                    aria-selected="false"
                                                >
                                                    Miscellanea
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div
                                            class="tab-content ps-lg-5"
                                            id="v-pills-tabContent"
                                        >
                                            <div
                                                class="tab-pane fade show active"
                                                id="v-pills-home"
                                                role="tabpanel"
                                                aria-labelledby="v-pills-home-tab"
                                                tabindex="0"
                                            >
                                                <div class="">
                                                    <!-- Content Start -->
                                                    <div class="">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation and
                                                            Changes
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Compensation
                                                            will not be paid for
                                                            changes or
                                                            cancellations caused
                                                            by Acts of God
                                                            (Force Majeure),
                                                            war, threat of war,
                                                            riot, civil strike,
                                                            industrial dispute,
                                                            terrorist activity,
                                                            natural or man-made
                                                            disaster, fire,
                                                            technical problems
                                                            to transport,
                                                            closure or
                                                            congestion of
                                                            airports, strikes or
                                                            other industrial
                                                            action, adverse
                                                            weather conditions
                                                            or any other event
                                                            beyond the Company's
                                                            control. It is
                                                            essential that you
                                                            take out adequate
                                                            travel insurance.
                                                        </p>
                                                    </div>
                                                    <div class="tw-mt-9">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation by
                                                            You
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <div class="tw-my-4">
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >30 days or
                                                                    more 50% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >15 - 30
                                                                    days 100% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >8 - 15 days
                                                                    80% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >1 - 7 days
                                                                    100% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                        </div>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                    </div>
                                                    <!-- Content End -->
                                                </div>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="v-pills-profile"
                                                role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab"
                                                tabindex="0"
                                            >
                                                <div class="">
                                                    <!-- Content Start -->
                                                    <div class="">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation and
                                                            Changes
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Compensation
                                                            will not be paid for
                                                            changes or
                                                            cancellations caused
                                                            by Acts of God
                                                            (Force Majeure),
                                                            war, threat of war,
                                                            riot, civil strike,
                                                            industrial dispute,
                                                            terrorist activity,
                                                            natural or man-made
                                                            disaster, fire,
                                                            technical problems
                                                            to transport,
                                                            closure or
                                                            congestion of
                                                            airports, strikes or
                                                            other industrial
                                                            action, adverse
                                                            weather conditions
                                                            or any other event
                                                            beyond the Company's
                                                            control. It is
                                                            essential that you
                                                            take out adequate
                                                            travel insurance.
                                                        </p>
                                                    </div>
                                                    <div class="tw-mt-9">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation by
                                                            You
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <div class="tw-my-4">
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >30 days or
                                                                    more 50% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >15 - 30
                                                                    days 100% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >8 - 15 days
                                                                    80% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >1 - 7 days
                                                                    100% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                        </div>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                    </div>
                                                    <!-- Content End -->
                                                </div>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="v-pills-disabled"
                                                role="tabpanel"
                                                aria-labelledby="v-pills-disabled-tab"
                                                tabindex="0"
                                            >
                                                <div class="">
                                                    <!-- Content Start -->
                                                    <div class="">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation and
                                                            Changes
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Compensation
                                                            will not be paid for
                                                            changes or
                                                            cancellations caused
                                                            by Acts of God
                                                            (Force Majeure),
                                                            war, threat of war,
                                                            riot, civil strike,
                                                            industrial dispute,
                                                            terrorist activity,
                                                            natural or man-made
                                                            disaster, fire,
                                                            technical problems
                                                            to transport,
                                                            closure or
                                                            congestion of
                                                            airports, strikes or
                                                            other industrial
                                                            action, adverse
                                                            weather conditions
                                                            or any other event
                                                            beyond the Company's
                                                            control. It is
                                                            essential that you
                                                            take out adequate
                                                            travel insurance.
                                                        </p>
                                                    </div>
                                                    <div class="tw-mt-9">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation by
                                                            You
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <div class="tw-my-4">
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >30 days or
                                                                    more 50% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >15 - 30
                                                                    days 100% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >8 - 15 days
                                                                    80% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >1 - 7 days
                                                                    100% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                        </div>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                    </div>
                                                    <!-- Content End -->
                                                </div>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="v-pills-messages"
                                                role="tabpanel"
                                                aria-labelledby="v-pills-messages-tab"
                                                tabindex="0"
                                            >
                                                <div class="">
                                                    <!-- Content Start -->
                                                    <div class="">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation and
                                                            Changes
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Compensation
                                                            will not be paid for
                                                            changes or
                                                            cancellations caused
                                                            by Acts of God
                                                            (Force Majeure),
                                                            war, threat of war,
                                                            riot, civil strike,
                                                            industrial dispute,
                                                            terrorist activity,
                                                            natural or man-made
                                                            disaster, fire,
                                                            technical problems
                                                            to transport,
                                                            closure or
                                                            congestion of
                                                            airports, strikes or
                                                            other industrial
                                                            action, adverse
                                                            weather conditions
                                                            or any other event
                                                            beyond the Company's
                                                            control. It is
                                                            essential that you
                                                            take out adequate
                                                            travel insurance.
                                                        </p>
                                                    </div>
                                                    <div class="tw-mt-9">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation by
                                                            You
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <div class="tw-my-4">
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >30 days or
                                                                    more 50% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >15 - 30
                                                                    days 100% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >8 - 15 days
                                                                    80% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >1 - 7 days
                                                                    100% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                        </div>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                    </div>
                                                    <!-- Content End -->
                                                </div>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="v-pills-settings"
                                                role="tabpanel"
                                                aria-labelledby="v-pills-settings-tab"
                                                tabindex="0"
                                            >
                                                <div class="">
                                                    <!-- Content Start -->
                                                    <div class="">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation and
                                                            Changes
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Compensation
                                                            will not be paid for
                                                            changes or
                                                            cancellations caused
                                                            by Acts of God
                                                            (Force Majeure),
                                                            war, threat of war,
                                                            riot, civil strike,
                                                            industrial dispute,
                                                            terrorist activity,
                                                            natural or man-made
                                                            disaster, fire,
                                                            technical problems
                                                            to transport,
                                                            closure or
                                                            congestion of
                                                            airports, strikes or
                                                            other industrial
                                                            action, adverse
                                                            weather conditions
                                                            or any other event
                                                            beyond the Company's
                                                            control. It is
                                                            essential that you
                                                            take out adequate
                                                            travel insurance.
                                                        </p>
                                                    </div>
                                                    <div class="tw-mt-9">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation by
                                                            You
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <div class="tw-my-4">
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >30 days or
                                                                    more 50% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >15 - 30
                                                                    days 100% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >8 - 15 days
                                                                    80% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >1 - 7 days
                                                                    100% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                        </div>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                    </div>
                                                    <!-- Content End -->
                                                </div>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="v-pills-TripOperation"
                                                role="tabpanel"
                                                aria-labelledby="v-pills-TripOperation-tab"
                                                tabindex="0"
                                            >
                                                <div class="">
                                                    <!-- Content Start -->
                                                    <div class="">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation and
                                                            Changes
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Compensation
                                                            will not be paid for
                                                            changes or
                                                            cancellations caused
                                                            by Acts of God
                                                            (Force Majeure),
                                                            war, threat of war,
                                                            riot, civil strike,
                                                            industrial dispute,
                                                            terrorist activity,
                                                            natural or man-made
                                                            disaster, fire,
                                                            technical problems
                                                            to transport,
                                                            closure or
                                                            congestion of
                                                            airports, strikes or
                                                            other industrial
                                                            action, adverse
                                                            weather conditions
                                                            or any other event
                                                            beyond the Company's
                                                            control. It is
                                                            essential that you
                                                            take out adequate
                                                            travel insurance.
                                                        </p>
                                                    </div>
                                                    <div class="tw-mt-9">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation by
                                                            You
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <div class="tw-my-4">
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >30 days or
                                                                    more 50% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >15 - 30
                                                                    days 100% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >8 - 15 days
                                                                    80% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >1 - 7 days
                                                                    100% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                        </div>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                    </div>
                                                    <!-- Content End -->
                                                </div>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="v-pills-Participation"
                                                role="tabpanel"
                                                aria-labelledby="v-pills-Participation-tab"
                                                tabindex="0"
                                            >
                                                <div class="">
                                                    <!-- Content Start -->
                                                    <div class="">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation and
                                                            Changes
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Compensation
                                                            will not be paid for
                                                            changes or
                                                            cancellations caused
                                                            by Acts of God
                                                            (Force Majeure),
                                                            war, threat of war,
                                                            riot, civil strike,
                                                            industrial dispute,
                                                            terrorist activity,
                                                            natural or man-made
                                                            disaster, fire,
                                                            technical problems
                                                            to transport,
                                                            closure or
                                                            congestion of
                                                            airports, strikes or
                                                            other industrial
                                                            action, adverse
                                                            weather conditions
                                                            or any other event
                                                            beyond the Company's
                                                            control. It is
                                                            essential that you
                                                            take out adequate
                                                            travel insurance.
                                                        </p>
                                                    </div>
                                                    <div class="tw-mt-9">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation by
                                                            You
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <div class="tw-my-4">
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >30 days or
                                                                    more 50% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >15 - 30
                                                                    days 100% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >8 - 15 days
                                                                    80% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >1 - 7 days
                                                                    100% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                        </div>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                    </div>
                                                    <!-- Content End -->
                                                </div>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="v-pills-Passports"
                                                role="tabpanel"
                                                aria-labelledby="v-pills-Passports-tab"
                                                tabindex="0"
                                            >
                                                <div class="">
                                                    <!-- Content Start -->
                                                    <div class="">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation and
                                                            Changes
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Compensation
                                                            will not be paid for
                                                            changes or
                                                            cancellations caused
                                                            by Acts of God
                                                            (Force Majeure),
                                                            war, threat of war,
                                                            riot, civil strike,
                                                            industrial dispute,
                                                            terrorist activity,
                                                            natural or man-made
                                                            disaster, fire,
                                                            technical problems
                                                            to transport,
                                                            closure or
                                                            congestion of
                                                            airports, strikes or
                                                            other industrial
                                                            action, adverse
                                                            weather conditions
                                                            or any other event
                                                            beyond the Company's
                                                            control. It is
                                                            essential that you
                                                            take out adequate
                                                            travel insurance.
                                                        </p>
                                                    </div>
                                                    <div class="tw-mt-9">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation by
                                                            You
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <div class="tw-my-4">
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >30 days or
                                                                    more 50% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >15 - 30
                                                                    days 100% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >8 - 15 days
                                                                    80% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >1 - 7 days
                                                                    100% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                        </div>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                    </div>
                                                    <!-- Content End -->
                                                </div>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="v-pills-Information"
                                                role="tabpanel"
                                                aria-labelledby="v-pills-Information-tab"
                                                tabindex="0"
                                            >
                                                <div class="">
                                                    <!-- Content Start -->
                                                    <div class="">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation and
                                                            Changes
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Compensation
                                                            will not be paid for
                                                            changes or
                                                            cancellations caused
                                                            by Acts of God
                                                            (Force Majeure),
                                                            war, threat of war,
                                                            riot, civil strike,
                                                            industrial dispute,
                                                            terrorist activity,
                                                            natural or man-made
                                                            disaster, fire,
                                                            technical problems
                                                            to transport,
                                                            closure or
                                                            congestion of
                                                            airports, strikes or
                                                            other industrial
                                                            action, adverse
                                                            weather conditions
                                                            or any other event
                                                            beyond the Company's
                                                            control. It is
                                                            essential that you
                                                            take out adequate
                                                            travel insurance.
                                                        </p>
                                                    </div>
                                                    <div class="tw-mt-9">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation by
                                                            You
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <div class="tw-my-4">
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >30 days or
                                                                    more 50% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >15 - 30
                                                                    days 100% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >8 - 15 days
                                                                    80% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >1 - 7 days
                                                                    100% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                        </div>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                    </div>
                                                    <!-- Content End -->
                                                </div>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="v-pills-Miscellanea"
                                                role="tabpanel"
                                                aria-labelledby="v-pills-Miscellanea-tab"
                                                tabindex="0"
                                            >
                                                <div class="">
                                                    <!-- Content Start -->
                                                    <div class="">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation and
                                                            Changes
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Compensation
                                                            will not be paid for
                                                            changes or
                                                            cancellations caused
                                                            by Acts of God
                                                            (Force Majeure),
                                                            war, threat of war,
                                                            riot, civil strike,
                                                            industrial dispute,
                                                            terrorist activity,
                                                            natural or man-made
                                                            disaster, fire,
                                                            technical problems
                                                            to transport,
                                                            closure or
                                                            congestion of
                                                            airports, strikes or
                                                            other industrial
                                                            action, adverse
                                                            weather conditions
                                                            or any other event
                                                            beyond the Company's
                                                            control. It is
                                                            essential that you
                                                            take out adequate
                                                            travel insurance.
                                                        </p>
                                                    </div>
                                                    <div class="tw-mt-9">
                                                        <h3 class="tw-mb-8">
                                                            1.Cancellation by
                                                            You
                                                        </h3>
                                                        <h6 class="tw-mb-5">
                                                            Description:
                                                        </h6>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            a&#41; Occasionally
                                                            it may be deemed
                                                            necessary to make
                                                            changes to your
                                                            holiday and the
                                                            Company reserves the
                                                            right to do so at
                                                            any time, and you
                                                            will be notified of
                                                            any changes at the
                                                            earliest possible
                                                            opportunity. If a
                                                            major change to your
                                                            tour is necessary,
                                                            providing it does
                                                            not arise from
                                                            circumstances beyond
                                                            the Company's
                                                            control, you may
                                                            choose (i) to accept
                                                            the change of
                                                            arrangements (ii) to
                                                            purchase another
                                                            holiday from us or
                                                            (iii) to cancel your
                                                            holiday.
                                                            Compensation may be
                                                            payable in cases of
                                                            major change as
                                                            detailed below.
                                                        </p>
                                                        <div class="tw-my-4">
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >30 days or
                                                                    more 50% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >15 - 30
                                                                    days 100% of
                                                                    Deposit</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >8 - 15 days
                                                                    80% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                            <p
                                                                class="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3"
                                                            >
                                                                <span
                                                                    class="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"
                                                                ></span>
                                                                <span class=""
                                                                    >1 - 7 days
                                                                    100% of Tour
                                                                    Cost</span
                                                                >
                                                            </p>
                                                        </div>
                                                        <p
                                                            class="text-neutral-500 tw-leading-212 tw-mb-6"
                                                        >
                                                            b&#41; No
                                                            compensation will be
                                                            payable for minor
                                                            changes. Minor
                                                            changes include
                                                            minimal changes to
                                                            departure and
                                                            arrival times,
                                                            changes to the type
                                                            of aircraft used and
                                                            restaurant and
                                                            accommodation
                                                            changes to a
                                                            comparable or
                                                            superior standard.
                                                        </p>
                                                    </div>
                                                    <!-- Content End -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Privacy Policy End -->

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
