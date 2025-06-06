<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #f8f9fc;
            --accent-color: #2e59d9;
        }
        
        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .invoice-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .invoice-header {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            padding: 30px;
            position: relative;
        }
        
        .invoice-header::after {
            content: "";
            position: absolute;
            bottom: -20px;
            left: 0;
            right: 0;
            height: 20px;
            background-color: white;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 0% 50%);
        }
        
        .invoice-title {
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 5px;
        }
        
        .invoice-subtitle {
            opacity: 0.9;
            font-size: 1rem;
        }
        
        .invoice-body {
            padding: 30px;
        }
        
        .invoice-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 25px 0;
        }
        
        .invoice-table th {
            background-color: var(--secondary-color);
            padding: 15px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid #e3e6f0;
        }
        
        .invoice-table td {
            padding: 15px;
            border-bottom: 1px solid #e3e6f0;
            vertical-align: top;
        }
        
        .invoice-table tr:last-child td {
            border-bottom: none;
        }
        
        .total-amount {
            background-color: var(--secondary-color);
            font-weight: 700;
            font-size: 1.2rem;
        }
        
        .payment-info {
            background-color: #f8f9fa;
            border-left: 4px solid var(--primary-color);
            padding: 20px;
            margin-top: 30px;
            border-radius: 0 5px 5px 0;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            transform: translateY(-2px);
        }
        
        .logo {
            max-height: 60px;
            margin-bottom: 15px;
        }
        
        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, #ddd, transparent);
            margin: 20px 0;
        }
        
        @media print {
            body {
                background: white !important;
            }
            .invoice-container {
                box-shadow: none;
                border-radius: 0;
            }
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="invoice-container">
            <!-- Header -->
            <div class="invoice-header text-center text-md-start">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div>
                        <h1 class="invoice-title">INVOICE</h1>
                        <p class="invoice-subtitle">#{{ strtoupper(uniqid()) }}</p>
                    </div>
                    <div class="mt-3 mt-md-0 text-white">
                        <p class="mb-1"><i class="fas fa-calendar-alt me-2"></i> Tanggal: {{ date('d M Y') }}</p>
                        <p class="mb-0"><i class="fas fa-info-circle me-2"></i> Status: <span class="badge bg-success">Lunas</span></p>
                    </div>
                </div>
            </div>
            
            <!-- Body -->
            <div class="invoice-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5 class="fw-bold"><i class="fas fa-user me-2"></i> Detail Pelanggan</h5>
                        <p class="mb-1"><strong>{{ $order->name }}</strong></p>
                        <p class="text-muted mb-0"><i class="fas fa-clock me-2"></i> Dibuat pada: {{ date('d M Y H:i') }}</p>
                    </div>
                    <div class="col-md-6 text-md-end mt-3 mt-md-0">
                        <h5 class="fw-bold"><i class="fas fa-store me-2"></i> Nama Bisnis Anda</h5>
                        <p class="mb-1">Jl. Contoh No. 123, Kota</p>
                        <p class="mb-1">Telp: (021) 123-4567</p>
                        <p class="mb-0">Email: info@bisnisanda.com</p>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Detail Booking -->
                <h5 class="fw-bold mb-3"><i class="fas fa-calendar-check me-2"></i> Detail Booking</h5>
                <div class="table-responsive">
                    <table class="invoice-table">
                        <thead>
                            <tr>
                                <th>Deskripsi</th>
                                <th class="text-end">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Pemesan</td>
                                <td class="text-end">{{ $order->name }}</td>
                            </tr>
                            <tr>
                                <td>Durasi Booking</td>
                                <td class="text-end">{{ $order->qty }} Jam</td>
                            </tr>
                            <tr>
                                <td>Tanggal Booking</td>
                                <td class="text-end">{{ date('d M Y', strtotime($order->tanggal_booking)) }}</td>
                            </tr>
                            <tr>
                                <td>Jam Booking</td>
                                <td class="text-end">{{ $order->jam_booking }}</td>
                            </tr>
                            <tr class="total-amount">
                                <td><strong>Total Pembayaran</strong></td>
                                <td class="text-end"><strong>Rp {{ number_format($order->total_price, 0, ',', '.') }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Payment Info -->
                <div class="payment-info">
                    <h5 class="fw-bold"><i class="fas fa-info-circle me-2"></i> Informasi Pembayaran</h5>
                    <p class="mb-2">Pembayaran telah diterima dan diproses.</p>
                    <p class="mb-0">Metode Pembayaran: Transfer Bank</p>
                </div>
                
                <div class="divider"></div>
                
                <!-- Footer -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <p class="text-muted small">Terima kasih telah memilih layanan kami.</p>
                    </div>
                    <div class="no-print">
                        <button onclick="window.print()" class="btn btn-outline-secondary me-2">
                            <i class="fas fa-print me-2"></i>Cetak
                        </button>
                        <a href="/" class="btn btn-primary">
                            <i class="fas fa-home me-2"></i>Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Tambahkan tahun dinamis di footer
        document.addEventListener('DOMContentLoaded', function() {
            const yearElement = document.createElement('p');
            yearElement.className = 'text-center text-muted small mt-3';
            yearElement.textContent = `© ${new Date().getFullYear()} Nama Bisnis Anda. All rights reserved.`;
            document.querySelector('.invoice-container').after(yearElement);
        });
    </script>
</body>

</html>