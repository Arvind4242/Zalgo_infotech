import { notFound } from "next/navigation";
import { prisma } from "@/lib/prisma";
import AdminHeader from "@/components/admin/AdminHeader";
import CareerForm from "@/components/admin/CareerForm";

export const dynamic = "force-dynamic";
export const metadata = { title: "Edit Career Opening - Admin" };

export default async function EditCareerPage({
  params,
}: {
  params: Promise<{ id: string }>;
}) {
  const { id } = await params;
  const opening = await prisma.jobOpening.findUnique({ where: { id: Number(id) } });
  if (!opening) notFound();

  return (
    <div style={{ minHeight: "100vh", background: "#f4f7f9", fontFamily: "system-ui, -apple-system, sans-serif" }}>
      <AdminHeader active="/admin/careers" />
      <div style={{ maxWidth: 1200, margin: "0 auto", padding: "32px" }}>
        <h1 style={{ fontSize: "1.3rem", fontWeight: 700, color: "#1a2332", marginBottom: 24 }}>Edit Career Opening</h1>
        <CareerForm
          initial={{
            id: opening.id,
            title: opening.title,
            icon: opening.icon,
            subtitle: opening.subtitle ?? "",
            badge: opening.badge,
            skills: Array.isArray(opening.skills) ? (opening.skills as string[]).join(", ") : "",
            isActive: opening.isActive,
            sortOrder: opening.sortOrder,
          }}
        />
      </div>
    </div>
  );
}
