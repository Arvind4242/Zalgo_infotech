"use client";

import { useState } from "react";

const essentialFeatures = [
  "WordPress Core Updates",
  "Plugin & Theme Updates",
  "Weekly Backups",
  "Security Monitoring",
  "Uptime Monitoring",
  "Email Support",
];

const growthFeatures = [
  "Speed Optimization",
  "Monthly Performance Reports",
  "Database Optimization",
  "Priority Support",
  "Bug Fixes & Minor Changes",
];

const wooFeatures = [
  "WooCommerce Updates",
  "Checkout Monitoring",
  "Payment Gateway Support",
  "Store Maintenance",
  "Advanced Support",
];

export default function MaintenancePlansSection() {
  const [modalOpen, setModalOpen] = useState(false);
  const [selectedPlan, setSelectedPlan] = useState("");
  const [submitted, setSubmitted] = useState(false);

  function openPlanModal(plan: string) {
    setSelectedPlan(plan);
    setSubmitted(false);
    setModalOpen(true);
  }

  function closePlanModal() {
    setModalOpen(false);
  }

  function handleSubmit(e: React.FormEvent<HTMLFormElement>) {
    e.preventDefault();
    // No backend endpoint exists in the Next.js migration for this inquiry form yet,
    // so submission is simulated locally rather than wired to a fake API route.
    setSubmitted(true);
  }

  return (
    <section className="py-120 bg-white" id="plans">
      <div className="container">
        <div className="text-center tw-mb-14">
          <h2 className="splitTextStyleOne text-heading fw-bold tw-mb-4">WordPress Maintenance Plans</h2>
          <p className="text-neutral-500 fw-medium tw-text-lg">
            Choose the plan that best fits your business needs.
          </p>
        </div>
        <div className="row gy-4 justify-content-center align-items-stretch">
          {/* Essential Care */}
          <div className="col-lg-4 col-md-6">
            <div
              className="wpm-plan-card h-100 d-flex flex-column tw-p-8 rounded-4 border border-neutral-100"
              style={{ background: "#f9fafb" }}
            >
              <div className="tw-mb-6">
                <div className="text-neutral-500 fw-semibold text-uppercase tw-text-sm tw-mb-2">Essential Care</div>
                <div className="fs-1 fw-bold text-heading">
                  $99<span className="fs-5 fw-normal text-neutral-500">/month</span>
                </div>
              </div>
              <ul className="list-unstyled d-flex flex-column tw-gap-3 flex-grow-1 tw-mb-8">
                {essentialFeatures.map((f) => (
                  <li className="d-flex align-items-center tw-gap-3 text-neutral-700" key={f}>
                    <span className="text-main-600 fw-bold">&#10003;</span> {f}
                  </li>
                ))}
              </ul>
              <button
                type="button"
                onClick={() => openPlanModal("Essential Care – $99/month")}
                className="btn btn-outline-secondary rounded-pill tw-py-4 fw-semibold w-100 border border-neutral-300 text-heading"
              >
                Choose Plan
              </button>
            </div>
          </div>

          {/* Growth Care */}
          <div className="col-lg-4 col-md-6">
            <div
              className="wpm-plan-card h-100 d-flex flex-column tw-p-8 rounded-4 position-relative"
              style={{ background: "var(--main-600)", color: "#fff", boxShadow: "0 20px 60px rgba(0,109,117,0.25)" }}
            >
              <div className="position-absolute top-0 start-50 translate-middle">
                <span className="bg-yellow text-heading fw-bold tw-px-4 tw-py-1 rounded-pill tw-text-xs text-uppercase">
                  &#11088; Most Popular
                </span>
              </div>
              <div className="tw-mb-6 tw-mt-4">
                <div className="fw-semibold text-uppercase tw-text-sm tw-mb-2" style={{ color: "rgba(255,255,255,0.75)" }}>
                  Growth Care
                </div>
                <div className="fs-1 fw-bold text-white">
                  $199<span className="fs-5 fw-normal" style={{ color: "rgba(255,255,255,0.7)" }}>/month</span>
                </div>
              </div>
              <div className="tw-text-sm tw-mb-3 fw-medium" style={{ color: "rgba(255,255,255,0.85)" }}>
                Everything in Essential Care +
              </div>
              <ul className="list-unstyled d-flex flex-column tw-gap-3 flex-grow-1 tw-mb-8">
                {growthFeatures.map((f) => (
                  <li className="d-flex align-items-center tw-gap-3" style={{ color: "rgba(255,255,255,0.9)" }} key={f}>
                    <span className="fw-bold text-yellow">&#10003;</span> {f}
                  </li>
                ))}
              </ul>
              <button
                type="button"
                onClick={() => openPlanModal("Growth Care – $199/month")}
                className="btn bg-white text-main-600 fw-bold rounded-pill tw-py-4 w-100 hover--translate-y-1"
              >
                Choose Plan
              </button>
            </div>
          </div>

          {/* WooCommerce Care */}
          <div className="col-lg-4 col-md-6">
            <div
              className="wpm-plan-card h-100 d-flex flex-column tw-p-8 rounded-4 border border-neutral-100"
              style={{ background: "#f9fafb" }}
            >
              <div className="tw-mb-6">
                <div className="text-neutral-500 fw-semibold text-uppercase tw-text-sm tw-mb-2">WooCommerce Care</div>
                <div className="fs-1 fw-bold text-heading">Custom</div>
              </div>
              <div className="tw-text-sm tw-mb-3 fw-medium text-neutral-600">Everything in Growth Care +</div>
              <ul className="list-unstyled d-flex flex-column tw-gap-3 flex-grow-1 tw-mb-8">
                {wooFeatures.map((f) => (
                  <li className="d-flex align-items-center tw-gap-3 text-neutral-700" key={f}>
                    <span className="text-main-600 fw-bold">&#10003;</span> {f}
                  </li>
                ))}
              </ul>
              <button
                type="button"
                onClick={() => openPlanModal("WooCommerce Care – Custom")}
                className="hover--translate-y-1 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center group rounded-pill tw-py-4 fw-bold w-100"
                data-block="button"
              >
                <span className="button__flair"></span>
                <span className="button__label">Contact Us</span>
              </button>
            </div>
          </div>
        </div>
      </div>

      {/* Plan Inquiry Modal */}
      {modalOpen && (
        <div
          style={{
            display: "block",
            position: "fixed",
            inset: 0,
            zIndex: 99999,
            background: "rgba(13,27,42,0.6)",
            backdropFilter: "blur(4px)",
            overflowY: "auto",
          }}
          onClick={(e) => {
            if (e.target === e.currentTarget) closePlanModal();
          }}
        >
          <div style={{ minHeight: "100%", display: "flex", alignItems: "center", justifyContent: "center", padding: 24 }}>
            <div
              style={{
                background: "#fff",
                borderRadius: 20,
                width: "100%",
                maxWidth: 540,
                padding: 40,
                position: "relative",
                boxShadow: "0 32px 80px rgba(0,0,0,0.18)",
              }}
            >
              <button
                onClick={closePlanModal}
                style={{
                  position: "absolute",
                  top: 16,
                  right: 20,
                  background: "none",
                  border: "none",
                  fontSize: 22,
                  color: "#94a3b8",
                  cursor: "pointer",
                  lineHeight: 1,
                }}
                aria-label="Close"
              >
                &times;
              </button>

              <div style={{ marginBottom: 24 }}>
                <div style={{ fontSize: 12, fontWeight: 700, color: "#00B5AD", textTransform: "uppercase", letterSpacing: 1, marginBottom: 8 }}>
                  Get Started
                </div>
                <h3 style={{ fontSize: 22, fontWeight: 800, color: "#0d1b2a", margin: "0 0 6px" }}>
                  Tell Us About Your Website
                </h3>
                <p style={{ fontSize: 14, color: "#64748b", margin: 0 }}>
                  You selected: {selectedPlan}. Fill in your details and we&apos;ll reach out within 24 hours.
                </p>
              </div>

              <div
                style={{
                  background: "#E0F5F5",
                  borderRadius: 8,
                  padding: "10px 16px",
                  marginBottom: 24,
                  display: "flex",
                  alignItems: "center",
                  gap: 10,
                }}
              >
                <svg width={16} height={16} viewBox="0 0 24 24" fill="#00B5AD">
                  <path d="M12 2L3 7v5c0 5.25 3.75 10.15 9 11.35C17.25 22.15 21 17.25 21 12V7z" />
                </svg>
                <span style={{ fontSize: 14, fontWeight: 700, color: "#00B5AD" }}>Selected: {selectedPlan}</span>
              </div>

              {submitted ? (
                <div
                  style={{
                    background: "#dcfce7",
                    borderRadius: 10,
                    padding: "14px 18px",
                    marginBottom: 20,
                    color: "#166534",
                    fontWeight: 600,
                    fontSize: 14,
                  }}
                >
                  &#10003; Thank you! We&apos;ll get in touch within 24 hours.
                </div>
              ) : (
                <form onSubmit={handleSubmit}>
                  <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 16, marginBottom: 16 }}>
                    <div>
                      <label style={{ fontSize: 13, fontWeight: 600, color: "#374151", marginBottom: 5, display: "block" }}>
                        Full Name <span style={{ color: "#ef4444" }}>*</span>
                      </label>
                      <input
                        type="text"
                        name="name"
                        required
                        placeholder="John Smith"
                        style={{
                          width: "100%",
                          padding: "11px 14px",
                          border: "1.5px solid #e2e8f0",
                          borderRadius: 10,
                          fontSize: 14,
                          color: "#0d1b2a",
                          outline: "none",
                        }}
                      />
                    </div>
                    <div>
                      <label style={{ fontSize: 13, fontWeight: 600, color: "#374151", marginBottom: 5, display: "block" }}>
                        Email <span style={{ color: "#ef4444" }}>*</span>
                      </label>
                      <input
                        type="email"
                        name="email"
                        required
                        placeholder="you@example.com"
                        style={{
                          width: "100%",
                          padding: "11px 14px",
                          border: "1.5px solid #e2e8f0",
                          borderRadius: 10,
                          fontSize: 14,
                          color: "#0d1b2a",
                          outline: "none",
                        }}
                      />
                    </div>
                  </div>

                  <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 16, marginBottom: 16 }}>
                    <div>
                      <label style={{ fontSize: 13, fontWeight: 600, color: "#374151", marginBottom: 5, display: "block" }}>
                        Phone <span style={{ color: "#ef4444" }}>*</span>
                      </label>
                      <input
                        type="tel"
                        name="phone"
                        required
                        placeholder="+1 (555) 000-0000"
                        style={{
                          width: "100%",
                          padding: "11px 14px",
                          border: "1.5px solid #e2e8f0",
                          borderRadius: 10,
                          fontSize: 14,
                          color: "#0d1b2a",
                          outline: "none",
                        }}
                      />
                    </div>
                    <div>
                      <label style={{ fontSize: 13, fontWeight: 600, color: "#374151", marginBottom: 5, display: "block" }}>
                        Website URL
                      </label>
                      <input
                        type="text"
                        name="website"
                        placeholder="https://yoursite.com"
                        style={{
                          width: "100%",
                          padding: "11px 14px",
                          border: "1.5px solid #e2e8f0",
                          borderRadius: 10,
                          fontSize: 14,
                          color: "#0d1b2a",
                          outline: "none",
                        }}
                      />
                    </div>
                  </div>

                  <div style={{ marginBottom: 24 }}>
                    <label style={{ fontSize: 13, fontWeight: 600, color: "#374151", marginBottom: 5, display: "block" }}>
                      Message <span style={{ color: "#94a3b8", fontWeight: 400 }}>(Optional)</span>
                    </label>
                    <textarea
                      name="message"
                      rows={3}
                      placeholder="Tell us about your website or any specific needs..."
                      style={{
                        width: "100%",
                        padding: "11px 14px",
                        border: "1.5px solid #e2e8f0",
                        borderRadius: 10,
                        fontSize: 14,
                        color: "#0d1b2a",
                        outline: "none",
                        resize: "vertical",
                      }}
                    ></textarea>
                  </div>

                  <button
                    type="submit"
                    style={{
                      width: "100%",
                      padding: 14,
                      background: "#0d1b2a",
                      color: "#fff",
                      border: "none",
                      borderRadius: 10,
                      fontSize: 15,
                      fontWeight: 700,
                      cursor: "pointer",
                      display: "flex",
                      alignItems: "center",
                      justifyContent: "center",
                      gap: 8,
                    }}
                  >
                    Request Your Plan &#8594;
                  </button>
                </form>
              )}
            </div>
          </div>
        </div>
      )}
    </section>
  );
}
