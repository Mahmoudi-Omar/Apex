<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class checkoutController extends Controller
{
    public function index() {
        // $users = User::find(1);
        // return $users->orders->product_id;
        // foreach ($users->orders as $order) {
        //     echo $order->product_name.'<br/>';
        // }
        return view('checkout');
    }

    public function sendOrder(Request $request) {
        $request->validate([
            'full_name'           => 'required|max:255',
            'adresse'              => 'required|max:255',
            'phone'                => 'required|max:255'
        ]);

        $last_id=Customer::create([
            'full_name'    => $request->full_name,
            'phone'        => $request->phone,
            'adresse'         => $request->adresse,
        ])->id;
        
        foreach (Cart::content() as $item) {
            Order::create([
                'customer_id' => $last_id,
                'product_id'  => $item->id,
                'qty'         => $item->qty,
                'price'       => $item->subtotal,
            ]);
        }
        return redirect()->back();
    }
}
