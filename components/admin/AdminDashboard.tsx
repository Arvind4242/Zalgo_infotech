"use client";

import { useRouter } from "next/navigation";
import { useMemo, useState } from "react";
import { DATE_PRESETS, DatePreset, getDateRange, isWithinRange } from "@/lib/adminFilters";
import AdminHeader from "@/components/admin/AdminHeader";

type ContactMail = {
  id: number;
  name: string;
  email: string;
  phone: string;
  budget: string | null;
  service: string | null;
  message: string;
  additionalDocument: string | null;
  createdAt: string;
};

type PlanInquiry = {
  id: number;
  name: string;
  email: string;
  phone: string;
  plan: string;
  website: string | null;
  message: string | null;
  createdAt: string;
};

type JobApplication = {
  id: number;
  jobType: string;
  name: string;
  email: string;
  phone: string | null;
  experience: string | null;
  degree: string | null;
  skills: unknown;
  coverLetter: string | null;
  resume: string;
  createdAt: string;
};

type BlogCommentRow = {
  id: number;
  name: string;
  email: string;
  comment: string;
  isApproved: boolean;
  createdAt: string;
  blog: { title: string; slug: string };
};

const TABS = [
  { key: "contact", label: "Contact Form" },
  { key: "plan", label: "Plan Inquiries" },
  { key: "jobs", label: "Job Applications" },
  { key: "comments", label: "Blog Comments" },
] as const;

type TabKey = (typeof TABS)[number]["key"];

function formatDate(iso: string) {
  return new Date(iso).toLocaleString("en-US", {
    day: "2-digit",
    month: "short",
    year: "numeric",
    hour: "2-digit",
    minute: "2-digit",
  });
}

function searchText(...parts: Array<string | null | undefined>) {
  return parts.filter(Boolean).join(" ").toLowerCase();
}

export default function AdminDashboard({
  contactMails,
  planInquiries,
  jobApplications,
  blogComments,
}: {
  contactMails: ContactMail[];
  planInquiries: PlanInquiry[];
  jobApplications: JobApplication[];
  blogComments: BlogCommentRow[];
}) {
  const [tab, setTab] = useState<TabKey>("contact");
  const [datePreset, setDatePreset] = useState<DatePreset>("all");
  const [customFrom, setCustomFrom] = useState("");
  const [customTo, setCustomTo] = useState("");
  const [search, setSearch] = useState("");

  const range = useMemo(
    () => getDateRange(datePreset, customFrom, customTo),
    [datePreset, customFrom, customTo]
  );
  const q = search.trim().toLowerCase();

  const filteredContact = useMemo(
    () =>
      contactMails.filter(
        (r) =>
          isWithinRange(r.createdAt, range) &&
          (!q || searchText(r.name, r.email, r.phone, r.service, r.budget, r.message).includes(q))
      ),
    [contactMails, range, q]
  );
  const filteredPlan = useMemo(
    () =>
      planInquiries.filter(
        (r) =>
          isWithinRange(r.createdAt, range) &&
          (!q || searchText(r.name, r.email, r.phone, r.plan, r.website, r.message).includes(q))
      ),
    [planInquiries, range, q]
  );
  const filteredJobs = useMemo(
    () =>
      jobApplications.filter(
        (r) =>
          isWithinRange(r.createdAt, range) &&
          (!q ||
            searchText(
              r.name,
              r.email,
              r.phone,
              r.jobType,
              r.experience,
              r.degree,
              Array.isArray(r.skills) ? (r.skills as string[]).join(" ") : ""
            ).includes(q))
      ),
    [jobApplications, range, q]
  );
  const filteredComments = useMemo(
    () =>
      blogComments.filter(
        (r) =>
          isWithinRange(r.createdAt, range) &&
          (!q || searchText(r.name, r.email, r.comment, r.blog?.title).includes(q))
      ),
    [blogComments, range, q]
  );

  const counts: Record<TabKey, number> = {
    contact: filteredContact.length,
    plan: filteredPlan.length,
    jobs: filteredJobs.length,
    comments: filteredComments.length,
  };
  const totalCounts: Record<TabKey, number> = {
    contact: contactMails.length,
    plan: planInquiries.length,
    jobs: jobApplications.length,
    comments: blogComments.length,
  };

  const hasActiveFilters = datePreset !== "all" || q !== "";

  function clearFilters() {
    setDatePreset("all");
    setCustomFrom("");
    setCustomTo("");
    setSearch("");
  }

  return (
    <div style={{ minHeight: "100vh", background: "#f4f7f9", fontFamily: "system-ui, -apple-system, sans-serif" }}>
      <AdminHeader active="/admin" />

      <div style={{ maxWidth: 1200, margin: "0 auto", padding: "32px" }}>
        <div style={{ display: "grid", gridTemplateColumns: "repeat(4, 1fr)", gap: 16, marginBottom: 20 }}>
          {TABS.map((t) => (
            <button
              key={t.key}
              onClick={() => setTab(t.key)}
              style={{
                background: tab === t.key ? "#006d75" : "#fff",
                color: tab === t.key ? "#fff" : "#1a2332",
                border: "1px solid #dde4ea",
                borderRadius: 12,
                padding: "18px 20px",
                textAlign: "left",
                cursor: "pointer",
              }}
            >
              <div style={{ fontSize: "1.7rem", fontWeight: 700 }}>
                {counts[t.key]}
                {hasActiveFilters && (
                  <span style={{ fontSize: "0.9rem", fontWeight: 500, opacity: 0.7 }}> / {totalCounts[t.key]}</span>
                )}
              </div>
              <div style={{ fontSize: "0.82rem", fontWeight: 600, opacity: 0.85 }}>{t.label}</div>
            </button>
          ))}
        </div>

        <FilterBar
          datePreset={datePreset}
          setDatePreset={setDatePreset}
          customFrom={customFrom}
          setCustomFrom={setCustomFrom}
          customTo={customTo}
          setCustomTo={setCustomTo}
          search={search}
          setSearch={setSearch}
          hasActiveFilters={hasActiveFilters}
          onClear={clearFilters}
        />

        <div style={{ background: "#fff", borderRadius: 14, border: "1px solid #dde4ea", overflow: "hidden" }}>
          {tab === "contact" && <ContactTable rows={filteredContact} />}
          {tab === "plan" && <PlanTable rows={filteredPlan} />}
          {tab === "jobs" && <JobsTable rows={filteredJobs} />}
          {tab === "comments" && <CommentsTable rows={filteredComments} />}
        </div>
      </div>
    </div>
  );
}

