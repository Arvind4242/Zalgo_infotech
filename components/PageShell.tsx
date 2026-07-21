import Header from "@/components/Header";
import Footer from "@/components/Footer";
import ScriptReinitializer from "@/components/ScriptReinitializer";

export default function PageShell({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <div id="smooth-wrapper">
      <ScriptReinitializer />
      <Header />
      <div id="smooth-content">
        {children}
        <Footer />
      </div>
    </div>
  );
}
