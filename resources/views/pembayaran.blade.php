<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Playstation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

        <style>
            body {
            background: linear-gradient(to right,rgb(0, 0, 0),rgb(255, 255, 255));
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            }

            .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
            }

            .card-title {
            font-weight: bold;
            }

            .form-control {
            border-radius: 12px;
            }

            button[type="submit"] {
            border-radius: 12px;
            font-weight: bold;
            }

            h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            }
        </style>
</head>

<body>
   <div class="container">
    <h1>Pembayaran Booking</h1>
    <div class="card mx-auto" style="width: 22rem;">
      <img src="{{ asset('img/stik.jpg') }}" class="card-img-top rounded-top-4" alt="PlayStation" style="object-fit: cover; height: 200px;" />
      <div class="card-body">
        <h5 class="card-title text-primary text-center">Booking Sekarang!</h5>
        <p class="card-text text-center text-muted">Mohon cek pesanan Anda sebelum melanjutkan.</p>
        <form action="/checkout" method="POST">
          @csrf
          <div class="mb-3">
            <label for="qty" class="form-label">Booking Durasi</label>
            <div class="input-group">
                <input type="number" name="qty" class="form-control" id="qty" placeholder="Contoh: 2" required>
                <span class="input-group-text">Jam</span>
            </div>
            </div>
          <div class="mb-3">
            <label for="name" class="form-label">Nama Pelanggan</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">No Telp</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="08xxxxxxxxxx" required>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <textarea name="address" class="form-control" id="address" rows="3" placeholder="Alamat lengkap" required></textarea>
          </div>
          <button type="submit" class="btn btn-success w-100">
            <i class="bi bi-cart-check-fill"></i> Checkout
          </button>
        </form>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>