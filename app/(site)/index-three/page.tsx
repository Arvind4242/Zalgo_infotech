import Link from "next/link";
import PageShell from "@/components/PageShell";
import HtmlClassSetter from "@/components/HtmlClassSetter";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Task Management & CRM Software",
  description:
    "Simplify task management and prioritize work with Zalgo Infotech's CRM and automation solutions — real-time tracking, collaboration tools, and project management built in.",
  keywords: [
    "task management software",
    "CRM development",
    "project management tools",
    "workflow automation",
    "team collaboration software",
    "Zalgo Infotech CRM",
  ],
  path: "/index-three",
});

const brandLogos = [1, 2, 3, 4, 5, 6, 7, 5];

const smallFeatures = [
  { icon: "features-three-icon1.svg", title: "Asynchronous Meetings" },
  { icon: "features-three-icon2.svg", title: "Monitoring your Time" },
  { icon: "features-three-icon3.svg", title: "built-in Automation" },
  { icon: "features-three-icon4.svg", title: "Remote-Friendly Collaboration" },
];

const workplaceTabs = [
  { id: "v-pills-home", icon: "workplace-tab-icon1.svg", label: "All Teams" },
  { id: "v-pills-profile", icon: "workplace-tab-icon2.svg", label: "Security" },
  { id: "v-pills-disabled", icon: "workplace-tab-icon3.svg", label: "Technology" },
  { id: "v-pills-messages", icon: "workplace-tab-icon4.svg", label: "Infrastructure" },
  { id: "v-pills-settings", icon: "workplace-tab-icon5.svg", label: "Engineering" },
];

const automationPoints = [
  "Workflow streamlining",
  "Expedite onboarding with clear prioritization",
  "Collaborate on ideas 7x faster",
];

const taskManagerPoints = [
  { icon: "task-manager-icon1.svg", title: "Automate Task Creation" },
  { icon: "task-manager-icon2.svg", title: "Simplify your daily routines" },
];

const planExecuteItems = [
  { img: "plan-execute-img1.png", title: "Custom templates" },
  { img: "plan-execute-img3.png", title: "Collaboration tools" },
  { img: "plan-execute-img2.png", title: "Operations teams" },
  { img: "plan-execute-img4.png", title: "Project Management" },
  { img: "plan-execute-img3.png", title: "Collaboration tools" },
];

const pricingPlansThree = [
  { name: "Basic plan", price: "$1.99" },
  { name: "Premium plan", price: "$9.99" },
  { name: "Pro plan", price: "$19.99" },
];

const pricingFeaturesThree = [
  "Real-time tracking and notifications",
  "Real-time analytics",
  "Drag and drop templates",
  "Project Management",
  "24/7 email and chat support",
];

const distractionIcons = [1, 2, 3, 4, 5, 6, 7];

