@extends('layouts.admin')

@section('title', 'Edit Data Blog')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Data Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('blog.admin') }}">Data Blog</a></li>
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
                Form Edit Data Blog
            </div>
            <div class="card-body">
                <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ old('title', $blog->title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Penulis</label>
                        <input type="text" name="author" id="author" class="form-control"
                            value="{{ old('author', $blog->author) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Konten</label>
                        <textarea name="content" id="content" class="form-control" rows="5"
                            required>{{ old('content', $blog->content) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar (opsional)</label><br>
                        @if ($blog->image)
                            <img src="{{ asset('uploads/' . $blog->image) }}" alt="Gambar Blog" width="150" class="mb-2">
                        @endif
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('blog.admin') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection