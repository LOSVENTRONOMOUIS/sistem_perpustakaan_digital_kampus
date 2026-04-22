<!DOCTYPE html>
<html>
<head>
    <title>Halaman Indah</title>
    <link rel="stylesheet" href="{{ asset('styles/style_indah.css') }}">
</head>
<body>

<h1>Galeri Gambar</h1>

<img src="{{ asset('images/P1_view.jpg') }}" alt="gambar1">
<img src="{{ asset('images/P2_pantai.jpg') }}" alt="gambar2">

<hr>

<h2>Daftar Buku</h2>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $dataku)
        <tr>
            <td>{{ $dataku['id'] }}</td>
            <td>{{ $dataku['judul'] }}</td>
            <td>{{ $dataku['penulis'] }}</td>
            <td>{{ $dataku['tahun'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>