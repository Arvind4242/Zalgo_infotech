"use client";

import { useEffect } from "react";
import Clarity from "@microsoft/clarity";

export const CLARITY_PROJECT_ID = "xpstk46fqj";

export default function MicrosoftClarity() {
  useEffect(() => {
    Clarity.init(CLARITY_PROJECT_ID);
  }, []);

  return null;
}
