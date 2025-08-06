@extends('layouts.dashboard')
@section('dashboard')

<body class="bg-gray-100 font-sans">

    <!-- Main application container with a responsive flex layout -->
    <div class="flex flex-col md:flex-row min-h-screen">

        @include('components.user_sidebar')

        <!-- Main Content Area -->
        <main class="flex-1 p-8 overflow-auto">

            @include('components.dashboard_header')

            <div class="bg-white p-6 rounded-lg shadow-md max-w-xl mx-auto mt-10">
                <h2 class="text-2xl font-semibold mb-4">Rate {{ $provider->user->name }}</h2>

                @if(session('success'))
                <div class="mb-4 text-green-600">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                <div class="mb-4 text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route('ratings.store', $provider->id) }}">
                    @csrf
                    <label class="block text-gray-700 mb-2">Rating (1 to 5)</label>
                    <select name="rating" class="border rounded w-full mb-4 p-2">
                        <option value="">Select Rating</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>
                            {{ $i }} Star{{ $i > 1 ? 's' : '' }}
                            </option>
                            @endfor
                    </select>

                    <label class="block text-gray-700 mb-2">Review (Optional)</label>
                    <textarea name="review" rows="4" class="border rounded w-full mb-4 p-2">{{ old('review') }}</textarea>

                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                        Submit Rating
                    </button>
                </form>
            </div>
        </main>
    </div>
    @endsection