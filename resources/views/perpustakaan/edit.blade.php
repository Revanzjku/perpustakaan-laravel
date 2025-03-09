<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h2>Perbarui Data Buku</h2>

    <form action="/perpustakaan/update/{{$perpustakaan->id}}" method="post">
        @csrf
        @method('PUT')
        <label for="judul">Judul Buku :</label>
        <input type="text" name="judul_buku" id="judul" value="{{$perpustakaan->judul_buku}}">
        <label for="pengarang">Pengarang Buku :</label>
        <input type="text" name="pengarang_buku" id="pengarang" value="{{$perpustakaan->pengarang_buku}}">
        <label for="penerbit">Penerbit Buku :</label>
        <input type="text" name="penerbit_buku" id="penerbit" value="{{$perpustakaan->penerbit_buku}}">
        <label for="tahun_terbit">Tahun Terbit Buku :</label>
        <input type="number" name="tahun_terbit_buku" id="tahun_terbit" value="{{$perpustakaan->tahun_terbit_buku}}">
        <label for="stok">Stok Buku :</label>
        <input type="number" name="stok_buku" id="stok" value="{{$perpustakaan->stok_buku}}">
        <label for="kategori">Pilih Kategori</label>
        <select name="id_kategori" id="kategori">
            <option value="Kosong">Pilih Kategori</option>
            @foreach($kategori as $nama)
                <option value="{{$nama->id}}" {{$perpustakaan->id_kategori == $nama->id ? 'selected' : ''}}>{{$nama->nama_kategori}}</option>
            @endforeach
        </select>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>