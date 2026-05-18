@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
    <h1 class="mb-4">Daftar Anggota Perpustakaan</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Kode Anggota</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggota_list as $index => $anggota)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $anggota['kode'] }}</td>
                    <td>{{ $anggota['nama'] }}</td>
                    <td>{{ $anggota['email'] }}</td>
                    <td>
                        @if ($anggota['status'] == 'Aktif')
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-secondary">Nonaktif</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('anggota.show', $anggota['id']) }}" class="btn btn-sm btn-info">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
