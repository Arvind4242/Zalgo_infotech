import Link from "next/link";
import PageShell from "@/components/PageShell";
import HtmlClassSetter from "@/components/HtmlClassSetter";
import TestimonialsSection from "@/components/home/TestimonialsSection";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Cloud & Web Hosting Solutions",
  description:
    "Organized cloud and web hosting for your business. Zalgo Infotech delivers secure, scalable hosting plans with free SSL, unmetered bandwidth, and 24/7 support.",
  keywords: [
    "cloud hosting",
    "web hosting for business",
    "managed cloud hosting",
    "SSL certificate hosting",
    "WordPress hosting",
    "Zalgo Infotech hosting",
  ],
  path: "/index-two",
});

const featureIcons = [
  "pricing-icon1.svg",
  "pricing-icon2.svg",
  "pricing-icon3.svg",
  "pricing-icon4.svg",
  "pricing-icon5.svg",
  "pricing-icon6.svg",
  "pricing-icon7.svg",
  "pricing-icon1.svg",
  "pricing-icon2.svg",
  "pricing-icon3.svg",
];
const featureLabels = [
  "Single website",
  "One-click WordPress installs",
  "Free WordPress website transfer",
  "Unmetered bandwidth",
  "Free SSL certificate",
  "Free domain included",
  "Unlimited free SSL",
  "Single website",
  "One-click WordPress installs",
  "Free WordPress website transfer",
];

const monthlyPlans = [
  { name: "Basic plan", price: "1.99" },
  { name: "Premium plan", price: "10.99" },
  { name: "Pro plan", price: "20.99" },
];
const annualPlans = [
  { name: "Basic plan", price: "19.90" },
  { name: "Premium plan", price: "109.90" },
  { name: "Pro plan", price: "209.90" },
];

const hostingPlans = [
  { icon: "hosting-plan-icon1.png", title: "Web hosting" },
  { icon: "hosting-plan-icon2.png", title: "WordPress hosting" },
  { icon: "hosting-plan-icon3.png", title: "VPS hosting" },
  { icon: "hosting-plan-icon4.png", title: "Dedicated hosting" },
  { icon: "hosting-plan-icon2.png", title: "WordPress hosting" },
];

const serviceItems = [
  { icon: "service-icon1.svg", title: "Local data centers. Around the world." },
  { icon: "service-icon2.svg", title: "Full speed ahead. Whatever the traffic." },
  { icon: "service-icon3.svg", title: "Live and kicking. 24/7." },
  { icon: "service-icon4.svg", title: "Website migration. Made simple." },
  { icon: "service-icon3.svg", title: "Live and kicking. 24/7." },
];

const websiteOwnerReviews = [
  {
    img: "website-owner-img1.png",
    text: "We get absolutely raving reviews from our sales and customer support teams using close. Even our co-sales founders are very happy. We get absolutely raving reviews from our Even our co- founders are very happy for services",
  },
  {
    img: "website-owner-img2.png",
    text: "We get absolutely raving reviews from our sales and customer support teams using close. Even our co",
  },
  {
    img: "website-owner-img3.png",
    text: "We get absolutely raving reviews from our sales and customer support teams using close. Even our co-founders are very happy.",
  },
  {
    img: "website-owner-img4.png",
    text: "We get absolutely raving reviews from our sales and customer support teams using close. Even our co-sales founders are very happy. We get absolutely raving reviews from our",
  },
  {
    img: "website-owner-img5.png",
    text: "We get absolutely raving reviews from our sales and customer support teams using close. Even our co-sales founders are very happy. We get absolutely raving reviews from our Even our co- founders are very happy for services",
  },
  {
    img: "website-owner-img6.png",
    text: "We get absolutely raving reviews from our sales and customer support teams using close. Even our compa",
  },
];

const domainPrices1 = [
  { img: "domain-img1.png", domain: ".com", price: "$13.34/Yearly" },
  { img: "domain-img2.png", domain: ".cloud", price: "$14.34/Yearly" },
  { img: "domain-img3.png", domain: ".shop", price: "$13.34/Yearly" },
  { img: "domain-img4.png", domain: ".online", price: "$13.34/Yearly" },
  { img: "domain-img5.png", domain: ".info", price: "$13.34/Yearly" },
];

const domainPrices2 = [
  { img: "search-domain-two-img1.png", domain: ".xyz" },
  { img: "search-domain-two-img2.png", domain: ".shop" },
  { img: "search-domain-two-img3.png", domain: ".icu" },
  { img: "search-domain-two-img4.png", domain: ".site" },
  { img: "search-domain-two-img5.png", domain: ".in" },
  { img: "search-domain-two-img6.png", domain: ".gives" },
];

const faqs = [
  {
    id: "collapseOne",
    q: "Why do I need a website for my business?",
    open: true,
  },
  {
    id: "collapseTwo",
    q: "How does GoDaddy help small business owners succeed?",
  },
  { id: "collapseThree", q: "Why do I need a professional email?" },
  { id: "collapseFour", q: "What makes GoDaddy Web Hosting the world leader?" },
  { id: "collapseFive", q: "Why choose GoDaddy for WordPress?" },
  {
    id: "collapseSix",
    q: "Why should I transfer my domain, website or web hosting to GoDaddy?",
  },
];

const faqAnswer =
  "GoDaddy offers more than just a platform to build your website, we offer everything you need to create an effective, memorable online presence. Already have a site? We offer hosting plans that will keep it fast, secure and online. Our professional";

