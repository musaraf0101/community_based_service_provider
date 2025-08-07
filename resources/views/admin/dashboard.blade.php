@extends('layouts.dashboard')
@section('dashboard')

<div class="flex flex-col md:flex-row min-h-screen">

    @include('components.admin_sidebar')

    <main class="flex-1 p-8 overflow-auto">

    @include('components.dashboard_header')


        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-700">Total Service Providers</h2>
                <p class="text-4xl font-bold text-gray-900 mt-2">{{ $totalServiceProviders }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-700">Total Users</h2>
                <p class="text-4xl font-bold text-gray-900 mt-2">{{ $totalUsers }}</p>
            </div>
        </section>

    </main>

</div>

@endsection