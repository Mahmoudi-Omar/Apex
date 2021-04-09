<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ImageProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class EditController extends Controller
{
    public function index() {

        $categories = Category::all();
        $products = Product::all();
        $sub_categories = SubCategory::all();

        return view('admin.editing',compact(['categories','products','sub_categories']));
    }

    public function updateCategory(Request $request) {
        if ($request->cat_name) {
            Category::where('id',$request->cat_id)->update([
                'cat_name' => $request->cat_name
            ]);
    
            session()->flash('cat_update_success','category updated');
            return redirect()->back();
        } else {
            session()->flash('cat_update_failed','please enter a value');
            return redirect()->back();
        }
    }

    public function update_Sub_Category(Request $request) {
        if ($request->sub_cat_name) {
            if ($request->cat_id!='null') {
                SubCategory::where('id',$request->sub_cat_id)->update([
                    'sub_cat_name' => $request->sub_cat_name,
                    'cat_id' => $request->cat_id
                ]);
                return redirect()->back();
            } else {
                SubCategory::where('id',$request->sub_cat_id)->update([
                    'sub_cat_name' => $request->sub_cat_name
                ]);
                return redirect()->back();
            }
        } else if ($request->sub_cat_name==null && $request->cat_id!='null' ) {
            SubCategory::where('id',$request->sub_cat_id)->update([
                'cat_id' => $request->cat_id
            ]);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function ajax_edit_product(Request $request) {
        $product = Product::find($request->product_id);
        $category_selected = Category::find($product->cat_id);
        $sub_categories = SubCategory::where('cat_id',$category_selected->id)->get();
        $categories = Category::all();;
        $output = '';


        $output.='
        <div class="col-md-12">
            <div class="form-group">
                <label class="bmd-label-floating">Product Name</label>
                <input style="width:71% !important" type="text" class="form-control" name="product_name" value="'.$product->product_name.'" />
            </div>
        </div>';

        $output.='
        <div class="col-md-6">
            <div class="form-group">
                <select id="cat_product" name="cat_id" class="selectpicker" data-live-search="true">';
                $output.='<option value="'.$category_selected->id.'">Select Category</option>';
                foreach ($categories as $category) {
                    $output.='<option value="'.$category->id.'" data-tokens="'.$category->cat_name.'">'.$category->cat_name.'</option>';
                }

            $output.='</select>
            </div>
        </div>';

        $output.='
        <div class="col-md-6 append_sub_cat"></div>';

        $output.='
        <div class="col-md-12">
            <div class="form-group">
                <label class="bmd-label-floating">Product Description</label>
                <textarea name="product_description" class="form-control" cols="30" rows="5">'.$product->product_description.'</textarea>
            </div>
        </div>';

      $output.='
        <div class="col-md-6">
            <div class="form-group">
                <label class="bmd-label-floating">Product Price</label>
                <input style="width:71% !important" type="text" class="form-control" name="product_price" value="'.$product->price.'" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="bmd-label-floating">old Price</label>
                <input style="width:71% !important" type="text" class="form-control" value="'.$product->old_price.'" name="old_price" />
            </div>
        </div>';
      
        $output.='
        <div class="col-md-6">
        <div class="form-group">
            <select name="product_status" class="selectpicker">
                <option value="In Stock">In Stock</option> 
                <option value="Hors Stock">Hors Stock</option> 
            </select>
        </div>
      </div>';


      $output.='
      <div class="col-md-12">
          <div class="imgs-edit">
          ';
          foreach ($product->imageProduct as $img) {
              $output.='<img src="'.asset('assets/images/'.$img->img_src).'" />';
          }
      $output.='</div>
      </div>';

      $output.='
        <div class="col-md-12">
            <label class="bmd-label-floating">Product Images</label>
            <input type="file" name="imgs_product[]" multiple="multiple" />
        </div>
      ';

        

        return response()->json(['output'=>$output]);
    }

    public function ajax_product_sub_cat(Request $request) {
        $category = Category::find($request->id_cat);
        $sub_categories =  $category->SubCat;
        $output_sub_cat='';
        $output_sub_cat.='
        
            <div class="form-group">
                <select name="sub_cat_id" class="selectpicker sub-cat-form" data-live-search="true">';

                foreach ($sub_categories as $sub_category) {
                    $output_sub_cat.='<option value="'.$sub_category->id.'" data-tokens="'.$sub_category->sub_cat_name.'">'.$sub_category->sub_cat_name.'</option>';
                }

            $output_sub_cat.='</select>
            </div>';
        return response()->json(['output_sub_cat'=>$output_sub_cat]);
    
    }

    public function update_product(Request $request) {
        // return $request;


        if ($request->sub_cat_id) {
            if ($request->imgs_product) {
                Product::where('id',$request->product_id)->update([
                    'product_name'          => $request->product_name,
                    'product_description'   => $request->product_description,
                    'status'                => $request->product_status,
                    'price'                 => $request->product_price,
                    'old_price'             => $request->old_price,
                    'cat_id'                => $request->cat_id,
                    'sub_cat_id'            => $request->sub_cat_id
                ]);
                foreach ($request->imgs_product as $image) {
                    Image::make($image)->resize(227,227)->save(public_path('assets/images/'.$image->hashName()));
                    ImageProduct::where('product_id',$request->product_id)->update([
                        'img_src' => $image->hashName(),
                        'product_id' => $request->product_id
                    ]);
                }
            } 
            Product::where('id',$request->product_id)->update([
                'product_name'          => $request->product_name,
                'product_description'   => $request->product_description,
                'status'                => $request->product_status,
                'price'                 => $request->product_price,
                'old_price'             => $request->old_price,
                'cat_id'                => $request->cat_id,
                'sub_cat_id'            => $request->sub_cat_id
            ]);
        } else {
            if ($request->imgs_product) {
                Product::where('id',$request->product_id)->update([
                    'product_name'          => $request->product_name,
                    'product_description'   => $request->product_description,
                    'status'                => $request->product_status,
                    'price'                 => $request->product_price,
                    'old_price'             => $request->old_price,
                ]);
                foreach ($request->imgs_product as $image) {
                    Image::make($image)->resize(227,227)->save(public_path('assets/images/'.$image->hashName()));
                    ImageProduct::where('product_id',$request->product_id)->update([
                        'img_src' => $image->hashName(),
                        'product_id' => $request->product_id
                    ]);
                }
            } else {
                Product::where('id',$request->product_id)->update([
                    'product_name'          => $request->product_name,
                    'product_description'   => $request->product_description,
                    'status'                => $request->product_status,
                    'price'                 => $request->product_price,
                    'old_price'             => $request->old_price,
                ]);
            }
        }
       
    }

}