function FilterBar({
  datePreset,
  setDatePreset,
  customFrom,
  setCustomFrom,
  customTo,
  setCustomTo,
  search,
  setSearch,
  hasActiveFilters,
  onClear,
}: {
  datePreset: DatePreset;
  setDatePreset: (v: DatePreset) => void;
  customFrom: string;
  setCustomFrom: (v: string) => void;
  customTo: string;
  setCustomTo: (v: string) => void;
  search: string;
  setSearch: (v: string) => void;
  hasActiveFilters: boolean;
  onClear: () => void;
}) {
  return (
    <div
      style={{
        background: "#fff",
        border: "1px solid #dde4ea",
        borderRadius: 14,
        padding: "16px 20px",
        marginBottom: 16,
        display: "flex",
        flexWrap: "wrap",
        alignItems: "center",
        gap: 12,
      }}
    >
      <div style={{ display: "flex", flexWrap: "wrap", gap: 8 }}>
        {DATE_PRESETS.map((p) => (
          <button
            key={p.key}
            onClick={() => setDatePreset(p.key)}
            style={{
              background: datePreset === p.key ? "#006d75" : "#f4f7f9",
              color: datePreset === p.key ? "#fff" : "#4a4a5a",
              border: "1px solid " + (datePreset === p.key ? "#006d75" : "#dde4ea"),
              borderRadius: 100,
              padding: "6px 14px",
              fontSize: "0.78rem",
              fontWeight: 600,
              cursor: "pointer",
              whiteSpace: "nowrap",
            }}
          >
            {p.label}
          </button>
        ))}
      </div>

      {datePreset === "custom" && (
        <div style={{ display: "flex", alignItems: "center", gap: 8 }}>
          <input
            type="date"
            value={customFrom}
            onChange={(e) => setCustomFrom(e.target.value)}
            style={{ padding: "6px 10px", borderRadius: 8, border: "1px solid #dde4ea", fontSize: "0.82rem" }}
          />
          <span style={{ color: "#9a9aaa", fontSize: "0.82rem" }}>to</span>
          <input
            type="date"
            value={customTo}
            onChange={(e) => setCustomTo(e.target.value)}
            style={{ padding: "6px 10px", borderRadius: 8, border: "1px solid #dde4ea", fontSize: "0.82rem" }}
          />
        </div>
      )}

      <input
        type="text"
        value={search}
        onChange={(e) => setSearch(e.target.value)}
        placeholder="Search by name, email, service, plan..."
        style={{
          flex: "1 1 240px",
          padding: "8px 14px",
          borderRadius: 100,
          border: "1px solid #dde4ea",
          fontSize: "0.82rem",
          minWidth: 220,
        }}
      />

      {hasActiveFilters && (
        <button
          onClick={onClear}
          style={{
            background: "none",
            border: "1px solid #dde4ea",
            borderRadius: 100,
            padding: "8px 16px",
            fontSize: "0.78rem",
            fontWeight: 600,
            color: "#b91c1c",
            cursor: "pointer",
            whiteSpace: "nowrap",
          }}
        >
          Clear Filters
        </button>
      )}
    </div>
  );
}

