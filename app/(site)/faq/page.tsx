import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Frequently Asked Questions",
  description:
    "Find answers to common questions about Zalgo Infotech's services, plans, pricing, upgrades, and support to help you get started with confidence.",
  keywords: [
    "Zalgo Infotech FAQ",
    "IT services questions",
    "software pricing FAQ",
    "plan upgrade questions",
    "customer support FAQ",
  ],
  path: "/faq",
});

const godaddyAnswer =
  "GoDaddy offers more than just a platform to build your website, we offer everything you need to create an effective, memorable online presence. Already have a site? We offer hosting plans that will keep it fast, secure and online. Our professional";

const faqOne = [
  { q: "What is Sassly?", a: godaddyAnswer, open: false },
  { q: "Why should I choose Sassly?", a: godaddyAnswer, open: true },
  { q: "Can I upgrade to a different plan at a later time?", a: godaddyAnswer, open: false },
  { q: "What’s the cost of additional users?", a: godaddyAnswer, open: false },
  { q: "What’s the commitment?", a: godaddyAnswer, open: false },
  { q: "What languages does Sassly AI support?", a: godaddyAnswer, open: false },
];

const faqTwo = faqOne;

const tags = [
  "Project management",
  "Technology",
  "Technology",
  "Project management",
  "Technology",
  "Technology",
  "Project management",
  "Technology",
  "Project management",
  "Technology",
];

function Accordion({
  items,
  accordionId,
  idPrefix,
}: {
  items: { q: string; a: string; open: boolean }[];
  accordionId: string;
  idPrefix: string;
}) {
  return (
    <div className="accordion common-accordion style-two arrow-bg-orange" id={accordionId}>
      {items.map((item, i) => {
        const collapseId = `${idPrefix}${i}`;
        return (
          <div
            className="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
            key={collapseId}
          >
            <h5 className="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
              <button
                className={`accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5${
                  item.open ? "" : " collapsed"
                }`}
                type="button"
                data-bs-toggle="collapse"
                data-bs-target={`#${collapseId}`}
                aria-expanded={item.open}
                aria-controls={collapseId}
              >
                {item.q}
              </button>
            </h5>
            <div
              id={collapseId}
              className={`accordion-collapse collapse${item.open ? " show" : ""}`}
              data-bs-parent={`#${accordionId}`}
            >
              <div className="accordion-body p-0 tw-mt-605 max-w-620-px">
                <p className="text-neutral-500 tw-leading-212">{item.a}</p>
              </div>
            </div>
          </div>
        );
      })}
    </div>
  );
}

