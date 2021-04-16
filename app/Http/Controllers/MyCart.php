<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MyCart extends Controller
{
    public function index() {
        return view('shoppingCard');
    }

    public function getItem(Request $request) {
        // return $request->cards_id;
        $products = Product::whereIn('id',$request->cards_id)->get();
        $output = "";
        foreach ($products as $product) {
            $output.='
            <tr class="tr">
                <td>
                    <img width="100px" src="'.asset('assets/images/'.$product->imageProduct[0]->img_src).'" />
                </td>
                <td>'
                    .$product->product_name.'
                </td>
                <td>
                    <input style="width: 80px;" type="number" min="1" value="1" class="form-control qtn_input" />
                </td>
                <td>
                    <p class="unit_price">'.$product->price.'</p>
                </td>
                <td>
                    <p class="total_price">'.$product->price.'</p>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            ';
        }
       
        return response()->json(['output'=>$output]);
       
    }
}
