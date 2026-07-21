"use client";

import { Suspense, useState } from "react";
import { useRouter, useSearchParams } from "next/navigation";

function LoginForm() {
  const router = useRouter();
  const searchParams = useSearchParams();
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");
  const [loading, setLoading] = useState(false);

  async function handleSubmit(e: React.FormEvent) {
    e.preventDefault();
    setLoading(true);
    setError("");

    try {
      const res = await fetch("/api/admin/login", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ email, password }),
      });
      const json = await res.json();
      if (!res.ok || !json.success) {
        setError(json.error || "Login failed.");
        setLoading(false);
        return;
      }
      router.push(searchParams.get("next") || "/admin");
      router.refresh();
    } catch {
      setError("Something went wrong. Please try again.");
      setLoading(false);
    }
  }

  return (
    <div
      style={{
        minHeight: "100vh",
        display: "flex",
        alignItems: "center",
        justifyContent: "center",
        background: "#f4f7f9",
        fontFamily: "system-ui, -apple-system, sans-serif",
      }}
    >
      <form
        onSubmit={handleSubmit}
        style={{
          background: "#fff",
          padding: "2.5rem",
          borderRadius: 16,
          boxShadow: "0 4px 32px rgba(26,35,50,0.09)",
          width: "100%",
          maxWidth: 380,
        }}
      >
        <img
          src="/assets/images/logo/zalgo_logo.png"
          alt="Zalgo Infotech"
          style={{ height: 32, marginBottom: "1.5rem" }}
        />
        <h1 style={{ fontSize: "1.3rem", fontWeight: 700, marginBottom: "0.3rem", color: "#1a2332" }}>
          Admin Login
        </h1>
        <p style={{ fontSize: "0.85rem", color: "#7a7a8e", marginBottom: "1.75rem" }}>
          Sign in to view form submissions.
        </p>

        {error && (
          <div
            style={{
              background: "#ffeaea",
              border: "1px solid #ff4d4d",
              color: "#b91c1c",
              padding: "10px 14px",
              borderRadius: 8,
              marginBottom: "1.25rem",
              fontSize: "0.85rem",
            }}
          >
            {error}
          </div>
        )}

        <div style={{ marginBottom: "1rem" }}>
          <label style={{ display: "block", fontSize: "0.8rem", fontWeight: 600, marginBottom: 6, color: "#4a4a5a" }}>
            Email
          </label>
          <input
            type="email"
            value={email}
            onChange={(e) => setEmail(e.target.value)}
            required
            style={{
              width: "100%",
              padding: "10px 14px",
              borderRadius: 8,
              border: "1.5px solid #dde4ea",
              fontSize: "0.9rem",
            }}
          />
        </div>

        <div style={{ marginBottom: "1.5rem" }}>
          <label style={{ display: "block", fontSize: "0.8rem", fontWeight: 600, marginBottom: 6, color: "#4a4a5a" }}>
            Password
          </label>
          <input
            type="password"
            value={password}
            onChange={(e) => setPassword(e.target.value)}
            required
            style={{
              width: "100%",
              padding: "10px 14px",
              borderRadius: 8,
              border: "1.5px solid #dde4ea",
              fontSize: "0.9rem",
            }}
          />
        </div>

        <button
          type="submit"
          disabled={loading}
          style={{
            width: "100%",
            padding: "12px",
            borderRadius: 100,
            border: "none",
            background: "#006d75",
            color: "#fff",
            fontWeight: 700,
            cursor: "pointer",
            fontSize: "0.9rem",
          }}
        >
          {loading ? "Signing in..." : "Sign In"}
        </button>
      </form>
    </div>
  );
}

export default function AdminLoginPage() {
  return (
    <Suspense fallback={null}>
      <LoginForm />
    </Suspense>
  );
}
