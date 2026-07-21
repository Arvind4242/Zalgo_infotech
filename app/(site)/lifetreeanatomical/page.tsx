import PageShell from "@/components/PageShell";
import CaseStudyTemplate from "@/components/case-studies/CaseStudyTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Life Tree Anatomical Case Study - Healthcare Website Design",
  description:
    "How Zalgo Infotech built a compassionate WordPress website for Life Tree Anatomical, Texas's first non-university body donation program, with SEO and UI/UX design.",
  keywords: [
    "Life Tree Anatomical case study",
    "healthcare website case study",
    "WordPress UI UX design",
    "medical nonprofit website development",
    "SEO for healthcare websites",
    "sensitive content web design",
  ],
  path: "/lifetreeanatomical",
});

export default function LifetreeAnatomicalPage() {
  return (
    <PageShell>
      <CaseStudyTemplate
        heroHeading={
          <>
            <span className="d-inline-block">Building a Compassionate</span>{" "}
            <span className="text-green d-inline-block fw-semibold"> Digital Platform</span>{" "}
            <span className="d-inline-block fw-semibold">for Texas&apos;s First</span>{" "}
            <span className="text-green d-inline-block fw-semibold">Non-University Body </span>
            <span className="d-inline-block fw-semibold">Donation Program</span>
          </>
        }
        heroSubtitle="WordPress | Healthcare | UI/UX Design | SEO | Responsive Design"
        heroImage={{
          src: "/assets/images/thumbs/Lifetreeanatomical.jpg",
          alt: "Life Tree Anatomical",
        }}
        metaItems={[
          { icon: "/assets/images/thumbs/pltform.gif", label: "Platform", value: "WordPress" },
          { icon: "/assets/images/thumbs/industry.gif", label: "Industry", value: "Healthcare" },
          { icon: "/assets/images/thumbs/project-type.gif", label: "Project Type", value: "Long Term" },
          { icon: "/assets/images/thumbs/duration.gif", label: "Duration", value: "Ongoing" },
          { icon: "/assets/images/thumbs/region.gif", label: "Region", value: "Texas, USA" },
        ]}
        overviewText={
          `Life Tree Anatomical is Texas's first non-university willed body program, operating 24/7 out of Texas, USA. They facilitate whole body donation to accredited medical institutions for educational and scientific research purposes — completely free of charge to donors and their families. Their tagline says it all: "Respect · Dignity · Legacy." Services include free transportation throughout Texas, free cremation with ashes returned to the family, an annual remembrance ceremony for donors, and compassionate grief and bereavement support. Life Tree Anatomical needed a professional, trustworthy, and sensitive digital presence to guide families through one of life's most important decisions.`
        }
        challenges={{
          heading: (
            <>
              Business <span className="font-dm-serif fw-semibold text-green">Challenges</span>
            </>
          ),
          intro:
            "Building a digital presence for a sensitive, trust-critical healthcare service presented unique challenges:",
          items: [
            "Communicating a sensitive, deeply personal service (whole body donation) with empathy and clarity online",
            "Building strong trust as Texas's first non-university willed body program — a new concept for many families",
            "Guiding families through a clear 4-step registration process while maintaining a compassionate tone",
            "Making the website accessible 24/7 to serve families in their most urgent moments",
            "Driving organic search traffic for body donation, free cremation, and end-of-life planning in Texas",
            "Ensuring mobile responsiveness for families reaching out from any device at any hour",
          ],
          closing: "Life Tree Anatomical needed a digital partner who could balance sensitivity, professionalism, and clarity.",
        }}
        role={{
          heading: (
            <>
              Our Role & <span className="font-dm-serif fw-semibold text-green">Responsibilities</span>
            </>
          ),
          intro:
            "We served as their complete digital partner — designing a website that honours the gravity of their mission. Our responsibilities included:",
          items: [
            "Custom WordPress website design with a compassionate, respectful UI/UX approach",
            "Clear presentation of the 4-step donor registration process (Contact → Registration Packet → Next of Kin → Notification)",
            "Services pages detailing free transportation, free cremation, grief support, and annual remembrance ceremony",
            "SEO strategy targeting body donation, free cremation Texas, and end-of-life planning keywords",
            "Mobile-responsive design ensuring 24/7 accessibility for families on any device",
            "Contact integration with 24/7 phone (512-402-8533) and email (info@lifetreeanatomical.com)",
            "Ongoing maintenance, security, and performance monitoring",
          ],
        }}
        solution={{
          heading: (
            <>
              Solution <span className="font-dm-serif fw-semibold text-green">Delivered</span>
            </>
          ),
          intro:
            "We built a dignified, trustworthy WordPress website that guides Texas families through body donation with respect and clarity. Key Solutions:",
          items: [
            `Compassionate WordPress website aligned with their "Respect · Dignity · Legacy" mission`,
            "Clear step-by-step donor registration flow making the process easy for families in grief",
            "Dedicated service pages: free transportation, free cremation, grief support, and annual remembrance ceremony",
            "SEO-optimised content positioning them as Texas's premier willed body donation program",
            "24/7-accessible, fully mobile-responsive design for urgent family inquiries at any time",
          ],
        }}
        techStack={{
          counterValue: (
            <>
              <span className="counter">24</span>/7
            </>
          ),
          counterLabel: "Available",
          lines: [
            { label: "CMS", text: "WordPress" },
            { label: "Design", text: "Compassionate UI/UX for healthcare" },
            { label: "SEO", text: "Healthcare & end-of-life planning keywords" },
            { label: "Contact", text: "(512) 402-8533 | info@lifetreeanatomical.com" },
            { label: "Availability", text: "24/7 open to families across Texas" },
            { label: "Location", text: "Texas, United States" },
          ],
        }}
        results={{
          subtitle: "A dignified digital presence that helps Texas families make a meaningful end-of-life decision",
          items: [
            { text: "Texas's first non-university willed body donation program" },
            { text: "24/7 accessibility for families across the entire state of Texas" },
            { text: "Consistent organic traffic growth through healthcare SEO" },
            { text: "Ongoing long-term digital partnership and maintenance" },
          ],
        }}
        whyMatters={[
          { icon: "/assets/images/icons/marketing-report.png", text: "Proves our expertise in sensitive healthcare website design" },
          { icon: "/assets/images/icons/satisfaction.png", text: "Shows ability to build trust and empathy through web design" },
          { icon: "/assets/images/icons/system.png", text: "Demonstrates SEO capability in niche healthcare verticals" },
          { icon: "/assets/images/icons/trust.png", text: "Builds confidence for healthcare and non-profit sector clients" },
        ]}
        cta={{
          badge: (
            <>
              Need a compassionate digital presence? <span className="text-yellow text-stroke-yellow">Let&apos;s build it</span>
            </>
          ),
          heading: "Ready to bring your mission online?",
          tags: [
            "WordPress Development",
            "Healthcare Web Design",
            "Body Donation Program",
            "Compassionate UI/UX",
            "SEO Strategy",
            "Texas Healthcare",
            "End-of-Life Services",
            "24/7 Accessibility",
            "Medical Research",
            "Responsive Design",
          ],
        }}
      />
    </PageShell>
  );
}
