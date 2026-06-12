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
                     style="background: linear-gradient(to bottom, rgba(7,20,20,0.25) 0%, rgba(7,20,20,0.55) 40%, rgba(7,20,20,0.97) 100%);">
                </div>
            </div>

            {{-- Reading Progress Bar --}}
            <div id="reading-progress" class="position-fixed top-0 start-0 z-3"
                 style="height: 3px; width: 0%; background: linear-gradient(to right, #00B5AD, #22D3AA); transition: width 0.1s linear; pointer-events: none;">
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
                           style="background: #00B5AD; border-radius: 50px; text-transform: uppercase; letter-spacing: 0.08em; text-decoration: none;">
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
                                 style="background: rgba(0,181,173,0.8); backdrop-filter: blur(4px); font-size: 0.9rem;">
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
        <section id="blog-content-section" class="py-120 position-relative">
            <div class="container">
                {{-- row: align-items flex-start is essential for sticky to work in flex rows --}}
                <div class="row" style="align-items: flex-start;">

                    {{-- LEFT FLOATING SHARE BAR (xl only) --}}
                    <div class="col-xl-1 d-none d-xl-flex flex-column align-items-center">
                        {{-- sticky on inner wrapper, NOT on the column --}}
                        <div style="position: sticky; top: 110px; display: flex; flex-direction: column; align-items: center; gap: 0.65rem;">
                            <span class="fw-bold text-neutral-400"
                                  style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.12em; writing-mode: vertical-rl; transform: rotate(180deg); margin-bottom: 0.4rem;">
                                Share
                            </span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                               target="_blank"
                               class="tw-w-10 tw-h-10 rounded-circle d-flex align-items-center justify-content-center"
                               style="background: #f3f4f6; color: #1a1a4d; font-size: 0.9rem; text-decoration: none; transition: all 0.25s;"
                               onmouseover="this.style.background='#00B5AD'; this.style.color='white'; this.style.transform='scale(1.1)';"
                               onmouseout="this.style.background='#f3f4f6'; this.style.color='#1a1a4d'; this.style.transform='';">
                                <i class="ph-bold ph-facebook-logo"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($blog->title) }}"
                               target="_blank"
                               class="tw-w-10 tw-h-10 rounded-circle d-flex align-items-center justify-content-center"
                               style="background: #f3f4f6; color: #1a1a4d; font-size: 0.9rem; text-decoration: none; transition: all 0.25s;"
                               onmouseover="this.style.background='#00B5AD'; this.style.color='white'; this.style.transform='scale(1.1)';"
                               onmouseout="this.style.background='#f3f4f6'; this.style.color='#1a1a4d'; this.style.transform='';">
                                <i class="ph-bold ph-x-logo"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode($blog->title) }}"
                               target="_blank"
                               class="tw-w-10 tw-h-10 rounded-circle d-flex align-items-center justify-content-center"
                               style="background: #f3f4f6; color: #1a1a4d; font-size: 0.9rem; text-decoration: none; transition: all 0.25s;"
                               onmouseover="this.style.background='#00B5AD'; this.style.color='white'; this.style.transform='scale(1.1)';"
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
                                   onmouseover="this.style.background='#00B5AD'; this.style.borderColor='#00B5AD'; this.style.color='white';"
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

                    {{-- RIGHT STICKY SIDEBAR — pinned via GSAP ScrollTrigger (ScrollSmoother compatible) --}}
                    <div class="col-lg-4 d-none d-lg-block ps-xl-5 ps-lg-4">
                        <div id="blog-sidebar-sticky">
                            <div class="d-flex flex-column tw-gap-6">

                                {{-- Recent Posts --}}
                                <div style="background: #f9fafb; border-radius: 14px; padding: 1.75rem;">
                                    <h6 class="fw-bold text-main-two-600 tw-mb-5 d-flex align-items-center tw-gap-3"
                                        style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 0;">
                                        <span style="width: 3px; height: 18px; background: #00B5AD; display: inline-block; border-radius: 2px; flex-shrink: 0;"></span>
                                        Recent Posts
                                    </h6>
                                    <div class="d-flex flex-column" style="gap: 1rem; margin-top: 1.25rem;">
                                        @forelse($recentBlogs as $recent)
                                        <a href="{{ route('blog.details', $recent->slug) }}"
                                           class="d-flex align-items-center tw-gap-4"
                                           style="text-decoration: none; padding-bottom: 1rem; border-bottom: 1px solid #eef0f3;">
                                            {{-- Thumbnail --}}
                                            <div style="width: 72px; height: 62px; border-radius: 8px; overflow: hidden; flex-shrink: 0; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                                                <img src="@if($recent->image) {{ \Illuminate\Support\Facades\Storage::url($recent->image) }} @else {{ asset('assets/images/thumbs/recent-post-img1.png') }} @endif"
                                                     alt="{{ $recent->title }}"
                                                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s;"
                                                     onmouseover="this.style.transform='scale(1.08)';"
                                                     onmouseout="this.style.transform='';" />
                                            </div>
                                            {{-- Meta --}}
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center tw-gap-1 tw-mb-1">
                                                    <i class="ph ph-calendar-blank" style="color: #00B5AD; font-size: 0.75rem;"></i>
                                                    <span style="font-size: 0.7rem; font-weight: 600; color: #00B5AD;">
                                                        {{ ($recent->published_at ?? $recent->created_at)->format('M d, Y') }}
                                                    </span>
                                                </div>
                                                <p class="fw-semibold line-clamp-2"
                                                   style="font-size: 0.82rem; line-height: 1.45; margin: 0; color: #1a1a4d; transition: color 0.25s;"
                                                   onmouseover="this.style.color='#00B5AD';"
                                                   onmouseout="this.style.color='#1a1a4d';">
                                                    {{ $recent->title }}
                                                </p>
                                            </div>
                                        </a>
                                        @empty
                                        <p style="font-size: 0.82rem; color: #9ca3af;">No recent posts.</p>
                                        @endforelse
                                    </div>
                                    <a href="{{ route('blog') }}"
                                       class="d-flex align-items-center tw-gap-2 fw-bold"
                                       style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.06em; color: #00B5AD; text-decoration: none; margin-top: 1.1rem;">
                                        All Articles <i class="ph-bold ph-arrow-right"></i>
                                    </a>
                                </div>

                                {{-- Categories --}}
                                @if($categories->isNotEmpty())
                                <div style="background: #f9fafb; border-radius: 14px; padding: 1.75rem;">
                                    <h6 class="fw-bold text-main-two-600 d-flex align-items-center tw-gap-3"
                                        style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 0;">
                                        <span style="width: 3px; height: 18px; background: #00B5AD; display: inline-block; border-radius: 2px; flex-shrink: 0;"></span>
                                        Categories
                                    </h6>
                                    <div class="d-flex flex-column" style="gap: 0.4rem; margin-top: 1.25rem;">
                                        @foreach($categories as $cat)
                                        <a href="{{ route('blog', ['category' => $cat->category]) }}"
                                           class="d-flex align-items-center justify-content-between fw-medium"
                                           style="background: white; border-radius: 8px; color: #1a1a4d; text-decoration: none; transition: all 0.25s; padding: 0.65rem 1rem; font-size: 0.85rem; border: 1px solid transparent;"
                                           onmouseover="this.style.background='#00B5AD'; this.style.color='white'; this.style.borderColor='#00B5AD';"
                                           onmouseout="this.style.background='white'; this.style.color='#1a1a4d'; this.style.borderColor='transparent';">
                                            <span class="d-flex align-items-center tw-gap-2">
                                                <i class="ph ph-folder-simple" style="font-size: 0.9rem; opacity: 0.6;"></i>
                                                {{ $cat->category }}
                                            </span>
                                            <span style="font-size: 0.72rem; font-weight: 700; background: #E0F5F5; color: #00B5AD; border-radius: 50px; padding: 0.15rem 0.55rem; transition: all 0.25s;"
                                                  onmouseover="this.parentElement.style.background==='rgb(0, 181, 173)' && (this.style.background='rgba(255,255,255,0.25)', this.style.color='white');">
                                                {{ $cat->count }}
                                            </span>
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
        <section id="comments-section" style="background: #f9fafb; padding: 5rem 0 6rem;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">

                        {{-- Comment List --}}
                        @if($comments->isNotEmpty())
                        <div class="tw-mb-14" data-aos="fade-up" data-aos-duration="800">
                            <div class="d-flex align-items-center tw-gap-3 tw-mb-10">
                                <div class="tw-w-9 tw-h-9 rounded-circle d-flex align-items-center justify-content-center text-white tw-text-sm fw-bold"
                                     style="background: #00B5AD; flex-shrink: 0;">
                                    {{ $comments->count() }}
                                </div>
                                <h4 class="fw-bold text-main-two-600 mb-0">
                                    Comment{{ $comments->count() !== 1 ? 's' : '' }}
                                </h4>
                            </div>
                            <div class="d-flex flex-column" style="gap: 1.1rem;">
                                @foreach($comments as $comment)
                                <div class="d-flex tw-gap-5 bg-white"
                                     style="padding: 1.5rem; border-radius: 12px; border-left: 3px solid #00B5AD;">
                                    <div class="tw-w-11 tw-h-11 rounded-circle d-flex align-items-center justify-content-center text-white flex-shrink-0"
                                         style="background: linear-gradient(135deg, #00B5AD, #1a1a4d); font-size: 1.1rem;">
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
                        <div class="overflow-hidden"
                             style="border-radius: 18px; box-shadow: 0 4px 28px rgba(0,181,173,0.08);"
                             data-aos="fade-up" data-aos-duration="800">
                            <div class="row g-0">

                                {{-- Left Image Panel --}}
                                <div class="col-lg-4 d-none d-lg-flex">
                                    <div class="w-100 d-flex flex-column align-items-center justify-content-center text-white text-center position-relative overflow-hidden"
                                         style="background: linear-gradient(160deg, #071414 0%, #00B5AD 100%); padding: 2.5rem 1.75rem; min-height: 100%;">
                                        {{-- Decorative rings --}}
                                        <div class="position-absolute" style="width: 200px; height: 200px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.1); top: -70px; right: -70px; pointer-events: none;"></div>
                                        <div class="position-absolute" style="width: 140px; height: 140px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.1); bottom: -50px; left: -50px; pointer-events: none;"></div>
                                        <div class="position-absolute" style="width: 80px; height: 80px; border-radius: 50%; background: rgba(255,255,255,0.04); top: 40%; left: -20px; pointer-events: none;"></div>

                                        {{-- Logo --}}
                                        <img src="{{ asset('assets/images/logo/zalgo-white.png') }}"
                                             alt="Zalgo Infotech"
                                             style="max-width: 120px; opacity: 0.92; margin-bottom: 1.75rem; position: relative; z-index: 1;" />

                                        {{-- Divider --}}
                                        <div style="width: 36px; height: 2px; background: rgba(255,255,255,0.35); margin: 0 auto 1.25rem; border-radius: 2px; position: relative; z-index: 1;"></div>

                                        {{-- Headline --}}
                                        <p style="font-size: 1.05rem; font-weight: 700; line-height: 1.5; margin-bottom: 0.75rem; opacity: 0.95; position: relative; z-index: 1;">
                                            Share your thoughts with us
                                        </p>
                                        <p style="font-size: 0.78rem; opacity: 0.6; line-height: 1.7; margin-bottom: 2rem; position: relative; z-index: 1;">
                                            Your comment helps others learn and grows our community.
                                        </p>

                                        {{-- Icon badges --}}
                                        <div style="display: flex; gap: 0.65rem; justify-content: center; position: relative; z-index: 1;">
                                            <div style="width: 38px; height: 38px; border-radius: 50%; background: rgba(255,255,255,0.14); display: flex; align-items: center; justify-content: center; backdrop-filter: blur(4px);">
                                                <i class="ph ph-chat-circle-text" style="font-size: 1rem;"></i>
                                            </div>
                                            <div style="width: 38px; height: 38px; border-radius: 50%; background: rgba(255,255,255,0.14); display: flex; align-items: center; justify-content: center; backdrop-filter: blur(4px);">
                                                <i class="ph ph-users" style="font-size: 1rem;"></i>
                                            </div>
                                            <div style="width: 38px; height: 38px; border-radius: 50%; background: rgba(255,255,255,0.14); display: flex; align-items: center; justify-content: center; backdrop-filter: blur(4px);">
                                                <i class="ph ph-pencil-simple" style="font-size: 1rem;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Right Form Panel --}}
                                <div class="col-lg-8 bg-white">
                                    <div style="padding: 2.5rem 2.75rem;">
                                        <div class="tw-mb-7">
                                            <span class="fw-bold tw-text-xs text-uppercase"
                                                  style="color: #00B5AD; letter-spacing: 0.1em;">Join the discussion</span>
                                            <h4 class="fw-bold text-main-two-600 tw-mt-2 mb-0">Leave a Comment</h4>
                                            <p class="tw-text-sm text-neutral-400 tw-mt-2">Your email will not be published.</p>
                                        </div>

                                        @if(session('comment_success'))
                                        <div class="tw-mb-5 tw-p-4 d-flex align-items-center tw-gap-3"
                                             style="border-radius: 8px; background: #d1fae5; color: #065f46;">
                                            <i class="ph-bold ph-check-circle" style="font-size: 1.2rem;"></i>
                                            <span class="tw-text-sm fw-medium">{{ session('comment_success') }}</span>
                                        </div>
                                        @endif

                                        @if($errors->any())
                                        <div class="tw-mb-5 tw-p-4" style="border-radius: 8px; background: #fee2e2; color: #991b1b;">
                                            <ul class="mb-0 ps-3">
                                                @foreach($errors->all() as $error)
                                                <li class="tw-text-sm">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                        <form action="{{ route('blog.comment', $blog->slug) }}" method="POST">
                                            @csrf
                                            <div class="row gy-3">
                                                <div class="col-sm-6">
                                                    <label class="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2"
                                                           style="letter-spacing: 0.07em;">Full Name *</label>
                                                    <input type="text" name="name" value="{{ old('name') }}"
                                                           class="w-100 border tw-text-sm"
                                                           style="padding: 0.7rem 1.1rem; border-color: #e5e7eb; border-radius: 8px; outline: none; transition: border-color 0.3s; color: #1a1a4d;"
                                                           placeholder="John Doe" required
                                                           onfocus="this.style.borderColor='#00B5AD';"
                                                           onblur="this.style.borderColor='#e5e7eb';" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2"
                                                           style="letter-spacing: 0.07em;">Email Address *</label>
                                                    <input type="email" name="email" value="{{ old('email') }}"
                                                           class="w-100 border tw-text-sm"
                                                           style="padding: 0.7rem 1.1rem; border-color: #e5e7eb; border-radius: 8px; outline: none; transition: border-color 0.3s; color: #1a1a4d;"
                                                           placeholder="john@example.com" required
                                                           onfocus="this.style.borderColor='#00B5AD';"
                                                           onblur="this.style.borderColor='#e5e7eb';" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2"
                                                           style="letter-spacing: 0.07em;">Phone</label>
                                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                                           class="w-100 border tw-text-sm"
                                                           style="padding: 0.7rem 1.1rem; border-color: #e5e7eb; border-radius: 8px; outline: none; transition: border-color 0.3s; color: #1a1a4d;"
                                                           placeholder="+1 234 567 890"
                                                           onfocus="this.style.borderColor='#00B5AD';"
                                                           onblur="this.style.borderColor='#e5e7eb';" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2"
                                                           style="letter-spacing: 0.07em;">Website</label>
                                                    <input type="url" name="website" value="{{ old('website') }}"
                                                           class="w-100 border tw-text-sm"
                                                           style="padding: 0.7rem 1.1rem; border-color: #e5e7eb; border-radius: 8px; outline: none; transition: border-color 0.3s; color: #1a1a4d;"
                                                           placeholder="https://yoursite.com"
                                                           onfocus="this.style.borderColor='#00B5AD';"
                                                           onblur="this.style.borderColor='#e5e7eb';" />
                                                </div>
                                                <div class="col-12">
                                                    <label class="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2"
                                                           style="letter-spacing: 0.07em;">Your Comment *</label>
                                                    <textarea name="comment"
                                                              class="w-100 border tw-text-sm"
                                                              style="padding: 0.7rem 1.1rem; border-color: #e5e7eb; border-radius: 8px; outline: none; height: 130px; resize: vertical; transition: border-color 0.3s; color: #1a1a4d; font-family: inherit;"
                                                              placeholder="Share your thoughts..." required
                                                              onfocus="this.style.borderColor='#00B5AD';"
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

                            </div>{{-- end row --}}
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
                              style="color: #00B5AD; letter-spacing: 0.1em;">Continue Reading</span>
                        <h3 class="fw-bold text-main-two-600 tw-mt-2 mb-0">Related Articles</h3>
                    </div>
                    <a href="{{ route('blog') }}"
                       class="d-flex align-items-center tw-gap-2 fw-semibold tw-text-sm"
                       style="color: #00B5AD; text-decoration: none;">
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
                                 onmouseover="this.style.transform='translateY(-7px)'; this.style.boxShadow='0 14px 32px rgba(0,181,173,0.14)';"
                                 onmouseout="this.style.transform=''; this.style.boxShadow='0 3px 18px rgba(0,0,0,0.07)';">
                            <a href="{{ route('blog.details', $recent->slug) }}"
                               class="d-block overflow-hidden position-relative"
                               style="height: 215px;">
                                <img src="@if($recent->image) {{ \Illuminate\Support\Facades\Storage::url($recent->image) }} @else {{ asset('assets/images/thumbs/blog-page-img1.png') }} @endif"
                                     alt="{{ $recent->title }}"
                                     class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500" />
                                <div class="position-absolute top-0 start-0 tw-m-4">
                                    <span class="fw-bold tw-text-xs text-white"
                                          style="background: rgba(0,181,173,0.9); backdrop-filter: blur(4px); border-radius: 5px; padding: 0.3rem 0.65rem;">
                                        {{ ($recent->published_at ?? $recent->created_at)->format('d M') }}
                                    </span>
                                </div>
                            </a>
                            <div style="padding: 1.6rem 1.75rem 1.75rem;">
                                <div class="d-flex align-items-center tw-gap-3 tw-mb-3 flex-wrap">
                                    <div class="d-flex align-items-center tw-gap-1">
                                        <i class="ph ph-user" style="color: #00B5AD; font-size: 0.8rem;"></i>
                                        <span class="tw-text-xs text-neutral-400 fw-medium">{{ $recent->author_name }}</span>
                                    </div>
                                    <span style="color: #e5e7eb;">•</span>
                                    <div class="d-flex align-items-center tw-gap-1">
                                        <i class="ph ph-clock" style="color: #00B5AD; font-size: 0.8rem;"></i>
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
                                   style="color: #00B5AD; text-decoration: none; letter-spacing: 0.06em; padding-top: 0.75rem; border-top: 1px solid #f3f4f6;">
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

