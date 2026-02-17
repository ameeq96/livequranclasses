@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.webp') }})">
        <div class="auto-container">
			<h1>Our Courses</h1>
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
				@php
					$courses = [
						['id' => 'islamic-studies', 'slug' => 'islamic-studies', 'title' => 'Islamic Studies', 'image' => 'course-5.webp', 'delay' => '0ms'],
						['id' => 'quran-for-kids', 'slug' => 'quran-for-kids', 'title' => 'Quran for Kids', 'image' => 'course-6.webp', 'delay' => '150ms'],
						['id' => 'quran-memorization', 'slug' => 'quran-memorization', 'title' => 'Quran Memorization', 'image' => 'course-7.webp', 'delay' => '300ms'],
						['id' => 'quran-reading', 'slug' => 'quran-reading', 'title' => 'Quran Reading', 'image' => 'course-8.webp', 'delay' => '450ms'],
						['id' => 'tajweed-course', 'slug' => 'tajweed-course', 'title' => 'Tajweed Course', 'image' => 'course-9.webp', 'delay' => '450ms'],
						['id' => 'tajweed-qaida-course', 'slug' => 'tajweed-qaida-course', 'title' => 'Tajweed Qaida Course', 'image' => 'course-10.webp', 'delay' => '450ms'],
					];
				@endphp

				@foreach ($courses as $course)
					@php($enrollLink = route('enroll.show', ['course' => $course['slug']]))
					<div id="{{ $course['id'] }}" class="course-block_two col-lg-4 col-md-6 col-sm-12">
						<div class="course-block_two-inner wow fadeInLeft" data-wow-delay="{{ $course['delay'] }}" data-wow-duration="1000ms">
							<div class="course-block_two-image">
								<a href="{{ $enrollLink }}"><img src="{{ asset('assets/images/resource/' . $course['image']) }}" alt="{{ $course['title'] }}" /></a>
							</div>
							<div class="course-block_two-content">
								<div class="course-block_two-icon">
									<img src="{{ asset('assets/images/icons/course-block_two.webp') }}" alt="" />
								</div>
								{{-- <a href="{{ $enrollLink }}" class="course-block_two-study">Enroll Now</a> --}}
								<h4 class="course-block_two-heading"><a href="{{ $enrollLink }}">{{ $course['title'] }}</a></h4>
								<div class="mt-4">
									<a href="{{ $enrollLink }}" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Book This Course</span>
											<span class="text-two">Book This Course</span>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach

			</div>
		</div>
	</section>
	<!-- End Courses Two -->
@endsection

