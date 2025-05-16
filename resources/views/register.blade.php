<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - Blogy Bootstrap</title>
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

<body>
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
  <div class="wrap py-3">
    <div class="container-lg">
     <div class="d-flex justify-content-center mb-2">
        <h2>Register</h2>
    </div>
    </div>
  <style>
    body {
      background-color: rgb(245, 245, 245);
    }
    .card {
      border-radius: 1rem;
    }
    .login-image {
      border-radius: 1rem 0 0 1rem;
      object-fit: cover;
      height: 100%;
    }
    .form-label {
      margin-left: 5px;
    }
  </style>
</head>
<body>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card">
          <div class="row g-0">
            <div class="col-md-6 d-none d-md-block">
              <img src="img/stik.jpg" alt="Register image" class="img-fluid Register-image">
            </div>
            <div class="col-md-6 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5">

               <form action="{{ route('register.proses') }}" method="POST">
    @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-user-shield fa-2x me-2" style="color: #e0a800;"></i>
                    <span class="h1 fw-bold mb-0">Rental Playstation</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3">Create Your Account</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="Name">Name</label>
                    <input type="Name" name="Name" id="Name" class="form-control form-control-lg" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="phone" name="phone" id="phone" class="form-control form-control-lg" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control form-control-lg" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg" required />
                  </div>

                  <div class="mb-4">
                    <button class="btn btn-primary btn-lg w-100 btn-dark" type="submit">Register</button>
                    
                  </div>

                  <div class="text-center">
                    <a class="small text-muted" href="#">Forgot password?</a>
                    <a href="#" class="small text-muted me-2">Terms of use</a>
                    <a href="#" class="small text-muted">Privacy policy</a>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer id="footer" class="footer">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="sitename">Blogy</span>
      </a>
      <div class="footer-contact pt-3">
        <p>A108 Adam Street</p>
        <p>New York, NY 535022</p>
        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
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
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
