@include('layouts.app')

<main class="main">

  <!-- Blog Hero Section -->
  <section id="blog-hero" class="blog-hero section">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/ps5.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/gta2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/nba2.jpg" class="d-block w-100" alt="...">
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <section> <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Menu</h2>
        <div><span>Check Our</span> <span class="description-title">Featured Menu</span></div>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="blog-grid">

          <!-- Featured Post (Large) -->
          <article class="blog-item featured" data-aos="fade-up">
            <img src="img/1.png" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14, 2025</span>
                <span class="/about">Baca juga</span>
              </div>
              <h2 class="post-title">
                <a href="/about" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit">Tentang
                  Kami?</a>
              </h2>
            </div>
          </article><!-- End Featured Post -->

          <!-- Regular Posts -->
          <article class="blog-item" data-aos="fade-up" data-aos-delay="100">
            <img src="img/2.jpg" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14, 2025</span>
                <span class="/blog">Blog</span>
              </div>
              <h3 class="post-title">
                <a href="/blog" title="Sed do eiusmod tempor incididunt ut labore">Lihat Bagian Blog
                  juga!</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

          <article class="blog-item" data-aos="fade-up" data-aos-delay="200">
            <img src="img/3.jpg" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14, 2025</span>
                <span class="/schedule">Schedule</span>
              </div>
              <h3 class="post-title">
                <a href="/schedule" title="Ut enim ad minim veniam, quis nostrud exercitation">Cek Jadwal
                  Sekarang!</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

          <article class="blog-item" data-aos="fade-up" data-aos-delay="300">
            <img src="img/4.jpg" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14, 2025</span>
                <span class="/pembayaran">Payment</span>
              </div>
              <h3 class="post-title">
                <a href="/pembayaran" title="Adipiscing elit, sed do eiusmod tempor incididunt">Ayo, Pesan
                  Sekarang!</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

          <article class="blog-item" data-aos="fade-up" data-aos-delay="400">
            <img src="img/5.jpg" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14, 2025</span>
                <span class="/kontak">Contact</span>
              </div>
              <h3 class="post-title">
                <a href="/kontak" title="Excepteur sint occaecat cupidatat non proident">Ada Info Kontak
                  Nih!</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

        </div>

      </div>

    </section><!-- /Blog Hero Section -->

    <!-- Featured Posts Section -->
    <section id="featured-posts" class="featured-posts section">

      <div class="container">
        <!-- Section Header -->
        <div class="section-header text-center mb-5" data-aos="fade-up">
          <h2 class="display-5 fw-bold mb-3">Check Our Game</h2>
          <p class="lead text-muted">Discover your favorite gaming experiences</p>
          <div class="divider mx-auto my-4"></div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="blog-posts-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 3000
              },
              "slidesPerView": 3,
              "spaceBetween": 30,
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 20
                },
                "768": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 30
                }
              }
            }
          </script>

            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="blog-post-item">
                  <img src="img/fifa.jpg" alt="Blog Image">
                  <div class="blog-post-content">
                    <div class="post-meta">
                      <span><i class="bi bi-person"></i> Julia Parker</span>
                      <span><i class="bi bi-clock"></i> Jan 15, 2025</span>
                      <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                    </div>
                    <h2><a href="#">EA SPORTS FC™ 25</a></h2>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce
                      porttitor metus eget lectus consequat, sit amet feugiat magna vulputate.</p>
                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="blog-post-item">
                  <img src="img/gta2.jpg" alt="Blog Image">
                  <div class="blog-post-content">
                    <div class="post-meta">
                      <span><i class="bi bi-person"></i> Mark Wilson</span>
                      <span><i class="bi bi-clock"></i> Jan 18, 2025</span>
                      <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                    </div>
                    <h2><a href="#">Grand Theft Auto IV</a></h2>
                    <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem
                      neque sed ipsum.</p>
                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="blog-post-item">
                  <img src="img/assasin.jpg" alt="Blog Image">
                  <div class="blog-post-content">
                    <div class="post-meta">
                      <span><i class="bi bi-person"></i> Sarah Johnson</span>
                      <span><i class="bi bi-clock"></i> Jan 21, 2025</span>
                      <span><i class="bi bi-chat-dots"></i> 15 Comments</span>
                    </div>
                    <h2><a href="#">Assassin's Creed® Mirrage</a></h2>
                    <p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum
                      semper nisi.</p>
                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="blog-post-item">
                  <img src="img/god.jpg" alt="Blog Image">
                  <div class="blog-post-content">
                    <div class="post-meta">
                      <span><i class="bi bi-person"></i> David Brown</span>
                      <span><i class="bi bi-clock"></i> Jan 24, 2025</span>
                      <span><i class="bi bi-chat-dots"></i> 10 Comments</span>
                    </div>
                    <h2><a href="#">God of War™ Ragnarök</a></h2>
                    <p>Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.
                    </p>
                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="blog-post-item">
                  <img src="img/spider.jpg" alt="Blog Image">
                  <div class="blog-post-content">
                    <div class="post-meta">
                      <span><i class="bi bi-person"></i> Emma Davis</span>
                      <span><i class="bi bi-clock"></i> Jan 27, 2025</span>
                      <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                    </div>
                    <h2><a href="#">Spider-Man</a></h2>
                    <p>Aenean leo ligula porttitor eu consequat vitae eleifend ac enim aliquam lorem ante dapibus in
                      viverra.</p>
                    <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div><!-- End slide item -->

            </div>
            <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="300">
              <a href="/tampilan" class="btn btn-lg rounded-pill px-4 custom-gold-btn"
                style="font-weight: 600; box-shadow: 0 4px 15px rgba(251, 251, 251, 0.4); transition: all 0.3s ease;">
                More Games
              </a>
            </div>

            <style>
              /* Warna dasar emas */
              .custom-gold-btn {
                background-color: #f7ca01;
                /* emas */
                color: #1d1d1d;
                /* teks gelap supaya kontras */
                border: none;
              }

              /* Hover warna emas lebih gelap dan efek */
              .custom-gold-btn:hover {
                background-color: #f7ca01;
                /* emas gelap */
                box-shadow: 0 6px 20px rgba(255, 255, 255, 0.6);
                transform: scale(1.05);
                color: #1d1d1d;
              }
            </style>

          </div>
        </div>
        <!-- Category Section -->
        <section class="category-section section bg-light py-5">
          <div class="container">
            <div class="row mb-4">
              <div class="col-12 text-center">
                <h2 class="section-title">Why Choose Our PS5 Rental?</h2>
                <p class="lead text-muted">Premium gaming experience at affordable prices</p>
              </div>
            </div>

            <div class="row g-4">
              <!-- Layanan Unggulan -->
              <div class="col-lg-4 col-md-6">
                <div class="category-card card border-0 shadow-sm h-100 hover-effect position-relative">
                  <div class="card-img-container overflow-hidden">
                    <img class="img-fluid card-img-top" src="img/6.jpg" alt="Rental PS5">
                    <div class="img-overlay d-flex align-items-center justify-content-center">
                      <span class="overlay-text">Start Gaming Now</span>
                    </div>
                  </div>
                  <div class="card-body text-center">
                    <div class="icon-box mb-3">
                      <i class="fas fa-gamepad fa-3x text-primary"></i>
                    </div>
                    <h3 class="h5 card-title">Flexible Rental Plans</h3>
                    <p class="card-text text-muted">Play your favorite games with affordable daily & weekly rental
                      options!</p>
                    <div class="mt-3">
                      <span class="badge bg-primary me-1">PS5</span>
                      <span class="badge bg-success me-1">4K</span>
                      <span class="badge bg-info">120Hz</span>
                    </div>
                  </div>
                  <div class="card-footer bg-transparent border-0">
                    <a href="{{ route('paket') }}" class="btn btn-primary w-100">Book Now</a>
                  </div>
                </div>
              </div>

              <!-- Game Populer -->
              <div class="col-lg-4 col-md-6">
                <div class="category-card card border-0 shadow-sm h-100 hover-effect">
                  <div class="card-img-container overflow-hidden">
                    <img class="img-fluid card-img-top" src="img/7.jpg" alt="Game Populer">
                    <div class="img-overlay d-flex align-items-center justify-content-center">
                      <span class="overlay-text">Latest Titles</span>
                    </div>
                  </div>
                  <div class="card-body text-center">
                    <div class="icon-box mb-3">
                      <i class="fas fa-trophy fa-3x text-primary"></i>
                    </div>
                    <h3 class="h5 card-title">Popular Game Library</h3>
                    <p class="card-text text-muted">Enjoy the hottest titles including FIFA 23, GTA V, and Tekken 8.</p>
                    <div class="game-platforms mt-3">
                      <img src="img/ps5-logo.png" alt="PS5" height="30" class="me-2">
                      <img src="img/4k-logo.png" alt="4K" height="30" class="me-2">
                      <img src="img/hdr-logo.png" alt="HDR" height="30">
                    </div>
                  </div>
                  <div class="card-footer bg-transparent border-0">
                    <a href="/tampilan" class="btn btn-outline-primary w-100 stretched-link">View Games</a>

                  </div>
                </div>
              </div>

              <!-- Booking Online -->
              <div class="col-lg-4 col-md-6">
                <div class="category-card card border-0 shadow-sm h-100 hover-effect position-relative">
                  <div class="card-img-container overflow-hidden">
                    <img class="img-fluid card-img-top" src="img/8.jpg" alt="Booking Online">
                    <div class="img-overlay d-flex align-items-center justify-content-center">
                      <span class="overlay-text">Instant Booking</span>
                    </div>
                  </div>
                  <div class="card-body text-center">
                    <div class="icon-box mb-3">
                      <i class="fas fa-calendar-check fa-3x text-primary"></i>
                    </div>
                    <h3 class="h5 card-title">Easy Online Booking</h3>
                    <p class="card-text text-muted">Secure your gaming session in just a few clicks!</p>
                    <ul class="list-unstyled text-start mt-3">
                      <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>24/7 Booking</li>
                      <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Instant Confirmation</li>
                      <li><i class="fas fa-check-circle text-success me-2"></i>Flexible Scheduling</li>
                    </ul>
                  </div>
                  <div class="card-footer bg-transparent border-0">
                    <a href="/informasi" class="btn btn-primary w-100 stretched-link">Book Online</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <style>
          .img-overlay {
            pointer-events: none;
          }

          .category-section {
            position: relative;
            overflow: hidden;
          }

          .hover-effect {
            transition: all 0.3s ease;
            border-radius: 10px;
          }

          .hover-effect:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
          }

          .card-img-container {
            height: 200px;
            overflow: hidden;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
          }

          .card-img-top {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
          }

          .hover-effect:hover .card-img-top {
            transform: scale(1.1);
          }

          .img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
          }

          .hover-effect:hover .img-overlay {
            opacity: 1;
          }

          .overlay-text {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
          }

          .icon-box {
            background: rgba(13, 110, 253, 0.1);
            width: 80px;
            height: 80px;
            margin: -50px auto 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
          }

          .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
          }

          .section-title:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: #0d6efd;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
          }
        </style>
        <!-- Game Categories Section -->
        <section class="game-categories py-5 bg-light">
          <div class="container">
            <!-- Section Header -->
            <div class="section-header text-center mb-5" data-aos="fade-up">
              <h2 class="display-5 fw-bold mb-3">Explore Game Genres</h2>
              <p class="lead text-muted">Discover your favorite gaming experiences</p>
              <div class="divider mx-auto my-4"></div>
            </div>

            <!-- Game Cards -->
            <div class="row g-4">
              <!-- Sports Category -->
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="genre-card card border-0 shadow-sm h-100 overflow-hidden">
                  <div class="card-img-container position-relative">
                    <img src="img/nba.jpg" class="card-img-top" alt="Sports Games" loading="lazy">
                    <div class="genre-badge position-absolute top-0 start-0 bg-danger text-white p-2 px-3">
                      <i class="bi bi-trophy-fill me-2"></i> Competitive
                    </div>
                    <div class="img-overlay d-flex align-items-end p-4">
                      <a href="/sports-games" class="btn btn-outline-light stretched-link">View Games</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="h4 card-title mb-3">Sports Games</h3>
                    <p class="card-text text-muted mb-4">Experience the thrill of competition with realistic sports
                      simulations.</p>
                    <div class="game-tags">
                      <span class="badge bg-light text-dark me-1 mb-1">FIFA 23</span>
                      <span class="badge bg-light text-dark me-1 mb-1">NBA 2K24</span>
                      <span class="badge bg-light text-dark me-1 mb-1">PES 2023</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Action Category -->
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="genre-card card border-0 shadow-sm h-100 overflow-hidden">
                  <div class="card-img-container position-relative">
                    <img src="img/horizon.jpg" class="card-img-top" alt="Action Games" loading="lazy">
                    <div class="genre-badge position-absolute top-0 start-0 bg-warning text-dark p-2 px-3">
                      <i class="bi bi-controller me-2"></i> Adventure
                    </div>
                    <div class="img-overlay d-flex align-items-end p-4">
                      <a href="/action-games" class="btn btn-outline-light stretched-link">View Games</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="h4 card-title mb-3">Action Games</h3>
                    <p class="card-text text-muted mb-4">Immerse yourself in heart-pounding adventures and epic battles.
                    </p>
                    <div class="game-tags">
                      <span class="badge bg-light text-dark me-1 mb-1">GTA V</span>
                      <span class="badge bg-light text-dark me-1 mb-1">Call of Duty</span>
                      <span class="badge bg-light text-dark me-1 mb-1">Spider-Man</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Fighting Category -->
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="genre-card card border-0 shadow-sm h-100 overflow-hidden">
                  <div class="card-img-container position-relative">
                    <img src="img/teken.jpg" class="card-img-top" alt="Fighting Games" loading="lazy">
                    <div class="genre-badge position-absolute top-0 start-0 bg-success text-white p-2 px-3">
                      <i class="bi bi-joystick me-2"></i> Arcade
                    </div>
                    <div class="img-overlay d-flex align-items-end p-4">
                      <a href="/fighting-games" class="btn btn-outline-light stretched-link">View Games</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="h4 card-title mb-3">Fighting Games</h3>
                    <p class="card-text text-muted mb-4">Test your skills in intense one-on-one combat matches.</p>
                    <div class="game-tags">
                      <span class="badge bg-light text-dark me-1 mb-1">Tekken 8</span>
                      <span class="badge bg-light text-dark me-1 mb-1">Mortal Kombat</span>
                      <span class="badge bg-light text-dark me-1 mb-1">Street Fighter</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Call to Action Section -->
        <section class="cta-section py-6 position-relative overflow-hidden">
          <div class="container position-relative z-index-2">
            <div class="row justify-content-center text-center" data-aos="zoom-in">
              <div class="col-lg-8">
                <h2 class="display-5 fw-bold text-white mb-4">Play Your Favorite Games Now!</h2>
                <p class="lead text-light mb-5">Experience comfort, affordable prices, and fast service at the best
                  PlayStation rental in your city.</p>
                <div class="d-flex justify-content-center gap-3">
                  <a href="/pembayaran" class="btn btn-primary btn-lg px-4 py-3 rounded-pill fw-bold">
                    <i class="bi bi-calendar-check me-2"></i> Book Now
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Background with overlay -->
          <div class="cta-bg"></div>
        </section>

        <style>
          /* Custom Styles */
          .divider {
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #0d6efd, #dc3545);
          }

          .genre-card {
            transition: all 0.3s ease;
            border-radius: 12px !important;
          }

          .genre-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15) !important;
          }

          .card-img-container {
            height: 200px;
            overflow: hidden;
          }

          .genre-card .card-img-top {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
          }

          .genre-card:hover .card-img-top {
            transform: scale(1.1);
          }

          .genre-badge {
            border-radius: 0 0 12px 0;
            font-size: 0.85rem;
            font-weight: 600;
          }

          .img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
          }

          .genre-card:hover .img-overlay {
            opacity: 1;
          }

          .game-tags .badge {
            transition: all 0.2s ease;
          }

          .game-tags .badge:hover {
            background-color: #0d6efd !important;
            color: white !important;
            transform: translateY(-2px);
          }

          /* CTA Section Styles */
          .cta-section {
            padding: 100px 0;
            color: white;
          }

          .cta-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('img/gameps5.jpg') no-repeat center center;
            background-size: cover;
            z-index: 1;
          }

          .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.8) 0%, rgba(220, 53, 69, 0.8) 100%);
            z-index: 2;
          }

          .z-index-2 {
            position: relative;
            z-index: 3;
          }

          @media (max-width: 768px) {
            .card-img-container {
              height: 180px;
            }

            .cta-section {
              padding: 60px 0;
            }
          }
        </style>
