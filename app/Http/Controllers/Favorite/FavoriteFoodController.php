<?php

namespace App\Http\Controllers\Favorite;

use App\Http\Controllers\Controller;
use App\Models\Favorit\FavoriteFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteFoodController extends Controller
{
    public function addToFavorites(Request $request)
    {
        $user = auth()->user();
        $foodId = $request->input('restaurant_food_id');

        if ($user->favoriteFoods()->where('restaurant_food_id', $foodId)->exists()) {
            return response()->json(['message' => 'Already in favorites'], 409);
        }

        $user->favoriteFoods()->attach($foodId);
        return response()->json(['message' => 'Added to favorites'], 200);
    }

    public function addToFavorites2(Request $request)
    {
        $user = Auth::user();// الحصول على معرف المستخدم الحالي
        $restaurantFoodId = $request->input('restaurant_food_id'); // الحصول على معرف المنتج

        // التحقق إذا كانت الأكلة مضافة بالفعل
        if ($user->favoriteRestaurantFoods()->where('restaurant_food_id', $restaurantFoodId)->exists()) {
            return response()->json(['message' => 'Product is already in favorites.'], 400);
        }

        // إضافة الأكلة إلى المفضلة
        $user->favoriteRestaurantFoods()->attach($restaurantFoodId);

        return response()->json(['message' => 'Product added to favorites.'],200);
    }
    public function removeFromFavorites()
    {
        $foodId = request()->input('restaurant_food_id');
        $user = auth()->user();

        if ($user->favoriteFoods()->detach($foodId)) {
            return response()->json(['message' => 'Removed from favorites'], 200);
        }

        return response()->json(['message' => 'Not found in favorites'], 404);
    }
    public function listFavorites()//888
    {
        $locale = app()->getLocale();
        $user = auth()->user(); // المستخدم الحالي

        // جلب المفضلات باستخدام العلاقات المطلوبة
        $favorites = $user->favoriteFoods()->with([
            'food' => function ($query) use ($locale) {
                $query->select('id', "name_{$locale} as name");
            },
            'restaurant' => function ($query) use ($locale) {
                $query->select('id', "name_{$locale} as name",);
            }
        ])->get();

        // تنسيق الاستجابة
        $formattedFavorites = $favorites->map(function ($restaurantFood) use ($locale) {
            return [
                'food_name' => $restaurantFood->food->name ?? 'Unknown',
                'food_image' => $restaurantFood->image ?? null,
                'restaurant_name' => $restaurantFood->restaurant->name ?? 'Unknown',
                'price' => $restaurantFood->price ?? '0.00',
            ];
        });

        return response()->json([
            'message' => 'Favorites fetched successfully',
            'data' => $formattedFavorites
        ], 200);
    }

    public function removeFromFavorites2(Request $request)
    {
        $user_id = Auth::id();// الحصول على معرف المستخدم الحالي
        $restaurantFoodId = $request['restaurant_food_id']; // الحصول على معرف المنتج

        /* // البحث عن المفضلة المراد حذفها
         $favorite = FavoriteFoods::where('user_id', $userId)
             ->where('restaurant_food_id', $restaurantFoodId)
             ->first();

         if (!$favorite) {
             return response()->json(['message' => 'Product not found in favorites.'], 404);
         }

         // حذف المفضلة
         $favorite->delete();*/

       /* if (!$user->favoriteRestaurantFoods()->where('restaurant_food_id', $restaurantFoodId)->exists()) {
            return response()->json(['message' => 'Product not found in favorites.'], 404);
        }*/

        $favoritefood=FavoriteFood::where('restaurant_food_id', $restaurantFoodId)
            ->where('user_id',$user_id)->exists();

        if (!$favoritefood) {
            return response()->json(['message' => 'Product is not in favorites.'], 400);
        }
        // إزالة الأكلة من المفضلة
        $favoritefood->delete();
        return response()->json(['success' => true, 'message' => 'Product removed from favorites.'],200);
    }
}
