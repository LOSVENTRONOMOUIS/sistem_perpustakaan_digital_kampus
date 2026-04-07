<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku - Sistem Perpustakaan Digital</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 30px;
            background-color: #f4f6f9;
        }

        .container {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            max-width: 900px;
            margin: 0 auto;
        }

        .header-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 15px;
        }

        .header-title h2 {
            margin: 0;
            color: #2c3e50;
        }

        .btn-tambah {
            background-color: #2ecc71;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
        }

        /* Desain Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ecf0f1;
        }

        table th {
            background-color: #34495e;
            color: white;
            font-weight: 600;
        }

        table tr:hover {
            background-color: #f9f9f9;
        }

        .btn-aksi {
            padding: 6px 10px;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 12px;
            margin-right: 5px;
        }

        .btn-edit { background-color: #3498db; }
        .btn-hapus { background-color: #e74c3c; }
    </style>
</head>
<body>

    <div class="container">
        <div class="header-title">
            <h2>Daftar Katalog Buku</h2>
            <a href="#" class="btn-tambah">+ Tambah Buku Baru</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftar_buku as $index => $buku)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><strong>{{ $buku['kode'] }}</strong></td>
                    <td>{{ $buku['judul'] }}</td>
                    <td>{{ $buku['penulis'] }}</td>
                    <td>{{ $buku['stok'] }}</td>
                    <td>
                        <a href="#" class="btn-aksi btn-edit">Edit</a>
                        <a href="#" class="btn-aksi btn-hapus">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>