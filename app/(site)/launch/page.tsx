import Link from "next/link";
import PageShell from "@/components/PageShell";
import PlanInquiryButton from "@/components/PlanInquiryButton";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Launch Your Business Website in 2 Days - Affordable Plans",
  description:
    "Get a professional website live in 2 days or an online store in 24 hours — built on Node.js + Next.js, with hosting, support and maintenance included in one simple monthly plan.",
  keywords: [
    "affordable website development",
    "website in 2 days",
    "e-commerce store launch",
    "small business website plan",
    "Node.js Next.js website",
    "monthly website plan",
  ],
  path: "/launch",
});

const heroTrustBadges = [
  { icon: "ph-lightning", label: "Fast Delivery" },
  { icon: "ph-code", label: "Modern Technology" },
  { icon: "ph-headset", label: "Expert Support" },
  { icon: "ph-tag", label: "Affordable Plans" },
];

const lostWithoutWebsite = [
  "Customer trust",
  "Professional credibility",
  "Direct enquiries",
  "Online sales opportunities",
  "Control over your digital presence",
];

const dependOnPlatforms = ["Instagram", "Facebook", "WhatsApp", "Marketplace platforms", "Word of mouth"];

const solutionSteps = [
  { icon: "ph-cursor-click", title: "Choose your plan" },
  { icon: "ph-info", title: "Share your business information" },
  { icon: "ph-code", title: "Our team builds your website" },
  { icon: "ph-eye", title: "Review it" },
  { icon: "ph-rocket-launch", title: "Launch it" },
];

const businessFeatures = [
  "5 Professional Pages",
  "Home Page",
  "About Page",
  "Services Page",
  "Contact Page",
  "Testimonials / Additional Page",
  "Mobile Responsive Design",
  "WhatsApp Integration",
  "Contact/Enquiry Form",
  "Hosting",
  "Basic Maintenance",
  "Technical Support",
  "Modern Node.js + Next.js Technology",
  "AI-Assisted Development",
  "2-Day Delivery",
];

const ecommerceFeatures = [
  "Up to 5 Products",
  "Home Page",
  "Product Pages",
  "Product Categories",
  "Category Filters",
  "Shopping Cart",
  "Checkout",
  "Customer Account",
  "Order History",
  "Payment Gateway Integration",
  "Email Automation",
  "WhatsApp Integration",
  "Hosting",
  "Basic Maintenance",
  "Technical Support",
  "Mobile Responsive Design",
  "Modern Node.js + Next.js Technology",
  "AI-Assisted Development",
  "24-Hour Launch",
];

const techHighlights = [
  { icon: "ph-lightning", label: "Fast performance" },
  { icon: "ph-device-mobile", label: "Responsive experiences" },
  { icon: "ph-lock-key", label: "Modern web architecture" },
  { icon: "ph-trend-up", label: "Future scalability" },
  { icon: "ph-rocket-launch", label: "Better user experience" },
];

const howItWorksSteps = [
  { num: "01", title: "Choose Your Plan", text: "Select Business Website or E-Commerce Store." },
  { num: "02", title: "Share Your Details", text: "Send us your logo, business information, images, content and product details." },
  { num: "03", title: "We Build", text: "Our team develops your website using our streamlined AI-assisted development process." },
  { num: "04", title: "Review & Launch", text: "We test the website, make the agreed changes and launch it." },
];

const differentiators = [
  { icon: "ph-lightning", title: "Fast Delivery", text: "No weeks of waiting. Get your business online quickly." },
  { icon: "ph-currency-circle-dollar", title: "Affordable Setup", text: "Start without a large upfront development investment." },
  { icon: "ph-wrench", title: "Ongoing Support", text: "We're there after your website goes live." },
  { icon: "ph-device-mobile", title: "Mobile Friendly", text: "Your website works across phones, tablets and desktops." },
  { icon: "ph-rocket-launch", title: "Modern Technology", text: "Built using modern development technologies." },
  { icon: "ph-handshake", title: "Real Development Team", text: "AI helps us work faster. Our team handles development, testing and delivery." },
];

const businessFits = [
  "Consultants",
  "Coaches",
  "Agencies",
  "Salons",
  "Gyms",
  "Restaurants",
  "Real Estate Businesses",
  "Interior Designers",
  "Local Service Businesses",
  "Small & Medium Businesses",
];

const ecommerceFits = [
  "Fashion Brands",
  "Boutiques",
  "Jewellery Businesses",
  "Beauty Products",
  "Home Decor",
  "Gifts",
  "Handicrafts",
  "Food Products",
  "Instagram Sellers",
  "Small Online Brands",
];

const maintenanceItems = ["Hosting", "Basic Maintenance", "Technical Support", "Basic Updates", "Website Assistance"];

const growthPlanItems = [
  "Social Media Content",
  "4 Short Videos/Reels",
  "Meta Ads Setup & Management",
  "Campaign Optimization",
  "Ad Creative Support",
];

const businessSystems = ["CRM Systems", "ERP Platforms", "LMS Platforms", "Business Automation", "Custom Web Applications", "E-Commerce Systems"];

