@extends('layouts.app')
@section('title', 'Tambah Kategori')
@section('content')
<h2>Tambah Kategori</h2>
<form action="/kategori/tambah/store" method="post">
    @csrf
    <div class="form-group">
        <label for="kategori">Nama Kategori :</label>
        <input type="text" name="nama_kategori" id="kategori" class="form-control">
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi Kategori :</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection