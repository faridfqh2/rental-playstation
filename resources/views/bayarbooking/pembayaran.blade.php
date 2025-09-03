<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Booking Playstation</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(to right, #000000, #ffffff);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
      border: none;
      border-radius: 20px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
      max-width: 500px;
      width: 100%;
    }

    .card-img-top {
      height: 220px;
      object-fit: cover;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
    }

    h1 {
      color: #ffffff;
      text-align: center;
      margin-bottom: 30px;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
    }

    .form-label {
      font-weight: 500;
    }

    .form-control,
    .input-group-text {
      border-radius: 10px;
    }

    .btn-success {
      font-weight: bold;
      padding: 12px;
      border-radius: 10px;
    }

    .btn-success:hover {
      background-color: #157347;
    }

    .text-muted {
      font-size: 0.9rem;
    }
  </style>
</head>

<body>
  <div class="container p-4">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-6">
        <h1>Booking Playstation</h1>
        <div class="card">
          <img src="{{ asset('img/stik.jpg') }}" class="card-img-top" alt="PlayStation">

          <div class="card-body">
            <h5 class="card-title text-primary text-center">Form Pemesanan</h5>
            <p class="text-center text-muted">Isi data dengan benar sebelum checkout.</p>

            {{-- Alert Success --}}
            @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            {{-- Alert Error --}}
            @if (session('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <form action="{{ url('/checkout') }}" method="POST">
              @csrf

              <div class="mb-3">
                <label for="qty" class="form-label">Durasi Booking (Jam)</label>
                <input type="number" name="qty" id="qty" class="form-control" min="1" required>
              </div>

              <div class="mb-3">
                <label for="tanggal_booking" class="form-label">Tanggal Booking</label>
                <input type="date" name="tanggal_booking" id="tanggal_booking" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="jam_booking" class="form-label">Jam Booking</label>
                <select name="jam_booking" id="jam_booking" class="form-control" required>
                  <option value="" disabled selected>Pilih Jam</option>
                  @for ($i = 10; $i <= 23; $i++) {{-- contoh jam buka dari 10:00 sampai 23:00 --}}
                    <option value="{{ sprintf('%02d:00', $i) }}">{{ sprintf('%02d:00', $i) }}</option>
                  @endfor
                </select>
              </div>
              <div class="mb-3">
                <label for="meja" class="form-label">Pilih Meja</label>
                <select name="meja" id="meja" class="form-control" required>
                  <option value="" disabled selected>Pilih Meja</option>
                  @foreach(\App\Models\Order::MEJA as $meja)
                    <option value="{{ $meja }}">{{ $meja }}</option>
                  @endforeach
                </select>
                <div class="invalid-feedback">
                  Silakan pilih meja.
                </div>
              </div>

              <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
              </div>

              <button type="submit" class="btn btn-success w-100">Checkout</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Script Booking Conflict Check -->
  <script>
    const bookedSlots = @json($bookedSlots);

    const form = document.querySelector('form');
    form.addEventListener('submit', function (e) {
      const tanggal = document.getElementById('tanggal_booking').value;
      const jam = document.getElementById('jam_booking').value;
      const qty = parseInt(document.getElementById('qty').value);

      const [startHour, startMinute] = jam.split(':').map(Number);
      const timesToCheck = [];
      for (let i = 0; i < qty; i++) {
        const timeStr = `${String(startHour + i).padStart(2, '0')}:${String(startMinute).padStart(2, '0')}`;
        timesToCheck.push(timeStr);
      }

      const conflict = bookedSlots.some(slot =>
        slot.tanggal === tanggal && timesToCheck.includes(slot.jam)
      );

      if (conflict) {
        e.preventDefault();
        alert('Jadwal bentrok! Silakan pilih jam atau durasi lain.');
      }
    });
  </script>
  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Ambil elemen input tanggal
    const tanggalInput = document.getElementById('tanggal_booking');

    // Buat tanggal hari ini dalam format yyyy-mm-dd
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // bulan dimulai dari 0
    const dd = String(today.getDate()).padStart(2, '0');
    const todayStr = `${yyyy}-${mm}-${dd}`;

    // Set nilai minimal input tanggal ke hari ini
    tanggalInput.min = todayStr;
    const bookedSlots = @json($bookedSlots);

    const tanggalInput = document.getElementById('tanggal_booking');
    const mejaSelect = document.getElementById('meja');
    const jamSelect = document.getElementById('jam_booking');

    function updateJamOptions() {
      const tanggal = tanggalInput.value;
      const meja = mejaSelect.value;

      // Reset semua option dulu
      for (let opt of jamSelect.options) {
        opt.disabled = false;
      }

      // Cek slot yang bentrok
      bookedSlots.forEach(slot => {
        if (slot.tanggal === tanggal && slot.meja === meja) {
          const option = [...jamSelect.options].find(opt => opt.value === slot.jam);
          if (option) {
            option.disabled = true;
            option.textContent = `${slot.jam} (Penuh)`; // kasih label biar jelas
          }
        }
      });
    }

    // Trigger saat pilih tanggal atau meja
    tanggalInput.addEventListener('change', updateJamOptions);
    mejaSelect.addEventListener('change', updateJamOptions);
  </script>

</body>

</html>