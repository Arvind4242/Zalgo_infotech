import PageShell from "@/components/PageShell";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Privacy Policy",
  description:
    "Read Zalgo Infotech's privacy policy to understand what personal and technical information we collect, how we use it, and how we protect your data.",
  keywords: [
    "Zalgo Infotech privacy policy",
    "data protection policy",
    "personal information collection",
    "website privacy",
    "data security policy",
  ],
  path: "/privacy-policy",
});

const personalInfoItems = [
  "Full Name",
  "Email Address",
  "Phone Number",
  "Company Name",
  "Job Title",
  "Business Website",
  "Project Requirements",
  "Billing Information (when applicable)",
];

const technicalInfoItems = [
  "IP Address",
  "Browser Type",
  "Device Information",
  "Operating System",
  "Pages Visited",
  "Session Duration",
  "Referring Website",
  "Geographic Location (approximate)",
];

const usageItems = [
  "Respond to inquiries and consultation requests",
  "Deliver software development and IT services",
  "Provide project estimates and proposals",
  "Improve website performance and user experience",
  "Send important service updates",
  "Process contracts and invoices",
  "Provide customer support",
  "Conduct analytics and performance monitoring",
  "Prevent fraud and unauthorized activities",
  "Comply with legal obligations",
];

const thirdPartyServices = [
  "Google Analytics",
  "Google Tag Manager",
  "Google Ads",
  "Meta Pixel",
  "LinkedIn Insights",
  "WhatsApp Business",
  "Cloud Hosting Providers",
  "CRM Platforms",
  "Payment Processors",
];

const retentionItems = [
  "Deliver services",
  "Fulfill contractual obligations",
  "Meet legal requirements",
  "Resolve disputes",
  "Maintain business records",
];

const securityMeasures = ["Secure Hosting", "SSL Encryption", "Access Controls", "Security Monitoring", "Backup Systems"];

const rights = [
  {
    title: "Access",
    desc: "Request access to your personal information.",
    icon: '<path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>',
  },
  {
    title: "Correction",
    desc: "Request correction of inaccurate information.",
    icon: '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>',
  },
  {
    title: "Deletion",
    desc: "Request deletion of your personal information.",
    icon: '<path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>',
  },
  {
    title: "Restriction",
    desc: "Request limited processing of your data.",
    icon: '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15v-4H7l5-8v4h4l-5 8z"/>',
  },
  {
    title: "Objection",
    desc: "Object to certain processing activities.",
    icon: '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>',
  },
  {
    title: "Data Portability",
    desc: "Request a copy of your data in a portable format.",
    icon: '<path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>',
  },
];

const gdprBases = ["Consent", "Contractual Necessity", "Legal Obligations", "Legitimate Business Interests"];

const toc = [
  { href: "#s1", num: "01", label: "Information We Collect" },
  { href: "#s2", num: "02", label: "How We Use It" },
  { href: "#s3", num: "03", label: "Cookies" },
  { href: "#s4", num: "04", label: "Third-Party Services" },
  { href: "#s5", num: "05", label: "How We Share" },
  { href: "#s6", num: "06", label: "International Transfers" },
  { href: "#s7", num: "07", label: "Data Retention" },
  { href: "#s8", num: "08", label: "Data Security" },
  { href: "#s9", num: "09", label: "Your Rights" },
  { href: "#s10", num: "10", label: "GDPR" },
  { href: "#s11", num: "11", label: "Children's Privacy" },
  { href: "#s12", num: "12", label: "External Links" },
  { href: "#s13", num: "13", label: "Policy Changes" },
  { href: "#s14", num: "14", label: "Contact Us" },
];

const CheckIcon = () => (
  <span className="pp-check">
    <svg viewBox="0 0 12 12">
      <polyline points="1.5,6 4.5,9.5 10.5,2.5" />
    </svg>
  </span>
);