@section('css')
<style>
    /* Hide scrollbar on sticky sidebar */
    .blog-sticky-sidebar::-webkit-scrollbar { display: none; }
</style>
@endsection

@section('script')
<script>
window.addEventListener('load', function () {

    // ── Reading progress bar (GSAP ticker — works with ScrollSmoother) ────────
    var bar     = document.getElementById('reading-progress');
    var article = document.getElementById('article-content');
    if (bar && article && typeof gsap !== 'undefined') {
        gsap.ticker.add(function () {
            var rect = article.getBoundingClientRect();
            var pct  = Math.min(Math.max((-rect.top / article.offsetHeight) * 100, 0), 100);
            bar.style.width = pct + '%';
        });
    }

    // ── Sticky sidebar via GSAP ScrollTrigger.pin ─────────────────────────────
    // ScrollSmoother virtualises scroll so CSS sticky never fires.
    // Fix: pin the sidebar using ScrollTrigger which IS ScrollSmoother-aware.
    //
    // Key decisions:
    //  • trigger = the SECTION (not the sidebar), so the pin starts when the
    //    section enters the viewport — the sidebar is fully visible at that point.
    //  • Before pinning, we lock the sidebar's pixel width so Bootstrap's
    //    percentage width doesn't collapse when GSAP switches to position:fixed.
    //  • anticipatePin:1 removes the one-frame jump on activation.
    //  • pinSpacing:false keeps the article column from shifting.

    var section  = document.getElementById('blog-content-section');
    var sidebar  = document.getElementById('blog-sidebar-sticky');
    var sidebarCol = sidebar ? sidebar.parentElement : null;
    var comments = document.getElementById('comments-section');

    if (section && sidebar && sidebarCol && comments && typeof ScrollTrigger !== 'undefined') {

        function lockWidth() {
            sidebar.style.width = sidebarCol.getBoundingClientRect().width + 'px';
        }
        lockWidth();

        var st = ScrollTrigger.create({
            trigger      : section,
            start        : 'top top+=90',
            pin          : sidebar,
            endTrigger   : comments,
            end          : 'top top+=90',
            pinSpacing   : false,
            anticipatePin: 1,
        });

        // Re-lock width and refresh on resize so column width stays correct
        window.addEventListener('resize', function () {
            sidebar.style.width = '';
            lockWidth();
            st.refresh();
        });
    }

});
</script>
@endsection

@endsection
