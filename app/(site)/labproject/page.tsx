import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Lab Report Generation System Case Study - Automated Lab Reports",
  description:
    "How Zalgo Infotech built a Laravel-based lab management platform with automated PDF report generation, patient portals, and role-based access for healthcare labs.",
  keywords: [
    "lab management system case study",
    "healthcare software development case study",
    "Laravel case study",
    "automated PDF report generation",
    "patient portal development",
    "lab report automation software",
  ],
  path: "/labproject",
});

const metaCards = [
  { icon: "ph-code", label: "Platform", value: "Laravel PHP" },
  { icon: "ph-flask", label: "Industry", value: "Healthcare / Lab" },
  { icon: "ph-layers", label: "Project Type", value: "SaaS / Lab System" },
  { icon: "ph-clock", label: "Duration", value: "Ongoing" },
  { icon: "ph-globe", label: "Region", value: "Global" },
];

const roleCards = [
  { icon: "ph-shield-star", title: "Admin", text: "Full system control & configuration" },
  { icon: "ph-flask", title: "Lab Technician", text: "Sample entry, test processing & results" },
  { icon: "ph-stethoscope", title: "Doctor", text: "View reports & patient records" },
  { icon: "ph-user", title: "Patient", text: "Access personal lab reports online" },
];

const challenges = [
  "Manual report creation was time-consuming and error-prone",
  "No centralized system to track sample status and test progress",
  "Patients had no digital access to their own lab reports",
  "Difficulty generating formatted PDF reports with lab letterhead",
  "Lack of test result history and trend analysis for patients",
  "No role-based access control for doctors, technicians, and admins",
  "Needed a single platform to digitize all lab operations end-to-end",
];

const roleItems = [
  { icon: "ph-code", text: "Full-stack Laravel development (backend + frontend)" },
  { icon: "ph-lock-key", text: "Role-based authentication (Admin, Technician, Doctor, Patient)" },
  { icon: "ph-flask", text: "Sample registration, tracking, and test assignment" },
  { icon: "ph-file-pdf", text: "Automated PDF report generation with custom templates" },
  { icon: "ph-chart-line", text: "Patient result history, trend charts & analytics" },
  { icon: "ph-bell-ringing", text: "Email/SMS notifications when reports are ready" },
  { icon: "ph-printer", text: "Print-ready formatted reports with lab branding" },
  { icon: "ph-cloud-arrow-up", text: "Cloud deployment, server setup & ongoing maintenance" },
];

const timeline = [
  { icon: "ph-clipboard-text", title: "Phase 1: Requirement Analysis", text: "Mapped all lab workflows, test types, and reporting formats" },
  { icon: "ph-blueprint", title: "Phase 2: Architecture & DB Design", text: "Designed multi-role schema with patient & sample relationships" },
  { icon: "ph-hammer", title: "Phase 3: Core Development", text: "Built all modules with Laravel + Blade + Bootstrap + DomPDF" },
  { icon: "ph-device-mobile", title: "Phase 4: UI/UX & Testing", text: "Responsive design, role testing, and QA across all user types" },
  { icon: "ph-rocket-launch", title: "Phase 5: Deployment & Live", text: "Deployed to cloud VPS, configured SSL, launched v1.0" },
];

const solutionCards = [
  { icon: "ph-flask", title: "Sample Management", text: "Register, track, and manage lab samples from collection to result." },
  { icon: "ph-lock", title: "Multi-Role Security", text: "Role-based access with Spatie Permissions & Laravel Auth." },
  { icon: "ph-file-pdf", title: "PDF Report Generation", text: "Auto-generate branded PDF reports with DomPDF on result entry." },
  { icon: "ph-bell-ringing", title: "Smart Notifications", text: "Email/SMS to patients when their reports are ready." },
  { icon: "ph-chart-line", title: "Result Analytics", text: "Trend charts and historical comparison for patient test data." },
  { icon: "ph-chart-bar", title: "Admin Dashboard", text: "Live stats, pending samples, and activity reports for admins." },
];

const techList = [
  { label: "Framework", text: "Laravel 10 (PHP 8.2)" },
  { label: "Database", text: "MySQL" },
  { label: "Frontend", text: "Blade, Bootstrap 5, jQuery" },
  { label: "PDF Engine", text: "DomPDF / Laravel PDF" },
  { label: "Auth", text: "Multi-Role — Spatie Permissions" },
  { label: "Notifications", text: "Email + SMS Gateway" },
];

