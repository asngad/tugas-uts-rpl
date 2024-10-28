<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Latihan</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Latihan</h1>

        <form action="/latihan" method="POST">
            @csrf

            <div>
                <label for="nama_latihan">Nama Latihan:</label>
                <input type="text" id="nama_latihan" name="nama_latihan" required>
            </div>

            <div>
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" required></textarea>
            </div>

            <div>
                <label for="durasi">Durasi:</label>
                <input type="text" id="durasi" name="durasi" required>
            </div>

            <div>
                <label for="jenis">Jenis:</label>
                <select id="jenis" name="jenis" required>
                    <option value="pemanasan">Pemanasan</option>
                    <option value="peregangan">Peregangan</option>
                    <option value="kekuatan">Kekuatan</option>
                    <option value="kardio">Kardio</option>
                </select>
            </div>

            <button type="submit">Simpan</button>
        </form>

        <a href="{{ url('/') }}">Kembali</a>
    </div>
</body>
</html>
