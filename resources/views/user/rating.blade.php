@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-6 mt-10">
    <h2 class="text-2xl font-semibold mb-4">Rate {{ $provider->user->name }}</h2>

    @if(session('success'))
    <div class="mb-4 text-green-600">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('ratings.store', $provider->id) }}">
        @csrf
        <label class="block text-gray-700 mb-2">Rating (1 to 5)</label>
        <select name="rating" class="border rounded w-full mb-4 p-2">
            <option value="">Select Rating</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                @endfor
        </select>

        <label class="block text-gray-700 mb-2">Review (Optional)</label>
        <textarea name="review" rows="4" class="border rounded w-full mb-4 p-2"></textarea>

        <button type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            Submit Rating
        </button>
    </form>
</div>
@endsection