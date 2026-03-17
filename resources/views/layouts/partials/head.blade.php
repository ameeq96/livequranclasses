<head>
@php
    $routeName = request()->route()?->getName() ?? 'home';
    $seoConfig = config('seo');
    $googleAnalyticsId = config('services.google_analytics.measurement_id');
    $pageSeo = data_get($seoConfig, 'pages.' . $routeName, data_get($seoConfig, 'pages.home', []));
    $siteName = data_get($seoConfig, 'site_name', config('app.name'));
    $defaultTagline = data_get($seoConfig, 'site_tagline', '');
    $metaTitle = trim(($pageSeo['title'] ?? $siteName) . ($defaultTagline && empty($pageSeo['title']) ? ' | ' . $defaultTagline : ''));
    $metaDescription = $pageSeo['description'] ?? $defaultTagline;
    $canonicalUrl = url()->current();
    $ogType = $pageSeo['type'] ?? 'website';
    $ogImage = data_get($pageSeo, 'image', data_get($seoConfig, 'default_og_image', '/assets/images/main-slider/image-1.webp'));
    $ogImageUrl = \Illuminate\Support\Str::startsWith($ogImage, ['http://', 'https://']) ? $ogImage : url($ogImage);
    $robots = data_get($seoConfig, 'indexable_robots', 'index,follow');
    $bundleCss = asset('assets/css/app.bundle.css') . '?v=' . filemtime(public_path('assets/css/app.bundle.css'));

    if ($routeName === 'search') {
        $robots = data_get($seoConfig, 'noindex_robots', 'noindex,follow');
    }
    if (($routeName === 'enroll.show' && request()->route('course')) || $routeName === 'enroll.plan') {
        $canonicalUrl = route('enroll.show');
        $robots = data_get($seoConfig, 'noindex_robots', 'noindex,follow');
    }
@endphp
@if ($googleAnalyticsId)
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $googleAnalyticsId }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '{{ $googleAnalyticsId }}');
</script>
@endif
<meta charset="utf-8">
<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
<meta name="robots" content="{{ $robots }}">
<link rel="canonical" href="{{ $canonicalUrl }}">

<meta property="og:locale" content="{{ data_get($seoConfig, 'default_locale', 'en_US') }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:type" content="{{ $ogType }}">
<meta property="og:title" content="{{ $metaTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:image" content="{{ $ogImageUrl }}">
<meta property="og:image:alt" content="{{ $siteName }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{ data_get($seoConfig, 'twitter_site', '') }}">
<meta name="twitter:title" content="{{ $metaTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ $ogImageUrl }}">
<meta name="twitter:image:alt" content="{{ $siteName }}">

@if ($routeName === 'home')
<link rel="preload" as="image"
    href="{{ asset('assets/images/main-slider/1-1280.webp') }}"
    imagesrcset="{{ asset('assets/images/main-slider/1-768.webp') }} 768w, {{ asset('assets/images/main-slider/1-1280.webp') }} 1280w, {{ asset('assets/images/main-slider/1.webp') }} 1920w"
    imagesizes="100vw"
    fetchpriority="high">
@endif

<!-- Stylesheets -->
<link href="{{ $bundleCss }}" rel="stylesheet">
@stack('styles')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</noscript>

<link rel="shortcut icon" href="{{ asset('assets/images/site-logo-square.png') }}" type="image/png">
<link rel="icon" href="{{ asset('assets/images/site-logo-square.png') }}" type="image/png">
<meta name="theme-color" content="#1f9a5f">
<link rel="apple-touch-icon" href="{{ asset('assets/images/site-logo-square.png') }}">
@if ($routeName === 'home')
<link rel="image_src" href="{{ $ogImageUrl }}">
@endif

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "vxaz4ux2zd");
</script>
@yield('jsonld')
</head>
