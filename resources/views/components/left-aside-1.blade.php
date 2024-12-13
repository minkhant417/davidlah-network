<!-- Left Sidebar -->
<aside class="space-y-6 col-span-1">
    <!-- Important Menu -->
    <div class="bg-gray-200 p-4 rounded">
        <h2 class="font-bold mb-2">Important Menu</h2>
        <ul class="space-y-2">
            <li class="pb-2"><a href="{{ route('home') }}">Home</a></li>
            <li class="pb-2"><a href="{{ route('proposals') }}">Proposals</a></li>
            <li class="pb-2"><a href="{{ route('appointments') }}">Appointments</a></li>
            <li class="pb-2"><a href="{{ route('programs') }}">Programs</a></li>
            <li class="pb-2"><a href="{{ route('events') }}">Events</a></li>
            <li class="pb-2"><a href="{{ route('career') }}">Employer & Talent</a></li>
            <li class="pb-2"><a href="{{ route('profile') }}">Profile</a></li>
        </ul>
    </div>

    <!-- Calendar -->
    <div class="bg-gray-200 p-4 rounded">
        <h2 class="font-bold mb-2">November</h2>
        <table class="w-full text-center border-separate" style="border-spacing: 0 10px;">
            <thead>
                <tr>
                    <th class="text-sm">Sun</th>
                    <th class="text-sm">Mon</th>
                    <th class="text-sm">Tue</th>
                    <th class="text-sm">Wed</th>
                    <th class="text-sm">Thu</th>
                    <th class="text-sm">Fri</th>
                    <th class="text-sm">Sat</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $daysInMonth = 31; // Number of days in the month
                    $startDay = 3; // Day of the week the month starts on (0=Sun, 1=Mon, ..., 6=Sat)
                    $currentDay = 1;
                @endphp
                @for ($week = 0; $week < ceil(($daysInMonth + $startDay) / 7); $week++)
                    <tr>
                        @for ($day = 0; $day < 7; $day++)
                            @if ($week === 0 && $day < $startDay)
                                <!-- Empty cells before the start day -->
                                <td class="text-xs text-gray-300 py-2"></td>
                            @elseif ($currentDay > $daysInMonth)
                                <!-- Empty cells after the last day -->
                                <td class="text-xs text-gray-300 py-2"></td>
                            @else
                                <!-- Calendar day -->
                                <td class="text-xs text-gray-600 py-2">{{ $currentDay }}</td>
                                @php $currentDay++; @endphp
                            @endif
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>


    </div>
</aside>
