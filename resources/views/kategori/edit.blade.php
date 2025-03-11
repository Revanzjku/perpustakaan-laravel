@extends('layouts.app')
@section('title', 'Edit Data Kategori')
@section('content')
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
@endsection