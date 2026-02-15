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
											<li>58 Howard Street #2 cairo. <br> CA 941</li>
											<li>(+88)311-2121101</li>
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
											<li><a href="#">About Us</a></li>
											<li><a href="#">Best Quran Teacher</a></li>
											<li><a href="#">Learn Quran with Tajweed</a></li>
											<li><a href="#">Quran Teachings</a></li>
											<li><a href="#">Find Quran Teacher</a></li>
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
										<h4 class="footer-title">Other Link</h4>
										<ul class="footer-list">
											<li><a href="#">Online Learn Quran with Tajweed</a></li>
											<li><a href="#">learn to read quran with tajweed</a></li>
											<li><a href="#">how to learn quran at home</a></li>
											<li><a href="#">online quran teaching websites</a></li>
											<li><a href="#">hifz quran classes</a></li>
										</ul>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget Newsletter-widget">
										<h4 class="footer-title">Newsletter</h4>
										<div class="footer-text">Get updates about classes, schedules, and new student resources.</div>
										<div class="Newsletter-box">
											<form method="get" action="{{ route('contact') }}">
												<div class="form-group">
													<input type="email" name="search-field" value="" placeholder="email address" required>
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
					<div class="copyright">All rights reserved 2025 &copy; template_mr</div>
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
		<form method="get" action="{{ route('blog') }}">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
