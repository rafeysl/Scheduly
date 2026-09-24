<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        Schedule::create([
            'room_id' => 1,
            'day_of_week' => 'Senin',
            'start_time' => '13:00:00',
            'end_time' => '15:10:00',
            'subject' => 'Internet of Things (IoT)',
        ]);
        
    }
}