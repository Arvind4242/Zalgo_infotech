import PageShell from "@/components/PageShell";
import ContactForm from "@/components/ContactForm";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Contact Us - Get a Free Consultation",
  description:
    "Get in touch with Zalgo Infotech for your next web development, AI, or digital transformation project. Free consultation, offices in the US, Canada, and India.",
  keywords: [
    "contact IT company",
    "web development consultation",
    "hire software developers",
    "get a quote web development",
    "Zalgo Infotech contact",
  ],
  path: "/contact",
});

const partnerLogos = [
  "upwork.png",
  "paypal.png",
  "Zoho.png",
  "envato.png",
  "shopify.png",
  "godaddy.png",
  "digitalocean.png",
  "Stripe.png",
  "cloudflare.png",
  "HubSpot.svg",
];

export default function ContactPage() {
  return (
    <PageShell>
      <style>{`
        .contact-section { background: #f9fbfc; padding: 80px 20px; }
        .section-head { text-align: center; margin-bottom: 50px; }
        .section-head h2 { font-size: 36px; margin-bottom: 10px; }
        .section-head p { color: #666; }
        .contact-grid { display: flex; gap: 20px; align-items: flex-start; }
        .office-box { display: flex; gap: 20px; background: #eef6f7; padding: 20px; border-radius: 20px; width: 30%; flex-direction: column; }
        .office-card { background: #fff; padding: 20px; border-radius: 14px; width: 100%; display: flex; flex-direction: column; }
        .office-card p { font-size: 16px; line-height: 22px; margin-bottom: 10px; }
        .office-card h4 { margin-bottom: 10px; font-size: 20px; color: var(--main-600) !important; }
        .office-card a { color: #3a8f8f; font-size: 14px; }
        .form-box { background: #fff; padding: 30px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0, 0, 0, .05); width: 70%; }
        .form-box h3 { margin-bottom: 20px; }
        .form-row { display: flex; gap: 15px; }
        .form-box input, .form-box textarea, .form-box .select { width: 100%; padding: 14px; border-radius: 10px; border: 1px solid #ddd; margin-bottom: 15px; }
        .form-box textarea { resize: none; height: 120px; }
        .form-row .iti { flex: 1; width: 100%; position: relative; }
        .form-row .iti input { margin-bottom: 0; }
        .form-row .iti input.iti__tel-input,
        .form-row .iti input[type="tel"] { padding-left: 92px !important; }
        .form-row .iti .iti__flag-container,
        .form-row .iti .iti__selected-flag { z-index: 2; }
        .upload-box { border: 1px solid #ddd; border-radius: 12px; padding: 14px; text-align: center; color: #fff; max-width: 100%; margin-bottom: 15px; cursor: pointer; transition: 0.3s; position: relative; }
        .upload-box:hover { border-color: #006d75; background: #006d7520; }
        .upload-box input { position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer; top: 0; left: 0; }
        .upload-content .icon, .file-info .icon { font-size: 40px; margin-bottom: 10px; background: transparent; }
        .upload-content { display: flex; }
        .upload-content h3, .file-info h3 { font-size: 20px; color: #006d75; text-align: left; width: 100%; margin-bottom: 0px; }
        .upload-content p, .file-info p { font-size: 16px; color: #000; }
        .upload-content span, .file-info span { color: #006d75; font-weight: bold; }
        .file-info { display: flex; align-items: center; gap: 15px; }
        .form-box button { width: 100%; padding: 14px; border-radius: 30px; border: none; background: linear-gradient(90deg, #3a8f8f, #2f6f6f); color: #fff; font-size: 16px; cursor: pointer; }
        .logos { margin: 40px 0 30px 0; }
        .logos img { height: 35px; width: auto; }
        .logos .swiper-wrapper { height: auto !important; }
        .trusted { text-align: center; margin: 120px 0 60px; width: 100%; position: relative; }
        .trusted h4 { margin-bottom: 18px; }
        .testimonial { display: flex; gap: 30px; align-items: center; padding: 25px; border-radius: 20px; background-color: #006d75 !important; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); background-size: cover; background-position: center bottom; }
        .video-box { position: relative; width: 40%; border-radius: 15px; }
        .testimonial-content { background: #ffffff80; padding: 14px 22px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); }
        .testimonial-content > .stats-wrapper + p { font-size: 20px; line-height: 28px; margin: 25px 0; width: 70%; text-align: left; }
        .stat-box { display: flex; width: 50%; align-items: center; gap: 20px; }
        .stat-number { font-size: 36px; font-weight: 700; color: #1f7a7a; }
        .stat-box:first-child { border-right: 1px solid #1f7a7a; }
        .stat-text { font-size: 25px; color: #000; font-weight: 400; }
        .stats-wrapper { display: flex; gap: 15px; margin-bottom: 10px; }
        .stars { color: #ffb400; margin: 5px 0; }
        .clint-relation { margin-top: 20px; background: rgb(31 122 122 / 10%); width: auto; padding: 9px 12px; border-radius: 5px; max-width: max-content; }
        @media (max-width: 900px) {
          .contact-grid, .testimonial { flex-direction: column; }
          .office-box { flex-direction: column; }
          .form-row { flex-direction: column; }
        }
      `}</style>

      <section className="contact-section">
        <div className="container">
          <div className="section-head">
            <h2>Get in Touch</h2>
            <p>
              We&apos;d love to hear about your project or answer any questions you may have.
              <br />
              Let&apos;s build something great together!
            </p>
          </div>

          <div className="contact-grid">
            <div className="office-box">
              <div className="office-card">
                <h4>
                  <img className="me-1" width={24} src="/assets/images/Group-4.webp" alt="us-flag" loading="lazy" /> US
                </h4>
                <p>
                  1601 Penfield Road Suite <br />
                  575 Rochester, NY 14625
                </p>
                <strong>+1 (646) 568-7779</strong>
              </div>

              <div className="office-card">
                <h4>
                  <img className="me-1" width={24} src="/assets/images/canada.jpg" alt="ca-flag" loading="lazy" /> Canada
                </h4>
                <p>
                  2482 Yonge Street #1080 Toronto,
                  <br /> ON M4P 2H5 Canada
                </p>
                <strong>+1 (646) 568-7779</strong>
              </div>

              <div className="office-card">
                <h4>
                  <img className="me-1" width={24} src="/assets/images/Group-3.webp" alt="india-flag" loading="lazy" /> India
                </h4>
                <p>1/65, vinay nagar sec 3, 100 feet road, s. p. ashram, gwalior, madhya pradesh, india - 474012</p>
                <strong> +91 92442 13326</strong>
              </div>
            </div>

            <ContactForm />
          </div>

          <div className="trusted">
            <h4>Our Technology Partners</h4>
            <div className="logos d-flex flex-wrap justify-content-center align-items-center" style={{ gap: 32 }}>
              {partnerLogos.map((logo) => (
                <img key={logo} src={`/assets/images/logo/${logo}`} alt="" />
              ))}
            </div>

            <div className="testimonial" style={{ backgroundImage: "url(/assets/images/thumbs/video.png)" }}>
              <div className="video-box">
                <div className="position-relative max-w-390-px w-100">
                  <img
                    src="/assets/images/thumbs/service-details-video-img.jpg"
                    alt="Thumb"
                    className="w-100 h-100 object-fit-cover"
                  />
                  <a
                    href="https://www.youtube.com/watch?v=TxjsRFwDvbQ"
                    className="play-button bg-light-animation tw-w-75-px tw-h-75-px d-inline-flex justify-content-center align-items-center bg-white text-main-600 hover-text-main-two-700 rounded-circle tw-text-xl position-absolute tw-start-50 tw--translate-middle top-50 z-1"
                  >
                    <i className="ph-fill ph-play"></i>
                  </a>
                </div>
              </div>

              <div className="testimonial-content">
                <div className="stats-wrapper">
                  <div className="stat-box">
                    <span className="stat-number">5+</span>
                    <span className="stat-text">Years Partnership</span>
                  </div>
                  <div className="stat-box">
                    <span className="stat-number">1M+</span>
                    <span className="stat-text">Client Revenue</span>
                  </div>
                </div>

                <p>
                  &quot;Our 5-year partnership has consistently delivered results and long-term value for our
                  business.&quot;
                </p>

                <div className="d-flex fs-5 gap-2">
                  <strong>Roland Thomas</strong>
                  <div className="m-0 stars">★★★★★</div>
                </div>
                <small className="d-flex fs-6 fw-medium">CEO, Tech Enterprises</small>

                <div className="clint-relation">
                  <span className="fw-bold">Long Term Client</span> | 5+ Years Collaboration
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </PageShell>
  );
}
