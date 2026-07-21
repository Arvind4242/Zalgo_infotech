import type { ReactNode } from "react";
import Link from "next/link";
import { routes } from "@/lib/routes";
import RoadmapSection, { type RoadmapStep } from "@/components/services/RoadmapSection";
import TestimonialSection from "@/components/services/TestimonialSection";
import WhoShouldHireAccordion, { type WhoShouldHireItem } from "@/components/hire/WhoShouldHireAccordion";
import HireFaqAccordion, { type HireFaqItem } from "@/components/hire/HireFaqAccordion";

export interface HireChecklistItem {
  label: string;
}

export interface HiringModel {
  icon: string;
  title: string;
  desc: string;
}

const aboutThumbs = [
  "zalgo1",
  "zalgo2",
  "zalgo3",
  "zalgo4",
  "zalgo5",
  "zalgo6",
  "zalgo7",
  "zalgo8",
  "zalgo9",
  "zalgo10",
];

const defaultHiringModels: HiringModel[] = [
  {
    icon: "Dedicated-Developer.png",
    title: "Dedicated Developer",
    desc: "Hire a full-time developer committed exclusively to your business growth.",
  },
  {
    icon: "Hourly-Hiring.png",
    title: "Hourly Hiring",
    desc: "Pay only for the hours worked with complete flexibility.",
  },
  {
    icon: "Project-Based-Hiring.png",
    title: "Project-Based Hiring",
    desc: "Defined milestones, clear timelines, and predictable project costs.",
  },
];

