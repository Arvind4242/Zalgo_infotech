import PageShell from "@/components/PageShell";
import CaseStudyTemplate from "@/components/case-studies/CaseStudyTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Finance Manager Training Case Study - Online F&I LMS Platform",
  description:
    "How Zalgo Infotech built a 5-star rated WordPress and WooCommerce F&I certification training platform with a members-only LMS portal for nationwide students.",
  keywords: [
    "Finance Manager Training case study",
    "online training platform case study",
    "WordPress LMS development",
    "WooCommerce course enrollment",
    "F&I certification website",
    "SEO for education websites",
  ],
  path: "/financemanagertraining",
});

export default function FinanceManagerTrainingPage() {
  return (
    <PageShell>
      <CaseStudyTemplate
        heroHeading={
          <>
            <span className="d-inline-block">Building a</span>{" "}
            <span className="text-green d-inline-block fw-semibold">5-Star Rated</span>{" "}
            <span className="d-inline-block fw-semibold">Online F&amp;I Certification</span>{" "}
            <span className="text-green d-inline-block fw-semibold">Training Platform</span>
          </>
        }
        heroSubtitle="WordPress | WooCommerce | LMS | SEO | Digital Marketing"
        heroImage={{
          src: "/assets/images/thumbs/Finance-Manager-Training.jpg",
          alt: "Finance Manager Training",
        }}
        metaItems={[
          { icon: "/assets/images/thumbs/pltform.gif", label: "Platform", value: "WordPress" },
          { icon: "/assets/images/thumbs/industry.gif", label: "Industry", value: "F&I Education" },
          { icon: "/assets/images/thumbs/project-type.gif", label: "Project Type", value: "Long Term" },
          { icon: "/assets/images/thumbs/duration.gif", label: "Duration", value: "Ongoing" },
          { icon: "/assets/images/thumbs/region.gif", label: "Region", value: "USA – All 50 States" },
        ]}
        overviewText="Finance Manager Training (FMT) is a 5-star rated F&I training school based in Fairport, New York — dedicated to “training the next generation of elite F&I Managers” for automotive, RV, and powersports dealerships. Operating 100% online with no travel required, FMT serves students across all 50 U.S. states and Canada, offering F&I certification programs with live trainer access, job placement assistance, and a career earning potential of $150,000+ per year. With a 4.8/5 Google rating, 4.7/5 on Indeed, and a perfect 5.0 BBB score, FMT needed a powerful digital platform to match their industry-leading reputation."
        challenges={{
          heading: (
            <>
              Business <span className="font-dm-serif fw-semibold text-green">Challenges</span>
            </>
          ),
          intro: "As FMT scaled nationwide, several key challenges emerged:",
          items: [
            "Building a fully online LMS capable of serving students across all 50 states with no travel required",
            "Managing course enrollment, certification exams, and secure student portal access",
            "Communicating F&I career value and $150,000+ earning potential effectively online",
            "Driving qualified leads through SEO in a competitive automotive training niche",
            "Creating a free lesson funnel (3 complimentary F&I lessons) to convert visitors into paying students",
            "Maintaining a high-trust brand reflected by their 4.8★ Google, 4.7★ Indeed, and 5.0★ BBB ratings",
          ],
          closing: "FMT needed a single reliable technology partner to build and scale their complete digital training ecosystem.",
        }}
        role={{
          heading: (
            <>
              Our Role & <span className="font-dm-serif fw-semibold text-green">Responsibilities</span>
            </>
          ),
          intro: "We built and managed FMT's complete digital training infrastructure end-to-end. Our responsibilities included:",
          items: [
            "Custom WordPress website design with conversion-focused landing pages",
            "WooCommerce integration for course enrollment and payment processing",
            "Members-only LMS portal (members.financemanagertraining.com) setup & management",
            "Free F&I lesson funnel setup to capture leads and drive student conversions",
            "SEO strategy targeting F&I training, automotive dealership, and finance certification keywords",
            "Digital marketing campaigns for student acquisition across all 50 states and Canada",
            "Ongoing maintenance, 24/7 support system integration, and performance monitoring",
          ],
        }}
        solution={{
          heading: (
            <>
              Solution <span className="font-dm-serif fw-semibold text-green">Delivered</span>
            </>
          ),
          intro:
            "We delivered a complete, scalable online F&I training ecosystem — from marketing website to members-only LMS portal. Key Solutions:",
          items: [
            "Professional WordPress site highlighting F&I certification programs and career outcomes",
            "Secure WooCommerce checkout for 6-Month and Quick F&I Certification enrollment (with lifetime access option)",
            "Members-only LMS portal with proprietary curriculum, live F&I trainer access, and certification exam",
            "Free F&I lesson funnel driving organic lead generation and student conversion",
            "Trust-building design showcasing 4.8★ Google, 4.7★ Indeed, 5.0★ BBB ratings and graduate testimonials",
            "Job placement assistance section connecting certified graduates with automotive dealerships nationwide",
          ],
        }}
        techStack={{
          counterValue: (
            <>
              <span className="counter">50</span>+
            </>
          ),
          counterLabel: "States Served",
          lines: [
            { label: "CMS", text: "WordPress" },
            { label: "E-commerce", text: "WooCommerce" },
            { label: "LMS Portal", text: "members.financemanagertraining.com" },
            { label: "Marketing", text: "Facebook, Google, YouTube" },
            { text: "SEO Tools & Analytics" },
            { label: "Location", text: "6 N Main St, Suite 320B, Fairport, NY 14450" },
          ],
        }}
        results={{
          subtitle: "A nationally recognized F&I training platform delivering life-changing career outcomes",
          items: [
            { text: "4.8★ Google · 4.7★ Indeed · 5.0★ BBB Rated" },
            { text: "Students across all 50 U.S. states & Canada" },
            { text: "F&I Managers earning $150,000+ per year post-certification" },
            { text: "Ongoing partnership with 24/7 platform support" },
          ],
        }}
        whyMatters={[
          { icon: "/assets/images/icons/marketing-report.png", text: "Proves our LMS & online education platform expertise" },
          { icon: "/assets/images/icons/satisfaction.png", text: "Shows ability to scale national student enrollment digitally" },
          { icon: "/assets/images/icons/system.png", text: "Demonstrates WooCommerce + LMS integration capability" },
          { icon: "/assets/images/icons/trust.png", text: "Builds trust for e-learning and professional certification clients" },
        ]}
        cta={{
          badge: (
            <>
              Want a platform like FMT? <span className="text-yellow text-stroke-yellow">Let&apos;s build it</span>
            </>
          ),
          heading: "Ready to launch your online education platform?",
          tags: [
            "WordPress Development",
            "WooCommerce Enrollment",
            "LMS Portal",
            "F&I Certification Training",
            "SEO Strategy",
            "Digital Marketing",
            "Automotive Industry",
            "Online Certification",
            "Lead Generation",
            "Job Placement Support",
          ],
        }}
      />
    </PageShell>
  );
}
