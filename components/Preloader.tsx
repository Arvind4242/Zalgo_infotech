"use client";

import { useEffect, useState } from "react";

declare global {
  interface Window {
    AOS?: { refreshHard: () => void; refresh: () => void };
  }
}

export default function Preloader() {
  const [visible, setVisible] = useState(true);

  useEffect(() => {
    // Don't rely on jQuery's `$(window).on('load', ...)` — by the time main.js
    // runs (after hydration), the browser's load event has often already fired,
    // so that handler never runs and the full-screen overlay stays up forever.
    const hide = () => setVisible(false);

    const refreshAos = () => {
      // AOS calculates each [data-aos] element's scroll-trigger position once,
      // at AOS.init() time. If that runs before below-the-fold images finish
      // loading (common with Next.js's afterInteractive script timing), those
      // positions go stale once images push the layout taller — so elements
      // that are actually already in view can permanently miss their
      // "become visible" check. Recompute once everything has truly settled.
      let attempts = 0;
      const tryRefresh = () => {
        if (window.AOS) {
          window.AOS.refreshHard();
          return;
        }
        attempts += 1;
        if (attempts < 30) setTimeout(tryRefresh, 200);
      };
      tryRefresh();
    };

    if (document.readyState === "complete") {
      hide();
      refreshAos();
    } else {
      const onLoad = () => {
        hide();
        refreshAos();
      };
      window.addEventListener("load", onLoad);
      return () => window.removeEventListener("load", onLoad);
    }
  }, []);

  if (!visible) return null;

  return (
    <div className="preloader">
      <div className="cssload-loading">
        <i></i>
        <i></i>
        <i></i>
        <i></i>
      </div>
    </div>
  );
}
