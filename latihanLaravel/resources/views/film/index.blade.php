@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Films</h1>
        @if ($films->count() > 0)
            <ul>
                @foreach ($films as $film)
                    <li>
                        <a href="{{ route('film.show', $film->id) }}">{{ $film->judul }}</a> - Genre:
                        {{ $film->genre->nama }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>No films available.</p>
        @endif
    </div>
@endsection
