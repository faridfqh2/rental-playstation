@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>Hasil pencarian untuk: <strong>{{ $query }}</strong></h4>

        @if($results->count())
            <ul>
                @foreach ($results as $item)
                    <li>{{ $item->title }}</li>
                @endforeach
            </ul>
        @else
            <p>Tidak ditemukan hasil untuk "{{ $query }}".</p>
        @endif
    </div>
@endsection