import Link from "next/link";
import { notFound } from "next/navigation";
import PageShell from "@/components/PageShell";
import BlogCommentForm from "@/components/BlogCommentForm";
import { getBlogBySlug, excerptOf } from "@/lib/blog";
import { routes } from "@/lib/routes";
import { buildMetadata } from "@/lib/seo";

export const dynamic = "force-dynamic";

export async function generateMetadata({
  params,
}: {
  params: Promise<{ slug: string }>;
}) {
  const { slug } = await params;
  const data = await getBlogBySlug(slug);
  if (!data) return { title: "Blog Post Not Found" };

  const { blog } = data;
  const description = blog.excerpt || excerptOf(blog.content, 155);
  const tags = Array.isArray(blog.tags) ? (blog.tags as string[]) : [];

  return buildMetadata({
    title: blog.title,
    description,
    keywords: [blog.category, ...tags].filter((v): v is string => Boolean(v)),
    path: routes.blogDetails(blog.slug),
    image: blog.image || undefined,
    type: "article",
  });
}

function formatDate(date: Date, opts: Intl.DateTimeFormatOptions) {
  return date.toLocaleDateString("en-US", opts);
}

export default async function BlogDetailsPage({
  params,
}: {
  params: Promise<{ slug: string }>;
}) {
  const { slug } = await params;
  const data = await getBlogBySlug(slug);
  if (!data) notFound();

  const { blog, recentBlogs, comments } = data;
  const tags = Array.isArray(blog.tags) ? (blog.tags as string[]) : [];
  const dateShown = blog.publishedAt ?? blog.createdAt;

  return (
    <PageShell>
      <section className="position-relative overflow-hidden" style={{ minHeight: "88vh" }}>
        <div className="position-absolute w-100 h-100 top-0 start-0">
          <img
            src={blog.image || "/assets/images/thumbs/blog-page-img1.png"}
            alt={blog.title}
            className="w-100 h-100 object-fit-cover"
            style={{ objectPosition: "center" }}
          />
          <div
            className="position-absolute w-100 h-100 top-0 start-0"
            style={{
              background:
                "linear-gradient(to bottom, rgba(7,20,20,0.25) 0%, rgba(7,20,20,0.55) 40%, rgba(7,20,20,0.97) 100%)",
            }}
          ></div>
        </div>

        <div
          className="position-relative h-100 d-flex flex-column justify-content-end"
          style={{ minHeight: "88vh", paddingBottom: "5rem" }}
        >
          <div className="container">
            <div className="d-flex align-items-center tw-gap-2 tw-mb-6">
              <Link href={routes.blog} style={{ color: "rgba(255,255,255,0.6)", textDecoration: "none", fontSize: "0.8rem", fontWeight: 500 }}>
                Blog
              </Link>
              <i className="ph ph-caret-right" style={{ color: "rgba(255,255,255,0.4)" }}></i>
              {blog.category && (
                <>
                  <Link
                    href={`${routes.blog}?category=${encodeURIComponent(blog.category)}`}
                    style={{ color: "rgba(255,255,255,0.6)", textDecoration: "none", fontSize: "0.8rem", fontWeight: 500 }}
                  >
                    {blog.category}
                  </Link>
                  <i className="ph ph-caret-right" style={{ color: "rgba(255,255,255,0.4)" }}></i>
                </>
              )}
              <span style={{ color: "rgba(255,255,255,0.5)", fontSize: "0.8rem" }}>{blog.title}</span>
            </div>

            {blog.category && (
              <div className="tw-mb-5">
                <Link
                  href={`${routes.blog}?category=${encodeURIComponent(blog.category)}`}
                  className="tw-py-2 tw-px-5 fw-semibold tw-text-xs text-white d-inline-block"
                  style={{ background: "#00B5AD", borderRadius: 50, textTransform: "uppercase", letterSpacing: "0.08em", textDecoration: "none" }}
                >
                  {blog.category}
                </Link>
              </div>
            )}

            <h1
              className="text-white fw-bold"
              style={{ fontSize: "clamp(1.9rem, 4vw, 3.4rem)", maxWidth: 860, lineHeight: 1.18, letterSpacing: "-0.02em" }}
            >
              {blog.title}
            </h1>

            <div className="d-flex align-items-center flex-wrap tw-mt-7" style={{ gap: "1.25rem" }}>
              <div className="d-flex align-items-center tw-gap-3">
                <div
                  className="tw-w-9 tw-h-9 rounded-circle d-flex align-items-center justify-content-center text-white"
                  style={{ background: "rgba(0,181,173,0.8)" }}
                >
                  <i className="ph-bold ph-user"></i>
                </div>
                <span className="text-white tw-text-sm fw-medium">{blog.authorName}</span>
              </div>
              <span style={{ color: "rgba(255,255,255,0.3)" }}>|</span>
              <div className="d-flex align-items-center tw-gap-2">
                <i className="ph ph-calendar-blank" style={{ color: "rgba(255,255,255,0.6)" }}></i>
                <span className="tw-text-sm" style={{ color: "rgba(255,255,255,0.75)" }}>
                  {formatDate(dateShown, { month: "long", day: "2-digit", year: "numeric" })}
                </span>
              </div>
              <span style={{ color: "rgba(255,255,255,0.3)" }}>|</span>
              <div className="d-flex align-items-center tw-gap-2">
                <i className="ph ph-clock" style={{ color: "rgba(255,255,255,0.6)" }}></i>
                <span className="tw-text-sm" style={{ color: "rgba(255,255,255,0.75)" }}>{blog.readTime}</span>
              </div>
              <span style={{ color: "rgba(255,255,255,0.3)" }}>|</span>
              <div className="d-flex align-items-center tw-gap-2">
                <i className="ph ph-chat-circle-dots" style={{ color: "rgba(255,255,255,0.6)" }}></i>
                <span className="tw-text-sm" style={{ color: "rgba(255,255,255,0.75)" }}>
                  {comments.length} Comment{comments.length !== 1 ? "s" : ""}
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="py-120 position-relative">
        <div className="container">
          <div className="row" style={{ alignItems: "flex-start" }}>
            <div className="col-xl-7 col-lg-8">
              <article
                className="blog-content tw-text-base text-neutral-600"
                style={{ lineHeight: 1.85 }}
                dangerouslySetInnerHTML={{ __html: blog.content ?? "" }}
              />

              <div
                className="d-flex flex-wrap justify-content-between align-items-start tw-gap-6 tw-mt-12 tw-pt-8"
                style={{ borderTop: "2px solid #f3f4f6" }}
              >
                {tags.length > 0 && (
                  <div className="d-flex align-items-center tw-gap-3 flex-wrap">
                    <span className="fw-bold text-main-two-600 tw-text-xs text-uppercase">Tags:</span>
                    {tags.map((tag) => (
                      <Link
                        key={tag}
                        href={`${routes.blog}?tag=${encodeURIComponent(tag)}`}
                        className="tw-px-4 tw-py-2 fw-medium tw-text-xs text-uppercase"
                        style={{ border: "1.5px solid #e5e7eb", color: "#1a1a4d", textDecoration: "none", borderRadius: 2 }}
                      >
                        {tag}
                      </Link>
                    ))}
                  </div>
                )}
              </div>
            </div>

            <div className="col-lg-4 d-none d-lg-block ps-xl-5 ps-lg-4">
              <div className="d-flex flex-column tw-gap-6">
                <div style={{ background: "#f9fafb", borderRadius: 14, padding: "1.75rem" }}>
                  <h6 className="fw-bold text-main-two-600 tw-mb-5 d-flex align-items-center tw-gap-3" style={{ fontSize: "0.85rem" }}>
                    <span style={{ width: 3, height: 18, background: "#00B5AD", display: "inline-block", borderRadius: 2 }}></span>
                    Recent Posts
                  </h6>
                  <div className="d-flex flex-column" style={{ gap: "1rem", marginTop: "1.25rem" }}>
                    {recentBlogs.length === 0 && (
                      <p style={{ fontSize: "0.82rem", color: "#9ca3af" }}>No recent posts.</p>
                    )}
                    {recentBlogs.map((recent) => (
                      <Link
                        key={recent.id}
                        href={routes.blogDetails(recent.slug)}
                        className="d-flex align-items-center tw-gap-4"
                        style={{ textDecoration: "none", paddingBottom: "1rem", borderBottom: "1px solid #eef0f3" }}
                      >
                        <div style={{ width: 72, height: 62, borderRadius: 8, overflow: "hidden", flexShrink: 0 }}>
                          <img
                            src={recent.image || "/assets/images/thumbs/recent-post-img1.png"}
                            alt={recent.title}
                            style={{ width: "100%", height: "100%", objectFit: "cover" }}
                          />
                        </div>
                        <div className="flex-grow-1">
                          <div className="d-flex align-items-center tw-gap-1 tw-mb-1">
                            <i className="ph ph-calendar-blank" style={{ color: "#00B5AD", fontSize: "0.75rem" }}></i>
                            <span style={{ fontSize: "0.7rem", fontWeight: 600, color: "#00B5AD" }}>
                              {formatDate(recent.publishedAt ?? recent.createdAt, { month: "short", day: "2-digit", year: "numeric" })}
                            </span>
                          </div>
                          <p className="fw-semibold" style={{ fontSize: "0.82rem", lineHeight: 1.45, margin: 0, color: "#1a1a4d" }}>
                            {recent.title}
                          </p>
                        </div>
                      </Link>
                    ))}
                  </div>
                  <Link
                    href={routes.blog}
                    className="d-flex align-items-center tw-gap-2 fw-bold"
                    style={{ fontSize: "0.75rem", textTransform: "uppercase", color: "#00B5AD", textDecoration: "none", marginTop: "1.1rem" }}
                  >
                    All Articles <i className="ph-bold ph-arrow-right"></i>
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section style={{ background: "#f9fafb", padding: "5rem 0 6rem" }}>
        <div className="container">
          <div className="row">
            <div className="col-xl-7 col-lg-8">
              {comments.length > 0 && (
                <div className="tw-mb-14">
                  <div className="d-flex align-items-center tw-gap-3 tw-mb-10">
                    <div
                      className="tw-w-9 tw-h-9 rounded-circle d-flex align-items-center justify-content-center text-white tw-text-sm fw-bold"
                      style={{ background: "#00B5AD" }}
                    >
                      {comments.length}
                    </div>
                    <h4 className="fw-bold text-main-two-600 mb-0">
                      Comment{comments.length !== 1 ? "s" : ""}
                    </h4>
                  </div>
                  <div className="d-flex flex-column" style={{ gap: "1.1rem" }}>
                    {comments.map((comment) => (
                      <div
                        key={comment.id}
                        className="d-flex tw-gap-5 bg-white"
                        style={{ padding: "1.5rem", borderRadius: 12, borderLeft: "3px solid #00B5AD" }}
                      >
                        <div
                          className="tw-w-11 tw-h-11 rounded-circle d-flex align-items-center justify-content-center text-white flex-shrink-0"
                          style={{ background: "linear-gradient(135deg, #00B5AD, #1a1a4d)" }}
                        >
                          <i className="ph ph-user"></i>
                        </div>
                        <div className="flex-grow-1">
                          <div className="d-flex align-items-center justify-content-between tw-mb-2">
                            <h6 className="fw-bold text-main-two-600 mb-0 tw-text-sm">{comment.name}</h6>
                            <span className="tw-text-xs text-neutral-400">
                              {formatDate(comment.createdAt, { day: "2-digit", month: "long", year: "numeric" })}
                            </span>
                          </div>
                          <p className="text-neutral-600 tw-text-sm mb-0" style={{ lineHeight: 1.75 }}>
                            {comment.comment}
                          </p>
                        </div>
                      </div>
                    ))}
                  </div>
                </div>
              )}

              <BlogCommentForm slug={blog.slug} />
            </div>
          </div>
        </div>
      </section>

      {recentBlogs.length > 0 && (
        <section className="py-120">
          <div className="container">
            <div className="d-flex align-items-end justify-content-between tw-mb-12 flex-wrap tw-gap-4">
              <div>
                <span className="fw-bold tw-text-xs text-uppercase" style={{ color: "#00B5AD" }}>Continue Reading</span>
                <h3 className="fw-bold text-main-two-600 tw-mt-2 mb-0">Related Articles</h3>
              </div>
              <Link href={routes.blog} className="d-flex align-items-center tw-gap-2 fw-semibold tw-text-sm" style={{ color: "#00B5AD", textDecoration: "none" }}>
                All Articles <i className="ph-bold ph-arrow-right"></i>
              </Link>
            </div>

            <div className="row gy-6">
              {recentBlogs.slice(0, 3).map((recent) => (
                <div className="col-lg-4 col-md-6" key={recent.id}>
                  <article className="h-100 bg-white overflow-hidden blog-card" style={{ borderRadius: 16, boxShadow: "0 3px 18px rgba(0,0,0,0.07)" }}>
                    <Link href={routes.blogDetails(recent.slug)} className="d-block overflow-hidden position-relative" style={{ height: 215 }}>
                      <img
                        src={recent.image || "/assets/images/thumbs/blog-page-img1.png"}
                        alt={recent.title}
                        className="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500"
                      />
                      <div className="position-absolute top-0 start-0 tw-m-4">
                        <span className="fw-bold tw-text-xs text-white" style={{ background: "rgba(0,181,173,0.9)", borderRadius: 5, padding: "0.3rem 0.65rem" }}>
                          {formatDate(recent.publishedAt ?? recent.createdAt, { day: "2-digit", month: "short" })}
                        </span>
                      </div>
                    </Link>
                    <div style={{ padding: "1.6rem 1.75rem 1.75rem" }}>
                      <div className="d-flex align-items-center tw-gap-3 tw-mb-3 flex-wrap">
                        <div className="d-flex align-items-center tw-gap-1">
                          <i className="ph ph-user" style={{ color: "#00B5AD" }}></i>
                          <span className="tw-text-xs text-neutral-400 fw-medium">{recent.authorName}</span>
                        </div>
                        <span style={{ color: "#e5e7eb" }}>•</span>
                        <div className="d-flex align-items-center tw-gap-1">
                          <i className="ph ph-clock" style={{ color: "#00B5AD" }}></i>
                          <span className="tw-text-xs text-neutral-400">{recent.readTime}</span>
                        </div>
                      </div>
                      <h5 className="fw-bold text-main-two-600 tw-mb-4" style={{ lineHeight: 1.4, fontSize: "1.05rem" }}>
                        <Link href={routes.blogDetails(recent.slug)} className="blog-title-link">
                          {recent.title}
                        </Link>
                      </h5>
                      <Link
                        href={routes.blogDetails(recent.slug)}
                        className="d-flex align-items-center tw-gap-2 fw-bold tw-text-xs text-uppercase"
                        style={{ color: "#00B5AD", textDecoration: "none", paddingTop: "0.75rem", borderTop: "1px solid #f3f4f6" }}
                      >
                        Read Article <i className="ph-bold ph-arrow-right"></i>
                      </Link>
                    </div>
                  </article>
                </div>
              ))}
            </div>
          </div>
        </section>
      )}
    </PageShell>
  );
}
