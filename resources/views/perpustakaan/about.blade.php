@extends('layouts.app')

@section('title', 'About — Perpustakaan')

@section('content')

    {{-- HERO --}}
    <div class="p-5 mb-4 rounded-3 text-white" style="background: linear-gradient(135deg, #0d6efd, #0a58ca);">
        <div class="container-fluid py-2 text-center">
            <div style="font-size: 4rem;">📚</div>
            <h1 class="display-5 fw-bold">{{ $info['nama'] }}</h1>
            <p class="col-md-8 mx-auto fs-5 opacity-75">{{ $info['deskripsi'] }}</p>
            <span class="badge bg-light text-primary fs-6 px-3 py-2">Versi {{ $info['versi'] }}</span>
        </div>
    </div>

    <div class="row g-4">

        {{-- INFO APLIKASI --}}
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-primary text-white fw-bold">
                    🏛️ Informasi Aplikasi
                </div>
                <div class="card-body">
                    <table class="table table-borderless mb-0">
                        <tr>
                            <th width="140" class="text-muted">Nama Sistem</th>
                            <td>: {{ $info['nama'] }}</td>
                        </tr>
                        <tr>
                            <th class="text-muted">Versi</th>
                            <td>: <span class="badge bg-success">{{ $info['versi'] }}</span></td>
                        </tr>
                        <tr>
                            <th class="text-muted">Framework</th>
                            <td>: Laravel 12.x</td>
                        </tr>
                        <tr>
                            <th class="text-muted">Bahasa</th>
                            <td>: PHP 8.5.3</td>
                        </tr>
                        <tr>
                            <th class="text-muted">Database</th>
                            <td>: MySQL</td>
                        </tr>
                        <tr>
                            <th class="text-muted">Tahun</th>
                            <td>: {{ $info['tahun'] }}</td>
                        </tr>
                        <tr>
                            <th class="text-muted">Universitas</th>
                            <td>: UIN K.H. Abdurrahman Wahid Pekalongan</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        {{-- INFO DEVELOPER --}}
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-success text-white fw-bold">
                    👨‍💻 Developer
                </div>
                <div class="card-body text-center py-4">
                    <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3"
                        style="width: 80px; height: 80px; font-size: 2rem;">
                        👤
                    </div>
                    <h4 class="fw-bold">{{ $info['developer'] }}</h4>
                    <p class="text-muted mb-1">Mahasiswa Informatika</p>
                    <p class="text-muted">FEBI / Saintek — {{ $info['tahun'] }}</p>
                    <hr>
                    <p class="text-muted small mb-0">
                        Mata Kuliah: <strong>Pemrograman Website 2</strong><br>
                        Dosen: <strong>Mohammad Reza Maulana, M.Kom</strong>
                    </p>
                </div>
            </div>
        </div>

        {{-- FITUR APLIKASI --}}
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white fw-bold">
                    ⚙️ Fitur Aplikasi
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="text-center p-3 border rounded h-100">
                                <div style="font-size: 2rem;">📖</div>
                                <h6 class="fw-bold mt-2">Manajemen Buku</h6>
                                <p class="text-muted small mb-0">Kelola data buku perpustakaan dengan mudah</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center p-3 border rounded h-100">
                                <div style="font-size: 2rem;">👥</div>
                                <h6 class="fw-bold mt-2">Manajemen Anggota</h6>
                                <p class="text-muted small mb-0">Data anggota perpustakaan terorganisir</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center p-3 border rounded h-100">
                                <div style="font-size: 2rem;">🗂️</div>
                                <h6 class="fw-bold mt-2">Kategori Buku</h6>
                                <p class="text-muted small mb-0">Pengelompokan buku berdasarkan kategori</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center p-3 border rounded h-100">
                                <div style="font-size: 2rem;">🔍</div>
                                <h6 class="fw-bold mt-2">Pencarian</h6>
                                <p class="text-muted small mb-0">Cari buku dan kategori dengan cepat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- TEKNOLOGI --}}
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white fw-bold">
                    🛠️ Teknologi yang Digunakan
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-danger fs-6 px-3 py-2">Laravel 13.9</span>
                        <span class="badge bg-primary fs-6 px-3 py-2">PHP 8.5.3</span>
                        <span class="badge bg-warning text-dark fs-6 px-3 py-2">MySQL</span>
                        <span class="badge bg-info text-dark fs-6 px-3 py-2">Bootstrap 5</span>
                        <span class="badge bg-success fs-6 px-3 py-2">Blade Template</span>
                        <span class="badge bg-dark fs-6 px-3 py-2">MVC Architecture</span>
                        <span class="badge bg-secondary fs-6 px-3 py-2">Composer</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-4">
        <a href="/" class="btn btn-secondary">← Kembali ke Beranda</a>
    </div>

@endsection
