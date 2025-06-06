@include('layouts.app')
<section class="about-3d-section container py-5">
  <h2 class="text-center mb-5 fw-bold text-dark display-5">Kenapa Memilih <span class="text-dark">PS Kharisma?</span>
  </h2>
  <div class="row justify-content-center g-4">

    <div class="col-md-4">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front bg-gold text-dark">
            <i class="bi bi-controller fs-1 mb-3"></i>
            <h4>Koleksi Game Lengkap</h4>
            <p>Main game populer dan terbaru setiap hari.</p>
          </div>
          <div class="flip-card-back bg-black text-white">
            <h5>Lebih dari 100+ Game</h5>
            <p>Tersedia berbagai genre dari sport hingga RPG.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front bg-gold text-dark">
            <i class="bi bi-people-fill fs-1 mb-3"></i>
            <h4>Ruang Nyaman</h4>
            <p>Tempat bermain full AC, bersih, dan cozy.</p>
          </div>
          <div class="flip-card-back bg-black text-white">
            <h5>Fasilitas Premium</h5>
            <p>Dilengkapi sofa empuk, TV besar, dan headset.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front bg-gold text-dark">
            <i class="bi bi-clock-fill fs-1 mb-3"></i>
            <h4>Booking Mudah</h4>
            <p>Pesan jadwal online, kapan pun kamu mau.</p>
          </div>
          <div class="flip-card-back bg-black text-white">
            <h5>24/7 Booking</h5>
            <p>Gunakan website untuk cek jadwal & bayar langsung.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

</div>
<div class="container mt-5">
  <h3 class="text-center mb-4 text-white fw-bold">Galeri PS Kharisma</h3>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="photo-card">
        <img src="img/tempat2.jpg" alt="Suasana PS" class="img-fluid rounded-4 shadow">
      </div>
    </div>
    <div class="col-md-4">
      <div class="photo-card">
        <img src="img/tempat.jpg" alt="Interior PS Kharisma" class="img-fluid rounded-4 shadow">
      </div>
    </div>
    <div class="col-md-4">
      <div class="photo-card">
        <img src="img/tempat3.jpg" alt="Tim Kami" class="img-fluid rounded-4 shadow">
      </div>
    </div>
  </div>
</div>


<style>
  /* Switch Styles */
  .theme-switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }

  .theme-switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }

  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: 0.4s;
    border-radius: 34px;
  }

  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: 0.4s;
    border-radius: 50%;
  }

  input:checked+.slider {
    background-color: #ffd700;
  }

  input:checked+.slider:before {
    transform: translateX(26px);
  }

  .dark-mode .flip-card-front {
    background-color: #1f1f1f;
    color: #fff;
  }

  .dark-mode .flip-card-back {
    background-color: #2a2a2a;
    color: #fff;
  }

  /* css musik */
  .btn-3d-music {
    background: linear-gradient(145deg, #FFD700, #e6be00);
    color: #111;
    padding: 16px 40px;
    font-size: 1.25rem;
    font-weight: 700;
    border: none;
    border-radius: 50px;
    box-shadow: 0 8px 0 #bfa100, 0 8px 15px rgba(0, 0, 0, 0.3);
    transition: all 0.2s ease;
    text-transform: uppercase;
    position: relative;
    z-index: 1;
  }

  .btn-3d-music:hover {
    box-shadow: 0 4px 0 #bfa100, 0 4px 10px rgba(0, 0, 0, 0.4);
    transform: translateY(2px);
    background: linear-gradient(145deg, #ffe14c, #f1c40f);
  }

  .btn-3d-music:active {
    transform: translateY(5px);
    box-shadow: 0 2px 0 #bfa100, 0 2px 5px rgba(0, 0, 0, 0.4);
  }

  .btn-3d-music i {
    font-size: 1.5rem;
  }

  /* css body */
  .text-gold {
    color: #FFD700;
  }

  .bg-gold {
    background: linear-gradient(135deg, #FFD700, #FFB800);
  }

  .btn-gold {
    background-color: #FFD700;
    border: none;
    color: #ffffff;
    transition: all 0.3s ease;
  }

  .btn-gold:hover {
    background-color: #ffc107;
    color: #ffffff;
    transform: scale(1.05);
  }

  .flip-card {
    background-color: transparent;
    perspective: 1000px;
    height: 280px;
  }

  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
  }

  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }

  .flip-card-front,
  .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 20px;
    backface-visibility: hidden;
    border-radius: 16px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .flip-card-front {
    z-index: 2;
  }

  .flip-card-back {
    transform: rotateY(180deg);
  }

  .photo-card {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    transform-style: preserve-3d;
  }

  .photo-card:hover {
    transform: rotateY(10deg) scale(1.05);
    box-shadow: 0 20px 40px rgba(255, 255, 255, 0.1);
  }

  .about-3d-section {
    perspective: 1000px;
  }

  .flip-card {
    background-color: transparent;
    width: 100%;
    height: 280px;
    perspective: 1000px;
  }

  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.8s;
    transform-style: preserve-3d;
  }

  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }

  .flip-card-front,
  .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 20px;
    padding: 30px;
    backface-visibility: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .flip-card-front {
    color: #fff;
  }

  .flip-card-back {
    transform: rotateY(180deg);
  }
</style>
<script>
  const audio = document.getElementById('aboutMusic');
  const toggleBtn = document.getElementById('toggleMusic');
  const icon = document.getElementById('musicIcon');

  let isPlaying = false;

  toggleBtn.addEventListener('click', () => {
    if (isPlaying) {
      audio.pause();
      icon.classList.remove('bi-pause-fill');
      icon.classList.add('bi-volume-up-fill');
      toggleBtn.innerHTML = '<i id="musicIcon" class="bi bi-volume-up-fill me-2"></i> Mainkan Musik';
    } else {
      audio.play();
      icon.classList.remove('bi-volume-up-fill');
      icon.classList.add('bi-pause-fill');
      toggleBtn.innerHTML = '<i id="musicIcon" class="bi bi-pause-fill me-2"></i> Jeda Musik';
    }
    isPlaying = !isPlaying;
  });
</script>

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

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script>
  const toggle = document.getElementById('modeToggle');
  const body = document.body;

  toggle.addEventListener('change', function () {
    body.classList.toggle('dark-mode');
  });
</script>

</body>