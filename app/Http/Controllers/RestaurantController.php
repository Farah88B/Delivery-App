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
        // جلب جميع المطاعم مع الفئات المرتبطة (اختياري)
        $restaurants = Restaurant::select(
            'id',
            "name_{$locale} as name",
            "description_{$locale} as description",
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
            "description_{$locale} as description",
            'image',
            "address_{$locale} as address",
            'phone',
            'email',
            'open_time',
            'close_time'
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
            'data' =>
                $restaurant->categories,  // إرجاع الفئات المرتبطة
        ], 200);
    }
    // دالة لجلب الأطعمة المرتبطة بمطعم معين
    public function getRestaurantFoods($restaurantId)
    {
        // الحصول على اللغة المفضلة للمستخدم
        $locale = app()->getLocale(); // 'en' أو 'ar'

        // جلب المطعم مع الأطعمة المرتبطة بناءً على اللغة
        $restaurant = Restaurant::with(['foods' => function ($query) use ($locale) {
            // تحديد الحقول بناءً على اللغة
            $query->select(
                'foods.id', // id من جدول foods
                "foods.name_{$locale} as name",  // حقل الاسم بناءً على اللغة
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


}

