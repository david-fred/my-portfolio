import { site } from '../content/site.js';

export default function Contact() {
  return (
    <section id="contact" className="mx-auto max-w-6xl px-6 py-24 text-center">
      <h2 className="text-2xl font-semibold md:text-3xl">Let's talk</h2>
      <p className="mx-auto mt-4 max-w-xl text-base-content/70">
        For remote roles, reach me on LinkedIn. For freelance projects, Upwork is the fastest way to start.
      </p>
      <div className="mt-8 flex flex-wrap justify-center gap-3">
        <a href={site.linkedin} className="btn btn-primary" target="_blank" rel="noreferrer">LinkedIn</a>
        <a href={site.upwork} className="btn btn-ghost" target="_blank" rel="noreferrer">Upwork</a>
        <a href={site.github} className="btn btn-ghost" target="_blank" rel="noreferrer">GitHub</a>
      </div>
    </section>
  );
}