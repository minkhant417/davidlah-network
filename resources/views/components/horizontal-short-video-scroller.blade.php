{{-- Example Usage
=====================================
<x-horizontal-short-video-scroller width="w-full">
                @for ($i = 0; $i< 10; $i++)
                    <!-- Card -->
                    <x-short-video-card video="{{ asset('videos/short.mp4') }}" title="David Lah" subtitle="BUSINESS MASTERY"
                        description="Grow your business exponentially" />
                @endfor
    </x-horizontal-short-video-scroller>
===================================== --}}


{{-- TO hide scroll bar --}}
    <style>
        /* Hide scrollbar for all browsers */
        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, Opera */
        }

        .scrollbar-hidden {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
    <div class="{{ $width ?? 'w-full' }} md:pl-16 py-6">
        {{ $heading }}
        <div x-data="{
            scrollAmount: 300,
            atStart: true,
            atEnd: false,
            checkScroll() {
                const container = this.$refs.scrollContainer;
                this.atStart = container.scrollLeft === 0;
                this.atEnd = container.scrollLeft + container.clientWidth >= container.scrollWidth;
            }
        }" x-init="checkScroll" @scroll="checkScroll" class="relative bg-black text-white py-4">

            <!-- Left Arrow Button -->
            <button @click="$refs.scrollContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' }); checkScroll()"
                :class="{ 'hidden': atStart }"
                class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 hover:bg-gray-700 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Right Arrow Button -->
            <button @click="$refs.scrollContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' }); checkScroll()"
                :class="{ 'hidden': atEnd }"
                class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 hover:bg-gray-700 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Scrollable Container -->
            <div x-ref="scrollContainer" class="flex overflow-x-auto scrollbar-hidden space-x-4 pb-4"
                @scroll="checkScroll">
                {{ $slot }}
            </div>
        </div>

    </div>