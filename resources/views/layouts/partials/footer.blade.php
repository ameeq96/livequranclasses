<footer class="main-footer">
		<div class="footer_bg-image" style="background-image: url({{ asset('assets/images/background/footer-bg.webp') }})"></div>
		<div class="auto-container">
			<div class="inner-container">
				<!-- Widgets Section -->
				<div class="widgets-section">
					<div class="row clearfix">
						
						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget logo-widget">
										<div class="footer-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/footer-logo.svg') }}" alt="" title=""></a></div>
										<!-- Footer List -->
										<div class="footer_list">
											<li>{{ config('site.contact_address') }}</li>
											<li>{{ config('site.contact_phone') }}</li>
										</div>
										<!-- Social Box -->
										<div class="footer_socials">
											<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
											<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
											<a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
											<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
										</div>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h4 class="footer-title">Links</h4>
										<ul class="footer-list">
											<li><a href="{{ route('about') }}">About</a></li>
											<li><a href="{{ route('faq') }}">FAQ</a></li>
											<li><a href="{{ route('services') }}">Services</a></li>
											<li><a href="{{ route('courses') }}">Courses</a></li>
											<li><a href="{{ route('blog') }}">Blogs</a></li>
											<li><a href="{{ route('contact') }}">Contact</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h4 class="footer-title">Courses</h4>
										<ul class="footer-list">
											<li><a href="{{ route('enroll.show', ['course' => 'islamic-studies']) }}">Islamic Studies</a></li>
											<li><a href="{{ route('enroll.show', ['course' => 'quran-for-kids']) }}">Quran for Kids</a></li>
											<li><a href="{{ route('enroll.show', ['course' => 'quran-memorization']) }}">Quran Memorization</a></li>
											<li><a href="{{ route('enroll.show', ['course' => 'quran-reading']) }}">Quran Reading</a></li>
											<li><a href="{{ route('enroll.show', ['course' => 'tajweed-course']) }}">Tajweed Course</a></li>
											<li><a href="{{ route('enroll.show', ['course' => 'tajweed-qaida-course']) }}">Tajweed Qaida Course</a></li>
										</ul>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget newsletter-widget">
										<h4 class="footer-title">Newsletter</h4>
										<div class="footer-text">Get updates about classes, schedules, and new student resources.</div>
										@if (session('newsletter_success'))
											<div style="margin-top:10px;color:#9ee0b8;font-size:14px;">{{ session('newsletter_success') }}</div>
										@endif
										@error('newsletter')
											<div style="margin-top:10px;color:#ffb3b3;font-size:14px;">{{ $message }}</div>
										@enderror
										@error('email')
											<div style="margin-top:10px;color:#ffb3b3;font-size:14px;">{{ $message }}</div>
										@enderror
										<div class="newsletter-box">
											<form method="post" action="{{ route('newsletter.subscribe') }}">
												@csrf
												<div class="form-group">
													<input type="email" name="email" value="{{ old('email') }}" placeholder="email address" required>
													<button type="submit" class="theme-btn fa-regular fa-paper-plane fa-fw"></button>
												</div>
											</form>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer_bottom-bg" style="background-image: url({{ asset('assets/images/background/footer-bg_2.webp') }})"></div>
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="copyright">All rights reserved 2026 &copy; Opplexify</div>
					<ul class="footer-nav">
						<li><a href="#">Terms of use</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Style -->

	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="flaticon-close-1"></span></button>
		<form method="get" action="{{ route('search') }}">
			<div class="form-group">
				<input type="search" name="q" value="{{ request('q') }}" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
