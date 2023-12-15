<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Selamat Datang</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>

<body>
    <h1>Data Sensus Penduduk</h1>
    <p>NIK: {{ $nik }}</p>
    <p>Nama: {{ $nama }}</p>
    <p>Provinsi: {{ $provinsi }}</p>
    <p>Kota: {{ $kota }}</p>
    <p>Nomor Telpon: {{ $nomor_telpon }}</p>
</body>

</html>
