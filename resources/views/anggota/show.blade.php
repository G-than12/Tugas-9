@extends('layouts.app')

@section('title', 'Profil — ' . $anggota['nama'])

@section('content')

    {{-- BREADCRUMB --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('anggota.index') }}">Daftar Anggota</a></li>
            <li class="breadcrumb-item active">{{ $anggota['nama'] }}</li>
        </ol>
    </nav>

    <div class="row g-4">

        {{-- CARD PROFIL KIRI --}}
        <div class="col-md-4">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body py-5">

                    {{-- AVATAR --}}
                    <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center
                                justify-content-center mb-3"
                        style="width: 100px; height: 100px; font-size: 2.8rem;">
                        👤
                    </div>

                    <h4 class="fw-bold mb-1">{{ $anggota['nama'] }}</h4>
                    <p class="text-muted mb-2">{{ $anggota['kode'] }}</p>

                    @if ($anggota['status'] == 'Aktif')
                        <span class="badge bg-success px-3 py-2 fs-6">Aktif</span>
                    @else
                        <span class="badge bg-secondary px-3 py-2 fs-6">Nonaktif</span>
                    @endif

                    <hr class="my-4">

                    {{-- KONTAK SINGKAT --}}
                    <div class="text-start">
                        <p class="mb-2">
                            <span class="text-muted">📧</span>
                            <span class="ms-2">{{ $anggota['email'] }}</span>
                        </p>
                        <p class="mb-2">
                            <span class="text-muted">📱</span>
                            <span class="ms-2">{{ $anggota['telepon'] }}</span>
                        </p>
                        <p class="mb-0">
                            <span class="text-muted">📍</span>
                            <span class="ms-2">{{ $anggota['alamat'] }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- DETAIL KANAN --}}
        <div class="col-md-8">

            {{-- INFORMASI LENGKAP --}}
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white fw-bold">
                    🪪 Informasi Anggota
                </div>
                <div class="card-body">
                    <table class="table table-borderless mb-0">
                        <tr>
                            <th width="160" class="text-muted">Kode Anggota</th>
                            <td>: <strong>{{ $anggota['kode'] }}</strong></td>
                        </tr>
                        <tr>
                            <th class="text-muted">Nama Lengkap</th>
                            <td>: {{ $anggota['nama'] }}</td>
                        </tr>
                        <tr>
                            <th class="text-muted">Email</th>
                            <td>: {{ $anggota['email'] }}</td>
                        </tr>
                        <tr>
                            <th class="text-muted">Telepon</th>
                            <td>: {{ $anggota['telepon'] }}</td>
                        </tr>
                        <tr>
                            <th class="text-muted">Alamat</th>
                            <td>: {{ $anggota['alamat'] }}</td>
                        </tr>
                        <tr>
                            <th class="text-muted">Status</th>
                            <td>:
                                @if ($anggota['status'] == 'Aktif')
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-secondary">Nonaktif</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            {{-- STATISTIK --}}
            <div class="row g-3">
                <div class="col-4">
                    <div class="card text-center border-primary shadow-sm">
                        <div class="card-body py-3">
                            <div style="font-size: 1.8rem;"></div>
                            <h5 class="fw-bold text-primary mb-0">0</h5>
                            <small class="text-muted">Buku Dipinjam</small>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card text-center border-success shadow-sm">
                        <div class="card-body py-3">
                            <div style="font-size: 1.8rem;"></div>
                            <h5 class="fw-bold text-success mb-0">0</h5>
                            <small class="text-muted">Sudah Dikembalikan</small>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card text-center border-warning shadow-sm">
                        <div class="card-body py-3">
                            <div style="font-size: 1.8rem;"></div>
                            <h5 class="fw-bold text-warning mb-0">0</h5>
                            <small class="text-muted">Sedang Dipinjam</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">← Kembali ke Daftar Anggota</a>
    </div>

@endsection
