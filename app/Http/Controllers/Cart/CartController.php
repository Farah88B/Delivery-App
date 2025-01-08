<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart\Cart;
use App\Models\Cart\CartItem;
use App\Models\Restaurant\RestaurantFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
//    public function addToCart(Request $request)
//    {
//        $user = Auth::user();
//
//        $request->validate([
//            'restaurant_food_id' => 'required|exists:restaurant_food,id',
//            'quantity' => 'required|integer|min:1',
//        ]);
//
//        $restaurantFood = RestaurantFood::findOrFail($request->restaurant_food_id);
//        $cart = Cart::firstOrCreate(['user_id' => $user->id]);
//
//        $cartItem = $cart->cartItems()->firstOrNew(['restaurant_food_id' => $restaurantFood->id]);
//        $cartItem->quantity += $request->quantity;
//        $cartItem->price = $restaurantFood->price;
//        $cartItem->save();
//
//        return response()->json(['message' => __('messages.added_to_cart')], 200);
//    }
    public function addToCart(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'restaurant_food_id' => 'required|exists:restaurant_food,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $restaurantFood = RestaurantFood::findOrFail($request->restaurant_food_id);
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $cartItem = $cart->cartItems()->firstOrNew(['restaurant_food_id' => $restaurantFood->id]);

        $totalRequestedQuantity = $cartItem->quantity + $request->quantity;

        // التحقق من توفر الكمية عند إضافة كمية جديدة إلى السلة
        if ($totalRequestedQuantity > $restaurantFood->quantity) {
            return response()->json([
                'message' => ('messages.unavailable_quantity'),
                'available_quantity' => $restaurantFood->quantity,
            ], 400);
        }

        $cartItem->quantity = $totalRequestedQuantity;
        $cartItem->price = $restaurantFood->price;
        $cartItem->save();

        return response()->json(['message' => ('messages.added_to_cart')], 200);
    }

    public function removeFromCart(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'cart_item_id' => 'required|exists:cart_items,id',
        ]);

        $cartItem = CartItem::where('id', $request->cart_item_id)
            ->whereHas('cart', fn($query) => $query->where('user_id', $user->id))
            ->firstOrFail();

        $cartItem->delete();

        return response()->json(['message' => __('messages.removed_from_cart')], 200);
    }

    public function viewCartItems()
    {
        $user = Auth::user();
        $locale = app()->getLocale(); // الحصول على اللغة الحالية

        // جلب السلة وعناصرها باستخدام العلاقات
        $cart = Cart::where('user_id', $user->id)
            ->with([
                'cartItems.restaurantFood.food' => function ($query) use ($locale) {
                    $query->select('id', "name_{$locale} as name"); // اسم الطعام بناءً على اللغة
                },
                'cartItems.restaurantFood.restaurant' => function ($query) use ($locale) {
                    $query->select('id', "name_{$locale} as name"); // اسم المطعم بناءً على اللغة
                }
            ])
            ->first();

        if (!$cart || $cart->cartItems->isEmpty()) {
            return response()->json(['message' => __('messages.cart_empty')], 404);
        }

        // التحقق من البيانات داخل الكائنات:
        $cartDetails = $cart->cartItems->map(function ($item) {
            // تصحيح: التحقق من القيم
            $foodName = $item->restaurantFood->food ? $item->restaurantFood->food->name : 'Unknown';
            $restaurantName = $item->restaurantFood->restaurant ? $item->restaurantFood->restaurant->name : 'Unknown';

            return [
                'cart_item_id' => $item->id,
                'restaurant_food_id' => $item->restaurant_food_id,
                'food_name' => $foodName,
                'restaurant_name' => $restaurantName,
                'quantity' => $item->quantity,
                'price_per_item' => $item->restaurantFood->price,
                'total_price' => $item->quantity * $item->restaurantFood->price,
            ];
        });

        return response()->json([
            'cart_id' => $cart->id,
            'items' => $cartDetails,
            'total_amount' => $cartDetails->sum('total_price'),
        ], 200);
    }


    public function viewCartBeforeConfirm()
    {
        $user = Auth::user();
        $locale = app()->getLocale();

        $cart = Cart::where('user_id', $user->id)
            ->with(['cartItems.restaurantFood.food' => fn($query) => $query->select('id', "name_{$locale} as name")])
            ->first();

        if (!$cart || $cart->cartItems->isEmpty()) {
            return response()->json(['message' => __('messages.cart_empty')], 404);
        }

        $deliveryFee = 20000;
        $cartDetails = $cart->cartItems->map(fn($item) => [
            'cart_item_id' => $item->id,
            'food_name' => $item->restaurantFood->food->name ?? 'Unknown',
            'quantity' => $item->quantity,
            'price_per_item' => $item->price,
            'total_price' => $item->quantity * $item->price,
        ]);

        return response()->json([
            'cart_id' => $cart->id,
            'cart_date' => $cart->created_at->toDateTimeString(),
            'items' => $cartDetails,
            'total_amount' => $cartDetails->sum('total_price'),
            'delivery_fee' => $deliveryFee,
            'final_total' => $cartDetails->sum('total_price') + $deliveryFee,
        ], 200);
    }


    public function cancelCart()
    {
        $user = Auth::user();

        $cart = Cart::where('user_id', $user->id)->first();

        if (!$cart) {
            return response()->json(['message' => __('No cart found for the current user.')], 404);
        }

        $cart->cartItems()->delete();
        $cart->delete();

        return response()->json(['message' => __('Cart has been successfully cancelled.')], 200);
    }

}
