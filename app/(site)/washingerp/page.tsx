import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Washing ERP Case Study - Multi-Tenant Vehicle Wash SaaS",
  description:
    "How Zalgo Infotech built a multi-tenant SaaS ERP for vehicle washing centers with React, Node.js, slot booking, reward points, and subscription billing.",
  keywords: [
    "ERP case study",
    "multi-tenant SaaS development case study",
    "vehicle wash booking system",
    "React Node.js SaaS platform",
    "subscription billing software case study",
    "slot booking system development",
  ],
  path: "/washingerp",
});

const metaCards = [
  { icon: "ph-atom", label: "Frontend", value: "React 18 + Vite" },
  { icon: "ph-terminal", label: "Backend", value: "Node.js + Express" },
  { icon: "ph-git-branch", label: "Architecture", value: "Multi-tenant SaaS Monorepo" },
  { icon: "ph-clock", label: "Duration", value: "Ongoing" },
  { icon: "ph-globe", label: "Region", value: "Global" },
];

const roleCards = [
  { icon: "ph-shield-star", title: "Super Admin", text: "Manages all tenants, plans & platform billing" },
  { icon: "ph-buildings", title: "Center Owner", text: "Sets up center, slots, holidays & rewards" },
  { icon: "ph-wrench", title: "Wash Staff", text: "View schedule, mark wash done & issue invoice" },
  { icon: "ph-user", title: "Customer", text: "Book slots, earn reward points & view history" },
];

const monorepoPackages = [
  { icon: "ph-folder", name: "packages/frontend", desc: "React 18 + Vite SPA", color: "#61dafb" },
  { icon: "ph-folder", name: "packages/backend", desc: "Node.js + Express API", color: "#68a063" },
  { icon: "ph-folder", name: "packages/shared", desc: "TypeScript types & validators", color: "#f0db4f" },
];

const onboardingSteps = [
  { num: "1", icon: "ph-user-plus", title: "Register Account", text: "Center owner signs up on the platform with basic details.", color: "#61dafb" },
  { num: "2", icon: "ph-storefront", title: "Fill Center Details", text: "Add center name, address, services, vehicle types & pricing.", color: "#68a063" },
  { num: "3", icon: "ph-credit-card", title: "Choose a Plan", text: "Select Starter, Pro, or Enterprise and pay via Stripe/Razorpay.", color: "#a78bfa" },
  { num: "4", icon: "ph-calendar", title: "Configure Schedule", text: "Set working days, holidays, opening hours & slot duration.", color: "#f0db4f" },
  { num: "5", icon: "ph-rocket-launch", title: "Go Live", text: "Share booking link — customers can now see slots and book.", color: "#34d399" },
];

const plans = [
  {
    name: "Starter",
    price: "₹999/mo",
    desc: "For small single-bay washing centers",
    popular: false,
    features: ["Up to 20 slots/day", "Basic booking management", "Invoice generation", "Customer reward points", "Email notifications"],
  },
  {
    name: "Pro",
    price: "₹2,499/mo",
    desc: "For growing multi-service wash centers",
    popular: true,
    features: ["Unlimited slots/day", "Holiday & schedule manager", "Advanced reward system", "SMS + Email notifications", "Analytics dashboard", "Payment gateway integration"],
  },
  {
    name: "Enterprise",
    price: "₹5,999/mo",
    desc: "For multi-branch chains & franchises",
    popular: false,
    features: ["Multi-branch management", "Custom branding", "API access", "Dedicated support", "White-label option", "Advanced reporting"],
  },
];

const challenges = [
  "No slot booking — customers just showed up causing long queues",
  "No way to define working days, holidays, or shift hours digitally",
  "No customer loyalty program to incentivize repeat visits",
  "Invoices were handwritten or not issued at all",
  "Owners had no dashboard to see daily bookings or revenue",
  "No multi-tenant SaaS option — every center needed a custom build",
  "No automated reminders to reduce no-shows and last-minute cancellations",
];

const roleItems = [
  { icon: "ph-atom", text: "React 18 + Vite SPA — booking UI, admin panel & customer portal" },
  { icon: "ph-terminal", text: "Node.js + Express REST API with JWT multi-tenant auth" },
  { icon: "ph-calendar", text: "Working day & holiday schedule manager per center" },
  { icon: "ph-clock", text: "Dynamic slot engine — divides working hours into bookable slots" },
  { icon: "ph-star", text: "Customer reward points engine with admin-configurable rules" },
  { icon: "ph-receipt", text: "Automated invoice generation per wash booking" },
  { icon: "ph-bell-ringing", text: "Email/SMS booking confirmations, reminders & receipts" },
  { icon: "ph-credit-card", text: "Stripe/Razorpay subscription billing for SaaS plans" },
];

