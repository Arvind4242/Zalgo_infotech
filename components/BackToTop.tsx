"use client";

import { useEffect, useRef, useState } from "react";

export default function BackToTop() {
  const [active, setActive] = useState(false);
  const pathRef = useRef<SVGPathElement | null>(null);
  const pathLengthRef = useRef(0);

  useEffect(() => {
    if (pathRef.current) {
      pathLengthRef.current = pathRef.current.getTotalLength();
    }

    const update = () => {
      const scrollTop = window.scrollY;
      setActive(scrollTop > 50);

      if (pathRef.current && pathLengthRef.current) {
        const docHeight =
          document.documentElement.scrollHeight - window.innerHeight;
        const progress =
          docHeight > 0
            ? pathLengthRef.current -
              (scrollTop * pathLengthRef.current) / docHeight
            : pathLengthRef.current;
        pathRef.current.style.strokeDashoffset = String(progress);
      }
    };

    update();
    window.addEventListener("scroll", update, { passive: true });
    window.addEventListener("resize", update);
    return () => {
      window.removeEventListener("scroll", update);
      window.removeEventListener("resize", update);
    };
  }, []);

  function scrollToTop(e: React.MouseEvent) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  }

  return (
    <div
      className={`progress-wrap${active ? " active-progress" : ""}`}
      onClick={scrollToTop}
      role="button"
      aria-label="Back to top"
    >
      <svg
        className="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path
          ref={pathRef}
          d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
        />
      </svg>
    </div>
  );
}
