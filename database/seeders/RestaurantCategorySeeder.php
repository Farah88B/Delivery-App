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
        $restaurant1 = Restaurant::where('name_en', 'Omayya')->first();
        $restaurant2 = Restaurant::where('name_en', 'Shekerji')->first();

        $categoryFastFood = Category::where('name_en', 'Fast Food')->first();
        $categoryDrinks = Category::where('name_en', 'Drinks')->first();
        $categoryFineDining = Category::where('name_en', 'Fine Dining')->first();

        // إدخال البيانات في الجدول الوسيط
        DB::table('restaurant_category')->insert([
            ['restaurant_id' => $restaurant1->id, 'category_id' => $categoryFastFood->id],
            ['restaurant_id' => $restaurant1->id, 'category_id' => $categoryDrinks->id],
            ['restaurant_id' => $restaurant2->id, 'category_id' => $categoryDrinks->id],
            ['restaurant_id' => $restaurant2->id, 'category_id' => $categoryFineDining->id],
        ]);
    }
}
