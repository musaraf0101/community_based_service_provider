@extends('layouts.dashboard')
@section('dashboard')

<body class="bg-gray-100 font-sans">
    <div class="flex flex-col md:flex-row min-h-screen">

        @include('components.service_provider_sidebar')

        <main class="flex-1 p-8 overflow-auto">

            @include('components.dashboard_header')

            <section class="p-8 bg-white shadow-lg rounded-lg">
                <h2 class="text-2xl font-bold mb-6">Bookings</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-center">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="px-4 py-3">User</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Time</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse($bookings as $booking)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3">{{ $booking->user->name ?? 'N/A' }}</td>
                                <td class="px-4 py-3">{{ \Carbon\Carbon::parse($booking->booking_date)->format('Y-m-d') }}</td>
                                <td class="px-4 py-3">{{ \Carbon\Carbon::parse($booking->booking_time)->format('h:i A') }}</td>
                                <td class="px-4 py-3">
                                    @if($booking->status === 'pending')
                                    <span class="text-yellow-700 bg-yellow-100 px-3 py-1 rounded-full text-xs font-semibold">Pending</span>
                                    @elseif($booking->status === 'completed')
                                    <span class="text-green-700 bg-green-100 px-3 py-1 rounded-full text-xs font-semibold">Completed</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 space-x-2">
                                    <form method="POST" action="{{ route('service_provider.bookings.destroy', $booking->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>
                                    <a href="#" class="text-blue-600 hover:underline">Update</a>
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
</body>

@endsection
