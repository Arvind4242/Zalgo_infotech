@extends('frontend.layouts.app')
@section('title', 'Life Tree Anatomical – Case Study')
@section('content')

    @include('frontend.includes.headers.headerOne')

    <div id="smooth-content">

        <!-- Banner -->
        <section class="case-study-banner tw-py-10 overflow-hidden position-relative">
            <div class="container max-w-1400-px">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6 mt-0">
                        <div class="case-study-content">
                            <h1 class="splitTextStyleOne fw-light tw-leading-104">
                                <span class="d-inline-block">Building a Compassionate</span>
                                <span class="text-green d-inline-block fw-semibold"> Digital Platform</span>
                                <span class="d-inline-block fw-semibold">for Texas's First</span>
                                <span class="text-green d-inline-block fw-semibold">Non-University Body </span>
                                <span class="d-inline-block fw-semibold">Donation Program</span>
                            </h1>
                            <p style="color:rgb(33 74 2);" class="fs-4 h5 mt-3 pt-1 text-heading tw-mt-20 tw-text-lg">
                                WordPress | Healthcare | UI/UX Design | SEO | Responsive Design
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('assets/images/thumbs/Lifetreeanatomical.jpg')}}" alt="Life Tree Anatomical" class="w-100 h-100 object-fit-cover tw-rounded-2xl" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Meta -->
        <section class="search-domain-two tw-pt-10 tw-pb-10 position-relative z-1 zal-projet-type">
            <div class="container">
                <div class="row gy-4 select-domain-wrapper">
                    <div class="col-md-12">
                        <div class="d-flex tw-gap-305 flex-wrap">
                            <div class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item pb-3">
                                <img src="{{asset('assets/images/thumbs/pltform.gif')}}" alt="Platform" class="animate__wobble" />
                                <span class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">Platform</span>
                                <span class="p-type">WordPress</span>
                            </div>
                            <div class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item pb-3">
                                <img src="{{asset('assets/images/thumbs/industry.gif')}}" alt="Industry" class="animate__wobble" />
                                <span class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">Industry</span>
                                <span class="p-type">Healthcare</span>
                            </div>
                            <div class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item pb-3">
                                <img src="{{asset('assets/images/thumbs/project-type.gif')}}" alt="Project Type" class="animate__wobble" />
                                <span class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">Project Type</span>
                                <span class="p-type">Long Term</span>
                            </div>
                            <div class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item pb-3">
                                <img src="{{asset('assets/images/thumbs/duration.gif')}}" alt="Duration" class="animate__wobble" />
                                <span class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">Duration</span>
                                <span class="p-type">Ongoing</span>
                            </div>
                            <div class="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item pb-3">
                                <img src="{{asset('assets/images/thumbs/region.gif')}}" alt="Region" class="animate__wobble" />
                                <span class="d-block text-heading tw-mt-105 tw-text-sm fw-bold">Region</span>
                                <span class="p-type">Texas, USA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Client Overview -->
        <section class="bg-body-secondary client-overview position-relative py-120 z-1">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-12">
                        <h1 class="splitTextStyleOne fw-light tw-leading-104 text-center">
                            <span class="d-inline-block">Client</span>
                            <span class="text-green d-inline-block fw-semibold">Overview</span>
                        </h1>
                        <p class="fs-3 lh-sm mt-3 h5 mx-auto text-center">
                            Life Tree Anatomical is Texas's first non-university willed body program, operating 24/7 out of Texas, USA. They facilitate whole body donation to accredited medical institutions for educational and scientific research purposes — completely free of charge to donors and their families. Their tagline says it all: <em>"Respect · Dignity · Legacy."</em> Services include free transportation throughout Texas, free cremation with ashes returned to the family, an annual remembrance ceremony for donors, and compassionate grief and bereavement support. Life Tree Anatomical needed a professional, trustworthy, and sensitive digital presence to guide families through one of life's most important decisions.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Business Challenges -->
        <section class="brand-marketing py-120">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6 col-md-12">
                        <div class="ps-5 position-relative pe-lg-5 tw-pb-4 h-100">
                            <div class="tw-rounded-28-px overflow-hidden h-100">
                                <img src="{{asset('assets/images/case-study/bio-img1.jpg')}}" alt="Challenges" class="w-100 h-100 object-fit-cover" />
                            </div>
                            <img src="{{asset('assets/images/shapes/finger-shape.png')}}" alt="Shape" class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h2 class="splitTextStyleOne text-heading fw-semibold text-capitalize">
                            Business <span class="font-dm-serif fw-semibold text-green">Challenges</span>
                        </h2>
                        <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">Building a digital presence for a sensitive, trust-critical healthcare service presented unique challenges:</p>
                        <div class="tw-mt-5 d-flex flex-column">
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="600">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Communicating a sensitive, deeply personal service (whole body donation) with empathy and clarity online</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="700">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Building strong trust as Texas's first non-university willed body program — a new concept for many families</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Guiding families through a clear 4-step registration process while maintaining a compassionate tone</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Making the website accessible 24/7 to serve families in their most urgent moments</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Driving organic search traffic for body donation, free cremation, and end-of-life planning in Texas</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Ensuring mobile responsiveness for families reaching out from any device at any hour</p>
                            </div>
                        </div>
                        <p class="fs-3 fw-medium lh-sm tw-mt-8 tw-text-lg">Life Tree Anatomical needed a digital partner who could balance sensitivity, professionalism, and clarity.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Role -->
        <section class="brand-marketing bg-success-subtle py-120">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6 col-md-12">
                        <h2 class="splitTextStyleOne text-heading fw-semibold text-capitalize">
                            Our Role & <span class="font-dm-serif fw-semibold text-green">Responsibilities</span>
                        </h2>
                        <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">We served as their complete digital partner — designing a website that honours the gravity of their mission. Our responsibilities included:</p>
                        <div class="tw-mt-5 d-flex flex-column">
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="600">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Custom WordPress website design with a compassionate, respectful UI/UX approach</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="700">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Clear presentation of the 4-step donor registration process (Contact → Registration Packet → Next of Kin → Notification)</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Services pages detailing free transportation, free cremation, grief support, and annual remembrance ceremony</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">SEO strategy targeting body donation, free cremation Texas, and end-of-life planning keywords</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Mobile-responsive design ensuring 24/7 accessibility for families on any device</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Contact integration with 24/7 phone (512-402-8533) and email (info@lifetreeanatomical.com)</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Ongoing maintenance, security, and performance monitoring</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="ps-5 position-relative tw-pb-4 h-100">
                            <div class="tw-rounded-28-px overflow-hidden h-100">
                                <img src="{{asset('assets/images/case-study/bio-img2.jpg')}}" alt="Our Role" class="w-100 h-100 object-fit-cover" />
                            </div>
                            <img src="{{asset('assets/images/shapes/finger-shape.png')}}" alt="Shape" class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solution Delivered -->
        <section class="brand-marketing py-120">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6 col-md-12">
                        <div class="ps-5 position-relative pe-lg-5 tw-pb-4 h-100">
                            <div class="tw-rounded-28-px overflow-hidden h-100">
                                <img src="{{asset('assets/images/case-study/bio-img3.jpg')}}" alt="Solution" class="w-100 h-100 object-fit-cover" />
                            </div>
                            <img src="{{asset('assets/images/shapes/finger-shape.png')}}" alt="Shape" class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h2 class="splitTextStyleOne text-heading fw-semibold text-capitalize">
                            Solution <span class="font-dm-serif fw-semibold text-green">Delivered</span>
                        </h2>
                        <p class="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">We built a dignified, trustworthy WordPress website that guides Texas families through body donation with respect and clarity. Key Solutions:</p>
                        <div class="tw-mt-5 d-flex flex-column">
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="600">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Compassionate WordPress website aligned with their "Respect · Dignity · Legacy" mission</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="700">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Clear step-by-step donor registration flow making the process easy for families in grief</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">Dedicated service pages: free transportation, free cremation, grief support, and annual remembrance ceremony</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">SEO-optimised content positioning them as Texas's premier willed body donation program</p>
                            </div>
                            <div class="d-flex align-items-start tw-gap-5" data-aos="fade-up" data-aos-duration="800">
                                <span class="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0"><i class="ph ph-check"></i></span>
                                <p class="tw-text-lg fw-medium text-heading flex-grow-1">24/7-accessible, fully mobile-responsive design for urgent family inquiries at any time</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack -->
        <section class="pb-120 overflow-hidden position-relative">
            <img src="{{asset('assets/images/bg/mash-gradient-bg6.png')}}" alt="Gradient BG" class="position-absolute tw-start-0 top-0 w-100 h-100 z-n1" />
            <div class="container max-w-1290-px">
                <div class="row gy-5 align-items-center flex-wrap-reverse">
                    <div class="col-xl-6" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="position-relative tw-p-12 text-center">
                            <img src="{{asset('assets/images/shapes/rounded-circle.png')}}" alt="Bg Round" />
                            <img src="{{asset('assets/images/shapes/cms-development.png')}}" alt="Icons" class="position-absolute top-50 start-50 animation-rotate-right" />
                            <img src="{{asset('assets/images/shapes/cms-development2.png')}}" alt="Icons" class="position-absolute top-50 start-50 animation-rotate-left" />
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <h3><span class="counter">24</span>/7</h3>
                                <span class="text-heading">Available</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="text-start mx-auto tw-mb-12">
                            <div class="tw-mb-10">
                                <h2 class="splitTextStyleOne text-heading text-capitalize max-w-532-px">Technology Stack</h2>
                                <p class="flex-column d-flex text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                    <span><b>CMS:</b> WordPress</span>
                                    <span><b>Design:</b> Compassionate UI/UX for healthcare</span>
                                    <span><b>SEO:</b> Healthcare & end-of-life planning keywords</span>
                                    <span><b>Contact:</b> (512) 402-8533 | info@lifetreeanatomical.com</span>
                                    <span><b>Availability:</b> 24/7 open to families across Texas</span>
                                    <span><b>Location:</b> Texas, United States</span>
                                </p>
                            </div>
                            <div class="tw-mt-12" data-aos="fade-up" data-aos-duration="900">
                                <a href="{{route('contact')}}" class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-17 rounded-pill tw-py-505 fw-medium" data-block="button">
                                    <span class="button__flair"></span><span class="button__label">Get Started</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Results -->
        <section class="seamless-integration py-120">
            <div class="container max-w-1400-px">
                <div class="max-w-672-px text-center mx-auto tw-mb-12">
                    <h3 class="splitTextStyleOne text-heading text-capitalize">Results & Impact</h3>
                    <p class="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">A dignified digital presence that helps Texas families make a meaningful end-of-life decision</p>
                </div>
                <div class="border border-neutral-200 tw-rounded-xl common-shadow-sixteen">
                    <div class="row col-border-wrapper">
                        <div class="col-xl-3 col-md-6 col-sm-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8"><img src="{{asset('assets/images/icons/seamless-icon1.png')}}" alt="Icon" /></span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">Texas's first non-university willed body donation program</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8"><img src="{{asset('assets/images/icons/seamless-icon2.png')}}" alt="Icon" /></span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">24/7 accessibility for families across the entire state of Texas</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8"><img src="{{asset('assets/images/icons/seamless-icon3.png')}}" alt="Icon" /></span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">Consistent organic traffic growth through healthcare SEO</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 border-0">
                            <div class="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                                <span class="tw-mb-8"><img src="{{asset('assets/images/icons/seamless-icon4.png')}}" alt="Icon" /></span>
                                <h6 class="tw-mb-10 max-w-172-px mx-auto">Ongoing long-term digital partnership and maintenance</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why This Matters -->
        <section class="services py-120 position-relative z-1 gradient-bg-five">
            <div class="container max-w-1552-px">
                <div class="max-w-672-px text-center mx-auto tw-mb-12">
                    <h2 class="splitTextStyleOne text-white">Why This <span class="font-dm-serif fst-italic fw-normal">Case Study</span> Matters</h2>
                </div>
                <div class="d-flex flex-wrap gap-3 why-choose-us">
                    <div class="w-25 tw-pb-105" data-aos="fade-up" data-aos-duration="1000">
                        <div class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                            <div class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                <span class="tw-mb-13 group-hover-item-text-invert"><img src="{{asset('assets/images/icons/marketing-report.png')}}" alt="Icon" class="animate__heartBeat" /></span>
                                <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">Proves our expertise in sensitive healthcare website design</h5>
                            </div>
                        </div>
                    </div>
                    <div class="w-25 tw-pb-105" data-aos="fade-up" data-aos-duration="1000">
                        <div class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                            <div class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                <span class="tw-mb-13 group-hover-item-text-invert"><img src="{{asset('assets/images/icons/satisfaction.png')}}" alt="Icon" class="animate__heartBeat" /></span>
                                <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">Shows ability to build trust and empathy through web design</h5>
                            </div>
                        </div>
                    </div>
                    <div class="w-25 tw-pb-105" data-aos="fade-up" data-aos-duration="1000">
                        <div class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                            <div class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                <span class="tw-mb-13 group-hover-item-text-invert"><img src="{{asset('assets/images/icons/system.png')}}" alt="Icon" class="animate__heartBeat" /></span>
                                <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">Demonstrates SEO capability in niche healthcare verticals</h5>
                            </div>
                        </div>
                    </div>
                    <div class="w-25 tw-pb-105" data-aos="fade-up" data-aos-duration="1000">
                        <div class="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                            <div class="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                                <span class="tw-mb-13 group-hover-item-text-invert"><img src="{{asset('assets/images/icons/trust.png')}}" alt="Icon" class="animate__heartBeat" /></span>
                                <h5 class="group-hover-text-white tw-duration-200 max-w-250-px">Builds confidence for healthcare and non-profit sector clients</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half pt-120">
            <div class="container">
                <div class="text-end tw--mb-40-px position-relative z-2">
                    <img src="{{asset('assets/images/thumbs/laptop-man.png')}}" alt="Image" class="tw-me-84-px" />
                </div>
                <div class="bg-green-deep tw-rounded-3xl tw-pt-100-px position-relative z-1">
                    <img src="{{asset('assets/images/shapes/hill-shape.png')}}" alt="Hill Shape" class="position-absolute w-100 h-100 top-0 tw-start-0 z-n1" />
                    <img src="{{asset('assets/images/thumbs/task-management-img.png')}}" alt="Image" class="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none" />
                    <div class="tw-mb-8 text-center max-w-570-px mx-auto">
                        <div class="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13" data-aos="fade-up" data-aos-duration="600">
                            <div>Need a compassionate digital presence? <span class="text-yellow text-stroke-yellow">Let's build it</span></div>
                        </div>
                        <h3 class="splitTextStyleOne text-white">Ready to bring your mission online?</h3>
                        <div class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                            <a href="{{ route('contact') }}" class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7" data-block="button">
                                <span class="button__flair"></span><span class="button__label">Request a Quote</span>
                            </a>
                            <a target="blank" href="https://calendly.com/zalgoinfotec/30min" class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7" data-block="button">
                                <span class="button__flair"></span><span class="button__label">Talk to Expert</span>
                            </a>
                        </div>
                    </div>
                    <div class="tw-pt-8 text-center">
                        <div class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">WordPress Development</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Healthcare Web Design</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Body Donation Program</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill">Compassionate UI/UX</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">SEO Strategy</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Texas Healthcare</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">End-of-Life Services</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">24/7 Accessibility</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Medical Research</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill">Responsive Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.includes.footers.footerOne')
    </div>
    </div>

@endsection
