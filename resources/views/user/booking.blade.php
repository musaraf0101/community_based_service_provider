@extends('layouts.dashboard')

@section('dashboard')
<div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Book Service Provider</h2>

    <div class="mb-6">
        <p><strong>Service Provider:</strong> {{ $provider->user->name }}</p>
        <p><strong>Business Name:</strong> {{ $provider->business_name ?? 'N/A' }}</p>
        <p><strong>Location:</strong> {{ $provider->address }}</p>
        <p><strong>Your Name:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Your Email:</strong> {{ auth()->user()->email }}</p>
    </div>

    <form method="POST" action="{{ route('providers.book.store', $provider->id) }}">
        @csrf
        <div class="mb-4">
            <label class="block mb-2 text-sm font-semibold">Booking Date</label>
            <input type="date" name="booking_date" class="border rounded-lg px-3 py-2 w-full" required>
        </div>

        <div class="mb-4">
            <label class="block mb-2 text-sm font-semibold">Booking Time</label>
            <input type="time" name="booking_time" class="border rounded-lg px-3 py-2 w-full" required>
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
            Confirm Booking
        </button>
    </form>
</div>
@endsection