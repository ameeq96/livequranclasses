@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.webp') }})">
        <div class="auto-container">
			<h2>About</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>About Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Welcome One -->
	<section class="welcome-two">
		<div class="welcome-two_pattern" style="background-image:url({{ asset('assets/images/background/welcome-two_pattern.webp') }})"></div>
		<div class="welcome-two_pattern-two" style="background-image:url({{ asset('assets/images/background/welcome-two_pattern-two.webp') }})"></div>
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Image Column -->
				<div class="welcome-two_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="welcome-two_image-outer">
						<div class="welcome-two_dots" style="background-image:url({{ asset('assets/images/background/pattern-2.webp') }})"></div>
						<div class="welcome-two_dots-two" style="background-image:url({{ asset('assets/images/background/pattern-2.webp') }})"></div>
						<div class="welcome-two_ameen">
							<img src="{{ asset('assets/images/icons/ameen-1.webp') }}" alt="" />
						</div>
						<div class="welcome-two_image">
							<img src="{{ asset('assets/images/resource/welcome-2.webp') }}" alt="" />
						</div>
						<div class="welcome-two_image-two">
							<img src="{{ asset('assets/images/resource/welcome-4.webp') }}" alt="" />
						</div>
						<div class="welcome-two_years d-flex align-items-center flex-wrap">
							<span class="fa-solid fa-globe fa-fw"></span>
							Since 1995 Operating in the world
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="welcome-two_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="welcome-two_content-outer">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title d-flex align-items-center">Islamic Online Madrasah <span><img src="{{ asset('assets/images/icons/bismillah-2.webp') }}" alt="" /></span></div>
							<h2 class="sec-title_heading">Online Islamic School At Home</h2>
							<div class="sec-title_text">Our academy is built for students who want online quran learning with tajweed and a clear, reliable study path.</div>
						</div>
						<div class="welcome-two_middle-content">
							<div class="welcome-two_icon">
								<img src="{{ asset('assets/images/icons/welcome_two.webp') }}" alt="" />
							</div>
							<div class="welcome-two_learn">
								<span class="welcome-two_learn-icon flaticon-mosque"></span>
								Learn Online at Your <br> Own Pace
							</div>
							<div class="welcome-two_learn">
								<span class="welcome-two_learn-icon flaticon-quran-3"></span>
								Islamic Philosophy <br> and Quranic Studies
							</div>
						</div>
						<div class="welcome-two_middle-lower d-flex align-items-center flex-wrap">
							<div class="welcome-two_thumb">
								<img src="{{ asset('assets/images/resource/welcome-3.webp') }}" alt="" />
							</div>
							<h5 class="welcome-two_title">Peaceful</h5>
							<p>We help families learn about the quran with practical lessons, respectful teachers, and measurable outcomes.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Welcome One -->

	<!-- Institute One -->
	<section class="institute-one style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">Why to Choose Us</div>
				<h2 class="sec-title_heading">Why Choose Our Islamic <br> Institute</h2>
			</div>
			<div class="row clearfix">

				<!-- Institute Block One -->
				<div class="institute-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="institute-block_one-inner wow fadeInLeft"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="institute-block_one-bismillah" style="background-image:url({{ asset('assets/images/icons/bismillah-5.webp') }})"></div>
						<div class="institute-block_one-icon flaticon-quran-1"></div>
						<h4 class="institute-block_one-heading"><a href="{{ route('course.detail') }}">Best Quran <br> Teacher</a></h4>
						<div class="institute-block_one-text">Train with the best quran teacher to learn quran with tajweed and improve recitation in every lesson.</div>
					</div>
				</div>

				<!-- Institute Block One -->
				<div class="institute-block_one color-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="institute-block_one-inner wow fadeInLeft"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="institute-block_one-bismillah" style="background-image:url({{ asset('assets/images/icons/bismillah-5.webp') }})"></div>
						<div class="institute-block_one-icon flaticon-pray-1"></div>
						<h4 class="institute-block_one-heading"><a href="{{ route('course.detail') }}">Learn Quran <br> Reading</a></h4>
						<div class="institute-block_one-text">Structured plans for learn quran reading with tajweed for beginners and learning the quran for beginners.</div>
					</div>
				</div>

				<!-- Institute Block One -->
				<div class="institute-block_one color-three col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="institute-block_one-inner wow fadeInLeft"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="institute-block_one-bismillah" style="background-image:url({{ asset('assets/images/icons/bismillah-5.webp') }})"></div>
						<div class="institute-block_one-icon flaticon-education"></div>
						<h4 class="institute-block_one-heading"><a href="{{ route('course.detail') }}">Female Quran <br> Teacher Online</a></h4>
						<div class="institute-block_one-text">Choose a female quran teacher online and easily find quran teacher guidance for your family.</div>
					</div>
				</div>

				<!-- Institute Block One -->
				<div class="institute-block_one color-four col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="institute-block_one-inner wow fadeInLeft"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="institute-block_one-bismillah" style="background-image:url({{ asset('assets/images/icons/bismillah-5.webp') }})"></div>
						<div class="institute-block_one-icon flaticon-time-management"></div>
						<h4 class="institute-block_one-heading"><a href="{{ route('course.detail') }}">How to Learn <br> Quran at Home</a></h4>
						<div class="institute-block_one-text">Flexible schedules support how to learn quran at home through trusted online quran teaching websites.</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Institute One -->

	<!-- Students One / Style Three -->
	<section class="students-one style-three">
		<div class="auto-container">
			<div class="inner-container">
				<div class="students-one_pattern" style="background-image:url({{ asset('assets/images/background/student-bg.webp') }})"></div>
				<div class="row clearfix">

					<!-- Content Column -->
					<div class="students-one_title-column col-lg-5 col-md-12 col-sm-12">
						<div class="students-one_title-outer">
							<!-- Title Box -->
							<div class="students-one_title-box">
								<h3 class="students-one_title">Alhamdulillah we have reached over</h3>
								<div class="students-one_text">From children to adults, we provide consistent support for learning the quran for beginners and advanced learners.</div>
							</div>
							<!-- Counter Two -->
							<div class="students-one_counter">
								<div class="students-one_counter-inner">
									<div class="students-one_counter-icon">
										<i class="flaticon-give"></i>
									</div>
									<div class="students-one_counter-count"><span class="odometer" data-count="18000"></span></div>
									<div class="students-one_counter-text">Active Students</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Image Column -->
					<div class="students-one_content-column col-lg-7 col-md-12 col-sm-12">
						<div class="students-one_content-outer">

							<!-- Top Rated -->
							<div class="top-rated">
								<div class="top-rated_inner">
									<div class="top-rated-icon">
										<div class="top-rated_stars">
											<span class="fa-regular fa-star fa-fw"></span>
											<span class="fa-regular fa-star fa-fw"></span>
											<span class="fa-regular fa-star fa-fw"></span>
										</div>
										4.5
									</div>
									<h4 class="top-rated_heading">Top Ratings on Trustpilot</h4>
									<div class="top-rated_text">Parents call this the best way to learn quran because classes are structured, simple, and teacher-led.</div>
								</div>
							</div>

							<!-- Pass Out -->
							<div class="passout">
								<div class="passout_inner">
									<div class="passout-number">
										22k
									</div>
									<h4 class="passout_heading">Graduates</h4>
									<div class="passout_text">Students graduate with better fluency, stronger confidence, and clear understanding of recitation principles.</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Students One -->

	<!-- Scholar One -->
	<section class="scholar-one" style="background-image:url({{ asset('assets/images/background/scholar-bg.webp') }})">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<div class="sec-title_title">Our Scholars</div>
					<h2 class="sec-title_heading">All Our Teachers Are Graduates <br> From College Of Arabic</h2>
				</div>
				<!-- Button Box -->
				<div class="scholar-one_button">
					<a href="{{ route('about') }}" class="theme-btn btn-style-one">
						<span class="btn-wrap">
							<span class="text-one">Our Scholars</span>
							<span class="text-two">Our Scholars</span>
						</span>
					</a>
				</div>
			</div>

			<div class="row clearfix">

				<!-- Scholar Block One -->
				<div class="scholar-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="scholar-block_one-inner wow fadeInLeft"  data-wow-delay="0ms" data-wow-duration="1000ms">
						<div class="scholar-block_one-image">
							<a href="{{ route('about') }}"><img src="{{ asset('assets/images/resource/scholar-1.webp') }}" alt="" /></a>
						</div>
						<div class="scholar-block_one-content">
							<h4 class="scholar-block_one-heading"><a href="{{ route('about') }}">Osama Gamal</a></h4>
							<div class="scholar-block_one-designation">Quran & Arabic Teacher</div>
							<!-- Social Box -->
							<div class="scholar-block_one-socials">
								<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
								<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Scholar Block One -->
				<div class="scholar-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="scholar-block_one-inner wow fadeInUp"  data-wow-delay="0ms" data-wow-duration="1000ms">
						<div class="scholar-block_one-image">
							<a href="{{ route('about') }}"><img src="{{ asset('assets/images/resource/scholar-2.webp') }}" alt="" /></a>
						</div>
						<div class="scholar-block_one-content">
							<h4 class="scholar-block_one-heading"><a href="{{ route('about') }}">Ahmed Hany</a></h4>
							<div class="scholar-block_one-designation">Quran & Arabic Teacher</div>
							<!-- Social Box -->
							<div class="scholar-block_one-socials">
								<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
								<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Scholar Block One -->
				<div class="scholar-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="scholar-block_one-inner wow fadeInRight"  data-wow-delay="0ms" data-wow-duration="1000ms">
						<div class="scholar-block_one-image">
							<a href="{{ route('about') }}"><img src="{{ asset('assets/images/resource/scholar-3.webp') }}" alt="" /></a>
						</div>
						<div class="scholar-block_one-content">
							<h4 class="scholar-block_one-heading"><a href="{{ route('about') }}">Yusuf Samir</a></h4>
							<div class="scholar-block_one-designation">Quran & Arabic Teacher</div>
							<!-- Social Box -->
							<div class="scholar-block_one-socials">
								<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
								<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
	
			</div>

		</div>
	</section>
	<!-- End Scholar One -->

	<!-- Price One -->
	<section class="price-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">Courses Package</div>
				<h2 class="sec-title_heading">Join Hundreds Of Students <br> Today</h2>
			</div>
			<div class="row clearfix">

				<!-- Price Block One -->
				<div class="price-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="price-block_one-inner wow fadeInLeft"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="price-block_one-price "><sub>$</sub>32 <span>/Mo</span></div>
						<h4 class="price-block_one-heading">2 Classes Per Week</h4>
						<div class="price-block_one-students">2,000+ Students Enrolled</div>
						<ul class="price-block_one-list">
							<li>8 Classes per Month</li>
							<li>6 Months = US$ 178</li>
							<li>Save 7%</li>
							<li>12 Months = US$ 345</li>
							<li>Save 10%</li>
						</ul>
						<!-- Button Box -->
						<div class="price-block_one-button">
							<a href="{{ route('courses') }}" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">free trial</span>
									<span class="text-two">free trial</span>
								</span>
							</a>
						</div>
					</div>
				</div>

				<!-- Price Block One -->
				<div class="price-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="price-block_one-inner wow fadeInLeft"  data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="price-block_one-price "><sub>$</sub>48 <span>/Mo</span></div>
						<h4 class="price-block_one-heading">3 Classes Per Week</h4>
						<div class="price-block_one-students">3,000+ Students Enrolled</div>
						<ul class="price-block_one-list">
							<li>12 Classes per Month</li>
							<li>6 Months = US$ 178</li>
							<li>Save 7%</li>
							<li>12 Months = US$ 345</li>
							<li>Save 10%</li>
						</ul>
						<!-- Button Box -->
						<div class="price-block_one-button">
							<a href="{{ route('courses') }}" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">free trial</span>
									<span class="text-two">free trial</span>
								</span>
							</a>
						</div>
					</div>
				</div>

				<!-- Price Block One -->
				<div class="price-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="price-block_one-inner wow fadeInLeft"  data-wow-delay="450ms" data-wow-duration="1000ms">
						<div class="price-block_one-price "><sub>$</sub>60 <span>/Mo</span></div>
						<h4 class="price-block_one-heading">4 Classes Per Week</h4>
						<div class="price-block_one-students">5,000+ Students Enrolled</div>
						<ul class="price-block_one-list">
							<li>16 Classes per Month</li>
							<li>6 Months = US$ 178</li>
							<li>Save 7%</li>
							<li>12 Months = US$ 345</li>
							<li>Save 10%</li>
						</ul>
						<!-- Button Box -->
						<div class="price-block_one-button">
							<a href="{{ route('courses') }}" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">free trial</span>
									<span class="text-two">free trial</span>
								</span>
							</a>
						</div>
					</div>
				</div>

				<!-- Price Block One -->
				<div class="price-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="price-block_one-inner wow fadeInLeft"  data-wow-delay="550ms" data-wow-duration="1000ms">
						<div class="price-block_one-price "><sub>$</sub>80 <span>/Mo</span></div>
						<h4 class="price-block_one-heading">5 Classes Per Week</h4>
						<div class="price-block_one-students">6,000+ Students Enrolled</div>
						<ul class="price-block_one-list">
							<li>20 Classes per Month</li>
							<li>6 Months = US$ 178</li>
							<li>Save 7%</li>
							<li>12 Months = US$ 345</li>
							<li>Save 10%</li>
						</ul>
						<!-- Button Box -->
						<div class="price-block_one-button">
							<a href="{{ route('courses') }}" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">free trial</span>
									<span class="text-two">free trial</span>
								</span>
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Price One -->

	<!-- Testimonial Two -->
	<section class="testimonial-two" style="background-image:url({{ asset('assets/images/background/testimonial-two_bg.webp') }})">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">Testimonials</div>
				<h2 class="sec-title_heading">Trusted By Thousand Of <br> Students And Tutors</h2>
			</div>
			<!-- Carousel -->
			<div class="testimonial-two_carousel swiper-container">
				<div class="swiper-wrapper">
	
					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Testimonial Block Two -->
						<div class="testimonial-block_two">
							<div class="testimonial-block_two-inner">
								<div class="testimonial-block_two-rating">
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
								</div>
								<h4 class="testimonial-block_two-heading">Student Feedback</h4>
								<div class="testimonial-block_two-text">Our experience has been excellent. Lessons are simple, engaging, and practical, especially for children who are learning steadily with confidence.</div>
								<div class="testimonial-block_two-author">
									<div class="author-image">
										<img src="{{ asset('assets/images/resource/author-1.webp') }}" alt="" />
									</div>
									Muhammad Farhan
									<span>Quran Teacher</span>
								</div>
								<!-- Ameen -->
								<div class="testimonial-block_two_ameen">
									<img src="{{ asset('assets/images/icons/ameen-3.webp') }}" alt="" />
								</div>
								<!-- Icon -->
								<div class="testimonial-block_two-icon">
									<img src="{{ asset('assets/images/icons/featured.webp') }}" alt="" />
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Testimonial Block Two -->
						<div class="testimonial-block_two">
							<div class="testimonial-block_two-inner">
								<div class="testimonial-block_two-rating">
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
								</div>
								<h4 class="testimonial-block_two-heading">Student Feedback</h4>
								<div class="testimonial-block_two-text">Our experience has been excellent. Lessons are simple, engaging, and practical, especially for children who are learning steadily with confidence.</div>
								<div class="testimonial-block_two-author">
									<div class="author-image">
										<img src="{{ asset('assets/images/resource/author-6.webp') }}" alt="" />
									</div>
									Ibrahim Khalid
									<span>Quran Teacher</span>
								</div>
								<!-- Ameen -->
								<div class="testimonial-block_two_ameen">
									<img src="{{ asset('assets/images/icons/ameen-3.webp') }}" alt="" />
								</div>
								<!-- Icon -->
								<div class="testimonial-block_two-icon">
									<img src="{{ asset('assets/images/icons/featured.webp') }}" alt="" />
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Testimonial Block Two -->
						<div class="testimonial-block_two">
							<div class="testimonial-block_two-inner">
								<div class="testimonial-block_two-rating">
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
									<span class="fa-regular fa-star fa-fw"></span>
								</div>
								<h4 class="testimonial-block_two-heading">Student Feedback</h4>
								<div class="testimonial-block_two-text">Our experience has been excellent. Lessons are simple, engaging, and practical, especially for children who are learning steadily with confidence.</div>
								<div class="testimonial-block_two-author">
									<div class="author-image">
										<img src="{{ asset('assets/images/resource/author-1.webp') }}" alt="" />
									</div>
									Muhammad Farhan
									<span>Quran Teacher</span>
								</div>
								<!-- Ameen -->
								<div class="testimonial-block_two_ameen">
									<img src="{{ asset('assets/images/icons/ameen-3.webp') }}" alt="" />
								</div>
								<!-- Icon -->
								<div class="testimonial-block_two-icon">
									<img src="{{ asset('assets/images/icons/featured.webp') }}" alt="" />
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- If we need pagination -->
				<div class="testimonial-two_pagination"></div>

			</div>

		</div>
	</section>
	<!-- End Testimonial Two -->

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
