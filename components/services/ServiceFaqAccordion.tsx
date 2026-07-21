"use client";

import { useState } from "react";

export interface ServiceFaqItem {
  question: string;
  answer: string;
}

/** Simple accordion for service-page FAQ sections. Ported from the Bootstrap
 * `data-bs-toggle="collapse"` markup used across the Blade service pages, but
 * driven by React state instead of Bootstrap's JS so it doesn't depend on
 * jQuery/Bootstrap collapse being wired up globally. */
export default function ServiceFaqAccordion({
  items,
  defaultOpenIndex = 0,
}: {
  items: ServiceFaqItem[];
  defaultOpenIndex?: number | null;
}) {
  const [openIndex, setOpenIndex] = useState<number | null>(defaultOpenIndex);

  return (
    <div className="accordion common-accordion style-two">
      {items.map((item, idx) => {
        const isOpen = openIndex === idx;
        return (
          <div
            key={idx}
            className="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
          >
            <h5 className="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
              <button
                type="button"
                className={`accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5${
                  isOpen ? "" : " collapsed"
                }`}
                onClick={() => setOpenIndex(isOpen ? null : idx)}
              >
                <span>❓</span> {item.question}
              </button>
            </h5>
            <div
              className={`accordion-collapse collapse${isOpen ? " show" : ""}`}
            >
              <div className="accordion-body p-0 tw-mt-605 max-w-620-px">
                <p className="text-neutral-500">{item.answer}</p>
              </div>
            </div>
          </div>
        );
      })}
    </div>
  );
}
