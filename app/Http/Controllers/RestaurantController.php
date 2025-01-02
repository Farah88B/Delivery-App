<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    // دالة لجلب جميع المطاعم
    public function getAllRestaurants()
    {
        $locale = app()->getLocale();
        // جلب جميع المطاعم
        $restaurants = Restaurant::select(
            'id',
            "name_{$locale} as name",
            "address_{$locale} as address",
            'logoImage',
            'image'
        )->get();

        // إرجاع النتيجة كاستجابة JSON
        return response()->json([
            'message' => 'Restaurants fetched successfully',
            'data' => $restaurants,
        ], 200);
    }

    public function getRestaurantById($id){
        $locale = app()->getLocale(); //
        $restaurant = Restaurant::select(
            'id',
            "name_{$locale} as name",
            "address_{$locale} as address",
            'logoImage',
            'image'
        )->find($id);
        return response()->json([
            'message' => 'Restaurant fetched successfully',
            'data' => $restaurant,
        ], 200);
    }
// دالة لجلب الفئات المرتبطة بمطعم معين
    public function getRestaurantCategory($restaurantId)
    {
        $locale = app()->getLocale(); // تحديد اللغة الحالية

        // جلب المطعم مع الفئات المرتب
        $restaurant = Restaurant::with(['categories' => function ($query) use ($locale) {
            // تحديد الأعمدة من جدول categories بشكل صريح
            $query->select(
                'categories.id', // تحديد id من جدول categories
                "categories.name_{$locale} as name",  // تحديد اسم الفئة بناءً على اللغة
                "categories.description_{$locale} as description",  // إضافة وصف الفئة
                'categories.image'  // إضافة صورة الفئة
            );
        }])->find($restaurantId);

        // التحقق من وجود المطعم
        if (!$restaurant) {
            return response()->json([
                'message' => 'Restaurant not found'
            ], 404);
        }

        // إعادة الفئات المرتبطة بالمطعم
        return response()->json([
            'message' => 'Restaurant categories fetched successfully',
            'data' => $restaurant->categories,  // إرجاع الفئات المرتبطة
        ], 200);
    }

    // دالة لجلب الأطعمة المرتبطة بمطعم معين
    public function getRestaurantFoods2($restaurantId)
    {
        // الحصول على اللغة المفضلة للمستخدم
        $locale = app()->getLocale(); // 'en' أو 'ar'

        // جلب المطعم مع الأطعمة المرتبطة بناءً على اللغة
        $restaurant = Restaurant::with(['foods' => function ($query) use ($locale) {
            // تحديد الحقول بناءً على اللغة
            $query->select(
                'foods.id', // id من جدول foods
                "foods.name_{$locale} as name",  // حقل الاسم بناءً على اللغة
                'foods.category_foods_id', // حقل الفئة
                "restaurant_food.description_{$locale} as description",  // حقل الوصف بناءً على اللغة
                'restaurant_food.price', // السعر من جدول الكسر
                'restaurant_food.image', // الصورة من جدول الكسر
                'restaurant_food.quantity' // الكمية من جدول الكسر
            )
                ->withPivot('price', 'quantity', 'image', "description_{$locale}"); // جلب الحقول الإضافية من جدول الكسر
        }])->find($restaurantId);

        // التحقق من وجود المطعم
        if (!$restaurant) {
            return response()->json([
                'message' => 'Restaurant not found'
            ], 404);
        }

        // إرجاع الأطعمة المرتبطة بالمطعم
        return response()->json([
            'message' => 'Restaurant foods fetched successfully',
            'data' => $restaurant->foods,  // الأطعمة المرتبطة بالمطعم
        ], 200);
    }
    public function getRestaurantFoods($restaurantId)
    {
        // الحصول على اللغة المفضلة للمستخدم
        $locale = app()->getLocale(); // 'en' أو 'ar'

        // جلب المطعم مع الأطعمة المرتبطة بناءً على اللغة
        $restaurant = Restaurant::with(['foods' => function ($query) use ($locale) {
            $query->select(
                'foods.id', // معرف الطعام
                "foods.name_{$locale} as name", // اسم الطعام بناءً على اللغة
                'foods.category_foods_id', // معرف الفئة المرتبطة
                "restaurant_food.description_{$locale} as description", // الوصف بناءً على اللغة
                'restaurant_food.price', // السعر
                'restaurant_food.image', // الصورة
                'restaurant_food.quantity' // الكمية
            )
                ->withPivot('price', 'quantity', 'image', "description_{$locale}"); // الحقول الإضافية من جدول الكسر
        }, 'foods.category' => function ($query) use ($locale) {
            $query->select(
                'category_foods.id', // معرف الفئة
                "category_foods.name_{$locale} as name" // اسم الفئة بناءً على اللغة
            );
        }])->find($restaurantId);

        // التحقق من وجود المطعم
        if (!$restaurant) {
            return response()->json([
                'message' => 'Restaurant not found'
            ], 404);
        }

        // إعادة ترتيب البيانات بحيث يتم تضمين الفئات مع الأطعمة
        $foodsGroupedByCategory = $restaurant->foods->groupBy('category_foods_id')->map(function ($foods, $categoryId) {
            $category = $foods->first()->category; // الحصول على بيانات الفئة
            return [
                'category' => [
                    'id' => $category->id,
                    'name' => $category->name,
                ],
                'foods' => $foods->map(function ($food) {
                    return [
                        'id' => $food->id,
                        'name' => $food->name,
                        'description' => $food->pivot->description,
                        'price' => $food->pivot->price,
                        'quantity' => $food->pivot->quantity,
                        'image' => $food->pivot->image,
                    ];
                })
            ];
        })->values(); // تحويل مجموعة البيانات إلى قائمة

        // إرجاع الأطعمة المرتبطة بالمطعم مع الفئات
        return response()->json([
            'message' => 'Restaurant foods fetched successfully',
            'data' => $foodsGroupedByCategory,
        ], 200);
    }


}

