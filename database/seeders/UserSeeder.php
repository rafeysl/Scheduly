<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@scheduly.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Mahasiswa1',
            'email' => 'Mahasiswa1@scheduly.com',
            'password' => bcrypt('mhs1'),
            'role' => 'user',
        ]);
    }
}