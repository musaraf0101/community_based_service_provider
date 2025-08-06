@extends('layouts.dashboard')
@section('dashboard')

<div class="flex flex-col md:flex-row min-h-screen">
    @include('components.admin_sidebar')
    <main class="flex-1 p-8 overflow-auto">
        @include('components.dashboard_header')
        <div class="max-w-6xl mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Approved Service Providers</h1>

            @if($providers->isEmpty())
            <p class="text-gray-600">No approved service providers found.</p>
            @else

            @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
            @endif

            @if(session('error'))
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">{{ session('error') }}</div>
            @endif

            <table class="w-full border border-gray-200 rounded-lg overflow-hidden shadow-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Business</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Phone</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Email</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Joined</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($providers as $provider)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-3 text-gray-800">{{ $provider->user->name }}</td>
                        <td class="px-6 py-3 text-gray-800">{{ $provider->business_name }}</td>
                        <td class="px-6 py-3 text-gray-800">{{ $provider->phone }}</td>
                        <td class="px-6 py-3 text-gray-800">{{ $provider->user->email }}</td>
                        <td class="px-6 py-3 text-gray-800">{{ $provider->created_at->format('d M Y') }}</td>
                        <td class="px-6 py-3 space-x-2">
                            <a href="{{ route('admin.providers.show', $provider->id) }}"
                                class="px-3 py-1 border border-blue-600 text-blue-600 rounded hover:bg-blue-600 hover:text-white transition">
                                Preview
                            </a>
                            <form action="{{ route('admin.providers.destroy', $provider->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="px-3 py-1 border border-red-600 text-red-600 rounded hover:bg-red-600 hover:text-white transition">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </main>
</div>
@endsection