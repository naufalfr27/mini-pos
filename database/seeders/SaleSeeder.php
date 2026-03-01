<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('sales')->truncate();

        $sales = [
            [
                'id'           => 1,
                'invoice_date' => '2026-03-01',
                'cashier_name' => 'Budi',
            ],
            [
                'id'           => 2,
                'invoice_date' => '2026-03-02',
                'cashier_name' => 'Siti',
            ],
            [
                'id'           => 3,
                'invoice_date' => '2026-03-05',
                'cashier_name' => 'Budi',
            ],

        ];

        foreach ($sales as $sale) {
            Sale::create($sale);
        }

        Schema::enableForeignKeyConstraints();
    }
}
