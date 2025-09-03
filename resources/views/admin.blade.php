<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard - Admin</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('Rental/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!-- Top Navigation -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="{{ url('/') }}">Rental PS</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i
                class="fas fa-bars"></i></button>

        <!-- User Dropdown -->
        <ul class="navbar-nav ms-auto me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <!-- Sidebar -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{ url('/dashboard') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Addons</div>

                        <a class="nav-link" href="{{ url('admin/orderlist') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Order
                        </a>
                        <a class="nav-link" href="{{ route('blog.admin') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-pen"></i></div>
                            Update Konten
                        </a>

                        <a class="nav-link" href="{{ route('games.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-gamepad"></i></div>
                            Update Game
                        </a>
                        <a class="nav-link" href="{{ route('admin.sewa') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-cart-plus"></i></div>
                            Sewa Rental
                        </a>


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    {{ Auth::user()->name ?? 'Guest' }}
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <!-- Chart Row -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header"><i class="fas fa-chart-bar me-1"></i> Bar Chart</div>
                                <div class="card-body">
                                    <canvas id="myBarChartMain" width="100%" height="40"></canvas>
                                    <button class="btn btn-sm btn-primary mt-2" id="downloadIncomeChart">Download
                                        PDF</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header"><i class="fas fa-chart-bar me-1"></i> Bar Chart</div>
                                <div class="card-body">
                                    <canvas id="myBarChart" width="100%" height="40"></canvas>
                                    <button class="btn btn-sm btn-primary mt-2" id="downloadSalesChart">Download
                                        PDF</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="card mb-4">
                        @if (session('success'))
                            <div class="alert alert-success mt-2">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-header"><i class="fas fa-table me-1"></i> Order List</div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>No. HP</th>
                                        <th>Meja</th>
                                        <th>Jumlah (Jam)</th>
                                        <th>Alamat</th>
                                        <th>Total Harga</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->meja }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>Rp {{ number_format($item->total_price, 0, ',', '.') }}</td>
                                            <td>
                                                @if ($item->status == 'Paid')
                                                    <span class="badge bg-success">Paid</span>
                                                @else
                                                    <form method="POST" action="{{ route('orders.markPaid', $item->id) }}"
                                                        class="mark-paid-form d-inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="button" class="btn btn-sm btn-warning btn-mark-paid">Mark
                                                            as Paid</button>
                                                    </form>

                                                @endif
                                            </td>


                                            <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </main>

            <!-- Footer -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">&copy; Rental PS {{ date('Y') }}</div>
                        <div>
                            <a href="#">Privacy Policy</a> &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="{{ asset('Rental/js/datatables-simple-demo.js') }}"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0/dist/chartjs-plugin-datalabels.min.js"></script>

    <script>
        // Download PDF untuk chart Total Income
        document.getElementById('downloadIncomeChart').addEventListener('click', function () {
            const chart = document.getElementById('myBarChartMain');
            html2canvas(chart).then(function (canvas) {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new window.jspdf.jsPDF();
                pdf.text('Total Income per Bulan', 10, 10);
                pdf.addImage(imgData, 'PNG', 10, 20, 180, 60);
                pdf.save('total_income_chart.pdf');
            });
        });

        // Download PDF untuk chart Jumlah Penjualan
        document.getElementById('downloadSalesChart').addEventListener('click', function () {
            const chart = document.getElementById('myBarChart');
            html2canvas(chart).then(function (canvas) {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new window.jspdf.jsPDF();
                pdf.text('Jumlah Penjualan per Bulan', 10, 10);
                pdf.addImage(imgData, 'PNG', 10, 20, 180, 60);
                pdf.save('jumlah_penjualan_chart.pdf');
            });
        });
    </script>

    <!-- Custom Chart -->
    <script>
        // Main Bar Chart (menggantikan area chart)
        const mainBarCtx = document.getElementById('myBarChartMain').getContext('2d');
        new Chart(mainBarCtx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    label: 'Total Income',
                    data: {!! json_encode($data) !!},
                    backgroundColor: 'rgba(54, 185, 204, 0.6)',
                    borderColor: 'rgba(54, 185, 204, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    tooltip: { enabled: true },
                    legend: { display: true },
                    datalabels: {
                        anchor: 'end',
                        align: 'top',
                        formatter: function (value) {
                            return 'Rp ' + value.toLocaleString('id-ID');
                        },
                        color: '#333',
                        font: { weight: 'bold' }
                    }
                },
                scales: {
                    y: { beginAtZero: true }
                }
            },
            plugins: [ChartDataLabels]
        });

        // Bar Chart kedua: Jumlah Penjualan per Bulan
        const barCtx = document.getElementById('myBarChart').getContext('2d');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    label: 'Jumlah order',
                    data: {!! json_encode($orderCount ?? []) !!},
                    backgroundColor: 'rgba(255, 99, 132, 0.6)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    tooltip: { enabled: true },
                    legend: { display: true },
                    datalabels: {
                        anchor: 'end',
                        align: 'top',
                        formatter: function (value) {
                            return value;
                        },
                        color: '#333',
                        font: { weight: 'bold' }
                    }
                },
                scales: {
                    y: { beginAtZero: true }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>
    <!-- Chart.js datalabels plugin CDN -->
    <script>
        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('btn-mark-paid')) {
                e.preventDefault(); // cegah aksi default

                const form = e.target.closest('form');

                Swal.fire({
                    title: 'Konfirmasi Pembayaran',
                    text: "Apakah Anda yakin ingin menandai order ini sebagai Paid?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, tandai Paid!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            }
        });
    </script>

    @stack('scripts')
</body>

</html>