@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4><i class="fas fa-blog"></i> Daftar Blog</h4>
                <a href="{{ route('blog.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle me-1"></i> Tambah Blog
                </a>
            </div>

            <div class="card-body">
                {{-- Alert sukses --}}
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                {{-- Alert error --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blog as $index => $blog)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ Str::limit($blog->content, 100) }}</td>
                                <td>
                                    @if($blog->image)
                                        <img src="{{ asset('uploads/' . $blog->image) }}" width="100">
                                    @else
                                        <em>Tidak ada gambar</em>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus blog ini?')">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
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