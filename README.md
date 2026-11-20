# Portfolio v2

React + Vite + Tailwind + DaisyUI. Static site, no backend, no database, no API.

## Run locally

    npm install
    npm run dev

## Edit content

Everything lives in `src/content/site.js`. Replace every item marked REPLACE.

## Turn sections on or off

Flip the flags in `features` inside `src/content/site.js`. Blog, gallery, and resources are off until their components exist.

## Deploy on Vercel (free)

1. Push this repo to GitHub.
2. In Vercel, click Add New > Project, import the repo, and keep the Vite preset.
3. Every push to `main` deploys to production. Every branch gets a preview URL.

## Before you go public

- Replace every REPLACE placeholder with real, verifiable content.
- Remove the `noindex` meta tag in `index.html`.
- Add your resume PDF to `public/` and set `resumeUrl`.
- Run `npm run build` and check the result on a phone.
- Connect a custom domain in Vercel if you have one.
