@extends('layouts.admin')

@section('title', 'Data Sewa PlayStation')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Penyewaan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Manajemen Data Sewa</li>
        </ol>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table me-1"></i> Tabel Penyewaan</div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jumlah Unit</th>
                            <th>Tanggal</th>
                            <th>Alamat</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rentals as $rental)
                            <tr>
                                <td>{{ $rental->nama }}</td>
                                <td>{{ $rental->email }}</td>
                                <td>{{ $rental->jumlah_unit }}</td>
                                <td>{{ $rental->tanggal_mulai }} - {{ $rental->tanggal_selesai }}</td>
                                <td>{{ $rental->alamat }}</td>
                                <td>Rp {{ number_format($rental->total_harga, 0, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('sewa.edit', $rental->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('sewa.destroy', $rental->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Yakin ingin menghapus data ini?')"
                                            class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection