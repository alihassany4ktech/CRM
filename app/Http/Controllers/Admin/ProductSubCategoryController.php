<?php

namespace App\Http\Controllers\Admin;

use App\ProductSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductSubCategoryController extends Controller
{
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $productSubCat = new ProductSubCategory();
            $productSubCat->auth_id = Auth::guard('admin')->user()->id;
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
