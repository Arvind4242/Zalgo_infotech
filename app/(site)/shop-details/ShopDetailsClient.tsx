"use client";

import { useState } from "react";
import Link from "next/link";
import { routes } from "@/lib/routes";
import PageShell from "@/components/PageShell";

const thumbImages = [1, 2, 3, 4, 5].map((n) => `/assets/images/thumbs/shop-details-thumb${n}.png`);
const smallThumbImages = [1, 2, 3, 4, 5].map(
  (n) => `/assets/images/thumbs/shop-details-small-thumb${n}.png`
);

const colorSwatches = ["product-bg-1", "product-bg-2", "product-bg-3", "product-bg-4", "product-bg-5"];
const sizes = ["XL", "XXL", "M", "L", "4XL"];

const moreDetailsColOne = [
  "Lorem Ipsum is simply dummy text of the printing and typesetting industry",
  "Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy",
  "type here your detail one by one li more add",
  "has been the industry’s standard dummy text ever since. Lorem Ips",
  "has been the industry’s standard dummy text ever since.",
];

const moreDetailsColTwo = [
  "Lorem Ipsum generators on the tend to repeat.",
  "If you are going to use a passage.",
  "Lorem Ipsum generators on the tend to repeat.",
  "Lorem Ipsum generators on the tend to repeat.",
  "If you are going to use a passage.",
];

