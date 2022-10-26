<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CivilStatus;

class CivilStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CivilStatus::insert([
            ['civil_status' => 'Single'],
            ['civil_status' => 'Married'],
            ['civil_status' => 'Widow'],
        ]);
    }
}
