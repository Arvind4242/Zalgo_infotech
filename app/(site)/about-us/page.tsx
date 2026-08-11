import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "About Us - Our Story & Team",
  description:
    "Learn about Zalgo Infotech, delivering custom web development, AI automation, and business-focused software solutions with reliable client support.",
  keywords: [
    "about Zalgo Infotech",
    "IT company India",
    "web development team",
    "software development company",
    "about us IT solutions",
  ],
  path: "/about-us",
});

const positionedImages = [
  { src: "/assets/images/thumbs/a06.png", cls: "animation-upDown one" },
  { src: "/assets/images/thumbs/a07.png", cls: "animation-upDown animation-delay-3 two" },
  { src: "/assets/images/thumbs/a01.png", cls: "animation-upDown three" },
  { src: "/assets/images/thumbs/a02.png", cls: "animation-upDown animation-delay-3 four" },
  { src: "/assets/images/thumbs/about-banner-img5.png", cls: "animation-upDown five" },
  { src: "/assets/images/thumbs/a03.png", cls: "animation-upDown animation-delay-3 six" },
  { src: "/assets/images/thumbs/about-banner-img7.png", cls: "animation-upDown seven" },
  { src: "/assets/images/thumbs/a04.png", cls: "animation-upDown animation-delay-3 eight" },
  { src: "/assets/images/thumbs/a05.png", cls: "animation-upDown nine" },
  { src: "/assets/images/thumbs/about-banner-img10.png", cls: "animation-upDown animation-delay-3 ten" },
  { src: "/assets/images/thumbs/about-banner-img11.png", cls: "animation-upDown eleven" },
  { src: "/assets/images/thumbs/about-banner-img12.png", cls: "animation-upDown animation-delay-3 twelve" },
];

const counters = [
  { value: "20", suffix: "M", label: "User Interactions Managed" },
  { value: "95", suffix: "%", label: "Client Retention Rate" },
  { value: "3", suffix: "x", label: "Business Growth Enabled" },
  { value: "99", suffix: "k+", label: "Hours of Technical Experience" },
];

const features = [
  {
    icon: "about-features-icon1.png",
    title: "Proven Web Expertise",
    desc: "Custom websites and web applications built for performance, security, and scalability.",
  },
  {
    icon: "about-features-icon2.png",
    title: "User-Focused Design",
    desc: "Clean, responsive, and intuitive interfaces that improve engagement and conversions.",
  },
  {
    icon: "about-features-icon3.png",
    title: "Business-Driven Solutions",
    desc: "We develop technology aligned with your business goals, not just code.",
  },
  {
    icon: "about-features-icon4.png",
    title: "Transparent Process & Support",
    desc: "Clear timelines, regular updates, and reliable post-delivery support.",
  },
];

const team = [
  {
    img: "sanjeev.png",
    name: "Sanjeev",
    role: "Business Development Manager",
    linkedin: "https://www.linkedin.com/in/sanjeev-rajput-b4284b2b4/",
  },
  {
    img: "vaibhav.png",
    name: "Vaibhav",
    role: "Business Development Executive",
    linkedin: "https://www.linkedin.com/in/vaibhav-jadhav-311379196/",
  },
  {
    img: "ashu.png",
    name: "Ashu",
    role: "Creative Head",
    linkedin: "https://www.linkedin.com/in/aashu-parmar-313034389/",
  },
  {
    img: "annu.png",
    name: "Anurag Singh",
    role: "AI & Python Developer",
    linkedin: "https://www.linkedin.com/in/anurag-singh-kushwah-8615583ab/",
  },
];

const partnerLogos = [
  "paypal.png",
  "Zoho.png",
  "upwork.png",
  "envato.png",
  "shopify.png",
  "godaddy.png",
  "digitalocean.png",
  "Stripe.png",
  "HubSpot.svg",
  "cloudflare.png",
];

const testimonials = [
  {
    img: "testimonials-img1.png",
    shortImg: "testimonials-short-img1.png",
    name: "Ryan",
    role: "CEO - and Founder",
    quote:
      "“For over four years, they have been our trusted development partner, transforming our Figma designs into a fully functional WordPress website. Their attention to UI detail and frontend precision has consistently elevated our digital presence.”",
    videoImg: "/assets/images/case-study/finance-case-study.png",
  },
  {
    img: "testimonials-img3.png",
    shortImg: "testimonials-short-img3.png",
    name: "Roland Thomas",
    role: "CEO - and Founder",
    quote:
      "“Over the past five years, they have managed our complete eCommerce infrastructure — from SEO strategy to payment gateway integrations and ongoing technical optimization. Their 24/7 support and proactive approach have played a key role in our consistent business growth.”",
    videoImg: null,
  },
  {
    img: "testimonials-img2.png",
    shortImg: "testimonials-short-img2.png",
    name: "— Edmilson",
    role: "Backend Systems Developer - Brazil",
    quote:
      "“Over the 6+ years, we’ve worked closely on multiple backend systems built with PHP, Node.js, and Laravel. Their reliability, clean architecture approach, and consistent support make them a trusted long-term technical partner.”",
    videoImg: "/assets/images/case-study/edmilson-testi.png",
  },
];