const faqs = [
  {
    q: "How fast will my website be ready?",
    a: "Business websites are generally delivered in approximately 2 days. Basic e-commerce stores can be launched in approximately 24 hours, provided all required information is supplied on time.",
  },
  { q: "Is the domain included?", a: "No. Domain registration is separate. If you already own a domain, we can use it." },
  { q: "Is hosting included?", a: "Yes. Hosting is included in the monthly maintenance/support plan." },
  {
    q: "Is payment gateway integration included?",
    a: "Yes, payment gateway integration is included in the standard e-commerce package. Payment gateway approval, KYC and transaction fees are subject to the payment provider's terms.",
  },
  { q: "Can I add more products?", a: "Yes. Additional products can be added separately." },
  { q: "Can I add more pages?", a: "Yes. Additional pages can be added separately." },
  { q: "Can you build custom features?", a: "Yes. Custom functionality can be discussed and quoted separately." },
  { q: "Do you provide support after launch?", a: "Yes. Basic maintenance and technical support are included in your monthly plan." },
  {
    q: "Can I cancel the monthly plan?",
    a: "There are no long-term contracts — you can cancel your monthly plan anytime. Cancelling stops future billing; it doesn't remove work already delivered.",
  },
  {
    q: "Do I own my website?",
    a: "You own your content, branding and any domain you purchase. Hosting, maintenance and support are tied to an active monthly plan, similar to most managed website services.",
  },
];

function CheckList({ items }: { items: string[] }) {
  return (
    <ul className="list-unstyled d-flex flex-column gap-205 mb-0">
      {items.map((item) => (
        <li key={item} className="d-flex align-items-start gap-2">
          <i className="ph-fill ph-check-circle text-main flex-shrink-0" style={{ fontSize: "1.1rem", marginTop: 1 }}></i>
          <span className="text-body" style={{ fontSize: "1rem" }}>
            {item}
          </span>
        </li>
      ))}
    </ul>
  );
}

