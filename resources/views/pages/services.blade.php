@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
			<h2>Our Services</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Services</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Service Two -->
	<section class="service-two">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Service Block One -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInLeft"  data-wow-delay="0ms" data-wow-duration="1000ms">
						<div class="service-block_two-upper">
							<div class="service-block_two-icon flaticon-quran-1"></div>
							<div class="service-block_two-big_icon">
								<img src="{{ asset('assets/images/icons/service-1.png') }}" alt="" />
							</div>
							<h4 class="service-block_two-heading"><a href="{{ route('service.detail') }}">Online Quran <br> Classes</a></h4>
							<div class="service-block_two-text">There are many variations of passages of lorem ipsum available lorem ipsum dolor sit amet</div>
						</div>
						<div class="service-block_two-lower">
							<a class="service-block_two-more" href="{{ route('service.detail') }}">Read More<i class="fa-solid fa-arrow-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInLeft"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="service-block_two-upper">
							<div class="service-block_two-icon flaticon-pray"></div>
							<div class="service-block_two-big_icon">
								<img src="{{ asset('assets/images/icons/service-1.png') }}" alt="" />
							</div>
							<h4 class="service-block_two-heading"><a href="{{ route('service.detail') }}">Online Islamic <br> Classes</a></h4>
							<div class="service-block_two-text">There are many variations of passages of lorem ipsum available lorem ipsum dolor sit amet</div>
						</div>
						<div class="service-block_two-lower">
							<a class="service-block_two-more" href="{{ route('service.detail') }}">Read More<i class="fa-solid fa-arrow-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInLeft"  data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="service-block_two-upper">
							<div class="service-block_two-icon flaticon-quran-2"></div>
							<div class="service-block_two-big_icon">
								<img src="{{ asset('assets/images/icons/service-1.png') }}" alt="" />
							</div>
							<h4 class="service-block_two-heading"><a href="{{ route('service.detail') }}">Expert Quran <br> Tutor</a></h4>
							<div class="service-block_two-text">There are many variations of passages of lorem ipsum available lorem ipsum dolor sit amet</div>
						</div>
						<div class="service-block_two-lower">
							<a class="service-block_two-more" href="{{ route('service.detail') }}">Read More<i class="fa-solid fa-arrow-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInRight"  data-wow-delay="0ms" data-wow-duration="1000ms">
						<div class="service-block_two-upper">
							<div class="service-block_two-icon flaticon-quran-5"></div>
							<div class="service-block_two-big_icon">
								<img src="{{ asset('assets/images/icons/service-1.png') }}" alt="" />
							</div>
							<h4 class="service-block_two-heading"><a href="{{ route('service.detail') }}">Quranic Junior <br> Al-Hafiz</a></h4>
							<div class="service-block_two-text">There are many variations of passages of lorem ipsum available lorem ipsum dolor sit amet</div>
						</div>
						<div class="service-block_two-lower">
							<a class="service-block_two-more" href="{{ route('service.detail') }}">Read More<i class="fa-solid fa-arrow-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInRight"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="service-block_two-upper">
							<div class="service-block_two-icon flaticon-quran-4"></div>
							<div class="service-block_two-big_icon">
								<img src="{{ asset('assets/images/icons/service-1.png') }}" alt="" />
							</div>
							<h4 class="service-block_two-heading"><a href="{{ route('service.detail') }}">Quran <br> Translation</a></h4>
							<div class="service-block_two-text">There are many variations of passages of lorem ipsum available lorem ipsum dolor sit amet</div>
						</div>
						<div class="service-block_two-lower">
							<a class="service-block_two-more" href="{{ route('service.detail') }}">Read More<i class="fa-solid fa-arrow-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_two-inner wow fadeInRight"  data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="service-block_two-upper">
							<div class="service-block_two-icon flaticon-boy"></div>
							<div class="service-block_two-big_icon">
								<img src="{{ asset('assets/images/icons/service-1.png') }}" alt="" />
							</div>
							<h4 class="service-block_two-heading"><a href="{{ route('service.detail') }}">Islamic Studies For <br> Kids Course</a></h4>
							<div class="service-block_two-text">There are many variations of passages of lorem ipsum available lorem ipsum dolor sit amet</div>
						</div>
						<div class="service-block_two-lower">
							<a class="service-block_two-more" href="{{ route('service.detail') }}">Read More<i class="fa-solid fa-arrow-right fa-fw"></i></a>
						</div>
					</div>
				</div>

			</div>

			<!-- Styled Pagination -->
			<ul class="styled-pagination text-center">
				<li><a href="#" class="active">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="next"><a href="#">next</a></li>
			</ul>
			<!-- End Styled Pagination -->

		</div>
	</section>
	<!-- End Service Two -->

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

