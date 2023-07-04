<?php

namespace Database\Seeders;

use App\Models\AddCategory;
use App\Models\AddProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $addProducts = [
            [
                'categories_id' => 1,
                'name' => 'Shirt',
            ],
            [
                'categories_id' => 1,
                'name' => 'Shock',
            ],
            [
                'categories_id' => 2,
                'name' => 'Ring',
            ],
            [
                'categories_id' => 2,
                'name' => 'bracelets',
            ],
            [
                'categories_id' => 2,
                'name' => 'bangle',
            ],
            [
                'categories_id' => 3,
                'name' => 'Iphone',
            ],
            [
                'categories_id' => 3,
                'name' => 'Sumsung',
            ],
            [
                'categories_id' => 3,
                'name' => 'Nokia',
            ],
            // Add more products data here
        ];

        AddProduct::insert($addProducts);
    }
}
