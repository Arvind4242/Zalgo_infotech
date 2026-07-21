export default function TestimonialsSection() {
  return (
    <section className="testimonials py-120 bg-neutral-50 position-relative z-1">
      <img
        src="/assets/images/shapes/faq-bg.png"
        alt=""
        className="position-absolute tw-start-0 top-0 w-100 h-100 z-n1"
      />

      <div className="container">
        <div className="max-w-602-px mx-auto text-center tw-mb-15">
          <span className="tw-py-1 tw-px-705 bg-neutral-100 tw-text-sm fw-medium text-capitalize rounded-pill tw-mb-205">
            Trusted by Clients
          </span>
          <h3 className="splitTextStyleOne fw-light tw-leading-104 tw-mb-9 d-flex gap-2 justify-content-center">
            <span className="d-inline-block fw-medium">
              <span>What </span>
              <span className="fw-semibold">Our Client</span>
              <span> Say</span>
              <span className="fw-semibold">About Us</span>
            </span>
          </h3>
        </div>

        <div className="d-flex tw-gap-6 testimonials-item-wrapper flex-wrap">
          {/* Testimonials Item 1 */}
          <div className="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100">
            <div className="current-content">
              <div className="tw-max-h-397-px overflow-hidden text-center">
                <img src="/assets/images/thumbs/testimonials-img1.png" alt="Image" />
              </div>
              <div className="tw-py-8 tw-px-4 text-center">
                <h6 className="tw-mb-2">Ryan</h6>
                <span className="text-neutral-600 fw-medium tw-text-sm">
                  <span className="fw-semibold text-neutral-600">CEO -</span> and Founder
                </span>
              </div>
            </div>

            <div className="d-flex flex-column h-100 hidden-content p-3">
              <div>
                <div className="video-testimonial">
                  <img src="/assets/images/case-study/finance-case-study.png" alt="Image" />
                </div>
                <div className="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                  <p className="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                    &ldquo;For over four years, they have been our trusted development
                    partner, transforming our Figma designs into a fully functional
                    WordPress website. Their attention to UI detail and frontend
                    precision has consistently elevated our digital presence.&rdquo;
                  </p>
                </div>
              </div>
              <div className="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                <div className="tw-h-84-px tw-w-84-px rounded-circle">
                  <img
                    src="/assets/images/thumbs/testimonials-short-img1.png"
                    alt="Image"
                    className="w-100 h-100 object-fit-cover"
                  />
                </div>
                <div>
                  <h6 className="tw-mb-2">Ryan</h6>
                  <span className="text-neutral-600">
                    <span className="fw-semibold text-neutral-600">CEO - </span>
                    and Founder
                  </span>
                </div>
              </div>
            </div>
          </div>

          {/* Testimonials Item 2 */}
          <div className="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100 active">
            <div className="current-content">
              <div className="tw-max-h-397-px overflow-hidden text-center">
                <img src="/assets/images/thumbs/testimonials-img3.png" alt="Image" />
              </div>
              <div className="tw-py-8 tw-px-4 text-center">
                <h6 className="tw-mb-2">Roland Thomas</h6>
                <span className="text-neutral-600 fw-medium tw-text-sm">
                  <span className="fw-semibold text-main-600">CEO -</span> and Founder
                </span>
              </div>
            </div>

            <div className="d-flex flex-column h-100 hidden-content p-3">
              <div>
                <div className="video-testimonial">
                  <iframe
                    width="100%"
                    height={350}
                    src="https://www.youtube.com/embed/TxjsRFwDvbQ?si=LA4zrJXjOhfKCdMM"
                    title="Dummy Video For Website"
                    frameBorder={0}
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerPolicy="strict-origin-when-cross-origin"
                    allowFullScreen
                  ></iframe>
                </div>
                <div className="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                  <p className="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                    &ldquo;Over the past five years, they have managed our
                    complete eCommerce infrastructure — from SEO strategy
                    to payment gateway integrations and ongoing technical
                    optimization. Their 24/7 support and proactive approach
                    have played a key role in our consistent business growth.&rdquo;
                  </p>
                </div>
              </div>
              <div className="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                <div className="tw-h-84-px tw-w-84-px rounded-circle">
                  <img
                    src="/assets/images/thumbs/testimonials-short-img3.png"
                    alt="Image"
                    className="w-100 h-100 object-fit-cover"
                  />
                </div>
                <div>
                  <h6 className="tw-mb-2">Roland Thomas</h6>
                  <span className="text-neutral-600">
                    <span className="fw-semibold text-main-600">CEO</span> and Founder
                  </span>
                </div>
              </div>
            </div>
          </div>

          {/* Testimonials Item 3 */}
          <div className="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100">
            <div className="current-content">
              <div className="tw-max-h-397-px overflow-hidden text-center">
                <img src="/assets/images/thumbs/testimonials-img2.png" alt="Image" />
              </div>
              <div className="tw-py-8 tw-px-4 text-center">
                <h6 className="tw-mb-2">— Edmilson</h6>
                <span className="text-neutral-600 fw-medium tw-text-sm">
                  <span className="fw-semibold text-neutral-600">
                    Backend Systems Developer -
                  </span>{" "}
                  Brazil
                </span>
              </div>
            </div>

            <div className="d-flex flex-column h-100 hidden-content p-3">
              <div>
                <div className="video-testimonial">
                  <img src="/assets/images/case-study/edmilson-testi.png" alt="Image" />
                </div>
                <div className="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                  <p className="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                    &ldquo;Over the 6+ years, we&rsquo;ve worked closely on multiple backend
                    systems built with PHP, Node.js, and Laravel.
                    Their reliability, clean architecture approach, and consistent
                    support make them a trusted long-term technical partner.&rdquo;
                  </p>
                </div>
              </div>
              <div className="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                <div className="tw-h-84-px tw-w-84-px rounded-circle">
                  <img
                    src="/assets/images/thumbs/testimonials-short-img2.png"
                    alt="Image"
                    className="w-100 h-100 object-fit-cover"
                  />
                </div>
                <div>
                  <h6 className="tw-mb-2">— Edmilson</h6>
                  <span className="text-neutral-600 fw-medium tw-text-sm">
                    <span className="fw-semibold text-neutral-600">
                      Backend Systems Developer -
                    </span>{" "}
                    Brazil
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