function Th({ children }: { children: React.ReactNode }) {
  return (
    <th
      style={{
        textAlign: "left",
        padding: "12px 16px",
        fontSize: "0.72rem",
        textTransform: "uppercase",
        letterSpacing: "0.05em",
        color: "#7a7a8e",
        borderBottom: "1px solid #eef0f3",
        whiteSpace: "nowrap",
      }}
    >
      {children}
    </th>
  );
}

function Td({ children, style }: { children: React.ReactNode; style?: React.CSSProperties }) {
  return (
    <td
      style={{
        padding: "12px 16px",
        fontSize: "0.85rem",
        color: "#1a2332",
        borderBottom: "1px solid #eef0f3",
        verticalAlign: "top",
        ...style,
      }}
    >
      {children}
    </td>
  );
}

function EmptyRow({ colSpan }: { colSpan: number }) {
  return (
    <tr>
      <td colSpan={colSpan} style={{ padding: "40px", textAlign: "center", color: "#9a9aaa", fontSize: "0.85rem" }}>
        No submissions match these filters.
      </td>
    </tr>
  );
}

function ContactTable({ rows }: { rows: ContactMail[] }) {
  return (
    <div style={{ overflowX: "auto" }}>
      <table style={{ width: "100%", borderCollapse: "collapse" }}>
        <thead>
          <tr>
            <Th>Date</Th>
            <Th>Name</Th>
            <Th>Email</Th>
            <Th>Phone</Th>
            <Th>Budget</Th>
            <Th>Service</Th>
            <Th>Message</Th>
            <Th>Attachment</Th>
          </tr>
        </thead>
        <tbody>
          {rows.length === 0 && <EmptyRow colSpan={8} />}
          {rows.map((r) => (
            <tr key={r.id}>
              <Td>{formatDate(r.createdAt)}</Td>
              <Td>{r.name}</Td>
              <Td>
                <a href={`mailto:${r.email}`}>{r.email}</a>
              </Td>
              <Td>{r.phone}</Td>
              <Td>{r.budget || "-"}</Td>
              <Td>{r.service || "-"}</Td>
              <Td style={{ maxWidth: 260 }}>{r.message}</Td>
              <Td>
                {r.additionalDocument ? (
                  <a href={r.additionalDocument} target="_blank" rel="noreferrer">
                    View
                  </a>
                ) : (
                  "-"
                )}
              </Td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

function PlanTable({ rows }: { rows: PlanInquiry[] }) {
  return (
    <div style={{ overflowX: "auto" }}>
      <table style={{ width: "100%", borderCollapse: "collapse" }}>
        <thead>
          <tr>
            <Th>Date</Th>
            <Th>Name</Th>
            <Th>Email</Th>
            <Th>Phone</Th>
            <Th>Plan</Th>
            <Th>Website</Th>
            <Th>Message</Th>
          </tr>
        </thead>
        <tbody>
          {rows.length === 0 && <EmptyRow colSpan={7} />}
          {rows.map((r) => (
            <tr key={r.id}>
              <Td>{formatDate(r.createdAt)}</Td>
              <Td>{r.name}</Td>
              <Td>
                <a href={`mailto:${r.email}`}>{r.email}</a>
              </Td>
              <Td>{r.phone}</Td>
              <Td>{r.plan}</Td>
              <Td>{r.website || "-"}</Td>
              <Td style={{ maxWidth: 260 }}>{r.message || "-"}</Td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

function JobsTable({ rows }: { rows: JobApplication[] }) {
  return (
    <div style={{ overflowX: "auto" }}>
      <table style={{ width: "100%", borderCollapse: "collapse" }}>
        <thead>
          <tr>
            <Th>Date</Th>
            <Th>Applicant</Th>
            <Th>Email</Th>
            <Th>Phone</Th>
            <Th>Job</Th>
            <Th>Experience</Th>
            <Th>Skills</Th>
            <Th>Resume</Th>
          </tr>
        </thead>
        <tbody>
          {rows.length === 0 && <EmptyRow colSpan={8} />}
          {rows.map((r) => (
            <tr key={r.id}>
              <Td>{formatDate(r.createdAt)}</Td>
              <Td>{r.name}</Td>
              <Td>
                <a href={`mailto:${r.email}`}>{r.email}</a>
              </Td>
              <Td>{r.phone || "-"}</Td>
              <Td>{r.jobType}</Td>
              <Td>{r.experience || "-"}</Td>
              <Td style={{ maxWidth: 200 }}>
                {Array.isArray(r.skills) ? (r.skills as string[]).join(", ") : "-"}
              </Td>
              <Td>
                <a href={r.resume} target="_blank" rel="noreferrer">
                  View
                </a>
              </Td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

function CommentsTable({ rows }: { rows: BlogCommentRow[] }) {
  const router = useRouter();
  const [busyId, setBusyId] = useState<number | null>(null);

  async function setApproval(id: number, isApproved: boolean) {
    setBusyId(id);
    try {
      await fetch(`/api/admin/comments/${id}`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ isApproved }),
      });
      router.refresh();
    } finally {
      setBusyId(null);
    }
  }

  async function handleDelete(id: number) {
    if (!confirm("Delete this comment permanently?")) return;
    setBusyId(id);
    try {
      await fetch(`/api/admin/comments/${id}`, { method: "DELETE" });
      router.refresh();
    } finally {
      setBusyId(null);
    }
  }

  return (
    <div style={{ overflowX: "auto" }}>
      <table style={{ width: "100%", borderCollapse: "collapse" }}>
        <thead>
          <tr>
            <Th>Date</Th>
            <Th>Name</Th>
            <Th>Email</Th>
            <Th>Blog Post</Th>
            <Th>Comment</Th>
            <Th>Status</Th>
            <Th>Actions</Th>
          </tr>
        </thead>
        <tbody>
          {rows.length === 0 && <EmptyRow colSpan={7} />}
          {rows.map((r) => (
            <tr key={r.id}>
              <Td>{formatDate(r.createdAt)}</Td>
              <Td>{r.name}</Td>
              <Td>
                <a href={`mailto:${r.email}`}>{r.email}</a>
              </Td>
              <Td>{r.blog?.title || "-"}</Td>
              <Td style={{ maxWidth: 300 }}>{r.comment}</Td>
              <Td>
                <span
                  style={{
                    padding: "3px 10px",
                    borderRadius: 100,
                    fontSize: "0.72rem",
                    fontWeight: 600,
                    background: r.isApproved ? "#d1fae5" : "#fef3c7",
                    color: r.isApproved ? "#065f46" : "#92400e",
                  }}
                >
                  {r.isApproved ? "Approved" : "Pending"}
                </span>
              </Td>
              <Td>
                <div style={{ display: "flex", gap: 8 }}>
                  {!r.isApproved && (
                    <ActionButton onClick={() => setApproval(r.id, true)} disabled={busyId === r.id} color="#006d75">
                      Approve
                    </ActionButton>
                  )}
                  {r.isApproved && (
                    <ActionButton onClick={() => setApproval(r.id, false)} disabled={busyId === r.id} color="#92400e">
                      Unapprove
                    </ActionButton>
                  )}
                  <ActionButton onClick={() => handleDelete(r.id)} disabled={busyId === r.id} color="#b91c1c">
                    Delete
                  </ActionButton>
                </div>
              </Td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

function ActionButton({
  onClick,
  disabled,
  color,
  children,
}: {
  onClick: () => void;
  disabled: boolean;
  color: string;
  children: React.ReactNode;
}) {
  return (
    <button
      onClick={onClick}
      disabled={disabled}
      style={{
        background: "none",
        border: `1px solid ${color}`,
        color,
        padding: "4px 10px",
        borderRadius: 100,
        fontSize: "0.72rem",
        fontWeight: 600,
        cursor: disabled ? "default" : "pointer",
        opacity: disabled ? 0.5 : 1,
        whiteSpace: "nowrap",
      }}
    >
      {children}
    </button>
  );
}