function FeatureList() {
  return (
    <ul className="feature-list d-flex flex-column tw-gap-6">
      {featureIcons.map((icon, i) => (
        <li className="d-flex align-items-center tw-gap-305 fw-medium" key={i}>
          <span>
            <img src={`/assets/images/icons/${icon}`} alt="img" />
          </span>
          <span className="text-heading">{featureLabels[i]}</span>
        </li>
      ))}
    </ul>
  );
}

function PricingCard({ name, price, duration }: { name: string; price: string; duration: string }) {
  return (
    <div className="pricing-item position-relative border border-neutral-300 tw-p-7 tw-rounded-2xl bg-white tw-duration-300 hover-border-main-600">
      <img
        src="/assets/images/shapes/arrow-curve-main.png"
        alt="Arrow"
        className="position-absolute tw-end-0 top-0 tw-mt-15 tw-me-16 tw-pe-705 opacity-05"
      />
      <div>
        <div className="tw-ps-205 tw-pt-205">
          <span className="fw-bold text-heading tw-mb-105">
            <span className="text-main-600">85%</span> OFF
          </span>
          <h5 className="tw-mb-8">{name}</h5>
          <div className="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-5">
            <h2 className="mb-0">
              $<span className="current-price">{price}</span>
              <span className="tw-text-xl pricing-duration">/{duration}</span>
            </h2>
            <div className="form-check form-switch mb-0">
              <input className="form-check-input pricing-item-toggle" type="checkbox" role="switch" />
            </div>
          </div>
          <span className="d-block fw-bold text-main-600 tw-mb-8">+2 months free</span>
        </div>

        <Link
          href={routes.contact}
          className="text-heading fw-bold tw-text-base w-100 tw-px-6 tw-py-4 tw-rounded-md border border-main-600 hover-text-white hover-bg-main-600 text-center hover--translate-y-1 active--translate-y-scale-9"
        >
          See Plan &amp; Pricing
        </Link>
        <div className="tw-ps-205 tw-pt-205">
          <span className="text-heading tw-mt-3">
            Renews at <span className="text-main-600">$9.88</span> /month
          </span>
          <span className="d-block tw-h-px bg-neutral-100 tw-my-6"></span>
          <FeatureList />
        </div>
      </div>
      <div className="tw-mt-12 d-flex justify-content-center">
        <button
          type="button"
          className="see-all-btn d-flex align-items-center justify-content-center tw-gap-305 text-main-600 fw-bold hover-underline d-lg-flex align-items-center tw-gap-305"
        >
          See all features
          <i className="ph-bold ph-caret-down"></i>
        </button>
      </div>
    </div>
  );
}

