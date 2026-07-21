import PageShell from "@/components/PageShell";
import HireLandingTemplate from "@/components/hire/HireLandingTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Hire Node.js Developers",
  description:
    "Hire dedicated Node.js developers for scalable REST/GraphQL APIs, real-time apps, and microservices. Save up to 70% with full-time, part-time, or hourly engagement models.",
  keywords: [
    "hire node.js developers",
    "hire dedicated node developer",
    "node.js developer for hire",
    "hire backend developer",
    "node.js development company",
    "hire nodejs api developer",
  ],
  path: "/hirenodejsdeveloper",
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
  "Custom backend development",
  "REST & GraphQL API development",
  "Real-time applications",
  "Microservices architecture",
  "Third-party integrations",
  "Performance optimization",
  "Maintenance & support",
];

const distractionIcons = [
  "nodejs1.png",
  "nodejs2.png",
  "nodejs3.png",
  "nodejs4.png",
  "nodejs5.png",
  "nodejs6.png",
  "nodejs7.png",
];

const roadmapSteps = [
  { label: "Requirement Discussion" },
  { label: "Project Planning & Architecture" },
  { label: "Timeline & Cost Finalization" },
  { label: "Node.js Developer Selection" },
  { label: "Onboarding & Kickoff" },
  { label: "Agile Node.js Development" },
  { label: "Testing & Quality Assurance" },
  { label: "Deployment & Ongoing Support" },
];

const whoShouldHireItems = [
  {
    title: "Startups",
    desc: "Launch faster with agile, cost-effective Node.js solutions for MVPs and scalable backends.",
    image: "/assets/images/thumbs/hire-img1.png",
  },
  {
    title: "SaaS Companies",
    desc: "Build scalable, high-performance SaaS platforms with robust Node.js architectures.",
    image: "/assets/images/thumbs/hire-img2.png",
  },
  {
    title: "Agencies",
    desc: "Extend your development team with trusted Node.js experts for timely, clean delivery.",
    image: "/assets/images/thumbs/hire-img3.png",
  },
  {
    title: "Product-Based Businesses",
    desc: "Power your digital products with fast, secure, and scalable Node.js backend systems.",
    image: "/assets/images/thumbs/hire-img4.png",
  },
  {
    title: "Enterprises",
    desc: "Enterprise-grade Node.js solutions to modernize legacy systems and handle high traffic.",
    image: "/assets/images/thumbs/hire-img5.png",
  },
];

const faqItems = [
  {
    question: "What are the benefits of hiring a Node.js developer?",
    defaultOpen: true,
    answer:
      "Node.js developers build fast, scalable, and efficient web applications. They are ideal for real-time apps, API development, and high-performance back-end solutions.",
  },
  {
    question: "What experience levels are available?",
    answer:
      "We provide junior, mid-level, and senior developers to match your project's complexity and budget.",
  },
  {
    question: "Can I hire remote Node.js developers?",
    answer:
      "Yes, we provide skilled remote developers who communicate seamlessly and deliver projects on time.",
  },
  {
    question: "What types of projects can Node.js developers handle?",
    answer:
      "Our developers can work on real-time applications, REST APIs, eCommerce platforms, SaaS apps, microservices, and enterprise-level solutions.",
  },
  {
    question: "What is the process to hire a Node.js developer?",
    answer: "Simple: Share your requirements → Shortlist profiles → Interview → Hire → Start the project.",
  },
  {
    question: "Do you offer hourly or fixed-price hiring options?",
    answer:
      "Yes, you can hire developers on an hourly, monthly, or fixed-price basis, depending on your project needs.",
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
      "We provide only verified developers proficient in the latest Node.js frameworks, tools, and best practices.",
  },
  {
    question: "How is project confidentiality maintained?",
    answer: (
      <>
        We follow strict <b>NDAs</b> and secure workflows to ensure your project data and intellectual property
        remain fully protected.
      </>
    ),
  },
];

export default function HireNodejsDeveloperPage() {
  return (
    <PageShell>
      <HireLandingTemplate
        developerLabel="Node.js Developers"
        bannerHeadingSuffix="For Scalable Applications"
        bannerDesc={
          <>
            Build- <span className="text-yellow">high-performance, secure, </span> and scalable applications with
            our experienced Node.js developers. Hire full-time, part-time, or on a project basis — globally.
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
        aboutBadgeHighlight="60%"
        aboutBadgeSuffix=" Cost-Effective Node.js Development"
        aboutHeadingPrefix="Node.js"
        aboutHeadingItalic="Developers"
        aboutHeadingSuffix="Can Help You With:"
        aboutDesc="In today's competitive business landscape, the demand for efficient, cost-effective IT solutions has never been more critical. Our Node.js developers build scalable, high-performance applications tailored to your business goals."
        aboutChecklist={aboutChecklist}
        distractionHeading={
          <>
            Node.js <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">Tech </span>
            <br />
            Stack
          </>
        }
        distractionIcons={distractionIcons}
        roadmapDescription="We follow a structured and transparent Node.js development process to reduce risk, ensure quality, and deliver scalable solutions on time."
        roadmapSteps={roadmapSteps}
        whoShouldHireDesc="In today's fast-paced digital landscape, businesses need scalable, high-performance, and real-time solutions. Our expert Node.js developers help you build fast, secure, and future-ready applications tailored to your business goals."
        whoShouldHireItems={whoShouldHireItems}
        faqSectionDesc="Everything you need to know before hiring our Node.js developers."
        faqItems={faqItems}
        finalCtaHeading="Ready to Hire a Node.js Developer?"
      />
    </PageShell>
  );
}
