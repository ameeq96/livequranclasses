@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
			<h2>Faq's</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Faq's</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Faq One -->
	<section class="faq-one">
		<div class="auto-container">
			<h3>Find answers to the most frequently <br> asked questions below</h3>
			<div class="row clearfix">
				<!-- Accordian Column -->
				<div class="faq-one_accordian-column col-lg-8 col-md-12 col-sm-12">
					<h4>Frequently asked questions</h4>
					<div class="accordian-outer">
						<!-- Accordion Box -->
						<ul class="accordion-box_two">
							
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What age category is this event suitable for?</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum lorem ipsum dolor sit amet.</div>
									</div>
								</div>
							</li>
										
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Can I take pictures and film during the show?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum lorem ipsum dolor sit amet.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Are there any known Health & Safety issues?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum lorem ipsum dolor sit amet.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What age category is this event suitable for?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum lorem ipsum dolor sit amet.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>I'm unable to attend, can someone else attend on my behalf?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum lorem ipsum dolor sit amet.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>We are a family, Can we sit together?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum lorem ipsum dolor sit amet.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Is there a Refund Policy?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum lorem ipsum dolor sit amet.</div>
									</div>
								</div>
							</li>

						</ul>
					</div>
				</div>

				<!-- Helpline Column -->
				<div class="faq-one_helpline-column col-lg-4 col-md-12 col-sm-12">
					<div class="helpline-outer">
						
						<!-- Helpline Widget -->
						<div class="sidebar-widget helpline-widget">
							<div class="widget-content">
								<div class="image">
									<img src="{{ asset('assets/images/icons/helpline-widget.png') }}" alt="" />
								</div>
								<h4 class="helpline-title">If you have any further query then you can contact our helpline</h4>
								<div class="helpline-widget_phone flaticon-phone-call"></div>
								<div class="helpline-widget_number">Helpline: 0241-21131 <span>(10AM-5PM)</span></div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Faq One -->
@endsection

