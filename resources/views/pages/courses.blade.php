@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.webp') }})">
        <div class="auto-container">
			<h2>Our Courses</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Our Courses</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Courses Two -->
	<section class="courses-two" style="background-image:url({{ asset('assets/images/background/courses-two_bg.webp') }})">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="0ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="{{ route('course.detail') }}"><img src="{{ asset('assets/images/resource/course-5.webp') }}" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="{{ asset('assets/images/icons/course-block_two.webp') }}" alt="" />
							</div>
							<a href="{{ route('course.detail') }}" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="{{ route('course.detail') }}">Quran Intermediate Course brother</a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="{{ asset('assets/images/resource/author-5.webp') }}" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="{{ route('course.detail') }}"><img src="{{ asset('assets/images/resource/course-6.webp') }}" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="{{ asset('assets/images/icons/course-block_two.webp') }}" alt="" />
							</div>
							<a href="{{ route('course.detail') }}" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="{{ route('course.detail') }}">Online Quran Memorization Course</a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="{{ asset('assets/images/resource/author-4.webp') }}" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="{{ route('course.detail') }}"><img src="{{ asset('assets/images/resource/course-7.webp') }}" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="{{ asset('assets/images/icons/course-block_two.webp') }}" alt="" />
							</div>
							<a href="{{ route('course.detail') }}" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="{{ route('course.detail') }}">Tafseer of Surah Al-Fatiha Short Course </a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="{{ asset('assets/images/resource/author-2.webp') }}" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="450ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="{{ route('course.detail') }}"><img src="{{ asset('assets/images/resource/course-8.webp') }}" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="{{ asset('assets/images/icons/course-block_two.webp') }}" alt="" />
							</div>
							<a href="{{ route('course.detail') }}" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="{{ route('course.detail') }}">Online Tajweed Rules Course</a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="{{ asset('assets/images/resource/author-3.webp') }}" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="450ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="{{ route('course.detail') }}"><img src="{{ asset('assets/images/resource/course-9.webp') }}" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="{{ asset('assets/images/icons/course-block_two.webp') }}" alt="" />
							</div>
							<a href="{{ route('course.detail') }}" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="{{ route('course.detail') }}">Online Quran ijazah Course</a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="{{ asset('assets/images/resource/author-5.webp') }}" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="450ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="{{ route('course.detail') }}"><img src="{{ asset('assets/images/resource/course-10.webp') }}" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="{{ asset('assets/images/icons/course-block_two.webp') }}" alt="" />
							</div>
							<a href="{{ route('course.detail') }}" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="{{ route('course.detail') }}">Islamic Philosophy and Quranic Studies</a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="{{ asset('assets/images/resource/author-4.webp') }}" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Courses Two -->
@endsection

