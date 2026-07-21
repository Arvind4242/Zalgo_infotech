"use client";

import { useEffect } from "react";

/** Applies a page-specific class to the root <html> element, mirroring the
 * per-homepage `htmlClass` that Laravel set on the <html> tag (e.g. 'home-two').
 * Restores the previous (empty) class on unmount. */
export default function HtmlClassSetter({ className }: { className: string }) {
  useEffect(() => {
    document.documentElement.className = className;
    return () => {
      document.documentElement.className = "";
    };
  }, [className]);

  return null;
}
