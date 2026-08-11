import type { ReactNode } from "react";
import Link from "next/link";
import { routes } from "@/lib/routes";

export interface MetaItem {
  icon: string;
  label: string;
  value: string;
}

export interface ChecklistBlock {
  heading: ReactNode;
  intro: string;
  items: string[];
  closing?: string;
  secondIntro?: string;
}

export interface TechStackLine {
  label?: string;
  text: string;
}

export interface ResultItem {
  text: string;
}

export interface WhyItem {
  icon: string;
  text: string;
}

export interface TestimonialData {
  heading: ReactNode;
  subtitle: string;
  images: string[];
}

export interface CaseStudyTemplateProps {
  heroHeading: ReactNode;
  heroSubtitle: string;
  heroImage: { src: string; alt: string };
  metaItems: MetaItem[];
  overviewText: string;
  challenges: ChecklistBlock;
  role: ChecklistBlock;
  solution: ChecklistBlock;
  techStack: {
    counterValue: ReactNode;
    counterLabel: string;
    lines: TechStackLine[];
  };
  results: {
    subtitle: string;
    items: ResultItem[];
  };
  testimonial?: TestimonialData;
  whyMatters: WhyItem[];
  cta: {
    badge: ReactNode;
    heading: string;
    tags: string[];
    secondaryHref?: string;
    secondaryLabel?: string;
  };
}

const resultIcons = [
  "seamless-icon1.png",
  "seamless-icon2.png",
  "seamless-icon3.png",
  "seamless-icon4.png",
];

function ChecklistSection({
  block,
  imageSide,
  imageSrc,
  bgClass,
}: {
  block: ChecklistBlock;
  imageSide: "left" | "right";
  imageSrc: string;
  bgClass?: string;
}) {
  const imageCol = (
    <div className="col-lg-6 col-md-12">
      <div
        className={`position-relative ${
          imageSide === "left" ? "ps-5 pe-lg-5" : "ps-5"
        } tw-pb-4 h-100`}
      >
        <div className="tw-rounded-28-px overflow-hidden h-100">
          <img src={imageSrc} alt="Case study visual" className="w-100 h-100 object-fit-cover" />
        </div>
        <img
          src="/assets/images/shapes/finger-shape.png"
          alt="Shape"
          className="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1"
        />
      </div>
    </div>
  );

  const textCol = (
    <div className="col-lg-6 col-md-12">
      <div>
        <h2 className="splitTextStyleOne text-heading fw-semibold text-capitalize">
          {block.heading}
        </h2>
        <p className="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">{block.intro}</p>
        {block.secondIntro && (
          <p className="fw-medium splitTextStyleOne tw-mt-3 tw-text-2xl">{block.secondIntro}</p>
        )}
        <div className="tw-mt-5 d-flex flex-column">
          {block.items.map((item, i) => (
            <div className="d-flex align-items-start tw-gap-5" key={i}>
              <span className="tw-h-505 tw-w-505 bg-main-600 text-white tw-text-sm d-flex justify-content-center align-items-center rounded-circle tw-mt-105 flex-shrink-0">
                <i className="ph ph-check"></i>
              </span>
              <p className="tw-text-lg fw-medium text-heading flex-grow-1">{item}</p>
            </div>
          ))}
        </div>
        {block.closing && (
          <p className="fs-3 fw-medium lh-sm tw-mt-8 tw-text-lg">{block.closing}</p>
        )}
      </div>
    </div>
  );

  return (
    <section className={`brand-marketing py-120 ${bgClass ?? ""}`}>
      <div className="container">
        <div className="row gy-5">
          {imageSide === "left" ? (
            <>
              {imageCol}
              {textCol}
            </>
          ) : (
            <>
              {textCol}
              {imageCol}
            </>
          )}
        </div>
      </div>
    </section>
  );
}

