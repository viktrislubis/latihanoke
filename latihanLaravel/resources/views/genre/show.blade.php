{{-- resources/views/genres/show.blade.php --}}
@extends('layout.app')

@section('content')
    <div class="container">
        <h1>{{ $genre->nama }}</h1>
        <h2>Films</h2>
        @if ($genre->films->count() > 0)
            <ul>
                @foreach ($genre->films as $film)
                    <li>
                        <a href="{{ route('film.show', $film->id) }}">{{ $film->judul }}</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No films available for this genre.</p>
        @endif
    </div>
@endsection
