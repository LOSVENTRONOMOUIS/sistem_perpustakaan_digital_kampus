<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndahP4Controller extends Controller
{
    public function getData()
    {
        // Data baru (contoh: data buku perpustakaan)
        $dataBuku = [
            ['id' => 1, 'judul' => 'Pemrograman Laravel', 'penulis' => 'Andi', 'tahun' => 2022],
            ['id' => 2, 'judul' => 'Dasar PHP', 'penulis' => 'Budi', 'tahun' => 2021],
            ['id' => 3, 'judul' => 'Belajar MySQL', 'penulis' => 'Citra', 'tahun' => 2020],
            ['id' => 4, 'judul' => 'Web Design', 'penulis' => 'Dina', 'tahun' => 2023],
            ['id' => 5, 'judul' => 'Algoritma & Struktur Data', 'penulis' => 'Eko', 'tahun' => 2019],
        ];

        return $dataBuku;
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('indahP4', compact('data'));
    }
}