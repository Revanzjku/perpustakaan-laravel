<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="/perpustakaan">Kelola Buku</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/kategori">Kelola Kategori</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Perbarui Kategori</h2>
        <form action="/kategori/update/{{$kategori->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kategori">Nama Kategori :</label>
                <input type="text" name="nama_kategori" id="kategori" class="form-control" value="{{$kategori->nama_kategori}}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Kategori :</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5">{{$kategori->deskripsi}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>