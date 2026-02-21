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
            @php
                $cardImages = [
                    'news-1.webp',
                    'news-2.webp',
                    'news-3.webp',
                    'news-8.webp',
                    'news-9.webp',
                    'news-10.webp',
                ];
            @endphp
            @if (!empty($query))
                <div class="mb-4" style="font-weight:600;">
                    Search results for: "{{ $query }}"
                </div>
            @endif
			<div class="row clearfix">
                @forelse ($blogPosts as $index => $post)
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blogs.detail', ['slug' => $post['slug']]) }}"><img src="{{ asset('assets/images/resource/' . ($cardImages[$index % count($cardImages)] ?? 'news-1.webp')) }}" alt="{{ $post['title'] }}" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								{{-- <li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li> --}}
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blogs.detail', ['slug' => $post['slug']]) }}">{{ $post['title'] }}</a></h5>
							<div class="news-block_one-text">Read this blog post for practical Quran learning guidance and consistent daily study tips.</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-2.webp') }}" alt="Admin Team" />
									</div>
									Admin Team
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blogs.detail', ['slug' => $post['slug']]) }}">read more</a>
							</div>
						</div>
					</div>
				</div>
                @empty
                <div class="col-12">
                    <div style="padding:20px;border:1px solid #e5e5e5;background:#fff;">No blog posts found for your search.</div>
                </div>
                @endforelse

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


