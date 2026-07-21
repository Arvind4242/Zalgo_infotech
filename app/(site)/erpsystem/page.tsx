import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "ERP System Case Study - Institute Management Platform",
  description:
    "How Zalgo Infotech built a role-based institute ERP with React 18, Vite, and Node.js — covering admissions, attendance, fees, exams, and report cards for schools.",
  keywords: [
    "ERP case study",
    "institute management system case study",
    "school ERP development",
    "React Node.js ERP",
    "education software development case study",
    "custom ERP development project",
  ],
  path: "/erpsystem",
});

const metaCards = [
  { icon: "ph-atom", label: "Frontend", value: "React 18 + Vite" },
  { icon: "ph-terminal", label: "Backend", value: "Node.js + Express" },
  { icon: "ph-git-branch", label: "Architecture", value: "Monorepo (npm workspaces)" },
  { icon: "ph-clock", label: "Duration", value: "Ongoing" },
  { icon: "ph-globe", label: "Region", value: "Global" },
];

const roleCards = [
  { icon: "ph-shield-star", title: "Admin", text: "Full system control & configuration" },
  { icon: "ph-chalkboard-teacher", title: "Teacher", text: "Classes, attendance & grades" },
  { icon: "ph-student", title: "Student", text: "Portal, results & timetable" },
  { icon: "ph-users", title: "Parent", text: "Child progress & fee status" },
];

const monorepoPackages = [
  { icon: "ph-folder", name: "packages/frontend", desc: "React 18 + Vite SPA", color: "#61dafb" },
  { icon: "ph-folder", name: "packages/backend", desc: "Node.js + Express API", color: "#68a063" },
  { icon: "ph-folder", name: "packages/shared", desc: "TypeScript types & validators", color: "#f0db4f" },
];

const challenges = [
  "Manual student enrollment and fee collection processes",
  "No real-time attendance tracking for students and staff",
  "Disconnected communication between teachers, students, and parents",
  "Lack of centralized exam, result, and report card management",
  "Difficulty managing timetables, holidays, and academic calendar",
  "No role-based access control for multi-department management",
  "Multiple separate codebases causing duplicated logic and inconsistency",
];

const roleItems = [
  { icon: "ph-atom", text: "React 18 SPA with Vite — component-driven UI architecture" },
  { icon: "ph-terminal", text: "Node.js + Express REST API with JWT authentication" },
  { icon: "ph-git-branch", text: "Monorepo setup with npm workspaces & shared TypeScript types" },
  { icon: "ph-lock-key", text: "Role-based auth guards (Admin, Teacher, Student, Parent)" },
  { icon: "ph-currency-circle-dollar", text: "Fee management with invoice generation & payment tracking" },
  { icon: "ph-calendar-check", text: "Attendance module with real-time updates via React Query" },
  { icon: "ph-exam", text: "Exam scheduling, result entry, and report card generation" },
  { icon: "ph-cloud-arrow-up", text: "Cloud deployment, CI/CD pipeline setup & ongoing maintenance" },
];

const timeline = [
  { icon: "ph-clipboard-text", title: "Phase 1: Requirement Analysis", text: "Mapped all institute workflows and monorepo package structure" },
  { icon: "ph-git-branch", title: "Phase 2: Monorepo Setup", text: "Bootstrapped npm workspaces, shared TS config, ESLint & Prettier" },
  { icon: "ph-atom", title: "Phase 3: React Frontend", text: "Built all 50+ pages & components with Vite HMR & React Query" },
  { icon: "ph-terminal", title: "Phase 4: Node.js API", text: "Designed RESTful API with Express, JWT auth & MySQL via Prisma" },
  { icon: "ph-rocket-launch", title: "Phase 5: Deployment & Live", text: "Docker-based deployment, CI/CD, SSL — live with v2.0" },
];

