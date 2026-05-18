@extends('layouts.app')

@section('title', $kategori['nama'])

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori</a></li>
            <li class="breadcrumb-item active">{{ $kategori['nama'] }}</li>
        </ol>
    </nav>

    <h2>{{ $kategori['nama'] }}</h2>
    <p class="text-muted">{{ $kategori['deskripsi'] }}</p>

    <h5 class="mt-4">Daftar Buku dalam Kategori ini:</h5>

    @if (count($buku_list) > 0)
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku_list as $i => $buku)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $buku['judul'] }}</td>
                        <td>{{ $buku['pengarang'] }}</td>
                        <td>Rp {{ number_format($buku['harga'], 0, ',', '.') }}</td>
                        <td>
                            @if ($buku['stok'] > 0)
                                <span class="badge bg-success">{{ $buku['stok'] }}</span>
                            @else
                                <span class="badge bg-danger">Habis</span>
                            @endif
                        </td>
                        <td>
                            {{-- Link ke detail buku di PerpustakaanController --}}
                            <a href="{{ route('buku.show', $buku['id']) }}" class="btn btn-sm btn-info">
                                Detail
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning">Belum ada buku dalam kategori ini.</div>
    @endif

    <a href="{{ route('kategori.index') }}" class="btn btn-secondary mt-2">← Kembali</a>
@endsection
