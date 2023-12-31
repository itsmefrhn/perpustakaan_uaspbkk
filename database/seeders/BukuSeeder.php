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
            'sampul' => 'buku/bintangcover.jpg',
            'penulis' => 'tere liye',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 2,
            'stok' => 5,
        ]);

        Buku::create([
            'judul' => 'bulan',
            'slug' => Str::slug('bulan'),
            'sampul' => 'buku/bulancover.jpeg',
            'penulis' => 'tere liye',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 3,
            'stok' => 5,
        ]);
    }
}
