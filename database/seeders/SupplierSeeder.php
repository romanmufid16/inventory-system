<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'TechSupplier Inc.',
                'contact_person' => 'John Doe',
                'phone_number' => '123-456-7890',
                'email' => 'contact@techsupplier.com',
                'address' => '123 Tech Street, Silicon Valley, CA'
            ],
            [
                'name' => 'Furniture World',
                'contact_person' => 'Jane Smith',
                'phone_number' => '098-765-4321',
                'email' => 'info@furnitureworld.com',
                'address' => '456 Home Ave, Austin, TX'
            ],
        ]);
    }
}
