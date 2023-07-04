<?php

namespace Database\Seeders;

use App\Models\AddOrder;
use App\Models\AddProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get some user IDs to use as foreign keys
        $productIds = AddProduct::pluck('id')->toArray();

        $addOrder = [
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            [
                'product_id' => $productIds[array_rand($productIds)]
            ],
            // Add more order data here
        ];

        AddOrder::insert($addOrder);
    }
}
