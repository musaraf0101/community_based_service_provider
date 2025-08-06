@extends('layouts.main')
@section('content')
@include('components.navbar')

<!-- Hero Section -->
<section class="min-h-screen flex flex-col items-center justify-center bg-gray-50 px-4">
    <div class="text-center max-w-3xl mx-auto mb-12">
        <p class="text-teal-600 text-sm md:text-base font-semibold uppercase tracking-wide mb-2 rounded-full px-3 py-1 inline-block bg-teal-100">
            2 Minutes. No Hassle Guaranteed Work
        </p>
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6 text-gray-900">
            Find & book a local plumber
        </h1>
        <p class="text-lg md:text-xl text-gray-600 mb-8">
            Book a trusted plumber online in minutes.
        </p>
        <a href="/view-all-providers"
            class="px-4 py-2 bg-white text-indigo-700 rounded-md font-semibold shadow-md 
          hover:bg-gray-100 transition duration-300 ease-in-out transform hover:scale-105 
          inline-flex items-center">
            Book Now
        </a>

    </div>

    <!-- Features Section -->
    <div class="flex flex-wrap justify-center gap-8 md:gap-16 mt-12 w-full max-w-4xl">
        <!-- Feature 1 -->
        <div class="flex flex-col items-center text-center p-4 bg-white rounded-lg shadow-md w-40 md:w-48">
            <div class="text-teal-500 text-4xl mb-3">✔️</div>
            <h3 class="text-lg font-semibold mb-1 text-gray-900">Verified and accredited</h3>
            <p class="text-sm text-gray-600">tradespeople</p>
        </div>

        <!-- Feature 2 -->
        <div class="flex flex-col items-center text-center p-4 bg-white rounded-lg shadow-md w-40 md:w-48">
            <div class="text-teal-500 text-4xl mb-3">⏱️</div>
            <h3 class="text-lg font-semibold mb-1 text-gray-900">30 mins emergency</h3>
            <p class="text-sm text-gray-600">response</p>
        </div>

        <!-- Feature 3 -->
        <div class="flex flex-col items-center text-center p-4 bg-white rounded-lg shadow-md w-40 md:w-48">
            <div class="text-teal-500 text-4xl mb-3">🛡️</div>
            <h3 class="text-lg font-semibold mb-1 text-gray-900">12 Months</h3>
            <p class="text-sm text-gray-600">warranty</p>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-gray-900">How It Works</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Step 1 -->
            <div class="flex flex-col items-center p-6 rounded-lg shadow-lg bg-gray-50 hover:shadow-xl transition duration-300">
                <div class="bg-indigo-100 p-4 rounded-full mb-6">
                    <i data-lucide="search" class="w-10 h-10 text-indigo-600"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-900">1. Search & Discover</h3>
                <p class="text-gray-600">Easily find local service providers by category, location, or specific needs.</p>
            </div>
            <!-- Step 2 -->
            <div class="flex flex-col items-center p-6 rounded-lg shadow-lg bg-gray-50 hover:shadow-xl transition duration-300">
                <div class="bg-indigo-100 p-4 rounded-full mb-6">
                    <i data-lucide="calendar-check" class="w-10 h-10 text-indigo-600"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-900">2. Book with Confidence</h3>
                <p class="text-gray-600">View profiles, read reviews, and book services directly through our platform.</p>
            </div>
            <!-- Step 3 -->
            <div class="flex flex-col items-center p-6 rounded-lg shadow-lg bg-gray-50 hover:shadow-xl transition duration-300">
                <div class="bg-indigo-100 p-4 rounded-full mb-6">
                    <i data-lucide="sparkles" class="w-10 h-10 text-indigo-600"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-900">3. Get Quality Service</h3>
                <p class="text-gray-600">Receive top-notch service from verified and trusted local professionals.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action for Providers -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Are You a Service Provider?</h2>
        <p class="text-lg md:text-xl mb-8">
            Join our growing network and connect with customers in your area.
        </p>
        <a href="/login"
            class="px-4 py-2 bg-white text-indigo-700 rounded-md font-semibold shadow-md 
          hover:bg-gray-100 transition duration-300 ease-in-out transform hover:scale-105 
          inline-flex items-center">
            <i data-lucide="briefcase" class="w-4 h-4 mr-2"></i>
            List Your Services
        </a>
    </div>
</section>

<!-- Featured Service Categories Section -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-gray-900">Featured Service Categories</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Category Card 1 -->
            <div class="flex flex-col items-center p-6 rounded-lg shadow-md bg-white hover:shadow-xl transition duration-300 cursor-pointer">
                <div class="bg-blue-100 p-4 rounded-full mb-4">
                    <i data-lucide="wrench" class="w-8 h-8 text-blue-600"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-gray-900">Home Repair</h3>
                <p class="text-gray-600 text-sm">Plumbing, Electrical, Carpentry & more.</p>
            </div>
            <!-- Category Card 2 -->
            <div class="flex flex-col items-center p-6 rounded-lg shadow-md bg-white hover:shadow-xl transition duration-300 cursor-pointer">
                <div class="bg-green-100 p-4 rounded-full mb-4">
                    <i data-lucide="leaf" class="w-8 h-8 text-green-600"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-gray-900">Yard & Garden</h3>
                <p class="text-gray-600 text-sm">Landscaping, Tree Trimming, Lawn Care.</p>
            </div>
            <!-- Category Card 3 -->
            <div class="flex flex-col items-center p-6 rounded-lg shadow-md bg-white hover:shadow-xl transition duration-300 cursor-pointer">
                <div class="bg-purple-100 p-4 rounded-full mb-4">
                    <i data-lucide="sparkles" class="w-8 h-8 text-purple-600"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-gray-900">Cleaning Services</h3>
                <p class="text-gray-600 text-sm">House Cleaning, Deep Cleaning, Office Cleaning.</p>
            </div>
            <!-- Category Card 4 -->
            <div class="flex flex-col items-center p-6 rounded-lg shadow-md bg-white hover:shadow-xl transition duration-300 cursor-pointer">
                <div class="bg-orange-100 p-4 rounded-full mb-4">
                    <i data-lucide="car" class="w-8 h-8 text-orange-600"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-gray-900">Automotive</h3>
                <p class="text-gray-600 text-sm">Mechanics, Detailing, Tire Services.</p>
            </div>
        </div>
        <!-- View More Button -->
        <div class="text-center mt-12">
            <a href="/view-all-providers"
                class="inline-block border border-blue-600 hover:bg-blue-600 hover:text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition">
                Find A Service Provider
            </a>
        </div>
</section>

<!-- Initialize Lucide Icons -->
<script>
    lucide.createIcons();
</script>

@include('components.footer')
@endsection