const timeline = [
  { icon: "ph-clipboard-text", title: "Phase 1: Requirement Analysis", text: "Mapped center workflows, slot logic, reward rules & SaaS billing needs" },
  { icon: "ph-git-branch", title: "Phase 2: Monorepo + Multi-tenant Setup", text: "npm workspaces, per-tenant DB schema isolation with Prisma" },
  { icon: "ph-atom", title: "Phase 3: React Frontend", text: "Booking UI, admin schedule config, reward dashboard — Vite + React Query" },
  { icon: "ph-terminal", title: "Phase 4: Node.js API + Slot Engine", text: "REST API, dynamic slot generator, reward engine & invoice service" },
  { icon: "ph-rocket-launch", title: "Phase 5: Deployment & Live", text: "Docker, CI/CD pipeline, Stripe webhooks, SSL — production ready" },
];

const slotEngineItems = [
  { icon: "ph-calendar-check", text: "Admin marks specific dates as working days or holidays" },
  { icon: "ph-clock", text: "Sets opening & closing time + slot duration (15/30/60 min)" },
  { icon: "ph-squares-four", text: "Node.js auto-generates all slots for the day on the fly" },
  { icon: "ph-eye", text: "Customer sees real-time slot availability in the React SPA" },
  { icon: "ph-check-square", text: "Customer selects slot, enters vehicle info & confirms booking" },
  { icon: "ph-bell-ringing", text: "Email + SMS confirmation sent instantly via Node.js events" },
];

const weeklySchedule = [
  { day: "Monday", hours: "9:00 AM – 6:00 PM", slots: "18 slots", holiday: false },
  { day: "Tuesday", hours: "9:00 AM – 6:00 PM", slots: "18 slots", holiday: false },
  { day: "Wednesday", hours: "10:00 AM – 4:00 PM", slots: "12 slots", holiday: false },
  { day: "Thursday", hours: "9:00 AM – 6:00 PM", slots: "18 slots", holiday: false },
  { day: "Friday", hours: "9:00 AM – 6:00 PM", slots: "18 slots", holiday: false },
  { day: "Saturday", hours: "10:00 AM – 2:00 PM", slots: "8 slots", holiday: false },
  { day: "Sunday", hours: "—", slots: "Holiday", holiday: true },
];

const rewardItems = [
  { icon: "ph-star", text: "Admin sets points per wash type (e.g. 10 pts for basic, 25 for premium)" },
  { icon: "ph-coins", text: "Points credited to customer wallet automatically after wash is marked done" },
  { icon: "ph-gift", text: "Customers redeem points for free washes or discounts at checkout" },
  { icon: "ph-chart-bar", text: "Admin dashboard shows top reward earners & redemption history" },
];

const rewardWallet = [
  { name: "Rahul Sharma", tier: "Gold Member", pts: "1,240 pts", percent: "92%", color: "#f59e0b" },
  { name: "Anjali Patel", tier: "Silver Member", pts: "780 pts", percent: "58%", color: "#94a3b8" },
  { name: "Mohammed Khan", tier: "Gold Member", pts: "1,095 pts", percent: "81%", color: "#f59e0b" },
  { name: "Priya Singh", tier: "Bronze Member", pts: "320 pts", percent: "24%", color: "#b45309" },
];

const rewardConfig = ["Basic Wash = 10 pts", "Premium = 25 pts", "Full Detail = 50 pts", "100 pts = ₹50 discount"];

const modules = [
  { icon: "ph-calendar-check", title: "Schedule Manager", text: "Admin defines working days, holidays, opening hours & slot duration per center." },
  { icon: "ph-clock", title: "Slot Booking Engine", text: "Node.js auto-generates time slots; customers see real-time availability & book online." },
  { icon: "ph-car", title: "Booking Management", text: "View, confirm, reschedule, or cancel bookings with full vehicle and customer info." },
  { icon: "ph-star", title: "Reward Points System", text: "Auto-credit points per wash; admin configures earn rates and redemption rules." },
  { icon: "ph-receipt", title: "Invoice Generator", text: "Auto-generate branded PDF invoices per booking with itemised wash services." },
  { icon: "ph-credit-card", title: "Subscription Billing", text: "SaaS plan management — center owners pay monthly/yearly via Stripe/Razorpay." },
  { icon: "ph-bell-ringing", title: "Notifications", text: "Email + SMS confirmations, reminders, and receipts triggered by Node.js events." },
  { icon: "ph-chart-bar", title: "Analytics Dashboard", text: "Daily revenue, slot utilisation, top customers, and reward redemption reports." },
  { icon: "ph-buildings", title: "Multi-tenant Management", text: "Super admin oversees all registered centers, plans, and platform-level settings." },
];

const techList = [
  { label: "Frontend", text: "React 18 + Vite", color: "#61dafb" },
  { label: "Backend", text: "Node.js + Express", color: "#68a063" },
  { label: "Database", text: "MySQL via Prisma ORM", color: "#fff" },
  { label: "Auth", text: "JWT + Multi-tenant Middleware", color: "#fff" },
  { label: "Styling", text: "Tailwind CSS + shadcn/ui", color: "#38bdf8" },
  { label: "State", text: "React Query + Zustand", color: "#fff" },
  { label: "Email", text: "Nodemailer + SMTP", color: "#fff" },
  { label: "SMS", text: "Twilio", color: "#f472b6" },
  { label: "Payments", text: "Stripe (SaaS) + Razorpay (booking)", color: "#635bff" },
  { label: "PDF", text: "Node.js Puppeteer (invoices)", color: "#fff" },
  { label: "Repo", text: "Monorepo (npm workspaces)", color: "#f0db4f" },
  { label: "Deploy", text: "Docker + CI/CD Pipeline", color: "#fff" },
];

