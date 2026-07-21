import PageShell from "@/components/PageShell";
import CaseStudyIndex from "@/components/case-studies/CaseStudyIndex";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Case Studies - Client Success Stories & Project Portfolio",
  description:
    "Explore Zalgo Infotech's case studies covering ERP systems, LMS platforms, CRM development, healthcare websites, and eCommerce projects delivered for clients worldwide.",
  keywords: [
    "case studies",
    "software development case study",
    "ERP case study",
    "web development portfolio",
    "custom software project examples",
    "IT company client success stories",
  ],
  path: "/casestudy",
});

export default function CaseStudyPage() {
  return (
    <PageShell>
      <CaseStudyIndex />
    </PageShell>
  );
}
