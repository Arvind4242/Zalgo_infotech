"use client";

import { useState } from "react";

export default function WordpressAuditForm() {
  const [submitted, setSubmitted] = useState(false);

  function handleSubmit(e: React.FormEvent<HTMLFormElement>) {
    e.preventDefault();
    // The Laravel `contact.send` endpoint isn't part of this Next.js migration yet,
    // so submission is simulated locally instead of inventing a fake API route.
    setSubmitted(true);
  }

  if (submitted) {
    return (
      <div className="bg-white rounded-4 tw-p-8 shadow-lg">
        <p className="fw-semibold text-heading tw-mb-0">
          Thank you! Your audit request has been received — we&apos;ll be in touch shortly.
        </p>
      </div>
    );
  }

  return (
    <div className="bg-white rounded-4 tw-p-8 shadow-lg">
      <form onSubmit={handleSubmit}>
        <div className="row gy-4">
          <div className="col-md-4">
            <input
              type="text"
              name="name"
              placeholder="Your Name"
              required
              className="form-control rounded-3 border border-neutral-200 tw-py-3 tw-px-4"
            />
          </div>
          <div className="col-md-4">
            <input
              type="email"
              name="email"
              placeholder="Your Email"
              required
              className="form-control rounded-3 border border-neutral-200 tw-py-3 tw-px-4"
            />
          </div>
          <div className="col-md-4">
            <input
              type="url"
              name="website"
              placeholder="Website URL"
              className="form-control rounded-3 border border-neutral-200 tw-py-3 tw-px-4"
            />
          </div>
          <div className="col-12">
            <textarea
              name="message"
              rows={3}
              placeholder="Message (Optional)"
              className="form-control rounded-3 border border-neutral-200 tw-py-3 tw-px-4"
            ></textarea>
          </div>
          <div className="col-12">
            <button
              type="submit"
              className="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-3 group tw-px-10 rounded-pill tw-py-505 fw-bold w-100"
              data-block="button"
            >
              <span className="button__flair"></span>
              <span className="button__label">Request Free Audit &#8594;</span>
            </button>
          </div>
        </div>
      </form>
    </div>
  );
}
