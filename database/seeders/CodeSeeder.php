<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Code;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Code::create(['id_code' => 'CODE1', 'nominal' => 500000, 'status' => 'Available']);
        Code::create(['id_code' => 'CODE2', 'nominal' => 500000, 'status' => 'Available']);
        Code::create(['id_code' => 'CODE3', 'nominal' => 500000, 'status' => 'Available']);
        Code::create(['id_code' => 'CODE4', 'nominal' => 500000, 'status' => 'Available']);
        Code::create(['id_code' => 'CODE5', 'nominal' => 500000, 'status' => 'Available']);
    }
}
