import PageShell from "@/components/PageShell";
import CaseStudyTemplate from "@/components/case-studies/CaseStudyTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Expert Heavy Equipment Case Study - WordPress & WooCommerce Site",
  description:
    "How Zalgo Infotech built a secure WordPress and WooCommerce site with Twilio SMS integration for Expert Heavy Equipment, a veteran-owned Texas heavy equipment dealer.",
  keywords: [
    "heavy equipment website case study",
    "WooCommerce case study",
    "WordPress security case study",
    "Twilio integration case study",
    "SEO for equipment dealers",
    "Wordfence security implementation",
  ],
  path: "/experthe",
});

export default function ExperthePage() {
  return (
    <PageShell>
      <CaseStudyTemplate
        heroHeading={
          <>
            <span className="d-inline-block">Building a Trusted</span>{" "}
            <span className="text-green d-inline-block fw-semibold">Digital Presence</span>{" "}
            <span className="d-inline-block fw-semibold">for a</span>{" "}
            <span className="text-green d-inline-block fw-semibold">Veteran-Owned</span>{" "}
            <span className="d-inline-block fw-semibold">Heavy Equipment Business</span>
          </>
        }
        heroSubtitle="WordPress | WooCommerce | Twilio | Wordfence | SEO"
        heroImage={{
          src: "/assets/images/case-study/experthe-case-study.png",
          alt: "Expert Heavy Equipment",
        }}
        metaItems={[
          { icon: "/assets/images/thumbs/pltform.gif", label: "Platform", value: "WordPress" },
          { icon: "/assets/images/thumbs/industry.gif", label: "Industry", value: "Heavy Equipment" },
          { icon: "/assets/images/thumbs/project-type.gif", label: "Project Type", value: "Long Term" },
          { icon: "/assets/images/thumbs/duration.gif", label: "Duration", value: "4+ Years" },
          { icon: "/assets/images/thumbs/region.gif", label: "Region", value: "USA – Texas" },
        ]}
        overviewText="Expert Heavy Equipment Inc. (EHE) is a Marine Corps Veteran-owned business based in League City, Texas. They specialize in buying and selling used construction and heavy equipment — nationally and internationally. With approximately 95% of business coming from referrals and returning clients, EHE needed a strong, secure, and professional digital presence to match their reputation in the field."
        challenges={{
          heading: (
            <>
              Business <span className="font-dm-serif fw-semibold text-green">Challenges</span>
            </>
          ),
          intro: "As EHE grew, several critical challenges needed to be addressed:",
          items: [
            "No professional online presence to showcase their heavy equipment inventory",
            "Establishing credibility and trust in a competitive used equipment market",
            "Reaching national and international buyers through digital channels",
            "Communicating their unique due diligence process (NICB checks, ECM verification) clearly online",
            "Managing customer inquiries and leads from multiple regions (English & Spanish)",
            "Ensuring website security and uptime for a business-critical platform",
          ],
          closing: "EHE needed one trusted technology partner to build and sustain their entire digital presence.",
        }}
        role={{
          heading: (
            <>
              Our Role & <span className="font-dm-serif fw-semibold text-green">Responsibilities</span>
            </>
          ),
          intro: "We acted as EHE's complete digital partner — from website design to security and ongoing support.",
          secondIntro: "Our responsibilities included:",
          items: [
            "Custom WordPress website design & development",
            "WooCommerce integration for equipment listings and inquiries",
            "Twilio SMS integration for real-time customer communication (English & Spanish lines)",
            "Website security hardening with Wordfence",
            "SEO optimization for heavy equipment & construction keywords",
            "Mobile-responsive design for on-the-field access by buyers and staff",
            "Content strategy showcasing EHE's 4 key differentiators (Due Diligence, Research, Pricing, IEDA)",
            "Ongoing maintenance, updates, and performance monitoring",
          ],
        }}
        solution={{
          heading: (
            <>
              Solution <span className="font-dm-serif fw-semibold text-green">Delivered</span>
            </>
          ),
          intro:
            "We built a professional, secure, and conversion-optimised WordPress website that authentically represents Expert Heavy Equipment's brand and process.",
          secondIntro: "Key Solutions:",
          items: [
            "Custom WordPress site reflecting their Marine Veteran-owned brand identity",
            "Equipment listing pages for Backhoes, Excavators, Boom Lifts, Skid Steers & more",
            "Wordfence security to protect against threats and unauthorized access",
            "Twilio SMS for instant bilingual (EN/ES) lead communication",
            "Trust-building design clearly presenting their NICB checks, ECM research, and IEDA membership",
            "SEO-optimised pages driving national & international buyer traffic",
          ],
        }}
        techStack={{
          counterValue: (
            <>
              <span className="counter">4</span>+
            </>
          ),
          counterLabel: "Years Partner",
          lines: [
            { label: "CMS", text: "WordPress" },
            { label: "E-commerce", text: "WooCommerce" },
            { label: "Communication", text: "Twilio SMS (EN & ES lines)" },
            { label: "Security", text: "Wordfence" },
            { text: "SEO Tools & Analytics" },
            { label: "Location", text: "League City & La Marque, Texas" },
          ],
        }}
        results={{
          subtitle: "A professional digital transformation that delivered measurable business growth",
          items: [
            { text: "$3M+ in sales within 18 months of launch" },
            { text: "95% business from referrals & returning clients" },
            { text: "National & international buyer reach" },
            { text: "4+ years of successful ongoing partnership" },
          ],
        }}
        whyMatters={[
          { icon: "/assets/images/icons/marketing-report.png", text: "Proves digital growth for traditional industries" },
          {
            icon: "/assets/images/icons/satisfaction.png",
            text: "Demonstrates WordPress & WooCommerce expertise for non-retail sectors",
          },
          { icon: "/assets/images/icons/system.png", text: "Shows bilingual communication integration with Twilio SMS" },
          { icon: "/assets/images/icons/trust.png", text: "Builds trust for B2B clients in high-value equipment industries" },
        ]}
        cta={{
          badge: (
            <>
              Want results like Expert Heavy Equipment? <span className="text-yellow text-stroke-yellow">Let&apos;s talk</span>
            </>
          ),
          heading: "Ready to build your digital presence?",
          tags: [
            "WordPress Development",
            "WooCommerce Listings",
            "Twilio SMS Integration",
            "Wordfence Security",
            "SEO Strategy",
            "Heavy Equipment Industry",
            "Mobile Responsive Design",
            "Veteran-Owned Business",
            "Lead Generation",
            "Bilingual Support",
          ],
        }}
      />
    </PageShell>
  );
}
