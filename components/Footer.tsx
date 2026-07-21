"use client";

import Link from "next/link";
import { useEffect } from "react";
import { routes } from "@/lib/routes";

const servicesShort = [
  { href: routes.webDevelopment, label: "Web Development" },
  { href: routes.cmsDevelopment, label: "CMS Development" },
  { href: routes.reactDevelopment, label: "ReactJS Development" },
  { href: routes.shopifyDevelopment, label: "Shopify Development" },
  { href: routes.nodejsDevelopment, label: "NodeJS Development" },
  { href: routes.ecommerceDevelopment, label: "E-commerce Development" },
];

const servicesLong = [
  ...servicesShort,
  { href: routes.pythonDevelopment, label: "Python Development" },
  { href: routes.aiDevelopment, label: "AI Development" },
  { href: routes.laravelDevelopment, label: "Laravel Development" },
  { href: routes.maintenanceServices, label: "Maintenance Services" },
  { href: routes.seoServices, label: "SEO Services" },
  { href: routes.digitalServices, label: "Digital Marketing" },
];

const servicesRemainder = [
  { href: routes.pythonDevelopment, label: "Python Development" },
  { href: routes.aiDevelopment, label: "AI Development" },
  { href: routes.laravelDevelopment, label: "Laravel Development" },
  { href: routes.maintenanceServices, label: "Maintenance Services" },
  { href: routes.seoServices, label: "SEO Services" },
  { href: routes.digitalServices, label: "Digital Marketing" },
];

const hireDevelopers = [
  { href: routes.hireWebDeveloper, label: "Hire Web Developers" },
  { href: routes.hireWordpressDeveloper, label: "Hire WordPress Developers" },
  { href: routes.hireLaravelDeveloper, label: "Hire Laravel Developers" },
  { href: routes.hireNodejsDeveloper, label: "Hire Node.js Developers" },
  { href: routes.hirePhpDeveloper, label: "Hire PHP Developers" },
  { href: routes.hireAiDeveloper, label: "Hire AI Developers" },
  { href: routes.hireReactjsDeveloper, label: "Hire ReactJS Developers" },
  { href: routes.hireNextjsDeveloper, label: "Hire NextJS Developers" },
  { href: routes.hirePythonDeveloper, label: "Hire python Developers" },
];

