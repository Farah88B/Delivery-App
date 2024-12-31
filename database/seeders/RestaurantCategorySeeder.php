<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class RestaurantCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // جلب المطاعم والفئات
        $restaurant1 = Restaurant::where('name_en', 'Steam')->first();
        $restaurant2 = Restaurant::where('name_en', 'Ashati')->first();
        $restaurant3 = Restaurant::where('name_en', 'De-Caf')->first();
        $restaurant4 = Restaurant::where('name_en', 'Traces Café')->first();
        $restaurant5 = Restaurant::where('name_en', 'Adams')->first();
        $restaurant6 = Restaurant::where('name_en', 'Maamoul & Kunafa Al-Tayyib')->first();
        $restaurant7 = Restaurant::where('name_en', 'Omayya Class')->first();
        $restaurant8 = Restaurant::where('name_en', 'Hollywood Donuts')->first();
        $restaurant9 = Restaurant::where('name_en', 'Nash Bakery')->first();
        $restaurant10 = Restaurant::where('name_en', 'Louisa Moro')->first();
        $restaurant11 = Restaurant::where('name_en', 'Kalti Malti')->first();
        $restaurant12 = Restaurant::where('name_en', 'Sham Grill')->first();
        $restaurant13 = Restaurant::where('name_en', 'Celesta')->first();
        $restaurant14 = Restaurant::where('name_en', 'Steed')->first();
        $restaurant15 = Restaurant::where('name_en', 'Pit Stop')->first();
        $restaurant16 = Restaurant::where('name_en', 'Estabraq')->first();
        $restaurant17 = Restaurant::where('name_en', 'Bayt Al-Sharq')->first();
        $restaurant18 = Restaurant::where('name_en', 'Zain Al-Sham')->first();
        $restaurant19 = Restaurant::where('name_en', 'Al Loqma Al Tayeba')->first();
        $restaurant20 = Restaurant::where('name_en','Bab Touma Restaurant')->first();
        $restaurant21 = Restaurant::where('name_en','Pizza Hut')->first();
        $restaurant22 = Restaurant::where('name_en','Pida Bot Pastries')->first();
        $restaurant23 = Restaurant::where('name_en','Mr. Falafel')->first();
        $restaurant24 = Restaurant::where('name_en','Taste Full')->first();
        $restaurant25 = Restaurant::where('name_en','Diet House')->first();
        $restaurant26 = Restaurant::where('name_en','Caspresso')->first();
        $restaurant27 = Restaurant::where('name_en','Crave It')->first();
        $restaurant28 = Restaurant::where('name_en','Lorsin')->first();



        $categoryDrinks = Category::where('name_en', 'Drinks')->first();
        $categoryEasternFood = Category::where('name_en', 'Eastern Food')->first();
        $categoryFineDining = Category::where('name_en', 'Fine Dining')->first();
        $categoryBakery = Category::where('name_en', 'Bakery')->first();
        $categoryDesserts = Category::where('name_en', 'Desserts')->first();
        $categoryHealthyFood = Category::where('name_en', 'Healthy Food')->first();

        // إدخال البيانات في الجدول الوسيط
        DB::table('restaurant_category')->insert([
            ['restaurant_id' => $restaurant1->id, 'category_id' => $categoryDrinks->id],
            ['restaurant_id' => $restaurant2->id, 'category_id' => $categoryDrinks->id],
            ['restaurant_id' => $restaurant3->id, 'category_id' => $categoryDrinks->id],
            ['restaurant_id' => $restaurant4->id, 'category_id' => $categoryDrinks->id],
            ['restaurant_id' => $restaurant5->id, 'category_id' => $categoryDrinks->id],
            ['restaurant_id' => $restaurant6->id, 'category_id' => $categoryDesserts->id],
            ['restaurant_id' => $restaurant7->id, 'category_id' => $categoryDesserts->id],
            ['restaurant_id' => $restaurant8->id, 'category_id' => $categoryDesserts->id],
            ['restaurant_id' => $restaurant9->id, 'category_id' => $categoryDesserts->id],
            ['restaurant_id' => $restaurant10->id, 'category_id' => $categoryDesserts->id],
            ['restaurant_id' => $restaurant11->id, 'category_id' => $categoryFineDining->id],
            ['restaurant_id' => $restaurant12->id, 'category_id' => $categoryFineDining->id],
            ['restaurant_id' => $restaurant13->id, 'category_id' => $categoryFineDining->id],
            ['restaurant_id' => $restaurant14->id, 'category_id' => $categoryFineDining->id],
            ['restaurant_id' => $restaurant15->id, 'category_id' => $categoryFineDining->id],
            ['restaurant_id' => $restaurant16->id, 'category_id' => $categoryEasternFood->id],
            ['restaurant_id' => $restaurant17->id, 'category_id' => $categoryEasternFood->id],
            ['restaurant_id' => $restaurant18->id, 'category_id' => $categoryEasternFood->id],
            //////////
            ['restaurant_id' => $restaurant19->id, 'category_id' => $categoryBakery->id],
            ['restaurant_id' => $restaurant20->id, 'category_id' => $categoryBakery->id],            ['restaurant_id' => $restaurant16->id, 'category_id' => $categoryEasternFood->id],
            ['restaurant_id' => $restaurant21->id, 'category_id' => $categoryBakery->id],
            ['restaurant_id' => $restaurant22->id, 'category_id' => $categoryBakery->id],
            ['restaurant_id' => $restaurant23->id, 'category_id' => $categoryBakery->id],
            ///////
            ['restaurant_id' => $restaurant24->id, 'category_id' => $categoryHealthyFood->id],            ['restaurant_id' => $restaurant16->id, 'category_id' => $categoryEasternFood->id],
            ['restaurant_id' => $restaurant25->id, 'category_id' => $categoryHealthyFood->id],
            ['restaurant_id' => $restaurant26->id, 'category_id' => $categoryHealthyFood->id],
            ['restaurant_id' => $restaurant27->id, 'category_id' => $categoryHealthyFood->id],
            ['restaurant_id' => $restaurant28->id, 'category_id' => $categoryHealthyFood->id],

        ]);
    }
}
