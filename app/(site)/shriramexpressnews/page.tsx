import PageShell from "@/components/PageShell";
import CaseStudyTemplate from "@/components/case-studies/CaseStudyTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Shri Ram Express News Case Study - Website & Social Media",
  description:
    "Zalgo Infotech is building Shri Ram Express News' website and managing its social media presence, helping the news agency grow its digital reach.",
  keywords: [
    "Shri Ram Express News case study",
    "news website development",
    "social media management case study",
    "digital marketing for news agency",
    "media website development",
  ],
  path: "/shriramexpressnews",
});

export default function ShriRamExpressNewsPage() {
  return (
    <PageShell>
      <CaseStudyTemplate
        heroHeading={
          <>
            <span className="d-inline-block">Powering</span>{" "}
            <span className="text-green d-inline-block fw-semibold">Shri Ram Express News&apos;</span>{" "}
            <span className="d-inline-block fw-semibold">Digital Presence</span>
          </>
        }
        heroSubtitle="News Website (In Progress) | Social Media Management"
        heroImage={{ src: "/assets/images/thumbs/blog-page-img1.png", alt: "Shri Ram Express News" }}
        metaItems={[
          { icon: "/assets/images/thumbs/pltform.gif", label: "Platform", value: "Next.js + Node.js" },
          { icon: "/assets/images/thumbs/industry.gif", label: "Industry", value: "News & Media" },
          { icon: "/assets/images/thumbs/project-type.gif", label: "Project Type", value: "Ongoing" },
          { icon: "/assets/images/thumbs/duration.gif", label: "Duration", value: "In Progress" },
          { icon: "/assets/images/thumbs/region.gif", label: "Region", value: "India" },
        ]}
        overviewText="Shri Ram Express News (shriramexpressnewsgwl) is a news agency delivering local and regional news to its readers. Zalgo Infotech is currently building the agency's website on a Next.js and Node.js stack with a Neon (PostgreSQL) database, while actively managing its social media presence to keep readers engaged and grow its digital audience."
        challenges={{
          heading: (
            <>
              Business <span className="font-dm-serif fw-semibold text-green">Challenges</span>
            </>
          ),
          intro: "As a growing news agency, Shri Ram Express News needed:",
          items: [
            "A dedicated, professional website to publish and archive news",
            "A consistent social media presence to reach readers where they already are",
            "Fast turnaround on publishing timely news content",
            "A digital identity that matches the trust of an established news brand",
          ],
          closing: "The website is currently in development, while social media management is already live.",
        }}
        role={{
          heading: (
            <>
              Our Role & <span className="font-dm-serif fw-semibold text-green">Responsibilities</span>
            </>
          ),
          intro: "We're acting as the agency's ongoing technology and social media partner.",
          secondIntro: "Our responsibilities include:",
          items: [
            "Designing and developing the news website with Next.js, Node.js, and a Neon (PostgreSQL) database (in progress)",
            "Managing social media accounts and posting schedule",
            "Creating and publishing news-focused social content",
            "Growing audience engagement across social platforms",
            "Planning the website launch and content migration strategy",
          ],
        }}
        solution={{
          heading: (
            <>
              Solution <span className="font-dm-serif fw-semibold text-green">Delivered</span>
            </>
          ),
          intro:
            "While the website is being built, we've already put an active social media operation in place so the agency doesn't lose momentum with its audience.",
          secondIntro: "Currently delivered:",
          items: [
            "Active social media management and content posting",
            "Consistent brand presence across social platforms",
            "News website in active development",
            "Planned SEO-ready structure for the upcoming website launch",
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
            { text: "Social Media Management & Content Publishing" },
          ],
        }}
        results={{
          subtitle: "An active, ongoing partnership building the agency's full digital presence",
          items: [
            { text: "Active social media management" },
            { text: "Consistent content publishing schedule" },
            { text: "Website currently in development" },
            { text: "Growing digital audience" },
          ],
        }}
        whyMatters={[
          { icon: "/assets/images/icons/Social-Engagement-Community-Building.png", text: "Shows social media management for media brands" },
          { icon: "/assets/images/icons/system.png", text: "Demonstrates ability to manage ongoing, evolving projects" },
          { icon: "/assets/images/icons/trust.png", text: "Builds trust with news & media industry clients" },
          { icon: "/assets/images/icons/marketing-report.png", text: "Proves consistent content & audience growth work" },
        ]}
        cta={{
          badge: <>Trusted by growing local businesses & media brands</>,
          heading: "Ready to build your digital presence?",
          tags: [
            "Website Development",
            "Social Media Management",
            "Content Publishing",
            "News & Media Websites",
            "Digital Marketing",
          ],
        }}
      />
    </PageShell>
  );
}
