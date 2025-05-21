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
        <div class="container hero-flex">
            <div class="hero-content">
                <h1>Rasakan Kenikmatan<br><span>Hidangan Istimewa</span></h1>
                <p class="mb-4">Setiap sajian menyampaikan kisah tentang keahlian kuliner<br>dan pengalaman makan terbaik</p>

                <a href="admin/login.php" class="btn-connect">Login</a>
            </div>
            <div class="hero-visual">
                <div class="hero-img-circle">
                    <img src="assets/images/hero-food.jpg" alt="Delicious Food" class="hero-main-img">
                    <span class="hero-badge">Jus Strawberry</span>
                </div>
                <div class="hero-food-card left">
                    <img src="assets/images/spicy-noodles.jpeg" alt="mie Goreng">
                    <div>
                        <h4>Mie Goreng</h4>
                        <p>18.000</p>
                    </div>
                </div>
                <div class="hero-food-card right">
                    <img src="assets/images/mendoan.jpeg" alt="Mendoan">
                    <div>
                        <h4>Mendoan</h4>
                        <p>10.000</p>
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
    <section class="menu-section menu-modern">
        <div class="container">
            <div class="menu-header-flex">
                <div>
                    <h3 class="section-subtitle">SPECIAL DISHES</h3>
                    <h2 class="section-title">Standout Dishes<br>From Our Menu</h2>
                </div>
                <div class="menu-nav-btns">
                    <button class="menu-nav-btn menu-nav-prev"><i class="fas fa-chevron-left"></i></button>
                    <button class="menu-nav-btn menu-nav-next active"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="menu-grid menu-modern-grid">
                <div class="menu-card-modern">
                    <div class="menu-card-love"><i class="fas fa-heart"></i></div>
                    <div class="menu-img-circle">
                        <img src="assets/images/katsu.jpeg" alt="Chicken Katsu">
                    </div>
                    <div class="menu-card-content">
                        <h3 class="menu-card-title">Chicken Katsu</h3>
                        <p class="menu-card-desc">Nasi dengan ayam katsu dan kuah kari khas Jepang</p>
                        <div class="menu-card-bottom">
                            <span class="menu-card-price">20.000</span>
                            <span class="menu-card-rating"><i class="fas fa-star"></i> 4.9</span>
                        </div>
                    </div>
                </div>
                <div class="menu-card-modern">
                    <div class="menu-card-love"><i class="fas fa-heart"></i></div>
                    <div class="menu-img-circle">
                        <img src="assets/images/nasgor.jpeg" alt="Nasi Goreng">
                    </div>
                    <div class="menu-card-content">
                        <h3 class="menu-card-title">Nasi Goreng</h3>
                        <p class="menu-card-desc">Nasi goreng spesial dengan telur, kerupuk, dan sambal</p>
                        <div class="menu-card-bottom">
                            <span class="menu-card-price">18.000</span>
                            <span class="menu-card-rating"><i class="fas fa-star"></i> 4.8</span>
                        </div>
                    </div>
                </div>
                <div class="menu-card-modern">
                    <div class="menu-card-love"><i class="fas fa-heart"></i></div>
                    <div class="menu-img-circle">
                        <img src="assets/images/kentang.jpeg" alt="Kentang Goreng">
                    </div>
                    <div class="menu-card-content">
                        <h3 class="menu-card-title">Kentang Goreng</h3>
                        <p class="menu-card-desc">Kentang goreng renyah dengan saus sambal dan tomat</p>
                        <div class="menu-card-bottom">
                            <span class="menu-card-price">13.000</span>
                            <span class="menu-card-rating"><i class="fas fa-star"></i> 4.5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials testimonials-modern">
        <div class="container testimonials-flex">
            <div class="testimonials-left">
                <div class="chef-img-bg">
                    <img src="assets/images/owner.png" alt="owner" class="chef-img">
                    <span class="chef-badge">Owner Marview Cafetaria</span>
                </div>
            </div>
            <div class="testimonials-right">
                <h3 class="testimonials-subtitle">TESTIMONIALS</h3>
                <h2 class="testimonials-title">What Our Customers<br>Say About Us</h2>
                <p class="testimonials-desc">“I had the pleasure of dining at Foodi last night, and I'm still raving about the experience! The attention to detail in presentation and service was impeccable”</p>
                <div class="testimonials-feedback">
                    <div class="testimonials-avatars">
                        <img src="assets/images/customer1.jpg" alt="Customer 1">
                        <img src="assets/images/customer2.jpg" alt="Customer 2">
                        <img src="assets/images/customer3.jpg" alt="Customer 3">
                    </div>
                    <div class="testimonials-meta">
                        <span class="feedback-title">Customer Feedback</span><br>
                        <span class="feedback-rating"><i class="fas fa-star"></i> 4.9 <span class="feedback-reviews">(18.6k Reviews)</span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services services-modern">
        <div class="container services-flex">
            <div class="services-left">
                <h3 class="section-subtitle">OUR STORY & SERVICES</h3>
                <h2 class="section-title">Our Culinary Journey<br>And Services</h2>
                <p class="section-description">Rooted in passion, we curate unforgettable dining experiences and offer exceptional services, blending culinary artistry with warm hospitality.</p>
                <a href="#" class="btn-explore">Explore</a>
            </div>
            <div class="services-right">
                <div class="services-card-grid">
                    <div class="service-card-modern">
                        <div class="service-icon-modern"><i class="fas fa-utensils"></i></div>
                        <h4 class="service-title-modern">CATERING</h4>
                        <p class="service-desc-modern">Delight your guests with our flavors and presentation</p>
                    </div>
                    <div class="service-card-modern">
                        <div class="service-icon-modern"><i class="fas fa-truck"></i></div>
                        <h4 class="service-title-modern">FAST DELIVERY</h4>
                        <p class="service-desc-modern">We deliver your order promptly to your door</p>
                    </div>
                    <div class="service-card-modern">
                        <div class="service-icon-modern"><i class="fas fa-shopping-cart"></i></div>
                        <h4 class="service-title-modern">ONLINE ORDERING</h4>
                        <p class="service-desc-modern">Explore menu & order with ease using our Online Ordering</p>
                    </div>
                    <div class="service-card-modern">
                        <div class="service-icon-modern"><i class="fas fa-gift"></i></div>
                        <h4 class="service-title-modern">GIFT CARDS</h4>
                        <p class="service-desc-modern">Give the gift of exceptional dining with Foodi Gift Cards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <img src="assets/images/logo_marview.png" alt="Marview" height="40">
                    <p>Savor the artistry where every dish is a culinary masterpiece</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
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
                        <li><a href="tel:+1234567890">+64 958 248 966</a></li>
                        <li><a href="#">Social media</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Marview Cafetaria | Kelompok</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>