import Link from "next/link";
import PageShell from "@/components/PageShell";
import MaintenancePlansSection from "@/components/services/MaintenancePlansSection";
import WordpressAuditForm from "@/components/services/WordpressAuditForm";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "WordPress & WooCommerce Maintenance Services",
  description:
    "WordPress and WooCommerce maintenance with security monitoring, speed optimization, plugin updates, and backups. Fix slow sites, checkout issues, and downtime.",
  keywords: [
    "WordPress maintenance services",
    "WooCommerce maintenance and support",
    "WordPress security monitoring",
    "WordPress speed optimization",
    "WooCommerce store management",
    "WordPress support company",
  ],
  path: "/wordpress-maintenance",
});

const heroChecks = [
  "5+ Year Client Relationships",
  "WooCommerce Specialists",
  "Security & Performance Monitoring",
  "Ongoing Technical Support",
];

const problems = [
  "Slow Loading Website",
  "Outdated Plugins",
  "Security Risks",
  "WooCommerce Checkout Issues",
  "Broken Contact Forms",
  "Hosting Problems",
  "Technical SEO Issues",
  "Website Downtime",
];

const whyServices = [
  { icon: "ph-shield-check", title: "Security Monitoring" },
  { icon: "ph-lightning", title: "Speed Optimization" },
  { icon: "ph-arrows-clockwise", title: "Plugin Updates" },
  { icon: "ph-cloud-arrow-up", title: "Backups" },
  { icon: "ph-shopping-cart", title: "WooCommerce Support" },
  { icon: "ph-wrench", title: "Custom Development" },
];

const caseStudyItems = [
  "WooCommerce Store Management",
  "Security Management with Sucuri",
  "Technical SEO & Speed Optimization",
  "Hosting & Server Management",
  "Payment Gateway Management",
  "Ongoing Maintenance & Support",
];

const portfolioItems = [
  {
    image: "/assets/images/case-study/bioage.png",
    title: "BioAge",
    line1: "Managed Since 2019",
    line2: "WooCommerce Maintenance & Support",
    href: routes.bioage,
  },
  {
    image: "/assets/images/case-study/experthe-case-study.png",
    title: "Experthe",
    line1: "WordPress & WooCommerce",
    line2: "Security & Performance Overhaul",
    href: routes.experthe,
  },
  {
    image: "/assets/images/thumbs/Awakeningthegeniuswithin.jpg",
    title: "Awakening The Genius Within",
    line1: "WordPress · Wellness Platform",
    line2: "Ongoing Maintenance & Support",
    href: routes.awakeningthegeniuswithin,
  },
];

const thumbSlider = Array.from({ length: 10 }, (_, i) => `zalgo${i + 1}`);

