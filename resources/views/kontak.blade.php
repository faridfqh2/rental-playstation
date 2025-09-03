@extends('layouts.app')

@section('title', 'Contact - Rental Playstation')

@section('content')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">

      </div>

      <div class="title-wrapper">
        <h1>Contact</h1>
        <p>Kami siap membantu Anda! Jika Anda memiliki pertanyaan, membutuhkan bantuan terkait pemesanan, atau ingin
          memberikan masukan, silakan hubungi kami melalui informasi di bawah ini:</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <h3>Our Address</h3>
              <p>Jl. Prof. DR. Soepomo Sh No.63, Warungboto, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa
                Yogyakarta 55164</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <h3>Nomor Kontak</h3>
              <p>Whatsapp: 082136347300<br>
                Email: Infopskharisma@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-clock"></i>
              </div>
              <h3>Opening Hour</h3>
              <p>Senin - Minggu : 24.00<br>
                Tanggal merah : Closed</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
              @if(session('success'))
                <div class="alert alert-success" id="success-alert">
                  {{ session('success') }}
                </div>
                <script>
                  setTimeout(function () {
                    const alertBox = document.getElementById('success-alert');
                    if (alertBox) {
                      alertBox.style.transition = 'opacity 0.5s ease';
                      alertBox.style.opacity = 0;
                      setTimeout(() => alertBox.remove(), 500); // Hapus dari DOM setelah fade out
                    }
                  }, 3000);
                </script>
              @endif

              <form action="{{ route('kontak.store') }}" method="post" role="form">
                @csrf

                <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Your name*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      <input type="email" class="form-control" name="email" placeholder="Email address*" required="">
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-list"></i></span>
                      <select name="subject" class="form-control" required="">
                        <option value="">Select service*</option>
                        <option value="Service 1">Consulting</option>
                        <option value="Service 2">Development</option>
                        <option value="Service 3">Marketing</option>
                        <option value="Service 4">Support</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                      <textarea class="form-control" name="message" rows="6" placeholder="Write a message*"
                        required=""></textarea>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- /Contact Section -->

  </main>
  <style>
    .map-container {
      max-width: 1200px;
      margin: 0 auto;
      background: #ffffff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      border: 0, 1px solid #e0a800;
    }

    .map-container h2 {
      text-align: center;
      color: #333;
      margin-bottom: 1rem;
    }

    .map-responsive iframe {
      width: 100%;
      height: 400px;
      border: 0;
      border-radius: 10px;
    }
  </style>
  </head>

  <body>

    <div class="map-container">
      <h2>Lokasi Kharisma PS</h2>
      <div class="map-responsive">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8306594976452!2d110.38749347485792!3d-7.807744377516226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5771d3404783%3A0xbd9952e1b2c761d3!2sKharisma%20Ps3%20Ps4%20Ps5!5e0!3m2!1sid!2sid!4v1746702134681!5m2!1sid!2sid"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

  </body>

  <footer class="footer-section bg-dark text-white py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4">
          <h3 class="mb-4">PS Kharisma</h3>
          <p>Tempat rental PlayStation premium di Yogyakarta dengan pengalaman gaming terbaik.</p>
          <div class="social-links mt-4">
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-whatsapp"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-tiktok"></i></a>
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

  <style>
    :root {
      --primary-color: #6c5ce7;
      --secondary-color: #a29bfe;
      --dark-color: #2d3436;
      --light-color: #f5f6fa;
      --gradient: linear-gradient(135deg, #6c5ce7 0%, #a29bfe 100%);
    }

    /* Hero Section */
    .hero-section {
      padding: 100px 0;
      background: var(--gradient);
      color: white;
    }

    .text-gradient {
      background: linear-gradient(90deg, #ffd700, #ff8c00);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .floating-animation {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-20px);
      }

      100% {
        transform: translateY(0px);
      }
    }

    /* Features Section */
    .features-section {
      background: white;
    }

    .feature-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
      height: 100%;
    }

    .feature-card:hover {
      transform: translateY(-10px);
    }

    .feature-icon {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      color: white;
      font-size: 30px;
    }

    .bg-gradient-1 {
      background: linear-gradient(135deg, #6c5ce7 0%, #a29bfe 100%);
    }

    .bg-gradient-2 {
      background: linear-gradient(135deg, #00b894 0%, #55efc4 100%);
    }

    .bg-gradient-3 {
      background: linear-gradient(135deg, #fd79a8 0%, #fab1a0 100%);
    }

    .game-badges .badge {
      background: #f3f3f3;
      color: var(--dark-color);
      margin: 5px;
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 12px;
    }

    .specs {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-top: 15px;
    }

    .spec-item {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 14px;
    }

    .support-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-top: 15px;
      color: #fd79a8;
      text-decoration: none;
      font-weight: 500;
    }

    /* Gallery Section */
    .gallery-item {
      position: relative;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .gallery-item:hover {
      transform: scale(1.03);
    }

    .gallery-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
      color: white;
      padding: 20px;
    }

    /* Pricing Section */
    .price-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      position: relative;
      transition: transform 0.3s ease;
      height: 100%;
    }

    .price-card.popular {
      border: 2px solid var(--primary-color);
    }

    .popular-badge {
      position: absolute;
      top: -10px;
      right: 20px;
      background: var(--primary-color);
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: bold;
    }

    .price-header {
      text-align: center;
      margin-bottom: 25px;
      padding-bottom: 20px;
      border-bottom: 1px solid #eee;
    }

    .price {
      font-size: 36px;
      font-weight: bold;
      color: var(--primary-color);
      margin: 10px 0;
    }

    .price span {
      font-size: 16px;
      font-weight: normal;
    }

    .price-features {
      list-style: none;
      padding: 0;
      margin-bottom: 30px;
    }

    .price-features li {
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* Booking Section */
    .booking-form {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    /* Footer */
    .footer-section {
      background: #1a1a1a;
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

    .footer-links {
      list-style: none;
      padding: 0;
    }

    .footer-links li {
      margin-bottom: 10px;
    }

    .footer-links a {
      color: #aaa;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer-links a:hover {
      color: white;
    }

    .footer-contact {
      list-style: none;
      padding: 0;
    }

    .footer-contact li {
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .opening-hours {
      list-style: none;
      padding: 0;
    }

    .opening-hours li {
      margin-bottom: 10px;
      color: #aaa;
    }
  </style>

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
@endsection