const modules = [
  { icon: "ph-flask", title: "Sample Registration", text: "Register patient samples with barcode/ID tracking and test assignment." },
  { icon: "ph-test-tube", title: "Test Management", text: "Define test parameters, reference ranges, and result entry templates." },
  { icon: "ph-file-pdf", title: "Report Generation", text: "Auto-generate formatted PDF reports instantly upon result submission." },
  { icon: "ph-user", title: "Patient Portal", text: "Patients can log in, view, and download their own lab reports online." },
  { icon: "ph-stethoscope", title: "Doctor Access", text: "Doctors can view assigned patient reports and add clinical notes." },
  { icon: "ph-chart-line", title: "Result History", text: "Longitudinal trend analysis and historical result comparison per patient." },
  { icon: "ph-bell-ringing", title: "Notification System", text: "Automated email/SMS alerts when reports are ready for pickup or viewing." },
  { icon: "ph-printer", title: "Print Module", text: "Print-ready report layouts with lab logo, letterhead, and signature fields." },
  { icon: "ph-chart-bar", title: "Admin Analytics", text: "Dashboard with daily reports count, pending samples, and lab throughput." },
];

const resultStats = [
  { value: "90%", label: "Reduction in manual report preparation time", icon: "ph-trend-down" },
  { value: "98%", label: "Report accuracy with automated result validation", icon: "ph-check-circle" },
  { value: "100%", label: "Automated PDF generation on result submission", icon: "ph-file-pdf" },
  { value: "20+", label: "Report types covering all common lab tests", icon: "ph-flask" },
];

const whyMatters = [
  { icon: "ph-rocket-launch", text: "Proves real-world lab system scalability for clinics & hospitals" },
  { icon: "ph-code-block", text: "Demonstrates full-stack Laravel & PDF generation expertise" },
  { icon: "ph-gear-six", text: "Shows ability to manage complex multi-role healthcare systems" },
  { icon: "ph-handshake", text: "Builds trust for healthcare & diagnostic lab clients worldwide" },
];

const highlights = [
  { label: "Reports Generated", value: "500+", percent: 85 },
  { label: "Report Accuracy", value: "98%", percent: 98 },
  { label: "Processing Time Saved", value: "90%", percent: 90 },
  { label: "Active Modules", value: "20+", percent: 100 },
];

const ctaTags = [
  "Laravel Development",
  "Lab Report System",
  "PDF Generation",
  "Role-Based Access",
  "Patient Portal",
  "Sample Tracking",
  "Result Analytics",
  "Cloud Hosting",
  "SMS Notifications",
  "Custom Report Templates",
];

