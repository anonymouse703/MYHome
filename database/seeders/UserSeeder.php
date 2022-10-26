<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(
            [
                'last_name' => 'Admin',
                'first_name' => 'Admin',
                'middle_name' => 'Admin',
                'gender_id' => 1,
                'civil_status_id' => 1,
                'address' => 'Philippines',
                'contact_no' => '09123456789',
                'email' => 'admin@gmail.com',
                'company_id' => 1,
                'status_id' => 1,
                'username' => 'admin',
                'password' => bcrypt('admin123'),
            ]);
    }
}
