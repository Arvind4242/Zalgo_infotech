"use client";

import { useRouter } from "next/navigation";
import { useState } from "react";

type CareerInitial = {
  id?: number;
  title: string;
  icon: string;
  subtitle: string;
  badge: string;
  skills: string;
  isActive: boolean;
  sortOrder: number;
};

const inputStyle: React.CSSProperties = {
  width: "100%",
  padding: "10px 14px",
  borderRadius: 8,
  border: "1.5px solid #dde4ea",
  fontSize: "0.88rem",
  fontFamily: "inherit",
};

const labelStyle: React.CSSProperties = {
  display: "block",
  fontSize: "0.78rem",
  fontWeight: 600,
  marginBottom: 6,
  color: "#4a4a5a",
  textTransform: "uppercase",
  letterSpacing: "0.03em",
};

export default function CareerForm({ initial }: { initial?: CareerInitial }) {
  const router = useRouter();
  const isEdit = !!initial?.id;

  const [title, setTitle] = useState(initial?.title ?? "");
  const [icon, setIcon] = useState(initial?.icon ?? "💼");
  const [subtitle, setSubtitle] = useState(initial?.subtitle ?? "");
  const [badge, setBadge] = useState(initial?.badge ?? "Open Role");
  const [skills, setSkills] = useState(initial?.skills ?? "");
  const [isActive, setIsActive] = useState(initial?.isActive ?? true);
  const [sortOrder, setSortOrder] = useState(initial?.sortOrder ?? 0);

  const [saving, setSaving] = useState(false);
  const [error, setError] = useState("");

  async function handleSubmit(e: React.FormEvent) {
    e.preventDefault();
    setSaving(true);
    setError("");

    const payload = { title, icon, subtitle, badge, skills, isActive, sortOrder };

    try {
      const res = await fetch(
        isEdit ? `/api/admin/job-openings/${initial!.id}` : "/api/admin/job-openings",
        {
          method: isEdit ? "PUT" : "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(payload),
        }
      );
      const json = await res.json();
      if (!res.ok || !json.success) {
        setError(json.error || "Something went wrong.");
        setSaving(false);
        return;
      }
      router.push("/admin/careers");
      router.refresh();
    } catch {
      setError("Something went wrong. Please try again.");
      setSaving(false);
    }
  }

  return (
    <form onSubmit={handleSubmit} style={{ maxWidth: 560 }}>
      {error && (
        <div
          style={{
            background: "#ffeaea",
            border: "1px solid #ff4d4d",
            color: "#b91c1c",
            padding: "10px 14px",
            borderRadius: 8,
            marginBottom: "1.25rem",
            fontSize: "0.85rem",
          }}
        >
          {error}
        </div>
      )}

      <div style={{ marginBottom: 18 }}>
        <label style={labelStyle}>Job Title *</label>
        <input style={inputStyle} value={title} onChange={(e) => setTitle(e.target.value)} required placeholder="e.g. Senior React Developer" />
      </div>

      <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 16, marginBottom: 18 }}>
        <div>
          <label style={labelStyle}>Icon (emoji)</label>
          <input style={inputStyle} value={icon} onChange={(e) => setIcon(e.target.value)} placeholder="💼" />
        </div>
        <div>
          <label style={labelStyle}>Badge</label>
          <input style={inputStyle} value={badge} onChange={(e) => setBadge(e.target.value)} placeholder="Open Role" />
        </div>
      </div>

      <div style={{ marginBottom: 18 }}>
        <label style={labelStyle}>Subtitle</label>
        <input style={inputStyle} value={subtitle} onChange={(e) => setSubtitle(e.target.value)} placeholder="Short description shown under the title" />
      </div>

      <div style={{ marginBottom: 18 }}>
        <label style={labelStyle}>Skills (comma separated)</label>
        <input style={inputStyle} value={skills} onChange={(e) => setSkills(e.target.value)} placeholder="React, TypeScript, Node.js" />
      </div>

      <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 16, marginBottom: 24 }}>
        <div>
          <label style={labelStyle}>Sort Order</label>
          <input
            type="number"
            style={inputStyle}
            value={sortOrder}
            onChange={(e) => setSortOrder(Number(e.target.value))}
          />
        </div>
        <div style={{ display: "flex", alignItems: "flex-end", paddingBottom: 10, gap: 10 }}>
          <input
            type="checkbox"
            id="isActive"
            checked={isActive}
            onChange={(e) => setIsActive(e.target.checked)}
            style={{ width: 18, height: 18 }}
          />
          <label htmlFor="isActive" style={{ fontSize: "0.85rem", fontWeight: 600, color: "#1a2332" }}>
            Active (visible on Career page)
          </label>
        </div>
      </div>

      <div style={{ display: "flex", gap: 12 }}>
        <button
          type="submit"
          disabled={saving}
          style={{
            background: "#006d75",
            color: "#fff",
            border: "none",
            padding: "12px 28px",
            borderRadius: 100,
            fontWeight: 700,
            fontSize: "0.88rem",
            cursor: "pointer",
          }}
        >
          {saving ? "Saving..." : isEdit ? "Save Changes" : "Create Opening"}
        </button>
        <button
          type="button"
          onClick={() => router.push("/admin/careers")}
          style={{
            background: "#fff",
            color: "#4a4a5a",
            border: "1px solid #dde4ea",
            padding: "12px 28px",
            borderRadius: 100,
            fontWeight: 600,
            fontSize: "0.88rem",
            cursor: "pointer",
          }}
        >
          Cancel
        </button>
      </div>
    </form>
  );
}
