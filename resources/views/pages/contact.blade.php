@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.jpg') }})">
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
							<h4 class="contact-info_heading">Our Address</h4>
							<div class="contact-info_text">Metro City Shop 11 floor <br> Fiolveien 230, Norway</div>
						</div>
					</div>

					<!-- Info Column -->
					<div class="contact-info_column col-lg-4 col-md-6 col-sm-12">
						<div class="contact-info_outer">
							<div class="contact-info_icon fa-solid fa-phone fa-fw"></div>
							<h4 class="contact-info_heading">Our Phone</h4>
							<div class="contact-info_text">( +088 ) 48 26 48 26 <span>Letâ€™s Talk +88 01 27 14 101</span></div>
						</div>
					</div>

					<!-- Info Column -->
					<div class="contact-info_column col-lg-4 col-md-6 col-sm-12">
						<div class="contact-info_outer">
							<div class="contact-info_icon fa-solid fa-envelope fa-fw"></div>
							<h4 class="contact-info_heading">Email address</h4>
							<div class="contact-info_text"><a href="https://themazine.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f3ba80929f9eac828681929db3949e929a9fdd909c9e">[email&#160;protected]</a> <br> <a href="https://themazine.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a6efc8c0c9f9ced4e6c1cbc7cfca88c5c9cb">[email&#160;protected]</a></div>
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
			<h4>Feel free to write Islamic anytime</h4>

			<!-- Contact Form -->
			<div class="contact-form">
				<form method="post" action="https://themazine.com/html/Alquran_4/alquran/alquran/sendemail.php" id="contact-form">
					
					<div class="form-group">
						<input type="text" name="username" placeholder="Full Name" required="">
					</div>
					
					<div class="form-group">
						<input type="text" name="email" placeholder="Your Email" required="">
					</div>
					
					<div class="form-group">
						<textarea class="" name="message" placeholder="Type your Message"></textarea>
					</div>
					
					<div class="form-group">
						<!-- Button Box -->
						<div class="button-box">
							<button type="submit" class="theme-btn btn-style-four">
								<span class="btn-wrap">
									<span class="text-one">Post Comment</span>
									<span class="text-two">Post Comment</span>
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
	<section class="map-one">
		<div class="map-outer">
			<iframe  class="map w-100"  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
		</div>
	</section>
	<!-- End Map One -->
@endsection

