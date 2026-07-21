import Link from "next/link";
import PageShell from "@/components/PageShell";
import { routes } from "@/lib/routes";

export const metadata = { title: "Thank You - Zalgo Infotech", robots: { index: false, follow: false } };

export default function ThankYouPage() {
  return (
    <PageShell>
      <div className="container" style={{ padding: "140px 20px", textAlign: "center" }}>
        <h1>Thank You!</h1>
        <p className="text-neutral-600 tw-mt-4">
          Your message has been sent successfully. Our team will get back to you shortly.
        </p>
        <Link
          href={routes.home}
          className="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-3 active--translate-y-2 rounded-0 tw-px-10 tw-py-4 tw-mt-8"
        >
          <span className="button__label">Back to Home</span>
        </Link>
      </div>
    </PageShell>
  );
}
