import { NextRequest, NextResponse } from "next/server";
import { prisma } from "@/lib/prisma";

export async function POST(
  request: NextRequest,
  ctx: RouteContext<"/api/blog/[slug]/comment">
) {
  const { slug } = await ctx.params;
  const body = await request.json();
  const { name, email, phone, website, comment } = body ?? {};

  if (!name || !email || !comment) {
    return NextResponse.json(
      { success: false, error: "Name, email and comment are required." },
      { status: 422 }
    );
  }

  const blog = await prisma.blog.findFirst({
    where: { slug, isPublished: true },
  });

  if (!blog) {
    return NextResponse.json({ success: false, error: "Not found." }, { status: 404 });
  }

  await prisma.blogComment.create({
    data: {
      blogId: blog.id,
      name,
      email,
      phone: phone ?? null,
      website: website ?? null,
      comment,
    },
  });

  return NextResponse.json({
    success: true,
    message: "Thank you! Your comment has been submitted and is awaiting approval.",
  });
}
