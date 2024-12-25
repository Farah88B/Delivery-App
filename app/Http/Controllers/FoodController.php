<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function getAllFoods()
    {
        $locale = app()->getLocale(); // الحصول على اللغة الحالية ('en' أو 'ar')

        // جلب جميع الأطعمة مع المطاعم المرتبطة وحقول جدول الكسر
        $foods = Food::with(['restaurants' => function ($query) use ($locale) {
            $query->select(
                'restaurants.id', // معرف المطعم
                "restaurants.name_{$locale} as name", // اسم المطعم بناءً على اللغة
                "restaurants.description_{$locale} as description", // الوصف بناءً على اللغة
                'restaurants.image' // صورة المطعم
            )->withPivot(
                'price',
                'quantity',
                'image',
                "description_{$locale}" // الوصف بناءً على اللغة
            );
        }])->select(
            'id', // معرف الطعام
            "name_{$locale} as name", // اسم الطعام بناءً على اللغة
        )->get();

        // التحقق من وجود الأطعمة
        if ($foods->isEmpty()) {
            return response()->json([
                'message' => 'No foods found'
            ], 404);
        }

        // إرجاع قائمة الأطعمة مع البيانات
        return response()->json([
            'message' => 'Foods fetched successfully',
            'data' => $foods
        ], 200);
    }


    public function getFoodById($foodId)
    {
        $locale = app()->getLocale(); // الحصول على اللغة الحالية ('en' أو 'ar')

        // جلب جميع الأطعمة مع المطاعم المرتبطة وحقول جدول الكسر
        $food = Food::with(['restaurants' => function ($query) use ($locale) {
            $query->select(
                'restaurants.id', // معرف المطعم
                "restaurants.name_{$locale} as name", // اسم المطعم بناءً على اللغة
                "restaurants.description_{$locale} as description", // الوصف بناءً على اللغة
                'restaurants.image' // صورة المطعم
            )->withPivot(
                'price',
                'quantity',
                'image',
                "description_{$locale}" // الوصف بناءً على اللغة
            );
        }])->select(
            'id', // معرف الطعام
            "name_{$locale} as name", // اسم الطعام بناءً على اللغة
        )->find($foodId);
        // التحقق من وجود الطعام
        if (!$food) {
            return response()->json([
                'message' => 'Food not found'
            ], 404);
        }

        // إرجاع بيانات الطعام
        return response()->json([
            'message' => 'Food fetched successfully',
            'data' => $food,
        ], 200);
    }

    // دالة لجلب المطاعم المرتبطة بطعام معين
    public function getFoodRestaurants($foodId)
    {
        $locale = app()->getLocale(); // 'en' أو 'ar' بناءً على اللغة

        // جلب الطعام مع المطاعم المرتبطة
        $food = Food::with(['restaurants' => function ($query) use ($locale) {
            $query->select(
                'restaurants.id', // الحقول من جدول restaurants
                "restaurants.name_{$locale} as name",  // اسم المطعم بناءً على اللغة
                "restaurants.description_{$locale} as description", // الوصف بناءً على اللغة
                'restaurants.image'  // صورة المطعم
            )->withPivot('price', 'quantity', 'image', "description_{$locale}"); // جلب الحقول من جدول الكسر بناءً على اللغة
        }])
            ->select(
                'id', // id من جدول foods
                "name_{$locale} as name", // الاسم بناءً على اللغة
            )
            ->find($foodId);

        // التحقق من وجود الطعام
        if (!$food) {
            return response()->json([
                'message' => 'Food not found'
            ], 404);
        }

        // إرجاع بيانات المطاعم المرتبطة بالطعام
        return response()->json([
            'message' => 'Food restaurants fetched successfully',
            'data' => $food->restaurants, // المطاعم المرتبطة بالطعام
        ], 200);
    }



}
