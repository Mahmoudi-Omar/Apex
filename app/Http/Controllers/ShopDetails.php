<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopDetails extends Controller
{
    public function index($id) {

        $product=Product::findOrFail($id);
        $categories = Category::all();
        $side_categories = Category::take(9)->get();

        return view('shopDetails',compact(['product','categories']));
    }
}
