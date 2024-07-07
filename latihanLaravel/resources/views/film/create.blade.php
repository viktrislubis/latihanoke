@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Tambah Film</h1>
        <form action="{{ route('film.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <textarea name="ringkasan" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" name="tahun" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="text" name="poster" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="genre_id">Genre</label>
                <select name="genre_id" class="form-control" required>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
