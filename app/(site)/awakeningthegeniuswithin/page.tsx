import PageShell from "@/components/PageShell";
import CaseStudyTemplate from "@/components/case-studies/CaseStudyTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Awakening The Genius Within Case Study - Wellness Book Platform",
  description:
    "See how Zalgo Infotech built a WordPress and WooCommerce platform showcasing Awakening The Genius Within and its cellular nutrition research.",
  keywords: [
    "Awakening The Genius Within case study",
    "health and wellness website case study",
    "WooCommerce book sales platform",
    "WordPress publishing website",
    "SEO for wellness brands",
    "book showcase website development",
  ],
  path: "/awakeningthegeniuswithin",
});

export default function AwakeningTheGeniusWithinPage() {
  return (
    <PageShell>
      <CaseStudyTemplate
        heroHeading={
          <>
            <span className="d-inline-block">Building a Digital Platform for</span>{" "}
            <span className="text-green d-inline-block fw-semibold">Awakening The Genius Within</span>{" "}
            <span className="d-inline-block fw-semibold">– Cellular Nutrition</span>{" "}
            <span className="text-green d-inline-block fw-semibold">Book & Wellness</span>{" "}
            <span className="d-inline-block fw-semibold">Showcase</span>
          </>
        }
        heroSubtitle="WordPress | WooCommerce | Health & Wellness | SEO | Book Publishing"
        heroImage={{
          src: "/assets/images/thumbs/Awakeningthegeniuswithin.jpg",
          alt: "Awakening The Genius Within",
        }}
        metaItems={[
          { icon: "/assets/images/thumbs/pltform.gif", label: "Platform", value: "WordPress" },
          { icon: "/assets/images/thumbs/industry.gif", label: "Industry", value: "Health & Wellness" },
          { icon: "/assets/images/thumbs/project-type.gif", label: "Project Type", value: "Long Term" },
          { icon: "/assets/images/thumbs/duration.gif", label: "Duration", value: "6+ Years" },
          { icon: "/assets/images/thumbs/region.gif", label: "Region", value: "Canada" },
        ]}
        overviewText='"Awakening The Genius Within – The Culmination in Cellular Nutrition" is an acclaimed health and wellness book authored by Roland Thomas, BSc, NMD, published by Quantum Leap Wellness Publishing. The book documents the life and 22-year research of scientist Dr. Michael Kiriac on Bio-Algae Concentrates (BAC) — a breakthrough in microalgae-based cellular nutrition. The client needed a professional digital platform to showcase the book, reach health-conscious audiences across North America, and drive online sales globally.'
        challenges={{
          heading: (
            <>
              Business <span className="font-dm-serif fw-semibold text-green">Challenges</span>
            </>
          ),
          intro: "As the book and wellness brand grew, several key challenges emerged:",
          items: [
            "No dedicated online platform to showcase the book, research, and Dr. Michael Kiriac's work",
            "Communicating complex scientific content (microalgae, BAC, cellular nutrition) in an accessible and engaging way",
            "Reaching a global audience of health-conscious consumers, alternative medicine practitioners, and farmers",
            "Setting up a reliable WooCommerce store for book sales and wellness product distribution",
            "Building credibility around decades of microalgae research and clinical studies",
            "Maintaining consistent SEO performance in a competitive health and nutraceutical niche",
          ],
          closing: "The client needed a trusted digital partner to build, manage, and grow the entire online presence.",
        }}
        role={{
          heading: (
            <>
              Our Role & <span className="font-dm-serif fw-semibold text-green">Responsibilities</span>
            </>
          ),
          intro: "We served as the complete digital partner — handling everything from website development to ongoing growth.",
          secondIntro: "Our responsibilities included:",
          items: [
            "Custom WordPress website design & development aligned with the wellness brand identity",
            "WooCommerce store setup for book sales (8th Edition, ISBN: 1-890252-25-5) and product distribution",
            "Content architecture to present Dr. Kiriac's 22-year microalgae research in a digestible format",
            "SEO strategy targeting health, wellness, nutrition, and cellular nutrition keywords",
            "Payment gateway integration for secure online book purchases",
            "Mobile-responsive design for readers across all devices",
            "Ongoing maintenance, security updates, and performance monitoring",
          ],
        }}
        solution={{
          heading: (
            <>
              Solution <span className="font-dm-serif fw-semibold text-green">Delivered</span>
            </>
          ),
          intro:
            "We built a clean, credibility-driven WordPress website that brings Roland Thomas's landmark wellness book and Dr. Kiriac's groundbreaking research to a global digital audience.",
          secondIntro: "Key Solutions:",
          items: [
            'Professional book showcase website for "Awakening The Genius Within" (8th Edition)',
            "Dedicated sections for Bio-Algae Concentrates (BAC), research studies, and clinical applications",
            "WooCommerce store enabling direct book orders across Canada and North America",
            "Author profile page highlighting Roland Thomas's credentials (BSc, NMD) and Dr. Kiriac's biography",
            "SEO-optimised content around cellular nutrition, microalgae, and nutraceutical keywords",
            "Conversion-focused design building trust through research data, statistics, and testimonials",
          ],
        }}
        techStack={{
          counterValue: (
            <>
              <span className="counter">6</span>+
            </>
          ),
          counterLabel: "Years Partner",
          lines: [
            { label: "CMS", text: "WordPress" },
            { label: "E-commerce", text: "WooCommerce" },
            { label: "Publisher", text: "Quantum Leap Wellness Publishing" },
            { text: "SEO Tools & Analytics" },
            { label: "Payment Gateway", text: "Secure Online Checkout" },
            { label: "Region", text: "Canada & North America" },
          ],
        }}
        results={{
          subtitle: "A strong digital foundation that brought a landmark wellness book to a global audience",
          items: [
            { text: "Book in its 8th Edition with global readership" },
            { text: "Audience across Canada, USA, and international markets" },
            { text: "Consistent organic growth through SEO in the health niche" },
            { text: "6+ years of ongoing digital partnership" },
          ],
        }}
        whyMatters={[
          { icon: "/assets/images/icons/marketing-report.png", text: "Proves our expertise in health & wellness digital platforms" },
          {
            icon: "/assets/images/icons/satisfaction.png",
            text: "Demonstrates our ability to present scientific content in a user-friendly format",
          },
          { icon: "/assets/images/icons/system.png", text: "Shows WooCommerce capability for book publishing & niche product sales" },
          { icon: "/assets/images/icons/trust.png", text: "Builds trust for clients in nutraceutical, publishing & wellness industries" },
        ]}
        cta={{
          badge: (
            <>
              Want a platform like this for your wellness brand? <span className="text-yellow text-stroke-yellow">Let&apos;s build it</span>
            </>
          ),
          heading: "Ready to bring your brand online?",
          tags: [
            "WordPress Development",
            "WooCommerce Book Store",
            "Health & Wellness Niche",
            "Cellular Nutrition",
            "Book Publishing Platform",
            "SEO Strategy",
            "Bio-Algae Concentrates (BAC)",
            "Nutraceutical Industry",
            "Payment Gateway",
            "Responsive Design",
          ],
        }}
      />
    </PageShell>
  );
}
