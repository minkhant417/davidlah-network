<x-layouts.guest-2>
    <!-- Nav -->
    <x-nav-1 />
    {{-- Main --}}
    <div class="min-h-screen bg-gray-100 p-6 text-black mt-16">
        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Left Sidebar -->
            <x-left-aside-1 />

            <!-- Middle Section -->
            <div class="col-span-2 space-y-6 overflow-auto h-screen no-scrollbar">
                @for ($i = 0; $i < 6; $i++)
                    <!-- Service Card -->
                    <div class="bg-gray-300 rounded flex items-start justify-between">

                        <!-- Left Section: Image Placeholder -->
                        <div class="flex p-6">
                            <div class="w-32 h-32 bg-gray-400 rounded"></div>

                            <!-- Middle Section: Content -->
                            <div class="flex-1 ml-6">
                                <h3 class="text-lg font-bold">Spiritual Counseling</h3>
                                <p class="text-gray-700 mt-2 text-sm">
                                    Receive personalized spiritual guidance to help you navigate life’s challenges, find
                                    inner
                                    peace, and align
                                    with your true purpose. This session is designed to provide clarity and a deeper
                                    sense
                                    of
                                    fulfillment.
                                </p>
                            </div>
                        </div>

                        <!-- Right Section: Price -->
                        <div class="flex-shrink-0 self-end">
                            <p class="bg-gray-500 text-white px-4 py-2 rounded text-sm font-bold">$20 / person</p>
                        </div>
                    </div>
                @endfor
            </div>
            <!-- right section -->
            <div class="col-span-1 gap-4 space-y-2">
                <!-- section -->
                <div class="card bg-gray-300 p-4 rounded-lg mb-4">
                    <h3 class="text-lg font-bold mb-2">Appointment Type</h3>
                    <select
                        class="appearance-none bg-gray-400 text-black border border-gray-300 rounded-md p-2 w-full">
                        <option value="spiritual-counseling">Spiritual Counseling</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="card bg-gray-300 p-4 rounded-lg mb-4">
                    <h3 class="text-lg font-bold mb-2">Date of Appointment</h3>
                    <input type="date" class="appearance-none bg-gray-400 text-black rounded border-b border-gray-400 p-2 w-full">
                </div>

                <div class="card bg-gray-300 p-4 rounded-lg">
                    <h3 class="text-lg font-bold mb-2">Confirmations</h3>
                    <p class="text-sm text-black">Spiritual Counseling on 2nd Dec, 2024</p>
                    <p class="text-sm text-black mb-2">Cost of Service: $20</p>
                    <button
                        class="bg-gray-400 hover:bg-gray-500 text-black font-bold py-2 px-4 rounded-full w-full">Confirm</button>
                </div>

            </div>
        </div>
    </div>
</x-layouts.guest-2>
