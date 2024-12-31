<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name_ar' => 'مشروبات باردة', //1
                'name_en' => 'Cold Drinks',
            ],
            [
                'name_ar' => 'ميلك شيك', //2
                'name_en' => 'Milkshake',
            ],
            [
                'name_ar' => 'لاتيه دايت ساخن', //3
                'name_en' => 'Hot Diet Latte',
            ],
            [
                'name_ar'=>'آيس تي',  //4
                'name_en'=>'Ice Tea',
            ],
            [
                'name_ar' => 'العصائر',  //5
                'name_en' => 'Juices',
            ],
            [
                'name_ar' => 'كوكتيلات العصائر',  //6
                'name_en' => 'Juice Cocktails',
            ],
            [
                'name_ar' => 'كوكتيلات الحليب 1 لتر',  //7
                'name_en' => '1 Liter Milk Cocktails',
            ],
            [
                'name_ar' => 'آيس لاتيه',  //8
                'name_en' => 'Iced Latte',
            ],
            [
                'name_ar'=>'فراب',  // 9
                'name_en'=>'Soft Drinks',
            ],
            [
                'name_ar'=>'كابتشينو مثلج', //10
                'name_en'=>'Iced Cappuccino',
            ],
            [
                'name_ar' => 'تريسز شيك', // 11
                'name_en' => 'Tres Leches Shake',
            ],
            [
                'name_ar' => 'كنافة', //12
                'name_en' => 'Kunafa',
            ],
            [
                'name_ar' => 'معمول', // 13
                'name_en' => 'Maamoul',
            ],
            [
                'name_ar' => 'حلو',  //14
                'name_en' => 'Sweets',
            ],
            [
                'name_ar' => 'بوظة',  //15
                'name_en' => 'Ice Cream',
            ],
            [
                'name_ar' => 'براونيز',  //16
                'name_en' => 'Brownies',
            ],
            [
                'name_ar' => 'باتيسيري',  //17
                'name_en' => 'Patisserie',
            ],
            [
                'name_ar' => 'قطعتين',  //18
                'name_en' => 'Two Pieces',
            ],
            [
                'name_ar' => 'دزينة', //19
                'name_en' => 'Dozen',
            ],
            [
                'name_ar' => 'كيك', //20
                'name_en' => 'Cake',
            ],
            [
                'name_ar' => 'مافن', //21
                'name_en' => 'Muffin',
            ],
            [
                'name_ar' => 'سينامون', //22
                'name_en' => 'Cinnamon',
            ],
            [
                'name_ar' => 'كيك قطع', //23
                'name_en' => 'Cake Slices',
            ],
            [
                'name_ar' => 'قوالب كيك', //24
                'name_en' => 'Cake Molds',
            ],
            [
                'name_ar' => 'سواريه وبتيفور', //25
                'name_en' => 'Soiree & Petitfour',
            ],
            [
                'name_ar' => 'فطور', //26
                'name_en' => 'Breakfast',
            ],
            [
                'name_ar' => 'ساندويش', //27
                'name_en' => 'Sandwich',
            ],
            [
                'name_ar' => 'وجبات', //28
                'name_en' => 'Meals',
            ],
            [
                'name_ar' => 'مقبلات ساخنة', //29
                'name_en' => 'Hot Appetizers',
            ],
            [
                'name_ar' => 'مقبلات باردة', //30
                'name_en' => 'Cold Appetizers',
            ],
            [
                'name_ar' => 'سلطات', //31
                'name_en' => 'Salads',
            ],
            [
                'name_ar' => 'صوص', //32
                'name_en' => 'Sauce',
            ],
            [
                'name_ar' => 'باستا', //33
                'name_en' => 'Pasta',
            ],
            [
                'name_ar' => 'شوربات', //34
                'name_en' => 'Soups',
            ],
            [
                'name_ar' => 'من الفرن', //35
                'name_en' => 'From Oven',
            ],
            [
                'name_ar' => 'معجنات', //36
                'name_en' => 'Pastries',
            ],
            [
                'name_ar' => 'بيتزا شخصي', //37
                'name_en' => 'Personal Pizza',
            ],
            [
                'name_ar' => ' حجم وسط', //38
                'name_en' => 'Medium ',
            ],
            [
                'name_ar' => ' حجم عائلي', //39
                'name_en' => 'Family Size ',
            ],
            [
                'name_ar' => 'فطور صحي', // 40
                'name_en' => 'Healthy Breakfast',
            ],
            [
                'name_ar' => 'سلطة صحية',  //41
                'name_en' => 'Healthy Salad',
            ],
            [
                'name_ar' => 'ساندويتش صحي', // 42
                'name_en' => 'Healthy Sandwich'
            ],
            [
                'name_ar'=>'بيتزا', //43
                'name_en'=>'Pizza',
            ]
        ];
        foreach ($categories as $category) {
            DB::table('category_foods')->insert([$category]);
 }
    }
}
