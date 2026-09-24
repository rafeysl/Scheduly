<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        Booking::create([
            'user_id' => 2, //Mahasiswa1
            'room_id' => 1, //Ruang H5
            'subject' => 'Internet of Things (IoT)',
            'start_time' => '2026-09-28 13:00:00',
            'end_time' => '2026-09-28 15:10:00',
            'purpose' => 'Kelas Pengganti',
            'status' => 'pending',
        ]);
    }
}