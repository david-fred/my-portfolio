import { site, features } from './content/site.js';
import Nav from './components/Nav.jsx';
import Hero from './components/Hero.jsx';
import Services from './components/Services.jsx';
import Projects from './components/Projects.jsx';
import Experience from './components/Experience.jsx';
import Contact from './components/Contact.jsx';

export default function App() {
  return (
    <div className="min-h-screen bg-base-100 text-base-content">
      <Nav />
      <main>
        <Hero />
        {features.services && <Services />}
        {features.projects && <Projects />}
        {features.experience && <Experience />}
        <Contact />
      </main>
      <footer className="border-t border-base-300 py-8 text-center text-sm text-base-content/50">
        © {new Date().getFullYear()} {site.name}
      </footer>
    </div>
  );
}
