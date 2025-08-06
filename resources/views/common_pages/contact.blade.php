@extends('layouts.main')
@section('content')
@include('components.navbar')
<!-- Contact Content -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-12">
            <!-- Contact Info -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:-translate-y-1 transition-transform">
                <h2 class="text-indigo-600 text-2xl font-bold mb-6 border-b-2 border-indigo-600 inline-block pb-2">
                    Contact Information
                </h2>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-indigo-50 rounded-full flex items-center justify-center text-indigo-600 text-lg">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Address</h3>
                            <p class="text-gray-600">123 Event Street, City, Country</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-indigo-50 rounded-full flex items-center justify-center text-indigo-600 text-lg">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Phone</h3>
                            <p class="text-gray-600">+123 456 7890</p>
                            <p class="text-gray-600">+123 456 7891</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-indigo-50 rounded-full flex items-center justify-center text-indigo-600 text-lg">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Email</h3>
                            <p class="text-gray-600">info@eventsys.com</p>
                            <p class="text-gray-600">support@eventsys.com</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-indigo-50 rounded-full flex items-center justify-center text-indigo-600 text-lg">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Working Hours</h3>
                            <p class="text-gray-600">Mon - Fri: 9:00 - 18:00</p>
                            <p class="text-gray-600">Saturday: 10:00 - 15:00</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:-translate-y-1 transition-transform">
                <h2 class="text-indigo-600 text-2xl font-bold mb-6 border-b-2 border-indigo-600 inline-block pb-2">
                    Send Us a Message
                </h2>
                <form action="contact.php" method="POST" class="space-y-5">
                    <div>
                        <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">Your Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" required
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 rounded-md transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@include('components.footer')
@endsection