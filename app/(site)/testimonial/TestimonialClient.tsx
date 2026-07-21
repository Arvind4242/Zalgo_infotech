"use client";

import { useEffect } from "react";
import PageShell from "@/components/PageShell";

declare global {
  interface Window {
    Swiper?: new (selector: string, options: Record<string, unknown>) => unknown;
  }
}

const clutchReviews = [
  {
    initial: "L",
    bg: "#2c3ed5",
    name: "Linda MT",
    role: "Co-Owner, BIOAGE Inc.",
    badge: "GoodFirms",
    badgeUrl: "https://www.goodfirms.co/company/zalgo-infotech-pvt-ltd",
    starColor: "#2c3ed5",
    quote:
      "\"I have worked with Zalgo Infotech for several years and have been pleased with their services. Bhupendra (Vishu) is available 24/7 and provides rapid, effective assistance. Communication is clear and professional — he makes complex technical matters easy to understand. I highly recommend Zalgo Infotech for anyone seeking reliable, fast, and knowledgeable technical support.\"",
    highlight: "\"I'm pleased with the company's support, and my requests have always been handled in a timely manner.\"",
    highlightBg: "#eef0ff",
    footer: "Web Development & Software Development",
    rating: "5.0",
  },
  {
    initial: "R",
    bg: "#ff4e27",
    name: "Roland Thomas",
    role: "CEO, BIOAGE Inc.",
    badge: "Clutch",
    badgeUrl: "https://clutch.co/profile/zalgo-infotech#reviews",
    starColor: "#ff4e27",
    quote:
      "\"Zalgo Infotech PVT LTD's efforts have helped us achieve 100% uptime and top visibility on Google. The team delivers on time and communicates effectively. Their technical skills and 24/7 support are hallmarks of their work.\"",
    highlight: "\"Great communication, suggestions for improvements, and 24/7 support are impressive.\"",
    highlightBg: "#fff5f3",
    footer: "Web Development · Jan 2018 – Ongoing",
    rating: "5.0",
  },
  {
    initial: "R",
    bg: "#ff4e27",
    name: "Ryan Daniel",
    role: "President, Molly-Mae",
    badge: "Clutch",
    badgeUrl: "https://clutch.co/profile/zalgo-infotech#reviews",
    starColor: "#ff4e27",
    quote:
      "\"Zalgo Infotech PVT LTD improved our website's design and delivered exactly what we asked for. The team led a timely process and handled requests quickly and professionally.\"",
    highlight: "\"Bhupendra has been a wonderful help.\"",
    highlightBg: "#fff5f3",
    footer: "Web Development · Jan 2019 – Apr 2026",
    rating: "5.0",
  },
];

const upworkReviews = [
  {
    initial: "S",
    name: "Sahil B.",
    date: "Jul 1, 2021",
    title: "WordPress Designer for Medical Website",
    quote: "An excellent web designer who was very helpful and catered to all my requirements. Will definitely hire again.",
    rating: "5.0",
  },
  {
    initial: "M",
    name: "Matt J.",
    date: "Sep 7, 2019",
    title: "WordPress Customization",
    quote: "That was very fast. Gave the task and completed in 15 mins. Awesome :)",
    rating: "5.0",
  },
  {
    initial: "M",
    name: "Milissa W.",
    date: "Jan 12, 2019",
    title: "Redesign of Company Website",
    quote: "Took direction well and great communication. I will continue to use him in the future.",
    rating: "5.0",
  },
  {
    initial: "C",
    name: "Chris P.",
    date: "Jan 10, 2019",
    title: "Responsive Web Designer — Small Task",
    quote: "Very good and very fast!",
    rating: "5.0",
  },
  {
    initial: "K",
    name: "Kirk L.",
    date: "Dec 19, 2018",
    title: "WordPress Divi CSS Responsive Fix",
    quote: "Bhupendra did an excellent job of quickly fixing WordPress CSS issues.",
    rating: "4.9",
  },
  {
    initial: "R",
    name: "Ryan F.",
    date: "May 22, 2018",
    title: "CSS Expert — Visual Composer",
    quote: "Did a great job. Very efficient and pleasant to work with.",
    rating: "5.0",
  },
  {
    initial: "C",
    name: "Client",
    date: "May 16, 2018",
    title: "WordPress / WooCommerce Plugin Development",
    quote: "Highly recommended freelancer. Would use again without hesitation. Reliable and understood job well. Great communication and very quick to complete tasks.",
    rating: "5.0",
  },
  {
    initial: "G",
    name: "George A.",
    date: "May 3, 2018",
    title: "WordPress Website Content Updating",
    quote: "Good work and fast response.",
    rating: "5.0",
  },
  {
    initial: "C",
    name: "Client",
    date: "Oct 17, 2017",
    title: "WooCommerce Custom Functions",
    quote: "While Bhupendra Parmar's tech skills are not bad, communicating with him was a challenge, which eventually resulted in delays and missed deadlines.",
    rating: "3.7",
    lowRating: true,
  },
  {
    initial: "A",
    name: "ASP I.",
    date: "Sep 6, 2017",
    title: "Manual Bookmarking to 3000 Websites",
    quote: "Very communicative.",
    rating: "5.0",
  },
];

