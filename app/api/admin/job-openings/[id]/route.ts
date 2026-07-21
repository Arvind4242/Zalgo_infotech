import { NextRequest, NextResponse } from "next/server";
import { prisma } from "@/lib/prisma";
import { slugify, uniqueSlug } from "@/lib/slug";

export async function PUT(
  request: NextRequest,
  ctx: RouteContext<"/api/admin/job-openings/[id]">
) {
  const { id } = await ctx.params;
  const openingId = Number(id);
  const body = await request.json();
  const { title, icon, subtitle, badge, skills, isActive, sortOrder } = body ?? {};

  if (!title) {
    return NextResponse.json(
      { success: false, error: "Title is required." },
      { status: 422 }
    );
  }

  const existing = await prisma.jobOpening.findUnique({ where: { id: openingId } });
  if (!existing) {
    return NextResponse.json({ success: false, error: "Not found." }, { status: 404 });
  }

  let slug = existing.slug;
  if (slugify(title) !== existing.slug && slugify(title) !== slugify(existing.title)) {
    slug = await uniqueSlug(title, async (s) => {
      const conflict = await prisma.jobOpening.findFirst({ where: { slug: s, id: { not: openingId } } });
      return !!conflict;
    });
  }

  const opening = await prisma.jobOpening.update({
    where: { id: openingId },
    data: {
      title,
      slug,
      icon: icon || "💼",
      subtitle: subtitle || null,
      badge: badge || "Open Role",
      skills: Array.isArray(skills) ? skills : skills ? String(skills).split(",").map((s: string) => s.trim()).filter(Boolean) : undefined,
      isActive: isActive !== false,
      sortOrder: Number(sortOrder) || 0,
    },
  });

  return NextResponse.json({ success: true, opening });
}

export async function DELETE(
  _request: NextRequest,
  ctx: RouteContext<"/api/admin/job-openings/[id]">
) {
  const { id } = await ctx.params;
  await prisma.jobOpening.delete({ where: { id: Number(id) } });
  return NextResponse.json({ success: true });
}
