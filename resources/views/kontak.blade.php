@extends('layouts.app')

@section('title', 'Contact - Rental Playstation')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
    <div class="breadcrumbs">
      <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Blog</a></li>
        <li class="breadcrumb-item active current">Contact</li>
      </ol>
      </nav>
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
        <h3>Contact Number</h3>
        <p>Mobile: 082136347300<br>
          Email: -</p>
        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="info-card">
        <div class="icon-box">
          <i class="bi bi-clock"></i>
        </div>
        <h3>Opening Hour</h3>
        <p>Senin - Minggu : 24.00<br>
          Holiday : Closed</p>
        </div>
      </div>
      </div>

      <div class="row">
      <div class="col-lg-12">
        <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
        <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
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
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center">
            <button type="submit">Submit Message</button>
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
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f2f5;
    padding: 2rem;
    }

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
  <footer id="footer" class="footer">


    <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
      <a href="/" class="logo d-flex align-items-center">
        <span class="sitename">Rental Playstation</span>
      </a>
      <div class="footer-contact pt-3">
        <p>Jl. Prof. DR. Soepomo Sh No.63, Warungboto, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta
        55164</p>
        <p class="mt-3"><strong>Phone:</strong> <span> +082136347300 </span></p>
        <p><strong>Email:</strong> <span>-</span></p>
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