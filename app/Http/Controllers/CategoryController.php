<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAllCategories(){
       $categories = Category::all();
       return response()->json($categories);
    }
    public function getCategoryRestaurants($categoryId)
    {
        // جلب الفئة مع المطاعم المرتبطة
        $category = Category::with('restaurants')->find($categoryId);

        // التحقق من وجود الفئة
        if (!$category) {
            return response()->json([
                'message' => 'Category not found'
            ], 404);
        }

        // إعادة الفئة مع المطاعم المرتبطة
        return response()->json([
            'message' => 'Category restaurants fetched successfully',
            'data' => $category->restaurants,
        ], 200);
    }
}
