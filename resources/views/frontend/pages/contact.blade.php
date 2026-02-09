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

.policy {
  font-size: 13px;
  color: #777;
}

button {
  width: 100%;
  padding: 14px;
  border-radius: 30px;
  border: none;
  background: linear-gradient(90deg,#3a8f8f,#2f6f6f);
  color: #fff;
  font-size: 16px;
  cursor: pointer;
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
                    <h4><img class="me-1" width="24" src="{{asset('assets/images/Group-4.webp')}}" alt="us-flag" class="site-country-flag" loading="lazy"> US Office</h4>
                    <p>30 Broad St,<br>New York, NY 10004</p>
                    <strong>+1 (332) 209-9994</strong>
                    <a href="#">View on Google Maps</a>
                    </div>

                    <div class="office-card">
                    <h4><img class="me-1" width="24" src="{{asset('assets/images/Group-3.webp')}}" alt="us-flag" class="site-country-flag" loading="lazy"> Canada Office</h4>
                    <p>68 Pacific Blvd,<br>Vancouver, BC V6Z 2V6</p>
                    <strong>+1 (604) 555-1234</strong>
                    <a href="#">View on Google Maps</a>
                    </div>

                    <div class="office-card">
                    <h4><img class="me-1" width="24" src="{{asset('assets/images/canada.jpg')}}" alt="us-flag" class="site-country-flag" loading="lazy"> India Office</h4>
                    <p>Indore, Madhya Pradesh<br>452001</p>
                    <strong>+91 90981 23499</strong>
                    <a href="#">View on Google Maps</a>
                    </div>
                </div>

                <!-- Form -->
                <div class="form-box">
                    <h3>Send us a message</h3>
                    <form>
                    <div class="form-row">
                        <input type="text" placeholder="Your Name">
                        <input type="email" placeholder="Your Email">
                    </div>

                    <div class="form-row">
                        <input type="text" placeholder="Company Name">
                        <input type="text" placeholder="Phone Number">
                    </div>
                    <select class="select" >
                        <option value="">Select Services</option>
                        <option value="general">Web Development</option>
                        <option value="support">CMS Development</option>
                        <option value="ReactJS">ReactJS Development</option>
                        <option value="Shopify">Shopify Development</option>
                        <option value="NodeJS">NodeJS Development</option>
                        <option value="E-Commerce">E-Commerce Development</option>
                        <option value="Python">Python Development</option>
                        <option value="AI">AI Development</option>
                        <option value="Laravel">Laravel Development</option>
                        <option value="Maintenance-Services">Maintenance Services</option>
                        <option value="SEO Services">SEO Services</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                    </select>
                    <textarea placeholder="How can we help you?"></textarea>

                    <p class="policy">
                        By submitting, you agree to our <a href="#">Privacy Policy</a>
                    </p>

                    <button type="submit">Send Message</button>
                    </form>
                </div>

                </div>

                <!-- Trusted -->
                <div class="trusted">
                <h4>Trusted by Leading Companies</h4>
                <div class="logos">
                    <span>Uber</span>
                    <span>Airtable</span>
                    <span>Fiverr</span>
                    <span>Toshiba</span>
                </div>
                </div>

                <!-- Testimonial -->
                <div class="testimonial" style="background-image:url({{asset('assets/images/thumbs/video.png')}});">
    <!-- Video Box -->
            <div class="video-box">
                <div class="position-relative max-w-390-px w-100">
                    <img
                        src="{{asset('assets/images/thumbs/service-details-video-img.jpg')}}"
                        alt="Thumb"
                        class="w-100 h-100 object-fit-cover"/>
                    <a
                        href="https://youtu.be/2ppG5SuLmEE?si=7OoakZp51OIH9I2N"
                        class="play-button bg-light-animation tw-w-75-px tw-h-75-px d-inline-flex justify-content-center align-items-center bg-white text-main-600 hover-text-main-two-700 rounded-circle tw-text-xl position-absolute tw-start-50 tw--translate-middle top-50 z-1"
                    >
                        <i
                            class="ph-fill ph-play"
                        ></i>
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
                    <span class="stat-number">$50k+</span>
                    <span class="stat-text">Client Revenue</span>
                </div>
            </div>


                <p>
                    “Our 5-year partnership has consistently delivered results and
                    long-term value for our business.”
                </p>

                <div class="d-flex fs-5 gap-2">
                    <strong>Ethan Williams</strong>
                    <div class="m-0 stars">★★★★★</div>
                </div>
                <small class="fs-6 fw-medium">CEO, Tech Enterprises</small>

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

@endsection
