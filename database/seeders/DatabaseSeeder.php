<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin'), 
        ]);
        \App\Models\Petugas::factory()->create([
            'Nama' => 'HERLAN RUSDIANTO', 
        ]);
        \App\Models\Petugas::factory()->create([
            'Nama' => 'ABIDIN', 
        ]);
        \App\Models\Petugas::factory()->create([
            'Nama' => 'DENA NUGRAHA', 
        ]);
        \App\Models\Petugas::factory()->create([
            'Nama' => 'RIZKY ERIZALLY NOOR', 
        ]);
        \App\Models\Petugas::factory()->create([
            'Nama' => 'WISNU WIJAYA', 
        ]);

        
    }
}
