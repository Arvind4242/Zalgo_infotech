import { prisma } from "@/lib/prisma";
import type { Prisma } from "@prisma/client";

export const PAGE_SIZE = 6;

export function excerptOf(text: string | null, limit: number) {
  if (!text) return "";
  const stripped = text.replace(/<[^>]*>/g, "");
  return stripped.length > limit ? `${stripped.slice(0, limit).trimEnd()}…` : stripped;
}

export async function getBlogList(params: {
  page: number;
  search?: string;
  category?: string;
  tag?: string;
}) {
  const { page, search, category, tag } = params;

  const where: Prisma.BlogWhereInput = { isPublished: true };
  if (search) {
    where.OR = [
      { title: { contains: search } },
      { excerpt: { contains: search } },
      { content: { contains: search } },
    ];
  }
  if (category) where.category = category;
  if (tag) where.tags = { array_contains: tag };

  const [total, blogs] = await Promise.all([
    prisma.blog.count({ where }),
    prisma.blog.findMany({
      where,
      orderBy: { publishedAt: "desc" },
      skip: (page - 1) * PAGE_SIZE,
      take: PAGE_SIZE,
      include: { _count: { select: { comments: { where: { isApproved: true } } } } },
    }),
  ]);

  const recentBlogs = await prisma.blog.findMany({
    where: { isPublished: true },
    orderBy: { publishedAt: "desc" },
    take: 3,
  });

  const categoriesRaw = await prisma.blog.groupBy({
    by: ["category"],
    where: { isPublished: true, category: { not: null } },
    _count: { category: true },
    orderBy: { _count: { category: "desc" } },
  });
  const categories = categoriesRaw.map((c) => ({
    category: c.category as string,
    count: c._count.category,
  }));

  const allBlogsForTags = await prisma.blog.findMany({
    where: { isPublished: true, tags: { not: undefined } },
    select: { tags: true },
  });
  const allTags = Array.from(
    new Set(
      allBlogsForTags.flatMap((b) => (Array.isArray(b.tags) ? (b.tags as string[]) : []))
    )
  );

  return {
    blogs,
    total,
    page,
    lastPage: Math.max(1, Math.ceil(total / PAGE_SIZE)),
    recentBlogs,
    categories,
    allTags,
  };
}

export async function getBlogBySlug(slug: string) {
  const blog = await prisma.blog.findFirst({ where: { slug, isPublished: true } });
  if (!blog) return null;

  const [recentBlogs, comments] = await Promise.all([
    prisma.blog.findMany({
      where: { isPublished: true, id: { not: blog.id } },
      orderBy: { publishedAt: "desc" },
      take: 3,
    }),
    prisma.blogComment.findMany({
      where: { blogId: blog.id, isApproved: true },
      orderBy: { createdAt: "asc" },
    }),
  ]);

  return { blog, recentBlogs, comments };
}
