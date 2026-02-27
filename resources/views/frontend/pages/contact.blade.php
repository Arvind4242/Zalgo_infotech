@extends('frontend.layouts.app')
@section('title', 'Contact Us')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headercontact')
    <!-- header area end -->

<style>
.contact-section {
  background: #f9fbfc;
  padding: 80px 20px;
}

.section-head {
  text-align: center;
  margin-bottom: 50px;
}

.section-head h2 {
  font-size: 36px;
  margin-bottom: 10px;
}

.section-head p {
  color: #666;
}

/* Grid */
.contact-grid {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

/* Offices */
.office-box {
    display: flex;
    gap: 20px;
    background: #eef6f7;
    padding: 20px;
    border-radius: 20px;
    width: 30%;
    flex-direction: column;
}

.office-card {
    background: #fff;
    padding: 20px;
    border-radius: 14px;
    width: 100%;
    display: flex;
    flex-direction: column;
}
.office-card p {
    font-size: 16px;
    line-height: 22px;
    margin-bottom: 10px;
}
.office-card h4 {
    margin-bottom: 10px;
    font-size: 20px;
    color: var(--main-600) !important;
}

.office-card a {
  color: #3a8f8f;
  font-size: 14px;
}

/* Form */
.form-box {
  background: #fff;
  padding: 30px;
  border-radius: 20px;
  box-shadow: 0 20px 40px rgba(0,0,0,.05);
  width: 70%;
}

.form-box h3 {
  margin-bottom: 20px;
}

.form-row {
  display: flex;
  gap: 15px;
}

.form-box input,
.form-box textarea,
.form-box .select{
  width: 100%;
  padding: 14px;
  border-radius: 10px;
  border: 1px solid #ddd;
  margin-bottom: 15px;
}

textarea {
  resize: none;
  height: 120px;
}
.upload-box {
  border: 1px solid #ddd;
  border-radius: 12px;
  padding: 14px;
  text-align: center;
  color: #fff;
  max-width: 100%;
  margin-bottom: 15px;
  cursor: pointer;
  transition: 0.3s;
  position: relative;
}

.upload-box:hover {
    border-color: #006d75;
    background: #006d7520;
}   

.upload-box input {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
  top: 0;
  left: 0;
}

.upload-content .icon,
.file-info .icon {
    font-size: 40px;
    margin-bottom: 10px;
    background: transparent;
}
.upload-content {
    display: flex;
}
.upload-content h3,
.file-info h3 {
    font-size: 20px;
    color: #006d75;
    text-align: left;
    width: 100%;
    margin-bottom: 0px;
}

.upload-content p,
.file-info p {
  font-size: 16px;
  color: #000;
}

.upload-content span,
.file-info span {
  color: #006d75;
  font-weight: bold;
}
.file-info {
  display: flex;
  align-items: center;
  gap: 15px;
}

#removeFile {
    background: #006d75;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    margin-left: 8px;
    cursor: pointer;
    margin-top: 0px;
    font-size: 12px;
    padding: 0;
    position: relative;
    z-index: 99;
}
.policy {
  font-size: 13px;
  color: #777;
}

