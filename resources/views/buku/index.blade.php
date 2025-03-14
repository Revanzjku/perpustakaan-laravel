@extends('layouts.app')
@section('title', 'Kelola Buku')
<style>
    thead tr {
        pointer-events: none;
    }
</style>
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="text-primary">Daftar Buku</h2>
    <a href="{{route('buku.create')}}" class="btn btn-primary">Tambah Buku</a>
</div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="table-responsive">
    <table class="table table-striped table-hover border rounded shadow-sm">
        <thead class="table-dark text-center">
            <tr>
                <th>No. Urut</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Stok Buku</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($perpustakaan as $buku)
                <tr>
                    <td>{{$perpustakaan->firstItem() + $loop->index}}</td>
                    <td>{{$buku->judul_buku}}</td>
                    <td>{{$buku->pengarang_buku}}</td>
                    <td>{{$buku->penerbit_buku}}</td>
                    <td>{{$buku->tahun_terbit_buku}}</td>
                    <td>{{$buku->stok_buku}}</td>
                    <td>{{$buku->kategori->nama_kategori}}</td>
                    <td>
                        <a href="{{route('buku.edit', $buku->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{route('buku.destroy', $buku->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center mt-3">
    {{$perpustakaan->links()}}
</div>
@endsection