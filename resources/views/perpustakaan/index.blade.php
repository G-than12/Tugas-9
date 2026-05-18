@extends('layouts.app')

@section('title', $nama_sistem)

@section('content')
    <h1>{{ $nama_sistem }}</h1>
    <p class="lead">Selamat datang di sistem perpustakaan berbasis Laravel {{ $versi }}</p>

    <div class="alert alert-info">
        <strong>Info:</strong> Total buku yang tersedia: {{ $total_buku }}
    </div>

    <h3>Daftar Buku</h3>
    <table class="table table-striped">
        <thead>
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
            @foreach ($buku_list as $buku)
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
                        <a href="{{ route('buku.show', $buku['id']) }}" class="btn btn-sm btn-info">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
