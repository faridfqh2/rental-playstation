<div class="d-flex flex-column flex-shrink-0 p-3 text-white shadow-sm position-relative sidebar-container"
     style="width: 250px; height: 100vh; border-top-right-radius: 20px; border-bottom-right-radius: 20px; overflow: hidden;">

  <!-- Gambar sebagai latar -->
  <img src="/img/stik.jpg" class="position-absolute w-100 h-100 object-fit-cover z-n1" alt="Sidebar Background"
       style="top: 0; left: 0; border-top-right-radius: 20px; border-bottom-right-radius: 20px;">

  <!-- Overlay -->
  <div class="position-absolute w-100 h-100"
       style="background-color: rgba(0,0,0,0.6); top: 0; left: 0; border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
  </div>

  <!-- Isi sidebar -->
  <a href="{{ url('/') }}" class="d-flex align-items-center mb-4 text-white text-decoration-none fade-in"
   style="position: relative; z-index: 2;">
  <span class="fs-4 fw-semibold">Rental Playstation</span>
  </a>

  <hr class="border-light fade-in" style="animation-delay: 0.3s; position: relative; z-index: 2;">

  <ul class="nav nav-pills flex-column mb-auto" style="position: relative; z-index: 2;">
    <li class="nav-item fade-in" style="animation-delay: 0.4s;">
      <a href="{{ url('/') }}"
         class="nav-link text-white d-flex align-items-center gap-2 hover-link">
        <i class="bi bi-house icon-animate"></i> Beranda
      </a>
    </li>
    <li class="fade-in" style="animation-delay: 0.5s;">
      <a href="{{ url('/riwayat') }}"
         class="nav-link text-white d-flex align-items-center gap-2 hover-link">
        <i class="bi bi-clock-history icon-animate"></i> Riwayat
      </a>
    </li>
    <li class="fade-in" style="animation-delay: 0.6s;">
      <a href="{{ url('/profile') }}"
         class="nav-link text-white d-flex align-items-center gap-2 hover-link">
        <i class="bi bi-person icon-animate"></i> Profil
      </a>
    </li>
  </ul>

  <hr class="border-light mt-auto fade-in" style="animation-delay: 0.7s; position: relative; z-index: 2;">

  <!-- Dropdown User -->
  <div class="dropdown fade-in" style="animation-delay: 0.8s; position: relative; z-index: 2;">
    <a href="#"
       class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
       id="dropdownUser"
       data-bs-toggle="dropdown"
       aria-expanded="false">
      <i class="bi bi-person-circle me-2 icon-animate"></i>
      <strong>User</strong>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser">
      <li><a class="dropdown-item" href="{{ url('/user/profile') }}">Profil</a></li>
      <li><hr class="dropdown-divider"></li>
      <li>
        <a class="dropdown-item" href="#"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
        </a>
      </li>
    </ul>
  </div>

  <!-- Form Logout di luar dropdown -->
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
</div>

<!-- CSS Animasi dan Hover -->
<style>
  .hover-link {
    transition: background-color 0.4s ease, padding-left 0.4s ease, color 0.4s;
    border-radius: 8px;
    padding: 0.5rem 0.75rem;
  }

  .hover-link:hover {
    background-color: rgba(255, 255, 255, 0.2);
    padding-left: 1.2rem;
    color: #ffc107 !important;
  }

  .hover-link:hover .icon-animate {
    transform: scale(1.2) rotate(5deg);
    transition: transform 0.4s ease-in-out;
  }

  .icon-animate {
    transition: transform 0.4s ease;
  }

  .fade-in {
    opacity: 0;
    animation: fadeInUp 0.8s ease forwards;
  }

  @keyframes fadeInUp {
    0% {
      transform: translateY(20px);
      opacity: 0;
    }

    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }
</style>
