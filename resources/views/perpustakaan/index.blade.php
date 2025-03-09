<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku Tersedia</title>
</head>
<body>
    <a href="/perpustakaan/tambah">Tambah Buku</a>

    <h2>List Buku</h2>

    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Stok Buku</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($perpustakaan as $buku)
                <tr>
                    <td>{{$buku->judul_buku}}</td>
                    <td>{{$buku->pengarang_buku}}</td>
                    <td>{{$buku->penerbit_buku}}</td>
                    <td>{{$buku->tahun_terbit_buku}}</td>
                    <td>{{$buku->stok_buku}}</td>
                    <td>{{$buku->kategori->nama_kategori}}</td>
                    <td>
                        <a href="/perpustakaan/edit/{{$buku->id}}">Edit Buku</a>
                        <a href="/perpustakaan/hapus/{{$buku->id}}" onclick="return confirm('Yakin?')">Hapus Buku</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>