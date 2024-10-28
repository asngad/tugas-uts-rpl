<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Latihan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Latihan</h1>

        <a href="{{ url('/latihan/create') }}" class="btn">Tambah Latihan</a>

        <table>
            <thead>
                <tr>
                    <th>Nama Latihan</th>
                    <th>Deskripsi</th>
                    <th>Durasi</th>
                    <th>Jenis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($latihans as $latihan)
                    <tr>
                        <td>{{ $latihan->nama_latihan }}</td>
                        <td>{{ $latihan->deskripsi }}</td>
                        <td>{{ $latihan->durasi }}</td>
                        <td>{{ $latihan->jenis }}</td>
                        <td>
                            <a href="/latihan/{{ $latihan->latihan_id }}/edit">Edit</a>
                            <form action="/latihan/{{ $latihan->latihan_id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
