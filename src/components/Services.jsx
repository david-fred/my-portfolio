import { services } from '../content/site.js';
import SectionHeader from './SectionHeader.jsx';

export default function Services() {
  return (
    <section id="services" className="mx-auto max-w-6xl px-6 py-28">
      <SectionHeader index="01" title="How I can help" />
      <div className="grid gap-5 md:grid-cols-3">
        {services.map((s) => (
          <div
            key={s.title}
            className="group relative overflow-hidden rounded-2xl border border-line bg-surface p-8 transition duration-300 hover:-translate-y-1 hover:border-accent/50 hover:shadow-lg"
          >
            <h3 className="text-xl font-semibold tracking-tight">{s.title}</h3>
            <p className="mt-3 leading-relaxed text-muted">{s.body}</p>
            <div className="pointer-events-none absolute -right-16 -top-16 size-40 rounded-full bg-accent/5 blur-3xl transition duration-500 group-hover:bg-accent/15" />
          </div>
        ))}
      </div>
    </section>
  );
}