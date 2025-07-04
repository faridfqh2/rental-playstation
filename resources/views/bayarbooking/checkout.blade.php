<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Proses Pembayaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(to right, #e0eafc, #cfdef3);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
      border-radius: 1rem;
      overflow: hidden;
    }

    .card-header {
      background: linear-gradient(to right, #007bff, #0056b3);
    }

    .card-header h5 {
      font-weight: bold;
    }

    .btn-custom {
      background: #007bff;
      color: white;
      padding: 0.75rem 2rem;
      font-size: 1.25rem;
      border-radius: 0.5rem;
      transition: all 0.3s ease;
    }

    .btn-custom:hover {
      background: #0056b3;
      transform: translateY(-2px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    h2 {
      font-weight: 600;
      color: #333;
    }

    .price-tag {
      font-size: 1.2rem;
      font-weight: bold;
      color: #007bff;
    }

    /* Style tampilan berhasil kecil */
    #success-screen {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(255, 255, 255, 0.95);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .success-box {
      background: white;
      border-radius: 1rem;
      padding: 2rem 3rem;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
      animation: fadeIn 0.8s ease-in-out;
    }

    .success-box i {
      font-size: 3.5rem;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: scale(0.9);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }
  </style>
</head>

<body>

  <div class="container py-5">
    <div class="text-center mb-4">
      <h2>💳 Proses Pembayaran</h2>
      <p class="text-muted">Silakan tinjau kembali data pemesanan Anda sebelum melanjutkan ke pembayaran.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow">
          <div class="card-header text-white text-center">
            <h5 class="mb-0">📋 Ringkasan Pemesanan</h5>
          </div>
          <div class="card-body">
            <table class="table table-striped table-borderless">
              <tr>
                <th>Nama</th>
                <td>{{ auth()->user()->name }}</td>
              </tr>
              <tr>
                <th>No Telp</th>
                <td>{{ $order->phone }}</td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>{{ $order->address }}</td>
              </tr>
              <tr>
                <th>Tanggal Booking</th>
                <td>{{ $order->tanggal_booking }}</td>
              </tr>
              <tr>
                <th>Jam Booking</th>
                <td>{{ $order->jam_booking }}</td>
              </tr>
              <tr>
                <th>Durasi</th>
                <td>{{ $order->qty }} Jam</td>
              </tr>
              <tr>
                <th>Total Harga</th>
                <td class="price-tag">Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
              </tr>
            </table>
          </div>
        </div>

        @if($order->status === 'paid')
      <script>
        window.location.href = "/invoice/{{ $order->id }}";
      </script>
    @endif

        <div class="text-center mt-4">
          <p class="mb-3">Total Pembayaran: <span class="price-tag">Rp
              {{ number_format($order->total_price, 0, ',', '.') }}</span></p>
          <button id="pay-button" class="btn btn-custom">💰 Bayar Sekarang</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Tampilan pembayaran berhasil -->
  <div id="success-screen" class="d-none">
    <div class="success-box">
      <i class="bi bi-check-circle-fill text-success"></i>
      <h4 class="mt-3 text-success">Pembayaran Berhasil!</h4>
      <p class="text-muted">Anda akan diarahkan ke halaman invoice...</p>
    </div>
  </div>

  <!-- Midtrans Snap -->
  <script src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
  <script>
    const orderId = "{{ $order->id }}";

    document.getElementById('pay-button').addEventListener('click', function () {
      snap.pay('{{ $snapToken }}', {
        onSuccess: function (result) {
          // Tampilkan kotak sukses
          document.getElementById('success-screen').classList.remove('d-none');

          // Redirect ke invoice setelah 3 detik
          setTimeout(() => {
            window.location.href = "/invoice/" + orderId;
          }, 3000);
        },
        onPending: function (result) {
          alert("Menunggu pembayaran.");
        },
        onError: function (result) {
          alert("Terjadi kesalahan saat pembayaran.");
        },
        onClose: function () {
          alert("Kamu menutup jendela pembayaran.");
        }
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>