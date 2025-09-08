@extends('layouts.admin')

@section('title', 'Order List')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Order List</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Order List
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>

                            <th>Meja</th>
                            <th>Jumlah (Jam)</th>

                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $item)
                            <tr>
                                <td>{{ $item->name }}</td>

                                <td>{{ $item->meja }}</td>
                                <td>{{ $item->qty }}</td>

                                <td>Rp {{ number_format($item->total_price, 0, ',', '.') }}</td>
                                <td>
                                    @if ($item->status == 'Paid')
                                        <span class="badge bg-success">Paid</span>
                                    @else
                                        <form method="POST" action="{{ route('orders.markPaid', $item->id) }}"
                                            class="d-inline form-mark-paid">
                                            @csrf
                                            @method('PATCH')
                                            <button type="button" class="btn btn-sm btn-warning btn-mark-paid">Mark as Paid</button>
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
@endsection

@push('scripts')
    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Event delegation agar semua tombol terdeteksi
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('btn-mark-paid')) {
                e.preventDefault();

                let form = e.target.closest('form');

                Swal.fire({
                    title: 'Konfirmasi',
                    text: "Yakin ingin menandai order ini sebagai Paid?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, tandai Paid',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            }
        });

        // Notifikasi setelah update sukses
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: "{{ session('success') }}",
                timer: 2000,
                showConfirmButton: false
            });
        @endif
    </script>
@endpush