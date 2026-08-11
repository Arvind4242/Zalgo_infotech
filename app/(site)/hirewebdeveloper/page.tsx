import PageShell from "@/components/PageShell";
import HireLandingTemplate from "@/components/hire/HireLandingTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Hire Web Developers",
  description:
    "Hire dedicated web developers for custom websites, CMS, and e-commerce solutions with responsive full-stack expertise and flexible hiring options.",
  keywords: [
    "hire web developers",
    "hire dedicated web developer",
    "hire website developer",
    "custom web development company",
    "hire full stack developer",
    "web developer for hire",
  ],
  path: "/hirewebdeveloper",
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
  "Custom website development",
  "Responsive & mobile-first design",
  "Frontend & backend development",
  "CMS development (WordPress, headless CMS)",
  "E-commerce web development",
  "Third-party API integrations",
  "Website maintenance & support",
];

const distractionIcons = [
  "web-dev2.png",
  "web-dev3.png",
  "web-dev4.png",
  "web-dev5.png",
  "web-dev6.png",
  "web-dev7.png",
  "vdf.png",
];

const roadmapSteps = [
  { label: "Requirement Discussion" },
  { label: "Project Planning & Architecture" },
  { label: "Timeline & Cost Finalization" },
  { label: "Web Developer Selection" },
  { label: "Onboarding & Kickoff" },
  { label: "Agile Web Development" },
  { label: "Testing & Quality Assurance" },
  { label: "Deployment & Ongoing Support" },
];

const whoShouldHireItems = [
  {
    title: "Businesses Needing Custom Websites",
    desc: "Modern, responsive, and high-performance websites built by expert web developers.",
    image: "/assets/images/thumbs/hire-img1.png",
  },
  {
    title: "Companies Building Web Applications",
    desc: "Secure, scalable, and feature-rich web applications tailored to business needs.",
    image: "/assets/images/thumbs/hire-img2.png",
  },
  {
    title: "Teams Requiring Dedicated Web Developers",
    desc: "Hire dedicated web developers for continuous development and support.",
    image: "/assets/images/thumbs/hire-img3.png",
  },
  {
    title: "Companies Scaling Web Platforms",
    desc: "Enhance performance, security, and features of existing web platforms.",
    image: "/assets/images/thumbs/hire-img4.png",
  },
  {
    title: "Enterprises With Complex Web Systems",
    desc: "Enterprise-grade web solutions with advanced integrations and scalability.",
    image: "/assets/images/thumbs/hire-img5.png",
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

export default function HireWebDeveloperPage() {
  return (
    <PageShell>
      <HireLandingTemplate
        developerLabel="Web Developers"
        bannerHeadingSuffix="For High-Performance Websites"
        bannerDesc={
          <>
            Build- <span className="text-yellow">fast, responsive, </span> and secure websites with our experienced
            web developers. Hire skilled professionals for full-time, part-time, or project-based web development —
            globally.
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
        aboutBadgeSuffix=" Cost-Effective Web Development"
        aboutHeadingPrefix="Web"
        aboutHeadingItalic="Developers"
        aboutHeadingSuffix="Can Help You With:"
        aboutDesc="In today’s digital-first world, businesses need fast, responsive, and scalable websites to stay competitive. Our web developers build high-performance solutions tailored to your business goals."
        aboutChecklist={aboutChecklist}
        distractionHeading={
          <>
            Web <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">That Works </span>
            <br />
            for You
          </>
        }
        distractionIcons={distractionIcons}
        roadmapDescription="We follow a structured and transparent Web development process to reduce risk, ensure quality, and deliver scalable solutions on time."
        roadmapSteps={roadmapSteps}
        whoShouldHireDesc="Hire skilled web developers to build fast, secure, and scalable websites and web applications tailored to your business needs."
        whoShouldHireItems={whoShouldHireItems}
        faqSectionDesc="Everything you need to know before hiring our web developers."
        faqItems={faqItems}
        finalCtaHeading="Ready to Hire a Web Developer?"
      />
    </PageShell>
  );
}
