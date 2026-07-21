import Link from "next/link";
import { prisma } from "@/lib/prisma";
import AdminHeader from "@/components/admin/AdminHeader";
import CareerListClient from "@/components/admin/CareerListClient";

export const dynamic = "force-dynamic";
export const metadata = { title: "Manage Career Openings - Admin" };

export default async function AdminCareersPage() {
  const openings = await prisma.jobOpening.findMany({ orderBy: { sortOrder: "asc" } });

  return (
    <div style={{ minHeight: "100vh", background: "#f4f7f9", fontFamily: "system-ui, -apple-system, sans-serif" }}>
      <AdminHeader active="/admin/careers" />
      <div style={{ maxWidth: 1200, margin: "0 auto", padding: "32px" }}>
        <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginBottom: 20 }}>
          <h1 style={{ fontSize: "1.3rem", fontWeight: 700, color: "#1a2332" }}>Career Openings</h1>
          <Link
            href="/admin/careers/new"
            style={{
              background: "#006d75",
              color: "#fff",
              padding: "10px 20px",
              borderRadius: 100,
              fontSize: "0.85rem",
              fontWeight: 700,
              textDecoration: "none",
            }}
          >
            + Add New Opening
          </Link>
        </div>
        <CareerListClient openings={JSON.parse(JSON.stringify(openings))} />
      </div>
    </div>
  );
}
