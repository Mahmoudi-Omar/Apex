<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class orderlistController extends Controller
{
    public function index() {
        $orders = Order::all(); 
        $customers = Customer::all();
        return view('admin.orderList',compact('customers'));
    }
}
