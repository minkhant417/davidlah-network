<nav x-data="{ openNotification: false, openChat: false }"
    class="fixed top-0 left-0 w-full bg-white text-black shadow-md z-50 px-6 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold"><a href="{{ route('welcome') }}">David Lah Network</a></h1>
    <div class="flex space-x-4 items-center relative">
        {{-- Chat --}}
        <button @click="openChat = !openChat"
            class="bg-gray-200 p-2 w-10 h-10 rounded-full hover:bg-gray-300 relative z-10">
            <i class="fas fa-comment" :class="{ 'text-blue-500': openChat }"></i>
        </button>

        {{-- Chat Dropdown --}}
        <div x-show="openChat" @click.away="openChat = false"
            class="absolute right-0 top-full mt-2 w-96 bg-white rounded-lg shadow-lg p-4 z-20" style="display: none;">
            <h2 class="font-bold text-lg mb-4">Chats</h2>
            <input type="text" class="w-full border border-gray-300 rounded-md p-2 mb-4" placeholder="Search">
            <ul class="space-y-4">
                @for ($i = 0; $i < 8; $i++)
                    <li class="flex items-center">
                        <div class="flex-shrink-0 mr-4">
                            <img src="https://via.placeholder.com/50" alt="User Avatar" class="rounded-full">
                        </div>
                        <div class="overflow-hidden">
                            <h3 class="font-semibold text-sm">Jason Man</h3>
                            <p class="text-sm text-gray-500 truncate">Hey! Just wanted to check in and see if somethins is somethig</p>
                        </div>
                        <span class="ml-auto text-xs text-gray-400">{{ $i }}m</span>
                    </li>
                @endfor
            </ul>
        </div>

        <!-- Notification Bell -->
        <button @click="openNotification = !openNotification"
            class="bg-gray-200 p-2 w-10 h-10 rounded-full hover:bg-gray-300 relative z-10">
            <i class="fas fa-bell" :class="{ 'text-blue-500': openNotification }"></i>
        </button>

        <!-- Notification Dropdown -->
        <div x-show="openNotification" @click.away="openNotification = false"
            class="absolute right-0 top-full mt-2 w-96 bg-gray-100 rounded-lg shadow-lg p-4 z-20"
            style="display: none;">
            <h2 class="font-bold text-lg mb-4">Notifications</h2>
            <div class="space-y-4">
                @for ($i = 0; $i < 5; $i++)
                    {{-- Notification --}}
                    <div class="grid grid-cols-12 gap-4 items-center">
                        <!-- Notification Icon -->
                        <div class="col-span-2 flex justify-center">
                            <div class="bg-gray-300 w-10 h-10 rounded-full"></div>
                        </div>

                        <!-- Notification Text -->
                        <div class="col-span-9">
                            <p class="text-sm text-gray-700">
                                Notification message telling that the proposal was approved and wait for the investors
                                to
                                start working now.
                            </p>
                            <p class="text-xs text-gray-500 mt-1">6 min</p>
                        </div>

                        <!-- Status Indicator -->
                        <div class="col-span-1 flex justify-center">
                            <div class="bg-gray-300 w-2 h-2 rounded-full"></div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>

        <!-- Profile Picture -->
        <div class="bg-gray-300 w-10 h-10 rounded-full"></div>
    </div>
</nav>
