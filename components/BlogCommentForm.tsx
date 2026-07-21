"use client";

import { useState } from "react";

export default function BlogCommentForm({ slug }: { slug: string }) {
  const [status, setStatus] = useState<"idle" | "loading" | "done" | "error">("idle");
  const [message, setMessage] = useState("");

  async function handleSubmit(e: React.FormEvent<HTMLFormElement>) {
    e.preventDefault();
    const form = e.currentTarget;
    const data = new FormData(form);
    const payload = {
      name: data.get("name"),
      email: data.get("email"),
      phone: data.get("phone"),
      website: data.get("website"),
      comment: data.get("comment"),
    };

    setStatus("loading");
    try {
      const res = await fetch(`/api/blog/${slug}/comment`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(payload),
      });
      const json = await res.json();
      if (!res.ok || !json.success) {
        setStatus("error");
        setMessage(json.error || "Something went wrong. Please try again.");
        return;
      }
      setStatus("done");
      setMessage(json.message);
      form.reset();
    } catch {
      setStatus("error");
      setMessage("Something went wrong. Please try again.");
    }
  }

  return (
    <div
      className="overflow-hidden"
      style={{ borderRadius: 18, boxShadow: "0 4px 28px rgba(0,181,173,0.08)" }}
    >
      <div className="row g-0">
        <div className="col-lg-4 d-none d-lg-flex">
          <div
            className="w-100 d-flex flex-column align-items-center justify-content-center text-white text-center position-relative overflow-hidden"
            style={{
              background: "linear-gradient(160deg, #071414 0%, #00B5AD 100%)",
              padding: "2.5rem 1.75rem",
              minHeight: "100%",
            }}
          >
            <img
              src="/assets/images/logo/zalgo-white.png"
              alt="Zalgo Infotech"
              style={{ maxWidth: 120, opacity: 0.92, marginBottom: "1.75rem" }}
            />
            <div
              style={{
                width: 36,
                height: 2,
                background: "rgba(255,255,255,0.35)",
                margin: "0 auto 1.25rem",
                borderRadius: 2,
              }}
            ></div>
            <p style={{ fontSize: "1.05rem", fontWeight: 700, lineHeight: 1.5, marginBottom: "0.75rem", opacity: 0.95 }}>
              Share your thoughts with us
            </p>
            <p style={{ fontSize: "0.78rem", opacity: 0.6, lineHeight: 1.7, marginBottom: "2rem" }}>
              Your comment helps others learn and grows our community.
            </p>
          </div>
        </div>

        <div className="col-lg-8 bg-white">
          <div style={{ padding: "2.5rem 2.75rem" }}>
            <div className="tw-mb-7">
              <span className="fw-bold tw-text-xs text-uppercase" style={{ color: "#00B5AD", letterSpacing: "0.1em" }}>
                Join the discussion
              </span>
              <h4 className="fw-bold text-main-two-600 tw-mt-2 mb-0">Leave a Comment</h4>
              <p className="tw-text-sm text-neutral-400 tw-mt-2">Your email will not be published.</p>
            </div>

            {status === "done" && (
              <div
                className="tw-mb-5 tw-p-4 d-flex align-items-center tw-gap-3"
                style={{ borderRadius: 8, background: "#d1fae5", color: "#065f46" }}
              >
                <i className="ph-bold ph-check-circle"></i>
                <span className="tw-text-sm fw-medium">{message}</span>
              </div>
            )}
            {status === "error" && (
              <div className="tw-mb-5 tw-p-4" style={{ borderRadius: 8, background: "#fee2e2", color: "#991b1b" }}>
                <span className="tw-text-sm">{message}</span>
              </div>
            )}

            <form onSubmit={handleSubmit}>
              <div className="row gy-3">
                <div className="col-sm-6">
                  <label className="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2">
                    Full Name *
                  </label>
                  <input
                    type="text"
                    name="name"
                    className="w-100 border tw-text-sm"
                    style={{ padding: "0.7rem 1.1rem", borderColor: "#e5e7eb", borderRadius: 8 }}
                    placeholder="John Doe"
                    required
                  />
                </div>
                <div className="col-sm-6">
                  <label className="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2">
                    Email Address *
                  </label>
                  <input
                    type="email"
                    name="email"
                    className="w-100 border tw-text-sm"
                    style={{ padding: "0.7rem 1.1rem", borderColor: "#e5e7eb", borderRadius: 8 }}
                    placeholder="john@example.com"
                    required
                  />
                </div>
                <div className="col-sm-6">
                  <label className="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2">
                    Phone
                  </label>
                  <input
                    type="text"
                    name="phone"
                    className="w-100 border tw-text-sm"
                    style={{ padding: "0.7rem 1.1rem", borderColor: "#e5e7eb", borderRadius: 8 }}
                    placeholder="+1 234 567 890"
                  />
                </div>
                <div className="col-sm-6">
                  <label className="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2">
                    Website
                  </label>
                  <input
                    type="url"
                    name="website"
                    className="w-100 border tw-text-sm"
                    style={{ padding: "0.7rem 1.1rem", borderColor: "#e5e7eb", borderRadius: 8 }}
                    placeholder="https://yoursite.com"
                  />
                </div>
                <div className="col-12">
                  <label className="fw-semibold tw-text-xs text-uppercase text-main-two-600 d-block tw-mb-2">
                    Your Comment *
                  </label>
                  <textarea
                    name="comment"
                    className="w-100 border tw-text-sm"
                    style={{ padding: "0.7rem 1.1rem", borderColor: "#e5e7eb", borderRadius: 8, height: 130, resize: "vertical" }}
                    placeholder="Share your thoughts..."
                    required
                  ></textarea>
                </div>
                <div className="col-12">
                  <button
                    type="submit"
                    disabled={status === "loading"}
                    className="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-3 active--translate-y-2 rounded-0 tw-px-10 tw-py-4"
                    data-block="button"
                  >
                    <span className="button__flair"></span>
                    <span className="button__label d-flex align-items-center tw-gap-2">
                      {status === "loading" ? "Posting..." : "Post Comment"}{" "}
                      <i className="ph-bold ph-paper-plane-tilt"></i>
                    </span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  );
}
