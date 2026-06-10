<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title'        => 'How AI is Transforming Web Development in 2025',
                'excerpt'      => 'Artificial Intelligence is no longer a futuristic concept — it\'s actively reshaping how developers build, test, and deploy web applications. From AI-assisted code generation to intelligent UX personalisation, here\'s everything you need to know.',
                'content'      => '<p>Artificial Intelligence is no longer a futuristic concept — it\'s actively reshaping how developers build, test, and deploy modern web applications. From AI-assisted code generation to intelligent UX personalisation, the landscape of web development has evolved dramatically.</p>

<h2>AI-Powered Code Generation</h2>
<p>Tools like GitHub Copilot, Cursor, and Claude Code are enabling developers to write boilerplate faster than ever. These assistants understand context, suggest complete functions, and even help debug complex logic — allowing teams to shift focus from syntax to architecture and user value.</p>

<blockquote><p>"Developers using AI assistance report up to 55% faster task completion on well-defined coding problems." — GitHub Research, 2024</p></blockquote>

<h2>Intelligent Testing & QA</h2>
<p>AI-driven testing tools can now auto-generate test cases, detect regressions before they reach production, and predict which modules are most likely to break based on historical patterns. This dramatically reduces QA cycles while improving coverage.</p>

<h2>Personalisation at Scale</h2>
<p>Machine learning models embedded in web applications can deliver hyper-personalised experiences — recommending content, adjusting UI layouts, and even adapting page copy based on user behaviour — all in real time without manual rule-writing.</p>

<h2>What This Means for Your Business</h2>
<p>Whether you\'re building a customer-facing platform or an internal tool, integrating AI capabilities is no longer optional for teams that want to stay competitive. At Zalgo Infotech, we help businesses identify the right AI integration points for measurable impact.</p>

