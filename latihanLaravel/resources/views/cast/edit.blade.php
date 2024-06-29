@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Edit Pemain Film</h1>
        <form action="{{ route('cast.update', $cast->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $cast->nama }}" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" name="umur" class="form-control" value="{{ $cast->umur }}" required>
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea name="bio" class="form-control" required>{{ $cast->bio }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
