<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Admin Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/perpustakaan">Kelola Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kategori">Kelola Kategori</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Tambah Buku</h2>
        <form action="/perpustakaan/tambah/store" method="post">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Buku :</label>
                <input type="text" name="judul_buku" id="judul" class="form-control">
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang Buku :</label>
                <input type="text" name="pengarang_buku" id="pengarang" class="form-control">
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit Buku :</label>
                <input type="text" name="penerbit_buku" id="penerbit" class="form-control">
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit Buku :</label>
                <input type="number" name="tahun_terbit_buku" id="tahun_terbit" class="form-control">
            </div>
            <div class="form-group">
                <label for="stok">Stok Buku :</label>
                <input type="number" name="stok_buku" id="stok" class="form-control">
            </div>
            <div class="form-group">
                <label for="kategori">Pilih Kategori</label>
                <select name="id_kategori" id="kategori" class="form-control">
                    <option value="Tidak ada kategori">Pilih Kategori</option>
                    @foreach($kategori as $nama)
                        <option value="{{$nama->id}}">{{$nama->nama_kategori}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>