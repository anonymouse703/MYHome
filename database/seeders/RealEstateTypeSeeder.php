<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RealEstateType;

class RealEstateTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RealEstateType::insert([
            ['real_estate_type' => 'Housing Lot'],
            ['real_estate_type' => 'House'],
            ['real_estate_type' => 'Apartment'],
            ['real_estate_type' => 'Condominium'],
            ['real_estate_type' => 'Commercial Building'],
            ['real_estate_type' => 'Commercial Lot'],
        ]);
    }
}
