import PageShell from "@/components/PageShell";
import HireLandingTemplate from "@/components/hire/HireLandingTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Hire WordPress Developers",
  description:
    "Hire dedicated WordPress developers for custom themes, plugins, and WooCommerce stores with optimized performance and security. Flexible full-time or hourly engagement.",
  keywords: [
    "hire wordpress developers",
    "hire dedicated wordpress developer",
    "wordpress developer for hire",
    "hire woocommerce developer",
    "wordpress development company",
    "hire wordpress theme developer",
  ],
  path: "/hirewordpressdeveloper",
});

const whyChooseChecklist = [
  "Experienced & vetted developers",
  "Proven development process",
  "Clear communication",
  "Flexible engagement models",
  "Source code ownership",
  "NDA & IP protection",
];

const aboutChecklist = [
  "Custom WordPress website development",
  "Theme customization & development",
  "Plugin development & customization",
  "WooCommerce & eCommerce solutions",
  "Responsive & mobile-friendly design",
  "Website speed optimization & performance tuning",
  "Third-party API & tool integrations",
  "WordPress security hardening",
  "Website migration & upgrades",
  "Ongoing maintenance, updates & support",
];

const distractionIcons = [
  "wp1.png",
  "wp2.png",
  "wp3.png",
  "wp4.png",
  "wp6.png",
  "wp7.png",
  "wp5.png",
];

const roadmapSteps = [
  { label: "Requirement Discussion" },
  { label: "Project Planning & Architecture" },
  { label: "Timeline & Cost Finalization" },
  { label: "WP Developer Selection" },
  { label: "Onboarding & Kickoff" },
  { label: "Agile WordPress Development" },
  { label: "Testing & Quality Assurance" },
  { label: "Deployment & Ongoing Support" },
];

const whoShouldHireItems = [
  {
    title: "Businesses Building WordPress Websites",
    desc: "Ideal for startups and growing businesses looking to create or revamp professional WordPress websites with custom features.",
    image: "/assets/images/thumbs/hire-img1.png",
  },
  {
    title: "Teams Needing Dedicated WordPress Developers",
    desc: "Extend your in-house team with skilled WordPress developers for long-term support or project-based development needs.",
    image: "/assets/images/thumbs/hire-img3.png",
  },
  {
    title: "Enterprises With Complex WordPress Solutions",
    desc: "Perfect for enterprises managing high-traffic websites, WooCommerce platforms, or complex WordPress integrations.",
    image: "/assets/images/thumbs/hire-img2.png",
  },
];

