<?php

namespace App\Http\Controllers\Admin;

use App\ExpensesCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExpanseCategoryController extends Controller
{
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $category = new ExpensesCategory();
            $category->auth_id = Auth::guard('admin')->user()->id;
            $category->category_name = $request->category_name;
            $category->save();
            return response()->json(['success' => 'Category Added Successfully!']);
        }
    }

    public function delete(Request $request)
    {
        if ($request->ajax()) {
            $category = ExpensesCategory::find($request->category_id);
            $category->delete();
            return response()->json(['success' => 'Category Deleted Successfully!']);
        }
    }
}
