@extends('layouts.main')
@section('content')
<style>
/* Global Styles */
:root {
    --primary-color: #4f46e5;
    --dark-color: #2d3748;
    --light-color: #f8f9fc;
    --text-color: #4a5568;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    line-height: 1.6;
    color: var(--text-color);
    background-color: white;
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
    position: sticky;
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
    color: var(--primary-color);
}

.navbar ul {
    display: flex;
    gap: 30px;
}

.navbar a {
    color: var(--dark-color);
    font-weight: 500;
    padding: 5px 0;
    position: relative;
}

.navbar a.active {
    color: var(--primary-color);
}

.navbar a.active::after,
.navbar a:hover::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: var(--primary-color);
}

.navbar a:hover {
    color: var(--primary-color);
}

.mobile-menu {
    display: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: var(--dark-color);
}

/* About Header */
.about-header {
    text-align: center;
    padding: 150px 0 100px;
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/about-bg.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: white;
    margin-top: 70px;
}

.about-header h1 {
    font-size: 3rem;
    margin-bottom: 20px;
    font-weight: 700;
}

.about-header p {
    font-size: 1.25rem;
    max-width: 700px;
    margin: 0 auto;
}

/* About Content */
.about-content {
    padding: 80px 0;
}

.about-section {
    margin-bottom: 60px;
}

.about-section h2 {
    font-size: 2rem;
    margin-bottom: 25px;
    color: var(--primary-color);
    position: relative;
    padding-bottom: 15px;
}

.about-section h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: var(--primary-color);
}

.about-section p {
    margin-bottom: 20px;
    line-height: 1.8;
    font-size: 1.1rem;
}

.about-section ul {
    margin-left: 20px;
    margin-bottom: 20px;
}

.about-section ul li {
    margin-bottom: 10px;
    position: relative;
    padding-left: 25px;
}

.about-section ul li::before {
    content: '•';
    color: var(--primary-color);
    font-size: 1.5rem;
    position: absolute;
    left: 0;
    top: -5px;
}

/* Team Section */
.team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.team-member {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 30px 20px;
    transition: transform 0.3s ease;
}

.team-member:hover {
    transform: translateY(-10px);
}

.team-member img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
    border: 5px solid var(--light-color);
}

.team-member h3 {
    margin-bottom: 5px;
    color: var(--dark-color);
    font-size: 1.3rem;
}

.team-member p.position {
    color: var(--primary-color);
    font-weight: 500;
    margin-bottom: 15px;
    font-size: 0.9rem;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.social-links a {
    color: var(--dark-color);
    font-size: 1.1rem;
    transition: color 0.3s ease;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--light-color);
}

.social-links a:hover {
    color: white;
    background: var(--primary-color);
}

/* Stats Section */
.stats {
    background: var(--light-color);
    padding: 80px 0;
    text-align: center;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 40px;
}

.stat-item h3 {
    font-size: 3rem;
    color: var(--primary-color);
    margin-bottom: 10px;
    font-weight: 700;
}

.stat-item p {
    font-size: 1.2rem;
    color: var(--dark-color);
    font-weight: 500;
}

/* Footer Styles */
.footer {
    background-color: var(--dark-color);
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
    color: var(--primary-color);
}

.footer-col i {
    margin-right: 10px;
    color: var(--primary-color);
}

.copyright {
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid #4a5568;
    color: #e2e8f0;
    font-size: 0.9rem;
}

/* Responsive Styles */
@media (max-width: 992px) {
    .about-header {
        padding: 120px 0 80px;
    }
    
    .about-header h1 {
        font-size: 2.5rem;
    }
}

@media (max-width: 768px) {
    .navbar {
        display: none;
    }
    
    .mobile-menu {
        display: block;
    }
    
    .about-header {
        margin-top: 60px;
        padding: 100px 0 60px;
    }
    
    .about-header h1 {
        font-size: 2rem;
    }
    
    .about-header p {
        font-size: 1.1rem;
    }
    
    .about-section h2 {
        font-size: 1.8rem;
    }
    
    .stat-item h3 {
        font-size: 2.5rem;
    }
}

@media (max-width: 576px) {
    .about-header {
        padding: 80px 0 50px;
    }
    
    .about-header h1 {
        font-size: 1.8rem;
    }
    
    .team-grid {
        grid-template-columns: 1fr;
    }
    
    .stats-grid {
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }
}
</style>


    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.php">EventSys</a>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about" class="active">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </nav>
            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- About Header -->
    <section class="about-header">
        <div class="container">
            <h1>About EventSys</h1>
            <p>Your trusted partner for memorable events</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="about-content">
        <div class="container">
            <div class="about-section">
                <h2>Our Story</h2>
                <p>Founded in 2023, EventSys began with a simple mission: to make event planning seamless and stress-free for everyone. What started as a small team of passionate event planners has grown into a comprehensive platform serving thousands of clients annually.</p>
                <p>We understand that every event is unique, whether it's a joyous wedding celebration, a solemn funeral service, or an informative workshop. Our team is dedicated to providing personalized service that meets your specific needs.</p>
            </div>
            
            <div class="about-section">
                <h2>Our Mission</h2>
                <p>At EventSys, we believe that successful events are built on attention to detail, creativity, and flawless execution. Our mission is to:</p>
                <ul style="margin-left: 20px; margin-bottom: 20px;">
                    <li>Provide exceptional event management services for all occasions</li>
                    <li>Simplify the planning process with our intuitive platform</li>
                    <li>Deliver memorable experiences that exceed expectations</li>
                    <li>Support our clients through every step of their event journey</li>
                </ul>
            </div>
            
            <div class="about-section">
                <h2>Our Team</h2>
                <p>Meet the dedicated professionals who make EventSys possible:</p>
                
                <div class="team-grid">
                    <div class="team-member">
                        <img src="assets/images/team1.jpg" alt="John Doe">
                        <h3>John Doe</h3>
                        <p class="position">Founder & CEO</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <img src="assets/images/team2.jpg" alt="Jane Smith">
                        <h3>Jane Smith</h3>
                        <p class="position">Event Director</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <img src="assets/images/team3.jpg" alt="Mike Johnson">
                        <h3>Mike Johnson</h3>
                        <p class="position">Technical Lead</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <img src="assets/images/team4.jpg" alt="Sarah Williams">
                        <h3>Sarah Williams</h3>
                        <p class="position">Customer Support</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>500+</h3>
                    <p>Events Managed</p>
                </div>
                <div class="stat-item">
                    <h3>200+</h3>
                    <p>Happy Clients</p>
                </div>
                <div class="stat-item">
                    <h3>50+</h3>
                    <p>Team Members</p>
                </div>
                <div class="stat-item">
                    <h3>10+</h3>
                    <p>Awards Won</p>
                </div>
            </div>
        </div>
    </section>


@include('components.footer')

@endsection