<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminIndex extends Controller
{
    public function dashboard() {
        $order_count = Order::count();
        $en_attente = Order::where('status','pending')->count();
        return view('admin.dashboard',compact('order_count','en_attente'));
    }
}
