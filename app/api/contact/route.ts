import { NextRequest, NextResponse } from "next/server";
import { prisma } from "@/lib/prisma";
import { sendMail } from "@/lib/mailer";
import { saveUploadedFile } from "@/lib/uploads";

export async function POST(request: NextRequest) {
  const formData = await request.formData();

  const name = String(formData.get("name") ?? "");
  const email = String(formData.get("email") ?? "");
  const phone = String(formData.get("phone") ?? "");
  const budget = formData.get("budget") ? String(formData.get("budget")) : null;
  const service = formData.get("service") ? String(formData.get("service")) : null;
  const message = String(formData.get("message") ?? "");
  const file = formData.get("additional_document");

  if (!name || !email || !phone || !message) {
    return NextResponse.json(
      { success: false, error: "Please fill in all required fields." },
      { status: 422 }
    );
  }

  try {
    let filePath: string | null = null;
    if (file instanceof File && file.size > 0) {
      if (file.size > 10 * 1024 * 1024) {
        return NextResponse.json(
          { success: false, error: "Attachment must be under 10MB." },
          { status: 422 }
        );
      }
      filePath = await saveUploadedFile(file, "contact_files");
    }

    await prisma.contactMail.create({
      data: {
        name,
        email,
        phone,
        budget,
        service,
        message,
        additionalDocument: filePath,
        sentAt: new Date(),
      },
    });

    // The submission is already saved at this point — a broken/unconfigured
    // SMTP server should never make the client see a failed submission.
    try {
      await sendMail({
        to: process.env.CONTACT_TO_EMAIL as string,
        subject: `New Contact Form Submission from ${name}`,
        html: `
          <h2>New Contact Form Submission</h2>
          <p><strong>Name:</strong> ${name}</p>
          <p><strong>Email:</strong> ${email}</p>
          <p><strong>Phone:</strong> ${phone}</p>
          ${budget ? `<p><strong>Budget:</strong> ${budget}</p>` : ""}
          ${service ? `<p><strong>Service:</strong> ${service}</p>` : ""}
          <p><strong>Message:</strong><br/>${message.replace(/\n/g, "<br/>")}</p>
          ${filePath ? `<p><strong>Attachment:</strong> ${filePath}</p>` : ""}
        `,
      });
    } catch (mailError) {
      console.error("Contact form email notification failed:", mailError);
    }

    try {
      await sendMail({
        to: email,
        subject: "We've received your message - Zalgo Infotech",
        html: `
          <p>Hi ${name},</p>
          <p>Thank you for reaching out to Zalgo Infotech. We've received your message and our team will get back to you within 24 hours.</p>
          <p><strong>Your message:</strong><br/>${message.replace(/\n/g, "<br/>")}</p>
          <p>Best regards,<br/>Zalgo Infotech Team</p>
        `,
      });
    } catch (mailError) {
      console.error("Contact form client confirmation email failed:", mailError);
    }

    return NextResponse.json({ success: true });
  } catch (error) {
    console.error(error);
    return NextResponse.json(
      { success: false, error: "Something went wrong. Please try again." },
      { status: 500 }
    );
  }
}
