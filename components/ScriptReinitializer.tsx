"use client";

import { useEffect } from "react";

// Next.js is a single-page app: main.js and custom-gsap.js (jQuery/GSAP/
// Swiper/button-hover-flair init logic) only execute once, the first time
// the site loads via next/script in the root layout. Clicking a <Link> to a
// different page swaps in fresh page content via React without ever
// reloading the browser tab — so init code that only ran once against the
// FIRST page's markup never re-runs against the new page's elements.
// That's why sliders (e.g. the vertical "about-two-thumbs" scrollers) and
// button hover effects (e.g. the "Join Our Team" flair fill, which is what
// turns the background orange so white hover-text stays readable) only
// work after a hard refresh, not after in-app navigation. Re-inject both
// scripts fresh on every mount of this component (it lives inside
// PageShell, which remounts on every page) so their init code runs again
// against the current page's DOM.
let hasLoadedOnce = false;

const REINIT_SCRIPTS = ["/assets/js/custom-gsap.js", "/assets/js/main.js"];

export default function ScriptReinitializer() {
  useEffect(() => {
    if (!hasLoadedOnce) {
      // First page of this browser session: next/script is already loading
      // these for the first time in the root layout. Nothing to do yet.
      hasLoadedOnce = true;
      return;
    }

    REINIT_SCRIPTS.forEach((src, i) => {
      const key = `reinit-${i}`;
      const previous = document.querySelector(`script[data-reinit="${key}"]`);
      if (previous) previous.remove();

      const script = document.createElement("script");
      script.src = src;
      script.setAttribute("data-reinit", key);
      document.body.appendChild(script);
    });
  }, []);

  return null;
}
