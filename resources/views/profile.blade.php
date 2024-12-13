<x-layouts.guest-2>
    <!-- Nav -->
    <x-nav-1 />
    {{-- Main --}}
    <div x-data="{ activeTab: 'Proposals', dropdown: 0 }" class="min-h-screen bg-gray-100 p-6 text-black mt-16">
        <div class="w-3/4 mx-auto">
            <div class="bg-gray-300 p-6 rounded">
                <!-- Profile Section -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-400 rounded-full"></div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold">Saw Nedah Htoo</h3>
                            <p class="text-gray-600 text-sm">0 connections</p>
                        </div>
                    </div>
                    <div x-data="{ showEditProfileModal: false }" class="relative">
                        <!-- Edit Profile Button -->
                        <button @click="showEditProfileModal = true" class="bg-gray-400 text-black px-4 py-2 rounded">Edit
                            Profile</button>

                        <!-- Modal -->
                        <div x-cloak x-show="showEditProfileModal" @keydown.escape.window="showEditProfileModal = false"
                            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
                            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            <!-- Modal Content -->
                            <div @mousedown.away="showEditProfileModal=false" class="bg-gray-200 rounded-lg w-2/5 p-8 relative">
                                <!-- Close Button -->
                                <button @click="showEditProfileModal = false"
                                    class="absolute top-2 right-2 text-gray-600 hover:text-black">
                                    <i class="fas fa-times"></i>
                                </button>

                                <!-- Modal Header -->
                                <h2 class="text-lg font-bold mb-4">Edit Profile</h2>
                                <hr class="mb-4">

                                <!-- Profile Picture Section -->
                                <div class="mb-6">
                                    <div class="flex justify-between items-center">
                                        <h3 class="font-bold">Profile Picture</h3>
                                        <a href="#" class="text-sm text-blue-600 underline">Edit</a>
                                    </div>
                                    <div class="w-20 h-20 bg-gray-300 rounded-full mx-auto mt-4"></div>
                                </div>

                                <!-- Personal Information Section -->
                                <div class="mb-6">
                                    <div class="flex justify-between items-center">
                                        <h3 class="font-bold">Personal Information</h3>
                                        <a href="#" class="text-sm text-blue-600 underline">Edit</a>
                                    </div>
                                    <div class="mt-4 space-y-2">
                                        <p><span class="font-semibold">Name:</span> Nedah Htoo</p>
                                        <p><span class="font-semibold">Email:</span> sawnedahhtoo@gmail.com</p>
                                        <p><span class="font-semibold">Phone:</span> 09780654312</p>
                                        <p><span class="font-semibold">Country:</span> Thailand</p>
                                    </div>
                                </div>

                                <!-- Additional Information Section -->
                                <div class="bg-white p-4 rounded-lg">
                                    <h4 class="font-semibold">Turn Your Talent Into Opportunities!</h4>
                                    <p class="text-sm mt-2">
                                        Are you a skilled graphic designer, programmer, UI/UX expert, or content writer?
                                        Showcase your
                                        expertise and connect with potential clients. Start applying your talents today!
                                    </p>
                                    <a href="#" class="text-blue-600 underline text-sm mt-2 block">Reach Out to
                                        Get Started!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-6 border-t border-gray-400 pt-4 px-12 flex justify-between">
                    <!-- Proposals Tab -->
                    <a href="#" @click.prevent="activeTab = 'Proposals'"
                        :class="activeTab === 'Proposals' ? 'text-blue-600 border-blue-600' : 'text-black border-transparent'"
                        class="text-sm font-medium border-b-2 pb-1 transition duration-200">
                        Proposals
                    </a>
                    <!-- Appointments Tab -->
                    <a href="#" @click.prevent="activeTab = 'Appointments'"
                        :class="activeTab === 'Appointments' ? 'text-blue-600 border-blue-600' : 'text-black border-transparent'"
                        class="text-sm font-medium border-b-2 pb-1 transition duration-200">
                        Appointments
                    </a>
                    <!-- Connections Tab -->
                    <a href="#" @click.prevent="activeTab = 'Connections'"
                        :class="activeTab === 'Connections' ? 'text-blue-600 border-blue-600' : 'text-black border-transparent'"
                        class="text-sm font-medium border-b-2 pb-1 transition duration-200">
                        Connections
                    </a>
                    <!-- Programs Tab -->
                    <a href="#" @click.prevent="activeTab = 'Programs'"
                        :class="activeTab === 'Programs' ? 'text-blue-600 border-blue-600' : 'text-black border-transparent'"
                        class="text-sm font-medium border-b-2 pb-1 transition duration-200">
                        Programs
                    </a>
                    <!-- Events Tab -->
                    <a href="#" @click.prevent="activeTab = 'Events'"
                        :class="activeTab === 'Events' ? 'text-blue-600 border-blue-600' : 'text-black border-transparent'"
                        class="text-sm font-medium border-b-2 pb-1 transition duration-200">
                        Events
                    </a>
                    <!-- Employer & Talent Tab -->
                    <a href="#" @click.prevent="activeTab = 'Employer & Talent'"
                        :class="activeTab === 'Employer & Talent' ? 'text-blue-600 border-blue-600' :
                            'text-black border-transparent'"
                        class="text-sm font-medium border-b-2 pb-1 transition duration-200">
                        Employer & Talent
                    </a>
                </div>

            </div>
            <div class="bg-gray-200 px-10 mt-6">
                {{-- Proposal --}}
                <div x-show="activeTab === 'Proposals'">
                    <!-- Proposals Section -->
                    <div class="p-6 rounded">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-lg font-bold">Your Proposals</h2>
                            <a href="#" class="text-black text-sm font-medium">Add Proposal</a>
                        </div>
                        <div class="bg-gray-300 p-4 rounded flex justify-between items-center">
                            <p>Revolutionizing Delivery Services : Investment</p>
                            <a href="#" class="text-black text-sm font-medium">View</a>
                        </div>
                    </div>

                    <!-- Investments Section -->
                    <div class="mt-6  p-6 rounded">
                        <h2 class="text-lg font-bold mb-4">Your Investments</h2>
                        <div class="bg-gray-300 p-4 rounded flex justify-between items-center">
                            <p>Cook, Share, Inspire: A Recipe App Investment Opportunity</p>
                            <a href="#" class="text-black text-sm font-medium">View</a>
                        </div>
                    </div>
                </div>
                {{-- End proposal --}}
                {{-- Appointment --}}
                <div x-show="activeTab === 'Appointments'" class="p-6">
                    <!-- Section Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-bold">Your Appointments</h2>
                        <a href="#" class="text-sm font-medium text-blue-600 underline">Schedule</a>
                    </div>

                    <!-- Appointments List -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Appointment Card 1 -->
                        <div class="bg-gray-300 p-4 rounded flex justify-between items-center">
                            <div>
                                <h3 class="font-bold">Spiritual Counseling</h3>
                                <p class="text-sm text-gray-600">2nd Dec, 2024 at 8:00 pm</p>
                            </div>
                            <button
                                class="bg-gray-400 text-sm font-medium px-4 py-2 rounded hover:bg-gray-500">Edit</button>
                        </div>

                        <!-- Appointment Card 2 -->
                        <div class="bg-gray-300 p-4 rounded flex justify-between items-center">
                            <div>
                                <h3 class="font-bold">Business Counseling</h3>
                                <p class="text-sm text-gray-600">22nd Jan, 2025 at 9:00 am</p>
                            </div>
                            <button
                                class="bg-gray-400 text-sm font-medium px-4 py-2 rounded hover:bg-gray-500">Edit</button>
                        </div>
                    </div>
                </div>
                {{-- End Appointment --}}
                {{-- Connections --}}
                <div x-show="activeTab === 'Connections'" class="p-6">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-bold">Your Connections</h2>
                        <a href="#" class="text-sm font-medium text-blue-600 underline">Connect More</a>
                    </div>

                    <!-- Connections Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Connection Card 1 -->
                        <div class="bg-gray-300 p-4 rounded-lg flex justify-between items-center relative">
                            <div>
                                <h3 class="font-bold">Saw Jason</h3>
                                <p class="text-sm text-gray-600">Myanmar</p>
                            </div>
                            <div class="relative">
                                <!-- Trigger Button -->
                                <button @click="dropdown = 1" class="text-gray-600 hover:text-black">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>

                                <!-- Dropdown Menu -->
                                <div x-show="dropdown === 1" @click.away="dropdown = 0"
                                    class="absolute top-full right-0 mt-2 bg-gray-200 shadow-md rounded-lg p-2 z-10"
                                    x-cloak>
                                    <button
                                        class="block w-full text-left px-4 py-2 hover:bg-gray-300">Favourite</button>
                                    <button class="block w-full text-left px-4 py-2 hover:bg-gray-300">Chat</button>
                                    <button
                                        class="block w-full text-left px-4 py-2 hover:bg-gray-300">Disconnect</button>
                                </div>
                            </div>
                        </div>

                        <!-- Connection Card 2 -->
                        <div class="bg-gray-300 p-4 rounded-lg flex justify-between items-center relative">
                            <div>
                                <h3 class="font-bold">Christine Jasmine</h3>
                                <p class="text-sm text-gray-600">America</p>
                            </div>
                            <div class="relative">
                                <!-- Trigger Button -->
                                <button @click="dropdown = 2" class="text-gray-600 hover:text-black">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>

                                <!-- Dropdown Menu -->
                                <div x-show="dropdown === 2" @click.away="dropdown = 0"
                                    class="absolute top-full right-0 mt-2 bg-gray-200 shadow-md rounded-lg p-2 z-10"
                                    x-cloak>
                                    <button
                                        class="block w-full text-left px-4 py-2 hover:bg-gray-300">Favourite</button>
                                    <button class="block w-full text-left px-4 py-2 hover:bg-gray-300">Chat</button>
                                    <button
                                        class="block w-full text-left px-4 py-2 hover:bg-gray-300">Disconnect</button>
                                </div>
                            </div>
                        </div>

                        <!-- Connection Card 3 -->
                        <div class="bg-gray-300 p-4 rounded-lg flex justify-between items-center relative">
                            <div>
                                <h3 class="font-bold">Susana Aye Shin</h3>
                                <p class="text-sm text-gray-600">Japan</p>
                            </div>
                            <div class="relative">
                                <!-- Trigger Button -->
                                <button @click="dropdown = 3" class="text-gray-600 hover:text-black">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>

                                <!-- Dropdown Menu -->
                                <div x-show="dropdown === 3" @click.away="dropdown = 0"
                                    class="absolute top-full right-0 mt-2 bg-gray-200 shadow-md rounded-lg p-2 z-10"
                                    x-cloak>
                                    <button
                                        class="block w-full text-left px-4 py-2 hover:bg-gray-300">Favourite</button>
                                    <button class="block w-full text-left px-4 py-2 hover:bg-gray-300">Chat</button>
                                    <button
                                        class="block w-full text-left px-4 py-2 hover:bg-gray-300">Disconnect</button>
                                </div>
                            </div>
                        </div>

                        <!-- Connection Card 4 -->
                        <div class="bg-gray-300 p-4 rounded-lg flex justify-between items-center relative">
                            <div>
                                <h3 class="font-bold">Kyaw Min Htun</h3>
                                <p class="text-sm text-gray-600">Thailand</p>
                            </div>
                            <div class="relative">
                                <!-- Trigger Button -->
                                <button @click="dropdown = 4" class="text-gray-600 hover:text-black">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>

                                <!-- Dropdown Menu -->
                                <div x-show="dropdown === 4" @click.away="dropdown = 0"
                                    class="absolute top-full right-0 mt-2 bg-gray-200 shadow-md rounded-lg p-2 z-10"
                                    x-cloak>
                                    <button
                                        class="block w-full text-left px-4 py-2 hover:bg-gray-300">Favourite</button>
                                    <button class="block w-full text-left px-4 py-2 hover:bg-gray-300">Chat</button>
                                    <button
                                        class="block w-full text-left px-4 py-2 hover:bg-gray-300">Disconnect</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Connections --}}
                {{-- Programs --}}
                <div x-show="activeTab === 'Programs'" class="p-6">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-bold">Your Programs</h2>
                        <a href="#" class="text-sm font-medium text-black underline hover:text-gray-700">See
                            More</a>
                    </div>

                    <!-- Program Card -->
                    <div class="bg-gray-300 p-4 rounded-lg flex justify-between items-center">
                        <!-- Program Image -->
                        <div class="bg-gray-400 w-24 h-16 rounded"></div>

                        <!-- Program Details -->
                        <div class="flex-1 ml-4">
                            <p class="text-sm text-gray-600">3 - months</p>
                            <h3 class="text-lg font-bold">Life Alignment Program</h3>
                            <p class="text-sm text-gray-600">Joined on 23rd Jan, 2025</p>
                        </div>

                        <!-- Program Status -->
                        <p class="text-sm font-medium text-blue-600">Ongoing</p>
                    </div>
                </div>
                {{-- End Programs --}}
                {{-- Events --}}
                <div x-show="activeTab === 'Events'" class="p-6">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-bold">Your Registered Events</h2>
                        <a href="#" class="text-sm font-medium text-black underline hover:text-gray-700">View
                            More</a>
                    </div>

                    <!-- Event Cards -->
                    <div class="flex space-x-4">
                        <!-- Event Card 1 -->
                        <div class="bg-gray-300 p-4 rounded-lg flex-1 flex justify-between items-center">
                            <div class="flex items-start space-x-4">
                                <div class="bg-gray-400 w-16 h-16 rounded"></div>
                                <div>
                                    <p class="text-sm text-gray-600">Chiang Mai</p>
                                    <h3 class="text-lg font-bold">Gen Z for Jesus</h3>
                                    <p class="text-sm text-gray-600">Jan 25 - 27</p>
                                </div>
                            </div>
                            <p class="text-sm font-medium text-black">Next</p>
                        </div>

                        <!-- Event Card 2 -->
                        <div class="bg-gray-300 p-4 rounded-lg flex-1 flex justify-between items-center">
                            <div class="flex items-start space-x-4">
                                <div class="bg-gray-400 w-16 h-16 rounded"></div>
                                <div>
                                    <p class="text-sm text-gray-600">Chiang Mai</p>
                                    <h3 class="text-lg font-bold">DMI Worship Night</h3>
                                    <p class="text-sm text-gray-600">Jan 25 - 27</p>
                                </div>
                            </div>
                            <p class="text-sm font-medium text-black">Cancel</p>
                        </div>
                    </div>
                </div>
                {{-- End Events --}}
                {{-- Employer & Talent --}}
                <div x-show="activeTab === 'Employer & Talent'" class="p-6">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-bold">Your Job Openings</h2>
                        <a href="#" class="text-sm font-medium text-black underline hover:text-gray-700">View
                            More</a>
                    </div>

                    <!-- Job Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Job Card 1 -->
                        <div class="bg-gray-300 p-4 rounded-lg">
                            <p class="text-sm text-blue-600 font-medium mb-2">23 applicants</p>
                            <h3 class="text-lg font-bold">UI/UX Designer</h3>
                            <p class="text-sm text-gray-600">Sam Kamphaeng, Chiang Mai</p>
                        </div>

                        <!-- Job Card 2 -->
                        <div class="bg-gray-300 p-4 rounded-lg">
                            <p class="text-sm text-blue-600 font-medium mb-2">3 applicants</p>
                            <h3 class="text-lg font-bold">Software Engineer</h3>
                            <p class="text-sm text-gray-600">Sam Kamphaeng, Chiang Mai</p>
                        </div>

                        <!-- Job Card 3 -->
                        <div class="bg-gray-300 p-4 rounded-lg">
                            <p class="text-sm text-blue-600 font-medium mb-2">9 applicants</p>
                            <h3 class="text-lg font-bold">Marketing Specialist</h3>
                            <p class="text-sm text-gray-600">Sam Kamphaeng, Chiang Mai</p>
                        </div>

                        <!-- Job Card 4 -->
                        <div class="bg-gray-300 p-4 rounded-lg">
                            <p class="text-sm text-blue-600 font-medium mb-2">5 applicants</p>
                            <h3 class="text-lg font-bold">Data Analyst</h3>
                            <p class="text-sm text-gray-600">Sam Kamphaeng, Chiang Mai</p>
                        </div>
                    </div>
                </div>

                <div x-show="activeTab === 'Employer & Talent'" class="p-6">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-bold">Your Applications</h2>
                        <a href="#" class="text-sm font-medium text-black underline hover:text-gray-700">View
                            More</a>
                    </div>

                    <!-- Applications Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Application Card 1 -->
                        <div class="bg-gray-300 p-4 rounded-lg">
                            <p class="text-sm text-blue-600 font-medium mb-2">Applied</p>
                            <h3 class="text-lg font-bold">UI/UX Designer</h3>
                            <p class="text-sm text-gray-600">Sam Kamphaeng, Chiang Mai</p>
                        </div>

                        <!-- Application Card 2 -->
                        <div class="bg-gray-300 p-4 rounded-lg">
                            <p class="text-sm text-blue-600 font-medium mb-2">Interview</p>
                            <h3 class="text-lg font-bold">Software Engineer</h3>
                            <p class="text-sm text-gray-600">Sam Kamphaeng, Chiang Mai</p>
                        </div>

                        <!-- Application Card 3 -->
                        <div class="bg-gray-300 p-4 rounded-lg">
                            <p class="text-sm text-blue-600 font-medium mb-2">Rejected</p>
                            <h3 class="text-lg font-bold">Marketing Specialist</h3>
                            <p class="text-sm text-gray-600">Sam Kamphaeng, Chiang Mai</p>
                        </div>

                        <!-- Application Card 4 -->
                        <div class="bg-gray-300 p-4 rounded-lg">
                            <p class="text-sm text-blue-600 font-medium mb-2">Accepted</p>
                            <h3 class="text-lg font-bold">Data Analyst</h3>
                            <p class="text-sm text-gray-600">Sam Kamphaeng, Chiang Mai</p>
                        </div>
                    </div>
                </div>


                {{-- End Employer & Talent --}}
            </div>
        </div>
    </div>
</x-layouts.guest-2>
