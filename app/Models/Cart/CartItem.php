<?php

namespace App\Models\Cart;

use App\Models\Restaurant\RestaurantFood;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id', 'restaurant_food_id', 'quantity', 'price'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function restaurantFood()
    {
        return $this->belongsTo(RestaurantFood::class);
    }
}
