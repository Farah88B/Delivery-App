<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAllCategories()
    {
        $locale = app()->getLocale(); // الحصول على اللغة الحالية

        // تحديد الحقول بناءً على اللغة
        $categories = Category::select(
            'id',
            "name_{$locale} as name",
            "description_{$locale} as description",
            'image'
        )->get();

        // إرجاع البيانات كـ JSON
        return response()->json($categories);
    }

    public function getCategoryRestaurants($categoryId)
    {
        $locale = app()->getLocale(); // تحديد اللغة الحالية

        // جلب الفئة مع المطاعم المرتبطة
//        $category = Category::with(['restaurants' => function ($query) use ($locale) {
//            $query->select(
//                'id',
//                "name_{$locale} as name",  // تحديد اسم المطعم بناءً على اللغة
//                "description_{$locale} as description",
//                'image'
//            );
//        }])->find($categoryId);
        $category = Category::with(['restaurants' => function ($query) use ($locale) {
            $query->select(
                'restaurants.id as restaurant_id',  // تحديد id للمطعم
                "restaurants.name_{$locale} as name",  // تحديد اسم المطعم بناءً على اللغة
                "restaurants.description_{$locale} as description",  // وصف المطعم بناءً على اللغة
                'restaurants.image',  // صورة المطعم
                'restaurant_category.category_id as pivot_category_id',  // تحديد عمود category_id من جدول العلاقة
                'restaurant_category.restaurant_id as pivot_restaurant_id',  // تحديد عمود restaurant_id من جدول العلاقة
                'restaurant_category.created_at as pivot_created_at',  // تاريخ الإنشاء في العلاقة
                'restaurant_category.updated_at as pivot_updated_at'   // تاريخ التحديث في العلاقة
            );
        }])->find($categoryId);

        // التحقق من وجود الفئة
        if (!$category) {
            return response()->json([
                'message' => 'Category not found'
            ], 404);
        }

        // إعادة الفئة مع المطاعم المرتبطة
        return response()->json([
            'message' => 'Category restaurants fetched successfully',
            'data' => $category->restaurants,  // المطاعم المرتبطة بالفئة
        ], 200);
    }

}
