<head>
@php
    $routeName = request()->route()?->getName() ?? 'home';
    $seoConfig = config('seo');
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

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{ data_get($seoConfig, 'twitter_site', '') }}">
<meta name="twitter:title" content="{{ $metaTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ $ogImageUrl }}">

@if ($routeName === 'home')
<link rel="preload" as="image" href="{{ asset('assets/images/main-slider/1.webp') }}" fetchpriority="high">
@endif
<link rel="preload" as="font" href="{{ asset('assets/fonts/fa-solid-900.woff2') }}" type="font/woff2" crossorigin>
<link rel="preload" as="font" href="{{ asset('assets/fonts/fa-regular-400.woff2') }}" type="font/woff2" crossorigin>
<link rel="preload" as="font" href="{{ asset('assets/fonts/fa-brands-400.woff2') }}" type="font/woff2" crossorigin>
<link rel="preload" as="font" href="{{ asset('assets/fonts/flaticon_afbd3404a2e1104832d0.woff') }}" type="font/woff" crossorigin>

<!-- Stylesheets -->
<script>document.documentElement.classList.add('css-loading');</script>
<style>html.css-loading body{opacity:0;visibility:hidden;}</style>
<link rel="preload" href="{{ $bundleCss }}" as="style" onload="this.onload=null;this.rel='stylesheet';document.documentElement.classList.remove('css-loading')">
<noscript><link href="{{ $bundleCss }}" rel="stylesheet"></noscript>
@stack('styles')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</noscript>
<script>
window.setTimeout(function(){document.documentElement.classList.remove('css-loading');},3000);
</script>

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.webp') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/favicon.webp') }}" type="image/x-icon">
<meta name="theme-color" content="#1f9a5f">
<link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.webp') }}">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
@include('layouts.partials.seo-schema')
</head>
