@extends('layouts.app')

@section('title', 'Resume')

@section('content')
<div class="py-20 px-4">
    <div class="max-w-5xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Resume</h1>
            <p class="text-xl" style="color: var(--text-secondary);">My professional journey and skills</p>
            <div class="mt-6 flex gap-4 justify-center">
                @if(!empty($resume['file']))
                <a href="{{ asset('storage/'.$resume['file']) }}"
                    download
                    class="btn-primary">
                    Download Resume PDF
                </a>
                @endif
                <button class="btn-secondary" onclick="window.print()">
                    Print Page
                </button>
            </div>
        </div>

        <!-- Summary -->
        @if(!empty($resume['summary']))
        <section class="mb-16">
            <div class="theme-card p-8">
                <h2 class="text-2xl font-bold mb-4" style="color: var(--text-primary);">Professional Summary</h2>
                <p class="leading-relaxed" style="color: var(--text-secondary);">
                    {{ $resume['summary'] }}
                </p>
            </div>
        </section>
        @endif

        <!-- Skills -->
        @if(!empty($resume['skills']) && count($resume['skills']) > 0)
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-8">Technical Skills</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($resume['skills'] as $skill)
                <div class="theme-card p-6">
                    <h3 class="text-xl font-semibold mb-4" style="color: var(--text-primary);">{{ $skill['category'] ?? 'Skills' }}</h3>
                    @if(!empty($skill['items']) && is_array($skill['items']))
                    @if(count($skill['items']) <= 5)
                        <ul class="space-y-2" style="color: var(--text-secondary);">
                        @foreach($skill['items'] as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                        </ul>
                        @else
                        <div class="flex flex-wrap gap-2">
                            @foreach($skill['items'] as $item)
                            <span class="px-3 py-2 theme-badge rounded-lg text-sm">{{ $item }}</span>
                            @endforeach
                        </div>
                        @endif
                        @endif
                </div>
                @endforeach
            </div>
        </section>
        @endif

        <!-- Experience -->
        @if(!empty($resume['experiences']) && count($resume['experiences']) > 0)
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-8">Work Experience</h2>

            <div class="space-y-8">
                @foreach($resume['experiences'] as $experience)
                <div class="theme-card p-6 border-l-4" style="border-left-color: var(--text-primary);">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                        <div>
                            <h3 class="text-xl font-semibold" style="color: var(--text-primary);">{{ $experience['title'] ?? '' }}</h3>
                            <p style="color: var(--text-primary);">{{ $experience['company'] ?? '' }}</p>
                        </div>
                        @if(!empty($experience['period']))
                        <span class="mt-2 md:mt-0" style="color: var(--text-secondary);">{{ $experience['period'] }}</span>
                        @endif
                    </div>
                    @if(!empty($experience['achievements']) && is_array($experience['achievements']))
                    <ul class="space-y-2" style="color: var(--text-secondary);">
                        @foreach($experience['achievements'] as $achievement)
                        <li class="flex items-start">
                            <span class="mr-2" style="color: var(--text-primary);">•</span>
                            {{ $achievement }}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                @endforeach
            </div>
        </section>
        @endif

        <!-- Education -->
        @if(!empty($resume['education']) && count($resume['education']) > 0)
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-8">Education</h2>

            <div class="space-y-6">
                @foreach($resume['education'] as $edu)
                <div class="theme-card p-6">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div>
                            <h3 class="text-xl font-semibold" style="color: var(--text-primary);">{{ $edu['degree'] ?? '' }}</h3>
                            <p style="color: var(--text-primary);">{{ $edu['institution'] ?? '' }}</p>
                        </div>
                        @if(!empty($edu['period']))
                        <span class="mt-2 md:mt-0" style="color: var(--text-secondary);">{{ $edu['period'] }}</span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        @endif

        <!-- Certifications -->
        @if(!empty($resume['certifications']) && count($resume['certifications']) > 0)
        <section>
            <h2 class="text-2xl font-bold mb-8">Certifications</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($resume['certifications'] as $cert)
                <div class="theme-card p-6">
                    <h3 class="font-semibold mb-2" style="color: var(--text-primary);">{{ $cert['name'] ?? '' }}</h3>
                    <p class="text-sm" style="color: var(--text-secondary);">
                        {{ $cert['issuer'] ?? '' }}
                        @if(!empty($cert['year']))
                        - {{ $cert['year'] }}
                        @endif
                    </p>
                </div>
                @endforeach
            </div>
        </section>
        @endif
    </div>
</div>
@endsection