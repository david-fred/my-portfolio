@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">My Projects</h1>
            <p class="text-xl text-gray-400">A collection of my work and side projects</p>
        </div>

        <!-- Category Filters -->
        @if($categories->count() > 0)
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <a href="{{ route('projects.index', ['category' => 'all']) }}" 
               class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $category === 'all' ? 'bg-blue-500 text-white' : 'bg-gray-800 text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                All
            </a>
            @foreach($categories as $cat)
            <a href="{{ route('projects.index', ['category' => $cat]) }}" 
               class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $category === $cat ? 'bg-blue-500 text-white' : 'bg-gray-800 text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                {{ $cat }}
            </a>
            @endforeach
        </div>
        @endif

        <!-- Projects Grid -->
        @if($projects->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <a href="{{ route('projects.show', $project->slug) }}" class="group">
                <div class="bg-gray-900 rounded-lg overflow-hidden border border-gray-800 hover:border-blue-500/50 transition-all duration-300 h-full flex flex-col">
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

                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-start justify-between mb-2">
                            <h3 class="text-xl font-semibold group-hover:text-blue-400 transition">{{ $project->title }}</h3>
                            <div class="flex items-center gap-2">
                                @if($project->category)
                                <span class="px-2 py-1 text-xs bg-blue-500/20 text-blue-400 rounded-full border border-blue-500/30">{{ $project->category }}</span>
                                @endif
                                @if($project->featured)
                                <span class="px-2 py-1 text-xs bg-yellow-500/20 text-yellow-400 rounded-full border border-yellow-500/30">Featured</span>
                                @endif
                            </div>
                        </div>

                        <p class="text-gray-400 mb-4 flex-1">{{ Str::limit($project->description, 120) }}</p>

                        @if($project->technologies)
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach(array_slice($project->technologies, 0, 4) as $tech)
                            <span class="px-2 py-1 text-xs bg-gray-800 rounded text-gray-300">{{ $tech }}</span>
                            @endforeach
                            @if(count($project->technologies) > 4)
                            <span class="px-2 py-1 text-xs bg-gray-800 rounded text-gray-400">+{{ count($project->technologies) - 4 }}</span>
                            @endif
                        </div>
                        @endif

                        <div class="flex items-center gap-4 text-sm">
                            @if($project->github_url)
                            <span class="text-gray-500 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                </svg>
                                Code
                            </span>
                            @endif
                            @if($project->live_url)
                            <span class="text-gray-500 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                                Live
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $projects->links() }}
        </div>
        @else
        <div class="text-center py-20">
            <svg class="w-24 h-24 mx-auto text-gray-700 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
            <h3 class="text-2xl font-semibold text-gray-400 mb-2">No projects yet</h3>
            <p class="text-gray-500">Check back soon for exciting new projects!</p>
        </div>
        @endif
    </div>
</div>
@endsection