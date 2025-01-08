<?php

namespace App\Models\Favorit;

use App\Models\Restaurant\RestaurantFood;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteFood extends Model
{
    use HasFactory;
    protected $table = 'favorite_food';
    protected $fillable = ['user_id', 'restaurant_food_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurantFood()
    {
        return $this->belongsTo(RestaurantFood::class, 'restaurant_food_id');
    }
}