const solutionCards = [
  { icon: "ph-atom", title: "React SPA", text: "50+ pages built with React 18, React Router v6, and Tailwind CSS." },
  { icon: "ph-terminal", title: "Node.js REST API", text: "Express-based API with JWT auth, role middleware & Prisma ORM." },
  { icon: "ph-git-branch", title: "Shared Package", text: "Common TypeScript types, Zod validators & utility functions." },
  { icon: "ph-lightning", title: "Vite Build", text: "Sub-second HMR in dev, optimised production bundles with code-splitting." },
  { icon: "ph-files", title: "Report Cards", text: "Dynamic PDF export via server-side Node.js Puppeteer rendering." },
  { icon: "ph-chart-bar", title: "Analytics Dashboard", text: "Live stats with React Query + Chart.js for admin reporting." },
];

const techList = [
  { label: "Frontend", text: "React 18 + Vite", color: "#61dafb" },
  { label: "Backend", text: "Node.js + Express", color: "#68a063" },
  { label: "Database", text: "MySQL via Prisma ORM", color: "#fff" },
  { label: "Auth", text: "JWT + Role Middleware", color: "#fff" },
  { label: "Styling", text: "Tailwind CSS + shadcn/ui", color: "#38bdf8" },
  { label: "State", text: "React Query + Zustand", color: "#fff" },
  { label: "Repo", text: "Monorepo (npm workspaces)", color: "#f0db4f" },
  { label: "Deploy", text: "Docker + CI/CD Pipeline", color: "#fff" },
];

const modules = [
  { icon: "ph-student", title: "Student Management", text: "Enrollment, profiles, documents, academic history, and section assignment." },
  { icon: "ph-calendar-check", title: "Attendance Tracking", text: "Real-time attendance with React state updates and instant parent alerts." },
  { icon: "ph-currency-circle-dollar", title: "Fee Management", text: "Fee structure builder, invoice generation, and payment gateway integration." },
  { icon: "ph-exam", title: "Exam & Results", text: "Exam scheduling, marks entry, automated result calculation, and PDF export." },
  { icon: "ph-chalkboard-teacher", title: "Staff & HR", text: "Staff profiles, payroll, leave management, and performance records." },
  { icon: "ph-clock", title: "Timetable Builder", text: "Interactive React drag-and-drop timetable with conflict detection." },
  { icon: "ph-book-open", title: "Library Module", text: "Book catalog, issue/return tracking, and overdue fine management." },
  { icon: "ph-bus", title: "Transport Module", text: "Route management, vehicle tracking, and student transport assignment." },
  { icon: "ph-bell-ringing", title: "Notice Board", text: "Real-time announcements with push notifications via Node.js WebSocket." },
];

const resultStats = [
  { value: "80%", label: "Reduction in admin workload", icon: "ph-trend-down" },
  { value: "96%", label: "Attendance accuracy & real-time tracking", icon: "ph-calendar-check" },
  { value: "3x", label: "Faster page loads with Vite-optimised bundles", icon: "ph-lightning" },
  { value: "50+", label: "Modules covering every institute function", icon: "ph-squares-four" },
];

const whyMatters = [
  { icon: "ph-rocket-launch", text: "Proves real-world monorepo scalability for large ERP systems" },
  { icon: "ph-atom", text: "Demonstrates full-stack React + Node.js expertise with Vite" },
  { icon: "ph-git-branch", text: "Shows ability to architect and manage complex monorepo codebases" },
  { icon: "ph-handshake", text: "Builds trust for global education & enterprise SaaS clients" },
];

const highlights = [
  { label: "Students Enrolled", value: "1,200+", percent: 85 },
  { label: "Attendance Rate", value: "96%", percent: 96 },
  { label: "Fee Collection", value: "₹48L+", percent: 78 },
  { label: "Active Modules", value: "50+", percent: 100 },
];

const ctaTags = [
  "React 18",
  "Node.js + Express",
  "Vite Monorepo",
  "TypeScript",
  "Prisma ORM",
  "React Query",
  "Tailwind CSS",
  "JWT Auth",
  "Docker",
  "CI/CD Pipeline",
];

