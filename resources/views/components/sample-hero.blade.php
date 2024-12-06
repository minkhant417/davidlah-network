{{-- Example Usage
===============================
<x-sample-hero image="{{ asset('images/home/hero_bg_2.jpg') }}"
title="The secret to <br> living is giving."
button_text="Start Now"
/>
=============================== --}}


<div class="relative bg-cover bg-center text-white p-6 lg:p-12 rounded-xl overflow-hidden h-[650px] mx-5"
        style="background-image: url('{{ $image }}')">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent"></div>

        <!-- Content Positioned at Bottom Left -->
        <div class="absolute bottom-6 left-6 lg:bottom-12 lg:left-12 z-10">
            <h1 class="text-4xl lg:text-6xl font-bold leading-tight">
                {!! $title !!}
            </h1>
            <button
                class="mt-6 px-6 py-3 bg-white text-black font-bold rounded-full hover:bg-gray-200 transition duration-300">
                {{ $buttonText }}
            </button>
        </div>
    </div>