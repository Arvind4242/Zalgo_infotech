import PageShell from "@/components/PageShell";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Booking, Payment & Privacy Policy",
  description:
    "Review Zalgo Infotech's full policy covering bookings, prices, payments, refunds, cancellations, and how we handle your personal information.",
  keywords: [
    "Zalgo Infotech policy",
    "booking and payment policy",
    "refund policy",
    "cancellation policy",
    "privacy and information policy",
  ],
  path: "/policy-privacy",
});

const tabs = [
  { id: "home", label: "Bookings & Prices" },
  { id: "profile", label: "Payments, Refunds & Credits" },
  { id: "disabled", label: "Changes" },
  { id: "messages", label: "Cancellations" },
  { id: "settings", label: "Included Services" },
  { id: "TripOperation", label: "Trip Operation" },
  { id: "Participation", label: "Participation" },
  { id: "Passports", label: "Passports, Visas & Entry Require" },
  { id: "Information", label: "Your Information & Privacy" },
  { id: "Miscellanea", label: "Miscellanea" },
];

// NOTE: In the original Laravel source, every tab pane renders this exact same
// block of placeholder policy copy (verified by reading the full source file).
// It is factored into a single component here to avoid duplicating identical
// markup ten times, while preserving the content faithfully.
function TabContent() {
  return (
    <div>
      {/* Content Start */}
      <div>
        <h3 className="tw-mb-8">1.Cancellation and Changes</h3>
        <h6 className="tw-mb-5">Description:</h6>
        <p className="text-neutral-500 tw-leading-212 tw-mb-6">
          a&#41; Occasionally it may be deemed necessary to make changes to your holiday and the
          Company reserves the right to do so at any time, and you will be notified of any changes
          at the earliest possible opportunity. If a major change to your tour is necessary,
          providing it does not arise from circumstances beyond the Company&rsquo;s control, you
          may choose (i) to accept the change of arrangements (ii) to purchase another holiday from
          us or (iii) to cancel your holiday. Compensation may be payable in cases of major change
          as detailed below.
        </p>
        <p className="text-neutral-500 tw-leading-212 tw-mb-6">
          b&#41; No compensation will be payable for minor changes. Minor changes include minimal
          changes to departure and arrival times, changes to the type of aircraft used and
          restaurant and accommodation changes to a comparable or superior standard.
        </p>
        <p className="text-neutral-500 tw-leading-212 tw-mb-6">
          a&#41; Compensation will not be paid for changes or cancellations caused by Acts of God
          (Force Majeure), war, threat of war, riot, civil strike, industrial dispute, terrorist
          activity, natural or man-made disaster, fire, technical problems to transport, closure or
          congestion of airports, strikes or other industrial action, adverse weather conditions or
          any other event beyond the Company&rsquo;s control. It is essential that you take out
          adequate travel insurance.
        </p>
      </div>
      <div className="tw-mt-9">
        <h3 className="tw-mb-8">1.Cancellation by You</h3>
        <h6 className="tw-mb-5">Description:</h6>
        <p className="text-neutral-500 tw-leading-212 tw-mb-6">
          a&#41; Occasionally it may be deemed necessary to make changes to your holiday and the
          Company reserves the right to do so at any time, and you will be notified of any changes
          at the earliest possible opportunity. If a major change to your tour is necessary,
          providing it does not arise from circumstances beyond the Company&rsquo;s control, you
          may choose (i) to accept the change of arrangements (ii) to purchase another holiday from
          us or (iii) to cancel your holiday. Compensation may be payable in cases of major change
          as detailed below.
        </p>
        <div className="tw-my-4">
          <p className="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3">
            <span className="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"></span>
            <span>30 days or more 50% of Deposit</span>
          </p>
          <p className="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3">
            <span className="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"></span>
            <span>15 - 30 days 100% of Deposit</span>
          </p>
          <p className="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3">
            <span className="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"></span>
            <span>8 - 15 days 80% of Tour Cost</span>
          </p>
          <p className="fw-bold text-neutral-600 tw-text-lg tw-mb-4 d-flex align-items-center tw-gap-3">
            <span className="tw-w-105 tw-h-105 bg-neutral-600 rounded-circle"></span>
            <span>1 - 7 days 100% of Tour Cost</span>
          </p>
        </div>
        <p className="text-neutral-500 tw-leading-212 tw-mb-6">
          b&#41; No compensation will be payable for minor changes. Minor changes include minimal
          changes to departure and arrival times, changes to the type of aircraft used and
          restaurant and accommodation changes to a comparable or superior standard.
        </p>
      </div>
      {/* Content End */}
    </div>
  );
}

export default function PolicyPrivacyPage() {
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
                <h1 className="mb-0 splitTextStyleOne text-capitalize">
                  Zalgo Infotech is here to help you launch
                </h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Breadcrumb End Here */}

      {/* Privacy Policy Start */}
      <section className="privacy-policy py-120">
        <div className="container">
          <div className="row">
            <div className="col-xxl-11">
              <div className="row gy-5">
                <div className="col-md-4">
                  <div className="tw-py-13 tw-px-7 bg-neutral-100">
                    <div
                      className="nav flex-column nav-pills active-bg-white-border-primary"
                      id="v-pills-tab"
                      role="tablist"
                      aria-orientation="vertical"
                    >
                      {tabs.map((tab, i) => (
                        <button
                          key={tab.id}
                          className={`nav-link tw-px-8 tw-py-5 text-neutral-500 fw-semibold text-start w-100 tw-rounded-md${
                            i === 0 ? " active" : ""
                          }`}
                          id={`v-pills-${tab.id}-tab`}
                          data-bs-toggle="pill"
                          data-bs-target={`#v-pills-${tab.id}`}
                          type="button"
                          role="tab"
                          aria-controls={`v-pills-${tab.id}`}
                          aria-selected={i === 0}
                        >
                          {tab.label}
                        </button>
                      ))}
                    </div>
                  </div>
                </div>
                <div className="col-md-8">
                  <div className="tab-content ps-lg-5" id="v-pills-tabContent">
                    {tabs.map((tab, i) => (
                      <div
                        key={tab.id}
                        className={`tab-pane fade${i === 0 ? " show active" : ""}`}
                        id={`v-pills-${tab.id}`}
                        role="tabpanel"
                        aria-labelledby={`v-pills-${tab.id}-tab`}
                        tabIndex={0}
                      >
                        <TabContent />
                      </div>
                    ))}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Privacy Policy End */}

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
              <div
                className="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13"
                data-aos-anchor-placement="top-bottom"
              >
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
