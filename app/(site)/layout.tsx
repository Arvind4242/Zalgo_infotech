import Script from "next/script";
import Preloader from "@/components/Preloader";
import BackToTop from "@/components/BackToTop";
import CookieConsent from "@/components/CookieConsent";
import StructuredData from "@/components/StructuredData";
import GoogleAnalytics, { GA_MEASUREMENT_ID } from "@/components/GoogleAnalytics";
import MicrosoftClarity from "@/components/MicrosoftClarity";

// All of the public marketing site's Bootstrap/AOS/Swiper/GSAP CSS and
// vendor scripts live in this route-group layout (not the root layout), so
// they only ever load for public pages. The /admin panel sits outside this
// group and gets a clean slate — none of this leaks in and fights with its
// own styling.
export default function SiteLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <>
      <StructuredData />

      {/* These are static vendor CSS files (Bootstrap/AOS/Swiper/etc. from
          the original theme), not CSS Modules or global app styles, so the
          `next/font`-style automatic optimization the no-css-tags rule
          expects doesn't apply here — plain <link> tags are intentional. */}
      {/* eslint-disable @next/next/no-css-tags */}
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="/assets/css/aos.css" />
      <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css" />
      <link rel="stylesheet" href="/assets/css/magnific-popup.css" />
      <link rel="stylesheet" href="/assets/css/satoshi.css" />
      <link rel="stylesheet" href="/assets/css/main.css" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"
      />

      <Script
        src={`https://www.googletagmanager.com/gtag/js?id=${GA_MEASUREMENT_ID}`}
        strategy="afterInteractive"
      />
      <Script id="gtag-init" src="/assets/js/gtag-init.js" strategy="afterInteractive" />
      {/* GA's own gtag('config') call only auto-tracks the very first page
          load; GoogleAnalytics fires a page_view on every subsequent
          client-side route change (see component for why). send_page_view
          is disabled above so the first page isn't double-counted. */}
      <GoogleAnalytics />
      <MicrosoftClarity />

      <Preloader />
      {children}
      <BackToTop />
      <CookieConsent />

      {/* Was `beforeInteractive` in the root layout; that strategy is only
          allowed there, so this is `afterInteractive` here instead. Order is
          still preserved (Next.js loads afterInteractive scripts in the
          order they appear), so jQuery still loads before main.js/custom-gsap.js. */}
      <Script src="/assets/js/jquery-3.7.1.min.js" strategy="afterInteractive" />
      <Script src="/assets/js/phosphor-icon.js" strategy="afterInteractive" />
      <Script src="/assets/js/boostrap.bundle.min.js" strategy="afterInteractive" />
      <Script src="/assets/js/gsap.min.js" strategy="afterInteractive" />
      <Script src="/assets/js/ScrollTrigger.min.js" strategy="afterInteractive" />
      <Script src="/assets/js/ScrollSmoother.min.js" strategy="afterInteractive" />
      <Script src="/assets/js/SplitText.min.js" strategy="afterInteractive" />
      <Script src="/assets/js/custom-gsap.js" strategy="afterInteractive" />
      <Script src="/assets/js/aos.js" strategy="afterInteractive" />
      <Script src="/assets/js/counterup.min.js" strategy="afterInteractive" />
      <Script src="/assets/js/swiper-bundle.min.js" strategy="afterInteractive" />
      <Script src="/assets/js/jquery.marquee.min.js" strategy="afterInteractive" />
      <Script src="/assets/js/magnific-popup.min.js" strategy="afterInteractive" />
      <Script src="/assets/js/main.js" strategy="afterInteractive" />
      <Script
        src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"
        strategy="afterInteractive"
      />
      <Script
        src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        strategy="afterInteractive"
      />
    </>
  );
}
