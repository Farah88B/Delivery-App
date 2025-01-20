<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Cart\Cart;
use App\Models\Order\Order;
use App\Models\Restaurant\RestaurantFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function ConfirmOrder(Request $request)
    {
        $user = Auth::user();

        // التحقق من وجود الحقل "payment_method" في الطلب
        $request->validate([
            'payment_method' => 'required|string|in:cash,credit_card,paypal',  // تحديد طرق الدفع المتاحة
        ]);

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
            return response()->json(['message' => __('messages.no_orders_found')], 200);
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

    public function getOrderStatus($status)
    {
        $statusTranslations = [
            'Under Preparation' => 'قيد التحضير',
            'Under delivery' => 'قيد التوصيل',
            'Delivered' => 'تم التوصيل'
        ];
        return $statusTranslations[$status] ?? $status;
    }

    public function translate(string $payment){
        if($payment == 'paypal'){
            return 'باي بال';
        }
        if($payment == 'cash'){
            return 'كاش';
        }
        if($payment == 'credit_card'){
            return 'دفع إلكتروني';
        }
}

    public function getOrderById($orderId)
    {
        $user = Auth::user();
        $locale = app()->getLocale(); // الحصول على اللغة الحالية

        // جلب الطلب الخاص بالمستخدم مع عناصر الطلب
        $order = Order::where('id', $orderId)
            ->where('user_id', $user->id)
            ->with(['orderItems.restaurantFood' => function ($query) use ($locale) {
                $query->select(
                    'restaurant_food.id',
                    'restaurant_food.food_id',
                    'restaurant_food.price'
                )->with([
                    'food' => function ($query) use ($locale) {
                        $query->select(
                            'id',
                            "name_{$locale} as name"
                        );
                    },
                ]);
            }])
            ->first();

        if (!$order) {
            return response()->json(['message' => __('messages.order_not_found')], 200);
        }

        // تجهيز البيانات للعرض
        $orderDetails = $order->orderItems->map(function ($item) use ($locale) {  // هنا تم إضافة `use ($locale)`
            return [
                'order_item_id' => $item->id,
                'restaurant_food_id' => $item->restaurant_food_id,
                'food_name' => $item->restaurantFood->food->name, // اسم الوجبة
                'quantity' => $item->quantity,
                'price_per_item' => $item->price,
                'status' => ($locale === 'ar') ? $this->getOrderStatus($item->restaurantFood->status ?? $item->status) : $item->status,
            ];
        });

        $deliveryFee = 20000; // قيمة رسوم التوصيل

        return response()->json([
            'order_id' => $order->id,
            // إذا كانت اللغة العربية يتم استدعاء التابع
            'status' => ($locale === 'ar') ? $this->getOrderStatus($order->status) : $order->status,
            'order_date' => $order->created_at->setTimezone('Asia/Damascus')->toDateTimeString(),
            'items' => $orderDetails,
            'total_amount' => $order->total_amount,
            'delivery_fee' => $deliveryFee,
            'final_total' => $order->total_amount + $deliveryFee,
            'payment_method' => ($locale === 'ar') ? $this->translate($order->payment_method) : $order->payment_method,
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

    public function updateOrderStatus(Request $request, $orderId)
    {
        // التحقق من صحة البيانات المُرسلة
        $request->validate([
            'status' => 'required|string|in:Under Preparation,Under delivery,Delivered',
        ]);

        // جلب الطلب باستخدام الـ ID
        $order = Order::find($orderId);


        if (!$order) {
            return response()->json(['message' => 'الطلب غير موجود'], 200);
        }

        // تحقق من الحالة الحالية
        if ($order->status === 'Under Preparation' && $request->status !== 'Under delivery') {
            return response()->json(['message' => 'لا يمكن تحديث الحالة إلى هذه المرحلة مباشرة'], 400);
        }

        if ($order->status === 'Under delivery' && $request->status !== 'Delivered') {
            return response()->json(['message' => 'لا يمكن تحديث الحالة إلى هذه المرحلة مباشرة'], 400);
        }

        if ($order->status === 'Delivered') {
            return response()->json(['message' => 'الطلب مكتمل بالفعل ولا يمكن تغييره'
            ], 400);
        }

        // تحديث الحالة
        $order->update(['status' => $request->status]);
        $order->refresh(); // هذا السطر يعيد تحميل الطلب بعد التحديث لضمان التحديث الفعلي

        return response()->json(['message' => 'تم تحديث حالة الطلب بنجاح', 'order' => $order], 200);


    }
}
