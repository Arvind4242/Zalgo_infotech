import { prisma } from "@/lib/prisma";
import AdminDashboard from "@/components/admin/AdminDashboard";

export const dynamic = "force-dynamic";
export const metadata = { title: "Admin Dashboard" };

export default async function AdminPage() {
  const [contactMails, planInquiries, jobApplications, blogComments] = await Promise.all([
    prisma.contactMail.findMany({ orderBy: { createdAt: "desc" } }),
    prisma.planInquiry.findMany({ orderBy: { createdAt: "desc" } }),
    prisma.jobApplication.findMany({ orderBy: { createdAt: "desc" } }),
    prisma.blogComment.findMany({
      orderBy: { createdAt: "desc" },
      include: { blog: { select: { title: true, slug: true } } },
    }),
  ]);

  return (
    <AdminDashboard
      contactMails={JSON.parse(JSON.stringify(contactMails))}
      planInquiries={JSON.parse(JSON.stringify(planInquiries))}
      jobApplications={JSON.parse(JSON.stringify(jobApplications))}
      blogComments={JSON.parse(JSON.stringify(blogComments))}
    />
  );
}
