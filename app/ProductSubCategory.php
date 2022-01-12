<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
