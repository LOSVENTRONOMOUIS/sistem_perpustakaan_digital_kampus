<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Perpustakaan Digital</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 30px;
            color: #ecf0f1;
        }

        .sidebar a {
            display: block;
            color: #bdc3c7;
            padding: 15px 20px;
            text-decoration: none;
            font-size: 16px;
            border-left: 4px solid transparent;
            transition: all 0.3s;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: #34495e;
            color: white;
            border-left: 4px solid #3498db;
        }

        /* Main */
        .main-content {
            margin-left: 250px;
            padding: 30px;
            width: 100%;
        }

        /* Header */
        .header {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        /* Cards */
        .cards-container {
            display: flex;
            gap: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            flex: 1;
            border-top: 4px solid #3498db;
        }

        .card h3 {
            margin: 0 0 10px 0;
            color: #7f8c8d;
            font-size: 16px;
        }

        .card p {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
            color: #2c3e50;
        }

        .card.green { border-top-color: #2ecc71; }
        .card.orange { border-top-color: #e67e22; }

        /* Box (table area) */
        .box {
            margin-top: 30px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th {
            text-align: left;
            padding: 12px;
            background-color: #f8f9fa;
            color: #555;
            font-size: 14px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        /* Status */
        .badge {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            color: white;
        }

        .dipinjam { background-color: #f39c12; }
        .kembali { background-color: #2ecc71; }
        .terlambat { background-color: #e74c3c; }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>📚 E-Library</h2>
        <a href="{{ url('dashboard') }}" >Dashboard</a>
        <a href="{{ url('katalog') }}">Katalog Buku</a>
        <a href="{{ url('peminjaman') }}" class="active">Data Peminjaman</a>
        <a href="{{ url('profile') }}">Pengaturan</a>
        <a href="#" style="margin-top: 50px; color: #e74c3c;">Keluar</a>
    </div>

    <!-- Main -->
    <div class="main-content">

        <!-- Header -->
        <div class="header">
            <h1>Selamat Datang, Admin!</h1>
            <span id="tanggal"></span>
        </div>

        <!-- Cards -->
        <div class="cards-container">
            <div class="card">
                <h3>Total Buku</h3>
                <p>1,245</p>
            </div>
            <div class="card green">
                <h3>Sedang Dipinjam</h3>
                <p>87</p>
            </div>
            <div class="card orange">
                <h3>Anggota Aktif</h3>
                <p>342</p>
            </div>
        </div>
        
        <!-- TABEL PEMINJAMAN -->
        <div class="box">
            <h3>Data Peminjaman Mahasiswa</h3>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Buku</th>
                        <th>Tgl Pinjam</th>
                        <th>Tgl Kembali</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>202301001</td>
                        <td>Ahmad Fauzi</td>
                        <td>Informatika</td>
                        <td>Pemrograman Web</td>
                        <td>10 Apr 2026</td>
                        <td>17 Apr 2026</td>
                        <td><span class="badge dipinjam">Dipinjam</span></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>202301045</td>
                        <td>Siti Nurhaliza</td>
                        <td>Sistem Informasi</td>
                        <td>Basis Data</td>
                        <td>05 Apr 2026</td>
                        <td>12 Apr 2026</td>
                        <td><span class="badge kembali">Dikembalikan</span></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>202301078</td>
                        <td>Budi Santoso</td>
                        <td>Teknik Komputer</td>
                        <td>Struktur Data</td>
                        <td>12 Apr 2026</td>
                        <td>19 Apr 2026</td>
                        <td><span class="badge terlambat">Terlambat</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

<script>
const today = new Date();
const options = { day: '2-digit', month: 'short', year: 'numeric' };
document.getElementById("tanggal").innerText =
    "Tanggal: " + today.toLocaleDateString('id-ID', options);
</script>

</body>
</html>
