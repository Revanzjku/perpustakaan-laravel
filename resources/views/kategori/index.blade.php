<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kategori</title>
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
                    <a class="nav-link" href="/dashboard">Dashboard</a>
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
        <h2>Kelola Kategori</h2>
        <a href="/kategori/tambah" class="btn btn-primary mb-3">Tambah Kategori</a>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No. Urut</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
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
                            <a href="/kategori/edit/{{$list->id}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/kategori/hapus/{{$list->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$kategori->links()}}
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>