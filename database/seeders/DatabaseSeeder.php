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
<<<<<<< HEAD
        \App\Models\User::create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin'), 
        ]);
=======
        User::create([
            
            'name' => 'admin',
            'username' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('admin'), 

        ]);

        User::create([
            'name' => 'user',
            'username' => 'user',
            'role' => 'user',
            'password' => bcrypt('user'), 
        ]);

>>>>>>> 38dd40ec4813f0e29cd7572812b3f23c9476c033
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
