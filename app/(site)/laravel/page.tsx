import Link from "next/link";
import PageShell from "@/components/PageShell";
import RoadmapSection from "@/components/services/RoadmapSection";
import TestimonialSection from "@/components/services/TestimonialSection";
import FaqAccordion from "@/components/services/FaqAccordion";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Laravel Development Services",
  description:
    "Custom Laravel development with clean MVC architecture, secure RESTful APIs, and third-party integrations. Scalable, enterprise-grade web applications.",
  keywords: [
    "Laravel development services",
    "hire Laravel developers",
    "custom Laravel web application development",
    "Laravel API development company",
    "Laravel development company",
    "PHP Laravel development services",
  ],
  path: "/laravel",
});

const thumbSlider = ["laravel1", "laravel2", "laravel3", "laravel4", "laravel5"];

const checklist = [
  "MVC-based clean architecture",
  "Scalable & modular development",
  "Secure APIs & authentication",
  "Clean, maintainable & future-ready code",
];

const seamlessBoxes = [
  {
    icon: "Custom-Development.png",
    title: "Custom Laravel Development",
    desc: "We design and develop custom Laravel web applications tailored to your business goals, ensuring clean architecture, flexibility, and enterprise-level performance.",
  },
  {
    icon: "API-development.png",
    title: "Laravel API Development",
    desc: "Build secure, high-performance RESTful APIs using Laravel to enable smooth communication between applications, platforms, and third-party services.",
  },
  {
    icon: "Third-party-integrations.png",
    title: "Third-Party Integrations",
    desc: "We integrate payment gateways, CRMs, ERP systems, analytics tools, and cloud services to streamline operations and improve efficiency.",
  },
  {
    icon: "Maintenance-support.png",
    title: "Maintenance & support",
    desc: "Ongoing Laravel application monitoring, updates, performance optimization, and technical support to keep your systems secure, fast, and reliable.",
  },
];

const roadmapSteps = [
  { label: "Brainstorming" },
  {
    label: (
      <>
        UX <br />
        Research
      </>
    ),
  },
  { label: "Product Designing" },
  { label: "Front-End Development" },
  {
    label: (
      <>
        Usability <br />
        Testing
      </>
    ),
  },
  { label: "Back-End Development" },
  { label: "SEO Optimization" },
  { label: "Digital Marketing" },
];

const whyChooseUs = [
  {
    icon: "Why-Choose-Us-for-Nodejs-Development.png",
    badge: "Performance Optimized",
    title: "High-Performance Development",
    desc: "We build fast and efficient Laravel applications optimized for speed, scalability, and long-term stability using clean MVC architecture.",
  },
  {
    icon: "Experienced-Nodejs-Team.png",
    badge: "Proven Industry Experience",
    title: "Experienced Laravel Team",
    desc: "Our skilled Laravel developers bring deep framework expertise, industry best practices, and proven delivery for complex web applications.",
  },
  {
    icon: "Scalable-Architecture.png",
    badge: "Built for Growth",
    title: "Scalable Architecture",
    desc: "We design modular and scalable Laravel architectures that grow with your business—ensuring flexibility, performance, and easy maintenance.",
  },
  {
    icon: "Secure-Backend-Solutions.png",
    badge: "Advanced Protection",
    title: "Secure Backend Solutions",
    desc: "We implement robust security standards, authentication layers, and data protection practices to keep your Laravel applications safe and reliable.",
  },
  {
    icon: "API-Integration-Expertise.png",
    badge: "Custom API Solutions",
    title: "API & Integration Expertise",
    desc: "From RESTful APIs to third-party integrations, we build secure and scalable Laravel integrations that ensure smooth, reliable, and high-performance system communication.",
  },
  {
    icon: "Agile-Transparent-Process.png",
    badge: "Client-Centric Approach",
    title: "Agile & Transparent Process",
    desc: "We follow an agile Laravel development process with clear communication, regular updates, and complete transparency at every project stage.",
  },
  {
    icon: "Cost-Effective-for-USA-Market.png",
    badge: "Value-Driven Pricing",
    title: "Cost-Effective for USA Market",
    desc: "We deliver high-quality Laravel solutions at competitive pricing—optimized for startups and enterprises targeting the USA market.",
  },
  {
    icon: "Ongoing-Support-Maintenance.png",
    badge: "Long-Term Partnership",
    title: "Ongoing Support & Maintenance",
    desc: "We provide continuous Laravel support, performance optimization, security updates, and maintenance to keep your application running flawlessly.",
  },
];

