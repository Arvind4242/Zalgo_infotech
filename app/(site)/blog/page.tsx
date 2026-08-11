import Link from "next/link";
import PageShell from "@/components/PageShell";
import { getBlogList, excerptOf, displayDate } from "@/lib/blog";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const metadata = buildMetadata({
  title: "Blog - Insights on Web Development, AI & Digital Trends",
  description:
    "Expert articles and insights from Zalgo Infotech on web development, AI automation, SaaS, ecommerce, and digital transformation strategy for growing businesses.",
  keywords: [
    "web development blog",
    "AI development insights",
    "software development articles",
    "digital transformation blog",
    "tech industry trends",
  ],
  path: "/blog",
});

function buildBlogHref(params: Record<string, string | undefined>) {
  const qs = new URLSearchParams();
  Object.entries(params).forEach(([k, v]) => {
    if (v) qs.set(k, v);
  });
  const query = qs.toString();
  return query ? `${routes.blog}?${query}` : routes.blog;
}

export default async function BlogPage({
  searchParams,
}: {
  searchParams: Promise<{ [key: string]: string | undefined }>;
}) {
  const sp = await searchParams;
  const page = Math.max(1, Number(sp.page) || 1);
  const search = sp.search?.trim() || undefined;
  const category = sp.category || undefined;
  const tag = sp.tag || undefined;

  const { blogs, page: currentPage, lastPage, categories, allTags } = await getBlogList({
    page,
    search,
    category,
    tag,
  });

  const hasFilters = Boolean(search || category || tag);
  const showFeatured = currentPage === 1 && !hasFilters && blogs.length > 0;
  const featuredPost = showFeatured ? blogs[0] : null;
  const gridBlogs = showFeatured ? blogs.slice(1) : blogs;

  return (
    <PageShell>
      <section
        className="position-relative overflow-hidden"
        style={{
          background: "linear-gradient(135deg, #071414 0%, #00B5AD 100%)",
          padding: "5.5rem 0 4rem",
        }}
      >
        <div className="container position-relative z-1">
          <div className="text-center">
            <div className="tw-mb-7">
              <img
                src="/assets/images/logo/zalgo-white.png"
                alt="Zalgo Infotech"
                style={{ maxHeight: 36, opacity: 0.92 }}
              />
            </div>
            <div className="tw-mb-5">
              <span
                className="fw-bold tw-text-xs text-uppercase rounded-pill"
                style={{
                  background: "rgba(255,255,255,0.12)",
                  color: "rgba(255,255,255,0.85)",
                  letterSpacing: "0.1em",
                  padding: "0.45rem 1.2rem",
                }}
              >
                Our Blog
              </span>
            </div>

            <h1
              className="text-white fw-bold"
              style={{
                fontSize: "clamp(2.4rem, 5vw, 3.8rem)",
                letterSpacing: "-0.025em",
                lineHeight: 1.15,
              }}
            >
              Insights &amp; Ideas
            </h1>
            <p
              style={{
                color: "rgba(255,255,255,0.65)",
                fontSize: "1.05rem",
                maxWidth: 480,
                margin: "1rem auto 0",
                lineHeight: 1.7,
              }}
            >
              Expert perspectives on technology, strategy, and digital
              innovation.
            </p>

            <div className="d-flex justify-content-center tw-mt-8">
              <form
                action={routes.blog}
                method="GET"
                className="position-relative"
                style={{ maxWidth: 460, width: "100%" }}
              >
                {category && (
                  <input type="hidden" name="category" value={category} />
                )}
                <input
                  type="text"
                  name="search"
                  defaultValue={search ?? ""}
                  className="w-100 tw-text-sm"
                  style={{
                    padding: "0.9rem 3.5rem 0.9rem 1.6rem",
                    borderRadius: 50,
                    border: "none",
                    outline: "none",
                    background: "rgba(255,255,255,0.14)",
                    color: "white",
                  }}
                  placeholder="Search articles..."
                />
                <button
                  type="submit"
                  className="position-absolute top-50 translate-middle-y tw-end-0 tw-me-5 border-0 bg-transparent"
                  style={{ color: "rgba(255,255,255,0.8)", cursor: "pointer" }}
                >
                  <i className="ph-bold ph-magnifying-glass"></i>
                </button>
              </form>
            </div>

            {categories.length > 0 && (
              <div
                className="d-flex justify-content-center flex-wrap tw-mt-6"
                style={{ gap: "0.5rem" }}
              >
                <Link
                  href={routes.blog}
                  className="fw-medium tw-text-xs text-uppercase rounded-pill"
                  style={{
                    padding: "0.45rem 1.1rem",
                    letterSpacing: "0.05em",
                    textDecoration: "none",
                    background: !hasFilters ? "white" : "rgba(255,255,255,0.14)",
                    color: !hasFilters ? "#00B5AD" : "rgba(255,255,255,0.8)",
                  }}
                >
                  All
                </Link>
                {categories.slice(0, 7).map((cat) => (
                  <Link
                    key={cat.category}
                    href={buildBlogHref({ category: cat.category })}
                    className="fw-medium tw-text-xs text-uppercase rounded-pill"
                    style={{
                      padding: "0.45rem 1.1rem",
                      letterSpacing: "0.05em",
                      textDecoration: "none",
                      background: category === cat.category ? "white" : "rgba(255,255,255,0.14)",
                      color: category === cat.category ? "#00B5AD" : "rgba(255,255,255,0.8)",
                    }}
                  >
                    {cat.category}
                  </Link>
                ))}
              </div>
            )}

            {(search || tag) && (
              <div className="d-flex justify-content-center align-items-center tw-gap-3 tw-mt-5 flex-wrap">
                {search && (
                  <span className="tw-text-xs fw-medium" style={{ color: "rgba(255,255,255,0.65)" }}>
                    Results for: <strong style={{ color: "white" }}>&quot;{search}&quot;</strong>
                  </span>
                )}
                {tag && (
                  <span className="tw-text-xs fw-medium" style={{ color: "rgba(255,255,255,0.65)" }}>
                    Tag: <strong style={{ color: "white" }}>#{tag}</strong>
                  </span>
                )}
                <Link href={routes.blog} className="tw-text-xs fw-semibold" style={{ color: "#22D3AA" }}>
                  <i className="ph-bold ph-x tw-me-1"></i>Clear
                </Link>
              </div>
            )}
          </div>
        </div>
      </section>

      <section className="py-120" style={{ background: "#f9fafb" }}>
        <div className="container">
          {blogs.length === 0 ? (
            <div className="text-center" style={{ padding: "5rem 0" }}>
              <div style={{ fontSize: "3.5rem", color: "#d1d5db", marginBottom: "1.25rem" }}>
                <i className="ph ph-newspaper"></i>
              </div>
              <h4 className="fw-bold text-main-two-600 tw-mb-3">No articles found</h4>
              <p className="text-neutral-400 tw-text-sm">
                Try adjusting your search or browse all posts.
              </p>
              {hasFilters && (
                <Link
                  href={routes.blog}
                  className="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-3 active--translate-y-2 rounded-0 tw-px-10 tw-py-4 tw-mt-8"
                >
                  <span className="button__label">Browse All Posts</span>
                </Link>
              )}
            </div>
          ) : (
            <>
              {featuredPost && (
                <div className="tw-mb-12">
                  <div
                    className="row align-items-stretch g-0 overflow-hidden bg-white"
                    style={{ borderRadius: 22, boxShadow: "0 8px 36px rgba(0,181,173,0.11)", minHeight: 440 }}
                  >
                    <div className="col-lg-6 overflow-hidden" style={{ minHeight: 300 }}>
                      <Link
                        href={routes.blogDetails(featuredPost.slug)}
                        className="d-block h-100 overflow-hidden position-relative"
                        style={{ minHeight: 300 }}
                      >
                        <img
                          src={featuredPost.image || "/assets/images/thumbs/blog-page-img1.png"}
                          alt={featuredPost.title}
                          className="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-700"
                          style={{ minHeight: 300 }}
                        />
                        <div className="position-absolute top-0 start-0 tw-m-5">
                          <span
                            className="fw-bold tw-text-xs text-white text-uppercase rounded-pill"
                            style={{ background: "rgba(0,181,173,0.88)", padding: "0.4rem 1rem" }}
                          >
                            Featured
                          </span>
                        </div>
                      </Link>
                    </div>
                    <div className="col-lg-6 d-flex align-items-center">
                      <div style={{ padding: "2.75rem 3rem" }}>
                        <div className="d-flex align-items-center tw-gap-3 tw-mb-5 flex-wrap">
                          {featuredPost.category && (
                            <span
                              className="fw-bold tw-text-xs text-uppercase rounded-pill"
                              style={{ background: "#E0F5F5", color: "#00B5AD", padding: "0.35rem 0.9rem" }}
                            >
                              {featuredPost.category}
                            </span>
                          )}
                          <span className="tw-text-xs text-neutral-400">
                            {displayDate(featuredPost.publishedAt, featuredPost.createdAt).toLocaleDateString("en-US", {
                              month: "long",
                              day: "2-digit",
                              year: "numeric",
                            })}
                          </span>
                        </div>
                        <h2
                          className="fw-bold text-main-two-600 tw-mb-4"
                          style={{ fontSize: "clamp(1.4rem, 2.5vw, 1.9rem)", lineHeight: 1.28 }}
                        >
                          <Link href={routes.blogDetails(featuredPost.slug)} className="blog-title-link">
                            {featuredPost.title}
                          </Link>
                        </h2>
                        <p className="text-neutral-600 tw-mb-8" style={{ lineHeight: 1.72, fontSize: "0.95rem" }}>
                          {featuredPost.excerpt || excerptOf(featuredPost.content, 190)}
                        </p>
                        <div
                          className="d-flex align-items-center justify-content-between flex-wrap"
                          style={{ gap: "1rem", paddingTop: "1.25rem", borderTop: "1px solid #f3f4f6" }}
                        >
                          <div className="d-flex align-items-center tw-gap-4">
                            <div className="d-flex align-items-center tw-gap-2">
                              <div
                                className="tw-w-8 tw-h-8 rounded-circle d-flex align-items-center justify-content-center text-white"
                                style={{ background: "#00B5AD" }}
                              >
                                <i className="ph-bold ph-user"></i>
                              </div>
                              <span className="tw-text-sm fw-medium text-neutral-600">{featuredPost.authorName}</span>
                            </div>
                            <span style={{ color: "#e5e7eb" }}>•</span>
                            <div className="d-flex align-items-center tw-gap-1">
                              <i className="ph ph-clock" style={{ color: "#00B5AD" }}></i>
                              <span className="tw-text-xs text-neutral-400">{featuredPost.readTime}</span>
                            </div>
                          </div>
                          <Link
                            href={routes.blogDetails(featuredPost.slug)}
                            className="d-flex align-items-center tw-gap-2 fw-bold tw-text-xs text-uppercase"
                            style={{ color: "#00B5AD", textDecoration: "none" }}
                          >
                            Read Article <i className="ph-bold ph-arrow-right"></i>
                          </Link>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              )}

              {gridBlogs.length > 0 && (
                <>
                  {showFeatured && (
                    <div className="d-flex align-items-center justify-content-between tw-mb-8 flex-wrap tw-gap-3">
                      <div>
                        <span className="fw-bold tw-text-xs text-uppercase" style={{ color: "#00B5AD" }}>
                          Latest Posts
                        </span>
                        <h4 className="fw-bold text-main-two-600 tw-mt-1 mb-0" style={{ fontSize: "1.35rem" }}>
                          More Articles
                        </h4>
                      </div>
                    </div>
                  )}

                  <div className="row gy-6">
                    {gridBlogs.map((post) => (
                      <div className="col-lg-4 col-md-6" key={post.id}>
                        <article
                          className="blog-card h-100 d-flex flex-column bg-white overflow-hidden"
                          style={{ borderRadius: 16, boxShadow: "0 2px 16px rgba(0,0,0,0.06)" }}
                        >
                          <div className="overflow-hidden position-relative" style={{ height: 218, flexShrink: 0 }}>
                            <Link href={routes.blogDetails(post.slug)} className="d-block h-100">
                              <img
                                src={post.image || "/assets/images/thumbs/blog-page-img1.png"}
                                alt={post.title}
                                className="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-700"
                              />
                            </Link>
                            <div className="position-absolute top-0 start-0 tw-m-4">
                              <span
                                className="fw-bold tw-text-xs text-white"
                                style={{ background: "rgba(0,181,173,0.88)", borderRadius: 6, padding: "0.3rem 0.65rem" }}
                              >
                                {displayDate(post.publishedAt, post.createdAt).toLocaleDateString("en-US", {
                                  day: "2-digit",
                                  month: "short",
                                })}
                              </span>
                            </div>
                            {post.category && (
                              <div className="position-absolute bottom-0 start-0 tw-m-4">
                                <span
                                  className="fw-semibold tw-text-xs text-white text-uppercase"
                                  style={{ background: "rgba(0,0,0,0.45)", borderRadius: 4, padding: "0.25rem 0.6rem" }}
                                >
                                  {post.category}
                                </span>
                              </div>
                            )}
                          </div>

                          <div className="d-flex flex-column flex-grow-1" style={{ padding: "1.5rem 1.75rem 1.75rem" }}>
                            <div className="d-flex align-items-center tw-gap-3 tw-mb-3 flex-wrap">
                              <div className="d-flex align-items-center tw-gap-1">
                                <i className="ph ph-user" style={{ color: "#00B5AD" }}></i>
                                <span className="tw-text-xs text-neutral-400 fw-medium">{post.authorName}</span>
                              </div>
                              <span style={{ color: "#e5e7eb" }}>•</span>
                              <div className="d-flex align-items-center tw-gap-1">
                                <i className="ph ph-chat-circle" style={{ color: "#00B5AD" }}></i>
                                <span className="tw-text-xs text-neutral-400">{post._count.comments}</span>
                              </div>
                              <span style={{ color: "#e5e7eb" }}>•</span>
                              <div className="d-flex align-items-center tw-gap-1">
                                <i className="ph ph-clock" style={{ color: "#00B5AD" }}></i>
                                <span className="tw-text-xs text-neutral-400">{post.readTime}</span>
                              </div>
                            </div>

                            <h5 className="fw-bold text-main-two-600 tw-mb-3" style={{ lineHeight: 1.4, fontSize: "1.05rem" }}>
                              <Link href={routes.blogDetails(post.slug)} className="blog-title-link">
                                {post.title}
                              </Link>
                            </h5>

                            <p
                              className="text-neutral-600 flex-grow-1"
                              style={{
                                fontSize: "0.875rem",
                                lineHeight: 1.7,
                                display: "-webkit-box",
                                WebkitLineClamp: 3,
                                WebkitBoxOrient: "vertical",
                                overflow: "hidden",
                              }}
                            >
                              {post.excerpt || excerptOf(post.content, 120)}
                            </p>

                            <div style={{ marginTop: "1.1rem", paddingTop: "1rem", borderTop: "1px solid #f3f4f6" }}>
                              <Link
                                href={routes.blogDetails(post.slug)}
                                className="d-flex align-items-center tw-gap-2 fw-bold tw-text-xs text-uppercase"
                                style={{ color: "#00B5AD", textDecoration: "none" }}
                              >
                                Read Article <i className="ph-bold ph-arrow-right"></i>
                              </Link>
                            </div>
                          </div>
                        </article>
                      </div>
                    ))}
                  </div>
                </>
              )}

              {lastPage > 1 && (
                <div className="tw-mt-14 d-flex justify-content-center">
                  <ul className="d-flex align-items-center tw-gap-2" style={{ listStyle: "none" }}>
                    {Array.from({ length: lastPage }, (_, i) => i + 1).map((p) => (
                      <li key={p}>
                        <Link
                          href={buildBlogHref({ search, category, tag, page: String(p) })}
                          className="d-flex align-items-center justify-content-center"
                          style={{
                            width: 36,
                            height: 36,
                            borderRadius: 8,
                            background: p === currentPage ? "#00B5AD" : "#fff",
                            color: p === currentPage ? "#fff" : "#1a1a4d",
                            border: "1px solid #e5e7eb",
                            textDecoration: "none",
                          }}
                        >
                          {p}
                        </Link>
                      </li>
                    ))}
                  </ul>
                </div>
              )}
            </>
          )}
        </div>
      </section>

      {allTags.length > 0 && (
        <section style={{ background: "white", padding: "2.5rem 0", borderTop: "1px solid #f3f4f6" }}>
          <div className="container">
            <div className="d-flex align-items-center flex-wrap" style={{ gap: "0.65rem" }}>
              <div className="d-flex align-items-center tw-gap-2 tw-me-2">
                <i className="ph ph-tag" style={{ color: "#00B5AD" }}></i>
                <span className="fw-bold tw-text-xs text-uppercase text-main-two-600">Popular Tags:</span>
              </div>
              {allTags.slice(0, 10).map((t) => (
                <Link
                  key={t}
                  href={buildBlogHref({ tag: t })}
                  className="blog-tag-pill fw-medium tw-text-xs"
                  style={{
                    padding: "0.4rem 0.9rem",
                    borderRadius: 4,
                    textDecoration: "none",
                    background: tag === t ? "#00B5AD" : "#f3f4f6",
                    color: tag === t ? "white" : "#1a1a4d",
                    border: `1px solid ${tag === t ? "#00B5AD" : "#e5e7eb"}`,
                  }}
                >
                  {t}
                </Link>
              ))}
            </div>
          </div>
        </section>
      )}
    </PageShell>
  );
}
