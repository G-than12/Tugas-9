<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private function getKategori()
    {
        return [
            1 => ['id' => 1, 'nama' => 'Programming', 'deskripsi' => 'Buku pemrograman dan coding',         'jumlah_buku' => 3],
            2 => ['id' => 2, 'nama' => 'Jaringan',    'deskripsi' => 'Buku jaringan komputer dan IT',       'jumlah_buku' => 1],
            3 => ['id' => 3, 'nama' => 'Database',    'deskripsi' => 'Buku basis data dan SQL',             'jumlah_buku' => 1],
            4 => ['id' => 4, 'nama' => 'Desain Web',  'deskripsi' => 'Buku UI/UX dan desain web',           'jumlah_buku' => 1],
            5 => ['id' => 5, 'nama' => 'Keamanan',    'deskripsi' => 'Buku cybersecurity dan ethical hack', 'jumlah_buku' => 1],
        ];
    }

    public function index()
    {
        $kategori_list = $this->getKategori();
        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        $semua_kategori = $this->getKategori();
        if (!isset($semua_kategori[$id])) abort(404, 'Kategori tidak ditemukan');

        $kategori = $semua_kategori[$id];

        // Ambil buku yang sesuai kategori_id dari data terpusat
        $semua_buku = DataBuku::semua();
        $buku_list  = array_filter($semua_buku, function ($buku) use ($id) {
            return $buku['kategori_id'] == $id;
        });

        return view('kategori.show', compact('kategori', 'buku_list'));
    }

    public function search($keyword)
    {
        $semua = $this->getKategori();
        $hasil = array_filter($semua, function ($k) use ($keyword) {
            return stripos($k['nama'], $keyword) !== false
                || stripos($k['deskripsi'], $keyword) !== false;
        });

        return view('kategori.search', compact('hasil', 'keyword'));
    }
}
