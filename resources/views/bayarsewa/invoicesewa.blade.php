<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice Penyewaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --text-color: #333;
            --light-gray: #f8f9fa;
            --medium-gray: #e9ecef;
            --dark-gray: #6c757d;
            --success-color: #4bb543;
        }

        body {
            font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            padding: 20px;
            background-color: #f5f7fa;
            color: var(--text-color);
            line-height: 1.6;
        }

        .invoice-box {
            background: white;
            max-width: 800px;
            margin: auto;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #e0e6ed;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--medium-gray);
        }

        .invoice-title {
            font-size: 28px;
            margin: 0;
            color: var(--primary-color);
            font-weight: 700;
        }

        .invoice-subtitle {
            font-size: 16px;
            color: var(--dark-gray);
            background: var(--light-gray);
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 500;
        }

        .invoice-status {
            display: inline-block;
            padding: 6px 12px;
            background-color: var(--success-color);
            color: white;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 600;
            margin-top: 10px;
        }

        .details-section {
            display: flex;
            gap: 40px;
            margin: 30px 0;
        }

        .details-column {
            flex: 1;
        }

        .section-title {
            font-size: 18px;
            color: var(--primary-color);
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--medium-gray);
            font-weight: 600;
        }

        .detail-row {
            display: flex;
            margin-bottom: 12px;
        }

        .detail-label {
            font-weight: 600;
            min-width: 120px;
            color: var(--dark-gray);
        }

        .detail-value {
            flex: 1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
        }

        table th {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
        }

        table td {
            padding: 12px 15px;
            vertical-align: top;
            border-bottom: 1px solid var(--medium-gray);
        }

        table tr:last-child td {
            border-bottom: none;
        }

        .text-end {
            text-align: right;
        }

        .total-section {
            background-color: var(--light-gray);
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .total-label {
            font-weight: 600;
            color: var(--dark-gray);
        }

        .total-amount {
            font-weight: 700;
            font-size: 20px;
            color: var(--primary-color);
        }

        .btn-print {
            display: block;
            width: 100%;
            max-width: 200px;
            margin: 40px auto 0;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: 600;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .btn-print:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .footer-note {
            text-align: center;
            margin-top: 30px;
            color: var(--dark-gray);
            font-size: 14px;
            padding-top: 20px;
            border-top: 1px solid var(--medium-gray);
        }

        @media print {
            body {
                background-color: white;
                padding: 0;
            }

            .invoice-box {
                box-shadow: none;
                border: none;
                padding: 20px;
            }

            .btn-print {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .invoice-box {
                padding: 25px;
            }

            .details-section {
                flex-direction: column;
                gap: 20px;
            }

            table {
                font-size: 14px;
            }

            table th,
            table td {
                padding: 8px 10px;
            }
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <div class="invoice-header">
            <div>
                <h1 class="invoice-title">Invoice Penyewaan</h1>
                <span class="invoice-status">Lunas</span>
            </div>
            <p class="invoice-subtitle">#{{ $rental->id }}</p>
        </div>

        <div class="details-section">
            <div class="details-column">
                <h3 class="section-title">Detail Pelanggan</h3>
                <div class="detail-row">
                    <span class="detail-label">Nama:</span>
                    <span class="detail-value">{{ $rental->nama }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Email:</span>
                    <span class="detail-value">{{ $rental->email }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Tanggal Pesan:</span>
                    <span class="detail-value">{{ $rental->created_at->format('d M Y H:i') }}</span>
                </div>
            </div>

            <div class="details-column">
                <h3 class="section-title">Detail Penyewaan</h3>
                <div class="detail-row">
                    <span class="detail-label">Jumlah Unit:</span>
                    <span class="detail-value">{{ $rental->jumlah_unit }} Unit</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Tanggal Mulai:</span>
                    <span class="detail-value">{{ $rental->tanggal_mulai }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Tanggal Selesai:</span>
                    <span class="detail-value">{{ $rental->tanggal_selesai }}</span>
                </div>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th class="text-end">Jumlah</th>
                    <th class="text-end">Durasi</th>
                    <th class="text-end">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sewa PlayStation</td>
                    <td class="text-end">{{ $rental->jumlah_unit }} Unit</td>
                    <td class="text-end">
                        {{ \Carbon\Carbon::parse($rental->tanggal_mulai)->format('d M Y') }} -
                        {{ \Carbon\Carbon::parse($rental->tanggal_selesai)->format('d M Y') }}
                    </td>
                    <td class="text-end">Rp {{ number_format($rental->total_harga, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>

        <div class="total-section">
            <div class="total-row">
                <span class="total-label">Metode Pembayaran:</span>
                <span>Midtrans (Online)</span>
            </div>
            <div class="total-row">
                <span class="total-label">Total Bayar:</span>
                <span class="total-amount">Rp {{ number_format($rental->total_harga, 0, ',', '.') }}</span>
            </div>
        </div>

        <button class="btn-print" onclick="window.print()">Cetak Invoice</button>

        <div class="footer-note">
            Terima kasih telah menggunakan layanan kami. Silakan hubungi kami jika Anda memiliki pertanyaan.
        </div>
    </div>
</body>

</html>