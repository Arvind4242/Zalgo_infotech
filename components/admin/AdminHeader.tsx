"use client";

import Link from "next/link";
import { useRouter } from "next/navigation";

const NAV = [
  { href: "/admin", label: "Submissions" },
  { href: "/admin/blogs", label: "Blog Posts" },
  { href: "/admin/careers", label: "Career Openings" },
];

export default function AdminHeader({ active }: { active: string }) {
  const router = useRouter();

  async function handleLogout() {
    await fetch("/api/admin/logout", { method: "POST" });
    router.push("/admin/login");
    router.refresh();
  }

  return (
    <header
      style={{
        background: "#fff",
        borderBottom: "1px solid #dde4ea",
        padding: "16px 32px",
        display: "flex",
        alignItems: "center",
        justifyContent: "space-between",
        flexWrap: "wrap",
        gap: 12,
      }}
    >
      <div style={{ display: "flex", alignItems: "center", gap: 24, flexWrap: "wrap" }}>
        <div style={{ display: "flex", alignItems: "center", gap: 14 }}>
          <img src="/assets/images/logo/zalgo_logo.png" alt="Zalgo Infotech" style={{ height: 26 }} />
          <span style={{ fontWeight: 700, color: "#1a2332" }}>Admin Dashboard</span>
        </div>
        <nav style={{ display: "flex", gap: 4 }}>
          {NAV.map((n) => (
            <Link
              key={n.href}
              href={n.href}
              style={{
                padding: "6px 14px",
                borderRadius: 100,
                fontSize: "0.82rem",
                fontWeight: 600,
                textDecoration: "none",
                background: active === n.href ? "#006d75" : "transparent",
                color: active === n.href ? "#fff" : "#4a4a5a",
              }}
            >
              {n.label}
            </Link>
          ))}
        </nav>
      </div>
      <button
        onClick={handleLogout}
        style={{
          background: "#1a2332",
          color: "#fff",
          border: "none",
          padding: "8px 18px",
          borderRadius: 100,
          fontSize: "0.82rem",
          fontWeight: 600,
          cursor: "pointer",
        }}
      >
        Log Out
      </button>
    </header>
  );
}