export default function LabProjectPage() {
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
                {["Laravel", "Lab Management", "Report Generation", "SaaS"].map((b) => (
                  <span key={b} className="badge text-main bg-main-50 fw-semibold px-3 py-2 rounded-pill">{b}</span>
                ))}
              </div>
              <h1 className="fw-bold lh-sm mb-3" style={{ fontSize: "clamp(1.8rem, 4vw, 3rem)" }}>
                Building a Smart <span className="text-main">Lab Report Generation</span> System from Scratch
              </h1>
              <p className="text-body mb-5" style={{ fontSize: "1.05rem" }}>
                Laravel &nbsp;|&nbsp; PDF Generation &nbsp;|&nbsp; Lab Analytics &nbsp;|&nbsp; SaaS Platform
              </p>
              <div className="d-flex align-items-center gap-3 flex-wrap">
                <Link href={routes.contact} className="btn btn-main px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2">
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
                src="/assets/images/case-study/lab.jpg"
                alt="Lab Report Generation System"
                className="w-100 tw-rounded-2xl"
                style={{ maxHeight: 480, objectFit: "contain" }}
              />
            </div>
          </div>

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
                <strong>Lab Report Generation System</strong> is a comprehensive laboratory management platform built on Laravel. It enables labs and healthcare facilities to automate sample tracking, test result entry, PDF report generation, and patient data management — all from a single, intuitive dashboard.
              </p>
              <p className="text-body lh-lg mb-5">
                The project required a scalable, multi-role SaaS solution deployable for labs of varying sizes, with role-based access for admins, lab technicians, doctors, and patients.
              </p>
              <div className="d-flex align-items-center gap-4 flex-wrap">
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>20+</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>Report Types</div>
                </div>
                <div style={{ width: 1, height: 40, background: "#e5e7eb" }}></div>
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>4</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>User Roles</div>
                </div>
                <div style={{ width: 1, height: 40, background: "#e5e7eb" }}></div>
                <div className="text-center">
                  <div className="fw-bold text-main" style={{ fontSize: "2rem" }}>v1.0</div>
                  <div className="text-body" style={{ fontSize: "0.82rem" }}>Current Version</div>
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
              <div
                className="mt-4 rounded-3 p-4 d-flex align-items-center gap-4"
                style={{ background: "linear-gradient(135deg,hsl(var(--main)) 0%,hsl(184,100%,18%) 100%)" }}
              >
                <span
                  className="d-flex align-items-center justify-content-center rounded-circle bg-white text-main"
                  style={{ width: 52, height: 52, minWidth: 52, fontSize: "1.4rem" }}
                >
                  <i className="ph ph-flask"></i>
                </span>
                <div className="flex-grow-1">
                  <div className="text-white fw-bold">Lab Report System v1.0</div>
                  <div style={{ color: "rgba(255,255,255,0.7)", fontSize: "0.82rem" }}>Automated Lab Reporting Platform — Live &amp; Running</div>
                </div>
                <Link
                  href={routes.contact}
                  className="btn btn-sm bg-white text-main fw-semibold rounded-pill px-3 d-flex align-items-center gap-1 flex-shrink-0"
                >
                  <i className="ph ph-chat-circle-dots"></i> Contact
                </Link>
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
              <p className="text-body lh-lg mb-4">The lab faced operational bottlenecks and lacked a unified digital reporting system:</p>
              <div
                className="rounded-3 p-5 d-flex flex-column align-items-center justify-content-center text-center"
                style={{ background: "linear-gradient(135deg,#e0f5f5,#f0fafa)", minHeight: 260 }}
              >
                <i className="ph ph-warning-circle text-main" style={{ fontSize: "4rem" }}></i>
                <div className="fw-bold text-heading-color mt-3 mb-1">Manual &amp; Error-Prone Processes</div>
                <div className="text-body" style={{ fontSize: "0.88rem", maxWidth: 220 }}>Paper-based reports causing delays, errors, and data loss</div>
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
              <p className="text-body mb-4">We developed the Lab Report System end-to-end, from architecture planning to deployment and ongoing support.</p>
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
              <p className="text-body mb-5">We designed and deployed a complete Lab Report Generation System — scalable, secure, and ready for any diagnostic lab or healthcare facility.</p>
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
              <div
                className="rounded-3 h-100 p-5 position-relative overflow-hidden"
                style={{ background: "linear-gradient(135deg,hsl(var(--main)) 0%,hsl(184,100%,18%) 100%)" }}
              >
                <div className="d-flex align-items-center gap-3 mb-5">
                  <div
                    className="bg-white rounded-circle d-flex align-items-center justify-content-center"
                    style={{ width: 72, height: 72, minWidth: 72 }}
                  >
                    <span className="fw-bold text-main" style={{ fontSize: "1.3rem" }}>20+</span>
                  </div>
                  <span className="text-white fw-semibold" style={{ fontSize: "1.1rem" }}>Report Types</span>
                </div>
                <h3 className="text-white fw-bold mb-4">Technology Stack</h3>
                <ul className="d-flex flex-column gap-3 list-unstyled">
                  {techList.map((tech) => (
                    <li className="d-flex align-items-center gap-2" key={tech.label}>
                      <i className="ph ph-caret-right text-white flex-shrink-0"></i>
                      <span className="text-white"><strong>{tech.label}:</strong> {tech.text}</span>
                    </li>
                  ))}
                </ul>
                <div className="mt-5">
                  <Link
                    href={routes.contact}
                    className="btn fw-semibold px-4 py-3 rounded-pill d-inline-flex align-items-center gap-2"
                    style={{ background: "#fff", color: "hsl(var(--main))" }}
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
            <span className="section-label d-block">System Modules</span>
            <h2 className="fw-bold">Lab System in <span className="text-main">Action</span></h2>
            <p className="text-body mt-2 mx-auto" style={{ maxWidth: 540 }}>Every module built to streamline a specific lab workflow — from sample registration to final report delivery.</p>
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
            <Link href={routes.contact} className="btn btn-main px-5 py-3 rounded-pill fw-semibold d-inline-flex align-items-center gap-2">
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
            <p className="text-body mt-2 mx-auto" style={{ maxWidth: 540 }}>Measurable improvements across every lab operation after system implementation.</p>
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
                  Automate your lab reports with <span className="text-yellow text-stroke-yellow">100%</span> accuracy
                </div>
              </div>

              <h3 className="splitTextStyleOne text-white">Ready to Build Your Custom Lab System?</h3>

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
