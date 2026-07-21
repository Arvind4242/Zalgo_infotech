import type { Metadata } from "next";

export const SITE_URL = "https://zalgoinfotech.com";
export const SITE_NAME = "Zalgo Infotech";
export const DEFAULT_OG_IMAGE = "/assets/images/logo/zalgo_logo.png";

/**
 * Builds a complete, consistent Metadata object (title, description,
 * keywords, canonical URL, Open Graph, Twitter card) for a page from just
 * the handful of fields that actually differ per page. Use this in every
 * page's `export const metadata = buildMetadata({...})` instead of a bare
 * `{ title }` object.
 */
export function buildMetadata({
  title,
  description,
  keywords,
  path,
  image = DEFAULT_OG_IMAGE,
  type = "website",
}: {
  title: string;
  description: string;
  keywords: string[];
  path: string;
  image?: string;
  type?: "website" | "article";
}): Metadata {
  const url = `${SITE_URL}${path}`;
  // The root layout already applies a `%s | Zalgo Infotech` title template,
  // so `metadata.title` here must stay just the page-specific part — Next.js
  // appends the site name automatically. Open Graph/Twitter titles are NOT
  // run through that template, so they need the full title spelled out.
  const fullTitle = title.includes(SITE_NAME) ? title : `${title} | ${SITE_NAME}`;

  return {
    title,
    description,
    keywords,
    alternates: {
      canonical: url,
    },
    openGraph: {
      title: fullTitle,
      description,
      url,
      siteName: SITE_NAME,
      images: [{ url: image }],
      locale: "en_US",
      type,
    },
    twitter: {
      card: "summary_large_image",
      title: fullTitle,
      description,
      images: [image],
    },
  };
}
