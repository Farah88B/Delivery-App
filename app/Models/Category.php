<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

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