export default function FaqPage() {
  return (
    <PageShell>
      {/* Integrated apps start */}
      <section className="tw-pt-224-px section-bg-two pb-120 overflow-hidden">
        <div className="container max-w-1290-px">
          <div className="row justify-content-center">
            <div className="col-xl-8">
              <div className="text-center">
                <h3 className="tw-mb-6">Hello, what can we help you find?</h3>
                <p className="fw-medium text-neutral-500">
                  Docly is a fully featured knowledge base theme for WordPress.
                </p>
                <form action="#" className="position-relative tw-mt-11">
                  <input
                    type="text"
                    className="tw-px-10 tw-py-705 bg-white rounded-pill border-transparent focus-border-main-600 focus-outline-0 w-100 tw-pe-200-px common-shadow-seventeen"
                    placeholder="Search What You Want To Know"
                  />
                  <button
                    type="submit"
                    className="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-2 group active--translate-y-2 fw-semibold flex-shrink-0 tw-py-6 tw-px-12 rounded-pill position-sm-in-box"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="text-white tw-text-sm tw-rounded d-flex justify-content-center align-items-center position-relative group-hover-text-main-600 tw-duration-500">
                      <i className="ph-bold ph-magnifying-glass"></i>
                    </span>
                    <span className="button__label">Search</span>
                  </button>
                </form>

                <div className="d-inline-flex align-items-center tw-gap-6 tw-mt-8 flex-wrap">
                  <span className="fw-semibold tw-text-lg text-heading">Popular:</span>
                  <div className="d-inline-flex align-items-center tw-gap-4 flex-wrap">
                    {["Coding", "Traveling", "aeroplane"].map((t) => (
                      <button
                        key={t}
                        type="button"
                        className="tw-px-405 tw-py-105 bg-white tw-rounded-md text-neutral-500 tw-text-sm bg-white common-shadow-eighteen hover-bg-main-600 hover-text-white tw-transition tw-duration-200 fw-medium"
                      >
                        {t}
                      </button>
                    ))}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Integrated apps End */}

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
            <div className="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100">
              <div className="current-content">
                <div className="tw-max-h-397-px overflow-hidden text-center">
                  <img src="/assets/images/thumbs/testimonials-img1.png" alt="Image" />
                </div>
                <div className="tw-py-8 tw-px-4 text-center">
                  <h6 className="tw-mb-2">Ryan</h6>
                  <span className="text-neutral-600 fw-medium tw-text-sm">CEO - and Founder</span>
                </div>
              </div>
              <div className="d-flex flex-column h-100 hidden-content p-3">
                <div>
                  <div className="video-testimonial">
                    <img src="/assets/images/case-study/finance-case-study.png" alt="Image" />
                  </div>
                  <div className="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                    <p className="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                      “For over four years, they have been our trusted development partner,
                      transforming our Figma designs into a fully functional WordPress website.
                      Their attention to UI detail and frontend precision has consistently elevated
                      our digital presence.”
                    </p>
                  </div>
                </div>
                <div className="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                  <div className="tw-h-84-px tw-w-84-px rounded-circle">
                    <img
                      src="/assets/images/thumbs/testimonials-short-img1.png"
                      alt="Image"
                      className="w-100 h-100 object-fit-cover"
                    />
                  </div>
                  <div>
                    <h6 className="tw-mb-2">Ryan</h6>
                    <span className="text-neutral-600">CEO - and Founder</span>
                  </div>
                </div>
              </div>
            </div>

            <div className="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100 active">
              <div className="current-content">
                <div className="tw-max-h-397-px overflow-hidden text-center">
                  <img src="/assets/images/thumbs/testimonials-img3.png" alt="Image" />
                </div>
                <div className="tw-py-8 tw-px-4 text-center">
                  <h6 className="tw-mb-2">Roland Thomas</h6>
                  <span className="text-neutral-600 fw-medium tw-text-sm">CEO - and Founder</span>
                </div>
              </div>
              <div className="d-flex flex-column h-100 hidden-content p-3">
                <div>
                  <div className="video-testimonial">
                    <iframe
                      width="100%"
                      height="350"
                      src="https://www.youtube.com/embed/TxjsRFwDvbQ?si=LA4zrJXjOhfKCdMM"
                      title="Dummy Video For Website"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerPolicy="strict-origin-when-cross-origin"
                      allowFullScreen
                    ></iframe>
                  </div>
                  <div className="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                    <p className="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                      “Over the past five years, they have managed our complete eCommerce
                      infrastructure — from SEO strategy to payment gateway integrations and
                      ongoing technical optimization. Their 24/7 support and proactive approach have
                      played a key role in our consistent business growth.”
                    </p>
                  </div>
                </div>
                <div className="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                  <div className="tw-h-84-px tw-w-84-px rounded-circle">
                    <img
                      src="/assets/images/thumbs/testimonials-short-img3.png"
                      alt="Image"
                      className="w-100 h-100 object-fit-cover"
                    />
                  </div>
                  <div>
                    <h6 className="tw-mb-2">Roland Thomas</h6>
                    <span className="text-neutral-600">CEO and Founder</span>
                  </div>
                </div>
              </div>
            </div>

            <div className="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100">
              <div className="current-content">
                <div className="tw-max-h-397-px overflow-hidden text-center">
                  <img src="/assets/images/thumbs/testimonials-img2.png" alt="Image" />
                </div>
                <div className="tw-py-8 tw-px-4 text-center">
                  <h6 className="tw-mb-2">— Edmilson</h6>
                  <span className="text-neutral-600 fw-medium tw-text-sm">
                    Backend Systems Developer - Brazil
                  </span>
                </div>
              </div>
              <div className="d-flex flex-column h-100 hidden-content p-3">
                <div>
                  <div className="video-testimonial">
                    <img src="/assets/images/case-study/edmilson-testi.png" alt="Image" />
                  </div>
                  <div className="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                    <p className="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                      “Over the 6+ years, we’ve worked closely on multiple backend systems built
                      with PHP, Node.js, and Laravel. Their reliability, clean architecture
                      approach, and consistent support make them a trusted long-term technical
                      partner.”
                    </p>
                  </div>
                </div>
                <div className="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                  <div className="tw-h-84-px tw-w-84-px rounded-circle">
                    <img
                      src="/assets/images/thumbs/testimonials-short-img2.png"
                      alt="Image"
                      className="w-100 h-100 object-fit-cover"
                    />
                  </div>
                  <div>
                    <h6 className="tw-mb-2">— Edmilson</h6>
                    <span className="text-neutral-600 fw-medium tw-text-sm">
                      Backend Systems Developer - Brazil
                    </span>
                  </div>
                </div>
              </div>
            </div>
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
                <h3 className="splitTextStyleOne text-heading text-capitalize">
                  Frequently ask <span className="font-dm-serif fst-italic fw-normal">Questions</span>
                </h3>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-500-px tw-leading-212 fw-medium">
                  Create tasks with various custom statuses to focus more on your keep track of the
                  progress of each why in
                </p>

                <div className="tw-mt-9">
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">Contact Us</span>
                  </Link>
                </div>
              </div>
            </div>
            <div className="col-lg-8">
              <div className="ps-xl-5">
                <Accordion items={faqOne} accordionId="accordionExample" idPrefix="collapse" />
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Faq Two Section End */}

      {/* Faq Section Start */}
      <section className="pb-120">
        <div className="container">
          <div className="row gy-4">
            <div className="col-lg-5">
              <div>
                <h3 className="splitTextStyleOne text-heading text-capitalize">
                  Navigating the Digital Marketing Landscape FAQs Unveiled
                </h3>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-500-px tw-leading-212 fw-medium">
                  Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque
                  laudantium totamto aperiame eaque ipsa quae ab illo inventore veritatis
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
            <div className="col-lg-7">
              <div className="ps-xl-5">
                <Accordion
                  items={faqTwo}
                  accordionId="accordionExampleTwo"
                  idPrefix="collapseTwoSet"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Faq Section End */}

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
                  Up to <span className="text-yellow text-stroke-yellow">70%</span> off managed
                  cloud hosting
                </div>
              </div>
              <h3 className="splitTextStyleOne text-white">Ready to revolutionize our service?</h3>

              <div className="d-block">
                <div className="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Get Started Trial</span>
                    </div>
                  </Link>
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Get Started Trial</span>
                    </div>
                  </Link>
                </div>
              </div>
            </div>
            <div className="tw-pt-8 text-center">
              <div className="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                {tags.map((tag, i) => (
                  <span
                    key={i}
                    className={`drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold rounded-pill ${
                      i % 3 === 0
                        ? "text-white gradient-bg-six"
                        : i % 3 === 1
                        ? "text-heading bg-paste"
                        : "text-heading bg-yellow"
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
