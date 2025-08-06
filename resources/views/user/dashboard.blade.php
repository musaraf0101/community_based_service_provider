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
                            @forelse($bookings as $booking)
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="py-3 px-4">{{ $booking->id }}</td>
                                <td class="py-3 px-4">{{ optional(optional($booking->serviceProvider)->user)->name ?? 'N/A' }}</td>
                                <td class="py-3 px-4">
                                    {{ \Carbon\Carbon::parse($booking->booking_date)->format('d M Y') }}
                                </td>
                                <td class="py-3 px-4">
                                    @if($booking->status === 'pending')
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700">
                                        Pending
                                    </span>
                                    @elseif($booking->status === 'completed')
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                                        Completed
                                    </span>
                                    @else
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-700">
                                        {{ ucfirst($booking->status) }}
                                    </span>
                                    @endif
                                </td>
                                <td class="py-3 px-4 flex space-x-3">
                                    <a href="{{ optional($booking->serviceProvider) ? route('ratings.create', $booking->serviceProvider->id) : '#' }}" class="text-blue-600 hover:underline">
                                        Rating
                                    </a>
                                    <form method="POST" action="{{ route('bookings.destroy', $booking->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-gray-500">No bookings found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>


        </main>

    </div>
    @endsection