function TabBody() {
  return (
    <div>
      <div>
        <h4 className="tw-mb-3">Experience is over the world visit</h4>
        <p className="text-neutral-600 tw-text-lg">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum
          Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nu vitae ultricies
          erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien.
          Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed
          nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus
        </p>
      </div>
      <div className="tw-mt-17">
        <h5 className="tw-mb-7">More Details :</h5>
        <div className="row gy-4">
          <div className="col-sm-6">
            <div className="d-flex flex-column tw-gap-8">
              {moreDetailsColOne.map((text, i) => (
                <div className="d-flex align-items-center tw-gap-4" key={i}>
                  <span className="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg">
                    <i className="ph-bold ph-check"></i>
                  </span>
                  <p className="fw-medium">{text}</p>
                </div>
              ))}
            </div>
          </div>
          <div className="col-sm-6">
            <div className="d-flex flex-column tw-gap-8">
              {moreDetailsColTwo.map((text, i) => (
                <div className="d-flex align-items-center tw-gap-4" key={i}>
                  <span className="tw-w-7 tw-h-7 bg-white common-shadow-eight rounded-circle text-main-600 d-flex justify-content-center align-items-center tw-text-lg">
                    <i className="ph-bold ph-check"></i>
                  </span>
                  <p className="fw-medium">{text}</p>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

const featuredProducts = [
  { img: "product-img1.png", title: "Smart wireless headphone" },
  { img: "product-img2.png", title: "Go pro hero action camera" },
  { img: "product-img3.png", title: "Colorful apple Ipad" },
  { img: "product-img4.png", title: "Humidifiler white grow" },
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

export default function ShopDetailsClient() {
  const [qty, setQty] = useState(0);

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

      {/* Shop Details Start */}
      <section className="bg-white py-120">
        <div className="container">
          <div className="row">
            <div className="col-xl-11">
              <div className="row gy-5">
                <div className="col-lg-6 pe-xxl-5">
                  <div className="swiper">
                    <div className="swiper-wrapper">
                      {thumbImages.map((src, i) => (
                        <div className="swiper-slide" key={i}>
                          <div className="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden">
                            <img src={src} alt="Thumb" />
                          </div>
                        </div>
                      ))}
                    </div>
                  </div>

                  <div className="swiper shop-small-thumbs tw-mt-8">
                    <div className="swiper-wrapper">
                      {smallThumbImages.map((src, i) => (
                        <div className="swiper-slide h-100" key={i}>
                          <div className="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden tw-h-92-px">
                            <img src={src} alt="Small Thumb" />
                          </div>
                        </div>
                      ))}
                    </div>
                  </div>
                </div>

                <div className="col-lg-6">
                  <div className="ps-lg-5">
                    <div className="d-flex align-items-center tw-gap-5 tw-mb-3">
                      <span className="bg-danger text-white tw-px-2 tw-py-05 tw-text-sm fw-bold tw-rounded">
                        -5%
                      </span>
                      <div className="d-flex align-items-center tw-gap-2">
                        <ul className="d-flex align-items-center tw-gap-1">
                          {[0, 1, 2, 3].map((i) => (
                            <li className="text-star text-main-600 tw-text-base d-flex" key={i}>
                              <i className="ph-fill ph-star"></i>
                            </li>
                          ))}
                          <li className="text-star text-neutral-300 tw-text-base d-flex">
                            <i className="ph-fill ph-star"></i>
                          </li>
                        </ul>
                        <span className="text-neutral-600 fw-medium">( 2 Reviews )</span>
                      </div>
                    </div>
                    <h3 className="tw-mb-4 text-44-px splitTextStyleOne">Smart Wirless Headphone</h3>
                    <p className="text-neutral-600 splitTextStyleOne fw-medium">
                      There are many variations of passages of Lorem Ipsum available, but majority
                      have suffered teration in some form, by injected humour, or randomised
                    </p>
                    <div className="tw-mt-705">
                      <div className="d-flex align-items-center tw-gap-7 flex-wrap">
                        <h4 className="tw-text-3xl">$600.00</h4>
                        <h6 className="text-main-600">$,900.00</h6>
                      </div>
                      <div className="tw-my-8 d-flex align-items-center tw-gap-6 flex-wrap">
                        <span className="fw-bold tw-text-base">Color :</span>
                        <div className="d-flex align-items-center tw-gap-3">
                          {colorSwatches.map((cls, i) => (
                            <button
                              type="button"
                              key={i}
                              className="color-picker border border-neutral-300 tw-w-5 tw-h-5 rounded-circle d-flex justify-content-center align-items-center"
                            >
                              <span
                                className={`color-picker__color tw-w-3 tw-h-3 rounded-circle tw-duration-300 ${cls}`}
                              ></span>
                            </button>
                          ))}
                        </div>
                      </div>
                      <div className="tw-my-8 d-flex align-items-center tw-gap-6 flex-wrap">
                        <span className="fw-bold tw-text-base">Size :</span>
                        <div className="d-flex align-items-center tw-gap-3">
                          {sizes.map((s) => (
                            <button
                              type="button"
                              key={s}
                              className="size-btn border border-neutral-300 tw-py-05 tw-px-205 tw-rounded text-heading fw-semibold"
                            >
                              {s}
                            </button>
                          ))}
                        </div>
                      </div>
                      <div className="tw-my-8 d-flex align-items-center tw-gap-6 flex-wrap">
                        <span className="fw-bold tw-text-base">Quantity:</span>
                        <div className="d-flex align-items-center tw-gap-3">
                          <div className="border border-neutral-400 tw-h-15 tw-rounded-md d-flex align-items-center py-4 tw-px-5 tw-gap-6">
                            <button
                              type="button"
                              className="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-leading-none decrement-btn"
                              onClick={() => setQty((q) => Math.max(0, q - 1))}
                            >
                              <i className="ph-bold ph-minus"></i>
                            </button>
                            <input
                              type="text"
                              className="border-0 text-center focus-outline-0 text-heading fw-bold tw-w-11 input-value"
                              value={qty}
                              readOnly
                            />
                            <button
                              type="button"
                              className="text-heading hover-text-main-600 active-scale-09 tw-text-xl tw-leading-none increment-btn"
                              onClick={() => setQty((q) => q + 1)}
                            >
                              <i className="ph-bold ph-plus"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div className="tw-my-8 d-flex align-items-center tw-gap-6 flex-wrap">
                        <Link
                          href={routes.cart}
                          className="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-2 group active--translate-y-2 fw-medium flex-shrink-0 hover--translate-y-1 active--translate-y-scale-9 rounded-pill tw-py-5 max-w-420-px w-100"
                          data-block="button"
                        >
                          <span className="button__flair"></span>
                          <span className="text-white tw-text-xl tw-rounded d-flex justify-content-center align-items-center position-relative group-hover-text-main-600 tw-duration-500">
                            <i className="ph ph-basket"></i>
                          </span>
                          <span className="button__label">Add To Cart</span>
                        </Link>
                        <button
                          type="button"
                          className="tw-w-15 tw-h-15 bg-white common-shadow-fifteen d-flex justify-content-center align-items-center tw-text-2xl rounded-circle hover-bg-main-600 hover-text-white tw-duration-300"
                        >
                          <i className="ph ph-star"></i>
                        </button>
                      </div>
                      <div className="tw-mt-9">
                        <p className="text-heading fw-medium tw-mb-605">
                          Ground delivery charge <span className="fw-bold">$180.00</span>
                        </p>
                        <div className="d-flex flex-column tw-gap-205">
                          <p className="text-heading fw-medium">
                            <span className="fw-bold">SKU:</span> N/A
                          </p>
                          <p className="text-heading fw-medium">
                            <span className="fw-bold">Category: </span>Pizza
                          </p>
                          <p className="text-heading fw-medium">
                            <span className="fw-bold">Tags: </span>
                            Burgers, Tacos
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Shop Details End */}

      {/* Product Tabs Start */}
      <section className="py-120 section-bg-two">
        <div className="container">
          <div>
            <ul className="nav nav-pills style-border tw-mb-11 tw-gap-9 flex-wrap" id="pills-tab" role="tablist">
              <li className="nav-item" role="presentation">
                <button
                  className="nav-link tw-px-6 tw-py-3 bg-white text-heading fw-bold tw-text-sm border border-white text-uppercase tw-rounded-lg active"
                  id="pills-ProductDetails-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-ProductDetails"
                  type="button"
                  role="tab"
                  aria-controls="pills-ProductDetails"
                  aria-selected="true"
                >
                  Product Details
                </button>
              </li>
              <li className="nav-item" role="presentation">
                <button
                  className="nav-link tw-px-6 tw-py-3 bg-white text-heading fw-bold tw-text-sm border border-white text-uppercase tw-rounded-lg"
                  id="pills-additionalInformation-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-additionalInformation"
                  type="button"
                  role="tab"
                  aria-controls="pills-additionalInformation"
                  aria-selected="false"
                >
                  additional Information
                </button>
              </li>
              <li className="nav-item" role="presentation">
                <button
                  className="nav-link tw-px-6 tw-py-3 bg-white text-heading fw-bold tw-text-sm border border-white text-uppercase tw-rounded-lg"
                  id="pills-Review-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-Review"
                  type="button"
                  role="tab"
                  aria-controls="pills-Review"
                  aria-selected="false"
                >
                  Review (09)
                </button>
              </li>
              <li className="nav-item" role="presentation">
                <button
                  className="nav-link tw-px-6 tw-py-3 bg-white text-heading fw-bold tw-text-sm border border-white text-uppercase tw-rounded-lg"
                  id="pills-faq-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-faq"
                  type="button"
                  role="tab"
                  aria-controls="pills-faq"
                  aria-selected="false"
                >
                  faq
                </button>
              </li>
            </ul>

            <div className="tab-content" id="pills-tabContent">
              <div
                className="tab-pane fade show active"
                id="pills-ProductDetails"
                role="tabpanel"
                aria-labelledby="pills-ProductDetails-tab"
              >
                <TabBody />
              </div>
              <div
                className="tab-pane fade"
                id="pills-additionalInformation"
                role="tabpanel"
                aria-labelledby="pills-additionalInformation-tab"
              >
                <TabBody />
              </div>
              <div
                className="tab-pane fade"
                id="pills-Review"
                role="tabpanel"
                aria-labelledby="pills-Review-tab"
              >
                <TabBody />
              </div>
              <div className="tab-pane fade" id="pills-faq" role="tabpanel" aria-labelledby="pills-faq-tab">
                <TabBody />
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Product Tabs End */}

      {/* Featured Products Start */}
      <section className="shop py-120">
        <div className="container">
          <div className="max-w-672-px text-start tw-mb-12">
            <span className="text-main-600 tw-text-lg fw-semibold">Featured Product</span>
            <h3 className="splitTextStyleOne text-heading text-capitalize">Featured Products</h3>
          </div>

          <div className="row gy-4 product-item-wrapper">
            {featuredProducts.map((p, i) => (
              <div className="col-xl-3 col-md-4 col-sm-6 col-xs-6" key={i}>
                <div className="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl">
                  <div className="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center">
                    <Link href={routes.shopDetails} className="d-block">
                      <img
                        src={`/assets/images/thumbs/${p.img}`}
                        alt="Product Thumbnail"
                        className="group-hover-item-scale-12 tw-duration-300"
                      />
                    </Link>
                    <div className="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500">
                      <button
                        type="button"
                        className="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                      >
                        <i className="ph-bold ph-eye"></i>
                      </button>
                      <button
                        type="button"
                        className="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                      >
                        <i className="ph-bold ph-star"></i>
                      </button>
                      <button
                        type="button"
                        className="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                      >
                        <i className="ph-bold ph-arrows-down-up"></i>
                      </button>
                    </div>
                    <div className="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500">
                      <Link
                        href={routes.cart}
                        className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                        data-block="button"
                      >
                        <span className="button__flair"></span>
                        <span className="button__label">Add To Cart</span>
                      </Link>
                    </div>
                  </div>
                  <div className="product-item__content text-center tw-px-2">
                    <ul className="d-inline-flex align-items-center tw-gap-1">
                      {[0, 1, 2, 3].map((s) => (
                        <li className="text-star text-main-600 tw-text-base d-flex" key={s}>
                          <i className="ph-fill ph-star"></i>
                        </li>
                      ))}
                      <li className="text-star text-neutral-300 tw-text-base d-flex">
                        <i className="ph-fill ph-star"></i>
                      </li>
                    </ul>
                    <h6 className="tw-text-base tw-my-205">
                      <Link href={routes.shopDetails}>{p.title}</Link>
                    </h6>
                    <span className="text-heading fw-medium">$112.00</span>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
      {/* Featured Products end */}

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
