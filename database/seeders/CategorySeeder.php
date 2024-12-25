<?php

namespace Database\Seeders;

use App\Models\Category;
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
        // تعريف المصفوفة
        $categories = [
            [
                'name_en' => 'Fast Food',
                'name_ar'=>'وجبات سريعة',
                'description_en' => 'Quick and affordable meals',
                'description_ar'=>'وحبات سريعة ومطلوبة',
                'image' => 'public/images/categories/fastfood.jpg',
            ],
            [
                'name_en' => 'Drinks',
                'name_ar'=>'مشروبات',
                'description_en' => 'Drinks Hot & Colds',
                'description_ar'=>'مشروبات باردة وساخنة',
                'image' => 'public/images/categories/cafe.jpg',
            ],
            [
                'name_en' => 'Fine Dining',
                'name_ar'=>'وجبات غربية',
                'description_en' => 'Luxury and elegant meals',
                'description_ar'=>'شي ما ترجمتو لسا',
                'image' => 'public/images/categories/finedining.jpg',
            ],
        ];

        // استخدام المصفوفة لإدخال البيانات
        foreach ($categories as $category) {
            Category::create($category);
        }
    }

}