export default function PrivacyPolicyPage() {
  return (
    <PageShell>
      <style>{`
/* ── Page shell ── */
.pp-hero {
    background: linear-gradient(135deg,#f0f9ff 0%,#e8f5f5 60%,#f7f3ff 100%);
    padding: 100px 0 60px;
}
.pp-hero h1 { font-size: clamp(2rem,4vw,2.9rem); font-weight: 800; color: #0d1b2a; margin-bottom: 10px; }
.pp-hero .pp-effective { font-size: 14px; color: #64748b; font-weight: 600; margin-bottom: 0; }

/* ── Body wrapper ── */
.pp-body { padding: 72px 0 96px; background: #fff; }
.pp-inner { max-width: 860px; margin: 0 auto; }

/* ── TOC sidebar ── */
.pp-toc {
    position: sticky; top: 100px;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px 22px;
}
.pp-toc-title { font-size: 11px; font-weight: 800; color: #94a3b8; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 14px; }
.pp-toc a {
    display: flex; align-items: center; gap: 8px;
    font-size: 13px; font-weight: 600; color: #475569;
    text-decoration: none; padding: 6px 10px; border-radius: 8px;
    transition: all .18s;
}
.pp-toc a:hover, .pp-toc a.active { background: #e8f4fd; color: #0077b6; }
.pp-toc a .pp-toc-num { font-size: 11px; font-weight: 700; color: #0077b6; background: #dbeafe; border-radius: 4px; padding: 1px 6px; flex-shrink: 0; }

/* ── Sections ── */
.pp-section { margin-bottom: 56px; scroll-margin-top: 110px; }
.pp-section-title {
    font-size: 19px; font-weight: 800; color: #0d1b2a;
    border-left: 4px solid #0077b6;
    padding-left: 14px; margin-bottom: 18px;
    line-height: 1.3;
}
.pp-section p { font-size: 15px; color: #475569; line-height: 1.85; margin-bottom: 14px; }
.pp-section ul { padding-left: 0; list-style: none; margin-bottom: 14px; display: flex; flex-direction: column; gap: 8px; }
.pp-section ul li { font-size: 15px; color: #475569; display: flex; align-items: flex-start; gap: 10px; line-height: 1.7; }
.pp-check { width: 18px; height: 18px; background: #0077b6; border-radius: 4px; flex-shrink: 0; margin-top: 3px; display: inline-flex; align-items: center; justify-content: center; }
.pp-check svg { width: 10px; height: 10px; stroke: #fff; stroke-width: 3; fill: none; }

/* Sub-section headings */
.pp-sub { font-size: 15px; font-weight: 700; color: #0d1b2a; margin: 20px 0 8px; display: flex; align-items: center; gap: 8px; }
.pp-sub-dot { width: 8px; height: 8px; background: #0077b6; border-radius: 50%; flex-shrink: 0; }

/* Divider */
.pp-divider { border: none; border-top: 1px dashed #e2e8f0; margin: 0 0 56px; }

/* Contact card */
.pp-contact-card {
    background: linear-gradient(135deg,#0d1b2a 0%,#1a3a4a 100%);
    border-radius: 18px; padding: 40px;
    color: #fff;
}
.pp-contact-card h3 { font-size: 20px; font-weight: 800; margin-bottom: 6px; }
.pp-contact-card p { color: rgba(255,255,255,.75); font-size: 14px; margin-bottom: 24px; }
.pp-contact-row { display: flex; align-items: center; gap: 12px; margin-bottom: 14px; font-size: 14px; color: rgba(255,255,255,.85); font-weight: 500; }
.pp-contact-icon { width: 36px; height: 36px; background: rgba(255,255,255,.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }

/* Rights grid */
.pp-rights-grid { display: grid; grid-template-columns: repeat(auto-fill,minmax(220px,1fr)); gap: 16px; }
.pp-right-card { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px 20px; }
.pp-right-card-title { font-size: 14px; font-weight: 700; color: #0d1b2a; margin-bottom: 6px; display: flex; align-items: center; gap: 8px; }
.pp-right-card-title .pp-right-icon { width: 28px; height: 28px; background: #e8f4fd; border-radius: 6px; display: flex; align-items: center; justify-content: center; }
.pp-right-card-title .pp-right-icon svg { width: 14px; height: 14px; fill: #0077b6; }
.pp-right-card p { font-size: 13px; color: #64748b; margin: 0; line-height: 1.65; }

/* Badge for cookie types */
.pp-cookie-badge { display: inline-block; background: #e8f4fd; color: #0077b6; font-size: 12px; font-weight: 700; padding: 3px 10px; border-radius: 20px; margin-bottom: 6px; }

@media(max-width:991px){
    .pp-toc { display: none; }
    .pp-rights-grid { grid-template-columns: 1fr 1fr; }
}
@media(max-width:575px){
    .pp-rights-grid { grid-template-columns: 1fr; }
    .pp-contact-card { padding: 28px 22px; }
}
      `}</style>

      {/* ── HERO ── */}
      <section className="pp-hero">
        <div className="container">
          <div className="d-flex align-items-center gap-2 mb-3">
            <span className="pp-check" style={{ width: 22, height: 22, borderRadius: 6 }}>
              <svg viewBox="0 0 12 12">
                <polyline points="1.5,6 4.5,9.5 10.5,2.5" />
              </svg>
            </span>
            <span style={{ fontSize: 12, fontWeight: 700, color: "#0077b6", textTransform: "uppercase", letterSpacing: 1 }}>
              Legal
            </span>
          </div>
          <h1>Privacy Policy</h1>
          <p className="pp-effective">Effective Date: June 2026 &nbsp;&middot;&nbsp; Zalgo Infotech Pvt. Ltd.</p>
        </div>
      </section>

      {/* ── BODY ── */}
      <section className="pp-body">
        <div className="container">
          <div className="row gy-5">
            {/* TOC sidebar */}
            <div className="col-lg-3 d-none d-lg-block">
              <nav className="pp-toc" id="pp-toc">
                <div className="pp-toc-title">Contents</div>
                {toc.map((t) => (
                  <a href={t.href} key={t.href}>
                    <span className="pp-toc-num">{t.num}</span> {t.label}
                  </a>
                ))}
              </nav>
            </div>

            {/* Main content */}
            <div className="col-lg-9">
              <div className="pp-inner">
                {/* Intro */}
                <div className="pp-section" style={{ marginBottom: 40 }}>
                  <p>
                    At <strong>Zalgo Infotech Pvt. Ltd.</strong> (&quot;Zalgo Infotech&quot;,
                    &quot;we&quot;, &quot;our&quot;, or &quot;us&quot;), we respect your privacy and
                    are committed to protecting the personal information you share with us.
                  </p>
                  <p>
                    This Privacy Policy explains how we collect, use, disclose, and safeguard your
                    information when you visit{" "}
                    <a
                      href="https://zalgoinfotech.com"
                      target="_blank"
                      rel="noreferrer"
                      style={{ color: "#0077b6", fontWeight: 600 }}
                    >
                      https://zalgoinfotech.com
                    </a>{" "}
                    and use our services.
                  </p>
                  <p
                    style={{
                      background: "#f0f9ff",
                      borderLeft: "4px solid #0077b6",
                      padding: "14px 18px",
                      borderRadius: "0 10px 10px 0",
                      marginTop: 20,
                    }}
                  >
                    By accessing our website, you agree to the practices described in this Privacy
                    Policy.
                  </p>
                </div>

                <hr className="pp-divider" />

                {/* 1. Information We Collect */}
                <div className="pp-section" id="s1">
                  <div className="pp-section-title">1. Information We Collect</div>
                  <p>We may collect the following types of information:</p>

                  <div className="pp-sub">
                    <span className="pp-sub-dot"></span>Personal Information
                  </div>
                  <p>Information that can identify you directly, including:</p>
                  <ul>
                    {personalInfoItems.map((item) => (
                      <li key={item}>
                        <CheckIcon /> {item}
                      </li>
                    ))}
                  </ul>

                  <div className="pp-sub">
                    <span className="pp-sub-dot"></span>Technical Information
                  </div>
                  <p>We automatically collect certain technical data, including:</p>
                  <ul>
                    {technicalInfoItems.map((item) => (
                      <li key={item}>
                        <CheckIcon /> {item}
                      </li>
                    ))}
                  </ul>

                  <div className="pp-sub">
                    <span className="pp-sub-dot"></span>Communication Information
                  </div>
                  <p>
                    When you contact us through Contact Forms, Email, WhatsApp, Phone Calls, Live
                    Chat, or Social Media, we may store the information you provide for
                    communication and support purposes.
                  </p>
                </div>

                <hr className="pp-divider" />

                {/* 2. How We Use */}
                <div className="pp-section" id="s2">
                  <div className="pp-section-title">2. How We Use Your Information</div>
                  <p>We use collected information to:</p>
                  <ul>
                    {usageItems.map((item) => (
                      <li key={item}>
                        <CheckIcon /> {item}
                      </li>
                    ))}
                  </ul>
                </div>

                <hr className="pp-divider" />

                {/* 3. Cookies */}
                <div className="pp-section" id="s3">
                  <div className="pp-section-title">3. Cookies and Tracking Technologies</div>
                  <p>
                    We use cookies and similar technologies to improve website functionality and
                    analyze visitor behavior.
                  </p>

                  <div className="d-flex flex-column gap-4 mt-4">
                    <div style={{ background: "#f8fafc", border: "1px solid #e2e8f0", borderRadius: 12, padding: "20px 24px" }}>
                      <div className="pp-cookie-badge">Essential Cookies</div>
                      <p style={{ margin: "6px 0 0", fontSize: 14, color: "#475569" }}>
                        Required for website operation and security.
                      </p>
                    </div>
                    <div style={{ background: "#f8fafc", border: "1px solid #e2e8f0", borderRadius: 12, padding: "20px 24px" }}>
                      <div className="pp-cookie-badge">Analytics Cookies</div>
                      <p style={{ margin: "6px 0 6px", fontSize: 14, color: "#475569" }}>
                        Used to understand visitor interactions and website performance.
                      </p>
                      <p style={{ fontSize: 13, color: "#64748b", margin: 0 }}>
                        Examples: Google Analytics, Google Tag Manager
                      </p>
                    </div>
                    <div style={{ background: "#f8fafc", border: "1px solid #e2e8f0", borderRadius: 12, padding: "20px 24px" }}>
                      <div className="pp-cookie-badge">Marketing Cookies</div>
                      <p style={{ margin: "6px 0 0", fontSize: 14, color: "#475569" }}>
                        Used to measure advertising effectiveness and improve marketing campaigns.
                      </p>
                    </div>
                  </div>

                  <p style={{ marginTop: 20 }}>You may disable cookies through your browser settings at any time.</p>
                </div>

                <hr className="pp-divider" />

                {/* 4. Third-Party Services */}
                <div className="pp-section" id="s4">
                  <div className="pp-section-title">4. Third-Party Services</div>
                  <p>Our website may use third-party services, including but not limited to:</p>
                  <div style={{ display: "flex", flexWrap: "wrap", gap: 10, marginBottom: 18 }}>
                    {thirdPartyServices.map((s) => (
                      <span
                        key={s}
                        style={{
                          background: "#f0f9ff",
                          border: "1px solid #bae6fd",
                          color: "#0369a1",
                          fontSize: 13,
                          fontWeight: 600,
                          padding: "5px 14px",
                          borderRadius: 20,
                        }}
                      >
                        {s}
                      </span>
                    ))}
                  </div>
                  <p>
                    These providers may collect data according to their own privacy policies. We
                    encourage users to review their policies separately.
                  </p>
                </div>

                <hr className="pp-divider" />

                {/* 5. How We Share */}
                <div className="pp-section" id="s5">
                  <div className="pp-section-title">5. How We Share Information</div>
                  <p
                    style={{
                      background: "#f0fdf4",
                      borderLeft: "4px solid #16a34a",
                      padding: "14px 18px",
                      borderRadius: "0 10px 10px 0",
                    }}
                  >
                    <strong style={{ color: "#16a34a" }}>
                      We do not sell, rent, or trade your personal information.
                    </strong>
                  </p>
                  <p>We may share information only in the following circumstances:</p>

                  <div className="pp-sub">
                    <span className="pp-sub-dot"></span>Service Providers
                  </div>
                  <p>
                    With trusted vendors assisting us in Hosting, Analytics, CRM Management, Email
                    Communication, and Customer Support.
                  </p>

                  <div className="pp-sub">
                    <span className="pp-sub-dot"></span>Legal Requirements
                  </div>
                  <p>When required by applicable law, court orders, or government authorities.</p>

                  <div className="pp-sub">
                    <span className="pp-sub-dot"></span>Business Protection
                  </div>
                  <p>To protect our legal rights, company assets, customers, and website security.</p>
                </div>

                <hr className="pp-divider" />

                {/* 6. International Transfers */}
                <div className="pp-section" id="s6">
                  <div className="pp-section-title">6. International Data Transfers</div>
                  <p>
                    Because we serve clients globally, your information may be processed and stored
                    in countries outside your own jurisdiction.
                  </p>
                  <p>We take reasonable measures to ensure adequate protection of your information during such transfers.</p>
                </div>

                <hr className="pp-divider" />

                {/* 7. Data Retention */}
                <div className="pp-section" id="s7">
                  <div className="pp-section-title">7. Data Retention</div>
                  <p>We retain personal information only for as long as necessary to:</p>
                  <ul>
                    {retentionItems.map((item) => (
                      <li key={item}>
                        <CheckIcon /> {item}
                      </li>
                    ))}
                  </ul>
                  <p>When information is no longer required, it is securely deleted or anonymized.</p>
                </div>

                <hr className="pp-divider" />

                {/* 8. Data Security */}
                <div className="pp-section" id="s8">
                  <div className="pp-section-title">8. Data Security</div>
                  <p>We implement appropriate technical and organizational measures to protect your information, including:</p>
                  <div style={{ display: "flex", flexWrap: "wrap", gap: 12, marginBottom: 18 }}>
                    {securityMeasures.map((s) => (
                      <div
                        key={s}
                        style={{
                          display: "flex",
                          alignItems: "center",
                          gap: 8,
                          background: "#f8fafc",
                          border: "1px solid #e2e8f0",
                          borderRadius: 10,
                          padding: "10px 16px",
                        }}
                      >
                        <span className="pp-check" style={{ width: 20, height: 20, borderRadius: 4, flexShrink: 0 }}>
                          <svg viewBox="0 0 12 12">
                            <polyline points="1.5,6 4.5,9.5 10.5,2.5" />
                          </svg>
                        </span>
                        <span style={{ fontSize: 14, fontWeight: 600, color: "#0d1b2a" }}>{s}</span>
                      </div>
                    ))}
                  </div>
                  <p>
                    While we strive to protect your data, no method of transmission over the
                    internet can be guaranteed as completely secure.
                  </p>
                </div>

                <hr className="pp-divider" />

                {/* 9. Your Rights */}
                <div className="pp-section" id="s9">
                  <div className="pp-section-title">9. Your Privacy Rights</div>
                  <p>Depending on your location, you may have rights to:</p>
                  <div className="pp-rights-grid mt-3">
                    {rights.map((r) => (
                      <div className="pp-right-card" key={r.title}>
                        <div className="pp-right-card-title">
                          <span className="pp-right-icon">
                            <svg
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                              dangerouslySetInnerHTML={{ __html: r.icon }}
                            />
                          </span>
                          {r.title}
                        </div>
                        <p>{r.desc}</p>
                      </div>
                    ))}
                  </div>
                  <p style={{ marginTop: 20 }}>
                    To exercise any of these rights, please contact us using the information below.
                  </p>
                </div>

                <hr className="pp-divider" />

                {/* 10. GDPR */}
                <div className="pp-section" id="s10">
                  <div className="pp-section-title">10. GDPR Compliance (European Union Visitors)</div>
                  <p>
                    If you are located within the European Economic Area (EEA), we process your
                    personal data based on:
                  </p>
                  <ul>
                    {gdprBases.map((item) => (
                      <li key={item}>
                        <CheckIcon /> {item}
                      </li>
                    ))}
                  </ul>
                  <p>You may contact us regarding any GDPR-related request.</p>
                </div>

                <hr className="pp-divider" />

                {/* 11. Children */}
                <div className="pp-section" id="s11">
                  <div className="pp-section-title">11. Children&rsquo;s Privacy</div>
                  <p>
                    Our services are intended for businesses and professionals. We do not knowingly
                    collect personal information from individuals under the age of 13.
                  </p>
                  <p>If such information is identified, it will be promptly removed.</p>
                </div>

                <hr className="pp-divider" />

                {/* 12. External Links */}
                <div className="pp-section" id="s12">
                  <div className="pp-section-title">12. External Links</div>
                  <p>
                    Our website may contain links to third-party websites. We are not responsible
                    for the privacy practices, content, or security of external websites.
                  </p>
                  <p>Users access such websites at their own risk.</p>
                </div>

                <hr className="pp-divider" />

                {/* 13. Changes */}
                <div className="pp-section" id="s13">
                  <div className="pp-section-title">13. Changes to This Privacy Policy</div>
                  <p>
                    We may update this Privacy Policy periodically. Any updates will be posted on
                    this page with a revised Effective Date.
                  </p>
                  <p>Continued use of our website after changes constitutes acceptance of the updated policy.</p>
                </div>

                <hr className="pp-divider" />

                {/* 14. Contact */}
                <div className="pp-section" id="s14">
                  <div className="pp-section-title">14. Contact Us</div>
                  <p>If you have any questions regarding this Privacy Policy or your personal information, please contact:</p>
                  <div className="pp-contact-card mt-4">
                    <h3>Zalgo Infotech Pvt. Ltd.</h3>
                    <p>We&rsquo;re here to help with any privacy-related question or request.</p>
                    <div className="pp-contact-row">
                      <span className="pp-contact-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="rgba(255,255,255,.85)">
                          <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                        </svg>
                      </span>
                      100 Feet Road, Sindhi Colony, Vinay Nagar, Gwalior, Madhya Pradesh, India
                    </div>
                    <div className="pp-contact-row">
                      <span className="pp-contact-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="rgba(255,255,255,.85)">
                          <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                      </span>
                      <a href="mailto:sales@zalgoinfotech.com" style={{ color: "rgba(255,255,255,.85)", textDecoration: "none" }}>
                        sales@zalgoinfotech.com
                      </a>
                    </div>
                    <div className="pp-contact-row">
                      <span className="pp-contact-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="rgba(255,255,255,.85)">
                          <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                        </svg>
                      </span>
                      <a href="tel:+919244213326" style={{ color: "rgba(255,255,255,.85)", textDecoration: "none" }}>
                        +91 9244213326
                      </a>
                    </div>
                    <div className="pp-contact-row" style={{ marginBottom: 0 }}>
                      <span className="pp-contact-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="rgba(255,255,255,.85)">
                          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                        </svg>
                      </span>
                      <a href="https://zalgoinfotech.com" target="_blank" rel="noreferrer" style={{ color: "rgba(255,255,255,.85)", textDecoration: "none" }}>
                        https://zalgoinfotech.com
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Highlight active TOC link on scroll */}
      <script
        dangerouslySetInnerHTML={{
          __html: `
(function () {
    var sections = document.querySelectorAll('.pp-section[id]');
    var links    = document.querySelectorAll('#pp-toc a');
    if (!sections.length || !links.length) return;

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                links.forEach(function (l) { l.classList.remove('active'); });
                var active = document.querySelector('#pp-toc a[href="#' + entry.target.id + '"]');
                if (active) active.classList.add('active');
            }
        });
    }, { rootMargin: '-20% 0px -70% 0px' });

    sections.forEach(function (s) { observer.observe(s); });
})();
`,
        }}
      />
    </PageShell>
  );
}
