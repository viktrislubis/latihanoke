@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Genres</h1>
        <a href="{{ route('genre.create') }}" class="btn btn-primary">Add Genre</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($genres as $genre)
                    <tr>
                        <td>{{ $genre->nama }}</td>
                        <td>
                            <a href="{{ route('genre.show', $genre->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('genre.edit', $genre->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('genre.destroy', $genre->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