export default function LaunchPage() {
  return (
    <PageShell>
      <style>{`
        .launch-hero { background: linear-gradient(160deg, #eef4ff 0%, #f5f0ff 55%, #ffffff 100%); padding: 150px 0 70px; position: relative; }
        .launch-hero .blob { position: absolute; border-radius: 50%; filter: blur(70px); opacity: 0.5; z-index: 0; }
        .launch-hero .blob-blue { width: 360px; height: 360px; background: #93b2ff; top: -80px; left: -100px; }
        .launch-hero .blob-purple { width: 320px; height: 320px; background: #cbb2ff; bottom: -60px; right: -80px; }
        .launch-hero .container { position: relative; z-index: 1; }
        .launch-badge { font-size: 0.85rem; letter-spacing: 0.5px; font-weight: 600; }
        .plan-card { border-radius: 22px; background: #fff; overflow: hidden; border: 1px solid #e5e7eb; height: 100%; box-shadow: 0 14px 44px rgba(15,24,37,0.08); display: flex; flex-direction: column; transition: transform 0.25s, box-shadow 0.25s; }
        .plan-card:hover { transform: translateY(-6px); box-shadow: 0 22px 56px rgba(15,24,37,0.14); }
        .plan-card .plan-head { padding: 30px 30px 24px; color: #fff; position: relative; overflow: hidden; }
        .plan-card.business .plan-head { background: linear-gradient(135deg,#3b5bfd,#2946c9); }
        .plan-card.ecommerce .plan-head { background: linear-gradient(135deg,#8b5cf6,#5f3dc4); }
        .plan-card .plan-body { padding: 30px 30px 32px; flex: 1; display: flex; flex-direction: column; }
        .plan-price { font-size: 2.4rem; font-weight: 800; line-height: 1; }
        .section-label { font-size: 0.85rem; letter-spacing: 1.5px; text-transform: uppercase; font-weight: 700; color: hsl(var(--main)); margin-bottom: 10px; display: block; }
        .cross-item { display: flex; align-items: center; gap: 10px; padding: 14px 18px; background: #fef2f2; border-radius: 12px; color: #b91c1c; font-weight: 500; font-size: 0.95rem; }
        .lost-item { display: flex; align-items: center; gap: 10px; font-size: 1rem; }
        .step-pill { background: #fff; border: 1px solid #e5e7eb; border-radius: 16px; padding: 26px 20px; transition: transform 0.2s, box-shadow 0.2s; }
        .step-pill:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(15,24,37,0.08); }
        .step-pill .num-circle { width: 52px; height: 52px; min-width: 52px; border-radius: 50%; background: hsl(var(--main-h),var(--main-s),95%); color: hsl(var(--main)); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; }
        .feature-card { background: #fff; border: 1px solid #e5e7eb; border-radius: 18px; padding: 34px 28px; height: 100%; transition: transform 0.2s, box-shadow 0.2s; }
        .feature-card:hover { transform: translateY(-4px); box-shadow: 0 14px 34px rgba(15,24,37,0.08); }
        .tech-pill { display: flex; align-items: center; gap: 10px; background: #16233a; color: #fff; border-radius: 14px; padding: 20px 16px; font-size: 0.95rem; }
        .how-step { text-align: center; }
        .how-step .circle { width: 76px; height: 76px; border-radius: 50%; background: hsl(var(--main)); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.4rem; margin: 0 auto 18px; box-shadow: 0 10px 26px hsla(var(--main-h),var(--main-s),40%,0.35); }
        .diff-card { background: #fff; border: 1px solid #e5e7eb; border-radius: 16px; padding: 30px 26px; height: 100%; transition: transform 0.2s, box-shadow 0.2s; }
        .diff-card:hover { transform: translateY(-4px); box-shadow: 0 14px 34px rgba(15,24,37,0.08); }
        .diff-icon { width: 60px; height: 60px; border-radius: 14px; background: hsl(var(--main-h),var(--main-s),95%); color: hsl(var(--main)); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 18px; }
        .fit-box { background: #fff; border: 1px solid #e5e7eb; border-radius: 18px; padding: 32px 30px; height: 100%; transition: transform 0.2s, box-shadow 0.2s; }
        .fit-box:hover { transform: translateY(-4px); box-shadow: 0 14px 34px rgba(15,24,37,0.08); }
        .maint-box { background: #fff; border-radius: 18px; padding: 34px 28px; text-align: center; border: 1px solid #e5e7eb; }
        .growth-card { background: linear-gradient(160deg,#16233a,#0f1825); border-radius: 22px; padding: 40px 36px; color: #fff; height: 100%; box-shadow: 0 20px 50px rgba(15,24,37,0.25); }
        .need-more-card { background: hsl(var(--main-h),var(--main-s),97%); border-radius: 22px; padding: 40px 36px; height: 100%; }
        .faq-accordion .accordion-item { border: 1px solid #e5e7eb; border-radius: 14px !important; margin-bottom: 14px; overflow: hidden; }
        .faq-accordion .accordion-button { font-weight: 600; font-size: 1rem; padding: 20px 24px; }
        .faq-accordion .accordion-body { font-size: 0.95rem; padding: 4px 24px 22px; }
        .faq-accordion .accordion-button:not(.collapsed) { color: hsl(var(--main)); background: hsl(var(--main-h),var(--main-s),97%); }
        .final-offer-card { border-radius: 22px; padding: 40px 34px; color: #fff; height: 100%; box-shadow: 0 20px 50px rgba(15,24,37,0.18); transition: transform 0.25s; }
        .final-offer-card:hover { transform: translateY(-6px); }
      `}</style>

      {/* SECTION 1 — HERO */}
      <section className="launch-hero overflow-hidden">
        <span className="blob blob-blue"></span>
        <span className="blob blob-purple"></span>
        <div className="container">
          <div className="text-center mx-auto mb-5" style={{ maxWidth: 780 }}>
            <span className="launch-badge text-main bg-main-50 d-inline-block mb-4 px-4 py-2 rounded-pill">
              Launch Your Business Online — Without a Big Upfront Cost
            </span>
            <h1 className="fw-bold lh-sm mb-3" style={{ fontSize: "clamp(2.1rem, 4.5vw, 3.4rem)" }}>
              Get Your Professional Website Live in Just 2 Days
            </h1>
            <p className="text-body" style={{ fontSize: "1.15rem" }}>
              Launch a fast, mobile-friendly website built with modern technology — with hosting, support and
              maintenance included in one simple monthly plan.
            </p>
          </div>

          <div className="row justify-content-center gy-3 mb-5">
            {heroTrustBadges.map((b) => (
              <div className="col-6 col-md-3" key={b.label}>
                <div className="d-flex align-items-center justify-content-center gap-2 text-heading-color" style={{ fontSize: "0.95rem" }}>
                  <i className={`ph ${b.icon} text-main`} style={{ fontSize: "1.2rem" }}></i>
                  <span className="fw-semibold">{b.label}</span>
                </div>
              </div>
            ))}
          </div>

          <div className="row justify-content-center gy-4 gx-4">
            <div className="col-md-6 col-lg-5">
              <div className="plan-card business">
                <div className="plan-head">
                  <div className="fw-bold" style={{ letterSpacing: 1, fontSize: "0.9rem" }}>BUSINESS WEBSITE</div>
                  <div className="d-flex align-items-baseline gap-2 mt-2">
                    <span className="plan-price">$19</span>
                    <span style={{ fontSize: "0.95rem", opacity: 0.9 }}>Setup</span>
                  </div>
                  <div style={{ fontSize: "1rem", opacity: 0.95 }}>+ $7/month</div>
                </div>
                <div className="plan-body">
                  <CheckList items={businessFeatures.slice(0, 6)} />
                  <PlanInquiryButton
                    plan="Business Website"
                    label="START MY WEBSITE"
                    variant="blue"
                    fullWidth
                    size="lg"
                    className="mt-4"
                  />
                </div>
              </div>
            </div>

            <div className="col-md-6 col-lg-5">
              <div className="plan-card ecommerce">
                <div className="plan-head">
                  <div className="fw-bold" style={{ letterSpacing: 1, fontSize: "0.9rem" }}>E-COMMERCE STORE</div>
                  <div className="d-flex align-items-baseline gap-2 mt-2">
                    <span className="plan-price">$29</span>
                    <span style={{ fontSize: "0.95rem", opacity: 0.9 }}>Setup</span>
                  </div>
                  <div style={{ fontSize: "1rem", opacity: 0.95 }}>+ $12/month</div>
                </div>
                <div className="plan-body">
                  <CheckList items={ecommerceFeatures.slice(0, 6)} />
                  <PlanInquiryButton
                    plan="E-Commerce Store"
                    label="LAUNCH MY ONLINE STORE"
                    variant="purple"
                    fullWidth
                    size="lg"
                    className="mt-4"
                  />
                </div>
              </div>
            </div>
          </div>

          <p className="text-center text-body mt-5 mb-0" style={{ fontSize: "0.95rem" }}>
            No complicated development process.
            <br />
            No large upfront investment.
            <br />
            Just a professional online presence for your business.
          </p>
        </div>
      </section>

      {/* SECTION 2 — THE PROBLEM */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-6">
              <span className="section-label">The Problem</span>
              <h2 className="fw-bold mb-4">
                Your Customers Are Already Online. Is <span className="text-main">Your Business?</span>
              </h2>
              <p className="text-body lh-lg mb-4">
                Today, customers search businesses online before they contact or buy from them. But many small
                businesses still depend only on:
              </p>
              <div className="row gy-2 gx-2 mb-4">
                {dependOnPlatforms.map((p) => (
                  <div className="col-6" key={p}>
                    <div className="cross-item">
                      <i className="ph-bold ph-x-circle"></i>
                      <span>{p}</span>
                    </div>
                  </div>
                ))}
              </div>
              <p className="text-body lh-lg mb-2">
                <strong>The problem?</strong> You don&apos;t fully control those platforms.
              </p>
              <p className="text-body lh-lg mb-3">And without your own website, you can lose:</p>
              <div className="d-flex flex-column gap-2">
                {lostWithoutWebsite.map((item) => (
                  <div className="lost-item" key={item}>
                    <i className="ph-fill ph-warning-circle text-main" style={{ fontSize: "1.1rem" }}></i>
                    <span className="text-body">{item}</span>
                  </div>
                ))}
              </div>
            </div>

            <div className="col-lg-6">
              <div
                className="rounded-4 p-5 text-center"
                style={{ background: "linear-gradient(135deg,#eef4ff,#f5f0ff)" }}
              >
                <img src="/assets/images/thumbs/laptop-man.png" alt="Business owner working online" className="img-fluid mb-4" style={{ maxWidth: 220 }} />
                <h4 className="fw-bold mb-3">Your business deserves its own online home.</h4>
                <p className="text-body mb-4">Social Media gets attention. Your Website builds your digital home.</p>
                <PlanInquiryButton plan="Business Website" label="LET'S BUILD YOURS" variant="main" size="lg" />
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* SECTION 3 — SOLUTION */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="text-center mb-60 mx-auto" style={{ maxWidth: 680 }}>
            <span className="section-label d-block">The Solution</span>
            <h2 className="fw-bold mb-3">We Make Getting Online Simple.</h2>
            <p className="text-body lh-lg">
              At Zalgo Infotech, we&apos;ve simplified website development for small businesses and growing brands.
              You don&apos;t need to spend thousands upfront or wait weeks for your website.
            </p>
          </div>
          <div className="row gy-3 justify-content-center">
            {solutionSteps.map((s, i) => (
              <div className="col-md-4 col-lg-2" key={s.title}>
                <div className="step-pill h-100 d-flex flex-column text-center">
                  <div className="num-circle mx-auto"><i className={`ph ${s.icon}`}></i></div>
                  <div className="fw-semibold mt-3" style={{ fontSize: "0.95rem" }}>{i + 1}. {s.title}</div>
                </div>
              </div>
            ))}
          </div>
          <p className="text-center fw-bold text-main mt-5 mb-0" style={{ fontSize: "1.2rem" }}>That&apos;s it.</p>
        </div>
      </section>

      {/* SECTION 4 — BUSINESS WEBSITE */}
      <section className="py-120 bg-white" id="business-website">
        <div className="container">
          <div className="row gy-5 align-items-start">
            <div className="col-lg-6">
              <span className="section-label">Business Website</span>
              <h2 className="fw-bold mb-3">A Professional Website for Your Business</h2>
              <p className="text-body lh-lg">
                Whether you&apos;re a consultant, agency, coach, salon, restaurant, real estate professional, gym,
                local service provider or growing company — your business deserves a professional online presence.
              </p>
            </div>
            <div className="col-lg-6">
              <div className="plan-card business">
                <div className="plan-head">
                  <div className="fw-bold" style={{ letterSpacing: 1, fontSize: "0.9rem" }}>BUSINESS WEBSITE</div>
                  <div className="d-flex align-items-baseline gap-2 mt-2">
                    <span className="plan-price">$19</span>
                    <span style={{ fontSize: "0.95rem", opacity: 0.9 }}>One-Time Setup</span>
                  </div>
                  <div style={{ fontSize: "1rem", opacity: 0.95 }}>+ $7/month</div>
                </div>
                <div className="plan-body">
                  <div className="fw-semibold mb-3" style={{ fontSize: "1.05rem" }}>What&apos;s Included?</div>
                  <CheckList items={businessFeatures} />
                  <PlanInquiryButton
                    plan="Business Website"
                    label="GET MY BUSINESS WEBSITE"
                    variant="blue"
                    fullWidth
                    size="lg"
                    className="mt-4"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* SECTION 5 — E-COMMERCE */}
      <section className="py-120 bg-neutral-50" id="ecommerce-store">
        <div className="container">
          <div className="row gy-5 align-items-start">
            <div className="col-lg-6 order-lg-2">
              <span className="section-label">E-Commerce Store</span>
              <h2 className="fw-bold mb-3">Turn Your Products Into an Online Store</h2>
              <p className="text-body lh-lg">
                Already selling through Instagram, WhatsApp or offline? Now give your customers a proper place to
                browse and buy your products.
              </p>
            </div>
            <div className="col-lg-6 order-lg-1">
              <div className="plan-card ecommerce">
                <div className="plan-head">
                  <div className="fw-bold" style={{ letterSpacing: 1, fontSize: "0.9rem" }}>E-COMMERCE STORE</div>
                  <div className="d-flex align-items-baseline gap-2 mt-2">
                    <span className="plan-price">$29</span>
                    <span style={{ fontSize: "0.95rem", opacity: 0.9 }}>One-Time Setup</span>
                  </div>
                  <div style={{ fontSize: "1rem", opacity: 0.95 }}>+ $12/month</div>
                </div>
                <div className="plan-body">
                  <div className="fw-semibold mb-3" style={{ fontSize: "1.05rem" }}>What&apos;s Included?</div>
                  <CheckList items={ecommerceFeatures} />
                  <PlanInquiryButton
                    plan="E-Commerce Store"
                    label="LAUNCH MY ONLINE STORE"
                    variant="purple"
                    fullWidth
                    size="lg"
                    className="mt-4"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* SECTION 6 — WHY OUR TECHNOLOGY */}
      <section className="py-120" style={{ background: "#0f1825" }}>
        <div className="container">
          <div className="text-center mb-60 mx-auto" style={{ maxWidth: 680 }}>
            <span className="section-label d-block" style={{ color: "#61dafb" }}>Our Technology</span>
            <h2 className="fw-bold text-white mb-3">Affordable Doesn&apos;t Mean Outdated.</h2>
            <p style={{ color: "#8aafc4", fontSize: "1.05rem" }}>
              Your website is built using modern web technologies including <strong className="text-white">Node.js + Next.js</strong>, designed for:
            </p>
          </div>
          <div className="row gy-3 justify-content-center mb-5">
            {techHighlights.map((t) => (
              <div className="col-6 col-md-4 col-lg-2" key={t.label}>
                <div className="tech-pill h-100 justify-content-center text-center flex-column">
                  <i className={`ph ${t.icon}`} style={{ fontSize: "1.7rem", color: "#61dafb" }}></i>
                  <span style={{ fontSize: "0.85rem" }}>{t.label}</span>
                </div>
              </div>
            ))}
          </div>
          <p className="text-center mx-auto" style={{ maxWidth: 680, color: "#8aafc4", fontSize: "1rem" }}>
            We also use AI-assisted development to speed up the development process — while our development team
            reviews and tests the website before launch.
          </p>
          <p className="text-center fw-semibold text-white mt-3 mb-0" style={{ fontSize: "1.05rem" }}>
            You get speed without compromising on professional development.
          </p>
        </div>
      </section>

      {/* SECTION 7 — HOW IT WORKS */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center mb-60 mx-auto" style={{ maxWidth: 680 }}>
            <span className="section-label d-block">How It Works</span>
            <h2 className="fw-bold">From Idea to Live Website in 4 Simple Steps</h2>
          </div>
          <div className="row gy-5">
            {howItWorksSteps.map((s) => (
              <div className="col-md-3" key={s.num}>
                <div className="how-step">
                  <div className="circle">{s.num}</div>
                  <div className="fw-semibold mb-2" style={{ fontSize: "1.05rem" }}>{s.title}</div>
                  <div className="text-body" style={{ fontSize: "0.92rem" }}>{s.text}</div>
                </div>
              </div>
            ))}
          </div>
          <div className="row gy-3 mt-5 justify-content-center">
            <div className="col-md-4">
              <div className="feature-card text-center">
                <div className="fw-semibold text-body mb-2" style={{ fontSize: "0.92rem" }}>Business Website</div>
                <div className="fw-bold text-main" style={{ fontSize: "1.35rem" }}>Ready in approximately 2 days</div>
              </div>
            </div>
            <div className="col-md-4">
              <div className="feature-card text-center">
                <div className="fw-semibold text-body mb-2" style={{ fontSize: "0.92rem" }}>E-Commerce Store</div>
                <div className="fw-bold text-main" style={{ fontSize: "1.35rem" }}>Launch in approximately 24 hours</div>
              </div>
            </div>
          </div>
          <p className="text-center text-body mt-4 mb-0" style={{ fontSize: "0.88rem" }}>
            *Delivery depends on receiving the required content and information on time.
          </p>
        </div>
      </section>

      {/* SECTION 8 — WHAT MAKES US DIFFERENT */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="text-center mb-60 mx-auto" style={{ maxWidth: 680 }}>
            <span className="section-label d-block">Why Us</span>
            <h2 className="fw-bold">You&apos;re Not Just Buying a Website.</h2>
          </div>
          <div className="row gy-4">
            {differentiators.map((d) => (
              <div className="col-md-6 col-lg-4" key={d.title}>
                <div className="diff-card">
                  <div className="diff-icon"><i className={`ph ${d.icon}`}></i></div>
                  <div className="fw-semibold text-heading-color mb-2" style={{ fontSize: "1.05rem" }}>{d.title}</div>
                  <div className="text-body" style={{ fontSize: "0.95rem" }}>{d.text}</div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* SECTION 9 — PERFECT FOR */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center mb-60 mx-auto" style={{ maxWidth: 680 }}>
            <span className="section-label d-block">Perfect For</span>
            <h2 className="fw-bold">Built for Businesses That Want to Grow Online</h2>
          </div>
          <div className="row gy-4">
            <div className="col-lg-6">
              <div className="fit-box">
                <div className="fw-bold mb-3" style={{ fontSize: "1.1rem" }}>Business Website — Perfect for:</div>
                <div className="row gy-3">
                  {businessFits.map((f) => (
                    <div className="col-6" key={f}>
                      <div className="d-flex align-items-center gap-2">
                        <i className="ph-fill ph-check-circle text-main"></i>
                        <span className="text-body" style={{ fontSize: "0.95rem" }}>{f}</span>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
            <div className="col-lg-6">
              <div className="fit-box">
                <div className="fw-bold mb-3" style={{ fontSize: "1.1rem" }}>E-Commerce Store — Perfect for:</div>
                <div className="row gy-3">
                  {ecommerceFits.map((f) => (
                    <div className="col-6" key={f}>
                      <div className="d-flex align-items-center gap-2">
                        <i className="ph-fill ph-check-circle text-main"></i>
                        <span className="text-body" style={{ fontSize: "0.95rem" }}>{f}</span>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* SECTION 10 — WEBSITE VS SOCIAL MEDIA */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="text-center mx-auto" style={{ maxWidth: 720 }}>
            <span className="section-label d-block">A Reminder</span>
            <h2 className="fw-bold mb-4">Don&apos;t Build Your Entire Business on Someone Else&apos;s Platform.</h2>
            <p className="text-body lh-lg mb-2" style={{ fontSize: "1.05rem" }}>Instagram can change its algorithm.</p>
            <p className="text-body lh-lg mb-2" style={{ fontSize: "1.05rem" }}>Facebook can change its reach.</p>
            <p className="text-body lh-lg mb-4" style={{ fontSize: "1.05rem" }}>Marketplaces can change their rules.</p>
            <p className="fw-semibold text-heading-color mb-1" style={{ fontSize: "1.1rem" }}>But your website belongs to your business.</p>
            <div className="d-flex align-items-center justify-content-center gap-3 flex-wrap my-4">
              <span className="badge bg-neutral-100 text-body fw-semibold px-4 py-3 rounded-pill" style={{ fontSize: "0.92rem" }}>Social Media gets attention.</span>
              <span className="badge bg-main-50 text-main fw-semibold px-4 py-3 rounded-pill" style={{ fontSize: "0.92rem" }}>Your Website builds your digital home.</span>
            </div>
            <p className="fw-bold text-main mb-0" style={{ fontSize: "1.15rem" }}>Use both.</p>
          </div>
        </div>
      </section>

      {/* SECTION 11 — MAINTENANCE & SUPPORT */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center mb-60 mx-auto" style={{ maxWidth: 680 }}>
            <span className="section-label d-block">Maintenance &amp; Support</span>
            <h2 className="fw-bold">Your Website Shouldn&apos;t Be Left Alone After Launch.</h2>
            <p className="text-body mt-2" style={{ fontSize: "1.05rem" }}>Your monthly plan helps keep your website running with:</p>
          </div>
          <div className="row gy-3 justify-content-center mb-5">
            {maintenanceItems.map((m) => (
              <div className="col-6 col-md-auto" key={m}>
                <div className="d-flex align-items-center gap-2">
                  <i className="ph-fill ph-check-circle text-main"></i>
                  <span className="text-body" style={{ fontSize: "0.98rem" }}>{m}</span>
                </div>
              </div>
            ))}
          </div>
          <div className="row gy-3 justify-content-center">
            <div className="col-md-4">
              <div className="maint-box">
                <div className="text-body fw-semibold mb-2" style={{ fontSize: "1rem" }}>Business</div>
                <div className="fw-bold text-main" style={{ fontSize: "1.6rem" }}>$7/month</div>
              </div>
            </div>
            <div className="col-md-4">
              <div className="maint-box">
                <div className="text-body fw-semibold mb-2" style={{ fontSize: "1rem" }}>E-Commerce</div>
                <div className="fw-bold text-main" style={{ fontSize: "1.6rem" }}>$12/month</div>
              </div>
            </div>
          </div>
          <p className="text-center text-body mt-4 mb-0 mx-auto" style={{ maxWidth: 620, fontSize: "0.92rem" }}>
            <strong>Important:</strong> Your monthly plan covers the standard maintenance and support included in
            your selected package. Additional pages, products, major redesigns or custom functionality can be added
            separately based on your requirements.
          </p>
        </div>
      </section>

      {/* SECTION 12 — DOMAIN */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="row gy-4 justify-content-center text-center">
            <div className="col-md-5">
              <div className="fit-box h-100">
                <i className="ph ph-globe text-main mb-3" style={{ fontSize: "2.2rem" }}></i>
                <h4 className="fw-bold mb-2">Already Have a Domain?</h4>
                <p className="text-body mb-0" style={{ fontSize: "0.98rem" }}>Perfect. We&apos;ll configure your website on your existing domain.</p>
              </div>
            </div>
            <div className="col-md-5">
              <div className="fit-box h-100">
                <i className="ph ph-shopping-cart-simple text-main mb-3" style={{ fontSize: "2.2rem" }}></i>
                <h4 className="fw-bold mb-2">Don&apos;t Have One?</h4>
                <p className="text-body mb-0" style={{ fontSize: "0.98rem" }}>No problem. Domain registration can be purchased separately for one year.</p>
              </div>
            </div>
          </div>
          <p className="text-center fw-semibold text-heading-color mt-5 mb-0" style={{ fontSize: "1.05rem" }}>
            Your Domain. Your Business. We don&apos;t lock you into a domain you don&apos;t own.
          </p>
        </div>
      </section>

      {/* SECTION 13 — ADDITIONAL REQUIREMENTS */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center mx-auto" style={{ maxWidth: 680 }}>
            <span className="section-label d-block">Need More?</span>
            <h2 className="fw-bold mb-3">Need More Than the Standard Plan? That&apos;s Completely Fine.</h2>
            <p className="text-body lh-lg mb-4" style={{ fontSize: "1.05rem" }}>
              Our standard plans are designed to get you online quickly. Need more pages, more products, custom
              features, custom integrations or additional functionality?
            </p>
            <p className="fw-bold text-main mb-4" style={{ fontSize: "1.15rem" }}>We can build it.</p>
            <p className="text-body" style={{ fontSize: "0.92rem" }}>
              Additional requirements are quoted separately based on your needs.
            </p>
          </div>
        </div>
      </section>

      {/* SECTION 14 — GROW AFTER LAUNCH */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-5">
              <span className="section-label">Grow After Launch</span>
              <h2 className="fw-bold mb-3">Your Website Is Just the Beginning.</h2>
              <p className="text-body lh-lg" style={{ fontSize: "1.05rem" }}>
                Once your website is live, you can take the next step with our Growth Plan.
              </p>
            </div>
            <div className="col-lg-7">
              <div className="growth-card">
                <div className="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
                  <div>
                    <div style={{ color: "#61dafb", fontWeight: 700, fontSize: "0.85rem", letterSpacing: 1 }}>GROWTH PLAN</div>
                    <div className="fw-bold text-white" style={{ fontSize: "1.5rem" }}>Digital Marketing</div>
                  </div>
                  <div className="fw-bold text-white" style={{ fontSize: "2rem" }}>$99<span style={{ fontSize: "0.95rem", opacity: 0.8 }}>/month</span></div>
                </div>
                <div className="row gy-2 mb-4">
                  {growthPlanItems.map((g) => (
                    <div className="col-6" key={g}>
                      <div className="d-flex align-items-center gap-2">
                        <i className="ph-fill ph-check-circle" style={{ color: "#61dafb" }}></i>
                        <span style={{ color: "rgba(255,255,255,0.92)", fontSize: "0.92rem" }}>{g}</span>
                      </div>
                    </div>
                  ))}
                </div>
                <p style={{ color: "#8aafc4", fontSize: "0.85rem" }} className="mb-4">
                  Ad spend is separate and paid by the client.
                </p>
                <PlanInquiryButton
                  plan="Digital Marketing - Growth Plan"
                  label="TALK TO OUR GROWTH TEAM"
                  variant="main"
                  size="lg"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* SECTION 15 — FOR BUSINESSES THAT NEED MORE */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-5">
              <span className="section-label">Beyond a Website</span>
              <h2 className="fw-bold mb-3">Need a Complete Business System?</h2>
              <p className="text-body lh-lg mb-2" style={{ fontSize: "1.05rem" }}>Some businesses need more than a website. If you&apos;re dealing with:</p>
              <ul className="text-body lh-lg" style={{ fontSize: "1rem" }}>
                <li>Too many manual tasks</li>
                <li>Sales teams</li>
                <li>Scattered customer data</li>
                <li>Lead management problems</li>
                <li>Repetitive workflows</li>
                <li>Multiple tools</li>
              </ul>
            </div>
            <div className="col-lg-7">
              <div className="need-more-card">
                <div className="fw-bold text-heading-color mb-3" style={{ fontSize: "1.1rem" }}>We can build custom:</div>
                <div className="row gy-3 mb-4">
                  {businessSystems.map((sys) => (
                    <div className="col-6" key={sys}>
                      <div className="d-flex align-items-center gap-2">
                        <i className="ph-fill ph-check-circle text-main"></i>
                        <span className="text-body" style={{ fontSize: "0.95rem" }}>{sys}</span>
                      </div>
                    </div>
                  ))}
                </div>
                <p className="fw-semibold text-heading-color mb-4" style={{ fontSize: "1rem" }}>
                  From your first website to a complete business system — we can grow with you.
                </p>
                <Link
                  href={routes.contact}
                  className="btn btn-main px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2"
                >
                  <i className="ph ph-chat-circle-dots"></i> Discuss Your Project
                </Link>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* SECTION 16 — TRUST */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="text-center mb-60 mx-auto" style={{ maxWidth: 680 }}>
            <span className="section-label d-block">Built by a Real Technology Team</span>
            <h2 className="fw-bold mb-3">12+ Years of Development Experience</h2>
            <p className="text-body lh-lg" style={{ fontSize: "1.05rem" }}>
              Zalgo Infotech works with startups, SMEs and growing businesses to build websites, e-commerce
              platforms, custom applications and business automation systems.
            </p>
          </div>
          <div className="row justify-content-center gy-3 mb-5">
            <div className="col-md-8">
              <div className="feature-card text-center">
                <div className="fw-bold text-main mb-2" style={{ fontSize: "0.95rem" }}>Our Approach</div>
                <div className="fw-semibold text-heading-color" style={{ fontSize: "1.25rem" }}>Technology + Speed + Support</div>
                <p className="text-body mt-3 mb-0" style={{ fontSize: "1rem" }}>
                  We don&apos;t just launch your website. We help you build the digital foundation for your business.
                </p>
              </div>
            </div>
          </div>
          <div className="text-center">
            <Link
              href={routes.casestudy}
              className="btn px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2"
              style={{ border: "2px solid hsl(var(--main))", color: "hsl(var(--main))", background: "transparent" }}
            >
              <i className="ph ph-briefcase"></i> View Our Work
            </Link>
          </div>
        </div>
      </section>

      {/* SECTION 17 — FAQ */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center mb-60 mx-auto" style={{ maxWidth: 680 }}>
            <span className="section-label d-block">FAQ</span>
            <h2 className="fw-bold">Frequently Asked Questions</h2>
          </div>
          <div className="row justify-content-center">
            <div className="col-lg-9">
              <div className="accordion faq-accordion" id="launchFaqAccordion">
                {faqs.map((f, i) => {
                  const collapseId = `launchFaq${i}`;
                  return (
                    <div className="accordion-item" key={collapseId}>
                      <h2 className="accordion-header">
                        <button
                          className={`accordion-button shadow-none${i === 0 ? "" : " collapsed"}`}
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target={`#${collapseId}`}
                          aria-expanded={i === 0}
                          aria-controls={collapseId}
                        >
                          {f.q}
                        </button>
                      </h2>
                      <div
                        id={collapseId}
                        className={`accordion-collapse collapse${i === 0 ? " show" : ""}`}
                        data-bs-parent="#launchFaqAccordion"
                      >
                        <div className="accordion-body text-body">{f.a}</div>
                      </div>
                    </div>
                  );
                })}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* SECTION 18 — FINAL OFFER */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="text-center mb-60 mx-auto" style={{ maxWidth: 680 }}>
            <span className="section-label d-block">Final Offer</span>
            <h2 className="fw-bold mb-3">Your Business Is Ready to Go Online.</h2>
            <p className="text-body lh-lg" style={{ fontSize: "1.05rem" }}>
              Don&apos;t spend months planning. Don&apos;t spend thousands before getting started. Launch a
              professional website or online store and start building your digital presence today.
            </p>
          </div>
          <div className="row gy-4 justify-content-center">
            <div className="col-md-5">
              <div className="final-offer-card text-center" style={{ background: "linear-gradient(135deg,#3b5bfd,#2946c9)" }}>
                <i className="ph ph-globe mb-3" style={{ fontSize: "2.2rem" }}></i>
                <div className="fw-bold" style={{ fontSize: "0.9rem", letterSpacing: 1 }}>BUSINESS WEBSITE</div>
                <div className="fw-bold my-2" style={{ fontSize: "2.1rem" }}>$19 Setup</div>
                <div style={{ opacity: 0.9, fontSize: "1rem" }}>+ $7/month</div>
                <div className="fw-semibold mt-2 mb-4" style={{ fontSize: "0.92rem" }}>2-Day Delivery</div>
                <PlanInquiryButton plan="Business Website" label="START MY WEBSITE" variant="white" fullWidth size="lg" />
              </div>
            </div>
            <div className="col-md-5">
              <div className="final-offer-card text-center" style={{ background: "linear-gradient(135deg,#8b5cf6,#5f3dc4)" }}>
                <i className="ph ph-shopping-cart-simple mb-3" style={{ fontSize: "2.2rem" }}></i>
                <div className="fw-bold" style={{ fontSize: "0.9rem", letterSpacing: 1 }}>E-COMMERCE STORE</div>
                <div className="fw-bold my-2" style={{ fontSize: "2.1rem" }}>$29 Setup</div>
                <div style={{ opacity: 0.9, fontSize: "1rem" }}>+ $12/month</div>
                <div className="fw-semibold mt-2 mb-4" style={{ fontSize: "0.92rem" }}>24-Hour Launch</div>
                <PlanInquiryButton plan="E-Commerce Store" label="LAUNCH MY STORE" variant="white" fullWidth size="lg" />
              </div>
            </div>
          </div>
          <p className="text-center text-body mt-5 mb-0" style={{ fontSize: "0.88rem" }}>
            Additional pages, products, custom features and domain registration are charged separately where
            applicable.
          </p>
        </div>
      </section>

      {/* SECTION 19 — FINAL CTA */}
      <section className="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half pt-120">
        <div className="container">
          <div className="text-end tw--mb-40-px position-relative z-2">
            <img src="/assets/images/thumbs/laptop-man.png" alt="Image" className="tw-me-84-px" />
          </div>

          <div className="bg-green-deep tw-rounded-3xl tw-pt-100-px position-relative z-1">
            <img src="/assets/images/shapes/hill-shape.png" alt="Hill Shape" className="position-absolute w-100 h-100 top-0 tw-start-0 z-n1" />
            <img src="/assets/images/thumbs/task-management-img.png" alt="Image" className="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none" />

            <div className="tw-mb-8 text-center max-w-570-px mx-auto">
              <div className="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13">
                <div>
                  Websites live in <span className="text-yellow text-stroke-yellow">2 Days</span> — Stores in 24 Hours
                </div>
              </div>

              <h3 className="splitTextStyleOne text-white">Ready to Take Your Business Online?</h3>
              <p className="tw-mt-3 mb-0" style={{ opacity: 0.85, color: "#fff", fontSize: "1rem" }}>
                Tell us what you&apos;re building. We&apos;ll help you choose the right plan and get you started.
              </p>

              <div className="d-block tw-mt-7">
                <div className="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                  <PlanInquiryButton plan="General Inquiry" label="GET STARTED" variant="white" size="lg" />
                </div>
              </div>

              <p className="text-white tw-mt-6 mb-0" style={{ fontSize: "0.92rem", opacity: 0.85 }}>
                No complicated process.
                <br />
                No large upfront investment.
                <br />
                Just a better way to get online.
              </p>
            </div>
          </div>
        </div>
      </section>
    </PageShell>
  );
}
