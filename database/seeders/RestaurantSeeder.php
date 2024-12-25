<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [

                'name_ar' => 'امبيريو',
                'name_en'=>'ُEmbirio',
                'description_ar'=>'ايلسنايبهتلهاخلب',
                'description_en'=>'shgbvfikrfuhnjf',
                'address_ar'=>'',
                'address_en'=>'',
                'phone'=>'',
                'email'=>'',
                'open_time'=>'',
                'close_time'=>'',
                'image'=>'',

            ],
            [
                'name_ar' => 'امية',
                'name_en'=>'Omayya',
                'description_ar'=>'يالابهختمهعل',
                'description_en'=>'kghguojngiu',
                'address_ar'=>'',
                'address_en'=>'',
                'phone'=>'',
                'email'=>'',
                'open_time'=>'',
                'close_time'=>'',
                'image'=>'',

            ],
            [
                'name_ar' => 'شكرجي',
                'name_en'=>'Shekerji',
                'description_ar'=>'تاثعخابقعنتىقبه',
                'description_en'=>'khnjrguhryh',
                'address_ar'=>'',
                'address_en'=>'',
                'phone'=>'',
                'email'=>'',
                'open_time'=>'',
                'close_time'=>'',
                'image'=>'',

            ]
        ];
        foreach ($restaurants as $restaurant) {
            Restaurant::create($restaurant);
        }
    }
}
