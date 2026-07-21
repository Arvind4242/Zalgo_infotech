import type { Metadata } from "next";
import { SITE_URL, SITE_NAME } from "@/lib/seo";
import "./globals.css";

export const metadata: Metadata = {
  metadataBase: new URL(SITE_URL),
  title: {
    default: "Zalgo Infotech - IT Solutions & Web Development",
    template: `%s | ${SITE_NAME}`,
  },
  description:
    "Zalgo Infotech delivers cutting-edge web development, AI solutions, and digital marketing services for startups and enterprises worldwide.",
  keywords: [
    "IT solutions company",
    "web development company",
    "custom software development",
    "AI development services",
    "digital marketing agency",
    "hire web developers",
  ],
  robots: { index: true, follow: true },
  icons: {
    shortcut: "/assets/images/logo/favicon.png",
  },
  openGraph: {
    siteName: SITE_NAME,
    locale: "en_US",
    type: "website",
  },
  twitter: {
    card: "summary_large_image",
  },
};

// Deliberately minimal. All of the public marketing site's Bootstrap/AOS/
// GSAP/jQuery CSS and scripts live in app/(site)/layout.tsx instead of here,
// so that /admin (which sits outside that route group) never inherits any
// of it — the admin panel gets its own clean styling with nothing to fight.
export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body>{children}</body>
    </html>
  );
}
