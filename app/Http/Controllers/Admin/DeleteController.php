<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index() {
        $categories = Category::all();
        $products = Product::all();
        return view('admin.deleting',compact('categories','products'));
    }

    public function delete_categories(Request $request) {
        $category = Category::find($request->categories_id);
        $category->delete();
        return redirect()->back();
    }

    public function delete_products(Request $request) {
        $product = Product::find($request->product_id);
        $product->delete();
        return redirect()->back();
    }

    public function delete_sub_categories(Request $request) {
        // return $request;
        SubCategory::where('cat_id','=',$request->cat_id)->where('id','=',$request->sub_cat_id)->delete();
        return redirect()->back();
    }
}
