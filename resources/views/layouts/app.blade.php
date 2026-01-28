<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Home') – David Fred | Cloud DevOps Engineer</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.svg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|space-grotesk:400,500,600,700|playfair-display:400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="antialiased" style="background-color: var(--bg-primary); color: var(--text-primary);">
    <!-- Navigation -->
    <nav class="nav-bar fixed top-0 w-full z-50 backdrop-blur-md border-b" style="background-color: var(--nav-bg); border-color: var(--nav-border);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo/Name – original Inter font, red accent -->
                <a href="{{ route('home') }}" class="signature-logo text-2xl md:text-3xl transition-colors duration-300">
                    {{ config('portfolio.name', 'David Fred') }}
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}#home" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('home') }}#resume" class="nav-link">
                        Resume
                    </a>
                    <a href="{{ route('projects.index') }}" class="nav-link {{ request()->routeIs('projects.*') ? 'active' : '' }}">
                        Projects
                    </a>
                    <a href="{{ route('activities.index') }}" class="nav-link {{ request()->routeIs('activities.*') ? 'active' : '' }}">
                        Activities
                    </a>
                    <a href="{{ route('home') }}#contact" class="nav-link">
                        Contact
                    </a>
                    <a href="{{ route('blogs.index') }}" class="nav-link {{ request()->routeIs('blogs.*') ? 'active' : '' }}">
                        Blog
                    </a>
                    <a href="{{ route('gallery.index') }}" class="nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
                        Gallery
                    </a>
                    <!-- Theme Toggle -->
                    <button type="button" class="theme-toggle" id="theme-toggle" aria-label="Toggle theme">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" id="sun-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" id="moon-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center space-x-4">
                    <!-- Theme Toggle -->
                    <button type="button" class="theme-toggle" id="theme-toggle-mobile" aria-label="Toggle theme">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" id="sun-icon-mobile">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" id="moon-icon-mobile">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>
                    <button type="button" style="color: var(--text-secondary);" class="md:hidden" id="mobile-menu-button" aria-label="Toggle menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1" style="background-color: var(--bg-secondary);">
                    <a href="{{ route('home') }}#home" class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('home') }}#resume" class="mobile-nav-link">Resume</a>
                    <a href="{{ route('projects.index') }}" class="mobile-nav-link {{ request()->routeIs('projects.*') ? 'active' : '' }}">Projects</a>
                    <a href="{{ route('activities.index') }}" class="mobile-nav-link {{ request()->routeIs('activities.*') ? 'active' : '' }}">Activities</a>
                    <a href="{{ route('home') }}#contact" class="mobile-nav-link">Contact</a>
                    <a href="{{ route('blogs.index') }}" class="mobile-nav-link {{ request()->routeIs('blogs.*') ? 'active' : '' }}">Blog</a>
                    <a href="{{ route('gallery.index') }}" class="mobile-nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}">Gallery</a>
                </div>
            </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t mt-20" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4" style="color: var(--text-primary);">About</h3>
                    <p style="color: var(--text-secondary);">Building and securing systems end-to-end. Let's ship something solid.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4" style="color: var(--text-primary);">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" style="color: var(--text-secondary);" class="hover:opacity-80 transition">Home</a></li>
                        <li><a href="{{ route('projects.index') }}" style="color: var(--text-secondary);" class="hover:opacity-80 transition">Projects</a></li>
                        <li><a href="{{ route('activities.index') }}" style="color: var(--text-secondary);" class="hover:opacity-80 transition">Activities</a></li>
                        <li><a href="{{ route('contact') }}" style="color: var(--text-secondary);" class="hover:opacity-80 transition">Contact</a></li>
                        <li><a href="{{ route('blogs.index') }}" style="color: var(--text-secondary);" class="hover:opacity-80 transition">Blog</a></li>
                        <li><a href="{{ route('gallery.index') }}" style="color: var(--text-secondary);" class="hover:opacity-80 transition">Gallery</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4" style="color: var(--text-primary);">Connect</h3>
                    <div class="flex space-x-4">
                        @if(config('portfolio.social.github'))
                        <a href="{{ config('portfolio.social.github') }}" target="_blank" style="color: var(--text-secondary);" class="hover:opacity-80 transition" aria-label="GitHub">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                        </a>
                        @endif
                        @if(config('portfolio.social.linkedin'))
                        <a href="{{ config('portfolio.social.linkedin') }}" target="_blank" style="color: var(--text-secondary);" class="hover:opacity-80 transition" aria-label="LinkedIn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        @endif
                        @if(config('portfolio.social.twitter'))
                        <a href="{{ config('portfolio.social.twitter') }}" target="_blank" style="color: var(--text-secondary);" class="hover:opacity-80 transition" aria-label="Twitter">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="border-t mt-8 pt-8 text-center" style="border-color: var(--border-color); color: var(--text-secondary);">
                <p>&copy; {{ date('Y') }} All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Theme Toggle Functionality
        (function() {
            const themeToggle = document.getElementById('theme-toggle');
            const themeToggleMobile = document.getElementById('theme-toggle-mobile');
            const html = document.documentElement;

            // Get theme from localStorage or system preference
            function getTheme() {
                const stored = localStorage.getItem('theme');
                if (stored) return stored;

                // Check system preference
                if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    return 'dark';
                }
                return 'light';
            }

            // Set theme
            function setTheme(theme) {
                html.setAttribute('data-theme', theme);
                localStorage.setItem('theme', theme);
            }

            // Initialize theme on page load
            const currentTheme = getTheme();
            setTheme(currentTheme);

            // Toggle theme
            function toggleTheme() {
                const current = html.getAttribute('data-theme');
                const newTheme = current === 'dark' ? 'light' : 'dark';
                setTheme(newTheme);
            }

            // Add event listeners
            if (themeToggle) {
                themeToggle.addEventListener('click', toggleTheme);
            }
            if (themeToggleMobile) {
                themeToggleMobile.addEventListener('click', toggleTheme);
            }

            // Listen for system theme changes
            if (window.matchMedia) {
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                    // Only apply if user hasn't manually set a preference
                    if (!localStorage.getItem('theme')) {
                        setTheme(e.matches ? 'dark' : 'light');
                    }
                });
            }
        })();

        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    @stack('scripts')
</body>

</html>