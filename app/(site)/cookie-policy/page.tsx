import PageShell from "@/components/PageShell";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Cookie Policy",
  description:
    "Read Zalgo Infotech's cookie policy to learn about the essential, analytics, and marketing cookies we use to enhance your experience on our website.",
  keywords: [
    "Zalgo Infotech cookie policy",
    "website cookies",
    "cookie consent",
    "analytics cookies",
    "marketing cookies",
  ],
  path: "/cookie-policy",
});

export default function CookiePolicyPage() {
  return (
    <PageShell>
      <div className="container py-5">
        <h1>Cookie Policy</h1>

        <p>This website uses cookies to enhance user experience.</p>

        <h3>Types of Cookies</h3>
        <ul>
          <li>Essential cookies</li>
          <li>Analytics cookies</li>
          <li>Marketing cookies</li>
        </ul>

        <p>By using our site you consent to cookies.</p>
      </div>
    </PageShell>
  );
}
