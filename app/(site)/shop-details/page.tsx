import { buildMetadata } from "@/lib/seo";
import ShopDetailsClient from "./ShopDetailsClient";

export const metadata = buildMetadata({
  title: "Product Details",
  description:
    "View full product details, specifications, sizes, and colors at Zalgo Infotech's shop. Compare options and add your preferred product to cart.",
  keywords: [
    "product details",
    "shop product specifications",
    "buy print products",
    "Zalgo Infotech shop",
    "product colors and sizes",
  ],
  path: "/shop-details",
});

export default function ShopDetailsPage() {
  return <ShopDetailsClient />;
}