.form-box button {
  width: 100%;
  padding: 14px;
  border-radius: 30px;
  border: none;
  background: linear-gradient(90deg,#3a8f8f,#2f6f6f);
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}
.logos {
    margin: 40px 0 30px 0;
}
.logos img {
    height: 35px;
    width: auto;
}
.logos .swiper-wrapper{
    height: auto !important;
}

/* Trusted */
.trusted {
    text-align: center;
    margin: 120px 0 60px;
    width: 100%;
    position: relative;
}
.trusted h4 {
    margin-bottom: 18px;
}
.logos span {
  margin: 0 15px;
  color: #777;
  font-weight: 500;
}

/* Testimonial */
.testimonial {
    display: flex;
    gap: 30px;
    align-items: center;
    padding: 25px;
    border-radius: 20px;
    background-color: #006d75 !important;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    background-size: cover;
    background-position: center bottom;
}

.video-box{
    position:relative;
    width:40%;
    border-radius:15px;
    overflow:hidden;
}

.video-box img{
    width:100%;
    display:block;
}

.play-btn{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    height:70px;
    width:70px;
    border-radius:50%;
    background:#1f7a74;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    text-decoration:none;
}
.stats-wrapper {
    display: flex;
    align-items: center;
    gap: 30px;
    background: #ffffff80;
    padding: 14px 22px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    font-family: 'Segoe UI', sans-serif;
    backdrop-filter: blur(221px);
}
.testimonial-content > .stats-wrapper + p {
    font-size: 20px;
    line-height: 28px;
    margin: 25px 0;
    width: 70%;
    text-align:left;
}
.stat-box {
    display: flex;
    width: 50%;
    align-items: center;
    gap: 20px;
}

.stat-number {
    font-size: 36px;
    font-weight: 700;
    color: #1f7a7a;
}
.stat-box:first-child {
    border-right: 1px solid #1f7a7a;
}
.stat-text {
    font-size: 25px;
    color: #000;
    font-weight: 400;
}

.stats{
    display:flex;
    gap:15px;
    margin-bottom:10px;
}

.stats span{
    background:#eaf3f2;
    padding:6px 12px;
    border-radius:8px;
    font-weight:600;
    font-size:14px;
}

.stars{
    color:#ffb400;
    margin:5px 0;
}
.clint-relation {
    margin-top: 20px;
    background: rgb(31 122 122 / 10%);
    width: auto;
    padding: 9px 12px;
    border-radius: 5px;
    max-width: max-content;
    backdrop-filter: blur(221px);
}




/* Responsive */
@media (max-width: 900px) {
  .contact-grid,
  .testimonial {
    grid-template-columns: 1fr;
  }

  .office-box {
    flex-direction: column;
  }

  .form-row {
    flex-direction: column;
  }

  .upload-box {
    border: 2px solid #2f4c8a;
    border-radius: 12px;
    padding: 30px;
    text-align: center;
    cursor: pointer;
    transition: 0.3s;
    background: #f8f9fc;
    margin-bottom: 20px;
}

.upload-box:hover {
    background: #eef2ff;
}

.upload-label {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    cursor: pointer;
}

.upload-icon {
    font-size: 40px;
    color: #2f4c8a;
}

.upload-label h5 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
}

.upload-label p {
    margin: 0;
    font-size: 14px;
    color: #555;
}


}
</style>
    <div id="smooth-content">
        <section class="contact-section">
            <div class="container">
                <!-- Heading -->
                <div class="section-head">
                <h2>Get in Touch</h2>
                <p>
                    We'd love to hear about your project or answer any questions you may have.<br>
                    Let's build something great together!
                </p>
                </div>

                <!-- Top Grid -->
                <div class="contact-grid">

                <!-- Offices -->
                <div class="office-box">
                    <div class="office-card">
                    <h4><img class="me-1" width="24" src="{{asset('assets/images/Group-4.webp')}}" alt="us-flag" class="site-country-flag" loading="lazy"> US </h4>
                    <p>1601 Penfield Road Suite <br>575 Rochester, NY 14625</p>
                    <strong>+1 (646) 568-7779</strong>
                    </div>

                    <div class="office-card">
                    <h4><img class="me-1" width="24" src="{{asset('assets/images/canada.jpg')}}" alt="us-flag" class="site-country-flag" loading="lazy"> Canada </h4>
                    <p>2482 Yonge Street #1080 Toronto,<br> ON M4P 2H5 Canada</p>
                    <strong>+1 (646) 568-7779</strong>
                    </div>

                    <div class="office-card">
                    <h4><img class="me-1" width="24" src="{{asset('assets/images/Group-3.webp')}}" alt="us-flag" class="site-country-flag" loading="lazy"> India </h4>
                    <p>1/65, vinay nagar sec 3, 100 feet road, s. p. ashram, gwalior, madhya pradesh, india - 474012</p>
                    <strong> +91 92442 13332</strong>
                    </div>
                </div>

                <!-- Form -->
                <div class="form-box">
                    <h3>Send us a message</h3>
                    @if(session('success'))
                            <div style="color:white; background:green; padding:10px; margin-bottom:15px;">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div style="color:white; background:red; padding:10px; margin-bottom:15px;">
                                {{ session('error') }}
                            </div>
                        @endif

                    <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-row">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
    </div>

    <div class="form-row">
        <select class="select" name="budget" required>
            <option value="">Select Budget</option>
            <option value="$100 or less">$100 or less</option>
            <option value="$500 - $1000">$500 - $1000</option>
            <option value="$1000 - $1500">$1000 - $1500</option>
            <option value="$1500 - $2000">$1500 - $2000</option>
            <option value="Over $2000">Over $2000</option>
        </select>

        <input id="phone" type="tel" name="phone" required>
    </div>

    <select class="select" name="service" required>
        <option value="">Select Services</option>
        <option value="Web Development">Web Development</option>
        <option value="CMS Development">CMS Development</option>
        <option value="ReactJS Development">ReactJS Development</option>
        <option value="Shopify Development">Shopify Development</option>
        <option value="NodeJS Development">NodeJS Development</option>
        <option value="E-Commerce Development">E-Commerce Development</option>
        <option value="Python Development">Python Development</option>
        <option value="AI Development">AI Development</option>
        <option value="Laravel Development">Laravel Development</option>
        <option value="Maintenance Services">Maintenance Services</option>
        <option value="SEO Services">SEO Services</option>
        <option value="Digital Marketing">Digital Marketing</option>
    </select>

    <textarea name="message" placeholder="How can we help you?" required></textarea>

    <div class="upload-box" id="uploadBox">
        <input type="file" name="additional_document" id="additional_document" requireds>
        <div class="upload-content gap-4" id="uploadContent">
            <div class="icon">
                <svg width="50" height="33" viewBox="0 0 50 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M40.8594 13.5268C40.8594 13.3929 40.8817 13.2589 40.8817 13.125C40.8817 5.87054 35.1004 0 27.9688 0C22.8237 0 18.404 3.05804 16.3281 7.47768C15.4241 7.02009 14.4085 6.75223 13.3371 6.75223C10.0446 6.75223 7.29911 9.19643 6.77455 12.3884C2.82366 13.75 0 17.5335 0 21.9866C0 27.5893 4.47545 32.1429 9.98884 32.1429H21.4286V23.2143H16.0491L25 13.8728L33.9509 23.2031H28.5714V32.1317H40.8817C45.9263 32.1317 50 27.9464 50 22.8237C50 17.7009 45.904 13.5379 40.8594 13.5268Z" fill="#006d75"></path>
                </svg>
            </div>
            <div class="d-flex flex-column">
                <h3>Upload document</h3>
                <p>Drag And Drop Or <span>Browse Your File</span> (Max upload size : 10MB)</p>
            </div>
        </div>
        <div class="file-info" id="fileInfo" style="display:none;">
            <div class="icon">
                <svg width="50" height="33" viewBox="0 0 50 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M40.8594 13.5268C40.8594 13.3929 40.8817 13.2589 40.8817 13.125C40.8817 5.87054 35.1004 0 27.9688 0C22.8237 0 18.404 3.05804 16.3281 7.47768C15.4241 7.02009 14.4085 6.75223 13.3371 6.75223C10.0446 6.75223 7.29911 9.19643 6.77455 12.3884C2.82366 13.75 0 17.5335 0 21.9866C0 27.5893 4.47545 32.1429 9.98884 32.1429H21.4286V23.2143H16.0491L25 13.8728L33.9509 23.2031H28.5714V32.1317H40.8817C45.9263 32.1317 50 27.9464 50 22.8237C50 17.7009 45.904 13.5379 40.8594 13.5268Z" fill="#006d75"></path>
                </svg>
            </div>
            <div class="file-text">
            <h3>Upload document</h3>
            <p>
                Selected file: <span id="fileName"></span>
                <button id="removeFile">✖</button>
            </p>
            </div>
        </div>
    </div>
    <button type="submit">Send Message</button>
