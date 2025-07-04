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
            --primary-dark: #1a3a8a;
            --secondary-color: #343a40;
            --accent-color: #ff5e00;
            --light-bg: #f8f9fa;
            --border-radius: 12px;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e6e9f0 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--secondary-color);
        }

        .rental-container {
            max-width: 750px;
            margin: 2rem auto;
        }

        .card {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 1.75rem;
            text-align: center;
            border-bottom: none;
        }

        .card-title {
            font-weight: 800;
            margin: 0;
            font-size: 1.9rem;
            letter-spacing: 0.5px;
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
            border-bottom: 4px solid var(--accent-color);
        }

        .card-body {
            padding: 2.5rem;
        }

        .form-section {
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 1.25rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--accent-color);
            display: inline-block;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
        }

        .form-control,
        .form-select {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #dee2e6;
            transition: all 0.3s;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(42, 82, 190, 0.15);
        }

        .btn-primary {
            background: linear-gradient(to right, var(--primary-color), var(--primary-dark));
            border: none;
            font-weight: 600;
            padding: 0.85rem;
            border-radius: 8px;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(42, 82, 190, 0.25);
        }

        .total-price-container {
            background-color: var(--light-bg);
            border-radius: var(--border-radius);
            padding: 1.25rem;
            margin: 1.5rem 0;
        }

        .total-price-label {
            font-size: 1rem;
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
        }

        .total-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .ps-badge {
            background-color: var(--accent-color);
            color: white;
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 8px rgba(255, 94, 0, 0.2);
        }

        .form-text {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 0.25rem;
        }

        .hero-text {
            font-size: 1.1rem;
            color: #495057;
            margin-bottom: 1.5rem;
        }

        @media (max-width: 768px) {
            .card-body {
                padding: 1.75rem;
            }

            .card-title {
                font-size: 1.6rem;
            }

            .rental-container {
                padding: 0 1rem;
            }
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 1.5rem;
            }

            .total-price {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>
    <div class="container rental-container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Sewa PlayStation</h1>
            </div>
            <img src="{{ asset('img/stik.jpg') }}" class="card-img-top" alt="PlayStation Controller">

            <div class="card-body">
                <div class="text-center mb-4">
                    <span class="ps-badge">
                        <i class="bi bi-controller me-1"></i> Premium Gaming Experience
                    </span>
                    <h3 class="mb-2">Formulir Penyewaan</h3>
                    <p class="hero-text">Lengkapi data berikut untuk memulai penyewaan PlayStation</p>
                </div>

                <form action="{{ route('sewa.store') }}" method="POST">
                    @csrf

                    <!-- Rental Details Section -->
                    <div class="form-section">
                        <h5 class="section-title">Detail Penyewaan</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="jumlah_unit" class="form-label">Jumlah Unit</label>
                                <input type="number" id="jumlah_unit" name="jumlah_unit" class="form-control" required
                                    placeholder="Contoh: 2" min="1">
                                <div class="form-text">Harga per unit: Rp30.000/hari</div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control"
                                    required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                                <input type="date" id="tanggal_selesai" name="tanggal_selesai" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>

                    <!-- Personal Information Section -->
                    <div class="form-section">
                        <h5 class="section-title">Data Pribadi</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" class="form-control" required
                                    placeholder="Nama lengkap Anda">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required
                                    placeholder="email@contoh.com">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <textarea id="alamat" name="alamat" class="form-control" rows="3" required
                                placeholder="Alamat pengiriman perangkat"></textarea>
                        </div>
                    </div>

                    <!-- Price Summary -->
                    <div class="total-price-container text-center">
                        <div class="total-price-label">Total Biaya Sewa</div>
                        <div class="total-price">
                            <span id="total_harga_text">Rp 0</span>
                            <input type="hidden" id="total_harga" name="total_harga" value="0">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-3">
                        <i class="bi bi-cart-check-fill me-2"></i> Konfirmasi Penyewaan
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
        integrity="sha512-Rd8Cy95VmOa2WaFa6LBdfXIQMg5zOwOGlKqaOUiZ+1Q3yMJrMJllTLpmTUIZCqA0J9sclhHnHJzFjMmfVGUVjA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Price Calculation Script -->
    <script>
        const hargaPerHari = 30000;
        const jumlahUnitInput = document.getElementById('jumlah_unit');
        const tanggalMulaiInput = document.getElementById('tanggal_mulai');
        const tanggalSelesaiInput = document.getElementById('tanggal_selesai');
        const totalHargaText = document.getElementById('total_harga_text');
        const totalHargaInput = document.getElementById('total_harga');

        // Set minimum date to today
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

        // Event listeners
        jumlahUnitInput.addEventListener('input', hitungTotal);
        tanggalMulaiInput.addEventListener('change', function () {
            tanggalSelesaiInput.min = this.value;
            hitungTotal();
        });
        tanggalSelesaiInput.addEventListener('change', hitungTotal);

        // Initial calculation
        hitungTotal();
    </script>
</body>

</html>