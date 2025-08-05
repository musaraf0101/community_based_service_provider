@extends('layouts.main')
@section('content')
<style>
    /* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    line-height: 1.6;
    color: #333;
}

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

a {
    text-decoration: none;
    transition: all 0.3s ease;
}

ul {
    list-style: none;
}

/* Header Styles */
.header {
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    padding: 15px 0;
}

.header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo a {
    font-size: 1.8rem;
    font-weight: 700;
    color: #4f46e5;
}

.navbar ul {
    display: flex;
    gap: 30px;
}

.navbar a {
    color: #2d3748;
    font-weight: 500;
}

.navbar a:hover {
    color: #4f46e5;
}

.mobile-menu {
    display: none;
    font-size: 1.5rem;
    cursor: pointer;
}

/* Hero Section */
.hero {
    background: linear-gradient(135deg, #f8f9fc 0%, #e0e7ff 100%);
    padding: 150px 0 100px;
    text-align: center;
}

.hero h1 {
    font-size: 3rem;
    color: #2d3748;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.25rem;
    color: #4a5568;
    max-width: 700px;
    margin: 0 auto;
}

/* Relative Section (already has Tailwind classes) */

/* Categories Section */
.categories {
    padding: 80px 0;
    background-color: #f8f9fc;
}

.categories h2 {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 50px;
    color: #2d3748;
}

.category-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.category-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.category-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.category-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.category-card h3 {
    padding: 20px 20px 10px;
    font-size: 1.5rem;
    color: #2d3748;
}

.category-card p {
    padding: 0 20px 20px;
    color: #4a5568;
}

/* Footer Styles */
.footer {
    background-color: #2d3748;
    color: white;
    padding: 60px 0 20px;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
}

.footer-col h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: white;
}

.footer-col p {
    margin-bottom: 15px;
    color: #e2e8f0;
}

.footer-col ul li {
    margin-bottom: 10px;
}

.footer-col a {
    color: #e2e8f0;
}

.footer-col a:hover {
    color: #4f46e5;
}

.footer-col i {
    margin-right: 10px;
    color: #4f46e5;
}

.copyright {
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid #4a5568;
    color: #e2e8f0;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .navbar {
        display: none;
    }
    
    .mobile-menu {
        display: block;
    }
    
    .hero h1 {
        font-size: 2.2rem;
    }
    
    .hero p {
        font-size: 1.1rem;
    }
    
    .categories h2 {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .hero {
        padding: 120px 0 80px;
    }
    
    .hero h1 {
        font-size: 1.8rem;
    }
    
    .hero-buttons a {
        display: block;
        margin-bottom: 15px;
        margin-right: 0;
        width: 100%;
        text-align: center;
    }
}
</style>
<!-- Header Section -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.html">EventSys</a>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </nav>
            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

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