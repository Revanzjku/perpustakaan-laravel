<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $table = 'buku';
    protected $fillable = ['judul', 'pengarang', 'penerbit', 'tahun_terbit', 'stok'];

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }
}
