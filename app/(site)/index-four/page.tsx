import Link from "next/link";
import PageShell from "@/components/PageShell";
import HtmlClassSetter from "@/components/HtmlClassSetter";
import { routes } from "@/lib/routes";
import { Fragment } from "react";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Next-Gen CRM Software Development",
  description:
    "The next gen of CRM, built by Zalgo Infotech. Automate data, pipelines, and reporting to improve customer relationships and boost productivity with AI-driven CRM tools.",
  keywords: [
    "CRM software development",
    "customer relationship management",
    "sales automation software",
    "AI CRM solutions",
    "pipeline automation",
    "Zalgo Infotech CRM",
  ],
  path: "/index-four",
});

const heroTabs = [
  { id: "pills-data", label: "data" },
  { id: "pills-Automation", label: "Automation" },
  { id: "pills-Pipeline", label: "Pipeline" },
  { id: "pills-Productivity", label: "Productivity" },
  { id: "pills-Reporting", label: "Reporting" },
];

const brandLogos = [1, 2, 3, 4, 5, 6, 7, 5];

const aboutFaqs = [
  {
    id: "collapseTwo",
    parent: "accordionExample",
    img: "faq-thumb2.png",
    title: "Automate everything",
    open: false,
  },
  {
    id: "collapseOne",
    parent: "accordionExample",
    img: "faq-thumb1.png",
    title: "Deploy AI",
    open: true,
  },
  {
    id: "collapseThree",
    parent: "accordionExample",
    img: "faq-thumb3.png",
    title: "Powerful reporting",
    open: false,
  },
];

const outreachFaqs = [
  {
    id: "collapseTwoo",
    parent: "accordionExampleTwo",
    img: "faq-thumb2.png",
    title: "Automate everything",
    open: false,
  },
  {
    id: "collapseOnee",
    parent: "accordionExampleTwo",
    img: "faq-thumb1.png",
    title: "Deploy AI",
    open: true,
  },
  {
    id: "collapseThreee",
    parent: "accordionExampleTwo",
    img: "faq-thumb3.png",
    title: "Powerful reporting",
    open: false,
  },
];

const featuresFour = [
  {
    title: "Lead & Contact Management",
    text: "Sassly-CRM in the past allowing you to",
    thumbs: ["features-four-thumb101.png", "features-four-thumb102.png"],
  },
  {
    title: "Automate Workflows and Monitor your Sales.",
    text: "Sassly-CRM in the past allowing you to",
    thumbs: ["features-four-thumb2.png"],
  },
  {
    title: "Artificial Intelligence",
    text: "Sassly-CRM in the past allowing you to",
    thumbs: ["features-four-thumb3.png"],
  },
  {
    title: "involves organizing, tracking, and optimizing sales",
    text: "Sassly-CRM in the past allowing you to",
    thumbs: ["features-four-thumb4.png"],
  },
];

const setupPoints = [
  "Customizable pipeline views",
  "Increase your lead-to-deal conversion rates.",
  "Streamline data and tracking between softwares",
];

const testimonialsFour = [
  {
    img: "website-owner-img1.png",
    text: "“Sasstech hires great people from a widely variety of backgrounds, which simply makes our compan stronger, and we couldn't be prouder of that.”",
    thumb: "testimonials-short-img1.png",
    name: "Robiul Hasan",
  },
  {
    img: "website-owner-img2.png",
    text: "“Sasstech hires great people from a wide range of backgrounds, which simply strengthens our company, and we couldn't be prouder of that,” the company says.",
    thumb: "testimonials-short-img2.png",
    name: "John Doe",
  },
  {
    img: "website-owner-img3.png",
    text: '"Sasstech brings together talented individuals from diverse backgrounds, strengthening our company in the best way possible.',
    thumb: "testimonials-short-img3.png",
    name: "James anderson",
  },
];

const counters = [
  { value: "282", suffix: "+", label: "worldwide clients" },
  { value: "95", suffix: "%", label: "worldwide clients" },
  { value: "282", suffix: "+", label: "worldwide clients" },
];

export default function IndexFour() {
  return (
    <PageShell>
      <HtmlClassSetter className="home-crm heading-black" />

      {/* Banner Four Start */}
      <section className="banner-two position-relative z-1 pb-0">
        <img
          src="/assets/images/bg/mash-gradient-bg1.png"
          alt="Cloud Shape"
          className="position-absolute top-0 tw-start-0 w-100 z-n1 banner-gradient-bg"
        />

        <div className="banner-two__inner position-relative">
          <div className="container">
            <div className="text-center">
              <span className="text-capitalize font-caveat fw-bold tw-mb-6 h3">
                With the world&apos;s favorite CRM
              </span>
              <div>
                <div className="position-relative d-inline-block">
                  <h1 className="splitTextStyleOne text-capitalize fw-bold tw-leading-none tw-pb-205">
                    The next gen of CRM.
                  </h1>
                  <div className="text-end svg-line d-sm-block d-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="489" height="18" viewBox="0 0 489 18" fill="none">
                      <path
                        fillRule="evenodd"
                        clipRule="evenodd"
                        d="M207.684 1.72387C184.71 2.31462 162.007 3.04101 139.867 3.83514C108.526 4.95854 77.1964 6.12068 46.056 7.96073C36.2537 8.5418 26.2994 8.90979 16.5584 9.63613C10.4436 10.0913 2.33552 10.7401 1.27144 10.8757C0.714878 10.9531 0.472071 11.0695 0.393613 11.1082C-0.158042 11.3794 -0.0573853 11.6407 0.253993 11.8441C0.379035 11.9313 0.695229 12.1444 1.57297 12.1735C60.274 14.1588 120.299 10.285 179.071 9.87824C280.993 9.18096 386.003 11.9507 487.115 17.9938C487.998 18.0423 488.856 17.8001 488.979 17.4418C489.126 17.0931 488.489 16.7542 487.606 16.7057C386.322 10.6529 281.14 7.87347 179.022 8.58044C124.249 8.95813 68.3944 12.3575 13.5451 11.1953C14.8053 11.0985 16.0411 11.0016 17.1689 10.9144C26.8707 10.1881 36.7833 9.8298 46.5464 9.24873C77.6205 7.40868 108.886 6.24654 140.186 5.13282C179.022 3.73826 219.55 2.53737 260.397 1.97567C275.01 2.06283 289.574 2.15003 304.137 2.25656C335.643 2.48899 367.296 3.16691 398.728 4.07725C408.192 4.3581 417.656 4.64861 427.12 4.9004C430.258 4.98757 438.349 5.23932 439.477 5.21995C440.875 5.20058 441.144 4.73577 441.169 4.65829C441.242 4.48397 441.193 4.24185 440.507 4.03847C440.433 4.00942 439.992 3.91251 439.011 3.85441C381.86 0.426099 320.834 -0.145196 260.446 0.677985C196.749 0.319659 132.806 0.164636 69.2697 0C68.3601 0 67.6172 0.290577 67.6098 0.648903C67.6049 1.00723 68.338 1.29782 69.2476 1.3075C115.253 1.42371 161.492 1.53986 207.684 1.72387Z"
                        fill="#FF7E3E"
                      />
                    </svg>
                  </div>
                </div>
              </div>
              <p className="splitTextStyleOne text-neutral-600 tw-text-lg tw-mt-405 tw-mt-8 max-w-672-px mx-auto fw-medium">
                Sassly-CRM in the past allowing you to focus more on your business or simply enjoy your newfound
                legal time to reflect leaving pen-and-paper.
              </p>

              <div
                className="d-inline-flex align-items-center tw-gap-5 tw-mt-8 flex-wrap"
                data-aos-anchor-placement="top-bottom"
              >
                <Link
                  href={routes.contact}
                  className="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">Schedule a Demo</span>
                </Link>
                <Link
                  href={routes.contact}
                  className="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-orange-outline hover-style-five hover-text-white button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold bg-white"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">Contact Sales</span>
                </Link>
              </div>

              <div className="tw-mt-132-px">
                <ul
                  className="nav nav-pills d-inline-flex flex-wrap align-items-center tw-mb-8 tw-gap-4 active-bg-blue active-text-white"
                  id="pills-tab"
                  role="tablist"
                  data-aos-anchor-placement="top-bottom"
                >
                  {heroTabs.map((tab, i) => (
                    <li className="nav-item" role="presentation" key={tab.id}>
                      <button
                        className={`nav-link tw-py-105 text-capitalize tw-px-5 common-shadow-twentyThree bg-white text-heading fw-medium tw-text-base tw-rounded-md active-triangle-arrow position-relative ${
                          i === 0 ? "active" : ""
                        }`}
                        id={`${tab.id}-tab`}
                        data-bs-toggle="pill"
                        data-bs-target={`#${tab.id}`}
                        type="button"
                        role="tab"
                        aria-controls={tab.id}
                        aria-selected={i === 0 ? "true" : "false"}
                      >
                        {tab.label}
                      </button>
                    </li>
                  ))}
                </ul>
                <div
                  className="tab-content"
                  id="pills-tabContent"
                  data-aos-anchor-placement="top-bottom"
                >
                  {heroTabs.map((tab, i) => (
                    <div
                      className={`tab-pane fade ${i === 0 ? "show active" : ""}`}
                      id={tab.id}
                      role="tabpanel"
                      aria-labelledby={`${tab.id}-tab`}
                      tabIndex={0}
                      key={tab.id}
                    >
                      <div className="shadow-lg tw-p-405 tw-rounded-3xl bg-white-gradient common-shadow-eleven backdrop-blur-20 border border-white-02">
                        <div className="common-shadow-twentyTwo tw-rounded-xl">
                          <img
                            src="/assets/images/thumbs/banner-dashboard.png"
                            alt="Dashboard Thumb"
                            className="w-100 h-100"
                          />
                        </div>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Banner Four End */}

      {/* Brand Three section start */}
      <div className="brand-three">
        <div className="container">
          <div
            className="text-center tw-mb-16"
            data-aos-anchor-placement="top-bottom"
          >
            <h4 className="mb-0 fw-bold line-clamp-1 font-caveat">
              Loved by next-gen B2B <span className="text-orange">SaaS</span> compnaies.....
            </h4>
          </div>
          <div className="brand-three-slider swiper left-right-gradient gradient-width-200 position-relative">
            <div className="swiper-wrapper">
              {brandLogos.map((n, i) => (
                <div
                  className="swiper-slide d-flex align-items-center justify-content-center"
                  data-aos-anchor-placement="top-bottom"
                  data-aos-duration={i % 3 === 0 ? "600" : i % 3 === 1 ? "700" : "800"}
                  key={i}
                >
                  <div>
                    <img src={`/assets/images/thumbs/brand-three-img${n}.png`} alt="Logo" />
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
      {/* Brand Three section end */}

      {/* About Two Section start */}
      <section className="about-two py-120 position-relative z-1 overflow-hidden">
        <img
          src="/assets/images/bg/mash-gradient-bg3.png"
          alt="Gradient"
          className="position-absolute tw-start-0 top-0 z-n1"
        />

        <div className="container">
          <div className="row gy-4 flex-wrap-reverse">
            <div className="col-lg-6">
              <div className="position-relative">
                <div className="tw-ps-14 position-relative">
                  <img src="/assets/images/thumbs/about-four-thumb-1.png" alt="Thumb" className="w-100" />
                  <img
                    src="/assets/images/shapes/revenue-shape.png"
                    alt=""
                    className="flower animate__wobble__two position-absolute tw-start-0 bottom-100 tw--m-24-px z-n1"
                  />
                </div>

                <div className="position-absolute bottom-0 tw-start-0 tw-mb-6">
                  <img
                    src="/assets/images/thumbs/about-four-thumb-3.png"
                    alt="Thumb"
                    className="d-sm-block d-none tw-mb-4 animated-upDown"
                  />
                  <img
                    src="/assets/images/thumbs/about-four-thumb-2.png"
                    alt="Thumb"
                    className="d-block common-shadow-twentyFour tw-rounded-2xl animated-upDown animation-delay-1"
                  />
                </div>
              </div>
            </div>

            <div className="col-lg-6">
              <div className="ps-xl-5">
                <div className="tw-mb-10">
                  <h4 className="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                    with the world&apos;s favorite CRM
                  </h4>
                  <h2 className="splitTextStyleOne text-heading text-capitalize">
                    improve <span className="text-crm">customer</span> relationships today
                  </h2>
                  <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                    Sassly-CRM in the past allowing you to focus more on your business simply enjoy your newfound
                    legal time to reflect leaving pen
                  </p>
                </div>

                <div className="accordion common-accordion" id="accordionExample">
                  {aboutFaqs.map((faq) => (
                    <div
                      className="accordion-item tw-px-40-px tw-rounded-xl section-bg-one border-0 tw-mb-6"
                      data-aos-anchor-placement="top-bottom"
                      key={faq.id}
                    >
                      <h5 className="accordion-header">
                        <button
                          className={`accordion-button tw-py-6 shadow-none px-0 bg-transparent h5 ${
                            faq.open ? "" : "collapsed"
                          }`}
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target={`#${faq.id}`}
                          aria-expanded={faq.open ? "true" : "false"}
                          aria-controls={faq.id}
                          data-img={`/assets/images/thumbs/${faq.img}`}
                        >
                          {faq.title}
                        </button>
                      </h5>
                      <div
                        id={faq.id}
                        className={`accordion-collapse collapse ${faq.open ? "show" : ""}`}
                        data-bs-parent="#accordionExample"
                      >
                        <div className="accordion-body ps-0 pt-0 pe-0 tw-pb-6">
                          <p className="text-neutral-500">
                            ERP provides a complete leave management system for your HR. Upcoming holidays and
                            remaining leave balances.
                          </p>
                        </div>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* About Two Section end */}

      {/* Features Four section start */}
      <section className="features-four">
        <div className="py-120 tw-mx-48-px position-relative">
          <img
            src="/assets/images/bg/mash-gradient-bg2.png"
            alt="Mash Gradient BG"
            className="w-100 h-100 position-absolute top-0 tw-start-0 z-n1"
          />

          <div className="max-w-1820-px mx-auto">
            <div className="container">
              <div className="tw-mb-12 max-w-570-px">
                <h4 className="tw-mb-4 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                  with the world&apos;s favorite CRM
                </h4>
                <h2 className="splitTextStyleOne text-heading text-capitalize">improve customer relationships today</h2>
              </div>

              <div className="row g-32-px">
                {featuresFour.map((f, i) => (
                  <div
                    className="col-md-6"
                    data-aos-anchor-placement="top-bottom"
                    data-aos-duration={i % 2 === 0 ? "1000" : "1200"}
                    key={f.title}
                  >
                    <div className="features-four-item bg-white tw-rounded-40-px tw-px-54-px tw-pt-16 tw-pb-180-px position-relative h-100">
                      <h3 className="tw-mb-4 fw-semibold max-w-250-px splitTextStyleOne">{f.title}</h3>
                      <p className="text-neutral-600 tw-text-lg fw-medium">{f.text}</p>
                      <Link
                        href={routes.contact}
                        className="hover--translate-y-1 active--translate-y-scale-9 text-crm fw-bold tw-text-base text-blue text-decoration-underline tw-mt-12 hover-underline-none"
                      >
                        Transfer domain
                      </Link>
                      {f.thumbs.map((thumb, ti) => (
                        <img
                          key={thumb}
                          src={`/assets/images/thumbs/${thumb}`}
                          alt="Thumbnail"
                          className={
                            i === 0
                              ? ti === 0
                                ? "max-w-40-percent position-absolute top-0 tw-mt-5 tw-end-0 tw-me-5 common-shadow-twentyFive tw-rounded-2xl d-xl-block d-none"
                                : "max-w-40-percent position-absolute bottom-0 tw-start-45 tw-me-5 common-shadow-twentyFive tw-rounded-2xl"
                              : i === 1
                              ? "max-w-40-percent position-absolute bottom-0 tw-end-0 tw-me-8 tw-rounded-2xl"
                              : i === 2
                              ? "max-w-40-percent position-absolute bottom-0 tw-end-0 tw-me-10 tw-rounded-2xl"
                              : "max-w-40-percent position-absolute bottom-0 tw-end-0 tw-me-8 tw-rounded-2xl"
                          }
                        />
                      ))}
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Features Four section End */}

      {/* About Four Two Section start */}
      <section className="about-four-two py-120 position-relative z-1 overflow-hidden">
        <img
          src="/assets/images/bg/mash-gradient-bg3.png"
          alt="Gradient"
          className="position-absolute tw-start-0 top-0 z-n1"
        />

        <div className="container">
          <div className="row gy-4 flex-wrap-reverse">
            <div className="col-lg-6">
              <div className="position-relative">
                <div className="tw-ps-14 position-relative">
                  <img src="/assets/images/thumbs/about-four-two-thumb.png" alt="Thumb" className="w-100" />
                </div>

                <div className="position-absolute bottom-0 tw-start-0 d-flex w-100 justify-content-between align-items-end">
                  <img
                    src="/assets/images/thumbs/about-four-thumb-2.png"
                    alt="Thumb"
                    className="d-block common-shadow-twentyFour tw-rounded-2xl animated-upDown"
                  />
                  <img
                    src="/assets/images/thumbs/robot-img.png"
                    alt="Thumb"
                    className="d-block tw-ms-8 tw-rounded-2xl animated-upDown animation-delay-1"
                  />
                </div>
              </div>
            </div>

            <div className="col-lg-6">
              <div className="ps-xl-5">
                <div className="tw-mb-10">
                  <h4 className="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-orange">
                    with the world&apos;s favorite CRM
                  </h4>
                  <h2 className="splitTextStyleOne text-heading text-capitalize max-w-532-px">
                    Simple set up,easy to stay organized
                  </h2>
                  <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                    Sassly-CRM in the past allowing you to focus more on your business simply enjoy your newfound
                    legal time to reflect leaving pen
                  </p>
                </div>

                <div className="d-flex flex-column tw-gap-5">
                  {setupPoints.map((point, i) => (
                    <div
                      className="d-flex align-items-center tw-gap-5"
                      data-aos-anchor-placement="top-bottom"
                      data-aos-duration={i === 0 ? "600" : i === 1 ? "700" : "800"}
                      key={point}
                    >
                      <span className="tw-w-8 tw-h-8 bg-neutral-200 text-heading d-flex justify-content-center align-items-center rounded-circle">
                        <i className="ph-bold ph-check"></i>
                      </span>
                      <p className="fw-bold text-heading tw-text-lg">{point}</p>
                    </div>
                  ))}
                </div>
                <div
                  className="tw-mt-9"
                  data-aos-anchor-placement="top-bottom"
                >
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 tw-py-505 fw-bold rounded-pill btn-main hover-style-one common-shadow-inset-one"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">Start your free trial</span>
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* About Four Two Section end */}

      {/* About Four Three Section start */}
      <section className="about-four-three position-relative z-1 overflow-hidden">
        <div className="gradient-bg-top-bottom pb-120 tw-mx-48-px">
          <img
            src="/assets/images/bg/mash-gradient-bg4.png"
            alt="Gradient"
            className="position-absolute tw-end-0 bottom-100 z-n1"
          />

          <div className="container">
            <div className="row gy-4">
              <div className="col-lg-6">
                <div className="pe-xl-5">
                  <div className="tw-mb-10">
                    <h4 className="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                      with the world&apos;s favorite CRM
                    </h4>
                    <h2 className="splitTextStyleOne text-heading text-capitalize">
                      Perfectly-timed and personal outreach
                    </h2>
                    <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                      Sassly-CRM in the past allowing you to focus more on your business simply enjoy your newfound
                      legal time to reflect leaving pen
                    </p>
                  </div>

                  <div className="accordion common-accordion" id="accordionExampleTwo">
                    {outreachFaqs.map((faq) => (
                      <div
                        className="accordion-item tw-px-40-px tw-rounded-xl bg-white border-0 tw-mb-6"
                        data-aos-anchor-placement="top-bottom"
                        key={faq.id}
                      >
                        <h5 className="accordion-header">
                          <button
                            className={`accordion-button tw-py-6 shadow-none px-0 bg-transparent h5 ${
                              faq.open ? "" : "collapsed"
                            }`}
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target={`#${faq.id}`}
                            aria-expanded={faq.open ? "true" : "false"}
                            aria-controls={faq.id}
                            data-img={`/assets/images/thumbs/${faq.img}`}
                          >
                            {faq.title}
                          </button>
                        </h5>
                        <div
                          id={faq.id}
                          className={`accordion-collapse collapse ${faq.open ? "show" : ""}`}
                          data-bs-parent="#accordionExampleTwo"
                        >
                          <div className="accordion-body ps-0 pt-0 pe-0 tw-pb-6">
                            <p className="text-neutral-500">
                              ERP provides a complete leave management system for your HR. Upcoming holidays and
                              remaining leave balances.
                            </p>
                          </div>
                        </div>
                      </div>
                    ))}
                  </div>
                </div>
              </div>

              <div className="col-lg-6">
                <div className="position-relative">
                  <div className="tw-ps-14 position-relative">
                    <img src="/assets/images/thumbs/about-four-three-thumb1.png" alt="Thumb" className="w-100" />
                  </div>

                  <div className="position-absolute bottom-0 tw-start-0 tw-mb-6">
                    <img
                      src="/assets/images/thumbs/about-four-three-thumb2.png"
                      alt="Thumb"
                      className="common-shadow-twentyFour tw-rounded-2xl tw-mb-4 animated-upDown"
                    />
                    <img
                      src="/assets/images/thumbs/robot-img.png"
                      alt="Thumb"
                      className="d-block tw-ms-8 tw-rounded-2xl animated-upDown animation-delay-1"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* About Four Three Section end */}

      {/* Testimonials Four section start */}
      <section className="testimonials-four py-120 position-relative z-1">
        <img
          src="/assets/images/bg/mash-gradient-bg5.png"
          alt="Gradient BG"
          className="position-absolute tw-start-0 top-0 w-100 h-100 z-n1"
        />

        <div className="container">
          <div className="row gy-5">
            <div className="col-lg-6">
              <div>
                <div className="tw-mb-10">
                  <h4 className="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                    with the world&apos;s favorite CRM
                  </h4>
                  <h2 className="splitTextStyleOne text-white text-capitalize">
                    improve customer relationships today
                  </h2>
                  <p className="splitTextStyleOne text-neutral-300 tw-mt-8 max-w-570-px fw-normal tw-text-lg">
                    Sassly-CRM in the past allowing you to focus more on your business simply enjoy your newfound
                    legal time to reflect leaving pen
                  </p>
                </div>
                <div className="tw-mt-12 d-flex align-items-center tw-gap-405 flex-sm-nowrap flex-wrap">
                  <div className="tw-rounded-xl bg-white-06 tw-py-205 tw-px-5 d-flex align-items-center tw-gap-4">
                    <span>
                      <img src="/assets/images/icons/testimonials-four-icon1.png" alt="Icon" />
                    </span>
                    <div>
                      <div className="d-flex align-items-center tw-gap-05">
                        {[0, 1, 2, 3, 4].map((s) => (
                          <span className="text-orange tw-text-lg" key={s}>
                            <i className="ph-fill ph-star"></i>
                          </span>
                        ))}
                      </div>
                      <div className="d-flex align-items-center tw-gap-2">
                        <span className="tw-text-xs text-white fw-bold">4.3</span>
                        <span className="tw-text-xs text-white fw-normal">score, 9 reviews</span>
                      </div>
                    </div>
                  </div>
                  <div className="tw-rounded-xl bg-white-06 tw-py-205 tw-px-5 d-flex align-items-center tw-gap-4">
                    <span>
                      <img src="/assets/images/icons/testimonials-four-icon2.png" alt="Icon" />
                    </span>
                    <div>
                      <div className="d-flex align-items-center tw-gap-05">
                        {[0, 1, 2, 3, 4].map((s) => (
                          <span className="text-green tw-text-lg" key={s}>
                            <i className="ph-fill ph-star"></i>
                          </span>
                        ))}
                      </div>
                      <div className="d-flex align-items-center tw-gap-2">
                        <span className="tw-text-xs text-white fw-bold">4.3</span>
                        <span className="tw-text-xs text-white fw-normal">score, 9 reviews</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-lg-6">
              <div className="testimonials-four-slider swiper position-relative">
                <div className="swiper-wrapper">
                  {testimonialsFour.map((t) => (
                    <div
                      className="swiper-slide"
                      data-aos-anchor-placement="top-bottom"
                      key={t.img}
                    >
                      <div className="bg-white tw-rounded-2xl common-shadow-twentySix box-layer tw-mb-12">
                        <div className="box-layer-two tw-p-54-px tw-rounded-2xl bg-white">
                          <span className="tw-mb-5 animate-left-right animation-delay-3 tw-duration-200">
                            <img
                              src={`/assets/images/thumbs/${t.img}`}
                              alt="Logo"
                              className="animate__flipInY"
                            />
                          </span>
                          <p className="text-heading h3 fw-medium font-body tw-leading-153 animate-left-right animation-delay-2 tw-duration-200">
                            {t.text}
                          </p>
                          <span className="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                          <div className="d-flex align-items-center justify-content-between animate-left-right animation-delay-3">
                            <div className="d-flex align-items-center tw-gap-6 tw-duration-200">
                              <div className="tw-h-84-px tw-w-84-px rounded-circle">
                                <img
                                  src={`/assets/images/thumbs/${t.thumb}`}
                                  alt="Image"
                                  className="w-100 h-100 object-fit-cover"
                                />
                              </div>
                              <div>
                                <h6 className="tw-mb-2">{t.name}</h6>
                                <span className="text-neutral-600">
                                  <span className="fw-semibold text-blue">CEO</span> and Founder
                                </span>
                              </div>
                            </div>
                            <div>
                              <img src="/assets/images/icons/ratings.svg" alt="Rating" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ))}
                </div>
              </div>

              <div className="tw-w-84-px tw-h-84-px rounded-circle bg-white d-flex flex-column tw-gap-2 justify-content-center align-items-center position-absolute tw-end-0 top-50 translate-middle-y z-2 common-shadow-twentyFour tw-me-16">
                <button
                  type="button"
                  className="tw-text-lg tw-leading-none text-heading hover-text-main-600 tw-px-2 tw-pt-2"
                  id="testimonials-four-next"
                >
                  <i className="ph-bold ph-caret-up"></i>
                </button>
                <button
                  type="button"
                  className="tw-text-lg tw-leading-none text-heading hover-text-main-600 tw-px-2 tw-pb-2"
                  id="testimonials-four-prev"
                >
                  <i className="ph-bold ph-caret-down"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Testimonials Four section End */}

      {/* Integrated apps start */}
      <section className="pt-120 pb-120 overflow-hidden position-relative">
        <img
          src="/assets/images/bg/mash-gradient-bg6.png"
          alt="Gradient BG"
          className="position-absolute tw-start-0 top-0 w-100 h-100 z-n1"
        />

        <div className="container max-w-1290-px">
          <div className="row gy-5 align-items-center flex-wrap-reverse">
            <div
              className="col-xl-6"
              data-aos-anchor-placement="top-bottom"
            >
              <div className="position-relative tw-p-12 text-center">
                <img src="/assets/images/shapes/rounded-circle.png" alt="Bg Round" />

                <img
                  src="/assets/images/shapes/round-icons-big.png"
                  alt="Icons"
                  className="position-absolute top-50 start-50 animation-rotate-right"
                />
                <img
                  src="/assets/images/shapes/round-icons-small.png"
                  alt="Icons"
                  className="position-absolute top-50 start-50 animation-rotate-left"
                />
                <div className="position-absolute top-50 start-50 translate-middle">
                  <h3>
                    <span className="counter">2</span>k+
                  </h3>
                  <span className="text-heading">Integration</span>
                </div>
              </div>
            </div>
            <div className="col-xl-6">
              <div>
                <div className="text-start mx-auto tw-mb-12">
                  <div className="tw-mb-10">
                    <h4 className="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-orange">
                      with the world&apos;s favorite CRM
                    </h4>
                    <h2 className="splitTextStyleOne text-heading text-capitalize max-w-532-px">
                      Simple set up,easy to stay organized
                    </h2>
                    <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                      Sassly-CRM in the past allowing you to focus more on your business simply enjoy your newfound
                      legal time to reflect leaving pen
                    </p>
                  </div>
                  <div
                    className="tw-mt-9"
                    data-aos-anchor-placement="top-bottom"
                  >
                    <Link
                      href={routes.contact}
                      className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 tw-py-505 fw-bold rounded-pill btn-main hover-style-one common-shadow-inset-one"
                      data-block="button"
                    >
                      <span className="button__flair"></span>
                      <span className="button__label">See all Integrations</span>
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Integrated apps End */}

      {/* Counter Up section Start */}
      <section className="pt-120">
        <div className="container">
          <div className="tw-mb-10 max-w-570-px mx-auto text-center">
            <h4 className="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
              with the world&apos;s favorite CRM
            </h4>
            <h2 className="splitTextStyleOne text-heading text-capitalize">
              Trueted CRM tools by the <span className="fw-normal"> happy users</span>
            </h2>
          </div>

          <div className="border-top border-bottom d-flex justify-content-center flex-sm-nowrap flex-wrap tw-gap-148-px">
            {counters.map((c, i) => (
              <Fragment key={i}>
                {i !== 0 && (
                  <div className="d-flex">
                    <div className="tw-w-1-px h-100 bg-neutral-200"></div>
                  </div>
                )}
                <div className="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
                  <h2 className="h1">
                    <span className="counter">{c.value}</span>
                    <span>{c.suffix}</span>
                  </h2>
                  <span className="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">{c.label}</span>
                </div>
              </Fragment>
            ))}
          </div>
        </div>
      </section>
      {/* Counter Up section End */}

      {/* Driven section Start */}
      <section className="py-120">
        <div className="container">
          <div>
            <img src="/assets/images/thumbs/driven-img.png" alt="Thumb" />
            <div className="max-w-780-px text-center mx-auto">
              <div className="tw-mb-10 max-w-672-px mx-auto text-center">
                <h4 className="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                  with the world&apos;s favorite CRM
                </h4>
                <h2 className="splitTextStyleOne text-heading text-capitalize">
                  The <span className="fw-normal">CRM</span> behind thousand of companies
                </h2>
              </div>
              <div className="d-flex align-items-center tw-gap-4 justify-content-center tw-mt-10">
                <div
                  className="d-inline-flex align-items-center tw-gap-5 tw-mt-8 flex-wrap"
                  data-aos-anchor-placement="top-bottom"
                >
                  <Link
                    href={routes.contact}
                    className="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">Schedule a Demo</span>
                  </Link>
                  <Link
                    href={routes.contact}
                    className="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-orange-outline hover-style-five hover-text-white button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold bg-white"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">Contact Sales</span>
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Driven section End */}
    </PageShell>
  );
}
