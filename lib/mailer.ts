import nodemailer from "nodemailer";

const port = Number(process.env.SMTP_PORT ?? 587);

export const transporter = nodemailer.createTransport({
  host: process.env.SMTP_HOST,
  port,
  secure: port === 465, // 465 = implicit TLS, 587/others = STARTTLS
  auth: process.env.SMTP_USER
    ? { user: process.env.SMTP_USER, pass: process.env.SMTP_PASS }
    : undefined,
});

export async function sendMail(options: {
  to: string | string[];
  subject: string;
  html: string;
  cc?: string | string[];
}) {
  return transporter.sendMail({
    from: process.env.MAIL_FROM,
    ...options,
  });
}
