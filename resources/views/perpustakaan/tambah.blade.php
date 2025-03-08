<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h2>Tambah Buku</h2>

    <form action="/perpustakaan/tambah/store" method="post">
        @csrf
        <label for="judul">Judul Buku :</label>
        <input type="text" name="judul_buku" id="judul">
        <label for="pengarang">Pengarang Buku :</label>
        <input type="text" name="pengarang_buku" id="pengarang">
        <label for="penerbit">Penerbit Buku :</label>
        <input type="text" name="penerbit_buku" id="penerbit">
        <label for="tahun_terbit">Tahun Terbit Buku :</label>
        <input type="number" name="tahun_terbit_buku" id="tahun_terbit">
        <label for="stok">Stok Buku :</label>
        <input type="number" name="stok_buku" id="stok">
        <label for="kategori">Pilih Kategori</label>
        <select name="id_kategori" id="kategori">
            @foreach($kategori as $nama)
                <option value="{{$nama->id}}">{{$nama->nama_kategori}}</option>
            @endforeach
        </select>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>