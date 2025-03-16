<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{
    use SoftDeletes;
    protected $table = 'buku';
    protected $fillable = ['cover', 'judul_buku', 'pengarang_buku', 'penerbit_buku', 'tahun_terbit_buku', 'stok_buku', 'id_kategori'];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }
}
