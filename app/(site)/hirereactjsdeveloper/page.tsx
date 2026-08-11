import PageShell from "@/components/PageShell";
import HireLandingTemplate from "@/components/hire/HireLandingTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Hire React.js Developers",
  description:
    "Hire dedicated React.js developers for custom SPAs, component-based UIs, and Redux/API-driven applications with flexible engagement options.",
  keywords: [
    "hire react.js developers",
    "hire dedicated react developer",
    "react.js developers for hire",
    "react developer for hire",
    "hire reactjs programmer",
    "react.js development company",
  ],
  path: "/hirereactjsdeveloper",
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
  "Custom React JS application development",
  "Single Page Applications (SPAs) using React",
  "Responsive & mobile-first UI development",
  "Reusable component-based architecture",
  "State management (Redux, Context API, Zustand)",
  "API integration (REST & GraphQL)",
  "Performance optimization & code splitting",
  "Maintenance, upgrades & ongoing support",
];

const distractionIcons = [
  "react1.png",
  "react2.png",
  "react4.png",
  "react5.png",
  "react6.png",
  "react7.png",
  "react3.png",
];

const roadmapSteps = [
  { label: "Requirement Discussion" },
  { label: "Project Planning & Architecture" },
  { label: "Timeline & Cost Finalization" },
  { label: "React Developer Selection" },
  { label: "Onboarding & Kickoff" },
  { label: "Agile ReactJS Development" },
  { label: "Testing & Quality Assurance" },
  { label: "Deployment & Ongoing Support" },
];

const whoShouldHireItems = [
  {
    title: "Companies Building React Applications",
    desc: "Modern, high-performance React applications built for speed, scalability, and great user experience.",
    image: "/assets/images/thumbs/faq-thumb2.png",
  },
  {
    title: "Teams Needing Dedicated React JS Developers",
    desc: "Extend your in-house team with skilled React developers for long-term or project-based needs.",
    image: "/assets/images/thumbs/hire-img2.png",
  },
  {
    title: "Businesses Scaling Frontend Platforms",
    desc: "Optimize and scale existing React frontends to handle growth and high user traffic.",
    image: "/assets/images/thumbs/hire-img3.png",
  },
  {
    title: "Enterprises With Complex Web Systems",
    desc: "Robust React solutions for enterprise-grade applications with advanced integrations.",
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
          {["Slack", "Team", "Zoom / Google Meet", "Email"].map((item) => (
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

export default function HireReactJsDeveloperPage() {
  return (
    <PageShell>
      <HireLandingTemplate
        developerLabel="ReactJS Developers"
        bannerHeadingSuffix="For High Performance Websites"
        bannerDesc={
          <>
            Build-<span className="text-yellow">fast, scalable, and interactive</span> web applications with our
            experienced React JS developers. Hire skilled professionals for full-time, part-time, or project-based
            React development — globally.
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
        aboutBadgeSuffix=" Cost-Effective React JS Development"
        aboutHeadingPrefix="React JS"
        aboutHeadingItalic="Developers"
        aboutHeadingSuffix="Can Help You With:"
        aboutDesc="In today’s fast-paced digital landscape, businesses need dynamic, scalable, and high-performing web applications. Our React JS developers specialize in building modern user interfaces and robust frontends that deliver exceptional user experiences and measurable business results."
        aboutChecklist={aboutChecklist}
        distractionHeading={
          <>
            ReactJS <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">Tech </span>
            <br />
            Stack
          </>
        }
        distractionIcons={distractionIcons}
        roadmapDescription="We follow a structured and transparent ReactJS development process to reduce risk, ensure quality, and deliver scalable solutions on time."
        roadmapSteps={roadmapSteps}
        whoShouldHireDesc="Hire experienced React JS developers to build fast, scalable, and interactive web applications tailored to your business needs."
        whoShouldHireItems={whoShouldHireItems}
        faqSectionDesc="Everything you need to know before hiring our React.js developers."
        faqItems={faqItems}
        finalCtaHeading="Ready to Hire a ReactJS Developer?"
      />
    </PageShell>
  );
}
