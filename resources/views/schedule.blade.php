@include('layouts.app')

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jadwal Booking</title>

  <!-- Bootstrap & FullCalendar -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(to right, );
      color: #fbfbfb;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding-top: 60px;
    }

    h2 {
      text-shadow: 1px 2px 5px rgba(0, 0, 0, 0.4);
      margin-bottom: 30px;
    }

    #calendar {
      max-width: 900px;
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
      padding: 20px;
      margin: auto;
      color: #000;
    }

    .modal-content {
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
      background: linear-gradient(135deg, #ffffff, #f0f0f0);
    }

    .modal-header {
      border-bottom: 1px solid #dee2e6;
    }

    .list-group-item {
      border: none;
      border-radius: 8px;
      margin-bottom: 5px;
      background-color: #f1f3f5;
      color: #333;
      font-weight: 500;
      transition: all 0.2s ease-in-out;
    }

    .list-group-item:hover {
      transform: translateX(5px);
      background-color: #e2e6ea;
    }

    .fc-toolbar-title {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .fc-daygrid-event {
      background-color: #198754;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 2px 4px;
      font-size: 0.85rem;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .fc-button {
      border-radius: 6px !important;
      font-weight: bold;
      text-transform: capitalize;
    }

    .fc-button-primary {
      background-color: #198754;
      border-color: #198754;
    }

    .fc-button-primary:hover {
      background-color: #157347;
      border-color: #146c43;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2 class="text-center fw-bold text-dark">Kalender Booking Playstation</h2>
    <div id="calendar"></div>
  </div>

  <!-- Modal untuk jam yang dibooking -->
  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="bookingModalLabel">Jam Terbooking</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <ul id="booking-times" class="list-group">
            <!-- Jam booking akan ditampilkan di sini -->
          </ul>
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

      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridDay', // Ganti ke 'timeGridDay' jika ingin per jam
        themeSystem: 'bootstrap',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        displayEventTime: false, // Supaya kita kontrol jam sendiri via title
        events: bookings.map(booking => ({
          title: `Jam ${booking.jam_booking}`,
          start: `${booking.tanggal_booking}T${booking.jam_booking}`,
          allDay: true // agar muncul di grid bulanan
        }))
      });

      calendar.render();
    });
  </script>

</body>

</html>