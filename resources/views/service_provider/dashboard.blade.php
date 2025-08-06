@extends('layouts.dashboard')
@section('dashboard')

<body class="bg-gray-100 font-sans">
    <div class="flex flex-col md:flex-row min-h-screen">

        @include('components.service_provider_sidebar')

        <main class="flex-1 p-8 overflow-auto">

            @include('components.dashboard_header')

            <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-gray-700">Pending Bookings</h2>
                    <p class="text-4xl font-bold text-gray-900 mt-2">3</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-gray-700">Complete Bookings</h2>
                    <p class="text-4xl font-bold text-gray-900 mt-2">3</p>
                </div>
            </section>
            <section class="p-8 bg-white shadow-lg rounded-lg">
                <h2 class="text-2xl font-bold mb-6"> Bookings</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-center">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="px-4 py-3">User</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Time</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            {{-- Static Example --}}
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3">Alice</td>
                                <td class="px-4 py-3">2025-08-08</td>
                                <td class="px-4 py-3">10:30 AM</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3">Bob</td>
                                <td class="px-4 py-3">2025-08-09</td>
                                <td class="px-4 py-3">2:00 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
    @endsection