const solutionCards = [
  { icon: "ph-atom", title: "React SPA", text: "Dynamic booking UI, admin panel, and customer reward wallet." },
  { icon: "ph-terminal", title: "Node.js API", text: "Multi-tenant REST API with slot engine, reward engine & invoice service." },
  { icon: "ph-clock", title: "Slot Engine", text: "Auto-divides working hours into bookable slots based on admin config." },
  { icon: "ph-star", title: "Reward Engine", text: "Points credited per wash, redeemable at checkout with admin control." },
  { icon: "ph-receipt", title: "Invoice Service", text: "Puppeteer PDF invoices auto-generated and emailed per booking." },
  { icon: "ph-credit-card", title: "SaaS Billing", text: "Stripe subscription management for Starter / Pro / Enterprise plans." },
];

const resultStats = [
  { value: "70%", label: "Reduction in walk-in queue wait time", icon: "ph-trend-down" },
  { value: "0", label: "No-shows with automated booking reminders", icon: "ph-bell-ringing" },
  { value: "100%", label: "Invoices auto-generated per booking", icon: "ph-receipt" },
  { value: "3x", label: "Higher repeat customer rate with reward points", icon: "ph-star" },
];

const whyMatters = [
  { icon: "ph-rocket-launch", text: "Proves multi-tenant SaaS architecture at scale with React + Node.js" },
  { icon: "ph-clock", text: "Demonstrates expertise in dynamic slot generation & scheduling engines" },
  { icon: "ph-star", text: "Shows end-to-end loyalty & reward system design inside a SaaS product" },
  { icon: "ph-handshake", text: "Builds trust for service-based businesses needing a custom SaaS ERP" },
];

const highlights = [
  { label: "Queue Wait Time Reduced", value: "70%", percent: 70 },
  { label: "Booking Automation", value: "100%", percent: 100 },
  { label: "Invoice Coverage", value: "100%", percent: 100 },
  { label: "Repeat Customer Rate", value: "3x↑", percent: 80 },
];

const ctaTags = [
  "React 18 + Vite",
  "Multi-tenant SaaS",
  "Slot Booking Engine",
  "Reward Points",
  "Invoice PDF",
  "Stripe Billing",
  "Twilio SMS",
  "Node.js + Express",
  "Prisma ORM",
  "Docker CI/CD",
];

