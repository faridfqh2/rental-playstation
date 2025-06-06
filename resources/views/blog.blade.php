@include('layouts.app')

<main class="main">
  <section class="section">

    <div class="section-title">
      <h2>Blog tes</h2>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

    <div class="row gy-4">
      @foreach ($blogs as $blog)
      <div class="col-lg-4 col-md-6">
      <div class="card h-100 shadow-sm border-0" style="cursor: pointer;" data-bs-toggle="modal"
        data-bs-target="#modal-{{ $blog->id }}">
        @if($blog->image)
      <img src="{{ asset('uploads/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}"
      style="height: 200px; object-fit: cover;">
      @endif
        <div class="card-body">
        <h5 class="card-title">{{ $blog->title }}</h5>
        <p class="card-text">{{ Str::limit($blog->content, 100) }}</p>
        </div>
      </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="modal-{{ $blog->id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $blog->id }}"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel-{{ $blog->id }}">{{ $blog->title }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @if($blog->image)
        <img src="{{ asset('uploads/' . $blog->image) }}" class="img-fluid mb-3" alt="{{ $blog->title }}">
      @endif
          <p>{{ $blog->content }}</p>
        </div>
        </div>
      </div>
      </div>
    @endforeach
    </div>

  </section>
</main>