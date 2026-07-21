import { SITE_URL } from "@/lib/seo";

/** Organization + WebSite + Service JSON-LD, sitewide (matches the original
 * theme's head.blade.php schema.org markup, restored here since it's part
 * of the DOM/head rather than page content and got dropped in conversion). */
export default function StructuredData() {
  const data = {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": `${SITE_URL}/#organization`,
        name: "Zalgo Infotech Pvt. Ltd.",
        url: `${SITE_URL}/`,
        logo: `${SITE_URL}/assets/images/logo/zalgo_logo.png`,
        image: `${SITE_URL}/assets/images/logo/zalgo_logo.png`,
        description:
          "Zalgo Infotech is a global AI-powered IT solutions company specializing in custom software development, AI automation, SaaS platforms, web development, ecommerce solutions, and scalable digital transformation services.",
        email: "sales@zalgoinfotech.com",
        telephone: "+91-9244213326",
        foundingDate: "2020",
        areaServed: "Worldwide",
        address: {
          "@type": "PostalAddress",
          streetAddress: "100 Feet Rd, in front of Sant Kripal Ashram, Sindhi Colony, Vinay Nagar",
          addressLocality: "Gwalior",
          addressRegion: "Madhya Pradesh",
          postalCode: "474012",
          addressCountry: "IN",
        },
        sameAs: [
          "https://in.linkedin.com/company/zalgo-infotech",
          "https://www.facebook.com/people/Zalgo-Infotech-Pvt-Ltd/61579841284566/",
          "https://www.instagram.com/zalgoinfotech/",
          "https://clutch.co/profile/zalgo-infotech",
        ],
      },
      {
        "@type": "WebSite",
        "@id": `${SITE_URL}/#website`,
        url: `${SITE_URL}/`,
        name: "Zalgo Infotech",
        description:
          "Global AI-powered IT solutions company delivering scalable software, automation, SaaS, ecommerce, and web development services.",
        publisher: { "@id": `${SITE_URL}/#organization` },
        inLanguage: "en-US",
      },
      {
        "@type": "Service",
        "@id": `${SITE_URL}/#services`,
        serviceType: [
          "AI Chatbot Development",
          "Custom Software Development",
          "Web Development",
          "Ecommerce Development",
          "SaaS Development",
          "AI Automation Solutions",
          "SEO Services",
          "Mobile App Development",
        ],
        provider: { "@id": `${SITE_URL}/#organization` },
        areaServed: [
          { "@type": "Country", name: "United States" },
          { "@type": "Country", name: "United Kingdom" },
          { "@type": "Country", name: "Canada" },
          { "@type": "Country", name: "Australia" },
          { "@type": "Country", name: "India" },
        ],
        description:
          "Zalgo Infotech provides AI-powered IT solutions including custom software development, AI chatbots, SaaS platforms, ecommerce solutions, web development, automation systems, and scalable digital transformation services for startups and enterprises worldwide.",
        url: `${SITE_URL}/`,
        keywords: [
          "AI development company",
          "custom software development company",
          "AI chatbot development services",
          "web development company",
          "SaaS development company",
          "AI automation agency",
          "SEO services company",
          "ecommerce development services",
        ],
      },
    ],
  };

  return (
    <script
      type="application/ld+json"
      dangerouslySetInnerHTML={{ __html: JSON.stringify(data) }}
    />
  );
}
