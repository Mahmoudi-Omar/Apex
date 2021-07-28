<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ImageProduct;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->product_offers;
        $product_id = Product::create([
            'product_name'          => $request->product_name,	
            'product_description'   => $request->product_description,
            'status'	            => $request->product_status,
            'price'                 => $request->product_price,
            'old_price'             => $request->old_price,
            'is_offer'              => $request->product_offers,
            'cat_id'                => $request->cat_id,
            'sub_cat_id'            => $request->sub_cat_id
        ])->id;

        // return $product_id;

        $images = $request->imgs_product;

        foreach ($images as $image) {
            Image::make($image)->resize(227,227)->save(public_path('assets/images/'.$image->hashName()));
            ImageProduct::create([
                'img_src' => $image->hashName(),
                'product_id' => $product_id
            ]);
        }

        return redirect()->back();
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
