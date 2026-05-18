<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index()
    {
        $nama_sistem = "Sistem Perpustakaan Laravel";
        $versi       = "13.9";
        $buku_list   = DataBuku::semua();
        $total_buku  = count($buku_list);

        return view('perpustakaan.index', compact('nama_sistem', 'versi', 'total_buku', 'buku_list'));
    }

    public function show($id)
    {
        $buku_list = DataBuku::semua();

        if (!isset($buku_list[$id])) {
            abort(404, 'Buku tidak ditemukan');
        }

        $buku = $buku_list[$id];

        return view('perpustakaan.show', compact('buku'));
    }

    public function about()
    {
        $info = [
            'nama'      => 'Sistem Perpustakaan Laravel',
            'versi'     => '1.0.0',
            'deskripsi' => 'Sistem manajemen perpustakaan berbasis Laravel framework',
            'developer' => 'Gathan Hilabi',
            'tahun'     => date('Y'),
        ];

        return view('perpustakaan.about', compact('info'));
    }
}
