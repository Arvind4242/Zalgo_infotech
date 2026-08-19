import type { NextConfig } from "next";

// Every third-party origin the site actually loads a script, stylesheet,
// font, iframe, or beacon from: Google Analytics/Tag Manager, Microsoft
// Clarity (its entry script on www.clarity.ms loads its actual tracking
// bundle from another clarity.ms subdomain, hence the wildcard), the
// Cloudflare CDN (intl-tel-input), Calendly's booking widget, YouTube
// embeds, Google Fonts (main.css @imports them — googleapis.com for the
// stylesheet, gstatic.com for the actual font files), unpkg.com (
// phosphor-icon.js injects 6 <link> stylesheets from there for the ph-*
// icon set used everywhere on the site, each pulling its own icon font),
// and cdn.fontshare.com (satoshi.css — the site's main body font —
// @font-faces its woff2/woff/ttf files from there via protocol-relative
// url()s). `unsafe-inline` stays for script/style because both Next.js's own
// hydration payload and this theme's many inline <style> blocks depend on
// it — removing it would need a nonce-based CSP wired through middleware,
// a larger change than this header addition. `unsafe-eval` is dev-only:
// Next.js/Turbopack's dev tooling (HMR, stack-trace reconstruction) uses
// eval(), which production React never does — so it's left out of the
// production policy.
const isDev = process.env.NODE_ENV !== "production";
const CONTENT_SECURITY_POLICY = [
  "default-src 'self'",
  `script-src 'self' 'unsafe-inline'${isDev ? " 'unsafe-eval'" : ""} https://www.googletagmanager.com https://cdnjs.cloudflare.com https://*.clarity.ms https://assets.calendly.com`,
  "style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com https://fonts.googleapis.com https://unpkg.com",
  "img-src 'self' data: https:",
  "font-src 'self' data: https://cdnjs.cloudflare.com https://fonts.gstatic.com https://unpkg.com https://cdn.fontshare.com",
  "connect-src 'self' https://www.google-analytics.com https://analytics.google.com https://www.googletagmanager.com https://*.clarity.ms",
  "frame-src https://www.youtube.com https://calendly.com https://player.vimeo.com https://maps.google.com https://www.google.com",
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
