<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        $rooms = [
            ['name' => 'Ruang H5', 'capacity' => 150, 'status' => 'available'],
            ['name' => 'Ruang H17', 'capacity' => 80, 'status' => 'available'],
            ['name' => 'Ruang H18', 'capacity' => 40, 'status' => 'available'],
            ['name' => 'Ruang H20', 'capacity' => 50, 'status' => 'in use'],
            ['name' => 'Ruang Mektan 3.1', 'capacity' => 100, 'status' => 'maintenance'],
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}