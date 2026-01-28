@extends('layouts.app')

@section('title', $blog->title)

@section('content')
<div class="py-20 px-4">
    <div class="max-w-4xl mx-auto">
        <!-- Back Button -->
        <a href="{{ route('blogs.index') }}" class="inline-flex items-center mb-8 transition theme-link">
            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Blog
        </a>

        <!-- Blog Header -->
        <article>
            <header class="mb-12">
                <div class="flex items-center gap-4 mb-6" style="color: var(--text-secondary);">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        {{ $blog->published_at->format('F d, Y') }}
                    </div>

                    @if($blog->reading_time)
                    <span>•</span>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $blog->reading_time }} min read
                    </div>
                    @endif

                    <span>•</span>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        {{ $blog->views }} views
                    </div>
                </div>

                <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ $blog->title }}</h1>

                @if($blog->excerpt)
                <p class="text-xl mb-6" style="color: var(--text-secondary);">{{ $blog->excerpt }}</p>
                @endif

                @if($blog->tags)
                <div class="flex flex-wrap gap-2">
                    @foreach($blog->tags as $tag)
                    <span class="px-3 py-1 theme-badge rounded-full text-sm">{{ $tag }}</span>
                    @endforeach
                </div>
                @endif
            </header>

            <!-- Featured Image -->
            @if($blog->featured_image)
            <div class="mb-12 rounded-lg overflow-hidden theme-border border">
                <img src="{{ $blog->featured_image }}" alt="{{ $blog->title }}" class="w-full h-auto">
            </div>
            @endif

            <!-- Blog Content -->
            <div class="prose prose-invert prose-lg max-w-none mb-12">
                <div class="theme-card p-8">
                    {!! nl2br(e($blog->content)) !!}
                </div>
            </div>

            <!-- Author Info -->
            <div class="theme-card p-6">
                <div class="flex items-center">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold" style="background-color: var(--text-primary); color: var(--bg-primary);">
                        {{ substr($blog->user->name, 0, 1) }}
                    </div>
                    <div class="ml-4">
                        <p class="font-semibold text-lg" style="color: var(--text-primary);">{{ $blog->user->name }}</p>
                        <p style="color: var(--text-secondary);">Author</p>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
@endsection