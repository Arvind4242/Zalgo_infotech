import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";

export const metadata = { title: "Login - Zalgo Infotech", robots: { index: false, follow: false } };

export default function LoginPage() {
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
                <h1 className="mb-0 splitTextStyleOne text-capitalize">Sign In</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Breadcrumb End Here */}

      {/* Account Section start */}
      <section className="account py-120">
        <div className="container">
          <div className="max-w-514-px bg-white common-shadow-twentyOne tw-rounded-2xl tw-p-60-px mx-auto">
            <h4 className="tw-mb-8 text-capitalize fst-italic fw-bold text-center max-w-250-px mx-auto">
              Start Your Journey with us
            </h4>
            <form action="#" className="form-submit d-flex flex-column tw-gap-6">
              <div>
                <label htmlFor="name" className="fw-semibold text-heading d-block tw-mb-105">
                  Enter your name
                </label>
                <input
                  type="text"
                  className="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-heading fw-medium tw-px-6 tw-py-4 tw-rounded-lg shadow-none"
                  id="name"
                  placeholder="Enter your name"
                />
              </div>
              <div>
                <label htmlFor="createPassword" className="fw-medium text-base text-neutral-800 tw-mb-3">
                  Create password
                </label>
                <div className="position-relative">
                  <input
                    type="text"
                    className="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-heading fw-medium tw-px-6 tw-py-4 tw-rounded-lg shadow-none"
                    id="createPassword"
                    placeholder="Enter your name"
                  />
                  <span
                    className="toggle-password position-absolute top-50 tw-end-0 tw-me-4 tw-text-xl text-neutral-600 tw--translate-y-50 ph-bold ph-eye-slash"
                    id="#createPassword"
                  ></span>
                </div>
              </div>
              <div className="d-flex align-items-center justify-content-between">
                <div className="common-check d-flex align-items-center tw-gap-2 mb-0">
                  <input className="form-check-input" type="checkbox" id="remember" />
                  <div className="form-check-label text-neutral-600 fw-medium">
                    <label htmlFor="remember">Remember me</label>
                  </div>
                </div>
                <a
                  href="javascript:void(0)"
                  className="hover-underline text-danger fw-semibold hover--translate-y-1 active-scale-09"
                >
                  Forgot Password?
                </a>
              </div>
              <div>
                <button
                  type="submit"
                  className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-px-4 tw-py-505 fw-medium btn-main hover-style-one w-100 rounded-pill"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">Login</span>
                </button>
              </div>
            </form>
            <div className="form-check-label text-neutral-600 fw-semibold tw-mt-405 text-center">
              <span>Are you new here?</span>{" "}
              <Link
                href={routes.contact}
                className="text-decoration-underline text-neutral-600 fw-semibold hover--translate-y-1 active-scale-09 hover-text-main-600"
              >
                Create an account
              </Link>
            </div>
          </div>
        </div>
      </section>
      {/* Account Section End */}

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
