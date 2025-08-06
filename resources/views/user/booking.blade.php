@extends('layouts.dashboard')

@section('dashboard')

<body class="bg-gray-100 font-sans">
    <div class="flex flex-col md:flex-row min-h-screen">

        @include('components.user_sidebar')

        <main class="flex-1 p-8 overflow-auto">

            @include('components.dashboard_header')
            <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4">Book Service Provider</h2>

                <div class="mb-6">
                    <p><strong>Service Provider Name:</strong> {{ $provider->user->name }}</p>
                    <p><strong>Service Category:</strong> {{ $provider->business_name ?? 'N/A' }}</p>
                    <p><strong>Location:</strong> {{ $provider->address }}</p>
                    <p><strong>Your Name:</strong> {{ auth()->user()->name }}</p>
                    <p><strong>Your Email:</strong> {{ auth()->user()->email }}</p>
                </div>

                @if ($errors->any())
                <div class="mb-4 p-4 border border-red-400 bg-red-100 text-red-700 rounded">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

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