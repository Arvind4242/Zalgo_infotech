import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import Link from "next/link";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Service Details - What We Deliver",
  description:
    "Explore the details of Zalgo Infotech's services, our research-driven process, marketing options, and consulting turnaround built around your business needs.",
  keywords: [
    "IT service details",
    "software consulting services",
    "business consulting",
    "service process",
    "Zalgo Infotech services",
  ],
  path: "/service-details",
});

const serviceLinks = [
  "Cargo Domestic Service",
  "Air Freight Services",
  "Intermodal Shipping",
  "Freeze product Shipping",
  "Hot Shot Trucking",
  "Priority Transportation",
];

const checklist = [
  "Research beyond the business plan",
  "Marketing options and rates",
  "The ability to turnaround consulting",
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

const tags = [
  { label: "Project management", cls: "text-white gradient-bg-six" },
  { label: "Technology", cls: "text-heading bg-paste" },
  { label: "Technology", cls: "text-heading gradient-bg-six" },
  { label: "Project management", cls: "text-heading bg-yellow" },
  { label: "Technology", cls: "text-heading bg-orange" },
  { label: "Technology", cls: "text-heading gradient-bg-six" },
  { label: "Project management", cls: "text-heading bg-orange" },
  { label: "Technology", cls: "text-heading gradient-bg-six" },
  { label: "Project management", cls: "text-heading bg-paste" },
  { label: "Technology", cls: "text-heading bg-pink" },
];

export default function ServiceDetailsPage() {
  return (
    <PageShell>
      {/* Breadcrumb Start Here */}
      <section className="breadcrumb section-bg-two mb-0">
        <div className="container">
          <div className="row justify-content-center">
            <div className="col-lg-8">
              <div className="text-center">
                <span className="tw-mb-4">
                  <img src="/assets/images/logo/favicon-two.png" alt="Favicon Two" />
                </span>
                <h1 className="mb-0 splitTextStyleOne text-capitalize">Service Details</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Breadcrumb End Here */}

      {/* Services Details Start */}
      <section className="service-details py-120">
        <div className="container">
          <div className="row gy-4">
            <div className="col-xl-4 pe-lg-4">
              <div className="d-flex flex-column tw-gap-4">
                {serviceLinks.map((label, i) => (
                  <Link
                    key={i}
                    href={routes.serviceDetails}
                    className="bg-neutral-50 tw-py-3 tw-pe-205 tw-ps-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-bold d-flex align-items-center justify-content-between"
                  >
                    {label}
                    <span className="tw-px-205 tw-py-3 text-neutral-600 bg-white-1 group-hover-text-white tw-duration-300 d-flex">
                      <i className="ph ph-arrow-right"></i>
                    </span>
                  </Link>
                ))}
              </div>

              <div className="tw-py-10 tw-px-7 text-center bg-main-two-600 tw-mt-11">
                <span className="tw-w-92-px tw-h-84-px d-inline-flex justify-content-center align-items-center tw-text-9 text-white bg-white-01 tw-rounded-sm">
                  <i className="ph ph-phone-call"></i>
                </span>
                <h5 className="text-white max-w-260-px mx-auto splitTextStyleOne tw-mt-5">
                  Looking for logistics service Provider?
                </h5>

                <div className="tw-mt-11">
                  <span className="text-uppercase text-white tw-mb-2">Call anytime</span>
                  <a
                    href="tel:+(2)871382023"
                    className="btn btn-main hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-py-505 rounded-pill fw-bold w-100"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">+(2) 871 382 023</span>
                  </a>
                </div>
              </div>
            </div>
            <div className="col-xl-8 ps-xl-5">
              <div>
                <img src="/assets/images/thumbs/service-details-img.png" alt="Thumb" />
                <div className="tw-mt-8 d-flex flex-column tw-gap-12">
                  <div>
                    <h4 className="tw-mb-3 splitTextStyleOne">Cargo Transportation service</h4>
                    <p className="text-neutral-600">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus
                      illum modi? perspiciatis accusamus soluta perferendis, ad illum, nesciunt,
                      reiciendis iusto et cupidit Repudiandae provident to consectetur, sapiente,
                      libero iure necessitatibus corporis nulla voluptate, quisquam aut
                      perspiciatis? Fugiat labore aspernatur eius, perspiciatis ut molestiae,
                      delectus rem.
                    </p>
                  </div>
                  <div>
                    <h5 className="tw-mb-3 splitTextStyleOne">
                      Sed ut perspiciatis unde omnis iste natus et
                    </h5>
                    <p className="text-neutral-600">
                      Need something changed or is there something not quite working the way you
                      envisaged? Is your van a little old and tired and need refreshing? Lorem
                      Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                      Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries, but also the leap
                      into electronic typesetting, remaining essentially unchanged.
                    </p>
                  </div>
                  <div className="d-flex tw-gap-9">
                    <div className="position-relative max-w-390-px w-100">
                      <img
                        src="/assets/images/thumbs/service-details-video-img.jpg"
                        alt="Thumb"
                        className="w-100 h-100 object-fit-cover"
                      />
                      <a
                        href="https://www.youtube.com/watch?v=MFLVmAE4cqg"
                        target="_blank"
                        rel="noreferrer"
                        className="bg-light-animation tw-w-75-px tw-h-75-px d-inline-flex justify-content-center align-items-center bg-white text-main-600 hover-text-main-two-700 rounded-circle tw-text-xl position-absolute tw-start-50 tw--translate-middle top-50 z-1"
                      >
                        <i className="ph-fill ph-play"></i>
                      </a>
                    </div>
                    <div>
                      <h4 className="tw-mb-3 splitTextStyleOne">Why Security is Important ?</h4>
                      <p className="text-neutral-600">
                        Lorem ipsum dolor sit amet, consectetur adipisici sed do eiusmod tempor
                        incididunt ut labore et
                      </p>
                      <ul className="d-flex flex-column tw-gap-4 tw-mt-6">
                        {checklist.map((item, i) => (
                          <li className="d-flex align-items-center tw-gap-4" key={i}>
                            <span className="text-main-600 d-flex">
                              <i className="ph-bold ph-check"></i>
                            </span>
                            <span className="text-neutral-600 fw-medium">{item}</span>
                          </li>
                        ))}
                      </ul>
                    </div>
                  </div>

                  <p className="text-neutral-600">
                    There are many variations of passages of lorem ipsum is simply free text
                    available in the market, but the majority time you put aside to be in our
                    office. Lorem ipsum dolor sit amet, consectetLorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>

                  <p className="bg-white border-start border-4 border-main-600 common-shadow-five tw-text-lg fw-medium text-main-two-600 tw-py-405 tw-px-6">
                    Business is the activity of making one&rsquo;s living or making money by produ
                    The NDIS Cing or buying and selling products akes a lifetime
                  </p>

                  <div>
                    <h5 className="tw-mb-8">Eligibility checklist :</h5>
                    <div className="row gy-4">
                      <div className="col-sm-8">
                        <img
                          src="/assets/images/thumbs/service-details-img1.jpg"
                          alt="Thumb"
                          className="w-100 h-100 object-fit-cover"
                        />
                      </div>
                      <div className="col-sm-4">
                        <img
                          src="/assets/images/thumbs/service-details-img2.jpg"
                          alt="Thumb"
                          className="w-100 h-100 object-fit-cover"
                        />
                      </div>
                      <div className="col-sm-4">
                        <img
                          src="/assets/images/thumbs/service-details-img3.jpg"
                          alt="Thumb"
                          className="w-100 h-100 object-fit-cover"
                        />
                      </div>
                      <div className="col-sm-8">
                        <img
                          src="/assets/images/thumbs/service-details-img4.jpg"
                          alt="Thumb"
                          className="w-100 h-100 object-fit-cover"
                        />
                      </div>
                    </div>
                  </div>

                  <div
                    className="accordion common-accordion style-two arrow-bg-orange"
                    id="accordionExample"
                  >
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
                            aria-expanded={faq.open ? "true" : "false"}
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
                            <p className="text-neutral-500 tw-leading-212">{faqAnswer}</p>
                          </div>
                        </div>
                      </div>
                    ))}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Services Details end */}

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
                {tags.map((tag, i) => (
                  <span
                    key={i}
                    className={`drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold rounded-pill ${tag.cls}`}
                  >
                    {tag.label}
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
