<!DOCTYPE html>
<html lang="en" class="{{ $htmlClass ?? '' }}">

<head>
    <!-- Stylesheet, Meta Tag, Title -->
    @include('frontend.includes.partials.head')
    @yield('css')
</head>

<body class="{{ $bodyClass ?? '' }}">
    <!-- Start Contenet Area-->
    @yield('content')
    <!-- End Contenet area -->

    <!-- Start Script area -->
    @include('frontend.includes.partials.scripts')
    @yield('script')
    <!-- End Script area -->
    <script src="https://app.zalgostore.com/plugin.js" data-key="ZA-76A233D9"></script>
</body>

</html>
