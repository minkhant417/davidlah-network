{{-- Example Usage
===========================
<x-dropdown-nav mode="mobile" label="Programs" url="/" :items="[
                ['label' => 'Programs 1', 'url' => '#'],
                ['label' => 'Programs 2', 'url' => '#'],
                ['label' => 'Programs 3', 'url' => '#'],
            ]" />
=========================== --}}

<div x-data="{ openDropdownNav: false }" class="group relative">
    <!-- Dropdown Button -->
    <button
        @if ($mode === 'desktop') @mouseenter="openDropdownNav = true" 
            @mouseleave="openDropdownNav = false" @endif
        class="flex items-center {{ $mode === 'mobile' ? 'justify-between w-full text-left' : '' }}">
        <a href="{{ $url ?? '#' }}" class="flex-grow lg:my-2">
            {{ $label }}
        </a>
        <svg xmlns="http://www.w3.org/2000/svg"
            @if ($mode === 'mobile') @click="openDropdownNav = !openDropdownNav" @endif
            class="ml-2 h-5 w-5 transform transition-transform duration-200" :class="{ 'rotate-180': openDropdownNav }"
            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- Dropdown Menu with Animation -->
    <div x-show="openDropdownNav"
        @if ($mode === 'mobile') @click.away="openDropdownNav = false" 
        class="lg:absolute lg:top-full lg:left-0 lg:mt-2 w-full lg:w-48 bg-black text-white rounded-lg lg:shadow-lg shadow-none lg:py-2 py-0 lg:px-0 px-4 overflow-hidden transition-all duration-200 ease-in-out"
    {{-- x-transition:enter="transition ease-out duration-100" --}}
    x-transition:enter-start="transform scale-y-0 origin-top"
    x-transition:enter-end="transform scale-y-100 origin-top"
        @elseif ($mode === 'desktop') 
            @mouseenter="openDropdownNav = true" 
            @mouseleave="openDropdownNav = false" 
        
        class="absolute top-full left-0 w-full lg:w-48 bg-white  text-black rounded-lg shadow-lg overflow-hidden z-50"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform scale-95"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95" @endif
        x-cloak>
        <ul class="py-2">
            @foreach ($items as $item)
                <li>
                    <a href="{{ $item['url'] }}" class="block px-4 py-2 hover:bg-gray-100">
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
