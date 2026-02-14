
<style>
    .desktop-hide{
        display:none !important;
    }    
    .footer-col h4 .arrow{
        display:none !important;        
    }
  @media screen and (max-width:767px){
        .desktop-hide{
           display:block !important;
        }
        .desktop-show{
           display:none !important;
        }
        .footer-col h4{
            cursor:pointer;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        /* Arrow */
        .footer-col h4 .arrow{
            display:inline-block !important;
            transition:0.3s;
            font-size:18px;
            
        }

        .arrow::before{
            content: url({{asset('assets/images/arrow.svg')}});
        }

        /* Rotate when active */
        .footer-col h4.active .arrow{
            transform: rotate(90deg);
        }
        .our-businesses {
            margin-top: 20px;
            flex-direction: column;
        }
        .our-businesses .business-card{
            width: 100% !important;
        }
    }    
</style>
<!-- Footer Start Here -->
<footer class="footer bg-black position-relative z-1 mt-auto tw-pt-16 overflow-hidden">
    <!-- Footer Top Start -->
    <div class="container">
        <div class="d-flex align-items-center tw-gap-505">
            <div class="flex-grow-1">
                <div
                    class="d-flex align-items-center flex-lg-nowrap flex-wrap tw-gap-100-px tw-pb-13 border-bottom border-neutral-700">
                    <div class="max-w-514-px w-100 d-flex align-items-center tw-gap-505" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                        <h3
                            class="h1 text-white tw-mb-0 fw-medium d-inline-flex align-items-center tw-gap-4 flex-shrink-0">
                            <img src="{{asset('assets/images/icons/arrow-up-main.svg')}}" alt="img" />
                            88%
                        </h3>
                        <p class="text-neutral-300 max-w-194-px">
                            Client Retention & Growth Long-term partnerships that deliver results.
                        </p>
                    </div>
                    <div class="max-w-514-px w-100 d-flex align-items-center tw-gap-505" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                        <h3 class="h1 text-white tw-mb-0 fw-medium d-inline-flex align-items-center tw-gap-4 flex-shrink-0">
                            1.3m
                        </h3>
                        <div class="d-flex align-items-center tw-gap-2">
                            <p class="text-neutral-300 max-w-194-px">
                                Business Value Created
                                Across web, eCommerce, and digital platforms.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tw-pt-8 d-flex align-items-center tw-gap-8 flex-wrap">
                    <ul class="d-flex align-items-center tw-gap-8 flex-wrap">
                        <!-- <li class="d-flex align-items-center tw-gap-3" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <span
                                class="tw-w-5 tw-h-5 bg-main-600 text-white d-flex justify-content-center align-items-center tw-text-xs rounded-circle">
                                <i class="ph ph-check"></i>
                            </span>
                            <p class="text-white fw-medium">
                                Various analysis options.
                            </p>
                        </li> -->
                        <!-- <li class="d-flex align-items-center tw-gap-3" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <span
                                class="tw-w-5 tw-h-5 bg-main-600 text-white d-flex justify-content-center align-items-center tw-text-xs rounded-circle">
                                <i class="ph ph-check"></i>
                            </span>
                            <p class="text-white fw-medium">
                                Page Load (time, size, number of
                                requests).
                            </p>
                        </li> -->
                    </ul>
                    <!-- <div class="d-flex align-items-center justify-content-center tw-gap-405">
                        <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="800">
                            <a href="https://play.google.com/store/apps" class="hover--translate-y-1 active--translate-y-scale-9">
                                <img src="{{asset('assets/images/icons/store1.png')}}" alt="img" />
                            </a>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="800">
                            <a href="https://www.apple.com/app-store"
                                class="hover--translate-y-1 active--translate-y-scale-9">
                                <img src="{{asset('assets/images/icons/store2.png')}}" alt="img" />
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="flex-shrink-0 gradient-overlay d-md-block d-none">
                <img src="{{asset('assets/images/thumbs/footer-img.png')}}" alt="img" />
            </div>
        </div>
    </div>
    <!-- Footer Top End -->

    <div class="container">
          <div class="row">

    <!-- Company Info -->
    <div class="footer-col text--white col-lg-3 company">
      <img src="{{asset('assets/images/logo/zalgo-white.png')}}" alt="Zalgo Infotech" class="footer-logo">
      <p>
        Professional IT solutions provider delivering web, eCommerce,
        AI & digital services globally.
      </p>

      <div class="address mb-4 mt-4">
        <p><strong><img class="me-1" width="24" src="{{asset('assets/images/Group-4.webp')}}" alt="us-flag" class="site-country-flag" loading="lazy"> US Office</strong></p>
        <p class=" d-flex gap-3"><i class="fs-3 ph-bold ph-map-pin"></i> <a class="text-white" href="#">200 Hollywood Blvd<br>California, CA 94601</a></p>
     </div>
      <div class="address mb-4">
        <p><strong><img class="me-1" width="24" src="{{asset('assets/images/Group-3.webp')}}" alt="india-flag" class="site-country-flag" loading="lazy"> India Office</strong></p>
        <p class=" d-flex gap-3"><i class="fs-3 ph-bold ph-map-pin"></i> <a class="text-white" href="#">1/65, vinay nagar sec 3, 100 feet road, s. p. ashram, gwalior, madhya pradesh, india - 474012</a></p>
      </div>
      <div class="address mb-4">
        <p><strong><img class="me-1" width="24" src="{{asset('assets/images/canada.jpg')}}" alt="ca-flag" class="site-country-flag" loading="lazy"> Canada Office</strong></p>
        <p class=" d-flex gap-3"><i class="fs-3 ph-bold ph-map-pin"></i> <a class="text-white" href="#">2482 Yonge Street #1080 Toronto,<br> ON M4P 2H5 Canada</a></p>
        <p><img width="24" src="{{asset('assets/images/phone.svg')}}" alt="ca-flag" class="site-country-flag" loading="lazy"> <a class="text-white" href="tel:+16465687779">+1 (646) 568-7779</a></p>
        <p><a class="mail text-white" href="mailto:sales@zalgoinfotech.com">sales@zalgoinfotech.com</a></p>
      </div>
    </div>

    <div class="col-lg-9">
        <div class="row">
            <!-- Services -->
            <div class="desktop-show footer-col col-lg-3">
                <h4>Services<span class="arrow"></span></h4>
                <ul>
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('web.development')}}" class="mega-item">
                            <div>
                                Web Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('cms.development')}}" class="mega-item">
                            <div>
                                CMS Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('react.development')}}" class="mega-item">
                            <div>
                                ReactJS Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('shopify.development')}}" class="mega-item">
                            <div>
                                Shopify Development
                            </div>
                        </a>
                    </li>
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('nodejs.development')}}" class="mega-item">
                            <div>
                                NodeJS Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('ecommerce.development')}}" class="mega-item">
                            <div>
                                E-commerce Development
                            </div>
                        </a>
                    </li>    
                    
                </ul>
            </div>

            <div class="desktop-hide footer-col col-lg-3">
                <h4>Services <span class="arrow"></span></h4>
                <ul>
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('web.development')}}" class="mega-item">
                            <div>
                                Web Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('cms.development')}}" class="mega-item">
                            <div>
                                CMS Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('react.development')}}" class="mega-item">
                            <div>
                                ReactJS Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('shopify.development')}}" class="mega-item">
                            <div>
                                Shopify Development
                            </div>
                        </a>
                    </li>
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('nodejs.development')}}" class="mega-item">
                            <div>
                                NodeJS Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('ecommerce.development')}}" class="mega-item">
                            <div>
                                E-commerce Development
                            </div>
                        </a>
                    </li>  
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('python.development')}}" class="mega-item">
                            <div>
                                Python Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('ai.development')}}" class="mega-item">
                            <div>
                                AI Development
                            </div>
                        </a>
                    </li>        
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('laravel.development')}}" class="mega-item">
                            <div>
                                Laravel Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('maintenanceservices.development')}}" class="mega-item">
                            <div>
                                Maintenance Services
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('seoservices.development')}}" class="mega-item">
                            <div>
                                SEO Services
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('digitalservices.development')}}" class="mega-item">
                            <div>
                                Digital Marketing
                            </div>
                        </a>
                    </li>   
                    
                </ul>
            </div>

            <div class="desktop-show footer-col col-lg-3">
            <h4 style='height:24px;'></h4>
            <ul>
                    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('python.development')}}" class="mega-item">
                            <div>
                                Python Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('ai.development')}}" class="mega-item">
                            <div>
                                AI Development
                            </div>
                        </a>
                    </li>        
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('laravel.development')}}" class="mega-item">
                            <div>
                                Laravel Development
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('maintenanceservices.development')}}" class="mega-item">
                            <div>
                                Maintenance Services
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('seoservices.development')}}" class="mega-item">
                            <div>
                                SEO Services
                            </div>
                        </a>
                    </li>    
                    <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                        <a href="{{route('digitalservices.development')}}" class="mega-item">
                            <div>
                                Digital Marketing
                            </div>
                        </a>
                    </li>   
            </ul>
            </div>

            <!-- Hire Developers -->
            <div class="footer-col col-lg-3">
            <h4>Hire Developers <span class="arrow"></span></h4>
            <ul>                
                <li>
                    <a href="{{route('hireweb.developer')}}" class="mega-item">
                        Hire Web Developers
                    </a>
                </li>
                <li>
                    <a href="{{route('hirewordpressdeveloper')}}" class="mega-item">    
                        Hire WordPress Developers
                    </a>
                </li>
                <li>
                    <a href="{{route('hirelaraveldeveloper')}}" class="mega-item">
                        Hire Laravel Developers
                    </a>                
                </li>
                <li>
                    <a href="{{route('hirenodejsdeveloper')}}" class="mega-item">
                            Hire Node.js Developers
                    </a>
                </li>
                <li>
                    <a href="{{route('hirephpdeveloper')}}" class="mega-item">
                        Hire PHP Developers
                    </a>
                </li>
                <li>
                    <a href="{{route('hireaideveloper')}}" class="mega-item">
                        Hire AI Developers
                    </a>                
                </li>
                <li>
                    <a href="{{route('hirereactjsdeveloper')}}" class="mega-item">
                        Hire ReactJS Developers
                    </a>
                </li>
                <li>
                    <a href="{{route('hirenextjsdeveloper')}}" class="mega-item">
                        Hire NextJS Developers
                    </a>
                </li>
                <li>
                    <a href="{{route('hirepythondeveloper')}}" class="mega-item">
                        Hire python Developers
                    </a>
                </li>
            </ul>
            </div>


            <!-- Quick Links -->
            <div class="footer-col col-lg-3">
            <h4>Quick Links <span class="arrow"></span></h4>
            <ul>
                <li>
                    <a class="mega-item">
                        <div class="align-items-center d-flex"> 
                            About Company
                        </div>
                    </a>
                </li>
                <li>
                    <a class="mega-item">
                        <div class="align-items-center d-flex">
                            Engagement Models
                        </div>
                    </a>
                </li>
            <li>
                    <a class="mega-item">
                        <div class="align-items-center d-flex">
                            Life At ZalgoInfotec
                        </div>
                    </a>
                </li>
            <li>
                    <a class="mega-item">
                        <div class="align-items-center d-flex">
                            Infrastructure
                        </div>
                    </a>
                </li>
            <li>
                    <a class="mega-item">
                        <div class="align-items-center d-flex">
                            Culture & Values
                        </div>
                    </a>
                </li>
                <li>
                    <a class="mega-item">
                        <div class="align-items-center d-flex">
                            Career
                        </div>
                    </a>
                </li>
            <li>
                    <a href="{{route('testimonial')}}" class="mega-item">
                        <div class="align-items-center d-flex">
                            Client Testimonials
                        </div>
                    </a>
                </li>
            <li>
                    <a href="{{route('blog')}}" class="mega-item">
                        <div class="align-items-center d-flex">
                          Blogs
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('policy.privacy')}}" class="mega-item">
                        <div class="align-items-center d-flex">
                          Privacy Policy
                        </div>
                    </a>
                </li>
            
            </ul>
            </div>

             <!-- Quick Links -->
            <!-- <div class="footer-col col-lg-3">
            <h4>Industry</h4>
            <ul>
                <li><a href="#">E-Commerce</a></li>
                <li><a href="#">HealthCare  </a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">Education</a></li>
                <li><a href="#">Real Estate</a></li>
                <li><a href="#">Media & Entertainment</a></li>
                <li><a href="#">Business Services</a></li>
            </ul>
            </div> -->
        </div>
        <div class="row">
                 <!-- Business Portfolio -->
    <div class="col-lg-12 d-flex flex-wrap footer-col gap-3 our-businesses">
      <h4 class="w-100 m-0">Our Businesses</h4>

        <div class="business-card flex-column">
            <div class="business-logo">
                <img src="{{asset('assets/images/logo/zalgo-edutech.png')}}" alt="">
            </div>
            
            <div class="business-info d-flex flex-column text--white">  
            <span>Educational Technology Solutions</span>
            <a class="text-white" href="https://zalgoedutech.com" target="_blank">www.zalgoedutech.com</a>
            </div>
        </div>

        <div class="business-card flex-column">
            <div class="business-logo">
                <img src="{{asset('assets/images/logo/zalgo-store.png')}}" alt="">
            </div>
            
            <div class="business-info d-flex flex-column text--white">  
            <span>Advanced IT & E-commerce Product</span>
            <a class="text-white" href="https://zalgostore.com" target="_blank">www.zalgostore.com</a>
            </div>
        </div>
        
        <div class="business-card flex-column">
            <div class="business-logo">
                <img src="{{asset('assets/images/logo/zalgo-india.png')}}" alt="">
            </div>
            
            <div class="business-info d-flex flex-column text--white">  
            <span>IT Services for Indian Businesses</span>
            <a class="text-white" href="https://zalgoinfotech.in" target="_blank">www.zalgoinfotech.in</a>
            </div>
        </div>

    </div>
        </div>
    </div>

    
  </div>
    </div>
    <div class="container">
        <!-- bottom Footer -->
        <div class="border-top border-dashed border-neutral-600 border-0 tw-py-8">
            <div class="container container-two">
                <div class="d-flex align-items-center justify-content-between tw-gap-4 flex-wrap">
                    <p class="text--white text-line-1 fw-normal">
                        &copy; 2026
                        <a href="/" class="fw-medium text-white hover-underline hover--translate-y-1 active--translate-y-scale-9">Zalgo Infotech Pvt. Ltd.</a>
                            All rights reserved.
                    </p>
                    <ul class="d-flex align-items-center tw-gap-6">
                        <li>
                            <a target='blank' href="https://www.facebook.com/people/Zalgo-Infotech-Pvt-Ltd/61579841284566/"
                                class="text--white tw-text-2xl hover--translate-y-1 active--translate-y-scale-9 d-flex align-items-center tw-gap-205 hover-text-white">
                                <span class="d-flex hover-text-main-600 text--white">
                                    <i class="ph-fill ph-facebook-logo"></i>
                                </span>
                                <!-- <span class="tw-text-base">Facebook</span> -->
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com"
                                class="text--white tw-text-2xl hover--translate-y-1 active--translate-y-scale-9 d-flex align-items-center tw-gap-205 hover-text-white">
                                <span class="d-flex hover-text-main-600 text--white">
                                    <i class="ph-fill ph-twitter-logo"></i>
                                </span>
                                <!-- <span class="tw-text-base">Twitter</span> -->
                            </a>
                        </li>
                        <li>
                            <a target='blank' href="https://www.instagram.com/zalgoinfotech/"
                                class="text--white tw-text-2xl hover--translate-y-1 active--translate-y-scale-9 d-flex align-items-center tw-gap-205 hover-text-white">
                                <span class="d-flex hover-text-main-600 text--white">
                                    <i class="ph-fill ph-instagram-logo"></i>
                                </span>
                                <!-- <span class="tw-text-base">Instagram</span> -->
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End Here -->
<script>
document.querySelectorAll(".footer-col h4").forEach(title => {

    title.addEventListener("click", () => {

        const content = title.nextElementSibling;

        title.classList.toggle("active");

        if(content.style.maxHeight){
            content.style.maxHeight = null;
        }else{
            content.style.maxHeight = content.scrollHeight + "px";
        }

    });

});


</script>