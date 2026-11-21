import { site, features } from '../content/site.js';

const links = [
  { label: 'Services', href: '#services', on: features.services },
  { label: 'Projects', href: '#projects', on: features.projects },
  { label: 'Experience', href: '#experience', on: features.experience },
  { label: 'Contact', href: '#contact', on: true },
].filter((l) => l.on);

export default function Nav() {
  return (
    <header className="fixed inset-x-0 top-0 z-50 border-b border-line bg-canvas">
      <nav className="mx-auto flex h-16 max-w-6xl items-center justify-between px-6" aria-label="Main">
        <a href="#top" className="font-display text-lg font-semibold tracking-tight text-ink">
          {site.name}
        </a>

        <ul className="hidden items-center gap-8 font-mono text-xs uppercase tracking-[0.18em] text-muted md:flex">
          {links.map((l) => (
            <li key={l.href}>
              <a className="group relative inline-block py-1 transition hover:text-ink" href={l.href}>
                {l.label}
                <span
                  aria-hidden="true"
                  className="absolute inset-x-0 -bottom-1 h-px origin-left scale-x-0 bg-accent transition duration-300 group-hover:scale-x-100"
                />
              </a>
            </li>
          ))}
        </ul>

        <details className="relative md:hidden">
          <summary className="cursor-pointer list-none rounded-lg border border-line bg-surface px-3 py-1.5 font-mono text-xs text-muted">
            Menu
          </summary>
          <ul className="absolute right-0 mt-3 w-40 rounded-xl border border-line bg-surface p-2 shadow-xl">
            {links.map((l) => (
              <li key={l.href}>
                <a className="block rounded-lg px-3 py-2 text-sm text-muted hover:bg-surface-2 hover:text-ink" href={l.href}>
                  {l.label}
                </a>
              </li>
            ))}
          </ul>
        </details>
      </nav>
    </header>
  );
}