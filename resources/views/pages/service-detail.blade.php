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
				<div class="service-detail_text">This class focuses on Quran memorization and revision of <br> previously learned surahs through guided sessions.</div>
				<h4 class="service-detail_subtitle">Service Overview</h4>
				<div class="service-detail_text">Classes combine quran recitation, Hadith reminders, and guided reflection so students learn and memorize quran with understanding.</div>
			</div>
			<div class="row clearfix">

				<!-- Content Column -->
				<div class="service-detail_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="service-detail_content-outer">
						<h4 class="service-detail_lower-title">Surah Al-Takwir recitation</h4>
						<p>This class is for students who can fluently read Quran and want to strengthen memorization with disciplined revision.</p>
						<p>Each week includes recitation checks, correction points, and revision plans to keep your memorization strong and stable.</p>
						<ul class="service-detail_list">
							<li>This class focuses on Quran memorization and revision of previously learned surahs for long-term retention.</li>
							<li>Students learn how to review, retain, and apply correction without pressure.</li>
							<li>Daily homework and teacher notes keep every lesson clear and productive.</li>
							<li>We also include quran teachings, adab, and selected arabic vocabulary for meaning.</li>
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
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('enroll.show') }}"></a>
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
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('enroll.show') }}"></a>
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
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('enroll.show') }}"></a>
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
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('enroll.show') }}"></a>
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
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('enroll.show') }}"></a>
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
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('enroll.show') }}"></a>
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
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('enroll.show') }}"></a>
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
									<a class="gallery-block_two-arrow theme-btn flaticon-up-right-arrow" href="{{ route('enroll.show') }}"></a>
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
				<h3 class="cta-two_heading">Supporting online hifz quran journeys <br> with qualified mentors worldwide</h3>
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


