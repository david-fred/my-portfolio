import { site, projects } from '../content/site.js';

const stack = [...new Set(projects.flatMap((p) => p.stack))];

export default function Hero() {
  return (
    <section id="top" className="relative isolate mx-auto max-w-6xl px-6 pb-20 pt-40 md:pt-48">
      <div className="glow" aria-hidden="true" />

      <div className="grid items-center gap-16 md:grid-cols-[1.3fr_1fr]">
        <div className="animate-fade-up">
          <p className="inline-flex items-center gap-2 rounded-full border border-line bg-surface px-3 py-1.5 font-mono text-xs text-muted">
            <span className="pulse-dot size-2 rounded-full bg-accent" />
            {site.availability}
          </p>

          <h1 className="mt-8 font-display text-4xl font-semibold leading-[1.05] tracking-tight sm:text-5xl lg:text-6xl">
            {site.headline}
          </h1>

          <p className="mt-8 max-w-xl text-lg leading-relaxed text-muted">{site.intro}</p>
          <p className="mt-4 font-mono text-sm text-muted">{site.role}</p>

          <div className="mt-10 flex flex-wrap gap-3">
            <a
              href="#projects"
              className="rounded-full bg-ink px-6 py-3 text-sm font-medium text-canvas transition hover:bg-accent focus-visible:bg-accent active:scale-[0.98] active:bg-accent"
            >
              See selected work
            </a>
            {site.resumeUrl && (
              <a
                href={site.resumeUrl}
                download
                className="rounded-full border border-line bg-surface px-6 py-3 text-sm font-medium text-ink transition hover:border-ink active:scale-[0.98]"
              >
                Download CV
              </a>
            )}
          </div>
        </div>

        {site.headshot && (
          <div className="relative mx-auto w-full max-w-sm">
            <div className="absolute -inset-px rounded-3xl bg-linear-to-br from-accent/40 to-accent-2/30 blur-sm" />
            <img
              src={site.headshot}
              alt={`Portrait of ${site.name}`}
              className="relative aspect-[4/5] w-full rounded-3xl object-cover shadow-xl"
            />
          </div>
        )}
      </div>

      {stack.length > 0 && (
        <div className="mt-24 overflow-hidden border-y border-line py-5">
          <div className="marquee flex w-max gap-12 font-mono text-sm text-muted">
            {[...stack, ...stack].map((t, i) => (
              <span key={i} className="whitespace-nowrap">{t}</span>
            ))}
          </div>
        </div>
      )}
    </section>
  );
}