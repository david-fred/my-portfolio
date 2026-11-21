// The only file you need to edit to change the site.
// Anything marked REPLACE is placeholder content. Do not publish with placeholders.

export const site = {
  name: 'David Fred', // REPLACE if this is not your name
  role: 'Full-stack developer · React & Laravel',
  headline: 'I build clear, reliable web products: React on the front, Laravel on the back.',
  intro:
    'REPLACE: two or three sentences on how you work, what you ship, and who you help. Keep it specific and true.',
  availability: 'Open to remote roles and freelance projects',
 headshot: '/dp.jpg',
  upwork: 'https://www.upwork.com/freelancers/~017b690d24f5614ba2',
  linkedin: 'https://www.linkedin.com/in/david-fred', // REPLACE
  github: 'https://github.com/david-fred', // REPLACE
  resumeUrl: '/David_Fred_Resume.pdf', // REPLACE: put a PDF in /public and set e.g. '/resume.pdf'
};

// Feature switches. Turn a section on or off without touching components.
// To turn on a section that isn't built yet, build its component first, then add it in App.jsx.
export const features = {
  services: true,
  projects: true,
  experience: true,
  blog: false,
  gallery: false,
  resources: false,
};

export const services = [
  {
    title: 'Laravel APIs & back-ends',
    body: 'Clean, tested Laravel services: authentication, business logic, integrations, and queues.',
  },
  {
    title: 'React front-ends',
    body: 'Responsive, accessible interfaces in React and Tailwind, built to match the design you have.',
  },
  {
    title: 'MVPs & rescues',
    body: 'Take an idea to a working product, or untangle an existing codebase so it can ship safely.',
  },
];

export const projects = [
  {
    title: 'REPLACE: project name',
    summary: 'REPLACE: the problem, what you built, and the measurable outcome.',
    stack: ['React', 'Laravel', 'MySQL'],
     image: '',
    url: null,
    repo: null,
  },
  {
    title: 'REPLACE: project name',
    summary: 'REPLACE: the problem, what you built, and the measurable outcome.',
    stack: ['Laravel', 'Queues', 'Stripe'],
     image: '',
    url: null,
    repo: null,
  },
];

export const experience = [
  {
    role: 'REPLACE: role title',
    org: 'REPLACE: company',
    period: 'YYYY – YYYY',
    points: ['REPLACE: one result you can back up with a number or a clear before-and-after.'],
  },
];
