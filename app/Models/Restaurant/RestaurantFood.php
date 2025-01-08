<?php

namespace App\Models\Restaurant;

use App\Models\Cart\CartItem;
use App\Models\Favorit\FavoriteFood;
use App\Models\Food\Food;
use App\Models\Order\OrderItem;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantFood extends Model
{
    use HasFactory;
    protected $table = 'restaurant_food';


    // علاقة الأطعمة مع المستخدمين الذين وضعوها في المفضلة
    public function favoritedByUsers()
    {
        return $this->belongsToMany(User::class, 'favorite_food', 'restaurant_food_id', 'user_id')
            ->withTimestamps();
    }

   public function food()
    {
       return $this->belongsTo(Food::class);
    }
//
   public function restaurant()
   {
        return $this->belongsTo(Restaurant::class );
    }

    public function favorites2()
    {
        return $this->hasMany(FavoriteFood::class, 'restaurant_food_id');
    }


    public function usersWhoFavorited()
    {
        return $this->belongsToMany(User::class,'favorite_food', 'restaurant_food_id', 'user_id');
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
