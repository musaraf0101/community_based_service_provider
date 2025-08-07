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
                    <p><strong>Service Category:</strong> {{ $provider->profession ?? 'N/A' }}</p>
                    <p><strong>Service Provider Location:</strong> {{ $provider->address }}</p>
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
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-semibold">Phone Number</label>
                        <input type="text" name="phone_number" class="border rounded-lg px-3 py-2 w-full" required>
                    </div>

                    <label for="address" class="block text-sm font-medium text-gray-700 mb-1">District</label>
                    <select name="address" id="address"
                        class="w-full mb-6 rounded border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Please Select District</option>
                        @php
                        $districts = ['colombo', 'gampaha', 'kalutara', 'kandy', 'matale', 'nuwara-eliya', 'galle',
                        'matara', 'hambantota', 'jaffna', 'kilinochchi', 'mannar', 'mullaitivu', 'vavuniya',
                        'ampara', 'batticaloa', 'trincomalee', 'kurunegala', 'puttalam', 'anuradhapura',
                        'polonnaruwa', 'badulla', 'monaragala', 'kegalle', 'ratnapura'];
                        @endphp
                        @foreach ($districts as $district)
                        <option value="{{ $district }}" {{ old('address') == $district ? 'selected' : '' }}>
                            {{ ucfirst($district) }}
                        </option>
                        @endforeach
                    </select>

                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                        Confirm Booking
                    </button>
                </form>
            </div>
            @endsection