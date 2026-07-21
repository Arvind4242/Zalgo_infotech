import { NextRequest, NextResponse } from "next/server";
import { prisma } from "@/lib/prisma";
import { sendMail } from "@/lib/mailer";

export async function POST(request: NextRequest) {
  const body = await request.json();
  const { name, email, phone, plan, website, message } = body ?? {};

  if (!name || !email || !phone || !plan) {
    return NextResponse.json(
      { success: false, error: "Missing required fields." },
      { status: 422 }
    );
  }

  await prisma.planInquiry.create({
    data: { name, email, phone, plan, website: website ?? null, message: message ?? null },
  });

  // The inquiry is already saved at this point — a broken/unconfigured SMTP
  // server should never make the client see a failed submission.
  try {
    await sendMail({
      to: process.env.PLAN_INQUIRY_TO_EMAIL as string,
      subject: `New Plan Inquiry from ${name} - ${plan}`,
      html: `
        <h2>New Plan Inquiry</h2>
        <p><strong>Name:</strong> ${name}</p>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Phone:</strong> ${phone}</p>
        <p><strong>Plan:</strong> ${plan}</p>
        ${website ? `<p><strong>Website:</strong> ${website}</p>` : ""}
        ${message ? `<p><strong>Message:</strong><br/>${String(message).replace(/\n/g, "<br/>")}</p>` : ""}
      `,
    });
  } catch (mailError) {
    console.error("Plan inquiry admin email failed:", mailError);
  }

  try {
    await sendMail({
      to: email,
      subject: "We've received your plan inquiry - Zalgo Infotech",
      html: `
        <p>Hi ${name},</p>
        <p>Thank you for your interest in our <strong>${plan}</strong> plan. Our team will review your inquiry and get back to you within 24 hours.</p>
        <p>Best regards,<br/>Zalgo Infotech Team</p>
      `,
    });
  } catch (mailError) {
    console.error("Plan inquiry client confirmation email failed:", mailError);
  }

  return NextResponse.json({ success: true });
}
