<?php

namespace App\Models\Order;

use App\Models\Restaurant\RestaurantFood;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'restaurant_food_id', 'quantity', 'price'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function restaurantFood()
    {
        return $this->belongsTo(RestaurantFood::class);
    }
}
