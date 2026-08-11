import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Project Details - Case Study",
  description:
    "See how Zalgo Infotech delivers projects with efficient sprint planning, iterative delivery, and daily standups to solve problems and support clients effectively.",
  keywords: [
    "project case study",
    "software project delivery",
    "sprint planning",
    "agile development process",
    "Zalgo Infotech projects",
  ],
  path: "/project-details",
});

const factItems = [
  "Efficient Sprint Planning",
  "Iterative Delivery Approach",
  "Standups and Demos",
  "Problem-solving",
];

const results = [
  {
    title: "Support clients",
    desc: "Sed ut perspiciatis unde omnis natus voluptatem accusantium doloremque laudantium, totam rem aperiam inventore",
  },
  {
    title: "Solve problems",
    desc: "To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage",
  },
];

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

export default function ProjectDetailsPage() {
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
                <h1 className="mb-0 splitTextStyleOne text-capitalize">Project Details</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Breadcrumb End Here */}

      {/* Project Details Start */}
      <section className="py-120">
        <div className="container">
          <div className="row gy-4">
            <div className="col-lg-9">
              <div className="max-w-724-px">
                <span className="splitTextStyleTwo tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305">
                  Safe Transportation &amp; Logistics
                </span>
                <h3 className="splitTextStyleOne tw-mb-8">
                  Deeper Dive into Our Digital Product Design Masterpieces
                </h3>
                <p className="text-neutral-600">
                  Sed ut perspiciatis unde omniste natus voluptatem accusantiume rem aperia eaque
                  ipsa quae abillo inventore veritatis quasi architecto beatae vitae dicta sunt
                  explicabo. Nemo enim epsam voluptatem quia voluptas aspernatur odites sed quia
                  consequunture
                </p>
              </div>
              <a
                href="https://themeforest.net/user/wowtheme7"
                target="_blank"
                rel="noreferrer"
                className="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-3 group active--translate-y-2 tw-rounded-lg tw-px-13 tw-py-505 tw-mt-14"
                data-block="button"
              >
                <span className="button__flair"></span>
                <span className="button__label">Visit Website</span>
                <span className="text-white tw-text-lg position-relative group-hover-text-white tw-duration-500">
                  <i className="ph ph-caret-right"></i>
                </span>
              </a>
            </div>
            <div className="col-lg-3">
              <div className="bg-neutral-200 tw-p-54-px d-flex flex-column tw-gap-56-px">
                <div>
                  <h6 className="tw-mb-3 fw-semibold">Clients</h6>
                  <span className="text-neutral-600">Design Studio In USA</span>
                </div>
                <div>
                  <h6 className="tw-mb-3 fw-semibold">Project Type</h6>
                  <span className="text-neutral-600">Digital Product Design</span>
                </div>
                <div>
                  <h6 className="tw-mb-3 fw-semibold">Date</h6>
                  <span className="text-neutral-600">25 October 2023</span>
                </div>
                <div>
                  <h6 className="tw-mb-3 fw-semibold">Website</h6>
                  <a
                    href="https://wowtheme7.com"
                    target="_blank"
                    rel="noreferrer"
                    className="text-main-600 text-decoration-underline"
                  >
                    WowTheme7.Com
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div className="tw-mt-80-px">
            <div className="row gy-4">
              <div className="col-sm-4">
                <div className="h-100">
                  <img
                    src="/assets/images/thumbs/project-details-img1.png"
                    alt="Thumb"
                    className="w-100 h-100 object-fit-cover"
                  />
                </div>
              </div>
              <div className="col-sm-8">
                <div className="h-100">
                  <img
                    src="/assets/images/thumbs/project-details-img2.png"
                    alt="Thumb"
                    className="w-100 h-100 object-fit-cover"
                  />
                </div>
              </div>
            </div>
          </div>

          <div className="tw-mt-80-px tw-mb-80-px tw-pb-80-px border-bottom border-neutral-200">
            <div className="d-flex flex-wrap justify-content-between align-items-start">
              <div className="max-w-444-px">
                <h3 className="splitTextStyleOne tw-mb-10">Interesting facts in Development</h3>
              </div>
              <div className="max-w-548-px">
                <p className="text-neutral-600">
                  Must explain to you how all this mistaken idea of denouncing pleasure and
                  praising pain was born and I will give you a complete account of the system, and
                  expound the actual teachings of the great explorer of the truth, the
                  master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
                  itself, because it is pleasure, but because those who do not know how to pursue
                  pleasure rationally encounter
                </p>

                <ul className="xs-grid-cols-2 d-grid tw-gap-6 tw-mt-14">
                  {factItems.map((item, i) => (
                    <li className="d-flex align-items-center tw-gap-4" key={i}>
                      <span className="text-main-600 d-flex">
                        <i className="ph-bold ph-check"></i>
                      </span>
                      <span className="text-main-two-600 fw-bold">{item}</span>
                    </li>
                  ))}
                </ul>
              </div>
            </div>
          </div>

          <div className="tw-mt-80-px tw-mb-80-px tw-pb-80-px border-bottom border-neutral-200">
            <div className="d-flex flex-wrap justify-content-between align-items-start">
              <div className="max-w-444-px">
                <h3 className="splitTextStyleOne tw-mb-10">The Results of Our Project</h3>
              </div>
              <div className="max-w-548-px">
                <p className="text-neutral-600">
                  Will give you a complete account of the system, and expound the actual teachings
                  of the great explorer of the truth, the master-builder of human happiness
                  rejects, dislikes, or avoids pleasure
                </p>

                {results.map((r, i) => (
                  <div className="tw-mt-14" key={i}>
                    <div className="d-flex align-items-center tw-gap-4">
                      <span className="text-white tw-w-605 tw-h-605 bg-main-600 d-flex justify-content-center align-items-center rounded-circle">
                        <i className="ph-bold ph-check"></i>
                      </span>
                      <h6 className="text-main-two-600 fw-bold">{r.title}</h6>
                    </div>
                    <p className="text-neutral-600 tw-mt-6">{r.desc}</p>
                  </div>
                ))}
              </div>
            </div>
          </div>

          <div className="tw-mt-80-px">
            <div className="row gy-4">
              <div className="col-sm-6">
                <div>
                  <Link href={routes.projectDetails} className="w-100 h-100">
                    <img
                      src="/assets/images/thumbs/project-details-img3.png"
                      alt="Thumb"
                      className="w-100 h-100 object-fit-cover"
                    />
                  </Link>
                  <div className="tw-mt-12">
                    <Link
                      href={routes.projectDetails}
                      className="text-neutral-600 hover-text-main-600 d-inline-flex align-items-center tw-gap-2 fw-semibold"
                    >
                      <span className="tw-text-lg d-flex">
                        <i className="ph ph-caret-left"></i>
                      </span>
                      Prev
                    </Link>
                    <h5 className="tw-mt-6">
                      <Link href={routes.projectDetails} className="line-clamp-1 hover-underline">
                        Business Website Design
                      </Link>
                    </h5>
                  </div>
                </div>
              </div>
              <div className="col-sm-6">
                <div>
                  <Link href={routes.projectDetails} className="w-100 h-100">
                    <img
                      src="/assets/images/thumbs/project-details-img4.png"
                      alt="Thumb"
                      className="w-100 h-100 object-fit-cover"
                    />
                  </Link>
                  <div className="tw-mt-12 text-end">
                    <Link
                      href={routes.projectDetails}
                      className="text-neutral-600 hover-text-main-600 d-inline-flex align-items-center tw-gap-2 fw-semibold"
                    >
                      Next
                      <span className="tw-text-lg d-flex">
                        <i className="ph ph-caret-right"></i>
                      </span>
                    </Link>
                    <h5 className="tw-mt-6">
                      <Link href={routes.projectDetails} className="line-clamp-1 hover-underline">
                        Mobile Application Design
                      </Link>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Project Details End */}

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
