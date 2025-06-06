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

            <form action="/checkout" method="POST">
              @csrf

              <div class="mb-3">
                <label for="qty" class="form-label">Durasi Booking</label>
                <div class="input-group">
                  <input type="number" name="qty" id="  " class="form-control" placeholder="Contoh: 2" required>
                  <span class="input-group-text">Jam</span>
                </div>
              </div>

              <div class="mb-3">
                <label for="tanggal_booking" class="form-label">Tanggal Booking</label>
                <input type="date" name="tanggal_booking" id="tanggal_booking" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="jam_booking" class="form-label">Jam Booking</label>
                <input type="time" name="jam_booking" id="jam_booking" class="form-control" required>
              </div>



              <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea name="address" id="address" class="form-control" rows="3" placeholder="Alamat lengkap"
                  required></textarea>
              </div>

              <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-cart-check-fill me-2"></i> Checkout
              </button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>