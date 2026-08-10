"use client";

import { useEffect, useState, type CSSProperties } from "react";
import { createPortal } from "react-dom";
import { useRouter } from "next/navigation";
import { routes } from "@/lib/routes";

type Variant = "blue" | "purple" | "white" | "outline-white" | "main";

const VARIANT_STYLES: Record<Variant, CSSProperties> = {
  blue: { background: "linear-gradient(135deg,#3b5bfd,#2946c9)", color: "#ffffff", border: "none" },
  purple: { background: "linear-gradient(135deg,#8b5cf6,#5f3dc4)", color: "#ffffff", border: "none" },
  white: { background: "#ffffff", color: "#161e2e", border: "none" },
  "outline-white": { background: "transparent", color: "#ffffff", border: "2px solid rgba(255,255,255,0.7)" },
  main: { background: "hsl(var(--main))", color: "#ffffff", border: "none" },
};

function InquiryModal({ plan, onClose }: { plan: string; onClose: () => void }) {
  const router = useRouter();
  const [status, setStatus] = useState<"idle" | "loading" | "error">("idle");
  const [error, setError] = useState("");

  useEffect(() => {
    const originalOverflow = document.body.style.overflow;
    document.body.style.overflow = "hidden";
    return () => {
      document.body.style.overflow = originalOverflow;
    };
  }, []);

  async function handleSubmit(e: React.FormEvent<HTMLFormElement>) {
    e.preventDefault();
    const form = e.currentTarget;
    const data = Object.fromEntries(new FormData(form).entries());

    setStatus("loading");
    setError("");
    try {
      const res = await fetch("/api/plan-inquiry", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ ...data, plan }),
      });
      const json = await res.json();
      if (!res.ok || !json.success) {
        setStatus("error");
        setError(json.error || "Something went wrong. Please try again.");
        return;
      }
      router.push(routes.thankyou);
    } catch {
      setStatus("error");
      setError("Something went wrong. Please try again.");
    }
  }

  return createPortal(
    <div
      style={{
        position: "fixed",
        inset: 0,
        background: "rgba(15,24,37,0.6)",
        zIndex: 2000,
        display: "flex",
        alignItems: "center",
        justifyContent: "center",
        padding: 16,
      }}
      onClick={onClose}
    >
      <div
        className="bg-white rounded-4 p-4 p-md-5 position-relative w-100"
        style={{ maxWidth: 480, maxHeight: "90vh", overflowY: "auto" }}
        onClick={(e) => e.stopPropagation()}
      >
        <button
          type="button"
          aria-label="Close"
          className="position-absolute border-0 bg-transparent"
          style={{ top: 18, right: 18, fontSize: "1.4rem", lineHeight: 1, color: "#161e2e" }}
          onClick={onClose}
        >
          <i className="ph ph-x"></i>
        </button>

        <span
          className="fw-semibold px-3 py-2 rounded-pill mb-3 d-inline-block"
          style={{ background: "hsl(var(--main-h),var(--main-s),95%)", color: "hsl(var(--main))", fontSize: "0.85rem" }}
        >
          {plan}
        </span>
        <h4 className="fw-bold mb-2">Let&apos;s get you started</h4>
        <p className="mb-4" style={{ color: "#4b5563", fontSize: "0.95rem" }}>
          Share a few details and our team will reach out within 24 hours to kick off your {plan}.
        </p>

        {status === "error" && (
          <div className="rounded-3 px-3 py-2 mb-3" style={{ background: "#fef2f2", color: "#b91c1c", fontSize: "0.85rem" }}>
            {error}
          </div>
        )}

        <form onSubmit={handleSubmit} className="d-flex flex-column gap-3">
          <input type="text" name="name" required placeholder="Your Name" className="form-control py-3 rounded-3" />
          <input type="email" name="email" required placeholder="Your Email" className="form-control py-3 rounded-3" />
          <input
            type="tel"
            name="phone"
            required
            placeholder="Your Phone / WhatsApp Number"
            className="form-control py-3 rounded-3"
          />
          <input
            type="text"
            name="website"
            placeholder="Existing Website or Instagram/Facebook Page (optional)"
            className="form-control py-3 rounded-3"
          />
          <textarea
            name="message"
            rows={3}
            placeholder="Tell us a bit about your business (optional)"
            className="form-control py-3 rounded-3"
          ></textarea>

          <button
            type="submit"
            disabled={status === "loading"}
            className="fw-semibold rounded-pill border-0 mt-2"
            style={{ background: "hsl(var(--main))", color: "#fff", padding: "16px 32px" }}
          >
            {status === "loading" ? "Sending..." : "Submit & Get Started"}
          </button>
        </form>
      </div>
    </div>,
    document.body
  );
}

export default function PlanInquiryButton({
  plan,
  label,
  variant = "main",
  fullWidth = false,
  size = "md",
  className = "",
}: {
  plan: string;
  label: string;
  variant?: Variant;
  fullWidth?: boolean;
  size?: "md" | "lg";
  className?: string;
}) {
  const [open, setOpen] = useState(false);
  const [mounted, setMounted] = useState(false);

  useEffect(() => {
    setMounted(true);
  }, []);

  return (
    <>
      <button
        type="button"
        className={`fw-bold rounded-pill border-0 ${fullWidth ? "w-100" : ""} ${className}`}
        style={{
          ...VARIANT_STYLES[variant],
          padding: size === "lg" ? "18px 40px" : "16px 32px",
          fontSize: size === "lg" ? "1.05rem" : "0.95rem",
          letterSpacing: 0.3,
          boxShadow: variant === "white" ? "0 8px 24px rgba(0,0,0,0.12)" : "none",
          cursor: "pointer",
        }}
        onClick={() => setOpen(true)}
      >
        {label}
      </button>

      {mounted && open && <InquiryModal plan={plan} onClose={() => setOpen(false)} />}
    </>
  );
}
