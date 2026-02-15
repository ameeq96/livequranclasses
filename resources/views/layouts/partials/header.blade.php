<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box d-flex align-items-center flex-wrap">
                        <ul class="header-top_list">
                            <li><span class="icon fa-solid fa-envelope fa-fw"></span><a href="#">[email&#160;protected]</a></li>
                            <li><span class="icon fa-solid fa-location-dot fa-fw"></span>Suite 80 Golden Street Germeney</li>
                        </ul>
                        <div class="bismillah"><img src="{{ asset('assets/images/icons/bismillah.png') }}" alt="" /></div>
                    </div>
                    <ul class="header-top_list-two">
                        <li><span class="icon fa-regular fa-sun fa-fw"></span>Sunrise At: 5:15 AM</li>
                        <li><span class="icon fa-solid fa-moon fa-fw"></span>Sunset At: 4:50 PM</li>
                        <li><span class="icon fa-solid fa-phone fa-fw"></span>Let's Talk +88 01 27 14 101</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer">
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About</a></li>
                                    <li class="{{ request()->routeIs('faq') ? 'current' : '' }}"><a href="{{ route('faq') }}">FAQ</a></li>
                                    <li class="{{ request()->routeIs('services') ? 'current' : '' }}"><a href="{{ route('services') }}">Services</a></li>
                                    <li class="{{ request()->routeIs('courses') ? 'current' : '' }}"><a href="{{ route('courses') }}">Courses</a></li>
                                    <li class="{{ request()->routeIs('blog*') ? 'current' : '' }}"><a href="{{ route('blog') }}">Blogs</a></li>
                                    <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="outer-box d-flex align-items-center flex-wrap">
                        <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                        <a class="user-box theme-btn" href="#">
                            <span class="fa-regular fa-user fa-fw"></span>
                        </a>

                        <div class="header_button-box">
                            <a href="{{ route('contact') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Quick Join Now</span>
                                    <span class="text-two">Quick Join Now</span>
                                </span>
                            </a>
                        </div>

                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-close-1"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="" title=""></a></div>
            <div class="menu-outer"></div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
