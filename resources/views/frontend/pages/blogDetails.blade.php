@extends('frontend.layouts.app')
@section('title', $blog->title)
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
                                        blog Details
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
                                <div data-aos="fade-up" data-aos-duration="800">
                                    <div class="position-relative">
                                        <div class="w-100 h-100 overflow-hidden">
                                            <img
                                                src="@if($blog->image) {{ \Illuminate\Support\Facades\Storage::url($blog->image) }} @else {{ asset('assets/images/thumbs/blog-page-img1.png') }} @endif"
                                                alt="{{ $blog->title }}"
                                                class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                                            />
                                        </div>
                                        <h6
                                            class="blog-date tw-duration-300 tw-py-4 text-white d-flex justify-content-center align-items-center max-w-85-px w-100 tw-px-4 text-center tw-rounded-lg fw-medium position-absolute top-0 tw-start-0 tw-mt-4 tw-ms-4 bg-main-600 fw-bold font-body"
                                        >
                                            {{ ($blog->published_at ?? $blog->created_at)->format('d M') }}
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
                                                    <i class="ph ph-user"></i>
                                                </span>
                                                <span
                                                    class="text-neutral-600 tw-text-sm"
                                                    >{{ $blog->author_name }}</span
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
                                                    >Comments ({{ $comments->count() }})</span
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
                                                    <i class="ph ph-clock"></i>
                                                </span>
                                                <span
                                                    class="text-neutral-600 tw-text-sm"
                                                    >{{ $blog->read_time }}</span
                                                >
                                            </div>
                                        </div>
                                        <h3 class="tw-mb-4 splitTextStyleOne">
                                            {{ $blog->title }}
                                        </h3>

                                        <div class="tw-text-base text-neutral-600 tw-my-9 blog-content">
                                            {!! $blog->content !!}
                                        </div>

                                        <div
                                            class="tw-my-11 d-flex justify-content-between flex-wrap tw-gap-6"
                                            data-aos="fade-up"
                                            data-aos-duration="800"
                                        >
                                            @if(!empty($blog->tags))
                                            <div
                                                class="d-flex align-items-start tw-gap-5"
                                            >
                                                <span
                                                    class="tw-text-lg fw-semibold text-main-two-600 flex-shrink-0"
                                                    >Tag:</span
                                                >
                                                <div
                                                    class="d-flex align-items-center flex-wrap tw-gap-3"
                                                >
                                                    @foreach($blog->tags as $tag)
                                                    <a
                                                        href="{{route('blog', ['tag' => $tag])}}"
                                                        class="tw-px-5 tw-py-2 border border-neutral-200 hover-bg-main-600 hover-border-main-600 hover-text-white text-main-two-600 tw-text-sm text-uppercase fw-medium"
                                                        >{{ $tag }}</a
                                                    >
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endif
                                            <div
                                                class="d-flex align-items-start tw-gap-5"
                                            >
                                                <span
                                                    class="tw-text-lg fw-semibold text-main-two-600 flex-shrink-0"
                                                    >Share:</span
                                                >
                                                <ul
                                                    class="d-flex align-items-center tw-gap-3 justify-content-center"
                                                >
                                                    <li>
                                                        <a
                                                            href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                                            target="_blank"
                                                            class="tw-w-10 tw-h-10 rounded-0 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-neutral-100 hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"
                                                        >
                                                            <i class="ph-bold ph-facebook-logo"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($blog->title) }}"
                                                            target="_blank"
                                                            class="tw-w-10 tw-h-10 rounded-0 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-neutral-100 hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"
                                                        >
                                                            <i class="ph-bold ph-x-logo"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode($blog->title) }}"
                                                            target="_blank"
                                                            class="tw-w-10 tw-h-10 rounded-0 text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-neutral-100 hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"
                                                        >
                                                            <i class="ph-bold ph-linkedin-logo"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span
                                            class="d-block border-top border-neutral-100 tw-my-11"
                                        ></span>

                                        <!-- Comments Section -->
                                        <h5 class="tw-mb-11 splitTextStyleOne">
                                            ({{ $comments->count() }}) Comment{{ $comments->count() !== 1 ? 's' : '' }}
                                        </h5>

                                        @if($comments->isNotEmpty())
                                        <div
                                            class="tw-mb-15"
                                            data-aos="fade-up"
                                            data-aos-duration="800"
                                        >
                                            @foreach($comments as $comment)
                                            <div class="d-flex align-items-start tw-gap-42-px @if(!$loop->first) tw-mt-10 @endif">
                                                <div
                                                    class="tw-w-75-px tw-h-75-px rounded-circle overflow-hidden flex-shrink-0 bg-neutral-100 d-flex align-items-center justify-content-center"
                                                >
                                                    <span class="text-main-600 tw-text-3xl">
                                                        <i class="ph ph-user-circle"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div
                                                        class="d-flex align-items-start justify-content-between tw-gap-1"
                                                    >
                                                        <div class="">
                                                            <h6 class="tw-text-lg line-clamp-1">
                                                                {{ $comment->name }}
                                                            </h6>
                                                            <span class="text-neutral-600 tw-text-sm">
                                                                {{ $comment->created_at->format('d F Y') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <p class="text-neutral-600 tw-mt-3">
                                                        {{ $comment->comment }}
                                                    </p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        @endif

                                        <!-- Comment Form -->
                                        <div
                                            class="bg-neutral-100 tw-py-16 tw-px-54-px"
                                            data-aos="fade-up"
                                            data-aos-duration="800"
                                        >
                                            <h5 class="splitTextStyleOne tw-mb-9">
                                                Write your comment
                                            </h5>

                                            @if(session('comment_success'))
                                            <div class="alert alert-success tw-mb-6">
                                                {{ session('comment_success') }}
                                            </div>
                                            @endif

                                            @if($errors->any())
                                            <div class="alert alert-danger tw-mb-6">
                                                <ul class="mb-0">
                                                    @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif

                                            <form action="{{ route('blog.comment', $blog->slug) }}" method="POST">
                                                @csrf
                                                <div class="row gy-4">
                                                    <div class="col-sm-6">
                                                        <input
                                                            type="text"
                                                            name="name"
                                                            value="{{ old('name') }}"
                                                            class="tw-px-6 tw-py-4 bg-white tw-placeholder-text-main-two-600 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none flex-grow-1 border border-white focus-border-main-600 tw-duration-300"
                                                            placeholder="Enter your name*"
                                                            required
                                                        />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input
                                                            type="email"
                                                            name="email"
                                                            value="{{ old('email') }}"
                                                            class="tw-px-6 tw-py-4 bg-white tw-placeholder-text-main-two-600 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none flex-grow-1 border border-white focus-border-main-600 tw-duration-300"
                                                            placeholder="Enter your mail*"
                                                            required
                                                        />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input
                                                            type="text"
                                                            name="phone"
                                                            value="{{ old('phone') }}"
                                                            class="tw-px-6 tw-py-4 bg-white tw-placeholder-text-main-two-600 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none flex-grow-1 border border-white focus-border-main-600 tw-duration-300"
                                                            placeholder="Enter your number"
                                                        />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input
                                                            type="url"
                                                            name="website"
                                                            value="{{ old('website') }}"
                                                            class="tw-px-6 tw-py-4 bg-white tw-placeholder-text-main-two-600 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none flex-grow-1 border border-white focus-border-main-600 tw-duration-300"
                                                            placeholder="Website"
                                                        />
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <textarea
                                                            name="comment"
                                                            class="tw-px-6 tw-py-4 bg-white tw-placeholder-text-main-two-600 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none flex-grow-1 border border-white focus-border-main-600 tw-duration-300 tw-h-280-px"
                                                            placeholder="Enter your Message*"
                                                            required
                                                        >{{ old('comment') }}</textarea>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <button
                                                            type="submit"
                                                            class="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0 tw-px-13 tw-py-505 tw-mt-8"
                                                            data-block="button"
                                                        >
                                                            <span class="button__flair"></span>
                                                            <span class="button__label">Send Message</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 ps-xl-5 ps-lg-4">
                                <!-- Sidebar Start -->
                                <div class="d-flex flex-column tw-gap-8">

                                    <!-- Search -->
                                    <div
                                        class="bg-neutral-100 tw-px-8 tw-py-8"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6"
                                        >
                                            Search Here
                                        </h5>
                                        <form
                                            action="{{route('blog')}}"
                                            method="GET"
                                            class="position-relative"
                                        >
                                            <input
                                                type="text"
                                                name="search"
                                                class="tw-ps-4 tw-pe-12 tw-py-4 bg-white tw-placeholder-text-main-two-600 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none flex-grow-1 border border-white focus-border-main-600 tw-duration-300"
                                                placeholder="Search here..."
                                            />
                                            <button
                                                type="submit"
                                                class="position-absolute top-50 tw--translate-y-50 tw-end-0 text-main-two-600 tw-text-lg d-flex tw-me-5"
                                            >
                                                <i class="ph-bold ph-magnifying-glass"></i>
                                            </button>
                                        </form>
                                    </div>

                                    <!-- Recent News -->
                                    <div
                                        class="bg-neutral-100 tw-px-8 tw-py-8"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6"
                                        >
                                            Recent News
                                        </h5>
                                        <div class="d-flex flex-column tw-gap-8">
                                            @forelse($recentBlogs as $recent)
                                            <div class="d-flex align-items-center tw-gap-6">
                                                <a
                                                    href="{{route('blog.details', $recent->slug)}}"
                                                    class="tw-rounded-md overflow-hidden flex-shrink-0"
                                                >
                                                    <img
                                                        src="@if($recent->image) {{ \Illuminate\Support\Facades\Storage::url($recent->image) }} @else {{ asset('assets/images/thumbs/recent-post-img1.png') }} @endif"
                                                        alt="{{ $recent->title }}"
                                                        class="w-100 h-100 object-fit-cover hover-scale-2 tw-duration-500"
                                                        style="width:80px;height:70px;object-fit:cover;"
                                                    />
                                                </a>
                                                <div class="">
                                                    <div class="d-flex align-items-center tw-gap-2">
                                                        <span class="text-main-600 tw-text-lg">
                                                            <i class="ph-bold ph-calendar-dots"></i>
                                                        </span>
                                                        <span class="text-main-two-600 fw-medium tw-text-sm">
                                                            {{ ($recent->published_at ?? $recent->created_at)->format('M d, Y') }}
                                                        </span>
                                                    </div>
                                                    <h6 class="tw-mt-2">
                                                        <a
                                                            href="{{route('blog.details', $recent->slug)}}"
                                                            class="tw-text-base line-clamp-2 text-main-two-600 hover-text-main-600 splitTextStyleOne"
                                                            >{{ $recent->title }}</a
                                                        >
                                                    </h6>
                                                </div>
                                            </div>
                                            @empty
                                            <p class="text-neutral-600 tw-text-sm">No recent posts.</p>
                                            @endforelse
                                        </div>
                                    </div>

                                    <!-- Categories -->
                                    @if($categories->isNotEmpty())
                                    <div
                                        class="bg-neutral-100 tw-px-8 tw-py-8"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6"
                                        >
                                            Categories
                                        </h5>
                                        <div class="d-flex flex-column tw-gap-5">
                                            @foreach($categories as $cat)
                                            <a
                                                href="{{route('blog', ['category' => $cat->category])}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-medium d-flex align-items-center justify-content-between"
                                            >
                                                {{ $cat->category }}
                                                <span class="text-main-two-600 group-hover-text-white tw-duration-300 d-flex">
                                                    {{ $cat->count }}
                                                </span>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif

                                    <!-- Popular Tags -->
                                    @if($allTags->isNotEmpty())
                                    <div
                                        class="bg-neutral-100 tw-px-8 tw-py-8"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6"
                                        >
                                            Popular Tags
                                        </h5>
                                        <div class="d-flex tw-gap-3 flex-wrap">
                                            @foreach($allTags as $tag)
                                            <a
                                                href="{{route('blog', ['tag' => $tag])}}"
                                                class="bg-white tw-py-4 tw-px-6 text-main-two-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block"
                                                >{{ $tag }}</a
                                            >
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif

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
                            <div class="tw-mb-8 text-center max-w-570-px mx-auto">
                                <h3 class="splitTextStyleOne text-white">
                                    Ready to revolutionize our service?
                                </h3>
                                <div class="d-block">
                                    <div class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                                        <a
                                            href="javascript:void(0)"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <div class="d-flex align-items-center tw-gap-2 z-1">
                                                <span class="button__label">Get Started Trial</span>
                                            </div>
                                        </a>
                                    </div>
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
