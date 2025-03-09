<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Buku</title>
</head>
<body>
    <a href="/kategori/tambah">Tambah Kategori</a>

    <h2>Kategori</h2>

    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>No. Urut</th>
                <th>Nama Kategori</th>
                <th>Dekripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $list)
                <tr>
                    <td>{{$kategori->firstItem() + $loop->index}}</td>
                    <td>{{$list->nama_kategori}}</td>
                    <td>{{$list->deskripsi}}</td>
                    <td>
                        <a href="/kategori/edit/{{$list->id}}">Edit Kategori</a>
                        <a href="/kategori/hapus/{{$list->id}}" onclick="return confirm('Yakin?')">Hapus Kategori</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$kategori->links()}}
</body>
</html>