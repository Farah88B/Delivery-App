<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $fillable = ['name_ar', 'name_en'];

    public function restaurants() :BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class, 'restaurant_food', 'food_id', 'restaurant_id');
    }
}