export default function HireLandingTemplate({
  developerLabel,
  bannerHeadingSuffix,
  bannerDesc,
  whyChooseSavingBadge,
  whyChooseDesc,
  whyChooseChecklist,
  hiringBadge,
  hiringModels = defaultHiringModels,
  aboutBadgePrefix,
  aboutBadgeHighlight,
  aboutBadgeSuffix,
  aboutHeadingPrefix,
  aboutHeadingItalic,
  aboutHeadingSuffix,
  aboutDesc,
  aboutChecklist,
  distractionHeading,
  distractionIcons,
  roadmapDescription,
  roadmapSteps,
  whoShouldHireDesc,
  whoShouldHireItems,
  faqSectionDesc,
  faqItems,
  finalCtaHeading,
}: {
  developerLabel: ReactNode;
  bannerHeadingSuffix: ReactNode;
  bannerDesc: ReactNode;
  whyChooseSavingBadge: ReactNode;
  whyChooseDesc: string;
  whyChooseChecklist: string[];
  hiringBadge: ReactNode;
  hiringModels?: HiringModel[];
  aboutBadgePrefix: ReactNode;
  aboutBadgeHighlight: ReactNode;
  aboutBadgeSuffix: ReactNode;
  aboutHeadingPrefix: ReactNode;
  aboutHeadingItalic: ReactNode;
  aboutHeadingSuffix: ReactNode;
  aboutDesc: string;
  aboutChecklist: string[];
  distractionHeading: ReactNode;
  distractionIcons: string[];
  roadmapDescription: string;
  roadmapSteps: RoadmapStep[];
  whoShouldHireDesc: string;
  whoShouldHireItems: WhoShouldHireItem[];
  faqSectionDesc: string;
  faqItems: HireFaqItem[];
  finalCtaHeading: ReactNode;
}) {
  return (
    <>
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
                  Hire Dedicated{" "}
                  <span className="text-gradient-teal font-dm-serif fst-italic fw-normal">
                    {developerLabel}
                  </span>{" "}
                  {bannerHeadingSuffix}
                </h1>
                <p className="splitTextStyleOne text-white tw-text-lg tw-mt-8">{bannerDesc}</p>

                <div className="d-flex align-items-center tw-gap-7 tw-mt-11">
                  <a
                    href="https://calendly.com/zalgoinfotec/30min"
                    target="_blank"
                    rel="noreferrer"
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Book a Free 30-Minute Consultation</span>
                    </div>
                  </a>
                </div>

                <div className="d-flex align-items-center tw-gap-7 tw-mt-10 flex-wrap">
                  <div className="d-flex align-items-center tw-gap-205">
                    <span className="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                      <i className="ph-bold ph-check"></i>
                    </span>
                    <span className="text-white">NDA Protected</span>
                  </div>
                  <div className="d-flex align-items-center tw-gap-205">
                    <span className="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                      <i className="ph-bold ph-check"></i>
                    </span>
                    <span className="text-white">Flexible Hiring Models</span>
                  </div>
                  <div className="d-flex align-items-center tw-gap-205">
                    <span className="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                      <i className="ph-bold ph-check"></i>
                    </span>
                    <span className="text-white">Global Time-Zone Support</span>
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

      {/* Automation Section start */}
      <section className="automation pt-120 position-relative z-1 tw-pb-94-px">
        <div className="container">
          <div className="row gy-5">
            <div className="col-lg-6">
              <div className="automation-content">
                <div className="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green">
                  <div className="text-gradient-teal">{whyChooseSavingBadge}</div>
                </div>
                <h2 className="splitTextStyleOne text-heading text-capitalize">
                  Why Clients <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">Choose</span>{" "}
                  Our Developers
                </h2>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                  {whyChooseDesc}
                </p>

                <div className="tw-mt-9 d-flex flex-column align-items-start tw-gap-6">
                  {whyChooseChecklist.map((item) => (
                    <div
                      className="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                      key={item}
                    >
                      <img src="/assets/images/icons/check-star.png" alt="Check Icon" className="animate__bounce" />
                      <span className="fw-bold text-heading">{item}</span>
                    </div>
                  ))}
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
                  <div className="text-gradient-teal">{hiringBadge}</div>
                </div>
                <h2 className="splitTextStyleOne text-heading text-capitalize">
                  Flexible <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">Hiring Options</span>
                </h2>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                  Choose a hiring model that works for you. We offer flexible engagement options so you can
                  collaborate directly with skilled developers, scale anytime, and stay fully in control.
                </p>

                <div className="tw-mt-13 d-flex flex-column tw-gap-12">
                  {hiringModels.map((model) => (
                    <div className="d-flex align-items-start tw-gap-10 animation-item" key={model.title}>
                      <span className="tw-mt-105 animate__wobble">
                        <img src={`/assets/images/icons/${model.icon}`} alt="Icon" />
                      </span>
                      <div>
                        <h5 className="tw-mb-6">{model.title}</h5>
                        <p className="text-neutral-600 max-w-432-px">{model.desc}</p>
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

                <div className="d-flex tw-gap-6 tw-max-h-666-px">
                  <div className="swiper overflow-hidden about-two-thumbs-slider-one w-50">
                    <div className="swiper-wrapper transition-timing-linear tw-gap-6">
                      {aboutThumbs.map((img, i) => (
                        <div className="swiper-slide" key={`s1-${i}`}>
                          <div className="tw-rounded-2xl overflow-hidden">
                            <img
                              src={`/assets/images/service-product/${img}.png`}
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
                      {aboutThumbs.map((img, i) => (
                        <div className="swiper-slide" key={`s2-${i}`}>
                          <div className="tw-rounded-2xl overflow-hidden">
                            <img
                              src={`/assets/images/service-product/${img}.png`}
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
                  {aboutBadgePrefix} <span className="text-yellow">{aboutBadgeHighlight}</span>
                  {aboutBadgeSuffix}
                </div>
                <h2 className="splitTextStyleOne text-heading text-capitalize">
                  {aboutHeadingPrefix} <span className="font-dm-serif fst-italic fw-normal">{aboutHeadingItalic}</span>{" "}
                  {aboutHeadingSuffix}
                </h2>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                  {aboutDesc}
                </p>

                <div className="tw-mt-8">
                  <div className="d-flex align-items-center tw-gap-16">
                    <div className="d-flex flex-column tw-gap-305">
                      {aboutChecklist.map((item) => (
                        <div className="d-flex align-items-center tw-gap-405 animation-item" key={item}>
                          <span className="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                            <i className="animate__heartBeat ph-bold ph-check"></i>
                          </span>
                          <span className="fw-bold tw-text-lg text-heading hover-underline">{item}</span>
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
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">Get Free Consultation</span>
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* About Two Section end */}

      {/* Distraction section start */}
      <section className="distraction pb-120">
        <div className="container max-w-1290-px">
          <div className="position-relative distraction__inner">
            <div className="max-w-602-px w-100 text-center mx-auto position-absolute z-1 tw-start-50 translate-middle-x top-0 mt-5 pt-lg-5 pt-4">
              <h2 className="splitTextStyleOne text-heading text-capitalize">{distractionHeading}</h2>
            </div>

            <div>
              <img src="/assets/images/shapes/net-shape.png" alt="Net Shape" />
            </div>
            <div>
              {distractionIcons.map((icon, i) => (
                <div
                  key={icon}
                  className={`distraction-icon ${
                    ["one", "two", "three", "four", "five", "six", "seven"][i] ?? "seven"
                  } position-absolute z-1 ${i === 0 ? "animation-scalation" : i % 2 === 0 ? "animation-scalation" : "animation-upDown"}`}
                >
                  <img src={`/assets/images/tech-stack/${icon}`} alt="Icon Image" />
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>
      {/* Distraction section End */}

      <RoadmapSection
        eyebrow="What we do"
        heading="Working Roadmap"
        description={roadmapDescription}
        ctaLabel="Hire Now"
        steps={roadmapSteps}
      />

      {/* FAQ section start */}
      <section className="faq py-120 position-relative z-1 overflow-hidden">
        <img
          src="/assets/images/shapes/faq-bg.png"
          alt=""
          className="position-absolute tw-start-0 top-0 w-100 h-100 z-n1"
        />

        <div className="container">
          <div className="tw-mb-8">
            <span className="tw-py-1 tw-px-705 bg-white text-main-600 tw-text-sm fw-bold text-capitalize rounded-pill tw-mb-205">
              tech solution
            </span>
            <div className="d-flex flex-lg-nowrap flex-wrap justify-content-between align-items-center">
              <div className="max-w-672-px">
                <h3 className="splitTextStyleOne fw-light tw-leading-104">
                  <span className="d-inline-block">Who Should</span>
                </h3>
                <h3 className="splitTextStyleOne fw-light tw-leading-104">
                  <span className="d-inline-block fw-semibold">Hire Our Developers</span>
                </h3>
              </div>
            </div>
          </div>

          <div className="row gy-4">
            <div className="col-lg-12">
              <p className="splitTextStyleOne text-neutral-600 max-w-500-px tw-mb-15">{whoShouldHireDesc}</p>
              <WhoShouldHireAccordion items={whoShouldHireItems} />
            </div>
          </div>
        </div>
      </section>
      {/* FAQ section end */}

      <TestimonialSection />

      {/* Faq Two Section Start */}
      <section className="faq-two py-120">
        <div className="container">
          <div className="row gy-4">
            <div className="col-lg-4">
              <div>
                <h3 className="splitTextStyleOne text-heading text-capitalize">
                  Frequently ask
                  <span className="font-dm-serif fst-italic fw-normal"> Questions</span>
                </h3>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-350-px fw-medium">{faqSectionDesc}</p>

                <div className="tw-mt-9">
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">Talk to Our Experts</span>
                  </Link>
                </div>
              </div>
            </div>
            <div className="col-lg-8">
              <div className="ps-xl-5">
                <HireFaqAccordion items={faqItems} />
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Faq Two Section End */}

      {/* Driven section Start */}
      <section className="py-120">
        <div className="container">
          <div>
            <img src="/assets/images/thumbs/driven-img.png" alt="Thumb" />
            <div className="max-w-780-px text-center mx-auto">
              <div className="tw-mb-10 max-w-672-px mx-auto text-center">
                <h4 className="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                  {finalCtaHeading}
                </h4>
                <h2 className="splitTextStyleOne text-heading text-capitalize">
                  <span className="fw-normal">Let&rsquo;s discuss your requirements</span> and get started.
                </h2>
              </div>
              <div className="d-flex align-items-center tw-gap-4 justify-content-center tw-mt-10">
                <div className="d-inline-flex align-items-center tw-gap-5 tw-mt-8 flex-wrap">
                  <Link
                    href={routes.contact}
                    className="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">Hire Now</span>
                  </Link>
                  <a
                    href="https://calendly.com/zalgoinfotec/30min"
                    target="_blank"
                    rel="noreferrer"
                    className="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-orange-outline hover-style-five hover-text-white button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold bg-white"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label">Talk to an Expert</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Driven section End */}
    </>
  );
}
