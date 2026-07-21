"use client";

import { useEffect, useState } from "react";

const COOKIE_NAME = "cookie_consent";

export default function CookieConsent() {
  const [visible, setVisible] = useState(false);

  useEffect(() => {
    // Reading document.cookie must happen client-side after mount (it isn't
    // available during SSR), so this one-time sync from an external source
    // into state on mount is the correct use of an effect here.
    const consented = document.cookie
      .split("; ")
      .some((c) => c.startsWith(`${COOKIE_NAME}=1`));
    // eslint-disable-next-line react-hooks/set-state-in-effect
    if (!consented) setVisible(true);
  }, []);

  function accept() {
    const date = new Date();
    date.setTime(date.getTime() + 365 * 24 * 60 * 60 * 1000);
    document.cookie = `${COOKIE_NAME}=1;expires=${date.toUTCString()};path=/`;
    setVisible(false);
  }

  if (!visible) return null;

  return (
    <div
      className="js-cookie-consent cookie-consent"
      style={{
        position: "fixed",
        bottom: 0,
        left: 0,
        width: "100%",
        background: "#111",
        color: "#fff",
        padding: 20,
        zIndex: 99999,
        boxShadow: "0 -2px 10px rgba(0,0,0,0.2)",
      }}
    >
      <div
        style={{
          maxWidth: 1200,
          margin: "0 auto",
          display: "flex",
          justifyContent: "space-between",
          alignItems: "center",
          flexWrap: "wrap",
          gap: 15,
        }}
      >
        <span style={{ fontSize: 14 }}>
          We use cookies to improve your browsing experience, serve
          personalized ads, and analyze traffic. By clicking &quot;Accept&quot;, you
          consent to our use of cookies.
        </span>
        <div>
          <button
            onClick={() => setVisible(false)}
            style={{
              background: "#444",
              color: "#fff",
              border: "none",
              padding: "8px 18px",
              cursor: "pointer",
              marginRight: 10,
            }}
          >
            Cancel
          </button>
          <button
            onClick={accept}
            style={{
              background: "#0d6efd",
              color: "#fff",
              border: "none",
              padding: "8px 18px",
              cursor: "pointer",
            }}
          >
            Accept
          </button>
        </div>
      </div>
    </div>
  );
}
