import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Life at Zalgo Infotech",
  description:
    "Discover life at Zalgo Infotech with open communication, continuous learning, work-life balance, and a team behind 40+ successful global projects.",
  keywords: [
    "life at Zalgo Infotech",
    "company culture",
    "work environment",
    "team members",
    "IT company careers",
    "employee culture",
  ],
  path: "/lifezalgo",
});

const stats = [
  { num: "5+", label: "Years of Innovation" },
  { num: "40+", label: "Successful Projects" },
  { num: "15+", label: "Team Members" },
  { num: "10+", label: "Countries Served" },
  { num: "96%", label: "Upwork Job Success" },
];

const cultureItems = [
  "Open, transparent communication at every level",
  "Freedom to experiment and ship bold ideas",
  "Regular knowledge-sharing sessions & workshops",
  "Flexible hours with a results-first mindset",
];

const values = [
  {
    icon: '<path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7z"/>',
    title: "Innovation First",
    desc: "We love solving complex problems with creative thinking. Every challenge is an opportunity to build something better than what existed before.",
  },
  {
    icon: '<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>',
    title: "Teamwork Over Ego",
    desc: "Collaboration beats competition every time. We share knowledge, lift each other up, and celebrate wins together as one united team.",
  },
  {
    icon: '<path d="M12 3L1 9l4 2.18V15h2v-2.82L9 13.5V17h6v-3.5l2-1.08V15h2v-3.82L23 9 12 3zm6 8.99L12 15 6 11.99V11l6 3 6-3v.99z"/>',
    title: "Continuous Learning",
    desc: "Technology never stops evolving, and neither do we. We invest in skills, attend conferences, run internal sessions, and always stay curious.",
  },
  {
    icon: '<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/>',
    title: "Ownership Mindset",
    desc: "Every team member takes pride in their work. We own outcomes, not just tasks — and we hold ourselves accountable to deliver the best results.",
  },
  {
    icon: '<path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/>',
    title: "Work-Life Balance",
    desc: "Smart work beats long hours. We respect personal time, encourage healthy boundaries, and believe a rested mind produces the best work.",
  },
  {
    icon: '<path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>',
    title: "Client Trust",
    desc: "We treat every client relationship as a long-term partnership. Honesty, transparency, and delivering on commitments are non-negotiable principles.",
  },
  {
    icon: '<path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>',
    title: "Open Communication",
    desc: "We speak openly, give honest feedback, and resolve differences directly. No politics, no silos — just clear, respectful conversations that move things forward.",
  },
  {
    icon: '<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm4.24 16L12 15.45 7.77 18l1.12-4.81-3.73-3.23 4.92-.42L12 5l1.92 4.53 4.92.42-3.73 3.23L16.23 18z"/>',
    title: "Excellence Always",
    desc: "Good enough is never good enough. We obsess over quality in every line of code, every design decision, and every client interaction we have.",
  },
];

const benefits = [
  {
    icon: '<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67V7z"/>',
    title: "Flexible Working Hours",
    desc: "Work at your most productive time. We focus on results, not rigid schedules.",
  },
  {
    icon: '<path d="M12 3L1 9l4 2.18V15h2v-2.82L9 13.5V17h6v-3.5l2-1.08V15h2v-3.82L23 9 12 3zm6 8.99L12 15 6 11.99V11l6 3 6-3v.99z"/>',
    title: "Skill Development & Training",
    desc: "Access courses, workshops, and mentorship programs to accelerate your growth.",
  },
  {
    icon: '<path d="M20 6h-2.18c.07-.23.18-.49.18-.83C18 3.87 16.86 3 16 3h-4C11.14 3 10 3.87 10 5.17c0 .34.11.6.18.83H8c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2z"/>',
    title: "Remote & Hybrid Options",
    desc: "Work from home or the office — we trust you to choose what works best for you.",
  },
  {
    icon: '<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>',
    title: "Career Growth Opportunities",
    desc: "Clear growth paths with regular reviews, promotions, and leadership opportunities.",
  },
  {
    icon: '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/>',
    title: "Exciting Real-World Projects",
    desc: "Work on live products for global clients across healthcare, e-commerce, SaaS, and more.",
  },
  {
    icon: '<path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>',
    title: "Competitive Salary Packages",
    desc: "Market-competitive compensation reviewed annually, plus performance bonuses.",
  },
];

