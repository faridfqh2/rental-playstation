@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="search-header mb-4 p-4 bg-light rounded">
            <h2 class="mb-0">Hasil pencarian untuk: <span class="text-primary">"{{ $query }}"</span></h2>
        </div>

        {{-- Game Results --}}
        @if($games->count())
            <div class="game-results mb-5">
                <div class="d-flex align-items-center mb-3">
                    <h4 class="mb-0"><i class="fas fa-gamepad text-danger me-2"></i> Game</h4>
                    <span class="badge bg-danger ms-2">{{ $games->count() }}</span>
                </div>

                <div class="list-group">
                    @foreach($games as $game)
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <img src="https://via.placeholder.com/60?text=G" alt="{{ $game->title }}" class="rounded"
                                        width="60" height="60">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-1">{{ $game->title }}</h5>
                                    <small class="text-muted">Kategori: Action</small>
                                </div>
                                <i class="fas fa-chevron-right text-muted"></i>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Blog Results --}}
        @if($blogs->count())
            <div class="blog-results mb-5">
                <div class="d-flex align-items-center mb-3">
                    <h4 class="mb-0"><i class="fas fa-blog text-success me-2"></i> Blog</h4>
                    <span class="badge bg-success ms-2">{{ $blogs->count() }}</span>
                </div>

                <div class="list-group">
                    @foreach($blogs as $blog)
                        <a href="#" class="list-group-item list-group-item-action">
                            <h5 class="mb-1">{{ $blog->title }}</h5>
                            <p class="mb-1 text-muted small">{{ Str::limit($blog->content, 100) }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <small class="text-muted">Diposting 3 hari lalu</small>
                                <span class="badge bg-light text-dark">#tutorial</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- No Result --}}
        @if($games->isEmpty() && $blogs->isEmpty())
            <div class="no-results text-center py-5 my-5 bg-light rounded">
                <i class="fas fa-search fa-3x text-muted mb-3"></i>
                <h4 class="mb-3">Tidak ditemukan hasil untuk "{{ $query }}"</h4>
                <p class="text-muted">Coba gunakan kata kunci yang berbeda atau lebih spesifik</p>
                <button class="btn btn-primary mt-2">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </button>
            </div>
        @endif
    </div>

    <style>
        .search-header {
            background-color: #f8f9fa;
            border-left: 4px solid #0d6efd;
        }

        .list-group-item {
            border-radius: 8px !important;
            margin-bottom: 8px;
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.2s;
        }

        .list-group-item:hover {
            background-color: #f8f9fa;
            transform: translateX(2px);
        }

        .no-results {
            max-width: 600px;
            margin: 0 auto;
        }

        .badge {
            font-weight: 500;
        }
    </style>
@endsection