export default function WordpressMaintenancePage() {
  return (
    <PageShell>
      <style>{`
        .wpm-hero-section { background: #fff; padding: 90px 0 60px; }
        .wpm-badge { color: #00B5AD; font-size: 12px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 14px; display: block; }
        .wpm-h1 { font-size: clamp(2rem, 3.8vw, 3rem); font-weight: 800; line-height: 1.15; color: #0d1b2a; margin-bottom: 18px; }
        .wpm-h1 .wpm-blue { color: #00B5AD; }
        .wpm-subtitle { font-size: 16px; color: #5a6a7e; margin-bottom: 24px; max-width: 460px; line-height: 1.7; }
        .wpm-checks { list-style: none; padding: 0; margin: 0 0 32px; display: flex; flex-direction: column; gap: 10px; }
        .wpm-checks li { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 500; color: #2d3748; }
        .wpm-check-icon { width: 22px; height: 22px; background: #00B5AD; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .wpm-check-icon svg { width: 12px; height: 12px; fill: none; stroke: #fff; stroke-width: 2.5; }
        .wpm-btn-primary { background: #0d1b2a; color: #fff; border: none; padding: 14px 28px; border-radius: 8px; font-weight: 700; font-size: 15px; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; transition: background .2s; }
        .wpm-btn-primary:hover { background: #00B5AD; color: #fff; }
        .wpm-btn-outline { background: #fff; color: #0d1b2a; border: 2px solid #d1d9e0; padding: 13px 28px; border-radius: 8px; font-weight: 700; font-size: 15px; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; transition: all .2s; }
        .wpm-btn-outline:hover { border-color: #00B5AD; color: #00B5AD; }

        .wpm-device-wrap { position: relative; max-width: 520px; margin: 0 auto; }
        .wpm-device-frame { background: #1e293b; border-radius: 16px; padding: 12px 12px 0; box-shadow: 0 30px 80px rgba(0,0,0,0.18); }
        .wpm-device-screen { background: #f0f2f5; border-radius: 8px 8px 0 0; overflow: hidden; display: flex; }
        .wpm-db-sidebar { background: #1d2327; width: 90px; flex-shrink: 0; padding: 14px 0; }
        .wpm-db-sidebar-logo { text-align: center; margin-bottom: 14px; }
        .wpm-db-sidebar-logo svg { width: 28px; height: 28px; fill: #00B5AD; }
        .wpm-db-nav { list-style: none; margin: 0; padding: 0; }
        .wpm-db-nav li { padding: 7px 10px; font-size: 9px; color: rgba(255,255,255,0.55); text-align: center; cursor: pointer; }
        .wpm-db-nav li.active { color: #fff; background: rgba(255,255,255,0.07); }
        .wpm-db-main { flex: 1; padding: 14px; }
        .wpm-db-title { font-size: 13px; font-weight: 700; color: #1e293b; margin-bottom: 12px; }
        .wpm-db-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
        .wpm-db-card { background: #fff; border-radius: 8px; padding: 10px 12px; box-shadow: 0 1px 4px rgba(0,0,0,0.06); }
        .wpm-db-card-label { font-size: 9px; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .wpm-db-card-value { font-size: 20px; font-weight: 800; line-height: 1; margin-bottom: 4px; }
        .wpm-db-card-sub { font-size: 9px; font-weight: 600; }
        .wpm-db-sparkline { height: 24px; margin-top: 6px; }
        .wpm-db-sparkline svg { width: 100%; height: 100%; }
        .wpm-device-base { height: 12px; background: #e2e8f0; border-radius: 0 0 8px 8px; }
        .wpm-device-stand { width: 40%; height: 6px; background: #cbd5e1; border-radius: 0 0 6px 6px; margin: 0 auto; }

        .wpm-trust-bar { background: #fff; padding: 48px 0; border-top: 1px solid #e8edf2; border-bottom: 1px solid #e8edf2; }
        .wpm-trust-card { text-align: center; padding: 28px 20px; }
        .wpm-trust-icon { width: 56px; height: 56px; margin: 0 auto 14px; background: #E0F5F5; border-radius: 12px; display: flex; align-items: center; justify-content: center; }
        .wpm-trust-icon svg { width: 28px; height: 28px; fill: #00B5AD; }
        .wpm-trust-number { font-size: 2.4rem; font-weight: 800; color: #0d1b2a; line-height: 1; margin-bottom: 4px; }
        .wpm-trust-title { font-size: 15px; font-weight: 700; color: #0d1b2a; margin-bottom: 2px; }
        .wpm-trust-sub { font-size: 13px; color: #7a8a9a; }
        .wpm-review-card:hover { box-shadow: 0 8px 32px rgba(0,0,0,0.07); transform: translateY(-2px); transition: all .25s; }
      `}</style>

      {/* ===================== HERO ===================== */}
      <section className="wpm-hero-section">
        <div className="container">
          <div className="row align-items-center gy-5">
            <div className="col-lg-6">
              <span className="wpm-badge">WordPress Maintenance Experts</span>
              <h1 className="wpm-h1">
                WordPress &amp;
                <br />
                <span className="wpm-blue">WooCommerce</span>
                <br />
                Maintenance Services
              </h1>
              <p className="wpm-subtitle">
                Keep Your Website Secure, Fast &amp; Updated Without Hiring an In-House Developer.
              </p>
              <ul className="wpm-checks">
                {heroChecks.map((item) => (
                  <li key={item}>
                    <span className="wpm-check-icon">
                      <svg viewBox="0 0 12 12">
                        <polyline points="1.5,6 4.5,9.5 10.5,2.5" />
                      </svg>
                    </span>
                    {item}
                  </li>
                ))}
              </ul>
              <div className="d-flex align-items-center gap-3 flex-wrap">
                <Link href={routes.contact} className="wpm-btn-primary">
                  Get Free Website Audit &nbsp;&#8594;
                </Link>
                <Link href={routes.casestudy} className="wpm-btn-outline">
                  View Case Studies
                </Link>
              </div>
            </div>

            {/* Right: HTML Dashboard Mockup */}
            <div className="col-lg-6">
              <div className="wpm-device-wrap">
                <div className="wpm-device-frame">
                  <div className="wpm-device-screen">
                    <div className="wpm-db-sidebar">
                      <div className="wpm-db-sidebar-logo">
                        <svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="25" cy="25" r="24" fill="#00B5AD" />
                          <text
                            x="50%"
                            y="56%"
                            dominantBaseline="middle"
                            textAnchor="middle"
                            fill="white"
                            fontSize={28}
                            fontFamily="serif"
                            fontWeight="bold"
                          >
                            W
                          </text>
                        </svg>
                      </div>
                      <ul className="wpm-db-nav">
                        <li className="active">Dashboard</li>
                        <li>Updates</li>
                        <li>Security</li>
                        <li>Backups</li>
                        <li>Performance</li>
                        <li>Uptime</li>
                        <li>Support</li>
                      </ul>
                    </div>
                    <div className="wpm-db-main">
                      <div className="wpm-db-title">Your Website Status</div>
                      <div className="wpm-db-grid">
                        <div className="wpm-db-card">
                          <div className="wpm-db-card-label">Uptime</div>
                          <div className="wpm-db-card-value" style={{ color: "#16a34a" }}>
                            99.9%
                          </div>
                          <div className="wpm-db-sparkline">
                            <svg viewBox="0 0 80 24" preserveAspectRatio="none">
                              <polyline
                                points="0,20 10,18 20,16 30,14 40,15 50,10 60,8 70,6 80,4"
                                fill="none"
                                stroke="#16a34a"
                                strokeWidth={2}
                                strokeLinecap="round"
                              />
                            </svg>
                          </div>
                        </div>
                        <div className="wpm-db-card">
                          <div className="wpm-db-card-label">Security</div>
                          <div className="d-flex align-items-center gap-1 mt-1">
                            <svg width={16} height={16} viewBox="0 0 24 24" fill="#16a34a">
                              <path d="M12 2L3 7v5c0 5.25 3.75 10.15 9 11.35C17.25 22.15 21 17.25 21 12V7z" />
                            </svg>
                            <span style={{ fontSize: 13, fontWeight: 700, color: "#16a34a" }}>Protected</span>
                          </div>
                          <div className="wpm-db-card-sub" style={{ color: "#16a34a", marginTop: 6 }}>
                            No Threats Found
                          </div>
                        </div>
                        <div className="wpm-db-card">
                          <div className="wpm-db-card-label">Backups</div>
                          <div className="wpm-db-card-value" style={{ color: "#00B5AD", fontSize: 15, marginTop: 4 }}>
                            Weekly
                          </div>
                          <div className="wpm-db-card-sub" style={{ color: "#94a3b8", marginTop: 4 }}>
                            Last backup: 2 Days
                          </div>
                        </div>
                        <div className="wpm-db-card">
                          <div className="wpm-db-card-label">WooCommerce</div>
                          <div className="d-flex align-items-center gap-1 mt-1">
                            <span
                              style={{
                                fontSize: 13,
                                background: "#96588a",
                                color: "#fff",
                                padding: "2px 7px",
                                borderRadius: 4,
                                fontWeight: 700,
                              }}
                            >
                              Woo
                            </span>
                            <span style={{ fontSize: 12, fontWeight: 700, color: "#16a34a" }}>Healthy</span>
                          </div>
                          <div className="wpm-db-sparkline">
                            <svg viewBox="0 0 80 24" preserveAspectRatio="none">
                              <polyline
                                points="0,20 15,15 25,16 35,10 50,12 65,8 80,5"
                                fill="none"
                                stroke="#96588a"
                                strokeWidth={2}
                                strokeLinecap="round"
                              />
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="wpm-device-base"></div>
                </div>
                <div className="wpm-device-stand"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Hero End */}

      {/* ===================== TRUST BAR ===================== */}
      <section className="wpm-trust-bar">
        <div className="container">
          <div className="row justify-content-center">
            <div className="col-lg-3 col-md-6">
              <div className="wpm-trust-card">
                <div className="wpm-trust-icon">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                  </svg>
                </div>
                <div className="wpm-trust-number">5+</div>
                <div className="wpm-trust-title">Years</div>
                <div className="wpm-trust-sub">
                  Long-Term Client
                  <br />
                  Relationships
                </div>
              </div>
            </div>
            <div className="col-lg-3 col-md-6">
              <div className="wpm-trust-card">
                <div className="wpm-trust-icon">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z" />
                  </svg>
                </div>
                <div className="wpm-trust-number">$1M+</div>
                <div className="wpm-trust-title">WooCommerce Revenue</div>
                <div className="wpm-trust-sub">Supported</div>
              </div>
            </div>
            <div className="col-lg-3 col-md-6">
              <div className="wpm-trust-card">
                <div className="wpm-trust-icon">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 6h-2.18c.07-.23.18-.49.18-.83C18 3.87 16.86 3 16 3h-4C11.14 3 10 3.87 10 5.17c0 .34.11.6.18.83H8c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-8-1h4c.28 0 .5.29.5.5s-.22.5-.5.5h-4c-.28 0-.5-.29-.5-.5S11.72 5 12 5zm8 14H8v-2h12v2zm0-5H8V8h12v6z" />
                  </svg>
                </div>
                <div className="wpm-trust-number">40+</div>
                <div className="wpm-trust-title">Successful</div>
                <div className="wpm-trust-sub">Projects</div>
              </div>
            </div>
            <div className="col-lg-3 col-md-6">
              <div className="wpm-trust-card">
                <div className="wpm-trust-icon">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
                  </svg>
                </div>
                <div className="wpm-trust-number">96%</div>
                <div className="wpm-trust-title">Upwork Job</div>
                <div className="wpm-trust-sub">Success Score</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Trust Bar End */}

      {/* ===================== PROBLEMS WE SOLVE ===================== */}
      <section className="py-120 position-relative" style={{ background: "#071414" }}>
        <div className="container">
          <div className="text-center tw-mb-14">
            <h2 className="splitTextStyleOne text-white fw-bold tw-mb-4">Is Your Website Costing You Customers?</h2>
            <p className="text-neutral-400 fw-medium tw-text-lg mx-auto" style={{ maxWidth: 560 }}>
              We Fix Issues That Affect Your WordPress Performance, Security &amp; Conversions
            </p>
          </div>
          <div className="row gy-4 justify-content-center">
            {problems.map((title) => (
              <div className="col-lg-3 col-md-4 col-sm-6" key={title}>
                <div
                  className="d-flex align-items-center tw-gap-3 tw-py-5 tw-px-5 rounded-3"
                  style={{ background: "rgba(255,255,255,0.05)", border: "1px solid rgba(255,255,255,0.08)" }}
                >
                  <span className="fs-3" style={{ color: "#ff4d4d" }}>
                    &#10007;
                  </span>
                  <span className="text-white fw-medium">{title}</span>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
      {/* Problems End */}

      {/* ===================== WHY BUSINESSES WORK WITH US ===================== */}
      <section className="py-120 bg-white position-relative z-1 overflow-hidden">
        <img
          src="/assets/images/shapes/squre-box-shape.png"
          alt="Shape"
          className="position-absolute top-50 tw-start-0 tw-ms-128-px animate__wobble__two z-n1 d-lg-block d-none"
        />
        <div className="container">
          <div className="row gy-5 align-items-center flex-wrap-reverse">
            <div className="col-lg-5">
              <div
                className="tw-rounded-lg bg-img position-relative max-w-570-px"
                data-background-image="/assets/images/thumbs/about-two-img-bg.png"
              >
                <div className="d-flex tw-gap-6 tw-max-h-666-px">
                  <div className="swiper overflow-hidden about-two-thumbs-slider-one w-50">
                    <div className="swiper-wrapper transition-timing-linear tw-gap-6">
                      {thumbSlider.map((img, i) => (
                        <div className="swiper-slide" key={`s1-${i}`}>
                          <div className="tw-rounded-2xl overflow-hidden">
                            <img
                              src={`/assets/images/service-product/${img}.png`}
                              alt="Image"
                              className="w-100 h-100 object-fit-cover"
                            />
                          </div>
                        </div>
                      ))}
                    </div>
                  </div>
                  <div className="swiper overflow-hidden about-two-thumbs-slider-two w-50">
                    <div className="swiper-wrapper transition-timing-linear tw-gap-6">
                      {thumbSlider.map((img, i) => (
                        <div className="swiper-slide" key={`s2-${i}`}>
                          <div className="tw-rounded-2xl overflow-hidden">
                            <img
                              src={`/assets/images/service-product/${img}.png`}
                              alt="Image"
                              className="w-100 h-100 object-fit-cover"
                            />
                          </div>
                        </div>
                      ))}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-lg-7 ps-lg-5">
              <span className="tw-py-1 tw-px-705 bg-neutral-100 text-heading fw-medium text-capitalize rounded-pill tw-mb-4 d-inline-block">
                Long-Term WordPress Support
              </span>
              <h2 className="splitTextStyleOne text-heading text-capitalize tw-mb-5">
                Long-Term WordPress Support
                <br />
                <span className="font-dm-serif fst-italic fw-normal">You Can Rely On</span>
              </h2>
              <p className="text-neutral-500 fw-medium tw-text-lg tw-mb-8" style={{ maxWidth: 540 }}>
                Instead of fixing problems after they happen, we proactively maintain, secure, and optimize your
                website.
              </p>
              <div className="row gy-4">
                {whyServices.map((svc) => (
                  <div className="col-md-4 col-sm-6" key={svc.title}>
                    <div className="d-flex align-items-center tw-gap-3 tw-py-4 tw-px-4 border border-neutral-100 rounded-3">
                      <span className="tw-w-10 tw-h-10 bg-main-50 text-main-600 rounded-2 d-flex align-items-center justify-content-center fs-5">
                        <i className={`ph-bold ${svc.icon}`}></i>
                      </span>
                      <span className="fw-semibold text-heading tw-text-sm">{svc.title}</span>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Why Businesses End */}

      {/* ===================== FEATURED CASE STUDY ===================== */}
      <section className="py-120" style={{ background: "#f7f9fc" }}>
        <div className="container max-w-1400-px">
          <div className="text-center tw-mb-4">
            <span className="tw-py-1 tw-px-705 bg-main-50 text-main-600 tw-text-sm fw-semibold text-uppercase rounded-pill">
              Featured Case Study
            </span>
          </div>
          <div className="row gy-5 align-items-center">
            <div className="col-lg-5">
              <div className="position-relative rounded-4 overflow-hidden shadow-lg">
                <img
                  src="/assets/images/case-study/bioage.png"
                  alt="BioAge"
                  className="w-100 h-100 object-fit-cover"
                />
                <div
                  className="position-absolute bottom-0 tw-start-0 tw-end-0 tw-p-4"
                  style={{ background: "linear-gradient(transparent, rgba(0,0,0,0.75))" }}
                >
                  <div className="text-white fw-semibold">BioAge</div>
                  <div className="text-neutral-300 tw-text-sm">Managed Since 2019</div>
                </div>
              </div>
            </div>
            <div className="col-lg-7 ps-lg-5">
              <h2 className="splitTextStyleOne text-heading fw-bold tw-mb-3">BioAge</h2>
              <p className="text-neutral-500 fw-semibold tw-mb-6">Managed Since 2019</p>
              <ul className="list-unstyled d-flex flex-column tw-gap-3 tw-mb-8">
                {caseStudyItems.map((item) => (
                  <li className="d-flex align-items-center tw-gap-3 text-neutral-700 fw-medium" key={item}>
                    <span
                      className="tw-w-5 tw-h-5 bg-main-600 text-white rounded-circle d-flex align-items-center justify-content-center"
                      style={{ fontSize: 11 }}
                    >
                      &#10003;
                    </span>
                    {item}
                  </li>
                ))}
              </ul>
              <div
                className="d-flex align-items-center tw-gap-6 tw-p-6 rounded-4 tw-mb-8"
                style={{ background: "#fff", borderLeft: "4px solid var(--main-600)", boxShadow: "0 4px 24px rgba(0,0,0,0.06)" }}
              >
                <div>
                  <div className="fs-2 fw-bold text-main-600">$1M+</div>
                  <div className="text-neutral-600 tw-text-sm fw-medium">
                    Revenue Supported while providing ongoing maintenance and technical support since 2019.
                  </div>
                </div>
              </div>
              <Link
                href={routes.bioage}
                className="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group tw-px-10 rounded-pill tw-py-505 fw-bold"
                data-block="button"
              >
                <span className="button__flair"></span>
                <span className="button__label">View Website &#8594;</span>
              </Link>
            </div>
          </div>
        </div>
      </section>
      {/* Case Study End */}

      {/* ===================== CLIENT REVIEWS ===================== */}
      <section className="py-120 bg-white position-relative z-1">
        <img
          src="/assets/images/shapes/faq-bg.png"
          alt=""
          className="position-absolute tw-start-0 top-0 w-100 h-100 z-n1"
        />
        <div className="container">
          <div className="text-center tw-mb-14">
            <span className="tw-py-1 tw-px-705 bg-neutral-100 tw-text-sm fw-medium text-capitalize rounded-pill tw-mb-3 d-inline-block">
              Trusted by Clients
            </span>
            <h2 className="splitTextStyleOne text-heading fw-bold tw-mb-3">What Our Clients Say</h2>
            <p className="text-neutral-500 fw-medium">Real Reviews from Real Clients on Different Platforms</p>
          </div>

          <div className="row gy-5 align-items-stretch">
            <div className="col-lg-4">
              <div className="wpm-review-video-card h-100 rounded-4 overflow-hidden border border-neutral-100 bg-white d-flex flex-column">
                <div className="position-relative overflow-hidden" style={{ height: 240 }}>
                  <iframe
                    width="100%"
                    height="100%"
                    src="https://www.youtube.com/embed/TxjsRFwDvbQ?si=LA4zrJXjOhfKCdMM"
                    title="Client Testimonial"
                    frameBorder={0}
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowFullScreen
                    style={{ display: "block" }}
                  ></iframe>
                </div>
                <div className="tw-p-6 text-center flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <div className="d-flex tw-gap-1 justify-content-center tw-mb-3">
                    {Array.from({ length: 5 }).map((_, i) => (
                      <span key={i} style={{ color: "#f59e0b", fontSize: 18 }}>
                        &#9733;
                      </span>
                    ))}
                  </div>
                  <p className="text-neutral-600 fw-medium tw-text-sm tw-mb-4" style={{ lineHeight: 1.7 }}>
                    &quot;Over the past five years, they have managed our complete eCommerce infrastructure — SEO,
                    payments, and 24/7 support. Their proactive approach has driven consistent growth.&quot;
                  </p>
                  <div className="d-flex align-items-center tw-gap-3">
                    <img
                      src="/assets/images/thumbs/testimonials-short-img3.png"
                      alt="Roland"
                      className="rounded-circle"
                      style={{ width: 44, height: 44, objectFit: "cover" }}
                    />
                    <div className="text-start">
                      <div className="fw-bold text-heading tw-text-sm">Roland Thomas</div>
                      <div className="text-neutral-500 tw-text-xs">CEO &amp; Founder</div>
                    </div>
                  </div>
                  <div className="tw-mt-3 tw-text-xs text-neutral-400 fw-medium text-uppercase tracking-wide">
                    &#127916; Video Testimonial · Client Review
                  </div>
                </div>
              </div>
            </div>

            <div className="col-lg-8">
              <div className="d-flex flex-column tw-gap-5 h-100">
                <div className="wpm-review-card rounded-4 tw-p-6 border border-neutral-100 bg-white d-flex tw-gap-5 align-items-start">
                  <div className="flex-shrink-0">
                    <div className="fw-black" style={{ fontSize: 22, color: "#FF3D2E", letterSpacing: -1 }}>
                      clutch
                    </div>
                    <div className="d-flex tw-gap-1 tw-mt-1">
                      {Array.from({ length: 5 }).map((_, i) => (
                        <span key={i} style={{ color: "#FF3D2E", fontSize: 15 }}>
                          &#9733;
                        </span>
                      ))}
                    </div>
                  </div>
                  <div className="flex-grow-1">
                    <p className="text-neutral-700 fw-medium tw-text-sm tw-mb-3" style={{ lineHeight: 1.7 }}>
                      &quot;Zalgo Infotech has been an outstanding partner for our WordPress and WooCommerce needs.
                      Highly professional and a reliable team.&quot;
                    </p>
                    <div className="d-flex align-items-center tw-gap-2">
                      <span
                        className="tw-w-6 tw-h-6 bg-main-50 rounded-circle d-flex align-items-center justify-content-center"
                        style={{ fontSize: 11, color: "#006d75" }}
                      >
                        &#10003;
                      </span>
                      <span className="tw-text-xs text-neutral-500 fw-semibold">Verified Review</span>
                    </div>
                  </div>
                </div>

                <div className="wpm-review-card rounded-4 tw-p-6 border border-neutral-100 bg-white d-flex tw-gap-5 align-items-start">
                  <div className="flex-shrink-0">
                    <div className="fw-black" style={{ fontSize: 18, color: "#1a73e8" }}>
                      GoodFirms
                    </div>
                    <div className="d-flex tw-gap-1 tw-mt-1">
                      {Array.from({ length: 5 }).map((_, i) => (
                        <span key={i} style={{ color: "#1a73e8", fontSize: 15 }}>
                          &#9733;
                        </span>
                      ))}
                    </div>
                  </div>
                  <div className="flex-grow-1">
                    <p className="text-neutral-700 fw-medium tw-text-sm tw-mb-3" style={{ lineHeight: 1.7 }}>
                      &quot;They deliver quality work on time and provide excellent support. Our website is in safe
                      hands with Zalgo Infotech.&quot;
                    </p>
                    <div className="d-flex align-items-center tw-gap-2">
                      <span
                        className="tw-w-6 tw-h-6 bg-main-50 rounded-circle d-flex align-items-center justify-content-center"
                        style={{ fontSize: 11, color: "#006d75" }}
                      >
                        &#10003;
                      </span>
                      <span className="tw-text-xs text-neutral-500 fw-semibold">Verified Review</span>
                    </div>
                  </div>
                </div>

                <div className="wpm-review-card rounded-4 tw-p-6 border border-neutral-100 bg-white d-flex tw-gap-5 align-items-start">
                  <div className="flex-shrink-0">
                    <div className="fw-black" style={{ fontSize: 20, color: "#14a800" }}>
                      upwork
                    </div>
                    <div className="d-flex tw-gap-1 tw-mt-1">
                      {Array.from({ length: 5 }).map((_, i) => (
                        <span key={i} style={{ color: "#14a800", fontSize: 15 }}>
                          &#9733;
                        </span>
                      ))}
                    </div>
                  </div>
                  <div className="flex-grow-1">
                    <p className="text-neutral-700 fw-medium tw-text-sm tw-mb-3" style={{ lineHeight: 1.7 }}>
                      &quot;Great experience working with Zalgo Infotech. Very skilled, responsive and always goes the
                      extra mile!&quot;
                    </p>
                    <div className="d-flex align-items-center tw-gap-2">
                      <span
                        className="tw-w-6 tw-h-6 bg-main-50 rounded-circle d-flex align-items-center justify-content-center"
                        style={{ fontSize: 11, color: "#006d75" }}
                      >
                        &#10003;
                      </span>
                      <span className="tw-text-xs text-neutral-500 fw-semibold">Verified Review</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Reviews End */}

      {/* ===================== MAINTENANCE PLANS ===================== */}
      <MaintenancePlansSection />

      {/* ===================== PORTFOLIO ===================== */}
      <section className="py-120" style={{ background: "#f7f9fc" }}>
        <div className="container">
          <div className="text-center tw-mb-14">
            <h2 className="splitTextStyleOne text-heading fw-bold tw-mb-4">Our Recent Work</h2>
          </div>
          <div className="row gy-4">
            {portfolioItems.map((item) => (
              <div className="col-lg-4 col-md-6" key={item.title}>
                <div className="wpm-portfolio-card rounded-4 overflow-hidden border border-neutral-100 bg-white h-100 d-flex flex-column">
                  <div className="overflow-hidden" style={{ height: 220 }}>
                    <img
                      src={item.image}
                      alt={item.title}
                      className="w-100 h-100 object-fit-cover"
                      style={{ transition: "transform 0.4s" }}
                    />
                  </div>
                  <div className="tw-p-6 d-flex flex-column flex-grow-1">
                    <h5 className="fw-bold text-heading tw-mb-1">{item.title}</h5>
                    <p className="text-neutral-500 tw-text-sm tw-mb-1">{item.line1}</p>
                    <p className="text-neutral-400 tw-text-sm tw-mb-4">{item.line2}</p>
                    <div className="mt-auto">
                      <Link
                        href={item.href}
                        className="d-inline-flex align-items-center tw-gap-2 text-main-600 fw-semibold hover-underline"
                      >
                        Visit Site <i className="ph-bold ph-arrow-right tw-text-sm"></i>
                      </Link>
                    </div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
      {/* Portfolio End */}

      {/* ===================== CTA / FREE AUDIT FORM ===================== */}
      <section
        className="py-120 position-relative overflow-hidden"
        style={{ background: "linear-gradient(135deg, #071414 0%, #0a2828 100%)" }}
      >
        <img
          src="/assets/images/shapes/hill-shape.png"
          alt=""
          className="position-absolute w-100 h-100 top-0 tw-start-0 z-0"
          style={{ opacity: 0.05 }}
        />
        <div className="container position-relative z-1">
          <div className="row gy-5 align-items-start">
            <div className="col-lg-5">
              <h2 className="splitTextStyleOne text-white fw-bold tw-mb-5">
                Get a Free WordPress
                <br />
                <span className="text-main-300">Website Audit</span>
              </h2>
              <p className="text-neutral-300 fw-medium tw-text-lg tw-mb-8" style={{ maxWidth: 440 }}>
                We&apos;ll review your website and identify security, performance, and maintenance opportunities to
                help your business grow.
              </p>
              <div className="d-flex flex-column tw-gap-4">
                <div className="d-flex align-items-center tw-gap-3 text-neutral-300">
                  <span className="tw-w-8 tw-h-8 bg-white-13 rounded-circle d-flex align-items-center justify-content-center">
                    &#10003;
                  </span>
                  No Obligation
                </div>
                <div className="d-flex align-items-center tw-gap-3 text-neutral-300">
                  <span className="tw-w-8 tw-h-8 bg-white-13 rounded-circle d-flex align-items-center justify-content-center">
                    &#10003;
                  </span>
                  100% Free
                </div>
                <div className="d-flex align-items-center tw-gap-3 text-neutral-300">
                  <span className="tw-w-8 tw-h-8 bg-white-13 rounded-circle d-flex align-items-center justify-content-center">
                    &#10003;
                  </span>
                  Actionable Insights
                </div>
              </div>
            </div>
            <div className="col-lg-7">
              <WordpressAuditForm />
            </div>
          </div>
        </div>
      </section>
      {/* CTA Form End */}
    </PageShell>
  );
}
