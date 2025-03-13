@extends('layouts.app')
@section('title', 'Tambah Buku')
@section('content')
<h2>Tambah Buku</h2>
<form action="{{route('buku.store')}}" method="post">
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
@endsection