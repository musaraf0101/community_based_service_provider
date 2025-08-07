@extends('layouts.main')

@section('content')
<style>
    /* Center the form vertically and horizontally */
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }
</style>

<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md mx-4">
    <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register.submit') }}">
        @csrf

        <!-- Name -->
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"
            class="w-full mb-4 rounded border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>

        <!-- Email -->
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}"
            class="w-full mb-4 rounded border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>

        <!-- Password -->
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" id="password" name="password"
            class="w-full mb-4 rounded border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>

        <!-- Confirm Password -->
        <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
        <input type="password" id="confirm_password" name="password_confirmation"
            class="w-full mb-4 rounded border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>

        <!-- Role -->
        <label for="role-select" class="block text-sm font-medium text-gray-700 mb-1">Role</label>
        <select id="role-select" name="role" required
            class="w-full mb-6 rounded border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            <option value="">Select Role</option>
            <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
            <option value="service_provider" {{ old('role') == 'service_provider' ? 'selected' : '' }}>Service Provider</option>
            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
        </select>

        <!-- Service Provider Fields -->
        <div id="service-provider-fields" style="display: none;">

            <!-- Phone -->
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone <span class="text-red-500">*</span></label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                class="w-full mb-4 rounded border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

            <!-- Profession -->
            <label for="profession" class="block text-sm font-medium text-gray-700 mb-1">Profession <span class="text-red-500">*</span></label>
            <select id="profession" name="profession"
                class="w-full mb-4 rounded border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="">Please Select Profession</option>
                <option value="plumber" {{ old('profession') == 'plumber' ? 'selected' : '' }}>Plumber</option>
                <option value="electrician" {{ old('profession') == 'electrician' ? 'selected' : '' }}>Electrician</option>
                <option value="mechanic" {{ old('profession') == 'mechanic' ? 'selected' : '' }}>Mechanic</option>
                <option value="carpenter" {{ old('profession') == 'carpenter' ? 'selected' : '' }}>Carpenter</option>
                <option value="painter" {{ old('profession') == 'painter' ? 'selected' : '' }}>Painter</option>
                <option value="mason" {{ old('profession') == 'mason' ? 'selected' : '' }}>Mason</option>
                <option value="roofer" {{ old('profession') == 'roofer' ? 'selected' : '' }}>Roofer</option>
                <option value="gardener" {{ old('profession') == 'gardener' ? 'selected' : '' }}>Gardener</option>
                <option value="cleaner" {{ old('profession') == 'cleaner' ? 'selected' : '' }}>Cleaner</option>
                <option value="housekeeper" {{ old('profession') == 'housekeeper' ? 'selected' : '' }}>Housekeeper</option>
                <option value="hvac-technician" {{ old('profession') == 'hvac-technician' ? 'selected' : '' }}>HVAC Technician</option>
                <option value="welder" {{ old('profession') == 'welder' ? 'selected' : '' }}>Welder</option>
                <option value="appliance-repair-technician" {{ old('profession') == 'appliance-repair-technician' ? 'selected' : '' }}>Appliance Repair Technician</option>
                <option value="tailor" {{ old('profession') == 'tailor' ? 'selected' : '' }}>Tailor</option>
                <option value="tutor" {{ old('profession') == 'tutor' ? 'selected' : '' }}>Tutor</option>
                <option value="it-computer-technician" {{ old('profession') == 'it-computer-technician' ? 'selected' : '' }}>IT / Computer Technician</option>
                <option value="security-guard" {{ old('profession') == 'security-guard' ? 'selected' : '' }}>Security Guard</option>
                <option value="driver" {{ old('profession') == 'driver' ? 'selected' : '' }}>Driver</option>
                <option value="beautician" {{ old('profession') == 'beautician' ? 'selected' : '' }}>Beautician</option>
                <option value="hairdresser" {{ old('profession') == 'hairdresser' ? 'selected' : '' }}>Hairdresser</option>
                <option value="photographer" {{ old('profession') == 'photographer' ? 'selected' : '' }}>Photographer</option>
                <option value="courier-service" {{ old('profession') == 'courier-service' ? 'selected' : '' }}>Courier Service</option>
                <option value="home-health-aide" {{ old('profession') == 'home-health-aide' ? 'selected' : '' }}>Home Health Aide</option>
                <option value="pool-cleaner" {{ old('profession') == 'pool-cleaner' ? 'selected' : '' }}>Pool Cleaner</option>
                <option value="maintenance-specialist" {{ old('profession') == 'maintenance-specialist' ? 'selected' : '' }}>Maintenance Specialist</option>
            </select>

            <!-- District (Address) -->
            <label for="address" class="block text-sm font-medium text-gray-700 mb-1">District</label>
            <select name="address" id="address"
                class="w-full mb-6 rounded border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="">Please Select District</option>
                @php
                    $districts = ['colombo', 'gampaha', 'kalutara', 'kandy', 'matale', 'nuwara-eliya', 'galle',
                        'matara', 'hambantota', 'jaffna', 'kilinochchi', 'mannar', 'mullaitivu', 'vavuniya',
                        'ampara', 'batticaloa', 'trincomalee', 'kurunegala', 'puttalam', 'anuradhapura',
                        'polonnaruwa', 'badulla', 'monaragala', 'kegalle', 'ratnapura'];
                @endphp
                @foreach ($districts as $district)
                    <option value="{{ $district }}" {{ old('address') == $district ? 'selected' : '' }}>
                        {{ ucfirst($district) }}
                    </option>
                @endforeach
            </select>
        </div>

        <input type="submit"
            value="Register"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded cursor-pointer transition-colors">

    </form>

    <p class="text-center mt-4 text-gray-600">
        Already have an account? <a href="/login" class="text-blue-600 hover:underline">Login here</a>
    </p>
    <p class="text-center mt-2"><a href="/" class="text-gray-600 hover:underline">← Back to Home</a></p>
</div>

<script>
    // Show service provider fields only when 'service_provider' role selected
    function toggleServiceProviderFields() {
        const roleSelect = document.getElementById('role-select');
        const spFields = document.getElementById('service-provider-fields');
        if(roleSelect.value === 'service_provider') {
            spFields.style.display = 'block';
        } else {
            spFields.style.display = 'none';
        }
    }

    document.getElementById('role-select').addEventListener('change', toggleServiceProviderFields);

    // Run on page load in case old value is service_provider (for validation errors)
    window.addEventListener('DOMContentLoaded', toggleServiceProviderFields);
</script>

@endsection
