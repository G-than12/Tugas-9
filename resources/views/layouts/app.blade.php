<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html {
            overflow-y: scroll;
        }

        body {
            padding-top: 66px;
        }
    </style>
</head>

<body>

    {{-- NAVBAR STICKY --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">📚 Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('perpustakaan*') || request()->is('buku*') ? 'active' : '' }}"
                            href="{{ route('perpustakaan.index') }}">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('anggota*') ? 'active' : '' }}"
                            href="{{ route('anggota.index') }}">Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('kategori*') ? 'active' : '' }}"
                            href="{{ route('kategori.index') }}">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- KONTEN UTAMA --}}
    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <footer class="bg-light text-center text-muted py-3 mt-5 border-top">
        <small>© {{ date('Y') }} Sistem Perpustakaan — UIN K.H. Abdurrahman Wahid Pekalongan</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
