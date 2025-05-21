<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Marview Cafetaria</title>
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

    <!-- Menu Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Menu</h1>
            <p>Discover our delicious offerings</p>
        </div>
    </section>

    <!-- Menu Categories -->
    <section class="menu-categories">
        <div class="container">
            <div class="category-filters">
                <button class="category-btn active">All</button>
                <button class="category-btn">Main Dish</button>
                <button class="category-btn">Breakfast</button>
                <button class="category-btn">Dessert</button>
                <button class="category-btn">Drinks</button>
            </div>

            <!-- Search and Filter -->
            <div class="menu-controls">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search for food..." id="searchInput">
                </div>
                <div class="filter-box">
                    <select id="sortFilter">
                        <option value="">Sort by</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="rating">Rating</option>
                    </select>
                </div>
            </div>

            <!-- Menu Grid -->
            <div class="menu-grid">
                <?php
                require_once 'helper/connection.php';
                $query = "SELECT * FROM makanan ORDER BY id DESC";
                $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <div class="menu-card">
                        <img src="' . $row['foto'] . '" class="menu-image" alt="' . $row['nama'] . '">
                        <div class="menu-content">
                            <h3 class="menu-title">' . $row['nama'] . '</h3>
                            <p class="menu-description">' . $row['deskripsi'] . '</p>
                            <div class="menu-footer">
                                <p class="menu-price">Rp. ' . number_format($row['harga'], 0, ',', '.') . '</p>
                                <div class="menu-actions">
                                    <button class="btn-order">Order Now</button>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
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

    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            let searchQuery = this.value.toLowerCase();
            let menuCards = document.querySelectorAll('.menu-card');

            menuCards.forEach(card => {
                let title = card.querySelector('.menu-title').textContent.toLowerCase();
                let description = card.querySelector('.menu-description').textContent.toLowerCase();

                if (title.includes(searchQuery) || description.includes(searchQuery)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Category filter
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelector('.category-btn.active').classList.remove('active');
                this.classList.add('active');
                // Add filter logic here
            });
        });

        // Sort functionality
        document.getElementById('sortFilter').addEventListener('change', function() {
            let menuGrid = document.querySelector('.menu-grid');
            let menuCards = Array.from(document.querySelectorAll('.menu-card'));

            menuCards.sort((a, b) => {
                let priceA = parseInt(a.querySelector('.menu-price').textContent.replace(/[^0-9]/g, ''));
                let priceB = parseInt(b.querySelector('.menu-price').textContent.replace(/[^0-9]/g, ''));

                if (this.value === 'price-low') {
                    return priceA - priceB;
                } else if (this.value === 'price-high') {
                    return priceB - priceA;
                }
                return 0;
            });

            menuGrid.innerHTML = '';
            menuCards.forEach(card => menuGrid.appendChild(card));
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>