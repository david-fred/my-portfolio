import { site } from '../content/site.js';

export default function Hero() {
  return (
    <section id="top" className="mx-auto max-w-6xl px-6 py-24 md:py-32">
      <p className="badge badge-outline mb-6">{site.availability}</p>
      <h1 className="max-w-3xl text-4xl font-semibold leading-tight tracking-tight md:text-6xl">
        {site.headline}
      </h1>
      <p className="mt-6 max-w-2xl text-lg text-base-content/70">{site.intro}</p>
      <p className="mt-2 text-sm text-base-content/50">{site.role}</p>

      <div className="mt-10 flex flex-wrap gap-3">
        <a href="#projects" className="btn btn-primary">See my work</a>
        <a href="#contact" className="btn btn-ghost">Start a conversation</a>
        {site.resumeUrl && (
          <a href={site.resumeUrl} className="btn btn-ghost" download>Resume (PDF)</a>
        )}
      </div>
    </section>
  );
}
