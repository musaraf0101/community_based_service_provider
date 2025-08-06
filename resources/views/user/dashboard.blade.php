@extends('layouts.dashboard')
@section('dashboard')

<body class="bg-gray-100 font-sans">

    <!-- Main application container with a responsive flex layout -->
    <div class="flex flex-col md:flex-row min-h-screen">

        @include('components.user_sidebar')

        <!-- Main Content Area -->
        <main class="flex-1 p-8 overflow-auto">

            @include('components.dashboard_header')


            <section class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">My Booking History</h2>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full text-left table-auto">
                        <thead class="text-gray-600 bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 font-semibold">ID</th>
                                <th class="py-3 px-4 font-semibold">Service Provider</th>
                                <th class="py-3 px-4 font-semibold">Booking Date</th>
                                <th class="py-3 px-4 font-semibold">Status</th>
                                <th class="py-3 px-4 font-semibold">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <!-- Static Row 1 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="py-3 px-4">101</td>
                                <td class="py-3 px-4">John's Plumbing</td>
                                <td class="py-3 px-4">12 Feb 2025</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700">
                                        Pending
                                    </span>
                                </td>
                                <td class="py-3 px-4 flex space-x-3">
                                    <a href="#" class="text-blue-600 hover:underline">Rating</a>
                                    <a href="#" class="text-red-600 hover:underline">Delete</a>
                                </td>
                            </tr>
                            <!-- Static Row 2 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="py-3 px-4">102</td>
                                <td class="py-3 px-4">Elite Electricians</td>
                                <td class="py-3 px-4">28 Jan 2025</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                                        Completed
                                    </span>
                                </td>
                                <td class="py-3 px-4 flex space-x-3">
                                    <a href="#" class="text-blue-600 hover:underline">Rating</a>
                                    <a href="#" class="text-red-600 hover:underline">Delete</a>
                                </td>
                            </tr>
                            <!-- Static Row 3 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="py-3 px-4">103</td>
                                <td class="py-3 px-4">QuickFix Carpenters</td>
                                <td class="py-3 px-4">20 Jan 2025</td>
                                <td class="py-3 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-700">
                                        Cancelled
                                    </span>
                                </td>
                                <td class="py-3 px-4 flex space-x-3">
                                    <a href="#" class="text-blue-600 hover:underline">Rating</a>
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