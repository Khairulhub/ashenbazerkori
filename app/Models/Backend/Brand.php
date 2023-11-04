<?php

namespace App\Models\Backend;

use App\Models\Backend\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    // relationship between Brand and category models 
    // 1 Brand ar onk gula category thakte pare.

    public function category(){
        return $this -> hasMany(Category::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}