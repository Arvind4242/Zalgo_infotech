"use client";

import { Suspense, useEffect } from "react";
import { usePathname, useSearchParams } from "next/navigation";

export const GA_MEASUREMENT_ID = "G-LDSZZFGE6B";

declare global {
  interface Window {
    gtag?: (...args: unknown[]) => void;
  }
}

function sendPageView(pathname: string, searchParams: URLSearchParams) {
  const query = searchParams.toString();
  const url = query ? `${pathname}?${query}` : pathname;
  window.gtag!("event", "page_view", {
    page_path: url,
    page_location: window.location.href,
    page_title: document.title,
  });
}

/**
 * gtag's own `gtag('config', GA_ID)` call (in the layout, runs once when the
 * script first loads) only ever logs a pageview for the FIRST page a visitor
 * lands on. This is a single-page app: clicking a <Link> to another page
 * swaps content via React without a real browser navigation, so gtag never
 * finds out the route changed — every page after the first goes untracked.
 * This fires a page_view event on every client-side route change (including
 * the first one, since send_page_view is disabled in the layout's initial
 * gtag config) so actual visits get counted correctly.
 */
function GAPageViewTracker() {
  const pathname = usePathname();
  const searchParams = useSearchParams();

  useEffect(() => {
    // The gtag.js script and this component both load independently
    // (afterInteractive script tag vs. React hydration) — window.gtag may
    // not be defined yet on the very first render. Poll briefly rather than
    // silently dropping the pageview.
    if (typeof window.gtag === "function") {
      sendPageView(pathname, searchParams);
      return;
    }
    let attempts = 0;
    const id = setInterval(() => {
      if (typeof window.gtag === "function") {
        sendPageView(pathname, searchParams);
        clearInterval(id);
        return;
      }
      attempts += 1;
      if (attempts >= 30) clearInterval(id); // ~6s, then give up quietly
    }, 200);
    return () => clearInterval(id);
  }, [pathname, searchParams]);

  return null;
}

export default function GoogleAnalytics() {
  return (
    <Suspense fallback={null}>
      <GAPageViewTracker />
    </Suspense>
  );
}