<p>The future of web development is collaborative — humans and AI working together to ship better products, faster.</p>',
                'author_name'  => 'Zalgo Infotech',
                'category'     => 'Technology',
                'tags'         => ['AI', 'Web Development', 'Technology', 'Innovation'],
                'read_time'    => '5 min Read',
                'is_published' => true,
                'published_at' => now()->subDays(3),
            ],
            [
                'title'        => 'Why Laravel Remains the Top Choice for Enterprise Web Apps',
                'excerpt'      => 'Laravel has consistently ranked as one of the most popular PHP frameworks in the world. But what makes it the go-to choice for enterprise-grade applications in 2025? We break down the key reasons.',
                'content'      => '<p>Laravel has consistently ranked as one of the most popular PHP frameworks in the world. With over 75,000 GitHub stars and a thriving ecosystem, it\'s the go-to choice for teams building scalable, maintainable enterprise applications.</p>

<h2>Elegant Syntax & Developer Experience</h2>
<p>Laravel\'s expressive syntax reads almost like English. Its opinionated structure guides developers towards best practices — clean MVC separation, service containers, and powerful Eloquent ORM — making onboarding new team members significantly faster.</p>

<h2>Robust Ecosystem</h2>
<p>The Laravel ecosystem is unmatched. First-party packages cover virtually every enterprise need:</p>
<ul>
<li><strong>Sanctum / Passport</strong> — API authentication</li>
<li><strong>Horizon</strong> — Queue monitoring</li>
<li><strong>Telescope</strong> — Debug assistant</li>
<li><strong>Octane</strong> — High-performance application server</li>
<li><strong>Forge + Vapor</strong> — Seamless deployment</li>
</ul>

<h2>Security Out of the Box</h2>
<p>Laravel ships with CSRF protection, SQL injection prevention via parameterised queries, XSS filtering, and bcrypt password hashing by default. Security best practices are baked in rather than bolted on.</p>

<h2>Scalability</h2>
<p>With support for Redis caching, database read/write splitting, queue workers, and serverless deployment via Vapor, Laravel scales gracefully from startup MVPs to platforms handling millions of requests per day.</p>

<blockquote><p>"Laravel\'s queues and jobs system allowed us to scale our order processing pipeline to 2 million jobs per day without touching our core application logic." — Engineering Lead, E-commerce Platform</p></blockquote>

<p>At Zalgo Infotech, Laravel is our primary framework for enterprise web development — and for good reason. If you\'re planning a new platform or modernising a legacy system, let\'s talk.</p>',
                'author_name'  => 'Zalgo Infotech',
                'category'     => 'Web Development',
                'tags'         => ['Laravel', 'PHP', 'Backend', 'Enterprise'],
                'read_time'    => '6 min Read',
                'is_published' => true,
                'published_at' => now()->subDays(8),
            ],
            [
                'title'        => 'The Ultimate Guide to SEO for Tech Companies in 2025',
                'excerpt'      => 'Technical SEO has grown far beyond meta tags and keywords. In 2025, winning organic search requires a deep understanding of Core Web Vitals, structured data, AI-generated content signals, and topical authority. Here\'s your complete playbook.',
                'content'      => '<p>Technical SEO has grown far beyond meta tags and keywords. In 2025, winning organic search requires a deep understanding of Core Web Vitals, structured data, AI-generated content signals, and topical authority. Here\'s your complete playbook.</p>

<h2>Core Web Vitals Still Matter — A Lot</h2>
<p>Google\'s page experience signals remain a significant ranking factor. The three pillars — LCP (Largest Contentful Paint), INP (Interaction to Next Paint), and CLS (Cumulative Layout Shift) — directly affect both rankings and conversion rates.</p>
<ul>
<li><strong>LCP</strong> should be under 2.5 seconds</li>
<li><strong>INP</strong> should be under 200ms</li>
<li><strong>CLS</strong> should be below 0.1</li>
</ul>

<h2>Structured Data & Knowledge Graphs</h2>
<p>Implementing JSON-LD structured data for your services, FAQs, and team pages helps Google understand your entity relationships — boosting your chances of appearing in rich results, knowledge panels, and AI Overviews.</p>

<h2>Topical Authority Over Keyword Stuffing</h2>
<p>Modern search algorithms reward depth of expertise. Instead of targeting individual keywords, build content clusters — a pillar page supported by a network of in-depth supporting articles. This signals domain authority to both Google and AI-driven search features.</p>

<h2>Optimising for AI Overviews (SGE)</h2>
<p>Google\'s Search Generative Experience now surfaces AI-generated summaries at the top of results. To appear in these:</p>
<ul>
<li>Write clear, factual, well-structured content</li>
<li>Use headers and lists liberally</li>
<li>Cite sources and data</li>
<li>Maintain E-E-A-T (Experience, Expertise, Authoritativeness, Trustworthiness)</li>
</ul>

<h2>Page Speed & Technical Foundations</h2>
<p>A fast, crawlable site is table stakes. Ensure proper XML sitemaps, canonical tags, clean URL structures, and no crawl traps. Use server-side rendering or static generation for content-heavy pages.</p>

<blockquote><p>"Companies that invest in technical SEO alongside content strategy see 3–4× more organic traffic growth over 12 months compared to content-only approaches." — Ahrefs, 2024</p></blockquote>

<p>SEO is a long game — but it compounds. Zalgo Infotech\'s digital marketing team specialises in technical SEO strategies tailored for software and technology businesses. Get in touch to see how we can grow your organic presence.</p>',
                'author_name'  => 'Zalgo Infotech',
                'category'     => 'Digital Marketing',
                'tags'         => ['SEO', 'Digital Marketing', 'Content Strategy', 'Growth'],
                'read_time'    => '7 min Read',
                'is_published' => true,
                'published_at' => now()->subDays(15),
            ],
        ];

        foreach ($posts as $post) {
            Blog::firstOrCreate(['title' => $post['title']], $post);
        }
    }
}