const faqItems = [
  {
    question: "How do you estimate the project cost?",
    answer:
      "Project cost depends on scope, features, technology stack, and timeline. After a free consultation, we provide a transparent and detailed estimate with no hidden charges.",
    defaultOpen: true,
  },
  {
    question: "What is the typical project timeline?",
    answer:
      "Timelines vary based on complexity and requirements. Small to mid-scale projects usually take 4–8 weeks, while larger applications may take longer. We always share a clear delivery roadmap.",
  },
  {
    question: "Is Laravel suitable for large-scale and enterprise applications?",
    answer:
      "Yes. Laravel is highly scalable and ideal for enterprise-level applications. We build secure, modular, and high-performance Laravel solutions that can handle complex business logic, large databases, and high traffic.",
  },
  {
    question: "Can you migrate my existing PHP or legacy system to Laravel?",
    answer:
      "Absolutely. We provide seamless migration from core PHP or legacy frameworks to Laravel while ensuring data integrity, improved performance, and minimal downtime.",
  },
  {
    question: "Do you sign an NDA?",
    answer:
      "Yes. We sign a Non-Disclosure Agreement (NDA) to ensure complete confidentiality and protect your idea, data, and intellectual property.",
  },
  {
    question: "Will I get regular project updates?",
    answer:
      "Absolutely. We follow an agile approach and provide regular updates through email, calls, or project management tools like Jira, Trello, or Slack.",
  },
  {
    question: "Can you work with clients in different time zones?",
    answer:
      "Yes. We work with clients across the US, Europe, Middle East, and Asia. Our team is flexible and ensures smooth communication across time zones.",
  },
  {
    question: "Who owns the source code?",
    answer:
      "Once the project is completed and payment terms are fulfilled, you own 100% of the source code and intellectual property.",
  },
  {
    question: "How do we get started?",
    answer:
      "Simply click on “Get a Free Consultation” or “Request a Quote”, share your requirements, and our experts will get in touch within 24 hours.",
  },
  {
    question: "Can you scale the team if my project grows?",
    answer:
      "Yes. We can quickly scale resources based on your project needs, whether you require additional developers, AI engineers, or long-term support.",
  },
  {
    question: "Do you provide post-launch support and maintenance?",
    answer:
      "Yes. We offer ongoing support, maintenance, performance optimization, and feature enhancements after project delivery.",
  },
];

const dragTags = [
  { label: "Laravel Development", bg: "gradient-bg-six", text: "text-white" },
  { label: "REST & GraphQL APIs", bg: "bg-paste", text: "text-heading" },
  { label: "Laravel + MySQL / PostgreSQL", bg: "gradient-bg-six", text: "text-heading" },
  { label: "AWS / Cloud Deployment", bg: "bg-yellow", text: "text-heading" },
  { label: "Secure Authentication", bg: "bg-orange", text: "text-heading" },
  { label: "Scalable Architecture", bg: "gradient-bg-six", text: "text-heading" },
  { label: "MongoDB & PostgreSQL", bg: "bg-orange", text: "text-heading" },
  { label: "On-Time Delivery", bg: "bg-paste", text: "text-heading" },
  { label: "Quality Assurance", bg: "bg-pink", text: "text-heading" },
];

