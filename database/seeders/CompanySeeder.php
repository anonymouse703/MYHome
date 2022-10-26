<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RealStateCompany;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RealStateCompany::insert([
            [
                'company_name' => 'Website Owner',
                'address' => 'Cloud Server',
                'contact_no' => '09123456789',
                'email' => 'owner@site.com',
                'status_id' => 1,
            ],
        ]);
    }
}

