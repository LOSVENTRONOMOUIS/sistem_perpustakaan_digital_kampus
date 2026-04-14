<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile - E-Library</title>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #f4f6f9;
}

/* HEADER */
.header {
    background: #2c3e50;
    padding: 18px;
    text-align: center;
    font-size: 22px;
    font-weight: bold;
    position: relative;
}

.header-icons {
    position: absolute;
    right: 20px;
    top: 15px;
    font-size: 20px;
}

/* CONTAINER */
.container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 20px;
}

/* TITLE */
.title {
    text-align: center;
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 30px;
}

/* LAYOUT */
.wrapper {
    display: flex;
    gap: 40px;
}

/* AVATAR */
.avatar {
    width: 150px;
    height: 150px;
    background: #dcdcdc;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 50px;
}

/* CARD */
.card {
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    margin-bottom: 30px;
}

/* TABLE */
table {
    width: 100%;
    border-collapse: collapse;
}

td, th {
    padding: 10px;
    font-size: 14px;
}

td:first-child {
    font-weight: bold;
    width: 180px;
    color: #555;
}

/* CART TABLE */
.cart-table th {
    text-align: left;
    background: #f0f0f0;
}

.cart-table td {
    border-bottom: 1px solid #eee;
}

/* BUTTON */
.btn {
    padding: 6px 10px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 12px;
}

.btn-hapus {
    background: #e74c3c;
    color: white;
}

.btn-pinjam {
    background: #2ecc71;
    color: white;
}

.btn:hover {
    opacity: 0.8;
}
</style>

</head>

<body>

<!-- HEADER -->
<div class="header">
    SISTEM PERPUSTAKAAN DIGITAL
    <div class="header-icons">🛒 👤</div>
</div>

<!-- CONTENT -->
<div class="container">

    <div class="title">PROFILE</div>

    <div class="wrapper">

        <!-- AVATAR -->
        <div class="avatar">👤</div>

        <div style="flex:1;">

            <!-- PROFILE -->
            <div class="card">
                <h3>Data Profil</h3>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>: Ahmad Fauzi</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: ahmad@email.com</td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>: 08123456789</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: Jakarta</td>
                    </tr>
                </table>
            </div>

            <!-- PAYMENT -->
            <div class="card">
                <h3>Payment</h3>
                <table>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td>: E-Wallet (OVO / Dana) |  Bank ( BRI / BNI / BCA )</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>: Aktif</td>
                    </tr>
                    <tr>
                        <td>Denda Tertunggak</td>
                        <td>: Rp 10.000</td>
                    </tr>
                </table>
            </div>

            <!-- MY CART -->
            <div class="card">
                <h3>My Cart (Keranjang Buku)</h3>

                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Pemrograman Web</td>
                            <td>Andi</td>
                            <td>2022</td>
                            <td>
                                <button class="btn btn-pinjam">Pinjam</button>
                                <button class="btn btn-hapus">Hapus</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Basis Data</td>
                            <td>Budi</td>
                            <td>2021</td>
                            <td>
                                <button class="btn btn-pinjam">Pinjam</button>
                                <button class="btn btn-hapus">Hapus</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Algoritma</td>
                            <td>Citra</td>
                            <td>2020</td>
                            <td>
                                <button class="btn btn-pinjam">Pinjam</button>
                                <button class="btn btn-hapus">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>
