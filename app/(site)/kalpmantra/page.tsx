import PageShell from "@/components/PageShell";
import CaseStudyTemplate from "@/components/case-studies/CaseStudyTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Kalpmantra Case Study - Website, SEO & Digital Marketing",
  description:
    "How Zalgo Infotech built Kalpmantra's website from the ground up and grew its online presence with SEO, Meta Ads, and full-funnel digital marketing.",
  keywords: [
    "Kalpmantra case study",
    "digital marketing case study",
    "SEO case study",
    "Meta Ads case study",
    "website development case study",
    "social media marketing case study",
  ],
  path: "/kalpmantra",
});

export default function KalpmantraPage() {
  return (
    <PageShell>
      <CaseStudyTemplate
        heroHeading={
          <>
            <span className="d-inline-block">Building</span>{" "}
            <span className="text-green d-inline-block fw-semibold">Kalpmantra&apos;s</span>{" "}
            <span className="d-inline-block fw-semibold">Online Presence</span>{" "}
            <span className="d-inline-block">From the Ground Up</span>
          </>
        }
        heroSubtitle="Website Development | SEO | Meta Ads | Digital Marketing"
        heroImage={{ src: "/assets/images/thumbs/brand-marketing-img.png", alt: "Kalpmantra Digital Marketing" }}
        metaItems={[
          { icon: "/assets/images/thumbs/pltform.gif", label: "Platform", value: "Website + SEO" },
          { icon: "/assets/images/thumbs/industry.gif", label: "Industry", value: "Business Services" },
          { icon: "/assets/images/thumbs/project-type.gif", label: "Project Type", value: "Full-Service" },
          { icon: "/assets/images/thumbs/duration.gif", label: "Duration", value: "Ongoing" },
          { icon: "/assets/images/thumbs/region.gif", label: "Region", value: "India" },
        ]}
        overviewText="Kalpmantra needed a complete digital foundation — a professional website paired with a growth engine to bring in visibility and leads. Zalgo Infotech was brought on as the end-to-end technology and marketing partner, handling everything from website architecture to ongoing search and paid-ads strategy."
        challenges={{
          heading: (
            <>
              Business <span className="font-dm-serif fw-semibold text-green">Challenges</span>
            </>
          ),
          intro: "Before working with us, Kalpmantra faced common early-stage growth challenges:",
          items: [
            "No dedicated website to represent the brand online",
            "Little to no visibility on search engines",
            "No structured digital marketing or paid ad strategy",
            "No consistent process for turning online visitors into leads",
          ],
          closing: "They needed one partner to build the foundation and drive growth on top of it.",
        }}
        role={{
          heading: (
            <>
              Our Role & <span className="font-dm-serif fw-semibold text-green">Responsibilities</span>
            </>
          ),
          intro: "We acted as Kalpmantra's complete website and digital growth partner from day one.",
          secondIntro: "Our responsibilities included:",
          items: [
            "Designing and developing the website from scratch",
            "On-page and technical SEO setup",
            "Ongoing search engine optimization and content strategy",
            "Meta Ads (Facebook & Instagram) campaign setup and management",
            "Social media presence and engagement support",
            "Performance monitoring and continuous optimization",
          ],
        }}
        solution={{
          heading: (
            <>
              Solution <span className="font-dm-serif fw-semibold text-green">Delivered</span>
            </>
          ),
          intro:
            "We delivered a fully built website backed by a structured digital marketing engine covering organic search and paid acquisition.",
          secondIntro: "Key Solutions:",
          items: [
            "Custom-built, mobile-responsive website",
            "On-page SEO: metadata, site structure, content optimization",
            "Technical SEO: site speed, indexing, and crawlability improvements",
            "Meta Ads campaigns targeted to the right audience segments",
            "Social media content and community engagement support",
            "Monthly performance reporting and strategy refinement",
          ],
        }}
        techStack={{
          counterValue: (
            <>
              <span className="counter">100</span>%
            </>
          ),
          counterLabel: "Managed Service",
          lines: [
            { label: "Website", text: "Custom Development" },
            { label: "SEO", text: "On-Page & Technical SEO" },
            { label: "Paid Ads", text: "Meta Ads (Facebook & Instagram)" },
            { label: "Social Media", text: "Content & Community Management" },
            { text: "Analytics & Reporting" },
          ],
        }}
        results={{
          subtitle: "A single technology and marketing partner covering the full digital journey",
          items: [
            { text: "Website built and launched from scratch" },
            { text: "Structured SEO foundation put in place" },
            { text: "Active Meta Ads campaigns driving reach" },
            { text: "Ongoing digital marketing partnership" },
          ],
        }}
        whyMatters={[
          { icon: "/assets/images/icons/On-Page-SEO.png", text: "Demonstrates full-funnel SEO expertise" },
          { icon: "/assets/images/icons/Performance-Marketing-Paid-Growth.png", text: "Shows Meta Ads & paid growth capability" },
          { icon: "/assets/images/icons/Social-Engagement-Community-Building.png", text: "Proves social media management skill" },
          { icon: "/assets/images/icons/trust.png", text: "Builds trust as a one-stop digital partner" },
        ]}
        cta={{
          badge: (
            <>
              Up to <span className="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
            </>
          ),
          heading: "Ready to grow your digital presence?",
          tags: [
            "Website Development",
            "SEO Strategy",
            "Meta Ads Management",
            "Social Media Marketing",
            "Content Optimization",
            "Analytics & Reporting",
          ],
        }}
      />
    </PageShell>
  );
}
