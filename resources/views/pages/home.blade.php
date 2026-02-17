@extends('layouts.app')

@section('content')
    <section class="slider-one">
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="slider-one_image-layer"
                        style="background-image:url({{ asset('assets/images/main-slider/1.webp') }})"></div>
                    <div class="auto-container">

                        <!-- Content Column -->
                        <div class="slider-one_content">
                            <div class="slider-one_content-inner">
                                <div class="slider-one_title">Learn Quran with Confidence</div>
                                <h1 class="slider-one_heading">Online Quran <br> Classes for All Ages</h1>
                                <div class="slider-one_text">Start with quran lessons online free and continue with guided
                                    one-to-one sessions for steady progress.</div>
                                <div class="slider-one_button">
                                    <a href="{{ route('enroll.show') }}" class="theme-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">Start learning now</span>
                                            <span class="text-two">Start learning now</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="slider-one_image-layer"
                        style="background-image:url({{ asset('assets/images/main-slider/2.webp') }})"></div>
                    <div class="auto-container">

                        <!-- Content Column -->
                        <div class="slider-one_content">
                            <div class="slider-one_content-inner">
                                <div class="slider-one_title">Master Tajweed Step by Step</div>
                                <h2 class="slider-one_heading">Learn Quran Online <br> with Tajweed</h2>
                                <div class="slider-one_text">Join a tajweed online course with qualified tutors and clear
                                    daily practice for better recitation.</div>
                                <div class="slider-one_button">
                                    <a href="{{ route('enroll.show') }}" class="theme-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">Start learning now</span>
                                            <span class="text-two">Start learning now</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="slider-one_image-layer"
                        style="background-image:url({{ asset('assets/images/main-slider/3.webp') }})"></div>
                    <div class="auto-container">

                        <!-- Content Column -->
                        <div class="slider-one_content">
                            <div class="slider-one_content-inner">
                                <div class="slider-one_title">Build a Strong Hifz Routine</div>
                                <h2 class="slider-one_heading">Online Hifz Quran <br> Classes</h2>
                                <div class="slider-one_text">Get structured support for online quran hifz classes, revision
                                    planning, and weekly memorization tracking.</div>
                                <div class="slider-one_button">
                                    <a href="{{ route('enroll.show') }}" class="theme-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">Start learning now</span>
                                            <span class="text-two">Start learning now</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="slider-one-arrow">
                <!-- If we need navigation buttons -->
                <div class="main-slider-prev fas fa-arrow-left fa-fw"></div>
                <div class="main-slider-next fas fa-arrow-right fa-fw"></div>
            </div>
        </div>
    </section>
    <!-- End Main Slider Section -->

    <!-- Featured One -->
    <section class="featured-one">
        <div class="auto-container">
            <div class="inner-container" style="background-image:url({{ asset('assets/images/icons/featured.webp') }})">
                <div class="row clearfix">

                    <!-- Feature Block One -->
                    <div class="feature-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="feature-block_one-inner">
                            <div class="feature-block_one-icon flaticon-quran"></div>
                            quran lessons online <br> free with experts
                        </div>
                    </div>

                    <!-- Feature Block One -->
                    <div class="feature-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="feature-block_one-inner">
                            <div class="feature-block_one-icon flaticon-iso"></div>
                            free quran lessons <br> for every age group
                        </div>
                    </div>

                    <!-- Feature Block One -->
                    <div class="feature-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="feature-block_one-inner">
                            <div class="feature-block_one-icon flaticon-islamic"></div>
                            quran learning for kids <br> and families
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Featured One -->

    <!-- Welcome One -->
    <section class="welcome-one">
        <div class="welcome-one_pattern"
            style="background-image:url({{ asset('assets/images/background/pattern-1.webp') }})"></div>
        <div class="welcome-one_pattern-two"
            style="background-image:url({{ asset('assets/images/background/pattern-2.webp') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="welcome-one_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="welcome-one_content-outer">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title d-flex align-items-center">Islamic Online Madrasah <span><img
                                        src="{{ asset('assets/images/icons/bismillah-2.webp') }}" alt="" /></span>
                            </div>
                            <h2 class="sec-title_heading">Welcome To Live Quran Classes</h2>
                            <div class="sec-title_text">We help students learning the quran for beginners with clear steps,
                                so families understand how to learn quran with tajweed the right way.</div>
                        </div>
                        <div class="welcome-one_content">
                            <div class="welcome-one_content-image">
                                <img src="{{ asset('assets/images/resource/welcome.webp') }}" alt="" />
                            </div>
                            <p>Our sessions include learning arabic for quran, online quran learning with tajweed, and
                                guided hifz quran classes with one-to-one teacher support.</p>
                            <div class="welcome-one_learn">
                                <span class="welcome-one_learn-icon flaticon-mosque"></span>
                                Learn Quran with <br> Tajweed Online
                            </div>
                        </div>
                        <p>Students can learn to read quran with tajweed, build fluency in recitation, and follow a
                            practical plan for online hifz quran at home.</p>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="welcome-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="welcome-one_image-outer">
                        <div class="welcome-one_ameen">
                            <img src="{{ asset('assets/images/icons/ameen-1.webp') }}" alt="" />
                        </div>
                        <div class="welcome-one_image">
                            <img src="{{ asset('assets/images/resource/welcome-1.webp') }}" alt="" />
                        </div>
                        <div class="welcome-one_years d-flex align-items-center flex-wrap">
                            <span class="fa-solid fa-globe fa-fw"></span>
                            Since 2020 Operating in the world
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Welcome One -->

    <!-- Service One -->
    <section class="service-one" style="background-image:url({{ asset('assets/images/background/service-bg.webp') }})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered light">
                <div class="sec-title_title">WHAT WE OFFER</div>
                <h2 class="sec-title_heading">We offer an effective <br> Arabic & Quran Services</h2>
            </div>
            <div class="row clearfix">

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="service-block_one-upper">
                            <div class="service-block_one-icon flaticon-quran-1"></div>
                            <div class="service-block_one-big_icon">
                                <img src="{{ asset('assets/images/icons/service-1.webp') }}" alt="" />
                            </div>
                            <h4 class="service-block_one-heading"><a href="{{ route('enroll.show') }}">Online Quran
                                    <br> Classes</a></h4>
                            <div class="service-block_one-text">Our tajweed online course helps students learn to recite
                                quran correctly with daily supervised practice.</div>
                        </div>
                        <div class="service-block_one-lower">
                            <a class="service-block_one-more" href="{{ route('enroll.show') }}">Read More<i
                                    class="fa-solid fa-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="service-block_one-upper">
                            <div class="service-block_one-icon flaticon-pray"></div>
                            <div class="service-block_one-big_icon">
                                <img src="{{ asset('assets/images/icons/service-1.webp') }}" alt="" />
                            </div>
                            <h4 class="service-block_one-heading"><a href="{{ route('enroll.show') }}">Tafseer <br>
                                    Course</a></h4>
                            <div class="service-block_one-text">Choose tajweed courses online with step-by-step drills,
                                recorded revision, and live teacher correction.</div>
                        </div>
                        <div class="service-block_one-lower">
                            <a class="service-block_one-more" href="{{ route('enroll.show') }}">Read More<i
                                    class="fa-solid fa-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="service-block_one-upper">
                            <div class="service-block_one-icon flaticon-quran-2"></div>
                            <div class="service-block_one-big_icon">
                                <img src="{{ asset('assets/images/icons/service-1.webp') }}" alt="" />
                            </div>
                            <h4 class="service-block_one-heading"><a href="{{ route('enroll.show') }}">We Value <br>
                                    Our Students</a></h4>
                            <div class="service-block_one-text">Our online tajweed courses are designed for clear
                                pronunciation and practical recitation fluency.</div>
                        </div>
                        <div class="service-block_one-lower">
                            <a class="service-block_one-more" href="{{ route('enroll.show') }}">Read More<i
                                    class="fa-solid fa-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Service One -->

    <!-- Students One -->
    <section class="students-one">
        <div class="auto-container">
            <div class="inner-container">
                <div class="students-one_pattern"
                    style="background-image:url({{ asset('assets/images/background/student-bg.webp') }})"></div>
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="students-one_title-column col-lg-5 col-md-12 col-sm-12">
                        <div class="students-one_title-outer">
                            <!-- Title Box -->
                            <div class="students-one_title-box">
                                <h3 class="students-one_title">Alhamdulillah we have reached over</h3>
                                <div class="students-one_text">Families trust our teachers for disciplined schedules,
                                    progress tracking, and caring one-to-one support.</div>
                            </div>
                            <!-- Counter Two -->
                            <div class="students-one_counter">
                                <div class="students-one_counter-inner">
                                    <div class="students-one_counter-icon">
                                        <i class="flaticon-give"></i>
                                    </div>
                                    <div class="students-one_counter-count"><span class="odometer"
                                            data-count="18000"></span></div>
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
                                    <div class="top-rated_text">Students and parents appreciate the clear teaching style,
                                        regular feedback, and simple lesson flow that supports steady improvement.</div>
                                </div>
                            </div>

                            <!-- Pass Out -->
                            <div class="passout">
                                <div class="passout_inner">
                                    <div class="passout-number">
                                        22k
                                    </div>
                                    <h4 class="passout_heading">Graduates</h4>
                                    <div class="passout_text">Our graduates show better recitation, stronger discipline,
                                        and consistent Quran study habits after each term.</div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Students One -->

    <!-- Courses One -->
    <section class="courses-one"
        style="background-image:url({{ asset('assets/images/background/courses-one_bg.webp') }})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Popular Courses</div>
                <h2 class="sec-title_heading">Our Arabic & Islamic Courses</h2>
            </div>
            <div class="row clearfix">
                @php
                    $homeCourses = [
                        [
                            'id' => 'islamic-studies',
                            'title' => 'Islamic Studies',
                            'image' => 'course-1.webp',
                            'icon' => 'service-1.svg',
                            'delay' => '150ms',
                            'text' =>
                                'Core Islamic learning with practical daily guidance and strong foundation building.',
                        ],
                        [
                            'id' => 'quran-for-kids',
                            'title' => 'Quran for Kids',
                            'image' => 'course-3.webp',
                            'icon' => 'service-3.svg',
                            'delay' => '300ms',
                            'text' =>
                                'A child-friendly path with clear lessons, repetition, and personal teacher support.',
                        ],
                        [
                            'id' => 'quran-memorization',
                            'title' => 'Quran Memorization',
                            'image' => 'course-4.webp',
                            'icon' => 'service-4.svg',
                            'delay' => '450ms',
                            'text' =>
                                'Structured memorization with revision plans, weekly targets, and progress tracking.',
                        ],
                        [
                            'id' => 'quran-reading',
                            'title' => 'Quran Reading',
                            'image' => 'course-2.webp',
                            'icon' => 'service-2.svg',
                            'delay' => '600ms',
                            'text' => 'Build reading confidence through guided recitation and step-by-step correction.',
                        ],
                        [
                            'id' => 'tajweed-course',
                            'title' => 'Tajweed Course',
                            'image' => 'course-1.webp',
                            'icon' => 'service-1.svg',
                            'delay' => '750ms',
                            'text' => 'Learn accurate pronunciation rules and improve fluency in every session.',
                        ],
                        [
                            'id' => 'tajweed-qaida-course',
                            'title' => 'Tajweed Qaida Course',
                            'image' => 'course-2.webp',
                            'icon' => 'service-2.svg',
                            'delay' => '900ms',
                            'text' => 'Start from Qaida basics and move to proper Quran recitation with tajweed.',
                        ],
                    ];
                @endphp

                @foreach ($homeCourses as $course)
                    <div class="course-block_one col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="course-block_one-inner wow fadeInLeft" data-wow-delay="{{ $course['delay'] }}"
                            data-wow-duration="1000ms">
                            <div class="course-block_one-image">
                                <a href="{{ route('courses') }}#{{ $course['id'] }}"><img
                                        src="{{ asset('assets/images/resource/' . $course['image']) }}"
                                        alt="{{ $course['title'] }}" /></a>
                            </div>
                            <div class="course-block_one-content">
                                <div class="course-block_one-icon">
                                    <img src="{{ asset('assets/images/icons/' . $course['icon']) }}" alt="" />
                                </div>
                                <h4 class="course-block_one-heading"><a
                                        href="{{ route('courses') }}#{{ $course['id'] }}">{{ $course['title'] }}</a>
                                </h4>
                                <div class="course-block_one-text">{{ $course['text'] }}</div>
                                <div class="course-block_one-buttons d-flex justify-content-between flex-wrap">
                                    <a class="theme-btn course-block_one-study"
                                        href="{{ route('enroll.show', ['course' => $course['id']]) }}">study now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Courses One -->

    <!-- CTA One -->
    <section class="cta-one">
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
                <div class="cta-one_bg"
                    style="background-image:url({{ asset('assets/images/background/cta-one_bg.webp') }})"></div>
                <h3 class="cta-one_heading">Do not let Shaitan delay you from starting <br> to learn your deen.</h3>
                <!-- Button Box -->
                <div class="cta-one_button">
                    <a href="{{ route('enroll.show') }}" class="theme-btn btn-style-one">
                        <span class="btn-wrap">
                            <span class="text-one">Begin Your Class</span>
                            <span class="text-two">Begin Your Class</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA One -->

    <!-- Institute One -->
    <section class="institute-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Why to Choose Us</div>
                <h2 class="sec-title_heading">Why Choose Our Islamic <br> Institute</h2>
            </div>
            <div class="row clearfix">

                <!-- Institute Block One -->
                <div class="institute-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="institute-block_one-inner wow fadeInLeft" data-wow-delay="150ms"
                        data-wow-duration="1000ms">
                        <div class="institute-block_one-bismillah"
                            style="background-image:url({{ asset('assets/images/icons/bismillah-5.webp') }})"></div>
                        <div class="institute-block_one-icon flaticon-quran-1"></div>
                        <h4 class="institute-block_one-heading"><a href="{{ route('enroll.show') }}">Best Quran <br>
                                Teacher</a></h4>
                        <div class="institute-block_one-text">Train with the best quran teacher to learn quran with tajweed
                            and improve recitation in every lesson.</div>
                    </div>
                </div>

                <!-- Institute Block One -->
                <div class="institute-block_one color-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="institute-block_one-inner wow fadeInLeft" data-wow-delay="150ms"
                        data-wow-duration="1000ms">
                        <div class="institute-block_one-bismillah"
                            style="background-image:url({{ asset('assets/images/icons/bismillah-5.webp') }})"></div>
                        <div class="institute-block_one-icon flaticon-pray-1"></div>
                        <h4 class="institute-block_one-heading"><a href="{{ route('enroll.show') }}">Learn Quran <br>
                                Reading</a></h4>
                        <div class="institute-block_one-text">Structured plans for learn quran reading with tajweed for
                            beginners and learning the quran for beginners.</div>
                    </div>
                </div>

                <!-- Institute Block One -->
                <div class="institute-block_one color-three col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="institute-block_one-inner wow fadeInLeft" data-wow-delay="150ms"
                        data-wow-duration="1000ms">
                        <div class="institute-block_one-bismillah"
                            style="background-image:url({{ asset('assets/images/icons/bismillah-5.webp') }})"></div>
                        <div class="institute-block_one-icon flaticon-education"></div>
                        <h4 class="institute-block_one-heading"><a href="{{ route('enroll.show') }}">Female Quran <br>
                                Teacher Online</a></h4>
                        <div class="institute-block_one-text">Choose a female quran teacher online and easily find quran
                            teacher guidance for your family.</div>
                    </div>
                </div>

                <!-- Institute Block One -->
                <div class="institute-block_one color-four col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="institute-block_one-inner wow fadeInLeft" data-wow-delay="150ms"
                        data-wow-duration="1000ms">
                        <div class="institute-block_one-bismillah"
                            style="background-image:url({{ asset('assets/images/icons/bismillah-5.webp') }})"></div>
                        <div class="institute-block_one-icon flaticon-time-management"></div>
                        <h4 class="institute-block_one-heading"><a href="{{ route('enroll.show') }}">How to Learn <br>
                                Quran at Home</a></h4>
                        <div class="institute-block_one-text">Flexible schedules support how to learn quran at home through
                            trusted online quran teaching websites.</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Institute One -->

    <!-- Testimonial One -->
    <section class="testimonial-one"
        style="background-image:url({{ asset('assets/images/background/testimonial-one_bg.webp') }})">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="testimonial-one_image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="testimonial-one_image">
                        <img src="{{ asset('assets/images/resource/testimonial.webp') }}" alt="" />
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="testimonial-one_carousel-column col-lg-8 col-md-12 col-sm-12">
                    <div class="testimonial-one_carousel-outer">

                        <!-- Ameen -->
                        <div class="testimonial-one_ameen">
                            <img src="{{ asset('assets/images/icons/ameen-2.webp') }}" alt="" />
                        </div>

                        <!-- Carousel -->
                        <div class="testimonial-one_carousel swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Block One -->
                                    <div class="testimonial-block_one">
                                        <div class="testimonial-block_one-inner">
                                            <div class="testimonial-block_one-rating">
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                            </div>
                                            <h4 class="testimonial-block_one-heading">Student Feedback</h4>
                                            <div class="testimonial-block_one-text">The teaching style is simple and
                                                motivating. My child now reads with confidence and looks forward to every
                                                class.</div>
                                            <div class="testimonial-block_one-author">
                                                <div class="author-image">
                                                    <img src="{{ asset('assets/images/resource/author-16.webp') }}"
                                                        alt="" />
                                                </div>
                                                Saif Ullah
                                                <span>Parent</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Block One -->
                                    <div class="testimonial-block_one">
                                        <div class="testimonial-block_one-inner">
                                            <div class="testimonial-block_one-rating">
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                            </div>
                                            <h4 class="testimonial-block_one-heading">Student Feedback</h4>
                                            <div class="testimonial-block_one-text">As a beginner, I got clear guidance in
                                                every lesson. Tajweed practice helped me fix pronunciation step by step.
                                            </div>
                                            <div class="testimonial-block_one-author">
                                                <div class="author-image">
                                                    <img src="{{ asset('assets/images/resource/author-6.webp') }}"
                                                        alt="" />
                                                </div>
                                                Muhammad Irfan
                                                <span>Student</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Block One -->
                                    <div class="testimonial-block_one">
                                        <div class="testimonial-block_one-inner">
                                            <div class="testimonial-block_one-rating">
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                                <span class="fa-regular fa-star fa-fw"></span>
                                            </div>
                                            <h4 class="testimonial-block_one-heading">Student Feedback</h4>
                                            <div class="testimonial-block_one-text">Class timings are flexible and the
                                                teacher is always punctual. We are very satisfied with the weekly progress.
                                            </div>
                                            <div class="testimonial-block_one-author">
                                                <div class="author-image">
                                                    <img src="{{ asset('assets/images/resource/author-14.webp') }}"
                                                        alt="" />
                                                </div>
                                                Omar Khan
                                                <span>Guardian</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- If we need pagination -->
                            <div class="testimonial-one_pagination"></div>

                        </div>
                        <!-- End Carousel -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial One -->

    <!-- Price One -->
    <section class="price-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Why to Choose Us</div>
                <h2 class="sec-title_heading">Why Choose Our Islamic <br> Institute</h2>
            </div>
            <div class="row clearfix">

                <!-- Price Block One -->
                <div class="price-block_one col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="price-block_one-inner wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1000ms">
                        <div class="price-block_one-price "><sub>$</sub>40 <span>Per month</span></div>
                        <h4 class="price-block_one-heading">Plan A</h4>
                        <ul class="price-block_one-list">
                            <li>3 Days Per Week</li>
                            <li>30 Minutes Per Day</li>
                            <li>12-14 Classes Per Month</li>
                            <li>One to One Live Classes</li>
                            <li>24/7 Customer Support</li>
                        </ul>
                        <div class="price-block_one-button">
                            <a href="{{ route('enroll.plan', ['plan' => 'plan-a']) }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Select Plan</span>
                                    <span class="text-two">Select Plan</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Price Block One -->
                <div class="price-block_one col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="price-block_one-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="price-block_one-price "><sub>$</sub>48 <span>Per month</span></div>
                        <h4 class="price-block_one-heading">Plan B</h4>
                        <ul class="price-block_one-list">
                            <li>4 Days Per Week</li>
                            <li>30 Minutes Per Day</li>
                            <li>16-18 Classes Per Month</li>
                            <li>One to One Live Classes</li>
                            <li>24/7 Customer Support</li>
                        </ul>
                        <div class="price-block_one-button">
                            <a href="{{ route('enroll.plan', ['plan' => 'plan-b']) }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Select Plan</span>
                                    <span class="text-two">Select Plan</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Price Block One -->
                <div class="price-block_one col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="price-block_one-inner wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1000ms">
                        <div class="price-block_one-price "><sub>$</sub>55 <span>Per month</span></div>
                        <h4 class="price-block_one-heading">Plan C</h4>
                        <ul class="price-block_one-list">
                            <li>5 Days Per Week</li>
                            <li>30 Minutes Per Day</li>
                            <li>20-22 Classes Per Month</li>
                            <li>One to One Live Classes</li>
                            <li>24/7 Customer Support</li>
                        </ul>
                        <div class="price-block_one-button">
                            <a href="{{ route('enroll.plan', ['plan' => 'plan-c']) }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Select Plan</span>
                                    <span class="text-two">Select Plan</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Price One -->

    <!-- Gallery One -->
    <section class="gallery-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box">
                    <div class="sec-title_title">Student Gallery</div>
                    <h2 class="sec-title_heading">Our Islamic Institute <br> Academy Gallery</h2>
                </div>
                <!-- Button Box -->
                <div class="gallery-one_button">
                    <a href="{{ route('enroll.show') }}" class="theme-btn btn-style-one">
                        <span class="btn-wrap">
                            <span class="text-one">Begin Your Class</span>
                            <span class="text-two">Begin Your Class</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="gallery-one_carousel swiper-container">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block One -->
                        <div class="gallery-block_one">
                            <div class="gallery-block_one-inner">
                                <div class="gallery-block_one-image">
                                    <img src="{{ asset('assets/images/gallery/1.webp') }}" alt="" />
                                    <a class="gallery-block_one-arrow theme-btn flaticon-up-right-arrow"
                                        href="{{ route('enroll.show') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block One -->
                        <div class="gallery-block_one">
                            <div class="gallery-block_one-inner">
                                <div class="gallery-block_one-image">
                                    <img src="{{ asset('assets/images/gallery/2.webp') }}" alt="" />
                                    <a class="gallery-block_one-arrow theme-btn flaticon-up-right-arrow"
                                        href="{{ route('enroll.show') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block One -->
                        <div class="gallery-block_one">
                            <div class="gallery-block_one-inner">
                                <div class="gallery-block_one-image">
                                    <img src="{{ asset('assets/images/gallery/3.webp') }}" alt="" />
                                    <a class="gallery-block_one-arrow theme-btn flaticon-up-right-arrow"
                                        href="{{ route('enroll.show') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block One -->
                        <div class="gallery-block_one">
                            <div class="gallery-block_one-inner">
                                <div class="gallery-block_one-image">
                                    <img src="{{ asset('assets/images/gallery/4.webp') }}" alt="" />
                                    <a class="gallery-block_one-arrow theme-btn flaticon-up-right-arrow"
                                        href="{{ route('enroll.show') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Gallery One -->

    <!-- News One -->
    <section class="news-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">OUR NEWS UPDATES</div>
                <h2 class="sec-title_heading">Latest News & Articles From <br> The Blog</h2>
            </div>
            <div class="row clearfix">

                <!-- News Block One -->
                <div class="news-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="news-block_one-inner wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="news-block_one-image">
                            <a href="{{ route('blog.detail') }}"><img
                                    src="{{ asset('assets/images/resource/news-1.webp') }}" alt="" /></a>
                        </div>
                        <div class="news-block_one-content">
                            <ul class="news-block_one-meta">
                                <li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
                                <li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
                            </ul>
                            <h5 class="news-block_one-heading"><a href="{{ route('blog.detail') }}">How to start quran
                                    lessons online free with a consistent routine</a></h5>
                            <div class="news-block_one-text">A practical guide for students beginning with free quran
                                lessons and quran learning online free study plans.</div>
                            <div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
                                <div class="news-block_one-author">
                                    <div class="news-block_one-author_image">
                                        <img src="{{ asset('assets/images/resource/author-2.webp') }}" alt="" />
                                    </div>
                                    Admin Team
                                </div>
                                <a class="news-block_one-more theme-btn" href="{{ route('blog.detail') }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block One -->
                <div class="news-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="news-block_one-inner wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="news-block_one-image">
                            <a href="{{ route('blog.detail') }}"><img
                                    src="{{ asset('assets/images/resource/news-2.webp') }}" alt="" /></a>
                        </div>
                        <div class="news-block_one-content">
                            <ul class="news-block_one-meta">
                                <li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
                                <li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
                            </ul>
                            <h5 class="news-block_one-heading"><a href="{{ route('blog.detail') }}">Choosing the right
                                    tajweed online course for daily recitation</a></h5>
                            <div class="news-block_one-text">Compare tajweed courses online and online tajweed courses to
                                choose the best online tajweed course for your level.</div>
                            <div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
                                <div class="news-block_one-author">
                                    <div class="news-block_one-author_image">
                                        <img src="{{ asset('assets/images/resource/author-3.webp') }}" alt="" />
                                    </div>
                                    Admin Team
                                </div>
                                <a class="news-block_one-more theme-btn" href="{{ route('blog.detail') }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block One -->
                <div class="news-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="news-block_one-inner wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="news-block_one-image">
                            <a href="{{ route('blog.detail') }}"><img
                                    src="{{ asset('assets/images/resource/news-3.webp') }}" alt="" /></a>
                        </div>
                        <div class="news-block_one-content">
                            <ul class="news-block_one-meta">
                                <li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
                                <li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
                            </ul>
                            <h5 class="news-block_one-heading"><a href="{{ route('blog.detail') }}">Best way to hifz
                                    quran with focused revision blocks</a></h5>
                            <div class="news-block_one-text">Learn how online hifz quran, quran hifz online plans, and
                                online quran hifz classes improve memorization outcomes.</div>
                            <div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
                                <div class="news-block_one-author">
                                    <div class="news-block_one-author_image">
                                        <img src="{{ asset('assets/images/resource/author-4.webp') }}" alt="" />
                                    </div>
                                    Admin Team
                                </div>
                                <a class="news-block_one-more theme-btn" href="{{ route('blog.detail') }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News One -->

    <!-- CTA One -->
    <section class="cta-two">
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
                <div class="cta-two_bg"
                    style="background-image:url({{ asset('assets/images/background/cta-one_bg.webp') }})"></div>
                <div class="cta-two_icon flaticon-nabawi-mosque"></div>
                <h3 class="cta-two_heading">Learn Quran with Tajweed Online <br> with Trusted Teachers</h3>
                <!-- Button Box -->
                <div class="cta-two_button">
                    <a href="{{ route('enroll.show') }}" class="theme-btn btn-style-three">
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

