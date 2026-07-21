import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Culture & Values",
  description:
    "Discover the culture and core values driving Zalgo Infotech — innovation first, radical transparency, teamwork over ego, full ownership, and a client-first mindset.",
  keywords: [
    "company culture",
    "core values",
    "Zalgo Infotech culture",
    "workplace values",
    "team collaboration culture",
  ],
  path: "/culturevalue",
});

const empowerPoints = [
  "Foster creativity and open collaboration across every team",
  "Smart, focused work over long, unproductive hours",
  "Encourage full ownership and accountability of projects",
  "Continuous learning is a core expectation and investment",
  "Celebrate diverse perspectives and inclusive thinking",
];

const vals = [
  {
    color: "#0077b6",
    bg: "#e8f4fd",
    title: "Innovation First",
    desc: "We approach every project with creative energy. Complex problems excite us — we find elegant solutions others miss, and we push the boundaries of what technology can achieve.",
    icon: '<path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7z"/>',
  },
  {
    color: "#0f9d58",
    bg: "#dcfce7",
    title: "Radical Transparency",
    desc: "No hidden agendas. We communicate openly with clients and teammates — sharing progress, challenges, and honest feedback because truth builds stronger relationships than comfort.",
    icon: '<path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>',
  },
  {
    color: "#7c3aed",
    bg: "#f3e8ff",
    title: "Teamwork Over Ego",
    desc: "The best results happen when talented people collaborate selflessly. We share credit, help each other grow, and celebrate every team win as equally belonging to everyone.",
    icon: '<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>',
  },
  {
    color: "#d97706",
    bg: "#fef3c7",
    title: "Full Ownership",
    desc: "Every team member is an owner of their work. We take pride in outcomes, flag problems proactively, and never pass the buck. Accountability is how trust is earned here.",
    icon: '<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/>',
  },
  {
    color: "#dc2626",
    bg: "#fee2e2",
    title: "Client-First Mindset",
    desc: "Our clients' success is our success. We go beyond requirements to understand real business goals, anticipate needs, and deliver solutions that create lasting value — not just working code.",
    icon: '<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm4.24 16L12 15.45 7.77 18l1.12-4.81-3.73-3.23 4.92-.42L12 5l1.92 4.53 4.92.42-3.73 3.23L16.23 18z"/>',
  },
  {
    color: "#0891b2",
    bg: "#e0f7fa",
    title: "Continuous Learning",
    desc: "Technology evolves — and so do we. We actively invest in skills through courses, pair programming, tech talks, and an internal culture where asking questions is always encouraged.",
    icon: '<path d="M12 3L1 9l4 2.18V15h2v-2.82L9 13.5V17h6v-3.5l2-1.08V15h2v-3.82L23 9 12 3zm6 8.99L12 15 6 11.99V11l6 3 6-3v.99z"/>',
  },
  {
    color: "#059669",
    bg: "#d1fae5",
    title: "Work-Life Harmony",
    desc: "Burnout is the enemy of great work. We protect personal time, encourage breaks, celebrate life outside of work, and believe a rested, happy team always delivers better results.",
    icon: '<path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/>',
  },
  {
    color: "#9333ea",
    bg: "#f3e8ff",
    title: "Diversity & Inclusion",
    desc: "We build stronger products because we bring together different backgrounds, perspectives, and experiences. Everyone belongs here — regardless of gender, background, or location.",
    icon: '<path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>',
  },
];

const steps = [
  {
    title: "Morning Standups",
    desc: "Each team starts the day with a 15-minute sync — priorities, blockers, and what shipped yesterday. No fluff, all signal.",
  },
  {
    title: "Deep Work Blocks",
    desc: "Two dedicated focus blocks daily where meetings are minimised and builders have uninterrupted time to create their best work.",
  },
  {
    title: "Weekly Tech Talks",
    desc: "Every Friday, a team member shares a new tool, approach, or case study. Knowledge compounds when it's shared consistently.",
  },
  {
    title: "Sprint Reviews",
    desc: "End-of-sprint demos keep the entire team aligned on what's been built and what comes next — full transparency, always.",
  },
  {
    title: "Retrospectives",
    desc: "We honestly review what worked and what didn't. Continuous improvement is embedded into our rhythm, not left to chance.",
  },
];

