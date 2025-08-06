@php
    $userRole = Auth::user()->role;
@endphp

<!-- Dashboard Header -->
<header class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
    <div class="flex items-center space-x-2 text-gray-600">
        <!-- Simple SVG for a user icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>
        <span class="text-gray-500">{{ $userRole }}</span>
    </div>
</header>