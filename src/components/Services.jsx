import { services } from '../content/site.js';

export default function Services() {
  return (
    <section id="services" className="mx-auto max-w-6xl px-6 py-20">
      <h2 className="text-2xl font-semibold md:text-3xl">How I can help</h2>
      <div className="mt-10 grid gap-6 md:grid-cols-3">
        {services.map((s) => (
          <div key={s.title} className="card border border-base-300 bg-base-200">
            <div className="card-body">
              <h3 className="card-title text-lg">{s.title}</h3>
              <p className="text-base-content/70">{s.body}</p>
            </div>
          </div>
        ))}
      </div>
    </section>
  );
}
