<x-layouts.guest-2>
    <!-- Nav -->
    <x-nav-1 />
    {{-- Main --}}
    <div class="min-h-screen bg-gray-100 p-6 text-black mt-16">
        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Left Sidebar -->
            <x-left-aside-1 />

            <!-- Main Section -->
            <main class="col-span-3 space-y-6 overflow-y-auto h-screen no-scrollbar">
                <div class="rounded-lg p-6">
                    <h2 class="text-xl font-bold mb-6">Upcoming Events</h2>

                    <!-- Event Card -->
                    <div class="bg-gray-300 rounded-lg p-6 grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
                        <!-- Event Image -->
                        <div class="bg-gray-400 w-full h-44 rounded"></div>

                        <!-- Event Details -->
                        <div class="col-span-2">
                            <div class="flex justify-between items-start">
                                <h3 class="text-lg font-bold">Gen Z For Jesus</h3>
                                <span class="text-sm text-gray-600">Chiang Mai</span>
                            </div>
                            <p class="text-sm text-gray-700 mt-2">
                                Description that is two lines or three lines that talk about the price and hotel that
                                they will stay and food serve. The place where the event will be taking place and the
                                date
                                that will be last.
                            </p>
                            <div class="flex justify-between items-center mt-4">
                                <p class="text-sm text-gray-600">Jan 25 - 27</p>
                                <button
                                    class="bg-gray-500 text-white px-4 py-2 text-sm rounded hover:bg-gray-600">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-layouts.guest-2>
