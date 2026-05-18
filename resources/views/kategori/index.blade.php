@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-1">
        <h1 class="mb-0">Daftar Kategori Buku</h1>
        <span class="text-muted">
            Total: <strong>{{ count($kategori_list) }}</strong> Kategori
        </span>
    </div>
    <p class="text-muted mb-3">Menampilkan seluruh kategori yang tersedia di perpustakaan.</p>

    {{-- SEARCH BAR --}}
    <form method="GET" action="{{ route('kategori.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="Cari kategori... (contoh: Programming)"
                value="{{ request('keyword') }}">
            <button class="btn btn-primary" type="submit">🔍 Cari</button>
            @if (request('keyword'))
                <a href="{{ route('kategori.index') }}" class="btn btn-outline-secondary">✕ Reset</a>
            @endif
        </div>
    </form>

    {{-- HASIL PENCARIAN --}}
    @if (request('keyword'))
        @php
            $keyword = request('keyword');
            $hasil = array_filter($kategori_list, function ($k) use ($keyword) {
                return stripos($k['nama'], $keyword) !== false || stripos($k['deskripsi'], $keyword) !== false;
            });
        @endphp

        <div class="mb-4">
            <h5 class="text-primary">
                🔍 Hasil pencarian: <mark>{{ request('keyword') }}</mark>
                <small class="text-muted">({{ count($hasil) }} dari {{ count($kategori_list) }} kategori)</small>
            </h5>

            @if (count($hasil) > 0)
                <div class="row">
                    @foreach ($hasil as $kategori)
                        <div class="col-md-4 mb-3">
                            <div class="card border-primary h-100">
                                <div
                                    class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                    <span class="fw-bold">{{ $kategori['nama'] }}</span>
                                    <span class="badge bg-secondary">
                                        KTG{{ str_pad($kategori['id'], 3, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                                <div class="card-body">
                                    <p class="card-text text-muted">{{ $kategori['deskripsi'] }}</p>
                                    <span class="badge bg-info text-dark">{{ $kategori['jumlah_buku'] }} buku</span>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('kategori.show', $kategori['id']) }}" class="btn btn-primary btn-sm">
                                        Lihat Detail →
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-warning">
                    Tidak ada kategori yang cocok dengan "<strong>{{ request('keyword') }}</strong>".
                </div>
            @endif

            <hr class="my-4">
            <h5 class="text-muted">Semua Kategori ({{ count($kategori_list) }})</h5>
        </div>
    @endif

    {{-- SEMUA KATEGORI --}}
    <div class="row">
        @foreach ($kategori_list as $kategori)
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-dark">{{ $kategori['nama'] }}</span>
                        <span class="badge bg-secondary">
                            KTG{{ str_pad($kategori['id'], 3, '0', STR_PAD_LEFT) }}
                        </span>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-muted">{{ $kategori['deskripsi'] }}</p>
                        <span class="badge bg-info text-dark">{{ $kategori['jumlah_buku'] }} buku</span>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="{{ route('kategori.show', $kategori['id']) }}" class="btn btn-primary btn-sm">
                            Lihat Detail →
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
