<?php

namespace App\Http\Controllers\Categry;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;

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
        return response()->json([
            'message' => 'Category Fetched Successfully',
            'data'=>$categories
        ],200);
    }

    public function getCategoryRestaurants($categoryId)
    {
        $locale = app()->getLocale(); // تحديد اللغة الحالية

        // جلب الفئة مع المطاعم المرتبطة
        $category = Category::with(['restaurants' => function ($query) use ($locale) {
            $query->select(
                'restaurants.id as restaurant_id',  // تحديد id للمطعم
                "restaurants.name_{$locale} as name",  // تحديد اسم المطعم بناءً على اللغة
                'restaurants.logoImage',  // صورة المطعم
                'restaurants.image',
              //  'restaurant_category.category_id as pivot_category_id',  // تحديد عمود category_id من جدول العلاقة
               // 'restaurant_category.restaurant_id as pivot_restaurant_id',  // تحديد عمود restaurant_id من جدول العلاقة
            );
        }])
            ->find($categoryId);

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

    public function getCategoryRestaurantsFoods($categoryId)
    {
        $locale = app()->getLocale(); // تحديد اللغة الحالية

        // جلب الفئة بناءً على ID الفئة
        $category = Category::with(['restaurants' => function($query) use ($locale) {
            $query->select(
                'restaurants.id', // معرف المطعم
                "restaurants.name_{$locale} as name",  // اسم المطعم بناءً على اللغة
                'restaurants.logoImage',  // صورة المطعم
                'restaurants.image'  // صورة المطعم
            )
                ->with(['foods' => function ($query) use ($locale) {
                    $query->select(
                        'foods.id', // id من جدول foods
                        "foods.name_{$locale} as name",  // حقل الاسم بناءً على اللغة
                        'foods.category_foods_id', // حقل الفئة
                        "restaurant_food.description_{$locale} as description",  // حقل الوصف بناءً على اللغة
                        'restaurant_food.price', // السعر من جدول الكسر
                        'restaurant_food.image', // الصورة من جدول الكسر
                        'restaurant_food.quantity' // الكمية من جدول الكسر
                    )->withPivot('price', 'quantity', 'image', "description_{$locale}") // جلب الحقول الإضافية من جدول الكسر
                            ->with(['category' => function($query) use ($locale) {
                                $query->select(
                                    'id', // معرف الفئة
                                    "category_foods.name_{$locale} as name" // اسم الفئة بناءً على اللغة
                                );

                            }]);
                            }]); // إذا كنت تستخدم فئة فرعية للطعام

                }])->find($categoryId);

        // التحقق من وجود الفئة
        if (!$category) {
            return response()->json([
                'message' => 'Category not found'
            ], 404);
        }

        // تنظيم استجابة البيانات
        $responseData = $category->restaurants->map(function ($restaurant) {
            return [
                'foods' => $restaurant->foods->map(function ($food) {
                    return [
                        'id' => $food->id,
                        'categories' => $food->category->name,
                        'name' => $food->name,
                        'description' => $food->pivot->description,
                        'price' => $food->pivot->price,
                        'quantity' => $food->pivot->quantity,
                        'image' => $food->pivot->image,
                       ];
//                            return [
//                                'id' => $category->id,
//                                'name' => $category->name,
//                            ];


                        })
                  //  ];
              //  });
            ];
        });

        // إرجاع البيانات
        return response()->json([
            'message' => 'Category restaurants and foods fetched successfully',
            'data' => $responseData
        ], 200);
    }








}
