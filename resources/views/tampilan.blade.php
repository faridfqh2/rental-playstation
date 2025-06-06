@extends('layouts.app')

@section('content')
    <h1 class="mb-4 text-center text-dark">Daftar Games Favorit PS5</h1>

    <div class="row">
        @foreach ($games as $game)
            <div class="col-md-4 mb-4">
                <div class="card game-card h-100">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#gameModal{{ $game->id }}">
                        <img src="{{ asset('storage/' . $game->image) }}" class="card-img-top" alt="{{ $game->title }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->title }}</h5>
                        <p class="card-text">{{ Str::limit($game->description, 100) }}</p>
                        <span class="badge bg-info text-dark">{{ $game->category }}</span>
                    </div>
                </div>
            </div>

            <!-- Modal untuk game -->
            <div class="modal fade" id="gameModal{{ $game->id }}" tabindex="-1" aria-labelledby="gameModalLabel{{ $game->id }}"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="gameModalLabel{{ $game->id }}">{{ $game->title }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->title }}"
                                class="img-fluid rounded mb-3">
                            <p>{{ $game->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $games->links() }}
    </div>
@endsection