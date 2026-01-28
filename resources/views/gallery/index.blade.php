@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<div class="gallery-page py-20 px-4" x-data="galleryLightbox()">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4" style="color: var(--text-primary);">Gallery</h1>
            <p class="text-xl" style="color: var(--text-secondary);">Event photos and moments</p>
        </div>

        <!-- Masonry Grid -->
        @if($images->count() > 0)
        <div class="gallery-masonry">
            @foreach($images as $image)
            <div class="gallery-item">
                <button type="button"
                    class="gallery-item-inner"
                    data-src="{{ asset('storage/'.$image->image_path) }}"
                    data-title="{{ e($image->title ?? $image->event_name ?? 'Image') }}"
                    @click="open($event.currentTarget.dataset.src, $event.currentTarget.dataset.title)"
                    aria-label="View {{ $image->title ?? $image->event_name ?? 'image' }}">
                    <img src="{{ asset('storage/'.$image->image_path) }}"
                        alt="{{ $image->title ?? $image->event_name ?? 'Gallery image' }}"
                        class="gallery-img"
                        loading="lazy">
                    @if($image->event_name || $image->title)
                    <div class="gallery-item-caption">
                        <span class="gallery-item-title">{{ $image->title ?? $image->event_name }}</span>
                        @if($image->event_date)
                        <span class="gallery-item-date">{{ $image->event_date->format('M Y') }}</span>
                        @endif
                    </div>
                    @endif
                </button>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-16" style="color: var(--text-secondary);">
            <p class="text-lg">No images in the gallery yet. Check back soon.</p>
        </div>
        @endif
    </div>

    <!-- Lightbox -->
    <div x-show="isOpen"
        x-cloak
        class="fixed inset-0 z-[100] flex items-center justify-center bg-black"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @keydown.escape.window="close()">
        <button type="button"
            class="absolute top-4 right-4 z-10 p-2 text-white/80 hover:text-white transition"
            aria-label="Close"
            @click="close()">
            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="relative max-w-[90vw] max-h-[90vh] flex items-center justify-center p-4" @click.self="close()">
            <img :src="currentSrc"
                :alt="currentTitle"
                class="max-w-full max-h-[85vh] w-auto h-auto object-contain"
                x-show="currentSrc">
        </div>
    </div>
</div>

@push('scripts')
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('galleryLightbox', () => ({
            isOpen: false,
            currentSrc: '',
            currentTitle: '',
            open(src, title) {
                this.currentSrc = src;
                this.currentTitle = title || 'Image';
                this.isOpen = true;
                document.body.style.overflow = 'hidden';
            },
            close() {
                this.isOpen = false;
                document.body.style.overflow = '';
            }
        }));
    });
</script>
@endpush
@endsection