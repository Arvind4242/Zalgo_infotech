import Link from "next/link";
import PageShell from "@/components/PageShell";
import HtmlClassSetter from "@/components/HtmlClassSetter";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "IT Solutions for Business Growth",
  description:
    "Invest with confidence and grow your future with Zalgo Infotech's cost-effective IT solutions — custom software, onboarding tools, and transaction management for modern businesses.",
  keywords: [
    "IT solutions for business",
    "custom software development",
    "business growth technology",
    "transaction management software",
    "IT consulting services",
    "Zalgo Infotech",
  ],
  path: "/index-five",
});

const brandLogosFive = [1, 2, 3, 4, 5, 6, 7, 5];

const aboutFeaturesFive = [
  {
    icon: "about-features-two-icon1.svg",
    title: "Comprehensive Education",
    desc: "Web hosting provides everything idea online. From where your",
  },
  {
    icon: "about-features-two-icon2.svg",
    title: "User-friendly Interface",
    desc: "Web hosting provides everything idea online. From where your",
  },
  {
    icon: "about-features-two-icon3.svg",
    title: "Bookkeeping & Cash Flow",
    desc: "Web hosting provides everything idea online. From where your",
  },
  {
    icon: "about-features-two-icon4.svg",
    title: "Customized reminder alerts",
    desc: "Web hosting provides everything idea online. From where your",
  },
];

const counterStatsFive = [
  { value: "282", suffix: "+", label: "worldwide clients" },
  { value: "95", suffix: "%", label: "worldwide clients" },
  { value: "282", suffix: "+", label: "worldwide clients" },
];

const downloadPointsFive = ["Registration and onboarding", "Transaction management", " Standard banking layout"];

const testimonialsFive = [
  { name: "william camel", role: "Head of Design at Zazoo" },
  { name: "Robiul Hasan", role: "Head of Design at Zazoo" },
  { name: "John Doe", role: "Head of Design at Zazoo" },
  { name: "John Smith", role: "Head of Design at Zazoo" },
];

const pricingPlansFive = [
  { price: "$129", cents: "99", title: "Weekly package" },
  { price: "$329", cents: "99", title: "Monthly package" },
  { price: "$629", cents: "99", title: "Yearly package" },
];

