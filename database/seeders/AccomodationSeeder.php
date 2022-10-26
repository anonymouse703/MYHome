<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accomodation;

class AccomodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Accomodation::insert([
            ['accomodation' => 'Guard House'],
            ['accomodation' => 'Swimming Pool'],
            ['accomodation' => 'Basketball Court'],
            ['accomodation' => 'Chapel'],
            ['accomodation' => 'Play Ground'],
            ['accomodation' => 'Town House'],
        ]);
    }
}
