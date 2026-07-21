# Zalgo Infotech — Website

Next.js 16 (App Router) + Prisma/PostgreSQL rewrite of the company marketing site, including a
password-protected `/admin` panel for managing form submissions, blog posts, and career openings.

## Stack

- **Framework:** Next.js 16 (App Router, Turbopack)
- **Database:** PostgreSQL (Neon) via Prisma ORM
- **Auth:** Signed session cookie for `/admin` (see `lib/adminAuth.ts`, `proxy.ts`)
- **Email:** Nodemailer over SMTP

## Getting started

```bash
npm install
npx prisma db push   # creates/syncs tables in the database from prisma/schema.prisma
npm run dev           # http://localhost:3000
```

## Environment variables

Copy the variables documented inline in `.env` (already present in this repo for local dev) and
fill in real values before deploying:

- `DATABASE_URL` — Postgres connection string
- `SMTP_HOST` / `SMTP_PORT` / `SMTP_USER` / `SMTP_PASS` / `MAIL_FROM` — outgoing email
- `CONTACT_TO_EMAIL` / `JOB_APPLICATION_TO_EMAIL` / `PLAN_INQUIRY_TO_EMAIL` — where form
  notifications are sent
- `ADMIN_EMAIL` / `ADMIN_PASSWORD_HASH_B64` / `ADMIN_SESSION_SECRET` — `/admin` login. Generate a
  new password hash with:
  ```bash
  node -e "console.log(Buffer.from(require('bcryptjs').hashSync('yourNewPassword', 12)).toString('base64'))"
  ```

## Project structure

- `app/(site)/` — all public marketing pages (route group; doesn't affect URLs). Its `layout.tsx`
  loads the Bootstrap/GSAP/AOS/jQuery assets the original theme depends on.
- `app/admin/` — the admin panel (submissions dashboard, blog CMS, career openings CMS). Deliberately
  outside `(site)` so it never inherits the public site's CSS/scripts.
- `app/api/` — route handlers (contact form, job applications, plan inquiries, admin CRUD).
- `components/` — shared UI, grouped by area (`admin/`, `hire/`, `services/`, `case-studies/`, `home/`).
- `lib/` — Prisma client, mailer, auth, and other server-side utilities.
- `prisma/schema.prisma` — database schema.
- `public/assets/` — static CSS/JS/image assets carried over from the original theme.

## Production build

```bash
npm run build
npm run start
```

## Deploying

This is a standard Next.js app — deploy it on Vercel, or any Node host that can run
`npm run build && npm run start`. Make sure the environment variables above are set on the host,
and that `npx prisma db push` (or a proper migration) has been run against the production database
at least once.
