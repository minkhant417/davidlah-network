<x-layouts.guest-2>
    <!-- Nav -->
    <x-nav-1 />
    {{-- Main --}}
    <div class="min-h-screen bg-gray-100 p-6 text-black mt-16">
        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Left Sidebar -->
            <x-left-aside-1 />

            <!-- Right Section -->
            <div class="col-span-2 space-y-6 overflow-auto h-screen no-scrollbar">

                <!-- Appointment Section -->
                <div class="bg-gray-200 p-4 rounded flex justify-between items-center">
                    <div>
                        <h2 class="text-sm font-medium">Appointment available from</h2>
                        <p class="font-bold text-lg">2nd Dec, 2024</p>
                    </div>
                    <a href="#" class="text-blue-600 underline">Schedule</a>
                </div>
                @for ($i = 0; $i < 5; $i++)
                    <!-- Main Event -->
                    <div class="bg-gray-300 p-6 rounded flex justify-between items-start">
                        <div class="">
                            <!-- Placeholder Box -->
                            <div class="w-80 h-52 bg-gray-400 rounded"></div>

                            <!-- Event Details -->
                            <h3 class="text-lg font-bold">One on One</h3>
                            <h2 class="text-xl font-bold">Life Coach Program</h2>
                            <p class="text-gray-700 mt-2">12 months</p>
                        </div>

                        <!-- Event Price -->
                        <p class="text-xl font-bold">$ 1000</p>
                    </div>
                @endfor

            </div>
            <!-- Programs -->
            <div class="col-span-1 gap-4 space-y-2">
                <!-- Program 1 -->
                <div class="bg-gray-300 p-4 rounded">
                    <h3 class="font-bold">Life Alignment Program</h3>
                    <p class="text-sm text-gray-700 mt-2">An intensive 3-months course that takes place on Tuesday,
                        Thursday, and Wednesday weekly.</p>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center px-1">
                            <div class="bg-gray-400 absolute w-6 h-6 rounded-full  mr-2"></div>
                            <div class="bg-gray-500 absolute ml-3 w-6 h-6 rounded-full  mr-2"></div>
                            <div class="bg-gray-600 absolute ml-6 w-6 h-6 rounded-full "></div>
                            <div class="bg-gray-700 absolute ml-9 w-6 h-6 rounded-full "></div>
                        </div>
                        <p class="text-sm">Over 130 people joined</p>
                    </div>
                </div>

                <!-- Program 2 -->
                <div class="bg-gray-300 p-4 rounded">
                    <h3 class="font-bold">Personal Development</h3>
                    <p class="text-sm text-gray-700 mt-2">An intensive 3-months course that takes place on Tuesday,
                        Thursday, and Wednesday weekly.</p>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center px-1">
                            <div class="bg-gray-400 absolute w-6 h-6 rounded-full  mr-2"></div>
                            <div class="bg-gray-500 absolute ml-3 w-6 h-6 rounded-full  mr-2"></div>
                            <div class="bg-gray-600 absolute ml-6 w-6 h-6 rounded-full "></div>
                            <div class="bg-gray-700 absolute ml-9 w-6 h-6 rounded-full "></div>
                        </div>
                        <p class="text-sm">Over 300 people joined</p>
                    </div>
                </div>

                <!-- Program 3 -->
                <div class="bg-gray-300 p-4 rounded">
                    <h3 class="font-bold">Life Coach Program</h3>
                    <p class="text-sm text-gray-700 mt-2">An intensive 3-months course that takes place on Tuesday,
                        Thursday, and Wednesday weekly.</p>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex items-center px-1">
                            <div class="bg-gray-400 absolute w-6 h-6 rounded-full  mr-2"></div>
                            <div class="bg-gray-500 absolute ml-3 w-6 h-6 rounded-full  mr-2"></div>
                            <div class="bg-gray-600 absolute ml-6 w-6 h-6 rounded-full "></div>
                            <div class="bg-gray-700 absolute ml-9 w-6 h-6 rounded-full "></div>
                        </div>
                        <p class="text-sm">3 people joined</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.guest-2>
