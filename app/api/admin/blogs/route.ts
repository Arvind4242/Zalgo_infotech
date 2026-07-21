import { NextRequest, NextResponse } from "next/server";
import { prisma } from "@/lib/prisma";
import { uniqueSlug } from "@/lib/slug";

export async function GET() {
  const blogs = await prisma.blog.findMany({ orderBy: { createdAt: "desc" } });
  return NextResponse.json({ success: true, blogs });
}

export async function POST(request: NextRequest) {
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

  const slug = await uniqueSlug(title, async (s) => {
    const existing = await prisma.blog.findUnique({ where: { slug: s } });
    return !!existing;
  });

  const blog = await prisma.blog.create({
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
      publishedAt: isPublished ? new Date() : null,
    },
  });

  return NextResponse.json({ success: true, blog });
}
