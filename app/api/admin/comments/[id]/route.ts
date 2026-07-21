import { NextRequest, NextResponse } from "next/server";
import { prisma } from "@/lib/prisma";

export async function PUT(
  request: NextRequest,
  ctx: RouteContext<"/api/admin/comments/[id]">
) {
  const { id } = await ctx.params;
  const { isApproved } = await request.json();

  const comment = await prisma.blogComment.update({
    where: { id: Number(id) },
    data: { isApproved: !!isApproved },
  });

  return NextResponse.json({ success: true, comment });
}

export async function DELETE(
  _request: NextRequest,
  ctx: RouteContext<"/api/admin/comments/[id]">
) {
  const { id } = await ctx.params;
  await prisma.blogComment.delete({ where: { id: Number(id) } });
  return NextResponse.json({ success: true });
}
