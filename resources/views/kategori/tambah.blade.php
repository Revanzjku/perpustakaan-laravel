<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h2>Tambah Kategori</h2>

    <form action="/kategori/tambah/store" method="post">
        @csrf
        <label for="kategori">Nama Kategori :</label>
        <input type="text" name="nama_kategori" id="kategori">
        <label for="deskripsi">Deskripsi Kategori :</label>
        <textarea name="deskripsi" id="deskripsi" rows="10" cols="20"></textarea>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>