"use client";

import { useRouter } from "next/navigation";
import { useState } from "react";

type BlogInitial = {
  id?: number;
  title: string;
  excerpt: string;
  content: string;
  image: string;
  authorName: string;
  category: string;
  tags: string;
  readTime: string;
  isPublished: boolean;
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

export default function BlogForm({ initial }: { initial?: BlogInitial }) {
  const router = useRouter();
  const isEdit = !!initial?.id;

  const [title, setTitle] = useState(initial?.title ?? "");
  const [excerpt, setExcerpt] = useState(initial?.excerpt ?? "");
  const [content, setContent] = useState(initial?.content ?? "");
  const [image, setImage] = useState(initial?.image ?? "");
  const [authorName, setAuthorName] = useState(initial?.authorName ?? "Admin");
  const [category, setCategory] = useState(initial?.category ?? "");
  const [tags, setTags] = useState(initial?.tags ?? "");
  const [readTime, setReadTime] = useState(initial?.readTime ?? "3 min Read");
  const [isPublished, setIsPublished] = useState(initial?.isPublished ?? false);

  const [uploading, setUploading] = useState(false);
  const [saving, setSaving] = useState(false);
  const [error, setError] = useState("");

  async function handleImageUpload(e: React.ChangeEvent<HTMLInputElement>) {
    const file = e.target.files?.[0];
    if (!file) return;
    setUploading(true);
    setError("");
    try {
      const formData = new FormData();
      formData.append("file", file);
      const res = await fetch("/api/admin/upload", { method: "POST", body: formData });
      const json = await res.json();
      if (!res.ok || !json.success) {
        setError(json.error || "Upload failed.");
        return;
      }
      setImage(json.path);
    } catch {
      setError("Upload failed. Please try again.");
    } finally {
      setUploading(false);
    }
  }

  async function handleSubmit(e: React.FormEvent) {
    e.preventDefault();
    setSaving(true);
    setError("");

    const payload = { title, excerpt, content, image, authorName, category, tags, readTime, isPublished };

    try {
      const res = await fetch(
        isEdit ? `/api/admin/blogs/${initial!.id}` : "/api/admin/blogs",
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
      router.push("/admin/blogs");
      router.refresh();
    } catch {
      setError("Something went wrong. Please try again.");
      setSaving(false);
    }
  }

  return (
    <form onSubmit={handleSubmit} style={{ maxWidth: 720 }}>
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
        <label style={labelStyle}>Title *</label>
        <input style={inputStyle} value={title} onChange={(e) => setTitle(e.target.value)} required />
      </div>

      <div style={{ marginBottom: 18 }}>
        <label style={labelStyle}>Excerpt</label>
        <textarea
          style={{ ...inputStyle, minHeight: 70, resize: "vertical" }}
          value={excerpt}
          onChange={(e) => setExcerpt(e.target.value)}
          placeholder="Short summary shown on the blog listing page"
        />
      </div>

      <div style={{ marginBottom: 18 }}>
        <label style={labelStyle}>Content * (HTML allowed)</label>
        <textarea
          style={{ ...inputStyle, minHeight: 260, resize: "vertical", fontFamily: "monospace", fontSize: "0.82rem" }}
          value={content}
          onChange={(e) => setContent(e.target.value)}
          required
          placeholder="<p>Write your article here. Basic HTML tags like <b>, <i>, <a>, <h2> etc. are supported.</p>"
        />
      </div>

      <div style={{ marginBottom: 18 }}>
        <label style={labelStyle}>Cover Image</label>
        <input type="file" accept="image/*" onChange={handleImageUpload} disabled={uploading} />
        {uploading && <p style={{ fontSize: "0.78rem", color: "#7a7a8e", marginTop: 6 }}>Uploading...</p>}
        {image && (
          <div style={{ marginTop: 10 }}>
            <img src={image} alt="Preview" style={{ maxWidth: 220, borderRadius: 8 }} />
          </div>
        )}
      </div>

      <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 16, marginBottom: 18 }}>
        <div>
          <label style={labelStyle}>Author Name</label>
          <input style={inputStyle} value={authorName} onChange={(e) => setAuthorName(e.target.value)} />
        </div>
        <div>
          <label style={labelStyle}>Category</label>
          <input style={inputStyle} value={category} onChange={(e) => setCategory(e.target.value)} placeholder="e.g. Web Development" />
        </div>
      </div>

      <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 16, marginBottom: 18 }}>
        <div>
          <label style={labelStyle}>Tags (comma separated)</label>
          <input style={inputStyle} value={tags} onChange={(e) => setTags(e.target.value)} placeholder="react, nextjs, tips" />
        </div>
        <div>
          <label style={labelStyle}>Read Time</label>
          <input style={inputStyle} value={readTime} onChange={(e) => setReadTime(e.target.value)} />
        </div>
      </div>

      <div style={{ marginBottom: 24, display: "flex", alignItems: "center", gap: 10 }}>
        <input
          type="checkbox"
          id="isPublished"
          checked={isPublished}
          onChange={(e) => setIsPublished(e.target.checked)}
          style={{ width: 18, height: 18 }}
        />
        <label htmlFor="isPublished" style={{ fontSize: "0.85rem", fontWeight: 600, color: "#1a2332" }}>
          Published (visible on the live blog page)
        </label>
      </div>

      <div style={{ display: "flex", gap: 12 }}>
        <button
          type="submit"
          disabled={saving || uploading}
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
          {saving ? "Saving..." : isEdit ? "Save Changes" : "Create Blog Post"}
        </button>
        <button
          type="button"
          onClick={() => router.push("/admin/blogs")}
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
