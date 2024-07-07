@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Edit Genre</h1>
        <form action="{{ route('genre.update', $genre->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $genre->nama }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
