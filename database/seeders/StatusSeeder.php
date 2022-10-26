<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::insert([
            ['status' => 'Active'],
            ['status' => 'Inactive'],
            ['status' => 'Pending'],
            ['status' => 'Approved'],
            ['status' => 'Cancelled'],
            ['status' => 'Sold'],
            ['status' => 'Re-post'],
            ['status' => 'For Payment'],
            ['status' => 'Paid'],
            ['status' => 'Unpaid'],
            ['status' => 'For Posting'],
            ['status' => 'Posted'],
            ['status' => 'Yes'],
            ['status' => 'No'],
            ['status' => 'For Visit'],
            ['status' => 'For Refurnish'],
            ['status' => 'Moving'],
            ['status' => 'Occupied'],
            ['status' => 'Not Occupied'],
        ]);
    }
}
