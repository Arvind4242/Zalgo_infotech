import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Shop - Print & Design Products",
  description:
    "Browse Zalgo Infotech's shop for brochures, business cards, flyers, banners, and custom print & design products for your business branding needs.",
  keywords: [
    "business card printing",
    "brochure design",
    "flyer printing",
    "custom print products",
    "banner design",
    "Zalgo Infotech shop",
  ],
  path: "/shop",
});

const categories = [
  "Brochures & Catalogues",
  "Business Cards",
  "Calendars printing",
  "Design Online",
  "Flyers Design",
  "Folded Leaflets",
  "t-shirt printing",
  "Gift item printing",
];

const popularTags = [
  "Sweat Shirt",
  "Banner design",
  "Brochure",
  "Business Card",
  "landing",
  "Brochure",
  "Tryptich Brochure",
  "Cap",
];

const products = [
  { img: "product-img1.png", title: "Smart wireless headphone", price: "$112.00", filledStars: 4 },
  { img: "product-img2.png", title: "Go pro hero action camera", price: "$112.00", filledStars: 4 },
  { img: "product-img3.png", title: "Colorful apple Ipad", price: "$112.00", filledStars: 4 },
  { img: "product-img4.png", title: "Humidifiler white grow", price: "$112.00", filledStars: 4 },
  { img: "product-img5.png", title: "Apple Iphone 16 promax", price: "$112.00", filledStars: 4 },
  { img: "product-img6.png", title: "Go pro hero action camera", price: "$112.00", filledStars: 4 },
  { img: "product-img7.png", title: "Apple smartwatch series", price: "$112.00", filledStars: 4 },
  { img: "product-img8.png", title: "Instax pro camera hero", price: "$112.00", filledStars: 4 },
  { img: "product-img9.png", title: "Macbook m1 cheap pro", price: "$112.00", filledStars: 4 },
  { img: "product-img10.png", title: "VISION RAC Micro Oven", price: "$112.00", filledStars: 4 },
  { img: "product-img11.png", title: "Folding Keayboard display", price: "$112.00", filledStars: 4 },
  { img: "product-img12.png", title: "Logitech Mouse Havit", price: "$112.00", filledStars: 4 },
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

function StarRating({ filled }: { filled: number }) {
  return (
    <div className="d-inline-flex align-items-center tw-gap-1">
      {Array.from({ length: 5 }).map((_, i) => (
        <span
          key={i}
          className={`text-star tw-text-base d-flex ${
            i < filled ? "text-main-600" : "text-neutral-300"
          }`}
        >
          <i className="ph-fill ph-star"></i>
        </span>
      ))}
    </div>
  );
}

export default function ShopPage() {
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
                <h1 className="mb-0 splitTextStyleOne text-capitalize">Shop Page</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Breadcrumb End Here */}

      {/* Shop Start */}
      <section className="shop py-120">
        <div className="container">
          <div className="row gy-4">
            <div className="col-lg-4">
              <div className="d-flex flex-column tw-gap-705">
                <div className="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg">
                  <h5 className="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize">
                    Search Here
                  </h5>
                  <form action="#" className="position-relative">
                    <input
                      type="text"
                      className="tw-ps-4 tw-pe-12 tw-py-4 bg-white tw-placeholder-text-main-two-600 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden tw-rounded-md shadow-none flex-grow-1 border border-neutral-200 focus-border-main-600 tw-duration-300"
                      placeholder="Search here..."
                    />
                    <button
                      type="submit"
                      className="position-absolute top-50 tw--translate-y-50 tw-end-0 text-main-two-600 tw-text-lg d-flex tw-me-5"
                    >
                      <i className="ph-bold ph-magnifying-glass"></i>
                    </button>
                  </form>
                </div>

                <div className="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg">
                  <h5 className="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize">
                    Categories
                  </h5>
                  <div className="d-flex flex-column tw-gap-6">
                    {categories.map((cat, i) => (
                      <a
                        key={i}
                        href="javascript:void(0)"
                        className="d-flex align-items-center tw-gap-4 fw-medium text-heading hover-text-main-600"
                      >
                        <i className="ph-bold ph-caret-left"></i>
                        {cat}
                      </a>
                    ))}
                  </div>
                </div>

                <div className="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg">
                  <h5 className="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize">
                    Filter By Price
                  </h5>
                  {/* Slider start */}
                  <div className="slider">
                    <div className="progress"></div>
                  </div>
                  <div className="range-input">
                    <input type="range" className="range-min" min={0} max={10000} defaultValue={2500} step={100} />
                    <input type="range" className="range-max" min={0} max={10000} defaultValue={7500} step={100} />
                  </div>
                  <div className="tw-mt-6 d-flex align-items-center justify-content-between">
                    <div className="price-input d-flex align-items-center tw-gap-1">
                      <div className="field">
                        <input
                          type="number"
                          className="border-0 focus-outline-0 tw-w-11 text-neutral-600 input-min"
                          defaultValue={2500}
                        />
                      </div>
                      <span>-</span>
                      <div className="field">
                        <input
                          type="number"
                          className="border-0 focus-outline-0 tw-w-11 text-neutral-600 input-max"
                          defaultValue={7500}
                        />
                      </div>
                    </div>
                    <button
                      type="button"
                      className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-6 tw-py-305 tw-text-base fw-semibold tw-rounded-md"
                      data-block="button"
                    >
                      <span className="button__flair"></span>
                      <span className="button__label">Filter</span>
                    </button>
                  </div>
                  {/* Slider End */}
                </div>

                <div className="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg">
                  <h5 className="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize">
                    select by size
                  </h5>
                  <div className="d-flex flex-column tw-gap-3">
                    {[
                      { id: "sizeOne", label: '36"x80" (8)' },
                      { id: "sizeTwo", label: '36"x96" (60)' },
                      { id: "sizeThree", label: '72"x80" (7)' },
                      { id: "sizeFour", label: '72"x96" (21)' },
                    ].map((s) => (
                      <div className="form-check common-check tw-gap-3" key={s.id}>
                        <input className="form-check-input" type="checkbox" id={s.id} />
                        <label className="form-check-label" htmlFor={s.id}>
                          {s.label}
                        </label>
                      </div>
                    ))}
                  </div>
                </div>

                <div className="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg">
                  <h5 className="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize">
                    Filter by Rating
                  </h5>
                  <div className="d-flex flex-column tw-gap-3">
                    {[
                      { id: "starFive", filled: 5, label: "( 5 Star )" },
                      { id: "starFour", filled: 4, label: "( 4 Star )" },
                      { id: "starThree", filled: 3, label: "( 3 Star )" },
                      { id: "starTwo", filled: 2, label: "( 2 Star )" },
                      { id: "starOne", filled: 1, label: "( 1 Star )" },
                    ].map((s) => (
                      <div className="form-check common-check tw-gap-3" key={s.id}>
                        <input className="form-check-input" type="checkbox" id={s.id} />
                        <label className="form-check-label" htmlFor={s.id}>
                          <span className="d-flex align-items-center tw-gap-2">
                            <StarRating filled={s.filled} />
                            <span className="text-neutral-600 fw-medium">{s.label}</span>
                          </span>
                        </label>
                      </div>
                    ))}
                  </div>
                </div>

                <div className="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg">
                  <h5 className="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize">
                    Popular tags
                  </h5>
                  <div className="d-flex tw-gap-3 flex-wrap">
                    {popularTags.map((tag, i) => (
                      <a
                        key={i}
                        href="javascript:void(0)"
                        className="bg-white tw-py-105 tw-px-4 border border-neutral-200 rounded-pill text-neutral-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block active-scale-09 text-capitalize flex-grow-1 tw-duration-200"
                      >
                        {tag}
                      </a>
                    ))}
                  </div>
                </div>
              </div>
            </div>

            <div className="col-lg-8">
              <div>
                {/* Top List Grid start */}
                <div className="border tw-rounded-lg border-neutral-200 tw-p-5 d-flex align-items-center justify-content-between flex-wrap tw-gap-4 tw-mb-6">
                  <div className="text-heading fw-bold">
                    Showing <span className="text-main-600">12</span> of 21 Results
                  </div>

                  <div className="d-flex align-items-center tw-gap-10">
                    <div className="d-flex align-items-center tw-gap-3">
                      <span className="text-heading fw-bold">Sort by:</span>
                      <div className="d-flex align-items-center">
                        <span className="text-neutral-500">
                          <i className="ph-bold ph-arrows-down-up"></i>
                        </span>
                        <select className="form-control form-select fw-semibold border-0 tw-ps-205 tw-pe-1 py-0 text-neutral-500 shadow-none">
                          <option value="Price">Price</option>
                          <option value="Sales">Sales</option>
                          <option value="Published">Published</option>
                        </select>
                      </div>
                    </div>
                    <div className="d-flex align-items-center tw-gap-4">
                      <button
                        type="button"
                        className="tw-text-2xl hover-text-main-600 tw-leading-none text-main-600 list-view-btn"
                      >
                        <i className="ph-bold ph-list-bullets"></i>
                      </button>
                      <button
                        type="button"
                        className="tw-text-2xl hover-text-main-600 tw-leading-none text-heading grid-view-btn"
                      >
                        <i className="ph-bold ph-squares-four"></i>
                      </button>
                    </div>
                  </div>
                </div>
                {/* Top List Grid End */}

                <div className="row gy-4 product-item-wrapper">
                  {products.map((p, i) => (
                    <div className="col-md-4 col-sm-6 col-xs-6" key={i}>
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
                          <StarRating filled={p.filledStars} />
                          <h6 className="tw-text-base tw-my-205">
                            <Link href={routes.shopDetails}>{p.title}</Link>
                          </h6>
                          <span className="text-heading fw-medium">{p.price}</span>
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
      {/* Shop end */}

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
