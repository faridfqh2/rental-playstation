@extends('layouts.admin')

@section('title', 'Edit Order')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Order</h1>

        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $order->name }}" required>
            </div>
            <div class="mb-3">
                <label>No. HP</label>
                <input type="text" name="phone" class="form-control" value="{{ $order->phone }}" required>
            </div>
            <div class="mb-3">
                <label>Jumlah (Jam)</label>
                <input type="number" name="qty" class="form-control" value="{{ $order->qty }}" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="address" class="form-control" required>{{ $order->address }}</textarea>
            </div>
            <div class="mb-3">
                <label>Total Harga</label>
                <input type="number" name="total_price" class="form-control" value="{{ $order->total_price }}" required>
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="Unpaid" {{ $order->status == 'Unpaid' ? 'selected' : '' }}>Unpaid</option>
                    <option value="Paid" {{ $order->status == 'Paid' ? 'selected' : '' }}>Paid</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="{{ route('orders.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection