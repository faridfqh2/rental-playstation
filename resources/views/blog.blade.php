<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog Details - Blogy Bootstrap </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="Blogy/assets/img/favicon.png" rel="icon">
  <link href="Blogy/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Blogy/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Blogy/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Blogy/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Blogy/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="Blogy/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="Blogy/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Blogy
  * Template URL: https://bootstrapmade.com/blogy-bootstrap-blog-template/
  * Updated: Feb 22 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="blog-details-page">

  <header id="header" class="header position-relative">
    <div class="container-fluid container-xl position-relative">

      <div class="top-row d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-end">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="Blogy/assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">Rental Playstation</h1><span>.</span>
        </a>

        <div class="d-flex align-items-center">
          <div class="social-links">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>

          <form class="search-form ms-4">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit" class="btn"><i class="bi bi-search"></i></button>
          </form>
        </div>
      </div>

    </div>

    <div class="nav-wrap">
      <div class="container d-flex justify-content-center position-relative">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/blog">Blog</a></li>
          
            <li><a href="/schedule">Schedule</a></li>
            <li class="dropdown"><a href="#"><span>Payment</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="/login">Pay</a></li>
                <li><a href="/blog">Choose Payment</a></li>
                <li><a href="/schedule">Check Schedule</a></li>
                <li><a href="search-results.html">Search Results</a></li>
              </ul>
            </li>
            <li><a href="/kontak">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Blog</a></li>
            <li class="breadcrumb-item active current">Blog Details</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Blog Details</h1>
        <p>Mau jadi jago main FIFA 24? Simak 5 trik jitu agar kamu bisa menang dengan mudah, baik saat bermain di rumah atau saat rental di tempat kami. Jangan lewatkan tips bermanfaat ini!</p>
      </div>
    </div><!-- End Page Title -->
    <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .blog-card {
      border-radius: 16px;
      overflow: hidden;
      transition: transform 0.3s ease;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .blog-card:hover {
      transform: translateY(-5px);
    }
    .blog-img {
      height: 200px;
      object-fit: cover;
    }
    .blog-content {
      padding: 20px;
    }
    .blog-title {
      font-size: 1.25rem;
      font-weight: 600;
    }
    .btn-read {
      background-color: #007bff;
      color: #fff;
      border-radius: 50px;
      padding: 6px 20px;
      transition: all 0.3s;
    }
    .btn-read:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

        <section class="py-5">
          <div class="container">
            <h2 class="text-center mb-5 fw-bold">Blog & Artikel Terbaru</h2>
            <div class="row g-4">

              <!-- Blog Item 1 -->
              <div class="col-md-4" data-aos="fade-up">
                <div class="card blog-card">
                  <img src="/img/ps5.jpg" class="card-img-top blog-img" alt="PS5">
                  <div class="blog-content">
                    <h5 class="blog-title">Review PS5: Next-Gen Gaming!</h5>
                    <p class="text-muted">PS5 hadir dengan grafis memukau dan kecepatan tinggi. Apakah sewa PS5 layak?</p>
                    <a href="#" class="btn btn-dark">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>

              <!-- Blog Item 2 -->
              <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card blog-card">
                  <img src="/img/fifa.jpg" class="card-img-top blog-img" alt="FIFA">
                  <div class="blog-content">
                    <h5 class="blog-title">Tips Menang di FIFA 24</h5>
                    <p class="text-muted">Mau jadi jago main FIFA? Simak 5 trik jitu agar tidak kalah saat rental!</p>
                    <a href="#" class="btn btn-dark">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>

              <!-- Blog Item 3 -->
              <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card blog-card">
                  <img src="/img/game.jpg" class="card-img-top blog-img" alt="Game Seru">
                  <div class="blog-content">
                    <h5 class="blog-title">Game Seru Buat Mabar</h5>
                    <p class="text-muted">Main bareng teman jadi lebih seru dengan rekomendasi game ini. Coba saat sewa!</p>
                    <a href="#" class="btn btn-dark">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>


          <!-- Blog Comment Form Section -->
          <section id="blog-comment-form" class="blog-comment-form section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <form method="post" role="form">

                <div class="section-header">
                  <h3>Share Your Thoughts</h3>
                  <p>Your email address will not be published. Required fields are marked *</p>
                </div>

                <div class="row gy-3">
                  <div class="col-md-6 form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name" required="">
                  </div>

                  <div class="col-md-6 form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address" required="">
                  </div>

                  <div class="col-12 form-group">
                    <label for="website">Website</label>
                    <input type="url" name="website" class="form-control" id="website" placeholder="Your website (optional)">
                  </div>

                  <div class="col-12 form-group">
                    <label for="comment">Your Comment *</label>
                    <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="Write your thoughts here..." required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" class="btn-submit">Post Comment</button>
                  </div>
                </div>

              </form>

            </div>

          </section><!-- /Blog Comment Form Section -->

        </div>
        <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">


<!-- Categories Widget -->
<div class="categories-widget widget-item">
  <h3 class="widget-title">Kategori</h3>
  <ul class="mt-3">
    <li><a href="#">PS5 Rental <span>(25)</span></a></li>
    <li><a href="#">Game Populer <span>(12)</span></a></li>
    <li><a href="#">Tips Gaming <span>(5)</span></a></li>
    <li><a href="#">Promo & Diskon <span>(22)</span></a></li>
    <li><a href="#">Aksesori PS <span>(8)</span></a></li>
    <li><a href="#">Event & Turnamen <span>(14)</span></a></li>
  </ul>
</div>

<!-- Recent Posts Widget -->
<div class="recent-posts-widget widget-item">
  <h3 class="widget-title">Artikel Terbaru</h3>

  <div class="post-item">
    <img src="/img/fifa.jpg" alt="Review PS5" class="flex-shrink-0">
    <div>
      <h4><a href="blog-details.html">Review PS5: Next-Gen Gaming yang Wajib Dicoba</a></h4>
      <time datetime="2025-05-01">May 1, 2025</time>
    </div>
  </div>

  <div class="post-item">
    <img src="/img/fifa.jpg" alt="Tips FIFA 24" class="flex-shrink-0">
    <div>
      <h4><a href="blog-details.html">5 Tips Menang di FIFA 24 untuk Pemain Pemula</a></h4>
      <time datetime="2025-04-28">Apr 28, 2025</time>
    </div>
  </div>

  <div class="post-item">
    <img src="/img/fifa.jpg" alt="Rekomendasi Game" class="flex-shrink-0">
    <div>
      <h4><a href="blog-details.html">Rekomendasi Game Seru untuk Main Mabar di PS</a></h4>
      <time datetime="2025-04-25">Apr 25, 2025</time>
    </div>
  </div>

  <div class="post-item">
    <img src="/img/fifa.jpg" alt="Aksesori PS" class="flex-shrink-0">
    <div>
      <h4><a href="blog-details.html">Aksesori PS yang Harus Kamu Miliki untuk Pengalaman Gaming Maksimal</a></h4>
      <time datetime="2025-04-20">Apr 20, 2025</time>
    </div>
  </div>

  <div class="post-item">
    <img src="/img/fifa.jpg" alt="Promo PS5" class="flex-shrink-0">
    <div>
      <h4><a href="blog-details.html">Diskon Sewa PS5 di Bulan Ini: Dapatkan Harga Terbaik</a></h4>
      <time datetime="2025-04-15">Apr 15, 2025</time>
    </div>
  </div>
</div>


 <!-- Tags Widget -->
<div class="tags-widget widget-item">

<h3 class="widget-title">Tags</h3>
<ul>
  <li><a href="#">PlayStation</a></li>
  <li><a href="#">PS5</a></li>
  <li><a href="#">PS4</a></li>
  <li><a href="#">Sewa PS</a></li>
  <li><a href="#">Game Online</a></li>
  <li><a href="#">Multiplayer</a></li>
  <li><a href="#">Turnamen</a></li>
  <li><a href="#">Rental Harian</a></li>
  <li><a href="#">Game Favorit</a></li>
  <li><a href="#">FC25</a></li>
  <li><a href="#">PES 2025</a></li>
</ul>

</div><!--/Tags Widget -->


          </div>

        </div>

      </div>
    </div>

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Rental Playstation</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Playstation Kharisma</p>
            <p>Yogyakarta</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+08...</span></p>
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
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Blogy</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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