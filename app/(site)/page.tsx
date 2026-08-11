import Link from "next/link";
import PageShell from "@/components/PageShell";
import TestimonialsSection from "@/components/home/TestimonialsSection";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "IT Solutions & Web Development Company",
  description:
    "Zalgo Infotech delivers custom software, web development, AI automation and digital solutions for startups and growing businesses.",
  keywords: [
    "IT solutions company",
    "web development company",
    "custom software development",
    "AI development company",
    "ecommerce development services",
    "digital marketing agency",
    "hire developers",
    "SaaS development company",
  ],
  path: "/",
});

const portfolioSlides = [
  {
    title: "ZalgoStore ERP – All-in-One Business Management System",
    desc: "ZalgoStore ERP is a comprehensive business management system that integrates various functionalities to streamline operations and enhance productivity.",
    tech: ["NOdeJS", "ReactJS", "MongoDB", "Responsive Design", "Automation System", "Web Application"],
    href: routes.bioage,
    external: false,
    img: "/assets/images/case-study/erpsystem-thumb.jpg",
  },
  {
    title: "Zalgo Edutech LMS – Online Video Coaching & Training Platform",
    desc: "Zalgo Edutech LMS is a cutting-edge online video coaching and training platform designed to provide an immersive learning experience for students and educators alike.",
    tech: ["NOdeJS", "ReactJS", "MongoDB", "Responsive Design", "Automation System", "Web Application"],
    href: "https://lms.zalgoedutech.com/",
    external: true,
    img: "/assets/images/case-study/lms.jpg",
  },
  {
    title: "Bioage – Health & Wellness eCommerce Website",
    desc: "Bioage is a modern health and wellness eCommerce website built on WordPress using WooCommerce. The platform is designed to showcase and sell premium nutrition and supplement products with a clean, conversion-focused user experience.",
    tech: ["WordPress", "WooCommerce", "Health & Wellness", "Responsive Design", "CSS3"],
    href: routes.bioage,
    external: false,
    img: "/assets/images/thumbs/Bioage.jpg",
  },
  {
    title: "Awakening The Genius Within – Book Showcase & Wellness",
    desc: "Awakening The Genius Within is a comprehensive informational website designed to provide users with valuable insights into the world of wellness and personal development. The site features a curated collection of books, articles, and resources aimed at empowering individuals to unlock their full potential.",
    tech: ["WordPress", "Book Showcase", "JS", "CSS3", "Responsive Design"],
    href: routes.awakeningthegeniuswithin,
    external: false,
    img: "/assets/images/thumbs/Awakeningthegeniuswithin.jpg",
  },
  {
    title: "Life Tree Anatomical – Whole Body Donation & Medical Research Service Website",
    desc: "Life Tree Anatomical is a healthcare-focused service website designed to facilitate whole body donation for medical research and education. The platform provides individuals and families with a clear, respectful, and guided process for contributing to scientific advancement through anatomical donation.",
    tech: ["WordPress", "Healthcare", "UI/UX Design", "Responsive", "JS", "CSS3"],
    href: routes.bioage,
    external: false,
    img: "/assets/images/thumbs/Lifetreeanatomical.jpg",
  },
  {
    title: "Washing Center ERP – Slot Booking, Rewards & Multi-tenant SaaS",
    desc: "A SaaS ERP where washing center owners subscribe, configure working days, set time slots, and accept customer bookings online. Includes a customer reward points engine, invoice generator, and automated SMS/email notifications.",
    tech: ["React 18", "Node.js", "Multi-tenant", "Stripe", "Twilio SMS", "Prisma ORM"],
    href: routes.washingerp,
    external: false,
    img: "/assets/images/case-study/washing.jpeg",
  },
  {
    title: "Lead Management CRM – Follow-up Automation & Payment Handling",
    desc: "A full-stack Lead CRM with Kanban pipeline, status management, follow-up automation via Node-cron, Stripe payment handling, Socket.io real-time notifications, and email/SMS drip sequences.",
    tech: ["React 18", "Node.js", "Socket.io", "Node-cron", "Stripe", "Sales CRM"],
    href: routes.leadmanagement,
    external: false,
    img: "/assets/images/case-study/leadmangement.jpeg",
  },
  {
    title: "Lab Report Generation System – Automated PDF Reports & Analytics",
    desc: "A comprehensive lab management platform built on Laravel. Automates sample tracking, test result entry, and PDF report generation. Patients access their own reports online while admins manage test workflows end-to-end.",
    tech: ["Laravel 10", "MySQL", "DomPDF", "Bootstrap 5", "SMS Gateway", "Healthcare"],
    href: routes.labproject,
    external: false,
    img: "/assets/images/case-study/lab.jpg",
  },
  {
    title: "Finance Manager Training – Business Finance & Revenue Growth",
    desc: "A specialized WooCommerce-powered e-commerce platform for finance manager training. Built to deliver digital courses and resources helping businesses scale revenue through smart financial strategies.",
    tech: ["WordPress", "SEO", "Digital Marketing", "Responsive Design"],
    href: routes.financemanagertraining,
    external: false,
    img: "/assets/images/thumbs/Finance-Manager-Training.jpg",
  },
];

const brandLogos = ["RJ1.png", "njlogo1.png", "laravel.svg", "stripe.svg", "google-cloud.svg", "php.svg", "M1.png", "mysql.svg"];

