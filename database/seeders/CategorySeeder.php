<?php

namespace Database\Seeders;

use App\Models\Category\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // تعريف المصفوفة
        $categories = [
            [
                'name_en' => 'Eastern Food',
                'name_ar' => 'أكل شرقي',
                'description_en' => 'Traditional and flavorful Eastern dishes.',
                'description_ar' => 'أطباق شرقية تقليدية ولذيذة.',
                'image' => 'public/images/categories/شرقي.png',
            ],
            [
                'name_en' => 'Drinks',
                'name_ar' => 'مشروبات',
                'description_en' => 'Hot and cold beverages, including coffee, tea, and juices.',
                'description_ar' => 'مشروبات ساخنة وباردة تشمل القهوة والشاي والعصائر.',
                'image' => 'public/images/categories/مشروبات.png',
            ],
            [
                'name_en' => 'Fine Dining',
                'name_ar' => 'أكل غربي',
                'description_en' => 'Luxury and elegant Western meals.',
                'description_ar' => 'وجبات غربية فاخرة وأنيقة.',
                'image' => 'public/images/categories/غربي.png',
            ],
            [
                'name_en' => 'Bakery',
                'name_ar' => 'مخبوزات',
                'description_en' => 'Freshly baked bread, pastries, and more.',
                'description_ar' => 'خبز ومعجنات طازجة والمزيد.',
                'image' => 'public/images/categories/مخبوزات.png',
            ],
            [
                'name_en' => 'Desserts',
                'name_ar' => 'حلويات',
                'description_en' => 'Sweet treats and desserts for every occasion.',
                'description_ar' => 'حلويات لذيذة تناسب كل المناسبات.',
                'image' => 'public/images/categories/حلويات.png',
            ],
            [
                'name_en' => 'Healthy Food',
                'name_ar' => 'أكل صحي',
                'description_en' => 'Nutritious and wholesome healthy meals.',
                'description_ar' => 'وجبات صحية ومغذية.',
                'image' => 'public/images/categories/صحي.png',
            ],
        ];

        // استخدام المصفوفة لإدخال البيانات
        foreach ($categories as $category) {
            Category::create($category);
        }
    }

}
