<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryFoods extends Model
{
    use HasFactory;
    protected $table = 'category_foods';
    protected $fillable = ['name_ar','name_en'];
//
//    public function category() : BelongsTo
//    {
//        return $this->belongsTo(Food::class,'category_foods_id');
//    }
    public function foods() : HasMany
    {
        return $this->hasMany(Food::class, 'category_foods_id', 'id');
    }


}
