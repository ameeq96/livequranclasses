@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
			<h2>Blog Grid</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Blog Grid</li>
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
							<a href="{{ route('blog.detail') }}"><img src="{{ asset('assets/images/resource/news-1.jpg') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blog.detail') }}">Abandoning Prayer – Why to Avoid at all Costs?</a></h5>
							<div class="news-block_one-text">There are many variations of passages of lorem Ipsum available islam courses</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-2.png') }}" alt="" />
									</div>
									amir khan
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blog.detail') }}">read more</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blog.detail') }}"><img src="{{ asset('assets/images/resource/news-2.jpg') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blog.detail') }}">What are the Conditions of the Shahadah in Islam</a></h5>
							<div class="news-block_one-text">There are many variations of passages of lorem Ipsum available islam courses</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-3.png') }}" alt="" />
									</div>
									amir khan
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blog.detail') }}">read more</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blog.detail') }}"><img src="{{ asset('assets/images/resource/news-3.jpg') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blog.detail') }}">Types of Khawf (Fear) and Tawakkul (Reliance) in Islam</a></h5>
							<div class="news-block_one-text">There are many variations of passages of lorem Ipsum available islam courses</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-4.png') }}" alt="" />
									</div>
									amir khan
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blog.detail') }}">read more</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blog.detail') }}"><img src="{{ asset('assets/images/resource/news-8.jpg') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blog.detail') }}">The Purpose of Revelation of the Holy Quran</a></h5>
							<div class="news-block_one-text">There are many variations of passages of lorem Ipsum available islam courses</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-8.png') }}" alt="" />
									</div>
									amir khan
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blog.detail') }}">read more</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blog.detail') }}"><img src="{{ asset('assets/images/resource/news-9.jpg') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blog.detail') }}">Ten Matters Which Invalidate a Person’s Islam</a></h5>
							<div class="news-block_one-text">There are many variations of passages of lorem Ipsum available islam courses</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-9.png') }}" alt="" />
									</div>
									amir khan
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blog.detail') }}">read more</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('blog.detail') }}"><img src="{{ asset('assets/images/resource/news-10.jpg') }}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
								<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="{{ route('blog.detail') }}">Great Challenge to Produce One Chapter Like the Holy Quran</a></h5>
							<div class="news-block_one-text">There are many variations of passages of lorem Ipsum available islam courses</div>
							<div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
								<div class="news-block_one-author">
									<div class="news-block_one-author_image">
										<img src="{{ asset('assets/images/resource/author-10.png') }}" alt="" />
									</div>
									amir khan
								</div>
								<a class="news-block_one-more theme-btn" href="{{ route('blog.detail') }}">read more</a>
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
				<div class="cta-two_bg" style="background-image:url({{ asset('assets/images/background/cta-one_bg.png') }})"></div>
				<div class="cta-two_icon flaticon-nabawi-mosque"></div>
				<h3 class="cta-two_heading">Proud to be serving thousands of Muslim <br> Families around the World</h3>
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

