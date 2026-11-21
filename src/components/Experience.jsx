import { experience } from '../content/site.js';
import SectionHeader from './SectionHeader.jsx';

export default function Experience() {
  return (
    <section id="experience" className="mx-auto max-w-6xl px-6 py-28">
      <SectionHeader index="03" title="Experience" />
      <ol className="space-y-12">
        {experience.map((e, i) => (
          <li key={i} className="grid gap-4 border-t border-line pt-8 md:grid-cols-[200px_1fr] md:gap-10">
            <p className="font-mono text-sm text-muted">{e.period}</p>
            <div>
              <h3 className="text-xl font-semibold tracking-tight">{e.role}</h3>
              <p className="mt-1 text-accent">{e.org}</p>
              <ul className="mt-4 space-y-2 text-muted">
                {e.points.map((p) => (
                  <li key={p} className="flex gap-3">
                    <span className="mt-2.5 size-1 shrink-0 rounded-full bg-accent-2" />
                    <span>{p}</span>
                  </li>
                ))}
              </ul>
            </div>
          </li>
        ))}
      </ol>
    </section>
  );
}