</form>

                </div>

                </div>

                <!-- Trusted -->
                <div class="trusted">
                <h4>Our Technology Partners </h4>
                <div class="logos">
                    <div class="show-case-slider-logo swiper">
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/logo/upwork.png')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/logo/paypal.png')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/logo/Zoho.png')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/logo/envato.png')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/logo/shopify.png')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/logo/godaddy.png')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/logo/digitalocean.png')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/logo/Stripe.png')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/logo/cloudflare.png')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/logo/HubSpot.svg')}}" alt="">
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Testimonial -->
                <div class="testimonial" style="background-image:url({{asset('assets/images/thumbs/video.png')}});">
                <!-- Video Box -->
                        <div class="video-box">
                <div class="position-relative max-w-390-px w-100">
                    <img src="{{asset('assets/images/thumbs/service-details-video-img.jpg')}}" 
                        alt="Thumb" 
                        class="w-100 h-100 object-fit-cover"/>

                    <a href="https://www.youtube.com/watch?v=TxjsRFwDvbQ"
                    class="play-button bg-light-animation tw-w-75-px tw-h-75-px d-inline-flex justify-content-center align-items-center bg-white text-main-600 hover-text-main-two-700 rounded-circle tw-text-xl position-absolute tw-start-50 tw--translate-middle top-50 z-1">
                        <i class="ph-fill ph-play"></i>
                    </a>
                </div>
            </div>


                <!-- Content -->
                <div class="testimonial-content">
                    <div class="stats-wrapper">
                <div class="stat-box">
                    <span class="stat-number">5+</span>
                    <span class="stat-text">Years Partnership</span>
                </div>

                <div class="stat-box">
                    <span class="stat-number">1M+</span>
                    <span class="stat-text">Client Revenue</span>
                </div>
            </div>


                <p>
                    “Our 5-year partnership has consistently delivered results and
                    long-term value for our business.”
                </p>

                <div class="d-flex fs-5 gap-2">
                    <strong>Roland Thomas</strong>
                    <div class="m-0 stars">★★★★★</div>
                </div>
                <small class="d-flex fs-6 fw-medium">CEO, Tech Enterprises</small>

                <div class="clint-relation"><span class="fw-bold">Long Term Client</span> | 5+ Years Collaboration</div>
            </div>