</main>

<style>
  :root {
    --primary-color: #6c5ce7;
  }

  html,
  body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    overflow-x: hidden;
    background: #f8f9fa;
    /* biar warna dasar sama dengan section lain */
  }

  .footer-section {
    background: #1a1a1a;
    color: #fff;
    padding-top: 3rem;
    padding-bottom: 3rem;
    width: 100vw;
    min-height: 300px;
    /* Hapus position: fixed dan bottom agar footer normal di bawah konten */
    position: static;
    left: unset;
    bottom: unset;
    z-index: 10;
    overflow-x: hidden;
  }

  .footer-section .container-fluid {
    max-width: 1400px;
    margin: 0 auto;
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .footer-section h3,
  .footer-section h4 {
    color: #fff;
  }

  .social-links a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    color: white;
    margin-right: 10px;
    transition: all 0.3s ease;
  }

  .social-links a:hover {
    background: var(--primary-color);
    transform: translateY(-3px);
  }

  .footer-links,
  .footer-contact,
  .opening-hours {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .footer-links li,
  .footer-contact li,
  .opening-hours li {
    margin-bottom: 10px;
    color: #aaa;
  }

  .footer-links a {
    color: #aaa;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-links a:hover {
    color: white;
  }

  .footer-contact li {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .footer-section hr {
    border-color: rgba(255, 255, 255, 0.1);
  }

  /* Agar konten tidak ketutupan footer */
  body {
    padding-bottom: 0;
  }

  @media (max-width: 991px) {
    .footer-section .container-fluid {
      padding-left: 1rem;
      padding-right: 1rem;
    }

    body {
      padding-bottom: 0;
    }
  }

  @media (max-width: 767px) {
    .footer-section {
      min-height: 420px;
    }

    body {
      padding-bottom: 0;
    }
  }
</style>
<footer class="footer-section bg-dark text-white py-5">
  <div class="container-fluid">
    <div class="row g-4">
      <div class="col-lg-4">
        <h3 class="mb-4">PS Kharisma</h3>
        <p>Tempat rental PlayStation premium di Yogyakarta dengan pengalaman gaming terbaik.</p>
        <div class="social-links mt-4">
          <a href="https://www.instagram.com/stadiumgame?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
              class="bi bi-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-md-4">
        <h4 class="mb-4">Menu</h4>
        <ul class="footer-links">
          <li><a href="#">Beranda</a></li>
          <li><a href="#features">Fasilitas</a></li>
          <li><a href="#pricing">Harga</a></li>
          <li><a href="#booking">Booking</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4">
        <h4 class="mb-4">Kontak</h4>
        <ul class="footer-contact">
          <li><i class="bi bi-geo-alt"></i> Jl. Contoh No. 123, Yogyakarta</li>
          <li><i class="bi bi-telephone"></i> 0812-3456-7890</li>
          <li><i class="bi bi-envelope"></i> info@pskharisma.com</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4">
        <h4 class="mb-4">Jam Buka</h4>
        <ul class="opening-hours">
          <li>Senin - Jumat: 10:00 - 22:00</li>
          <li>Sabtu - Minggu: 09:00 - 24:00</li>
        </ul>
      </div>
    </div>

    <hr class="mt-5">

    <div class="text-center pt-3">
      <p class="mb-0">&copy; 2023 PS Kharisma. All rights reserved.</p>
    </div>
  </div>
</footer>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Main JS File -->
<script src="Blogy/assets/js/main.js"></script>

</body>

</html>