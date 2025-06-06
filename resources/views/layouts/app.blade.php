<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') - Rental Playstation</title>

    <!-- CSS Vendor -->
    <link href="Blogy/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="Blogy/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="Blogy/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="Blogy/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="Blogy/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="Blogy/assets/css/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('styles')
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <header id="header" class="header position-relative">
        <div class="container-fluid container-xl position-relative">
            <div class="top-row d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-end">
                    <h1 class="sitename">Rental Playstation</h1><span>.</span>
                </a>
                <div class="d-flex align-items-center">
                    <div class="social-links">
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                    <form class="search-form ms-4">
                        <input type="text" placeholder="Search..." class="form-control" />
                        <button type="submit" class="btn"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <div class="nav-wrap">
            <div class="container d-flex justify-content-center position-relative">
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/blog">Blog</a></li>

                        <li><a href="/schedule">Schedule</a></li>
                        <li class="dropdown"><a href="#"><span>Payment</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="{{route('login')}}">Log in</a></li>
                                <li><a href="/pembayaran">Payment</a></li>
                                <li><a href="/schedule">Check Schedule</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                            </ul>
                        </li>
                        <li><a href="/kontak">Contact</a></li>
                        <li style="list-style: none; margin-left: 10px;">
                            <form method="POST" action="{{ route('logout') }}" style="margin: 0; padding: 0;">
                                @csrf
                                <button type="submit" title="Logout"
                                    style="background: none; border: none; color: rgb(228, 171, 0); cursor: pointer; font-size: 20px; display: flex; align-items: center;">
                                    <i class="bi bi-box-arrow-right"></i>
                                </button>
                            </form>
                        </li>

                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- JS Vendor -->
    <script src="Blogy/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Blogy/assets/vendor/aos/aos.js"></script>
    <script src="Blogy/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="Blogy/assets/vendor/glightbox/js/glightbox.min.js"></script>

    @yield('scripts')

</body>

</html>