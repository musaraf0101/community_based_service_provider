@extends('layouts.main')
@section('content')
<style>
    /* Global Styles */
:root {
    --primary-color: #4f46e5;
    --dark-color: #2d3748;
    --light-color: #f8f9fc;
    --text-color: #4a5568;
    --success-color: #d4edda;
    --success-text: #155724;
    --error-color: #f8d7da;
    --error-text: #721c24;
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

.btn {
    display: inline-block;
    background-color: var(--primary-color);
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #4338ca;
    transform: translateY(-2px);
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

/* Contact Header */
.contact-header {
    text-align: center;
    padding: 150px 0 100px;
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/contact-bg.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: white;
    margin-top: 70px;
}

.contact-header h1 {
    font-size: 3rem;
    margin-bottom: 20px;
    font-weight: 700;
}

.contact-header p {
    font-size: 1.25rem;
    max-width: 700px;
    margin: 0 auto;
}

/* Contact Content */
.contact-content {
    padding: 80px 0;
}

.contact-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
}

.contact-info, 
.contact-form {
    background: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.contact-info:hover, 
.contact-form:hover {
    transform: translateY(-5px);
}

.contact-info h2, 
.contact-form h2 {
    font-size: 1.8rem;
    margin-bottom: 25px;
    color: var(--primary-color);
    position: relative;
    padding-bottom: 15px;
}

.contact-info h2::after, 
.contact-form h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: var(--primary-color);
}

.info-item {
    display: flex;
    margin-bottom: 25px;
    align-items: flex-start;
}

.info-icon {
    width: 50px;
    height: 50px;
    background: var(--light-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    color: var(--primary-color);
    font-size: 1.2rem;
    flex-shrink: 0;
}

.info-text h3 {
    margin-bottom: 8px;
    color: var(--dark-color);
    font-size: 1.1rem;
}

.info-text p {
    color: var(--text-color);
    line-height: 1.6;
}

/* Form Styles */
.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: var(--dark-color);
}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    border-color: var(--primary-color);
    outline: none;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
}

.form-group textarea {
    height: 150px;
    resize: vertical;
}

/* Message Styles */
.success-message {
    background: var(--success-color);
    color: var(--success-text);
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 30px;
    border-left: 4px solid #28a745;
}

.error-message {
    background: var(--error-color);
    color: var(--error-text);
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 30px;
    border-left: 4px solid #dc3545;
}

/* Map Styles */
.map-container {
    margin-top: 60px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    height: 400px;
}

.map-container iframe {
    width: 100%;
    height: 100%;
    border: none;
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
    .contact-header {
        padding: 120px 0 80px;
    }
    
    .contact-header h1 {
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
    
    .contact-header {
        margin-top: 60px;
        padding: 100px 0 60px;
    }
    
    .contact-header h1 {
        font-size: 2rem;
    }
    
    .contact-header p {
        font-size: 1.1rem;
    }
    
    .contact-info, 
    .contact-form {
        padding: 30px;
    }
}

@media (max-width: 576px) {
    .contact-header {
        padding: 80px 0 50px;
    }
    
    .contact-header h1 {
        font-size: 1.8rem;
    }
    
    .info-item {
        flex-direction: column;
    }
    
    .info-icon {
        margin-bottom: 15px;
        margin-right: 0;
    }
    
    .map-container {
        height: 300px;
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
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact" class="active">Contact</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </nav>
            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Contact Header -->
    <section class="contact-header">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! Get in touch with our team</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="contact-content">
        <div class="container">
            
            <div class="contact-container">
                <div class="contact-info">
                    <h2>Contact Information</h2>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-text">
                            <h3>Address</h3>
                            <p>123 Event Street, City, Country</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-text">
                            <h3>Phone</h3>
                            <p>+123 456 7890</p>
                            <p>+123 456 7891</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-text">
                            <h3>Email</h3>
                            <p>info@eventsys.com</p>
                            <p>support@eventsys.com</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-text">
                            <h3>Working Hours</h3>
                            <p>Monday - Friday: 9:00 - 18:00</p>
                            <p>Saturday: 10:00 - 15:00</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <form action="contact.php" method="POST">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required >
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" required >
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required >
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

   @include('components.footer')
@endsection