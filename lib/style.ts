import type { CSSProperties } from "react";

/** Converts a raw CSS declaration string (e.g. from a Blade `style="..."` attribute)
 * into a React CSSProperties object, so markup can be ported with minimal rewriting. */
export function parseStyle(css: string): CSSProperties {
  const result: Record<string, string> = {};
  css
    .split(";")
    .map((rule) => rule.trim())
    .filter(Boolean)
    .forEach((rule) => {
      const idx = rule.indexOf(":");
      if (idx === -1) return;
      const prop = rule.slice(0, idx).trim();
      const value = rule.slice(idx + 1).trim();
      const camel = prop.replace(/-([a-z])/g, (_, c) => c.toUpperCase());
      result[camel] = value;
    });
  return result as CSSProperties;
}
