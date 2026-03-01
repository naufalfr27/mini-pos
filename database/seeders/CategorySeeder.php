<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('categories')->truncate();

        $categories = [
            [
                'id'   => 1,
                'name' => 'Makanan Utama',
            ],
            [
                'id'   => 2,
                'name' => 'Minuman Dingin',
            ],
            [
                'id'   => 3,
                'name' => 'Snack / Camilan',
            ],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        Schema::enableForeignKeyConstraints();
    }
}
