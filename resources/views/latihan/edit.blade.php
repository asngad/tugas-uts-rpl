<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Latihan</title>
</head>
<body>
    <div class="container">
        <h1>Edit Latihan</h1>

        <form action="/latihans/{{ $latihan->latihan_id }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nama_latihan">Nama Latihan:</label>
                <input type="text" id="nama_latihan" name="nama_latihan" value="{{ $latihan->nama_latihan }}" required>
            </div>

            <div>
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" required>{{ $latihan->deskripsi }}</textarea>
            </div>

            <div>
                <label for="durasi">Durasi:</label>
                <input type="text" id="durasi" name="durasi" value="{{ $latihan->durasi }}" required>
            </div>

            <div>
                <label for="jenis">Jenis:</label>
                <select id="jenis" name="jenis" required>
                    <option value="pemanasan" {{ $latihan->jenis == 'pemanasan' ? 'selected' : '' }}>Pemanasan</option>
                    <option value="peregangan" {{ $latihan->jenis == 'peregangan' ? 'selected' : '' }}>Peregangan</option>
                    <option value="kekuatan" {{ $latihan->jenis == 'kekuatan' ? 'selected' : '' }}>Kekuatan</option>
                    <option value="kardio" {{ $latihan->jenis == 'kardio' ? 'selected' : '' }}>Kardio</option>
                </select>
            </div>

            <button type="submit">Simpan</button>
        </form>
        
        <a href="{{ url('/') }}">Kembali</a>
    </div>
</body>
</html>
