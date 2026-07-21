import Link from "next/link";
import { routes } from "@/lib/routes";
import type { ReactNode } from "react";

export interface RoadmapStep {
  label: ReactNode;
}

const STEP_STYLES = [
  { bg: "bg-main-600", mt: "tw-mt-705" },
  { bg: "bg-dark-deep", mt: "tw--mt-8-px" },
  { bg: "bg-sky-deep", mt: "tw-mt-505" },
  { bg: "bg-dark-deep", mt: "tw--mt-28-px" },
  { bg: "bg-dark-deep", mt: "tw-mt-8" },
  { bg: "bg-pink", mt: "tw--mt-8-px" },
  { bg: "bg-main-600", mt: "tw-mt-4" },
  { bg: "bg-sky-deep", mt: "tw--mt-28-px" },
];

export default function RoadmapSection({
  eyebrow,
  heading,
  description,
  ctaLabel,
  steps,
}: {
  eyebrow: string;
  heading: string;
  description: string;
  ctaLabel: string;
  steps: RoadmapStep[];
}) {
  return (
    <section className="py-120 section-bg-one">
      <div className="container max-w-1440-px">
        <div
          className="bg-main-two-600 tw-rounded-3xl overflow-hidden position-relative"
          id="roadmap-section"
        >
          <div className="tw-ps-74-px tw-pe-6">
            <div className="d-flex flex-xl-nowrap flex-wrap tw-gap-126-px">
              <div className="max-w-432-px w-100 flex-shrink-0">
                <div className="pt-120 tw-pb-9 position-relative">
                  <img
                    src="/assets/images/shapes/curve-arrow-white.png"
                    alt="Arrow"
                    className="position-absolute top-0 tw-end-0 animate__wobble__two"
                  />

                  <span className="tw-py-1 tw-px-705 bg-white-13 text-white tw-text-sm fw-semibold text-capitalize rounded-pill tw-mb-3">
                    {eyebrow}
                  </span>
                  <h3 className="splitTextStyleOne fw-light tw-leading-104 text-white tw-mb-6">
                    <span className="d-inline-block fw-semibold">{heading}</span>
                  </h3>
                  <p className="splitTextStyleOne text-neutral-400 max-w-432-px">
                    {description}
                  </p>
                  <div className="tw-mt-11 d-flex align-items-center tw-gap-42-px flex-wrap">
                    <Link
                      href={routes.contact}
                      className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-three button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
                      data-aos-anchor-placement="top-bottom"
                      data-block="button"
                    >
                      <span className="button__flair"></span>
                      <span className="button__label">{ctaLabel}</span>
                    </Link>
                    <div data-aos-anchor-placement="top-bottom">
                      <div className="d-flex align-items-center tw-gap-4">
                        <div className="d-flex align-items-center">
                          <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative z-2">
                            <img
                              src="/assets/images/thumbs/client-img1.png"
                              alt="Client Image"
                              className="w-100 h-100 object-fit-cover"
                            />
                          </div>
                          <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px z-1">
                            <img
                              src="/assets/images/thumbs/client-img2.png"
                              alt="Client Image"
                              className="w-100 h-100 object-fit-cover"
                            />
                          </div>
                          <div className="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px">
                            <img
                              src="/assets/images/thumbs/client-img3.png"
                              alt="Client Image"
                              className="w-100 h-100 object-fit-cover"
                            />
                          </div>
                        </div>
                        <span className="h5 counter text-white">20+</span>
                      </div>
                      <p className="fw-bold tw-text-sm font-heading text-heading tw-mt-2 counter text-white">
                        150+ Success Projects
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div className="flex-grow-1">
                <div className="d-flex tw-gap-3 flex-wrap">
                  {steps.map((step, index) => {
                    const style = STEP_STYLES[index % STEP_STYLES.length];
                    return (
                      <div
                        key={index}
                        className={`ball text-center rounded-circle tw-w-180-px tw-h-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item ${style.bg} ${style.mt}`}
                      >
                        <span className="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">
                          {String(index + 1).padStart(2, "0")}
                        </span>
                        <img
                          src={`/assets/images/icons/roadmap-icon${index + 1}.svg`}
                          alt="Icon"
                          className="animate__swing"
                        />
                        <h6 className="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                          {step.label}
                        </h6>
                      </div>
                    );
                  })}
                </div>
              </div>
            </div>
          </div>
          <div className="tw-pb-9">
            <img src="/assets/images/shapes/curve-line.png" alt="" className="w-100" />
          </div>
        </div>
      </div>
    </section>
  );
}
