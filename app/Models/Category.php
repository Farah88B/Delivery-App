<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['name','description','image'];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'category_restaurant', 'category_id', 'restaurant_id');
    }

}
