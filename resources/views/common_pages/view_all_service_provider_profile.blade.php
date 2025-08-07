@extends('layouts.main')
@section('content')
@include('components.navbar')
<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f8fafc;
    }

    .hero-background {
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url('https://placehold.co/1920x800/222222/FFFFFF?text=Local+Services+Background');
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
        </div>
    </header>

    <div class="container mx-auto mt-6 px-4">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Sidebar Filter -->
            <div class="w-full md:w-1/4">
                <div class="bg-white p-5 rounded-lg shadow-md">
                    <h5 class="mb-4 text-lg font-semibold">Services</h5>

                    <!-- Location Filter -->
                    <div class="mb-4 border border-gray-200 rounded-lg overflow-hidden">
                        <button class="w-full flex justify-between items-center px-4 py-3 bg-gray-100 font-medium text-sm toggle-filter" data-toggle="location">
                            Location <span class="transition-transform">&#9660;</span>
                        </button>
                        <div class="hidden px-4 py-3 bg-white" id="location-options">
                            <ul class="space-y-2">
                                @php
                                $districts = [
                                "Colombo", "Gampaha", "Kalutara", "Kandy", "Matale", "Nuwara Eliya",
                                "Galle", "Matara", "Hambantota", "Jaffna", "Kilinochchi", "Mannar",
                                "Mullaitivu", "Vavuniya", "Ampara", "Batticaloa", "Trincomalee",
                                "Kurunegala", "Puttalam", "Anuradhapura", "Polonnaruwa",
                                "Badulla", "Monaragala", "Kegalle", "Ratnapura"
                                ];
                                @endphp
                                @foreach($districts as $district)
                                <li class="flex items-center space-x-2">
                                    <input type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded"
                                        value="{{ strtolower($district) }}"
                                        id="district-{{ strtolower($district) }}">
                                    <label for="district-{{ strtolower($district) }}" class="text-sm cursor-pointer">
                                        {{ $district }}
                                    </label>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Profession Filter -->
                    <div class="mb-4 border border-gray-200 rounded-lg overflow-hidden">
                        <button
                            class="w-full flex justify-between items-center px-4 py-3 bg-gray-100 font-medium text-sm toggle-filter"
                            data-toggle="profession">
                            Profession <span class="transition-transform">&#9660;</span>
                        </button>
                        <div class="hidden px-4 py-3 bg-white" id="profession-options">
                            <ul class="space-y-2">
                                @php
                                $professions = [
                                'Plumber','Electrician','Mechanic','Carpenter','Painter','Mason','Roofer',
                                'Gardener','Cleaner','Housekeeper','HVAC Technician','Welder','Appliance Repair Technician',
                                'Tailor','Tutor','IT / Computer Technician','Security Guard','Driver','Beautician','Hairdresser',
                                'Photographer','Courier Service','Home Health Aide','Pool Cleaner','Maintenance Specialist'
                                ];
                                @endphp
                                @foreach($professions as $profession)
                                <li class="flex items-center space-x-2">
                                    <input type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded"
                                        value="{{ strtolower($profession) }}"
                                        id="profession-{{ strtolower($profession) }}">
                                    <label for="profession-{{ strtolower($profession) }}" class="text-sm cursor-pointer">
                                        {{ $profession }}
                                    </label>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profiles Grid -->
            <div class="w-full md:w-3/4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($providers as $provider)
                    <div class="provider-card bg-white shadow-md rounded-xl flex flex-col h-full p-5"
                        data-location="{{ strtolower($provider->address) }}"
                        data-profession="{{ strtolower($provider->profession) }}">

                        <h5 class="text-lg font-semibold mb-1">{{ $provider->user->name}}</h5>

                        <!-- Rating -->
                        <div class="flex items-center text-yellow-400 text-sm mb-2">
                            <span class="ml-2 text-gray-600 text-xs">Rating: {{ number_format($provider->ratings()->avg('rating'), 1) ?? '0.0' }} / 5</span>
                        </div>

                        <p class="text-gray-500 text-sm mb-3">
                            Get high-priority help with guaranteed response time.
                        </p>

                        <ul class="text-gray-600 text-sm mb-4 space-y-1">
                            <li class="flex items-center">
                                <i class="bi bi-geo-alt-fill mr-1"></i>
                                Location: <strong class="ml-1">{{ $provider->address }}</strong>
                            </li>
                            <li class="flex items-center">
                                <i class="bi bi-person-fill-check mr-1"></i>
                                Profession: <strong class="ml-1">{{ $provider->profession }}</strong>
                            </li>
                            <li class="flex items-center">
                                <strong class="ml-1 px-2 py-1 rounded-full
                                    @if($provider->status === 'pending') 
                                        text-yellow-500 border border-yellow-500
                                    @elseif($provider->status === 'approved') 
                                        text-green-600 border border-green-600
                                    @else 
                                        text-gray-700 border border-gray-700
                                    @endif">
                                    {{ $provider->status }}
                                </strong>
                            </li>
                        </ul>

                        <!-- Book Button - only show if approved -->
                        @if($provider->status === 'approved')
                        <div class="mt-auto flex space-x-2">
                            <a href="{{ auth()->check() ? route('providers.book', $provider->id) : route('login', ['redirect_to' => route('providers.book', $provider->id)]) }}"
                                class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg text-center text-sm">
                                <i class="bi bi-calendar-check-fill mr-1"></i> Book Now
                            </a>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.toggle-filter').forEach(btn => {
                btn.addEventListener('click', () => {
                    const body = document.getElementById(btn.dataset.toggle + '-options');
                    const arrow = btn.querySelector('span');
                    body.classList.toggle('hidden');
                    arrow.classList.toggle('rotate-180');
                });
            });

            function applyFilters() {
                const selectedDistricts = Array.from(document.querySelectorAll('#location-options input:checked')).map(cb => cb.value);
                const selectedProfessions = Array.from(document.querySelectorAll('#profession-options input:checked')).map(cb => cb.value);

                document.querySelectorAll('.provider-card').forEach(card => {
                    const district = card.dataset.location;
                    const profession = card.dataset.profession;

                    const matchDistrict = selectedDistricts.length === 0 || selectedDistricts.includes(district);
                    const matchProfession = selectedProfessions.length === 0 || selectedProfessions.includes(profession);

                    card.style.display = (matchDistrict && matchProfession) ? '' : 'none';
                });
            }

            document.querySelectorAll('input[type="checkbox"]').forEach(cb => {
                cb.addEventListener('change', applyFilters);
            });
        });
    </script>

    <!-- Lucide Icon Init -->
    <script>
        lucide.createIcons();
    </script>
@endsection