const faqItems = [
  {
    question: "What does “Hire Dedicated Developer” mean?",
    defaultOpen: true,
    answer:
      "Hiring a dedicated developer means you get a skilled professional who works exclusively on your project, just like an in-house employee, but at a much lower cost and with full flexibility.",
  },
  {
    question: "Can I hire developers on a full-time, part-time, or hourly basis?",
    answer: (
      <>
        <p className="text-neutral-500">Yes. We offer flexible hiring models:</p>
        <ul className="d-flex flex-column tw-gap-0">
          {["Full-time", "Part-time", "Hourly", "Project-based"].map((item) => (
            <li className="d-flex align-items-center tw-gap-4 group" key={item}>
              <span className="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                <i className="ph-bold ph-check"></i>
              </span>
              <p className="text-neutral-600">{item}</p>
            </li>
          ))}
        </ul>
        <p className="text-neutral-500">You can choose the model that best fits your business needs.</p>
      </>
    ),
  },
  {
    question: "How quickly can I hire a developer?",
    answer: "You can start within 24–48 hours after requirement discussion and developer selection.",
  },
  {
    question: "Will the developer work in my time zone?",
    answer:
      "Yes. Our developers provide global time-zone support and can work according to US, UK, Canada, Australia, or your local business hours.",
  },
  {
    question: "How do I communicate with the hired developer?",
    answer: (
      <>
        <p className="text-neutral-500">You can communicate directly via:</p>
        <ul className="d-flex flex-column tw-gap-0">
          {["Slack", "Teams", "Zoom / Google Meet", "Email"].map((item) => (
            <li className="d-flex align-items-center tw-gap-4 group" key={item}>
              <span className="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                <i className="ph-bold ph-check"></i>
              </span>
              <p className="text-neutral-600">{item}</p>
            </li>
          ))}
        </ul>
        <p className="text-neutral-500">You will have direct access to the developer.</p>
      </>
    ),
  },
  {
    question: "Is my project and data secure?",
    answer: (
      <>
        Absolutely. We follow strict security practices and provide{" "}
        <b>NDA (Non-Disclosure Agreement) protection</b> to keep your project and data fully confidential.
      </>
    ),
  },
  {
    question: "Can I replace the developer if I’m not satisfied?",
    answer:
      "Yes. If you are not satisfied with the developer’s performance, we offer free replacement within the agreed trial period.",
  },
  {
    question: "Who manages the developer?",
    answer: "You can manage the developer directly, or we can provide project management support if required.",
  },
  {
    question: "What is your pricing model?",
    answer: (
      <>
        <p className="text-neutral-500">Our pricing is transparent and cost-effective, based on:</p>
        <ul className="d-flex flex-column tw-gap-0">
          {["Skill level", "Technology", "Engagement model", "No hidden charges"].map((item) => (
            <li className="d-flex align-items-center tw-gap-4 group" key={item}>
              <span className="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                <i className="ph-bold ph-check"></i>
              </span>
              <p className="text-neutral-600">{item}</p>
            </li>
          ))}
        </ul>
      </>
    ),
  },
  {
    question: "What technologies do your developers work with?",
    answer:
      "Our developers work with a wide range of technologies including: Web, Mobile, Backend, Frontend, AI/ML, Cloud, CMS, E-commerce, and Custom Software solutions.",
  },
];

export default function HireWordpressDeveloperPage() {
  return (
    <PageShell>
      <HireLandingTemplate
        developerLabel="WP Developers"
        bannerHeadingSuffix="For High-Performance Websites"
        bannerDesc={
          <>
            Build- <span className="text-yellow">fast, secure, and scalable</span> WordPress websites with our
            experienced WordPress developers. From custom themes and plugins to enterprise-level solutions, we help
            you create powerful digital experiences that drive results.
          </>
        }
        whyChooseSavingBadge={
          <>
            Save Up to <span className="text-yellow text-stroke-yellow">60%</span> on Development Costs
          </>
        }
        whyChooseDesc="You work directly with skilled developers — no middle layers."
        whyChooseChecklist={whyChooseChecklist}
        hiringBadge={
          <>
            Up to <span className="text-yellow text-stroke-yellow">70%</span> Flexible Engagement
          </>
        }
        aboutBadgePrefix="Up to"
        aboutBadgeHighlight="60%"
        aboutBadgeSuffix=" Cost-Effective WordPress Development"
        aboutHeadingPrefix="WordPress"
        aboutHeadingItalic="Developers"
        aboutHeadingSuffix="Can Help You With:"
        aboutDesc="In today’s competitive digital landscape, businesses need secure, scalable, and easy-to-manage websites. Our WordPress developers specialize in building custom WordPress solutions that deliver seamless user experiences, strong performance, and measurable business growth."
        aboutChecklist={aboutChecklist}
        distractionHeading={
          <>
            WordPress <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">Tech </span>
            <br />
            Stack
          </>
        }
        distractionIcons={distractionIcons}
        roadmapDescription="We follow a structured and transparent WordPress development process to reduce risk, ensure quality, and deliver scalable solutions on time."
        roadmapSteps={roadmapSteps}
        whoShouldHireDesc="Hire experienced WordPress developers to build secure, scalable, and high-performing websites tailored to your business goals."
        whoShouldHireItems={whoShouldHireItems}
        faqSectionDesc="Everything you need to know before hiring our WordPress developers."
        faqItems={faqItems}
        finalCtaHeading="Ready to Hire a WordPress Developer?"
      />
    </PageShell>
  );
}
