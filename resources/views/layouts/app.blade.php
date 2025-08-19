<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') - Rental Playstation</title>

    <!-- CSS Vendor -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="Blogy/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="Blogy/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="Blogy/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="Blogy/assets/css/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    @yield('styles')

    <style>
        :root {
            --primary-color: #6c5ce7;
            --secondary-color: #a29bfe;
            --dark-color: #2d3436;
            --light-color: #f5f6fa;
            --gradient: linear-gradient(135deg, #6c5ce7 0%, #a29bfe 100%);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: var(--dark-color);
        }

        .header {
            background: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .top-row {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .logo h1 {
            font-weight: 700;
            font-size: 1.8rem;
            margin: 0;
            color: var(--primary-color);
        }

        .logo span {
            color: var(--secondary-color);
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: rgba(108, 92, 231, 0.1);
            border-radius: 50%;
            color: var(--primary-color);
            margin-left: 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .search-form input {
            border-radius: 20px;
            padding: 8px 15px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        .search-form input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(108, 92, 231, 0.25);
        }

        .search-form button {
            background: none;
            border: none;
            color: var(--primary-color);
            margin-left: -35px;
        }

        .navmenu ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .navmenu a {
            color: var(--dark-color);
            padding: 15px 20px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .navmenu a:hover,
        .navmenu .active {
            color: var(--primary-color);
        }

        .dropdown ul {
            display: none;
            position: absolute;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            min-width: 200px;
            z-index: 99;
        }

        .dropdown:hover ul {
            display: block;
        }

        .dropdown ul a {
            padding: 10px 20px;
            display: block;
        }

        .dropdown ul a:hover {
            background: rgba(108, 92, 231, 0.1);
        }

        .toggle-dropdown {
            font-size: 0.8rem;
        }

        .mobile-nav-toggle {
            display: none;
        }

        .text-gradient {
            background: linear-gradient(90deg, #6c5ce7, #a29bfe);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        main {
            margin-top: 100px;
        }

        .logout-btn {
            background: none;
            border: none;
            color: var(--primary-color);
            padding: 15px 20px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            color: #ff4757;
        }

        @media (max-width: 1200px) {
            .top-row {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }

            .search-form {
                width: 100%;
                justify-content: center;
            }

            .navmenu ul {
                flex-wrap: wrap;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .mobile-nav-toggle {
                display: block;
                position: absolute;
                right: 15px;
                top: 15px;
                font-size: 1.5rem;
                cursor: pointer;
            }

            .navmenu ul {
                display: none;
                flex-direction: column;
                width: 100%;
            }

            .navmenu ul.show {
                display: flex;
            }

            .dropdown ul {
                position: static;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>
    <header id="header" class="header position-relative">
        <div class="container-fluid container-xl position-relative">
            <div class="top-row d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-end">
                    <h1 class="sitename">Rental <span class="text-gradient">Playstation</span></h1>
                </a>
                <div class="d-flex align-items-center">
                    <div class="social-links">
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                    <form action="{{ route('search') }}" method="GET" class="d-flex">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <div class="nav-wrap">
            <div class="container d-flex justify-content-center position-relative">
                <nav id="navmenu" class="navmenu">
                    @auth

                        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                        <ul>
                            <!-- Logo Update Profile -->


                            <li><a href="/" class="active">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/schedule">Schedule</a></li>
                            <li class="dropdown"><a href="#"><span>Booking</span>
                                    <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="/history">History</a></li>
                                    <li><a href="/pembayaran">Main Ditempat</a></li>
                                    <li><a href="/sewa">Main Dirumah</a></li>
                                </ul>
                            </li>
                            <li><a href="/kontak">Contact</a></li>
                            <li>
                                <a href="/profile" title="Update Profile">
                                    <i class="bi bi-person-circle"></i>
                                </a>
                            </li>


                            <!-- Logout -->
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="logout-btn" title="Logout">
                                        <i class="bi bi-box-arrow-right"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    @endauth

                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- JS Vendor -->
    <script src="Blogy/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Blogy/assets/vendor/aos/aos.js"></script>
    <script src="Blogy/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="Blogy/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        // Mobile navigation toggle
        document.querySelector('.mobile-nav-toggle').addEventListener('click', function () {
            document.querySelector('.navmenu ul').classList.toggle('show');
        });

        // Dropdown functionality for mobile
        document.querySelectorAll('.dropdown > a').forEach(item => {
            item.addEventListener('click', function (e) {
                if (window.innerWidth < 768) {
                    e.preventDefault();
                    this.parentElement.querySelector('ul').classList.toggle('show');
                }
            });
        });
    </script>
    <script>
        document.getElementById("searchForm").addEventListener("submit", function (e) {
            e.preventDefault(); // Mencegah form reload
            const query = document.getElementById("searchInput").value.trim();

            if (query) {
                // Arahkan ke halaman pencarian (ganti URL sesuai kebutuhan)
                window.location.href = "/search?q=" + encodeURIComponent(query);

                // Atau tampilkan hasil langsung (jika pakai AJAX/JS filtering)
                // alert("Hasil pencarian: " + query);
            } else {
                alert("Silakan masukkan kata kunci pencarian.");
            }
        });
    </script>


    @yield('scripts')
</body>

</html>