{{-- Example Usage
=====================================
<x-navbar />
===================================== --}}
<div>


<nav x-data="{ openNavMobile: false }" class="flex items-center justify-between py-4 px-6 lg:px-12 bg-black text-white">
    <!-- Logo -->
    <div class="text-xl font-bold">
        <a href="#" class="tracking-wide">DAVID LAH</a>
    </div>

    <!-- Navigation Links -->
    <ul class="hidden lg:flex items-center space-x-8 text-sm font-medium">
        <li class="group relative"><a href="#" class="hover:text-gray-300">About</a></li>
        {{-- Program dropdown --}}
        <x-dropdown-nav mode="desktop" label="Programs" url="/" :items="[
            ['label' => 'Program 1', 'url' => '#'],
            ['label' => 'Program 2', 'url' => '#'],
            ['label' => 'Program 3', 'url' => '#'],
        ]" />

        {{-- events dropdown --}}
        <x-dropdown-nav mode="desktop" label="Events" url="/" :items="[
            ['label' => 'Events 1', 'url' => '#'],
            ['label' => 'Events 2', 'url' => '#'],
            ['label' => 'Events 3', 'url' => '#'],
        ]" />

        <li class="group relative"><a href="#" class="hover:text-gray-300">Coaching</a></li>
        <li class="group relative"><a href="#" class="hover:text-gray-300">Explore</a></li>
        <li class="group relative"><a href="#" class="hover:text-gray-300">Shop</a></li>
    </ul>

    <!-- Action Buttons -->
    <div class="flex items-center space-x-6">
        <!-- Search Icon -->
        <button class="text-white hover:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35m0 0a8.5 8.5 0 111.198-11.95 8.5 8.5 0 01-1.197 11.95z" />
            </svg>
        </button>

        <!-- Log In Button -->
        <button
            class="hidden lg:block px-4 py-2 rounded-lg bg-transparent border border-white text-white hover:bg-gray-800 hover:text-gray-300">
            Log In
        </button>

        <!-- Start Now Button -->
        <a href="{{ route('home') }}">
            <button class="px-4 py-2 rounded-lg bg-white text-black font-bold hover:bg-gray-100">
                Start Now
            </button>
        </a>

        <!-- Hamburger Button (for Mobile) -->
        <button @click="openNavMobile = !openNavMobile" class="lg:hidden text-white hover:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <ul x-show="openNavMobile" x-cloak @click.away="openNavMobile=false"
        class="absolute top-16 left-0 w-full bg-black text-white flex flex-col space-y-2 py-4 px-6 lg:hidden">
        <li class="group relative"><a href="#" class="hover:text-gray-300">About</a></li>

        <x-dropdown-nav mode="mobile" label="Programs" url="/" :items="[
            ['label' => 'Programs 1', 'url' => '#'],
            ['label' => 'Programs 2', 'url' => '#'],
            ['label' => 'Programs 3', 'url' => '#'],
        ]" />
        <x-dropdown-nav mode="mobile" label="Events" url="/" :items="[
            ['label' => 'Events 1', 'url' => '#'],
            ['label' => 'Events 2', 'url' => '#'],
            ['label' => 'Events 3', 'url' => '#'],
        ]" />
        <li class="group relative"><a href="#" class="hover:text-gray-300">Coaching</a></li>
        <li class="group relative"><a href="#" class="hover:text-gray-300">Explore</a></li>
        <li class="group relative"><a href="#" class="hover:text-gray-300">Shop</a></li>
    </ul>
</nav>
</div>