const voices = [
  {
    img: "annu.png",
    name: "Annu",
    role: "UI/UX Designer",
    quote:
      "I joined Zalgo Infotech as a junior and grew into a senior designer within two years. The culture here is unlike anywhere else — your ideas are always heard, and your growth is genuinely invested in.",
  },
  {
    img: "ashu.png",
    name: "Ashu",
    role: "Full Stack Developer",
    quote:
      "What I love most is the freedom to experiment. I shipped a complete architectural refactor after proposing it in a retro meeting. The team trusted me, and it improved performance by 40%. That doesn't happen everywhere.",
  },
  {
    img: "bhupendra.png",
    name: "Bhupendra",
    role: "Backend Engineer",
    quote:
      "The weekly tech talks are one of my favourite things. I've learned React patterns, AWS architecture, and database optimisation tricks from my colleagues — knowledge sharing here is genuinely part of the culture.",
  },
];

const pledgeItems = [
  "Clear career progression",
  "Fair & transparent pay",
  "Honest feedback",
  "Respect for your time",
  "Modern tech stack",
  "Remote-friendly",
  "Learning budget",
  "No politics",
];

export default function CultureValuesPage() {
  return (
    <PageShell>
      <style>{`
        .cv-scene img,
        .cv-manifesto-card img {
            image-rendering: auto;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transform: translateZ(0);
        }
        .cv-badge { display:inline-block; background:#e8f4fd; color:#0077b6; font-size:12px; font-weight:700; letter-spacing:.8px; text-transform:uppercase; padding:5px 14px; border-radius:20px; margin-bottom:14px; }
        .cv-heading { font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:800; color:#0d1b2a; line-height:1.2; }
        .cv-sub { font-size:16px; color:#64748b; line-height:1.8; font-weight:500; }

        .cv-hero { background: linear-gradient(135deg, #0d1b2a 0%, #0f3460 60%, #1a5276 100%); padding:110px 0 80px; position:relative; overflow:hidden; }
        .cv-hero::before { content:''; position:absolute; inset:0; background-image:radial-gradient(rgba(255,255,255,.04) 1px,transparent 1px); background-size:28px 28px; }
        .cv-hero-tag { display:inline-flex; align-items:center; gap:8px; background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.15); color:rgba(255,255,255,.85); font-size:12px; font-weight:700; letter-spacing:.8px; text-transform:uppercase; padding:6px 16px; border-radius:20px; margin-bottom:20px; }

        .cv-manifesto { background:#f8fafc; padding:80px 0; }
        .cv-manifesto-card { background:#fff; border:1px solid #e2e8f0; border-radius:16px; padding:32px 28px; height:100%; transition:all .25s; }
        .cv-manifesto-card:hover { transform:translateY(-4px); box-shadow:0 16px 40px rgba(0,119,182,.09); }
        .cv-manifesto-num { font-size:3rem; font-weight:900; color:#e8f4fd; line-height:1; margin-bottom:8px; }
        .cv-manifesto-card h4 { font-size:17px; font-weight:800; color:#0d1b2a; margin-bottom:10px; }
        .cv-manifesto-card p { font-size:14px; color:#64748b; line-height:1.75; margin:0; }

        .cv-val-card { background:#fff; border-radius:16px; padding:36px 28px; border:1px solid #e2e8f0; height:100%; transition:all .25s; position:relative; overflow:hidden; }
        .cv-val-card::before { content:''; position:absolute; top:0; left:0; width:4px; height:100%; background:var(--cv-accent,#0077b6); border-radius:4px 0 0 4px; }
        .cv-val-card:hover { transform:translateY(-6px); box-shadow:0 20px 50px rgba(0,0,0,.08); }
        .cv-val-icon { width:52px; height:52px; border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:18px; }
        .cv-val-icon svg { width:26px; height:26px; }
        .cv-val-card h4 { font-size:17px; font-weight:800; color:#0d1b2a; margin-bottom:10px; }
        .cv-val-card p { font-size:14px; color:#64748b; line-height:1.75; margin:0; }

        .cv-scene { border-radius:14px; overflow:hidden; position:relative; }
        .cv-scene img { width:100%; height:100%; object-fit:cover; display:block; transition:transform .4s; }
        .cv-scene:hover img { transform:scale(1.05); }
        .cv-scene-overlay { position:absolute; inset:0; background:linear-gradient(to top,rgba(0,0,0,.55),transparent); display:flex; align-items:flex-end; padding:16px 18px; opacity:0; transition:opacity .3s; }
        .cv-scene:hover .cv-scene-overlay { opacity:1; }
        .cv-scene-overlay span { color:#fff; font-size:13px; font-weight:600; }

        .cv-step { display:flex; align-items:flex-start; gap:20px; }
        .cv-step-num { width:52px; height:52px; background:linear-gradient(135deg,#0077b6,#0f3460); color:#fff; font-size:18px; font-weight:900; border-radius:12px; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
        .cv-step-body h5 { font-size:16px; font-weight:800; color:#0d1b2a; margin-bottom:6px; }
        .cv-step-body p { font-size:14px; color:#64748b; line-height:1.7; margin:0; }
        .cv-step-connector { width:2px; height:32px; background:#e2e8f0; margin:8px 0 8px 25px; }

        .cv-voice-card { background:#fff; border:1px solid #e2e8f0; border-radius:16px; padding:28px; height:100%; transition:all .25s; }
        .cv-voice-card:hover { transform:translateY(-4px); box-shadow:0 16px 40px rgba(0,0,0,.08); }
        .cv-voice-quote { font-size:14px; color:#475569; line-height:1.8; font-style:italic; margin-bottom:20px; position:relative; padding-left:18px; }
        .cv-voice-quote::before { content:'"'; position:absolute; left:0; top:-4px; font-size:2.5rem; color:#bae6fd; line-height:1; }
        .cv-voice-author { display:flex; align-items:center; gap:12px; }
        .cv-voice-author img { width:46px; height:46px; border-radius:50%; object-fit:cover; object-position:top; }
        .cv-voice-author-info h6 { font-size:14px; font-weight:800; color:#0d1b2a; margin:0 0 2px; }
        .cv-voice-author-info span { font-size:12px; color:#0077b6; font-weight:600; }
        .cv-stars { color:#f59e0b; font-size:13px; margin-bottom:10px; }

        .cv-pledge { background:linear-gradient(135deg,#0077b6,#0f3460); padding:80px 0; text-align:center; }
        .cv-pledge h2 { font-size:clamp(1.6rem,3vw,2.4rem); font-weight:800; color:#fff; margin-bottom:18px; }
        .cv-pledge p { font-size:16px; color:rgba(255,255,255,.8); max-width:680px; margin:0 auto 36px; line-height:1.8; }
        .cv-pledge-items { display:flex; justify-content:center; flex-wrap:wrap; gap:12px; }
        .cv-pledge-item { background:rgba(255,255,255,.12); border:1px solid rgba(255,255,255,.2); color:#fff; font-size:14px; font-weight:600; padding:8px 20px; border-radius:30px; }

        @media(max-width:768px){
            .cv-pledge-items { gap:8px; }
            .cv-step-connector { display:none; }
        }
      `}</style>

      {/* HERO */}
      <section className="cv-hero">
        <div className="container position-relative z-1">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-7">
              <div className="cv-hero-tag">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z" />
                </svg>
                Our Culture & Values
              </div>
              <h1
                className="splitTextStyleOne fw-bold text-white tw-mb-5"
                style={{ fontSize: "clamp(2rem,4vw,3.2rem)", lineHeight: 1.15 }}
              >
                How We Make
                <br />
                <span style={{ color: "#60d3f0" }}>Zalgo Infotech</span> Awesome
              </h1>
              <p className="tw-mb-8" style={{ fontSize: 17, color: "rgba(255,255,255,.8)", maxWidth: 520, lineHeight: 1.8 }}>
                Our culture is the foundation everything is built upon — the values we live, the
                behaviours we reward, and the environment we intentionally create every single day.
              </p>
              <div className="d-flex gap-3 flex-wrap">
                <Link
                  href={routes.career}
                  className="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center gap-2 group tw-px-10 rounded-pill tw-py-505 fw-bold"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">View Open Positions</span>
                </Link>
                <Link
                  href={routes.about}
                  className="d-inline-flex align-items-center gap-2 tw-px-10 rounded-pill tw-py-505 fw-bold text-white border border-white border-opacity-25 text-decoration-none hover-bg-white-opacity"
                >
                  About Us &#8594;
                </Link>
              </div>
            </div>
            <div className="col-lg-5">
              <div className="row gy-3">
                <div className="col-6">
                  <div className="cv-scene" style={{ height: 180 }}>
                    <img src="/assets/images/thumbs/Bioage.jpg" alt="Zalgo team" />
                    <div className="cv-scene-overlay">
                      <span>Team Collaboration</span>
                    </div>
                  </div>
                </div>
                <div className="col-6">
                  <div className="cv-scene" style={{ height: 180 }}>
                    <img src="/assets/images/thumbs/faq-thumb1.png" alt="Office life" />
                    <div className="cv-scene-overlay">
                      <span>Daily Standups</span>
                    </div>
                  </div>
                </div>
                <div className="col-12">
                  <div className="cv-scene" style={{ height: 180 }}>
                    <img src="/assets/images/thumbs/Tailored-solution.jpg" alt="Project work" />
                    <div className="cv-scene-overlay">
                      <span>Building Together</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* MANIFESTO */}
      <section className="cv-manifesto">
        <div className="container">
          <div className="text-center tw-mb-14">
            <span className="cv-badge">Our Manifesto</span>
            <h2 className="splitTextStyleOne cv-heading tw-mb-4">We Believe In</h2>
            <p className="cv-sub mx-auto" style={{ maxWidth: 560 }}>
              Three principles that every decision at Zalgo Infotech is measured against.
            </p>
          </div>
          <div className="row gy-4">
            <div className="col-lg-4">
              <div className="cv-manifesto-card">
                <div className="cv-manifesto-num">01</div>
                <h4>People Over Processes</h4>
                <p>
                  Great people build great products. We invest in our team first — in their
                  skills, their wellbeing, and their career growth — because that investment
                  directly reflects in the quality of every project we deliver.
                </p>
              </div>
            </div>
            <div className="col-lg-4">
              <div className="cv-manifesto-card">
                <div className="cv-manifesto-num">02</div>
                <h4>Trust Over Micromanagement</h4>
                <p>
                  We hire talented people and trust them completely. No clock-watching, no
                  unnecessary approvals. Every team member has the autonomy and authority to make
                  decisions in their area of ownership.
                </p>
              </div>
            </div>
            <div className="col-lg-4">
              <div className="cv-manifesto-card">
                <div className="cv-manifesto-num">03</div>
                <h4>Outcomes Over Activity</h4>
                <p>
                  We don&apos;t measure hours — we measure impact. Whether you&apos;re shipping a
                  feature, helping a client, or improving a process, what matters is the
                  real-world result your work creates.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* EMPOWERING GROWTH */}
      <section className="py-120 bg-white overflow-hidden position-relative">
        <img
          src="/assets/images/shapes/bg-image.png"
          alt=""
          className="position-absolute top-0 end-0 z-0 opacity-25"
        />
        <div className="container position-relative z-1">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-6">
              <span className="cv-badge">Empowering Growth</span>
              <h2 className="splitTextStyleOne cv-heading tw-mb-5">
                A Culture Built to
                <br />
                <span className="font-dm-serif fst-italic fw-normal text-main-600">
                  Inspire &amp; Empower
                </span>
              </h2>
              <p className="cv-sub tw-mb-5">
                At Zalgo Infotech, our culture is built on values that empower and inspire every
                member of the team. We believe in fostering an environment where everyone can
                thrive — professionally and personally.
              </p>
              <div className="d-flex flex-column gap-3 tw-mb-8">
                {empowerPoints.map((text, i) => (
                  <div className="d-flex align-items-center gap-3" key={i}>
                    <span className="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle flex-shrink-0">
                      <i className="ph ph-check"></i>
                    </span>
                    <p className="tw-text-lg fw-medium text-heading mb-0">{text}</p>
                  </div>
                ))}
              </div>
              <Link
                href={routes.contact}
                className="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center gap-2 group tw-px-17 rounded-pill tw-py-505 fw-medium"
                data-block="button"
              >
                <span className="button__flair"></span>
                <span className="button__label">Get Started</span>
              </Link>
            </div>
            <div className="col-lg-6 ps-lg-5">
              <div className="tw-rounded-28-px overflow-hidden position-relative" style={{ height: 460 }}>
                <img
                  src="/assets/images/thumbs/Finance-Manager-Training.jpg"
                  alt="Zalgo culture"
                  className="w-100 h-100 object-fit-cover"
                />
                <div
                  className="position-absolute bottom-0 start-0 m-4 bg-white rounded-3 shadow-lg p-3 d-flex align-items-center gap-3"
                  style={{ maxWidth: 220 }}
                >
                  <div
                    style={{
                      width: 44,
                      height: 44,
                      background: "#e8f4fd",
                      borderRadius: 10,
                      display: "flex",
                      alignItems: "center",
                      justifyContent: "center",
                      flexShrink: 0,
                    }}
                  >
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="#0077b6">
                      <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                    </svg>
                  </div>
                  <div>
                    <div className="fw-bold text-heading" style={{ fontSize: 14 }}>
                      15+ Team Members
                    </div>
                    <div className="text-neutral-500" style={{ fontSize: 12 }}>
                      Growing every quarter
                    </div>
                  </div>
                </div>
                <img
                  src="/assets/images/shapes/finger-shape.png"
                  alt=""
                  className="flower animate__wobble__two position-absolute"
                  style={{ top: -20, right: -20, zIndex: -1 }}
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* KEY VALUES */}
      <section className="py-120" style={{ background: "#f8fafc" }}>
        <div className="container">
          <div className="text-center tw-mb-14">
            <span className="cv-badge">What We Stand For</span>
            <h2 className="splitTextStyleOne cv-heading tw-mb-4">Our Key Values</h2>
            <p className="cv-sub mx-auto" style={{ maxWidth: 560 }}>
              Eight values that define how we think, work, and treat each other — every single
              day.
            </p>
          </div>
          <div className="row gy-4">
            {vals.map((v, i) => (
              <div className="col-lg-3 col-md-6" key={i}>
                <div
                  className="cv-val-card h-100"
                  style={{ "--cv-accent": v.color } as React.CSSProperties}
                >
                  <div className="cv-val-icon" style={{ background: v.bg }}>
                    <svg
                      viewBox="0 0 24 24"
                      fill={v.color}
                      dangerouslySetInnerHTML={{ __html: v.icon }}
                    />
                  </div>
                  <h4>{v.title}</h4>
                  <p>{v.desc}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* BEHIND THE SCENES */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center tw-mb-14">
            <span className="cv-badge">Behind the Scenes</span>
            <h2 className="splitTextStyleOne cv-heading tw-mb-4">Life Behind the Code</h2>
            <p className="cv-sub mx-auto" style={{ maxWidth: 520 }}>
              Real moments from our workspace — where focus, fun, and collaboration happen side by
              side.
            </p>
          </div>
          <div className="row g-3">
            <div className="col-lg-6">
              <div className="cv-scene" style={{ height: 380 }}>
                <img src="/assets/images/thumbs/workplace-tab-thumb.png" alt="Team strategy session" />
                <div className="cv-scene-overlay">
                  <span>Strategy Sessions</span>
                </div>
              </div>
            </div>
            <div className="col-lg-3">
              <div className="d-flex flex-column gap-3 h-100">
                <div className="cv-scene" style={{ height: 180 }}>
                  <img src="/assets/images/thumbs/blog-page-img2.png" alt="Code review" />
                  <div className="cv-scene-overlay">
                    <span>Code Reviews</span>
                  </div>
                </div>
                <div className="cv-scene" style={{ height: 180 }}>
                  <img src="/assets/images/thumbs/hire-img3.png" alt="Design sprint" />
                  <div className="cv-scene-overlay">
                    <span>Design Sprints</span>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-lg-3">
              <div className="d-flex flex-column gap-3 h-100">
                <div className="cv-scene" style={{ height: 180 }}>
                  <img src="/assets/images/thumbs/faq-thumb3.png" alt="Team lunch" />
                  <div className="cv-scene-overlay">
                    <span>Team Lunches</span>
                  </div>
                </div>
                <div className="cv-scene" style={{ height: 180 }}>
                  <img src="/assets/images/thumbs/hire-img4.png" alt="Brainstorm" />
                  <div className="cv-scene-overlay">
                    <span>Brainstorms</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="row g-3 mt-0">
            <div className="col-md-4">
              <div className="cv-scene" style={{ height: 200 }}>
                <img src="/assets/images/case-study/lms.jpg" alt="Product demo" />
                <div className="cv-scene-overlay">
                  <span>Product Demos</span>
                </div>
              </div>
            </div>
            <div className="col-md-4">
              <div className="cv-scene" style={{ height: 200 }}>
                <img src="/assets/images/thumbs/blog-page-img3.png" alt="Client call" />
                <div className="cv-scene-overlay">
                  <span>Client Calls</span>
                </div>
              </div>
            </div>
            <div className="col-md-4">
              <div className="cv-scene" style={{ height: 200 }}>
                <img src="/assets/images/case-study/erpsystem-thumb.jpg" alt="Learning sessions" />
                <div className="cv-scene-overlay">
                  <span>Learning Sessions</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* HOW WE WORK */}
      <section className="py-120" style={{ background: "#f8fafc" }}>
        <div className="container">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-5">
              <span className="cv-badge">Our Process</span>
              <h2 className="splitTextStyleOne cv-heading tw-mb-5">How We Work — Day to Day</h2>
              <p className="cv-sub">
                Our work culture is structured around clarity, collaboration, and continuous
                improvement. Here&apos;s what a typical week looks like inside Zalgo Infotech.
              </p>
            </div>
            <div className="col-lg-7 ps-lg-5">
              <div className="d-flex flex-column">
                {steps.map((step, i) => (
                  <div key={i}>
                    <div className="cv-step">
                      <div className="cv-step-num">{String(i + 1).padStart(2, "0")}</div>
                      <div className="cv-step-body">
                        <h5>{step.title}</h5>
                        <p>{step.desc}</p>
                      </div>
                    </div>
                    {i !== steps.length - 1 && <div className="cv-step-connector"></div>}
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* VOICES */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center tw-mb-14">
            <span className="cv-badge">Team Voices</span>
            <h2 className="splitTextStyleOne cv-heading tw-mb-4">Voices from Zalgo Infotech</h2>
            <p className="cv-sub mx-auto" style={{ maxWidth: 520 }}>
              What our team members say about working here — in their own words.
            </p>
          </div>
          <div className="row gy-4">
            {voices.map((v, i) => (
              <div className="col-lg-4" key={i}>
                <div className="cv-voice-card h-100">
                  <div className="cv-stars">★★★★★</div>
                  <div className="cv-voice-quote">{v.quote}</div>
                  <div className="cv-voice-author">
                    <img src={`/assets/images/thumbs/${v.img}`} alt={v.name} />
                    <div className="cv-voice-author-info">
                      <h6>{v.name}</h6>
                      <span>{v.role}</span>
                    </div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* PLEDGE */}
      <section className="cv-pledge">
        <div className="container">
          <h2>Our Pledge to Every Team Member</h2>
          <p>
            We commit to creating an environment where you can do the best work of your career —
            with the support, autonomy, and tools you need to succeed and grow.
          </p>
          <div className="cv-pledge-items">
            {pledgeItems.map((p) => (
              <div className="cv-pledge-item" key={p}>
                {p}
              </div>
            ))}
          </div>
          <div className="mt-10">
            <Link
              href={routes.career}
              className="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center gap-2 group tw-px-10 rounded-pill tw-py-505 fw-bold mt-4"
              data-block="button"
            >
              <span className="button__flair"></span>
              <span className="button__label">Join Our Team Today</span>
            </Link>
          </div>
        </div>
      </section>
    </PageShell>
  );
}
