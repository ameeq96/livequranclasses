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
                            <img src="{{ asset('assets/images/resource/news-11.webp') }}" alt="" />
                        </div>
                        <div class="blog-detail_content">
                            <div class="blog-detail_author d-flex align-items-center flex-wrap">
                                By Admin
                                <ul class="blog-detail_meta">
                                    <li><span class="icon fa-solid fa-clock fa-fw"></span>October 18, 2025</li>
                                    <li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comments</li>
                                </ul>
                            </div>

                            <h3 class="blog-detail_heading">{{ $post['title'] ?? 'How to start quran lessons online free and build consistency' }}</h3>

                            <p>Many families ask how can i learn quran without delay. The most effective start is a simple weekly plan with quran lessons online free support and clear teacher feedback.</p>
                            <p>Begin with free quran lessons, then move into structured practice to learn quran online with tajweed and improve recitation quality step by step.</p>

                            <h4 class="blog-detail_subtitle">Why It Matters</h4>
                            <p>Students improve faster when they review daily, use a quran learning app for homework reminders, and practice with a trusted quran learning application.</p>

                            <blockquote>Small daily steps are the best way to learn quran with lasting confidence.</blockquote>

                            <ul class="blog-detail_list">
                                <li>Use online quran hifz classes and hifz quran classes if your target is long-term memorization.</li>
                                <li>Choose a quran tajweed course or tajweed course online track before advanced memorization.</li>
                                <li>For meaning, learn arabic quran online free resources and focus on learning arabic for quran gradually.</li>
                                <li>Combine revision with learning quran tajweed, learn tajweed quran drills, and learn quran recitation with tajweed daily.</li>
                            </ul>

                            <div class="post-share-options d-flex justify-content-between align-items-center flex-wrap">
                                <div class="tags"><span>Tags:</span><a href="#">learn quran recitation with tajweed</a> <a href="#">learn quran with tajweed</a> <a href="#">learn to read quran</a></div>
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
                                <article class="post">
                                    <figure class="thumb"><a href="{{ route('blogs.detail', ['slug' => 'how-to-start-quran-lessons-online-free-and-build-consistency']) }}"><img src="{{ asset('assets/images/resource/post-thumb-1.webp') }}" alt="" /></a></figure>
                                    <span class="post-date">October 10, 2025</span>
                                    <h6><a href="{{ route('blogs.detail', ['slug' => 'learn-arabic-for-quran-and-understand-ayah-meanings-clearly']) }}">how to learn arabic for quran</a></h6>
                                </article>
                                <article class="post">
                                    <figure class="thumb"><a href="{{ route('blogs.detail', ['slug' => 'learn-quran-for-beginners-how-to-read-quran-in-arabic']) }}"><img src="{{ asset('assets/images/resource/post-thumb-2.webp') }}" alt="" /></a></figure>
                                    <span class="post-date">October 12, 2025</span>
                                    <h6><a href="{{ route('blogs.detail', ['slug' => 'learn-quran-for-beginners-how-to-read-quran-in-arabic']) }}">learn to recite quran with daily practice</a></h6>
                                </article>
                                <article class="post">
                                    <figure class="thumb"><a href="{{ route('blogs.detail', ['slug' => 'choosing-the-right-tajweed-online-course-for-daily-recitation']) }}"><img src="{{ asset('assets/images/resource/post-thumb-3.webp') }}" alt="" /></a></figure>
                                    <span class="post-date">October 15, 2025</span>
                                    <h6><a href="{{ route('blogs.detail', ['slug' => 'choosing-the-right-tajweed-online-course-for-daily-recitation']) }}">best online tajweed course comparison</a></h6>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget style-two">
                        <div class="sidebar-title">
                            <h4>Tags</h4>
                        </div>
                        <div class="content">
                            <div class="popular-tags">
                                <a href="#">learn quran with tajweed</a>
                                <a href="#">learn to read quran</a>
                                <a href="#">learn quran recitation with tajweed</a>
                                <a href="#">online quran learning with tajweed</a>
                                <a href="#">learning quran arabic language</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection

