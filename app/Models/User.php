<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Cart\Cart;
use App\Models\Favorit\FavoriteFood;
use App\Models\Order\Order;
use App\Models\Restaurant\RestaurantFood;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'password',
        'profile_image',
        'latitude',
        'longitude',
        'preferred_language',
        'otp',
        'otp_expires_at',
        'reset_code'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
       'password'=>'hashed'
    ];

    public function locations(): HasMany
    {
       return $this->hasMany(Location::class);
    }
    public function favoriteFoods2()
    {
        return $this->hasMany(FavoriteFood::class);
    }
    public function favoriteFoods()
    {
        return $this->belongsToMany(RestaurantFood::class, 'favorite_food', 'user_id', 'restaurant_food_id')
            ->with(['food', 'restaurant']) // ربط البيانات لجلب المعلومات المطلوبة
            ->withTimestamps();
    }

    public function favoriteRestaurantFoods()
    {
        return $this->belongsToMany(RestaurantFood::class,'favorite_food', 'user_id', 'restaurant_food_id');
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
