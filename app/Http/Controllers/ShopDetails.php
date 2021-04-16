<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopDetails extends Controller
{
    public function index($id) {

        $product=Product::findOrFail($id);

        return view('shopDetails',compact('product'));
    }
}