export default function WashingErpPage() {
  return (
    <PageShell>
      <style>{`
        .section-label { font-size: 0.82rem; letter-spacing: 1.5px; text-transform: uppercase; font-weight: 600; color: hsl(var(--main)); margin-bottom: 8px; display: block; }
        .module-card { background: #fff; border: 1px solid #e5e7eb; border-radius: 14px; padding: 28px 24px; height: 100%; transition: box-shadow 0.2s, transform 0.2s; }
        .module-card:hover { box-shadow: 0 8px 32px rgba(0,118,122,0.12); transform: translateY(-3px); }
        .module-icon { width: 56px; height: 56px; border-radius: 14px; background: hsl(var(--main-h),var(--main-s),95%); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: hsl(var(--main)); margin-bottom: 16px; }
        .challenge-item { display: flex; align-items: flex-start; gap: 14px; padding: 14px 16px; background: #fff; border-radius: 10px; border: 1px solid #f0f0f0; }
        .challenge-num { width: 32px; height: 32px; min-width: 32px; border-radius: 50%; background: hsl(var(--main-h),var(--main-s),95%); color: hsl(var(--main)); font-weight: 700; font-size: 0.85rem; display: flex; align-items: center; justify-content: center; }
        .role-card { background: #fff; border-radius: 12px; padding: 18px 20px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 14px; transition: box-shadow 0.2s; }
        .role-card:hover { box-shadow: 0 4px 20px rgba(0,118,122,0.1); }
        .role-icon { width: 44px; height: 44px; min-width: 44px; border-radius: 10px; background: hsl(var(--main-h),var(--main-s),95%); display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: hsl(var(--main)); }
        .result-stat { background: #fff; border-radius: 14px; padding: 32px 24px; text-align: center; border: 1px solid #e5e7eb; height: 100%; }
        .result-stat .big { font-size: 2.2rem; font-weight: 800; color: hsl(var(--main)); line-height: 1; margin-bottom: 8px; }
        .timeline-item { position: relative; padding-left: 40px; padding-bottom: 28px; }
        .timeline-item:not(:last-child)::before { content: ''; position: absolute; left: 15px; top: 32px; width: 2px; bottom: 0; background: hsl(var(--main-h),var(--main-s),90%); }
        .timeline-dot { position: absolute; left: 0; top: 4px; width: 32px; height: 32px; border-radius: 50%; background: hsl(var(--main)); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 14px; }
        .why-card { background: #fff; border-radius: 14px; padding: 28px 24px; border: 1px solid #e5e7eb; height: 100%; display: flex; flex-direction: column; gap: 14px; }
        .monorepo-badge { background: #0f1825; color: #61dafb; font-family: monospace; font-size: 11px; padding: 4px 10px; border-radius: 6px; display: inline-flex; align-items: center; gap: 5px; }
        .plan-card { background: #fff; border: 2px solid #e5e7eb; border-radius: 16px; padding: 28px 22px; height: 100%; transition: border-color 0.2s, box-shadow 0.2s; }
        .plan-card.popular { border-color: hsl(var(--main)); box-shadow: 0 8px 32px rgba(0,118,122,0.15); }
        .plan-badge { background: hsl(var(--main)); color: #fff; font-size: 0.7rem; font-weight: 700; padding: 3px 10px; border-radius: 20px; }
        .reward-bar { background: #e5e7eb; border-radius: 20px; height: 8px; overflow: hidden; }
        .reward-fill { background: linear-gradient(90deg, hsl(var(--main)), hsl(184,100%,30%)); height: 100%; border-radius: 20px; }
      `}</style>

      {/* Hero */}
      <section
        style={{ background: "linear-gradient(135deg, #f0fafa 0%, #e0f5f5 60%, #fff 100%)", padding: "80px 0 60px" }}
        className="overflow-hidden"
      >
        <div className="container">
          <div className="row align-items-center gy-5">
            <div className="col-lg-6">
              <div className="d-flex align-items-center gap-2 flex-wrap mb-4">
                {["React 18", "Vite", "Node.js", "SaaS ERP", "Vehicle Washing"].map((b) => (
                  <span key={b} className="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">
                    {b}
                  </span>
                ))}
              </div>
              <h1 className="fw-bold lh-sm mb-3" style={{ fontSize: "clamp(1.8rem, 4vw, 3rem)" }}>
                Building a Smart <span className="text-main">Vehicle Washing Center</span> ERP SaaS Platform
              </h1>
              <p className="text-body mb-2" style={{ fontSize: "1.05rem" }}>
                React + Vite &nbsp;|&nbsp; Node.js &nbsp;|&nbsp; Slot Booking &nbsp;|&nbsp; Rewards &nbsp;|&nbsp; Multi-tenant SaaS
              </p>
              <div className="d-flex align-items-center gap-2 flex-wrap mb-5">
                <span className="monorepo-badge"><i className="ph ph-git-branch"></i> packages/frontend</span>
                <span className="monorepo-badge"><i className="ph ph-git-branch"></i> packages/backend</span>
                <span className="monorepo-badge"><i className="ph ph-git-branch"></i> packages/shared</span>
              </div>
              <div className="d-flex align-items-center gap-3 flex-wrap">
                <Link
                  href={routes.contact}
                  className="btn btn-main px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2"
                >
                  <i className="ph ph-paper-plane-tilt"></i> Request a Demo
                </Link>
                <Link
                  href={routes.contact}
                  className="btn px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2"
                  style={{ border: "2px solid hsl(var(--main))", color: "hsl(var(--main))", background: "transparent" }}
                >
                  <i className="ph ph-chat-circle-dots"></i> Request a Quote
                </Link>
              </div>
            </div>

            <div className="col-lg-6 d-flex align-items-center justify-content-center">
              <img
                src="/assets/images/case-study/washing.jpeg"
                alt="Washing ERP Dashboard"
                className="w-100 tw-rounded-2xl"
                style={{ maxHeight: 480, objectFit: "contain" }}
              />
            </div>
          </div>

          {/* Meta Cards */}
          <div className="row gy-3 mt-5">
            {metaCards.map((m) => (
              <div className="col-6 col-md-4 col-lg" key={m.label}>
                <div className="d-flex flex-column align-items-center text-center p-4 bg-white border border-neutral-200 rounded-3 h-100 shadow-sm">
                  <span
                    className="d-flex align-items-center justify-content-center rounded-circle bg-main-50 text-main mb-3"
                    style={{ width: 52, height: 52, fontSize: "1.4rem" }}
                  >
                    <i className={`ph ${m.icon}`}></i>
                  </span>
                  <span className="text-body fw-medium d-block mb-1" style={{ fontSize: "0.82rem" }}>{m.label}</span>
                  <span className="fw-bold text-heading-color">{m.value}</span>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Project Overview */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="row align-items-center gy-5">
            <div className="col-lg-6">
              <span className="section-label">About the Project</span>
              <h2 className="fw-bold mb-4">Project <span className="text-main">Overview</span></h2>
              <p className="text-body lh-lg mb-4">
                <strong>Washing ERP</strong> is a multi-tenant SaaS platform built with React 18 + Vite frontend and Node.js + Express backend. Any vehicle washing center owner can purchase a subscription, set up their service center, configure working hours, divide their day into booking slots, and start accepting customer bookings — all within minutes.
              </p>
              <p className="text-body lh-lg mb-5">
                Customers earn reward points on every wash, admins manage schedules, invoices, and plans, while the platform handles multi-tenant isolation, subscription billing, and notifications automatically.
              </p>
              <div className="d-flex align-items-center gap-4 flex-wrap">
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>Multi</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>Tenant SaaS</div>
                </div>
                <div style={{ width: 1, height: 40, background: "#e5e7eb" }}></div>
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>4</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>User Roles</div>
                </div>
                <div style={{ width: 1, height: 40, background: "#e5e7eb" }}></div>
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>3</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>Subscription Plans</div>
                </div>
              </div>
            </div>
            <div className="col-lg-6">
              <div className="row gy-3 gx-3 mb-3">
                {roleCards.map((r) => (
                  <div className="col-6" key={r.title}>
                    <div className="role-card">
                      <div className="role-icon"><i className={`ph ${r.icon}`}></i></div>
                      <div>
                        <div className="fw-bold text-heading-color" style={{ fontSize: "0.88rem" }}>{r.title}</div>
                        <div className="text-body" style={{ fontSize: "0.76rem" }}>{r.text}</div>
                      </div>
                    </div>
                  </div>
                ))}
              </div>
              <div className="rounded-3 p-4" style={{ background: "#0f1825" }}>
                <div className="text-white fw-semibold mb-3" style={{ fontSize: "0.82rem", letterSpacing: 1 }}>MONOREPO STRUCTURE</div>
                {monorepoPackages.map((pkg) => (
                  <div className="d-flex align-items-center gap-2 mb-2" style={{ fontFamily: "monospace", fontSize: 11 }} key={pkg.name}>
                    <i className={`ph ${pkg.icon}`} style={{ color: pkg.color, fontSize: 14 }}></i>
                    <span style={{ color: pkg.color }}>{pkg.name}</span>
                    <span style={{ color: "#8aafc4", marginLeft: "auto" }}>{pkg.desc}</span>
                  </div>
                ))}
                <div className="mt-3 pt-2" style={{ borderTop: "1px solid rgba(255,255,255,0.1)" }}>
                  <span style={{ color: "#8aafc4", fontSize: 10, fontFamily: "monospace" }}>npm workspaces • multi-tenant schema per subscription</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* SaaS Onboarding */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center mb-60">
            <span className="section-label d-block">SaaS Onboarding</span>
            <h2 className="fw-bold">Purchase, Setup &amp; <span className="text-main">Go Live</span></h2>
            <p className="text-body mt-2 mx-auto" style={{ maxWidth: 520 }}>Any washing center owner can sign up, choose a plan, fill their center details, and be live in minutes — no code needed.</p>
          </div>

          <div className="row gy-4 mb-60">
            {onboardingSteps.map((step) => (
              <div className="col-6 col-lg" key={step.num}>
                <div className="d-flex flex-column align-items-center text-center p-4 bg-white border border-neutral-200 rounded-3 h-100 shadow-sm">
                  <span
                    className="fw-bold rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style={{ width: 44, height: 44, background: `${step.color}20`, color: step.color, fontSize: "1.1rem", border: `2px solid ${step.color}` }}
                  >
                    {step.num}
                  </span>
                  <i className={`ph ${step.icon} text-main mb-2`} style={{ fontSize: "1.4rem" }}></i>
                  <div className="fw-semibold text-heading-color mb-1" style={{ fontSize: "0.88rem" }}>{step.title}</div>
                  <div className="text-body" style={{ fontSize: "0.78rem" }}>{step.text}</div>
                </div>
              </div>
            ))}
          </div>

          <div className="row gy-4 justify-content-center">
            {plans.map((plan) => (
              <div className="col-md-6 col-lg-4" key={plan.name}>
                <div className={`plan-card${plan.popular ? " popular" : ""}`}>
                  {plan.popular && (
                    <div className="mb-3"><span className="plan-badge">Most Popular</span></div>
                  )}
                  <div className="fw-bold text-heading-color mb-1" style={{ fontSize: "1.1rem" }}>{plan.name}</div>
                  <div className="fw-bold text-main mb-1" style={{ fontSize: "1.8rem" }}>{plan.price}</div>
                  <div className="text-body mb-4" style={{ fontSize: "0.82rem" }}>{plan.desc}</div>
                  <ul className="list-unstyled d-flex flex-column gap-2 mb-4">
                    {plan.features.map((feat) => (
                      <li className="d-flex align-items-center gap-2" key={feat}>
                        <i className="ph ph-check-circle text-main flex-shrink-0"></i>
                        <span className="text-body" style={{ fontSize: "0.83rem" }}>{feat}</span>
                      </li>
                    ))}
                  </ul>
                  <Link
                    href={routes.contact}
                    className={`btn w-100 py-2 rounded-pill fw-semibold ${plan.popular ? "btn-main" : ""}`}
                    style={plan.popular ? undefined : { border: "2px solid hsl(var(--main))", color: "hsl(var(--main))" }}
                  >
                    Get Started
                  </Link>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Business Challenges */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="row gy-5 align-items-start">
            <div className="col-lg-5">
              <span className="section-label">Pain Points</span>
              <h2 className="fw-bold mb-3">Business <span className="text-main">Challenges</span></h2>
              <p className="text-body lh-lg mb-4">Vehicle washing centers had no digital system to manage bookings, schedules, or customer loyalty:</p>
              <div
                className="rounded-3 p-5 d-flex flex-column align-items-center justify-content-center text-center"
                style={{ background: "linear-gradient(135deg,#e0f5f5,#f0fafa)", minHeight: 260 }}
              >
                <i className="ph ph-warning-circle text-main" style={{ fontSize: "4rem" }}></i>
                <div className="fw-bold text-heading-color mt-3 mb-1">Walk-ins Only, No System</div>
                <div className="text-body" style={{ fontSize: "0.88rem", maxWidth: 220 }}>Long queues, no-shows, missed revenue, and zero customer retention</div>
              </div>
            </div>
            <div className="col-lg-7">
              <div className="d-flex flex-column gap-3 mt-lg-5 pt-lg-3">
                {challenges.map((c, i) => (
                  <div className="challenge-item" key={i}>
                    <span className="challenge-num">{String(i + 1).padStart(2, "0")}</span>
                    <span className="text-body">{c}</span>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Our Role */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-6">
              <span className="section-label">What We Built</span>
              <h2 className="fw-bold mb-3">Our Role &amp; <span className="text-main">Responsibilities</span></h2>
              <p className="text-body mb-4">We designed and developed the full SaaS ERP end-to-end — multi-tenant architecture, React SPA, Node.js API, slot engine, reward system, invoicing, and notification pipeline.</p>
              <div className="d-flex flex-column gap-3">
                {roleItems.map((item, i) => (
                  <div className="d-flex align-items-center gap-3" key={i}>
                    <span
                      className="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle bg-main-50 text-main"
                      style={{ width: 36, height: 36, minWidth: 36, fontSize: "1.1rem" }}
                    >
                      <i className={`ph ${item.icon}`}></i>
                    </span>
                    <span className="text-body">{item.text}</span>
                  </div>
                ))}
              </div>
            </div>
            <div className="col-lg-6">
              <div className="bg-white rounded-3 p-4 shadow-sm border">
                <div className="fw-bold text-heading-color mb-4" style={{ fontSize: "1rem" }}>Development Timeline</div>
                {timeline.map((t, i) => (
                  <div className="timeline-item" key={i}>
                    <div className="timeline-dot"><i className={`ph ${t.icon}`} style={{ fontSize: 14 }}></i></div>
                    <div className="fw-semibold text-heading-color" style={{ fontSize: "0.9rem" }}>{t.title}</div>
                    <div className="text-body" style={{ fontSize: "0.82rem" }}>{t.text}</div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Slot System Deep Dive */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-6">
              <span className="section-label">Slot Booking Engine</span>
              <h2 className="fw-bold mb-4">Schedule, Slots &amp; <span className="text-main">Bookings</span></h2>
              <p className="text-body lh-lg mb-4">
                The admin sets the center&apos;s working hours and slot duration (e.g. 30 mins). The Node.js slot engine automatically divides the day into equal time slots. The React frontend shows customers a live color-coded slot board — green for available, red for booked.
              </p>
              <div className="d-flex flex-column gap-3">
                {slotEngineItems.map((item, i) => (
                  <div className="d-flex align-items-center gap-3" key={i}>
                    <span
                      className="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle bg-main-50 text-main"
                      style={{ width: 36, height: 36, minWidth: 36, fontSize: "1.1rem" }}
                    >
                      <i className={`ph ${item.icon}`}></i>
                    </span>
                    <span className="text-body">{item.text}</span>
                  </div>
                ))}
              </div>
            </div>
            <div className="col-lg-6">
              <div className="bg-white rounded-3 p-4 shadow-sm border mb-3">
                <div className="fw-bold text-heading-color mb-3" style={{ fontSize: "0.9rem" }}>Weekly Schedule Config</div>
                {weeklySchedule.map((day) => (
                  <div className="d-flex align-items-center gap-3 py-2" style={{ borderBottom: "1px solid #f3f4f6" }} key={day.day}>
                    <span className="text-body" style={{ width: 80, fontSize: "0.82rem", fontWeight: 600 }}>{day.day}</span>
                    {day.holiday ? (
                      <span className="badge rounded-pill" style={{ background: "#fee2e2", color: "#b91c1c", fontSize: "0.72rem" }}>Holiday</span>
                    ) : (
                      <>
                        <span className="text-body" style={{ fontSize: "0.78rem" }}>{day.hours}</span>
                        <span className="badge rounded-pill bg-main-50 text-main ms-auto" style={{ fontSize: "0.72rem" }}>{day.slots}</span>
                      </>
                    )}
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Reward System Deep Dive */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-5">
              <span className="section-label">Customer Loyalty</span>
              <h2 className="fw-bold mb-4">Reward Points <span className="text-main">Engine</span></h2>
              <p className="text-body lh-lg mb-4">
                After every completed vehicle wash, the system automatically credits reward points to the customer&apos;s wallet. The admin configures how many points are earned per wash type and what rewards are redeemable.
              </p>
              <div className="d-flex flex-column gap-3">
                {rewardItems.map((item, i) => (
                  <div className="d-flex align-items-center gap-3" key={i}>
                    <span
                      className="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle bg-main-50 text-main"
                      style={{ width: 36, height: 36, minWidth: 36, fontSize: "1.1rem" }}
                    >
                      <i className={`ph ${item.icon}`}></i>
                    </span>
                    <span className="text-body">{item.text}</span>
                  </div>
                ))}
              </div>
            </div>
            <div className="col-lg-7">
              <div className="bg-white rounded-3 p-4 shadow-sm border">
                <div className="fw-bold text-heading-color mb-4" style={{ fontSize: "0.9rem" }}>Customer Reward Wallet</div>
                {rewardWallet.map((cust) => (
                  <div className="d-flex align-items-center gap-3 mb-3" key={cust.name}>
                    <div
                      className="rounded-circle bg-main-50 d-flex align-items-center justify-content-center flex-shrink-0"
                      style={{ width: 36, height: 36, fontSize: "0.75rem", fontWeight: 700, color: "hsl(var(--main))" }}
                    >
                      {cust.name.slice(0, 2).toUpperCase()}
                    </div>
                    <div style={{ flex: 1, minWidth: 0 }}>
                      <div className="d-flex justify-content-between mb-1">
                        <span className="fw-semibold text-heading-color" style={{ fontSize: "0.82rem" }}>{cust.name}</span>
                        <span className="fw-bold text-main" style={{ fontSize: "0.78rem" }}>{cust.pts}</span>
                      </div>
                      <div className="reward-bar">
                        <div className="reward-fill" style={{ width: cust.percent }}></div>
                      </div>
                      <div style={{ fontSize: "0.7rem", color: "#888", marginTop: 2 }}>
                        <span style={{ color: cust.color }}>{cust.tier}</span>
                      </div>
                    </div>
                  </div>
                ))}
                <div className="rounded-3 p-3 mt-3" style={{ background: "#f8fafc", border: "1px solid #e5e7eb" }}>
                  <div className="fw-semibold text-heading-color mb-2" style={{ fontSize: "0.82rem" }}>Admin Reward Config</div>
                  <div className="d-flex flex-wrap gap-2">
                    {rewardConfig.map((cfg) => (
                      <span className="badge bg-main-50 text-main rounded-pill" style={{ fontSize: "0.72rem" }} key={cfg}>{cfg}</span>
                    ))}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Key Modules */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="text-center mb-60">
            <span className="section-label d-block">Platform Modules</span>
            <h2 className="fw-bold">Washing ERP in <span className="text-main">Action</span></h2>
            <p className="text-body mt-2 mx-auto" style={{ maxWidth: 540 }}>Every module built around the washing center workflow — from booking to payment to loyalty rewards.</p>
          </div>
          <div className="row gy-4 gx-4">
            {modules.map((mod, i) => (
              <div className="col-md-6 col-lg-4" key={i}>
                <div className="module-card">
                  <div className="module-icon"><i className={`ph ${mod.icon}`}></i></div>
                  <div className="fw-semibold text-heading-color mb-2" style={{ fontSize: "0.95rem" }}>{mod.title}</div>
                  <div className="text-body" style={{ fontSize: "0.83rem" }}>{mod.text}</div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Tech Stack */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="row gy-5 align-items-stretch">
            <div className="col-lg-6">
              <div className="rounded-3 h-100 p-5" style={{ background: "#0f1825" }}>
                <div className="d-flex align-items-center gap-3 mb-5">
                  <div
                    className="rounded-circle d-flex align-items-center justify-content-center"
                    style={{ width: 72, height: 72, minWidth: 72, background: "#1e2d40" }}
                  >
                    <i className="ph ph-car" style={{ fontSize: "2rem", color: "hsl(var(--main))" }}></i>
                  </div>
                  <span className="text-white fw-semibold" style={{ fontSize: "1.1rem" }}>Washing ERP Tech Stack</span>
                </div>
                <ul className="d-flex flex-column gap-3 list-unstyled">
                  {techList.map((tech) => (
                    <li className="d-flex align-items-center gap-2" key={tech.label}>
                      <i className="ph ph-caret-right flex-shrink-0" style={{ color: tech.color }}></i>
                      <span style={{ color: "rgba(255,255,255,0.9)", fontSize: "0.88rem" }}>
                        <strong style={{ color: tech.color }}>{tech.label}:</strong> {tech.text}
                      </span>
                    </li>
                  ))}
                </ul>
              </div>
            </div>
            <div className="col-lg-6">
              <div className="d-flex flex-column gap-4 h-100">
                <div>
                  <span className="section-label">Solution Delivered</span>
                  <h2 className="fw-bold mb-3">What We <span className="text-main">Built</span></h2>
                  <p className="text-body lh-lg">A production-ready multi-tenant SaaS ERP that any washing center can subscribe to, configure, and use immediately — with zero technical knowledge required.</p>
                </div>
                <div className="row gy-3 gx-3">
                  {solutionCards.map((s, i) => (
                    <div className="col-6" key={i}>
                      <div className="module-card p-3">
                        <div className="d-flex align-items-center gap-2 mb-1">
                          <i className={`ph ${s.icon} text-main`} style={{ fontSize: "1.1rem" }}></i>
                          <span className="fw-semibold text-heading-color" style={{ fontSize: "0.82rem" }}>{s.title}</span>
                        </div>
                        <div className="text-body" style={{ fontSize: "0.76rem" }}>{s.text}</div>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Results */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="text-center mb-60">
            <span className="section-label d-block">Outcomes</span>
            <h2 className="fw-bold">Results &amp; <span className="text-main">Impact</span></h2>
            <p className="text-body mt-2 mx-auto" style={{ maxWidth: 540 }}>Measurable improvements for washing centers after switching to the Washing ERP SaaS platform.</p>
          </div>
          <div className="row gy-4 justify-content-center">
            {resultStats.map((r, i) => (
              <div className="col-6 col-lg-3" key={i}>
                <div className="result-stat shadow-sm">
                  <div className="big">{r.value}</div>
                  <span
                    className="d-flex align-items-center justify-content-center rounded-circle bg-main-50 text-main mx-auto mb-3"
                    style={{ width: 44, height: 44, fontSize: "1.2rem" }}
                  >
                    <i className={`ph ${r.icon}`}></i>
                  </span>
                  <div className="fw-semibold text-heading-color" style={{ fontSize: "0.88rem" }}>{r.label}</div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Why This Matters */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-6">
              <span className="section-label">The Takeaway</span>
              <h2 className="fw-bold mb-5">Why This <span className="text-main">Case Study</span> Matters</h2>
              <div className="row gy-4">
                {whyMatters.map((w, i) => (
                  <div className="col-sm-6" key={i}>
                    <div className="why-card">
                      <span
                        className="d-flex align-items-center justify-content-center rounded-2 bg-main-50 text-main"
                        style={{ width: 52, height: 52, fontSize: "1.4rem" }}
                      >
                        <i className={`ph ${w.icon}`}></i>
                      </span>
                      <h5 className="fw-semibold text-heading-color mb-0" style={{ fontSize: "0.92rem" }}>{w.text}</h5>
                    </div>
                  </div>
                ))}
              </div>
            </div>
            <div className="col-lg-6">
              <div className="bg-white rounded-3 shadow p-5">
                <div className="fw-bold text-heading-color mb-4">Platform Highlights</div>
                {highlights.map((stat) => (
                  <div className="mb-4" key={stat.label}>
                    <div className="d-flex justify-content-between mb-1">
                      <span className="text-body" style={{ fontSize: "0.85rem" }}>{stat.label}</span>
                      <span className="fw-bold text-main" style={{ fontSize: "0.85rem" }}>{stat.value}</span>
                    </div>
                    <div className="rounded-pill overflow-hidden" style={{ height: 6, background: "#e5e7eb" }}>
                      <div className="rounded-pill h-100" style={{ width: `${stat.percent}%`, background: "hsl(var(--main))" }}></div>
                    </div>
                  </div>
                ))}
                <Link
                  href={routes.contact}
                  className="btn btn-main w-100 py-3 rounded-pill fw-semibold d-flex align-items-center justify-content-center gap-2 mt-3"
                >
                  <i className="ph ph-paper-plane-tilt"></i> Request a Demo
                </Link>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* CTA */}
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
                  Multi-tenant SaaS — Go Live in <span className="text-yellow text-stroke-yellow">Minutes</span>
                </div>
              </div>

              <h3 className="splitTextStyleOne text-white">Ready to Launch Your Washing Center ERP?</h3>

              <div className="d-block">
                <div className="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Request a Quote</span>
                    </div>
                  </Link>
                  <a
                    target="_blank"
                    rel="noopener noreferrer"
                    href="https://calendly.com/zalgoinfotec/30min"
                    className="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Talk to Expert</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div className="tw-pt-8 text-center">
              <div className="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                {ctaTags.map((tag, i) => (
                  <span
                    key={tag}
                    className={`drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold rounded-pill ${
                      i % 3 === 0 ? "text-white gradient-bg-six" : i % 3 === 1 ? "text-heading bg-paste" : "text-heading bg-orange"
                    }`}
                  >
                    {tag}
                  </span>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>
    </PageShell>
  );
}
