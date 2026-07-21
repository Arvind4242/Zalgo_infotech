"use client";

import { useState } from "react";
import Link from "next/link";
import { routes } from "@/lib/routes";

type Category =
  | "all"
  | "laravel"
  | "wordpress"
  | "woocommerce"
  | "nodejs"
  | "reactjs"
  | "digital-marketing";

type CaseStudy = {
  href: string;
  image: string;
  alt: string;
  categories: Category[];
  metaIcons: { icon: string; label: string }[];
  title: string;
  subtitle: string;
  desc: string;
  tech: string[];
};

const filters: { key: Category; label: string }[] = [
  { key: "all", label: "All Projects" },
  { key: "laravel", label: "Laravel" },
  { key: "wordpress", label: "WordPress" },
  { key: "woocommerce", label: "WooCommerce" },
  { key: "nodejs", label: "Node.js" },
  { key: "reactjs", label: "React.js" },
  { key: "digital-marketing", label: "Digital Marketing" },
];

const caseStudies: CaseStudy[] = [
  {
    href: routes.erpsystem,
    image: "/assets/images/case-study/erpsystem-thumb.jpg",
    alt: "ERP System",
    categories: ["nodejs", "reactjs"],
    metaIcons: [
      { icon: "ph-atom", label: "React + Node.js" },
      { icon: "ph-buildings", label: "Education Tech" },
      { icon: "ph-clock", label: "Ongoing" },
    ],
    title: "Institute Management ERP — React + Node.js Monorepo",
    subtitle: "✓ Full-Stack Monorepo SaaS ERP",
    desc: "A comprehensive Institute Management ERP built as a monorepo with React 18 + Vite frontend and Node.js + Express backend. Manages students, staff, attendance, fees, exams, and timetables — all in one blazing-fast SPA.",
    tech: ["React 18", "Vite", "Node.js", "Prisma ORM", "JWT Auth", "Tailwind CSS", "Monorepo"],
  },
  {
    href: routes.lms,
    image: "/assets/images/case-study/lms.jpg",
    alt: "LMS",
    categories: ["nodejs", "reactjs"],
    metaIcons: [
      { icon: "ph-atom", label: "React + Node.js" },
      { icon: "ph-graduation-cap", label: "E-Learning" },
      { icon: "ph-clock", label: "Ongoing" },
    ],
    title: "Learning Management System — React + Node.js Monorepo",
    subtitle: "✓ Full-Stack Monorepo E-Learning SaaS",
    desc: "A complete LMS built as a monorepo with React 18 + Vite and Node.js. Delivers video lessons, quizzes, auto-grading, certificate generation, and payment-gated course enrollment for 2,500+ learners.",
    tech: ["React 18", "Vite", "Node.js", "Prisma ORM", "Stripe", "Puppeteer PDF", "Monorepo"],
  },
  {
    href: routes.leadmanagement,
    image: "/assets/images/case-study/leadmangement.jpeg",
    alt: "Lead Management",
    categories: ["nodejs", "reactjs"],
    metaIcons: [
      { icon: "ph-atom", label: "React + Node.js" },
      { icon: "ph-funnel", label: "Sales CRM" },
      { icon: "ph-clock", label: "Ongoing" },
    ],
    title: "Lead Management CRM — Follow-up Automation & Payment Handling",
    subtitle: "✓ React + Node.js CRM with Automation Engine",
    desc: "A full-stack Lead CRM with Kanban pipeline, status management, follow-up automation via Node-cron, Stripe payment handling, Socket.io real-time notifications, and email/SMS drip sequences.",
    tech: ["React 18", "Vite", "Node.js", "Socket.io", "Node-cron", "Nodemailer", "Stripe"],
  },
  {
    href: routes.washingerp,
    image: "/assets/images/case-study/washing.jpeg",
    alt: "Washing ERP",
    categories: ["nodejs", "reactjs"],
    metaIcons: [
      { icon: "ph-atom", label: "React + Node.js" },
      { icon: "ph-car", label: "Vehicle Washing SaaS" },
      { icon: "ph-clock", label: "Ongoing" },
    ],
    title: "Washing Center ERP — Slot Booking, Rewards & Multi-tenant SaaS",
    subtitle: "✓ Multi-tenant SaaS ERP for Vehicle Washing Centers",
    desc: "A SaaS ERP where washing center owners subscribe, configure working days, set time slots, and accept customer bookings online. Includes a customer reward points engine, invoice generator, and automated SMS/email notifications.",
    tech: ["React 18", "Vite", "Node.js", "Multi-tenant", "Stripe", "Twilio SMS", "Prisma ORM"],
  },
  {
    href: routes.labproject,
    image: "/assets/images/case-study/lab.jpeg",
    alt: "Lab Report System",
    categories: ["laravel"],
    metaIcons: [
      { icon: "ph-code", label: "Laravel PHP" },
      { icon: "ph-flask", label: "Healthcare / Lab" },
      { icon: "ph-clock", label: "Ongoing" },
    ],
    title: "Lab Report Generation System — Automated PDF Reports & Analytics",
    subtitle: "✓ Laravel-based Lab Management & Report Platform",
    desc: "A comprehensive lab management platform built on Laravel. Automates sample tracking, test result entry, and PDF report generation. Patients access their own reports online while admins manage test workflows end-to-end.",
    tech: ["Laravel 10", "MySQL", "DomPDF", "Spatie Permissions", "Bootstrap 5", "SMS Gateway"],
  },
  {
    href: routes.bioage,
    image: "/assets/images/case-study/bioage-case-study.png",
    alt: "BioAge",
    categories: ["wordpress", "woocommerce", "digital-marketing"],
    metaIcons: [
      { icon: "ph-user", label: "Roland Thomas" },
      { icon: "ph-bold ph-shopping-bag", label: "E-commerce" },
      { icon: "ph-clock", label: "6+ Years" },
    ],
    title: "BIOAGE — Scaling a 7-Figure E-commerce Brand",
    subtitle: "✓ Long-Term Strategic Tech Partner",
    desc: "BIOAGE is a high-performing e-commerce brand generating 7-figure monthly revenue. For over 6 years, we have managed end-to-end technology, performance optimization, security, and continuous platform growth.",
    tech: ["WordPress", "WooCommerce", "SiteGround", "Sucuri", "Payment Gateways"],
  },
  {
    href: routes.experthe,
    image: "/assets/images/case-study/experthe-case-study.png",
    alt: "Experthe",
    categories: ["wordpress", "woocommerce"],
    metaIcons: [
      { icon: "ph-user", label: "Milissa" },
      { icon: "ph-bold ph-shopping-bag", label: "E-commerce" },
      { icon: "ph-clock", label: "4+ Years" },
    ],
    title: "Expert Heavy Equipment – Website Redesign & Security Enhancement",
    subtitle: "✓ Security & Performance Overhaul",
    desc: "Expert Heavy Equipment is a trusted business in the heavy equipment industry. The client needed a strong, secure online presence to represent their brand and support long-term growth with integrated communication tools.",
    tech: ["WordPress", "WooCommerce", "Twilio", "Wordfence"],
  },
  {
    href: routes.awakeningthegeniuswithin,
    image: "/assets/images/thumbs/Awakeningthegeniuswithin.jpg",
    alt: "Awakening The Genius Within",
    categories: ["wordpress", "woocommerce"],
    metaIcons: [
      { icon: "ph-book-open", label: "WordPress" },
      { icon: "ph-heart", label: "Wellness" },
      { icon: "ph-clock", label: "Ongoing" },
    ],
    title: "Awakening The Genius Within – Book Showcase & Wellness Platform",
    subtitle: "✓ Wellness & Personal Development Website",
    desc: "A comprehensive informational website built on WordPress to showcase wellness and personal development resources — books, articles, and curated content empowering individuals to unlock their full potential.",
    tech: ["WordPress", "WooCommerce", "CSS3", "JavaScript", "Responsive Design", "SEO"],
  },
  {
    href: routes.dobramoc,
    image: "/assets/images/thumbs/Dobramoc.jpg",
    alt: "Dobramoc",
    categories: ["wordpress", "woocommerce"],
    metaIcons: [
      { icon: "ph-storefront", label: "WordPress" },
      { icon: "ph-bold ph-shopping-bag", label: "E-commerce" },
      { icon: "ph-clock", label: "Ongoing" },
    ],
    title: "Dobramoc – E-commerce Website Design & Development",
    subtitle: "✓ WooCommerce Store with Performance Optimization",
    desc: "A WooCommerce-powered e-commerce platform delivering a seamless online shopping experience with optimized performance, secure payment integration, and a conversion-focused product catalog.",
    tech: ["WordPress", "WooCommerce", "E-commerce", "Payment Gateway", "SEO", "Responsive Design"],
  },
  {
    href: routes.financemanagertraining,
    image: "/assets/images/thumbs/Finance-Manager-Training.jpg",
    alt: "Finance Manager Training",
    categories: ["wordpress", "woocommerce"],
    metaIcons: [
      { icon: "ph-chart-line-up", label: "WordPress" },
      { icon: "ph-graduation-cap", label: "Finance Training" },
      { icon: "ph-clock", label: "Ongoing" },
    ],
    title: "Finance Manager Training – Business Finance & Revenue Growth",
    subtitle: "✓ WooCommerce E-learning Platform for Finance Professionals",
    desc: "A WooCommerce-powered training platform delivering structured finance courses and revenue-growth strategies to business managers, scaled to $1M+ monthly revenue through targeted digital marketing.",
    tech: ["WordPress", "WooCommerce", "SEO", "Digital Marketing", "Responsive Design", "Payment Gateway"],
  },
  {
    href: routes.lifetreeanatomical,
    image: "/assets/images/thumbs/Lifetreeanatomical.jpg",
    alt: "Life Tree Anatomical",
    categories: ["wordpress"],
    metaIcons: [
      { icon: "ph-first-aid", label: "WordPress" },
      { icon: "ph-heartbeat", label: "Healthcare" },
      { icon: "ph-clock", label: "Ongoing" },
    ],
    title: "Life Tree Anatomical – Whole Body Donation & Medical Research Service",
    subtitle: "✓ Healthcare-Focused Service Website",
    desc: "A healthcare-focused service website facilitating whole body donation for medical research and education. Provides individuals and families a clear, respectful, and guided anatomical donation process.",
    tech: ["WordPress", "Healthcare", "UI/UX Design", "JavaScript", "CSS3", "Responsive Design"],
  },
  {
    href: routes.towelsoutlet,
    image: "/assets/images/thumbs/towelsoutlet.jpg",
    alt: "Towels Outlet",
    categories: ["wordpress", "woocommerce"],
    metaIcons: [
      { icon: "ph-storefront", label: "WordPress" },
      { icon: "ph-bold ph-shopping-bag", label: "E-commerce" },
      { icon: "ph-clock", label: "Ongoing" },
    ],
    title: "Towels Outlet – Premium Textile E-commerce Store",
    subtitle: "✓ WooCommerce Store with Conversion-Focused Design",
    desc: "A WooCommerce-based online store for premium towels and textiles, built with a clean, conversion-focused design to drive online sales, enhance customer experience, and integrate seamless payment processing.",
    tech: ["WordPress", "WooCommerce", "E-commerce", "SEO", "Payment Gateway", "Responsive Design"],
  },
  {
    href: routes.leatherstitch,
    image: "/assets/images/thumbs/cart-img1.png",
    alt: "Leather Stitch",
    categories: ["nodejs", "reactjs", "digital-marketing"],
    metaIcons: [
      { icon: "ph-shopping-cart", label: "E-commerce" },
      { icon: "ph-code", label: "Next.js + Node.js" },
      { icon: "ph-clock", label: "In Progress" },
    ],
    title: "Leather Stitch — E-commerce Website & Digital Marketing",
    subtitle: "✓ Next.js + Node.js E-commerce Store for Leather Shoes",
    desc: "Building leatherstitch.in, a Next.js & Node.js e-commerce store for leather shoes, while running digital marketing and social media handling alongside development.",
    tech: ["Next.js", "Node.js", "Neon (PostgreSQL)", "E-commerce"],
  },
  {
    href: routes.kalpmantra,
    image: "/assets/images/thumbs/brand-marketing-img.png",
    alt: "Kalpmantra",
    categories: ["digital-marketing"],
    metaIcons: [
      { icon: "ph-globe", label: "Website + SEO" },
      { icon: "ph-megaphone", label: "Meta Ads" },
      { icon: "ph-clock", label: "Ongoing" },
    ],
    title: "Kalpmantra — Website, SEO & Meta Ads Growth",
    subtitle: "✓ Full-Service Digital Marketing Partner",
    desc: "Built Kalpmantra's website from scratch and grew its online presence through on-page & technical SEO, Meta Ads (Facebook & Instagram) campaigns, and ongoing social media management.",
    tech: ["Website Development", "SEO", "Meta Ads", "Social Media Marketing", "Analytics & Reporting"],
  },
  {
    href: routes.shriramexpressnews,
    image: "/assets/images/thumbs/blog-page-img1.png",
    alt: "Shri Ram Express News",
    categories: ["nodejs", "reactjs", "digital-marketing"],
    metaIcons: [
      { icon: "ph-newspaper", label: "News & Media" },
      { icon: "ph-code", label: "Next.js + Node.js" },
      { icon: "ph-clock", label: "In Progress" },
    ],
    title: "Shri Ram Express News — Website & Social Media Management",
    subtitle: "✓ News Agency Digital Presence",
    desc: "Actively managing social media for shriramexpressnewsgwl, a news agency, while building their dedicated news website — keeping their audience engaged with consistent content in the meantime.",
    tech: ["Next.js", "Node.js", "Neon (PostgreSQL)"],
  },
];

