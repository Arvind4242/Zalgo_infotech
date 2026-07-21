import { NextRequest, NextResponse } from "next/server";
import { prisma } from "@/lib/prisma";
import { slugify, uniqueSlug } from "@/lib/slug";

export async function PUT(
  request: NextRequest,
  ctx: RouteContext<"/api/admin/blogs/[id]">
) {
  const { id } = await ctx.params;
  const blogId = Number(id);
  const body = await request.json();
  const {
    title,
    excerpt,
    content,
    image,
    authorName,
    category,
    tags,
    readTime,
    isPublished,
  } = body ?? {};

  if (!title || !content) {
    return NextResponse.json(
      { success: false, error: "Title and content are required." },
      { status: 422 }
    );
  }

  const existing = await prisma.blog.findUnique({ where: { id: blogId } });
  if (!existing) {
    return NextResponse.json({ success: false, error: "Not found." }, { status: 404 });
  }

  let slug = existing.slug;
  if (slugify(title) !== existing.slug && slugify(title) !== slugify(existing.title)) {
    slug = await uniqueSlug(title, async (s) => {
      const conflict = await prisma.blog.findFirst({ where: { slug: s, id: { not: blogId } } });
      return !!conflict;
    });
  }

  const blog = await prisma.blog.update({
    where: { id: blogId },
    data: {
      title,
      slug,
      excerpt: excerpt || null,
      content,
      image: image || null,
      authorName: authorName || "Admin",
      category: category || null,
      tags: Array.isArray(tags) ? tags : tags ? String(tags).split(",").map((t: string) => t.trim()).filter(Boolean) : undefined,
      readTime: readTime || "3 min Read",
      isPublished: !!isPublished,
      publishedAt: isPublished ? existing.publishedAt ?? new Date() : null,
    },
  });

  return NextResponse.json({ success: true, blog });
}

export async function DELETE(
  _request: NextRequest,
  ctx: RouteContext<"/api/admin/blogs/[id]">
) {
  const { id } = await ctx.params;
  await prisma.blog.delete({ where: { id: Number(id) } });
  return NextResponse.json({ success: true });
}
