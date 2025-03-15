@extends('layouts.app')
@section('title', 'Buku Dihapus')
<style>
    thead tr {
        pointer-events: none;
    }
</style>
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="text-primary">Buku Dihapus</h2>
    <a href="{{route('buku.index')}}" class="btn btn-primary">Kembali ke Daftar Buku</a>
</div>
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
                        <form action="{{route('buku.forceDelete', $buku->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus secara permanen?')">Hapus Permanen</button>
                        </form>
                        <a href="{{route('buku.restore', $buku->id)}}" class="btn btn-success btn-sm">Restore</a>
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