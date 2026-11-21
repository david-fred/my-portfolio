import { projects } from '../content/site.js';
import SectionHeader from './SectionHeader.jsx';

export default function Projects() {
  return (
    <section id="projects" className="mx-auto max-w-6xl px-6 py-28">
      <SectionHeader index="02" title="Selected work" />
      <div className="grid gap-6 md:grid-cols-2">
        {projects.map((p, i) => {
          const primary = p.url ? 'primary' : 'secondary';

          return (
            <article
              key={i}
              className="group flex flex-col overflow-hidden rounded-2xl border border-line bg-surface transition duration-300 hover:border-accent/50 hover:shadow-lg"
            >
              <div className="relative aspect-video overflow-hidden bg-surface-2">
                {p.image ? (
                  <img
                    src={p.image}
                    alt={p.title}
                    loading="lazy"
                    className="size-full object-cover transition duration-700 group-hover:scale-105"
                  />
                ) : (
                  <div className="grid size-full place-items-center font-mono text-xs text-muted">project image</div>
                )}
              </div>

              <div className="flex flex-1 flex-col p-7">
                <h3 className="text-xl font-semibold tracking-tight">{p.title}</h3>
                <p className="mt-2 leading-relaxed text-muted">{p.summary}</p>

                <ul className="mt-5 flex flex-wrap gap-2 font-mono text-xs">
                  {p.stack.map((t) => (
                    <li key={t} className="rounded-md border border-line bg-surface-2 px-2 py-1 text-muted">
                      {t}
                    </li>
                  ))}
                </ul>

                {(p.url || p.repo) && (
                  <div className="mt-auto flex flex-wrap gap-3 pt-6">
                    {p.url && (
                      <a
                        href={p.url}
                        target="_blank"
                        rel="noreferrer"
                        className="rounded-full bg-ink px-5 py-2.5 text-sm font-medium text-canvas transition hover:bg-accent focus-visible:bg-accent active:scale-[0.98] active:bg-accent"
                      >
                        View live ↗
                      </a>
                    )}
                    {p.repo && (
                      <a
                        href={p.repo}
                        target="_blank"
                        rel="noreferrer"
                        className={
                          primary === 'secondary'
                            ? 'rounded-full bg-ink px-5 py-2.5 text-sm font-medium text-canvas transition hover:bg-accent focus-visible:bg-accent active:scale-[0.98] active:bg-accent'
                            : 'rounded-full border border-line px-5 py-2.5 text-sm font-medium text-ink transition hover:border-ink active:scale-[0.98]'
                        }
                      >
                        GitHub ↗
                      </a>
                    )}
                  </div>
                )}
              </div>
            </article>
          );
        })}
      </div>
    </section>
  );
}