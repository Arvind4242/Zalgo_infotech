import { NextRequest, NextResponse } from "next/server";
import { prisma } from "@/lib/prisma";
import { sendMail } from "@/lib/mailer";
import { saveUploadedFile } from "@/lib/uploads";

const ALLOWED_RESUME_EXT = [".pdf", ".doc", ".docx"];

export async function POST(request: NextRequest) {
  const formData = await request.formData();

  const jobType = String(formData.get("job_type") ?? "");
  const name = String(formData.get("name") ?? "");
  const email = String(formData.get("email") ?? "");
  const phone = formData.get("phone") ? String(formData.get("phone")) : null;
  const experience = formData.get("experience") ? String(formData.get("experience")) : null;
  const degree = formData.get("degree") ? String(formData.get("degree")) : null;
  const coverLetter = formData.get("cover") ? String(formData.get("cover")) : null;
  const skillsRaw = formData.get("skills");
  const resume = formData.get("resume");

  if (!jobType || !name || !email || !(resume instanceof File) || resume.size === 0) {
    return NextResponse.json(
      { success: false, error: "Please fill in all required fields and attach a resume." },
      { status: 422 }
    );
  }

  const ext = resume.name.slice(resume.name.lastIndexOf(".")).toLowerCase();
  if (!ALLOWED_RESUME_EXT.includes(ext) || resume.size > 2 * 1024 * 1024) {
    return NextResponse.json(
      { success: false, error: "Resume must be a PDF/DOC/DOCX under 2MB." },
      { status: 422 }
    );
  }

  let skills: string[] = [];
  if (skillsRaw) {
    try {
      skills = JSON.parse(String(skillsRaw));
    } catch {
      skills = String(skillsRaw)
        .split(",")
        .map((s) => s.trim())
        .filter(Boolean);
    }
  }

  const resumePath = await saveUploadedFile(resume, "resumes");

  const application = await prisma.jobApplication.create({
    data: {
      jobType,
      name,
      email,
      phone,
      experience,
      degree,
      skills,
      coverLetter,
      resume: resumePath,
    },
  });

  const summaryHtml = `
    <h2>Job Application: ${jobType}</h2>
    <p><strong>Name:</strong> ${application.name}</p>
    <p><strong>Email:</strong> ${application.email}</p>
    <p><strong>Phone:</strong> ${application.phone ?? "-"}</p>
    <p><strong>Experience:</strong> ${application.experience ?? "-"}</p>
    <p><strong>Degree:</strong> ${application.degree ?? "-"}</p>
    <p><strong>Skills:</strong> ${skills.join(", ") || "-"}</p>
    <p><strong>Cover Letter:</strong><br/>${(coverLetter ?? "").replace(/\n/g, "<br/>")}</p>
    <p><strong>Resume:</strong> ${resumePath}</p>
  `;

  // The application is already saved at this point — a broken/unconfigured
  // SMTP server should never make the client see a failed submission.
  try {
    await sendMail({
      to: process.env.JOB_APPLICATION_TO_EMAIL as string,
      subject: `New Job Application - ${jobType}`,
      html: summaryHtml,
    });

    await sendMail({
      to: application.email,
      subject: "We've received your application - Zalgo Infotech",
      html: `<p>Hi ${application.name},</p><p>Thank you for applying. Our team will review your application and get back to you soon.</p>`,
    });
  } catch (mailError) {
    console.error("Job application email notification failed:", mailError);
  }

  return NextResponse.json({ success: true });
}
