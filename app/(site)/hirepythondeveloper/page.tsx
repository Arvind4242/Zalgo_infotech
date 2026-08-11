import PageShell from "@/components/PageShell";
import HireLandingTemplate from "@/components/hire/HireLandingTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Hire Python Developers",
  description:
    "Hire dedicated Python developers for Django and Flask apps, REST APIs, automation, and AI/ML solutions with flexible engagement options.",
  keywords: [
    "hire python developers",
    "hire dedicated python developer",
    "python developer for hire",
    "hire django developer",
    "python development company",
    "hire python programmer",
  ],
  path: "/hirepythondeveloper",
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
  "Custom Python Application Development",
  "Django & Flask Web Development",
  "REST API & Backend System Development",
  "AI, Machine Learning & Data Science Solutions",
  "Automation Scripts & Workflow Optimization",
  "Data Analytics & Business Intelligence",
  "Third-Party API & Cloud Integrations",
  "Performance Optimization & Scalability",
  "Maintenance, Support & Version Upgrades",
];

const distractionIcons = [
  "Python7.png",
  "Python6.png",
  "Python5.png",
  "Python4.png",
  "Python3.png",
  "Python2.png",
  "Python1.png",
];

const roadmapSteps = [
  { label: "Requirement Discussion" },
  { label: "Project Planning & Architecture" },
  { label: "Timeline & Cost Finalization" },
  { label: "Python Developer Selection" },
  { label: "Onboarding & Kickoff" },
  { label: "Agile Python Development" },
  { label: "Testing & Quality Assurance" },
  { label: "Deployment & Ongoing Support" },
];

const whoShouldHireItems = [
  {
    title: "Startups",
    desc: "Validate ideas faster and build MVPs using flexible and scalable Python solutions.",
    image: "/assets/images/thumbs/hire-img1.png",
  },
  {
    title: "SaaS Companies",
    desc: "Enhance your SaaS platform with robust Python backends, APIs, automation, and data-driven capabilities.",
    image: "/assets/images/thumbs/hire-img2.png",
  },
  {
    title: "Agencies",
    desc: "Extend your development team with skilled Python developers to deliver projects on time and at scale.",
    image: "/assets/images/thumbs/hire-img3.png",
  },
  {
    title: "Product-Based Businesses",
    desc: "Build secure, scalable, and performance-optimized products powered by Python technologies.",
    image: "/assets/images/thumbs/hire-img4.png",
  },
  {
    title: "Enterprises",
    desc: "Modernize legacy systems, automate operations, and develop enterprise-grade Python applications.",
    image: "/assets/images/thumbs/hire-img5.png",
  },
];

const faqItems = [
  {
    question: "What are the benefits of hiring a Python developer?",
    defaultOpen: true,
    answer:
      "Python developers build fast, scalable, and efficient applications. They are ideal for web apps, API development, automation, AI/ML solutions, and high-performance back-end systems.",
  },
  {
    question: "What experience levels are available?",
    answer: "We provide junior, mid-level, and senior developers to match your project’s complexity and budget.",
  },
  {
    question: "Can I hire remote Python developers?",
    answer: "Yes, we provide skilled remote developers who communicate seamlessly and deliver projects on time.",
  },
  {
    question: "What types of projects can Python developers handle?",
    answer:
      "Our developers can work on web applications, REST APIs, automation tools, AI/ML solutions, data analytics platforms, SaaS apps, microservices, and enterprise-level solutions.",
  },
  {
    question: "What is the process to hire a Python developer?",
    answer: "Simple: Share your requirements → Shortlist profiles → Interview → Hire → Start the project.",
  },
  {
    question: "Do you offer hourly or fixed-price hiring options?",
    answer: "Yes, you can hire developers on an hourly, monthly, or fixed-price basis, depending on your project needs.",
  },
  {
    question: "Is there a trial period to evaluate the developer?",
    answer:
      "Yes, we offer a short trial period so you can assess skills and compatibility before committing long-term.",
  },
  {
    question: "Can I hire developers for long-term projects?",
    answer: "Absolutely. You can hire developers as dedicated resources for long-term engagements.",
  },
  {
    question: "How do you ensure developers are skilled and up-to-date?",
    answer:
      "We provide only verified developers proficient in the latest Python frameworks, tools, and best practices.",
  },
  {
    question: "How is project confidentiality maintained?",
    answer:
      "We follow strict NDAs and secure workflows to ensure your project data and intellectual property remain fully protected.",
  },
];

export default function HirePythonDeveloperPage() {
  return (
    <PageShell>
      <HireLandingTemplate
        developerLabel="Python Developers"
        bannerHeadingSuffix="Robust & Scalable Applications"
        bannerDesc={
          <>
            Build- <span className="text-yellow">secure, high-performance, </span> and future-ready software with our
            expert Python developers. Hire full-time, part-time, or project-based Python professionals to develop web
            apps, APIs, automation tools, AI/ML solutions, and enterprise systems tailored to your business needs —
            worldwide.
          </>
        }
        whyChooseSavingBadge={
          <>
            Save Up to <span className="text-yellow text-stroke-yellow">70%</span> on Development Costs
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
        aboutBadgeHighlight="90%"
        aboutBadgeSuffix=" Python-Powered Development Solutions"
        aboutHeadingPrefix="Python"
        aboutHeadingItalic="Developers"
        aboutHeadingSuffix="Can Help You With:"
        aboutDesc="In today’s fast-evolving digital landscape, businesses need reliable, scalable, and high-performance backend solutions. Our expert Python developers help you turn complex ideas into secure, efficient, and future-ready applications that drive growth and automation."
        aboutChecklist={aboutChecklist}
        distractionHeading={
          <>
            Python <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">Tech </span>
            <br />
            Stack
          </>
        }
        distractionIcons={distractionIcons}
        roadmapDescription="We follow a structured and transparent Python development process to reduce risk, ensure quality, and deliver scalable solutions on time."
        roadmapSteps={roadmapSteps}
        whoShouldHireDesc="In today’s fast-paced digital world, businesses need scalable, secure, and high-performance backend solutions. Our experienced Python developers help organizations build reliable applications, automate workflows, and deliver future-ready software aligned with their business goals."
        whoShouldHireItems={whoShouldHireItems}
        faqSectionDesc="Everything you need to know before hiring our Python developers."
        faqItems={faqItems}
        finalCtaHeading="Ready to Hire a Python Developer?"
      />
    </PageShell>
  );
}
