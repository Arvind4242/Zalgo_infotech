import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Lead Management System Case Study - React & Node.js CRM",
  description:
    "How Zalgo Infotech built a Kanban-style lead CRM with React, Node.js, Socket.io notifications, follow-up automation, and Stripe/Razorpay payment tracking.",
  keywords: [
    "CRM case study",
    "lead management system case study",
    "custom CRM development project",
    "React Node.js CRM development",
    "sales pipeline software case study",
    "SaaS CRM development",
  ],
  path: "/leadmanagement",
});

const metaCards = [
  { icon: "ph-atom", label: "Frontend", value: "React 18 + Vite" },
  { icon: "ph-terminal", label: "Backend", value: "Node.js + Express" },
  { icon: "ph-funnel", label: "Project Type", value: "Lead CRM / SaaS" },
  { icon: "ph-clock", label: "Duration", value: "Ongoing" },
  { icon: "ph-globe", label: "Region", value: "Global" },
];

const pipelineStages = [
  { name: "New", desc: "Lead just captured — awaiting first contact", bg: "#dbeafe", color: "#1d4ed8", icon: "ph-plus-circle" },
  { name: "Contacted", desc: "First touchpoint made — call or email sent", bg: "#fef9c3", color: "#a16207", icon: "ph-phone" },
  { name: "Qualified", desc: "Needs confirmed — proposal stage", bg: "#f3e8ff", color: "#7c3aed", icon: "ph-check-circle" },
  { name: "Negotiation", desc: "Pricing discussed — awaiting decision", bg: "#fff7ed", color: "#c2410c", icon: "ph-handshake" },
  { name: "Closed / Won", desc: "Payment received — deal complete", bg: "#dcfce7", color: "#15803d", icon: "ph-seal-check" },
];

const roleCards = [
  { icon: "ph-shield-star", title: "Admin", text: "Full CRM control & team management" },
  { icon: "ph-user-circle-gear", title: "Sales Manager", text: "Assign leads, set targets & view reports" },
  { icon: "ph-user", title: "Sales Agent", text: "Handle leads, update status & log follow-ups" },
];

const challenges = [
  "No centralized place to capture and track incoming leads",
  "Lead status was managed in spreadsheets — prone to errors and stale data",
  "No follow-up reminders — agents missed callbacks and email sequences",
  "Payment collection was handled outside the system with no audit trail",
  "No automated notifications when a lead moved to a new stage",
  "Managers had no real-time visibility into team performance or pipeline health",
  "Separate tools for CRM, payments, and email meant duplicated data entry",
];

const roleItems = [
  { icon: "ph-atom", text: "React 18 + Vite SPA — Kanban-style lead pipeline board" },
  { icon: "ph-terminal", text: "Node.js + Express REST API with JWT role-based auth" },
  { icon: "ph-funnel", text: "Lead capture, assignment, and status change workflows" },
  { icon: "ph-clock-clockwise", text: "Follow-up automation engine — scheduled Node.js cron jobs" },
  { icon: "ph-currency-circle-dollar", text: "Payment handling with Stripe/Razorpay & invoice generation" },
  { icon: "ph-bell-ringing", text: "Real-time notifications via Node.js WebSocket (Socket.io)" },
  { icon: "ph-envelope", text: "Automated email sequences triggered on status changes" },
  { icon: "ph-chart-bar", text: "Sales analytics dashboard with React Query + Chart.js" },
];

const timeline = [
  { icon: "ph-clipboard-text", title: "Phase 1: Requirement Analysis", text: "Mapped sales workflows, pipeline stages, and notification triggers" },
  { icon: "ph-git-branch", title: "Phase 2: Monorepo Setup", text: "npm workspaces, shared TS types, ESLint & Prettier across packages" },
  { icon: "ph-atom", title: "Phase 3: React Frontend", text: "Kanban board, lead forms, payment UI — built with Vite + React Query" },
  { icon: "ph-terminal", title: "Phase 4: Node.js API + Automation", text: "REST API, follow-up cron engine, Socket.io & payment webhooks" },
  { icon: "ph-rocket-launch", title: "Phase 5: Deployment & Live", text: "Docker, CI/CD pipeline, SSL — production ready" },
];

