<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = ['biografi', 'komik', 'novel', 'sejarah', 'religi'];

        foreach ($kategori as $value) {
            Kategori::create([
                'name' => $value,
                'slug' => Str::slug('$value')
            ]);
        }


    }
}
