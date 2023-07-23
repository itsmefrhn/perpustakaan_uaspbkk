<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Ayaqu33n'),
            'email_verified_at' => now()
        ])->assignRole('admin');


        User::create([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('Ayaqu33n'),
            'email_verified_at' => now()
        ])->assignRole('petugas');


        User::create([
            'name' => 'peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('Ayaqu33n'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');
    }
}