const solutionCards = [
  { icon: "ph-funnel", title: "Lead Pipeline Board", text: "Drag-and-drop Kanban board to move leads across 5 status stages." },
  { icon: "ph-clock-clockwise", title: "Follow-up Automation", text: "Node.js cron jobs auto-schedule calls, emails & reminders per stage." },
  { icon: "ph-currency-circle-dollar", title: "Payment Handling", text: "Stripe/Razorpay payments with invoice generation & payment status tracking." },
  { icon: "ph-bell-ringing", title: "Real-time Notifications", text: "Socket.io push alerts for stage changes, new leads & payment events." },
  { icon: "ph-envelope", title: "Email Sequences", text: "Automated Nodemailer email drips triggered on status transitions." },
  { icon: "ph-chart-bar", title: "Analytics Dashboard", text: "Conversion funnel, revenue pipeline & team performance with Chart.js." },
];

const techList = [
  { label: "Frontend", text: "React 18 + Vite", color: "#61dafb" },
  { label: "Backend", text: "Node.js + Express", color: "#68a063" },
  { label: "Database", text: "MySQL via Prisma ORM", color: "#fff" },
  { label: "Auth", text: "JWT + Role Middleware", color: "#fff" },
  { label: "Realtime", text: "Socket.io (WebSocket)", color: "#25c2a0" },
  { label: "Automation", text: "Node-cron (follow-up jobs)", color: "#f0db4f" },
  { label: "Email", text: "Nodemailer + SMTP", color: "#fff" },
  { label: "Payments", text: "Stripe / Razorpay", color: "#635bff" },
  { label: "Styling", text: "Tailwind CSS + shadcn/ui", color: "#38bdf8" },
  { label: "Repo", text: "Monorepo (npm workspaces)", color: "#f0db4f" },
];

const modules = [
  { icon: "ph-funnel", title: "Lead Capture & Assignment", text: "Capture leads via forms or API import, auto-assign to agents by round-robin or manual rule." },
  { icon: "ph-arrows-left-right", title: "Status Management", text: "Drag-and-drop Kanban board to move leads across New → Contacted → Qualified → Negotiation → Closed." },
  { icon: "ph-clock-clockwise", title: "Follow-up Automation", text: "Node-cron jobs auto-schedule follow-up reminders, callbacks, and escalations per pipeline stage." },
  { icon: "ph-currency-circle-dollar", title: "Payment Handling", text: "Collect payments via Stripe/Razorpay links, track partial & full payments, generate invoices." },
  { icon: "ph-bell-ringing", title: "Real-time Notifications", text: "Socket.io pushes instant alerts to agents and managers on lead changes, payments, and deadlines." },
  { icon: "ph-envelope", title: "Email Drip Sequences", text: "Nodemailer sends automated email sequences triggered by lead stage transitions." },
  { icon: "ph-device-mobile", title: "SMS Alerts", text: "Twilio-powered SMS sent to leads and agents at key pipeline milestones." },
  { icon: "ph-chart-line", title: "Conversion Analytics", text: "React + Chart.js funnel charts, win/loss rates, revenue pipeline, and agent leaderboards." },
  { icon: "ph-note", title: "Activity Log", text: "Full audit trail of every status change, note, call log, and payment event per lead." },
];

const automationFlow = [
  { title: "Lead Created", desc: "Agent assigned, welcome email sent via Nodemailer", color: "#61dafb", icon: "ph-plus-circle" },
  { title: "No contact in 24h", desc: "Node-cron fires → agent gets Socket.io alert + SMS reminder", color: "#f0db4f", icon: "ph-clock" },
  { title: "Status → Contacted", desc: "Email drip #1 sent to lead, CRM activity log updated", color: "#68a063", icon: "ph-envelope" },
  { title: "Status → Qualified", desc: "Payment link generated via Stripe & sent to lead by email", color: "#a78bfa", icon: "ph-currency-circle-dollar" },
  { title: "Payment Received", desc: "Webhook triggers invoice PDF, lead marked Closed/Won", color: "#34d399", icon: "ph-seal-check" },
  { title: "Deal Lost", desc: "Automated re-engagement email scheduled for 30 days later", color: "#f87171", icon: "ph-arrow-counter-clockwise" },
];