export default function TestimonialClient() {
  useEffect(() => {
    const id = setInterval(() => {
      if (window.Swiper) {
        clearInterval(id);
        new window.Swiper(".clutch-reviews-slider", {
          slidesPerView: 1,
          spaceBetween: 24,
          // Loop mode needs strictly more slides than the largest
          // slidesPerView breakpoint (3) to loop seamlessly; with only
          // clutchReviews.length reviews it isn't enough and Swiper warns.
          loop: clutchReviews.length > 3,
          pagination: { el: ".clutch-pagination", clickable: true },
          navigation: { nextEl: ".clutch-next", prevEl: ".clutch-prev" },
          breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 20 },
            1024: { slidesPerView: 3, spaceBetween: 24 },
          },
        });
        new window.Swiper(".upwork-reviews-slider", {
          slidesPerView: 1,
          spaceBetween: 24,
          loop: true,
          pagination: { el: ".upwork-pagination", clickable: true },
          navigation: { nextEl: ".upwork-next", prevEl: ".upwork-prev" },
          breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 20 },
            1024: { slidesPerView: 3, spaceBetween: 24 },
          },
        });
      }
    }, 200);
    return () => clearInterval(id);
  }, []);

  return (
    <PageShell>
      <style>{`
        .testimonial-slider { overflow: hidden; }
        .testimonial-slider .swiper-slide {
            height: auto;
            display: flex;
            flex-direction: column;
        }
        .testimonial-slider .swiper-slide > div { flex: 1; }

        .t-nav-btn {
            width: 42px; height: 42px; border-radius: 50%;
            border: 1.5px solid #e5e7eb; background: #fff;
            display: inline-flex; align-items: center; justify-content: center;
            cursor: pointer; transition: all .25s; font-size: 18px;
            color: #374151; flex-shrink: 0; line-height: 1;
        }
        .t-nav-btn:hover { background: #111827; color: #fff; border-color: #111827; }
        .t-nav-btn:disabled { opacity: .4; cursor: default; }

        .t-pagination { position: static !important; width: auto !important; display: flex; align-items: center; gap: 6px; }
        .t-pagination .swiper-pagination-bullet {
            width: 8px; height: 8px; background: #d1d5db; opacity: 1;
            transition: all .3s; margin: 0 !important;
        }
        .t-pagination .swiper-pagination-bullet-active {
            background: #111827; width: 24px; border-radius: 4px;
        }

        @media (max-width: 991px) {
            .testi-section-header { flex-direction: column !important; align-items: flex-start !important; }
            .testi-section-header .max-w-672-px { max-width: 100% !important; }
            .testi-section-header p { max-width: 100% !important; margin-top: 0 !important; }
        }
        @media (max-width: 575px) {
            .website-owner.py-120 { padding-top: 60px !important; padding-bottom: 60px !important; }
            .py-120.section-bg-two { padding-top: 60px !important; padding-bottom: 60px !important; }
        }
      `}</style>

      {/* Breadcrumb */}
      <section className="py-120 section-bg-two">
        <div className="container">
          <div className="row justify-content-center">
            <div className="col-lg-8">
              <div className="text-center">
                <span className="tw-mb-4">
                  <img src="/assets/images/logo/favicon-two.png" alt="Favicon Two" />
                </span>
                <h1 className="mb-0 splitTextStyleOne text-capitalize">Client Testimonials</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Reviews Section */}
      <section className="website-owner py-120 position-relative z-1">
        <img
          src="/assets/images/shapes/moon-shape.png"
          alt="Moon Shape"
          className="position-absolute top-50 tw-start-50 translate-middle z-n1"
        />

        <div className="container">
          <div className="d-flex testi-section-header align-items-center justify-content-between tw-gap-6 tw-mb-12">
            <div className="max-w-672-px">
              <div className="bg-neutral-200 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405">
                <span className="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                Verified reviews from <span className="text-yellow">Clutch</span>, Upwork &amp;
                GoodFirms
              </div>
              <h2 className="splitTextStyleOne text-heading text-capitalize">
                What Our Clients Say <span className="font-dm-serif fst-italic fw-normal">About Us</span>
              </h2>
            </div>
            <div>
              <p className="text-neutral-500 tw-mt-8 max-w-490-px fw-medium">
                Real feedback from real clients — sourced directly from Clutch, Upwork, and
                GoodFirms. We let our work speak through the voices of those who&apos;ve experienced
                it firsthand.
              </p>
            </div>
          </div>

          {/* Clutch & GoodFirms Slider */}
          <div className="tw-mb-14">
            <div className="d-flex align-items-center flex-wrap tw-gap-3 tw-mb-8">
              <a
                href="https://clutch.co/profile/zalgo-infotech#reviews"
                target="_blank"
                rel="noopener noreferrer"
                className="d-inline-flex align-items-center tw-gap-2 tw-px-4 tw-py-2 rounded-pill fw-semibold text-decoration-none"
                style={{ background: "#ff4e27", color: "#fff", fontSize: 13 }}
              >
                &#9670;&nbsp;Clutch Reviews
              </a>
              <a
                href="https://www.goodfirms.co/company/zalgo-infotech-pvt-ltd"
                target="_blank"
                rel="noopener noreferrer"
                className="d-inline-flex align-items-center tw-gap-2 tw-px-4 tw-py-2 rounded-pill fw-semibold text-decoration-none"
                style={{ background: "#2c3ed5", color: "#fff", fontSize: 13 }}
              >
                &#9733;&nbsp;GoodFirms Reviews
              </a>
              <span className="text-neutral-500 fw-medium">3 Verified Reviews &middot; Overall 5.0 &#9733;</span>
            </div>

            <div className="swiper testimonial-slider clutch-reviews-slider">
              <div className="swiper-wrapper">
                {clutchReviews.map((r, i) => (
                  <div className="swiper-slide" key={i}>
                    <div className="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                      <div className="d-flex align-items-center justify-content-between tw-mb-4">
                        <div className="d-flex align-items-center tw-gap-2">
                          <div
                            className="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                            style={{ background: r.bg, width: 44, height: 44, minWidth: 44, fontSize: 18 }}
                          >
                            {r.initial}
                          </div>
                          <div>
                            <div className="fw-semibold text-heading" style={{ fontSize: 14, lineHeight: 1.3 }}>
                              {r.name}
                            </div>
                            <div className="text-neutral-500" style={{ fontSize: 11 }}>
                              {r.role}
                            </div>
                          </div>
                        </div>
                        <a
                          href={r.badgeUrl}
                          target="_blank"
                          rel="noopener noreferrer"
                          className="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                          style={{ background: r.bg, color: "#fff", fontSize: 11 }}
                        >
                          {r.badge === "GoodFirms" ? "★" : "◆"} {r.badge}
                        </a>
                      </div>
                      <div className="tw-mb-3">
                        <span style={{ color: r.starColor, fontSize: 18 }}>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                      </div>
                      <p className="text-neutral-500 tw-text-xl tw-mb-4">{r.quote}</p>
                      <div
                        className="tw-p-4 rounded-3 tw-mb-4"
                        style={{ background: r.highlightBg, borderLeft: `3px solid ${r.bg}` }}
                      >
                        <p className="text-neutral-600 fst-italic" style={{ fontSize: 13, margin: 0 }}>
                          {r.highlight}
                        </p>
                      </div>
                      <span className="d-block tw-h-px bg-neutral-100 tw-my-4"></span>
                      <div className="d-flex align-items-center justify-content-between">
                        <span className="text-neutral-500" style={{ fontSize: 12 }}>{r.footer}</span>
                        <div
                          className="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill"
                          style={{ background: r.bg }}
                        >
                          <span className="text-white fw-bold tw-text-sm">{r.rating}</span>
                          <span className="text-white d-flex">
                            <img src="/assets/images/icons/star.svg" alt="star" />
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                ))}
              </div>
            </div>
            <div className="d-flex align-items-center justify-content-center tw-gap-4 tw-mt-8">
              <button className="t-nav-btn clutch-prev" aria-label="Previous">&#8592;</button>
              <div className="swiper-pagination t-pagination clutch-pagination"></div>
              <button className="t-nav-btn clutch-next" aria-label="Next">&#8594;</button>
            </div>
          </div>

          {/* Upwork Reviews Slider */}
          <div className="tw-mb-14">
            <div className="d-flex align-items-center flex-wrap tw-gap-3 tw-mb-8">
              <a
                href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1"
                target="_blank"
                rel="noopener noreferrer"
                className="d-inline-flex align-items-center tw-gap-2 tw-px-4 tw-py-2 rounded-pill fw-semibold text-decoration-none"
                style={{ background: "#14a800", color: "#fff", fontSize: 13 }}
              >
                &#10003;&nbsp;Upwork Reviews
              </a>
              <span className="text-neutral-500 fw-medium">10 Verified Reviews</span>
            </div>

            <div className="swiper testimonial-slider upwork-reviews-slider">
              <div className="swiper-wrapper">
                {upworkReviews.map((r, i) => (
                  <div className="swiper-slide" key={i}>
                    <div className="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white animation-item">
                      <div className="d-flex align-items-center justify-content-between tw-mb-3">
                        <div className="d-flex align-items-center tw-gap-2">
                          <div
                            className="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white"
                            style={{
                              background: r.lowRating ? "#9ca3af" : "#14a800",
                              width: 40,
                              height: 40,
                              minWidth: 40,
                              fontSize: 16,
                            }}
                          >
                            {r.initial}
                          </div>
                          <div>
                            <div className="fw-semibold text-heading" style={{ fontSize: 14, lineHeight: 1.3 }}>
                              {r.name}
                            </div>
                            <div className="text-neutral-500" style={{ fontSize: 11 }}>
                              {r.date}
                            </div>
                          </div>
                        </div>
                        <a
                          href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1"
                          target="_blank"
                          rel="noopener noreferrer"
                          className="d-inline-flex align-items-center tw-gap-1 tw-px-3 tw-py-1 rounded-pill fw-semibold text-decoration-none"
                          style={{ background: "#14a800", color: "#fff", fontSize: 11 }}
                        >
                          &#10003; Upwork
                        </a>
                      </div>
                      <div className="text-neutral-400 tw-mb-2" style={{ fontSize: 12 }}>
                        {r.title}
                      </div>
                      <div className="tw-mb-3">
                        <span style={{ color: r.lowRating ? "#f59e0b" : "#14a800", fontSize: 16 }}>
                          {r.lowRating ? "★★★☆☆" : "★★★★★"}
                        </span>
                      </div>
                      <p className="text-neutral-500 tw-text-xl tw-mb-4">{r.quote}</p>
                      <span className="d-block tw-h-px bg-neutral-100 tw-my-3"></span>
                      <div className="d-flex justify-content-end">
                        <div
                          className="d-inline-flex align-items-center tw-gap-1 tw-py-05 tw-px-3 rounded-pill"
                          style={{ background: r.lowRating ? "#9ca3af" : "#14a800" }}
                        >
                          <span className="text-white fw-bold tw-text-sm">{r.rating}</span>
                          <span className="text-white d-flex">
                            <img src="/assets/images/icons/star.svg" alt="star" />
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                ))}
              </div>
            </div>
            <div className="d-flex align-items-center justify-content-center tw-gap-4 tw-mt-8">
              <button className="t-nav-btn upwork-prev" aria-label="Previous">&#8592;</button>
              <div className="swiper-pagination t-pagination upwork-pagination"></div>
              <button className="t-nav-btn upwork-next" aria-label="Next">&#8594;</button>
            </div>
          </div>

          {/* GoodFirms CTA */}
          <div className="common-shadow-ten tw-rounded-2xl tw-p-8 bg-white tw-mb-14 animation-item">
            <div className="d-flex align-items-center justify-content-between flex-wrap tw-gap-4">
              <div className="d-flex align-items-center tw-gap-4">
                <div
                  className="d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"
                  style={{ width: 56, height: 56, background: "#2c3ed5" }}
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="white">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z" />
                  </svg>
                </div>
                <div>
                  <h5 className="text-heading fw-bold tw-mb-1" style={{ fontSize: 16 }}>
                    Also Verified on GoodFirms
                  </h5>
                  <p className="text-neutral-500 tw-mb-0" style={{ fontSize: 13 }}>
                    Explore our B2B profile and verified ratings &mdash; one of the world&apos;s most
                    trusted research &amp; review platforms.
                  </p>
                </div>
              </div>
              <a
                href="https://www.goodfirms.co/company/zalgo-infotech-pvt-ltd"
                target="_blank"
                rel="noopener noreferrer"
                className="d-inline-flex align-items-center tw-gap-2 tw-px-6 tw-py-3 rounded-pill fw-semibold text-white text-decoration-none flex-shrink-0"
                style={{ background: "#2c3ed5", fontSize: 13 }}
              >
                View on GoodFirms
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="13"
                  height="13"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="white"
                  strokeWidth="2"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                >
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
              </a>
            </div>
          </div>

          {/* Platform Badges */}
          <div className="tw-mt-8">
            <p className="text-center text-neutral-500 fw-medium tw-mb-8">Read our verified reviews on</p>
            <div className="d-flex align-items-center justify-content-center flex-wrap tw-gap-4">
              <a
                href="https://clutch.co/profile/zalgo-infotech#reviews"
                target="_blank"
                rel="noopener noreferrer"
                className="d-inline-flex align-items-center tw-gap-2 tw-px-6 tw-py-3 rounded-pill text-white fw-semibold text-decoration-none"
                style={{ background: "#ff4e27", boxShadow: "0 4px 15px rgba(255,78,39,0.3)", fontSize: 14 }}
              >
                &#9670; Clutch
              </a>
              <a
                href="https://www.upwork.com/freelancers/~011583492a8754a6a8?viewMode=1"
                target="_blank"
                rel="noopener noreferrer"
                className="d-inline-flex align-items-center tw-gap-2 tw-px-6 tw-py-3 rounded-pill text-white fw-semibold text-decoration-none"
                style={{ background: "#14a800", boxShadow: "0 4px 15px rgba(20,168,0,0.3)", fontSize: 14 }}
              >
                &#10003; Upwork
              </a>
              <a
                href="https://www.goodfirms.co/company/zalgo-infotech-pvt-ltd"
                target="_blank"
                rel="noopener noreferrer"
                className="d-inline-flex align-items-center tw-gap-2 tw-px-6 tw-py-3 rounded-pill text-white fw-semibold text-decoration-none"
                style={{ background: "#2c3ed5", boxShadow: "0 4px 15px rgba(44,62,213,0.3)", fontSize: 14 }}
              >
                &#9733; GoodFirms
              </a>
            </div>
          </div>
        </div>
      </section>
    </PageShell>
  );
}
