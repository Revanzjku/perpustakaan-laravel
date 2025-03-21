@extends('layouts.app')
@section('title', 'Edit Data Kategori')
@section('content')
<h2>Perbarui Kategori</h2>
<form action="{{route('kategori.update', $kategori->id)}}" method="post" id="kategoriForm">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="kategori">Nama Kategori :</label>
        <input type="text" name="nama_kategori" id="kategori" class="form-control" value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
        @error('nama_kategori')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi Kategori :</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5">{{ old('deskripsi', $kategori->deskripsi) }}</textarea>
        @error('deskripsi')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection