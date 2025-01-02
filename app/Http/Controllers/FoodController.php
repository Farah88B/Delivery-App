<?php

namespace App\Http\Controllers;

use App\Models\CategoryFoods;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{


    public function getCategoriesWithFoods()
    {
        $locale = app()->getLocale(); // الحصول على اللغة الحالية ('en' أو 'ar')

        // جلب الفئات مع الأطعمة
        $categories = CategoryFoods::with(['foods' => function ($query) use ($locale) {
            $query->select(
                'foods.id', // معرف الطعام
                "foods.name_{$locale} as name", // اسم الطعام بناءً على اللغة
                'foods.category_foods_id' // معرف الفئة المرتبطة
            );
        }])
            ->select(
                'id', // معرف الفئة
                "category_foods.name_{$locale} as name" // اسم الفئة بناءً على اللغة
            )
            ->get();

        // التحقق من وجود بيانات
        if ($categories->isEmpty()) {
            return response()->json([
                'message' => 'No categories found',
            ], 404);
        }

        // إعادة ترتيب البيانات بحيث يكون الخرج أولاً 'category' ثم 'food'
        $responseData = $categories->map(function ($category) {
            return [
                'category' => [
                    'id' => $category->id,
                    'name' => $category->name,
                ],
                'foods' => $category->foods->map(function ($food) {
                    return [
                        'id' => $food->id,
                        'name' => $food->name,
                        'category_foods_id' => $food->category_foods_id,
                    ];
                })
            ];
        });

        return response()->json([
            'message' => 'Categories with foods fetched successfully',
            'data' => $responseData,
        ], 200);
    }


    public function getFoodById($foodId)
    {
        $locale = app()->getLocale(); // الحصول على اللغة الحالية ('en' أو 'ar')

        // جلب الطعام بناءً على المعرف مع العلاقات المطلوبة
        $food = Food::with([
            'category' => function ($query) use ($locale) {
                $query->select('id', "name_{$locale} as name"); // الفئة مع اسمها بناءً على اللغة
            },
            'restaurants' => function ($query) use ($locale) {
                $query->select(
                    'restaurants.id',
                    "restaurants.name_{$locale} as name",
                    'restaurants.image',
                    'restaurants.logoImage'
                )->withPivot('price', 'quantity', 'image', "description_{$locale}"); // حقول جدول الربط
            }
        ])
            ->select(
                'id', // معرف الطعام
                "name_{$locale} as name", // اسم الطعام بناءً على اللغة
                'category_foods_id' // معرف الفئة المرتبطة
            )
            ->find($foodId);

        // التحقق من وجود الطعام
        if (!$food) {
            return response()->json([
                'message' => 'Food not found',
            ], 404);
        }

        // إعداد البيانات للرد
        $responseData = [
            'category' => [
                'id' => $food->category->id ?? null,
                'name' => $food->category->name ?? null,
            ],
            'food' => [
                'id' => $food->id,
                'name' => $food->name,
                'category_foods_id' => $food->category_foods_id,
                'restaurants' => $food->restaurants->map(function ($restaurant) use ($locale) {
                    return [
                        'id' => $restaurant->id,
                        'name' => $restaurant->name,
                        'image' => $restaurant->image,
                        'logoImage' => $restaurant->logoImage,
                        'price' => $restaurant->pivot->price,
                        'quantity' => $restaurant->pivot->quantity,
                        'food_image' => $restaurant->pivot->image,
                        'description' => $restaurant->pivot->{"description_{$locale}"},
                    ];
                }),
            ],
        ];

        // إرجاع البيانات المنظمة
        return response()->json([
            'message' => 'Food fetched successfully',
            'data' => $responseData,
        ], 200);
    }


    public function getFoodRestaurants($foodId)
    {
        $locale = app()->getLocale(); // 'en' أو 'ar' بناءً على اللغة

        // جلب الطعام مع المطاعم المرتبطة
        $food = Food::with(['restaurants' => function ($query) use ($locale) {
            $query->select(
                'restaurants.id', // الحقول من جدول restaurants
                "restaurants.name_{$locale} as name",  // اسم المطعم بناءً على اللغة
                'restaurants.image',  // صورة المطعم
                'restaurants.logoImage'  // صورة المطعم
            )->withPivot(
                'price',
                'quantity',
                'image',
                "description_{$locale}" // الحقول من جدول الكسر بناءً على اللغة
            );
        }])
            ->select(
                'id', // معرف الطعام
                "name_{$locale} as name" // اسم الطعام بناءً على اللغة
            )
            ->find($foodId);

        // التحقق من وجود الطعام
        if (!$food) {
            return response()->json([
                'message' => 'Food not found',
            ], 404);
        }

        // تنظيم استجابة البيانات
        $responseData = [
            'food' => [
                'id' => $food->id,
                'name' => $food->name,
            ],
            'restaurants' => $food->restaurants->map(function ($restaurant) {
                return [
                    'id' => $restaurant->id,
                    'name' => $restaurant->name,
                    'description' => $restaurant->description,
                    'image' => $restaurant->image,
                    'price' => $restaurant->pivot->price,
                    'quantity' => $restaurant->pivot->quantity,
                    'image_from_pivot' => $restaurant->pivot->image,
                    'description_from_pivot' => $restaurant->pivot->description,
                ];
            })
        ];

        // إرجاع البيانات النهائية
        return response()->json([
            'message' => 'Food restaurants fetched successfully',
            'data' => $responseData,
        ], 200);
    }









    public function getFoodById2($foodId)
    {
        $locale = app()->getLocale(); // الحصول على اللغة الحالية ('en' أو 'ar')

        // جلب جميع الأطعمة مع المطاعم المرتبطة وحقول جدول الكسر
        $food = Food::with(['restaurants' => function ($query) use ($locale) {
            $query->select(
                'restaurants.id', // معرف المطعم
                "restaurants.name_{$locale} as name", // اسم المطعم بناءً على اللغة
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
    public function getFoodRestaurants2($foodId)
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

    public function getFoodById3($id)
    {
        $locale = app()->getLocale(); // تحديد اللغة الحالية ('en' أو 'ar')

        // جلب الطعام بناءً على الـ id مع العلاقات
        $food = Food::with([
            'category' => function ($query) use ($locale) {
                $query->select('id', "name_{$locale} as name"); // جلب بيانات الفئة بناءً على اللغة
            },
            'restaurants' => function ($query) use ($locale) {
                $query->select(
                    'restaurants.id',
                    "restaurants.name_{$locale} as name",
                    'restaurants.image',
                    'restaurants.logoImage'
                )->withPivot('price', 'quantity', 'image', "description_{$locale}"); // الحقول الإضافية من جدول الربط
            }
        ])->select(
            'id', // معرف الطعام
            "name_{$locale} as name", // اسم الطعام بناءً على اللغة
            'category_foods_id' // معرف الفئة المرتبطة
        )->find($id);

        // التحقق من وجود الطعام
        if (!$food) {
            return response()->json([
                'message' => 'Food not found'
            ], 404);
        }

        // إعداد الاستجابة بحيث يأتي نوع الطعام أولاً ثم بيانات الطعام
        $responseData = [
            'category' => $food->category, // أولاً نوع الطعام
            'food' => [
                'id' => $food->id,
                'name' => $food->name,
                'category_foods_id' => $food->category_foods_id,
                'restaurants' => $food->restaurants, // المطاعم المرتبطة بالطعام
            ]
        ];

        // إرجاع بيانات الطعام
        return response()->json([
            'message' => 'Food fetched successfully',
            'data' => $responseData
        ], 200);
    }

    public function getAllFoods()
    {
        $locale = app()->getLocale(); // الحصول على اللغة الحالية ('en' أو 'ar')

        // جلب جميع الأطعمة مع المطاعم المرتبطة وحقول جدول الكسر
        $foods = Food::with(['restaurants' => function ($query) use ($locale) {
            $query->select(
                'restaurants.id', // معرف المطعم
                "restaurants.name_{$locale} as name", // اسم المطعم بناءً على اللغة
                'restaurants.logoImage' ,// صورة علاف المطعم
                'restaurants.image' // صورة المطعم
            )->withPivot(
                'price',
                'quantity',
                'image',
                "description_{$locale}" // الوصف بناءً على اللغة
            );
        }]) ->with('foodCategories') // إضافة العلاقة مع category_foods
        ->select(
            'id', // معرف الطعام
            "foods.name_{$locale} as name", // اسم الطعام بناءً على اللغة
            'category_foods_id', // معرف فئة الطعام
            "category_foods.name_{$locale} as name",
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
}
