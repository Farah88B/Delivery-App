<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $fillable = ['name_ar', 'name_en', 'category_foods_id'];

    public function restaurants() :BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class, 'restaurant_food', 'food_id', 'restaurant_id');
    }
//    public function foods() :HasMany
//    {
//        return $this->hasMany(CategoryFoods::class, 'category_foods_id', 'id');
//    }
    public function category() : BelongsTo
    {
        return $this->belongsTo(CategoryFoods::class, 'category_foods_id', 'id');
    }

}
