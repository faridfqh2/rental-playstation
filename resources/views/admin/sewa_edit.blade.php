@extends('layouts.admin')

@section('title', 'Edit Data Sewa')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Data Penyewaan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.sewa') }}">Data Sewa</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-edit me-1"></i>
                Form Edit Data Sewa
            </div>
            <div class="card-body">
                <form action="{{ route('sewa.update', $rental->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            value="{{ old('nama', $rental->nama) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email', $rental->email) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_unit" class="form-label">Jumlah Unit</label>
                        <input type="number" name="jumlah_unit" id="jumlah_unit" class="form-control"
                            value="{{ old('jumlah_unit', $rental->jumlah_unit) }}" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control"
                                value="{{ old('tanggal_mulai', $rental->tanggal_mulai) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control"
                                value="{{ old('tanggal_selesai', $rental->tanggal_selesai) }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="3"
                            required>{{ old('alamat', $rental->alamat) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('admin.sewa') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection