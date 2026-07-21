"use client";

import Link from "next/link";
import { useRouter } from "next/navigation";
import { useState } from "react";

type Blog = {
  id: number;
  title: string;
  slug: string;
  category: string | null;
  isPublished: boolean;
  createdAt: string;
};

export default function BlogListClient({ blogs }: { blogs: Blog[] }) {
  const router = useRouter();
  const [busyId, setBusyId] = useState<number | null>(null);

  async function handleDelete(id: number, title: string) {
    if (!confirm(`Delete "${title}" permanently? This cannot be undone.`)) return;
    setBusyId(id);
    try {
      await fetch(`/api/admin/blogs/${id}`, { method: "DELETE" });
      router.refresh();
    } finally {
      setBusyId(null);
    }
  }

  return (
    <div style={{ background: "#fff", borderRadius: 14, border: "1px solid #dde4ea", overflow: "hidden" }}>
      <div style={{ overflowX: "auto" }}>
        <table style={{ width: "100%", borderCollapse: "collapse" }}>
          <thead>
            <tr>
              <Th>Date</Th>
              <Th>Title</Th>
              <Th>Category</Th>
              <Th>Status</Th>
              <Th>Actions</Th>
            </tr>
          </thead>
          <tbody>
            {blogs.length === 0 && (
              <tr>
                <td colSpan={5} style={{ padding: 40, textAlign: "center", color: "#9a9aaa", fontSize: "0.85rem" }}>
                  No blog posts yet. Click &quot;Add New Post&quot; to create your first one.
                </td>
              </tr>
            )}
            {blogs.map((b) => (
              <tr key={b.id}>
                <Td>{new Date(b.createdAt).toLocaleDateString("en-US", { day: "2-digit", month: "short", year: "numeric" })}</Td>
                <Td>{b.title}</Td>
                <Td>{b.category || "-"}</Td>
                <Td>
                  <span
                    style={{
                      padding: "3px 10px",
                      borderRadius: 100,
                      fontSize: "0.72rem",
                      fontWeight: 600,
                      background: b.isPublished ? "#d1fae5" : "#f3f4f6",
                      color: b.isPublished ? "#065f46" : "#6b7280",
                    }}
                  >
                    {b.isPublished ? "Published" : "Draft"}
                  </span>
                </Td>
                <Td>
                  <div style={{ display: "flex", gap: 8 }}>
                    <Link
                      href={`/admin/blogs/${b.id}/edit`}
                      style={{
                        border: "1px solid #006d75",
                        color: "#006d75",
                        padding: "4px 10px",
                        borderRadius: 100,
                        fontSize: "0.72rem",
                        fontWeight: 600,
                        textDecoration: "none",
                      }}
                    >
                      Edit
                    </Link>
                    {b.isPublished && (
                      <a
                        href={`/blog/${b.slug}`}
                        target="_blank"
                        rel="noreferrer"
                        style={{
                          border: "1px solid #dde4ea",
                          color: "#4a4a5a",
                          padding: "4px 10px",
                          borderRadius: 100,
                          fontSize: "0.72rem",
                          fontWeight: 600,
                          textDecoration: "none",
                        }}
                      >
                        View
                      </a>
                    )}
                    <button
                      onClick={() => handleDelete(b.id, b.title)}
                      disabled={busyId === b.id}
                      style={{
                        background: "none",
                        border: "1px solid #b91c1c",
                        color: "#b91c1c",
                        padding: "4px 10px",
                        borderRadius: 100,
                        fontSize: "0.72rem",
                        fontWeight: 600,
                        cursor: busyId === b.id ? "default" : "pointer",
                        opacity: busyId === b.id ? 0.5 : 1,
                      }}
                    >
                      Delete
                    </button>
                  </div>
                </Td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
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

function Td({ children }: { children: React.ReactNode }) {
  return (
    <td style={{ padding: "12px 16px", fontSize: "0.85rem", color: "#1a2332", borderBottom: "1px solid #eef0f3" }}>
      {children}
    </td>
  );
}
