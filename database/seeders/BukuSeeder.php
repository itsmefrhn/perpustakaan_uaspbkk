<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Buku::create([
            'judul' => 'bintang',
            'slug' => Str::slug('bintang'),
            'sampul' => 'bintangcover.jpg',
            'penulis' => 'tere liye',
            'penerbit_id' => 1,
            'kategori_id' => 4,
            'rak_id' => 1,
            'stok' => 5,
        ]);

        Buku::create([
            'judul' => 'bulan',
            'slug' => Str::slug('bulan'),
            'sampul' => 'bulancover.jpeg',
            'penulis' => 'tere liye',
            'penerbit_id' => 1,
            'kategori_id' => 4,
            'rak_id' => 1,
            'stok' => 5,
        ]);
    }
}
