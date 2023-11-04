<?php

namespace App\Models\Backend;

use App\Models\Backend\Brand;
use App\Models\Backend\Product;
// use App\Models\Backend\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    // relationship between Brand and category models
    // 1/onk gula categoru ar 1ta  brand thakte pare.
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
    
    public function parent(){
        return $this->belongsTo(Category::class,'is_parent');
    }
}