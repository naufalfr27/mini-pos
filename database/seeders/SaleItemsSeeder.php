<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SaleItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('sale_items')->truncate();

        $saleItems = [
            [
                'sale_id'    => 1,
                'product_id' => 1,
                'quantity'   => 2,
                'subtotal'   => 50000,
            ],
            [
                'sale_id'    => 1,
                'product_id' => 3,
                'quantity'   => 2,
                'subtotal'   => 10000,
            ],
            [
                'sale_id'    => 2,
                'product_id' => 2,
                'quantity'   => 1,
                'subtotal'   => 20000,
            ],
            [
                'sale_id'    => 2,
                'product_id' => 5,
                'quantity'   => 1,
                'subtotal'   => 12000,
            ],
            [
                'sale_id'    => 2,
                'product_id' => 4,
                'quantity'   => 1,
                'subtotal'   => 15000,
            ],
            [
                'sale_id'    => 3,
                'product_id' => 1,
                'quantity'   => 3,
                'subtotal'   => 75000,
            ],
            [
                'sale_id'    => 3,
                'product_id' => 4,
                'quantity'   => 3,
                'subtotal'   => 45000,
            ],
        ];

        foreach ($saleItems as $item) {
            DB::table('sale_items')->insert([
                'sale_id'    => $item['sale_id'],
                'product_id' => $item['product_id'],
                'quantity'   => $item['quantity'],
                'subtotal'   => $item['subtotal'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}

