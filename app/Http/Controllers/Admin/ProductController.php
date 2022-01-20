<?php

namespace App\Http\Controllers\Admin;

use App\Tax;
use App\Product;
use App\ProductCategory;
use App\ProductSubCategory;
use Illuminate\Http\Request;
use App\Exports\ProductExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        return view('dashboard.admin.product.all', compact('products'));
    }

    public function create()
    {
        $productCategories = ProductCategory::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $productSubCategories = ProductSubCategory::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $taxes = Tax::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        return view('dashboard.admin.product.create', compact('productCategories', 'productSubCategories', 'taxes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'subCategory' => 'required',
            'code' => 'required',
            'description' => 'required',
        ]);

        $product = new Product();
        $product->auth_id = Auth::guard('admin')->user()->id;
        $product->name = $request->name;
        if (!is_null($request->tax)) {
            $totalTax = 0;
            $taxes = json_encode($request->tax);
            foreach (json_decode($taxes) as $row) {
                $tax = Tax::find($row);
                $totalTax = $totalTax + ($request->price * ($tax->rate_percent / 100));
            }
            $product->total_amount = ($request->price + $totalTax);
        } else {
            $product->total_amount = $request->price;
        }
        $product->price = $request->price;
        $product->category_id = ($request->category) ? $request->category : null;
        $product->sub_category_id = ($request->subCategory) ? $request->subCategory : null;
        // $product->tax_id = $request->tax ? json_encode($request->tax) : null;
        $product->taxes = $request->tax ? json_encode($request->tax) : null;
        $product->hsn_sac_code = $request->code;
        $product->description = $request->description;
        $product->allow_purchase = $request->can_client_purchase == 'on' ? 'Allowed' : 'Not Allowed';
        $product->save();
        $notification = array(
            'messege' => 'Product Save Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $productCategories = ProductCategory::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $productSubCategories = ProductSubCategory::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $taxes = Tax::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        return view('dashboard.admin.product.edit', compact('product', 'productCategories', 'productSubCategories', 'taxes'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'subCategory' => 'required',
            'code' => 'required',
            'description' => 'required',
        ]);
        $product = Product::find($request->id);
        $product->name = $request->name;
        if (!is_null($request->tax)) {
            $totalTax = 0;
            $taxes = json_encode($request->tax);
            foreach (json_decode($taxes) as $row) {
                $tax = Tax::find($row);
                $totalTax = $totalTax + ($request->price * ($tax->rate_percent / 100));
            }
            $product->total_amount = ($request->price + $totalTax);
        } else {
            $product->total_amount = $request->price;
        }
        $product->price = $request->price;
        $product->category_id = ($request->category) ? $request->category : null;
        $product->sub_category_id = ($request->subCategory) ? $request->subCategory : null;
        // $product->tax_id = $request->tax ? json_encode($request->tax) : null;
        $product->taxes = $request->tax ? json_encode($request->tax) : null;
        $product->hsn_sac_code = $request->code;
        $product->description = $request->description;
        $product->allow_purchase = $request->can_client_purchase == 'on' ? 'Allowed' : 'Not Allowed';
        $product->update();
        $notification = array(
            'messege' => 'Product Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        $notification = array(
            'messege' => 'Product Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('dashboard.admin.product.show', compact('product'));
    }

    // tax functions 

    public function taxStore(Request $request)
    {
        if ($request->ajax()) {
            $tax = new Tax();
            $tax->auth_id = Auth::guard('admin')->user()->id;
            $tax->tax_name = $request->tax_name;
            $tax->rate_percent = $request->rate_percent;
            $tax->save();
            return response()->json(['success' => 'Tax Save Successfully!']);
        }
    }

    public function taxDelete(Request $request)
    {
        if ($request->ajax()) {
            $tax = Tax::find($request->tax_id);
            $tax->delete();
            return response()->json(['success' => 'Tax Deleted Successfully!']);
        }
    }

    public function exportInToExcel()
    {
        return Excel::download(new ProductExport, 'productList.xlsx');
    }

    public function exportInToCSV()
    {
        return Excel::download(new ProductExport, 'productList.csv');
    }
}
