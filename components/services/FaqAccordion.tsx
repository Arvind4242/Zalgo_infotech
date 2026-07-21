"use client";

import { useState } from "react";

export interface FaqItem {
  question: string;
  answer: string;
  defaultOpen?: boolean;
}

export default function FaqAccordion({ items }: { items: FaqItem[] }) {
  const initialOpen = items.findIndex((item) => item.defaultOpen);
  const [openIndex, setOpenIndex] = useState<number | null>(
    initialOpen >= 0 ? initialOpen : null
  );

  return (
    <div className="accordion common-accordion style-two">
      {items.map((item, index) => {
        const isOpen = openIndex === index;
        return (
          <div
            key={index}
            className="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
          >
            <h5 className="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
              <button
                className={`accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5${
                  isOpen ? "" : " collapsed"
                }`}
                type="button"
                onClick={() => setOpenIndex(isOpen ? null : index)}
                aria-expanded={isOpen}
              >
                <span>❓</span> {item.question}
              </button>
            </h5>
            <div className={`accordion-collapse collapse${isOpen ? " show" : ""}`}>
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
