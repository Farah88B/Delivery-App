<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurant1 = Restaurant::where('name_en', 'Omayya')->first();
        $restaurant2 = Restaurant::where('name_en', 'ُEmbirio')->first();

        $food1 = Food::where('name_en','Kressbi')->first();
        $food2 = Food::where('name_en','Burger')->first();
        $food3 =Food::where('name_en','Ice Cream')->first();
        $food4= Food::where('name_en','Coffee')->first();

        DB::table('restaurant_food')->insert([
            ['restaurant_id' => $restaurant1->id, 'food_id' => $food3->id],
            ['restaurant_id' => $restaurant1->id, 'food_id' => $food4->id],
            ['restaurant_id' => $restaurant2->id, 'food_id' => $food1->id],
            ['restaurant_id' => $restaurant2->id, 'food_id' => $food2->id],
        ]);
    }
}
