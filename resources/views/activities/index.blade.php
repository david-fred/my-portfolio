@extends('layouts.app')

@section('title', 'Activities')

@section('content')
<div class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Activities & Experiences</h1>
            <p class="text-xl text-gray-400">My journey through various engagements and experiences</p>
        </div>

        <!-- Activities List -->
        @if($activities->count() > 0)
        <div class="space-y-8">
            @foreach($activities as $activity)
            <div class="bg-gray-900 rounded-lg overflow-hidden border border-gray-800 hover:border-purple-500/50 transition">
                <div class="md:flex">
                    @if($activity->image)
                    <div class="md:w-1/3">
                        <img src="{{ $activity->image }}" alt="{{ $activity->title }}" class="w-full h-64 md:h-full object-cover">
                    </div>
                    @endif

                    <div class="p-6 md:p-8 {{ $activity->image ? 'md:w-2/3' : 'w-full' }}">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-2">{{ $activity->title }}</h3>

                                @if($activity->organization)
                                <p class="text-purple-400 text-lg mb-2">{{ $activity->organization }}</p>
                                @endif

                                @if($activity->role)
                                <p class="text-gray-500 mb-2">{{ $activity->role }}</p>
                                @endif
                            </div>

                            <div class="flex flex-col items-start md:items-end mt-2 md:mt-0">
                                <div class="inline-flex items-center px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm mb-2">
                                    @if($activity->is_current)
                                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                                    @endif
                                    {{ $activity->start_date->format('M Y') }} - {{ $activity->is_current ? 'Present' : $activity->end_date->format('M Y') }}
                                </div>

                                @if($activity->location)
                                <p class="text-gray-500 text-sm flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    {{ $activity->location }}
                                </p>
                                @endif
                            </div>
                        </div>

                        <p class="text-gray-400 mb-4 leading-relaxed">{{ $activity->description }}</p>

                        @if($activity->url)
                        <a href="{{ $activity->url }}" target="_blank" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition">
                            Learn more
                            <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $activities->links() }}
        </div>
        @else
        <div class="text-center py-20">
            <svg class="w-24 h-24 mx-auto text-gray-700 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <h3 class="text-2xl font-semibold text-gray-400 mb-2">No activities yet</h3>
            <p class="text-gray-500">Check back soon for updates!</p>
        </div>
        @endif
    </div>
</div>
@endsection