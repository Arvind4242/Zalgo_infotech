import PageShell from "@/components/PageShell";
import HireLandingTemplate from "@/components/hire/HireLandingTemplate";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Hire Laravel Developers",
  description:
    "Hire dedicated Laravel developers for custom MVC web apps, REST APIs, and scalable, secure solutions with flexible hiring options.",
  keywords: [
    "hire laravel developers",
    "hire dedicated laravel developer",
    "laravel developer for hire",
    "hire laravel programmer",
    "laravel development company",
    "hire php laravel developer",
  ],
  path: "/hirelaraveldeveloper",
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
  "Custom Laravel web application development",
  "Core Laravel & MVC-based development",
  "Laravel, CodeIgniter & Symfony development",
  "RESTful API development & integration",
  "Database design & optimization (MySQL, PostgreSQL)",
  "Dynamic & data-driven web solutions",
  "Third-party API & payment gateway integrations",
  "Laravel application security & code optimization",
  "Performance tuning & scalability improvements",
  "Website migration, upgrades & maintenance",
];

const distractionIcons = [
  "laravel1.png",
  "laravel2.png",
  "laravel4.png",
  "laravel6.png",
  "laravel7.png",
  "laravel8.png",
  "laravel3.png",
];

const roadmapSteps = [
  { label: "Requirement Discussion" },
  { label: "Project Planning & Architecture" },
  { label: "Timeline & Cost Finalization" },
  { label: "Laravel Developer Selection" },
  { label: "Onboarding & Kickoff" },
  { label: "Agile Laravel Development" },
  { label: "Testing & Quality Assurance" },
  { label: "Deployment & Ongoing Support" },
];

const whoShouldHireItems = [
  {
    title: "Businesses Building Laravel Applications",
    desc: "Organizations looking to develop custom, dynamic, and database-driven Laravel applications from scratch.",
    image: "/assets/images/thumbs/hire-img1.png",
  },
  {
    title: "Teams Needing Dedicated Laravel Developers",
    desc: "Extend your in-house team with skilled Laravel developers for long-term support or project-based development needs.",
    image: "/assets/images/thumbs/hire-img3.png",
  },
  {
    title: "Enterprises With Complex Laravel Solutions",
    desc: "Large businesses managing complex Laravel systems, high-traffic platforms, or enterprise-level integrations.",
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

export default function HireLaravelDeveloperPage() {
  return (
    <PageShell>
      <HireLandingTemplate
        developerLabel="Laravel Developers"
        bannerHeadingSuffix="For High Performance Web Applications"
        bannerDesc={
          <>
            Build- <span className="text-yellow">fast, secure, and scalable</span> with our experienced Laravel
            developers. From custom web applications and APIs to enterprise-grade solutions, we help you develop
            powerful, reliable, and future-ready digital products that drive real business growth.
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
        aboutBadgeSuffix=" Cost-Effective Laravel Development"
        aboutHeadingPrefix="Laravel"
        aboutHeadingItalic="Developers"
        aboutHeadingSuffix="Can Help You With:"
        aboutDesc="In today’s competitive digital landscape, businesses need robust, scalable, and secure backend solutions. Our Laravel developers specialize in building high-performance Laravel applications that deliver seamless functionality, strong security, and measurable business results."
        aboutChecklist={aboutChecklist}
        distractionHeading={
          <>
            Laravel <span className="font-dm-serif fst-italic fw-normal text-gradient-teal">Tech </span>
            Stack
          </>
        }
        distractionIcons={distractionIcons}
        roadmapDescription="We follow a structured and transparent Laravel development process to reduce risk, ensure quality, and deliver scalable solutions on time."
        roadmapSteps={roadmapSteps}
        whoShouldHireDesc="Hire experienced Laravel developers to build secure, scalable, and high-performance web applications tailored to your business goals."
        whoShouldHireItems={whoShouldHireItems}
        faqSectionDesc="Everything you need to know before hiring our Laravel developers."
        faqItems={faqItems}
        finalCtaHeading="Ready to Hire a Laravel Developer?"
      />
    </PageShell>
  );
}
