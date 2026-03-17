@extends('layouts.app')

@section('content')
@php
    $shareUrl = urlencode(url()->current());
    $shareTitle = urlencode($post['title'] ?? 'Live Quran Classes Blog');
@endphp
<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.webp') }})">
    <div class="auto-container">
        <h1>{{ $post['title'] ?? 'Blog Details' }}</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('blogs') }}">Blogs</a></li>
            <li>{{ $post['title'] ?? 'Blog Details' }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-detail">
                    <div class="blog-detail_outer">
                        <div class="blog-detail_image">
                            <img src="{{ asset('assets/images/resource/' . ($post['image'] ?? 'news-1.webp')) }}" alt="{{ $post['title'] }}" />
                        </div>
                        <div class="blog-detail_content">
                            <div class="blog-detail_author d-flex align-items-center flex-wrap">
                                By Live Quran Classes Team
                                <ul class="blog-detail_meta">
                                    <li><span class="icon fa-solid fa-clock fa-fw"></span>{{ \Illuminate\Support\Carbon::parse($post['published_at'] ?? now())->format('F d, Y') }}</li>
                                    {{-- <li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comments</li> --}}
                                </ul>
                            </div>

                            <h3 class="blog-detail_heading">{{ $post['title'] ?? 'How to start quran lessons online free and build consistency' }}</h3>

                            <p>{{ $post['excerpt'] }}</p>
                            @foreach (($post['intro'] ?? []) as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach

                            <h4 class="blog-detail_subtitle">{{ $post['focus_heading'] ?? 'Why It Matters' }}</h4>
                            <p>{{ $post['focus_text'] ?? 'Students improve faster when they review daily, use a quran learning app for homework reminders, and practice with a trusted quran learning application.' }}</p>

                            <blockquote>{{ $post['quote'] ?? 'Small daily steps are the best way to learn quran with lasting confidence.' }}</blockquote>

                            <ul class="blog-detail_list">
                                @foreach (($post['tips'] ?? []) as $tip)
                                    <li>{{ $tip }}</li>
                                @endforeach
                            </ul>

                            <div class="post-share-options d-flex justify-content-between align-items-center flex-wrap">
                                <div class="tags"><span>Tags:</span>
                                    @foreach (($post['tags'] ?? []) as $tag)
                                        <a href="{{ route('blogs', ['q' => $tag]) }}">{{ $tag }}</a>
                                    @endforeach
                                </div>
                                <div class="social-box mt-2"><span>Share:</span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" rel="noopener" class="fa-brands fa-facebook-f"></a>
                                    <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}" target="_blank" rel="noopener" class="fa-brands fa-twitter"></a>
                                    <a href="https://wa.me/?text={{ $shareTitle }}%20{{ $shareUrl }}" target="_blank" rel="noopener" class="fa-brands fa-whatsapp"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">

                    <div class="sidebar-widget style-two search-box">
                        <div class="sidebar-title">
                            <h4>Search</h4>
                        </div>
                        <div class="content">
                            <form method="get" action="{{ route('blogs') }}">
                                <div class="form-group">
                                    <input type="search" name="q" value="{{ request('q') }}" placeholder="Search posts" required>
                                    <button type="submit"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget style-two post-widget">
                        <div class="sidebar-title">
                            <h4>Recent Posts</h4>
                        </div>
                        <div class="content">
                            <div class="widget-content">
                                @foreach ($recentPosts as $recentPost)
                                    <article class="post">
                                        <figure class="thumb"><a href="{{ route('blogs.detail', ['slug' => $recentPost['slug']]) }}"><img src="{{ asset('assets/images/resource/' . $recentPost['image']) }}" alt="{{ $recentPost['title'] }}" /></a></figure>
                                        <span class="post-date">{{ \Illuminate\Support\Carbon::parse($recentPost['published_at'])->format('F d, Y') }}</span>
                                        <h6><a href="{{ route('blogs.detail', ['slug' => $recentPost['slug']]) }}">{{ $recentPost['title'] }}</a></h6>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget style-two">
                        <div class="sidebar-title">
                            <h4>Tags</h4>
                        </div>
                        <div class="content">
                            <div class="popular-tags">
                                @foreach (($post['tags'] ?? []) as $tag)
                                    <a href="{{ route('blogs', ['q' => $tag]) }}">{{ $tag }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection
