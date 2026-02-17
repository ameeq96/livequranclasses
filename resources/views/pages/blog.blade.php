@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.webp') }})">
        <div class="auto-container">
			<h1>Blogs</h1>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Blogs</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Blog One -->
	<section class="blog-one">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blogs.detail', ['slug' => 'how-to-start-quran-lessons-online-free-and-build-consistency']) }}"><img src="{{ asset('assets/images/resource/news-1.webp') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blogs.detail', ['slug' => 'how-to-start-quran-lessons-online-free-and-build-consistency']) }}">How to start quran lessons online free with a consistent routine</a></h5>
							<div class="news-block_one-text">A practical guide for students beginning with free quran lessons and quran learning online free study plans.</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-2.webp') }}" alt="" />
									</div>
									Admin Team
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blogs.detail', ['slug' => 'how-to-start-quran-lessons-online-free-and-build-consistency']) }}">read more</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blogs.detail', ['slug' => $blogPosts[1]['slug']]) }}"><img src="{{ asset('assets/images/resource/news-2.webp') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blogs.detail', ['slug' => $blogPosts[1]['slug']]) }}">Choosing the right tajweed online course for daily recitation</a></h5>
							<div class="news-block_one-text">Compare tajweed courses online and online tajweed courses to choose the best online tajweed course for your level.</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-3.webp') }}" alt="" />
									</div>
									Admin Team
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blogs.detail', ['slug' => $blogPosts[1]['slug']]) }}">read more</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blogs.detail', ['slug' => $blogPosts[2]['slug']]) }}"><img src="{{ asset('assets/images/resource/news-3.webp') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blogs.detail', ['slug' => $blogPosts[2]['slug']]) }}">Best way to hifz quran with focused revision blocks</a></h5>
							<div class="news-block_one-text">Learn how online hifz quran, quran hifz online plans, and online quran hifz classes improve memorization outcomes.</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-4.webp') }}" alt="" />
									</div>
									Admin Team
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blogs.detail', ['slug' => $blogPosts[2]['slug']]) }}">read more</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blogs.detail', ['slug' => $blogPosts[3]['slug']]) }}"><img src="{{ asset('assets/images/resource/news-8.webp') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blogs.detail', ['slug' => $blogPosts[3]['slug']]) }}">Learn arabic for quran and understand ayah meanings clearly</a></h5>
							<div class="news-block_one-text">A simple roadmap to learn arabic language to understand quran and improve learning arabic for quran at home.</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-8.webp') }}" alt="" />
									</div>
									Admin Team
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blogs.detail', ['slug' => $blogPosts[3]['slug']]) }}">read more</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blogs.detail', ['slug' => $blogPosts[4]['slug']]) }}"><img src="{{ asset('assets/images/resource/news-9.webp') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blogs.detail', ['slug' => $blogPosts[4]['slug']]) }}">Learn quran for beginners: how to read quran in arabic</a></h5>
							<div class="news-block_one-text">Step-by-step tips for learning quran for beginners, learn to read quran, and learn how to read the quran with confidence.</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-9.webp') }}" alt="" />
									</div>
									Admin Team
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blogs.detail', ['slug' => $blogPosts[4]['slug']]) }}">read more</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blogs.detail', ['slug' => $blogPosts[5]['slug']]) }}"><img src="{{ asset('assets/images/resource/news-10.webp') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blogs.detail', ['slug' => $blogPosts[5]['slug']]) }}">How to find quran teacher online for your family goals</a></h5>
							<div class="news-block_one-text">Use trusted online quran teaching websites, compare preply quran teacher options, and find female quran teacher near me support.</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-10.webp') }}" alt="" />
									</div>
									Admin Team
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blogs.detail', ['slug' => $blogPosts[5]['slug']]) }}">read more</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Blog One -->

	<!-- CTA One -->
	<section class="cta-two">
		<div class="auto-container">
			<div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
				<div class="cta-two_bg" style="background-image:url({{ asset('assets/images/background/cta-one_bg.webp') }})"></div>
				<div class="cta-two_icon flaticon-nabawi-mosque"></div>
				<h3 class="cta-two_heading">Learn Quran with Tajweed Online <br> with Trusted Teachers</h3>
				<!-- Button Box -->
				<div class="cta-two_button">
					<a href="{{ route('contact') }}" class="theme-btn btn-style-three">
						<span class="btn-wrap">
							<span class="text-one">get in touch</span>
							<span class="text-two">get in touch</span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->
@endsection


