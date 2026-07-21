"use client";

import Link from "next/link";
import { useRouter } from "next/navigation";
import { useState } from "react";

type Opening = {
  id: number;
  title: string;
  icon: string;
  badge: string;
  isActive: boolean;
  sortOrder: number;
};

export default function CareerListClient({ openings }: { openings: Opening[] }) {
  const router = useRouter();
  const [busyId, setBusyId] = useState<number | null>(null);

  async function handleDelete(id: number, title: string) {
    if (!confirm(`Delete "${title}" permanently?`)) return;
    setBusyId(id);
    try {
      await fetch(`/api/admin/job-openings/${id}`, { method: "DELETE" });
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
              <Th>Order</Th>
              <Th>Icon</Th>
              <Th>Title</Th>
              <Th>Badge</Th>
              <Th>Status</Th>
              <Th>Actions</Th>
            </tr>
          </thead>
          <tbody>
            {openings.length === 0 && (
              <tr>
                <td colSpan={6} style={{ padding: 40, textAlign: "center", color: "#9a9aaa", fontSize: "0.85rem" }}>
                  No career openings yet. Click &quot;Add New Opening&quot; to create one — it will show up on the
                  public Career page.
                </td>
              </tr>
            )}
            {openings.map((o) => (
              <tr key={o.id}>
                <Td>{o.sortOrder}</Td>
                <Td style={{ fontSize: "1.1rem" }}>{o.icon}</Td>
                <Td>{o.title}</Td>
                <Td>{o.badge}</Td>
                <Td>
                  <span
                    style={{
                      padding: "3px 10px",
                      borderRadius: 100,
                      fontSize: "0.72rem",
                      fontWeight: 600,
                      background: o.isActive ? "#d1fae5" : "#f3f4f6",
                      color: o.isActive ? "#065f46" : "#6b7280",
                    }}
                  >
                    {o.isActive ? "Active" : "Inactive"}
                  </span>
                </Td>
                <Td>
                  <div style={{ display: "flex", gap: 8 }}>
                    <Link
                      href={`/admin/careers/${o.id}/edit`}
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
                    <button
                      onClick={() => handleDelete(o.id, o.title)}
                      disabled={busyId === o.id}
                      style={{
                        background: "none",
                        border: "1px solid #b91c1c",
                        color: "#b91c1c",
                        padding: "4px 10px",
                        borderRadius: 100,
                        fontSize: "0.72rem",
                        fontWeight: 600,
                        cursor: busyId === o.id ? "default" : "pointer",
                        opacity: busyId === o.id ? 0.5 : 1,
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

function Td({ children, style }: { children: React.ReactNode; style?: React.CSSProperties }) {
  return (
    <td style={{ padding: "12px 16px", fontSize: "0.85rem", color: "#1a2332", borderBottom: "1px solid #eef0f3", ...style }}>
      {children}
    </td>
  );
}
