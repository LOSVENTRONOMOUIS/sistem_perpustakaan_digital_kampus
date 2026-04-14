<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Praktikum4Controller extends Controller
{
    public function getData()
    {
        $praktikum4 = [
            ['id' => 1, 'nama' => 'Buku A', 'tanggal_pinjam' => '2024-01-01', 'tanggal_kembali' => '2024-01-10'],
            ['id' => 2, 'nama' => 'Buku B', 'tanggal_pinjam' => '2024-02-01', 'tanggal_kembali' => '2024-02-10'],
            ['id' => 3, 'nama' => 'Buku C', 'tanggal_pinjam' => '2024-03-01', 'tanggal_kembali' => '2024-03-10'],
        ];

        return view('Praktikum4', compact('praktikum4'));
    }

    public function tampilkan($id, $nama)
    {
        $data = $this->getData();
        return view('list_barang', compact('id', 'nama'));
    }
}
