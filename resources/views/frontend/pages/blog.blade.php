@extends('frontend.layouts.app')
@section('title', 'Blog')
@section('content')
    @include('frontend.includes.headers.headerOne')

    <div id="smooth-content">

        {{-- ============================================================
             HERO: Gradient banner with logo, title, category pills, search
        ============================================================ --}}
        <section class="position-relative overflow-hidden"
                 style="background: linear-gradient(135deg, #0e0e3a 0%, #1351D8 100%); padding: 5.5rem 0 4rem;">

            {{-- Decorative rings --}}
            <div class="position-absolute" style="width: 560px; height: 560px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.05); top: -200px; right: -120px; pointer-events: none;"></div>
            <div class="position-absolute" style="width: 360px; height: 360px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.05); bottom: -120px; left: -80px; pointer-events: none;"></div>
            <div class="position-absolute" style="width: 180px; height: 180px; border-radius: 50%; background: rgba(34,211,170,0.08); top: 60px; right: 12%; pointer-events: none;"></div>

            <div class="container position-relative z-1">
                <div class="text-center">
                    {{-- Logo --}}
                    <div class="tw-mb-7">
                        <img src="{{ asset('assets/images/logo/zalgo-white.png') }}"
                             alt="Zalgo Infotech"
                             style="max-height: 36px; opacity: 0.92;" />
                    </div>

                    {{-- Label pill --}}
                    <div class="tw-mb-5">
                        <span class="fw-bold tw-text-xs text-uppercase rounded-pill"
                              style="background: rgba(255,255,255,0.12); color: rgba(255,255,255,0.85); letter-spacing: 0.1em; padding: 0.45rem 1.2rem; backdrop-filter: blur(6px);">
                            Our Blog
                        </span>
                    </div>

                    <h1 class="text-white fw-bold splitTextStyleOne"
                        style="font-size: clamp(2.4rem, 5vw, 3.8rem); letter-spacing: -0.025em; line-height: 1.15;">
                        Insights &amp; Ideas
                    </h1>
                    <p style="color: rgba(255,255,255,0.65); font-size: 1.05rem; max-width: 480px; margin: 1rem auto 0; line-height: 1.7;">
                        Expert perspectives on technology, strategy, and digital innovation.
                    </p>

                    {{-- Search bar --}}
                    <div class="d-flex justify-content-center tw-mt-8">
                        <form action="{{ route('blog') }}" method="GET"
                              class="position-relative" style="max-width: 460px; width: 100%;">
                            @if(request('category'))<input type="hidden" name="category" value="{{ request('category') }}">@endif
                            <input type="text" name="search" value="{{ request('search') }}"
                                   class="w-100 tw-text-sm"
                                   style="padding: 0.9rem 3.5rem 0.9rem 1.6rem; border-radius: 50px; border: none; outline: none; background: rgba(255,255,255,0.14); color: white; backdrop-filter: blur(10px); box-shadow: 0 2px 16px rgba(0,0,0,0.15);"
                                   placeholder="Search articles..."
                                   style-placeholder="color: rgba(255,255,255,0.5);" />
                            <button type="submit"
                                    class="position-absolute top-50 translate-middle-y tw-end-0 tw-me-5 border-0 bg-transparent"
                                    style="color: rgba(255,255,255,0.8); cursor: pointer; font-size: 1rem;">
                                <i class="ph-bold ph-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>

                    {{-- Category filter tabs --}}
                    @if($categories->isNotEmpty())
                    <div class="d-flex justify-content-center flex-wrap tw-mt-6" style="gap: 0.5rem;">
                        <a href="{{ route('blog') }}"
                           class="fw-medium tw-text-xs text-uppercase rounded-pill"
                           style="padding: 0.45rem 1.1rem; letter-spacing: 0.05em; text-decoration: none; transition: all 0.25s;
                                  background: {{ !request('category') && !request('tag') && !request('search') ? 'white' : 'rgba(255,255,255,0.14)' }};
                                  color: {{ !request('category') && !request('tag') && !request('search') ? '#1351D8' : 'rgba(255,255,255,0.8)' }};
                                  backdrop-filter: blur(6px);">
                            All
                        </a>
                        @foreach($categories->take(7) as $cat)
                        <a href="{{ route('blog', ['category' => $cat->category]) }}"
                           class="fw-medium tw-text-xs text-uppercase rounded-pill"
                           style="padding: 0.45rem 1.1rem; letter-spacing: 0.05em; text-decoration: none; transition: all 0.25s;
                                  background: {{ request('category') === $cat->category ? 'white' : 'rgba(255,255,255,0.14)' }};
                                  color: {{ request('category') === $cat->category ? '#1351D8' : 'rgba(255,255,255,0.8)' }};
                                  backdrop-filter: blur(6px);">
                            {{ $cat->category }}
                        </a>
                        @endforeach
                    </div>
                    @endif

                    {{-- Active filter indicators --}}
                    @if(request()->hasAny(['search','tag']))
                    <div class="d-flex justify-content-center align-items-center tw-gap-3 tw-mt-5 flex-wrap">
                        @if(request('search'))
                        <span class="tw-text-xs fw-medium" style="color: rgba(255,255,255,0.65);">
                            Results for: <strong style="color: white;">"{{ request('search') }}"</strong>
                        </span>
                        @endif
                        @if(request('tag'))
                        <span class="tw-text-xs fw-medium" style="color: rgba(255,255,255,0.65);">
                            Tag: <strong style="color: white;">#{{ request('tag') }}</strong>
                        </span>
                        @endif
                        <a href="{{ route('blog') }}"
                           class="tw-text-xs fw-semibold"
                           style="color: #22D3AA; text-decoration: none;">
                            <i class="ph-bold ph-x tw-me-1"></i>Clear
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </section>

        {{-- ============================================================
             BLOG CONTENT
        ============================================================ --}}
        <section class="py-120" style="background: #f9fafb;">
            <div class="container">

                @if($blogs->isEmpty())
                    {{-- Empty state --}}
                    <div class="text-center" style="padding: 5rem 0;">
                        <div style="font-size: 3.5rem; color: #d1d5db; margin-bottom: 1.25rem;">
                            <i class="ph ph-newspaper"></i>
                        </div>
                        <h4 class="fw-bold text-main-two-600 tw-mb-3">No articles found</h4>
                        <p class="text-neutral-400 tw-text-sm">Try adjusting your search or browse all posts.</p>
                        @if(request()->hasAny(['search','category','tag']))
                        <a href="{{ route('blog') }}"
                           class="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-3 active--translate-y-2 rounded-0 tw-px-10 tw-py-4 tw-mt-8"
                           data-block="button">
                            <span class="button__flair"></span>
                            <span class="button__label">Browse All Posts</span>
                        </a>
                        @endif
                    </div>

                @else

                    {{-- ── FEATURED POST (page 1, no filters) ── --}}
                    @php
                        $showFeatured = $blogs->currentPage() == 1 && !request()->hasAny(['search','category','tag']);
                        $featuredPost = $showFeatured ? $blogs->first() : null;
                    @endphp

                    @if($showFeatured && $featuredPost)
                    <div class="tw-mb-12" data-aos="fade-up" data-aos-duration="800">
                        <div class="row align-items-stretch g-0 overflow-hidden bg-white"
                             style="border-radius: 22px; box-shadow: 0 8px 36px rgba(19,81,216,0.11); min-height: 440px;">

                            {{-- Image --}}
                            <div class="col-lg-6 overflow-hidden" style="min-height: 300px;">
                                <a href="{{ route('blog.details', $featuredPost->slug) }}"
                                   class="d-block h-100 overflow-hidden position-relative"
                                   style="min-height: 300px;">
                                    <img src="@if($featuredPost->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($featuredPost->image)) {{ \Illuminate\Support\Facades\Storage::disk('public')->url($featuredPost->image) }} @else {{ asset('assets/images/thumbs/blog-page-img1.png') }} @endif"
                                         alt="{{ $featuredPost->title }}"
                                         class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-700"
                                         style="min-height: 300px;" />
                                    <div class="position-absolute top-0 start-0 tw-m-5">
                                        <span class="fw-bold tw-text-xs text-white text-uppercase rounded-pill"
                                              style="background: rgba(19,81,216,0.88); padding: 0.4rem 1rem; backdrop-filter: blur(4px); letter-spacing: 0.06em;">
                                            Featured
                                        </span>
                                    </div>
                                </a>
                            </div>

                            {{-- Content --}}
                            <div class="col-lg-6 d-flex align-items-center">
                                <div style="padding: 2.75rem 3rem;">
                                    <div class="d-flex align-items-center tw-gap-3 tw-mb-5 flex-wrap">
                                        @if($featuredPost->category)
                                        <span class="fw-bold tw-text-xs text-uppercase rounded-pill"
                                              style="background: #EEF2FF; color: #1351D8; padding: 0.35rem 0.9rem; letter-spacing: 0.06em;">
                                            {{ $featuredPost->category }}
                                        </span>
                                        @endif
                                        <span class="tw-text-xs text-neutral-400">
                                            {{ ($featuredPost->published_at ?? $featuredPost->created_at)->format('F d, Y') }}
                                        </span>
                                    </div>
                                    <h2 class="fw-bold text-main-two-600 tw-mb-4"
                                        style="font-size: clamp(1.4rem, 2.5vw, 1.9rem); line-height: 1.28; letter-spacing: -0.01em;">
                                        <a href="{{ route('blog.details', $featuredPost->slug) }}"
                                           style="text-decoration: none; color: inherit; transition: color 0.25s;"
                                           onmouseover="this.style.color='#1351D8';"
                                           onmouseout="this.style.color='';">
                                            {{ $featuredPost->title }}
                                        </a>
                                    </h2>
                                    <p class="text-neutral-600 tw-mb-8"
                                       style="line-height: 1.72; font-size: 0.95rem;">
                                        {{ $featuredPost->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($featuredPost->content), 190) }}
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap"
                                         style="gap: 1rem; padding-top: 1.25rem; border-top: 1px solid #f3f4f6;">
                                        <div class="d-flex align-items-center tw-gap-4">
                                            <div class="d-flex align-items-center tw-gap-2">
                                                <div class="tw-w-8 tw-h-8 rounded-circle d-flex align-items-center justify-content-center text-white"
                                                     style="background: #1351D8; font-size: 0.8rem; flex-shrink: 0;">
                                                    <i class="ph-bold ph-user"></i>
                                                </div>
                                                <span class="tw-text-sm fw-medium text-neutral-600">{{ $featuredPost->author_name }}</span>
                                            </div>
                                            <span style="color: #e5e7eb;">•</span>
                                            <div class="d-flex align-items-center tw-gap-1">
                                                <i class="ph ph-clock" style="color: #1351D8; font-size: 0.85rem;"></i>
                                                <span class="tw-text-xs text-neutral-400">{{ $featuredPost->read_time }}</span>
                                            </div>
                                        </div>
                                        <a href="{{ route('blog.details', $featuredPost->slug) }}"
                                           class="d-flex align-items-center tw-gap-2 fw-bold tw-text-xs text-uppercase"
                                           style="color: #1351D8; text-decoration: none; letter-spacing: 0.07em;">
                                            Read Article <i class="ph-bold ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- ── SECTION HEADER FOR GRID ── --}}
                    @php
                        $gridBlogs = $showFeatured ? $blogs->skip(1) : $blogs;
                        $hasGridPosts = $gridBlogs->count() > 0;
                    @endphp

                    @if($hasGridPosts)
                    @if($showFeatured)
                    <div class="d-flex align-items-center justify-content-between tw-mb-8 flex-wrap tw-gap-3">
                        <div>
                            <span class="fw-bold tw-text-xs text-uppercase"
                                  style="color: #1351D8; letter-spacing: 0.1em;">Latest Posts</span>
                            <h4 class="fw-bold text-main-two-600 tw-mt-1 mb-0" style="font-size: 1.35rem;">
                                More Articles
                            </h4>
                        </div>
                    </div>
                    @endif

                    {{-- ── POST GRID ── --}}
                    <div class="row gy-6">
                        @foreach($blogs as $post)
                        @continue($showFeatured && $loop->first)
                        <div class="col-lg-4 col-md-6"
                             data-aos="fade-up" data-aos-duration="800"
                             data-aos-delay="{{ ($loop->index % 3) * 100 }}">
                            <article class="h-100 d-flex flex-column bg-white overflow-hidden"
                                     style="border-radius: 16px; box-shadow: 0 2px 16px rgba(0,0,0,0.06); transition: transform 0.3s, box-shadow 0.3s;"
                                     onmouseover="this.style.transform='translateY(-7px)'; this.style.boxShadow='0 14px 32px rgba(19,81,216,0.13)';"
                                     onmouseout="this.style.transform=''; this.style.boxShadow='0 2px 16px rgba(0,0,0,0.06)';">

                                {{-- Image --}}
                                <div class="overflow-hidden position-relative" style="height: 218px; flex-shrink: 0;">
                                    <a href="{{ route('blog.details', $post->slug) }}" class="d-block h-100">
                                        <img src="@if($post->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($post->image)) {{ \Illuminate\Support\Facades\Storage::disk('public')->url($post->image) }} @else {{ asset('assets/images/thumbs/blog-page-img1.png') }} @endif"
                                             alt="{{ $post->title }}"
                                             class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-700" />
                                    </a>
                                    <div class="position-absolute top-0 start-0 tw-m-4">
                                        <span class="fw-bold tw-text-xs text-white"
                                              style="background: rgba(19,81,216,0.88); border-radius: 6px; padding: 0.3rem 0.65rem; backdrop-filter: blur(4px);">
                                            {{ ($post->published_at ?? $post->created_at)->format('d M') }}
                                        </span>
                                    </div>
                                    @if($post->category)
                                    <div class="position-absolute bottom-0 start-0 tw-m-4">
                                        <span class="fw-semibold tw-text-xs text-white text-uppercase"
                                              style="background: rgba(0,0,0,0.45); border-radius: 4px; padding: 0.25rem 0.6rem; backdrop-filter: blur(4px); letter-spacing: 0.05em;">
                                            {{ $post->category }}
                                        </span>
                                    </div>
                                    @endif
                                </div>

                                {{-- Body --}}
                                <div class="d-flex flex-column flex-grow-1" style="padding: 1.5rem 1.75rem 1.75rem;">

                                    {{-- Meta --}}
                                    <div class="d-flex align-items-center tw-gap-3 tw-mb-3 flex-wrap">
                                        <div class="d-flex align-items-center tw-gap-1">
                                            <i class="ph ph-user" style="color: #1351D8; font-size: 0.8rem;"></i>
                                            <span class="tw-text-xs text-neutral-400 fw-medium">{{ $post->author_name }}</span>
                                        </div>
                                        <span style="color: #e5e7eb; font-size: 0.75rem;">•</span>
                                        <div class="d-flex align-items-center tw-gap-1">
                                            <i class="ph ph-chat-circle" style="color: #1351D8; font-size: 0.8rem;"></i>
                                            <span class="tw-text-xs text-neutral-400">
                                                {{ $post->comments()->where('is_approved', true)->count() }}
                                            </span>
                                        </div>
                                        <span style="color: #e5e7eb; font-size: 0.75rem;">•</span>
                                        <div class="d-flex align-items-center tw-gap-1">
                                            <i class="ph ph-clock" style="color: #1351D8; font-size: 0.8rem;"></i>
                                            <span class="tw-text-xs text-neutral-400">{{ $post->read_time }}</span>
                                        </div>
                                    </div>

                                    {{-- Title --}}
                                    <h5 class="fw-bold text-main-two-600 tw-mb-3 line-clamp-2"
                                        style="line-height: 1.4; font-size: 1.05rem;">
                                        <a href="{{ route('blog.details', $post->slug) }}"
                                           style="text-decoration: none; color: inherit; transition: color 0.25s;"
                                           onmouseover="this.style.color='#1351D8';"
                                           onmouseout="this.style.color='';">
                                            {{ $post->title }}
                                        </a>
                                    </h5>

                                    {{-- Excerpt --}}
                                    <p class="text-neutral-600 flex-grow-1"
                                       style="font-size: 0.875rem; line-height: 1.7; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                        {{ $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 120) }}
                                    </p>

                                    {{-- Read more --}}
                                    <div style="margin-top: 1.1rem; padding-top: 1rem; border-top: 1px solid #f3f4f6;">
                                        <a href="{{ route('blog.details', $post->slug) }}"
                                           class="d-flex align-items-center tw-gap-2 fw-bold tw-text-xs text-uppercase"
                                           style="color: #1351D8; text-decoration: none; letter-spacing: 0.07em;">
                                            Read Article <i class="ph-bold ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    {{-- Pagination --}}
                    @if($blogs->hasPages())
                    <div class="tw-mt-14 d-flex justify-content-center">
                        {{ $blogs->links() }}
                    </div>
                    @endif

                @endif

            </div>
        </section>

        {{-- ============================================================
             POPULAR TAGS STRIP
        ============================================================ --}}
        @if($allTags->isNotEmpty())
        <section style="background: white; padding: 2.5rem 0; border-top: 1px solid #f3f4f6;">
            <div class="container">
                <div class="d-flex align-items-center flex-wrap" style="gap: 0.65rem;">
                    <div class="d-flex align-items-center tw-gap-2 tw-me-2">
                        <i class="ph ph-tag" style="color: #1351D8; font-size: 1rem;"></i>
                        <span class="fw-bold tw-text-xs text-uppercase text-main-two-600"
                              style="letter-spacing: 0.08em;">Popular Tags:</span>
                    </div>
                    @foreach($allTags->take(10) as $tag)
                    <a href="{{ route('blog', ['tag' => $tag]) }}"
                       class="fw-medium tw-text-xs"
                       style="padding: 0.4rem 0.9rem; border-radius: 4px; text-decoration: none; transition: all 0.25s;
                              background: {{ request('tag') === $tag ? '#1351D8' : '#f3f4f6' }};
                              color: {{ request('tag') === $tag ? 'white' : '#1a1a4d' }};
                              border: 1px solid {{ request('tag') === $tag ? '#1351D8' : '#e5e7eb' }};"
                       onmouseover="this.style.background='#1351D8'; this.style.color='white'; this.style.borderColor='#1351D8';"
                       onmouseout="this.style.background='{{ request('tag') === $tag ? '#1351D8' : '#f3f4f6' }}'; this.style.color='{{ request('tag') === $tag ? 'white' : '#1a1a4d' }}'; this.style.borderColor='{{ request('tag') === $tag ? '#1351D8' : '#e5e7eb' }}';">
                        {{ $tag }}
                    </a>
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
                    <img src="{{ asset('assets/images/thumbs/task-management-img.png') }}" alt="Image"
                         class="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none" />
                    <div class="tw-mb-8 text-center max-w-570-px mx-auto">
                        <div class="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13"
                             data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div>Up to <span class="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting</div>
                        </div>
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
                        <div class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">Project management</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Technology</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Technology</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill">Project management</span>
                            <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Technology</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.includes.footers.footerOne')
    </div>

@endsection
