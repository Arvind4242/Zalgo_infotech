import { prisma } from "@/lib/prisma";
import type { Blog, Prisma } from "@prisma/client";

export const PAGE_SIZE = 6;

export function excerptOf(text: string | null, limit: number) {
  if (!text) return "";
  const stripped = text.replace(/<[^>]*>/g, "");
  return stripped.length > limit ? `${stripped.slice(0, limit).trimEnd()}…` : stripped;
}

/**
 * Blog rows imported/migrated outside Prisma's own writes can end up with a
 * null `createdAt` even though the schema marks it non-nullable, which used
 * to crash the whole page with a 500 the moment `.toLocaleDateString()` ran
 * on `undefined`. Always resolves to a real Date.
 */
export function displayDate(...dates: Array<Date | null | undefined>): Date {
  return dates.find((d): d is Date => d instanceof Date) ?? new Date();
}

const EMPTY_BLOG_LIST: {
  blogs: (Blog & { _count: { comments: number } })[];
  total: number;
  page: number;
  lastPage: number;
  recentBlogs: Blog[];
  categories: { category: string; count: number }[];
  allTags: string[];
} = {
  blogs: [],
  total: 0,
  page: 1,
  lastPage: 1,
  recentBlogs: [],
  categories: [],
  allTags: [],
};

export async function getBlogList(params: {
  page: number;
  search?: string;
  category?: string;
  tag?: string;
}): Promise<typeof EMPTY_BLOG_LIST> {
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

  try {
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
  } catch (error) {
    // A transient DB hiccup (e.g. the Neon connection pool momentarily
    // exhausted under a crawler's concurrent requests) used to bubble up
    // as an uncaught exception and take the whole /blog page down with a
    // 500. Degrade to an empty listing instead — still 200 OK, and the
    // next real request tries the DB again.
    console.error("getBlogList failed, serving empty fallback:", error);
    return { ...EMPTY_BLOG_LIST, page };
  }
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
