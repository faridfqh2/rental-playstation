<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="{{config('midtrans.snap_url')}}"
        data-client-key="{{config('midtrans.client_key')}}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <title>Rental Playstation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
            body {
            background: linear-gradient(to right,rgb(251, 251, 251),rgb(255, 255, 255));
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
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.35);
            }

            .table td {
            vertical-align: middle;
            font-size: 1rem;
            }

            h1 {
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
            }

            .btn-success {
            font-weight: bold;
            border-radius: 12px;
            }

            .card-title {
            font-weight: bold;
            }

            .text-muted {
            color: #dee2e6 !important;
            }
    </style>
</head>

<body>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="text-center mb-4">
          <h1 class="fw-bold">Rental Playstation</h1>
          <p class="text-muted">Detail pesanan Anda ditampilkan di bawah ini</p>
        </div>
        <div class="card shadow-lg border-0 rounded-4">
          <img src="{{ asset('img/playstation.jpg') }}" class="card-img-top rounded-top-4" alt="PlayStation"
            style="object-fit: cover; height: 200px;">
          <div class="card-body">
            <h5 class="card-title mb-4 text-center text-success fw-bold">Detail Pesanan</h5>
            <table class="table table-borderless">
              <tr>
                <td><strong>Nama</strong></td>
                <td>:</td>
                <td>{{ $order->name }}</td>
              </tr>
              <tr>
                <td><strong>No Hp</strong></td>
                <td>:</td>
                <td>{{ $order->phone }}</td>
              </tr>
              <tr>
                <td><strong>Alamat</strong></td>
                <td>:</td>
                <td>{{ $order->address }}</td>
              </tr>
              <tr>
                <td><strong>Qty</strong></td>
                <td>:</td>
                <td>{{ $order->qty }}</td>
              </tr>
              <tr>
                <td><strong>Total Harga</strong></td>
                <td>:</td>
                <td>{{ $order->total_price }}</td>
              </tr>
            </table>
            <div class="d-grid">
              <button class="btn btn-lg btn-success mt-3" id="pay-button">
                <i class="bi bi-credit-card-fill"></i> Bayar Sekarang
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{$snapToken}}', {
                onSuccess: function (result) {
                    /* You may add your own implementation here */
                    // alert("payment success!");
                    window.location.href = '/invoice/{{$order->id}}'
                    console.log(result);
                },
                onPending: function (result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function (result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function () {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });

    </script>
</body>

</html>