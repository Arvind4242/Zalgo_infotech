import Link from "next/link";
import { prisma } from "@/lib/prisma";
import AdminHeader from "@/components/admin/AdminHeader";
import BlogListClient from "@/components/admin/BlogListClient";

export const dynamic = "force-dynamic";
export const metadata = { title: "Manage Blog Posts - Admin" };

export default async function AdminBlogsPage() {
  const blogs = await prisma.blog.findMany({ orderBy: { createdAt: "desc" } });

  return (
    <div style={{ minHeight: "100vh", background: "#f4f7f9", fontFamily: "system-ui, -apple-system, sans-serif" }}>
      <AdminHeader active="/admin/blogs" />
      <div style={{ maxWidth: 1200, margin: "0 auto", padding: "32px" }}>
        <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginBottom: 20 }}>
          <h1 style={{ fontSize: "1.3rem", fontWeight: 700, color: "#1a2332" }}>Blog Posts</h1>
          <Link
            href="/admin/blogs/new"
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
            + Add New Post
          </Link>
        </div>
        <BlogListClient blogs={JSON.parse(JSON.stringify(blogs))} />
      </div>
    </div>
  );
}
