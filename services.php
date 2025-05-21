<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Marview Cafetaria</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <a href="/" class="logo">
                <img src="assets/images/logo.png" alt="Foodi" height="40">
            </a>
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="admin/login.php" class="btn-connect">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Services Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Services</h1>
            <p>Exceptional dining experiences and services</p>
        </div>
    </section>

    <!-- Main Services -->
    <section class="services-main">
        <div class="container">
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Catering</h3>
                    <p>Delight your guests with our exceptional catering presentation. Perfect for corporate events, weddings, and special occasions.</p>
                    <a href="#" class="btn-service">Learn More</a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Fast Delivery</h3>
                    <p>We deliver your order promptly to your door. Quick, reliable, and maintaining food quality throughout delivery.</p>
                    <a href="#" class="btn-service">Order Now</a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Online Ordering</h3>
                    <p>Explore menu & order with ease using our Online Ordering system. Simple, fast, and convenient.</p>
                    <a href="#" class="btn-service">Start Order</a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Gift Cards</h3>
                    <p>Give the gift of exceptional dining with Foodi Gift Cards. Perfect for any occasion.</p>
                    <a href="#" class="btn-service">Buy Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Features -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Why Choose Our Services</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Quick Service</h3>
                    <p>Fast and efficient service without compromising quality</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Best Quality</h3>
                    <p>Premium ingredients and expert preparation</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Food Safety</h3>
                    <p>Highest standards of hygiene and safety</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p>Have questions about our services? Contact us today!</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p>+123 456 789</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <p>example@email.com</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>123 Food Street, Culinary City</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <select required>
                                <option value="">Select Service</option>
                                <option value="catering">Catering</option>
                                <option value="delivery">Delivery</option>
                                <option value="reservation">Reservation</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn-submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-links">
                    <img src="assets/images/logo-white.png" alt="Foodi" height="40">
                    <p>Savor the artistry where every dish is a culinary masterpiece</p>
                </div>
                <div class="footer-links">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Main Menu</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Offers</a></li>
                        <li><a href="#">Menus</a></li>
                        <li><a href="#">Reservation</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="mailto:example@email.com">example@email.com</a></li>
                        <li><a href="tel:+1234567890">+123 456 789</a></li>
                        <li><a href="#">Social Media</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 Doods | All rights reserved</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>