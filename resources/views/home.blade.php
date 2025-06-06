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
          <img src="/img/ps5.jpg" class="d-block w-100" alt="...">
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
            <img src="img/1.jpg" alt="Blog Image" class="img-fluid">
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
                <span class="/payment">Payment</span>
              </div>
              <h3 class="post-title">
                <a href="/payment" title="Adipiscing elit, sed do eiusmod tempor incididunt">Ayo, Pesan
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

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Game</h2>
        <div><span>Check Our</span> <span class="description-title">Game</span></div>
      </div><!-- End Section Title -->

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
                <img src="img/gta.jpg" alt="Blog Image">
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

    </section><!-- /Featured Posts Section -->
    <!-- Category Section -->
    <section class="category-section section bg-light">
      <div class="container">
        <div class="row">
          <!-- Layanan Unggulan -->
          <div class="col-lg-4 col-sm-6">
            <div class="featured-post featured-post-sm">
              <a href="#"><img class="img-fluid" src="img/6.jpg" alt="Rental PS5"></a>
              <div class="mt-3">
                <a href="#" class="text-dark">
                  <h5>Rental PS5 Harian & Mingguan</h5>
                </a>
                <p class="small text-muted mb-0">Main game favoritmu dengan harga terjangkau dan durasi fleksibel!</p>
              </div>
            </div>
          </div>

          <!-- Game Populer -->
          <div class="col-lg-4 col-sm-6">
            <div class="featured-post featured-post-sm">
              <a href="#"><img class="img-fluid" src="img/7.jpg" alt="Game Populer"></a>
              <div class="mt-3">
                <a href="#" class="text-dark">
                  <h5>Game Populer: FIFA 23, GTA V, Tekken 8</h5>
                </a>
                <p class="small text-muted mb-0">Nikmati berbagai pilihan game terbaru dan terfavorit di rental kami.
                </p>
              </div>
            </div>
          </div>

          <!-- Booking Online -->
          <div class="col-lg-4 col-sm-6">
            <div class="featured-post featured-post-sm">
              <a href="#"><img class="img-fluid" src="img/8.jpg" alt="Booking Online"></a>
              <div class="mt-3">
                <a href="#" class="text-dark">
                  <h5>Booking Online Mudah & Cepat</h5>
                </a>
                <p class="small text-muted mb-0">Cukup beberapa klik, jadwal main kamu langsung aman!</p>
              </div>
            </div>
          </div>
        </div>

        <hr>

        <style>
          .card {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
            border: none;
          }

          .carousel-inner {
            height: 650px;
            /* Ubah tinggi sesuai kebutuhan */
          }

          .card:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
          }

          .card-img-top {
            width: 100%;
            transition: transform 0.5s ease;
          }

          .card:hover .card-img-top {
            transform: scale(1.1);
          }

          .img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.45);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            justify-content: center;
            align-items: center;
          }

          .card:hover .img-overlay {
            opacity: 1;
          }

          .overlay-text {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
          }
        </style>

        <!-- List Game Kategori -->
        <section class="kategori-game py-5">
          <div class="container section-title text-center mb-5" data-aos="fade-up">
            <h2>Featured Menu</h2>
            <div><span>Popular</span> <span class="description-title">Game</span></div>
          </div>

          <div class="container">
            <div class="row g-4" data-aos="fade-up" data-aos-delay="100">
              <!-- Kategori: Sports -->
              <div class="col-lg-4 col-sm-6">
                <article class="card h-100 shadow-sm game-card" data-aos="zoom-in">
                  <div class="position-relative overflow-hidden">
                    <img src="img/nba.jpg" class="card-img-top" alt="Game Sports">
                    <div class="img-overlay">
                      <div class="overlay-text">Sports</div>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5><a href="/blog" class="post-title">Sports</a></h5>
                    <p class="text-muted">FIFA, NBA 2K, PES cocok untuk kamu yang suka kompetisi!</p>
                  </div>
                </article>
              </div>

              <!-- Kategori: Action -->
              <div class="col-lg-4 col-sm-6">
                <article class="card h-100 shadow-sm game-card" data-aos="zoom-in" data-aos-delay="100">
                  <div class="position-relative overflow-hidden">
                    <img src="img/horizon.jpg" class="card-img-top" alt="Game Action">
                    <div class="img-overlay">
                      <div class="overlay-text">Action</div>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5><a href="/blog" class="post-title">Action</a></h5>
                    <p class="text-muted">GTA V, Call of Duty, Spider-Man – seru dan menegangkan!</p>
                  </div>
                </article>
              </div>

              <!-- Kategori: Fighting -->
              <div class="col-lg-4 col-sm-6">
                <article class="card h-100 shadow-sm game-card" data-aos="zoom-in" data-aos-delay="200">
                  <div class="position-relative overflow-hidden">
                    <img src="img/teken.jpg" class="card-img-top" alt="Game Fighting">
                    <div class="img-overlay">
                      <div class="overlay-text">Fighting</div>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5><a href="/blog" class="post-title">Fighting</a></h5>
                    <p class="text-muted">Tekken, Mortal Kombat, Street Fighter – adu jotos digital!</p>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>

        <!-- Call to Action Section with Local Image Background -->
        <section class="call-to-action section my-5" data-aos="zoom-in-up">
          <div class="container text-white position-relative z-2">
            <div class="row justify-content-center text-center">
              <div class="col-lg-8">
                <h2 class="mb-3">Mainkan Game Favoritmu Sekarang!</h2>
                <p class="mb-4">Nikmati kenyamanan, harga terjangkau, dan layanan cepat di tempat rental PlayStation
                  terbaik di kotamu.</p>
                <a href="/pembayaran" class="btn btn-light btn-lg rounded-pill">Booking Sekarang</a>
              </div>
            </div>
          </div>
        </section>

        <!-- Tambahan CSS -->
        <style>
          .img-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(29, 53, 87, 0.7);
            color: #fff;
            text-align: center;
            padding: 5px;
            font-weight: bold;
          }

          .game-card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
          }

          .call-to-action {
            padding: 80px 0;
            background: url('img/gameps5.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            position: relative;
          }

          .call-to-action::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
          }

          .call-to-action .container {
            position: relative;
            z-index: 2;
          }

          .post-title {
            text-decoration: none;
            color: #1d3557;
          }

          .post-title:hover {
            color: #457b9d;
          }
        </style>


        <footer id="footer" class="footer">

          <div class="container footer-top">
            <div class="row gy-4">
              <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                  <span class="sitename">Rental Playstation</span>
                </a>
                <div class="footer-contact pt-3">
                  <p>Playstation</p>
                  <p>Yogyakarta</p>
                  <p class="mt-3"><strong>Phone:</strong> <span>+08******</span></p>
                  <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>

              <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Terms of service</a></li>
                  <li><a href="#">Privacy policy</a></li>
                </ul>
              </div>

              <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><a href="#">Web Design</a></li>
                  <li><a href="#">Web Development</a></li>
                  <li><a href="#">Product Management</a></li>
                  <li><a href="#">Marketing</a></li>
                  <li><a href="#">Graphic Design</a></li>
                </ul>
              </div>

              <div class="col-lg-2 col-md-3 footer-links">
                <h4>Hic solutasetp</h4>
                <ul>
                  <li><a href="#">Molestiae accusamus iure</a></li>
                  <li><a href="#">Excepturi dignissimos</a></li>
                  <li><a href="#">Suscipit distinctio</a></li>
                  <li><a href="#">Dilecta</a></li>
                  <li><a href="#">Sit quas consectetur</a></li>
                </ul>
              </div>

              <div class="col-lg-2 col-md-3 footer-links">
                <h4>Nobis illum</h4>
                <ul>
                  <li><a href="#">Ipsam</a></li>
                  <li><a href="#">Laudantium dolorum</a></li>
                  <li><a href="#">Dinera</a></li>
                  <li><a href="#">Trodelas</a></li>
                  <li><a href="#">Flexo</a></li>
                </ul>
              </div>

            </div>
          </div>

          <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">-</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
              Designed by <a>Faqih</a>
            </div>
          </div>

        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="Blogy/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="Blogy/assets/vendor/php-email-form/validate.js"></script>
        <script src="Blogy/assets/vendor/aos/aos.js"></script>
        <script src="Blogy/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="Blogy/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="Blogy/assets/vendor/glightbox/js/glightbox.min.js"></script>

        <!-- Main JS File -->
        <script src="Blogy/assets/js/main.js"></script>

        </body>

        </html>