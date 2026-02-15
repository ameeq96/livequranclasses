@extends('layouts.app')

@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.jpg') }})">
    <div class="auto-container">
        <h2>Blog Details</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('blog') }}">Blogs</a></li>
            <li>Blog Details</li>
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
                            <img src="{{ asset('assets/images/resource/news-11.jpg') }}" alt="" />
                        </div>
                        <div class="blog-detail_content">
                            <div class="blog-detail_author d-flex align-items-center flex-wrap">
                                By Admin
                                <ul class="blog-detail_meta">
                                    <li><span class="icon fa-solid fa-clock fa-fw"></span>October 18, 2025</li>
                                    <li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comments</li>
                                </ul>
                            </div>

                            <h3 class="blog-detail_heading">Abandoning Prayer - Why to Avoid at all Costs?</h3>

                            <p>Prayer is one of the strongest pillars of Islam and a direct connection between a servant and Allah. Keeping this connection alive brings peace, discipline, and barakah in daily life.</p>
                            <p>When prayer is delayed or ignored, a person gradually feels spiritual weakness. Regular salah protects the heart and keeps the believer focused on the purpose of life.</p>

                            <h4 class="blog-detail_subtitle">Why It Matters</h4>
                            <p>Consistent worship builds character and strengthens faith. It also teaches punctuality, patience, and humility through every stage of life.</p>

                            <blockquote>Guard your daily prayers with consistency, sincerity, and gratitude.</blockquote>

                            <ul class="blog-detail_list">
                                <li>Prayer keeps the heart attached to remembrance of Allah.</li>
                                <li>It brings structure and purpose to your day.</li>
                                <li>It protects from sins and careless habits.</li>
                                <li>It increases patience during hardship and gratitude in ease.</li>
                            </ul>

                            <div class="post-share-options d-flex justify-content-between align-items-center flex-wrap">
                                <div class="tags"><span>Tags:</span><a href="#">Islam</a> <a href="#">Quran</a> <a href="#">Prayer</a></div>
                                <div class="social-box"><span>Share:</span>
                                    <a href="#" class="fa-brands fa-facebook-f"></a>
                                    <a href="#" class="fa-brands fa-twitter"></a>
                                    <a href="#" class="fa-brands fa-instagram"></a>
                                </div>
                            </div>

                            <div class="comments-area">
                                <div class="group-title">
                                    <h4>2 Comments</h4>
                                </div>

                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="{{ asset('assets/images/resource/author-11.png') }}" alt="" /></div>
                                        <div class="comment-info">
                                            <strong>Usman Ali</strong>
                                            <div class="comment-time">October 20, 2025 at 11:30 AM</div>
                                        </div>
                                        <div class="text">Very beneficial reminder. The explanation is simple and practical for daily routine.</div>
                                        <a class="reply-btn" href="#">Reply</a>
                                    </div>
                                </div>

                                <div class="comment-box reply-comment">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="{{ asset('assets/images/resource/author-12.png') }}" alt="" /></div>
                                        <div class="comment-info">
                                            <strong>Hafsa Noor</strong>
                                            <div class="comment-time">October 21, 2025 at 09:10 AM</div>
                                        </div>
                                        <div class="text">This article motivated me to become regular with prayers again. JazakAllah khair.</div>
                                        <a class="reply-btn" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-form-outer">
                                <div class="group-title">
                                    <h4>Leave a Comment</h4>
                                </div>
                                <form class="comment-form" method="post" action="#">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Write your comment" required></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-one" type="submit">
                                                <span class="btn-wrap">
                                                    <span class="text-one">Post Comment</span>
                                                    <span class="text-two">Post Comment</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search here" required>
                                    <button type="submit"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget style-two">
                        <div class="sidebar-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="content">
                            <ul class="category-list">
                                <li><a href="#">Quran Learning <span>(06)</span></a></li>
                                <li><a href="#">Islamic Studies <span>(04)</span></a></li>
                                <li><a href="#">Tajweed Rules <span>(08)</span></a></li>
                                <li><a href="#">Daily Duas <span>(05)</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-widget style-two post-widget">
                        <div class="sidebar-title">
                            <h4>Recent Posts</h4>
                        </div>
                        <div class="content">
                            <div class="widget-content">
                                <article class="post">
                                    <figure class="thumb"><a href="{{ route('blog.detail') }}"><img src="{{ asset('assets/images/resource/post-thumb-1.png') }}" alt="" /></a></figure>
                                    <span class="post-date">October 10, 2025</span>
                                    <h6><a href="{{ route('blog.detail') }}">The Purpose of Revelation of the Holy Quran</a></h6>
                                </article>
                                <article class="post">
                                    <figure class="thumb"><a href="{{ route('blog.detail') }}"><img src="{{ asset('assets/images/resource/post-thumb-2.png') }}" alt="" /></a></figure>
                                    <span class="post-date">October 12, 2025</span>
                                    <h6><a href="{{ route('blog.detail') }}">Types of Tawakkul in Daily Life</a></h6>
                                </article>
                                <article class="post">
                                    <figure class="thumb"><a href="{{ route('blog.detail') }}"><img src="{{ asset('assets/images/resource/post-thumb-3.png') }}" alt="" /></a></figure>
                                    <span class="post-date">October 15, 2025</span>
                                    <h6><a href="{{ route('blog.detail') }}">How to Build Quran Habit for Kids</a></h6>
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
                                <a href="#">Quran</a>
                                <a href="#">Prayer</a>
                                <a href="#">Islam</a>
                                <a href="#">Tajweed</a>
                                <a href="#">Dua</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection