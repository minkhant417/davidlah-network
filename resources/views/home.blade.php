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
            <main class="col-span-2 space-y-6 overflow-y-auto h-screen no-scrollbar">
                <!-- Appointment Section -->
                <div class="bg-gray-200 p-4 rounded flex justify-between items-center">
                    <div>
                        <h2 class="text-sm font-medium">Appointment available from</h2>
                        <p class="font-bold text-lg">2nd Dec, 2024</p>
                    </div>
                    <a href="#" class="text-blue-600 underline">Schedule</a>
                </div>

                <!-- Other Content Section -->
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                    <div class="bg-gray-300 h-80 rounded"></div>
                    <div class="bg-gray-300 h-80 rounded"></div>
                    <div class="bg-gray-300 h-80 rounded"></div>
                    <div class="bg-gray-300 h-80 rounded"></div>
                </div>
            </main>

            <!-- Right Sidebar -->
            <aside class="space-y-6">
                <!-- Connect with Others -->
                <div class="bg-gray-200 p-4 rounded">
                    <h2 class="font-bold mb-2">Connect with others</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center pb-2">
                            <div class="bg-gray-300 w-10 h-10 rounded-full mr-4"></div>
                            <div>
                                <p>Saw Jason</p>
                                <p class="text-sm text-gray-500">Myanmar</p>
                            </div>
                            <div class="bg-gray-300 w-5 h-5 rounded-full ml-auto"></div>
                        </li>
                        <li class="flex items-center pb-2">
                            <div class="bg-gray-300 w-10 h-10 rounded-full mr-4"></div>
                            <div>
                                <p>Christine Jasmine</p>
                                <p class="text-sm text-gray-500">China</p>
                            </div>
                            <div class="bg-gray-300 w-5 h-5 rounded-full ml-auto"></div>
                        </li>

                        <li class="flex items-center pb-2">
                            <div class="bg-gray-300 w-10 h-10 rounded-full mr-4"></div>
                            <div>
                                <p>Susana Aye Shin</p>
                                <p class="text-sm text-gray-500">Japan</p>
                            </div>
                            <div class="bg-gray-300 w-5 h-5 rounded-full ml-auto"></div>
                        </li>
                    </ul>
                </div>

                <!-- Your Connections -->
                <div class="bg-gray-200 p-4 rounded">
                    <h2 class="font-bold mb-2">Your Connections</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center pb-2">
                            <div class="bg-gray-300 w-10 h-10 rounded-full mr-4"></div>
                            <p>Lwin Moe Htun</p>
                        </li>
                        <li class="flex items-center pb-2">
                            <div class="bg-gray-300 w-10 h-10 rounded-full mr-4"></div>
                            <p>Kyaw Min Htun</p>
                        </li>
                        <li class="flex items-center pb-2">
                            <div class="bg-gray-300 w-10 h-10 rounded-full mr-4"></div>
                            <p>Samuel Lay Jar</p>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</x-layouts.guest-2>