export default function Home() {
  return (
    <PageShell>
      <style>{`
        .portfolio-section { background: #006d75; color: white; padding: 80px 0 60px; }
        .swiper-slide .align-content-center { align-items: stretch; }
        .portfolio-left { width: 50%; flex-shrink: 0; display: flex; flex-direction: column; align-items: flex-start; justify-content: center; padding-right: 48px; }
        .portfolio-left h2 { font-size: 28px; line-height: 1.35; font-weight: 700; margin-bottom: 14px; }
        .portfolio-left p { font-size: 15px !important; line-height: 1.75; opacity: 0.88; margin-bottom: 0; }
        .tech-icons { margin-top: 20px; display: flex; flex-wrap: wrap; gap: 8px 10px; }
        .tech-icons span { display: inline-block; background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2); padding: 7px 14px; border-radius: 50px; font-size: 13px; line-height: 1.2; white-space: nowrap; }
        .portfolio-right { width: 50%; flex-shrink: 0; }
        .portfolio-right img { width: 100%; border-radius: 20px; box-shadow: 0 20px 50px rgba(0,0,0,0.35); display: block; }
        .swiper-button-next, .swiper-button-prev { color: white; }
        @media (max-width: 1400px) {
          .portfolio-left h2 { font-size: 24px; }
          .portfolio-left { padding-right: 36px; }
        }
        @media (max-width: 1280px) {
          .portfolio-left h2 { font-size: 22px; }
          .portfolio-left { padding-right: 28px; }
          .portfolio-left p { font-size: 14px !important; }
          .tech-icons span { font-size: 12px; padding: 6px 11px; }
          .portfolio-section .swiper-slide .align-content-center { gap: 32px !important; }
        }
        @media (max-width: 1100px) {
          .portfolio-left h2 { font-size: 20px; line-height: 1.35; }
          .portfolio-left { padding-right: 20px; }
          .portfolio-left p { font-size: 13px !important; }
          .tech-icons span { font-size: 11px; padding: 5px 9px; }
          .portfolio-section .swiper-slide .align-content-center { gap: 20px !important; }
        }
        @media (max-width: 991px) {
          .portfolio-section { padding: 60px 0 50px; }
          .swiper-slide .align-content-center { flex-direction: column-reverse !important; gap: 28px !important; }
          .portfolio-left { width: 100% !important; padding-right: 0 !important; }
          .portfolio-left h2 { font-size: 22px; }
          .portfolio-right { width: 100% !important; }
        }
        @media (max-width: 575px) {
          .portfolio-section { padding: 44px 0 40px; }
          .portfolio-left h2 { font-size: 19px; line-height: 1.3; }
          .portfolio-left p { font-size: 14px !important; }
          .tech-icons span { font-size: 12px; padding: 6px 12px; }
          body .swiper-button { bottom: -10px; }
        }
      `}</style>

      {/* Top Features Section start */}
      <div className="bg-white border-top border-neutral-100 tw-py-4 common-shadow-one">
        <div className="container">
          <div className="top-features-slider overflow-hidden left-right-gradient position-relative">
            <div className="d-flex align-items-center tw-gap-4">
              <span className="text-heading fw-medium tw-text-base">⚙️End-to-End IT Services</span>
            </div>
            <div className="d-flex align-items-center tw-gap-4">
              <span className="text-heading fw-medium tw-text-base">🚀 Built for Performance &amp; Growth</span>
            </div>
            <div className="d-flex align-items-center tw-gap-4">
              <span className="text-heading fw-medium tw-text-base">🔐 Secure &amp; Reliable Technology</span>
            </div>
            <div className="d-flex align-items-center tw-gap-4">
              <span className="text-heading fw-medium tw-text-base">🎯 Solutions That Scale</span>
            </div>
            <div className="d-flex align-items-center tw-gap-4">
              <span className="text-heading fw-medium tw-text-base">🤝 Your Trusted IT Partner</span>
            </div>
            <div className="d-flex align-items-center tw-gap-4">
              <span className="text-heading fw-medium tw-text-base">🛠️ Long-Term Technical Support</span>
            </div>
          </div>
        </div>
      </div>
      {/* Top Features Section end */}

      {/* Banner Section Start */}
      <section className="banner tw-py-80-px overflow-hidden section-bg-three position-relative">
        <img
          src="/assets/images/shapes/sqaure_shape.png"
          alt="Shape"
          className="position-absolute top-0 tw-end-0 tw-me-12-percent"
        />

        <div className="container max-w-1400-px">
          <div className="row gy-4 align-items-center">
            <div className="col-lg-6">
              <div>
                <h1 className="splitTextStyleOne fw-light tw-leading-104">
                  <span className="d-inline-block">Transform </span>
                  <span className="d-inline-block fw-semibold"> Your </span>
                  <span className="d-inline-block fw-semibold">Business</span>
                  <span className="d-inline-block fw-semibold"> with AI-Powered </span>
                  <span className="d-inline-block fw-semibold"> Strategic</span>
                  <span className="d-inline-block"> IT Solutions</span>
                </h1>
                <p className="text-neutral-500 tw-text-lg max-w-500-px fw-medium tw-mt-8 splitTextStyleOne">
                  We build intelligent AI chatbots and scalable IT solutions that automate customer support, capture
                  leads 24/7, enable multilingual conversations, and help businesses scale globally.
                </p>
                <div className="tw-mt-11 d-flex align-items-center tw-gap-42-px flex-wrap">
                  <div>
                    <Link
                      href={routes.contact}
                      className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
                      data-block="button"
                    >
                      <span className="button__flair"></span>
                      <span className="button__label">Get Started</span>
                    </Link>
                  </div>
                  <div>
                    <div className="d-flex align-items-center tw-gap-4">
                      <div className="d-flex align-items-center">
                        <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative z-2">
                          <img
                            src="/assets/images/thumbs/client-img1.png"
                            alt="Client Image"
                            className="w-100 h-100 object-fit-cover"
                          />
                        </div>
                        <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px z-1">
                          <img
                            src="/assets/images/thumbs/client-img2.png"
                            alt="Client Image"
                            className="w-100 h-100 object-fit-cover"
                          />
                        </div>
                        <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px">
                          <img
                            src="/assets/images/thumbs/client-img3.png"
                            alt="Client Image"
                            className="w-100 h-100 object-fit-cover"
                          />
                        </div>
                      </div>
                      <span className="h5 counter">20+</span>
                    </div>
                    <p className="fw-bold tw-text-sm font-heading text-heading tw-mt-2 counter">150+ Success Projects</p>
                  </div>
                  <div className="d-flex align-items-cente flex-wrap row-gap-3">
                    <div className="d-flex align-items-center tw-gap-305 w-50">
                      <span className="tw-w-7 tw-h-7 btn-main rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                        <i className="text--white ph-bold ph-check"></i>
                      </span>
                      <span className="text-heading fw-semibold tw-text-base">Paid ChatGPT Integration</span>
                    </div>
                    <div className="d-flex align-items-center tw-gap-305 w-50">
                      <span className="tw-w-7 tw-h-7 btn-main rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                        <i className="text--white ph-bold ph-check"></i>
                      </span>
                      <span className="text-heading fw-semibold tw-text-base">Geo-Location</span>
                    </div>
                    <div className="d-flex align-items-center tw-gap-305 w-50">
                      <span className="tw-w-7 tw-h-7 btn-main rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                        <i className="text--white ph-bold ph-check"></i>
                      </span>
                      <span className="text-heading fw-semibold tw-text-base">Multilingual AI Chatbot</span>
                    </div>
                    <div className="d-flex align-items-center tw-gap-305 w-50">
                      <span className="tw-w-7 tw-h-7 btn-main rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                        <i className="text--white ph-bold ph-check"></i>
                      </span>
                      <span className="text-heading fw-semibold tw-text-base">Custom AI Training</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div className="col-lg-6">
              <div className="tw-ps-98-px position-relative tw-pb-8">
                <div className="position-relative z-1">
                  <img src="/assets/images/thumbs/banner-img.png" alt="" />
                </div>
                {/* Review */}
                <div className="bg-white tw-rounded-3xl tw-p-6 max-w-218-px position-absolute tw-end-0 top-0 w-100 tw--mt-8-px tw--me-8-px common-shadow-two z-1">
                  <div className="d-inline-flex align-items-center tw-gap-1 bg-green tw-py-05 tw-px-3 rounded-pill position-absolute top-0 tw-end-0 tw--mt-12-px tw--me-12-px">
                    <span className="text-white fw-bold tw-text-sm">4.9</span>
                    <span className="text-white d-flex">
                      <img src="/assets/images/icons/star.svg" alt="" />
                    </span>
                  </div>
                  <img src="/assets/images/icons/ratings.svg" alt="" />
                  <div className="tw-mt-3 d-flex align-items-center justify-content-between max-w-154-px">
                    <span className="tw-text-lg text-heading fw-semibold">Upwork</span>
                    <img src="/assets/images/icons/verified-icon.svg" alt="" />
                  </div>
                </div>
                {/* Experience */}
                <div className="bg-main-600 d-xs-none tw-p-12 tw-pe-6 d-inline-block tw-rounded-xl clip-path-one position-absolute bottom-0 tw-end-0 z-1 tw--me-70-px tw-mb-205">
                  <h2 className="text-white counter">10+</h2>
                  <span className="text-white">Years Experience</span>
                </div>
                {/* Revenue */}
                <div className="bg-white-7 tw-py-6 tw-px-7 tw-rounded-2xl border border-white bg-blur-20 position-absolute bottom-0 tw-start-0 z-1 d-flex align-items-center tw-gap-8 common-shadow-two">
                  <img
                    src="/assets/images/shapes/revenue-shape.png"
                    alt=""
                    className="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1"
                  />
                  <div>
                    <div className="tab-content" id="pills-tabContent">
                      <div
                        className="tab-pane fade show active"
                        id="pills-Daily"
                        role="tabpanel"
                        aria-labelledby="pills-Daily-tab"
                      >
                        <span className="tw-text-sm text-neutral-500 tw-mb-1 text-uppercase">Qualified</span>
                        <h5 className="tw-mb-6 counter">8–12 Leads</h5>
                      </div>
                      <div className="tab-pane fade" id="pills-Weekly" role="tabpanel" aria-labelledby="pills-Weekly-tab">
                        <span className="tw-text-sm text-neutral-500 tw-mb-1 text-uppercase">New</span>
                        <h5 className="tw-mb-6 counter">50+ Leads</h5>
                      </div>
                      <div className="tab-pane fade" id="pills-Monthly" role="tabpanel" aria-labelledby="pills-Monthly-tab">
                        <span className="tw-text-sm text-neutral-500 tw-mb-1 text-uppercase">Leads</span>
                        <h5 className="tw-mb-6 counter">200+ Captured</h5>
                      </div>
                    </div>

                    <ul className="nav nav-pills common-tab d-flex align-items-center tw-gap-205" id="pills-tab" role="tablist">
                      <li className="nav-item" role="presentation">
                        <button
                          className="nav-link bg-transparent hover--translate-y-1 tw-transition-all tw-duration-300 text-neutral-500 tw-text-sm fw-medium p-0 active"
                          id="pills-Daily-tab"
                          data-bs-toggle="pill"
                          data-bs-target="#pills-Daily"
                          type="button"
                          role="tab"
                          aria-controls="pills-Daily"
                          aria-selected="true"
                        >
                          Daily
                        </button>
                      </li>
                      <li className="nav-item" role="presentation">
                        <button
                          className="nav-link bg-transparent hover--translate-y-1 tw-transition-all tw-duration-300 text-neutral-500 tw-text-sm fw-medium p-0"
                          id="pills-Weekly-tab"
                          data-bs-toggle="pill"
                          data-bs-target="#pills-Weekly"
                          type="button"
                          role="tab"
                          aria-controls="pills-Weekly"
                          aria-selected="false"
                        >
                          Weekly
                        </button>
                      </li>
                      <li className="nav-item" role="presentation">
                        <button
                          className="nav-link bg-transparent hover--translate-y-1 tw-transition-all tw-duration-300 text-neutral-500 tw-text-sm fw-medium p-0"
                          id="pills-Monthly-tab"
                          data-bs-toggle="pill"
                          data-bs-target="#pills-Monthly"
                          type="button"
                          role="tab"
                          aria-controls="pills-Monthly"
                          aria-selected="false"
                        >
                          Monthly
                        </button>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <img src="/assets/images/thumbs/revenue-chart.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Banner Section End */}

      {/* brand slider start */}
      <div className="brand-slider-wrapper">
        <div className="brand-slider swiper">
          <div className="swiper-wrapper align-items-center">
            {brandLogos.map((logo) => (
              <div
                key={logo}
                className="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
              >
                <div className="text-center">
                  <img src={`/assets/images/thumbs/${logo}`} alt="Logo" className="w-50" />
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
      {/* brand slider end */}

      {/* About section start */}
      <section className="py-120 drag-rotate-element-section">
        <div className="container">
          <div className="tw-rounded-50-px gradient-bg-one tw-px-36-px tw-pt-9">
            <div className="row gy-4">
              <div className="col-lg-6">
                <div className="tw-pe-12 position-relative pe-sm-0">
                  <div className="row g-2">
                    <div className="col-sm-6">
                      <div className="bg-main-600 tw-rounded-3xl tw-p-8 text-center h-100 d-flex flex-column justify-content-center align-items-center">
                        <h3 className="text-white d-inline-flex align-items-center tw-gap-3 tw-mb-9">
                          <span className="d-flex case-study__slider">
                            <img src="/assets/images/icons/arrow-up.svg" alt="" />
                          </span>
                          88%
                        </h3>
                        <p className="text-white tw-text-sm">Average client retention across long-term projects</p>
                      </div>
                    </div>
                    <div className="col-sm-6">
                      <div className="bg-main-two-600 tw-rounded-3xl tw-h-300-px d-flex flex-column justify-content-center align-items-center position-relative">
                        <img
                          src="/assets/images/thumbs/model.png"
                          alt=""
                          className="position-absolute tw-start-50 bottom-0 tw-translate-x-50"
                        />
                      </div>

                      <div className="bg-white tw-rounded-lg common-shadow-one border-bottom border-3 border-main-600 tw-px-4 tw-py-2 d-flex align-items-center tw-gap-3 z-1 position-absolute top-0 tw-end-0 tw-mt-194-px">
                        <span className="bg-neutral-200 tw-w-10 tw-h-10 tw-rounded-xl d-flex justify-content-center align-items-center text-neutral-500">
                          <i className="ph-bold ph-smiley"></i>
                        </span>
                        <div>
                          <h6>99.8%</h6>
                          <p className="fw-medium tw-text-sm text-neutral-500">Client satisfaction</p>
                        </div>
                      </div>
                    </div>
                    <div className="col-sm-6">
                      <div className="bg-main-two-600 tw-rounded-3xl tw-p-8 text-center d-flex flex-column justify-content-center align-items-center tw-h-300-px">
                        <div className="circle-border d-inline-block">
                          <svg className="radial-progress" data-percentage="78" viewBox="0 0 80 80">
                            <circle className="incomplete" cx={40} cy={40} r={35}></circle>
                            <circle className="complete" cx={40} cy={40} r={35}></circle>
                            <text className="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">
                              78%
                            </text>
                          </svg>
                        </div>
                        <p className="text-white tw-text-sm tw-mt-5">
                          Projects resulting in measurable performance improvement
                        </p>
                      </div>
                    </div>
                    <div className="col-sm-6">
                      <div className="myContainer position-relative d-flex flex-column justify-content-center align-items-center h-100 tw-gap-705 overflow-hidden">
                        <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-1 fw-semibold text-white bg-main-two-600 rounded-pill">
                          Cybersecurity
                        </span>
                        <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-4 tw-py-1 fw-semibold text-white bg-pink rounded-pill">
                          Infrastructure Management
                        </span>
                        <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-1 fw-semibold text-white bg-main-600 rounded-pill">
                          Operational Excellence
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-lg-6">
                <div className="bg-white common-shadow-three pb-5 pt-5 tw-pe-6 tw-ps-56-px tw-py-6-px tw-rounded-40-px">
                  <div className="tw-mb-8">
                    <span className="tw-py-1 tw-px-705 bg-main-50 text-main-600 tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">
                      About Zalgo Infotech
                    </span>
                    <h3 className="splitTextStyleOne fw-light tw-leading-104">
                      <span className="d-inline-block fw-semibold">Driving </span>
                      <span className="d-inline-block fw-semibold">Business </span>
                      <span className="d-inline-block">Growth </span>
                      <span className="d-inline-block fw-semibold">Through </span>
                      <span className="d-inline-block">Reliable </span>
                      <span className="d-inline-block fw-semibold">IT Solutions</span>
                    </h3>
                  </div>
                  <div className="d-flex flex-column tw-gap-5">
                    <div className="d-flex align-items-start tw-gap-26-px animation-item">
                      <span className="tw-w-14 d-flex justify-content-center align-items-center">
                        <img src="/assets/images/icons/about-icon1.png" alt="" className="animate__bounce" />
                      </span>
                      <div>
                        <h6 className="tw-mb-4">Innovation at our core</h6>
                        <p className="text-neutral-500 w-100">
                          We don&rsquo;t just build websites — we craft scalable, future-ready IT solutions tailored to
                          your business goals and industry needs.
                        </p>
                      </div>
                    </div>
                    <div className="d-flex align-items-start tw-gap-26-px animation-item">
                      <span className="tw-w-14 d-flex justify-content-center align-items-center">
                        <img src="/assets/images/icons/about-icon2.png" alt="" className="animate__bounce" />
                      </span>
                      <div>
                        <h6 className="tw-mb-4">Simplifying complexity</h6>
                        <p className="text-neutral-500 w-100">
                          From development to deployment and maintenance, we manage the technical complexity so you can
                          focus on running and growing your business.
                        </p>
                      </div>
                    </div>
                    <div className="d-flex align-items-start tw-gap-26-px animation-item">
                      <span className="tw-w-14 d-flex justify-content-center align-items-center">
                        <img src="/assets/images/icons/about-icon3.png" alt="" className="animate__bounce" />
                      </span>
                      <div>
                        <h6 className="tw-mb-4">Empowering growth.</h6>
                        <p className="text-neutral-500 w-100">
                          Our solutions are designed to improve performance, enhance security, and support steady
                          business growth without unnecessary overheads.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* About section End */}

      {/* Roadmap section start */}
      <section className="py-120 section-bg-one">
        <div className="container max-w-1440-px">
          <div className="bg-main-two-600 tw-rounded-3xl overflow-hidden position-relative" id="roadmap-section">
            <div className="tw-ps-74-px tw-pe-6">
              <div className="d-flex flex-xl-nowrap flex-wrap tw-gap-126-px">
                <div className="max-w-432-px w-100 flex-shrink-0">
                  <div className="pt-120 tw-pb-9 position-relative">
                    <img
                      src="/assets/images/shapes/curve-arrow-white.png"
                      alt="Arrow"
                      className="position-absolute top-0 tw-end-0 animate__wobble__two"
                    />
                    <span className="tw-py-1 tw-px-705 bg-white-13 text-white tw-text-sm fw-semibold text-capitalize rounded-pill tw-mb-3">
                      What we do
                    </span>
                    <h3 className="splitTextStyleOne fw-light tw-leading-104 text-white tw-mb-6">
                      <span className="d-inline-block fw-semibold">Working Roadmap</span>
                    </h3>
                    <p className="splitTextStyleOne text-neutral-400 max-w-432-px">
                      A structured, transparent process that helps us deliver reliable, scalable, and
                      performance-driven IT solutions for growing businesses.
                    </p>
                    <div className="tw-mt-11 d-flex align-items-center tw-gap-42-px flex-wrap">
                      <Link
                        href={routes.contact}
                        className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-three button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
                        data-block="button"
                      >
                        <span className="button__flair"></span>
                        <span className="button__label">Get Started</span>
                      </Link>
                      <div>
                        <div className="d-flex align-items-center tw-gap-4">
                          <div className="d-flex align-items-center">
                            <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative z-2">
                              <img
                                src="/assets/images/thumbs/client-img1.png"
                                alt="Client Image"
                                className="w-100 h-100 object-fit-cover"
                              />
                            </div>
                            <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px z-1">
                              <img
                                src="/assets/images/thumbs/client-img2.png"
                                alt="Client Image"
                                className="w-100 h-100 object-fit-cover"
                              />
                            </div>
                            <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px">
                              <img
                                src="/assets/images/thumbs/client-img3.png"
                                alt="Client Image"
                                className="w-100 h-100 object-fit-cover"
                              />
                            </div>
                          </div>
                          <span className="h5 counter text-white">20+</span>
                        </div>
                        <p className="fw-bold tw-text-sm font-heading text-heading tw-mt-2 counter text-white">
                          150+ Project
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div className="flex-grow-1">
                  <div className="align-items-cente d-flex flex-wrap justify-content-center tw-gap-3">
                    {[
                      { n: "01", cls: "bg-main-600 tw-mt-705", icon: "roadmap-icon1.svg", label: "Brainstorming" },
                      { n: "02", cls: "bg-dark-deep tw--mt-8-px", icon: "roadmap-icon2.svg", label: <>UX <br /> Research</> },
                      { n: "03", cls: "bg-sky-deep tw-mt-505", icon: "roadmap-icon3.svg", label: "Product Designing" },
                      { n: "04", cls: "bg-dark-deep tw--mt-28-px", icon: "roadmap-icon4.svg", label: "Front-End Development" },
                      { n: "05", cls: "bg-dark-deep tw-mt-8", icon: "roadmap-icon5.svg", label: <>Usability <br /> Testing</> },
                      { n: "06", cls: "bg-pink tw--mt-8-px", icon: "roadmap-icon6.svg", label: "Back-End Development" },
                      { n: "07", cls: "bg-main-600 tw-mt-4", icon: "roadmap-icon7.svg", label: "SEO Optimization" },
                      { n: "08", cls: "bg-sky-deep tw--mt-28-px", icon: "roadmap-icon8.svg", label: "Digital Marketing" },
                    ].map((step) => (
                      <div
                        key={step.n}
                        className={`ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item ${step.cls}`}
                      >
                        <span className="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">
                          {step.n}
                        </span>
                        <img src={`/assets/images/icons/${step.icon}`} alt="Icon" className="animate__swing" />
                        <h6 className="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">{step.label}</h6>
                      </div>
                    ))}
                  </div>
                </div>
              </div>
            </div>
            <div className="tw-pb-9">
              <img src="/assets/images/shapes/curve-line.png" alt="" className="w-100" />
            </div>
          </div>

          {/* Global Increase Start */}
          <div className="pt-120">
            <h3 className="splitTextStyleOne fw-light tw-leading-104 tw-mb-14 text-center">
              <span className="d-inline-block">Delivering </span>
              <span className="d-inline-block fw-semibold"> Scalable IT Solutions</span>
              <span className="d-inline-block"> That Drive Growth</span>
            </h3>
            <div className="d-flex flex-wrap justify-content-center">
              <div className="tw-min-h-184-px bg-main-600 tw-py-4 tw-px-4 rounded-pill text-center max-w-388-px w-100">
                <h3 className="h1 counter text-white tw-mb-4 fw-medium">10+ Years</h3>
                <p className="text-white max-w-228-px mx-auto">Industry experience delivering IT solutions</p>
              </div>

              <div className="tw-min-h-184-px bg-main-600 tw-py-4 tw-px-4 rounded-pill max-w-514-px w-100 d-flex align-items-center tw-gap-505 justify-content-center">
                <h3 className="h1 counter text-white tw-mb-4 fw-medium d-inline-flex align-items-center tw-gap-4">
                  <img src="/assets/images/icons/arrow-up-green.svg" alt="" />
                  90%+
                </h3>
                <p className="text-white max-w-194-px">Client retention across long-term engagements</p>
              </div>

              <div className="tw-min-h-184-px bg-white tw-py-4 tw-px-4 rounded-pill max-w-388-px w-100 d-flex align-items-center tw-gap-505 justify-content-center">
                <h3 className="h1 counter text-main-600 fw-medium d-inline-flex align-items-center tw-gap-4">3×</h3>
                <div className="d-flex align-items-center tw-gap-2">
                  <p className="text-main-two-600 max-w-194-px">Project delivery with optimized workflows</p>
                </div>
              </div>

              <div className="tw-min-h-184-px bg-white tw-py-4 tw-px-4 rounded-pill max-w-490-px w-100 d-flex align-items-center tw-gap-505 justify-content-center border border-main-50">
                <h3 className="h1 counter text-main-600 fw-medium d-inline-flex align-items-center tw-gap-4">50%</h3>
                <p className="text-main-two-600 max-w-194-px">Improvement in operational efficiency</p>
              </div>

              <div className="tw-min-h-184-px bg-main-600 tw-py-4 tw-px-4 rounded-pill text-center max-w-288-px w-100 tw-mt-1 d-flex flex-column justify-content-center">
                <h3 className="h1 counter text-white fw-medium">95%</h3>
                <p className="text-white max-w-228-px mx-auto">Client satisfaction &amp; positive feedback</p>
              </div>

              <div className="tw-min-h-184-px bg-white tw-py-4 tw-px-4 rounded-pill max-w-514-px w-100 d-flex align-items-center tw-gap-505 justify-content-center border border-main-50">
                <h3 className="h1 counter text-main-600 fw-medium d-inline-flex align-items-center tw-gap-4">100%</h3>
                <div className="d-flex align-items-center tw-gap-2">
                  <p className="text-main-two-600 max-w-194-px">Transparent Process</p>
                </div>
              </div>
            </div>
          </div>
          {/* Global Increase End */}
        </div>
      </section>
      {/* Roadmap section End */}

      {/* Offer section start */}
      <section className="offer py-120 overflow-hidden">
        <div className="container">
          <div className="tw-mb-13">
            <span className="tw-py-1 tw-px-705 bg-main-50 text-main-600 tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">
              What We Offering
            </span>
            <div className="d-flex flex-lg-nowrap flex-wrap justify-content-between align-items-center">
              <div className="max-w-672-px">
                <h3 className="splitTextStyleOne tw-leading-104">
                  Provides Full-Cycle Custom IT Development Cervices.
                </h3>
              </div>
              <p className="splitTextStyleOne text-neutral-500 max-w-500-px">
                In today&apos;s competitive business, the demand for efficient and cost-effective IT solutions has
                never been more critical.
              </p>
            </div>
          </div>

          <div className="row gy-4">
            <div className="col-lg-4">
              <div className="row gy-4">
                <div className="col-lg-12 col-sm-6">
                  <div className="group-item position-relative tw-rounded-3xl overflow-hidden z-1 h-100 tw-pt-15 bg-pink-dark tw-px-40-px tw-pb-84-px tw-duration-300">
                    <span className="tw-text-base fw-semibold tw-mb-2 text-pink">Proactive IT Support</span>
                    <h4 className="splitTextStyleOne tw-mb-5 max-w-218-px">IT Management Service</h4>
                    <Link
                      href={routes.webDevelopment}
                      className="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9"
                    >
                      <i className="ph-bold ph-arrow-up-right"></i>
                    </Link>
                    <img
                      src="/assets/images/thumbs/offer-img1.png"
                      alt="Image"
                      className="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1"
                    />
                  </div>
                </div>
                <div className="col-lg-12 col-sm-6">
                  <div className="group-item position-relative tw-rounded-3xl overflow-hidden z-1 h-100 tw-pt-15 bg-pink-lighter tw-px-40-px tw-pb-136-px tw-duration-300">
                    <span className="tw-text-base fw-semibold tw-mb-2 text-pink">High-Performance Stores</span>
                    <h4 className="splitTextStyleOne fw-light tw-mb-5 max-w-330-px">
                      <span className="d-inline-block fw-semibold">E-commerce System Development</span>
                    </h4>
                    <Link
                      href={routes.ecommerceDevelopment}
                      className="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-pink-light tw-text-2xl text-white hover--translate-y-1 active--translate-y-scale-9"
                    >
                      <i className="ph-bold ph-arrow-up-right"></i>
                    </Link>
                    <img
                      src="/assets/images/thumbs/offer-img2.png"
                      alt="Image"
                      className="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1"
                    />
                  </div>
                </div>
              </div>
            </div>

            <div className="col-lg-4">
              <div className="group-item position-relative tw-rounded-3xl overflow-hidden z-1 tw-pt-15 bg-main-50 tw-px-40-px tw-pb-84-px tw-duration-300 h-100">
                <span className="text-main-600 fw-semibold tw-mb-2">Conversion-Focused Design</span>
                <h4 className="splitTextStyleOne tw-mb-5">Website Design &amp; Development</h4>
                <Link
                  href={routes.cmsDevelopment}
                  className="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle text-white tw-text-2xl bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9"
                >
                  <i className="ph-bold ph-arrow-up-right"></i>
                </Link>
                <img
                  src="/assets/images/thumbs/offer-img3.png"
                  alt="Image"
                  className="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1 tw-mx-4 tw-mb-12 d-md-block d-none"
                />
              </div>
            </div>

            <div className="col-lg-4">
              <div className="row gy-4">
                <div className="col-lg-12 col-sm-6">
                  <div className="group-item position-relative tw-rounded-3xl overflow-hidden z-1 tw-pt-15 h-100 bg-purple-light tw-px-40-px tw-pb-84-px tw-duration-300">
                    <span className="tw-text-base fw-semibold tw-mb-2 text-purple">Smart Business Automation</span>
                    <h4 className="splitTextStyleOne tw-mb-5 max-w-218-px">CRM Software Solution</h4>
                    <Link
                      href={routes.nodejsDevelopment}
                      className="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9"
                    >
                      <i className="ph-bold ph-arrow-up-right"></i>
                    </Link>
                    <img
                      src="/assets/images/thumbs/offer-img4.png"
                      alt="Image"
                      className="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1"
                    />
                  </div>
                </div>
                <div className="col-lg-12 col-sm-6">
                  <div className="group-item position-relative tw-rounded-3xl overflow-hidden z-1 tw-pt-15 h-100 bg-paste-light tw-px-40-px tw-pb-136-px tw-duration-300">
                    <span className="tw-text-base fw-semibold tw-mb-2 text-pink">AI-Powered Solutions</span>
                    <h4 className="splitTextStyleOne fw-light tw-mb-5 max-w-330-px">
                      <span className="d-inline-block fw-semibold">Intelligent AI Software Solutions</span>
                    </h4>
                    <Link
                      href={routes.aiDevelopment}
                      className="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-paste tw-text-2xl text-white hover--translate-y-1 active--translate-y-scale-9"
                    >
                      <i className="ph-bold ph-arrow-up-right"></i>
                    </Link>
                    <img
                      src="/assets/images/thumbs/offer-img5.png"
                      alt="Image"
                      className="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Offer section end */}

      {/* FAQ section start */}
      <section className="faq py-120 position-relative z-1 overflow-hidden">
        <img
          src="/assets/images/shapes/faq-bg.png"
          alt=""
          className="position-absolute tw-start-0 top-0 w-100 h-100 z-n1"
        />

        <div className="container">
          <div className="tw-mb-8">
            <span className="tw-py-1 tw-px-705 bg-white text-main-600 tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">
              Enterprise IT Services
            </span>
            <div className="d-flex flex-lg-nowrap flex-wrap justify-content-between align-items-center">
              <div className="max-w-672-px">
                <h3 className="splitTextStyleOne fw-light tw-leading-104">
                  <span className="d-inline-block">Technology </span>
                  <span className="d-inline-block fw-semibold">Solutions Built </span>
                  <span className="d-inline-block">To </span>
                  <span className="d-inline-block fw-semibold">Power </span>
                  <span className="d-inline-block fw-semibold">Modern </span>
                  <span className="d-inline-block fw-semibold">Businesses</span>
                </h3>
              </div>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://calendly.com/zalgoinfotec/30min?month=2026-02"
                className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
                data-block="button"
              >
                <span className="button__flair"></span>
                <span className="button__label">Get a Free Consultation</span>
              </a>
            </div>
          </div>

          <div className="row gy-4">
            <div className="col-lg-5">
              <p className="splitTextStyleOne text-neutral-600 max-w-500-px tw-mb-15">
                In today&rsquo;s competitive business environment, organizations need reliable, scalable, and secure
                IT solutions to streamline operations and drive sustainable growth.
              </p>
              <div className="accordion common-accordion accordion-border-left" id="accordionExample">
                <div className="accordion-item tw-py-4 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0">
                  <h5 className="accordion-header">
                    <button
                      className="accordion-button tw-pb-8 tw-pt-4 shadow-none px-0 bg-transparent h5 collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                      data-img="/assets/images/thumbs/Tailored-solution.jpg"
                    >
                      Tailored solution
                    </button>
                  </h5>
                  <div id="collapseTwo" className="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div className="accordion-body p-0">
                      <p className="text-neutral-500">
                        Custom-built IT solutions designed to match your business goals, workflows, and growth
                        roadmap.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="accordion-item tw-py-4 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0">
                  <h5 className="accordion-header">
                    <button
                      className="accordion-button tw-pb-8 tw-pt-4 shadow-none px-0 bg-transparent h5"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                      data-img="/assets/images/thumbs/faq-thumb1.png"
                    >
                      Cutting-edge technology
                    </button>
                  </h5>
                  <div id="collapseOne" className="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div className="accordion-body p-0">
                      <p className="text-neutral-500">
                        We leverage modern frameworks and proven technologies to deliver secure, scalable, and
                        high-performance solutions aligned with your business goals.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="accordion-item tw-py-4 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0">
                  <h5 className="accordion-header">
                    <button
                      className="accordion-button tw-pb-8 tw-pt-4 shadow-none px-0 bg-transparent h5 collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                      data-img="/assets/images/thumbs/faq-thumb3.png"
                    >
                      Discovery &amp; Analysis
                    </button>
                  </h5>
                  <div id="collapseThree" className="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div className="accordion-body p-0">
                      <p className="text-neutral-500">
                        We analyze your business requirements, workflows, and technical challenges to design
                        solutions that deliver measurable results.
                      </p>
                    </div>
                  </div>
                </div>
                <div className="accordion-item tw-py-4 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0">
                  <h5 className="accordion-header">
                    <button
                      className="accordion-button tw-pb-8 tw-pt-4 shadow-none px-0 bg-transparent h5 collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseFour"
                      aria-expanded="false"
                      aria-controls="collapseFour"
                      data-img="/assets/images/thumbs/faq-thumb4.png"
                    >
                      Deployment &amp; Support
                    </button>
                  </h5>
                  <div id="collapseFour" className="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div className="accordion-body p-0">
                      <p className="text-neutral-500">
                        From smooth deployment to continuous monitoring and support, we ensure your systems remain
                        reliable, optimized, and future-ready.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-lg-7">
              <div className="position-relative tw-pb-8 tw-ps-12 h-100">
                <div className="bg-white tw-p-205 tw-rounded-3xl h-100 tw-min-h-400-px">
                  <img
                    src="/assets/images/thumbs/faq-thumb1.png"
                    id="faqImage"
                    alt="Image"
                    className="w-100 h-100 object-fit-cover tw-rounded-2xl tw-duration-300"
                  />
                </div>
                <img
                  src="/assets/images/thumbs/faq-img-1.png"
                  alt=""
                  className="position-absolute top-0 tw-end-0 tw-mt-9 tw--me-48-px"
                />
                <img
                  src="/assets/images/thumbs/faq-img-2.png"
                  alt=""
                  className="position-absolute bottom-0 tw-end-0 tw--me-32-px"
                />
                <img
                  src="/assets/images/thumbs/faq-img-3.png"
                  alt=""
                  className="bottom-0 position-absolute rounded-3 tw--ms-24-px tw-start-0"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* FAQ section end */}

      {/* Choose Us section start */}
      <section className="py-120 overflow-hidden">
        <div className="container">
          <div className="row gy-4 gx-5">
            <div className="col-lg-5 d-sm-block d-none">
              <div className="tw-ps-8 position-relative z-1 overflow-hidden" id="box-wrapper">
                <img
                  src="/assets/images/thumbs/choose-us-img.png"
                  alt="Image"
                  className="w-100 h-100 object-fit-cover tw-rounded-3xl"
                />
                <div className="bg-white max-w-150-px tw-h-150-px w-100 d-flex justify-content-center align-items-center tw-rounded-xl common-shadow-four box position-absolute tw-start-0 top-0 tw-mt-705 z-1">
                  <img src="/assets/images/thumbs/choose-us-icon1.png" alt="" />
                </div>
                <div className="bg-white max-w-150-px tw-h-150-px w-100 d-flex justify-content-center align-items-center tw-rounded-xl common-shadow-four box position-absolute tw-end-0 top-0 tw-mt-705 z-1 tw-me-14">
                  <img src="/assets/images/thumbs/choose-us-icon2.png" alt="" />
                </div>
                <div className="bg-white max-w-150-px tw-h-150-px w-100 d-flex justify-content-center align-items-center tw-rounded-xl common-shadow-four box position-absolute tw-start-0 top-0 z-1 tw-mt-194-px tw-ms-148-px">
                  <img src="/assets/images/thumbs/choose-us-icon3.png" alt="" />
                </div>
                <div className="bg-white max-w-150-px tw-h-150-px w-100 d-flex justify-content-center align-items-center tw-rounded-xl common-shadow-four box position-absolute tw-end-0 bottom-0 tw-me-90-px z-1 tw-mb-148-px">
                  <img src="/assets/images/thumbs/choose-us-icon4.png" alt="" />
                </div>
              </div>
            </div>
            <div className="col-lg-7">
              <div>
                <span className="tw-py-1 tw-px-705 bg-main-600 text-white tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">
                  Why Choose Us
                </span>
                <div className="max-w-672-px">
                  <h3 className="fw-light tw-leading-104 cursor-big tw-mb-9 d-flex gap-2">
                    <span className="splitTextStyleOne d-inline-block fw-medium">
                      <span className="fw-semibold">Zalgo Infotech</span> helps businesses scale smarter with reliable
                      IT solutions.
                    </span>
                  </h3>
                  <p className="splitTextStyleOne text-neutral-600 max-w-500-px">
                    In today&rsquo;s competitive business landscape, we deliver cost-effective, scalable, and
                    results-driven technology solutions that fuel long-term growth.
                  </p>
                </div>

                <div className="tw-mt-10">
                  <div className="row gy-4 flex-sm-row-reverse">
                    <div className="col-md-6 col-sm-12">
                      <div className="bg-neutral-50 tw-ps-705 tw-pe-4 tw-py-9 border border-neutral-50 hover-border-main-600 tw-rounded-lg tw-duration-300">
                        <h6 className="tw-mb-2">Expertise &amp; Specialization</h6>
                        <p className="text-neutral-500">
                          Our team brings deep expertise across modern web technologies, delivering high-quality,
                          secure, and performance-driven solutions.
                        </p>
                      </div>
                    </div>
                    <div className="col-md-6 col-sm-12">
                      <div className="bg-neutral-50 tw-ps-705 tw-pe-4 tw-py-9 border border-neutral-50 hover-border-main-600 tw-rounded-lg tw-duration-300">
                        <h6 className="tw-mb-2">Tailored Solutions</h6>
                        <p className="text-neutral-500">
                          We craft customized IT solutions aligned with your business goals, workflows, and
                          scalability needs—never one-size-fits-all.
                        </p>
                      </div>
                    </div>
                    <div className="col-12">
                      <div className="d-flex align-items-center tw-gap-505 tw-mt-8">
                        <h3 className="h1 text-main-600 d-inline-flex align-items-center tw-gap-4">1.3M+</h3>
                        <p className="text-main-two-600 fw-medium max-w-250-px">
                          Average revenue growth delivered to our successful clients through technology-driven
                          solutions.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Choose Us section end */}

      {/* Portfolio (case-study) slider */}
      <section className="portfolio-section">
        <div className="swiper portfolioSwiper">
          <div className="swiper-wrapper">
            {portfolioSlides.map((slide) => (
              <div className="swiper-slide" key={slide.title}>
                <div className="container">
                  <div className="row">
                    <div className="d-flex case-study__slider">
                      <div className="portfolio-left">
                        <h2>{slide.title}</h2>
                        <p>{slide.desc}</p>
                        <div className="tech-icons">
                          {slide.tech.map((t) => (
                            <span key={t}>{t}</span>
                          ))}
                        </div>
                        {slide.external ? (
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href={slide.href}
                            className="mt-4 hover--translate-y-1 active--translate-y-scale-9 btn hover-style-three hover-style-two button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-4"
                            data-block="button"
                          >
                            <span className="button__flair"></span>
                            <span className="button__label">View More</span>
                          </a>
                        ) : (
                          <Link
                            href={slide.href}
                            className="mt-4 hover--translate-y-1 active--translate-y-scale-9 btn hover-style-three hover-style-two button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-4"
                            data-block="button"
                          >
                            <span className="button__flair"></span>
                            <span className="button__label">View More</span>
                          </Link>
                        )}
                      </div>
                      <div className="portfolio-right">
                        <img src={slide.img} alt={slide.title} />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            ))}
          </div>
          <div className="container swiper-button overflow-visible position-relative">
            <div className="swiper-button-next"></div>
            <div className="swiper-button-prev"></div>
          </div>
        </div>
      </section>

      {/* Testimonials section start */}
      <TestimonialsSection />
      {/* Testimonials section End */}

      <div className="position-relative z-1">
        <img
          src="/assets/images/shapes/shape-image.png"
          alt="Shape"
          className="position-absolute w-100 tw-start-0 bottom-0 z-n1"
        />
        {/* Blog section start */}
        <section className="blog">
          <div className="container">
            <div className="bg-white common-shadow-five py-120 tw-px-90-px">
              <span className="line w-0 tw-h-2 bg-main-600 tw-mb-4"></span>
              <div className="d-flex align-items-center justify-content-between tw-mb-12">
                <h6>Scaling Brands with Smart Digital Solutions</h6>
                <Link
                  href={routes.blog}
                  className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-4"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">View All Blogs</span>
                </Link>
              </div>

              <div className="row gy-4">
                <div className="col-sm-6">
                  <div className="group-item">
                    <Link href={routes.bioage} className="w-100 h-100 overflow-hidden">
                      <img
                        src="/assets/images/case-study/bioage-case-study.png"
                        alt="Blog Image"
                        className="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300"
                      />
                    </Link>
                    <div className="tw-mt-7 d-flex align-items-center tw-gap-5 flex-wrap">
                      <span className="text-heading fw-medium tw-py-05 tw-px-405 border border-neutral-400 rounded-pill tw-text-base">
                        E-commerce
                      </span>
                      <span className="text-heading fw-medium tw-text-base">6+ Years Engagement</span>
                    </div>
                    <h5 className="tw-mt-4">
                      <Link href={routes.bioage} className="hover-text-main-600 line-clamp-1 tw-mb-3 hover--translate-y-1">
                        BIOAGE — Scaling a 7-Figure E-commerce Brand
                      </Link>
                    </h5>
                    <Link href={routes.bioage} className="text-main-600 fw-medium tw-text-lg hover--translate-y-1">
                      Learn More
                      <span className="d-inline-flex tw-text-sm">
                        <i className="ph-bold ph-arrow-up-right"></i>
                      </span>
                    </Link>
                  </div>
                </div>
                <div className="col-sm-6">
                  <div className="group-item">
                    <Link href={routes.experthe} className="w-100 h-100 overflow-hidden">
                      <img
                        src="/assets/images/case-study/finance-case-study.png"
                        alt="Blog Image"
                        className="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300"
                      />
                    </Link>
                    <div className="tw-mt-7 d-flex align-items-center tw-gap-5 flex-wrap">
                      <span className="text-heading fw-medium tw-py-05 tw-px-405 border border-neutral-400 rounded-pill tw-text-base">
                        E-commerce
                      </span>
                      <span className="text-heading fw-medium tw-text-base">4+ Years Engagement</span>
                    </div>
                    <h5 className="tw-mt-4">
                      <Link
                        href={routes.experthe}
                        className="hover-text-main-600 line-clamp-1 tw-mb-3 hover--translate-y-1"
                      >
                        Expert Heavy Equipment — Website Redesign &amp; Security Enhancement
                      </Link>
                    </h5>
                    <Link href={routes.experthe} className="text-main-600 fw-medium tw-text-lg hover--translate-y-1">
                      Learn More
                      <span className="d-inline-flex tw-text-sm">
                        <i className="ph-bold ph-arrow-up-right"></i>
                      </span>
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        {/* Blog section End */}

        {/* Cta section start */}
        <section className="cta py-md-0 py-5">
          <div className="container">
            <div className="row gy-4 align-items-center">
              <div className="col-md-6 d-md-block d-none">
                <div className="pe-lg-2">
                  <div className="position-relative">
                    <img src="/assets/images/thumbs/model-img.png" alt="Model" />
                    <img
                      src="/assets/images/shapes/arrow-right-curve.png"
                      alt="Arrow shape"
                      className="position-absolute top-0 tw-end-0 tw-mt-160-px animate__wobble__two"
                    />
                  </div>
                </div>
              </div>
              <div className="col-md-6">
                <div className="ps-lg-4 max-w-532-px">
                  <span className="tw-py-1 tw-px-705 bg-main-600 text-white tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">
                    Have a Project?
                  </span>
                  <h3 className="splitTextStyleOne fw-light tw-leading-104 tw-mb-5 d-flex gap-2">
                    <span className="d-inline-block fw-semibold">
                      <span className="fw-normal">Let&rsquo;s </span>
                      Turn Your Idea Into a Scalable
                      <span className="fw-normal"> Digital Solution</span>
                    </span>
                  </h3>
                  <p className="text-neutral-600 tw-text-lg splitTextStyleOne">
                    Talk to our experts and get clear guidance, realistic timelines, and a solution tailored to your
                    business goals.
                  </p>
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-0 tw-py-5 w-100 tw-mt-10"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">Speak With Our Experts</span>
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </section>
        {/* Cta section End */}
      </div>
    </PageShell>
  );
}
