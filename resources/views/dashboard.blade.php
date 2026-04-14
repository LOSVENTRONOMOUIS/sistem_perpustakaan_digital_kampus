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

        /* Desain Sidebar (Menu Samping) */
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

        /* Area Konten Utama */
        .main-content {
            margin-left: 250px; /* Memberi ruang untuk sidebar */
            padding: 30px;
            width: 100%;
        }

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

        /* Desain Kartu Statistik */
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
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>📚 E-Library</h2>
        <a href="{{ url('dashboard') }}" class="active">Dashboard</a>
        <a href="{{ url('katalog') }}">Katalog Buku</a>
        <a href="{{ url('peminjaman') }}">Data Peminjaman</a>
        <a href="{{ url('profile') }}">Pengaturan</a>
        <a href="#" style="margin-top: 50px; color: #e74c3c;">Keluar</a>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Selamat Datang, Admin!</h1>
            <span>Tanggal: <?php echo date('d M Y'); ?></span>
        </div>

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
        
        <div style="margin-top: 30px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
            <h3>Aktivitas Terbaru</h3>
            <p style="color: #7f8c8d;">Belum ada aktivitas hari ini.</p>
        </div>
    </div>

</body>
</html>