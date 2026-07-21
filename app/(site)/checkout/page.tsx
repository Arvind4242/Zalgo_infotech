import PageShell from "@/components/PageShell";

export const metadata = { title: "Checkout - Zalgo Infotech", robots: { index: false, follow: false } };

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

export default function CheckoutPage() {
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
                <h1 className="mb-0 splitTextStyleOne text-capitalize">Checkout</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Breadcrumb End Here */}

      {/* Checkout Page Start */}
      <section className="py-120">
        <div className="container">
          <div className="row gy-5">
            <div className="col-xxl-8 col-lg-7">
              <div>
                <h6 className="tw-mb-8">Delivery Information</h6>
                <form action="#" className="form-submit">
                  <div className="row gy-4">
                    <div className="col-sm-6">
                      <div className="position-relative">
                        <input
                          type="text"
                          className="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                          placeholder="First Name"
                        />
                        <span className="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                          <i className="ph-fill ph-user"></i>
                        </span>
                      </div>
                    </div>
                    <div className="col-sm-6">
                      <div className="position-relative">
                        <input
                          type="text"
                          className="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                          placeholder="Last Name"
                        />
                        <span className="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                          <i className="ph-fill ph-user"></i>
                        </span>
                      </div>
                    </div>
                    <div className="col-sm-6">
                      <div className="position-relative">
                        <input
                          type="text"
                          className="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                          placeholder="Address here"
                        />
                        <span className="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                          <i className="ph-fill ph-map-pin"></i>
                        </span>
                      </div>
                    </div>
                    <div className="col-sm-6">
                      <div className="position-relative">
                        <select className="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none">
                          <option value="current City">Current City</option>
                          <option value="Old City">Old City</option>
                        </select>
                        <span className="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                          <i className="ph-bold ph-caret-down"></i>
                        </span>
                      </div>
                    </div>
                    <div className="col-sm-12">
                      <div className="position-relative">
                        <input
                          type="text"
                          className="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                          placeholder="House Number & street number"
                        />
                        <span className="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                          <i className="ph-bold ph-house"></i>
                        </span>
                      </div>
                    </div>
                    <div className="col-sm-12">
                      <div className="position-relative">
                        <input
                          type="text"
                          className="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                          placeholder="Apartment, suit, Unit etc"
                        />
                        <span className="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                          <i className="ph-fill ph-map-pin"></i>
                        </span>
                      </div>
                    </div>
                    <div className="col-sm-6">
                      <div className="position-relative">
                        <input
                          type="text"
                          className="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                          placeholder="Zip Code"
                        />
                        <span className="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                          <i className="ph-fill ph-map-pin-simple"></i>
                        </span>
                      </div>
                    </div>

                    <div className="col-sm-6">
                      <div className="position-relative">
                        <input
                          type="text"
                          className="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none"
                          placeholder="Your Phone"
                        />
                        <span className="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-50 translate-middle-y tw-end-0 tw-me-6">
                          <i className="ph-fill ph-phone"></i>
                        </span>
                      </div>
                    </div>
                    <div className="col-sm-12">
                      <div className="position-relative">
                        <textarea
                          className="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-neutral-500 fw-medium tw-px-6 tw-py-4 tw-pe-15 tw-rounded-lg shadow-none tw-min-h-210-px"
                          placeholder="Write Something...."
                        ></textarea>
                        <span className="tw-text-xl text-main-600 d-flex tw-leading-none position-absolute top-0 tw-mt-6 tw-end-0 tw-me-6">
                          <i className="ph-fill ph-user"></i>
                        </span>
                      </div>
                    </div>
                    <div className="col-sm-12">
                      <button
                        type="submit"
                        className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-px-4 tw-py-505 fw-medium btn-main hover-style-one w-100 tw-rounded-lg"
                        data-block="button"
                      >
                        <span className="button__flair"></span>
                        <span className="button__label">Save All Information</span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div className="col-xxl-4 col-lg-5">
              <div>
                <h5 className="text-center tw-text-2xl tw-mb-10">Order Summery</h5>
                <div className="bg-neutral-100 tw-py-16 tw-px-11 tw-rounded-lg">
                  <div className="d-flex flex-column tw-gap-7">
                    <div className="tw-rounded-md tw-py-3 tw-px-6 text-neutral-600 d-flex align-items-center justify-content-between bg-white">
                      <span className="fw-semibold tw-text-base text-capitalize">Subtotal</span>
                      <span className="fw-bold tw-text-base text-capitalize text-heading">$345.00</span>
                    </div>
                    <div className="tw-rounded-md tw-py-3 tw-px-6 text-neutral-600 d-flex align-items-center justify-content-between bg-white">
                      <span className="fw-semibold tw-text-base text-capitalize">Shipping Fee</span>
                      <span className="fw-bold tw-text-base text-capitalize text-heading">$34.00</span>
                    </div>
                    <div>
                      <form action="#" className="form-submit position-relative">
                        <input
                          type="text"
                          className="form-control tw-rounded-md tw-py-4 tw-px-6 text-neutral-600 bg-white shadow-none border border-transparent focus-border-main-600 placeholder-neutral-600 fw-bold tw-pe-140-px"
                          placeholder="Enter voucher Code"
                        />
                        <button
                          type="submit"
                          className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-px-6 tw-py-405 fw-medium btn-main hover-style-one position-absolute top-0 tw-end-0 h-100"
                          data-block="button"
                        >
                          <span className="button__flair"></span>
                          <span className="button__label">Apply code</span>
                        </button>
                      </form>
                    </div>
                  </div>
                  <div className="tw-my-8">
                    <div className="d-flex align-items-center justify-content-between">
                      <span className="fw-semibold tw-text-xl text-capitalize">Total</span>
                      <span className="fw-bold tw-text-base text-capitalize text-heading">$345.00</span>
                    </div>
                  </div>
                  <div>
                    <div className="bg-white tw-rounded-xl tw-p-705 d-flex flex-column tw-gap-305">
                      <div className="form-check common-check common-radio tw-gap-3 mb-0">
                        <input
                          className="form-check-input bg-neutral-200"
                          name="paymentOption"
                          type="radio"
                          id="bankTransfer"
                        />
                        <label className="form-check-label fw-medium text-heading" htmlFor="bankTransfer">
                          Direct Bank transfer
                        </label>
                      </div>
                      <div className="form-check common-check common-radio tw-gap-3 mb-0">
                        <input
                          className="form-check-input bg-neutral-200"
                          name="paymentOption"
                          type="radio"
                          id="CheckPayments"
                        />
                        <label className="form-check-label fw-medium text-heading" htmlFor="CheckPayments">
                          Check Payments
                        </label>
                      </div>
                      <div className="form-check common-check common-radio tw-gap-3 mb-0">
                        <input
                          className="form-check-input bg-neutral-200"
                          name="paymentOption"
                          type="radio"
                          id="CashOnDelivery"
                        />
                        <label className="form-check-label fw-medium text-heading" htmlFor="CashOnDelivery">
                          Cash On Delivery
                        </label>
                      </div>
                    </div>
                  </div>
                  <div className="tw-mt-10">
                    <a
                      href="javascript:void(0)"
                      className="hover--translate-y-1 bg-crm active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 px-xxl-5 px-xl-4 px-3 tw-py-405 fw-medium btn-main-two hover-style-two w-100"
                      data-block="button"
                    >
                      <span className="button__flair"></span>
                      <span className="button__label">Proceed to pay</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Checkout Page End */}

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
                {tags.map((tag, i) => (
                  <span
                    key={i}
                    className={`drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold rounded-pill ${
                      i % 4 === 0
                        ? "text-white gradient-bg-six"
                        : i % 4 === 1
                        ? "text-heading bg-paste"
                        : i % 4 === 2
                        ? "text-heading gradient-bg-six"
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