export default function Footer() {
  useEffect(() => {
    const headers = Array.from(
      document.querySelectorAll<HTMLElement>(".footer-col h4")
    );
    const handlers: Array<() => void> = [];
    headers.forEach((title) => {
      const handler = () => {
        const content = title.nextElementSibling as HTMLElement | null;
        title.classList.toggle("active");
        if (!content) return;
        content.style.maxHeight = content.style.maxHeight
          ? ""
          : `${content.scrollHeight}px`;
      };
      title.addEventListener("click", handler);
      handlers.push(() => title.removeEventListener("click", handler));
    });
    return () => handlers.forEach((off) => off());
  }, []);

  return (
    <>
      <style>{`
        .desktop-hide { display: none !important; }
        .footer-col h4 .arrow { display: none !important; }
        @media screen and (max-width: 767px) {
          .desktop-hide { display: block !important; }
          .desktop-show { display: none !important; }
          .footer-col h4 { cursor: pointer; display: flex; justify-content: space-between; align-items: center; }
          .footer-col h4 .arrow { display: inline-block !important; transition: 0.3s; font-size: 18px; }
          .arrow::before { content: url(/assets/images/arrow.svg); }
          .footer-col h4.active .arrow { transform: rotate(90deg); }
          .our-businesses { margin-top: 20px; flex-direction: column; }
          .our-businesses .business-card { width: 100% !important; }
        }
      `}</style>

      <footer className="footer bg-black position-relative z-1 mt-auto tw-pt-16 overflow-hidden">
        <div className="container">
          <div className="d-flex align-items-center tw-gap-505">
            <div className="flex-grow-1">
              <div className="d-flex align-items-center flex-lg-nowrap flex-wrap tw-gap-100-px tw-pb-13 border-bottom border-neutral-700">
                <div className="max-w-514-px w-100 d-flex align-items-center tw-gap-505">
                  <h3 className="h1 text-white tw-mb-0 fw-medium d-inline-flex align-items-center tw-gap-4 flex-shrink-0">
                    <img
                      src="/assets/images/icons/arrow-up-main.svg"
                      alt="img"
                    />
                    88%
                  </h3>
                  <p className="text-neutral-300 max-w-194-px">
                    Client Retention & Growth Long-term partnerships that
                    deliver results.
                  </p>
                </div>
                <div className="max-w-514-px w-100 d-flex align-items-center tw-gap-505">
                  <h3 className="h1 text-white tw-mb-0 fw-medium d-inline-flex align-items-center tw-gap-4 flex-shrink-0">
                    1.3m
                  </h3>
                  <div className="d-flex align-items-center tw-gap-2">
                    <p className="text-neutral-300 max-w-194-px">
                      Business Value Created Across web, eCommerce, and
                      digital platforms.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div className="flex-shrink-0 gradient-overlay d-md-block d-none">
              <img src="/assets/images/thumbs/footer-img.png" alt="img" />
            </div>
          </div>
        </div>

        <div className="container">
          <div className="row">
            <div className="footer-col text--white col-lg-3 company">
              <img
                src="/assets/images/logo/zalgo-white.png"
                alt="Zalgo Infotech"
                className="footer-logo"
              />
              <p>
                Professional IT solutions provider delivering web, eCommerce,
                AI & digital services globally.
              </p>

              <div className="address mb-4 mt-4">
                <p>
                  <strong>
                    <img
                      className="me-1"
                      width="24"
                      src="/assets/images/Group-4.webp"
                      alt="us-flag"
                      loading="lazy"
                    />{" "}
                    United States{" "}
                  </strong>
                </p>
                <p className=" d-flex gap-3">
                  <i className="fs-3 ph-bold ph-map-pin"></i>{" "}
                  <a className="text-white" href="#">
                    1601 Penfield Road Suite <br />
                    575 Rochester, NY 14625
                  </a>
                </p>
              </div>
              <div className="address mb-4">
                <p>
                  <strong>
                    <img
                      className="me-1"
                      width="24"
                      src="/assets/images/canada.jpg"
                      alt="ca-flag"
                      loading="lazy"
                    />{" "}
                    Canada
                  </strong>
                </p>
                <p className=" d-flex gap-3">
                  <i className="fs-3 ph-bold ph-map-pin"></i>{" "}
                  <a className="text-white" href="#">
                    2482 Yonge Street #1080 Toronto,
                    <br /> ON M4P 2H5 Canada
                  </a>
                </p>
                <p>
                  <img
                    width="24"
                    src="/assets/images/phone.svg"
                    alt="ca-flag"
                    loading="lazy"
                  />{" "}
                  <a className="text-white" href="tel:+16465687779">
                    +1 (646) 568-7779
                  </a>
                </p>
                <p>
                  <a
                    className="mail text-white"
                    href="mailto:sales@zalgoinfotech.com"
                  >
                    sales@zalgoinfotech.com
                  </a>
                </p>
              </div>
              <div className="address mb-4">
                <p>
                  <strong>
                    <img
                      className="me-1"
                      width="24"
                      src="/assets/images/Group-3.webp"
                      alt="india-flag"
                      loading="lazy"
                    />{" "}
                    India
                  </strong>
                </p>
                <p className=" d-flex gap-3">
                  <i className="fs-3 ph-bold ph-map-pin"></i>{" "}
                  <a className="text-white" href="#">
                    1/65, vinay nagar sec 3, 100 feet road, s. p. ashram,
                    gwalior, madhya pradesh, india - 474012
                  </a>
                </p>
              </div>
            </div>

            <div className="col-lg-9">
              <div className="row">
                <div className="desktop-show footer-col col-lg-3">
                  <h4>
                    Services<span className="arrow"></span>
                  </h4>
                  <ul>
                    {servicesShort.map((s) => (
                      <li
                        key={s.href}
                        className="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative"
                      >
                        <Link href={s.href} className="mega-item">
                          <div>{s.label}</div>
                        </Link>
                      </li>
                    ))}
                  </ul>
                </div>

                <div className="desktop-hide footer-col col-lg-3">
                  <h4>
                    Services <span className="arrow"></span>
                  </h4>
                  <ul>
                    {servicesLong.map((s) => (
                      <li
                        key={s.href}
                        className="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative"
                      >
                        <Link href={s.href} className="mega-item">
                          <div>{s.label}</div>
                        </Link>
                      </li>
                    ))}
                  </ul>
                </div>

                <div className="desktop-show footer-col col-lg-3">
                  <h4 style={{ height: 24 }}></h4>
                  <ul>
                    {servicesRemainder.map((s) => (
                      <li
                        key={s.href}
                        className="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative"
                      >
                        <Link href={s.href} className="mega-item">
                          <div>{s.label}</div>
                        </Link>
                      </li>
                    ))}
                  </ul>
                </div>

                <div className="footer-col col-lg-3">
                  <h4>
                    Hire Developers <span className="arrow"></span>
                  </h4>
                  <ul>
                    {hireDevelopers.map((s) => (
                      <li key={s.href}>
                        <Link href={s.href} className="mega-item">
                          {s.label}
                        </Link>
                      </li>
                    ))}
                  </ul>
                </div>

                <div className="footer-col col-lg-3">
                  <h4>
                    Quick Links <span className="arrow"></span>
                  </h4>
                  <ul>
                    <li>
                      <Link href={routes.about} className="mega-item">
                        <div className="align-items-center d-flex">
                          About Company
                        </div>
                      </Link>
                    </li>
                    <li>
                      <a className="mega-item">
                        <div className="align-items-center d-flex">
                          Engagement Models
                        </div>
                      </a>
                    </li>
                    <li>
                      <Link href={routes.lifeZalgo} className="mega-item">
                        <div className="align-items-center d-flex">
                          Life At ZalgoInfotec
                        </div>
                      </Link>
                    </li>
                    <li>
                      <a className="mega-item">
                        <div className="align-items-center d-flex">
                          Infrastructure
                        </div>
                      </a>
                    </li>
                    <li>
                      <Link href={routes.cultureValue} className="mega-item">
                        <div className="align-items-center d-flex">
                          Culture & Values
                        </div>
                      </Link>
                    </li>
                    <li>
                      <Link href={routes.career} className="mega-item">
                        <div className="align-items-center d-flex">
                          Career
                        </div>
                      </Link>
                    </li>
                    <li>
                      <Link href={routes.testimonial} className="mega-item">
                        <div className="align-items-center d-flex">
                          Client Testimonials
                        </div>
                      </Link>
                    </li>
                    <li>
                      <Link href={routes.blog} className="mega-item">
                        <div className="align-items-center d-flex">Blogs</div>
                      </Link>
                    </li>
                    <li>
                      <a
                        href="/assets/images/case-study/zalgo-Infotech-privacy-policy.pdf"
                        className="mega-item"
                        download
                      >
                        <div className="align-items-center d-flex">
                          Privacy Policy
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div className="row">
                <div className="col-lg-12 d-flex flex-wrap footer-col gap-3 our-businesses">
                  <h4 className="w-100 m-0">Our Businesses</h4>

                  <div className="business-card flex-column">
                    <div className="business-logo">
                      <img
                        src="/assets/images/logo/zalgo-edutech.png"
                        alt=""
                      />
                    </div>
                    <div className="business-info d-flex flex-column text--white">
                      <span>Educational Technology Solutions</span>
                      <a
                        className="text-white"
                        href="https://zalgoedutech.com"
                        target="_blank"
                        rel="noreferrer"
                      >
                        www.zalgoedutech.com
                      </a>
                    </div>
                  </div>

                  <div className="business-card flex-column">
                    <div className="business-logo">
                      <img src="/assets/images/logo/zalgo-store.png" alt="" />
                    </div>
                    <div className="business-info d-flex flex-column text--white">
                      <span>Advanced IT & E-commerce Product</span>
                      <a
                        className="text-white"
                        href="https://app.zalgostore.com"
                        target="_blank"
                        rel="noreferrer"
                      >
                        www.zalgostore.com
                      </a>
                    </div>
                  </div>

                  <div className="business-card flex-column">
                    <div className="business-logo">
                      <img src="/assets/images/logo/zalgo-india.png" alt="" />
                    </div>
                    <div className="business-info d-flex flex-column text--white">
                      <span>IT Services for Indian Businesses</span>
                      <a
                        className="text-white"
                        href="https://zalgoinfotech.in"
                        target="_blank"
                        rel="noreferrer"
                      >
                        www.zalgoinfotech.in
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="container">
          <div className="border-top border-dashed border-neutral-600 border-0 tw-py-8">
            <div className="container container-two">
              <div className="d-flex align-items-center justify-content-between tw-gap-4 flex-wrap">
                <p className="text--white text-line-1 fw-normal">
                  &copy; 2026{" "}
                  <Link
                    href="/"
                    className="fw-medium text-white hover-underline hover--translate-y-1 active--translate-y-scale-9"
                  >
                    Zalgo Infotech Pvt. Ltd.
                  </Link>{" "}
                  All rights reserved.
                </p>
                <ul className="d-flex align-items-center tw-gap-6">
                  <li>
                    <a
                      target="_blank"
                      rel="noreferrer"
                      href="https://www.facebook.com/people/Zalgo-Infotech-Pvt-Ltd/61579841284566/"
                      className="text--white tw-text-2xl hover--translate-y-1 active--translate-y-scale-9 d-flex align-items-center tw-gap-205 hover-text-white"
                    >
                      <span className="d-flex hover-text-main-600 text--white">
                        <i className="ph-fill ph-facebook-logo"></i>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://www.linkedin.com/company/zalgo-infotech/"
                      className="text--white tw-text-2xl hover--translate-y-1 active--translate-y-scale-9 d-flex align-items-center tw-gap-205 hover-text-white"
                    >
                      <span className="d-flex hover-text-main-600 text--white">
                        <i className="ph-fill ph-linkedin-logo"></i>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a
                      target="_blank"
                      rel="noreferrer"
                      href="https://www.instagram.com/zalgoinfotech/"
                      className="text--white tw-text-2xl hover--translate-y-1 active--translate-y-scale-9 d-flex align-items-center tw-gap-205 hover-text-white"
                    >
                      <span className="d-flex hover-text-main-600 text--white">
                        <i className="ph-fill ph-instagram-logo"></i>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </>
  );
}
