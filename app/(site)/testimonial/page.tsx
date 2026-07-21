import { buildMetadata } from "@/lib/seo";
import TestimonialClient from "./TestimonialClient";

export const metadata = buildMetadata({
  title: "Client Testimonials & Reviews",
  description:
    "Read verified client testimonials for Zalgo Infotech from Clutch, Upwork, and GoodFirms — real feedback on our web development and software delivery.",
  keywords: [
    "Zalgo Infotech reviews",
    "client testimonials",
    "Clutch reviews",
    "Upwork reviews",
    "GoodFirms reviews",
    "web development testimonials",
  ],
  path: "/testimonial",
});

export default function TestimonialPage() {
  return <TestimonialClient />;
}
