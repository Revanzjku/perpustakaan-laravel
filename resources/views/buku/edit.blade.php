@extends('layouts.app')
@section('title', 'Edit Data Buku')
@section('content')
<h2>Perbarui Data Buku</h2>
<form action="{{route('buku.update', $perpustakaan->id)}}" method="post" id="bukuForm" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="cover">Cover Buku :</label>
        <input type="file" name="cover" id="cover" class="form-control">
        @error('cover')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        @if($perpustakaan->cover)
            <img src="{{ asset('images/'. $perpustakaan->cover) }}" alt="Gambar Buku" width="50">
        @else
            <img src="{{ asset('images/no-image.jpg') }}" alt="No Image" width="50">
        @endif
    </div>
    <div class="form-group">
        <label for="judul">Judul Buku :</label>
        <input type="text" name="judul_buku" id="judul" class="form-control" value="{{ old('judul_buku', $perpustakaan->judul_buku) }}">
        @error('judul_buku')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang Buku :</label>
        <input type="text" name="pengarang_buku" id="pengarang" class="form-control" value="{{ old('pengarang_buku', $perpustakaan->pengarang_buku) }}">
        @error('pengarang_buku')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit Buku :</label>
        <input type="text" name="penerbit_buku" id="penerbit" class="form-control" value="{{ old('penerbit_buku', $perpustakaan->penerbit_buku) }}">
        @error('penerbit_buku')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit Buku :</label>
        <input type="number" name="tahun_terbit_buku" id="tahun_terbit" class="form-control" value="{{ old('tahun_terbit_buku', $perpustakaan->tahun_terbit_buku) }}">
        @error('tahun_terbit_buku')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="stok">Stok Buku :</label>
        <input type="number" name="stok_buku" id="stok" class="form-control" value="{{ old('stok_buku', $perpustakaan->stok_buku) }}">
        @error('stok_buku')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="kategori">Pilih Kategori</label>
        <select name="id_kategori" id="kategori" class="form-control">
            <option value="">Pilih Kategori</option>
            @foreach($kategori as $nama)
                <option value="{{$nama->id}}" {{ old('id_kategori', $perpustakaan->id_kategori) == $nama->id ? 'selected' : '' }}>{{$nama->nama_kategori}}</option>
            @endforeach
        </select>
        @error('id_kategori')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection