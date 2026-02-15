@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.jpg') }})">
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
		<div class="welcome-two_pattern" style="background-image:url({{ asset('assets/images/background/welcome-two_pattern.png') }})"></div>
		<div class="welcome-two_pattern-two" style="background-image:url({{ asset('assets/images/background/welcome-two_pattern-two.png') }})"></div>
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Image Column -->
				<div class="welcome-two_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="welcome-two_image-outer">
						<div class="welcome-two_dots" style="background-image:url({{ asset('assets/images/background/pattern-2.png') }})"></div>
						<div class="welcome-two_dots-two" style="background-image:url({{ asset('assets/images/background/pattern-2.png') }})"></div>
						<div class="welcome-two_ameen">
							<img src="{{ asset('assets/images/icons/ameen-1.png') }}" alt="" />
						</div>
						<div class="welcome-two_image">
							<img src="{{ asset('assets/images/resource/welcome-2.jpg') }}" alt="" />
						</div>
						<div class="welcome-two_image-two">
							<img src="{{ asset('assets/images/resource/welcome-4.jpg') }}" alt="" />
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
							<div class="sec-title_title d-flex align-items-center">Islamic Online Madrasah <span><img src="{{ asset('assets/images/icons/bismillah-2.png') }}" alt="" /></span></div>
							<h2 class="sec-title_heading">Online Islamic School At Home</h2>
							<div class="sec-title_text">We welcome our users to Online Quran teaching services where we are offering multiple Islamic as well as character building and life reformation courses as per the teachings of Sharia.</div>
						</div>
						<div class="welcome-two_middle-content">
							<div class="welcome-two_icon">
								<img src="{{ asset('assets/images/icons/welcome_two.png') }}" alt="" />
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
								<img src="{{ asset('assets/images/resource/welcome-3.jpg') }}" alt="" />
							</div>
							<h5 class="welcome-two_title">Peaceful</h5>
							<p>Working for peace & serving humanity. lorem free market to available, but the majority have alteration in some form</p>
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
						<div class="institute-block_one-bismillah" style="background-image:url({{ asset('assets/images/icons/bismillah-5.png') }})"></div>
						<div class="institute-block_one-icon flaticon-quran-1"></div>
						<h4 class="institute-block_one-heading"><a href="{{ route('course.detail') }}">Expert Quran <br> Tutor</a></h4>
						<div class="institute-block_one-text">All the classes of online Quran teaching are conducted by well qualified Islamic scholars</div>
					</div>
				</div>

				<!-- Institute Block One -->
				<div class="institute-block_one color-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="institute-block_one-inner wow fadeInLeft"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="institute-block_one-bismillah" style="background-image:url({{ asset('assets/images/icons/bismillah-5.png') }})"></div>
						<div class="institute-block_one-icon flaticon-pray-1"></div>
						<h4 class="institute-block_one-heading"><a href="{{ route('course.detail') }}">We Value Our <br> Students</a></h4>
						<div class="institute-block_one-text">All the classes of online Quran teaching are conducted by well qualified Islamic scholars</div>
					</div>
				</div>

				<!-- Institute Block One -->
				<div class="institute-block_one color-three col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="institute-block_one-inner wow fadeInLeft"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="institute-block_one-bismillah" style="background-image:url({{ asset('assets/images/icons/bismillah-5.png') }})"></div>
						<div class="institute-block_one-icon flaticon-education"></div>
						<h4 class="institute-block_one-heading"><a href="{{ route('course.detail') }}">Male Female <br> Teachers</a></h4>
						<div class="institute-block_one-text">All the classes of online Quran teaching are conducted by well qualified Islamic scholars</div>
					</div>
				</div>

				<!-- Institute Block One -->
				<div class="institute-block_one color-four col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="institute-block_one-inner wow fadeInLeft"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="institute-block_one-bismillah" style="background-image:url({{ asset('assets/images/icons/bismillah-5.png') }})"></div>
						<div class="institute-block_one-icon flaticon-time-management"></div>
						<h4 class="institute-block_one-heading"><a href="{{ route('course.detail') }}">Flexible <br> Timings</a></h4>
						<div class="institute-block_one-text">All the classes of online Quran teaching are conducted by well qualified Islamic scholars</div>
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
				<div class="students-one_pattern" style="background-image:url({{ asset('assets/images/background/student-bg.png') }})"></div>
				<div class="row clearfix">

					<!-- Content Column -->
					<div class="students-one_title-column col-lg-5 col-md-12 col-sm-12">
						<div class="students-one_title-outer">
							<!-- Title Box -->
							<div class="students-one_title-box">
								<h3 class="students-one_title">Alhamdulillah we have reached over</h3>
								<div class="students-one_text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
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
									<div class="top-rated_text">Lorem ipsum generators on the internet tend to repeat predefined chunks necessary on making this the first velit esse cillum dolore</div>
								</div>
							</div>

							<!-- Pass Out -->
							<div class="passout">
								<div class="passout_inner">
									<div class="passout-number">
										22k
									</div>
									<h4 class="passout_heading">pass out</h4>
									<div class="passout_text">Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt to labore et dolore pass out</div>
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
	<section class="scholar-one" style="background-image:url({{ asset('assets/images/background/scholar-bg.png') }})">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<div class="sec-title_title">Our Scholars</div>
					<h2 class="sec-title_heading">All Our Teachers Are Graduates <br> From College Of Arabic</h2>
				</div>
				<!-- Button Box -->
				<div class="scholar-one_button">
					<a href="team.html" class="theme-btn btn-style-one">
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
							<a href="scholar-detail.html"><img src="{{ asset('assets/images/resource/scholar-1.jpg') }}" alt="" /></a>
						</div>
						<div class="scholar-block_one-content">
							<h4 class="scholar-block_one-heading"><a href="scholar-detail.html">Osama Gamal</a></h4>
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
							<a href="scholar-detail.html"><img src="{{ asset('assets/images/resource/scholar-2.jpg') }}" alt="" /></a>
						</div>
						<div class="scholar-block_one-content">
							<h4 class="scholar-block_one-heading"><a href="scholar-detail.html">Ahmed Hany</a></h4>
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
							<a href="scholar-detail.html"><img src="{{ asset('assets/images/resource/scholar-3.jpg') }}" alt="" /></a>
						</div>
						<div class="scholar-block_one-content">
							<h4 class="scholar-block_one-heading"><a href="scholar-detail.html">Yusuf Samir</a></h4>
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
							<a href="price.html" class="theme-btn btn-style-one">
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
							<a href="price.html" class="theme-btn btn-style-one">
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
							<a href="price.html" class="theme-btn btn-style-one">
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
							<a href="price.html" class="theme-btn btn-style-one">
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
	<section class="testimonial-two" style="background-image:url({{ asset('assets/images/background/testimonial-two_bg.png') }})">
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
								<h4 class="testimonial-block_two-heading">Customers Review</h4>
								<div class="testimonial-block_two-text">Best platform for learning quran and arabic for kids. The way of teaching is the best and kids feel comfortable with them thank you mishkah for teaching</div>
								<div class="testimonial-block_two-author">
									<div class="author-image">
										<img src="{{ asset('assets/images/resource/author-1.png') }}" alt="" />
									</div>
									Hafiz bin Usif
									<span>Quran Teacher</span>
								</div>
								<!-- Ameen -->
								<div class="testimonial-block_two_ameen">
									<img src="{{ asset('assets/images/icons/ameen-3.png') }}" alt="" />
								</div>
								<!-- Icon -->
								<div class="testimonial-block_two-icon">
									<img src="{{ asset('assets/images/icons/featured.png') }}" alt="" />
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
								<h4 class="testimonial-block_two-heading">Customers Review</h4>
								<div class="testimonial-block_two-text">Best platform for learning quran and arabic for kids. The way of teaching is the best and kids feel comfortable with them thank you mishkah for teaching</div>
								<div class="testimonial-block_two-author">
									<div class="author-image">
										<img src="{{ asset('assets/images/resource/author-6.png') }}" alt="" />
									</div>
									Ibrahim klip
									<span>Quran Teacher</span>
								</div>
								<!-- Ameen -->
								<div class="testimonial-block_two_ameen">
									<img src="{{ asset('assets/images/icons/ameen-3.png') }}" alt="" />
								</div>
								<!-- Icon -->
								<div class="testimonial-block_two-icon">
									<img src="{{ asset('assets/images/icons/featured.png') }}" alt="" />
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
								<h4 class="testimonial-block_two-heading">Customers Review</h4>
								<div class="testimonial-block_two-text">Best platform for learning quran and arabic for kids. The way of teaching is the best and kids feel comfortable with them thank you mishkah for teaching</div>
								<div class="testimonial-block_two-author">
									<div class="author-image">
										<img src="{{ asset('assets/images/resource/author-1.png') }}" alt="" />
									</div>
									Hafiz bin Usif
									<span>Quran Teacher</span>
								</div>
								<!-- Ameen -->
								<div class="testimonial-block_two_ameen">
									<img src="{{ asset('assets/images/icons/ameen-3.png') }}" alt="" />
								</div>
								<!-- Icon -->
								<div class="testimonial-block_two-icon">
									<img src="{{ asset('assets/images/icons/featured.png') }}" alt="" />
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

