@extends('layout.app')

@section('content')
    <div class="container">
        <h1>{{ $film->judul }}</h1>
        <p><strong>Ringkasan:</strong> {{ $film->ringkasan }}</p>
        <p><strong>Tahun:</strong> {{ $film->tahun }}</p>
        <p><strong>Genre:</strong> {{ $film->genre->nama }}</p>
        <img src="{{ $film->poster }}" alt="{{ $film->judul }}" style="width: 200px;">
        <a href="{{ route('film.index') }}" class="btn btn-primary mt-3">Back to Films</a>
    </div>
@endsection
