import { site, features } from '../content/site.js';

const links = [
  { label: 'Services', href: '#services', on: features.services },
  { label: 'Projects', href: '#projects', on: features.projects },
  { label: 'Experience', href: '#experience', on: features.experience },
  { label: 'Contact', href: '#contact', on: true },
].filter((l) => l.on);

export default function Nav() {
  return (
    <header className="sticky top-0 z-50 border-b border-base-300 bg-base-100/80 backdrop-blur">
      <nav className="mx-auto flex max-w-6xl items-center justify-between px-6 py-4" aria-label="Main">
        <a href="#top" className="font-semibold tracking-tight">{site.name}</a>

        <ul className="hidden gap-6 text-sm md:flex">
          {links.map((l) => (
            <li key={l.href}>
              <a className="link link-hover" href={l.href}>{l.label}</a>
            </li>
          ))}
        </ul>

        <details className="dropdown dropdown-end md:hidden">
          <summary className="btn btn-ghost btn-sm">Menu</summary>
          <ul className="menu dropdown-content z-10 mt-2 w-44 rounded-box bg-base-200 p-2 shadow">
            {links.map((l) => (
              <li key={l.href}>
                <a href={l.href}>{l.label}</a>
              </li>
            ))}
          </ul>
        </details>
      </nav>
    </header>
  );
}
