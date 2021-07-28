<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\rating;
use Illuminate\Http\Request;

class ShopDetails extends Controller
{
    public function index($id) {

        $product=Product::findOrFail($id);
        $categories = Category::all();
        $side_categories = Category::take(9)->get();
        $id_category = Product::find($id)->cat_id;
        $suggest_products = Product::take(5)->where('cat_id',$id_category)->where('id','!=',$id)->get();
        $nbr_reviews = rating::where('product_id',$id)->count();
        $avg_reviews = rating::where('product_id',$id)->avg('ratedIndex');

        // return $id_category;
        // return $suggest_products;

        return view('shopDetails',compact(['product','categories','side_categories','suggest_products','nbr_reviews','avg_reviews']));
    }
}
