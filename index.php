<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marview Cafetaria</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="assets/images/logo_marview.png" alt="logo" height="40">
            </a>
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="admin/login.php" class="btn-connect">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Dive into Delights<br>Of Delectable <span>Food</span></h1>
                <p class="mb-4">Where Each Plate Weaves a Story of Culinary<br>Mastery and Passionate Craftsmanship</p>
                <a href="admin/login.php" class="btn-connect">Login</a>
            </div>
            <div class="hero-image">
                <img src="assets/images/hero-food.png" alt="Delicious Food">
                <!-- Food Cards -->
                <div class="floating-card" style="position: absolute; top: 20%; left: -50px;">
                    <img src="assets/images/spicy-noodles.jpg" alt="Spicy Noodles">
                    <div class="card-info">
                        <h4>Spicy noodles</h4>
                        <p>$18.00</p>
                    </div>
                </div>
                <div class="floating-card" style="position: absolute; bottom: 20%; right: -50px;">
                    <img src="assets/images/vegetarian-salad.jpg" alt="Vegetarian Salad">
                    <div class="card-info">
                        <h4>Vegetarian salad</h4>
                        <p>$23.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <div class="container">
            <h3 class="section-subtitle">CUSTOMER FAVORITES</h3>
            <h2 class="section-title">Popular Categories</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Main Dish</h3>
                    <p>(86 dishes)</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <h3>Break Fast</h3>
                    <p>(12 break fast)</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-ice-cream"></i>
                    </div>
                    <h3>Dessert</h3>
                    <p>(48 dessert)</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Browse All</h3>
                    <p>(255 items)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="menu-section">
        <div class="container">
            <h3 class="section-subtitle">SPECIAL DISHES</h3>
            <h2 class="section-title">Standout Dishes From Our Menu</h2>
            <div class="menu-grid">
                <div class="menu-card">
                    <img src="assets/images/fattoush-salad.jpg" class="menu-image" alt="Fattoush salad">
                    <div class="menu-content">
                        <h3 class="menu-title">Fattoush salad</h3>
                        <p class="menu-price">$24.00</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <span>4.9</span>
                        </div>
                    </div>
                </div>
                <div class="menu-card">
                    <img src="assets/images/vegetable-salad.jpg" class="menu-image" alt="Vegetable salad">
                    <div class="menu-content">
                        <h3 class="menu-title">Vegetable salad</h3>
                        <p class="menu-price">$26.00</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <span>4.8</span>
                        </div>
                    </div>
                </div>
                <div class="menu-card">
                    <img src="assets/images/egg-salad.jpg" class="menu-image" alt="Egg vegi salad">
                    <div class="menu-content">
                        <h3 class="menu-title">Egg vegi salad</h3>
                        <p class="menu-price">$23.00</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h3 class="section-subtitle">TESTIMONIALS</h3>
            <h2 class="section-title">What Our Customers Say About Us</h2>
            <div class="testimonial-card">
                <p>"I had the pleasure of dining at Foodi last night, and I'm still raving about the experience! The attention to detail in presentation and service was impeccable"</p>
                <div class="customer-feedback">
                    <div class="customer-info">
                        <img src="assets/images/customer-avatar.jpg" alt="Customer">
                        <div>
                            <h4>Customer Feedback</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <span>4.9 (18.6k Reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <h3 class="section-subtitle">OUR STORY & SERVICES</h3>
            <h2 class="section-title">Our Culinary Journey And Services</h2>
            <p class="section-description">Rooted in passion, we curate unforgettable dining experiences and offer exceptional services, blending culinary artistry with warm hospitality.</p>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Catering</h3>
                    <p>Delight your guests with our exceptional catering presentation</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Fast Delivery</h3>
                    <p>We deliver your order promptly to your door</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Online Ordering</h3>
                    <p>Explore menu & order with ease using our Online Ordering</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Gift Cards</h3>
                    <p>Give the gift of exceptional dining with Foodi Gift Cards</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-links">
                    <img src="assets/images/logo_marview.png" alt="Foodi" height="40">
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
                <p>&copy; 2025 Kelompok 11 | All rights reserved</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>