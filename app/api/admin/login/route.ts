import { NextRequest, NextResponse } from "next/server";
import bcrypt from "bcryptjs";
import { createAdminSessionToken, ADMIN_COOKIE_NAME } from "@/lib/adminAuth";

export async function POST(request: NextRequest) {
  const { email, password } = await request.json();

  const adminEmail = process.env.ADMIN_EMAIL;
  // Stored base64-encoded in .env: bcrypt hashes contain literal `$` characters
  // (e.g. "$2b$12$..."), which Next.js's env loader treats as variable-
  // substitution syntax and silently strips, corrupting the value.
  const adminPasswordHashRaw = process.env.ADMIN_PASSWORD_HASH_B64;
  const adminPasswordHash = adminPasswordHashRaw
    ? Buffer.from(adminPasswordHashRaw, "base64").toString("utf8")
    : undefined;

  if (!adminEmail || !adminPasswordHash) {
    return NextResponse.json(
      { success: false, error: "Admin login is not configured." },
      { status: 500 }
    );
  }

  const emailMatches = email?.toLowerCase() === adminEmail.toLowerCase();
  const passwordMatches = password ? await bcrypt.compare(password, adminPasswordHash) : false;

  if (!emailMatches || !passwordMatches) {
    return NextResponse.json(
      { success: false, error: "Invalid email or password." },
      { status: 401 }
    );
  }

  const token = await createAdminSessionToken(adminEmail);

  const response = NextResponse.json({ success: true });
  response.cookies.set(ADMIN_COOKIE_NAME, token, {
    httpOnly: true,
    secure: process.env.NODE_ENV === "production",
    sameSite: "lax",
    path: "/",
    maxAge: 60 * 60 * 8,
  });
  return response;
}
