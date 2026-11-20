import { projects } from '../content/site.js';

export default function Projects() {
  return (
    <section id="projects" className="mx-auto max-w-6xl px-6 py-20">
      <h2 className="text-2xl font-semibold md:text-3xl">Selected work</h2>
      <div className="mt-10 grid gap-6 md:grid-cols-2">
        {projects.map((p, i) => (
          <article key={i} className="card border border-base-300 bg-base-200">
            <div className="card-body">
              <h3 className="card-title">{p.title}</h3>
              <p className="text-base-content/70">{p.summary}</p>
              <ul className="mt-2 flex flex-wrap gap-2">
                {p.stack.map((t) => (
                  <li key={t} className="badge badge-ghost">{t}</li>
                ))}
              </ul>
              <div className="card-actions mt-4">
                {p.url && (
                  <a href={p.url} className="link link-primary" target="_blank" rel="noreferrer">Live</a>
                )}
                {p.repo && (
                  <a href={p.repo} className="link" target="_blank" rel="noreferrer">Code</a>
                )}
              </div>
            </div>
          </article>
        ))}
      </div>
    </section>
  );
}
