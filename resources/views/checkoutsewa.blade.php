<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Penyewaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .card {
            border-radius: 15px;
            overflow: hidden;
        }

        .card-header {
            border-bottom: none;
        }

        .detail-item {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .total-price {
            font-size: 1.2rem;
            color: #dc3545;
            font-weight: bold;
        }

        .btn-pay {
            padding: 10px 25px;
            font-weight: 600;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0"><i class="bi bi-cart-check me-2"></i>Detail Checkout Penyewaan</h3>
                            <span class="badge bg-light text-primary fs-6">#{{ $rental->id }}</span>
                        </div>
                    </div>
                    <div class="card-body p-4">

                        <!-- Tambahan Nama dan Email -->
                        <!-- Nama Pemesan -->
                        <div class="detail-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted"><i class="bi bi-person-circle me-2"></i>Nama Pemesan</p>
                                    <h5 class="mb-0">{{ $rental->nama }}</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="detail-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted"><i class="bi bi-envelope me-2"></i>Email</p>
                                    <h5 class="mb-0">{{ $rental->email }}</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Detail Jumlah Unit -->
                        <div class="detail-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted"><i class="bi bi-box-seam me-2"></i>Jumlah Unit
                                    </p>
                                    <h5 class="mb-0">{{ $rental->jumlah_unit }} Unit</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Detail Tanggal -->
                        <div class="detail-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted"><i class="bi bi-calendar-event me-2"></i>Tanggal
                                        Mulai
                                    </p>
                                    <h5 class="mb-0">
                                        {{ \Carbon\Carbon::parse($rental->tanggal_mulai)->isoFormat('D MMMM YYYY') }}
                                    </h5>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted"><i class="bi bi-calendar-check me-2"></i>Tanggal
                                        Selesai
                                    </p>
                                    <h5 class="mb-0">
                                        {{ \Carbon\Carbon::parse($rental->tanggal_selesai)->isoFormat('D MMMM YYYY') }}
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="detail-item">
                            <p class="mb-1 text-muted"><i class="bi bi-geo-alt me-2"></i>Alamat Pengiriman</p>
                            <h5 class="mb-0">{{ $rental->alamat }}</h5>
                        </div>

                        <!-- Total Harga -->
                        <div class="detail-item bg-light p-3 rounded mt-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-0 text-muted"><i class="bi bi-cash-stack me-2"></i>Total Harga</p>
                                <h4 class="mb-0 total-price">Rp
                                    {{ number_format($rental->total_harga, 0, ',', '.') }}
                                </h4>
                            </div>
                        </div>

                        <!-- Tombol -->
                        <div class="d-flex justify-content-between mt-5">
                            <a href="{{ route('sewa.index') }}" class="btn btn-outline-secondary px-4">
                                <i class="bi bi-arrow-left me-2"></i>Kembali
                            </a>
                            <button class="btn btn-primary btn-pay" id="pay-button">
                                <i class="bi bi-lock-fill me-2"></i>Konfirmasi & Bayar Sekarang
                            </button>
                        </div>

                        <!-- Info -->
                        <div class="alert alert-info mt-4">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            <strong>Perhatian:</strong> Pembayaran harus diselesaikan dalam waktu 1x24 jam
                            setelah
                            pemesanan.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Midtrans Snap JS -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script>
        document.getElementById('pay-button').addEventListener('click', function () {
            snap.pay('{{ $snapToken }}', {
                onSuccess: function (result) {
                    // Ambil ID rental dari server-side dan masukkan ke JS
                    const rentalId = "{{ $rental->id }}";
                    alert("Pembayaran berhasil!");
                    window.location.href = "/invoicesewa/" + rentalId;
                },
                onPending: function (result) {
                    alert("Pembayaran tertunda.");
                },
                onError: function (result) {
                    alert("Pembayaran gagal!");
                },
                onClose: function () {
                    alert("Anda menutup popup pembayaran.");
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>