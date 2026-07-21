"use client";

import { useState } from "react";
import { useRouter } from "next/navigation";
import { routes } from "@/lib/routes";

export default function RegisterForm() {
  const router = useRouter();
  const [status, setStatus] = useState<"idle" | "loading" | "error">("idle");
  const [message, setMessage] = useState("");

  async function handleSubmit(e: React.FormEvent<HTMLFormElement>) {
    e.preventDefault();
    const form = e.currentTarget;
    const formData = new FormData(form);

    const name = String(formData.get("name") || "");
    const email = String(formData.get("email") || "");
    const password = String(formData.get("password") || "");
    const passwordConfirmation = String(formData.get("password_confirmation") || "");
    const terms = formData.get("terms") === "1";

    if (password !== passwordConfirmation) {
      setStatus("error");
      setMessage("Password and confirm password do not match.");
      return;
    }

    setStatus("loading");
    try {
      const res = await fetch("/api/register", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ name, email, password, terms }),
      });
      const json = await res.json();
      if (!res.ok || !json.success) {
        setStatus("error");
        setMessage(json.error || "Something went wrong. Please try again.");
        return;
      }
      form.reset();
      router.push(routes.login);
      return;
    } catch {
      setStatus("error");
      setMessage("Something went wrong. Please try again.");
    }
  }

  return (
    <>
      {status === "error" && (
        <div style={{ color: "white", background: "red", padding: 10, marginBottom: 15 }}>{message}</div>
      )}

      <form onSubmit={handleSubmit} className="form-submit d-flex flex-column tw-gap-6">
        {/* Name */}
        <div>
          <label className="fw-semibold">Enter your name</label>
          <input type="text" name="name" className="form-control" required />
        </div>

        {/* Username */}
        <div>
          <label className="fw-semibold">Username</label>
          <input type="text" name="username" className="form-control" required />
        </div>

        {/* Email */}
        <div>
          <label className="fw-semibold">Email</label>
          <input type="email" name="email" className="form-control" required />
        </div>

        {/* Password */}
        <div>
          <label className="fw-semibold">Create Password</label>
          <input type="password" name="password" className="form-control" required />
        </div>

        {/* Confirm Password */}
        <div>
          <label className="fw-semibold">Confirm Password</label>
          <input type="password" name="password_confirmation" className="form-control" required />
        </div>

        {/* Terms */}
        <div className="form-check">
          <input type="checkbox" name="terms" value="1" className="form-check-input" required />
          <label className="form-check-label">I agree to Terms</label>
        </div>

        <button type="submit" className="btn btn-primary w-100" disabled={status === "loading"}>
          {status === "loading" ? "Creating account..." : "Create account"}
        </button>
      </form>
    </>
  );
}
