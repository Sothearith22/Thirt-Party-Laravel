<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RithDev-</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Experience the rich heritage of authentic Indian fine dining. Savor our signature chicken tikka masala, fragrant biryanis, and tandoori specials crafted with direct-sourced spices.">
    <meta name="keywords" content="Indian restaurant, fine dining, curry, biryani, tandoori, naan, chicken tikka masala, gourmet Indian food">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Indian Pavilion | Authentic Fine Dining & Gourmet Cuisine">
    <meta property="og:description" content="Experience the rich heritage of authentic Indian fine dining. Savor our signature dishes crafted with traditional spices.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/hero_food.png') }}">

    <!-- Stylesheets -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Header / Navigation -->
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="#" class="logo" id="header-logo">
                    Indian <span>Pavilion</span>
                    <span class="logo-sub">Fine Dining</span>
                </a>
                <ul class="nav-links">
                    <li><a href="#" id="nav-home">Home</a></li>
                    <li><a href="#features" id="nav-features">Features</a></li>
                    <li><a href="#favorites" id="nav-favorites">Favorites</a></li>
                    <li><a href="#gallery" id="nav-gallery">Gallery</a></li>
                    <li><a href="#reviews" id="nav-reviews">Reviews</a></li>
                    <li><a href="#blog" id="nav-blog">Blog</a></li>
                </ul>
                <div class="nav-cta">
                    <a href="#book-table" class="btn-nav" id="nav-reservation-btn">Reservation</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-nav" id="nav-logout-btn">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container hero-grid">
                <!-- Left Content Column -->
                <div class="hero-content">
                    <span class="hero-subtitle">Our Indian Restaurant</span>
                    <h1 class="hero-title">Discover the Art of Indian Spices</h1>
                    <p class="hero-description">
                        Indulge in a rich tapestry of flavors, crafted with passion and traditional Indian spices. Experience the perfect harmony of culinary heritage and gourmet execution.
                    </p>
                    <div class="hero-buttons">
                        <a href="#favorites" class="btn-primary" id="explore-menu-btn">Explore Menu</a>
                        <a href="#book-table" class="btn-secondary" id="book-table-link-btn">
                            Book a Table
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Column (Food & Booking Overlays) -->
                <div class="hero-visuals">
                    <div class="hero-orange-bg"></div>
                    <div class="hero-food-wrapper">
                        <img src="{{ asset('images/hero_food.png') }}" alt="Signature Indian Food Platter with Curry and Basmati Rice">
                    </div>

                    <!-- Orange Booking Card Overlay -->
                    <div class="hero-booking-card" id="book-table">
                        <span class="card-title-sec">Customized to order</span>
                        <div class="card-price">$5.99</div>
                        <p class="card-desc">Tasty Indian cuisines start here</p>

                        <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Table booked successfully!');">
                            <div class="card-input-group">
                                <select id="hero-guests-select" class="card-input" required aria-label="Number of Guests">
                                    <option value="" disabled selected>Guest Select</option>
                                    <option value="1">1 Guest</option>
                                    <option value="2">2 Guests</option>
                                    <option value="3">3 Guests</option>
                                    <option value="4">4 Guests</option>
                                    <option value="5+">5+ Guests</option>
                                </select>
                                <input type="date" id="hero-date-input" class="card-input" required aria-label="Select Date">
                                <input type="time" id="hero-time-input" class="card-input" required aria-label="Select Time">
                                <button type="submit" id="hero-book-submit-btn" class="card-submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Taj Mahal Skyline Divider -->
        <div class="skyline-divider">
            <svg class="skyline-svg" viewBox="0 0 1440 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M 0 100 L 0 85 L 100 85 L 105 40 L 108 40 L 110 85 L 180 85 L 185 30 C 185 20, 205 20, 205 30 L 210 85 L 290 85 L 293 45 L 295 85 L 360 85 L 365 30 C 365 20, 385 20, 385 30 L 390 85 L 470 85 L 475 25 L 478 25 L 480 85 L 540 85 L 545 40 L 548 40 L 550 85 L 600 85 L 605 15 L 608 15 L 610 85 L 660 85 L 665 40 C 665 30, 675 30, 675 40 L 680 85 L 700 85 L 705 5 C 705 -5, 735 -5, 735 5 L 740 85 L 760 85 L 765 40 C 765 30, 775 30, 775 40 L 780 85 L 830 85 L 835 15 L 838 15 L 840 85 L 890 85 L 895 40 L 898 40 L 900 85 L 960 85 L 965 25 L 968 25 L 970 85 L 1050 85 L 1055 30 C 1055 20, 1075 20, 1075 30 L 1080 85 L 1150 85 L 1153 45 L 1155 85 L 1235 85 L 1240 30 C 1240 20, 1260 20, 1260 30 L 1265 85 L 1335 85 L 1340 40 L 1343 40 L 1345 85 L 1440 85 L 1440 100 Z" />
            </svg>
        </div>

        <!-- Dark Blue Lower Section Wrapper -->
        <div class="dark-section" id="features">
            <!-- Trust / Review Section -->
            <div class="container">
                <div class="trust-section">
                    <div class="stars-rating">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <div class="trust-badges">
                        <span>Tripadvisor</span>
                        <span>Yelp Elite</span>
                        <span>Michelin Guide</span>
                        <span>Zomato Gold</span>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="container" style="margin-top: 80px;">
                <div class="section-header">
                    <span class="section-subtitle">Why Dine With Us</span>
                    <h2 class="section-title">Why choose the Indian courses of this restaurant from holdings</h2>
                    <p>We blend age-old recipe traditions with modern culinary art to serve you dishes that are as rich in flavor as they are in history.</p>
                </div>

                <!-- Categories Grid -->
                <div class="categories-grid">
                    <!-- Card 1 -->
                    <div class="category-card" id="feat-card-curry">
                        <img src="{{ asset('images/card_curry.png') }}" class="category-card-bg" alt="Indian Butter Chicken Curry in Bowl">
                        <div class="category-card-overlay"></div>
                        <div class="category-card-content">
                            <h3 class="category-title">Gourmet Curries</h3>
                            <p class="category-desc">Rich, slow-simmered classic recipes packed with authentic spices.</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="category-card" id="feat-card-biryani">
                        <img src="{{ asset('images/card_biryani.png') }}" class="category-card-bg" alt="Fragrant Chicken Biryani clay pot">
                        <div class="category-card-overlay"></div>
                        <div class="category-card-content">
                            <h3 class="category-title">Fragrant Biryani</h3>
                            <p class="category-desc">Aromatic long-grain basmati rice cooked with premium spices and meat.</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="category-card" id="feat-card-naan">
                        <img src="{{ asset('images/card_naan.png') }}" class="category-card-bg" alt="Butter Garlic Naan stack">
                        <div class="category-card-overlay"></div>
                        <div class="category-card-content">
                            <h3 class="category-title">Tandoor Specialties</h3>
                            <p class="category-desc">Freshly baked butter garlic naan and char-grilled kebabs straight from the clay oven.</p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="category-card" id="feat-card-dessert">
                        <img src="{{ asset('images/card_dessert.png') }}" class="category-card-bg" alt="Gulab Jamun dessert in syrup">
                        <div class="category-card-overlay"></div>
                        <div class="category-card-content">
                            <h3 class="category-title">Heritage Desserts</h3>
                            <p class="category-desc">Sweeten your dining experience with our legendary traditional Indian desserts.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bestseller Section -->
            <div class="bestsellers-section" id="favorites">
                <div class="container">
                    <div class="section-header">
                        <span class="section-subtitle">Bestseller Indian Dishes</span>
                        <h2 class="section-title">Our Signature Dishes</h2>
                    </div>

                    <div class="bestsellers-grid">
                        <!-- Card 1 -->
                        <div class="bestseller-card" id="best-card-tikka">
                            <div class="bestseller-img-container">
                                <img src="{{ asset('images/bestseller_curry.png') }}" alt="Gourmet Chicken Tikka Masala Curry">
                            </div>
                            <div class="bestseller-info">
                                <h3 class="bestseller-title">Chicken Tikka Masala</h3>
                                <p class="bestseller-desc">Tender roasted chicken chunks in a rich, creamy, and spiced tomato sauce.</p>
                                <div class="bestseller-price">$16.99</div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="bestseller-card" id="best-card-tandoori">
                            <div class="bestseller-img-container">
                                <img src="{{ asset('images/bestseller_tandoori.png') }}" alt="Gourmet Tandoori Chicken Leg Platter">
                            </div>
                            <div class="bestseller-info">
                                <h3 class="bestseller-title">Tandoori Chicken</h3>
                                <p class="bestseller-desc">Half chicken marinated in yogurt and aromatic spices, roasted in our traditional clay oven.</p>
                                <div class="bestseller-price">$18.99</div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="bestseller-card" id="best-card-samosa">
                            <div class="bestseller-img-container">
                                <img src="{{ asset('images/bestseller_snacks.png') }}" alt="Crispy Garlic Naan Side Dish">
                            </div>
                            <div class="bestseller-info">
                                <h3 class="bestseller-title">Garlic Naan & Sides</h3>
                                <p class="bestseller-desc">Freshly baked tandoori naan glazed with melted butter and garlic, served with chutney dips.</p>
                                <div class="bestseller-price">$12.99</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Orange Wavy Divider Transition -->
        <div class="wavy-transition">
            <svg class="wave-svg" viewBox="0 0 1440 180" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--color-deep-blue);">
                <!-- Orange wave band background -->
                <path fill="var(--color-orange-red)" d="M 0 80 Q 360 140, 720 90 T 1440 120 L 1440 180 L 0 180 Z" />
                <!-- White section background wave covering bottom -->
                <path fill="var(--color-white)" d="M 0 110 Q 360 170, 720 120 T 1440 150 L 1440 180 L 0 180 Z" />
            </svg>
            <div class="slider-indicators">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>

        <!-- Story / Banquet Section -->
        <section class="story-section">
            <div class="container story-grid">
                <!-- Left Visual Column -->
                <div class="story-visual">
                    <div class="story-img-wrapper">
                        <img src="{{ asset('images/story_feast.png') }}" alt="Gourmet Indian Banquet table feast spread">
                    </div>
                </div>
                <!-- Right Content Column -->
                <div class="story-content">
                    <span class="section-subtitle">Our Heritage</span>
                    <h2 class="story-heading">Create your own <span>Indian Feast</span></h2>
                    <p class="story-text">
                        Every single dish on our menu represents a chapter of our family's recipe archive, passed down lovingly through multiple generations.
                    </p>
                    <p class="story-text">
                        We source our cardamom, cumin, black pepper, and premium saffron directly from sustainable spice gardens in southern India. This dedication ensures that every bite brings you the genuine warmth and unforgettable complexity of true Indian heritage cooking.
                    </p>
                    <a href="#favorites" class="btn-primary" id="story-read-more-btn" style="margin-top: 10px;">Explore Menu</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="#" class="footer-logo">
                    Indian <span>Pavilion</span>
                </a>
                <p>Experience the finest, most authentic Indian gourmet dishes in a luxury dining atmosphere.</p>
            </div>
            <div class="footer-col">
                <h4>Explore</h4>
                <ul class="footer-links">
                    <li><a href="#">Menu Selection</a></li>
                    <li><a href="#">Signature Curries</a></li>
                    <li><a href="#">Tandoor Bakery</a></li>
                    <li><a href="#">Heritage Sweets</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Reservations</h4>
                <ul class="footer-links">
                    <li><a href="#book-table">Book a Table</a></li>
                    <li><a href="#">Private Banquets</a></li>
                    <li><a href="#">Catering Services</a></li>
                    <li><a href="#">Dining Hours</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact Us</h4>
                <ul class="footer-links">
                    <li><a href="#">info@indianpavilion.com</a></li>
                    <li><a href="#">+1 (555) 324-7890</a></li>
                    <li><a href="#">120 Gourmet Boulevard, Suite 300</a></li>
                    <li><a href="#">Support Chat</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="footer-bottom">
                <p class="footer-copy">© 2026 Indian Pavilion. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Header Scroll Script for Sticky Navbar Styling -->
    <script>
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
