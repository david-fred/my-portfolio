import { site, features } from './content/site.js';
import Nav from './components/Nav.jsx';
import Hero from './components/Hero.jsx';
import Services from './components/Services.jsx';
import Projects from './components/Projects.jsx';
import Experience from './components/Experience.jsx';
import Contact from './components/Contact.jsx';

export default function App() {
  return (
    <div className="bg-grid min-h-screen overflow-x-clip">
      <Nav />
      <main>
        <Hero />
        {features.services && <Services />}
        {features.projects && <Projects />}
        {features.experience && <Experience />}
        <Contact />
      </main>
      <footer className="border-t border-line py-10">
        <div className="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-6 font-mono text-xs text-muted md:flex-row">
          <span>© {new Date().getFullYear()} {site.name}</span>
          <span>Built with React, Vite &amp; Tailwind</span>
        </div>
      </footer>
    </div>
  );
}