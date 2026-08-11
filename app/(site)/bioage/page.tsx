import PageShell from "@/components/PageShell";
import CaseStudyTemplate from "@/components/case-studies/CaseStudyTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "BIOAGE Case Study - Scaling a WooCommerce Store to $1M+/Month",
  description:
    "See how Zalgo Infotech helped BIOAGE scale its WooCommerce store to $1M+ monthly revenue through SEO, security, and digital marketing.",
  keywords: [
    "BIOAGE case study",
    "WooCommerce case study",
    "e-commerce development case study",
    "WordPress e-commerce scaling",
    "SEO for e-commerce",
    "digital marketing case study",
  ],
  path: "/bioage",
});

export default function BioagePage() {
  return (
    <PageShell>
      <CaseStudyTemplate
        heroHeading={
          <>
            <span className="d-inline-block">Scaling a</span>{" "}
            <span className="text-green d-inline-block fw-semibold">WooCommerce</span>{" "}
            <span className="text-green d-inline-block fw-semibold">E-commerce</span>{" "}
            <span className="d-inline-block fw-semibold">Brand to</span>{" "}
            <span style={{ color: "rgb(65 137 8)" }} className="d-inline-block fw-semibold">
              {" "}
              $ 1M+{" "}
            </span>
            <span className="d-inline-block fw-semibold"> Monthly Revenue</span>
          </>
        }
        heroSubtitle="WooCommerce | E-commerce | SEO | Digital Marketing"
        heroImage={{ src: "/assets/images/case-study/bioage.png", alt: "BIOAGE" }}
        metaItems={[
          { icon: "/assets/images/thumbs/pltform.gif", label: "Platform", value: "WordPress" },
          { icon: "/assets/images/thumbs/industry.gif", label: "Industry", value: "E-Commerce" },
          { icon: "/assets/images/thumbs/project-type.gif", label: "Project Type", value: "Long Term" },
          { icon: "/assets/images/thumbs/duration.gif", label: "Duration", value: "6+ Year" },
          { icon: "/assets/images/thumbs/region.gif", label: "Region", value: "Canada" },
        ]}
        overviewText="BIOAGE is a growing e-commerce brand operating in a competitive online market. The client required a stable, secure, and scalable e-commerce platform along with continuous marketing and technical support to drive long-term growth."
        challenges={{
          heading: (
            <>
              Business <span className="font-dm-serif fw-semibold text-green">Challenges</span>
            </>
          ),
          intro: "As the business scaled, several challenges emerged:",
          items: [
            "Handling increasing traffic and sales volume",
            "Maintaining website performance and uptime",
            "Securing the store against attacks and vulnerabilities",
            "Managing SEO and digital marketing consistently",
            "Ensuring smooth and reliable payment gateway operations",
            "Ongoing maintenance without downtime",
          ],
          closing: "The client needed one reliable technical partner to manage everything.",
        }}
        role={{
          heading: (
            <>
              Our Role & <span className="font-dm-serif fw-semibold text-green">Responsibilities</span>
            </>
          ),
          intro: "We handled the project end-to-end, acting as their complete technical and growth partner.",
          secondIntro: "Our responsibilities included:",
          items: [
            "WooCommerce & WordPress development",
            "Website optimization and performance tuning",
            "Full SEO strategy and execution",
            "Digital marketing management",
            "Security implementation using Sucuri",
            "Hosting management on SiteGround",
            "Payment gateway setup & maintenance",
            "Continuous updates, monitoring, and support",
            "Sales and growth optimization",
          ],
          closing: "The client needed one reliable technical partner to manage everything.",
        }}
        solution={{
          heading: (
            <>
              Solution <span className="font-dm-serif fw-semibold text-green">Delivered</span>
            </>
          ),
          intro: "We built and maintained a high-performance WooCommerce e-commerce system optimized for scalability, security, and conversions.",
          secondIntro: "Key Solutions:",
          items: [
            "Optimized WooCommerce store architecture",
            "Advanced security setup with Sucuri",
            "High-performance hosting configuration on SiteGround",
            "SEO-driven content and technical optimization",
            "Conversion-focused website improvements",
            "Stable and secure payment gateway integrations",
          ],
        }}
        techStack={{
          counterValue: (
            <>
              <span className="counter">2</span>k+
            </>
          ),
          counterLabel: "Integration",
          lines: [
            { label: "CMS", text: "WordPress" },
            { label: "E-commerce", text: "WooCommerce" },
            { label: "Hosting", text: "SiteGround" },
            { label: "Security", text: "Sucuri, Wordfence" },
            { text: "SEO Tools & Analytics" },
            { label: "Payment Gateways", text: "Intuit, Strip, Woo, Paypal" },
          ],
        }}
        results={{
          subtitle: "This long-term collaboration delivered strong, measurable results",
          items: [
            { text: "$1M+ monthly sales" },
            { text: "Stable performance during high traffic" },
            { text: "Continuous organic growth through SEO" },
            { text: "6+ years of successful partnership" },
          ],
        }}
        testimonial={{
          heading: (
            <>
              <span className="d-inline-block fw-semibold"> Client Trust & </span>
              <span className="text-green d-inline-block fw-semibold">Recognition</span>
            </>
          ),
          subtitle:
            "We built and maintained a high-performance WooCommerce e-commerce system optimized for scalability, security, and conversions.",
          images: [
            "/assets/images/case-study/bioage-cs1.png",
            "/assets/images/case-study/bioage-cs2.png",
            "/assets/images/case-study/bioage-cs3.png",
            "/assets/images/case-study/bioage-cs4.png",
            "/assets/images/case-study/bioage-cs5.png",
          ],
        }}
        whyMatters={[
          { icon: "/assets/images/icons/marketing-report.png", text: "Proves real-world e-commerce scalability" },
          { icon: "/assets/images/icons/satisfaction.png", text: "Demonstrates WooCommerce & WordPress expertise" },
          { icon: "/assets/images/icons/system.png", text: "Shows ability to manage both tech + growth" },
          { icon: "/assets/images/icons/trust.png", text: "Builds strong trust for global B2B & B2C clients" },
        ]}
        cta={{
          badge: (
            <>
              Up to <span className="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
            </>
          ),
          heading: "Ready to revolutionize our service?",
          tags: [
            "WooCommerce Development",
            "Custom Checkout Logic",
            "Add-On Integration",
            "CSV Automation",
            "Custom Plugin Development",
            "Secure Data Handling",
            "Payment Gateway Integration",
            "WordPress",
            "Custom Backend Tool",
            "Backend System Design",
          ],
        }}
      />
    </PageShell>
  );
}