export default function ErpSystemPage() {
  return (
    <PageShell>
      <style>{`
        .erp-hero-mockup { background: #1a2332; border-radius: 16px; overflow: hidden; box-shadow: 0 24px 60px rgba(0,0,0,0.18); }
        .erp-mockup-bar { background: #0f1825; padding: 10px 16px; display: flex; align-items: center; gap: 8px; }
        .erp-mockup-dot { width: 10px; height: 10px; border-radius: 50%; display: inline-block; }
        .erp-mockup-url { background: #1e2d40; color: #8aafc4; font-size: 11px; padding: 3px 14px; border-radius: 20px; flex: 1; margin-left: 8px; }
        .erp-sidebar { background: #0f1825; width: 56px; min-height: 220px; display: flex; flex-direction: column; align-items: center; gap: 18px; padding: 18px 0; }
        .erp-sidebar-icon { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #8aafc4; }
        .erp-sidebar-icon.active { background: hsl(var(--main)); color: #fff; }
        .erp-main-content { background: #f5f9ff; flex: 1; padding: 14px; }
        .erp-stat-mini { background: #fff; border-radius: 8px; padding: 10px 14px; flex: 1; min-width: 0; }
        .erp-stat-mini .num { font-size: 1.1rem; font-weight: 700; color: hsl(var(--main)); }
        .erp-stat-mini .lbl { font-size: 10px; color: #888; }
        .erp-table-row { background: #fff; border-radius: 6px; padding: 8px 12px; margin-bottom: 6px; display: flex; align-items: center; gap: 10px; font-size: 11px; }
        .erp-table-row .av { width: 24px; height: 24px; border-radius: 50%; background: hsl(var(--main-h),var(--main-s),85%); display: flex; align-items: center; justify-content: center; color: hsl(var(--main)); font-size: 10px; font-weight: 700; }
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
                {["React 18", "Node.js", "Vite", "Monorepo", "ERP System"].map((b) => (
                  <span key={b} className="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">
                    {b}
                  </span>
                ))}
              </div>
              <h1 className="fw-bold lh-sm mb-3" style={{ fontSize: "clamp(1.8rem, 4vw, 3rem)" }}>
                Building a Powerful <span className="text-main">Institute Management</span> ERP System from Scratch
              </h1>
              <p className="text-body mb-2" style={{ fontSize: "1.05rem" }}>
                React + Node.js &nbsp;|&nbsp; Vite &nbsp;|&nbsp; Monorepo &nbsp;|&nbsp; ERP Platform
              </p>
              <div className="d-flex align-items-center gap-2 flex-wrap mb-5">
                <span className="monorepo-badge"><i className="ph ph-git-branch"></i> packages/frontend</span>
                <span className="monorepo-badge"><i className="ph ph-git-branch"></i> packages/backend</span>
                <span className="monorepo-badge"><i className="ph ph-git-branch"></i> packages/shared</span>
              </div>
              <div className="d-flex align-items-center gap-3 flex-wrap">
                <a
                  href="https://erp.zalgostore.com/"
                  target="_blank"
                  rel="noopener noreferrer"
                  className="btn btn-main px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2"
                >
                  <i className="ph ph-arrow-square-out"></i> Visit Live ERP
                </a>
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
              <div className="erp-hero-mockup">
                <div className="erp-mockup-bar">
                  <span className="erp-mockup-dot" style={{ background: "#ff5f57" }}></span>
                  <span className="erp-mockup-dot" style={{ background: "#ffbd2e" }}></span>
                  <span className="erp-mockup-dot" style={{ background: "#28c840" }}></span>
                  <span className="erp-mockup-url">erp.zalgostore.com</span>
                </div>
                <div className="d-flex">
                  <div className="erp-sidebar">
                    <div className="erp-sidebar-icon active"><i className="ph ph-squares-four"></i></div>
                    <div className="erp-sidebar-icon"><i className="ph ph-student"></i></div>
                    <div className="erp-sidebar-icon"><i className="ph ph-users"></i></div>
                    <div className="erp-sidebar-icon"><i className="ph ph-currency-circle-dollar"></i></div>
                    <div className="erp-sidebar-icon"><i className="ph ph-calendar-check"></i></div>
                    <div className="erp-sidebar-icon"><i className="ph ph-exam"></i></div>
                    <div className="erp-sidebar-icon"><i className="ph ph-chart-bar"></i></div>
                  </div>
                  <div className="erp-main-content">
                    <div className="text-heading-color fw-bold mb-3" style={{ fontSize: 12 }}>Dashboard Overview</div>
                    <div className="d-flex gap-2 mb-3">
                      <div className="erp-stat-mini"><div className="num">1,240</div><div className="lbl">Students</div></div>
                      <div className="erp-stat-mini"><div className="num">84</div><div className="lbl">Teachers</div></div>
                      <div className="erp-stat-mini"><div className="num">96%</div><div className="lbl">Attendance</div></div>
                      <div className="erp-stat-mini"><div className="num">₹4.2L</div><div className="lbl">Fees Due</div></div>
                    </div>
                    <div className="text-heading-color fw-semibold mb-2" style={{ fontSize: 11 }}>Recent Enrollments</div>
                    <div className="erp-table-row">
                      <div className="av">AK</div>
                      <span style={{ flex: 1 }}>Arjun Kumar — Grade 9A</span>
                      <span style={{ color: "hsl(var(--main))", fontWeight: 600 }}>Active</span>
                    </div>
                    <div className="erp-table-row">
                      <div className="av">PS</div>
                      <span style={{ flex: 1 }}>Priya Sharma — Grade 11B</span>
                      <span style={{ color: "hsl(var(--main))", fontWeight: 600 }}>Active</span>
                    </div>
                    <div className="erp-table-row">
                      <div className="av">MR</div>
                      <span style={{ flex: 1 }}>Mohammed Raza — Grade 7C</span>
                      <span style={{ color: "#f59e0b", fontWeight: 600 }}>Pending</span>
                    </div>
                  </div>
                </div>
              </div>
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
                <strong>Zalgo Infotech ERP</strong> is a comprehensive Institute Management System built as a <strong>monorepo</strong> with a React 18 + Vite frontend and a Node.js + Express REST API backend. It provides educational institutions with a centralized platform to manage students, staff, attendance, fees, exams, timetables, and more — delivered as a blazing-fast SPA.
              </p>
              <p className="text-body lh-lg mb-5">
                The monorepo structure (<code>packages/frontend</code>, <code>packages/backend</code>, <code>packages/shared</code>) enables shared TypeScript types, validators, and utilities across both apps — ensuring a single source of truth for the entire system.
              </p>
              <div className="d-flex align-items-center gap-4 flex-wrap">
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>50+</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>Modules</div>
                </div>
                <div style={{ width: 1, height: 40, background: "#e5e7eb" }}></div>
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>4</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>User Roles</div>
                </div>
                <div style={{ width: 1, height: 40, background: "#e5e7eb" }}></div>
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>3</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>Monorepo Packages</div>
                </div>
              </div>
            </div>
            <div className="col-lg-6">
              <div className="row gy-3 gx-3">
                {roleCards.map((r) => (
                  <div className="col-6" key={r.title}>
                    <div className="role-card">
                      <div className="role-icon"><i className={`ph ${r.icon}`}></i></div>
                      <div>
                        <div className="fw-bold text-heading-color" style={{ fontSize: "0.9rem" }}>{r.title}</div>
                        <div className="text-body" style={{ fontSize: "0.78rem" }}>{r.text}</div>
                      </div>
                    </div>
                  </div>
                ))}
              </div>
              <div className="mt-4 rounded-3 p-4" style={{ background: "#0f1825" }}>
                <div className="text-white fw-semibold mb-3" style={{ fontSize: "0.82rem", letterSpacing: 1 }}>MONOREPO STRUCTURE</div>
                {monorepoPackages.map((pkg) => (
                  <div className="d-flex align-items-center gap-2 mb-2" style={{ fontFamily: "monospace", fontSize: 11 }} key={pkg.name}>
                    <i className={`ph ${pkg.icon}`} style={{ color: pkg.color, fontSize: 14 }}></i>
                    <span style={{ color: pkg.color }}>{pkg.name}</span>
                    <span style={{ color: "#8aafc4", marginLeft: "auto" }}>{pkg.desc}</span>
                  </div>
                ))}
                <div className="mt-3 pt-2" style={{ borderTop: "1px solid rgba(255,255,255,0.1)" }}>
                  <span style={{ color: "#8aafc4", fontSize: 10, fontFamily: "monospace" }}>npm workspaces • shared ESLint &amp; Prettier config</span>
                </div>
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
              <p className="text-body lh-lg mb-4">The institution faced operational complexity and lacked a unified digital system:</p>
              <div
                className="rounded-3 p-5 d-flex flex-column align-items-center justify-content-center text-center"
                style={{ background: "linear-gradient(135deg,#e0f5f5,#f0fafa)", minHeight: 260 }}
              >
                <i className="ph ph-warning-circle text-main" style={{ fontSize: "4rem" }}></i>
                <div className="fw-bold text-heading-color mt-3 mb-1">Multiple Disconnected Systems</div>
                <div className="text-body" style={{ fontSize: "0.88rem", maxWidth: 220 }}>Manual processes causing delays, errors, and missed communications</div>
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
              <span className="section-label">What We Did</span>
              <h2 className="fw-bold mb-3">Our Role &amp; <span className="text-main">Responsibilities</span></h2>
              <p className="text-body mb-4">We architected and built the full monorepo from scratch — React frontend, Node.js API, and shared package — through to deployment.</p>
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
              <p className="text-body mb-5">A full-stack monorepo ERP — React SPA on the frontend, Node.js REST API on the backend, and a shared package for types and business logic.</p>
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
                    <span className="fw-bold" style={{ fontSize: "1.3rem", color: "#61dafb" }}>50+</span>
                  </div>
                  <span className="text-white fw-semibold" style={{ fontSize: "1.1rem" }}>ERP Modules</span>
                </div>
                <h3 className="text-white fw-bold mb-4">Technology Stack</h3>
                <ul className="d-flex flex-column gap-3 list-unstyled">
                  {techList.map((tech) => (
                    <li className="d-flex align-items-center gap-2" key={tech.label}>
                      <i className="ph ph-caret-right flex-shrink-0" style={{ color: tech.color }}></i>
                      <span style={{ color: "rgba(255,255,255,0.9)" }}>
                        <strong style={{ color: tech.color }}>{tech.label}:</strong> {tech.text}
                      </span>
                    </li>
                  ))}
                </ul>
                <div className="mt-5">
                  <a
                    href="https://erp.zalgostore.com/"
                    target="_blank"
                    rel="noopener noreferrer"
                    className="btn fw-semibold px-4 py-3 rounded-pill d-inline-flex align-items-center gap-2"
                    style={{ background: "hsl(var(--main))", color: "#fff" }}
                  >
                    <i className="ph ph-arrow-square-out"></i> View Live System
                  </a>
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
            <span className="section-label d-block">System Modules</span>
            <h2 className="fw-bold">ERP in <span className="text-main">Action</span></h2>
            <p className="text-body mt-2 mx-auto" style={{ maxWidth: 540 }}>Every React page backed by a dedicated Node.js API route — from admission to graduation.</p>
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
            <a
              href="https://erp.zalgostore.com/"
              target="_blank"
              rel="noopener noreferrer"
              className="btn btn-main px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2"
            >
              <i className="ph ph-monitor"></i> Explore the Full System
            </a>
          </div>
        </div>
      </section>

      {/* Results */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center mb-60">
            <span className="section-label d-block">Outcomes</span>
            <h2 className="fw-bold">Results &amp; <span className="text-main">Impact</span></h2>
            <p className="text-body mt-2 mx-auto" style={{ maxWidth: 540 }}>Measurable improvements across every department after ERP implementation.</p>
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
      <section className="py-120 bg-neutral-50">
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
                <a
                  href="https://erp.zalgostore.com/"
                  target="_blank"
                  rel="noopener noreferrer"
                  className="btn btn-main w-100 py-3 rounded-pill fw-semibold d-flex align-items-center justify-content-center gap-2 mt-3"
                >
                  <i className="ph ph-arrow-square-out"></i> Open Live ERP System
                </a>
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
                  <span className="text-yellow text-stroke-yellow">50+</span> ERP Modules — Built for Your Institute
                </div>
              </div>

              <h3 className="splitTextStyleOne text-white">Ready to Modernize Your Institute?</h3>

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
                    href="https://erp.zalgostore.com/"
                    className="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Visit Live ERP</span>
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