const tags = [
  "Custom Web Development",
  "Dedicated Developers",
  "AI & Automation Solutions",
  "Node.js & Laravel Experts",
  "Cloud & DevOps Services",
  "UI/UX Focused Design",
  "Agile Project Management",
  "Scalable Architecture",
  "Long-term Tech Partnership",
  "Transparent Communication",
];

export default function AboutUsPage() {
  return (
    <PageShell>
      {/* About Banner section Start */}
      <section className="about-banner tw-mt-15">
        <div className="container max-w-1800-px">
          <div className="section-bg-two tw-rounded-3xl tw-pb-84-px tw-pt-134-px">
            <div className="container">
              <div className="position-relative tw-pt-180-px tw-pb-200-px z-1">
                <div className="row justify-content-center">
                  <div className="col-xxl-6 col-xl-7 col-sm-8">
                    <div className="text-center">
                      <img src="/assets/images/logo/favicon-two.png" alt="Favicon" />
                      <h1 className="tw-mt-405">
                        Powering businesses with reliable and scalable IT solutions.
                      </h1>
                      <p>
                        Zalgo Infotech partners with global brands to create secure, high-impact
                        digital products.
                      </p>
                      <div className="d-flex align-items-center tw-gap-4 justify-content-center tw-mt-12 flex-wrap">
                        <Link
                          href={routes.contact}
                          className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn btn-main hover-style-one"
                          data-block="button"
                        >
                          <span className="button__flair"></span>
                          <span className="button__label">Let&rsquo;s Talk</span>
                        </Link>
                        <a
                          target="_blank"
                          rel="noreferrer"
                          href="https://calendly.com/zalgoinfotec/30min"
                          className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                          data-block="button"
                        >
                          <span className="button__flair"></span>
                          <span className="button__label">Get a Free Consultation</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div>
                  {positionedImages.map((img, i) => (
                    <div
                      key={i}
                      className={`positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute ${img.cls}`}
                    >
                      <img
                        src={img.src}
                        alt="Image"
                        className="tw-rounded-3xl w-100 h-100 object-fit-cover"
                      />
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* About Banner section End */}

      {/* About Counter section Start */}
      <section className="about-counter py-120">
        <div className="container p-0">
          <div className="text-center tw-mb-12 mx-auto">
            <div className="text-center tw-mb-3">
              <img src="/assets/images/icons/sparkle.png" alt="Icon" />
            </div>
            <h3 className="splitTextStyleOne text-capitaliz fw-semibold">
              Our Growth, Measured Through Web-Driven Results
              <span className="fw-normal">insights from our</span>
              Powered by technology, performance, and trust
            </h3>
          </div>

          <div className="row gy-4">
            {counters.map((c, i) => (
              <div className="col-lg-3 col-sm-6" key={i}>
                <div className="max-w-295-px tw-max-h-295-px text-center rounded-circle w-100 h-100 aspect-1 d-flex flex-column justify-content-center align-items-center hover-bg-neutral-100 tw-transition tw-duration-200">
                  <h3 className="h1">
                    <span className="counter">{c.value}</span>
                    <span className="h2">{c.suffix}</span>
                  </h3>
                  <span className="h6 text-uppercase tw-text-base tw-mt-5">{c.label}</span>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
      {/* About Counter section End */}

      {/* About Features section Start */}
      <section className="about-features py-120 section-bg-two">
        <div className="container">
          <div className="d-flex align-items-center justify-content-between flex-wrap tw-gap-6 tw-mb-12">
            <div className="max-w-532-px">
              <h3 className="splitTextStyleOne text-capitalize">
                Reliable web solutions backed by experience, process, and performance
              </h3>
            </div>
            <div>
              <p className="splitTextStyleOne text-neutral-500 max-w-490-px fw-medium tw-ps-5 border-start border-app-landing border-2">
                We help businesses build scalable, secure, and high-performance web solutions. Our
                approach combines technical expertise, transparent communication, and long-term
                client support.
              </p>
            </div>
          </div>

          <div className="row gy-4">
            {features.map((f, i) => (
              <div className="col-xl-3 col-sm-6" key={i}>
                <div className="tw-rounded-2xl bg-white bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-200 group animation-item group-item tw-transition tw-duration-200 h-100">
                  <span className="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                    <img
                      src={`/assets/images/icons/${f.icon}`}
                      alt="Icon"
                      className="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat"
                    />
                  </span>
                  <h5 className="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                    {f.title}
                  </h5>
                  <p className="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                    {f.desc}
                  </p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
      {/* About Features section End */}

      {/* About Team section Start */}
      <section className="about-team py-120">
        <div className="container">
          <div className="max-w-602-px text-center mx-auto tw-mb-13">
            <h3 className="splitTextStyleOne text-heading text-capitalize text-capitalize">
              Meet our experts
            </h3>
            <p className="splitTextStyleOne text-neutral-500 tw-mt-8 mx-auto max-w-500-px fw-medium">
              Create tasks with various custom statuses to focus more on your keep track of the
              progress of each why
            </p>
          </div>

          <div className="row gy-4">
            {team.map((m, i) => (
              <div className="col-lg-3" key={i}>
                <div className="about-team group-item">
                  <div className="position-relative tw-rounded-xl overflow-hidden">
                    <img
                      src={`/assets/images/thumbs/${m.img}`}
                      alt="Thumb"
                      className="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300"
                    />
                    <ul className="list-social position-absolute top-50 tw-end-0 translate-middle-y d-flex flex-column">
                      <li>
                        <a
                          target="_blank"
                          rel="noreferrer"
                          href={m.linkedin}
                          className="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center"
                        >
                          <i className="ph-fill ph-linkedin-logo"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div className="tw-mt-705 text-center">
                    <h6 className="tw-mb-2">{m.name}</h6>
                    <span className="text-capitalize text-neutral-500 tw-text-sm">{m.role}</span>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
      {/* About Team section End */}

      {/* Testimonials section start */}
      <section className="testimonials py-120 bg-neutral-50 position-relative z-1">
        <img
          src="/assets/images/shapes/faq-bg.png"
          alt=""
          className="position-absolute tw-start-0 top-0 w-100 h-100 z-n1"
        />

        <div className="container">
          <div className="max-w-602-px mx-auto text-center tw-mb-15">
            <span className="tw-py-1 tw-px-705 bg-neutral-100 tw-text-sm fw-medium text-capitalize rounded-pill tw-mb-205">
              Trusted by Clients
            </span>
            <h3 className="splitTextStyleOne fw-light tw-leading-104 tw-mb-9 d-flex gap-2 justify-content-center">
              <span className="d-inline-block fw-medium">
                <span>What </span>
                <span className="fw-semibold">Our Client</span>
                <span> Say</span>
                <span className="fw-semibold">About Us</span>
              </span>
            </h3>
          </div>

          <div className="d-flex tw-gap-6 testimonials-item-wrapper flex-wrap">
            {testimonials.map((t, i) => (
              <div
                key={i}
                className={`testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100${
                  i === 1 ? " active" : ""
                }`}
              >
                <div className="current-content">
                  <div className="tw-max-h-397-px overflow-hidden text-center">
                    <img src={`/assets/images/thumbs/${t.img}`} alt="Image" />
                  </div>
                  <div className="tw-py-8 tw-px-4 text-center">
                    <h6 className="tw-mb-2">{t.name}</h6>
                    <span className="text-neutral-600 fw-medium tw-text-sm">{t.role}</span>
                  </div>
                </div>

                <div className="d-flex flex-column h-100 hidden-content p-3">
                  <div>
                    <div className="video-testimonial">
                      {t.videoImg ? (
                        <img src={t.videoImg} alt="Image" />
                      ) : (
                        <iframe
                          width="100%"
                          height="350"
                          src="https://www.youtube.com/embed/TxjsRFwDvbQ?si=LA4zrJXjOhfKCdMM"
                          title="Dummy Video For Website"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                          referrerPolicy="strict-origin-when-cross-origin"
                          allowFullScreen
                        ></iframe>
                      )}
                    </div>
                    <div className="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                      <p className="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                        {t.quote}
                      </p>
                    </div>
                  </div>
                  <div className="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                    <div className="tw-h-84-px tw-w-84-px rounded-circle">
                      <img
                        src={`/assets/images/thumbs/${t.shortImg}`}
                        alt="Image"
                        className="w-100 h-100 object-fit-cover"
                      />
                    </div>
                    <div>
                      <h6 className="tw-mb-2">{t.name}</h6>
                      <span className="text-neutral-600">{t.role}</span>
                    </div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
      {/* Testimonials section End */}

      {/* Brand Three section start */}
      <div className="brand-three pt-120">
        <div className="container">
          <div className="text-center tw-mb-16">
            <h5 className="mb-0 line-clamp-1">Our Technology Partners</h5>
          </div>
          <div className="brand-three-slider swiper left-right-gradient gradient-width-200">
            <div className="swiper-wrapper">
              {partnerLogos.map((logo) => (
                <div
                  className="swiper-slide d-flex align-items-center justify-content-center"
                  key={logo}
                >
                  <div>
                    <img src={`/assets/images/logo/${logo}`} alt="Logo" />
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
      {/* Brand Three section end */}

      {/* Founder start */}
      <section className="founder-section-new pt-120">
        <div
          className="align-items-end founder-container p-0"
          style={{ backgroundImage: "url(/assets/images/thumbs/founder-bg.png)" }}
        >
          <div className="founder-image">
            <img src="/assets/images/thumbs/bhupendra.png" alt="Founder - Zalgo Infotech" />
          </div>

          <div className="founder-content p-5 ps-0">
            <span className="founder-badge">Founder &amp; Visionary Leader</span>

            <h2 className="founder-name">Bhupendra Singh Parmar</h2>
            <h4 className="founder-title">Founder &amp; CEO, Zalgo Infotech</h4>

            <p>At Zalgo Infotech, our foundation has always been built on relationships — not revenue.</p>
            <p>
              From the very beginning of my journey, I have believed that long-term partnerships
              matter more than short-term profits. Over the years, I&rsquo;ve had the privilege of
              working with global clients for 4+ and 6+ years continuously — a testament to
              the trust, transparency, and commitment we deliver.
            </p>
            <p>
              I have never focused on chasing payments; instead, my priority has always been
              delivering exceptional service, being available whenever clients need support, and
              ensuring their business grows with confidence.
            </p>
            <p>
              For me, success is not measured by how much we earn —
              <br />
              it is measured by how long our clients stay with us.
            </p>

            <p>
              At Zalgo Infotech, our goal is simple: <br />
              Build relationships that last — and success follows naturally.
            </p>

            <a
              href="https://www.linkedin.com/in/bhupendra-singh-parmar-b7a216276/"
              target="_blank"
              rel="noreferrer"
              className="active--translate-y-2 active--translate-y-scale-9 align-items-center btn btn-main button--stroke d-sm-flex fw-semibold group hover--translate-y-1 hover-style-one justify-content-center rounded-pill tw-gap-5 tw-py-05"
            >
              <img src="/assets/images/icons/linkdin.png" alt="Linkd In" /> Connect on LinkedIn
            </a>
          </div>
        </div>
      </section>
      {/* Founder End */}

      {/* Task Management Section Start */}
      <section className="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half pt-120">
        <div className="container">
          <div className="text-end tw--mb-40-px position-relative z-2">
            <img src="/assets/images/thumbs/laptop-man.png" alt="Image" className="tw-me-84-px" />
          </div>

          <div className="bg-green-deep tw-rounded-3xl bg-green-deep tw-pt-100-px position-relative z-1">
            <img
              src="/assets/images/shapes/hill-shape.png"
              alt="Hill Shape"
              className="position-absolute w-100 h-100 top-0 tw-start-0 z-n1"
            />
            <img
              src="/assets/images/thumbs/task-management-img.png"
              alt="Image"
              className="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none"
            />

            <div className="tw-mb-8 text-center max-w-570-px mx-auto">
              <div className="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13">
                <div>
                  Trusted <span className="text-yellow text-stroke-yellow">IT</span>
                  Partner for Growing Businesses
                </div>
              </div>
              <h3 className="splitTextStyleOne text-white">
                Ready to Transform Your Digital Vision into Reality?
              </h3>

              <div className="d-block">
                <div className="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Talk to our experts</span>
                    </div>
                  </Link>
                  <a
                    target="_blank"
                    rel="noreferrer"
                    href="https://calendly.com/zalgoinfotec/30min"
                    className="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Get free consult</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div className="tw-pt-8 text-center">
              <div className="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                {tags.map((tag, i) => (
                  <span
                    key={i}
                    className={`drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white rounded-pill ${
                      i % 3 === 0 ? "gradient-bg-six" : i % 3 === 1 ? "bg-paste" : "bg-yellow"
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
      {/* Task Management Section End */}
    </PageShell>
  );
}
