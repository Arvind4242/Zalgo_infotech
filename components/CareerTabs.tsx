"use client";

import { useState } from "react";

type JobOpening = {
  id: number;
  title: string;
  slug: string;
  icon: string;
  subtitle: string | null;
  badge: string;
  skills: unknown;
};

const EXPERIENCE_OPTIONS = [
  "0–1 years (Entry Level)",
  "2–3 years (Junior)",
  "4–6 years (Mid-level)",
  "7–10 years (Senior)",
  "10+ years (Lead / Architect)",
];

export default function CareerTabs({ jobOpenings }: { jobOpenings: JobOpening[] }) {
  const [activeSlug, setActiveSlug] = useState(jobOpenings[0]?.slug ?? "");

  if (jobOpenings.length === 0) {
    return (
      <div className="text-center py-5">
        <p style={{ color: "#7a7a8e", fontSize: "1.1rem" }}>
          No open positions at the moment. Check back soon!
        </p>
      </div>
    );
  }

  return (
    <>
      <div className="tabs-wrap">
        <div className="tabs-scroll">
          {jobOpenings.map((opening) => (
            <button
              key={opening.slug}
              type="button"
              className={`tab-btn bg-white common-shadow-eighteen d-flex fw-medium gap-2 hover-bg-main-600 hover-text-white p-3 text-neutral-500 tw-duration-200 tw-px-405 tw-py-105 tw-rounded-md tw-text-md tw-transition ${
                activeSlug === opening.slug ? "active" : ""
              }`}
              onClick={() => setActiveSlug(opening.slug)}
            >
              <span className="tab-icon">{opening.icon}</span>
              {opening.title}
            </button>
          ))}
        </div>
      </div>

      {jobOpenings.map((opening) => (
        <JobForm
          key={opening.slug}
          opening={opening}
          active={activeSlug === opening.slug}
        />
      ))}
    </>
  );
}

function JobForm({ opening, active }: { opening: JobOpening; active: boolean }) {
  const [status, setStatus] = useState<"idle" | "loading" | "done" | "error">("idle");
  const [message, setMessage] = useState("");
  const [fileName, setFileName] = useState("");
  const skills = Array.isArray(opening.skills) ? (opening.skills as string[]) : [];

  async function handleSubmit(e: React.FormEvent<HTMLFormElement>) {
    e.preventDefault();
    const form = e.currentTarget;
    const formData = new FormData(form);
    const skillValues = formData.getAll("skills[]");
    formData.delete("skills[]");
    formData.set("skills", JSON.stringify(skillValues));

    setStatus("loading");
    try {
      const res = await fetch("/api/apply", { method: "POST", body: formData });
      const json = await res.json();
      if (!res.ok || !json.success) {
        setStatus("error");
        setMessage(json.error || "Something went wrong. Please try again.");
        return;
      }
      setStatus("done");
      setMessage("Application submitted successfully!");
      form.reset();
      setFileName("");
    } catch {
      setStatus("error");
      setMessage("Something went wrong. Please try again.");
    }
  }

  return (
    <div
      className={`form-panel ${active ? "active" : ""}`}
      id={opening.slug}
      style={{ display: active ? "block" : "none" }}
    >
      <div className="form-top">
        <div>
          <div className="form-title">{opening.title}</div>
          {opening.subtitle && <div className="form-subtitle">{opening.subtitle}</div>}
        </div>
        <div className="form-badge">{opening.badge}</div>
      </div>
      <div className="form-body">
        {status === "done" && <div className="alert-success">{message}</div>}
        {status === "error" && <div className="alert-error">{message}</div>}

        <form onSubmit={handleSubmit}>
          <input type="hidden" name="job_type" value={opening.slug} />

          <div className="section-label">Personal Info</div>
          <div className="form-grid">
            <div className="field">
              <label>
                Full Name <span>*</span>
              </label>
              <input type="text" name="name" placeholder="Your full name" required />
            </div>
            <div className="field">
              <label>
                Email <span>*</span>
              </label>
              <input type="email" name="email" placeholder="you@example.com" required />
            </div>
            <div className="field">
              <label>Phone</label>
              <input type="tel" name="phone" placeholder="+91 00000 00000" />
            </div>
            <div className="field">
              <label>
                Experience <span>*</span>
              </label>
              <select name="experience" required defaultValue="">
                <option value="">Select level</option>
                {EXPERIENCE_OPTIONS.map((opt) => (
                  <option key={opt}>{opt}</option>
                ))}
              </select>
            </div>
          </div>

          {skills.length > 0 && (
            <>
              <div className="section-label">Skills</div>
              <div className="form-grid" style={{ marginBottom: "clamp(14px,2vw,24px)" }}>
                <div className="field full">
                  <label>Select your skills</label>
                  <div className="skills-grid">
                    {skills.map((skill) => (
                      <label className="skill-chip" key={skill}>
                        <input type="checkbox" name="skills[]" value={skill} />
                        <span>{skill}</span>
                      </label>
                    ))}
                  </div>
                </div>
              </div>
            </>
          )}

          <div className="section-label">Details</div>
          <div className="form-grid">
            <div className="field full">
              <label>Cover Letter</label>
              <textarea name="cover" placeholder="Tell us why you're perfect for this role…"></textarea>
            </div>
            <div className="field full">
              <label>
                Resume <span>*</span>
              </label>
              <div className="upload-zone">
                <input
                  type="file"
                  name="resume"
                  accept=".pdf,.doc,.docx"
                  required
                  onChange={(e) => setFileName(e.target.files?.[0]?.name ?? "")}
                />
                <span className="upload-icon">📎</span>
                <div className="upload-text">
                  {fileName ? (
                    <>
                      <strong>Selected:</strong> {fileName}
                    </>
                  ) : (
                    <>
                      <strong>Click to upload</strong> or drag &amp; drop
                    </>
                  )}
                </div>
                <div className="upload-hint">PDF, DOC, DOCX accepted</div>
              </div>
            </div>
          </div>

          <div className="submit-row">
            <span className="submit-note">We respond within 5–7 business days.</span>
            <button type="submit" className="submit-btn" disabled={status === "loading"}>
              {status === "loading" ? "Submitting..." : "Submit Application →"}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
}
