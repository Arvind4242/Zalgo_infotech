@extends('frontend.layouts.app')
@section('title', $blog->title)
@section('content')
    @include('frontend.includes.headers.headerOne')

    <div id="smooth-content">

        {{-- ============================================================
             HERO: Full-bleed image with gradient overlay + meta overlay
        ============================================================ --}}
        <section class="position-relative overflow-hidden" style="min-height: 88vh;">
            {{-- Background Image --}}
            <div class="position-absolute w-100 h-100 top-0 start-0">
                <img
                    src="@if($blog->image) {{ \Illuminate\Support\Facades\Storage::url($blog->image) }} @else {{ asset('assets/images/thumbs/blog-page-img1.png') }} @endif"
                    alt="{{ $blog->title }}"
                    class="w-100 h-100 object-fit-cover"
                    style="object-position: center;"
                />
                <div class="position-absolute w-100 h-100 top-0 start-0"
                     style="background: linear-gradient(to bottom, rgba(26,26,77,0.25) 0%, rgba(26,26,77,0.5) 40%, rgba(26,26,77,0.96) 100%);">
                </div>
            </div>

            {{-- Reading Progress Bar --}}
            <div id="reading-progress" class="position-fixed top-0 start-0 z-3"
                 style="height: 3px; width: 0%; background: linear-gradient(to right, #1351D8, #22D3AA); transition: width 0.1s linear; pointer-events: none;">
            </div>

            {{-- Hero Content --}}
            <div class="position-relative h-100 d-flex flex-column justify-content-end"
                 style="min-height: 88vh; padding-bottom: 5rem;">
                <div class="container">

                    {{-- Breadcrumb --}}
                    <div class="d-flex align-items-center tw-gap-2 tw-mb-6" data-aos="fade-up" data-aos-duration="600">
                        <a href="{{ route('blog') }}"
                           style="color: rgba(255,255,255,0.6); text-decoration: none; font-size: 0.8rem; font-weight: 500; transition: color 0.3s;"
                           onmouseover="this.style.color='white';" onmouseout="this.style.color='rgba(255,255,255,0.6)';">
                            Blog
                        </a>
                        <i class="ph ph-caret-right" style="color: rgba(255,255,255,0.4); font-size: 0.75rem;"></i>
                        @if($blog->category)
                        <a href="{{ route('blog', ['category' => $blog->category]) }}"
                           style="color: rgba(255,255,255,0.6); text-decoration: none; font-size: 0.8rem; font-weight: 500; transition: color 0.3s;"
                           onmouseover="this.style.color='white';" onmouseout="this.style.color='rgba(255,255,255,0.6)';">
                            {{ $blog->category }}
                        </a>
                        <i class="ph ph-caret-right" style="color: rgba(255,255,255,0.4); font-size: 0.75rem;"></i>
                        @endif
                        <span style="color: rgba(255,255,255,0.5); font-size: 0.8rem;" class="line-clamp-1">{{ $blog->title }}</span>
                    </div>

                    {{-- Category Badge --}}
                    @if($blog->category)
                    <div class="tw-mb-5" data-aos="fade-up" data-aos-duration="700">
                        <a href="{{ route('blog', ['category' => $blog->category]) }}"
                           class="tw-py-2 tw-px-5 fw-semibold tw-text-xs text-white d-inline-block"
                           style="background: #1351D8; border-radius: 50px; text-transform: uppercase; letter-spacing: 0.08em; text-decoration: none;">
                            {{ $blog->category }}
                        </a>
                    </div>
                    @endif

                    {{-- Title --}}
                    <h1 class="text-white fw-bold splitTextStyleOne"
                        style="font-size: clamp(1.9rem, 4vw, 3.4rem); max-width: 860px; line-height: 1.18; letter-spacing: -0.02em;"
                        data-aos="fade-up" data-aos-duration="800">
                        {{ $blog->title }}
                    </h1>

                    {{-- Meta Row --}}
                    <div class="d-flex align-items-center flex-wrap tw-mt-7"
                         style="gap: 1.25rem;"
                         data-aos="fade-up" data-aos-duration="1000">
                        <div class="d-flex align-items-center tw-gap-3">
                            <div class="tw-w-9 tw-h-9 rounded-circle d-flex align-items-center justify-content-center text-white"
                                 style="background: rgba(19,81,216,0.8); backdrop-filter: blur(4px); font-size: 0.9rem;">
                                <i class="ph-bold ph-user"></i>
                            </div>
                            <span class="text-white tw-text-sm fw-medium">{{ $blog->author_name }}</span>
                        </div>
                        <span style="color: rgba(255,255,255,0.3);">|</span>
                        <div class="d-flex align-items-center tw-gap-2">
                            <i class="ph ph-calendar-blank" style="color: rgba(255,255,255,0.6); font-size: 0.95rem;"></i>
                            <span class="tw-text-sm" style="color: rgba(255,255,255,0.75);">
                                {{ ($blog->published_at ?? $blog->created_at)->format('F d, Y') }}
                            </span>
                        </div>
                        <span style="color: rgba(255,255,255,0.3);">|</span>
                        <div class="d-flex align-items-center tw-gap-2">
                            <i class="ph ph-clock" style="color: rgba(255,255,255,0.6); font-size: 0.95rem;"></i>
                            <span class="tw-text-sm" style="color: rgba(255,255,255,0.75);">{{ $blog->read_time }}</span>
                        </div>
                        <span style="color: rgba(255,255,255,0.3);">|</span>
                        <div class="d-flex align-items-center tw-gap-2">
                            <i class="ph ph-chat-circle-dots" style="color: rgba(255,255,255,0.6); font-size: 0.95rem;"></i>
                            <span class="tw-text-sm" style="color: rgba(255,255,255,0.75);">
                                {{ $comments->count() }} Comment{{ $comments->count() !== 1 ? 's' : '' }}
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- ============================================================
             CONTENT + SIDEBAR
        ============================================================ --}}
        <section class="py-120 position-relative">
            <div class="container">
                <div class="row">

                    {{-- LEFT FLOATING SHARE BAR (xl only) --}}
                    <div class="col-xl-1 d-none d-xl-flex flex-column align-items-center" style="position: relative;">
                        <div style="position: sticky; top: 120px; display: flex; flex-direction: column; align-items: center; gap: 0.65rem;">
                            <span class="fw-bold text-neutral-400"
                                  style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.12em; writing-mode: vertical-rl; transform: rotate(180deg); margin-bottom: 0.4rem;">
                                Share
                            </span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                               target="_blank"
                               class="tw-w-10 tw-h-10 rounded-circle d-flex align-items-center justify-content-center"
                               style="background: #f3f4f6; color: #1a1a4d; font-size: 0.9rem; text-decoration: none; transition: all 0.25s;"
                               onmouseover="this.style.background='#1351D8'; this.style.color='white'; this.style.transform='scale(1.1)';"
                               onmouseout="this.style.background='#f3f4f6'; this.style.color='#1a1a4d'; this.style.transform='';">
                                <i class="ph-bold ph-facebook-logo"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($blog->title) }}"
                               target="_blank"
                               class="tw-w-10 tw-h-10 rounded-circle d-flex align-items-center justify-content-center"
                               style="background: #f3f4f6; color: #1a1a4d; font-size: 0.9rem; text-decoration: none; transition: all 0.25s;"
                               onmouseover="this.style.background='#1351D8'; this.style.color='white'; this.style.transform='scale(1.1)';"
                               onmouseout="this.style.background='#f3f4f6'; this.style.color='#1a1a4d'; this.style.transform='';">
                                <i class="ph-bold ph-x-logo"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode($blog->title) }}"
                               target="_blank"
                               class="tw-w-10 tw-h-10 rounded-circle d-flex align-items-center justify-content-center"
                               style="background: #f3f4f6; color: #1a1a4d; font-size: 0.9rem; text-decoration: none; transition: all 0.25s;"
                               onmouseover="this.style.background='#1351D8'; this.style.color='white'; this.style.transform='scale(1.1)';"
                               onmouseout="this.style.background='#f3f4f6'; this.style.color='#1a1a4d'; this.style.transform='';">
                                <i class="ph-bold ph-linkedin-logo"></i>
                            </a>
                            <div style="width: 1px; height: 56px; background: linear-gradient(to bottom, #d1d5db, transparent); margin-top: 0.4rem;"></div>
                        </div>
                    </div>

                    {{-- MAIN ARTICLE --}}
                    <div class="col-xl-7 col-lg-8">

                        <article class="blog-content tw-text-base text-neutral-600"
                                 id="article-content"
                                 style="line-height: 1.85;"
                                 data-aos="fade-up" data-aos-duration="800">
                            {!! $blog->content !!}
                        </article>

                        {{-- Tags + Share Footer --}}
                        <div class="d-flex flex-wrap justify-content-between align-items-start tw-gap-6 tw-mt-12 tw-pt-8"
                             style="border-top: 2px solid #f3f4f6;"
                             data-aos="fade-up" data-aos-duration="800">

                            @if(!empty($blog->tags))
                            <div class="d-flex align-items-center tw-gap-3 flex-wrap">
                                <span class="fw-bold text-main-two-600 tw-text-xs text-uppercase"
                                      style="letter-spacing: 0.08em;">Tags:</span>
                                @foreach($blog->tags as $tag)
                                <a href="{{ route('blog', ['tag' => $tag]) }}"
                                   class="tw-px-4 tw-py-2 fw-medium tw-text-xs text-uppercase"
                                   style="border: 1.5px solid #e5e7eb; color: #1a1a4d; text-decoration: none; border-radius: 2px; transition: all 0.25s; letter-spacing: 0.04em;"
                                   onmouseover="this.style.background='#1351D8'; this.style.borderColor='#1351D8'; this.style.color='white';"
                                   onmouseout="this.style.background=''; this.style.borderColor='#e5e7eb'; this.style.color='#1a1a4d';">
                                    {{ $tag }}
                                </a>
                                @endforeach
                            </div>
                            @endif

                            {{-- Mobile share --}}
                            <div class="d-flex d-xl-none align-items-center tw-gap-3">
                                <span class="fw-bold text-main-two-600 tw-text-xs text-uppercase"
                                      style="letter-spacing: 0.08em;">Share:</span>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                   target="_blank"
                                   class="tw-w-9 tw-h-9 rounded-circle d-flex align-items-center justify-content-center"
                                   style="background: #f3f4f6; color: #1a1a4d; font-size: 0.85rem; text-decoration: none;">
                                    <i class="ph-bold ph-facebook-logo"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($blog->title) }}"
                                   target="_blank"
                                   class="tw-w-9 tw-h-9 rounded-circle d-flex align-items-center justify-content-center"
                                   style="background: #f3f4f6; color: #1a1a4d; font-size: 0.85rem; text-decoration: none;">
                                    <i class="ph-bold ph-x-logo"></i>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode($blog->title) }}"
                                   target="_blank"
                                   class="tw-w-9 tw-h-9 rounded-circle d-flex align-items-center justify-content-center"
                                   style="background: #f3f4f6; color: #1a1a4d; font-size: 0.85rem; text-decoration: none;">
                                    <i class="ph-bold ph-linkedin-logo"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- RIGHT STICKY SIDEBAR --}}
                    <div class="col-lg-4 d-none d-lg-block ps-xl-5 ps-lg-4">
                        <div style="position: sticky; top: 100px;">
                            <div class="d-flex flex-column tw-gap-6">

                                {{-- Search Widget --}}
                                <div class="tw-p-7" style="background: #f9fafb; border-radius: 14px;" data-aos="fade-up" data-aos-duration="800">
                                    <h6 class="fw-bold text-main-two-600 tw-mb-5 d-flex align-items-center tw-gap-3"
                                        style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em;">
                                        <span style="width: 3px; height: 18px; background: #1351D8; display: inline-block; border-radius: 2px; flex-shrink: 0;"></span>
                                        Search
                                    </h6>
                                    <form action="{{ route('blog') }}" method="GET" class="position-relative">
                                        <input type="text" name="search"
                                               class="w-100 tw-py-3 tw-ps-5 tw-pe-12 border-0 bg-white tw-text-sm"
                                               style="border-radius: 8px; outline: none; box-shadow: 0 1px 4px rgba(0,0,0,0.08); color: #1a1a4d;"
                                               placeholder="Search articles..." />
                                        <button type="submit"
                                                class="position-absolute top-50 translate-middle-y tw-end-0 tw-me-4 border-0 bg-transparent"
                                                style="color: #1351D8; cursor: pointer; font-size: 1rem;">
                                            <i class="ph-bold ph-magnifying-glass"></i>
                                        </button>
                                    </form>
                                </div>

                                {{-- Recent Posts Widget --}}
                                <div class="tw-p-7" style="background: #f9fafb; border-radius: 14px;" data-aos="fade-up" data-aos-duration="900">
                                    <h6 class="fw-bold text-main-two-600 tw-mb-5 d-flex align-items-center tw-gap-3"
                                        style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em;">
                                        <span style="width: 3px; height: 18px; background: #1351D8; display: inline-block; border-radius: 2px; flex-shrink: 0;"></span>
                                        Recent Posts
                                    </h6>
                                    <div class="d-flex flex-column" style="gap: 1.1rem;">
                                        @forelse($recentBlogs as $recent)
                                        <a href="{{ route('blog.details', $recent->slug) }}"
                                           class="d-flex align-items-center tw-gap-4"
                                           style="text-decoration: none;">
                                            <div style="width: 68px; height: 60px; border-radius: 8px; overflow: hidden; flex-shrink: 0;">
                                                <img src="@if($recent->image) {{ \Illuminate\Support\Facades\Storage::url($recent->image) }} @else {{ asset('assets/images/thumbs/recent-post-img1.png') }} @endif"
                                                     alt="{{ $recent->title }}"
                                                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s;"
                                                     onmouseover="this.style.transform='scale(1.06)';"
                                                     onmouseout="this.style.transform='';" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="tw-text-xs fw-semibold" style="color: #1351D8;">
                                                    {{ ($recent->published_at ?? $recent->created_at)->format('M d, Y') }}
                                                </span>
                                                <p class="fw-medium tw-text-sm text-main-two-600 line-clamp-2"
                                                   style="line-height: 1.45; margin: 0.2rem 0 0; transition: color 0.25s;"
                                                   onmouseover="this.style.color='#1351D8';"
                                                   onmouseout="this.style.color='';">
                                                    {{ $recent->title }}
                                                </p>
                                            </div>
                                        </a>
                                        @empty
                                        <p class="tw-text-sm text-neutral-400">No recent posts.</p>
                                        @endforelse
                                    </div>
                                </div>

                                {{-- Categories Widget --}}
                                @if($categories->isNotEmpty())
                                <div class="tw-p-7" style="background: #f9fafb; border-radius: 14px;" data-aos="fade-up" data-aos-duration="1000">
                                    <h6 class="fw-bold text-main-two-600 tw-mb-5 d-flex align-items-center tw-gap-3"
                                        style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em;">
                                        <span style="width: 3px; height: 18px; background: #1351D8; display: inline-block; border-radius: 2px; flex-shrink: 0;"></span>
                                        Categories
                                    </h6>
                                    <div class="d-flex flex-column" style="gap: 0.4rem;">
                                        @foreach($categories as $cat)
                                        <a href="{{ route('blog', ['category' => $cat->category]) }}"
                                           class="d-flex align-items-center justify-content-between tw-py-3 tw-px-4 fw-medium tw-text-sm"
                                           style="background: white; border-radius: 7px; color: #1a1a4d; text-decoration: none; transition: all 0.25s;"
                                           onmouseover="this.style.background='#1351D8'; this.style.color='white';"
                                           onmouseout="this.style.background='white'; this.style.color='#1a1a4d';">
                                            <span>{{ $cat->category }}</span>
                                            <span class="tw-text-xs fw-bold px-2 py-1"
                                                  style="background: #EEF2FF; color: #1351D8; border-radius: 50px; transition: inherit;">
                                                {{ $cat->count }}
                                            </span>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                @endif

                                {{-- Popular Tags Widget --}}
                                @if($allTags->isNotEmpty())
                                <div class="tw-p-7" style="background: #f9fafb; border-radius: 14px;" data-aos="fade-up" data-aos-duration="1100">
                                    <h6 class="fw-bold text-main-two-600 tw-mb-5 d-flex align-items-center tw-gap-3"
                                        style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em;">
                                        <span style="width: 3px; height: 18px; background: #1351D8; display: inline-block; border-radius: 2px; flex-shrink: 0;"></span>
                                        Popular Tags
                                    </h6>
                                    <div class="d-flex flex-wrap" style="gap: 0.45rem;">
                                        @foreach($allTags as $tag)
                                        <a href="{{ route('blog', ['tag' => $tag]) }}"
                                           class="tw-px-4 tw-py-2 tw-text-xs fw-medium"
                                           style="background: white; border-radius: 4px; color: #1a1a4d; text-decoration: none; transition: all 0.25s; border: 1px solid #e5e7eb;"
                                           onmouseover="this.style.background='#1351D8'; this.style.color='white'; this.style.borderColor='#1351D8';"
                                           onmouseout="this.style.background='white'; this.style.color='#1a1a4d'; this.style.borderColor='#e5e7eb';">
                                            {{ $tag }}
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- ============================================================
             COMMENTS SECTION
        ============================================================ --}}
        <section style="background: #f9fafb; padding: 5rem 0 6rem;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">

                        {{-- Comment List --}}
                        @if($comments->isNotEmpty())
                        <div class="tw-mb-14" data-aos="fade-up" data-aos-duration="800">
                            <div class="d-flex align-items-center tw-gap-3 tw-mb-10">
                                <div class="tw-w-9 tw-h-9 rounded-circle d-flex align-items-center justify-content-center text-white tw-text-sm fw-bold"
                                     style="background: #1351D8; flex-shrink: 0;">
                                    {{ $comments->count() }}
                                </div>
                                <h4 class="fw-bold text-main-two-600 mb-0">
                                    Comment{{ $comments->count() !== 1 ? 's' : '' }}
                                </h4>
                            </div>
                            <div class="d-flex flex-column" style="gap: 1.1rem;">
                                @foreach($comments as $comment)
                                <div class="d-flex tw-gap-5 bg-white"
                                     style="padding: 1.5rem; border-radius: 12px; border-left: 3px solid #1351D8;">
                                    <div class="tw-w-11 tw-h-11 rounded-circle d-flex align-items-center justify-content-center text-white flex-shrink-0"
                                         style="background: linear-gradient(135deg, #1351D8, #1a1a4d); font-size: 1.1rem;">
                                        <i class="ph ph-user"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center justify-content-between tw-mb-2">
                                            <h6 class="fw-bold text-main-two-600 mb-0 tw-text-sm">{{ $comment->name }}</h6>
                                            <span class="tw-text-xs text-neutral-400">
                                                {{ $comment->created_at->format('d F Y') }}
                                            </span>
                                        </div>
                                        <p class="text-neutral-600 tw-text-sm mb-0" style="line-height: 1.75;">
                                            {{ $comment->comment }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        {{-- Comment Form --}}
                        <div class="bg-white" style="border-radius: 18px; padding: 2.75rem; box-shadow: 0 4px 28px rgba(19,81,216,0.08);"
                             data-aos="fade-up" data-aos-duration="800">
                            <div class="tw-mb-8">
                                <span class="fw-bold tw-text-xs text-uppercase"
                                      style="color: #1351D8; letter-spacing: 0.1em;">Join the discussion</span>
                                <h4 class="fw-bold text-main-two-600 tw-mt-2 mb-0">Leave a Comment</h4>
                                <p class="tw-text-sm text-neutral-400 tw-mt-2">Your email address will not be published.</p>
                            </div>

                            @if(session('comment_success'))
                            <div class="tw-mb-6 tw-p-4 d-flex align-items-center tw-gap-3"
                                 style="border-radius: 8px; background: #d1fae5; color: #065f46;">
                                <i class="ph-bold ph-check-circle" style="font-size: 1.2rem;"></i>
                                <span class="tw-text-sm fw-medium">{{ session('comment_success') }}</span>
                            </div>
                            @endif

                            @if($errors->any())
                            <div class="tw-mb-6 tw-p-4" style="border-radius: 8px; background: #fee2e2; color: #991b1b;">
                                <ul class="mb-0 ps-3">
                                    @foreach($errors->all() as $error)
                                    <li class="tw-text-sm">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="{{ route('blog.comment', $blog->slug) }}" method="POST">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <label class="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2"
                                               style="letter-spacing: 0.07em;">Full Name *</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                               class="w-100 border tw-text-sm"
                                               style="padding: 0.75rem 1.25rem; border-color: #e5e7eb; border-radius: 8px; outline: none; transition: border-color 0.3s; color: #1a1a4d;"
                                               placeholder="John Doe" required
                                               onfocus="this.style.borderColor='#1351D8';"
                                               onblur="this.style.borderColor='#e5e7eb';" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2"
                                               style="letter-spacing: 0.07em;">Email Address *</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                               class="w-100 border tw-text-sm"
                                               style="padding: 0.75rem 1.25rem; border-color: #e5e7eb; border-radius: 8px; outline: none; transition: border-color 0.3s; color: #1a1a4d;"
                                               placeholder="john@example.com" required
                                               onfocus="this.style.borderColor='#1351D8';"
                                               onblur="this.style.borderColor='#e5e7eb';" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2"
                                               style="letter-spacing: 0.07em;">Phone</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}"
                                               class="w-100 border tw-text-sm"
                                               style="padding: 0.75rem 1.25rem; border-color: #e5e7eb; border-radius: 8px; outline: none; transition: border-color 0.3s; color: #1a1a4d;"
                                               placeholder="+1 234 567 890"
                                               onfocus="this.style.borderColor='#1351D8';"
                                               onblur="this.style.borderColor='#e5e7eb';" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2"
                                               style="letter-spacing: 0.07em;">Website</label>
                                        <input type="url" name="website" value="{{ old('website') }}"
                                               class="w-100 border tw-text-sm"
                                               style="padding: 0.75rem 1.25rem; border-color: #e5e7eb; border-radius: 8px; outline: none; transition: border-color 0.3s; color: #1a1a4d;"
                                               placeholder="https://yoursite.com"
                                               onfocus="this.style.borderColor='#1351D8';"
                                               onblur="this.style.borderColor='#e5e7eb';" />
                                    </div>
                                    <div class="col-12">
                                        <label class="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2"
                                               style="letter-spacing: 0.07em;">Your Comment *</label>
                                        <textarea name="comment"
                                                  class="w-100 border tw-text-sm"
                                                  style="padding: 0.75rem 1.25rem; border-color: #e5e7eb; border-radius: 8px; outline: none; height: 150px; resize: vertical; transition: border-color 0.3s; color: #1a1a4d; font-family: inherit;"
                                                  placeholder="Share your thoughts..." required
                                                  onfocus="this.style.borderColor='#1351D8';"
                                                  onblur="this.style.borderColor='#e5e7eb';">{{ old('comment') }}</textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                                class="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-3 active--translate-y-2 rounded-0 tw-px-10 tw-py-4"
                                                data-block="button">
                                            <span class="button__flair"></span>
                                            <span class="button__label d-flex align-items-center tw-gap-2">
                                                Post Comment <i class="ph-bold ph-paper-plane-tilt"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{-- ============================================================
             RELATED ARTICLES
        ============================================================ --}}
        @if($recentBlogs->isNotEmpty())
        <section class="py-120">
            <div class="container">
                <div class="d-flex align-items-end justify-content-between tw-mb-12 flex-wrap tw-gap-4">
                    <div>
                        <span class="fw-bold tw-text-xs text-uppercase"
                              style="color: #1351D8; letter-spacing: 0.1em;">Continue Reading</span>
                        <h3 class="fw-bold text-main-two-600 tw-mt-2 mb-0">Related Articles</h3>
                    </div>
                    <a href="{{ route('blog') }}"
                       class="d-flex align-items-center tw-gap-2 fw-semibold tw-text-sm"
                       style="color: #1351D8; text-decoration: none;">
                        All Articles <i class="ph-bold ph-arrow-right"></i>
                    </a>
                </div>

                <div class="row gy-6">
                    @foreach($recentBlogs->take(3) as $recent)
                    <div class="col-lg-4 col-md-6"
                         data-aos="fade-up" data-aos-duration="800"
                         data-aos-delay="{{ $loop->index * 120 }}">
                        <article class="h-100 bg-white overflow-hidden"
                                 style="border-radius: 16px; box-shadow: 0 3px 18px rgba(0,0,0,0.07); transition: transform 0.3s, box-shadow 0.3s;"
                                 onmouseover="this.style.transform='translateY(-7px)'; this.style.boxShadow='0 14px 32px rgba(19,81,216,0.14)';"
                                 onmouseout="this.style.transform=''; this.style.boxShadow='0 3px 18px rgba(0,0,0,0.07)';">
                            <a href="{{ route('blog.details', $recent->slug) }}"
                               class="d-block overflow-hidden position-relative"
                               style="height: 215px;">
                                <img src="@if($recent->image) {{ \Illuminate\Support\Facades\Storage::url($recent->image) }} @else {{ asset('assets/images/thumbs/blog-page-img1.png') }} @endif"
                                     alt="{{ $recent->title }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" />
                                <div class="position-absolute top-0 start-0 tw-m-4">
                                    <span class="fw-bold tw-text-xs text-white"
                                          style="background: rgba(19,81,216,0.9); backdrop-filter: blur(4px); border-radius: 5px; padding: 0.3rem 0.65rem;">
                                        {{ ($recent->published_at ?? $recent->created_at)->format('d M') }}
                                    </span>
                                </div>
                            </a>
                            <div style="padding: 1.6rem 1.75rem 1.75rem;">
                                <div class="d-flex align-items-center tw-gap-3 tw-mb-3 flex-wrap">
                                    <div class="d-flex align-items-center tw-gap-1">
                                        <i class="ph ph-user" style="color: #1351D8; font-size: 0.8rem;"></i>
                                        <span class="tw-text-xs text-neutral-400 fw-medium">{{ $recent->author_name }}</span>
                                    </div>
                                    <span style="color: #e5e7eb;">•</span>
                                    <div class="d-flex align-items-center tw-gap-1">
                                        <i class="ph ph-clock" style="color: #1351D8; font-size: 0.8rem;"></i>
                                        <span class="tw-text-xs text-neutral-400">{{ $recent->read_time }}</span>
                                    </div>
                                </div>
                                <h5 class="fw-bold text-main-two-600 line-clamp-2 tw-mb-4"
                                    style="line-height: 1.4; font-size: 1.05rem;">
                                    <a href="{{ route('blog.details', $recent->slug) }}"
                                       class="text-main-two-600 hover-text-main-600"
                                       style="text-decoration: none;">
                                        {{ $recent->title }}
                                    </a>
                                </h5>
                                <a href="{{ route('blog.details', $recent->slug) }}"
                                   class="d-flex align-items-center tw-gap-2 fw-bold tw-text-xs text-uppercase"
                                   style="color: #1351D8; text-decoration: none; letter-spacing: 0.06em; padding-top: 0.75rem; border-top: 1px solid #f3f4f6;">
                                    Read Article <i class="ph-bold ph-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        {{-- CTA Section --}}
        <section class="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half">
            <div class="container">
                <div class="text-end tw--mb-40-px position-relative z-2">
                    <img src="{{ asset('assets/images/thumbs/laptop-man.png') }}" alt="Image" class="tw-me-84-px" />
                </div>
                <div class="bg-green-deep tw-rounded-3xl bg-green-deep tw-pt-100-px position-relative z-1">
                    <img src="{{ asset('assets/images/shapes/hill-shape.png') }}" alt="Hill Shape"
                         class="position-absolute w-100 h-100 top-0 tw-start-0 z-n1" />
                    <div class="tw-mb-8 text-center max-w-570-px mx-auto">
                        <h3 class="splitTextStyleOne text-white">Ready to revolutionize our service?</h3>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.includes.footers.footerOne')
    </div>

@section('script')
<script>
    // Reading progress bar tied to article scroll
    (function () {
        var bar = document.getElementById('reading-progress');
        var article = document.getElementById('article-content');
        if (!bar || !article) return;
        window.addEventListener('scroll', function () {
            var top = article.getBoundingClientRect().top + window.scrollY;
            var h = article.offsetHeight;
            var pct = Math.min(Math.max(((window.scrollY - top) / h) * 100, 0), 100);
            bar.style.width = pct + '%';
        }, { passive: true });
    })();
</script>
@endsection

@endsection
