import PageShell from "@/components/PageShell";
import CareerTabs from "@/components/CareerTabs";
import { prisma } from "@/lib/prisma";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Careers - Join Our Team",
  description:
    "Explore open positions at Zalgo Infotech. Join a fast-growing IT solutions company working on web development, AI automation, and SaaS products for clients worldwide.",
  keywords: [
    "IT jobs",
    "software developer jobs",
    "web developer careers",
    "tech careers India",
    "Zalgo Infotech careers",
  ],
  path: "/career",
});
export const dynamic = "force-dynamic";

export default async function CareerPage() {
  // A transient DB hiccup here (e.g. connection pool exhaustion under
  // crawler load) used to crash the whole page with a 500. Degrade to an
  // empty list instead — still 200 OK, and the next request retries the DB.
  const jobOpenings = await prisma.jobOpening
    .findMany({
      where: { isActive: true },
      orderBy: { sortOrder: "asc" },
    })
    .catch((error) => {
      console.error("Failed to load job openings, serving empty fallback:", error);
      return [];
    });

  return (
    <PageShell>
      <style>{`
        :root {
          --ink: #1a2332; --paper: #f4f7f9; --accent: #006d75; --accent2: #006d75;
          --mid: #8a9bb0; --card-bg: #ffffff; --border: #dde4ea;
          --shadow: 0 4px 32px rgba(26, 35, 50, 0.09); --radius: 16px;
          --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .tab-btn.active { background: var(--main-600) !important; border-color: var(--main-600) !important; box-shadow: 0 4px 16px rgba(26, 35, 50, 0.18); color:#fff !important; }
        .tab-icon { font-size: 1rem; }
        .tabs-wrap { position: relative; margin-bottom: clamp(24px, 4vw, 40px); }
        .tabs-scroll { display: flex; gap: 8px; overflow-x: auto; padding-bottom: 4px; scrollbar-width: none; }
        .tabs-scroll::-webkit-scrollbar { display: none; }
        .form-panel { background: var(--card-bg); border-radius: var(--radius); border: 1.5px solid var(--border); box-shadow: var(--shadow); overflow: hidden; }
        .form-top { display: grid; grid-template-columns: 1fr auto; align-items: start; gap: 16px; padding: clamp(28px, 4vw, 48px) clamp(24px, 4vw, 48px) 0; margin-bottom: 32px; }
        .form-title { font-size: clamp(1.5rem, 3.5vw, 2.2rem); font-weight: 700; letter-spacing: -0.025em; color: var(--ink); line-height: 1.15; }
        .form-subtitle { margin-top: 6px; font-weight: 300; color: #7a7a8e; }
        .form-badge { font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 6px 14px; border-radius: 100px; background: rgba(255, 107, 53, 0.1); color: var(--accent); white-space: nowrap; margin-top: 4px; }
        .form-body { padding: 0 clamp(24px, 4vw, 48px) clamp(28px, 4vw, 48px); }
        .form-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: clamp(14px, 2vw, 24px); margin-bottom: clamp(14px, 2vw, 24px); }
        @media (max-width: 600px) { .form-grid { grid-template-columns: 1fr; } .form-top { grid-template-columns: 1fr; } .form-badge { display: inline-block; width: fit-content; } }
        .full { grid-column: 1 / -1; }
        .field { display: flex; flex-direction: column; gap: 7px; }
        .field label { font-weight: 500; letter-spacing: 0.02em; color: #4a4a5a; text-transform: uppercase; }
        .field label span { color: var(--accent); }
        .field input,.field select,.field textarea { width: 100%; padding: 12px 16px; font-weight: 400; color: var(--ink); background: #fafaf8; border: 1.5px solid var(--border); border-radius: 10px; transition: var(--transition); outline: none; }
        .field textarea { resize: vertical; min-height: 110px; line-height: 1.6; }
        .field input:focus,.field select:focus,.field textarea:focus { border-color: var(--accent); background: #fff; box-shadow: 0 0 0 3px rgba(31,169,156,0.12); }
        .skills-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 10px; margin-top: 4px; }
        .skill-chip { display: flex; align-items: center; gap: 9px; padding: 10px 14px; border-radius: 10px; border: 1.5px solid var(--border); background: #fafaf8; cursor: pointer; transition: var(--transition); user-select: none; }
        .skill-chip:hover { border-color: var(--ink); background: var(--paper); }
        .skill-chip input[type="checkbox"] { width: 16px; height: 16px; accent-color: var(--ink); cursor: pointer; flex-shrink: 0; }
        .skill-chip span { font-weight: 400; color: #4a4a5a; line-height: 1.3; }
        .skill-chip:has(input:checked) { border-color: var(--accent); background: var(--accent); }
        .skill-chip:has(input:checked) span { color: #fff; }
        .upload-zone { position: relative; border: 2px dashed var(--border); border-radius: 10px; background: #fafaf8; padding: clamp(20px,3vw,32px) 20px; text-align: center; cursor: pointer; transition: var(--transition); }
        .upload-zone:hover { border-color: var(--ink); background: var(--paper); }
        .upload-zone input[type="file"] { position: absolute; inset: 0; opacity: 0; width: 100%; height: 100%; cursor: pointer; }
        .upload-icon { font-size: 2rem; margin-bottom: 10px; display: block; opacity: 0.5; }
        .upload-text { color: #7a7a8e; font-weight: 300; }
        .upload-text strong { color: var(--ink); font-weight: 500; }
        .upload-hint { margin-top: 4px; color: #b0b0c0; letter-spacing: 0.02em; }
        .submit-row { display: flex; align-items: center; justify-content: space-between; gap: 16px; margin-top: clamp(20px,3vw,32px); flex-wrap: wrap; }
        .submit-note { color: #9a9aaa; font-weight: 300; flex: 1; min-width: 180px; }
        .submit-btn { font-weight: 700; letter-spacing: 0.02em; padding: 14px 36px; border-radius: 100px; border: none; background-color: var(--accent); color: #fff; cursor: pointer; transition: var(--transition); white-space: nowrap; display: flex; align-items: center; gap: 8px; }
        .submit-btn:hover { background-color: #201e1e; transform: translateY(-2px); box-shadow: 0 8px 24px rgba(31,169,156,0.35); }
        .section-label { font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: var(--mid); margin-bottom: 10px; display: flex; align-items: center; gap: 10px; }
        .section-label::after { content: ''; flex: 1; height: 1px; background: var(--border); }
        .alert-success { background: #e6f9f7; border: 1px solid #1fa99c; color: #0f766e; padding: 14px 20px; border-radius: 10px; margin-bottom: 20px; font-weight: 600; }
        .alert-error { background: #ffeaea; border: 1px solid #ff4d4d; color: #b91c1c; padding: 14px 20px; border-radius: 10px; margin-bottom: 20px; font-weight: 500; }
      `}</style>

      <div className="page-body pt-120 pb-120">
        <div className="container">
          <CareerTabs jobOpenings={jobOpenings} />
        </div>
      </div>
    </PageShell>
  );
}
