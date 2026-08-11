import PageShell from "@/components/PageShell";
import HireLandingTemplate from "@/components/hire/HireLandingTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Hire Next.js Developers",
  description:
    "Hire dedicated Next.js developers for SEO-friendly SSR/SSG apps, fast page loads, and scalable architecture with flexible hiring options.",
  keywords: [
    "hire next.js developers",
    "hire dedicated next.js developer",
    "next.js developer for hire",
    "hire nextjs programmer",
    "next.js development company",
    "hire react next.js developer",
  ],
  path: "/hirenextjsdeveloper",
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
  "Custom Next.js application development",
  "Server-Side Rendering (SSR) & Static Site Generation (SSG)",
  "SEO-friendly and high-performance web applications",
  "Dynamic & static websites using Next.js",
  "Responsive & mobile-first UI development",
  "API routes & backend integration",
  "State management (Redux, Context API, Zustand)",
  "REST & GraphQL API integration",
  "Performance optimization & image optimization",
  "Secure, scalable & production-ready architecture",
  "Migration from React to Next.js",
  "Maintenance, upgrades & ongoing support",
];

const distractionIcons = [
  "Next2.png",
  "Next3.png",
  "Next4.png",
  "Next5.png",
  "Next6.png",
  "Next7.png",
  "Next1.png",
];

const roadmapSteps = [
  { label: "Requirement Discussion" },
  { label: "Project Planning & Architecture" },
  { label: "Timeline & Cost Finalization" },
  { label: "Next.js Developer Selection" },
  { label: "Onboarding & Kickoff" },
  { label: "Agile Next.js Development" },
  { label: "Testing & Quality Assurance" },
  { label: "Deployment & Ongoing Support" },
];

const whoShouldHireItems = [
  {
    title: "Companies Building Next.js Applications",
    desc: "Organizations looking to build high-performance, SEO-friendly, and scalable web applications using Next.js to deliver faster load times and superior user experiences.",
    image: "/assets/images/thumbs/hire-img1.png",
  },
  {
    title: "Teams Needing Dedicated Next.js Developers",
    desc: "Extend your in-house team with skilled Next.js developers for long-term or project-based requirements, ensuring faster delivery and clean, maintainable code.",
    image: "/assets/images/thumbs/hire-img2.png",
  },
  {
    title: "Businesses Scaling Web & SEO-Driven Platforms",
    desc: "Ideal for businesses looking to scale content-heavy, SEO-focused, and high-traffic platforms with superior performance and optimized loading speeds.",
    image: "/assets/images/thumbs/hire-img3.png",
  },
  {
    title: "Enterprises With Complex Web Systems",
    desc: "Perfect for enterprises managing large-scale applications that require server-side rendering, advanced routing, secure APIs, and scalable architecture.",
    image: "/assets/images/thumbs/hire-img4.png",
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

export default function HireNextjsDeveloperPage() {
  return (
    <PageShell>
      <HireLandingTemplate
        developerLabel="Next.js Developers"
        bannerHeadingSuffix="For High Performance Websites"
        bannerDesc={
          <>
            Build <span className="text-yellow">Fast, SEO-friendly, and Scalable</span> Web Applications with our
            expert Next.js developers. Leverage the power of server-side rendering, static site generation, and
            modern React architecture to deliver exceptional user experiences.
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
        aboutBadgeSuffix=" Cost-Effective Next.js Development"
        aboutHeadingPrefix="Next.js"
        aboutHeadingItalic="Developers"
        aboutHeadingSuffix="Can Help You With:"
        aboutDesc="In today’s competitive digital landscape, businesses need fast, SEO-optimized, and scalable web applications. Our Next.js developers specialize in building modern, high-performance web solutions using advanced React and server-side capabilities to drive better visibility, performance, and business growth."
        aboutChecklist={aboutChecklist}
        distractionHeading={
          <>
            Next.js <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">Tech </span>
            <br />
            Stack
          </>
        }
        distractionIcons={distractionIcons}
        roadmapDescription="We follow a structured and transparent Next.js development process to reduce risk, ensure quality, and deliver scalable solutions on time."
        roadmapSteps={roadmapSteps}
        whoShouldHireDesc="Hire experienced Next.js developers to build fast, SEO-optimized, and scalable web applications tailored to your business goals. Our experts help you leverage server-side rendering, static generation, and modern frontend architecture for maximum performance and growth."
        whoShouldHireItems={whoShouldHireItems}
        faqSectionDesc="Everything you need to know before hiring our Next.js developers."
        faqItems={faqItems}
        finalCtaHeading="Ready to Hire a Next.js Developer?"
      />
    </PageShell>
  );
}
