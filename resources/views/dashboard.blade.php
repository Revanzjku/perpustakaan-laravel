@extends('layouts.app')
@section('title', 'Dashboard Perpustakaan')
@section('content')
<h2>Dashboard Admin</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
            <div class="card-header">Total Buku</div>
            <div class="card-body">
                <h5 class="card-title">150 Buku</h5>
                <p class="card-text">Jumlah buku yang tersedia di perpustakaan.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-success mb-3">
            <div class="card-header">Total Kategori</div>
            <div class="card-body">
                <h5 class="card-title">10 Kategori</h5>
                <p class="card-text">Jumlah kategori buku yang tersedia.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-warning mb-3">
            <div class="card-header">Total Stok</div>
            <div class="card-body">
                <h5 class="card-title">500 Stok</h5>
                <p class="card-text">Total stok buku yang tersedia.</p>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Aktivitas Terbaru</h5>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">Buku baru "Belajar Pemrograman" telah ditambahkan.</li>
                    <li class="list-group-item">Kategori "Teknologi" telah diperbarui.</li>
                    <li class="list-group-item">Stok buku "Matematika Dasar" telah ditambah.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection