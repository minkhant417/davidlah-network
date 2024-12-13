<x-guest-layout>
    <x-navbar />
    <x-sample-hero image="{{ asset('images/home/hero_bg_2.jpg') }}" title="The secret to <br> living is giving."
        buttonText="Start Now" />



    <x-horizontal-short-video-scroller width="w-full">
        @slot('heading')
            <div class="flex flex-col lg:flex-row items-start lg:items-center mx-3">
                <h3 class="text-3xl font-bold my-2 lg:my-4">
                    Events That Liberate
                </h3>
                <span class="text-lg text-gray-500 lg:ml-5 mt-2 lg:mt-0">Discover ></span>
            </div>
        @endslot
        <!-- Card -->
        <x-short-video-card :high="480" image="{{ asset('images/home/hero_bg.jpg') }}" title="David Lah"
            subtitle="BUSINESS MASTERY" description="Grow your business exponentially" />
        <!-- Card -->
        <x-short-video-card :high="480" video="{{ asset('videos/short.mp4') }}" title="David Lah"
            subtitle="BUSINESS MASTERY" description="Grow your business exponentially" />
        <!-- Card -->
        <x-short-video-card :high="480" youtubeUrl="https://www.youtube.com/shorts/lp93rdQur3s" title="David Lah"
            subtitle="BUSINESS MASTERY" description="Grow your business exponentially" />
        <!-- Card -->
        <x-short-video-card :high="480" youtubeUrl="https://www.youtube.com/watch?v=nHLURbKaoSg" title="David Lah"
            subtitle="BUSINESS MASTERY" description="Grow your business exponentially" />
        <!-- Card -->
        <x-short-video-card :high="480" youtubeUrl="https://www.youtube.com/shorts/Z4QnEWEraAc" title="David Lah"
            subtitle="BUSINESS MASTERY" description="Grow your business exponentially" />
        <!-- Card -->
        <x-short-video-card :high="480" youtubeUrl="https://www.youtube.com/shorts/gV3YNr8GsfE" title="David Lah"
            subtitle="BUSINESS MASTERY" description="Grow your business exponentially" />
        <!-- Card -->
        <x-short-video-card :high="480" youtubeUrl="https://www.youtube.com/watch?v=QwKKHvIbKD0" title="David Lah"
            subtitle="BUSINESS MASTERY" description="Grow your business exponentially" />
    </x-horizontal-short-video-scroller>
    <x-feature-section image="{{ asset('images/home/hero_bg.jpg') }}" title="Total life change"
        description="No matter what season of life you're in or what area you're looking to accelerate, The Robbins Success System is a catalyst for massive progress."
        buttonText="Learn more" imagePosition="right" />

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Section Title -->
            <h2 class="text-4xl font-bold text-center text-black mb-12">
                Create a competitive edge
            </h2>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Card 1 -->
                <div class="flex items-start space-x-4">
                    <div class="p-3 bg-gray-100 rounded-lg flex items-center justify-center w-12 h-12">
                        <i class="fas fa-car text-xl text-black"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black mb-2">Understand your roadblocks</h3>
                        <p class="text-gray-600">
                            Dive deep into the limiting beliefs that keep you from experiencing the exponential growth
                            you
                            want.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex items-start space-x-4">
                    <div class="p-3 bg-gray-100 rounded-lg flex items-center justify-center w-12 h-12">
                        <i class="fas fa-user text-xl text-black"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black mb-2">Lead more effectively</h3>
                        <p class="text-gray-600">
                            Build a roadmap for success and become a master of execution in any setting.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex items-start space-x-4">
                    <div class="p-3 bg-gray-100 rounded-lg flex items-center justify-center w-12 h-12">
                        <i class="fas fa-leaf text-xl text-black"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black mb-2">Thrive in hard times</h3>
                        <p class="text-gray-600">
                            Develop strategies for overcoming any hurdle you encounter, including changing economic and
                            market conditions.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="flex items-start space-x-4">
                    <div class="p-3 bg-gray-100 rounded-lg flex items-center justify-center w-12 h-12">
                        <i class="fas fa-handshake text-xl text-black"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black mb-2">Recruit and retain top talent</h3>
                        <p class="text-gray-600">
                            Learn how to create a growth culture, foster employee leadership and retain your
                            high-performers.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="flex items-start space-x-4">
                    <div class="p-3 bg-gray-100 rounded-lg flex items-center justify-center w-12 h-12">
                        <i class="fas fa-dollar-sign text-xl text-black"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black mb-2">Increase revenue</h3>
                        <p class="text-gray-600">
                            Learn how to optimize costs, customer experience, culture, and market factors.
                        </p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="flex items-start space-x-4">
                    <div class="p-3 bg-gray-100 rounded-lg flex items-center justify-center w-12 h-12">
                        <i class="fas fa-map-marker-alt text-xl text-black"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black mb-2">Stay on track</h3>
                        <p class="text-gray-600">
                            With regular sessions, you’ll have the accountability you need to see consistent change.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />

</x-guest-layout>
