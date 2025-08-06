@extends('layouts.dashboard')
@section('dashboard')
<!-- Main application container with a responsive flex layout -->
<div class="flex flex-col md:flex-row min-h-screen">

    @include('components.admin_sidebar')
    <!-- Main Content Area -->
    <main class="flex-1 p-8 overflow-auto">

    @include('components.dashboard_header')

        <!-- Summary Cards Section -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Total Events Card -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-700">Total Events</h2>
                <p class="text-4xl font-bold text-gray-900 mt-2">totalEvent</p>
            </div>
            <!-- Total Users Card -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-700">Total Users</h2>
                <p class="text-4xl font-bold text-gray-900 mt-2">totalUser</p>
            </div>
            <!-- Total Bookings Card -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-700">Total Bookings</h2>
                <p class="text-4xl font-bold text-gray-900 mt-2">totalBooking</p>
            </div>
        </section>

        <!-- Recent Users Table Section -->
        <section class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-800">Recent Events</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-left table-auto">
                    <thead class="text-gray-600 border-b-2 border-gray-200">
                        <tr>
                            <th class="py-3 px-4 font-semibold">ID</th>
                            <th class="py-3 px-4 font-semibold">Event Title</th>
                            <th class="py-3 px-4 font-semibold">Event Date</th>
                            <th class="py-3 px-4 font-semibold">Event Category</th>
                            <th class="py-3 px-4 font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">

                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="py-3 px-4">event->id </td>
                            <td class="py-3 px-4">event eventTitle</td>
                            <td class="py-3 px-4">eventeventDate</td>
                            <td class="py-3 px-4">eventeventCategory</td>
                            <td class="py-3 px-4">
                                <div class="flex items-center space-x-2">
                                    <a href=""
                                        class="text-blue-600 hover:underline">Edit</a> &nbsp;&nbsp;|

                                    <form action="" method="POST">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

</div>

@endsection