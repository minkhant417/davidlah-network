{{-- Example Usage
========================================
<x-feature-section 
    image="{{ asset('images/home/hero_bg.jpg') }}"
    title="Total life change"
    description="No matter what season of life you're in or what area you're looking to accelerate, The Robbins Success System is a catalyst for massive progress."
    buttonText="Learn more"
    imagePosition="right"
/>
======================================== --}}
<div
    class="flex flex-col {{ $imagePosition === 'left' ? 'lg:flex-row-reverse' : 'lg:flex-row' }} items-center justify-between bg-black text-white p-8 lg:p-16 space-y-8 lg:space-y-0 min-h-[400px] lg:min-h-[600px]">
    <!-- Image Section -->
    <div class="lg:w-1/2 flex justify-center h-full {{ $imagePosition === 'left' ? 'lg:ml-8' : 'lg:mr-8' }}">
        <img src="{{ $image }}" alt="{{ $altText ?? 'Inspiration' }}"
            class="w-full h-full object-cover rounded-lg shadow-lg">
    </div>
    <!-- Text Section -->
    <div class="lg:w-1/2 space-y-4">
        <h1 class="text-3xl lg:text-5xl font-bold">
            {{ $title }}
        </h1>
        <p class="text-lg text-gray-400">
            {{ $description }}
        </p>
        <button
            class="px-6 py-3 bg-white text-black font-bold rounded-full hover:bg-gray-200 transition duration-300">
            {{ $buttonText }}
        </button>
    </div>
</div>
