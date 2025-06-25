@include('layouts.app')

<section id="features" class="features-section py-5">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold display-5">Kenapa Memilih <span class="text-gradient">PS Kharisma?</span></h2>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="feature-card">
          <div class="feature-icon bg-gradient-1">
            <i class="bi bi-controller"></i>
          </div>
          <h3>Game Terlengkap</h3>
          <p>100+ game terbaru dari berbagai genre siap dimainkan</p>
          <div class="game-badges">
            <span class="badge">FIFA 24</span>
            <span class="badge">GTA V</span>
            <span class="badge">Spider-Man 2</span>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="feature-card">
          <div class="feature-icon bg-gradient-2">
            <i class="bi bi-joystick"></i>
          </div>
          <h3>Perangkat Premium</h3>
          <p>DualSense controller, VR headset, dan TV 4K 55"</p>
          <div class="specs">
            <div class="spec-item">
              <i class="bi bi-tv"></i>
              <span>TV 4K 55"</span>
            </div>
            <div class="spec-item">
              <i class="bi bi-headset"></i>
              <span>Headset 7.1</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="feature-card">
          <div class="feature-icon bg-gradient-3">
            <i class="bi bi-lightning-charge"></i>
          </div>
          <h3>24/7 Support</h3>
          <p>Bantuan cepat via WhatsApp kapan saja Anda butuhkan</p>
          <a href="#" class="support-link">
            <i class="bi bi-whatsapp"></i> Chat Sekarang
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gallery-section py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold display-5">Galeri <span class="text-gradient">PS Kharisma</span></h2>

    <div class="row g-3">
      <div class="col-md-4">
        <div class="gallery-item">
          <img src="img/tempat2.jpg" class="img-fluid" alt="Ruangan PS">
          <div class="gallery-overlay">
            <h4>Ruangan Nyaman</h4>
            <p>Full AC dengan sofa premium</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gallery-item">
          <img src="img/tempat.jpg" class="img-fluid" alt="Perangkat">
          <div class="gallery-overlay">
            <h4>Perangkat Lengkap</h4>
            <p>DualSense & VR Headset</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gallery-item">
          <img src="img/tempat3.jpg" class="img-fluid" alt="Tim">
          <div class="gallery-overlay">
            <h4>Tim Profesional</h4>
            <p>Siap membantu 24/7</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="pricing" class="pricing-section py-5">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold display-5">Harga <span class="text-gradient">Rental</span></h2>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="price-card">
          <div class="price-header">
            <h3>Regular</h3>
            <div class="price"><span>Rp</span>25.000<span>/jam</span></div>
          </div>
          <ul class="price-features">
            <li><i class="bi bi-check-circle"></i> PlayStation 4 Slim</li>
            <li><i class="bi bi-check-circle"></i> 50+ Game Pilihan</li>
            <li><i class="bi bi-check-circle"></i> TV 43" Full HD</li>
            <li><i class="bi bi-check-circle"></i> 1 Controller</li>
          </ul>
          <a href="#booking" class="btn btn-outline-primary">Pilih Paket</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="price-card popular">
          <div class="popular-badge">POPULER</div>
          <div class="price-header">
            <h3>Premium</h3>
            <div class="price"><span>Rp</span>40.000<span>/jam</span></div>
          </div>
          <ul class="price-features">
            <li><i class="bi bi-check-circle"></i> PlayStation 5</li>
            <li><i class="bi bi-check-circle"></i> 100+ Game Terbaru</li>
            <li><i class="bi bi-check-circle"></i> TV 55" 4K</li>
            <li><i class="bi bi-check-circle"></i> 2 DualSense Controller</li>
            <li><i class="bi bi-check-circle"></i> Free Snack & Minuman</li>
          </ul>
          <a href="#booking" class="btn btn-primary">Pilih Paket</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="price-card">
          <div class="price-header">
            <h3>VR Experience</h3>
            <div class="price"><span>Rp</span>60.000<span>/jam</span></div>
          </div>
          <ul class="price-features">
            <li><i class="bi bi-check-circle"></i> PlayStation VR2</li>
            <li><i class="bi bi-check-circle"></i> 30+ Game VR</li>
            <li><i class="bi bi-check-circle"></i> TV 55" 4K</li>
            <li><i class="bi bi-check-circle"></i> Full Body Tracking</li>
            <li><i class="bi bi-check-circle"></i> Free Snack & Minuman</li>
          </ul>
          <a href="#booking" class="btn btn-outline-primary">Pilih Paket</a>
        </div>
      </div>
    </div>
  </div>
</section>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"></script>