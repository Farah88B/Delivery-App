<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_restaurant', 'restaurant_id', 'category_id');
    }
    public function foods() : BelongsToMany
    {
       return $this->belongsToMany(Food::class, 'restaurant_food', 'restaurant_id', 'food_id');
    }



}
