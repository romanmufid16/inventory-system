<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Electronics', 'description' => 'Electronic devices and gadgets'],
            ['name' => 'Furniture', 'description' => 'Home and office furniture'],
            ['name' => 'Stationery', 'description' => 'Office supplies and stationery items'],
            ['name' => 'Clothing', 'description' => 'Apparel and accessories'],
        ]);
    }
}
