import { notFound } from "next/navigation";
import { prisma } from "@/lib/prisma";
import AdminHeader from "@/components/admin/AdminHeader";
import BlogForm from "@/components/admin/BlogForm";

export const dynamic = "force-dynamic";
export const metadata = { title: "Edit Blog Post - Admin" };

export default async function EditBlogPage({
  params,
}: {
  params: Promise<{ id: string }>;
}) {
  const { id } = await params;
  const blog = await prisma.blog.findUnique({ where: { id: Number(id) } });
  if (!blog) notFound();

  return (
    <div style={{ minHeight: "100vh", background: "#f4f7f9", fontFamily: "system-ui, -apple-system, sans-serif" }}>
      <AdminHeader active="/admin/blogs" />
      <div style={{ maxWidth: 1200, margin: "0 auto", padding: "32px" }}>
        <h1 style={{ fontSize: "1.3rem", fontWeight: 700, color: "#1a2332", marginBottom: 24 }}>Edit Blog Post</h1>
        <BlogForm
          initial={{
            id: blog.id,
            title: blog.title,
            excerpt: blog.excerpt ?? "",
            content: blog.content ?? "",
            image: blog.image ?? "",
            authorName: blog.authorName,
            category: blog.category ?? "",
            tags: Array.isArray(blog.tags) ? (blog.tags as string[]).join(", ") : "",
            readTime: blog.readTime,
            isPublished: blog.isPublished,
          }}
        />
      </div>
    </div>
  );
}