const team = [
  { img: "annu.png", name: "Annu", role: "UI/UX Designer", linkedin: "#" },
  { img: "ashu.png", name: "Ashu", role: "Full Stack Developer", linkedin: "#" },
  { img: "bhupendra.png", name: "Bhupendra", role: "Backend Engineer", linkedin: "#" },
];

const partnerLogos: { file: string; alt: string }[] = [
  { file: "paypal.png", alt: "paypal" },
  { file: "Zoho.png", alt: "Zoho" },
  { file: "upwork.png", alt: "upwork" },
  { file: "envato.png", alt: "envato" },
  { file: "shopify.png", alt: "shopify" },
  { file: "godaddy.png", alt: "godaddy" },
  { file: "digitalocean.png", alt: "digitalocean" },
  { file: "Stripe.png", alt: "Stripe" },
  { file: "HubSpot.svg", alt: "HubSpot" },
  { file: "cloudflare.png", alt: "cloudflare" },
];

export default function LifeZalgoPage() {
  return (
    <PageShell>
      <style>{`
/* ── image quality ── */
.lz-img-mosaic img,
.lz-gallery-item img,
.lz-team-card img {
    image-rendering: auto;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transform: translateZ(0);
}
/* ── shared ── */
.lz-badge { display:inline-block; background:#e8f4fd; color:#0077b6; font-size:12px; font-weight:700; letter-spacing:.8px; text-transform:uppercase; padding:5px 14px; border-radius:20px; margin-bottom:14px; }
.lz-heading { font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:800; color:#0d1b2a; line-height:1.2; }
.lz-sub { font-size:16px; color:#64748b; line-height:1.8; font-weight:500; }

/* ── hero ── */
.lz-hero { background-image:url('/assets/images/bg/mash-gradient-bg1.png'); background-size:cover; padding:110px 0 70px; }

/* ── stats bar ── */
.lz-stats { background:#0d1b2a; padding:40px 0; }
.lz-stat-item { text-align:center; border-right:1px solid rgba(255,255,255,.1); }
.lz-stat-item:last-child { border-right:none; }
.lz-stat-num { font-size:2.4rem; font-weight:800; color:#fff; line-height:1; }
.lz-stat-label { font-size:13px; color:rgba(255,255,255,.6); font-weight:500; margin-top:4px; }

/* ── culture split ── */
.lz-img-mosaic { display:grid; grid-template-columns:1fr 1fr; grid-template-rows:200px 200px; gap:12px; }
.lz-img-mosaic .lz-m-wide { grid-column:1/3; }
.lz-img-mosaic img { width:100%; height:100%; object-fit:cover; border-radius:12px; display:block; }

/* ── values ── */
.lz-value-card { background:#fff; border:1px solid #e8edf2; border-radius:16px; padding:32px 26px; transition:all .25s; }
.lz-value-card:hover { transform:translateY(-6px); box-shadow:0 20px 50px rgba(0,119,182,.1); border-color:#bae6fd; }
.lz-value-icon { width:56px; height:56px; background:#e8f4fd; border-radius:14px; display:flex; align-items:center; justify-content:center; margin-bottom:18px; }
.lz-value-icon svg { width:28px; height:28px; fill:#0077b6; }
.lz-value-card h4 { font-size:16px; font-weight:800; color:#0d1b2a; margin-bottom:8px; }
.lz-value-card p { font-size:14px; color:#64748b; line-height:1.7; margin:0; }

/* ── gallery ── */
.lz-gallery { display:grid; grid-template-columns:repeat(3,1fr); gap:14px; }
.lz-gallery-item { border-radius:14px; overflow:hidden; position:relative; }
.lz-gallery-item img { width:100%; height:220px; object-fit:cover; display:block; transition:transform .4s; }
.lz-gallery-item:hover img { transform:scale(1.06); }
.lz-gallery-item.tall img { height:460px; }
.lz-gallery-col { display:flex; flex-direction:column; gap:14px; }

/* ── benefits ── */
.lz-benefit { display:flex; align-items:flex-start; gap:16px; padding:20px 22px; background:#f8fafc; border-radius:12px; border:1px solid #e8edf2; }
.lz-benefit-icon { width:44px; height:44px; background:#0077b6; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
.lz-benefit-icon svg { width:22px; height:22px; fill:#fff; }
.lz-benefit-text h5 { font-size:15px; font-weight:700; color:#0d1b2a; margin-bottom:4px; }
.lz-benefit-text p { font-size:13px; color:#64748b; margin:0; line-height:1.6; }

/* ── team ── */
.lz-team-card { background:#fff; border:1px solid #e8edf2; border-radius:16px; overflow:hidden; text-align:center; transition:all .25s; }
.lz-team-card:hover { transform:translateY(-6px); box-shadow:0 20px 50px rgba(0,0,0,.09); }
.lz-team-card img { width:100%; height:240px; object-fit:cover; object-position:top; display:block; }
.lz-team-info { padding:20px 16px 24px; }
.lz-team-info h5 { font-size:16px; font-weight:800; color:#0d1b2a; margin-bottom:4px; }
.lz-team-info span { font-size:13px; color:#0077b6; font-weight:600; }
.lz-team-socials { display:flex; justify-content:center; gap:10px; margin-top:12px; }
.lz-team-socials a { width:32px; height:32px; background:#f0f9ff; border-radius:8px; display:flex; align-items:center; justify-content:center; text-decoration:none; transition:background .2s; }
.lz-team-socials a:hover { background:#0077b6; }
.lz-team-socials a:hover svg { fill:#fff; }
.lz-team-socials svg { width:15px; height:15px; fill:#0077b6; transition:fill .2s; }

/* ── quote ── */
.lz-quote { background:linear-gradient(135deg,#0d1b2a,#0f3460); color:#fff; padding:64px 0; text-align:center; }
.lz-quote blockquote { font-size:clamp(1.2rem,2.5vw,1.7rem); font-weight:700; max-width:800px; margin:0 auto; line-height:1.5; }
.lz-quote cite { display:block; margin-top:18px; font-size:14px; color:rgba(255,255,255,.6); font-style:normal; }

@media(max-width:768px){
    .lz-gallery { grid-template-columns:1fr 1fr; }
    .lz-gallery-item.tall img { height:220px; }
    .lz-img-mosaic { grid-template-columns:1fr; }
    .lz-img-mosaic .lz-m-wide { grid-column:1; }
}
@media(max-width:576px){ .lz-gallery { grid-template-columns:1fr; } }
      `}</style>

      {/* ══ HERO ══ */}
      <section className="lz-hero">
        <div className="container">
          <div className="text-center">
            <span className="lz-badge">Our Workplace</span>
            <h1 className="splitTextStyleOne lz-heading tw-mb-5">
              Life at <span className="text-main-600">Zalgo Infotech</span>
            </h1>
            <p className="lz-sub mx-auto tw-mb-8" style={{ maxWidth: 600 }}>
              We build world-class digital products — but more importantly, we build a team where
              every person grows, contributes, and loves what they do every day.
            </p>
            <div className="d-inline-flex align-items-center gap-3 flex-wrap justify-content-center">
              <Link
                href={routes.career}
                className="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center gap-2 group tw-px-10 rounded-pill tw-py-505 fw-bold"
                data-block="button"
              >
                <span className="button__flair"></span>
                <span className="button__label">View Open Positions</span>
              </Link>
              <Link
                href={routes.contact}
                className="hover--translate-y-1 btn btn-orange-outline hover-style-five hover-text-white button--stroke d-inline-flex align-items-center justify-content-center gap-2 group tw-px-10 rounded-pill tw-py-505 fw-bold bg-white"
                data-block="button"
              >
                <span className="button__flair"></span>
                <span className="button__label">Join Our Team</span>
              </Link>
            </div>
          </div>
        </div>
      </section>

      {/* ══ STATS BAR ══ */}
      <section className="lz-stats">
        <div className="container">
          <div className="row gy-4">
            {stats.map((s, i) => (
              <div className="col lz-stat-item" key={i}>
                <div className="lz-stat-num">{s.num}</div>
                <div className="lz-stat-label">{s.label}</div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ══ CULTURE SPLIT ══ */}
      <section className="py-120 bg-white overflow-hidden position-relative">
        <img
          src="/assets/images/shapes/squre-box-shape.png"
          alt=""
          className="position-absolute top-50 start-0 ms-5 animate__wobble__two z-0 d-lg-block d-none opacity-50"
        />
        <div className="container position-relative z-1">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-6">
              <span className="lz-badge">Who We Are</span>
              <h2 className="splitTextStyleOne lz-heading tw-mb-5">
                A Culture That
                <br />
                <span className="font-dm-serif fst-italic fw-normal text-main-600">
                  Empowers Everyone
                </span>
              </h2>
              <p className="lz-sub tw-mb-5">
                At Zalgo Infotech, we believe great products are built by happy, motivated people.
                We nurture a culture of trust, creativity, continuous learning, and collective
                ownership.
              </p>
              <p className="lz-sub tw-mb-8">
                Whether you&rsquo;re a developer, designer, or strategist — you&rsquo;ll find a
                place where your ideas are heard, your growth is supported, and your work
                genuinely matters.
              </p>
              <div className="d-flex flex-column gap-3">
                {cultureItems.map((item, i) => (
                  <div className="d-flex align-items-center gap-3" key={i}>
                    <span
                      className="tw-w-6 tw-h-6 bg-main-600 text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                      style={{ fontSize: 11 }}
                    >
                      &#10003;
                    </span>
                    <span className="fw-medium text-neutral-700">{item}</span>
                  </div>
                ))}
              </div>
            </div>
            <div className="col-lg-6 ps-lg-5">
              <div className="lz-img-mosaic">
                <div className="lz-m-wide">
                  <img src="/assets/images/thumbs/Tailored-solution.jpg" alt="Zalgo team at work" />
                </div>
                <div>
                  <img src="/assets/images/thumbs/faq-thumb1.png" alt="Zalgo office" />
                </div>
                <div>
                  <img src="/assets/images/thumbs/hire-img1.png" alt="Team collaboration" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ══ CORE VALUES ══ */}
      <section className="py-120" style={{ background: "#f8fafc" }}>
        <div className="container">
          <div className="text-center tw-mb-14">
            <span className="lz-badge">What Drives Us</span>
            <h2 className="splitTextStyleOne lz-heading tw-mb-4">Our Core Values</h2>
            <p className="lz-sub mx-auto" style={{ maxWidth: 560 }}>
              These aren&rsquo;t just words on a wall — they guide every decision, every product,
              and every interaction.
            </p>
          </div>
          <div className="row gy-4">
            {values.map((v, i) => (
              <div className="col-lg-3 col-md-6" key={i}>
                <div className="lz-value-card h-100">
                  <div className="lz-value-icon">
                    <svg
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
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

      {/* ══ INSIDE ZALGO – PHOTO GALLERY ══ */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center tw-mb-14">
            <span className="lz-badge">Our Workspace</span>
            <h2 className="splitTextStyleOne lz-heading tw-mb-4">Inside Zalgo Infotech</h2>
            <p className="lz-sub mx-auto" style={{ maxWidth: 520 }}>
              A glimpse into the space where ideas turn into products — collaborative, energetic,
              and always moving forward.
            </p>
          </div>
          <div className="row gy-3">
            <div className="col-lg-4">
              <div className="lz-gallery-col h-100">
                <div className="lz-gallery-item" style={{ flex: 1 }}>
                  <img
                    src="/assets/images/thumbs/blog-page-img1.png"
                    alt="Zalgo workspace"
                    style={{ height: "100%", minHeight: 200 }}
                  />
                </div>
                <div className="lz-gallery-item" style={{ flex: 1 }}>
                  <img
                    src="/assets/images/thumbs/faq-thumb2.png"
                    alt="Team at work"
                    style={{ height: "100%", minHeight: 200 }}
                  />
                </div>
              </div>
            </div>
            <div className="col-lg-4">
              <div className="lz-gallery-item h-100">
                <img
                  src="/assets/images/thumbs/workplace-tab-thumb.png"
                  alt="Office life"
                  style={{ height: "100%", minHeight: 440 }}
                />
              </div>
            </div>
            <div className="col-lg-4">
              <div className="lz-gallery-col h-100">
                <div className="lz-gallery-item" style={{ flex: 1 }}>
                  <img
                    src="/assets/images/thumbs/hire-img2.png"
                    alt="Team collaboration"
                    style={{ height: "100%", minHeight: 200 }}
                  />
                </div>
                <div className="lz-gallery-item" style={{ flex: 1 }}>
                  <img
                    src="/assets/images/thumbs/blog-page-img2.png"
                    alt="Daily standup"
                    style={{ height: "100%", minHeight: 200 }}
                  />
                </div>
              </div>
            </div>
          </div>
          <div className="row gy-3 mt-0">
            <div className="col-md-4">
              <div className="lz-gallery-item">
                <img src="/assets/images/case-study/erpsystem-thumb.jpg" alt="Brainstorming session" />
              </div>
            </div>
            <div className="col-md-4">
              <div className="lz-gallery-item">
                <img src="/assets/images/case-study/lms.jpg" alt="Pair programming" />
              </div>
            </div>
            <div className="col-md-4">
              <div className="lz-gallery-item">
                <img src="/assets/images/case-study/washing.jpeg" alt="Project review" />
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ══ WHY WORK WITH US ══ */}
      <section className="py-120" style={{ background: "#f8fafc" }}>
        <div className="container">
          <div className="row gy-5 align-items-center">
            <div className="col-lg-5">
              <span className="lz-badge">Benefits & Perks</span>
              <h2 className="splitTextStyleOne lz-heading tw-mb-5">
                Why Work With Zalgo Infotech?
              </h2>
              <p className="lz-sub">
                We don&rsquo;t just offer jobs — we offer careers built around growth,
                flexibility, and a team that genuinely cares about your success inside and outside
                of work.
              </p>
              <div className="mt-4">
                <Link
                  href={routes.career}
                  className="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center gap-2 group tw-px-10 rounded-pill tw-py-505 fw-bold"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">See Open Roles</span>
                </Link>
              </div>
            </div>
            <div className="col-lg-7 ps-lg-5">
              <div className="row gy-3">
                {benefits.map((b, i) => (
                  <div className="col-md-6" key={i}>
                    <div className="lz-benefit h-100">
                      <div className="lz-benefit-icon">
                        <svg viewBox="0 0 24 24" dangerouslySetInnerHTML={{ __html: b.icon }} />
                      </div>
                      <div className="lz-benefit-text">
                        <h5>{b.title}</h5>
                        <p>{b.desc}</p>
                      </div>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ══ MEET THE TEAM ══ */}
      <section className="py-120 bg-white">
        <div className="container">
          <div className="text-center tw-mb-14">
            <span className="lz-badge">The People Behind the Work</span>
            <h2 className="splitTextStyleOne lz-heading tw-mb-4">Meet Our Team</h2>
            <p className="lz-sub mx-auto" style={{ maxWidth: 520 }}>
              Passionate individuals who bring expertise, creativity, and dedication to every
              project we take on.
            </p>
          </div>
          <div className="row gy-4">
            {team.map((member, i) => (
              <div className="col-lg-4 col-md-6" key={i}>
                <div className="lz-team-card">
                  <img src={`/assets/images/thumbs/${member.img}`} alt={member.name} />
                  <div className="lz-team-info">
                    <h5>{member.name}</h5>
                    <span>{member.role}</span>
                    <div className="lz-team-socials">
                      <a href={member.linkedin} title="LinkedIn">
                        <svg viewBox="0 0 24 24">
                          <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                      </a>
                      <a href="mailto:sales@zalgoinfotech.com" title="Email">
                        <svg viewBox="0 0 24 24">
                          <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ══ QUOTE ══ */}
      <div className="lz-quote">
        <div className="container">
          <blockquote>
            &quot;We don&rsquo;t just hire talent — we invest in people, nurture potential, and
            build careers that last.&quot;
          </blockquote>
          <cite>— Zalgo Infotech Leadership Team</cite>
        </div>
      </div>

      {/* ══ TECH PARTNERS ══ */}
      <div className="position-relative z-1">
        <img
          src="/assets/images/shapes/shape-image.png"
          alt=""
          className="position-absolute w-100 start-0 bottom-0 z-n1"
        />
        <div className="brand-three pt-120 mb-5">
          <div className="container">
            <div className="text-center tw-mb-10">
              <span className="lz-badge">Ecosystem</span>
              <h2 className="splitTextStyleOne lz-heading">Our Technology Partners</h2>
            </div>
            <div className="brand-three-slider swiper left-right-gradient gradient-width-200">
              <div className="swiper-wrapper">
                {partnerLogos.map((logo) => (
                  <div
                    className="swiper-slide d-flex align-items-center justify-content-center"
                    key={logo.file}
                  >
                    <img src={`/assets/images/logo/${logo.file}`} alt={logo.alt} />
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>

        {/* CTA */}
        <section className="cta py-md-0 py-5">
          <div className="container">
            <div className="row gy-4 align-items-center">
              <div className="col-md-6 d-md-block d-none">
                <div className="pe-lg-2 position-relative">
                  <img src="/assets/images/thumbs/model-img.png" alt="Model" />
                  <img
                    src="/assets/images/shapes/arrow-right-curve.png"
                    alt=""
                    className="position-absolute top-0 end-0 mt-5 animate__wobble__two"
                  />
                </div>
              </div>
              <div className="col-md-6">
                <div className="ps-lg-4 max-w-532-px">
                  <span className="tw-py-1 tw-px-705 bg-main-600 text-white tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">
                    Join the Team
                  </span>
                  <h3 className="splitTextStyleOne fw-light tw-leading-104 tw-mb-5">
                    <span className="fw-semibold">
                      Ready to Build Something <span className="fw-normal">Amazing With Us?</span>
                    </span>
                  </h3>
                  <p className="text-neutral-600 tw-text-lg splitTextStyleOne">
                    We&rsquo;re always on the lookout for talented, passionate people who want to
                    make a real impact. Check out our open positions or send us your CV.
                  </p>
                  <div className="d-flex gap-3 flex-wrap mt-4">
                    <Link
                      href={routes.career}
                      className="hover--translate-y-1 btn btn-main-two hover-style-two button--stroke d-sm-inline-flex align-items-center justify-content-center gap-2 group tw-px-9 rounded-0 tw-py-5 tw-mt-6"
                      data-block="button"
                    >
                      <span className="button__flair"></span>
                      <span className="button__label">See Open Positions</span>
                    </Link>
                    <Link
                      href={routes.contact}
                      className="hover--translate-y-1 btn btn-orange-outline hover-style-five hover-text-white button--stroke d-sm-inline-flex align-items-center justify-content-center gap-2 group tw-px-9 rounded-0 tw-py-5 tw-mt-6 bg-white"
                      data-block="button"
                    >
                      <span className="button__flair"></span>
                      <span className="button__label">Send Your CV</span>
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </PageShell>
  );
}
