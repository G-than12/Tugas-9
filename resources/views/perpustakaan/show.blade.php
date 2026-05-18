@extends('layouts.app')

@section('title', $buku['judul'])

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('perpustakaan.index') }}">Perpustakaan</a>
            </li>
            <li class="breadcrumb-item active">{{ $buku['judul'] }}</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">{{ $buku['judul'] }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-borderless">
                        <tr>
                            <th width="150">ID Buku</th>
                            <td>: {{ $buku['id'] }}</td>
                        </tr>
                        <tr>
                            <th>Judul</th>
                            <td>: {{ $buku['judul'] }}</td>
                        </tr>
                        <tr>
                            <th>Pengarang</th>
                            <td>: {{ $buku['pengarang'] }}</td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td>: {{ $buku['penerbit'] }}</td>
                        </tr>
                        <tr>
                            <th>Tahun Terbit</th>
                            <td>: {{ $buku['tahun'] }}</td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>: Rp {{ number_format($buku['harga'], 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td>:
                                @if ($buku['stok'] > 0)
                                    <span class="badge bg-success">{{ $buku['stok'] }} tersedia</span>
                                @else
                                    <span class="badge bg-danger">Habis</span>
                                @endif
                            </td>
                        </tr>
                    </table>

                    <hr>

                    <h5>Deskripsi:</h5>
                    <p>{{ $buku['deskripsi'] }}</p>
                </div>

                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <h4 class="text-primary">Rp {{ number_format($buku['harga'], 0, ',', '.') }}</h4>

                            @if ($buku['stok'] > 0)
                                <button class="btn btn-success btn-lg w-100 mt-3">
                                    Pinjam Buku
                                </button>
                            @else
                                <button class="btn btn-secondary btn-lg w-100 mt-3" disabled>
                                    Stok Habis
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('perpustakaan.index') }}" class="btn btn-secondary">
            ← Kembali ke Daftar Buku
        </a>
    </div>
@endsection
