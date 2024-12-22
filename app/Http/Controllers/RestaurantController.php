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
        // جلب جميع المطاعم مع الفئات المرتبطة (اختياري)
        $restaurants = Restaurant::with('categories')->get();

        // إرجاع النتيجة كاستجابة JSON
        return response()->json([
            'message' => 'Restaurants fetched successfully',
            'data' => $restaurants,
        ], 200);
    }

    public function getRestaurant($id){
        $restaurant = Restaurant::with('categories')->find($id);
        return response()->json([$restaurant]);
    }
    // دالة لجلب الفئات المرتبطة بمطعم معين
    public function getRestaurantCategory($restaurantId)
    {
        // جلب المطعم مع الفئات المرتبطة
        $restaurant = Restaurant::with('categories')->find($restaurantId);

        // التحقق من وجود المطعم
        if (!$restaurant) {
            return response()->json([
                'message' => 'Restaurant not found'
            ], 404);
        }

        // إعادة الفئات المرتبطة
        return response()->json([
            'message' => 'Restaurant categories fetched successfully',
            'data' => $restaurant->categories,
        ], 200);
    }
}

