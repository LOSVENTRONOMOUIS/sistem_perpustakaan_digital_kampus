<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4 & 5</title>
    
    <link rel="stylesheet" href="{{ asset('styles/style_nafis.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <h1>Ini Judul Merah</h1>
    <img src="{{ asset('images/f1_mercedes.jpg') }}" alt="Gambar 1">
    <img src="{{ asset('images/f1_redbull.jpg') }}" alt="Gambar 2">

    <br><hr><br>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($praktikum4 as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['harga'] ?? '-' }}</td> 
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>