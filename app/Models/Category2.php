<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category2 extends Model
{
    use HasFactory;
    protected $table="categories2";
    protected $fillable=['name'];

    public function subcategory()
    {
        return $this->belongsTo(Category1::class,'subcategory_id');
    }
}
