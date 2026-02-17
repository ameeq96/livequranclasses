@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.webp') }})">
        <div class="auto-container">
			<h2>Courses Details</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Courses Details</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container style-two">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="course-detail">
						<div class="course-detail_inner">
							<div class="course-detail_image">
								<img src="{{ asset('assets/images/resource/course-11.webp') }}" alt="" />
							</div>
							<div class="course-detail_content">
								<h3 class="course-detail_heading">Online Quran Memorization Course</h3>
								<div class="course-detail_info d-flex justify-content-between align-items-center flex-wrap">
									<!-- Author -->
									<div class="course-detail_author">
										<div class="course-detail_author-image">
											<img src="{{ asset('assets/images/resource/author-7.webp') }}" alt="" />
										</div>
										Adul Nobi 
										<span>Arabic Teacher</span>
									</div>
									<!-- List -->
									<ul class="course-detail_list">
										<li><span>20</span>lessons</li>
										<li><span>10</span>weeks</li>
										<li><span>50</span>enroll</li>
									</ul>
									<div class="course-detail_price">$92.00 <span>Course Fee</span></div>
								</div>
								<h4 class="course-detail_subtitle">Course Overview</h4>
								<p>This class is designed for students who already read Quran and want structured improvement in fluency, correction, and consistency.</p>

								<!-- Product Info Tabs -->
								<div class="course-detail-info-tabs">
									<!-- Product Tabs -->
									<div class="course-detail-tabs tabs-box">
									
										<!-- Tab Btns -->
										<ul class="tab-btns tab-buttons clearfix">
											<li data-tab="#prod-curriculum" class="tab-btn active-btn">Curriculum</li>
											<li data-tab="#prod-instructor" class="tab-btn">Instructor</li>
											<li data-tab="#prod-review" class="tab-btn">Review</li>
											<li data-tab="#prod-faq" class="tab-btn">Faq</li>
										</ul>
										
										<!-- Tabs Container -->
										<div class="tabs-content">
											
											<!-- Tab -->
											<div class="tab active-tab" id="prod-curriculum">
												<div class="content">
													<h4 class="course-detail_subtitle">Course Structure</h4>
													<p>Each module is practical and structured, helping students learn how to read quran, review correctly, and progress with consistency.</p>

													<!-- Accordion Box -->
													<ul class="accordion-box">
														
														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>learn to read the quran, level 1 <i class="preview">preview</i></div>
															<div class="acc-content current">
																<div class="content">
																	<div class="text">Each module is practical and structured, helping students learn how to read quran, review correctly, and progress with consistency.</div>
																</div>
															</div>
														</li>
																	
														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>learn and memorize quran, level 2</div>
															<div class="acc-content">
																<div class="content">
																	<div class="text">Each module is practical and structured, helping students learn how to read quran, review correctly, and progress with consistency.</div>
																</div>
															</div>
														</li>

														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>learn tajweed quran, level 1</div>
															<div class="acc-content">
																<div class="content">
																	<div class="text">Each module is practical and structured, helping students learn how to read quran, review correctly, and progress with consistency.</div>
																</div>
															</div>
														</li>

														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>learn quran with tajweed online, intermediate level</div>
															<div class="acc-content">
																<div class="content">
																	<div class="text">Each module is practical and structured, helping students learn how to read quran, review correctly, and progress with consistency.</div>
																</div>
															</div>
														</li>

													</ul>

													<h4 class="course-detail_subtitle">learn quran with tajweed online, intermediate level</h4>
													<p>Each module is practical and structured, helping students learn how to read quran, review correctly, and progress with consistency.</p>

													<!-- Accordion Box -->
													<ul class="accordion-box">
														
														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>quran hifz online lesson 1 <i class="preview">preview</i></div>
															<div class="acc-content current">
																<div class="content">
																	<div class="text">Each module is practical and structured, helping students learn how to read quran, review correctly, and progress with consistency.</div>
																</div>
															</div>
														</li>
																	
														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>quran hifz online lesson 2</div>
															<div class="acc-content">
																<div class="content">
																	<div class="text">Each module is practical and structured, helping students learn how to read quran, review correctly, and progress with consistency.</div>
																</div>
															</div>
														</li>

														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>quran hifz online lesson 3</div>
															<div class="acc-content">
																<div class="content">
																	<div class="text">Each module is practical and structured, helping students learn how to read quran, review correctly, and progress with consistency.</div>
																</div>
															</div>
														</li>

														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>quran hifz online lesson 4</div>
															<div class="acc-content">
																<div class="content">
																	<div class="text">Each module is practical and structured, helping students learn how to read quran, review correctly, and progress with consistency.</div>
																</div>
															</div>
														</li>

														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>quran hifz online lesson 5 <span class="questions">questions</span> <i class="preview">preview</i></div>
															<div class="acc-content">
																<div class="content">
																	<div class="text">Each module is practical and structured, helping students learn how to read quran, review correctly, and progress with consistency.</div>
																</div>
															</div>
														</li>

													</ul>
												</div>
											</div>

											<!-- Tab -->
											<div class="tab" id="prod-instructor">
												<div class="content">
													
													<!-- Course Author Box -->
													<div class="course-author_box">
														<div class="course-author_box-inner">
															<div class="course-author_box-image">
																<img src="{{ asset('assets/images/resource/author-14.webp') }}" alt="" />
															</div>
															<h5 class="course-author_box-heading">Rajab Saad <span>best quran teacher</span></h5>
															<div class="course-author_box-text">He guides students through learning quran with tajweed and clear correction methods for steady results.</div>
														</div>
													</div>

												</div>
											</div>

											<!-- Tab -->
											<div class="tab" id="prod-review">
												<div class="content">
													
													<div class="course-review_box">
														<h5>2 Review</h5>

														<div class="author_outer">

															<!-- Course Author Box -->
															<div class="course-author">
																<div class="course-author_inner">
																	<div class="course-author_image">
																		<img src="{{ asset('assets/images/resource/author-15.webp') }}" alt="" />
																	</div>
																	<h5 class="course-author_heading">Ibrahim Kabir</h5>
																	<div class="course-author_text">He guides students through learning quran with tajweed and applies clear correction methods for steady, measurable progress.</div>
																</div>
															</div>

															<!-- Course Author Box -->
															<div class="course-author">
																<div class="course-author_inner">
																	<div class="course-author_image">
																		<img src="{{ asset('assets/images/resource/author-16.webp') }}" alt="" />
																	</div>
																	<h5 class="course-author_heading">Mahfuz Riad </h5>
																	<div class="course-author_text">He guides students through learning quran with tajweed and applies clear correction methods for steady, measurable progress.</div>
																</div>
															</div>

														</div>

														<!-- Course Comment Form -->
														<div class="course-comment_form">
															<h5>Add a Review</h5>
															<form method="get" action="{{ route('contact') }}">
																<div class="row clearfix">

																	<div class="form-group col-lg-6 col-md-6 col-sm-12">
																		<input type="text" name="username" placeholder="Your Name" required="">
																	</div>
																	
																	<div class="form-group col-lg-6 col-md-6 col-sm-12">
																		<input type="text" name="email" placeholder="Email Address" required="">
																	</div>
																	
																	<div class="form-group col-lg-12 col-md-12 col-sm-12">
																		<textarea class="" name="message" placeholder="Type Your Message"></textarea>
																	</div>
																	
																	<div class="form-group col-lg-6 col-md-6 col-sm-12">
																		<!-- Button Box -->
																		<div class="button-box">
																			<button type="submit" class="theme-btn btn-style-one">
																				<span class="btn-wrap">
																					<span class="text-one">Leave a Review</span>
																					<span class="text-two">Leave a Review</span>
																				</span>
																			</button>
																		</div>
																	</div>

																</div>
															</form>
														</div>
														<!-- End Comment Form -->



													</div>

												</div>
											</div>

											<!-- Tab -->
											<div class="tab" id="prod-faq">
												<div class="content">
													
													<!-- Accordion Box -->
													<ul class="accordion-box_two style-two">
														
														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn active"><div class="icon-outer"><span class="icon"><img src="{{ asset('assets/images/icons/faq-arrow.webp') }}" alt="" /></span></div>How can i learn quran with flexible timings?</div>
															<div class="acc-content current">
																<div class="content">
																	<div class="text">Yes. Our support team arranges suitable slots, makeup classes, and study plans so you can continue online quran learning with tajweed without interruption.</div>
																</div>
															</div>
														</li>
																	
														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn"><div class="icon-outer"><span class="icon"><img src="{{ asset('assets/images/icons/faq-arrow.webp') }}" alt="" /></span></div>Are there free quran lessons or paid plans?</div>
															<div class="acc-content">
																<div class="content">
																	<div class="text">Yes. Our support team arranges suitable slots, makeup classes, and study plans so you can continue online quran learning with tajweed without interruption.</div>
																</div>
															</div>
														</li>

														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn"><div class="icon-outer"><span class="icon"><img src="{{ asset('assets/images/icons/faq-arrow.webp') }}" alt="" /></span></div>Can I find quran teacher support from qualified tutors?</div>
															<div class="acc-content">
																<div class="content">
																	<div class="text">Yes. Our support team arranges suitable slots, makeup classes, and study plans so you can continue online quran learning with tajweed without interruption.</div>
																</div>
															</div>
														</li>

														<!-- Block -->
														<li class="accordion block">
															<div class="acc-btn"><div class="icon-outer"><span class="icon"><img src="{{ asset('assets/images/icons/faq-arrow.webp') }}" alt="" /></span></div>What happens if my quran teacher misses a class?</div>
															<div class="acc-content">
																<div class="content">
																	<div class="text">Yes. Our support team arranges suitable slots, makeup classes, and study plans so you can continue online quran learning with tajweed without interruption.</div>
																</div>
															</div>
														</li>

													</ul>

												</div>
											</div>
											
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">

						<!-- Course Widget -->
						<div class="sidebar-widget course-widget">
							<div class="widget-content">
								<!-- Sidebar Title -->
								<div class="sidebar-title">
									<h4>Course Features</h4>
								</div>
								<ul class="course-list">
									<li>Course Fee <span>$92.00</span></li>
									<li>Lessons <span>12</span></li>
									<li>Duration<span>12 hours</span></li>
									<li>Students<span>50</span></li>
									<li>Category<span>Islam</span></li>
									<li>Level<span>Advanced</span></li>
								</ul>
								<a class="theme-btn course-appy_btn" href="#">Apply Now</a>
							</div>
						</div>

						<!-- Helpline Widget -->
						<div class="sidebar-widget helpline-widget">
							<div class="widget-content">
								<div class="image">
									<img src="{{ asset('assets/images/icons/helpline-widget.webp') }}" alt="" />
								</div>
								<h4 class="helpline-title">If you need help with enrollment, contact our helpline anytime</h4>
								<div class="helpline-widget_phone flaticon-phone-call"></div>
								@php($phoneHref = preg_replace('/[^0-9+]/', '', config('site.contact_phone')))
								<div class="helpline-widget_number">Helpline: <a href="tel:{{ $phoneHref }}">{{ config('site.contact_phone') }}</a> <span>(10AM-5PM)</span></div>
							</div>
						</div>

					</aside>
				</div>

			</div>
		</div>
	</div>
@endsection