const automationItems = [
  { icon: "ph-clock-clockwise", text: "Node-cron runs every 15 mins to check overdue follow-ups" },
  { icon: "ph-envelope", text: "Nodemailer sends stage-specific email templates automatically" },
  { icon: "ph-device-mobile", text: "Twilio SMS fires at key deal milestones & deadlines" },
  { icon: "ph-bell-ringing", text: "Socket.io pushes real-time in-app alerts to dashboard" },
];

const resultStats = [
  { value: "40%", label: "Increase in lead conversion rate", icon: "ph-trend-up" },
  { value: "0", label: "Missed follow-ups with automation engine", icon: "ph-clock-clockwise" },
  { value: "3x", label: "Faster pipeline visibility for managers", icon: "ph-lightning" },
  { value: "100%", label: "Payments tracked with full audit trail", icon: "ph-currency-circle-dollar" },
];

const whyMatters = [
  { icon: "ph-rocket-launch", text: "Proves real-world CRM scalability with React + Node.js stack" },
  { icon: "ph-clock-clockwise", text: "Demonstrates expertise in building backend automation engines" },
  { icon: "ph-currency-circle-dollar", text: "Shows end-to-end payment integration inside a CRM system" },
  { icon: "ph-handshake", text: "Builds trust for sales-heavy businesses needing a custom CRM" },
];

const highlights = [
  { label: "Lead Conversion Rate", value: "40%↑", percent: 70 },
  { label: "Follow-up Automation", value: "100%", percent: 100 },
  { label: "Payment Tracking", value: "100%", percent: 100 },
  { label: "Pipeline Visibility", value: "Real-time", percent: 90 },
];

const ctaTags = [
  "React 18 + Vite",
  "Node.js + Express",
  "Socket.io Realtime",
  "Follow-up Automation",
  "Stripe Payments",
  "Twilio SMS",
  "Nodemailer",
  "Node-cron Jobs",
  "Kanban Pipeline",
  "JWT Auth",
];

