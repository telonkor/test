<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category1 extends Model
{
    use HasFactory;
    protected $table="categories1";
    protected $fillable=['name'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function ssubcat()
    {
        return $this->hasMany(Category2::class,'subcategory_id');
    }
}