</div>

            </div>
        </section>


                <!-- footer area -->
                @include('frontend.includes.footers.footerOne')
                <!-- footer area end -->
            </div>
        </div>
@section('script')
<script>
document.addEventListener("DOMContentLoaded", function () {

    const input = document.querySelector("#phone");

    if (input) {
        window.intlTelInput(input, {
            initialCountry: "us",
            separateDialCode: true,
            preferredCountries: ["us", "gb", "in"],
            autoPlaceholder: "polite",
            formatOnDisplay: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });
    }

});
</script>
<script>
    setTimeout(function() {
        let alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => alert.style.display = 'none');
    }, 3000);


    var swiper = new Swiper(".show-case-slider-logo", {
    slidesPerView: 8,
    spaceBetween: 40,
    loop: true,
    speed: 5000,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },

    breakpoints: {
        320: {
            slidesPerView: 2,
        },
        576: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        },
        1024: {
            slidesPerView: 5,
        },
    }
});
</script>


@endsection

<!-- @endsection -->

<script>
document.addEventListener("DOMContentLoaded", function () {

  const fileInput = document.getElementById("additional_document");
  const fileName = document.getElementById("fileName");
  const fileInfo = document.getElementById("fileInfo");
  const uploadContent = document.getElementById("uploadContent");
  const removeBtn = document.getElementById("removeFile");

  if (fileInput) {
    fileInput.addEventListener("change", function () {
      if (this.files.length > 0) {
        fileName.textContent = this.files[0].name;
        fileInfo.style.display = "flex";
        uploadContent.style.display = "none";
      }
    });
  }

  if (removeBtn) {
    removeBtn.addEventListener("click", function (e) {
      e.stopPropagation();
      fileInput.value = "";
      fileInfo.style.display = "none";
      uploadContent.style.display = "flex";
    });
  }

});
</script>