export default function LeadManagementPage() {
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
                {["React 18", "Vite", "Node.js", "Lead CRM"].map((b) => (
                  <span key={b} className="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">
                    {b}
                  </span>
                ))}
              </div>
              <h1 className="fw-bold lh-sm mb-3" style={{ fontSize: "clamp(1.8rem, 4vw, 3rem)" }}>
                Building a Smart <span className="text-main">Lead Management</span> System from Scratch
              </h1>
              <p className="text-body mb-2" style={{ fontSize: "1.05rem" }}>
                React + Vite &nbsp;|&nbsp; Node.js &nbsp;|&nbsp; Follow-up Automation &nbsp;|&nbsp; Payment Handling
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

            <div className="col-lg-6">
              <img
                src="/assets/images/case-study/leadmangement.jpeg"
                alt="Lead Management System"
                className="w-100 h-100 object-fit-cover tw-rounded-2xl"
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
                <strong>Lead Management System</strong> is a full-stack CRM platform built with a React 18 + Vite frontend and a Node.js + Express REST API backend. It enables sales teams to capture leads, track pipeline stages, manage payments, automate follow-ups, and send real-time notifications — all from a single fast SPA.
              </p>
              <p className="text-body lh-lg mb-5">
                Built as a monorepo with <code>packages/frontend</code>, <code>packages/backend</code>, and <code>packages/shared</code>, the system shares TypeScript types and Zod validators across both apps, keeping the lead data contracts consistent end-to-end.
              </p>
              <div className="d-flex align-items-center gap-4 flex-wrap">
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>5</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>Pipeline Stages</div>
                </div>
                <div style={{ width: 1, height: 40, background: "#e5e7eb" }}></div>
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>3</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>User Roles</div>
                </div>
                <div style={{ width: 1, height: 40, background: "#e5e7eb" }}></div>
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>Auto</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>Follow-up Engine</div>
                </div>
              </div>
            </div>
            <div className="col-lg-6">
              <div className="bg-white rounded-3 border border-neutral-200 p-4 mb-3">
                <div className="fw-bold text-heading-color mb-3" style={{ fontSize: "0.88rem" }}>Lead Pipeline Stages</div>
                {pipelineStages.map((stage) => (
                  <div className="d-flex align-items-center gap-3 mb-2 p-2 rounded-2" style={{ background: stage.bg }} key={stage.name}>
                    <i className={`ph ${stage.icon}`} style={{ color: stage.color, fontSize: "1.1rem" }}></i>
                    <div>
                      <span className="fw-semibold" style={{ color: stage.color, fontSize: "0.82rem" }}>{stage.name}</span>
                      <span className="text-body ms-2" style={{ fontSize: "0.75rem" }}>{stage.desc}</span>
                    </div>
                  </div>
                ))}
              </div>
              <div className="row gy-2 gx-2">
                {roleCards.map((r) => (
                  <div className="col-4" key={r.title}>
                    <div className="role-card flex-column text-center p-3">
                      <div className="role-icon mx-auto mb-2"><i className={`ph ${r.icon}`}></i></div>
                      <div className="fw-bold text-heading-color" style={{ fontSize: "0.78rem" }}>{r.title}</div>
                      <div className="text-body" style={{ fontSize: "0.7rem" }}>{r.text}</div>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Business Challenges */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="row gy-5 align-items-start">
            <div className="col-lg-5">
              <span className="section-label">Pain Points</span>
              <h2 className="fw-bold mb-3">Business <span className="text-main">Challenges</span></h2>
              <p className="text-body lh-lg mb-4">The sales team had no centralized system to manage leads, track follow-ups, or collect payments:</p>
              <div
                className="rounded-3 p-5 d-flex flex-column align-items-center justify-content-center text-center"
                style={{ background: "linear-gradient(135deg,#e0f5f5,#f0fafa)", minHeight: 260 }}
              >
                <i className="ph ph-warning-circle text-main" style={{ fontSize: "4rem" }}></i>
                <div className="fw-bold text-heading-color mt-3 mb-1">Leads Falling Through the Cracks</div>
                <div className="text-body" style={{ fontSize: "0.88rem", maxWidth: 220 }}>No visibility into pipeline stage, missed follow-ups, and lost revenue</div>
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
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-6">
              <span className="section-label">What We Built</span>
              <h2 className="fw-bold mb-3">Our Role &amp; <span className="text-main">Responsibilities</span></h2>
              <p className="text-body mb-4">We designed and developed the full system end-to-end — React SPA, Node.js API, automation engine, payment integration, and notification pipeline.</p>
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
              <div className="bg-white rounded-3 p-4 shadow-sm">
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

      {/* Solution Delivered */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="row gy-5">
            <div className="col-lg-7">
              <span className="section-label">What We Built</span>
              <h2 className="fw-bold mb-3">Solution <span className="text-main">Delivered</span></h2>
              <p className="text-body mb-5">A complete Lead Management CRM — React Kanban board on the frontend, Node.js API + automation engine on the backend, and a shared types package in the middle.</p>
              <div className="row gy-3 gx-3">
                {solutionCards.map((s, i) => (
                  <div className="col-sm-6" key={i}>
                    <div className="module-card">
                      <div className="module-icon"><i className={`ph ${s.icon}`}></i></div>
                      <div className="fw-semibold text-heading-color mb-1" style={{ fontSize: "0.92rem" }}>{s.title}</div>
                      <div className="text-body" style={{ fontSize: "0.82rem" }}>{s.text}</div>
                    </div>
                  </div>
                ))}
              </div>
            </div>

            <div className="col-lg-5">
              <div className="rounded-3 h-100 p-5 position-relative overflow-hidden" style={{ background: "#0f1825" }}>
                <div className="d-flex align-items-center gap-3 mb-5">
                  <div
                    className="rounded-circle d-flex align-items-center justify-content-center"
                    style={{ width: 72, height: 72, minWidth: 72, background: "#1e2d40" }}
                  >
                    <span className="fw-bold" style={{ fontSize: "1.1rem", color: "#61dafb" }}>Full<br />Stack</span>
                  </div>
                  <span className="text-white fw-semibold" style={{ fontSize: "1.1rem" }}>Lead CRM Platform</span>
                </div>
                <h3 className="text-white fw-bold mb-4">Technology Stack</h3>
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
                <div className="mt-5">
                  <Link
                    href={routes.contact}
                    className="btn fw-semibold px-4 py-3 rounded-pill d-inline-flex align-items-center gap-2"
                    style={{ background: "hsl(var(--main))", color: "#fff" }}
                  >
                    <i className="ph ph-paper-plane-tilt"></i> Request a Demo
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Key Features */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="text-center mb-60">
            <span className="section-label d-block">Core Features</span>
            <h2 className="fw-bold">Lead System in <span className="text-main">Action</span></h2>
            <p className="text-body mt-2 mx-auto" style={{ maxWidth: 540 }}>Every feature built around the sales workflow — from first capture to closed deal and payment collection.</p>
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
          <div className="text-center mt-5">
            <Link
              href={routes.contact}
              className="btn btn-main px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2"
            >
              <i className="ph ph-monitor"></i> Request a Live Demo
            </Link>
          </div>
        </div>
      </section>

      {/* Automation Deep Dive */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-5">
              <span className="section-label">Follow-up Engine</span>
              <h2 className="fw-bold mb-4">Automation &amp; <span className="text-main">Notifications</span></h2>
              <p className="text-body lh-lg mb-4">
                The Node.js follow-up engine runs scheduled cron jobs that evaluate every lead&apos;s last-contact date and pipeline stage, then automatically triggers the next action — zero manual effort for the sales team.
              </p>
              <p className="text-body lh-lg mb-5">
                All notification channels (Socket.io, Email, SMS) are unified through a single <code>NotificationService</code> in the shared package, so any Node.js event can push to all channels at once.
              </p>
              <div className="d-flex flex-column gap-3">
                {automationItems.map((item, i) => (
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
              <div className="rounded-3 p-4" style={{ background: "#0f1825" }}>
                <div className="text-white fw-bold mb-4" style={{ fontSize: "0.88rem", letterSpacing: 1 }}>FOLLOW-UP AUTOMATION FLOW</div>
                {automationFlow.map((flow, i) => (
                  <div className="d-flex align-items-start gap-3 mb-4" key={i}>
                    <span
                      className="d-flex align-items-center justify-content-center rounded-circle flex-shrink-0"
                      style={{ width: 32, height: 32, minWidth: 32, background: "rgba(255,255,255,0.08)" }}
                    >
                      <i className={`ph ${flow.icon}`} style={{ color: flow.color, fontSize: 14 }}></i>
                    </span>
                    <div>
                      <div className="fw-semibold" style={{ color: flow.color, fontSize: "0.82rem" }}>{flow.title}</div>
                      <div style={{ color: "#8aafc4", fontSize: "0.78rem" }}>{flow.desc}</div>
                    </div>
                  </div>
                ))}
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
            <p className="text-body mt-2 mx-auto" style={{ maxWidth: 540 }}>Measurable improvements across the sales team after Lead Management System implementation.</p>
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
                <div className="fw-bold text-heading-color mb-4">System Highlights</div>
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
                  <span className="text-yellow text-stroke-yellow">40%</span> Higher Lead Conversion — Let&apos;s Build Your CRM
                </div>
              </div>

              <h3 className="splitTextStyleOne text-white">Ready to Automate Your Sales Pipeline?</h3>

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
