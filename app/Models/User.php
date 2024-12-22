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
        'mobile_verified_at',
        'profile_image',
        'role',
        'otp',
        'otp_expires_at',
        'reset_code',
        'reset_code_expires_at',
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
}
