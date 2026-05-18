<?php

namespace App\Http\Controllers;

class DataBuku
{
    public static function semua()
    {
        return [
            1 => [
                'id'         => 1,
                'judul'      => 'Pemrograman PHP',
                'pengarang'  => 'Budi Raharjo',
                'penerbit'   => 'Informatika',
                'tahun'      => 2023,
                'harga'      => 75000,
                'stok'       => 10,
                'kategori_id'=> 1,
                'deskripsi'  => 'Buku panduan lengkap pemrograman PHP dari dasar hingga advanced',
            ],
            2 => [
                'id'         => 2,
                'judul'      => 'Laravel Framework',
                'pengarang'  => 'Andi Nugroho',
                'penerbit'   => 'Graha Ilmu',
                'tahun'      => 2024,
                'harga'      => 125000,
                'stok'       => 5,
                'kategori_id'=> 1,
                'deskripsi'  => 'Membangun aplikasi web modern dengan Laravel framework',
            ],
            3 => [
                'id'         => 3,
                'judul'      => 'MySQL Database',
                'pengarang'  => 'Siti Aminah',
                'penerbit'   => 'Andi Publisher',
                'tahun'      => 2023,
                'harga'      => 95000,
                'stok'       => 0,
                'kategori_id'=> 3,
                'deskripsi'  => 'Panduan lengkap database MySQL dari dasar hingga optimasi',
            ],
            4 => [
                'id'         => 4,
                'judul'      => 'Web Design',
                'pengarang'  => 'Dedi Santoso',
                'penerbit'   => 'Elex Media',
                'tahun'      => 2022,
                'harga'      => 85000,
                'stok'       => 8,
                'kategori_id'=> 4,
                'deskripsi'  => 'Panduan desain web modern dengan HTML, CSS, dan Bootstrap',
            ],
            5 => [
                'id'         => 5,
                'judul'      => 'JavaScript Modern',
                'pengarang'  => 'Rina Wijaya',
                'penerbit'   => 'Informatika',
                'tahun'      => 2024,
                'harga'      => 80000,
                'stok'       => 12,
                'kategori_id'=> 1,
                'deskripsi'  => 'Belajar JavaScript ES6+ dan framework modern',
            ],
            6 => [
                'id'         => 6,
                'judul'      => 'Jaringan Komputer Dasar',
                'pengarang'  => 'Hendra Kusuma',
                'penerbit'   => 'Graha Ilmu',
                'tahun'      => 2023,
                'harga'      => 90000,
                'stok'       => 6,
                'kategori_id'=> 2,
                'deskripsi'  => 'Konsep dasar jaringan komputer dan protokol internet',
            ],
            7 => [
                'id'         => 7,
                'judul'      => 'Ethical Hacking',
                'pengarang'  => 'Agus Setiawan',
                'penerbit'   => 'Andi Publisher',
                'tahun'      => 2024,
                'harga'      => 110000,
                'stok'       => 4,
                'kategori_id'=> 5,
                'deskripsi'  => 'Panduan ethical hacking dan keamanan sistem informasi',
            ],
        ];
    }
}
