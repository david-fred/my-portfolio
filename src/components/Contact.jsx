import { site } from '../content/site.js';

export default function Contact() {
  return (
    <section id="contact" className="mx-auto max-w-6xl px-6 py-28">
      <div className="relative isolate overflow-hidden rounded-3xl border border-line bg-surface px-8 py-20 text-center shadow-sm md:px-16">
        <div className="glow" aria-hidden="true" style={{ top: '-260px' }} />

        <p className="font-mono text-sm font-medium uppercase tracking-[0.2em] text-accent">04</p>
        <h2 className="mt-4 font-display text-4xl font-semibold tracking-tight md:text-6xl">
          Let's build something.
        </h2>
        <p className="mx-auto mt-6 max-w-lg text-muted">
          Remote roles go through LinkedIn. Freelance projects start on Upwork.
        </p>

        <div className="mt-10 flex flex-wrap justify-center gap-3">
          <a
            href={site.linkedin}
            target="_blank"
            rel="noreferrer"
            className="rounded-full bg-ink px-6 py-3 text-sm font-medium text-canvas transition hover:bg-accent focus-visible:bg-accent active:scale-[0.98] active:bg-accent"
          >
            LinkedIn
          </a>
          <a
            href={site.upwork}
            target="_blank"
            rel="noreferrer"
            className="rounded-full border border-line px-6 py-3 text-sm font-medium text-ink transition hover:border-ink active:scale-[0.98]"
          >
            Upwork
          </a>
          <a
            href={site.github}
            target="_blank"
            rel="noreferrer"
            className="rounded-full border border-line px-6 py-3 text-sm font-medium text-ink transition hover:border-ink active:scale-[0.98]"
          >
            GitHub
          </a>
        </div>
      </div>
    </section>
  );
}