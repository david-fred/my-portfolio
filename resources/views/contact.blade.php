@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="py-20 px-4">
    <div class="max-w-5xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Get In Touch</h1>
            <p class="text-xl" style="color: var(--text-secondary);">Have a question or want to work together?</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <div class="theme-card p-8">
                    <h2 class="text-2xl font-bold mb-6">Send a Message</h2>

                    @if(session('success'))
                    <div class="mb-6 p-4 rounded-lg theme-badge" style="border-color: var(--text-primary);">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium mb-2">Name *</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                class="w-full px-4 py-3 rounded-lg transition theme-input"
                                placeholder="Your name">
                            @error('name')
                            <p class="mt-1 text-sm" style="color: var(--text-primary);">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium mb-2">Email *</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                class="w-full px-4 py-3 rounded-lg transition theme-input"
                                placeholder="your.email@example.com">
                            @error('email')
                            <p class="mt-1 text-sm" style="color: var(--text-primary);">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium mb-2">Phone</label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                class="w-full px-4 py-3 rounded-lg transition theme-input"
                                placeholder="+1 (555) 123-4567">
                            @error('phone')
                            <p class="mt-1 text-sm" style="color: var(--text-primary);">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium mb-2">Subject</label>
                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                value="{{ old('subject') }}"
                                class="w-full px-4 py-3 rounded-lg transition theme-input"
                                placeholder="What's this about?">
                            @error('subject')
                            <p class="mt-1 text-sm" style="color: var(--text-primary);">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium mb-2">Message *</label>
                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                required
                                class="w-full px-4 py-3 rounded-lg transition theme-input resize-none"
                                placeholder="Tell me about your project...">{{ old('message') }}</textarea>
                            @error('message')
                            <p class="mt-1 text-sm" style="color: var(--text-primary);">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="w-full btn-primary">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="theme-card p-8">
                    <h2 class="text-2xl font-bold mb-6">Contact Information</h2>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6" style="color: var(--text-primary);" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm mb-1" style="color: var(--text-secondary);">Email</p>
                                <a href="mailto:{{ config('portfolio.contact.email') }}" class="theme-link transition">
                                    {{ config('portfolio.contact.email') }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6" style="color: var(--text-primary);" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm mb-1" style="color: var(--text-secondary);">Phone</p>
                                <a href="tel:{{ str_replace([' ', '(', ')', '-'], '', config('portfolio.contact.phone')) }}" class="theme-link transition">
                                    {{ config('portfolio.contact.phone') }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6" style="color: var(--text-primary);" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm mb-1" style="color: var(--text-secondary);">Location</p>
                                <p style="color: var(--text-primary);">{{ config('portfolio.contact.location') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="theme-card p-8">
                    <h2 class="text-2xl font-bold mb-6">Connect With Me</h2>

                    <div class="grid grid-cols-2 gap-4">
                        @if(config('portfolio.social.github'))
                        <a href="{{ config('portfolio.social.github') }}" target="_blank" class="flex items-center justify-center p-4 rounded-lg transition group theme-badge">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                            <span class="transition theme-link">GitHub</span>
                        </a>
                        @endif

                        @if(config('portfolio.social.linkedin'))
                        <a href="{{ config('portfolio.social.linkedin') }}" target="_blank" class="flex items-center justify-center p-4 rounded-lg transition group theme-badge">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                            <span class="transition theme-link">LinkedIn</span>
                        </a>
                        @endif

                        @if(config('portfolio.social.twitter'))
                        <a href="{{ config('portfolio.social.twitter') }}" target="_blank" class="flex items-center justify-center p-4 rounded-lg transition group theme-badge">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                            <span class="transition theme-link">Twitter</span>
                        </a>
                        @endif

                        @if(config('portfolio.social.substack'))
                        <a href="{{ config('portfolio.social.substack') }}" target="_blank" class="flex items-center justify-center p-4 rounded-lg transition group theme-badge">
                            <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                            <span class="transition theme-link">Substack</span>
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Availability -->
                @if(config('portfolio.available'))
                <div class="theme-card p-8" style="background-color: var(--bg-secondary);">
                    <div class="flex items-center mb-4">
                        <span class="w-3 h-3 rounded-full animate-pulse mr-3" style="background-color: var(--text-primary);"></span>
                        <h3 class="text-xl font-bold" style="color: var(--text-primary);">Available for Work</h3>
                    </div>
                    <p style="color: var(--text-secondary);">{{ config('portfolio.availability_text') }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection