@extends('layouts.main')
@section('content')
@include('components.navbar')

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Manage Your Special Events</h1>
            <p>Weddings & Workshops - We handle it all with care and professionalism</p>
         
        </div>
    </section>
    <section class="relative">
        <div class="container mx-auto px-6 py-20">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 flex flex-col mb-10 md:mb-0 items-start">
                    <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4 text-gray-800">
                        Create Memories,<br>
                        <span class="text-indigo-600">Book with Ease</span>
                    </h1>
                    <p class="text-lg md:text-xl mb-8 text-gray-600">
                        Your one-stop platform for wedding reservations and creative workshops. Plan, book, and celebrate life's special moments.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#weddings" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-full transition duration-300">
                            Book a Wedding
                        </a>
                        <a href="#workshops" class="bg-white hover:bg-gray-100 text-indigo-600 font-bold py-3 px-6 border-2 border-indigo-600 rounded-full transition duration-300">
                            Explore Workshops
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1471014f-ffb6-4bc5-9819-c2080db399b9.png" alt="Happy couple getting married in a beautiful outdoor venue with floral decorations" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section><script src="https://cdn.tailwindcss.com"></script>


    <!-- Event Categories -->
    <section class="categories">
        <div class="container">
            <h2>Our Event Categories</h2>
            <div class="category-grid">
                <div class="category-card" onclick="window.location.href='wedding-book.php'" style="cursor: pointer;">
                    <img src="assets/images/12345.jpg" alt="Wedding">
                    <h3>Weddings</h3>
                    <p>Create unforgettable wedding experiences</p>
                </div>

                <div class="category-card" style="cursor: pointer;" onclick="window.location.href='workshop-book.php'">
                    <img src="assets/images/wrkshp.jpg" alt="workshop">
                    <h3>Workshops</h3>
                    <p>Create unforgettable workshop experiences</p>
                </div>

            </div>
        </div>
    </section>
    @include('components.footer')
@endsection