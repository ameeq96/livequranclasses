@extends('layouts.app')

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.webp') }})">
        <div class="auto-container">
			<h1>Faq's</h1>
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
			<h3>Find answers to the most frequently <br> asked Quran learning questions below</h3>
			<div class="row clearfix">
				<!-- Accordian Column -->
				<div class="faq-one_accordian-column col-lg-8 col-md-12 col-sm-12">
					<h4>Frequently asked questions about Quran classes</h4>
					<div class="accordian-outer">
						<!-- Accordion Box -->
						<ul class="accordion-box_two">
							
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How to learn quran for complete beginners?</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">Start with a level check and a simple routine. We guide students through learn how to read the quran, learn reading quran, learning the quran for beginners, and answer common concerns like how learn quran at a comfortable pace.</div>
									</div>
								</div>
							</li>
										
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Can children join quran learning for kids classes online?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Yes. Our teachers use child-friendly methods, visual review, and short sessions so families can start quran learning online free and later move to structured plans when ready.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What is the best way to learn quran with tajweed?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Most students begin with a quran tajweed course or tajweed course online track. It is the best way to learn quran when pronunciation and fluency are your goals.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How to learn to read quran in arabic step by step?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">We teach letter sounds, joining rules, and recitation flow so students can learn to read quran, learn to read the quran, and learn how to read quran with confidence.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Can I switch to online tajweed courses if I miss a class?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Yes. If timing changes, you can continue in tajweed online course groups, tajweed courses online, or online tajweed courses without losing progress.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Do you offer quran learning app or quran learning apps support?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Yes. We provide study tools through our quran learning application and classroom support. Students can also use a quran learning app and quran teacher app for homework reminders.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How can I find quran teacher near me or female quran teacher online?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">We help families who search preply quran teacher, female quran teacher near me, female quran teacher online, find quran teacher, and quran teacher near me by matching them with our verified tutors.</div>
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
									<img src="{{ asset('assets/images/icons/helpline-widget.webp') }}" alt="" />
								</div>
								<h4 class="helpline-title">If you have any further query then you can contact our helpline</h4>
								<div class="helpline-widget_phone flaticon-phone-call"></div>
								@php($phoneHref = preg_replace('/[^0-9+]/', '', config('site.contact_phone')))
								<div class="helpline-widget_number">Helpline: <a href="tel:{{ $phoneHref }}">{{ config('site.contact_phone') }}</a> <span>(10AM-5PM)</span></div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Faq One -->
@endsection

