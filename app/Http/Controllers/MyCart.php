<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class MyCart extends Controller
{
    public function index() {
        return view('shoppingCard');
    }

    public function storeInCart(Request $request) {
        $product = Product::find($request->product_id);
        // Cart::add($request->product_id,$product->product_name,1,$product->price);
        Cart::add(['id' => $request->product_id, 'name' => $product->product_name, 'qty' => 1, 'price' => $product->price, 'options' => ['image' => $request->product_image]]);
        // Cart::destroy();
    }

    public function DeleteInCart(Request $request) {
        Cart::remove($request->rowId);
    }

    public function UpdateInCart(Request $request) {
        Cart::update($request->rowId, ['qty' => $request->qty]);
    }

}
