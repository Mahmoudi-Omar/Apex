<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product_order;

class orderlistController extends Controller
{
    public function index() {
        $orders = Order::paginate(20); 
        $customers = Customer::all();
        return view('admin.orderList',compact('customers','orders'));
    }

    public function show_orderd_products($id) {
        // return $id;
        $products = Product_order::where('order_id',$id)->get('product_id');
        $products_table = [];
        foreach ($products as $key => $product) {
            $products_table[$key]=$product->product_id;
        }

        $orderd_products = Product::whereIn('id',$products_table)->get();
        $order_id = $id;
        return view('admin.orderd_products',compact('orderd_products','order_id'));
        // dd($products_table);
    }

    public function confirm_orderd_products(Request $request) {
        Order::where('id',$request->id)->update([
            'status' => 'confirmed'
        ]);
        return redirect()->back();
    }
}
