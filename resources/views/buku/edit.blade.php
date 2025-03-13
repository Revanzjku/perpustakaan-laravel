@extends('layouts.app')
@section('title', 'Edit Data Buku')
@section('content')
<h2>Perbarui Data Buku</h2>
<form action="{{route('buku.update', $perpustakaan->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="judul">Judul Buku :</label>
        <input type="text" name="judul_buku" id="judul" class="form-control" value="{{$perpustakaan->judul_buku}}">
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang Buku :</label>
        <input type="text" name="pengarang_buku" id="pengarang" class="form-control" value="{{$perpustakaan->pengarang_buku}}">
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit Buku :</label>
        <input type="text" name="penerbit_buku" id="penerbit" class="form-control" value="{{$perpustakaan->penerbit_buku}}">
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit Buku :</label>
        <input type="number" name="tahun_terbit_buku" id="tahun_terbit" class="form-control" value="{{$perpustakaan->tahun_terbit_buku}}">
    </div>
    <div class="form-group">
        <label for="stok">Stok Buku :</label>
        <input type="number" name="stok_buku" id="stok" class="form-control" value="{{$perpustakaan->stok_buku}}">
    </div>
    <div class="form-group">
        <label for="kategori">Pilih Kategori</label>
        <select name="id_kategori" id="kategori" class="form-control">
            <option value="Kosong">Pilih Kategori</option>
            @foreach($kategori as $nama)
                <option value="{{$nama->id}}" {{$perpustakaan->id_kategori == $nama->id ? 'selected' : ''}}>{{$nama->nama_kategori}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection