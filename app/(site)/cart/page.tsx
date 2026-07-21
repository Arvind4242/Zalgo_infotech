import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";

export const metadata = { title: "Cart - Zalgo Infotech", robots: { index: false, follow: false } };

const cartItems = [
  { img: "cart-img1.png", name: "Apple Watch", price: "$12.00", subtotal: "$60.00" },
  { img: "cart-img2.png", name: "Sumsang Hand Set", price: "$34.00", subtotal: "$68.00" },
  { img: "cart-img3.png", name: "Tata Brand Car", price: "$345.00", subtotal: "$345.00" },
  { img: "cart-img4.png", name: "Sumsang Hand Set", price: "$34.00", subtotal: "$68.00" },
];

const shippingRows = [
  { left: "Bangladesh", right: "country" },
  { left: "Mirpur Dohs", right: "Dhaka-1200" },
  { left: "Postal Code", right: "3215" },
  { left: "Bangladesh", right: "country" },
];

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

export default function CartPage() {
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
                <h1 className="mb-0 splitTextStyleOne text-capitalize">shop Details</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Breadcrumb End Here */}

      {/* Cart Page Start */}
      <section className="bg-white py-120">
        <div className="container">
          <div className="row">
            <div className="col-xxl-11">
              <div className="row gy-4">
                <div className="col-lg-8 pe-lg-5">
                  <div className="table-responsive">
                    <table className="table border border-neutral-200 min-w-max">
                      <thead>
                        <tr>
                          <th
                            scope="col"
                            className="fw-semibold tw-text-base important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                          >
                            Product
                          </th>
                          <th
                            scope="col"
                            className="fw-semibold tw-text-base important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                          >
                            Price
                          </th>
                          <th
                            scope="col"
                            className="fw-semibold tw-text-base important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                          >
                            Quantity
                          </th>
                          <th
                            scope="col"
                            className="fw-semibold tw-text-base important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200"
                          >
                            Subtotal
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        {cartItems.map((item, i) => (
                          <tr className="delete-item" key={i}>
                            <td className="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200">
                              <div className="d-flex align-items-center tw-gap-4 group-item">
                                <div className="position-relative max-w-74-px tw-h-84-px w-100">
                                  <Link
                                    href={routes.shopDetails}
                                    className="d-flex justify-content-center align-items-center position-relative d-block"
                                  >
                                    <img
                                      src={`/assets/images/thumbs/${item.img}`}
                                      alt="Thumb"
                                      className="group-hover-item-scale-12 tw-duration-300"
                                    />
                                  </Link>
                                  <button
                                    type="button"
                                    className="text-danger tw-text-xl hover-scale-14 position-absolute top-0 tw-end-0 tw-duration-300 tw--mt-8-px tw--me-8-px delete-button"
                                  >
                                    <i className="ph-fill ph-x-circle"></i>
                                  </button>
                                </div>
                                <Link
                                  href={routes.shopDetails}
                                  className="fw-bold tw-text-lg text-heading hover-text-main-600 line-clamp-1"
                                >
                                  {item.name}
                                </Link>
                              </div>
                            </td>
                            <td className="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200">
                              <span className="fw-bold tw-text-lg text-heading">{item.price}</span>
                            </td>
                            <td className="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200">
                              <div className="d-flex">
                                <button
                                  type="button"
                                  className="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-w-11 tw-h-11 border border-neutral-200 tw-leading-none decrement-btn"
                                >
                                  <i className="ph-bold ph-minus"></i>
                                </button>
                                <input
                                  type="text"
                                  className="border border-neutral-200 bg-neutral-200 tw-w-11 tw-h-11 text-center focus-outline-0 text-heading fw-bold tw-w-11 input-value"
                                  defaultValue={0}
                                />
                                <button
                                  type="button"
                                  className="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-w-11 tw-h-11 border border-neutral-200 tw-leading-none increment-btn"
                                >
                                  <i className="ph-bold ph-plus"></i>
                                </button>
                              </div>
                            </td>
                            <td className="important-tw-py-5 important-tw-px-9 border-bottom border-neutral-200">
                              <span className="fw-bold tw-text-lg text-heading">{item.subtotal}</span>
                            </td>
                          </tr>
                        ))}
                      </tbody>
                      <tfoot>
                        <tr>
                          <td
                            colSpan={4}
                            className="important-tw-py-5 important-tw-px-9 border-top border-neutral-200 text-center"
                          >
                            <div className="d-flex align-items-center justify-content-between tw-gap-4 flex-wrap">
                              <button
                                type="button"
                                className="tw-py-3 tw-px-6 rounded-pill border border-neutral-200 text-neutral-600 fw-semibold tw-text-sm text-capitalize hover-bg-main-600 hover-text-white hover-border-main-600 tw-duration-300"
                              >
                                Return to Shop
                              </button>
                              <button
                                type="button"
                                className="tw-py-3 tw-px-6 rounded-pill border border-neutral-200 text-neutral-600 fw-semibold tw-text-sm text-capitalize hover-bg-main-600 hover-text-white hover-border-main-600 tw-duration-300"
                              >
                                Update Cart
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td
                            colSpan={4}
                            className="important-tw-py-5 important-tw-px-9 border-top border-neutral-200 text-center"
                          >
                            <div className="d-flex align-items-center tw-gap-10">
                              <span className="fw-bold tw-text-lg text-heading line-clamp-1">Coupon Code</span>
                              <form action="#" className="d-flex tw-gap-5 form-submit flex-grow-1">
                                <div className="position-relative flex-grow-1">
                                  <input
                                    type="text"
                                    className="tw-h-14 tw-rounded-lg bg-white tw-ps-12 border border-neutral-200 focus-border-main-600 text-heading focus-outline-0 w-100 tw-pe-6 common-shadow-twenty"
                                    placeholder="Email Address"
                                  />
                                  <span className="text-heading tw-text-lg position-absolute top-50 tw-start-0 tw--translate-y-50 tw-ms-5 d-flex">
                                    <i className="ph ph-envelope-simple"></i>
                                  </span>
                                </div>
                                <button
                                  type="submit"
                                  className="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-2 group active--translate-y-2 fw-semibold flex-shrink-0 hover--translate-y-1 active--translate-y-scale-9 tw-px-10"
                                  data-block="button"
                                >
                                  <span className="button__flair"></span>
                                  <span className="button__label">Apply Coupon</span>
                                </button>
                              </form>
                            </div>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div className="col-lg-4">
                  <div className="border border-neutral-200 tw-p-5">
                    <h5 className="text-center tw-text-lg tw-mb-10">Calculate Shipping</h5>
                    <div className="d-flex flex-column tw-gap-4">
                      {shippingRows.map((row, i) => (
                        <div
                          className="border tw-rounded tw-py-3 tw-px-5 text-heading d-flex align-items-center justify-content-between"
                          key={i}
                        >
                          <span className="fw-semibold tw-text-base text-capitalize">{row.left}</span>
                          <span className="fw-medium tw-text-base text-capitalize text-neutral-600">
                            {row.right}
                          </span>
                        </div>
                      ))}
                    </div>
                    <div className="tw-mt-6">
                      <Link
                        href={routes.checkout}
                        className="tw-rounded-md tw-py-3 tw-px-6 bg-neutral-200 text-heading fw-bold w-100 text-center hover-bg-main-600 hover-text-white active-scale-094 tw-duration-200"
                      >
                        Calculate Shipping
                      </Link>
                    </div>
                  </div>
                  <div className="border border-neutral-200 tw-p-5 tw-mt-10">
                    <h5 className="text-center tw-text-lg tw-mb-10">Total Cart</h5>
                    <div className="d-flex flex-column tw-gap-4">
                      <div className="border tw-rounded tw-py-3 tw-px-5 text-heading d-flex align-items-center justify-content-between">
                        <span className="fw-semibold tw-text-base text-uppercase">Subtotal</span>
                        <span className="fw-medium tw-text-base text-capitalize text-heading">$345.00</span>
                      </div>
                      <div className="border tw-rounded tw-py-3 tw-px-5 text-heading d-flex align-items-center justify-content-between">
                        <span className="fw-semibold tw-text-base text-uppercase">Total</span>
                        <span className="fw-semibold tw-text-base text-capitalize text-heading">$450.00</span>
                      </div>
                    </div>
                    <div className="tw-mt-6">
                      <Link
                        href={routes.checkout}
                        className="hover--translate-y-1 bg-crm active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 px-xxl-5 px-xl-4 px-3 tw-py-405 fw-medium btn-main-two hover-style-two w-100"
                        data-block="button"
                      >
                        <span className="button__flair"></span>
                        <span className="button__label">Proceed to checkout</span>
                      </Link>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Cart Page End */}

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
