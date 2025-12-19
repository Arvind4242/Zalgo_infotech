@extends('frontend.layouts.app')
@section('title', 'Blog')
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
                                        Blog Page
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->

                <!-- Blog Start -->
                <section class="py-120">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-8">
                                <div class="d-flex flex-column tw-gap-15">
                                    <div
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <div class="position-relative">
                                            <a
                                                href="{{route('blog.details')}}"
                                                class="w-100 h-100 overflow-hidden tw-rounded-3xl"
                                            >
                                                <img
                                                    src="{{asset('assets/images/thumbs/blog-page-img1.png')}}"
                                                    alt=""
                                                    class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                                />
                                            </a>
                                            <h6
                                                class="blog-date tw-duration-300 tw-py-4 text-white d-flex justify-content-center align-items-center max-w-85-px w-100 tw-px-4 text-center tw-rounded-lg fw-medium position-absolute top-0 tw-start-0 tw-mt-4 tw-ms-4 bg-main-600 fw-bold font-body"
                                            >
                                                24 Feb
                                            </h6>
                                        </div>
                                        <div class="tw-mt-10">
                                            <div
                                                class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap"
                                            >
                                                <div
                                                    class="d-flex align-items-center tw-gap-2"
                                                >
                                                    <span
                                                        class="text-main-600 tw-text-lg"
                                                    >
                                                        <i
                                                            class="ph ph-user"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-neutral-600 tw-text-sm"
                                                        >Mehedii .H</span
                                                    >
                                                </div>
                                                <span
                                                    class="tw-w-205 border border-neutral-200"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2"
                                                >
                                                    <span
                                                        class="text-main-600 tw-text-lg"
                                                    >
                                                        <i
                                                            class="ph-bold ph-chats-circle"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-neutral-600 tw-text-sm"
                                                        >Comments (03)</span
                                                    >
                                                </div>
                                                <span
                                                    class="tw-w-205 border border-neutral-200"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2"
                                                >
                                                    <span
                                                        class="text-main-600 tw-text-lg"
                                                    >
                                                        <i
                                                            class="ph ph-clock"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-neutral-600 tw-text-sm"
                                                        >3 min Read</span
                                                    >
                                                </div>
                                            </div>
                                            <h4 class="tw-mb-4">
                                                <a
                                                    href="{{route('blog.details')}}"
                                                    class="splitTextStyleOne"
                                                    >The whimsically named Egg
                                                    Canvas brainch
                                                </a>
                                            </h4>
                                            <p
                                                class="tw-text-lg text-neutral-600 max-w-730-px splitTextStyleOne"
                                            >
                                                There are many variations of
                                                passages of Lorem Ipsum
                                                available, but majority have
                                                suffered teration in some form,
                                                by injected humour, or
                                                randomised words which don't
                                                look even slight believable. If
                                                you are going to use a passage
                                                of Lorem Ipsum.
                                            </p>
                                            <a
                                                href="{{route('blog.details')}}"
                                                class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider"
                                            >
                                                Read More
                                                <span class=""
                                                    ><img
                                                        src="{{asset('assets/images/icons/arrow-long.svg')}}"
                                                        alt=""
                                                        class=""
                                                /></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <div class="position-relative">
                                            <a
                                                href="{{route('blog.details')}}"
                                                class="w-100 h-100 overflow-hidden tw-rounded-3xl"
                                            >
                                                <img
                                                    src="{{asset('assets/images/thumbs/blog-page-img2.png')}}"
                                                    alt=""
                                                    class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                                />
                                            </a>
                                            <h6
                                                class="blog-date tw-duration-300 tw-py-4 text-white d-flex justify-content-center align-items-center max-w-85-px w-100 tw-px-4 text-center tw-rounded-lg fw-medium position-absolute top-0 tw-start-0 tw-mt-4 tw-ms-4 bg-main-600 fw-bold font-body"
                                            >
                                                24 Feb
                                            </h6>
                                        </div>
                                        <div class="tw-mt-10">
                                            <div
                                                class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap"
                                            >
                                                <div
                                                    class="d-flex align-items-center tw-gap-2"
                                                >
                                                    <span
                                                        class="text-main-600 tw-text-lg"
                                                    >
                                                        <i
                                                            class="ph ph-user"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-neutral-600 tw-text-sm"
                                                        >Mehedii .H</span
                                                    >
                                                </div>
                                                <span
                                                    class="tw-w-205 border border-neutral-200"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2"
                                                >
                                                    <span
                                                        class="text-main-600 tw-text-lg"
                                                    >
                                                        <i
                                                            class="ph-bold ph-chats-circle"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-neutral-600 tw-text-sm"
                                                        >Comments (03)</span
                                                    >
                                                </div>
                                                <span
                                                    class="tw-w-205 border border-neutral-200"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2"
                                                >
                                                    <span
                                                        class="text-main-600 tw-text-lg"
                                                    >
                                                        <i
                                                            class="ph ph-clock"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-neutral-600 tw-text-sm"
                                                        >3 min Read</span
                                                    >
                                                </div>
                                            </div>
                                            <h4 class="tw-mb-4">
                                                <a
                                                    href="{{route('blog.details')}}"
                                                    class="splitTextStyleOne"
                                                    >The whimsically named Egg
                                                    Canvas brainch
                                                </a>
                                            </h4>
                                            <p
                                                class="tw-text-lg text-neutral-600 max-w-730-px splitTextStyleOne"
                                            >
                                                There are many variations of
                                                passages of Lorem Ipsum
                                                available, but majority have
                                                suffered teration in some form,
                                                by injected humour, or
                                                randomised words which don't
                                                look even slight believable. If
                                                you are going to use a passage
                                                of Lorem Ipsum.
                                            </p>
                                            <a
                                                href="{{route('blog.details')}}"
                                                class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider"
                                            >
                                                Read More
                                                <span class=""
                                                    ><img
                                                        src="{{asset('assets/images/icons/arrow-long.svg')}}"
                                                        alt=""
                                                        class=""
                                                /></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <div class="position-relative">
                                            <a
                                                href="{{route('blog.details')}}"
                                                class="w-100 h-100 overflow-hidden tw-rounded-3xl"
                                            >
                                                <img
                                                    src="{{asset('assets/images/thumbs/blog-page-img3.png')}}"
                                                    alt=""
                                                    class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                                />
                                            </a>
                                            <h6
                                                class="blog-date tw-duration-300 tw-py-4 text-white d-flex justify-content-center align-items-center max-w-85-px w-100 tw-px-4 text-center tw-rounded-lg fw-medium position-absolute top-0 tw-start-0 tw-mt-4 tw-ms-4 bg-main-600 fw-bold font-body"
                                            >
                                                24 Feb
                                            </h6>
                                        </div>
                                        <div class="tw-mt-10">
                                            <div
                                                class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap"
                                            >
                                                <div
                                                    class="d-flex align-items-center tw-gap-2"
                                                >
                                                    <span
                                                        class="text-main-600 tw-text-lg"
                                                    >
                                                        <i
                                                            class="ph ph-user"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-neutral-600 tw-text-sm"
                                                        >Mehedii .H</span
                                                    >
                                                </div>
                                                <span
                                                    class="tw-w-205 border border-neutral-200"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2"
                                                >
                                                    <span
                                                        class="text-main-600 tw-text-lg"
                                                    >
                                                        <i
                                                            class="ph-bold ph-chats-circle"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-neutral-600 tw-text-sm"
                                                        >Comments (03)</span
                                                    >
                                                </div>
                                                <span
                                                    class="tw-w-205 border border-neutral-200"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2"
                                                >
                                                    <span
                                                        class="text-main-600 tw-text-lg"
                                                    >
                                                        <i
                                                            class="ph ph-clock"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-neutral-600 tw-text-sm"
                                                        >3 min Read</span
                                                    >
                                                </div>
                                            </div>
                                            <h4 class="tw-mb-4">
                                                <a
                                                    href="{{route('blog.details')}}"
                                                    class="splitTextStyleOne"
                                                    >The whimsically named Egg
                                                    Canvas brainch
                                                </a>
                                            </h4>
                                            <p
                                                class="tw-text-lg text-neutral-600 max-w-730-px splitTextStyleOne"
                                            >
                                                There are many variations of
                                                passages of Lorem Ipsum
                                                available, but majority have
                                                suffered teration in some form,
                                                by injected humour, or
                                                randomised words which don't
                                                look even slight believable. If
                                                you are going to use a passage
                                                of Lorem Ipsum.
                                            </p>
                                            <a
                                                href="{{route('blog.details')}}"
                                                class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider"
                                            >
                                                Read More
                                                <span class=""
                                                    ><img
                                                        src="{{asset('assets/images/icons/arrow-long.svg')}}"
                                                        alt=""
                                                        class=""
                                                /></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 ps-xl-5 ps-lg-4">
                                <!-- Sidebar Start -->
                                <div class="d-flex flex-column tw-gap-8">
                                    <div
                                        class="bg-neutral-50 tw-px-8 text-center tw-py-17"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <div
                                            class="tw-w-95-px tw-h-95-px rounded-circle d-inline-flex"
                                        >
                                            <img
                                                src="{{asset('assets/images/thumbs/blogger.png')}}"
                                                alt=""
                                                class="w-100 h-100 object-fit-cover"
                                            />
                                        </div>
                                        <h6
                                            class="tw-text-base tw-mb-1 tw-mt-4 splitTextStyleOne"
                                        >
                                            Rosalina D. Willaim
                                        </h6>
                                        <span
                                            class="text-neutral-600 tw-text-sm splitTextStyleTwo"
                                            >Blogger/Photographer</span
                                        >
                                        <p class="tw-mt-5 text-neutral-600">
                                            he whimsically named Egg Canvas is
                                            the design director and photographer
                                            in New York. Why the nam
                                        </p>
                                        <ul
                                            class="d-flex align-items-center tw-gap-3 justify-content-center tw-mt-6"
                                        >
                                            <li>
                                                <a
                                                    href="https://www.facebook.com"
                                                    class="tw-w-11 tw-h-11 border border-neutral-200 rounded-0 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"
                                                >
                                                    <i
                                                        class="ph ph-facebook-logo"
                                                    ></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.twitter.com"
                                                    class="tw-w-11 tw-h-11 border border-neutral-200 rounded-0 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"
                                                >
                                                    <i class="ph ph-x-logo"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.instagram.com"
                                                    class="tw-w-11 tw-h-11 border border-neutral-200 rounded-0 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"
                                                >
                                                    <i
                                                        class="ph ph-instagram-logo"
                                                    ></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.youtube.com"
                                                    class="tw-w-11 tw-h-11 border border-neutral-200 rounded-0 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"
                                                >
                                                    <i
                                                        class="ph ph-youtube-logo"
                                                    ></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div
                                        class="bg-neutral-50 tw-px-8 tw-py-8"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6"
                                        >
                                            Search Here
                                        </h5>
                                        <form
                                            action="#"
                                            class="position-relative"
                                        >
                                            <input
                                                type="text"
                                                class="tw-ps-4 tw-pe-12 tw-py-4 bg-white tw-placeholder-text-main-two-600 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none flex-grow-1 border border-white focus-border-main-600 tw-duration-300"
                                                placeholder="Search here..."
                                            />
                                            <button
                                                type="submit"
                                                class="position-absolute top-50 tw--translate-y-50 tw-end-0 text-main-two-600 tw-text-lg d-flex tw-me-5"
                                            >
                                                <i
                                                    class="ph-bold ph-magnifying-glass"
                                                ></i>
                                            </button>
                                        </form>
                                    </div>

                                    <div
                                        class="bg-neutral-50 tw-px-8 tw-py-8"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6"
                                        >
                                            Recent News
                                        </h5>
                                        <div
                                            class="d-flex flex-column tw-gap-8"
                                        >
                                            <div
                                                class="d-flex align-items-center tw-gap-6"
                                            >
                                                <a
                                                    href="{{route('blog.details')}}"
                                                    class="tw-rounded-md overflow-hidden flex-shrink-0"
                                                >
                                                    <img
                                                        src="{{asset('assets/images/thumbs/recent-post-img1.png')}}"
                                                        alt=""
                                                        class="w-100 h-100 object-fit-cover hover-scale-2 tw-duration-500"
                                                    />
                                                </a>
                                                <div class="">
                                                    <div
                                                        class="d-flex align-items-center tw-gap-2"
                                                    >
                                                        <span
                                                            class="text-main-600 tw-text-lg"
                                                        >
                                                            <i
                                                                class="ph-bold ph-calendar-dots"
                                                            ></i>
                                                        </span>
                                                        <span
                                                            class="text-main-two-600 fw-medium tw-text-sm tw-text-sm"
                                                            >Jan 23,2022</span
                                                        >
                                                    </div>
                                                    <h6 class="tw-mt-2">
                                                        <a
                                                            href="{{route('blog.details')}}"
                                                            class="tw-text-base line-clamp-2 text-main-two-600 hover-text-main-600 splitTextStyleOne"
                                                            >Budget Issues Force
                                                            The Our To Become</a
                                                        >
                                                    </h6>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-6"
                                            >
                                                <a
                                                    href="{{route('blog.details')}}"
                                                    class="tw-rounded-md overflow-hidden flex-shrink-0"
                                                >
                                                    <img
                                                        src="{{asset('assets/images/thumbs/recent-post-img2.png')}}"
                                                        alt=""
                                                        class="w-100 h-100 object-fit-cover hover-scale-2 tw-duration-500"
                                                    />
                                                </a>
                                                <div class="">
                                                    <div
                                                        class="d-flex align-items-center tw-gap-2"
                                                    >
                                                        <span
                                                            class="text-main-600 tw-text-lg"
                                                        >
                                                            <i
                                                                class="ph-bold ph-calendar-dots"
                                                            ></i>
                                                        </span>
                                                        <span
                                                            class="text-main-two-600 fw-medium tw-text-sm tw-text-sm"
                                                            >Jan 23,2022</span
                                                        >
                                                    </div>
                                                    <h6 class="tw-mt-2">
                                                        <a
                                                            href="{{route('blog.details')}}"
                                                            class="tw-text-base line-clamp-2 text-main-two-600 hover-text-main-600 splitTextStyleOne"
                                                            >The Best Products
                                                            That Shape
                                                            Fashion</a
                                                        >
                                                    </h6>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-6"
                                            >
                                                <a
                                                    href="{{route('blog.details')}}"
                                                    class="tw-rounded-md overflow-hidden flex-shrink-0"
                                                >
                                                    <img
                                                        src="{{asset('assets/images/thumbs/recent-post-img3.png')}}"
                                                        alt=""
                                                        class="w-100 h-100 object-fit-cover hover-scale-2 tw-duration-500"
                                                    />
                                                </a>
                                                <div class="">
                                                    <div
                                                        class="d-flex align-items-center tw-gap-2"
                                                    >
                                                        <span
                                                            class="text-main-600 tw-text-lg"
                                                        >
                                                            <i
                                                                class="ph-bold ph-calendar-dots"
                                                            ></i>
                                                        </span>
                                                        <span
                                                            class="text-main-two-600 fw-medium tw-text-sm tw-text-sm"
                                                            >Jan 23,2022</span
                                                        >
                                                    </div>
                                                    <h6 class="tw-mt-2">
                                                        <a
                                                            href="{{route('blog.details')}}"
                                                            class="tw-text-base line-clamp-2 text-main-two-600 hover-text-main-600 splitTextStyleOne"
                                                            >The Best Products
                                                            That Shape
                                                            Fashion</a
                                                        >
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-neutral-50 tw-px-8 tw-py-8"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6"
                                        >
                                            Catagories
                                        </h5>
                                        <div
                                            class="d-flex flex-column tw-gap-5"
                                        >
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-medium d-flex align-items-center justify-content-between"
                                            >
                                                Mobile Set
                                                <span
                                                    class="text-main-two-600 group-hover-text-white tw-duration-300 d-flex"
                                                >
                                                    03
                                                </span>
                                            </a>
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-medium d-flex align-items-center justify-content-between"
                                            >
                                                Mobile Set
                                                <span
                                                    class="text-main-two-600 group-hover-text-white tw-duration-300 d-flex"
                                                >
                                                    03
                                                </span>
                                            </a>
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-medium d-flex align-items-center justify-content-between"
                                            >
                                                Mobile Set
                                                <span
                                                    class="text-main-two-600 group-hover-text-white tw-duration-300 d-flex"
                                                >
                                                    03
                                                </span>
                                            </a>
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-medium d-flex align-items-center justify-content-between"
                                            >
                                                Mobile Set
                                                <span
                                                    class="text-main-two-600 group-hover-text-white tw-duration-300 d-flex"
                                                >
                                                    03
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-neutral-50 tw-px-8 tw-py-8"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6"
                                        >
                                            Populer Tags
                                        </h5>
                                        <div class="d-flex tw-gap-3 flex-wrap">
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block"
                                                >Tourist</a
                                            >
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block"
                                                >Traveling</a
                                            >
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block"
                                                >Cave</a
                                            >
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block"
                                                >Sky Dive</a
                                            >
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block"
                                                >hill Climb</a
                                            >
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block"
                                                >Oppos</a
                                            >
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block"
                                                >landing
                                            </a>
                                            <a
                                                href="{{route('blog')}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block"
                                                >Oppos</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <!-- Sidebar End -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Blog End -->

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
