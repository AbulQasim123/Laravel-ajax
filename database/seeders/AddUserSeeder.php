<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AddUser;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addUsers = [
            [
                'name' => 'Ram kumar',
                'email' => 'ram@example.com'
            ],
            [
                'name' => 'Raj Singh',
                'email' => 'raj@example.com'
            ],
            [
                'name' => 'Rohan Singh',
                'email' => 'rohan@example.com'
            ],
            // Add more user data here
        ];

        AddUser::insert($addUsers);
    }
}
