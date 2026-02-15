@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.webp') }})">
        <div class="auto-container">
			<h2>Services Details</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Services Details</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Service Detail -->
	<section class="service-detail">
		<div class="auto-container">
			<div class="content" style="background-image:url({{ asset('assets/images/background/service-detail.webp') }})">
				<div class="service-detail_icon flaticon-quran-5"></div>
				<h3 class="service-detail_heading">Quranic Junior Al-Hafiz</h3>
				<div class="service-detail_text">This class focuses mainly on Qurâ€™an memorisation and revision of <br> surahs that have already been memorised.</div>
				<h4 class="service-detail_subtitle">Service Overview</h4>
				<div class="service-detail_text">In-class activities will also incorporate some lessons on Hadith and Quranic Arabic alongside surah understanding.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
			</div>
			<div class="row clearfix">

				<!-- Content Column -->
				<div class="service-detail_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="service-detail_content-outer">
						<h4 class="service-detail_lower-title">Surah Al-Takwir recitation</h4>
						<p>This class is for students who can fluently read Qurâ€™an. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
						<p>Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						<ul class="service-detail_list">
							<li>This class focuses mainly on Qurâ€™an memorisation and revision of surahs that have already been memorised.</li>
							<li>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
							<li>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis qui dolorem eum.</li>
							<li>In-class activities will also incorporate some lessons on Hadith and Quranic Arabic alongside surah understanding.</li>
						</ul>
					</div>
				</div>

				<!-- Content Column -->
				<div class="service-detail_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="service-detail_image-outer">
						<div class="service-detail_image">
							<img src="{{ asset('assets/images/resource/service.webp') }}" alt="" />
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Service Detail -->

	<!-- Gallery Two / Style Two -->
	<section class="gallery-two style-two">
		<div class="outer-container">
			<div class="gallery-two_carousel swiper-container">
				<div class="swiper-wrapper">
	
					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Gallery Block Two -->
						<div class="gallery-block_two">
							<div class="gallery-block_two-inner">
								<div class="gallery-block_two-image">
									<img src="{{ asset('assets/images/gallery/9.webp') }}" alt="" />
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('service.detail') }}"></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Gallery Block Two -->
						<div class="gallery-block_two">
							<div class="gallery-block_two-inner">
								<div class="gallery-block_two-image">
									<img src="{{ asset('assets/images/gallery/10.webp') }}" alt="" />
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('service.detail') }}"></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Gallery Block Two -->
						<div class="gallery-block_two">
							<div class="gallery-block_two-inner">
								<div class="gallery-block_two-image">
									<img src="{{ asset('assets/images/gallery/11.webp') }}" alt="" />
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('service.detail') }}"></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Gallery Block Two -->
						<div class="gallery-block_two">
							<div class="gallery-block_two-inner">
								<div class="gallery-block_two-image">
									<img src="{{ asset('assets/images/gallery/12.webp') }}" alt="" />
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('service.detail') }}"></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Gallery Block Two -->
						<div class="gallery-block_two">
							<div class="gallery-block_two-inner">
								<div class="gallery-block_two-image">
									<img src="{{ asset('assets/images/gallery/9.webp') }}" alt="" />
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('service.detail') }}"></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Gallery Block Two -->
						<div class="gallery-block_two">
							<div class="gallery-block_two-inner">
								<div class="gallery-block_two-image">
									<img src="{{ asset('assets/images/gallery/10.webp') }}" alt="" />
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('service.detail') }}"></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Gallery Block Two -->
						<div class="gallery-block_two">
							<div class="gallery-block_two-inner">
								<div class="gallery-block_two-image">
									<img src="{{ asset('assets/images/gallery/11.webp') }}" alt="" />
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('service.detail') }}"></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Gallery Block Two -->
						<div class="gallery-block_two">
							<div class="gallery-block_two-inner">
								<div class="gallery-block_two-image">
									<img src="{{ asset('assets/images/gallery/12.webp') }}" alt="" />
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('service.detail') }}"></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- End Gallery Two -->

	<!-- CTA One -->
	<section class="cta-two">
		<div class="auto-container">
			<div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
				<div class="cta-two_bg" style="background-image:url({{ asset('assets/images/background/cta-one_bg.webp') }})"></div>
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

