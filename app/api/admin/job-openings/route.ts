import { NextRequest, NextResponse } from "next/server";
import { prisma } from "@/lib/prisma";
import { uniqueSlug } from "@/lib/slug";

export async function GET() {
  const openings = await prisma.jobOpening.findMany({ orderBy: { sortOrder: "asc" } });
  return NextResponse.json({ success: true, openings });
}

export async function POST(request: NextRequest) {
  const body = await request.json();
  const { title, icon, subtitle, badge, skills, isActive, sortOrder } = body ?? {};

  if (!title) {
    return NextResponse.json(
      { success: false, error: "Title is required." },
      { status: 422 }
    );
  }

  const slug = await uniqueSlug(title, async (s) => {
    const existing = await prisma.jobOpening.findUnique({ where: { slug: s } });
    return !!existing;
  });

  const opening = await prisma.jobOpening.create({
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
