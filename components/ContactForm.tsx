"use client";

import { useEffect, useRef, useState } from "react";
import { useRouter } from "next/navigation";
import { routes } from "@/lib/routes";

declare global {
  interface Window {
    intlTelInput?: (input: HTMLInputElement, options: Record<string, unknown>) => unknown;
  }
}

export default function ContactForm() {
  const router = useRouter();
  const phoneRef = useRef<HTMLInputElement | null>(null);
  const [status, setStatus] = useState<"idle" | "loading" | "done" | "error">("idle");
  const [message, setMessage] = useState("");
  const [fileName, setFileName] = useState("");

  useEffect(() => {
    let cancelled = false;

    const init = () => {
      if (cancelled || !phoneRef.current || !window.intlTelInput) return false;
      window.intlTelInput(phoneRef.current, {
        initialCountry: "us",
        separateDialCode: true,
        preferredCountries: ["us", "gb", "in"],
        autoPlaceholder: "polite",
        formatOnDisplay: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
      });
      return true;
    };

    if (!init()) {
      const interval = setInterval(() => {
        if (init()) clearInterval(interval);
      }, 150);
      return () => {
        cancelled = true;
        clearInterval(interval);
      };
    }
  }, []);

  async function handleSubmit(e: React.FormEvent<HTMLFormElement>) {
    e.preventDefault();
    const form = e.currentTarget;
    const formData = new FormData(form);

    setStatus("loading");
    try {
      const res = await fetch("/api/contact", { method: "POST", body: formData });
      const json = await res.json();
      if (!res.ok || !json.success) {
        setStatus("error");
        setMessage(json.error || "Something went wrong. Please try again.");
        return;
      }
      form.reset();
      setFileName("");
      router.push(routes.thankyou);
      return;
    } catch {
      setStatus("error");
      setMessage("Something went wrong. Please try again.");
    }
  }

  return (
    <div className="form-box">
      <h3>Send us a message</h3>

      {status === "done" && (
        <div style={{ color: "white", background: "green", padding: 10, marginBottom: 15 }}>{message}</div>
      )}
      {status === "error" && (
        <div style={{ color: "white", background: "red", padding: 10, marginBottom: 15 }}>{message}</div>
      )}

      <form onSubmit={handleSubmit}>
        <div className="form-row">
          <input type="text" name="name" placeholder="Your Name" required />
          <input type="email" name="email" placeholder="Your Email" required />
        </div>

        <div className="form-row">
          <select className="select" name="budget" required defaultValue="">
            <option value="">Select Budget</option>
            <option value="$100 or less">$100 or less</option>
            <option value="$500 - $1000">$500 - $1000</option>
            <option value="$1000 - $1500">$1000 - $1500</option>
            <option value="$1500 - $2000">$1500 - $2000</option>
            <option value="Over $2000">Over $2000</option>
          </select>

          <input id="phone" ref={phoneRef} type="tel" name="phone" required />
        </div>

        <select className="select" name="service" required defaultValue="">
          <option value="">Select Services</option>
          {[
            "Web Development",
            "CMS Development",
            "ReactJS Development",
            "Shopify Development",
            "NodeJS Development",
            "E-Commerce Development",
            "Python Development",
            "AI Development",
            "Laravel Development",
            "Maintenance Services",
            "SEO Services",
            "Digital Marketing",
          ].map((s) => (
            <option key={s} value={s}>
              {s}
            </option>
          ))}
        </select>

        <textarea name="message" placeholder="How can we help you?" required></textarea>

        <div className="upload-box" id="uploadBox">
          <input
            type="file"
            name="additional_document"
            id="additional_document"
            onChange={(e) => setFileName(e.target.files?.[0]?.name ?? "")}
          />
          {!fileName ? (
            <div className="upload-content gap-4">
              <div className="icon">
                <svg width="50" height="33" viewBox="0 0 50 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M40.8594 13.5268C40.8594 13.3929 40.8817 13.2589 40.8817 13.125C40.8817 5.87054 35.1004 0 27.9688 0C22.8237 0 18.404 3.05804 16.3281 7.47768C15.4241 7.02009 14.4085 6.75223 13.3371 6.75223C10.0446 6.75223 7.29911 9.19643 6.77455 12.3884C2.82366 13.75 0 17.5335 0 21.9866C0 27.5893 4.47545 32.1429 9.98884 32.1429H21.4286V23.2143H16.0491L25 13.8728L33.9509 23.2031H28.5714V32.1317H40.8817C45.9263 32.1317 50 27.9464 50 22.8237C50 17.7009 45.904 13.5379 40.8594 13.5268Z"
                    fill="#006d75"
                  ></path>
                </svg>
              </div>
              <div className="d-flex flex-column">
                <h3>Upload document</h3>
                <p>
                  Drag And Drop Or <span>Browse Your File</span> (Max upload size : 10MB)
                </p>
              </div>
            </div>
          ) : (
            <div className="file-info">
              <div className="icon">
                <svg width="50" height="33" viewBox="0 0 50 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M40.8594 13.5268C40.8594 13.3929 40.8817 13.2589 40.8817 13.125C40.8817 5.87054 35.1004 0 27.9688 0C22.8237 0 18.404 3.05804 16.3281 7.47768C15.4241 7.02009 14.4085 6.75223 13.3371 6.75223C10.0446 6.75223 7.29911 9.19643 6.77455 12.3884C2.82366 13.75 0 17.5335 0 21.9866C0 27.5893 4.47545 32.1429 9.98884 32.1429H21.4286V23.2143H16.0491L25 13.8728L33.9509 23.2031H28.5714V32.1317H40.8817C45.9263 32.1317 50 27.9464 50 22.8237C50 17.7009 45.904 13.5379 40.8594 13.5268Z"
                    fill="#006d75"
                  ></path>
                </svg>
              </div>
              <div className="file-text">
                <h3>Upload document</h3>
                <p>
                  Selected file: <span>{fileName}</span>{" "}
                  <button
                    type="button"
                    onClick={(e) => {
                      e.stopPropagation();
                      setFileName("");
                      const input = document.getElementById("additional_document") as HTMLInputElement | null;
                      if (input) input.value = "";
                    }}
                  >
                    ✖
                  </button>
                </p>
              </div>
            </div>
          )}
        </div>
        <button type="submit" disabled={status === "loading"}>
          {status === "loading" ? "Sending..." : "Send Message"}
        </button>
      </form>
    </div>
  );
}
