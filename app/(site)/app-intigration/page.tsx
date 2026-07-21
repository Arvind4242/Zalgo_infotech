import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "App Integration Services",
  description:
    "Connect your tools seamlessly with Zalgo Infotech's app integration services — Hubspot, Slack, Dropbox, Shopify, GitHub, Zapier, and more, all synced in one workflow.",
  keywords: [
    "app integration services",
    "software integration",
    "API integration company",
    "third-party app sync",
    "workflow integration",
    "Zalgo Infotech integrations",
  ],
  path: "/app-intigration",
});

const distractionIcons = [
  { cls: "one position-absolute z-1 animation-scalation", img: "distraction-icon1.png" },
  { cls: "two position-absolute z-1 animation-upDown", img: "distraction-icon2.png" },
  { cls: "three position-absolute z-1 animation-upDown animation-delay-1", img: "distraction-icon3.png" },
  { cls: "four position-absolute z-1 animation-upDown animation-delay-2", img: "distraction-icon4.png" },
  { cls: "five position-absolute z-1 animation-scalation animation-delay-1", img: "distraction-icon5.png" },
  { cls: "six position-absolute z-1 animation-scalation animation-delay-2", img: "distraction-icon6.png" },
  { cls: "seven position-absolute z-1", img: "distraction-icon7.png" },
];

const integrations = [
  { icon: "seamless-icon1.png", title: "Hubspot Contacts Sync" },
  { icon: "seamless-icon2.png", title: "Spotify Online Platform" },
  { icon: "seamless-icon3.png", title: "Dropbox Streaming" },
  { icon: "seamless-icon4.png", title: "Google Photos Social Medea" },
  { icon: "seamless-icon5.png", title: "Zapier Social Media" },
  { icon: "seamless-icon6.png", title: "Slack Contacts Sync" },
  { icon: "seamless-icon7.png", title: "Shopify Contacts Sync" },
  { icon: "seamless-icon8.png", title: "Github integration" },
];

const faqs = [
  { id: "collapseTwo", q: "What is Sassly?", open: false },
  { id: "collapseOne", q: "Why should I choose Sassly?", open: true },
  { id: "collapseThree", q: "Can I upgrade to a different plan at a later time?", open: false },
  { id: "collapseFour", q: "What’s the cost of additional users?", open: false },
  { id: "collapseFive", q: "What’s the commitment?", open: false },
  { id: "collapseSix", q: "What languages does Sassly AI support?", open: false },
];

const godaddyAnswer =
  "GoDaddy offers more than just a platform to build your website, we offer everything you need to create an effective, memorable online presence. Already have a site? We offer hosting plans that will keep it fast, secure and online. Our professional";

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

