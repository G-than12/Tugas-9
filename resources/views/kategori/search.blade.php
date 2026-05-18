@extends('layouts.app')

@section('title', 'Cari Kategori')

@section('content')
    <h2>Hasil Pencarian: <mark>{{ $keyword }}</mark></h2>

    @if (count($hasil) > 0)
        <div class="row mt-3">
            @foreach ($hasil as $k)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>{{ $k['nama'] }}</h5>
                            <p>{{ $k['deskripsi'] }}</p>
                            <a href="{{ route('kategori.show', $k['id']) }}" class="btn btn-sm btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-warning mt-3">Tidak ada kategori yang cocok dengan "<strong>{{ $keyword }}</strong>".
        </div>
    @endif

    <a href="{{ route('kategori.index') }}" class="btn btn-secondary mt-2">← Kembali</a>
@endsection
