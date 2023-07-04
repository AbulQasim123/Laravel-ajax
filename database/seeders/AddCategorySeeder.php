<?php

namespace Database\Seeders;

use App\Models\AddCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addCategory = [
            [
                'name' => 'Cloth',
            ],
            [
                'name' => 'Jwellery',
            ],
            [
                'name' => 'Mobile',
            ],
            // Add more category data here
        ];

        AddCategory::insert($addCategory);
    }
}
