import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  output: "standalone",
  // Prisma's generated client uses dynamic requires that Next's build tracing
  // can miss, which would otherwise crash the standalone server at runtime.
  outputFileTracingIncludes: {
    "/*": ["./node_modules/.prisma/client/**/*"],
  },
};

export default nextConfig;
