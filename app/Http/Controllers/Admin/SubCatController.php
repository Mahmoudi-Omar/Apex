<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCatController extends Controller
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
        $request->validate([
            'sub_cat_name'=>'required',
            'cat_id' => 'required'
        ]);

        SubCategory::create([
            'sub_cat_name'=>$request->sub_cat_name,
            'cat_id' => $request->cat_id
        ]);
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

    public function show_sub_cat(Request $request) {

        $category = Category::find($request->id_cat);
        $sub_cat =  $category->SubCat;
        // return view('admin.insert',compact('sub_cat'));
        $output='';
        // $output.='<select class="selectpicker sub-cat-form" data-live-search="true" name="sub_cat_id">';
        foreach ($sub_cat as $sub) {
            $output.='<option value="'.$sub->id.'" data-tokens="'.$sub->sub_cat_name.'">';
            $output.=$sub->sub_cat_name;
            $output.='</option>';
        }
        // $output.='</select>';

        // return $output;
        return response()->json(['output'=>$output]);

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
