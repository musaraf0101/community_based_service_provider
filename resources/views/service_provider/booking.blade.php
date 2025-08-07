@extends('layouts.dashboard')

@section('dashboard')

<body class="bg-gray-100 font-sans">
    <div class="flex flex-col md:flex-row min-h-screen">

        @include('components.service_provider_sidebar')

        <main class="flex-1 p-8 overflow-auto">

            @include('components.dashboard_header')

            <section class="p-8 bg-white shadow-lg rounded-lg">
                <h2 class="text-2xl font-bold mb-6">Manage Bookings</h2>

                @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                    {{ session('error') }}
                </div>
                @endif

                <div class="overflow-x-auto">
                    <table class="min-w-full text-center">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="px-4 py-3">User</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Time</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Location</th>
                                <th class="px-4 py-3">Phone Number</th>
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
                                <td class="px-4 py-3">{{ $booking->address }}</td>
                                <td class="px-4 py-3">{{ $booking->phone_number }}</td>
                                <td class="px-4 py-3 space-x-2 flex justify-center">
                                    <form method="POST" action="{{ route('service_provider.bookings.destroy', $booking->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>

                                    <form action="{{ route('bookings.updateStatus', $booking->id) }}" method="POST" class="flex items-center space-x-2">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" class="rounded px-2 py-1 text-sm border-gray-300">
                                            <option value="pending" {{ $booking->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="completed" {{ $booking->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                        </select>
                                        <button type="submit" class="text-blue-600 hover:underline">Update</button>
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
</body>

@endsection