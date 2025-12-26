@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center px-4 relative overflow-hidden">
    <!-- Animated background gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-purple-500/10 to-pink-500/10"></div>
    <div class="absolute inset-0 bg-[url('/public/grid.svg')] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>

    <div class="max-w-4xl mx-auto text-center relative z-10">
        <div class="inline-block animate-fade-in-up">
            <span class="inline-block px-4 py-2 mb-6 text-sm font-medium text-blue-400 bg-blue-400/10 rounded-full border border-blue-400/20">
                Welcome to my portfolio
            </span>
        </div>

        <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in-up animation-delay-100">
            Hi, I'm <span class="bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 bg-clip-text text-transparent">{{ config('portfolio.name') }}</span>
        </h1>

        <p class="text-xl md:text-2xl text-gray-400 mb-8 animate-fade-in-up animation-delay-200">
            {{ config('portfolio.tagline') }}
        </p>

        <p class="text-lg text-gray-500 mb-4 max-w-2xl mx-auto animate-fade-in-up animation-delay-300">
            {{ config('portfolio.bio') }}
        </p>

        <p class="text-sm text-gray-500 mb-12 max-w-2xl mx-auto animate-fade-in-up animation-delay-300">
            Background in cybersecurity, backend engineering, and systems networking.
        </p>

        <div class="flex flex-wrap gap-4 justify-center animate-fade-in-up animation-delay-400">
            <a href="{{ route('projects.index') }}" class="btn-primary">
                View My Work
            </a>
            <a href="{{ route('contact') }}" class="btn-secondary">
                Get In Touch
            </a>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
@if($featuredProjects->count() > 0)
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Featured Projects</h2>
            <p class="text-gray-400">Some of my recent work</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
            <a href="{{ route('projects.show', $project->slug) }}" class="group">
                <div class="bg-gray-900 rounded-lg overflow-hidden border border-gray-800 hover:border-blue-500/50 transition-all duration-300 hover:transform hover:scale-105">
                    @if($project->image)
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    @else
                    <div class="aspect-video bg-gradient-to-br from-blue-500/20 to-purple-500/20 flex items-center justify-center">
                        <svg class="w-16 h-16 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    @endif

                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 group-hover:text-blue-400 transition">{{ $project->title }}</h3>
                        <p class="text-gray-400 mb-4">{{ Str::limit($project->description, 100) }}</p>

                        @if($project->technologies)
                        <div class="flex flex-wrap gap-2">
                            @foreach(array_slice($project->technologies, 0, 3) as $tech)
                            <span class="px-3 py-1 text-xs bg-gray-800 rounded-full text-gray-300">{{ $tech }}</span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('projects.index') }}" class="btn-secondary">
                View All Projects →
            </a>
        </div>
    </div>
</section>
@endif

<!-- Recent Activities Section -->
@if($recentActivities->count() > 0)
<section class="py-20 px-4 bg-gray-900/50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Recent Activities</h2>
            <p class="text-gray-400">What I've been up to</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($recentActivities as $activity)
            <div class="bg-gray-900 rounded-lg p-6 border border-gray-800 hover:border-purple-500/50 transition">
                @if($activity->image)
                <img src="{{ $activity->image }}" alt="{{ $activity->title }}" class="w-full h-48 object-cover rounded-lg mb-4">
                @endif

                <h3 class="text-xl font-semibold mb-2">{{ $activity->title }}</h3>

                @if($activity->organization)
                <p class="text-blue-400 mb-2">{{ $activity->organization }}</p>
                @endif

                <p class="text-gray-400 mb-4">{{ Str::limit($activity->description, 120) }}</p>

                <div class="text-sm text-gray-500">
                    {{ $activity->start_date->format('M Y') }} -
                    {{ $activity->is_current ? 'Present' : $activity->end_date->format('M Y') }}
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('activities.index') }}" class="btn-secondary">
                View All Activities →
            </a>
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Let's Work Together</h2>
        <p class="text-xl text-gray-400 mb-8">
            Have a project in mind? Let's create something amazing together.
        </p>
        <a href="{{ route('contact') }}" class="btn-primary">
            Get In Touch
        </a>
    </div>
</section>
@endsection