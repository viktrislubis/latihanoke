@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Daftar Pemain Film</h1>
        <a href="{{ route('cast.create') }}" class="btn btn-primary">Tambah Pemain</a>
        <table class="table table-bordered mt-3">
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>Aksi</th>
            </tr>
            @foreach ($casts as $cast)
                <tr>
                    <td>{{ $cast->nama }}</td>
                    <td>{{ $cast->umur }}</td>
                    <td>{{ $cast->bio }}</td>
                    <td>
                        <a href="{{ route('cast.show', $cast->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('cast.destroy', $cast->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