export default function CaseStudyTemplate({
  heroHeading,
  heroSubtitle,
  heroImage,
  metaItems,
  overviewText,
  challenges,
  role,
  solution,
  techStack,
  results,
  testimonial,
  whyMatters,
  cta,
}: CaseStudyTemplateProps) {
  return (
    <>
      {/* Banner Section */}
      <section className="case-study-banner tw-py-10 overflow-hidden position-relative">
        <div className="container max-w-1400-px">
          <div className="row gy-4 align-items-center">
            <div className="col-lg-6 mt-0">
              <div className="case-study-content">
                <h1 className="splitTextStyleOne fw-light tw-leading-104">{heroHeading}</h1>
                <p
                  style={{ color: "rgb(33 74 2)" }}
                  className="fs-4 h5 mt-3 pt-1 text-heading tw-mt-20 tw-text-lg"
                >
                  {heroSubtitle}
                </p>
              </div>
            </div>
            <div className="col-lg-6">
              <img
                src={heroImage.src}
                alt={heroImage.alt}
                className="w-100 h-100 object-fit-cover tw-rounded-2xl"
              />
            </div>
          </div>
        </div>
      </section>

      {/* Project Meta */}
      <section className="search-domain-two tw-pt-10 tw-pb-10 position-relative z-1 zal-projet-type">
        <div className="container">
          <div className="row gy-4 select-domain-wrapper">
            <div className="col-md-12">
              <div className="d-flex tw-gap-305 flex-wrap">
                {metaItems.map((m, i) => (
                  <div
                    key={i}
                    className="domain-item-button common-shadow-nine flex-grow-1 tw-min-h-144-px tw-rounded-lg text-center min-w-144-px d-flex flex-column align-items-center justify-content-center animation-item pb-3"
                  >
                    <img src={m.icon} alt={m.label} className="animate__wobble" />
                    <span className="d-block text-heading tw-mt-105 tw-text-sm fw-bold">
                      {m.label}
                    </span>
                    <span className="p-type">{m.value}</span>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Client Overview */}
      <section className="bg-body-secondary client-overview position-relative py-120 z-1">
        <div className="container">
          <div className="row gy-4 select-domain-wrapper">
            <div className="col-md-12">
              <h2 className="splitTextStyleOne fw-light tw-leading-104 text-center">
                <span className="d-inline-block">Client</span>{" "}
                <span className="text-green d-inline-block fw-semibold">Overview</span>
              </h2>
              <p className="fs-3 lh-sm mt-3 h5 mx-auto text-center w-75">{overviewText}</p>
            </div>
          </div>
        </div>
      </section>

      {/* Business Challenges */}
      <ChecklistSection
        block={challenges}
        imageSide="left"
        imageSrc="/assets/images/case-study/bio-img1.jpg"
      />

      {/* Our Role & Responsibilities */}
      <ChecklistSection
        block={role}
        imageSide="right"
        imageSrc="/assets/images/case-study/bio-img2.jpg"
        bgClass="bg-success-subtle"
      />

      {/* Solution Delivered */}
      <ChecklistSection
        block={solution}
        imageSide="left"
        imageSrc="/assets/images/case-study/bio-img3.jpg"
      />

      {/* Technology Stack */}
      <section className="pb-120 overflow-hidden position-relative">
        <img
          src="/assets/images/bg/mash-gradient-bg6.png"
          alt="Gradient BG"
          className="position-absolute tw-start-0 top-0 w-100 h-100 z-n1"
        />
        <div className="container max-w-1290-px">
          <div className="row gy-5 align-items-center flex-wrap-reverse">
            <div className="col-xl-6">
              <div className="position-relative tw-p-12 text-center">
                <img src="/assets/images/shapes/rounded-circle.png" alt="Bg Round" />
                <img
                  src="/assets/images/shapes/cms-development.png"
                  alt="Icons"
                  className="position-absolute top-50 start-50 animation-rotate-right"
                />
                <img
                  src="/assets/images/shapes/cms-development2.png"
                  alt="Icons"
                  className="position-absolute top-50 start-50 animation-rotate-left"
                />
                <div className="position-absolute top-50 start-50 translate-middle">
                  <h3>{techStack.counterValue}</h3>
                  <span className="text-heading">{techStack.counterLabel}</span>
                </div>
              </div>
            </div>
            <div className="col-xl-6">
              <div className="text-start mx-auto tw-mb-12">
                <div className="tw-mb-10">
                  <h2 className="splitTextStyleOne text-heading text-capitalize max-w-532-px">
                    Technology Stack
                  </h2>
                  <p className="flex-column d-flex text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                    {techStack.lines.map((line, i) => (
                      <span key={i}>
                        {line.label ? <b>{line.label}:</b> : null} {line.text}
                      </span>
                    ))}
                  </p>
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

      {/* Results & Impact */}
      <section className="seamless-integration py-120">
        <div className="container max-w-1400-px">
          <div className="max-w-672-px text-center mx-auto tw-mb-12">
            <h3 className="splitTextStyleOne text-heading text-capitalize">Results & Impact</h3>
            <p className="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">
              {results.subtitle}
            </p>
          </div>
          <div className="border border-neutral-200 tw-rounded-xl common-shadow-sixteen">
            <div className="row col-border-wrapper">
              {results.items.map((r, i) => (
                <div className="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0" key={i}>
                  <div className="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                    <span className="tw-mb-8">
                      <img
                        src={`/assets/images/icons/${resultIcons[i % resultIcons.length]}`}
                        alt="Icon"
                      />
                    </span>
                    <h6 className="tw-mb-10 max-w-172-px mx-auto">{r.text}</h6>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* Client Trust & Recognition (optional testimonial) */}
      {testimonial && (
        <section className="seamless-integration py-120 bg-light">
          <div className="container max-w-1400-px">
            <div className="max-w-672-px text-center mx-auto tw-mb-12">
              <h3 className="splitTextStyleOne text-heading text-capitalize">
                {testimonial.heading}
              </h3>
              <p className="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">
                {testimonial.subtitle}
              </p>
            </div>

            <div className="casstudy-testimonial d-flex">
              <div className="video-popup">
                <div className="position-relative tw-pb-8 tw-ps-12 h-100">
                  <div className="bg-white tw-p-205 tw-rounded-3xl h-100 tw-min-h-400-px">
                    <div className="position-relative max-w-390-px w-100">
                      <img
                        src="/assets/images/thumbs/service-details-video-img.jpg"
                        alt="Thumb"
                        className="w-100 h-100 object-fit-cover"
                      />
                      <a
                        href="https://www.youtube.com/watch?v=TxjsRFwDvbQ"
                        className="play-button bg-light-animation tw-w-75-px tw-h-75-px d-inline-flex justify-content-center align-items-center bg-white text-main-600 hover-text-main-two-700 rounded-circle tw-text-xl position-absolute tw-start-50 tw--translate-middle top-50 z-1"
                      >
                        <i className="ph-fill ph-play"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div className="site-screen">
                <div className="swiper shop-thumbs">
                  <div className="swiper-wrapper">
                    {testimonial.images.map((img, i) => (
                      <div className="swiper-slide" key={i}>
                        <div className="border border-neutral-200 tw-rounded-2xl d-flex align-items-center justify-content-center overflow-hidden">
                          <img src={img} alt="Thumb" />
                        </div>
                      </div>
                    ))}
                  </div>
                  <div className="swiper-button-next shop-thumbs-next"></div>
                  <div className="swiper-button-prev shop-thumbs-prev"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
      )}

      {/* Why This Case Study Matters */}
      <section className="services py-120 position-relative z-1 gradient-bg-five">
        <img
          src="/assets/images/shapes/rope-shape.png"
          alt="Rope"
          className="position-absolute tw-start-0 tw-ms-80-px tw-mt-16 top-0 z-n1"
        />
        <div className="container max-w-1552-px">
          <div className="max-w-672-px text-center mx-auto tw-mb-12">
            <h2 className="splitTextStyleOne text-white">
              Why This <span className="font-dm-serif fst-italic fw-normal">Case Study</span>{" "}
              Matters
            </h2>
          </div>
          <div className="service-slider1">
            <div className="d-flex flex-wrap gap-3 why-choose-us">
              {whyMatters.map((w, i) => (
                <div className="w-25 tw-pb-105" key={i}>
                  <div className="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                    <div className="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                      <span className="tw-mb-13 group-hover-item-text-invert">
                        <img src={w.icon} alt="Icon" className="animate__heartBeat" />
                      </span>
                      <h5 className="group-hover-text-white tw-duration-200 max-w-250-px">
                        {w.text}
                      </h5>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half pt-120">
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
              <div
                className="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13"
              >
                <div>{cta.badge}</div>
              </div>
              <h3 className="splitTextStyleOne text-white">{cta.heading}</h3>
              <div className="d-block">
                <div className="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Request a Quote</span>
                    </div>
                  </Link>
                  <a
                    target="_blank"
                    rel="noopener noreferrer"
                    href={cta.secondaryHref ?? "https://calendly.com/zalgoinfotec/30min"}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">{cta.secondaryLabel ?? "Talk to Expert"}</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div className="tw-pt-8 text-center">
              <div className="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                {cta.tags.map((tag, i) => (
                  <span
                    key={i}
                    className={`drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold rounded-pill ${
                      i % 3 === 0
                        ? "text-white gradient-bg-six"
                        : i % 3 === 1
                        ? "text-heading bg-paste"
                        : "text-heading bg-orange"
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
    </>
  );
}
