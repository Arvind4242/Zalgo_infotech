import AdminHeader from "@/components/admin/AdminHeader";
import CareerForm from "@/components/admin/CareerForm";

export const metadata = { title: "New Career Opening - Admin" };

export default function NewCareerPage() {
  return (
    <div style={{ minHeight: "100vh", background: "#f4f7f9", fontFamily: "system-ui, -apple-system, sans-serif" }}>
      <AdminHeader active="/admin/careers" />
      <div style={{ maxWidth: 1200, margin: "0 auto", padding: "32px" }}>
        <h1 style={{ fontSize: "1.3rem", fontWeight: 700, color: "#1a2332", marginBottom: 24 }}>New Career Opening</h1>
        <CareerForm />
      </div>
    </div>
  );
}
