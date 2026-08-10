import type { MetadataRoute } from "next";
import { prisma } from "@/lib/prisma";
import { SITE_URL } from "@/lib/seo";

// Utility/transactional pages with no unique SEO value are deliberately
// excluded (they're also marked noindex on the page itself).
const EXCLUDED_PATHS = new Set(["/login", "/register", "/cart", "/checkout", "/thankyou"]);

const HIGH_PRIORITY_PATHS = new Set(["/", "/about-us", "/contact", "/blog", "/pricing"]);

const STATIC_PATHS = [
  "/",
  "/index-two",
  "/index-three",
  "/index-four",
  "/index-five",
  "/privacy-policy",
  "/cookie-policy",
  "/login",
  "/register",
  "/shop",
  "/shop-details",
  "/cart",
  "/checkout",
  "/testimonial",
  "/pricing",
  "/about-us",
  "/app-intigration",
  "/intigration-details",
  "/policy-privacy",
  "/faq",
  "/project-details",
  "/service-details",
  "/industry",
  "/web-development",
  "/cmsdevelopment",
  "/reactjsdevelopment",
  "/shopify",
  "/nodejs",
  "/wordpressdevelopment",
  "/ecommerce",
  "/python",
  "/aidevelopement",
  "/laravel",
  "/maintenanceservices",
  "/wordpress-maintenance",
  "/seoservices",
  "/digitalservices",
  "/culturevalue",
  "/lifezalgo",
  "/hirewebdeveloper",
  "/hirewordpressdeveloper",
  "/hirelaraveldeveloper",
  "/hirenodejsdeveloper",
  "/hirephpdeveloper",
  "/hireaideveloper",
  "/hirereactjsdeveloper",
  "/hirenextjsdeveloper",
  "/hirepythondeveloper",
  "/bioage",
  "/career",
  "/experthe",
  "/dobramoc",
  "/lifetreeanatomical",
  "/towelsoutlet",
  "/awakeningthegeniuswithin",
  "/erpsystem",
  "/labproject",
  "/lms",
  "/leadmanagement",
  "/washingerp",
  "/financemanagertraining",
  "/kalpmantra",
  "/shriramexpressnews",
  "/leatherstitch",
  "/launch",
  "/blog",
  "/casestudy",
  "/contact",
  "/thankyou",
];

export default async function sitemap(): Promise<MetadataRoute.Sitemap> {
  const now = new Date();

  const staticEntries: MetadataRoute.Sitemap = STATIC_PATHS.filter(
    (path) => !EXCLUDED_PATHS.has(path)
  ).map((path) => ({
    url: `${SITE_URL}${path}`,
    lastModified: now,
    changeFrequency: path === "/" || path === "/blog" ? "daily" : "weekly",
    priority: HIGH_PRIORITY_PATHS.has(path) ? 1 : 0.7,
  }));

  let blogEntries: MetadataRoute.Sitemap = [];
  try {
    const blogs = await prisma.blog.findMany({
      where: { isPublished: true },
      select: { slug: true, updatedAt: true },
    });
    blogEntries = blogs.map((b) => ({
      url: `${SITE_URL}/blog/${b.slug}`,
      lastModified: b.updatedAt,
      changeFrequency: "monthly",
      priority: 0.6,
    }));
  } catch {
    // DB unavailable at build time — sitemap still ships with static pages.
  }

  return [...staticEntries, ...blogEntries];
}
