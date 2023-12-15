<!DOCTYPE html>
<html>
<head>
    <title>Form Pendataan Penduduk</title>
</head>
<body>
    <h1>Form Pendataan Penduduk</h1>
    <form action="{{route('store')}}" method="POST">
        @csrf
        <p>
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik" required>
        </p>
        <p>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </p>
        <p>
            <label for="provinsi">Provinsi:</label>
            <input type="text" id="provinsi" name="provinsi" required>
        </p>
        <p>
            <label for="kota">Kota:</label>
            <input type="text" id="kota" name="kota" required>
        </p>
        <p>
            <label for="nomor_telpon">Nomor Telpon:</label>
            <input type="text" id="nomor_telpon" name="nomor_telpon" required>
        </p>
        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>
</body>
</html>
