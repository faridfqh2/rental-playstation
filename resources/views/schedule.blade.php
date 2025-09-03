@include('layouts.app')

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jadwal Booking</title>

  <!-- Bootstrap & FullCalendar -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary-color: #6c5ce7;
      --secondary-color: #a29bfe;
      --dark-color: #2d3436;
      --light-color: #f5f6fa;
      --success-color: #00b894;
    }

    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding-top: 40px;
    }

    .calendar-container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
    }

    .calendar-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .calendar-header h2 {
      color: var(--dark-color);
      font-weight: 700;
      position: relative;
      display: inline-block;
    }

    .calendar-header h2:after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: var(--primary-color);
    }

    #calendar {
      background: white;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      padding: 20px;
      border: none;
    }

    /* Calendar toolbar */
    .fc-toolbar {
      margin-bottom: 20px;
    }

    .fc-toolbar-title {
      font-size: 1.4rem;
      font-weight: 600;
      color: var(--dark-color);
    }

    /* Calendar buttons */
    .fc-button {
      border: none !important;
      background-color: var(--light-color) !important;
      color: var(--dark-color) !important;
      border-radius: 8px !important;
      padding: 6px 12px !important;
      font-weight: 500 !important;
      text-transform: capitalize !important;
      box-shadow: none !important;
      transition: all 0.2s ease;
    }

    .fc-button:hover {
      background-color: var(--secondary-color) !important;
      color: white !important;
    }

    .fc-button-active {
      background-color: var(--primary-color) !important;
      color: white !important;
    }

    /* Calendar cells */
    .fc-daygrid-day {
      border-radius: 8px;
      margin: 2px;
    }

    .fc-daygrid-day.fc-day-today {
      background-color: rgba(108, 92, 231, 0.1) !important;
    }

    .fc-daygrid-day-top {
      justify-content: center;
    }

    .fc-daygrid-day-number {
      font-weight: 600;
      color: var(--dark-color);
      padding: 5px;
    }

    /* Calendar events */
    .fc-daygrid-event {
      border-radius: 6px;
      padding: 2px 4px;
      font-size: 0.85rem;
      border: none;
      background-color: var(--success-color);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .fc-daygrid-event-dot {
      display: none;
    }

    /* Modal styling */
    .modal-content {
      border-radius: 12px;
      border: none;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .modal-header {
      background-color: var(--primary-color);
      color: white;
      border-radius: 12px 12px 0 0;
      border: none;
    }

    .modal-title {
      font-weight: 600;
    }

    .list-group-item {
      border: none;
      border-radius: 8px;
      margin-bottom: 8px;
      background-color: var(--light-color);
      font-weight: 500;
      transition: transform 0.2s ease;
    }

    .list-group-item:hover {
      transform: translateX(5px);
      background-color: #e2e6ea;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .fc-toolbar {
        flex-direction: column;
        gap: 10px;
      }

      .fc-toolbar-title {
        margin: 10px 0;
      }
    }
  </style>
</head>

<body>
  <div class="calendar-container">
    <div class="calendar-header">
      <h2><i class="bi bi-calendar-check me-2"></i>Jadwal Booking</h2>
      <p class="text-muted">Lihat ketersediaan waktu booking Playstation</p>
    </div>

    <div id="calendar"></div>
  </div>

  <!-- Booking Times Modal -->
  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class="bi bi-clock-history me-2"></i>Jam Terbooking</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul id="booking-times" class="list-group">
            <!-- Booking times will be populated here -->
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const calendarEl = document.getElementById('calendar');
      const bookings = @json($bookings);
      console.log(bookings);
      const modal = new bootstrap.Modal(document.getElementById('bookingModal'));

      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        themeSystem: 'bootstrap5',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        firstDay: 1, // Start week on Monday
        dayMaxEvents: 3, // Show max 3 events per day
        events: bookings.map(booking => ({
          title: `Booked: ${booking.jam_booking}`,
          start: `${booking.tanggal_booking}T${booking.jam_booking}`,
          allDay: false,
          backgroundColor: '#00b894',
          borderColor: '#00b894'
        })),
        dateClick: function (info) {
          // Show bookings for clicked date
          const dateBookings = bookings.filter(
            b => b.tanggal_booking === info.dateStr
          );

          if (dateBookings.length > 0) {
            const timesList = document.getElementById('booking-times');
            timesList.innerHTML = '';

            dateBookings.forEach(booking => {
              const li = document.createElement('li');
              li.className = 'list-group-item d-flex justify-content-between align-items-center';
              li.innerHTML = `
                <span><i class="bi bi-clock me-2"></i>${booking.jam_booking}</span>
                <span class="badge bg-primary rounded-pill">${booking.qty} Jam</span>
                <span class="badge bg-secondary rounded-pill"> Meja Nomor ${booking.meja} </span>
              `;
              timesList.appendChild(li);
            });

            modal.show();
          }
        }
      });

      calendar.render();
    });
  </script>

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
</body>

</html>