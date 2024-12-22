<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ربط المطاعم بالأنواع
        $restaurant1 = Restaurant::where('name', 'Fast_Food')->first();
        $restaurant1->categories()->attach([1, 2]); // Fast Food, Cafe

        $restaurant2 = Restaurant::where('name', 'Cafe')->first();
        $restaurant2->categories()->attach([2]); // Cafe

        $restaurant3 = Restaurant::where('name', 'The Luxury Table')->first();
        $restaurant3->categories()->attach([3]); // Fine Dining
    }
}
