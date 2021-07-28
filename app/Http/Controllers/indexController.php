<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(Request $request) {
      
        $categories = Category::all();
        $categories_filter_new_product=Category::take(4)->inRandomOrder()->get();
        $feature_categories_filter=Category::take(4)->inRandomOrder()->get();
        $feature_products = Product::take(10)->inRandomOrder()->get();
        $new_products = Product::orderBy('id','desc')->take(5)->get();
        $side_categories = Category::take(9)->get();
        $popular_categories = Category::take(10)->get();
        $offer_products = Product::where('is_offer','=','Offer')->get();
        

        return view('index',compact([
            'categories','feature_products','new_products','categories_filter_new_product'
            ,'feature_categories_filter','side_categories','popular_categories','offer_products']));
    
    }

    public function show_new_product_index(Request $request) {

        $new_products = Product::where('cat_id',$request->id_cat)->take(5)->latest()->get();
        $output='';

        if (count($new_products)!=0) {
            foreach ($new_products as $new_product) {
                $output.='
                <div class="product-card">
                    <a href="route(product_details,'.$new_product->id.')">
                        <div class="img-card">
                            <img src="'.asset('assets/images/'.$new_product->imageProduct[0]->img_src).'" />
                            <div class="view-hover">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                    </a>
                    <div class="product-tittle">
                        <h4>'.$new_product->product_name.'</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>'.$new_product->price.' DT</h4>';
    
                        if ($new_product->old_price) {
                           $output.='<h4 class="old_price">'.$new_product->old_price.' DT</h4>';
                        }
                        
                    $output.='
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="'.asset("assets/images/icons/shopping-cart-white.svg").'" />
                            <span>Ajouter au panier</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>';
            }
        } else {
            $output.="<h2 class='no_new_product_ajax'>Désolé, il n'y a aucun article dans cette catégorie</h2>";
        }
    
        return response()->json(['output'=>$output]);

    }

    public function show_feature_product_ajax(Request $request) {
        $feature_products = Product::where('cat_id',$request->id_cat)->take(10)->inRandomOrder()->get();
        $output='';
        if (count($feature_products)!=0) {
            foreach ($feature_products as $feature_product) {
                $output.='
                    <div class="product-card">
                        <div class="img-card">
                            <img src="'.asset('assets/images/'.$feature_product->imageProduct[0]->img_src).'" />
                            <div class="view-hover">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                        <div class="product-tittle">
                            <h4>'.$feature_product->product_name.'</h4>
                        </div>
                        <div class="product-avis">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>'.$feature_product->price.' DT</h4>';

                            if ($feature_product->old_price) {
                                $output.='<h4 class="old_price">'.$feature_product->old_price.' DT</h4>';
                            }
                            
                        $output.='</div>
                        <div class="add-hover">
                            <div class="add-to-card">
                                <img style="width:25px;" src="'.asset("assets/images/icons/shopping-cart-white.svg").'" />
                                <span>Ajouter au panier</span>
                            </div>
                            <div class="heart-hover">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                    </div>
                ';
            }
        } else {
            $output.="<h2 class='no_new_product_ajax'>Désolé, il n'y a aucun article dans cette catégorie</h2>";
        }
        return response()->json(['output'=>$output]);
    }
}
