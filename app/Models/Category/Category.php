<?php

namespace App\Models\Category;

use App\Models\Restaurant\Restaurant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['name_ar','name_en','description_ar','description_en','image'];
// في موديل Restaurant


    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'restaurant_category', 'category_id', 'restaurant_id')
            ->withTimestamps();
    }

}
