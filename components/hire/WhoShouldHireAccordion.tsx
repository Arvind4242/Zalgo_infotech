"use client";

import { useState } from "react";

export interface WhoShouldHireItem {
  title: string;
  desc: string;
  image: string;
}

/** Left-hand accordion + swapping right-hand image, ported from the
 * "Who Should Hire Our Developers" FAQ section (Bootstrap collapse +
 * data-img swap in Blade) into React state. */
export default function WhoShouldHireAccordion({
  items,
  defaultOpenIndex = 0,
}: {
  items: WhoShouldHireItem[];
  defaultOpenIndex?: number;
}) {
  const [openIndex, setOpenIndex] = useState(defaultOpenIndex);

  return (
    <div className="row gy-4">
      <div className="col-lg-5">
        <div className="accordion common-accordion accordion-border-left">
          {items.map((item, index) => {
            const isOpen = openIndex === index;
            return (
              <div
                key={item.title}
                className="accordion-item tw-py-4 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
              >
                <h5 className="accordion-header">
                  <button
                    type="button"
                    className={`accordion-button tw-pb-8 tw-pt-4 shadow-none px-0 bg-transparent h5${
                      isOpen ? "" : " collapsed"
                    }`}
                    onClick={() => setOpenIndex(index)}
                    aria-expanded={isOpen}
                  >
                    {item.title}
                  </button>
                </h5>
                <div className={`accordion-collapse collapse${isOpen ? " show" : ""}`}>
                  <div className="accordion-body p-0">
                    <p className="text-neutral-500">{item.desc}</p>
                  </div>
                </div>
              </div>
            );
          })}
        </div>
      </div>
      <div className="col-lg-7">
        <div className="position-relative tw-pb-8 tw-ps-12 h-100">
          <div className="bg-white tw-p-205 tw-rounded-3xl h-100 tw-min-h-400-px">
            <img
              src={items[openIndex]?.image}
              alt="Image"
              className="w-100 h-100 object-fit-cover tw-rounded-2xl tw-duration-300"
            />
          </div>
        </div>
      </div>
    </div>
  );
}
