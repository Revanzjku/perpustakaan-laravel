<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $table = 'buku';
    protected $fillable = ['judul_buku', 'pengarang_buku', 'penerbit_buku', 'tahun_terbit_buku', 'stok_buku', 'id_kategori'];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }
}
