import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Integration Details - Data Sync & Security",
  description:
    "Explore how Zalgo Infotech's integrations empower your business through secure data sync, cloud storage integration, and seamless tools like Hubspot, GitHub, and Dropbox.",
  keywords: [
    "integration details",
    "data sync integration",
    "cloud storage integration",
    "secure app integration",
    "Zalgo Infotech integration",
  ],
  path: "/intigration-details",
});

const integrationFeaturesLeft = [
  "Empower Through Security",
  "User experience",
  "User behavior tracking",
];

const integrationFeaturesRight = [
  "Data sync integration",
  "Cloud storage integration",
  "Every Act Counts",
];

const workProcessCards = [
  {
    icon: "seamless-icon1.png",
    title: "Hubspot Contacts Sync",
    desc: "Web hosting provides everything idea online. From where your of more on",
  },
  {
    icon: "seamless-icon6.png",
    title: "Github integration",
    desc: "Web hosting provides everything idea online. From where your of more on",
  },
  {
    icon: "seamless-icon2.png",
    title: "Spotify Online Platform",
    desc: "Web hosting provides everything idea online. From where your of more on",
  },
  {
    icon: "seamless-icon3.png",
    title: "Dropbox Streaming",
    desc: "Web hosting provides everything idea online. From where your of more on",
  },
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

const faqs = [
  {
    id: "collapseTwo",
    question: "What is Sassly?",
    open: false,
  },
  {
    id: "collapseOne",
    question: "Why should I choose Sassly?",
    open: true,
  },
  {
    id: "collapseThree",
    question: "Can I upgrade to a different plan at a later time?",
    open: false,
  },
  {
    id: "collapseFour",
    question: "What’s the cost of additional users?",
    open: false,
  },
  {
    id: "collapseFive",
    question: "What’s the commitment?",
    open: false,
  },
  {
    id: "collapseSix",
    question: "What languages does Sassly AI support?",
    open: false,
  },
];

const faqAnswer =
  "GoDaddy offers more than just a platform to build your website, we offer everything you need to create an effective, memorable online presence. Already have a site? We offer hosting plans that will keep it fast, secure and online. Our professional";

const bodyCopy =
  "Charity and Donation is a categories that involves giving financial category that involves giving financial or Below is a suggested outlines for a privacy policy for a Software as a Service (SaaS) company. keep in mind that privacy policies should be customized to reflect the specific practices and policies of your company, as well as any applicable laws and regulations. It's also recommended to have legal counsel review your privacy policy to ensure compliance. material support various causes organizations. It allows individuals towards the a addressing social category that involves giving financial or material support various causes of organizations. It allows individuals towards addressing social";

export default function IntigrationDetailsPage() {
  return (
    <PageShell>
      {/* Integrated apps start */}
      <section className="tw-pt-224-px section-bg-two pb-120 overflow-hidden">
        <div className="container max-w-1290-px">
          <div className="row gy-5 align-items-center flex-wrap-reverse">
            <div className="col-xl-6">
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
                  <h3 className="splitTextStyleOne text-heading text-capitalize max-w-532-px">
                    Integrated apps can create seamless workflows
                  </h3>
                  <p className="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-570-px tw-text-lg">
                    Create tasks with various custom statuses to focus more on your keep track of the progress of
                    each why in the simply enjoy process for your business.
                  </p>
                  <div className="tw-mt-9">
                    <Link
                      href={routes.contact}
                      className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main hover-style-one"
                      data-block="button"
                    >
                      <span className="button__flair"></span>
                      <span className="button__label">get started trial</span>
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Integrated apps End */}

      {/* Integration Features Start */}
      <section className="py-120">
        <div className="container">
          <div>
            <h3 className="text-capitalize tw-mb-4">work with applications more seamlessly</h3>
            <p className="tw-text-lg text-neutral-500">{bodyCopy}</p>
          </div>
          <div className="mt-120">
            <h3 className="text-capitalize tw-mb-4">Integration features</h3>
            <p className="tw-text-lg text-neutral-500">{bodyCopy}</p>
            <div className="tw-mt-10 d-flex tw-gap-100-px flex-wrap">
              <div className="d-flex flex-column tw-gap-4">
                {integrationFeaturesLeft.map((item) => (
                  <div className="d-flex align-items-center tw-gap-205" key={item}>
                    <span className="tw-w-7 tw-h-7 bg-neutral-100 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-heading">
                      <i className="ph-bold ph-check"></i>
                    </span>
                    <span className="text-heading tw-text-lg fw-semibold">{item}</span>
                  </div>
                ))}
              </div>
              <div className="d-flex flex-column tw-gap-4">
                {integrationFeaturesRight.map((item) => (
                  <div className="d-flex align-items-center tw-gap-205" key={item}>
                    <span className="tw-w-7 tw-h-7 bg-neutral-100 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-heading">
                      <i className="ph-bold ph-check"></i>
                    </span>
                    <span className="text-heading tw-text-lg fw-semibold">{item}</span>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Integration Features End */}

      {/* Work process section Start */}
      <section className="section-bg-two py-120">
        <div className="container">
          <div className="d-flex align-items-center justify-content-between flex-wrap tw-gap-4 tw-mb-14">
            <h3 className="splitTextStyleOne text-heading text-capitalize max-w-532-px">
              It actually work for cloud system based your app
            </h3>
            <p className="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-570-px tw-text-lg tw-ps-5 border-start border-app-landing">
              Create tasks with various custom statuses to focus more on your keep track of the progress of each
              why in the simply enjoy process for your business.
            </p>
          </div>

          <div className="row gy-4">
            {workProcessCards.map((card) => (
              <div className="col-xl-3 col-lg-4 col-sm-6" key={card.title}>
                <div className="bg-white tw-py-12 tw-px-9 text-start hover-common-shadow-sixteen tw-rounded-2xl group group-item bg-hover-app-landing tw-transition tw-duration-200 h-100">
                  <span className="tw-mb-8">
                    <img src={`/assets/images/icons/${card.icon}`} alt="Icon" />
                  </span>
                  <h6 className="tw-mb-10 group-hover-text-white tw-transition tw-duration-200">{card.title}</h6>
                  <p className="text-neutral-500 tw-text-base tw-mb-705 group-hover-text-white tw-transition tw-duration-200">
                    {card.desc}
                  </p>
                  <Link
                    href={routes.intigrationDetails}
                    className="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline group-hover-text-white tw-transition tw-duration-200"
                  >
                    See integration
                    <i className="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                  </Link>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
      {/* Work process section End */}

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

      {/* Faq Two Section Start */}
      <section className="faq-two py-120">
        <div className="container">
          <div className="row gy-4">
            <div className="col-lg-4">
              <div>
                <div className="bg-neutral-100 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max">
                  <span className="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                  Up to <span className="text-yellow">70%</span> off managed cloud hosting
                </div>
                <h3 className="splitTextStyleOne text-heading text-capitalize">
                  Frequently ask <span className="font-dm-serif fst-italic fw-normal">Questions</span>
                </h3>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-350-px fw-medium">
                  Create tasks with various custom statuses to focus more on your keep track of the progress of
                  each why in
                </p>

                <div className="tw-mt-9">
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">get started trial</span>
                  </Link>
                </div>
              </div>
            </div>
            <div className="col-lg-8">
              <div className="ps-xl-5">
                <div className="accordion common-accordion style-two arrow-bg-orange" id="accordionExample">
                  {faqs.map((faq) => (
                    <div
                      className="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                      key={faq.id}
                    >
                      <h5 className="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                        <button
                          className={`accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5${
                            faq.open ? "" : " collapsed"
                          }`}
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target={`#${faq.id}`}
                          aria-expanded={faq.open}
                          aria-controls={faq.id}
                        >
                          {faq.question}
                        </button>
                      </h5>
                      <div
                        id={faq.id}
                        className={`accordion-collapse collapse${faq.open ? " show" : ""}`}
                        data-bs-parent="#accordionExample"
                      >
                        <div className="accordion-body p-0 tw-mt-605 max-w-620-px">
                          <p className="text-neutral-500">{faqAnswer}</p>
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
      {/* Faq Two Section End */}

      {/* Task Management Section Start */}
      <section className="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half">
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
                  Up to <span className="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                </div>
              </div>
              <h3 className="splitTextStyleOne text-white">Ready to revolutionize our service?</h3>

              <div className="d-none">
                <a
                  href="javascript:void(0)"
                  className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold tw-mt-7"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <div className="d-flex align-items-center tw-gap-2 z-1">
                    <span className="button__label">Download for free</span>
                  </div>
                </a>
              </div>
              <div className="d-block">
                <div className="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                  <a
                    href="javascript:void(0)"
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Get Started Trial</span>
                    </div>
                  </a>
                  <a
                    href="javascript:void(0)"
                    className="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Get Started Trial</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div className="tw-pt-8 text-center">
              <div className="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">
                  Project management
                </span>
                <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">
                  Technology
                </span>
                <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">
                  Technology
                </span>
                <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill">
                  Project management
                </span>
                <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">
                  Technology
                </span>
                <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">
                  Technology
                </span>
                <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">
                  Project management
                </span>
                <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">
                  Technology
                </span>
                <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">
                  Project management
                </span>
                <span className="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill">
                  Technology
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Task Management Section End */}
    </PageShell>
  );
}
