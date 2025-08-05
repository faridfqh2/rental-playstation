@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Riwayat Penyewaan</h2>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Phone</th>
                                    <th class="text-center">Jumlah</th>
                                    <th>Total Price</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Tanggal Booking</th>
                                    <th>Jam Booking</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($rentals as $rental)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rental->name }}</td>
                                        <td>{{ $rental->phone }}</td>
                                        <td>{{ $rental->qty }}</td>
                                        <td>Rp{{ number_format($rental->total_price, 0, ',', '.') }}</td>
                                        <td>{{ $rental->address }}</td>
                                        <td>{{ $rental->status ?? '-' }}</td>
                                        <td>{{ \Carbon\Carbon::parse($rental->created_at)->format('d-m-Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($rental->created_at)->format('H:i') }}</td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" style="text-align:center;">Belum ada riwayat penyewaan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection