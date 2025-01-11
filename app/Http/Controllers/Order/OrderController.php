<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Cart\Cart;
use App\Models\Order\Order;
use App\Models\Restaurant\RestaurantFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function ConfirmOrder(Request $request)
    {
        $user = Auth::user();

        // التحقق من وجود الحقل "payment_method" في الطلب
        $request->validate([
            'payment_method' => 'required|string|in:cash,credit_card,paypal',  // تحديد طرق الدفع المتاحة
        ]);

        // جلب السلة الخاصة بالمستخدم
        $cart = Cart::where('user_id', $user->id)->with('cartItems.restaurantFood.food')->first();

        if (!$cart || $cart->cartItems->isEmpty()) {
            return response()->json(['message' => 'messages.cart_empty'], 400);
        }

        // قائمة الأكلات التي الكمية المطلوبة منها أكبر من المتوفرة
        $insufficientItems = [];

        // استخدام المعاملة
        DB::beginTransaction();

        try {
            foreach ($cart->cartItems as $cartItem) {
                $restaurantFood = RestaurantFood::where('id', $cartItem->restaurant_food_id)->lockForUpdate()->first();

                if ($restaurantFood->quantity < $cartItem->quantity) {
                    $insufficientItems[] = [
                        'food_name' => $restaurantFood->food->name_ar ?? $restaurantFood->food->name_en,
                        'available_quantity' => $restaurantFood->quantity,
                    ];
                }
            }

            // إذا كانت هناك أكلات الكمية المطلوبة منها أكبر من المتوفرة، نعيد الأسماء والكمية المتوفرة
            if (!empty($insufficientItems)) {
                DB::rollBack(); // التراجع عن العمليات
                return response()->json([
                    'message' => 'الكمية المطلوبة غير متوفرة لبعض الأكلات',
                    'insufficient_items' => $insufficientItems,
                ], 400);
            }

            // إنشاء الطلب
            $order = Order::create([
                'user_id' => $user->id,
                'total_amount' => $cart->cartItems->sum(function ($item) {
                    return $item->quantity * $item->price;
                }),
                'status' => 'Under Preparation',
                'payment_method' => $request->input('payment_method'),
            ]);

            // نسخ عناصر السلة إلى الطلب وتحديث الكميات
            foreach ($cart->cartItems as $cartItem) {
                $restaurantFood = RestaurantFood::where('id', $cartItem->restaurant_food_id)->lockForUpdate()->first();

                // إنقاص الكمية المتوفرة
                $restaurantFood->decrement('quantity', $cartItem->quantity);

                // إنشاء عناصر الطلب
                $order->orderItems()->create([
                    'restaurant_food_id' => $cartItem->restaurant_food_id,
                    'quantity' => $cartItem->quantity,
                    'price' => $cartItem->price,
                ]);
            }

            // تفريغ عناصر السلة
            $cart->cartItems()->delete();

            DB::commit(); // تأكيد المعاملة
            return response()->json(['message' => 'messages.order_placed', 'order_id' => $order->id], 200);

        } catch (\Exception $e) {
            DB::rollBack(); // التراجع عن العمليات في حالة حدوث خطأ
            return response()->json(['message' => 'حدث خطأ أثناء معالجة الطلب', 'error' => $e->getMessage()], 500);
        }
    }


        public function getAllOrders()
    {
        $user = Auth::user();

        // جلب جميع الطلبات الخاصة بالمستخدم مع استخدام created_at بدلاً من order_date
        $orders = Order::where('user_id', $user->id)->get(['id', 'created_at']);

        if ($orders->isEmpty()) {
            return response()->json(['message' => __('messages.no_orders_found')], 404);
        }

        // تجهيز البيانات للعرض مع تنسيق created_at إلى سلسلة نصية
        $formattedOrders = $orders->map(function ($order) {
            return [
                'id' => $order->id,
                'order_date' => $order->created_at->setTimezone('Asia/Damascus')->toDateTimeString(), // تحويل التوقيت // استخدام created_at
            ];
        });

        return response()->json([
            'message' => 'Orders Fetched Successfully',
            'orders' => $formattedOrders,
        ], 200);
    }


    public function getOrderById($orderId)
    {
        $user = Auth::user();
        $locale = app()->getLocale(); // الحصول على اللغة الحالية

        // جلب الطلب الخاص بالمستخدم مع عناصر الطلب
        $order = Order::where('id', $orderId)
            ->where('user_id', $user->id)
            ->with(['orderItems.restaurantFood' => function ($query) use ($locale) {
                // تعديل اسم الجدول هنا إلى "restaurant_food" إذا كان هذا هو الاسم الصحيح للجدول
                $query->select(
                    'restaurant_food.id', // معرف الطعام (تأكد أن الاسم صحيح في قاعدة البيانات)
                    'restaurant_food.food_id', // معرف الطعام المرتبط بجدول food
                    'restaurant_food.price' // سعر الطعام
                )->with([
                    'food' => function ($query) use ($locale) {
                        // جلب اسم الطعام بناءً على اللغة المحددة
                        $query->select(
                            'id', // معرف الطعام
                            "name_{$locale} as name" // اسم الطعام بناءً على اللغة
                        );
                    },
                ]);
            }])
            ->first();

        if (!$order) {
            return response()->json(['message' => __('messages.order_not_found')], 200);
        }

        // تجهيز البيانات للعرض
        $orderDetails = $order->orderItems->map(function ($item) {
            return [
                'order_item_id' => $item->id,
                'restaurant_food_id' => $item->restaurant_food_id,
                'food_name' => $item->restaurantFood->food->name, // اسم الوجبة
                'quantity' => $item->quantity,
                'price_per_item' => $item->price,
                //'total_price' => $item->quantity * $item->price, // يمكنك إضافة السعر الإجمالي إذا أردت
            ];
        });

        $deliveryFee = 20000; // قيمة رسوم التوصيل

        return response()->json([
            'order_id' => $order->id,
            'status' => $order->status,
            'order_date' => $order->created_at->setTimezone('Asia/Damascus')->toDateTimeString(),
            'items' => $orderDetails,
            'total_amount' => $order->total_amount,
            'delivery_fee' => $deliveryFee,
            'final_total' => $order->total_amount + $deliveryFee, // إجمالي المبلغ مع رسوم التوصيل
            'payment_method' => $order->payment_method, // طريقة الدفع
        ], 200);
    }
    public function deleteOrder($orderId)
    {
        // استخدام المعاملة لضمان سلامة البيانات
        DB::beginTransaction();

        try {
            // جلب الطلب مع عناصر الطلب
            $order = Order::with('orderItems.restaurantFood')->find($orderId);

            if (!$order) {
                return response()->json(['message' => 'الطلب غير موجود'], 404);
            }

            // استرجاع الكميات إلى المخزون
            foreach ($order->orderItems as $orderItem) {
                $restaurantFood = $orderItem->restaurantFood;

                if ($restaurantFood) {
                    // زيادة الكمية المخزنة
                    $restaurantFood->increment('quantity', $orderItem->quantity);
                }
            }

            // حذف عناصر الطلب
            $order->orderItems()->delete();

            // حذف الطلب نفسه
            $order->delete();

            DB::commit(); // تأكيد المعاملة
            return response()->json(['message' => 'تم حذف الطلب بنجاح والكميات تمت إعادتها للمخزون'], 200);

        } catch (\Exception $e) {
            DB::rollBack(); // التراجع عن العمليات في حالة حدوث خطأ
            return response()->json(['message' => 'حدث خطأ أثناء حذف الطلب', 'error' => $e->getMessage()], 500);
        }
    }
}
