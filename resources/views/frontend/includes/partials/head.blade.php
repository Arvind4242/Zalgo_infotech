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

<!-- Schema.org Structured Data -->
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://zalgoinfotech.com/#organization",
      "name": "Zalgo Infotech Pvt. Ltd.",
      "url": "https://zalgoinfotech.com/",
      "logo": "https://zalgoinfotech.com/assets/images/logo/zalgo_logo.png",
      "image": "https://zalgoinfotech.com/assets/images/logo/zalgo_logo.png",
      "description": "Zalgo Infotech is a global AI-powered IT solutions company specializing in custom software development, AI automation, SaaS platforms, web development, ecommerce solutions, and scalable digital transformation services.",
      "email": "sales@zalgoinfotech.com",
      "telephone": "+91-9244213326",
      "foundingDate": "2020",
      "areaServed": "Worldwide",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 Feet Rd, in front of Sant Kripal Ashram, Sindhi Colony, Vinay Nagar",
        "addressLocality": "Gwalior",
        "addressRegion": "Madhya Pradesh",
        "postalCode": "474012",
        "addressCountry": "IN"
      },
      "sameAs": [
        "https://in.linkedin.com/company/zalgo-infotech",
        "https://www.facebook.com/61579841284566/",
        "https://www.instagram.com/zalgoinfotech/",
        "https://clutch.co/profile/zalgo-infotech"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://zalgoinfotech.com/#website",
      "url": "https://zalgoinfotech.com/",
      "name": "Zalgo Infotech",
      "description": "Global AI-powered IT solutions company delivering scalable software, automation, SaaS, ecommerce, and web development services.",
      "publisher": {
        "@id": "https://zalgoinfotech.com/#organization"
      },
      "inLanguage": "en-US",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://zalgoinfotech.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "Service",
      "@id": "https://zalgoinfotech.com/#services",
      "serviceType": [
        "AI Chatbot Development",
        "Custom Software Development",
        "Web Development",
        "Ecommerce Development",
        "SaaS Development",
        "AI Automation Solutions",
        "SEO Services",
        "Mobile App Development"
      ],
      "provider": {
        "@id": "https://zalgoinfotech.com/#organization"
      },
      "areaServed": [
        { "@type": "Country", "name": "United States" },
        { "@type": "Country", "name": "United Kingdom" },
        { "@type": "Country", "name": "Canada" },
        { "@type": "Country", "name": "Australia" },
        { "@type": "Country", "name": "India" }
      ],
      "description": "Zalgo Infotech provides AI-powered IT solutions including custom software development, AI chatbots, SaaS platforms, ecommerce solutions, web development, automation systems, and scalable digital transformation services for startups and enterprises worldwide.",
      "url": "https://zalgoinfotech.com/",
      "keywords": [
        "AI development company",
        "custom software development company",
        "AI chatbot development services",
        "web development company",
        "SaaS development company",
        "AI automation agency",
        "SEO services company",
        "ecommerce development services"
      ]
    }
  ]
}
</script>
@endverbatim

