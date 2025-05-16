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
        <h2>Login</h2>
    </div>
    </div>
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card">
          <div class="row g-0">
            <div class="col-md-6 d-none d-md-block">
              <img src="{{ asset('img/stik.jpg') }}" alt="Login image" class="img-fluid login-image">
            </div>
            <div class="col-md-6 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5">

                @if ($errors->has('loginError'))
                  <div class="alert alert-danger">{{ $errors->first('loginError') }}</div>
                @endif
                @if ($errors->has('kosong'))
                  <div class="alert alert-warning">{{ $errors->first('kosong') }}</div>
                @endif

                <form action="{{ route('login.proses') }}" method="POST">
                  @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-user-shield fa-2x me-2" style="color: #e0a800;"></i>
                    <span class="h1 fw-bold mb-0">Rental Playstation</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control form-control-lg" required value="{{ old('email') }}" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg" required />
                  </div>

                  <div class="form-check mb-3">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                  </div>

                  <div class="mb-4">
                    <button class="btn btn-primary btn-lg w-100 btn-dark" type="submit">Login</button>
                  </div>

                  <div class="text-center">
                    <a class="small text-muted" href="#">Forgot password?</a>
                    <p class="mt-3 mb-2">Don't have an account? <a href="{{route('register')}}">Register here</a></p>
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

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
