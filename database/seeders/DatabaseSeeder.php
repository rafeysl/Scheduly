<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Urutan ini sangat penting agar tidak ada error Foreign Key
        $this->call([
            UserSeeder::class,
            RoomSeeder::class,
            ScheduleSeeder::class,
            BookingSeeder::class,
        ]);
    }
}