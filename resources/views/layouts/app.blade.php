<!DOCTYPE html>
<html>
@include('layouts.partials.head')
<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- End Preloader -->

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

</div>
<!-- End PageWrapper -->

@include('layouts.partials.scripts')
</body>
</html>
