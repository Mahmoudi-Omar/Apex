<?php

namespace App\Http\Controllers;

use App\Models\rating as ModelsRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Rating extends Controller
{
    public function rating(Request $request) {
        if (Cookie::get('rating')!==null) {
            if ($request->cookie('rating')==$request->product_id) {
                ModelsRating::where('product_id',$request->product_id)->update([
                    'ratedIndex'=>$request->ratedIndex
                ]);
            }
            return 'cookie';
        } else {
            Cookie::queue('rating',$request->product_id);
            ModelsRating::create([
                'ratedIndex'=>$request->ratedIndex,
                'product_id'=>$request->product_id
            ]);
            return 'else';
        }
    }
}
