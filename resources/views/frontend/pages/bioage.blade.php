@extends('frontend.layouts.app')
@section('title', 'Web Designs')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
    
        <div id="smooth-content">
            <!-- ================= HERO ================= -->
            <section class="hero-section py-5">
                <div class="container">
                    <div class="row align-items-center">

                    <div class="col-lg-6">
                        <h1>Barge Lady Cruises</h1>
                        <p class="subtitle">Luxury Barge Cruise Booking Platform Redesign</p>
                        <a href="#" class="btn btn-primary mt-3">View Live Project</a>
                    </div>

                    <div class="col-lg-6 text-center">
                        <img src="assets/images/hero-laptop.png" class="img-fluid hero-mockup">
                    </div>

                    </div>
                </div>
            </section>

            <!-- ================= OVERVIEW ================= -->
            <section class="overview-section py-5">
                <div class="container">
                    <div class="row">

                    <div class="col-lg-7">
                        <h2>Project Overview</h2>
                        <p>
                        Barge Lady Cruises is a premier provider of luxury barge vacations in Europe.
                        They needed a modern, user-friendly booking platform to enhance their online
                        presence and increase conversions.
                        </p>
                    </div>

                    <div class="col-lg-5">
                        <div class="info-card">
                        <h5>Project Info</h5>
                        <ul>
                            <li><strong>Client:</strong> Barge Lady Cruises</li>
                            <li><strong>Industry:</strong> Travel & Tourism</li>
                            <li><strong>Services:</strong> UX Design, Web Development</li>
                            <li><strong>Timeline:</strong> 8 Weeks</li>
                        </ul>
                        </div>
                    </div>

                    </div>
                </div>
            </section>


            <!-- ================= CHALLENGES  ================= -->
            <section class="challenge-section py-5">
                <div class="container">
                    <h2 class="text-center mb-5">Key Challenges</h2>

                    <div class="row g-4 text-center">
                    <div class="col-md-3">
                        <div class="challenge-card">
                        <p>Outdated Design</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="challenge-card">
                        <p>Poor Mobile Experience</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="challenge-card">
                        <p>Low Conversion Rates</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="challenge-card">
                        <p>User Trust Issues</p>
                        </div>
                    </div>
                    </div>

                </div>
            </section>

            <!-- ================= SOLUTION ================= -->
            <section class="solution-section py-5">
                <div class="container">
                    <h2 class="text-center mb-5">Our Solution</h2>

                    <div class="solution-steps">
                    <div class="step active">01 UX Research & Analysis</div>
                    <div class="step">02 Modern UI Design</div>
                    <div class="step">03 Responsive Development</div>
                    <div class="step">04 Speed Optimization</div>
                    </div>

                </div>
            </section>


            <!-- ================= SHOWCASE ================= -->
            <section class="showcase-section py-5">
                <div class="container">
                    <div class="row align-items-center">

                    <div class="col-lg-6">
                        <img src="assets/images/screen-1.jpg" class="img-fluid rounded">
                    </div>

                    <div class="col-lg-6">
                        <h2>Visual Showcase</h2>
                        <div class="row g-3">
                        <div class="col-6">
                            <img src="assets/images/screen-1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-6">
                            <img src="assets/images/screen-2.jpg" class="img-fluid rounded">
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
            </section>


            <!-- ================= RESULTS ================= -->
            <section class="results-section">
                <div class="container">
                    <h2 class="text-center mb-5">Results Achieved</h2>

                    <div class="row g-4 text-center">
                    <div class="col-md-3">
                        <div class="result-card">
                        <h3>+120%</h3>
                        <p>User Engagement</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="result-card">
                        <h3>+65%</h3>
                        <p>Conversion Rate</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="result-card">
                        <h3>3x</h3>
                        <p>Faster Load Time</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="result-card">
                        <h3>100%</h3>
                        <p>Mobile Friendly</p>
                        </div>
                    </div>
                    </div>

                </div>
            </section>


            <!-- ================= TECH ================= -->
            <section class="tech-section">
                <div class="container text-center">
                    <h2>Technology Stack</h2>
                    <div class="tech-list">
                    <span>Laravel</span>
                    <span>React</span>
                    <span>WordPress</span>
                    <span>Bootstrap</span>
                    </div>
                </div>
            </section>

            <!-- ================= CTA ================= -->
            <section class="cta-section">
                <h2>Let’s Build Your Next Success Story</h2>
                <a href="#" class="btn btn-primary mt-3">Get In Touch</a>
            </section>


            <!-- footer area -->
                @include('frontend.includes.footers.footerOne')
            <!-- footer area end -->

        </div>
    </div>



@endsection
