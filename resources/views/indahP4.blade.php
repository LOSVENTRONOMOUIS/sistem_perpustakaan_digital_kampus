<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>

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