<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create(['name' =>'Matematika', 'degree' => 'SD']);
        Course::create(['name' =>'IPA', 'degree' => 'SD']);
        Course::create(['name' =>'IPS', 'degree' => 'SD']);
        Course::create(['name' =>'Bahasa Inggris', 'degree' => 'SD']);
        Course::create(['name' =>'Bahasa Indonesia', 'degree' => 'SD']);
        Course::create(['name' =>'Matematika', 'degree' => 'SMP']);
        Course::create(['name' =>'IPA', 'degree' => 'SMP']);
        Course::create(['name' =>'IPS', 'degree' => 'SMP']);
        Course::create(['name' =>'Bahasa Inggris', 'degree' => 'SMP']);
        Course::create(['name' =>'Bahasa Indonesia', 'degree' => 'SMP']);
        Course::create(['name' =>'Matematika', 'degree' => 'SMA']);
        Course::create(['name' =>'Fisika', 'degree' => 'SMA']);
        Course::create(['name' =>'Biologi', 'degree' => 'SMA']);
        Course::create(['name' =>'Kimia', 'degree' => 'SMA']);
        Course::create(['name' =>'Geografi', 'degree' => 'SMA']);
        Course::create(['name' =>'Sejarah', 'degree' => 'SMA']);
        Course::create(['name' =>'Sosiologi', 'degree' => 'SMA']);
        Course::create(['name' =>'Ekonomi', 'degree' => 'SMA']);
        Course::create(['name' =>'Bahasa Inggris', 'degree' => 'SMA']);
        Course::create(['name' =>'Bahasa Indonesia', 'degree' => 'SMA']);
    }
}
