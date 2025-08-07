@extends('layouts.dashboard')
@section('dashboard')

<div class="flex flex-col md:flex-row min-h-screen">
    @include('components.admin_sidebar')
    <main class="flex-1 p-8 overflow-auto">
        @include('components.dashboard_header')
        <div class="max-w-6xl mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-6">All Users</h1>

            @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
            @endif

            @if(session('error'))
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">{{ session('error') }}</div>
            @endif

            @if($users->isEmpty())
            <p class="text-gray-600">No users found.</p>
            @else
            <table class="w-full border border-gray-200 rounded-lg overflow-hidden shadow-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Email</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Registered At</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($users as $user)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-3 text-gray-800">{{ $user->name }}</td>
                        <td class="px-6 py-3 text-gray-800">{{ $user->email }}</td>
                        <td class="px-6 py-3 text-gray-800">{{ $user->created_at->format('d M Y') }}</td>
                        <td class="px-6 py-3 space-x-2">
                            @if($user->role !== 'admin')
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="px-3 py-1 border border-red-600 text-red-600 rounded hover:bg-red-600 hover:text-white transition">
                                    Delete
                                </button>
                            </form>
                            @else
                            <span class="text-gray-400 italic">Cannot delete admin</span>
                            @endif
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