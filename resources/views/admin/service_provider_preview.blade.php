@extends('layouts.dashboard')
@section('dashboard')
<div class="flex flex-col md:flex-row min-h-screen">
    @include('components.admin_sidebar')
    <main class="flex-1 p-8 overflow-auto">
        @include('components.dashboard_header')
        <div class="max-w-3xl mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Service Provider Preview</h1>

            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <p class="text-gray-600 font-semibold">Name:</p>
                    <p class="text-gray-900">{{ $provider->user->name }}</p>
                </div>
                <div>
                    <p class="text-gray-600 font-semibold">Email:</p>
                    <p class="text-gray-900">{{ $provider->user->email }}</p>
                </div>
                <div>
                    <p class="text-gray-600 font-semibold">Business Name:</p>
                    <p class="text-gray-900">{{ $provider->business_name }}</p>
                </div>
                <div>
                    <p class="text-gray-600 font-semibold">Phone:</p>
                    <p class="text-gray-900">{{ $provider->phone }}</p>
                </div>
                <div class="col-span-2">
                    <p class="text-gray-600 font-semibold">Address:</p>
                    <p class="text-gray-900">{{ $provider->address }}</p>
                </div>
                <div>
                    <p class="text-gray-600 font-semibold">Status:</p>
                    <span class="px-2 py-1 rounded text-white 
                @if($provider->status === 'approved') bg-green-600 
                @elseif($provider->status === 'pending') bg-yellow-500 
                @else bg-red-600 @endif">
                        {{ ucfirst($provider->status) }}
                    </span>
                </div>
            </div>

            <div class="flex justify-end space-x-3 mt-6">
                <a href="{{ route('admin.providers') }}"
                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition">
                    Back
                </a>

                <form action="{{ route('admin.providers.approve', $provider->id) }}" method="POST" class="inline">
                    @csrf
                    <button
                        class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
                        Approve
                    </button>
                </form>

                <form action="{{ route('admin.providers.reject', $provider->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button
                        class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">
                        Reject
                    </button>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection