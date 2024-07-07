@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Edit Film</h1>
        <form action="{{ route('film.update', $film->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $film->judul }}" required>
            </div>
            <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <textarea name="ringkasan" class="form-control" required>{{ $film->ringkasan }}</textarea>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" name="tahun" class="form-control" value="{{ $film->tahun }}" required>
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="text" name="poster" class="form-control" value="{{ $film->poster }}" required>
            </div>
            <div class="form-group">
                <label for="genre_id">Genre</label>
                <select name="genre_id" class="form-control" required>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" @if ($genre->id == $film->genre_id) selected @endif>
                            {{ $genre->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
