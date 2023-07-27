<?php

namespace Database\Seeders;

use App\Models\DetailPeminjaman;
use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //data 1
        Peminjaman::create([
            'kode_pinjam' => random_int(100000000, 999999999),
            'peminjam_id' => 3,
            'petugas_pinjam' => 1,
            'petugas_kembali' => 1,
            'status' => 3,
            'denda' => 0,
            'tanngal_pinjam' => now()->subDays(20),
            'tanngal_kembali' => now()->subDays(11)
        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 1,
            'buku_id' => 1,

        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 1,
            'buku_id' => 2,
            
        ]);

        //data 2
        Peminjaman::create([
            'kode_pinjam' => random_int(100000000, 999999999),
            'peminjam_id' => 3,
            'petugas_pinjam' => 2,
            'status' => 2,
            'tanngal_pinjam' => now(),
            'tanngal_kembali' => now()->addDays(10)
        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 2,
            'buku_id' => 1,

        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 2,
            'buku_id' => 2,
            
        ]);

        //data 3
        Peminjaman::create([
            'kode_pinjam' => random_int(100000000, 999999999),
            'peminjam_id' => 4,
            'status' => 1,
            'tanngal_pinjam' => now(10),
            'tanngal_kembali' => now()->addDays(20)
        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 3,
            'buku_id' => 1,

        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 3,
            'buku_id' => 2,
            
        ]);

        //data 4
        Peminjaman::create([
            'kode_pinjam' => random_int(100000000, 999999999),
            'peminjam_id' => 5,
            'status' => 0,
        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 4,
            'buku_id' => 1,

        ]);
    }
}
