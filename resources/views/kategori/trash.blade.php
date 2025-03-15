@extends('layouts.app')
@section('title', 'Kategori Terhapus')
<style>
    thead tr {
        pointer-events: none;
    }
</style>
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="text-primary">Kategori Dihapus</h2>
    <a href="{{route('kategori.index')}}" class="btn btn-primary">Kembali</a>
</div>
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
                        <form action="{{route('kategori.forceDelete', $list->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus secara permanen?')">Hapus Permanen</button>
                        </form>
                        <a href="{{route('kategori.restore', $list->id)}}" class="btn btn-success btn-sm">Restore</a>
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