const dragTags = [
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

export default function IndexThree() {
  return (
    <PageShell>
      <HtmlClassSetter className="home-three crm-page" />

      {/* Banner Three Section start */}
      <section className="banner-three gradient-bg-five position-relative z-1 overflow-hidden">
        <img
          src="/assets/images/shapes/cloud-sky.png"
          alt="Cloud Shape"
          className="position-absolute top-50 tw-end-0 left-right-scale-animation d-sm-block d-none z-n1"
        />
        <div className="container">
          <div className="row gy-5">
            <div className="col-lg-6">
              <div className="banner-three-content max-w-570-px">
                <h1 className="splitTextStyleOne text-white text-capitalize tw-leading-none">
                  Simplify task{" "}
                  <span className="text-gradient-teal font-dm-serif fst-italic fw-normal">management</span> and
                  prioritize work
                </h1>
                <p className="splitTextStyleOne text-white tw-text-lg tw-mt-8">
                  Sassly-<span className="text-yellow">CRM</span> in the past allowing you to focus more on your
                  business or simply enjoy your newfound legal time to reflect leaving
                </p>

                <div className="d-flex align-items-center tw-gap-7 tw-mt-11">
                  <a
                    href="#"
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Start Free Trial</span>
                      <span className="icon">
                        <img src="/assets/images/icons/download-cloud-icon.png" alt="Icon" />
                      </span>
                    </div>
                  </a>
                </div>

                <div className="d-flex align-items-center tw-gap-7 tw-mt-10">
                  <div className="d-flex align-items-center tw-gap-205">
                    <span className="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                      <i className="ph-bold ph-check"></i>
                    </span>
                    <span className="text-white">3-Day Free Trial</span>
                  </div>
                  <div className="d-flex align-items-center tw-gap-205">
                    <span className="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                      <i className="ph-bold ph-check"></i>
                    </span>
                    <span className="text-white">No Credit Card</span>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-lg-6">
              <div className="banner-three-thumb position-lg-absolute tw-end-0 bottom-0 max-w-58-percent">
                <img src="/assets/images/thumbs/banner-three-img.png" alt="Thumb" />
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Banner Three Section End */}

      {/* Brand Three section start */}
      <div className="brand-three pt-120">
        <div className="container">
          <div className="text-center tw-mb-16">
            <h5 className="mb-0 line-clamp-1">
              Loved by next-gen B2B <span className="text-gradient-teal">SaaS</span> compnaies.....
            </h5>
          </div>
          <div className="brand-three-slider swiper left-right-gradient gradient-width-200">
            <div className="swiper-wrapper">
              {brandLogos.map((n, i) => (
                <div className="swiper-slide d-flex align-items-center justify-content-center" key={i}>
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

      {/* Features Three section start */}
      <section className="features-three py-120 position-relative z-1">
        <img
          src="/assets/images/shapes/gradient-blue-yellow.png"
          alt="Gradient"
          className="position-absolute tw-end-0 bottom-0 z-n1"
        />
        <div className="container">
          <div className="d-flex align-items-center justify-content-between tw-gap-6 tw-mb-12">
            <div className="max-w-620-px">
              <h2 className="splitTextStyleOne text-heading text-capitalize">
                {" "}
                Task management <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">features</span>{" "}
                &amp; capabilities
              </h2>
            </div>
            <div>
              <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-490-px fw-medium">
                Sassly-CRM in the past allowing you to focus more on your business simply enjoy your newfound legal
                time to reflect leaving pen
              </p>
            </div>
          </div>

          <div className="row gy-4">
            <div className="col-lg-4 col-sm-6">
              <div className="tw-rounded-xl bg-goldenrod tw-p-7 h-100">
                <div className="tw-pt-8 tw-pb-10 tw-ps-4">
                  <div className="position-relative h-100 d-flex flex-column">
                    <span className="z-3 position-relative tw-px-11 tw-py-205 fw-bold text-white gradient-bg-six rounded-pill transform-rotate--14-deg">
                      Project management
                    </span>
                    <span className="z-2 position-relative tw-px-11 tw-py-205 fw-bold text-heading bg-yellow rounded-pill">
                      Performance tracking
                    </span>
                    <span className="z-1 position-relative tw-px-6 tw-py-205 fw-bold text-white gradient-bg-five rounded-pill transform-rotate-8-deg">
                      Seamless integrations tools
                    </span>
                  </div>
                </div>

                <div className="bg-white tw-rounded-lg common-shadow-twelve tw-py-5 tw-px-6">
                  <div className="d-flex align-items-center justify-content-between">
                    <span className="fw-bold tw-text-sm">Labels</span>
                    <div className="dropdown">
                      <button type="button" className="text-neutral-400" data-bs-toggle="dropdown" aria-expanded="false">
                        <i className="ph-fill ph-dots-three-outline"></i>
                      </button>
                      <ul className="dropdown-menu border-0 min-w-max tw-p-4 common-shadow-eight">
                        <li className="p-0">
                          <a
                            href="#"
                            className="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded"
                          >
                            Action
                          </a>
                        </li>
                        <li className="p-0">
                          <a
                            href="#"
                            className="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded"
                          >
                            Another action
                          </a>
                        </li>
                        <li className="p-0">
                          <a
                            href="#"
                            className="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded"
                          >
                            Something else here
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div className="tw-mt-7">
                    {[
                      { id: "Copywriting", label: "Copywriting" },
                      { id: "UIDesign", label: "UI Design" },
                      { id: "Illustrations", label: "Illustrations" },
                    ].map((item, i, arr) => (
                      <div
                        key={item.id}
                        className={`d-flex align-items-center justify-content-between ${
                          i < arr.length - 1 ? "tw-pb-3 tw-mb-3 border-bottom border-neutral-100" : ""
                        }`}
                      >
                        <label htmlFor={item.id} className="d-flex align-items-center tw-gap-405">
                          <span className="text-neutral-400 d-flex">
                            <i className="ph-fill ph-tag"></i>
                          </span>
                          <span className="text-heading fw-medium tw-text-sm">{item.label}</span>
                        </label>
                        <div className="form-check common-check-two">
                          <input
                            className="form-check-input me-0 float-none tw-w-6 tw-h-6 tw-rounded shadow-none bg-main-50"
                            type="checkbox"
                            id={item.id}
                          />
                        </div>
                      </div>
                    ))}
                  </div>
                </div>

                <div className="d-flex align-items-center justify-content-between tw-gap-3 tw-mt-4">
                  <div className="d-flex align-items-center tw-gap-2">
                    <div className="d-flex align-items-center">
                      <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative z-2 border border-white border-3">
                        <img
                          src="/assets/images/thumbs/client-img1.png"
                          alt="Client Image"
                          className="w-100 h-100 object-fit-cover"
                        />
                      </div>
                      <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px z-1 border border-white border-3">
                        <img
                          src="/assets/images/thumbs/client-img2.png"
                          alt="Client Image"
                          className="w-100 h-100 object-fit-cover"
                        />
                      </div>
                      <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px border border-white border-3">
                        <img
                          src="/assets/images/thumbs/client-img3.png"
                          alt="Client Image"
                          className="w-100 h-100 object-fit-cover"
                        />
                      </div>
                    </div>
                    <span className="text-neutral-600 tw-text-sm">+ 15 people</span>
                  </div>
                  <div>
                    <input type="file" id="uploadPhoto" hidden />
                    <label
                      htmlFor="uploadPhoto"
                      className="tw-w-7 tw-h-7 rounded-circle d-flex justify-content-center align-items-center border border-neutral-300 border-dashed border-2 tw-text-sm bg-white text-neutral-300 cursor-pointer hover-bg-main-600 hover-text-white hover-border-main-600"
                    >
                      <i className="ph-bold ph-plus"></i>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-lg-4 col-sm-6">
              <div className="row gy-4">
                {smallFeatures.slice(0, 2).map((f) => (
                  <div className="col-lg-12" key={f.title}>
                    <div className="group-item tw-rounded-xl border border-neutral-200 tw-pt-12 tw-pb-15 tw-px-9 bg-neutral-50 hover-gradient-bg-five group animation-item tw-duration-300 position-relative z-1">
                      <div className="d-flex align-items-center justify-content-between tw-gap-2">
                        <h5 className="group-hover-text-white tw-duration-300 max-w-194-px splitTextStyleOne">
                          {f.title}
                        </h5>
                        <span className="group-hover-item-text-invert tw-duration-300 animate__heartBeat">
                          <img src={`/assets/images/icons/${f.icon}`} alt="Icon" />
                        </span>
                      </div>
                      <p className="text-neutral-500 max-w-278-px tw-mt-10 group-hover-text-white tw-duration-300">
                        We are committed to your success. Our platform is built to drive
                      </p>
                    </div>
                  </div>
                ))}
              </div>
            </div>
            <div className="col-lg-4">
              <div className="row gy-4">
                {smallFeatures.slice(2, 4).map((f) => (
                  <div className="col-lg-12 col-sm-6" key={f.title}>
                    <div className="group-item tw-rounded-xl border border-neutral-200 tw-pt-12 tw-pb-15 tw-px-9 bg-neutral-50 hover-gradient-bg-five group animation-item tw-duration-300 position-relative z-1">
                      <div className="d-flex align-items-center justify-content-between tw-gap-2">
                        <h5 className="group-hover-text-white tw-duration-300 max-w-194-px splitTextStyleOne">
                          {f.title}
                        </h5>
                        <span className="group-hover-item-text-invert tw-duration-300 animate__heartBeat">
                          <img src={`/assets/images/icons/${f.icon}`} alt="Icon" />
                        </span>
                      </div>
                      <p className="text-neutral-500 max-w-278-px tw-mt-10 group-hover-text-white tw-duration-300">
                        We are committed to your success. Our platform is built to drive
                      </p>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Features Three section End */}

      {/* Work place team section start */}
      <section className="workplace-team py-120 gradient-bg-five position-relative z-1">
        <img
          src="/assets/images/shapes/curve-way.png"
          alt="Shape"
          className="position-absolute tw-start-0 bottom-0 z-n1 w-100"
        />
        <div className="container">
          <div className="tw-mb-8 text-center max-w-570-px mx-auto">
            <div className="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green">
              <div className="text-gradient-teal">
                Up to <span className="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
              </div>
            </div>
            <h2 className="splitTextStyleOne text-white">
              Essential for <span className="font-dm-serif fst-italic fw-normal">workplaces.</span> Great for any team.
            </h2>
            <p className="splitTextStyleOne text-neutral-300 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
              Sassly-CRM in the past allowing you to focus more on your business simply enjoy your newfound legal
              time to reflect leaving pen
            </p>
          </div>

          <div className="border border-white-01 tw-rounded-2xl p-sm-4">
            <div
              className="background-img bg-img tw-rounded-2xl bg-position-top-center"
              data-background-image="/assets/images/shapes/dashboard-screen.png"
            >
              <div className="tw-p-7 tw-pt-16 d-flex tw-gap-13 flex-lg-row flex-column">
                <div className="bg-neutral-100 tw-rounded-2xl tw-p-4 max-w-330-px flex-shrink-0">
                  <div className="tw-ps-4 tw-pt-2 tw-mb-10 tw-pb-10">
                    <Link href={routes.indexThree}>
                      <img src="/assets/images/logo/logo-two.png" alt="Logo" />
                    </Link>
                  </div>
                  <div>
                    <div className="nav flex-column gradient-bg nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      {workplaceTabs.map((tab, i) => (
                        <button
                          key={tab.id}
                          className={`nav-link animation-item tw-py-505 tw-px-9 tw-text-lg fw-bold text-heading tw-rounded-xl d-flex align-items-center tw-gap-4 ${i === 0 ? "active" : ""}`}
                          id={`${tab.id}-tab`}
                          data-bs-toggle="pill"
                          data-bs-target={`#${tab.id}`}
                          type="button"
                          role="tab"
                          aria-controls={tab.id}
                          aria-selected={i === 0 ? "true" : "false"}
                        >
                          <span className="icon active-white animate__heartBeat">
                            <img src={`/assets/images/icons/${tab.icon}`} alt="Icon" />
                          </span>
                          {tab.label}
                        </button>
                      ))}
                    </div>
                  </div>
                </div>

                <div className="flex-grow-1">
                  <div className="tab-content" id="v-pills-tabContent">
                    {workplaceTabs.map((tab, i) => (
                      <div
                        key={tab.id}
                        className={`tab-pane fade ${i === 0 ? "show active" : ""}`}
                        id={tab.id}
                        role="tabpanel"
                        aria-labelledby={`${tab.id}-tab`}
                      >
                        <div className="tw-rounded-2xl">
                          <img src="/assets/images/thumbs/workplace-tab-thumb.png" alt="Thumbs" className="w-100 h-100" />
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
      {/* Work place team section End */}

      {/* Automation Section start */}
      <section className="automation pt-120 position-relative z-1 tw-pb-94-px">
        <div className="container">
          <div className="row gy-5">
            <div className="col-lg-6">
              <div className="automation-content">
                <div className="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green">
                  <div className="text-gradient-teal">
                    Up to <span className="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                  </div>
                </div>
                <h2 className="splitTextStyleOne text-heading text-capitalize">
                  Supercharge <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">daily work</span>{" "}
                  with built-in automation
                </h2>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                  Sassly-CRM in the past allowing you to focus more on your business simply enjoy your newfound legal
                  time to reflect leaving pen
                </p>

                <div className="tw-mt-9 d-flex flex-column align-items-start tw-gap-6">
                  {automationPoints.map((p) => (
                    <div
                      className="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                      key={p}
                    >
                      <img src="/assets/images/icons/check-star.png" alt="Check Icon" className="animate__bounce" />
                      <span className="fw-bold text-heading">{p}</span>
                    </div>
                  ))}
                </div>
                <div className="d-flex align-items-center tw-gap-7 tw-mt-12">
                  <a
                    href="#"
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Start Free Trial</span>
                      <span className="icon">
                        <img src="/assets/images/icons/download-cloud-icon.png" alt="Icon" />
                      </span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div className="col-lg-6">
              <div className="automation-thumb position-lg-absolute tw-end-0 bottom-0 me-lg-5 pe-xl-5 max-w-58-percent">
                <img src="/assets/images/thumbs/automation-thumb.png" alt="Thumb" />
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Automation Section End */}

      {/* Task manager Section start */}
      <section className="task-manager pt-120">
        <div className="container">
          <div className="row gy-4 flex-wrap-reverse">
            <div className="col-lg-6">
              <div className="task-manager__thumb tw--ms-110-px">
                <img src="/assets/images/thumbs/task-manager-thumb.png" alt="Thumb" />
              </div>
            </div>
            <div className="col-lg-6 ps-lg-5">
              <div className="task-manager__content">
                <div className="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green">
                  <div className="text-gradient-teal">
                    Up to <span className="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                  </div>
                </div>
                <h2 className="splitTextStyleOne text-heading text-capitalize">
                  Powerful &amp; life-saving{" "}
                  <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">task manager</span>
                </h2>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                  Sassly-CRM in the past allowing you to focus more on your business simply enjoy your newfound legal
                  time to reflect leaving pen
                </p>

                <div className="tw-mt-13 d-flex flex-column tw-gap-12">
                  {taskManagerPoints.map((p) => (
                    <div className="d-flex align-items-start tw-gap-10 animation-item" key={p.title}>
                      <span className="tw-mt-105 animate__wobble">
                        <img src={`/assets/images/icons/${p.icon}`} alt="Icon" />
                      </span>
                      <div>
                        <h5 className="tw-mb-6">{p.title}</h5>
                        <p className="text-neutral-600 max-w-432-px">
                          In today&apos;s competitive business, the demand for efficient cost-effective IT solutions
                          has never been more critic.
                        </p>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Task manager Section End */}

      <div className="position-relative gradient-bg-80-percent z-1">
        {/* Plan Execute Section Start */}
        <section className="plan-execute py-120">
          <div className="container max-w-1570-px">
            <div className="max-w-602-px text-center mx-auto tw-mb-13">
              <div className="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green">
                <div className="text-gradient-teal">
                  Up to <span className="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                </div>
              </div>
              <h2 className="splitTextStyleOne text-heading text-capitalize">
                Plan, execute and <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">track projects</span>{" "}
                of any size
              </h2>
            </div>

            <div className="plan-execute-slider swiper">
              <div className="swiper-wrapper">
                {planExecuteItems.map((item, i) => (
                  <div className="swiper-slide" key={i}>
                    <div className="plan-execute-item">
                      <div className="tw-rounded-2xl overflow-hidden">
                        <img
                          src={`/assets/images/thumbs/${item.img}`}
                          alt="thumbnail"
                          className="w-100 h-100 object-fit-cover"
                        />
                      </div>
                      <div className="tw-mt-8 text-center">
                        <h6 className="tw-mb-205">{item.title}</h6>
                        <p className="text-neutral-600 max-w-278-px mx-auto">
                          Web hosting provides everything you idea online. From where your
                        </p>
                      </div>
                    </div>
                  </div>
                ))}
              </div>
              <div className="plan-execute-pagination pagination-style-three pb-1 d-flex align-items-center justify-content-center tw-mt-15"></div>
            </div>
          </div>
        </section>
        {/* Plan Execute Section End */}

        {/* Testimonials Three section start */}
        <section className="testimonials-three">
          <div className="container max-w-1290-px">
            <div className="bg-main-three tw-rounded-2xl overflow-hidden tw-py-16 tw-px-11 d-flex align-items-center flex-md-row flex-column tw-gap-74-px">
              <div className="max-w-400-px w-100">
                <img src="/assets/images/thumbs/testimonials-three-thumbs.png" alt="Testimonials Thumb" />
              </div>

              <div className="testimonials-three-slider swiper">
                <div className="swiper-wrapper">
                  {[0, 1].map((i) => (
                    <div className="swiper-slide" key={i}>
                      <div>
                        <span className="tw-mb-705">
                          <img src="/assets/images/icons/ratings.svg" alt="img" />
                        </span>
                        <p className="text-30-px fw-normal text-white max-w-672-px tw-leading-145">
                          Sasstech hires great people from a widely variety of backgrounds, which simply makes our
                          company stronger, and we couldn&apos;t be prouder of that. elevating your optimizing
                          Business Growth.
                        </p>
                        <span className="d-block w-100 tw-h-px tw-mt-12 tw-mb-4 bg-white-08"></span>
                        <div className="tw-px-705 tw-py-2 bg-white-06 d-inline-flex align-items-center tw-gap-6">
                          <div className="tw-w-17 tw-h-17 rounded-circle overflow-hidden">
                            <img src="/assets/images/thumbs/client-img.png" alt="Client Thumb" />
                          </div>
                          <div>
                            <h6 className="text-white fw-medium tw-mb-1">James anderson</h6>
                            <div className="text-white fw-medium tw-text-base">
                              <strong className="text-spring-green">Ceo</strong> and Founder
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </section>
        {/* Testimonials Three section End */}
      </div>

      {/* Distraction section start */}
      <section className="distraction">
        <div className="container max-w-1290-px">
          <div className="position-relative distraction__inner">
            <div className="max-w-602-px w-100 text-center mx-auto position-absolute z-1 tw-start-50 translate-middle-x top-0 mt-5 pt-lg-5 pt-4">
              <h2 className="splitTextStyleOne text-heading text-capitalize">
                Avoid <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">distractions</span> with
                app integrations
              </h2>
            </div>

            <div>
              <img src="/assets/images/shapes/net-shape.png" alt="Net Shape" />
            </div>
            <div>
              {distractionIcons.map((n, i) => (
                <div
                  className={`distraction-icon ${["one", "two", "three", "four", "five", "six", "seven"][i]} position-absolute z-1`}
                  key={n}
                >
                  <img src={`/assets/images/thumbs/distraction-icon${n}.png`} alt="Icon Image" />
                </div>
              ))}
            </div>

            <div className="d-flex align-items-center justify-content-center tw-gap-7 position-absolute z-1 tw-start-50 translate-middle-x bottom-0 mb-2 w-100">
              <a
                href="#"
                className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                data-block="button"
              >
                <span className="button__flair"></span>
                <div className="d-flex align-items-center tw-gap-2 z-1">
                  <span className="button__label">Start Free Trial</span>
                  <span className="icon">
                    <img src="/assets/images/icons/download-cloud-icon.png" alt="Icon" />
                  </span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      {/* Distraction section End */}

      {/* Pricing Plan three start */}
      <section className="pricing-plan-three py-120">
        <div className="container">
          <div className="max-w-602-px text-center mx-auto tw-mb-13">
            <div className="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green">
              <div className="text-gradient-teal">
                Up to <span className="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
              </div>
            </div>
            <h2 className="splitTextStyleOne text-heading text-capitalize">
              flexible pricing <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">plan</span> that
              include business
            </h2>
          </div>

          <div className="row gy-4">
            {pricingPlansThree.map((plan) => (
              <div className="col-xl-4 col-sm-6" key={plan.name}>
                <div className="position-relative bg-neutral-100 tw-px-7 tw-py-16 bg-white hover-border-main-600">
                  <div>
                    <div className="tw-ps-205">
                      <h5 className="tw-mb-1">{plan.name}</h5>
                      <p className="text-neutral-500">Customized anything in anytime</p>
                      <span className="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                      <div className="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10">
                        <h2 className="mb-0">
                          {plan.price}
                          <span className="tw-text-xl fw-medium">/Yearly</span>
                        </h2>
                      </div>
                    </div>
                    <Link
                      href={routes.login}
                      className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                    >
                      <span className="button__flair"></span>
                      <div className="d-flex align-items-center tw-gap-2 z-1">
                        <span className="button__label">Start Free Trial</span>
                      </div>
                    </Link>
                    <span className="text-heading tw-mt-3 text-center d-block fw-medium">Renews at $9.88/month</span>

                    <div className="tw-ps-205">
                      <div className="d-flex flex-column tw-gap-5 tw-mt-10">
                        {pricingFeaturesThree.map((f) => (
                          <div className="d-flex align-items-center tw-gap-305" key={f}>
                            <span className="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                              <i className="text-gradient-teal ph-bold ph-check"></i>
                            </span>
                            <span className="text-heading fw-semibold tw-text-base">{f}</span>
                          </div>
                        ))}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
      {/* Pricing Plan three End */}

      {/* Task Management Section Start */}
      <section className="task-management bg-pink-more-light-half drag-rotate-element-section">
        <div className="container">
          <div className="text-end tw--mb-40-px position-relative z-2">
            <img src="/assets/images/thumbs/laptop-man.png" alt="Image" className="tw-me-84-px" />
          </div>

          <div className="bg-green-deep tw-rounded-3xl tw-pt-100-px position-relative z-1">
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

              <div className="d-block">
                <a
                  href="#"
                  className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold tw-mt-7"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <div className="d-flex align-items-center tw-gap-2 z-1">
                    <span className="button__label">Download for free</span>
                  </div>
                </a>
              </div>
            </div>
            <div className="tw-pt-8 text-center">
              <div className="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                {dragTags.map((tag, i) => (
                  <span
                    key={i}
                    className={`drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold rounded-pill ${
                      i % 3 === 0 ? "text-white gradient-bg-six" : i % 2 === 0 ? "text-heading gradient-bg-six" : "text-heading bg-yellow"
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
