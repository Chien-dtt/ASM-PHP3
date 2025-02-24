<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [];
        for ($i = 1; $i <= 10; $i++) { 
            $products[] = [
            'name' => 'Laptop Dell',
            'description' => 'Laptop Dell cao cấp',
            'price' => 15000000,
            'image' => 'laptop.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            ];
        }

        DB::table('products')->insert($products);

    }
}
