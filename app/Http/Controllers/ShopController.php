<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request) {
        if ($request->search!=null && $request->category!=null) {
            $categories = Category::all();
            $side_categories = Category::take(9)->get();
            $products = Product::where('cat_id','=',$request->category)->where('product_name','like','%'.$request->search.'%')->paginate(48);
            $latest_products = Product::take(10)->inRandomOrder()->where('cat_id','=',$request->category)->get();
            return view('shop',compact(['categories','latest_products','products','side_categories']));
        } 
        else if ($request->search!=null) {
            $categories = Category::all();
            $side_categories = Category::take(9)->get();
            $products = Product::where('product_name','like','%'.$request->search.'%')->paginate(48);
            $latest_products = Product::take(10)->inRandomOrder()->get();
            return view('shop',compact(['categories','latest_products','products']));
        } 
        else if ($request->category!=null) {
            $categories = Category::all();
            $side_categories = Category::take(9)->get();
            $products = Product::where('cat_id','=',$request->category)->paginate(48);
            $latest_products = Product::take(10)->inRandomOrder()->get();
            return view('shop',compact(['categories','latest_products','products','side_categories']));
        }

        else {
            $categories = Category::all();
            $side_categories = Category::take(9)->get();
            $side_categories = Category::take(9)->get();
            $products = Product::latest()->paginate(48);
            $latest_products = Product::take(10)->inRandomOrder()->get();
            return view('shop',compact(['categories','latest_products','products','side_categories']));
        }
    }


    public function shop_product_list() {
        $products = Product::latest()->paginate(48);
        $output='';
        foreach ($products as $product) {
            $output.='
            <div class="col-md-12">
                <div class="product-item">
                    <div class="product-img">
                        <img src="'.asset('assets/images/'.$product->imageProduct[0]->img_src).'" />
                    </div>
                    <div class="product-info">
                        <div class="product-name">
                            <h4>'.$product->product_name.'</h4>
                        </div>
                        <div class="product-avis">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>'.$product->price.'</h4>';
                            if ($product->old_price) {
                                $output.='<h4 class="old_price">'.$product->old_price.' DT</h4>';
                            }
                        $output.='   
                        </div>
                        <div class="product-description">
                            <p>'.$product->product_description.'</p>
                        </div>
                        <div class="add-to">
                            <div class="add-to-card">
                                <img style="width:25px;" src="'.asset('assets/images/icons/shopping-cart-white.svg').'" />
                                <span>Add To Cart</span>
                            </div>
                            <div class="heart-hover">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
       
        return response()->json(['output'=>$output]);
    }

    public function shop_product_grid() {
        $products = Product::latest()->paginate(48);
        $output='';
        foreach ($products as $product) {
            $output.='
            <div class="col-md-3">
                <div class="product-card">
                    <div class="img-card">
                        <img src="'.asset('assets/images/'.$product->imageProduct[0]->img_src).'" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>'.$product->product_name.'</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4> '.$product->price.' <h4>';
                        if ($product->old_price) {
                            $output.='<h4 class="old_price">'.$product->old_price.' DT</h4>';
                        }
                    $output.='</div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="'.asset('assets/images/icons/shopping-cart-white.svg').'" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>';
        }
       
        return response()->json(['output'=>$output]);
    }

    public function filter_categories(Request $request) {

        if ($request->filtres!=null) {
            $products = Product::whereIn('sub_cat_id',$request->filtres)->get();
        } else {
            $products = Product::latest()->paginate(48);
        }
            $output='';
            foreach ($products as $product) {
                $output.='
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="'.asset('assets/images/'.$product->imageProduct[0]->img_src).'" />
                            <div class="view-hover">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                        <div class="product-tittle">
                            <h4>'.$product->product_name.'</h4>
                        </div>
                        <div class="product-avis">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4> '.$product->price.' <h4>';
                            if ($product->old_price) {
                                $output.='<h4 class="old_price">'.$product->old_price.' DT</h4>';
                            }
                        $output.='</div>
                        <div class="add-hover">
                            <div class="add-to-card">
                                <img style="width:25px;" src="'.asset('assets/images/icons/shopping-cart-white.svg').'" />
                                <span>Add To Cart</span>
                            </div>
                            <div class="heart-hover">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>';
            }

            if ($output=="") {
                $output="Désolé aucune products in this category";    
            } 
            return response()->json(['output'=>$output]);
    }

    public function autocomplete(Request $request) {
        $data = Category::select('cat_name')->where('cat_name','LIKE','%{$request->query}%')->get();
        return response()->json($data);
    }
}
