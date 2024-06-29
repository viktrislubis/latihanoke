@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Detail Pemain Film</h1>
        <div class="card">
            <div class="card-header">
                {{ $cast->nama }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Umur: {{ $cast->umur }}</h5>
                <p class="card-text">{{ $cast->bio }}</p>
                <a href="{{ route('cast.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
