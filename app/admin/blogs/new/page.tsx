import AdminHeader from "@/components/admin/AdminHeader";
import BlogForm from "@/components/admin/BlogForm";

export const metadata = { title: "New Blog Post - Admin" };

export default function NewBlogPage() {
  return (
    <div style={{ minHeight: "100vh", background: "#f4f7f9", fontFamily: "system-ui, -apple-system, sans-serif" }}>
      <AdminHeader active="/admin/blogs" />
      <div style={{ maxWidth: 1200, margin: "0 auto", padding: "32px" }}>
        <h1 style={{ fontSize: "1.3rem", fontWeight: 700, color: "#1a2332", marginBottom: 24 }}>New Blog Post</h1>
        <BlogForm />
      </div>
    </div>
  );
}
