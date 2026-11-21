import { site } from '../content/site.js';

export default function Hero() {
  return (
    <section id="top" className="mx-auto grid max-w-6xl items-center gap-12 px-6 py-24 md:grid-cols-[1fr_auto] md:py-32">
      <div>
        <p className="badge badge-outline mb-6">{site.availability}</p>
        <h1 className="max-w-3xl text-4xl font-semibold leading-tight tracking-tight md:text-6xl">
          {site.headline}
        </h1>
        <p className="mt-6 max-w-2xl text-lg text-base-content/70">{site.intro}</p>
        <p className="mt-2 text-sm text-base-content/50">{site.role}</p>
        <div className="mt-10 flex flex-wrap gap-3">
          <a href="#projects" className="btn btn-primary">See my work</a>
          {site.resumeUrl && (
            <a href={site.resumeUrl} className="btn btn-ghost" download>Download CV</a>
          )}
        </div>
      </div>
      {site.headshot && (
        <img
          src={site.headshot}
          alt={`Portrait of ${site.name}`}
          className="size-48 rounded-full object-cover ring-2 ring-base-300 md:size-64"
        />
      )}
    </section>
  );
}