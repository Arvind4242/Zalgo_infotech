import Script from "next/script";
import PageShell from "@/components/PageShell";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Pricing Package - Book a Consultation",
  description:
    "Explore Zalgo Infotech's pricing packages and schedule a free consultation to discuss your web development, AI automation, or software project needs.",
  keywords: [
    "IT services pricing",
    "software development pricing",
    "web development cost",
    "consultation booking",
    "Zalgo Infotech pricing",
  ],
  path: "/pricing",
});

export default function PricingPage() {
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
                <h1 className="mb-0 splitTextStyleOne text-capitalize">Pricing Package</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      {/* Breadcrumb End Here */}

      {/* Pricing Plan one Start */}
      <section className="pricing-plan-one py-120">
        <div className="container">
          {/* Calendly inline widget begin */}
          <div
            className="calendly-inline-widget"
            data-url="https://calendly.com/zalgoinfotec"
            style={{ minWidth: 320, height: 700 }}
          ></div>
          <Script src="https://assets.calendly.com/assets/external/widget.js" strategy="afterInteractive" />
          {/* Calendly inline widget end */}
        </div>
      </section>
      {/* Pricing Plan one End */}
    </PageShell>
  );
}
