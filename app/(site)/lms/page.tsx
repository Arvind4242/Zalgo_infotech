import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Learning Management System Case Study - React & Node.js LMS",
  description:
    "How Zalgo Infotech built a React 18 and Node.js e-learning platform with video lessons, auto-graded quizzes, Stripe payment gating, and certificate generation.",
  keywords: [
    "LMS case study",
    "e-learning platform development case study",
    "React Node.js LMS",
    "online course platform development",
    "custom LMS development project",
    "education software development case study",
  ],
  path: "/lms",
});

const metaCards = [
  { icon: "ph-atom", label: "Frontend", value: "React 18 + Vite" },
  { icon: "ph-terminal", label: "Backend", value: "Node.js + Express" },
  { icon: "ph-graduation-cap", label: "Project Type", value: "E-Learning SaaS" },
  { icon: "ph-clock", label: "Duration", value: "Ongoing" },
  { icon: "ph-globe", label: "Region", value: "Global" },
];

const roleCards = [
  { icon: "ph-shield-star", title: "Admin", text: "Full LMS control & content management" },
  { icon: "ph-chalkboard-teacher", title: "Instructor", text: "Create courses, lessons & quizzes" },
  { icon: "ph-student", title: "Learner", text: "Enroll, watch lessons & earn certificates" },
];

const monorepoPackages = [
  { icon: "ph-folder", name: "packages/frontend", desc: "React 18 + Vite SPA", color: "#61dafb" },
  { icon: "ph-folder", name: "packages/backend", desc: "Node.js + Express API", color: "#68a063" },
  { icon: "ph-folder", name: "packages/shared", desc: "TypeScript types & validators", color: "#f0db4f" },
];

const challenges = [
  "No centralized platform to host video lessons and course content",
  "Manual quiz grading was slow and error-prone",
  "No way to gate course access behind payment",
  "Learners had no way to track progress or earn certificates",
  "Instructors had no analytics on learner engagement",
  "Certificate generation was a fully manual, unbranded process",
];

const roleItems = [
  { icon: "ph-atom", text: "React 18 + Vite SPA — course catalog, video player & quiz engine" },
  { icon: "ph-terminal", text: "Node.js + Express REST API with JWT role-based auth" },
  { icon: "ph-video-camera", text: "Video lesson streaming with progress tracking" },
  { icon: "ph-exam", text: "Auto-graded quiz engine with instant feedback" },
  { icon: "ph-currency-circle-dollar", text: "Stripe payment-gated course enrollment" },
  { icon: "ph-certificate", text: "Automated certificate generation via Puppeteer PDF" },
  { icon: "ph-chart-bar", text: "Instructor analytics dashboard with React Query + Chart.js" },
];

const timeline = [
  { icon: "ph-clipboard-text", title: "Phase 1: Requirement Analysis", text: "Mapped course structure, quiz logic, and certification workflow" },
  { icon: "ph-git-branch", title: "Phase 2: Monorepo Setup", text: "Bootstrapped npm workspaces, shared TS config, ESLint & Prettier" },
  { icon: "ph-atom", title: "Phase 3: React Frontend", text: "Course catalog, video player, quiz UI — built with Vite + React Query" },
  { icon: "ph-terminal", title: "Phase 4: Node.js API", text: "REST API, Stripe payment gating, and certificate PDF service" },
  { icon: "ph-rocket-launch", title: "Phase 5: Deployment & Live", text: "Docker-based deployment, CI/CD, SSL — serving 2,500+ learners" },
];

const solutionCards = [
  { icon: "ph-atom", title: "React SPA", text: "Course catalog, video player, and quiz UI built with React 18 + Vite." },
  { icon: "ph-terminal", title: "Node.js REST API", text: "Express-based API with JWT auth, role middleware & Prisma ORM." },
  { icon: "ph-video-camera", title: "Video Lessons", text: "Streamed video content with resumable progress tracking per learner." },
  { icon: "ph-exam", title: "Quiz Engine", text: "Auto-graded quizzes with instant scoring and retry logic." },
  { icon: "ph-certificate", title: "Certificates", text: "Branded PDF certificates auto-generated via Node.js Puppeteer." },
  { icon: "ph-currency-circle-dollar", title: "Payment Gating", text: "Stripe checkout unlocks course access immediately on payment." },
];

const techList = [
  { label: "Frontend", text: "React 18 + Vite", color: "#61dafb" },
  { label: "Backend", text: "Node.js + Express", color: "#68a063" },
  { label: "Database", text: "MySQL via Prisma ORM", color: "#fff" },
  { label: "Auth", text: "JWT + Role Middleware", color: "#fff" },
  { label: "Payments", text: "Stripe", color: "#635bff" },
  { label: "PDF", text: "Node.js Puppeteer (certificates)", color: "#fff" },
  { label: "Styling", text: "Tailwind CSS + shadcn/ui", color: "#38bdf8" },
  { label: "Repo", text: "Monorepo (npm workspaces)", color: "#f0db4f" },
];

const modules = [
  { icon: "ph-video-camera", title: "Video Lessons", text: "Streamed lesson videos with resumable progress tracking and playback speed control." },
  { icon: "ph-exam", title: "Quiz & Auto-Grading", text: "Multiple-choice and short-answer quizzes with instant, automated grading." },
  { icon: "ph-certificate", title: "Certificate Generator", text: "Auto-generates branded PDF certificates on course completion." },
  { icon: "ph-currency-circle-dollar", title: "Payment-Gated Enrollment", text: "Stripe checkout unlocks course content immediately after payment." },
  { icon: "ph-chart-bar", title: "Learner Analytics", text: "Instructors see completion rates, quiz scores, and engagement trends." },
  { icon: "ph-chalkboard-teacher", title: "Course Builder", text: "Instructors create courses, modules, lessons, and quizzes visually." },
  { icon: "ph-bell-ringing", title: "Notifications", text: "Email reminders for course progress and upcoming deadlines." },
  { icon: "ph-users", title: "Learner Directory", text: "Admins manage 2,500+ learners with enrollment and progress history." },
  { icon: "ph-book-open", title: "Resource Library", text: "Downloadable supplementary materials attached to each lesson." },
];

