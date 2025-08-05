@extends('layouts.dashboard')
@section('dashboard')

<body class="bg-gray-100 font-sans">

    <!-- Main application container with a responsive flex layout -->
    <div class="flex flex-col md:flex-row min-h-screen">

        @include('components.user_sidebar')

        <!-- Main Content Area -->
        <main class="flex-1 p-8 overflow-auto">

            <!-- Header for the Booking List -->
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Bookings</h1>
                <div class="flex items-center space-x-2 text-gray-600">
                    <!-- Simple SVG for a user icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span>User</span>
                    <span class="text-gray-500">(User)</span>
                </div>
            </header>

            <!-- Summary Cards Section -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Total Events Card -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-gray-700">Total Events</h2>
                    <p class="text-4xl font-bold text-gray-900 mt-2">3</p>
                </div>
                <!-- Total Bookings Card -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-gray-700">Total Bookings</h2>
                    <p class="text-4xl font-bold text-gray-900 mt-2">3</p>
                </div>
            </section>

            <!-- Table Section -->
            <section class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Recent Bookings</h2>
                </div>
                <div class="overflow-x-auto">
                    <!--
                        This table is styled with no borders using Tailwind CSS.
                        The 'border-b' class is removed from the header and 'divide-y'
                        from the table body to achieve the borderless look.
                    -->
                    <table class="min-w-full text-left table-auto">
                        <thead class="text-gray-600">
                            <tr>
                                <th class="py-3 px-4 font-semibold">ID</th>
                                <th class="py-3 px-4 font-semibold">Event</th>
                                <th class="py-3 px-4 font-semibold">User</th>
                                <th class="py-3 px-4 font-semibold">Booking Date</th>
                                <th class="py-3 px-4 font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Booking 1 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="py-3 px-4">201</td>
                                <td class="py-3 px-4">Music Festival 2023</td>
                                <td class="py-3 px-4">John Doe</td>
                                <td class="py-3 px-4">2023-10-20</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-600 hover:underline">Edit</a> |
                                    <a href="#" class="text-red-600 hover:underline">Delete</a>
                                </td>
                            </tr>
                            <!-- Example Booking 2 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="py-3 px-4">202</td>
                                <td class="py-3 px-4">Tech Conference</td>
                                <td class="py-3 px-4">Jane Smith</td>
                                <td class="py-3 px-4">2023-11-05</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-600 hover:underline">Edit</a> |
                                    <a href="#" class="text-red-600 hover:underline">Delete</a>
                                </td>
                            </tr>
                            <!-- Example Booking 3 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="py-3 px-4">203</td>
                                <td class="py-3 px-4">Art Exhibition</td>
                                <td class="py-3 px-4">Peter Jones</td>
                                <td class="py-3 px-4">2023-11-28</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-600 hover:underline">Edit</a> |
                                    <a href="#" class="text-red-600 hover:underline">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>

    </div>
    @endsection