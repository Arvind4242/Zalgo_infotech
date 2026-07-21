import { NextRequest, NextResponse } from "next/server";
import { saveUploadedFile } from "@/lib/uploads";

export async function POST(request: NextRequest) {
  const formData = await request.formData();
  const file = formData.get("file");

  if (!(file instanceof File) || file.size === 0) {
    return NextResponse.json({ success: false, error: "No file provided." }, { status: 422 });
  }

  if (file.size > 5 * 1024 * 1024) {
    return NextResponse.json({ success: false, error: "File must be under 5MB." }, { status: 422 });
  }

  const path = await saveUploadedFile(file, "blog_images");
  return NextResponse.json({ success: true, path });
}