export default function AppIntigrationPage() {
  return (
    <PageShell>
      {/* Distraction page start */}
      <section className="tw-pt-224-px section-bg-two pb-120">
        <div className="container max-w-1290-px">
          <div className="position-relative distraction__inner">
            <div className="max-w-602-px w-100 text-center mx-auto position-absolute z-1 tw-start-50 translate-middle-x top-0 mt-5 pt-lg-5 pt-4">
              <h3 className="splitTextStyleOne text-heading h1 text-capitalize text-capitalize">
                App Integration
              </h3>
              <p className="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">
                Create tasks with various custom statuses to focus more on your keep track of the
                progress of each why
              </p>
            </div>

            <div>
              <img src="/assets/images/shapes/net-shape.png" alt="Net Shape" />
            </div>
            <div>
              {distractionIcons.map((d, i) => (
                <div className={`distraction-icon ${d.cls}`} key={i}>
                  <img src={`/assets/images/thumbs/${d.img}`} alt="Icon Image" />
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>
      {/* Distraction page End */}

      {/* seamless integration section Start */}
      <section className="seamless-integration py-120">
        <div className="container max-w-1400-px">
          <div className="max-w-672-px text-center mx-auto tw-mb-12">
            <h3 className="splitTextStyleOne text-heading text-capitalize">
              Seamless Integration for enhancing experience
            </h3>
            <p className="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">
              Create tasks with various custom statuses tofocus more on your keep track of the
              progress of each why in
            </p>
          </div>

          <div className="border border-neutral-200 tw-rounded-xl common-shadow-sixteen">
            <div className="row col-border-wrapper">
              {integrations.map((it, i) => (
                <div className="col-xl-3 col-md-4 col-sm-6 col-xs-6" key={i}>
                  <div className="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                    <span className="tw-mb-8">
                      <img src={`/assets/images/icons/${it.icon}`} alt="Icon" />
                    </span>
                    <h6 className="tw-mb-10 max-w-172-px mx-auto">{it.title}</h6>
                    <p className="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">
                      Build online communities with effective audience communication with various
                      track
                    </p>
                    <Link
                      href={routes.intigrationDetails}
                      className="fw-semibold text-main-600 d-inline-flex align-items-center tw-gap-3 hover-underline"
                    >
                      See integration
                      <i className="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i>
                    </Link>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>
      {/* seamless integration section End */}

      {/* Counter Up section Start */}
      <section className="section-bg-two py-120">
        <div className="container">
          <div className="max-w-780-px text-center mx-auto tw-mb-13">
            <div className="bg-white tw-py-2 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green">
              <div className="text-gradient-teal">what we offering</div>
            </div>
            <h3 className="splitTextStyleOne text-heading text-capitalize text-capitalize">
              Trusted by <span className="font-dm-serif fst-italic text-gradient-teal">3+ million</span>{" "}
              website owners worldwide
            </h3>
          </div>

          <div className="border-top border-bottom d-flex align-items-center justify-content-between flex-sm-nowrap flex-wrap tw-gap-148-px">
            <div className="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
              <h2 className="h1">
                <span className="counter">282</span>
                <span>+</span>
              </h2>
              <span className="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
            </div>

            <div className="d-flex">
              <div className="tw-w-1-px h-100 bg-neutral-200"></div>
            </div>

            <div className="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
              <h2 className="h1">
                <span className="counter">95</span>
                <span>%</span>
              </h2>
              <span className="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
            </div>

            <div className="d-flex">
              <div className="tw-w-1-px h-100 bg-neutral-200"></div>
            </div>

            <div className="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
              <h2 className="h1">
                <span className="counter">282</span>
                <span>+</span>
              </h2>
              <span className="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
            </div>
          </div>
        </div>
      </section>
      {/* Counter Up section End */}

      {/* Driven section Start */}
      <section className="py-120">
        <div className="container">
          <div>
            <img src="/assets/images/thumbs/driven-img.png" alt="Thumb" />
            <div className="max-w-780-px text-center mx-auto tw-mb-13">
              <h3 className="splitTextStyleOne text-heading text-capitalize text-capitalize">
                Driven your business today next level by Zalgo Infotech
              </h3>
              <div className="d-flex align-items-center tw-gap-4 justify-content-center tw-mt-10">
                <Link
                  href={routes.contact}
                  className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn btn-main hover-style-one"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">get started trial</span>
                </Link>
                <Link
                  href={routes.contact}
                  className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">see pricing plan</span>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Driven section End */}

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
                <div className="bg-neutral-100 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max">
                  <span className="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                  Up to <span className="text-yellow">70%</span> off managed cloud hosting
                </div>
                <h3 className="splitTextStyleOne text-heading text-capitalize">
                  Frequently ask <span className="font-dm-serif fst-italic fw-normal">Questions</span>
                </h3>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-350-px fw-medium">
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
                    <span className="button__label">get started trial</span>
                  </Link>
                </div>
              </div>
            </div>
            <div className="col-lg-8">
              <div className="ps-xl-5">
                <div className="accordion common-accordion style-two arrow-bg-orange" id="accordionExample">
                  {faqs.map((f) => (
                    <div
                      className="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                      key={f.id}
                    >
                      <h5 className="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                        <button
                          className={`accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5${
                            f.open ? "" : " collapsed"
                          }`}
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target={`#${f.id}`}
                          aria-expanded={f.open}
                          aria-controls={f.id}
                        >
                          {f.q}
                        </button>
                      </h5>
                      <div
                        id={f.id}
                        className={`accordion-collapse collapse${f.open ? " show" : ""}`}
                        data-bs-parent="#accordionExample"
                      >
                        <div className="accordion-body p-0 tw-mt-605 max-w-620-px">
                          <p className="text-neutral-500">{godaddyAnswer}</p>
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
                        ? "text-white text-heading bg-paste"
                        : "text-white text-heading bg-yellow"
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
