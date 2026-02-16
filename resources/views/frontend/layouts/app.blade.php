<!DOCTYPE html>
<html lang="en" class="{{ $htmlClass ?? '' }}">

<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LDSZZFGE6B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LDSZZFGE6B');
</script>

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
     @include('cookie-consent::index')
</body>


</html>
