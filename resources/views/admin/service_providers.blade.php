@extends('layouts.dashboard')
@section('dashboard')
<div class="flex flex-col md:flex-row min-h-screen">
    @include('components.admin_sidebar')
    <main class="flex-1 p-8 overflow-auto">
        @include('components.dashboard_header')

        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Pending Service Providers</h1>
            <a href="{{ route('admin.providers.approved') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                View Approved Providers
            </a>
        </div>

        <table class="w-full border border-gray-200 rounded-lg overflow-hidden shadow-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Business</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Phone</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($providers as $provider)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-3 text-gray-800">{{ $provider->user->name }}</td>
                    <td class="px-6 py-3 text-gray-800">{{ $provider->business_name }}</td>
                    <td class="px-6 py-3 text-gray-800">{{ $provider->phone }}</td>
                    <td class="px-6 py-3 space-x-2">
                        {{-- Preview Button --}}
                        <a href="{{ route('admin.providers.show', $provider->id) }}"
                            class="px-3 py-1 border border-blue-600 text-blue-600 rounded hover:bg-blue-600 hover:text-white transition">
                            Preview
                        </a>

                        {{-- Approve Button --}}
                        <form action="{{ route('admin.providers.approve', $provider->id) }}" method="POST" class="inline">
                            @csrf
                            <button
                                class="px-3 py-1 border border-green-600 text-green-600 rounded hover:bg-green-600 hover:text-white transition">
                                Approve
                            </button>
                        </form>

                        {{-- Reject Button --}}
                        <form action="{{ route('admin.providers.reject', $provider->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button
                                class="px-3 py-1 border border-red-600 text-red-600 rounded hover:bg-red-600 hover:text-white transition">
                                Reject
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</div>
@endsection