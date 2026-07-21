export type DatePreset =
  | "all"
  | "today"
  | "yesterday"
  | "7d"
  | "15d"
  | "30d"
  | "custom";

export const DATE_PRESETS: { key: DatePreset; label: string }[] = [
  { key: "all", label: "All Time" },
  { key: "today", label: "Today" },
  { key: "yesterday", label: "Yesterday" },
  { key: "7d", label: "Last 7 Days" },
  { key: "15d", label: "Last 15 Days" },
  { key: "30d", label: "Last 30 Days" },
  { key: "custom", label: "Custom" },
];

function startOfDay(d: Date) {
  const copy = new Date(d);
  copy.setHours(0, 0, 0, 0);
  return copy;
}

function endOfDay(d: Date) {
  const copy = new Date(d);
  copy.setHours(23, 59, 59, 999);
  return copy;
}

/** Returns the [from, to] bounds (inclusive) for a date preset, or null for "all". */
export function getDateRange(
  preset: DatePreset,
  customFrom?: string,
  customTo?: string
): { from: Date; to: Date } | null {
  const now = new Date();

  switch (preset) {
    case "all":
      return null;
    case "today":
      return { from: startOfDay(now), to: endOfDay(now) };
    case "yesterday": {
      const y = new Date(now);
      y.setDate(y.getDate() - 1);
      return { from: startOfDay(y), to: endOfDay(y) };
    }
    case "7d": {
      const from = new Date(now);
      from.setDate(from.getDate() - 6);
      return { from: startOfDay(from), to: endOfDay(now) };
    }
    case "15d": {
      const from = new Date(now);
      from.setDate(from.getDate() - 14);
      return { from: startOfDay(from), to: endOfDay(now) };
    }
    case "30d": {
      const from = new Date(now);
      from.setDate(from.getDate() - 29);
      return { from: startOfDay(from), to: endOfDay(now) };
    }
    case "custom": {
      if (!customFrom && !customTo) return null;
      const from = customFrom ? startOfDay(new Date(customFrom)) : new Date(0);
      const to = customTo ? endOfDay(new Date(customTo)) : endOfDay(now);
      return { from, to };
    }
    default:
      return null;
  }
}

export function isWithinRange(iso: string, range: { from: Date; to: Date } | null) {
  if (!range) return true;
  const t = new Date(iso).getTime();
  return t >= range.from.getTime() && t <= range.to.getTime();
}