export default function IndexTwo() {
  return (
    <PageShell>
      <HtmlClassSetter className="home-two" />

      {/* Banner Two Start */}
      <section className="banner-two position-relative z-1 gradient-bg-two">
        <img
          src="/assets/images/shapes/cloud-shape.png"
          alt="Cloud Shape"
          className="position-absolute bottom-0 tw-start-0 w-100 z-n1"
        />
        <div className="banner-two__inner position-relative">
          <div className="container">
            <div className="row gy-4 align-items-center">
              <div className="col-lg-6">
                <div className="banner-two-content">
                  <div className="bg-white-06 tw-py-3 tw-px-305 tw-rounded text-white fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max">
                    <span className="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                    Up to <span className="text-yellow">70%</span> off managed cloud hosting
                  </div>
                  <h1 className="splitTextStyleOne text-white text-capitalize tw-leading-none">
                    Organized cloud &amp;{" "}
                    <span className="text-yellow font-dm-serif fst-italic fw-normal">web hosting</span> for your
                    business
                  </h1>
                  <p className="splitTextStyleOne text-neutral-300 tw-mt-8 max-w-388-px fw-medium">
                    Touch the success! Domain and Secure Web Hosting from{" "}
                    <span className="text-yellow">$4.99</span> per month
                  </p>

                  <div className="d-flex align-items-center tw-gap-7 tw-mt-11 flex-wrap">
                    <Link
                      href={routes.contact}
                      className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-15 rounded-pill tw-py-505 fw-medium"
                    >
                      <span className="button__flair"></span>
                      <span className="button__label">Clients Area</span>
                    </Link>
                    <p className="text-neutral-300 max-w-388-px fw-medium">
                      Starting at only <span className="text-yellow">$3.27/mo*</span>
                    </p>
                  </div>
                </div>
              </div>
              <div className="col-lg-6">
                <div className="banner-two-thumb">
                  <img src="/assets/images/thumbs/banner-two-img.png" alt="Image" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Banner Two End */}

      {/* Search Domain Start */}
      <section className="search-domain position-relative z-1 tw--mt-170-px">
        <img
          src="/assets/images/shapes/hand-thumb.png"
          alt="Hand thumb"
          className="hand-thumb left-right-animation position-absolute tw-start-0 top-0 tw-mt-15"
        />
        <div className="container">
          <div className="bg-white common-shadow-six tw-pt-10 tw-pb-16 tw-px-88-px">
            <h3 className="text-center tw-mb-4 text-capitalize splitTextStyleOne">
              Search and buy a <span className="text-yellow font-dm-serif fst-italic fw-normal">domain</span> in
              minutes
            </h3>
            <div className="text-center">
              <ul
                className="animate-background-wrapper z-1 position-relative nav nav-pills active-text-white d-inline-flex border border-neutral-200 rounded-pill tw-mb-6"
                id="pills-tab"
                role="tablist"
              >
                <li className="background"></li>
                <li className="nav-item flex-grow-1" role="presentation">
                  <button
                    className="nav-link w-100 active-scale-094 rounded-pill tw-px-6 tw-py-305 bg-transparent fw-semibold text-heading hover-text-main-600 h-100 line-clamp-1 active"
                    id="pills-FindNewDomain-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-FindNewDomain"
                    type="button"
                    role="tab"
                    aria-controls="pills-FindNewDomain"
                    aria-selected="true"
                  >
                    Find New Domain
                  </button>
                </li>
                <li className="nav-item flex-grow-1" role="presentation">
                  <button
                    className="nav-link w-100 active-scale-094 rounded-pill tw-px-6 tw-py-305 bg-transparent fw-semibold text-heading hover-text-main-600 h-100 line-clamp-1"
                    id="pills-GeneratedomainusingAI-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-GeneratedomainusingAI"
                    type="button"
                    role="tab"
                    aria-controls="pills-GeneratedomainusingAI"
                    aria-selected="false"
                  >
                    Generate domain using AI
                  </button>
                </li>
              </ul>
            </div>

            <div className="tab-content" id="pills-tabContent">
              {["pills-FindNewDomain", "pills-GeneratedomainusingAI"].map((paneId, idx) => (
                <div
                  className={`tab-pane fade ${idx === 0 ? "show active" : ""}`}
                  id={paneId}
                  role="tabpanel"
                  key={paneId}
                >
                  <div className="select-domain-wrapper">
                    <form action="#" className="d-flex tw-gap-6 flex-column flex-sm-row">
                      <div className="position-relative flex-grow-1">
                        <input
                          type="text"
                          className="tw-py-405 tw-px-705 tw-pe-100-px bg-neutral-100 tw-rounded-xl border-transparent placeholder-neutral-600 placeholder-18-px w-100"
                          placeholder="Enter your desire domain name"
                        />
                        <select className="select-domain form-control form-select w-auto border-0 tw-py-1 tw-pe-305 shadow-none form-select-arrow-end position-absolute tw-end-0 top-50 translate-middle-y bg-transparent tw-me-705 fw-semibold">
                          <option value=".com">.com</option>
                          <option value=".cloud">.cloud</option>
                          <option value=".shop">.shop</option>
                          <option value=".online">.online</option>
                          <option value=".info">.info</option>
                        </select>
                      </div>
                      <button
                        type="button"
                        className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-15 tw-py-505 fw-semibold"
                      >
                        <span className="button__flair"></span>
                        <span className="button__label">Search</span>
                      </button>
                    </form>
                    <div className="overflow-x-max-lg-auto scroll-sm scroll-sm-horizontal pb-sm-0">
                      <div className="tw-mt-6 d-grid grid-col-5 min-w-max tw-pb-1">
                        {domainPrices1.map((d) => (
                          <button
                            type="button"
                            key={d.domain}
                            className="domain-item-button text-center tw-py-205 tw-px-5 border-bottom hover-common-shadow-four animation-item border-top border-neutral-200 border-end"
                            data-domain={d.domain}
                          >
                            <img src={`/assets/images/thumbs/${d.img}`} alt="Domain Logo" className="animate__wobble" />
                            <span className="d-block text-neutral-600 tw-mt-105 tw-mb-1">Starting price</span>
                            <span className="d-block text-neutral-700 tw-mt-1 tw-text-sm fw-semibold">{d.price}</span>
                          </button>
                        ))}
                      </div>
                    </div>
                    <div className="text-center text-heading fw-medium tw-mt-8">
                      Already bought a domain?{" "}
                      <a href="#" className="fw-bold text-decoration-underline text-heading hover-text-main-600">
                        Transfer it?
                      </a>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>

          <div className="text-center tw-mt-11 text-heading fw-medium d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
            <span>
              Our Customers say <span className="fw-bold tw-ms-2">Great</span>
            </span>
            <img src="/assets/images/icons/ratings.svg" alt="img" />
            <span>4.1 out of 5 based on 16,158 reviews</span>
            <div className="d-flex align-items-center tw-gap-05">
              <img src="/assets/images/icons/trustpilot-star.svg" alt="img" />
              <span className="fw-bold">Trustpilot</span>
            </div>
          </div>
        </div>
      </section>
      {/* Search Domain End */}

      {/* About Two Section start */}
      <section className="about-two py-120 position-relative z-1 overflow-hidden">
        <img
          src="/assets/images/shapes/squre-box-shape.png"
          alt="Square shape"
          className="position-absolute top-50 tw-start-0 tw-ms-128-px animate__wobble__two z-n1 d-lg-block d-none"
        />
        <div className="container">
          <div className="row gy-4 flex-wrap-reverse">
            <div className="col-lg-5">
              <div
                className="tw-rounded-lg background-img tw-px-7 bg-img position-relative max-w-570-px"
                data-background-image="/assets/images/thumbs/about-two-img-bg.png"
              >
                <img
                  src="/assets/images/shapes/finger-shape.png"
                  alt="Shape"
                  className="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1"
                />
                <div className="d-flex tw-gap-6 tw-max-h-588-px">
                  <div className="swiper overflow-hidden about-two-thumbs-slider-one w-50">
                    <div className="swiper-wrapper transition-timing-linear tw-gap-6">
                      {[1, 2, 3, 1, 2, 3, 1, 2, 3].map((n, i) => (
                        <div className="swiper-slide" key={i}>
                          <div className="tw-rounded-2xl overflow-hidden">
                            <img
                              src={`/assets/images/thumbs/about-slide-img${n}.png`}
                              alt="Image"
                              className="w-100 h-100 object-fit-cover"
                            />
                          </div>
                        </div>
                      ))}
                    </div>
                  </div>
                  <div className="swiper overflow-hidden about-two-thumbs-slider-two w-50">
                    <div className="swiper-wrapper transition-timing-linear tw-gap-6">
                      {[1, 2, 3, 1, 2, 3, 1, 2, 3].map((n, i) => (
                        <div className="swiper-slide" key={i}>
                          <div className="tw-rounded-2xl overflow-hidden">
                            <img
                              src={`/assets/images/thumbs/about-slide-img${n}.png`}
                              alt="Image"
                              className="w-100 h-100 object-fit-cover"
                            />
                          </div>
                        </div>
                      ))}
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div className="col-lg-7 ps-lg-5">
              <div>
                <div className="bg-neutral-100 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max">
                  <span className="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                  Up to <span className="text-yellow">70%</span> off managed cloud hosting
                </div>
                <h2 className="splitTextStyleOne text-heading text-capitalize">
                  Sasstech makes you a better <span className="font-dm-serif fst-italic fw-normal">elevating</span>{" "}
                  your team&apos;s
                </h2>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                  In today&apos;s competitive business, the demand for efficient In today&apos;s competitive
                  cost-effective IT solutions has never been more critic. business
                </p>

                <div className="tw-mt-8">
                  <div className="d-flex align-items-center tw-gap-16">
                    <div className="d-flex flex-column tw-gap-305">
                      {[
                        { icon: "ph-magnifying-glass", label: "Domain" },
                        { icon: "ph-dresser", label: "Web Hosting ₹ 79.00/mo" },
                        { icon: "ph-certificate", label: "SSL Certificates" },
                        { icon: "ph-envelope", label: "Professional Email" },
                      ].map((item) => (
                        <div className="d-flex align-items-center tw-gap-405 animation-item" key={item.label}>
                          <span className="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                            <i className={`animate__heartBeat ph-bold ${item.icon}`}></i>
                          </span>
                          <Link href={routes.contact} className="fw-bold tw-text-lg text-heading hover-underline">
                            {item.label}
                          </Link>
                        </div>
                      ))}
                    </div>
                    <div className="d-flex align-items-center tw-gap-9 tw-ms-705 d-sm-flex d-none flex-shrink-0">
                      <span className="tw-h-114-px tw-w-1-px bg-neutral-200"></span>
                      <span className="fw-bold tw-text-lg text-heading text-uppercase">OR</span>
                    </div>
                    <div className="tw-ms-205 left-right-animation d-sm-flex d-none">
                      <img src="/assets/images/shapes/curve-arrow-two.png" alt="img" />
                    </div>
                  </div>
                </div>
                <div className="tw-mt-8 max-w-500-px">
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-lg-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-15 tw-rounded-md tw-py-505 fw-medium"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">See Plan &amp; Pricing</span>
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* About Two Section end */}

      {/* Hosting plan section start */}
      <section className="hosting-plan tw-pt-224-px pb-120 position-relative z-1 overflow-hidden">
        <img
          src="/assets/images/shapes/wave-shape.png"
          alt="Shape"
          className="position-absolute w-100 h-100 top-0 tw-start-0 z-n1"
        />
        <img
          src="/assets/images/shapes/dots-circle-round.png"
          alt="Shape"
          className="position-absolute bottom-0 tw-start-0 tw-ms-80-px scale-animation d-lg-block d-none"
        />
        <div className="container">
          <div className="d-flex align-items-center justify-content-between tw-gap-6 tw-mb-12">
            <div className="max-w-724-px">
              <div className="bg-neutral-200 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max">
                <span className="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                Up to <span className="text-yellow">70%</span> off managed cloud hosting
              </div>
              <h2 className="splitTextStyleOne text-heading text-capitalize">
                Pick your perfect <span className="font-dm-serif fst-italic fw-normal">web hosting</span> plan. We
                got&apos;em all.
              </h2>
            </div>
            <div>
              <Link
                href={routes.contact}
                className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-lg-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-15 rounded-pill tw-py-505 fw-medium"
              >
                <span className="button__flair"></span>
                <span className="button__label">Clients Area</span>
              </Link>
            </div>
          </div>

          <div className="position-relative">
            <div className="bg-white common-shadow-seven tw-rounded-2xl overflow-hidden">
              <div className="hosting-plan-slider swiper">
                <div className="swiper-wrapper">
                  {hostingPlans.map((plan, i) => (
                    <div className="swiper-slide h-100" key={i}>
                      <div className="group hosting-plan-item tw-ps-48-px tw-pe-4 tw-pt-90-px tw-pb-9 hover-bg-main-600 h-100 d-flex flex-column justify-content-between animation-item tw-duration-300">
                        <div>
                          <span>
                            <img src={`/assets/images/icons/${plan.icon}`} alt="Icon" className="animate__swing" />
                          </span>
                          <div className="tw-mt-10">
                            <span className="tw-mb-3 d-block text-heading">
                              <span className="tw-duration-200 group-hover-text-white">Starts at </span>
                              <span className="text-purple tw-duration-200 group-hover-text-yellow fw-bold">
                                $3.75/mo*
                              </span>
                            </span>
                            <h5 className="tw-mb-3 tw-duration-200 group-hover-text-white">{plan.title}</h5>
                            <p className="text-neutral-500 tw-text-base line-clamp-2 tw-duration-200 group-hover-text-white">
                              Easy, affordable, and includes a free domain for a year. Score!
                            </p>
                          </div>
                        </div>
                        <div className="tw-mt-705">
                          <a
                            href="#"
                            className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-py-305 fw-medium tw-rounded-md text-sm group-hover-bg-white tw-duration-400 group-hover-text-main-two-600 hosting-plan-btn"
                          >
                            <span className="button__flair"></span>
                            <span className="button__label">Learn more</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>

            <div className="swiper-hosting-button-next tw-w-14 tw-h-14 border border-neutral-200 rounded-circle text-main-600 tw-text-lg d-flex justify-content-center align-items-center hover-bg-main-600 hover-border-main-600 hover-text-white tw-transition tw-duration-200 position-absolute top-50 translate-middle-y tw-z-99 tw-start-100 tw-ms-705">
              <i className="ph-bold ph-arrow-right"></i>
            </div>
            <div className="swiper-hosting-button-prev tw-w-14 tw-h-14 border border-neutral-200 rounded-circle text-main-600 tw-text-lg d-flex justify-content-center align-items-center hover-bg-main-600 hover-border-main-600 hover-text-white tw-transition tw-duration-200 position-absolute top-50 translate-middle-y tw-z-99 tw-end-100 tw-me-705">
              <i className="ph-bold ph-arrow-left"></i>
            </div>
            <div className="swiper-hosting-pagination d-lg-none d-flex align-items-center justify-content-center tw-mt-605"></div>
          </div>
        </div>
      </section>
      {/* Hosting plan section End */}

      {/* degree view Section Start */}
      <section className="degree-view tw-pt-9">
        <div className="container">
          <div className="max-w-672-px text-center mx-auto tw-mb-12">
            <div className="bg-neutral-100 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max">
              <span className="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
              Up to <span className="text-yellow">70%</span> off managed cloud hosting
            </div>
            <h2 className="splitTextStyleOne text-heading text-capitalize">
              Get a 360-degree <br />
              view of your <span className="font-dm-serif fst-italic fw-normal">cloud</span> spend
            </h2>
          </div>

          <div className="row gy-4">
            <div className="col-xl-8">
              <div className="d-flex common-shadow-eight tw-rounded-3xl bg-white border border-neutral-100 flex-md-row flex-column">
                <div className="tw-rounded-3xl overflow-hidden flex-shrink-0">
                  <img
                    src="/assets/images/thumbs/degree-view-img1.png"
                    alt="Thumb"
                    className="w-100 h-100 object-fit-cover"
                  />
                </div>
                <div className="tw-py-13 tw-pe-8 flex-grow-1 tw-ps-11">
                  <span className="tw-px-6 tw-py-1 bg-purple text-white rounded-pill fw-medium tw-mb-5">
                    Hosting at should be
                  </span>
                  <h4 className="tw-mb-5">Web Hosting that&apos;s fast and reliable.</h4>
                  <p className="text-neutral-500">
                    Web hosting provides everything you need to get your idea online. From where your website lives
                    in the digital world, to where your files and data are securely stored find and manage it all in
                    one place.
                  </p>
                </div>
              </div>
              <div className="d-flex common-shadow-eight tw-rounded-3xl bg-white border border-neutral-100 flex-md-row flex-column tw-mt-8">
                <div className="tw-rounded-3xl overflow-hidden flex-shrink-0">
                  <img
                    src="/assets/images/thumbs/degree-view-img2.png"
                    alt="Thumb"
                    className="w-100 h-100 object-fit-cover"
                  />
                </div>
                <div className="tw-py-13 tw-pe-8 flex-grow-1 tw-ps-11">
                  <h4 className="tw-mb-5">
                    <span className="text-purple">SSL</span> certificates help secure User&apos;s important data.
                  </h4>
                  <div className="d-flex align-items-center tw-gap-405 tw-mt-8">
                    <span className="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                      <i className="ph-bold ph-magnifying-glass"></i>
                    </span>
                    <Link href={routes.contact} className="fw-bold tw-text-lg text-heading hover-underline max-w-278-px">
                      Helps your website search ranking with https
                    </Link>
                  </div>
                  <div className="tw-mt-8">
                    <Link
                      href={routes.contact}
                      className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-py-305 fw-medium tw-rounded-md text-sm group-hover-bg-white group-hover-text-main-two-600 hosting-plan-btn"
                    >
                      <span className="button__flair"></span>
                      <span className="button__label">Get Started</span>
                    </Link>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-xl-4">
              <div className="d-flex common-shadow-eight tw-rounded-3xl bg-white border border-neutral-100 flex-column h-100">
                <div className="tw-rounded-3xl overflow-hidden flex-shrink-0">
                  <img
                    src="/assets/images/thumbs/degree-view-img3.png"
                    alt="Thumb"
                    className="w-100 h-100 object-fit-cover"
                  />
                </div>
                <div className="tw-py-13 tw-pe-8 flex-grow-1 tw-ps-12">
                  <h4 className="tw-mb-5">Give your website a good name</h4>
                  <p className="text-neutral-500">
                    Web hosting provides everything you need to idea online. From where your website lives in the
                    world, to where your files and data are securely find and manage it all in one place.
                  </p>
                  <Link
                    href={routes.contact}
                    className="fw-bold tw-text-lg text-heading text-decoration-underline tw-mt-11 hover-text-main-600"
                  >
                    Pick your Domain Today
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* degree view Section End */}

      {/* Search Domain Two Start */}
      <section className="search-domain-two pt-120 tw-pb-10 position-relative z-1">
        <div className="max-w-1524-px mx-auto tw-pt-5">
          <img
            src="/assets/images/shapes/border-square.png"
            alt="Borders"
            className="position-absolute tw-start-0 top-0 w-100 h-100 z-n1"
          />
          <div className="container">
            <div className="row gy-5">
              <div className="col-sm-6">
                <div className="max-w-444-px mx-auto text-center">
                  <div className="common-shadow-eight tw-py-7 tw-px-705 tw-rounded-xl overflow-hidden">
                    <img
                      src="/assets/images/thumbs/search-domain-img2.png"
                      alt="Thumb"
                      className="w-100 h-100 object-fit-cover"
                    />
                  </div>
                  <div className="tw-mt-605">
                    <h5 className="tw-mb-6 line-clamp-2">Launching a website is easier with AI</h5>
                    <Link
                      href={routes.contact}
                      className="fw-bold tw-text-lg text-decoration-underline text-main-600 hover-text-yellow"
                    >
                      Build your website today
                    </Link>
                  </div>
                </div>
              </div>
              <div className="col-sm-6">
                <div className="max-w-444-px mx-auto text-center">
                  <div className="common-shadow-eight tw-py-7 tw-px-705 tw-rounded-xl overflow-hidden">
                    <img
                      src="/assets/images/thumbs/search-domain-img1.png"
                      alt="Thumb"
                      className="w-100 h-100 object-fit-cover"
                    />
                  </div>
                  <div className="tw-mt-605">
                    <h5 className="tw-mb-6 line-clamp-2">Transfer your Domain Today</h5>
                    <Link
                      href={routes.contact}
                      className="fw-bold tw-text-lg text-decoration-underline text-main-600 hover-text-yellow"
                    >
                      Transfer domain
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div className="container">
            <div className="pt-120">
              <div className="row gy-4 select-domain-wrapper">
                <div className="col-md-5">
                  <div className="d-flex tw-gap-305 flex-wrap">
                    {domainPrices2.map((d) => (
                      <button
                        type="button"
                        key={d.domain}
                        className="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item"
                        data-domain={d.domain}
                      >
                        <img src={`/assets/images/thumbs/${d.img}`} alt="Logo" className="animate__wobble" />
                        <span className="d-block text-heading tw-mt-105 tw-text-sm fw-bold">$13.34/Yearly</span>
                      </button>
                    ))}
                  </div>
                </div>

                <div className="col-md-7">
                  <div className="ps-lg-5">
                    <div>
                      <span className="tw-px-6 tw-py-1 bg-purple text-white rounded-pill fw-medium tw-mb-5">
                        Find a new domain
                      </span>
                      <h4 className="tw-mb-705">Web Hosting that&apos;s fast and reliable.</h4>
                      <p className="text-neutral-500">
                        In today&apos;s competitive business, the demand for efficient In today&apos;s competitive
                        cost-effective IT solutions has never been more critic. business
                      </p>
                    </div>
                    <form action="#" className="d-flex tw-gap-6 flex-column flex-xl-row tw-mt-8">
                      <div className="position-relative flex-grow-1">
                        <input
                          type="text"
                          className="tw-py-405 tw-px-705 tw-pe-100-px bg-neutral-100 tw-rounded-xl border-transparent placeholder-neutral-600 placeholder-18-px w-100"
                          placeholder="Enter your desire domain name"
                        />
                        <select className="select-domain form-control form-select w-auto border-0 tw-py-1 tw-pe-305 shadow-none form-select-arrow-end position-absolute tw-end-0 top-50 translate-middle-y bg-transparent tw-me-705 fw-semibold">
                          <option value=".xyz">.xyz</option>
                          <option value=".shop">.shop</option>
                          <option value=".icu">.icu</option>
                          <option value=".site">.site</option>
                          <option value=".in">.in</option>
                          <option value=".gives">.gives</option>
                        </select>
                      </div>
                      <button
                        type="button"
                        className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-15 tw-py-505 fw-semibold"
                      >
                        <span className="button__flair"></span>
                        <span className="button__label">Search</span>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Search Domain Two End */}

      {/* Pricing plan section start */}
      <section className="pricing-plan py-120">
        <div className="container">
          <div className="max-w-672-px text-center mx-auto tw-mb-12">
            <div className="bg-neutral-100 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max">
              <span className="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
              Up to <span className="text-yellow">70%</span> off managed cloud hosting
            </div>
            <h2 className="splitTextStyleOne text-heading text-capitalize">
              Pick your perfect <span className="font-dm-serif fst-italic fw-normal">plan</span>
            </h2>
            <p className="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-570-px mx-auto">
              In today&apos;s competitive business, the demand for efficient In today&apos;s competitive
              cost-effective IT solutions has never been more critic. business
            </p>

            <div className="text-center">
              <ul
                className="animate-background-wrapper z-1 position-relative nav nav-pills active-text-white d-inline-flex bg-white common-shadow-four tw-p-1 rounded-pill mb-0 tw-mt-7"
                id="pills-tabTwo"
                role="tablist"
              >
                <li className="background style-two"></li>
                <li className="nav-item flex-grow-1" role="presentation">
                  <button
                    className="nav-link w-100 active-scale-094 rounded-pill tw-px-705 tw-py-205 bg-transparent fw-semibold text-neutral-600 hover-text-main-600 h-100 line-clamp-1 active"
                    id="pills-Monthly-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-Monthly"
                    type="button"
                    role="tab"
                    aria-controls="pills-Monthly"
                    aria-selected="true"
                  >
                    Monthly
                  </button>
                </li>
                <li className="nav-item flex-grow-1" role="presentation">
                  <button
                    className="nav-link w-100 active-scale-094 rounded-pill tw-px-705 tw-py-205 bg-transparent fw-semibold text-neutral-600 hover-text-main-600 h-100 line-clamp-1"
                    id="pills-Annually-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-Annually"
                    type="button"
                    role="tab"
                    aria-controls="pills-Annually"
                    aria-selected="false"
                  >
                    Annually
                  </button>
                </li>
              </ul>
            </div>
          </div>

          <div className="tab-content" id="pills-tabTwoContent">
            <div className="tab-pane fade show active" id="pills-Monthly" role="tabpanel" aria-labelledby="pills-Monthly-tab">
              <div className="row gy-4">
                {monthlyPlans.map((p) => (
                  <div className="col-xl-4 col-sm-6" key={p.name}>
                    <PricingCard name={p.name} price={p.price} duration="Monthly" />
                  </div>
                ))}
              </div>
            </div>
            <div className="tab-pane fade" id="pills-Annually" role="tabpanel" aria-labelledby="pills-Annually-tab">
              <div className="row gy-4">
                {annualPlans.map((p) => (
                  <div className="col-xl-4 col-sm-6" key={p.name}>
                    <PricingCard name={p.name} price={p.price} duration="Yearly" />
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Pricing plan section End */}

      {/* Services section start */}
      <section className="services py-120 position-relative z-1 gradient-bg-two">
        <img
          src="/assets/images/shapes/rope-shape.png"
          alt="Rope"
          className="position-absolute tw-start-0 tw-ms-80-px tw-mt-16 top-0 z-n1"
        />
        <img
          src="/assets/images/shapes/matherboard-shape.png"
          alt="Shape"
          className="position-absolute top-0 tw-start-0 tw-mt-160-px tw-ms-128-px d-lg-block d-none z-n1 opacity-1"
        />
        <div className="container max-w-1552-px">
          <div className="max-w-672-px text-center mx-auto tw-mb-12">
            <div className="bg-white-06 tw-py-3 tw-px-305 rounded-pill text-white fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max">
              <span className="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
              Up to <span className="text-yellow">70%</span> off managed cloud hosting
            </div>
            <h2 className="splitTextStyleOne text-white">
              Speed. <span className="font-dm-serif fst-italic fw-normal">Reliability</span>. Efficiency.
            </h2>
            <p className="text-neutral-300 tw-mt-5 splitTextStyleOne max-w-570-px mx-auto">
              In today&apos;s competitive business, the demand for efficient In today&apos;s competitive
              cost-effective IT solutions has never been more critic. business
            </p>
          </div>

          <div className="service-slider swiper">
            <div className="swiper-wrapper">
              {serviceItems.map((s, i) => (
                <div className="swiper-slide tw-pb-105" key={i}>
                  <div className="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                    <div className="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                      <span className="tw-mb-13 group-hover-item-text-invert">
                        <img src={`/assets/images/icons/${s.icon}`} alt="Icon" className="animate__heartBeat" />
                      </span>
                      <div>
                        <div className="group-hover-item-d-none tw-mb-4">
                          <span className="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">
                            Easy Invoicing
                          </span>
                        </div>
                        <h5 className="group-hover-text-white tw-duration-200 max-w-250-px">{s.title}</h5>
                        <p className="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                          Web hosting provides everything you idea online. From where your website
                        </p>
                        <a
                          href="#"
                          className="d-flex align-items-center tw-gap-205 text-main-600 fw-bold d-lg-flex align-items-center tw-gap-305 group-hover-text-white tw-duration-200 tw-mt-6 tw-transition-0"
                        >
                          Learn More
                          <i className="ph ph-arrow-right tw-text-sm"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
          <div className="service-slider-pagination pagination-style-two d-lg-non d-flex align-items-center justify-content-center tw-mt-605"></div>
        </div>
      </section>
      {/* Services section End */}

      <div className="overflow-hidden gradient-bg-four">
        {/* Brand Marketing Section Start */}
        <section className="brand-marketing py-120">
          <div className="container">
            <div className="row gy-5">
              <div className="col-md-6">
                <div className="ps-5 position-relative pe-lg-5 tw-pb-4 h-100">
                  <div className="tw-rounded-28-px overflow-hidden h-100">
                    <img
                      src="/assets/images/thumbs/brand-marketing-img.png"
                      alt="Image"
                      className="w-100 h-100 object-fit-cover"
                    />
                  </div>
                  <img
                    src="/assets/images/shapes/finger-shape.png"
                    alt="Shape"
                    className="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1"
                  />
                  <span className="tw-w-705 tw-h-705 bg-yellow rounded-circle position-absolute tw-end-100 top-0 tw-mt-105-px opacity-50"></span>
                  <div className="bg-white tw-rounded-lg tw-p-5 max-w-218-px position-absolute tw-start-0 bottom-0 w-100 tw--mt-8-px tw--me-8-px common-shadow-two z-1">
                    <div className="d-inline-flex align-items-center tw-gap-1 bg-main-600 tw-py-05 tw-px-3 rounded-pill position-absolute top-0 tw-end-0 tw--mt-12-px tw--me-12-px">
                      <span className="text-white fw-bold tw-text-sm">4.9</span>
                      <span className="text-white d-flex">
                        <img src="/assets/images/icons/star.svg" alt="img" />
                      </span>
                    </div>
                    <img src="/assets/images/icons/ratings.svg" alt="img" />
                    <div className="tw-mt-3 d-flex align-items-center justify-content-between max-w-154-px">
                      <span className="tw-text-lg text-heading fw-semibold">Trust pilot</span>
                      <img src="/assets/images/icons/verified-icon.svg" alt="img" />
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-md-6">
                <div>
                  <div className="bg-neutral-100 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max">
                    <span className="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                    Up to <span className="text-yellow">70%</span> off managed cloud hosting
                  </div>
                  <h2 className="splitTextStyleOne text-heading text-capitalize">
                    Grow your brand with sass <span className="font-dm-serif fst-italic fw-normal">Websites +</span>{" "}
                    Marketing.
                  </h2>
                  <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                    In today&apos;s competitive business, the demand for efficient In today&apos;s competitive
                    cost-effective IT solutions has never been more critic. business
                  </p>

                  <div className="tw-mt-11 d-flex flex-column tw-gap-8">
                    {[
                      "Secure your files with regular automatic backups and two-factor authentication",
                      "Encrypt your website traffic with unlimited SSL security certificates",
                      "Enjoy full protection from DDoS attacks with Cloudflare protected nameservers",
                    ].map((text) => (
                      <div className="d-flex align-items-start tw-gap-5" key={text}>
                        <span className="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                          <i className="ph ph-check"></i>
                        </span>
                        <p className="tw-text-lg fw-medium text-heading max-w-444-px flex-grow-1">{text}</p>
                      </div>
                    ))}
                  </div>

                  <div className="tw-mt-12">
                    <Link
                      href={routes.contact}
                      className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-17 rounded-pill tw-py-505 fw-medium"
                    >
                      <span className="button__flair"></span>
                      <span className="button__label">Get Started</span>
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        {/* Brand Marketing Section End */}

        {/* Website Owner section start */}
        <section className="website-owner pb-120 position-relative z-1">
          <img
            src="/assets/images/shapes/moon-shape.png"
            alt="Moon Shape"
            className="position-absolute top-50 tw-start-50 translate-middle z-n1"
          />
          <div className="container">
            <div className="d-flex align-items-center justify-content-between tw-gap-6 tw-mb-12">
              <div className="max-w-672-px">
                <div className="bg-neutral-200 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max">
                  <span className="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                  Up to <span className="text-yellow">70%</span> off managed cloud hosting
                </div>
                <h2 className="splitTextStyleOne text-heading text-capitalize">
                  Trusted by 3+ million website owners{" "}
                  <span className="font-dm-serif fst-italic fw-normal">worldwide</span>
                </h2>
              </div>
              <div>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-490-px fw-medium">
                  In today&apos;s competitive business, the demand for efficient In today&apos;s competitive
                  cost-effective IT solutions has never been more critic.
                </p>
              </div>
            </div>

            <div className="row gy-4">
              {[0, 1, 2].map((col) => (
                <div className="col-lg-4" key={col}>
                  <div className="row gy-4">
                    {websiteOwnerReviews.slice(col * 2, col * 2 + 2).map((r) => (
                      <div className="col-lg-12 col-md-6" key={r.img}>
                        <div className="common-shadow-ten tw-rounded-2xl tw-p-10 tw-pe-9 bg-white h-100 animation-item">
                          <span className="tw-mb-5">
                            <img
                              src={`/assets/images/thumbs/${r.img}`}
                              alt="Logo"
                              className="animate__flipInY"
                            />
                          </span>
                          <div>
                            <p className="text-neutral-500 tw-text-xl">{r.text}</p>
                            <span className="d-block tw-h-px bg-neutral-100 tw-my-6"></span>
                            <div className="d-flex align-items-center justify-content-between">
                              <div>
                                <h6 className="tw-text-lg tw-mb-205">Rudra Ghosh</h6>
                                <span className="text-neutral-500">
                                  Founder &amp; CEO <span className="text-main-600">Dulalix</span>
                                </span>
                              </div>
                              <div className="d-inline-flex align-items-center tw-gap-1 bg-main-600 tw-py-05 tw-px-3 rounded-pill">
                                <span className="text-white fw-bold tw-text-sm">4.9</span>
                                <span className="text-white d-flex">
                                  <img src="/assets/images/icons/star.svg" alt="img" />
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    ))}
                  </div>
                </div>
              ))}
            </div>

            <div className="tw-mt-13 text-center">
              <a
                href="#"
                className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-17 rounded-pill tw-py-505 fw-medium"
              >
                <span className="button__flair"></span>
                <span className="button__label">Read More Story</span>
              </a>
            </div>
          </div>
        </section>
        {/* Website Owner section End */}
      </div>

      {/* Testimonials */}
      <TestimonialsSection />

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
                <h2 className="splitTextStyleOne text-heading text-capitalize">
                  Frequently ask <span className="font-dm-serif fst-italic fw-normal">Questions</span>
                </h2>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-350-px fw-medium">
                  In today&apos;s competitive business, the demand for efficient In today&apos;s competitive
                  cost-effective
                </p>
                <div className="tw-mt-9">
                  <a
                    href="#"
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-17 rounded-pill tw-py-505 fw-medium"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">Clients Area</span>
                  </a>
                </div>
              </div>
            </div>
            <div className="col-lg-8">
              <div className="ps-xl-5">
                <div className="accordion common-accordion style-two" id="accordionExample">
                  {faqs.map((faq) => (
                    <div
                      className="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                      key={faq.id}
                    >
                      <h5 className="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                        <button
                          className={`accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 ${faq.open ? "" : "collapsed"}`}
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target={`#${faq.id}`}
                          aria-expanded={faq.open ? "true" : "false"}
                          aria-controls={faq.id}
                        >
                          {faq.q}
                        </button>
                      </h5>
                      <div
                        id={faq.id}
                        className={`accordion-collapse collapse ${faq.open ? "show" : ""}`}
                        data-bs-parent="#accordionExample"
                      >
                        <div className="accordion-body p-0 tw-mt-605 max-w-620-px">
                          <p className="text-neutral-500">{faqAnswer}</p>
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
    </PageShell>
  );
}
