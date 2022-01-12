<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'taxes', 'total_amount'];
    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(ProductSubCategory::class, 'sub_category_id');
    }
    public static function taxbyid($id)
    {
        return Tax::where('id', $id);
    }

    public static function getProduct()
    {
        $records = DB::table('products')->select(
            [
                'id',
                'name',
                'hsn_sac_code',
                'price',
                'total_amount',
                'allow_purchase',

            ]
        )->get()->toArray();
        return $records;
    }
}