export default function IndexFive() {
  return (
    <PageShell>
      <HtmlClassSetter className="home-five" />

      {/* Banner Five section start */}
      <section className="banner-five">
        <div className="tw-pt-100-px tw-mx-48-px position-relative gradient-bg-seven rounded-top-30-px z-1">
          <img
            src="/assets/images/shapes/wave-line-shadow.png"
            alt="Wave Line shape"
            className="position-absolute tw-start-0 w-100 bottom-0 z-n1 pb-120"
          />

          <div className="container">
            <div className="row justify-content-center">
              <div className="col-xxl-10">
                <div className="text-center">
                  <div className="max-w-780-px text-center mx-auto">
                    <div className="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyEight">
                      what we offering
                    </div>
                    <h1 className="splitTextStyleOne text-heading text-capitalize tw-leading-none">
                      Invest with confidence Grow your future
                    </h1>
                    <p className="text-neutral-600 tw-text-xl tw-mt-605 splitTextStyleOne max-w-5 mx-auto fw-medium tw-leading-145 max-w-548-px">
                      In today&apos;s competitive business, the demand for efficient and cost-effective IT solutions
                      has never been more critical.
                    </p>
                    <div className="d-flex align-items-center justify-content-center tw-gap-405 tw-mt-10">
                      <div>
                        <a
                          href="https://play.google.com/store/apps"
                          className="hover--translate-y-1 active--translate-y-scale-9 tw-rounded-2xl common-shadow-twentyEight"
                        >
                          <img src="/assets/images/icons/store-two1.png" alt="App Store" />
                        </a>
                      </div>
                      <div>
                        <a
                          href="https://www.apple.com/app-store"
                          className="hover--translate-y-1 active--translate-y-scale-9 tw-rounded-2xl common-shadow-twentyEight"
                        >
                          <img src="/assets/images/icons/store-two2.png" alt="Google Store" />
                        </a>
                      </div>
                    </div>
                  </div>

                  <div className="tw-mt-14 d-inline-flex">
                    <img src="/assets/images/thumbs/banner-five-thumb.png" alt="Thumbnail" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Banner Five section End */}

      {/* Brand Five section start */}
      <div className="brand-three pt-120">
        <div className="container">
          <div className="tw-py-13 position-relative">
            <span className="gradient-line w-100 tw-h-px position-absolute top-0 tw-start-0"></span>
            <span className="gradient-line w-100 tw-h-px position-absolute bottom-0 tw-start-0"></span>

            <div className="text-center tw-mb-16">
              <h5 className="mb-0 line-clamp-1">
                Loved by next-gen B2B <span className="text-gradient-teal">SaaS</span> compnaies.....
              </h5>
            </div>
            <div className="brand-three-slider swiper left-right-gradient gradient-width-200">
              <div className="swiper-wrapper">
                {brandLogosFive.map((n, i) => (
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
      </div>
      {/* Brand Five section end */}

      {/* Work process five section start */}
      <section className="work-process-five py-120">
        <div className="container">
          <div className="text-center mx-auto tw-pb-15">
            <div className="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine">
              {" "}
              what we offering
            </div>
            <h2 className="splitTextStyleOne text-heading text-capitalize tw-leading-none">
              Simplifying your investment journey
            </h2>
          </div>

          <div className="position-relative tw-mt-17 stair-bg tw-rounded-28-px">
            <div className="tw-px-40-px d-flex tw-pt-14 gradient-bg-eight tw-rounded-28-px position-relative flex-md-nowrap flex-wrap tw-gap-6">
              <div className="max-w-780-px mx-auto">
                <div className="text-center ">
                  <div className="bg-transparent border border-blue text-blue tw-py-2 tw-px-7 rounded-pill fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyEight">
                    what we offering
                  </div>
                  <h2 className="splitTextStyleOne text-heading text-capitalize tw-leading-none max-w-500-px mx-auto">
                    Sign up and secure your account
                  </h2>
                  <p className="text-neutral-600 tw-text-xl tw-mt-605 splitTextStyleOne max-w-5 mx-auto fw-medium tw-leading-145 max-w-548-px">
                    In today&apos;s competitive business, the demand for efficient and cost-effective IT solutions
                    has never been more critical.
                  </p>
                </div>

                <div className="tw-mt-80-px d-flex justify-content-between position-relative z-1 tw-gap-2 tw-pb-10">
                  <span className="tw-w-100--40-px tw-h-px bg-white position-absolute tw-start-50 translate-middle-x top-0 z-n1 tw-mt-2"></span>

                  <div className="text-center">
                    <span className="tw-w-405 tw-h-405 bg-deep-green rounded-circle"></span>
                    <span className="text-heading fw-semibold d-block tw-mt-4 text-capitalize">Sign up</span>
                  </div>
                  <div className="text-center">
                    <span className="tw-w-405 tw-h-405 rounded-circle bg-white common-shadow-twentyEight"></span>
                    <span className="text-heading fw-semibold d-block tw-mt-4 text-capitalize">
                      investment goals
                    </span>
                  </div>
                  <div className="text-center">
                    <span className="tw-w-405 tw-h-405 rounded-circle bg-main-600"></span>
                    <span className="text-heading fw-semibold d-block tw-mt-4 text-capitalize">start investing</span>
                  </div>
                </div>
              </div>

              <div className="d-flex flex-column justify-content-end">
                <img src="/assets/images/thumbs/work-process-five-thumb.png" alt="Thumbnail" />
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Work process five section End */}

      {/* Offer Five section start */}
      <section className="offer-five py-120">
        <div className="container">
          <div className="row justify-content-center">
            <div className="col-xl-10">
              <div className="row gy-5 flex-wrap-reverse">
                <div className="col-md-6">
                  <div className="pe-lg-5 d-flex h-100">
                    <img src="/assets/images/thumbs/offer-five-thumb.png" alt="Thumbnail" className="w-100" />
                  </div>
                </div>
                <div className="col-md-6">
                  <div>
                    <div className="max-w-780-px text-start mx-auto">
                      <div className="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine">
                        what we offering
                      </div>
                      <h2 className="splitTextStyleOne text-heading text-capitalize tw-leading-none">
                        Why should you choose Sassly mobile app.
                      </h2>
                      <p className="text-neutral-600 tw-text-lg tw-mt-605 splitTextStyleOne max-w-5 fw-medium tw-leading-145 max-w-570-px">
                        Sassly-CRM in the past allowing you to focus more on your business simply enjoy your
                        newfound legal time to reflect leaving pen
                      </p>
                    </div>
                    <div className="tw-mt-11 d-flex flex-column tw-gap-7">
                      <div className="tw-rounded-3xl border border-neutral-100 tw-py-8 tw-px-9 hover-bg-neutral-100 tw-duration-300 d-flex align-items-start tw-gap-605">
                        <div>
                          <img src="/assets/images/icons/offer-five-icon1.png" alt="icon" />
                        </div>
                        <div>
                          <h6 className="tw-mb-405 splitTextStyleOne">240K+ Download worldwide</h6>
                          <p className="tw-text-lg text-neutral-600 max-w-278-px tw-leading-153 splitTextStyleOne">
                            Analytics refers to the systematic collection interpretation.
                          </p>
                        </div>
                      </div>
                      <div className="tw-rounded-3xl border border-neutral-100 tw-py-8 tw-px-9 hover-bg-neutral-100 tw-duration-300 d-flex align-items-start tw-gap-605">
                        <div>
                          <img src="/assets/images/icons/offer-five-icon2.png" alt="icon" />
                        </div>
                        <div>
                          <h6 className="tw-mb-405 splitTextStyleOne">Average 5 star rating</h6>
                          <p className="tw-text-lg text-neutral-600 max-w-278-px tw-leading-153 splitTextStyleOne">
                            Analytics refers to the systematic collection interpretation.
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
      {/* Offer Five section End */}

      {/* About Features section Start */}
      <section className="about-features">
        <div className="container">
          <div className="text-center mx-auto tw-pb-15 max-w-910-px">
            <div className="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine">
              {" "}
              what we offering
            </div>
            <h2 className="splitTextStyleOne text-heading text-capitalize tw-leading-none">
              Simplifying your investment journey
            </h2>
            <p className="splitTextStyleOne text-neutral-500 max-w-602-px mx-auto fw-medium tw-mt-5">
              Discover how Upshift not only simplifies your investment process but also empowers you to make
              smarter, data-driven decisions.
            </p>
          </div>

          <div className="row gy-4">
            {aboutFeaturesFive.map((f) => (
              <div className="col-xl-3 col-sm-6" key={f.title}>
                <div className="tw-rounded-2xl bg-neutral-50 bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-100 group animation-item group-item tw-transition tw-duration-200 h-100">
                  <span className="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                    <img
                      src={`/assets/images/icons/${f.icon}`}
                      alt="Icon"
                      className="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat"
                    />
                  </span>
                  <h4 className="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                    {f.title}
                  </h4>
                  <p className="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                    {f.desc}
                  </p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
      {/* About Features section End */}

      {/* Counter Up section Start */}
      <section className="pt-120">
        <div className="container">
          <div className="text-center mx-auto tw-pb-15 max-w-548-px">
            <div className="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine">
              {" "}
              what we offering
            </div>
            <h2 className="splitTextStyleOne text-heading text-capitalize tw-leading-none">
              Trueted CRM tools by the happy users
            </h2>
          </div>

          <div className="border-top border-bottom d-flex justify-content-center flex-sm-nowrap flex-wrap tw-gap-148-px">
            {counterStatsFive.map((stat, i) => (
              <>
                {i > 0 && (
                  <div className="d-flex" key={`divider-${i}`}>
                    <div className="tw-w-1-px h-100 bg-neutral-200"></div>
                  </div>
                )}
                <div
                  className="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200"
                  key={i}
                >
                  <h2 className="h1 text-main-600">
                    <span className="counter">{stat.value}</span>
                    <span>{stat.suffix}</span>
                  </h2>
                  <span className="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">{stat.label}</span>
                </div>
              </>
            ))}
          </div>
        </div>
      </section>
      {/* Counter Up section End */}

      {/* Download App section start */}
      <section className="download-app py-120">
        <div className="container">
          <div className="row gy-4 align-items-center">
            <div className="col-md-6">
              <div>
                <img src="/assets/images/thumbs/download-app-thumb.png" alt="Thumbnail" />
              </div>
            </div>
            <div className="col-md-6">
              <div>
                <div className="max-w-780-px text-start mx-auto">
                  <div className="bg-main-600 tw-py-2 tw-px-7 rounded-pill text-white fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-6 min-w-max common-shadow-twentyNine">
                    what we offering
                  </div>
                  <h2 className="splitTextStyleOne text-heading text-capitalize tw-leading-none">
                    Why should you choose Sassly mobile app.
                  </h2>
                  <p className="text-neutral-600 tw-text-lg tw-mt-605 splitTextStyleOne max-w-5 fw-medium tw-leading-145 max-w-570-px">
                    Sassly-CRM in the past allowing you to focus more on your business simply enjoy your newfound
                    legal time to reflect leaving pen
                  </p>
                </div>

                <div className="d-flex flex-column tw-gap-5 tw-mt-12">
                  {downloadPointsFive.map((p) => (
                    <div className="d-flex align-items-center tw-gap-205" key={p}>
                      <span className="tw-w-8 tw-h-8 bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center tw-text-lg text-heading">
                        <i className="ph-bold ph-check"></i>
                      </span>
                      <span className="text-heading tw-text-lg fw-semibold">{p}</span>
                    </div>
                  ))}
                </div>
                <div className="tw-mt-13">
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-505 fw-semibold common-shadow-inset-one"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">Download app now</span>
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Download App section end */}

      {/* App screenshot section start */}
      <section className="app-screenshot position-relative gradient-bg-nine z-1 overflow-hidden">
        <img
          src="/assets/images/shapes/arrow-synchronize.png"
          alt="Arrow Synchronize Shape"
          className="position-absolute top-0 tw-start-0 tw-ms-17 tw-mt-160-px animation-rotate-center d-md-block d-none"
        />
        <img
          src="/assets/images/shapes/pattern-shape1.png"
          alt="Pattern Shape"
          className="position-absolute top-0 tw-start-0 z-n1"
        />

        <div className="container">
          <div className="text-center mx-auto tw-pb-15 max-w-910-px">
            <div className="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine">
              {" "}
              what we offering
            </div>
            <h2 className="splitTextStyleOne text-heading text-capitalize tw-leading-none">
              Simplifying your investment journey
            </h2>
            <p className="splitTextStyleOne text-neutral-500 max-w-602-px tw-text-lg mx-auto fw-medium tw-mt-5">
              Discover how Upshift not only simplifies your investment process but also empowers you to make
              smarter, data-driven decisions.
            </p>
          </div>

          <div className="text-center">
            <img src="/assets/images/thumbs/app-download-thumb.png" alt="Screenshot Images" />
          </div>
        </div>
      </section>
      {/* App screenshot section End */}

      {/* Testimonials Five section start */}
      <section className="py-120 bg-black">
        <div className="text-center mx-auto tw-pb-15 max-w-548-px">
          <div className="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine">
            {" "}
            what we offering
          </div>
          <h2 className="splitTextStyleOne text-white text-capitalize tw-leading-none">
            Trusted CRM tools by the happy users
          </h2>
        </div>

        <div>
          <div className="swiper testimonials-five-slider">
            <div className="swiper-wrapper">
              {testimonialsFive.map((t, i) => (
                <div className="swiper-slide" key={i}>
                  <div>
                    <div className="common-shadow-ten tw-rounded-2xl tw-p-60-px bg-white h-100 animation-item">
                      <div className="d-flex align-items-center justify-content-between">
                        <div>
                          <h5 className="tw-mb-2 text-capitalize">{t.name}</h5>
                          <span className="text-neutral-500 fw-medium">{t.role}</span>
                        </div>
                        <div>
                          <img src="/assets/images/icons/ratings.svg" alt="Star Rating" />
                        </div>
                      </div>
                      <h4 className="max-w-288-px tw-mt-8 tw-mb-9">
                        I had a great experience with printSpace!
                      </h4>
                      <p className="text-neutral-600 tw-text-2xl tw-leading-153">
                        Good Time is very good in what they&apos;re doing and more than happy to challenge and push
                        you to think about your decisions both from usable
                      </p>
                    </div>
                  </div>
                </div>
              ))}
            </div>
            <div className="testimonials-five-slider-pagination pagination-style-four d-flex align-items-center justify-content-center tw-gap-6 tw-mt-15 tw-pb-3"></div>
          </div>
        </div>
      </section>
      {/* Testimonials Five section End */}

      {/* Pricing plan five section start */}
      <section className="pricing-five py-120 bg-white">
        <div className="container">
          <div className="max-w-570-px text-start tw-mb-10">
            <div className="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine">
              Pricing Plan
            </div>
            <h2 className="splitTextStyleOne text-heading text-capitalize tw-leading-none">
              Affordable pricing plan for your business
            </h2>
          </div>

          <div className="swiper pricing-five-slider">
            <div className="swiper-wrapper">
              {pricingPlansFive.map((plan) => (
                <div className="swiper-slide" key={plan.title}>
                  <div className="border border-neutral-200 tw-rounded-xl position-relative tw-p-44-px animation-item group-item group hover-border-main-600 tw-duration-200 d-flex align-items-center tw-gap-48-px">
                    <h3 className="position-absolute top-0 tw-end-0 tw-mt-10 tw-me-10">
                      {plan.price}.<span className="tw-text-xl">{plan.cents}</span>
                    </h3>
                    <span className="tw-w-16 tw-h-16 bg-main-50 tw-rounded-md d-flex justify-content-center align-items-center group-hover-bg-main-600 tw-duration-200 flex-shrink-0">
                      <img
                        src="/assets/images/icons/pricing-five-icon1.svg"
                        alt="Icon"
                        className="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat"
                      />
                    </span>
                    <div className="flex-grow-1">
                      <span className="text-heading fw-medium tw-py-05 tw-px-6 border border-neutral-600 rounded-pill tw-text-sm">
                        20% off
                      </span>
                      <h4 className="tw-mt-4">{plan.title}</h4>
                      <p className="text-neutral-600 tw-text-lg tw-mt-3 fw-medium max-w-432-px">
                        Subscription fee is $129.99 USD and automatically renews each year.
                      </p>
                    </div>
                  </div>
                </div>
              ))}
            </div>
            <div className="pricing-five-slider-pagination pagination-style-four pagination-style-five d-flex align-items-center justify-content-center tw-gap-4 tw-mt-15 tw-pb-3"></div>
          </div>
        </div>
      </section>
      {/* Pricing plan five section End */}
    </PageShell>
  );
}
