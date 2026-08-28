# Abero Portfolio

A personal portfolio site for Marc Vincel Abero, built as a static site with [Vite](https://vitejs.dev/), [Tailwind CSS](https://tailwindcss.com/), and [Alpine.js](https://alpinejs.dev/).

## Pages

- `/` — Home (portfolio overview: about, education, projects)
- `about.html` — About Me
- `education.html` — Educational Background
- `projects.html` — Projects
- `github.html` — GitHub Profile

## Development

```bash
npm install
npm run dev
```

## Build

```bash
npm run build
```

Output is written to the `dist/` directory.

## Deploy (Vercel)

This project is configured for static deployment on [Vercel](https://vercel.com) via `vercel.json`:

- **Build Command:** `npm run build`
- **Output Directory:** `dist`

Clean URLs (`/about`, `/education`, `/projects`, `/github`) are handled by `vercel.json` rewrites.
