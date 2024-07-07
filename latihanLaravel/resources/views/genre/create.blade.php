@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Tambah Genre</h1>
        <form action="{{ route('genre.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
