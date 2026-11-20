import { experience } from '../content/site.js';

export default function Experience() {
  return (
    <section id="experience" className="mx-auto max-w-6xl px-6 py-20">
      <h2 className="text-2xl font-semibold md:text-3xl">Experience</h2>
      <ol className="mt-10 space-y-10 border-l border-base-300 pl-6">
        {experience.map((e, i) => (
          <li key={i} className="relative">
            <span className="absolute -left-[31px] top-1.5 size-2.5 rounded-full bg-primary" aria-hidden="true" />
            <p className="text-sm text-base-content/50">{e.period}</p>
            <h3 className="text-lg font-semibold">{e.role} · {e.org}</h3>
            <ul className="mt-2 list-disc space-y-1 pl-5 text-base-content/70">
              {e.points.map((p) => (
                <li key={p}>{p}</li>
              ))}
            </ul>
          </li>
        ))}
      </ol>
    </section>
  );
}
