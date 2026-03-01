<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('products')->truncate();

        $products = [
            [
                'id'          => 1,
                'category_id' => 1,
                'name'        => 'Nasi Goreng Spesial',
                'price'       => 25000,
            ],
            [
                'id'          => 2,
                'category_id' => 1,
                'name'        => 'Mie Goreng Jawa',
                'price'       => 20000,
            ],
            [
                'id'          => 3,
                'category_id' => 2,
                'name'        => 'Es Teh Manis',
                'price'       => 5000,
            ],
            [
                'id'          => 4,
                'category_id' => 2,
                'name'        => 'Kopi Susu Aren',
                'price'       => 15000,
            ],
            [
                'id'          => 5,
                'category_id' => 3,
                'name'        => 'Kentang Goreng',
                'price'       => 12000,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        Schema::enableForeignKeyConstraints();
    }
}



