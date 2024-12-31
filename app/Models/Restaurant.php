<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = ['name_ar','name_en','logoImage','image'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'restaurant_category', 'restaurant_id', 'category_id')
            ->withTimestamps();
    }
    public function foods() : BelongsToMany
    {
       return $this->belongsToMany(Food::class, 'restaurant_food', 'restaurant_id', 'food_id')
           ->withTimestamps()->withPivot('description_en','description_ar','price','quantity','image');
    }



}
