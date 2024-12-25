<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $foods =[
            [
                'name_en'=>'Kressbi',
                'name_ar'=>'كريسبي'
            ],
            [
                'name_en'=>'Burger',
                'name_ar'=>'برغر'
            ],
            [
                'name_en'=>'Ice Cream',
                'name_ar'=>'آيس كريم'
            ],
            [
                'name_en'=>'Coffee',
                'name_ar'=>'قهوة'
            ]
        ];
     foreach($foods as $food){
        DB::table('foods')->insert($food);
     }
    }
}
