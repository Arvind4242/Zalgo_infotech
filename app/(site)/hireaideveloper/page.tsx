import PageShell from "@/components/PageShell";
import HireLandingTemplate from "@/components/hire/HireLandingTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Hire AI Developers",
  description:
    "Hire dedicated AI developers for machine learning, NLP, computer vision, and AI chatbot solutions with flexible engagement options.",
  keywords: [
    "hire ai developers",
    "hire dedicated ai developer",
    "hire machine learning developer",
    "ai developer for hire",
    "hire nlp developer",
    "ai development company",
  ],
  path: "/hireaideveloper",
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
  "Custom AI Model Development",
  "Machine Learning & Deep Learning Solutions",
  "Natural Language Processing (NLP)",
  "Computer Vision Applications",
  "AI Chatbots & Virtual Assistants",
  "Predictive Analytics & Data Intelligence",
  "AI API & Third-Party Integrations",
  "Model Optimization & Deployment",
  "AI Maintenance & Support",
];

const distractionIcons = [
  "ai2.png",
  "ai3.png",
  "ai4.png",
  "ai5.png",
  "ai6.png",
  "ai7.png",
  "ai1.png",
];

const roadmapSteps = [
  { label: "Requirement Discussion" },
  { label: "Project Planning & Architecture" },
  { label: "Timeline & Cost Finalization" },
  { label: "AI Developer Selection" },
  { label: "Onboarding & Kickoff" },
  { label: "Agile AI Development" },
  { label: "Testing & Quality Assurance" },
  { label: "Deployment & Ongoing Support" },
];

const whoShouldHireItems = [
  {
    title: "Startups",
    desc: "Turn your ideas into smart AI products. We help startups build AI-powered MVPs, test concepts quickly, and scale with confidence.",
    image: "/assets/images/thumbs/hire-img1.png",
  },
  {
    title: "SaaS Companies",
    desc: "Add intelligence to your SaaS platform with AI features like recommendations, automation, and data-driven insights.",
    image: "/assets/images/thumbs/hire-img2.png",
  },
  {
    title: "Agencies",
    desc: "Deliver AI solutions to your clients without hiring in-house. Our AI developers work as an extension of your team.",
    image: "/assets/images/thumbs/hire-img3.png",
  },
  {
    title: "Product-Based Businesses",
    desc: "Make your products smarter with AI that improves performance, user experience, and business decisions.",
    image: "/assets/images/thumbs/hire-img4.png",
  },
  {
    title: "Enterprises",
    desc: "Implement secure and scalable AI solutions to automate operations, analyze large datasets, and drive digital transformation.",
    image: "/assets/images/thumbs/hire-img5.png",
  },
];

const faqItems = [
  {
    question: "What are the benefits of hiring an AI developer?",
    defaultOpen: true,
    answer:
      "AI developers build intelligent, data-driven, and scalable applications. They are ideal for automation, predictive analytics, and building smart, high-performance AI-powered solutions.",
  },
  {
    question: "What experience levels are available?",
    answer:
      "We provide junior, mid-level, and senior developers to match your project’s complexity and budget.",
  },
  {
    question: "Can I hire remote AI developers?",
    answer:
      "Yes, we provide skilled remote developers who communicate seamlessly and deliver projects on time.",
  },
  {
    question: "What types of projects can AI developers handle?",
    answer:
      "Our developers can work on AI chatbots, recommendation engines, predictive analytics platforms, computer vision applications, NLP solutions, and enterprise-level AI systems.",
  },
  {
    question: "What is the process to hire an AI developer?",
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
      "We provide only verified developers proficient in the latest AI frameworks, tools, and best practices.",
  },
  {
    question: "How is project confidentiality maintained?",
    answer:
      "We follow strict NDAs and secure workflows to ensure your project data and intellectual property remain fully protected.",
  },
];

export default function HireAiDeveloperPage() {
  return (
    <PageShell>
      <HireLandingTemplate
        developerLabel="AI Developers"
        bannerHeadingSuffix="For Intelligent & Scalable Solutions"
        bannerDesc={
          <>
            Build-<span className="text-yellow">smart, data-driven, and future-ready applications</span> with our
            experienced AI developers. Hire full-time, part-time, or on a project basis to integrate Artificial
            Intelligence into your business — globally.
          </>
        }
        whyChooseSavingBadge={
          <>
            Up to <span className="text-yellow text-stroke-yellow">70%</span> on Development Costs
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
        aboutBadgeSuffix=" AI-Powered Digital Solutions"
        aboutHeadingPrefix="AI"
        aboutHeadingItalic="Developers"
        aboutHeadingSuffix="Can Help You With:"
        aboutDesc="In today’s data-driven world, businesses need intelligent, scalable, and secure AI solutions to stay competitive. Our expert AI developers help you transform ideas into smart applications that drive growth and automation."
        aboutChecklist={aboutChecklist}
        distractionHeading={
          <>
            AI <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">Tech </span>
            Stack
          </>
        }
        distractionIcons={distractionIcons}
        roadmapDescription="We follow a structured and transparent AI development process to reduce risk, ensure quality, and deliver scalable solutions on time."
        roadmapSteps={roadmapSteps}
        whoShouldHireDesc="In today’s fast-evolving digital landscape, businesses need intelligent, data-driven, and scalable AI solutions. Our expert AI developers help organizations automate processes, gain insights, and build future-ready AI-powered products aligned with business goals."
        whoShouldHireItems={whoShouldHireItems}
        faqSectionDesc="Everything you need to know before hiring our AI developers."
        faqItems={faqItems}
        finalCtaHeading="Ready to Hire an AI Developer?"
      />
    </PageShell>
  );
}
