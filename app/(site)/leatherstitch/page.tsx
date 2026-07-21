import PageShell from "@/components/PageShell";
import CaseStudyTemplate from "@/components/case-studies/CaseStudyTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Leather Stitch Case Study - E-commerce Website & Digital Marketing",
  description:
    "Zalgo Infotech is building Leather Stitch (leatherstitch.in), a Next.js & Node.js e-commerce store for leather shoes, alongside ongoing SEO, digital marketing, and social media handling.",
  keywords: [
    "Leather Stitch case study",
    "e-commerce website development",
    "Next.js e-commerce case study",
    "leather shoes online store",
    "digital marketing case study",
    "social media management case study",
  ],
  path: "/leatherstitch",
});

export default function LeatherStitchPage() {
  return (
    <PageShell>
      <CaseStudyTemplate
        heroHeading={
          <>
            <span className="d-inline-block">Crafting</span>{" "}
            <span className="text-green d-inline-block fw-semibold">Leather Stitch&apos;s</span>{" "}
            <span className="d-inline-block fw-semibold">E-commerce Journey</span>
          </>
        }
        heroSubtitle="E-commerce Website (In Progress) | SEO | Digital Marketing | Social Media"
        heroImage={{ src: "/assets/images/thumbs/cart-img1.png", alt: "Leather Stitch E-commerce" }}
        metaItems={[
          { icon: "/assets/images/thumbs/pltform.gif", label: "Platform", value: "Next.js + Node.js" },
          { icon: "/assets/images/thumbs/industry.gif", label: "Industry", value: "Leather Footwear" },
          { icon: "/assets/images/thumbs/project-type.gif", label: "Project Type", value: "E-commerce" },
          { icon: "/assets/images/thumbs/duration.gif", label: "Duration", value: "In Progress" },
          { icon: "/assets/images/thumbs/region.gif", label: "Region", value: "India" },
        ]}
        overviewText="Leather Stitch (leatherstitch.in) is a leather shoes brand building a full-fledged e-commerce presence. Zalgo Infotech is developing the store on a Next.js and Node.js stack with a Neon (PostgreSQL) database, while simultaneously driving its digital marketing and social media presence, so the brand builds an audience even as the platform takes shape."
        challenges={{
          heading: (
            <>
              Business <span className="font-dm-serif fw-semibold text-green">Challenges</span>
            </>
          ),
          intro: "As a leather footwear brand entering e-commerce, Leather Stitch needed:",
          items: [
            "A fast, modern e-commerce website to sell leather shoes online",
            "A technology stack that scales well with product catalog and traffic growth",
            "A digital marketing presence to build brand awareness before and during launch",
            "Active social media handling to engage customers early",
          ],
          closing: "The website (leatherstitch.in) is currently in active development, alongside ongoing digital marketing and social media work.",
        }}
        role={{
          heading: (
            <>
              Our Role & <span className="font-dm-serif fw-semibold text-green">Responsibilities</span>
            </>
          ),
          intro: "We're serving as Leather Stitch's end-to-end technology and digital growth partner.",
          secondIntro: "Our responsibilities include:",
          items: [
            "Building the e-commerce website on Next.js (frontend) and Node.js (backend)",
            "Structuring product catalog, cart, and checkout flows",
            "Running SEO and digital marketing to build early visibility",
            "Managing social media accounts and content",
            "Planning the store's public launch on leatherstitch.in",
          ],
        }}
        solution={{
          heading: (
            <>
              Solution <span className="font-dm-serif fw-semibold text-green">Delivered</span>
            </>
          ),
          intro:
            "While the e-commerce platform is being built on a modern Next.js + Node.js stack, we've kept the brand active in the market through digital marketing and social media.",
          secondIntro: "Currently delivered:",
          items: [
            "E-commerce website under active development (Next.js + Node.js)",
            "Ongoing digital marketing to build brand visibility",
            "Active social media handling and content posting",
            "SEO-ready foundation being built in for the upcoming launch",
          ],
        }}
        techStack={{
          counterValue: (
            <>
              <span className="counter">3</span>
            </>
          ),
          counterLabel: "Core Technologies",
          lines: [
            { label: "Frontend", text: "Next.js" },
            { label: "Backend", text: "Node.js" },
            { label: "Database", text: "Neon (PostgreSQL)" },
            { text: "Custom E-commerce Store Build" },
          ],
        }}
        results={{
          subtitle: "An active, ongoing partnership building Leather Stitch's e-commerce platform and digital presence",
          items: [
            { text: "E-commerce website currently in development" },
            { text: "Active digital marketing campaigns" },
            { text: "Ongoing social media management" },
            { text: "Growing brand presence ahead of launch" },
          ],
        }}
        whyMatters={[
          { icon: "/assets/images/icons/On-Page-SEO.png", text: "Demonstrates Next.js + Node.js e-commerce build capability" },
          { icon: "/assets/images/icons/Performance-Marketing-Paid-Growth.png", text: "Shows digital marketing support alongside development" },
          { icon: "/assets/images/icons/Social-Engagement-Community-Building.png", text: "Proves social media management for retail brands" },
          { icon: "/assets/images/icons/trust.png", text: "Builds trust as a one-stop e-commerce & marketing partner" },
        ]}
        cta={{
          badge: <>Trusted by growing e-commerce & retail brands</>,
          heading: "Ready to build your e-commerce presence?",
          tags: [
            "Next.js Development",
            "Node.js Development",
            "E-commerce Website",
            "SEO Strategy",
            "Digital Marketing",
            "Social Media Management",
          ],
        }}
      />
    </PageShell>
  );
}
