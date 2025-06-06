<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Proses Pembayaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

  <!-- Midtrans Snap -->
  <script src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
  <script>
    const orderId = "{{ $order->id }}";
  </script>
  <script>
    document.getElementById('pay-button').addEventListener('click', function () {
      snap.pay('{{ $snapToken }}', {
        onSuccess: function (result) {
          alert("Pembayaran berhasil!");
          window.location.href = "/invoice/" + orderId;
        },
        onPending: function (result) {
          alert("Menunggu pembayaran.");
        },
        onError: function (result) {
          alert("Terjadi kesalahan pembayaran.");
        },
        onClose: function () {
          alert("Kamu menutup pembayaran sebelum selesai.");
        }
      });
    });
  </script>

</body>

</html>