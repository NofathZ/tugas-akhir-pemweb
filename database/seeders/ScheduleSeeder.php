<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create(['id_mentor' => 2, 'id_mentee' => 3]);
        Schedule::create(['id_mentor' => 2, 'id_mentee' => 4]);
    }
}
