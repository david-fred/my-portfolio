@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Blog</h1>
            <p class="text-xl" style="color: var(--text-secondary);">Thoughts, tutorials, and insights</p>
        </div>

        <!-- Blog Posts -->
        @if($blogs->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($blogs as $blog)
            <a href="{{ route('blogs.show', $blog->slug) }}" class="group">
                <article class="theme-card overflow-hidden transition h-full flex flex-col">
                    @if($blog->featured_image)
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ $blog->featured_image }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    @else
                    <div class="aspect-video flex items-center justify-center" style="background-color: var(--bg-tertiary);">
                        <svg class="w-16 h-16" style="color: var(--text-tertiary);" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    @endif

                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center gap-2 mb-3 text-sm" style="color: var(--text-secondary);">
                            <span>{{ $blog->published_at->format('M d, Y') }}</span>
                            @if($blog->reading_time)
                            <span>•</span>
                            <span>{{ $blog->reading_time }} min read</span>
                            @endif
                        </div>

                        <h3 class="text-xl font-semibold mb-3 transition" style="color: var(--text-primary);">{{ $blog->title }}</h3>

                        @if($blog->excerpt)
                        <p class="mb-4 flex-1" style="color: var(--text-secondary);">{{ Str::limit($blog->excerpt, 120) }}</p>
                        @endif

                        @if($blog->tags)
                        <div class="flex flex-wrap gap-2">
                            @foreach(array_slice($blog->tags, 0, 3) as $tag)
                            <span class="px-2 py-1 text-xs theme-badge rounded">{{ $tag }}</span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </article>
            </a>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $blogs->links() }}
        </div>
        @else
        <div class="text-center py-20">
            <svg class="w-24 h-24 mx-auto mb-4" style="color: var(--text-tertiary);" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            <h3 class="text-2xl font-semibold mb-2" style="color: var(--text-secondary);">No blog posts yet</h3>
            <p style="color: var(--text-tertiary);">Check back soon for new content!</p>
        </div>
        @endif
    </div>
</div>
@endsection