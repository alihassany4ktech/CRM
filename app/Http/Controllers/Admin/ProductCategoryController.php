<?php

namespace App\Http\Controllers\Admin;

use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductCategoryController extends Controller
{
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $productCategory = new ProductCategory();
            $productCategory->auth_id = Auth::guard('admin')->user()->id;
            $productCategory->category_name = $request->category_name;
            $productCategory->save();
            return response()->json(['success' => 'Product Category Save Successfully!']);
        }
    }

    public function deleteCategory(Request $request)
    {
        if ($request->ajax()) {
            $productCategory = ProductCategory::find($request->category_id);
            $productCategory->delete();
            return response()->json(['success' => 'Product Category Deleted Successfully!']);
        }
    }
}