export default function LaravelDevelopmentPage() {
  return (
    <PageShell>
      {/* Banner Start */}
      <section
        style={{ backgroundImage: "url(/assets/images/bg/mash-gradient-bg1.png)" }}
        className="banner-two position-relative z-1 pb-0"
      >
        <div className="banner-two__inner position-relative">
          <div className="container">
            <div className="text-center">
              <span className="text-capitalize font-caveat fw-bold tw-mb-6 h3">
                Scalable Laravel Development
              </span>
              <div>
                <div className="position-relative d-inline-block">
                  <h1 className="splitTextStyleOne text-capitalize fw-bold tw-leading-none tw-pb-205">
                    For Secure &amp; High-Performance Web Applications
                  </h1>
                  <div className="text-end svg-line d-sm-block d-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="489" height="18" viewBox="0 0 489 18" fill="none">
                      <path
                        fillRule="evenodd"
                        clipRule="evenodd"
                        d="M207.684 1.72387C184.71 2.31462 162.007 3.04101 139.867 3.83514C108.526 4.95854 77.1964 6.12068 46.056 7.96073C36.2537 8.5418 26.2994 8.90979 16.5584 9.63613C10.4436 10.0913 2.33552 10.7401 1.27144 10.8757C0.714878 10.9531 0.472071 11.0695 0.393613 11.1082C-0.158042 11.3794 -0.0573853 11.6407 0.253993 11.8441C0.379035 11.9313 0.695229 12.1444 1.57297 12.1735C60.274 14.1588 120.299 10.285 179.071 9.87824C280.993 9.18096 386.003 11.9507 487.115 17.9938C487.998 18.0423 488.856 17.8001 488.979 17.4418C489.126 17.0931 488.489 16.7542 487.606 16.7057C386.322 10.6529 281.14 7.87347 179.022 8.58044C124.249 8.95813 68.3944 12.3575 13.5451 11.1953C14.8053 11.0985 16.0411 11.0016 17.1689 10.9144C26.8707 10.1881 36.7833 9.8298 46.5464 9.24873C77.6205 7.40868 108.886 6.24654 140.186 5.13282C179.022 3.73826 219.55 2.53737 260.397 1.97567C275.01 2.06283 289.574 2.15003 304.137 2.25656C335.643 2.48899 367.296 3.16691 398.728 4.07725C408.192 4.3581 417.656 4.64861 427.12 4.9004C430.258 4.98757 438.349 5.23932 439.477 5.21995C440.875 5.20058 441.144 4.73577 441.169 4.65829C441.242 4.48397 441.193 4.24185 440.507 4.03847C440.433 4.00942 439.992 3.91251 439.011 3.85441C381.86 0.426099 320.834 -0.145196 260.446 0.677985C196.749 0.319659 132.806 0.164636 69.2697 0C68.3601 0 67.6172 0.290577 67.6098 0.648903C67.6049 1.00723 68.338 1.29782 69.2476 1.3075C115.253 1.42371 161.492 1.53986 207.684 1.72387Z"
                        fill="#006d75"
                      />
                    </svg>
                  </div>
                </div>
              </div>
              <p className="splitTextStyleOne text-neutral-600 tw-text-lg tw-mt-405 tw-mt-8 max-w-672-px mx-auto fw-medium">
                We build fast, secure, and scalable Laravel-based web applications tailored for startups, enterprises,
                and growing businesses worldwide.
              </p>

              <div className="d-inline-flex align-items-center tw-gap-5 tw-mt-8 flex-wrap">
                <a
                  target="_blank"
                  rel="noreferrer"
                  href="https://calendly.com/zalgoinfotec/30min"
                  className="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">Get a Free Consultation</span>
                </a>
                <Link
                  href={routes.contact}
                  className="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-orange-outline hover-style-five hover-text-white button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold bg-white"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">Request a Quote</span>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Banner End */}

      {/* About Two Section start */}
      <section className="about-two pt-120 position-relative z-1 overflow-hidden">
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
                      {thumbSlider.map((img, i) => (
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
                      {thumbSlider.map((img, i) => (
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
                  Up to <span className="text-yellow">90%</span> Faster &amp; Scalable Backend Solutions
                </div>
                <h2 className="splitTextStyleOne text-heading text-capitalize">
                  Our Laravel Solutions
                  <span className="font-dm-serif fst-italic fw-normal"> Power High-Performance</span> Digital Products
                </h2>
                <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                  We build fast, scalable, and secure Laravel web applications designed to handle complex business
                  logic, high user traffic, and enterprise-level requirements—ensuring smooth performance as your
                  business grows.
                </p>

                <div className="tw-mt-8">
                  <div className="d-flex align-items-center tw-gap-16">
                    <div className="d-flex flex-column tw-gap-305">
                      {checklist.map((item) => (
                        <div className="d-flex align-items-center tw-gap-405 animation-item" key={item}>
                          <span className="tw-w-11 tw-h-10 text-heading bg-neutral-200 tw-rounded-md d-flex justify-content-center align-items-center tw-text-xl">
                            <i className="animate__heartBeat ph-bold ph-check"></i>
                          </span>
                          <a href="javascript:void(0)" className="fw-bold tw-text-lg text-heading hover-underline">
                            {item}
                          </a>
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
                    <span className="button__label">Talk to Our Experts</span>
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* About Two Section end */}

      {/* Seamless integration section */}
      <section className="seamless-integration py-120">
        <div className="container max-w-1400-px">
          <div className="max-w-672-px text-center mx-auto tw-mb-12">
            <h3 className="splitTextStyleOne text-heading text-capitalize">
              Seamless Laravel Solutions That Enhance Digital Experiences
            </h3>
            <p className="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-500-px mx-auto">
              We build powerful Laravel applications by connecting systems, tools, and platforms into a unified
              ecosystem—ensuring secure data flow, high performance, and long-term scalability.
            </p>
          </div>

          <div className="border border-neutral-200 tw-rounded-xl common-shadow-sixteen">
            <div className="row col-border-wrapper">
              {seamlessBoxes.map((box) => (
                <div className="col-xl-3 col-md-6 col-sm-6 col-xs-12 border-0" key={box.title}>
                  <div className="bg-white tw-py-12 tw-px-6 text-center hover-common-shadow-sixteen tw-rounded-2xl">
                    <span className="tw-mb-8">
                      <img src={`/assets/images/icons/${box.icon}`} alt="Icon" />
                    </span>
                    <h6 className="tw-mb-10 max-w-172-px mx-auto">{box.title}</h6>
                    <p className="mx-auto max-w-228-px text-neutral-500 tw-text-sm tw-mb-705">{box.desc}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>
      {/* Seamless integration section End */}

      <RoadmapSection
        eyebrow="What we do"
        heading="Working Roadmap"
        description="In today's competitive business, the demand for efficient and cost-effective IT solutions has never been more critical."
        ctaLabel="Get Started"
        steps={roadmapSteps}
      />

      {/* Integrated apps start */}
      <section className="pt-120 pb-120 overflow-hidden position-relative">
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
                  src="/assets/images/shapes/laravel-development2.png"
                  alt="Icons"
                  className="position-absolute top-50 start-50 animation-rotate-right"
                />
                <img
                  src="/assets/images/shapes/laravel-development.png"
                  alt="Icons"
                  className="position-absolute top-50 start-50 animation-rotate-left"
                />
                <div className="position-absolute top-50 start-50 translate-middle">
                  <h3>
                    <span className="counter">99.9</span>%
                  </h3>
                  <span className="text-heading">
                    Performance <br />
                    Optimized APIs
                  </span>
                </div>
              </div>
            </div>
            <div className="col-xl-6">
              <div className="text-start mx-auto tw-mb-12">
                <div className="tw-mb-10">
                  <h4 className="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-orange">
                    With High-Performance Laravel…
                  </h4>
                  <h2 className="splitTextStyleOne text-heading text-capitalize max-w-532-px">
                    Fast, Scalable &amp; Secure Laravel Backend Solutions
                  </h2>
                  <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                    We build high-performance Laravel applications that are fast, secure, and future-ready. Our
                    expert Laravel developers create robust, API-driven, and modular solutions designed to handle
                    complex business logic and high traffic with ease.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Integrated apps End */}

      {/* Services section start */}
      <section className="gradient-bg-five position-relative py-120 services z-1">
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
              Why Zalgo Infotech
            </div>
            <h2 className="splitTextStyleOne text-white">
              Powering Modern Applications
              <span className="font-dm-serif fst-italic fw-normal"> With Laravel</span> Expertise
            </h2>
            <p className="text-neutral-300 tw-mt-5 splitTextStyleOne max-w-570-px mx-auto">
              Our Laravel solutions are crafted for performance, scalability, and security—delivering seamless digital
              experiences for startups and enterprises alike.
            </p>
          </div>

          <div className="service-slider-grid">
            <div className="d-flex flex-wrap gap-3 why-choose-us">
              {whyChooseUs.map((item) => (
                <div className="swiper-slide w-25 tw-pb-105" key={item.title}>
                  <div className="square-bg-shape position-relative tw-rounded-2xl z-1 animation-item tw-h-424-px">
                    <div className="service-item bg-white hover-bg-main-600 group group-item tw-py-16 tw-ps-10 tw-pe-4 tw-rounded-2xl h-100 d-flex flex-column justify-content-center tw-duration-200">
                      <span className="tw-mb-13 group-hover-item-text-invert">
                        <img src={`/assets/images/icons/${item.icon}`} alt="Icon" className="animate__heartBeat" />
                      </span>
                      <div>
                        <div className="group-hover-item-d-none tw-mb-4">
                          <span className="tw-py-1 tw-px-305 rounded-pill bg-main-50 text-uppercase text-neutral-500 tw-text-xs fw-semibold group-hover-text-white tw-duration-200 group-hover-bg-main-two-600">
                            {item.badge}
                          </span>
                        </div>
                        <h5 className="group-hover-text-white tw-duration-200 max-w-250-px">{item.title}</h5>
                        <p className="text-neutral-300 tw-mt-3 line-clamp-2 d-none group-hover-item-d-block">
                          {item.desc}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>
      {/* Services section End */}

      <TestimonialSection />

      {/* Faq Two Section Start */}
      <section className="faq-two py-120">
        <div className="container">
          <div className="row gy-4">
            <div className="col-lg-4">
              <h2 className="splitTextStyleOne text-heading text-capitalize">
                Have Questions?
                <span className="font-dm-serif fst-italic fw-normal"> We’ve Got Answers</span>
              </h2>
              <p className="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-350-px fw-medium">
                Everything you need to know about our development services, timelines, and engagement models—all in
                one place.
              </p>

              <div className="tw-mt-9">
                <a
                  target="_blank"
                  rel="noreferrer"
                  href="https://calendly.com/zalgoinfotec/30min"
                  className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-17 rounded-pill tw-py-505 fw-medium"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">Talk to Our Experts</span>
                </a>
              </div>
            </div>
            <div className="col-lg-8">
              <div className="ps-xl-5">
                <FaqAccordion items={faqItems} />
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Faq Two Section End */}

      {/* Task Management Section Start */}
      <section className="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half">
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
              <div className="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13">
                <div>Build Secure &amp; Scalable Laravel Applications</div>
              </div>
              <h3 className="splitTextStyleOne text-white">
                Ready to Build a Powerful Laravel Application for Your Business?
              </h3>

              <div className="d-block">
                <div className="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                  <Link
                    href={routes.contact}
                    className="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Start Your Laravel Project</span>
                    </div>
                  </Link>
                  <a
                    href="https://calendly.com/zalgoinfotec/30min"
                    target="_blank"
                    rel="noreferrer"
                    className="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <div className="d-flex align-items-center tw-gap-2 z-1">
                      <span className="button__label">Talk to Our Experts</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div className="tw-pt-8 text-center">
              <div className="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                {dragTags.map((tag) => (
                  <span
                    key={tag.label}
                    className={`drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold ${tag.text} ${tag.bg} rounded-pill`}
                  >
                    {tag.label}
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
