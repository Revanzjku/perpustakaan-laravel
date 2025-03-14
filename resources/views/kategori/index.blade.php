@extends('layouts.app')
@section('title', 'Kelola Kategori')
<style>
    thead tr {
        pointer-events: none;
    }
</style>
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="text-primary">Kelola Kategori</h2>
    <a href="{{route('kategori.create')}}" class="btn btn-primary">Tambah Kategori</a>
</div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="table-responsive">
    <table class="table table-bordered border rounded table-hover shadow-sm">
        <thead class="table-dark text-center">
            <tr>
                <th>No. Urut</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($kategori as $list)
                <tr>
                    <td>{{$kategori->firstItem() + $loop->index}}</td>
                    <td>{{$list->nama_kategori}}</td>
                    <td class="text-truncate" style="max-width: 300px;">{{$list->deskripsi}}</td>
                    <td>
                        <a href="{{route('kategori.edit', $list->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{route('kategori.destroy', $list->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center mt-3">
    {{$kategori->links('pagination::bootstrap-5')}}
</div>
@endsection