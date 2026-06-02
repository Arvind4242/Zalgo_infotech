<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="{{ $metaDescription ?? 'Zalgo Infotech delivers cutting-edge web development, AI solutions, and digital marketing services.' }}">
@if(!empty($metaKeywords))
<meta name="keywords" content="{{ $metaKeywords }}">
@endif
@if(!empty($metaFocusKeyword))
<meta name="focus-keyword" content="{{ $metaFocusKeyword }}">
@endif
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Title -->
<title>{{ $metaTitle ?? 'Zalgo Infotech - IT Solutions & Web Development' }}</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}">
<!-- Bootstrap -->
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<!-- aos -->
<link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
<!-- Swiper -->
<link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
<!-- Magnific -->
<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
<!-- Satoshi -->
<link rel="stylesheet" href="{{asset('assets/css/satoshi.css')}}">
<!-- Main css -->
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"/>
<script>
try {
    Object.defineProperty(navigator, 'share', { value: undefined });
    Object.defineProperty(navigator, 'registerProtocolHandler', { value: undefined });
} catch (e) {}
</script>

