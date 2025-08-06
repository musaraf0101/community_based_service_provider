@extends('layouts.main')
@section('content')
@include('components.navbar')
<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f8fafc;
        /* Light Slate 50 */
    }

    .hero-background {
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url('https://placehold.co/1920x800/222222/FFFFFF?text=Local+Services+Background');
        /* Placeholder image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>

<body class="text-gray-800">
    <!-- Hero Section -->
    <header class="hero-background text-white py-20 md:py-32 flex items-center justify-center">
        <div class="text-center px-4 max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                Your Local Services, Just a Click Away.
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-10">
                Connect with trusted Skill Workers in your community.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8">
                <input type="text" placeholder="What service do you need?" class="w-full sm:w-80 p-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-800" aria-label="Service search input">
                <input type="text" placeholder="Your location" class="w-full sm:w-64 p-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-800" aria-label="Location search input">
                <button class="w-full sm:w-auto px-8 py-4 bg-indigo-600 text-white rounded-lg font-semibold shadow-md hover:bg-indigo-700 transition duration-300 ease-in-out transform hover:scale-105 flex items-center justify-center">
                    <i data-lucide="search" class="w-5 h-5 mr-2"></i> Find
                </button>
            </div>
        </div>
    </header>
    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
@endsection