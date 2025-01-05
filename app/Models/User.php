<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    public function favoriteFoods()
    {
        return $this->hasMany(FavoriteFood::class);
    }

    public function favoriteRestaurantFoods()
    {
        return $this->belongsToMany(RestaurantFood::class,'favorite_foods', 'user_id', 'restaurant_food_id');
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
