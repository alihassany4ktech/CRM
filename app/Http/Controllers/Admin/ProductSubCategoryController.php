<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProductSubCategory;
use Illuminate\Http\Request;

class ProductSubCategoryController extends Controller
{
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $productSubCat = new ProductSubCategory();
            $productSubCat->category_id = $request->category;
            $productSubCat->sub_category_name = $request->sub_category_name;
            $productSubCat->save();
            return response()->json(['success' => 'Product Sub Category Save Successfully!']);
        }
    }

    public function deleteSubCategory(Request $request)
    {
        if ($request->ajax()) {
            $productSubCat = ProductSubCategory::find($request->sub_category_id);
            $productSubCat->delete();
            return response()->json(['success' => 'Product Sub Category Deleted Successfully!']);
        }
    }
}
