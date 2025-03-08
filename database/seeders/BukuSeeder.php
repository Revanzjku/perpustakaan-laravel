<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Buku::create([
            'judul_buku' => 'Naruto',
            'pengarang_buku' => 'Masashi Kishimoto',
            'penerbit_buku' => 'Shueisha',
            'tahun_terbit_buku' => 1997,
            'stok_buku' => 20,
            'id_kategori' => 1
        ]);
    }
}
