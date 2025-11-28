@extends('layouts.app')

@section('title', $activity->title)

@section('content')
<div class="py-20 px-4">
    <div class="max-w-5xl mx-auto">
        <!-- Back Button -->
        <a href="{{ route('activities.index') }}" class="inline-flex items-center text-gray-400 hover:text-white mb-8 transition">
            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Activities
        </a>

        <!-- Activity Header -->
        <div class="mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $activity->title }}</h1>

            @if($activity->organization)
            <p class="text-2xl text-purple-400 mb-2">{{ $activity->organization }}</p>
            @endif

            @if($activity->role)
            <p class="text-xl text-gray-400 mb-4">{{ $activity->role }}</p>
            @endif

            <div class="flex flex-wrap gap-4 text-gray-400">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ $activity->start_date->format('F Y') }} - {{ $activity->is_current ? 'Present' : $activity->end_date->format('F Y') }}
                </div>

                @if($activity->location)
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    {{ $activity->location }}
                </div>
                @endif
            </div>
        </div>

        <!-- Activity Image -->
        @if($activity->image)
        <div class="mb-12 rounded-lg overflow-hidden border border-gray-800">
            <img src="{{ $activity->image }}" alt="{{ $activity->title }}" class="w-full h-auto">
        </div>
        @endif

        <!-- Activity Description -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-6">About</h2>
            <div class="bg-gray-900 rounded-lg p-8 border border-gray-800">
                <div class="prose prose-invert max-w-none text-gray-400 leading-relaxed text-lg">
                    {!! nl2br(e($activity->description)) !!}
                </div>
            </div>
        </div>

        @if($activity->url)
        <div class="text-center">
            <a href="{{ $activity->url }}" target="_blank" class="btn-primary">
                Learn More
                <svg class="w-5 h-5 ml-2 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
            </a>
        </div>
        @endif
    </div>
</div>
@endsection