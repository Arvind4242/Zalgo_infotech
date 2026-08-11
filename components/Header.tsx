"use client";

import Link from "next/link";
import { useEffect, useState } from "react";
import { routes } from "@/lib/routes";

export default function Header() {
  const [isSticky, setIsSticky] = useState(false);

  useEffect(() => {
    const onScroll = () => setIsSticky(window.scrollY >= 500);
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);

  return (
    <>
      {/* Overlay Start */}
      <div className="overlay"></div>
      <div className="side-overlay"></div>
      <div id="toast-container"></div>

      {/* Custom Cursor */}
      <div className="cursor"></div>
      <span className="dot"></span>

      {/* Mobile Menu Start Here */}
      <div className="mobile-menu d-lg-none d-block scroll-sm position-fixed bg-white tw-w-300-px tw-h-screen overflow-y-auto tw-p-6 tw-z-999 tw--translate-x-full tw-pb-68 ">
        <button
          type="button"
          className="close-button position-absolute tw-end-0 top-0 tw-me-2 tw-mt-2 tw-w-605 tw-h-605 rounded-circle d-flex justify-content-center align-items-center text-neutral-900 bg-neutral-200 hover-bg-neutral-900 hover-text-white"
        >
          <i className="ph ph-x"></i>
        </button>

        <div className="mobile-menu__inner">
          <Link href={routes.home} className="mobile-menu__logo">
            <img src="/assets/images/logo/zalgo_logo.png" alt="Logo" />
          </Link>
          <div className="mobile-menu__menu">
            <ul className="nav-menu d-lg-flex align-items-center nav-menu--mobile d-block tw-mt-8">
              <li className="nav-menu__item has-submenu position-relative">
                <a
                  href="javascript:void(0)"
                  className="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100"
                >
                  Company
                </a>
                <ul className="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                  <li className="nav-menu__item">
                    <Link href={routes.about} className="mega-item">
                      <div>About Company</div>
                    </Link>
                  </li>
                  <li className="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                    <Link href={routes.testimonial} className="mega-item">
                      <div>Client Testimonials</div>
                    </Link>
                  </li>
                  <li className="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                    <Link href={routes.cultureValue} className="mega-item">
                      <div>Culture & Values</div>
                    </Link>
                  </li>
                  <li className="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                    <Link href={routes.lifeZalgo} className="mega-item">
                      <div>Life At ZalgoInfotec</div>
                    </Link>
                  </li>
                  <li className="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                    <Link href={routes.blog} className="mega-item">
                      <div>Blogs</div>
                    </Link>
                  </li>
                  <li className="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                    <Link href={routes.career} className="mega-item">
                      <div>Career</div>
                    </Link>
                  </li>
                </ul>
              </li>
              <li className="nav-menu__item has-submenu position-relative">
                <a
                  href="javascript:void(0)"
                  className="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100"
                >
                  Our Services
                </a>
                <ul className="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                  {serviceLinks.map((s) => (
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
              </li>
              <li className="nav-menu__item has-submenu position-relative">
                <a
                  href="javascript:void(0)"
                  className="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100"
                >
                  Hire Developers
                </a>
                <ul className="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                  {hireLinks.map((s) => (
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
              </li>
              <li className="nav-menu__item">
                <Link
                  href={routes.casestudy}
                  className="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100"
                >
                  Case Study
                </Link>
              </li>
            </ul>
          </div>
          <Link
            href={routes.contact}
            className="btn btn-main-two hover-style-two button--stroke d-sm-none d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-8 rounded-pill tw-mt-6"
            data-block="button"
          >
            <span className="button__flair"></span>
            <span className="button__label">Contact</span>
          </Link>
        </div>
      </div>
      {/* Mobile Menu End Here */}

      <header
        className={`header bg-white transition-all p-0${isSticky ? " fixed-header" : ""}`}
      >
          <div className="bg-main-600 header-top-bar tw-py-205 d-sm-block">
            <div className="container">
              <div className="d-flex justify-content-center">
                <p className="text-white bg-white-13 d-inline-block tw-py-1 tw-px-5 rounded-pill fw-normal">
                  Reliable IT solutions designed for performance, security, and
                  scalability—supporting growing businesses worldwide, every
                  step of the way.
                </p>
              </div>
            </div>
          </div>

          <div className="container container-two">
            <nav className="d-flex align-items-center justify-content-between position-relative">
              <div className="logo">
                <Link
                  href={routes.home}
                  className="link hover--translate-y-1 active--translate-y-scale-9"
                >
                  <img
                    src="/assets/images/logo/zalgo_logo.png"
                    alt="Logo"
                    className="max-w-200-px"
                  />
                </Link>
              </div>

              <div className="header-menu d-lg-block d-none">
                <ul className="nav-menu d-lg-flex align-items-center tw-gap-14">
                  <li className="nav-menu__item has-submenu about">
                    <a
                      href="javascript:void(0)"
                      className="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100"
                    >
                      {" "}
                      Company
                    </a>
                    <div className="new-header-mega-menu-inner nav-submenu scroll-sm">
                      <div className="align-items-center mega-inner">
                        <div className="mega-col">
                          <Link href={routes.about} className="mega-item">
                            <span className="icon">
                              <img
                                width="20px"
                                src="/assets/images/icons/about-company.png"
                                alt=""
                              />
                            </span>
                            <div className="align-items-center d-flex">
                              <strong>About Company</strong>
                            </div>
                          </Link>
                          <Link href={routes.lifeZalgo} className="mega-item">
                            <span className="icon">
                              <img
                                width="20px"
                                src="/assets/images/icons/life-at-zalgolnfotec.png"
                                alt=""
                              />
                            </span>
                            <div className="align-items-center d-flex">
                              <strong>Life At ZalgoInfotec</strong>
                            </div>
                          </Link>
                        </div>
                        <div className="mega-col">
                          <Link
                            href={routes.testimonial}
                            className="mega-item"
                          >
                            <span className="icon">
                              <img
                                width="20px"
                                src="/assets/images/icons/client-testimonials.png"
                                alt=""
                              />
                            </span>
                            <div>
                              <strong>Client Testimonials</strong>
                            </div>
                          </Link>
                          <Link href={routes.blog} className="mega-item">
                            <span className="icon">
                              <img
                                width="20px"
                                src="/assets/images/icons/client-testimonials.png"
                                alt=""
                              />
                            </span>
                            <div>
                              <strong>Blogs</strong>
                            </div>
                          </Link>
                        </div>
                        <div className="mega-col">
                          <Link
                            href={routes.cultureValue}
                            className="mega-item"
                          >
                            <span className="icon">
                              <img
                                width="20px"
                                src="/assets/images/icons/culture-values.png"
                                alt=""
                              />
                            </span>
                            <div className="align-items-center d-flex">
                              <strong>Culture & Values</strong>
                            </div>
                          </Link>
                          <Link href={routes.career} className="mega-item">
                            <span className="icon">
                              <img
                                width="20px"
                                src="/assets/images/icons/Career.png"
                                alt=""
                              />
                            </span>
                            <div className="align-items-center d-flex">
                              <strong>Career</strong>
                            </div>
                          </Link>
                        </div>
                        <ContactCard cta="Claim Free Audit" />
                      </div>
                    </div>
                  </li>

                  <li className="nav-menu__item has-submenu">
                    <a
                      href="javascript:void(0)"
                      className="nav-menu__link  tw-pe-5 hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100"
                    >
                      Industry
                    </a>
                    <div className="new-header-mega-menu-inner nav-submenu scroll-sm">
                      <div className="align-items-center mega-inner">
                        <div className="mega-left">
                          <div className="app-grid">
                            {industries.map((it) => (
                              <div className="app-box" key={it.label}>
                                <img src={it.icon} alt="" />
                                <span>{it.label}</span>
                              </div>
                            ))}
                          </div>
                        </div>
                        <ContactCard cta="Claim Free Audit" />
                      </div>
                    </div>
                  </li>

                  <li className="nav-menu__item has-submenu">
                    <a
                      href="javascript:void(0)"
                      className="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100"
                    >
                      Our Services
                    </a>
                    <div className="new-header-mega-menu-inner nav-submenu scroll-sm">
                      <div className="align-items-center mega-inner">
                        <div className="mega-col">
                          {serviceLinks.slice(0, 4).map((s) => (
                            <Link
                              key={s.href}
                              href={s.href}
                              className="mega-item"
                            >
                              <span className="icon">
                                <img width="20px" src={s.icon} alt="" />
                              </span>
                              <div>
                                <strong>{s.label}</strong>
                                <p>{s.blurb}</p>
                              </div>
                            </Link>
                          ))}
                        </div>
                        <div className="mega-col">
                          {serviceLinks.slice(4, 8).map((s) => (
                            <Link
                              key={s.href}
                              href={s.href}
                              className="mega-item"
                            >
                              <span className="icon">
                                <img width="20px" src={s.icon} alt="" />
                              </span>
                              <div>
                                <strong>{s.label}</strong>
                                <p>{s.blurb}</p>
                              </div>
                            </Link>
                          ))}
                        </div>
                        <div className="mega-col">
                          {serviceLinks.slice(8).map((s) => (
                            <Link
                              key={s.href}
                              href={s.href}
                              className="mega-item"
                            >
                              <span className="icon">
                                <img width="20px" src={s.icon} alt="" />
                              </span>
                              <div>
                                <strong>{s.label}</strong>
                                <p>{s.blurb}</p>
                              </div>
                            </Link>
                          ))}
                        </div>
                        <ContactCard cta="Get a Free Consultation" />
                      </div>
                    </div>
                  </li>

                  <li className="nav-menu__item has-submenu hire">
                    <a
                      href="javascript:void(0)"
                      className="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100"
                    >
                      Hire Developers
                    </a>
                    <div className="new-header-mega-menu-inner nav-submenu scroll-sm">
                      <div className="align-items-center mega-inner">
                        <div className="mega-col">
                          {hireLinks.slice(0, 3).map((s) => (
                            <Link
                              key={s.href}
                              href={s.href}
                              className="mega-item"
                            >
                              <span className="icon">
                                <img width="20px" src={s.icon} alt="" />
                              </span>
                              <div>
                                <strong>{s.label}</strong>
                                <p>{s.blurb}</p>
                              </div>
                            </Link>
                          ))}
                        </div>
                        <div className="mega-col">
                          {hireLinks.slice(3, 6).map((s) => (
                            <Link
                              key={s.href}
                              href={s.href}
                              className="mega-item"
                            >
                              <span className="icon">
                                <img width="20px" src={s.icon} alt="" />
                              </span>
                              <div>
                                <strong>{s.label}</strong>
                                <p>{s.blurb}</p>
                              </div>
                            </Link>
                          ))}
                        </div>
                        <div className="mega-col">
                          {hireLinks.slice(6).map((s) => (
                            <Link
                              key={s.href}
                              href={s.href}
                              className="mega-item"
                            >
                              <span className="icon">
                                <img width="20px" src={s.icon} alt="" />
                              </span>
                              <div>
                                <strong>{s.label}</strong>
                                <p>{s.blurb}</p>
                              </div>
                            </Link>
                          ))}
                        </div>
                        <ContactCard cta="Get a Free Consultation" />
                      </div>
                    </div>
                  </li>
                  <li className="nav-menu__item">
                    <Link
                      href={routes.casestudy}
                      className="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100"
                    >
                      Case Study
                    </Link>
                  </li>
                </ul>
              </div>

              <div className="d-flex align-items-center tw-gap-6">
                <Link
                  href={routes.contact}
                  className="hover--translate-y-1 btn active--translate-y-scale-9 btn-main-two hover-style-two button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-4 fw-semibold"
                  data-block="button"
                >
                  <span className="button__flair"></span>
                  <span className="button__label">Contact Us</span>
                </Link>
                <button
                  type="button"
                  className="toggle-mobileMenu leading-none d-lg-none text-neutral-800 tw-text-9"
                >
                  <i className="ph ph-list"></i>
                </button>
              </div>
            </nav>
          </div>
        </header>
    </>
  );
}

function ContactCard({ cta }: { cta: string }) {
  return (
    <div className="audit-box">
      <div className="autid-detail">
        <div className="contact-info">
          <a href="tel:+16465687779">
            <img width="20px" src="/assets/images/icons/call.png" alt="" /> +1
            (646) 568-7779
          </a>
          <a href="mailto:sales@zalgoinfotech.com">
            <img width="20px" src="/assets/images/icons/email.png" alt="" />{" "}
            sales@zalgoinfotech.com
          </a>
          <a
            role="button"
            tabIndex={0}
            style={{ cursor: "pointer" }}
            onClick={() => {
              window.location.href = "msteams:/l/chat/0/0?users=serveonetech@gmail.com";
            }}
          >
            <img width="20px" src="/assets/images/icons/team.png" alt="" />{" "}
            zalgoinfotech
          </a>
        </div>
        <div className="serving">
          <p>
            <strong>
              <img
                width="20px"
                src="/assets/images/icons/worldwide.png"
                alt=""
              />{" "}
              Serving Clients:
            </strong>
          </p>
          <span>USA • CANADA • UK • UAE • INDIA</span>
        </div>
        <a
          target="_blank"
          rel="noreferrer"
          href="https://calendly.com/zalgoinfotec/30min?month=2026-02"
          className="w-100 hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
        >
          {cta}
        </a>
      </div>
    </div>
  );
}

const serviceLinks = [
  {
    href: routes.webDevelopment,
    label: "Web Development",
    blurb: "Custom Websites",
    icon: "/assets/images/icons/domain.png",
  },
  {
    href: routes.cmsDevelopment,
    label: "CMS Development",
    blurb: "Easy Management",
    icon: "/assets/images/icons/cms.png",
  },
  {
    href: routes.reactDevelopment,
    label: "ReactJS Development",
    blurb: "Modern Frontend",
    icon: "/assets/images/icons/react.png",
  },
  {
    href: routes.shopifyDevelopment,
    label: "Shopify Development",
    blurb: "Shopify Stores",
    icon: "/assets/images/icons/shopify.png",
  },
  {
    href: routes.nodejsDevelopment,
    label: "NodeJS Development",
    blurb: "Scalable Backend",
    icon: "/assets/images/icons/nodejs.png",
  },
  {
    href: routes.ecommerceDevelopment,
    label: "E-commerce Development",
    blurb: "Online Stores",
    icon: "/assets/images/icons/ecommerce.png",
  },
  {
    href: routes.pythonDevelopment,
    label: "python Development",
    blurb: "Backend Solutions",
    icon: "/assets/images/icons/python.png",
  },
  {
    href: routes.aiDevelopment,
    label: "AI Development",
    blurb: "Smart Automation",
    icon: "/assets/images/icons/ai-processor.png",
  },
  {
    href: routes.laravelDevelopment,
    label: "Laravel Development",
    blurb: "Secure Applications",
    icon: "/assets/images/icons/laravel.png",
  },
  {
    href: routes.maintenanceServices,
    label: "Maintenance Services",
    blurb: "Ongoing Support",
    icon: "/assets/images/icons/maintenance.png",
  },
  {
    href: routes.seoServices,
    label: "SEO Services",
    blurb: "Search Growth",
    icon: "/assets/images/icons/seo.png",
  },
  {
    href: routes.digitalServices,
    label: "Digital Marketing",
    blurb: "Online Growth",
    icon: "/assets/images/icons/dm.png",
  },
];

const hireLinks = [
  {
    href: routes.hireWebDeveloper,
    label: "Hire Web Developers",
    blurb: "Custom Websites",
    icon: "/assets/images/icons/hire-web-developers.png",
  },
  {
    href: routes.hireWordpressDeveloper,
    label: "Hire WordPress Developers",
    blurb: "WordPress Experts",
    icon: "/assets/images/icons/hire-wordpress-developers.png",
  },
  {
    href: routes.hireLaravelDeveloper,
    label: "Hire Laravel Developers",
    blurb: "Secure Apps",
    icon: "/assets/images/icons/hire-laravel-developers.png",
  },
  {
    href: routes.hireNodejsDeveloper,
    label: "Hire Node.js Developers",
    blurb: "Fast Backend",
    icon: "/assets/images/icons/hire-nodejsdevelopers.png",
  },
  {
    href: routes.hirePhpDeveloper,
    label: "Hire PHP Developers",
    blurb: "PHP Experts",
    icon: "/assets/images/icons/hire-php-developers.png",
  },
  {
    href: routes.hireAiDeveloper,
    label: "Hire AI Developers",
    blurb: "AI Solutions",
    icon: "/assets/images/icons/hire-ai-developers.png",
  },
  {
    href: routes.hireReactjsDeveloper,
    label: "Hire ReactJS Developers",
    blurb: "Modern UI",
    icon: "/assets/images/icons/hire-reactjs-developers.png",
  },
  {
    href: routes.hireNextjsDeveloper,
    label: "Hire NextJS Developers",
    blurb: "Fast Websites",
    icon: "/assets/images/icons/hire-nextjs-developers.png",
  },
  {
    href: routes.hirePythonDeveloper,
    label: "Hire python Developers",
    blurb: "Smart Backend",
    icon: "/assets/images/icons/hire-paython-developers.png",
  },
];

const industries = [
  { label: "HealthCare", icon: "/assets/images/icons/healthcare.png" },
  { label: "Travel", icon: "/assets/images/icons/destination.png" },
  { label: "E-Commerce", icon: "/assets/images/icons/online-shop.png" },
  { label: "Education", icon: "/assets/images/icons/education.png" },
  { label: "Real Estate", icon: "/assets/images/icons/building.png" },
  { label: "Entertainment", icon: "/assets/images/icons/cinema.png" },
  {
    label: "Business Services",
    icon: "/assets/images/icons/customer-service.png",
  },
  { label: "Non Profit", icon: "/assets/images/icons/holding-hands.png" },
  { label: "Finance", icon: "/assets/images/icons/asset-management.png" },
  { label: "Food & Restaurant", icon: "/assets/images/icons/cutlery.png" },
  {
    label: "Manufacturing",
    icon: "/assets/images/icons/enviromentally-friendly.png",
  },
  { label: "Lawyer", icon: "/assets/images/icons/law.png" },
  { label: "CRM", icon: "/assets/images/icons/crm.png" },
];
