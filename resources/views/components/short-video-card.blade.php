{{-- Example Usage 
=========================================
<x-short-video-card 
    video="{{ asset('videos/short.mp4') }}" OR image=
    title="David Lah" 
    subtitle="BUSINESS MASTERY" 
    description="Grow your business exponentially" 
    :high="300"
/>

========================================= --}}
<div 
    x-data="{
        playing: false,
        loading: true,
        high: {{ $high ?? 480 }},
        minWidth: 0,
        maxWidth: 0,
        calculateDimensions() {
            this.minWidth = this.high / 2;
            this.maxWidth = this.high / 2 + 50;
        }
    }"
    x-init="calculateDimensions(); loading = false"
    :class="`relative w-[${maxWidth}px] bg-black rounded-lg overflow-hidden shadow-lg flex-shrink-0`"
    @mouseenter="if ($refs.video) { $refs.video.play(); playing = true; } else { playing = true; }"
    @mouseleave="if ($refs.video) { $refs.video.pause(); playing = false; $refs.video.currentTime = 0; } else { playing = false; }">

    <!-- Preloading Spinner -->
    <div 
        x-show="loading" 
        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 z-20 transition-opacity duration-500 ease-in-out">
        <div class="w-12 h-12 border-4 border-t-transparent border-white rounded-full animate-spin"></div>
    </div>

    @if (isset($youtubeUrl))
        <!-- YouTube Thumbnail -->
        <template x-if="!playing">
            <img 
                src="https://img.youtube.com/vi/{{ getYouTubeVideoId($youtubeUrl) }}/maxresdefault.jpg" 
                alt="{{ $subtitle }}" 
                :style="{ height: `${high}px` }"
                class="w-full object-cover">
        </template>

        <!-- YouTube Video Embed -->
        <template x-if="playing">
            <iframe 
                class="w-full"
                :style="{ height: `${high}px` }"
                src="https://www.youtube.com/embed/{{ getYouTubeVideoId($youtubeUrl) }}?autoplay=1&mute=1"
                @load="loading = false"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </template>
    @elseif (isset($video))
        <!-- Uploaded Video -->
        <video 
            x-ref="video" 
            class="w-full object-cover"
            :style="{ height: `${high}px` }"
            muted 
            loop
            @canplay="loading = false">
            <source src="{{ $video }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    @else
        <!-- Image Placeholder -->
        <img 
            src="{{ $image }}" 
            alt="{{ $subtitle }}" 
            :style="{ height: `${high}px` }"
            class="w-full object-cover">
    @endif

    <!-- Overlay Content -->
    <div 
        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent p-4 flex flex-col items-center">
        <h3 class="text-sm font-bold">{{ $title }}</h3>
        <h2 class="text-md font-bold text-center">{{ $subtitle }}</h2>
        <p class="text-gray-300 text-xs mt-1 text-center">{{ $description }}</p>
    </div>
</div>
