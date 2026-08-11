import type { NextConfig } from "next";

// Every third-party origin the site actually loads a script, stylesheet,
// font, iframe, or beacon from: Google Analytics/Tag Manager, Microsoft
// Clarity, the Cloudflare CDN (intl-tel-input), Calendly's booking widget,
// and YouTube embeds. `unsafe-inline` stays for script/style because both
// Next.js's own hydration payload and this theme's many inline <style>
// blocks depend on it — removing it would need a nonce-based CSP wired
// through middleware, a larger change than this header addition.
const CONTENT_SECURITY_POLICY = [
  "default-src 'self'",
  "script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://cdnjs.cloudflare.com https://www.clarity.ms https://assets.calendly.com",
  "style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com",
  "img-src 'self' data: https:",
  "font-src 'self' data: https://cdnjs.cloudflare.com",
  "connect-src 'self' https://www.google-analytics.com https://analytics.google.com https://www.googletagmanager.com https://www.clarity.ms https://c.clarity.ms",
  "frame-src https://www.youtube.com https://calendly.com",
  "object-src 'none'",
  "base-uri 'self'",
  "form-action 'self'",
  "frame-ancestors 'self'",
].join("; ");

const nextConfig: NextConfig = {
  async headers() {
    return [
      {
        source: "/:path*",
        headers: [
          {
            key: "Referrer-Policy",
            value: "strict-origin-when-cross-origin",
          },
          {
            key: "Content-Security-Policy",
            value: CONTENT_SECURITY_POLICY,
          },
          {
            key: "Strict-Transport-Security",
            value: "max-age=63072000; includeSubDomains; preload",
          },
          {
            key: "X-Frame-Options",
            value: "SAMEORIGIN",
          },
          {
            key: "X-Content-Type-Options",
            value: "nosniff",
          },
        ],
      },
    ];
  },
};

export default nextConfig;
