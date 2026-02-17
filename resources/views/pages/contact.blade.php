@extends('layouts.app')

@section('content')
@php($phoneHref = preg_replace('/[^0-9+]/', '', config('site.contact_phone')))
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.webp') }})">
        <div class="auto-container">
			<h2>Contact</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Contact</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Contact Info -->
	<section class="contact-info">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					<!-- Info Column -->
					<div class="contact-info_column col-lg-4 col-md-6 col-sm-12">
						<div class="contact-info_outer">
							<div class="contact-info_icon fa-solid fa-location-dot fa-fw"></div>
							<h4 class="contact-info_heading">Our Office</h4>
							<div class="contact-info_text">{{ config('site.contact_address') }}</div>
						</div>
					</div>

					<!-- Info Column -->
					<div class="contact-info_column col-lg-4 col-md-6 col-sm-12">
						<div class="contact-info_outer">
							<div class="contact-info_icon fa-solid fa-phone fa-fw"></div>
							<h4 class="contact-info_heading">Call Us</h4>
							<div class="contact-info_text"><a href="tel:{{ $phoneHref }}">{{ config('site.contact_phone') }}</a></div>
						</div>
					</div>

					<!-- Info Column -->
					<div class="contact-info_column col-lg-4 col-md-6 col-sm-12">
						<div class="contact-info_outer">
							<div class="contact-info_icon fa-solid fa-envelope fa-fw"></div>
							<h4 class="contact-info_heading">Email Address</h4>
							<div class="contact-info_text"><a href="mailto:{{ config('site.contact_email') }}">{{ config('site.contact_email') }}</a></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Info -->

	<!-- Contact Form Box -->
	<div class="contact-form_box">
		<div class="auto-container">
			<h4>Feel free to ask about classes anytime</h4>
			@if (session('success'))
				<div class="mb-4" style="background:#e8f8ee;border:1px solid #8fd4ab;color:#1d6f42;padding:14px 16px;border-radius:8px;">
					{{ session('success') }}
				</div>
			@endif
			@if ($errors->any())
				<div class="mb-4" style="background:#fff2f2;border:1px solid #f0b5b5;color:#7d1c1c;padding:14px 16px;border-radius:8px;">
					<strong>Please fix the following:</strong>
					<ul class="mt-2 mb-0">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<!-- Contact Form -->
			<div class="contact-form">
				<form method="post" action="{{ route('contact.submit') }}" id="contact-form">
					@csrf
					
					<div class="form-group">
						<input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name" required="">
					</div>
					
					<div class="form-group">
						<input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email Address" required="">
					</div>
					
					<div class="form-group">
						<textarea class="" name="message" placeholder="Type your message" required>{{ old('message') }}</textarea>
					</div>
					
					<div class="form-group">
						<!-- Button Box -->
						<div class="button-box">
							<button type="submit" class="theme-btn btn-style-four">
								<span class="btn-wrap">
									<span class="text-one">Send Message</span>
									<span class="text-two">Send Message</span>
								</span>
							</button>
						</div>
					</div>
					
				</form>
			</div>
			<!-- End Comment Form -->

		</div>
	</div>
	<!-- End Contact Form Box -->

	<!-- Map One -->
	{{-- <section class="map-one">
		<div class="map-outer">
			<iframe  class="map w-100"  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
		</div>
	</section> --}}
	<!-- End Map One -->
@endsection
