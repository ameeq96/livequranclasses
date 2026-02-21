<script src="{{ asset('assets/js/jquery.js') }}" defer></script>
<script src="{{ asset('assets/js/popper.min.js') }}" defer></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('assets/js/appear.js') }}" defer></script>
<script src="{{ asset('assets/js/parallax.min.js') }}" defer></script>
<script src="{{ asset('assets/js/tilt.jquery.min.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery.paroller.min.js') }}" defer></script>
<script src="{{ asset('assets/js/wow.js') }}" defer></script>
<script src="{{ asset('assets/js/swiper.min.js') }}" defer></script>
<script src="{{ asset('assets/js/backtotop.js') }}" defer></script>
<script src="{{ asset('assets/js/odometer.js') }}" defer></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}" defer></script>
<script src="{{ asset('assets/js/gsap.min.js') }}" defer></script>
<script src="{{ asset('assets/js/SplitText.min.js') }}" defer></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}" defer></script>
<script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}" defer></script>
<script src="{{ asset('assets/js/ScrollSmoother.min.js') }}" defer></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}" defer></script>
<script src="{{ asset('assets/js/nav-tool.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}" defer></script>
<script src="{{ asset('assets/js/element-in-view.js') }}" defer></script>
<script src="{{ asset('assets/js/script.js') }}" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var images = document.querySelectorAll('img');
    images.forEach(function (img, index) {
        if (!img.hasAttribute('loading') && index > 3) {
            img.setAttribute('loading', 'lazy');
            img.setAttribute('decoding', 'async');
        }

        var alt = img.getAttribute('alt');
        if (alt === null || alt.trim() === '') {
            img.setAttribute('alt', '{{ config('seo.site_name', 'Live Quran Classes') }} image');
        }
    });
});
</script>