const resultStats = [
  { value: "2,500+", label: "Learners onboarded", icon: "ph-students" },
  { value: "94%", label: "Course completion rate", icon: "ph-certificate" },
  { value: "100%", label: "Auto-graded quiz accuracy", icon: "ph-exam" },
  { value: "3x", label: "Faster certificate turnaround", icon: "ph-lightning" },
];

const whyMatters = [
  { icon: "ph-rocket-launch", text: "Proves real-world e-learning scalability for React + Node.js" },
  { icon: "ph-video-camera", text: "Demonstrates video streaming & progress-tracking expertise" },
  { icon: "ph-certificate", text: "Shows end-to-end payment-gated certification workflow" },
  { icon: "ph-handshake", text: "Builds trust for education & training SaaS clients" },
];

const highlights = [
  { label: "Learners Enrolled", value: "2,500+", percent: 88 },
  { label: "Course Completion", value: "94%", percent: 94 },
  { label: "Certificates Issued", value: "2,100+", percent: 84 },
  { label: "Active Courses", value: "40+", percent: 70 },
];

const ctaTags = [
  "React 18",
  "Node.js + Express",
  "Vite Monorepo",
  "TypeScript",
  "Prisma ORM",
  "Stripe Payments",
  "Puppeteer PDF",
  "Tailwind CSS",
  "JWT Auth",
  "Docker CI/CD",
];

export default function LmsPage() {
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
                Building a Complete <span className="text-main">Learning Management</span> System from Scratch
              </h1>
              <p className="text-body mb-2" style={{ fontSize: "1.05rem" }}>
                React + Vite &nbsp;|&nbsp; Node.js &nbsp;|&nbsp; Video Lessons &nbsp;|&nbsp; Payment-Gated Courses
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
                src="/assets/images/case-study/lms.jpg"
                alt="Learning Management System"
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
                <strong>Learning Management System</strong> is a full-stack e-learning platform built with a React 18 + Vite frontend and a Node.js + Express REST API backend. It enables instructors to publish video lessons and quizzes, gate course access behind Stripe payments, and automatically issue branded certificates on completion.
              </p>
              <p className="text-body lh-lg mb-5">
                Built as a monorepo with <code>packages/frontend</code>, <code>packages/backend</code>, and <code>packages/shared</code>, the system shares TypeScript types and Zod validators across both apps, serving over 2,500 learners.
              </p>
              <div className="d-flex align-items-center gap-4 flex-wrap">
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>2,500+</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>Learners</div>
                </div>
                <div style={{ width: 1, height: 40, background: "#e5e7eb" }}></div>
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>3</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>User Roles</div>
                </div>
                <div style={{ width: 1, height: 40, background: "#e5e7eb" }}></div>
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>40+</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>Courses</div>
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
              <p className="text-body lh-lg mb-4">The client had no digital way to deliver structured courses, grade learners, or issue certificates:</p>
              <div
                className="rounded-3 p-5 d-flex flex-column align-items-center justify-content-center text-center"
                style={{ background: "linear-gradient(135deg,#e0f5f5,#f0fafa)", minHeight: 260 }}
              >
                <i className="ph ph-warning-circle text-main" style={{ fontSize: "4rem" }}></i>
                <div className="fw-bold text-heading-color mt-3 mb-1">No Structured E-Learning Platform</div>
                <div className="text-body" style={{ fontSize: "0.88rem", maxWidth: 220 }}>Manual grading, no payment gating, and no certification workflow</div>
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
              <p className="text-body mb-4">We designed and developed the full LMS end-to-end — React SPA, Node.js API, quiz engine, payment gating, and certificate service.</p>
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
              <p className="text-body mb-5">A complete e-learning platform — React SPA on the frontend, Node.js REST API with a quiz + certificate service on the backend.</p>
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
                    <span className="fw-bold" style={{ fontSize: "1.3rem", color: "#61dafb" }}>2.5k+</span>
                  </div>
                  <span className="text-white fw-semibold" style={{ fontSize: "1.1rem" }}>Learners Served</span>
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

      {/* Key Modules */}
      <section className="py-120 bg-neutral-50">
        <div className="container">
          <div className="text-center mb-60">
            <span className="section-label d-block">Core Features</span>
            <h2 className="fw-bold">LMS in <span className="text-main">Action</span></h2>
            <p className="text-body mt-2 mx-auto" style={{ maxWidth: 540 }}>Every module built around the learner journey — from enrollment to certification.</p>
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

      {/* Results */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center mb-60">
            <span className="section-label d-block">Outcomes</span>
            <h2 className="fw-bold">Results &amp; <span className="text-main">Impact</span></h2>
            <p className="text-body mt-2 mx-auto" style={{ maxWidth: 540 }}>Measurable improvements after LMS implementation.</p>
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
                  <span className="text-yellow text-stroke-yellow">2,500+</span> Learners Served — Let&apos;s Build Your LMS
                </div>
              </div>

              <h3 className="splitTextStyleOne text-white">Ready to Launch Your Own LMS?</h3>

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
