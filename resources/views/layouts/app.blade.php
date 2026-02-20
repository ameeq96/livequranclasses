<!DOCTYPE html>
<html>
@include('layouts.partials.head')
<body>
@php
    $whatsAppNumber = preg_replace('/[^0-9]/', '', config('site.contact_phone', ''));
    $whatsAppLink = $whatsAppNumber ? 'https://wa.me/' . $whatsAppNumber : '#';
@endphp
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- End Preloader -->

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

</div>
<!-- End PageWrapper -->

<a href="{{ $whatsAppLink }}" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>

@include('layouts.partials.scripts')
@stack('scripts')
</body>
</html>
