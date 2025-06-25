<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Rental PlayStation</title>

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha512-m6JZ8uK2PUjIYXPGMdGntTRbvlKppAfkKf9Wr7ESxFg/6yG9SmhD6z3lAonGIdVL1GgON3zwghMNvIFIGK5XUg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        :root {
            --primary-color: #2a52be;
            --secondary-color: #000000;
            --accent-color: #ff5e00;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 650px;
            width: 100%;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            padding: 1.5rem;
            text-align: center;
            border-bottom: 4px solid var(--accent-color);
        }

        .card-title {
            font-weight: 700;
            margin: 0;
            font-size: 1.8rem;
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
            border-bottom: 4px solid var(--accent-color);
        }

        .card-body {
            padding: 2rem;
        }

        .form-label {
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            transition: all 0.3s;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(42, 82, 190, 0.25);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            font-weight: bold;
            padding: 12px;
            border-radius: 10px;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background-color: #1a3a8a;
            transform: translateY(-2px);
        }

        .total-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--primary-color);
            background-color: #f8f9fa;
            padding: 0.75rem;
            border-radius: 8px;
            text-align: center;
        }

        .ps-badge {
            background-color: var(--accent-color);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 1rem;
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 1.5rem;
            }

            .card-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Sewa PlayStation</h1>
                    </div>
                    <img src="{{ asset('img/stik.jpg') }}" class="card-img-top" alt="PlayStation Controller">

                    <div class="card-body">
                        <div class="text-center mb-4">
                            <span class="ps-badge">
                                <i class="bi bi-controller me-1"></i> Gaming Experience
                            </span>
                            <h4 class="text-dark">Formulir Penyewaan</h4>
                            <p class="text-muted">Isi data berikut untuk menyewa PlayStation</p>
                        </div>

                        <form action="{{ route('sewa.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="jumlah_unit" class="form-label">Jumlah Unit</label>
                                <input type="number" id="jumlah_unit" name="jumlah_unit" class="form-control" required
                                    placeholder="Masukkan jumlah unit yang ingin disewa" min="1">
                                <div class="form-text">Harga per unit: Rp30.000/hari</div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                    <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                                    <input type="date" id="tanggal_selesai" name="tanggal_selesai" class="form-control"
                                        required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                <textarea id="alamat" name="alamat" class="form-control" rows="3" required
                                    placeholder="Masukkan alamat lengkap pengiriman"></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                                <select id="metode_pembayaran" name="metode_pembayaran" class="form-select" required>
                                    <option value="" disabled selected>-- Pilih Metode Pembayaran --</option>
                                    <option value="COD">Cash On Delivery (COD)</option>
                                    <option value="Transfer Bank">Transfer Bank</option>
                                    <option value="E-Wallet">E-Wallet (Dana/OVO/Gopay)</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Total Harga</label>
                                <div class="total-price">
                                    <span id="total_harga_text">Rp 0</span>
                                    <input type="hidden" id="total_harga" name="total_harga" value="0">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3">
                                <i class="bi bi-cart-check-fill me-2"></i> Sewa Sekarang
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
        integrity="sha512-Rd8Cy95VmOa2WaFa6LBdfXIQMg5zOwOGlKqaOUiZ+1Q3yMJrMJllTLpmTUIZCqA0J9sclhHnHJzFjMmfVGUVjA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Hitung total harga otomatis -->
    <script>
        const hargaPerHari = 30000;
        const jumlahUnitInput = document.getElementById('jumlah_unit');
        const tanggalMulaiInput = document.getElementById('tanggal_mulai');
        const tanggalSelesaiInput = document.getElementById('tanggal_selesai');
        const totalHargaText = document.getElementById('total_harga_text');
        const totalHargaInput = document.getElementById('total_harga');

        const today = new Date().toISOString().split('T')[0];
        tanggalMulaiInput.min = today;

        function hitungTotal() {
            const unit = parseInt(jumlahUnitInput.value) || 0;
            const mulai = new Date(tanggalMulaiInput.value);
            const selesai = new Date(tanggalSelesaiInput.value);

            if (mulai && selesai && selesai >= mulai && unit > 0) {
                const selisihHari = Math.ceil((selesai - mulai) / (1000 * 60 * 60 * 24)) + 1;
                const total = hargaPerHari * unit * selisihHari;
                totalHargaText.textContent = 'Rp ' + total.toLocaleString('id-ID');
                totalHargaInput.value = total;

                if (tanggalMulaiInput.value) {
                    tanggalSelesaiInput.min = tanggalMulaiInput.value;
                }
            } else {
                totalHargaText.textContent = 'Rp 0';
                totalHargaInput.value = '0';
            }
        }

        jumlahUnitInput.addEventListener('input', hitungTotal);
        tanggalMulaiInput.addEventListener('change', function () {
            tanggalSelesaiInput.min = this.value;
            hitungTotal();
        });
        tanggalSelesaiInput.addEventListener('change', hitungTotal);

        hitungTotal();
    </script>
</body>

</html>