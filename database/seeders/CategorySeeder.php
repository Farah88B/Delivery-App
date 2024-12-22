<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id'=> 1 ,'name' => 'Fast Food', 'description' => 'Quick and affordable meals'
                ,'image'=>'public/images/categories/fastfood.jpg'],
            ['id'=> 2, 'name' => 'Cafe', 'description' => 'Coffee and snacks'
            ,'image'=>'public/images/categories/cafe.jpg'],
            ['id'=>3 ,'name' => 'Fine Dining', 'description' => 'Luxury and elegant meals',
                'image'=>'public/images/categories/finedining.jpg'],
        ]);
    }
}
