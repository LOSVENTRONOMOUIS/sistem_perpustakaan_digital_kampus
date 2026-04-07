<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        // Contoh data dummy (nanti ini akan diganti dengan data dari database)
        $daftar_buku = [
            ['kode' => 'B-001', 'judul' => 'Belajar Laravel 10', 'penulis' => 'Taylor Otwell', 'stok' => 5],
            ['kode' => 'B-002', 'judul' => 'Dasar Pemrograman Web', 'penulis' => 'Tim Dosen', 'stok' => 12],
            ['kode' => 'B-003', 'judul' => 'Sistem Basis Data Terpadu', 'penulis' => 'John Doe', 'stok' => 8],
        ];

        // Mengirim data array $daftar_buku ke view menggunakan compact()
        return view('katalog_buku', compact('daftar_buku'));
    }
}