export default function CaseStudyIndex() {
  const [active, setActive] = useState<Category>("all");

  const visibleFilters = filters.filter(
    (f) => f.key === "all" || caseStudies.some((cs) => cs.categories.includes(f.key))
  );
  const visibleCards =
    active === "all" ? caseStudies : caseStudies.filter((cs) => cs.categories.includes(active));

  return (
    <>
      <style>{`
        .cs-filter-wrap { display: flex; gap: 10px; justify-content: center; flex-wrap: wrap; }
        .cs-filter-btn { background: #fff; border: 2px solid #e5e7eb; font-size: 14px; cursor: pointer; padding: 10px 22px; color: #006d75; font-weight: 600; border-radius: 50px; transition: all 0.2s; white-space: nowrap; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
        .cs-filter-btn:hover { border-color: #006d75; background: #006d75; color: #fff; }
        .cs-filter-btn.active { background: #006d75 !important; border-color: #006d75 !important; color: #fff !important; }
        .cs-tech-tag { display: inline-block; background: hsl(var(--main-h),var(--main-s),95%); color: hsl(var(--main)); font-size: 0.72rem; font-weight: 600; padding: 3px 10px; border-radius: 20px; }
        .case-study-item-left { height: 380px; overflow: hidden; }
        .case-study-item-left img { width: 100%; height: 100%; object-fit: cover; }
      `}</style>

      {/* Breadcrumb */}
      <section className="pt-120 pb-120 section-bg-two mb-0">
        <div className="container">
          <div className="row justify-content-center">
            <div className="col-lg-8 text-center">
              <span className="tw-mb-4">
                <img src="/assets/images/logo/favicon-two.png" alt="Favicon Two" />
              </span>
              <h1 className="mb-0 splitTextStyleOne text-capitalize">Case Studies</h1>
              <p className="text-body mt-3 mx-auto" style={{ maxWidth: 520 }}>
                Real projects. Real results. Explore how we build SaaS platforms, ERP systems, and web applications
                for clients worldwide.
              </p>
            </div>
          </div>
        </div>
      </section>

      <div className="pt-120 pb-120">
        {/* Filter Buttons */}
        <div className="container">
          <div className="cs-filter-wrap">
            {visibleFilters.map((f) => (
              <button
                key={f.key}
                type="button"
                className={`cs-filter-btn${active === f.key ? " active" : ""}`}
                onClick={() => setActive(f.key)}
              >
                {f.label}
              </button>
            ))}
          </div>
        </div>

        {/* Card Grid */}
        <div className="pt-60 pb-0">
          <div className="container">
            <div className="row gy-5">
              {visibleCards.map((cs) => (
                <div className="col-lg-6" key={cs.href}>
                  <div className="d-flex gap-5 case-study-item flex-column">
                    <div className="position-relative case-study-item-left">
                      <Link href={cs.href} className="w-100 h-100 overflow-hidden tw-rounded-3xl d-block">
                        <img
                          src={cs.image}
                          className="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                          alt={cs.alt}
                        />
                      </Link>
                    </div>
                    <div className="bg-white p-5 rounded-5 shadow-lg case-study-item-right">
                      <div className="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                        {cs.metaIcons.map((m, i) => (
                          <div className="d-flex align-items-center tw-gap-2" key={i}>
                            {i !== 0 && <span className="tw-w-205 border border-neutral-200"></span>}
                            <span className="text-main-600 tw-text-lg">
                              <i className={`ph ${m.icon}`}></i>
                            </span>
                            <span className="text-neutral-600 tw-text-lg">{m.label}</span>
                          </div>
                        ))}
                      </div>
                      <h4 className="tw-mb-4">
                        <Link href={cs.href} className="splitTextStyleOne">
                          {cs.title}
                        </Link>
                      </h4>
                      <h6 className="pb-2">{cs.subtitle}</h6>
                      <p className="tw-text-sm pb-3 text-neutral-600 max-w-730-px splitTextStyleOne">{cs.desc}</p>
                      <h4 className="pb-2">Tech Stack:</h4>
                      <div className="d-flex flex-wrap gap-2 pb-3">
                        {cs.tech.map((t) => (
                          <span className="cs-tech-tag" key={t}>
                            {t}
                          </span>
                        ))}
                      </div>
                      <Link
                        href={cs.href}
                        className="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider"
                      >
                        View Case Study
                        <span>
                          <img src="/assets/images/icons/arrow-long.svg" alt="arrow" />
                        </span>
                      </Link>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </>
  );
}
