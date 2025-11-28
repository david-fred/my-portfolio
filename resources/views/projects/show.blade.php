@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="py-20 px-4">
    <div class="max-w-5xl mx-auto">
        <!-- Back Button -->
        <a href="{{ route('projects.index') }}" class="inline-flex items-center text-gray-400 hover:text-white mb-8 transition">
            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Projects
        </a>

        <!-- Project Header -->
        <div class="mb-12">
            <div class="flex items-start justify-between mb-4">
                <h1 class="text-4xl md:text-5xl font-bold">{{ $project->title }}</h1>
                @if($project->featured)
                <span class="px-3 py-1 text-sm bg-yellow-500/20 text-yellow-400 rounded-full border border-yellow-500/30">Featured</span>
                @endif
            </div>
            <p class="text-xl text-gray-400">{{ $project->description }}</p>
        </div>

        <!-- Project Image -->
        @if($project->image)
        <div class="mb-12 rounded-lg overflow-hidden border border-gray-800">
            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-auto">
        </div>
        @endif

        <!-- Project Info Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            @if($project->completed_at)
            <div class="bg-gray-900 rounded-lg p-6 border border-gray-800">
                <div class="text-gray-400 text-sm mb-2">Completed</div>
                <div class="text-lg font-semibold">{{ $project->completed_at->format('F Y') }}</div>
            </div>
            @endif

            @if($project->github_url)
            <a href="{{ $project->github_url }}" target="_blank" class="bg-gray-900 rounded-lg p-6 border border-gray-800 hover:border-blue-500/50 transition group">
                <div class="text-gray-400 text-sm mb-2">Source Code</div>
                <div class="text-lg font-semibold flex items-center group-hover:text-blue-400 transition">
                    View on GitHub
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </div>
            </a>
            @endif

            @if($project->live_url)
            <a href="{{ $project->live_url }}" target="_blank" class="bg-gray-900 rounded-lg p-6 border border-gray-800 hover:border-green-500/50 transition group">
                <div class="text-gray-400 text-sm mb-2">Live Demo</div>
                <div class="text-lg font-semibold flex items-center group-hover:text-green-400 transition">
                    Visit Website
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </div>
            </a>
            @endif
        </div>

        <!-- Technologies -->
        @if($project->technologies)
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Technologies Used</h2>
            <div class="flex flex-wrap gap-3">
                @foreach($project->technologies as $tech)
                <span class="px-4 py-2 bg-gray-900 border border-gray-800 rounded-lg hover:border-blue-500/50 transition">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Long Description -->
        @if($project->long_description)
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-6">About This Project</h2>
            <div class="bg-gray-900 rounded-lg p-8 border border-gray-800">
                <div class="prose prose-invert max-w-none text-gray-400 leading-relaxed">
                    {!! nl2br(e($project->long_description)) !!}
                </div>
            </div>
        </div>
        @endif

        <!-- CTA -->
        <div class="bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-lg p-8 border border-blue-500/20 text-center">
            <h3 class="text-2xl font-bold mb-4">Interested in working together?</h3>
            <p class="text-gray-400 mb-6">Let's discuss your next project</p>
            <a href="{{ route('contact') }}" class="btn-primary">
                Get In Touch
            </a>
        </div>
    </div>
</div>
@endsection