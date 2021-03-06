<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[App\Http\Controllers\indexController::class,'index'])->name('index');
Route::post('show_new_product_ajax',[App\Http\Controllers\indexController::class,'show_new_product_index'])->name('show_new_product_index');
Route::post('show_feature_product_ajax',[App\Http\Controllers\indexController::class,'show_feature_product_ajax'])->name('show_feature_product_ajax');
Route::get('shop',[App\Http\Controllers\ShopController::class,'index'])->name('shop');
Route::get('product_details/{id}',[App\Http\Controllers\ShopDetails::class,'index'])->name('product_details');
Route::get('shop_product_list',[App\Http\Controllers\ShopController::class,'shop_product_list'])->name('shop_product_list');
Route::get('shop_product_grid',[App\Http\Controllers\ShopController::class,'shop_product_grid'])->name('shop_product_grid');
Route::post('filter_categories',[App\Http\Controllers\ShopController::class,'filter_categories'])->name('filter_categories');
Route::post('getItem',[App\Http\Controllers\MyCart::class,'getItem'])->name('getItem');
Route::get('my_cart',[App\Http\Controllers\MyCart::class,'index'])->name('my_cart');
Route::post('storeInCart',[App\Http\Controllers\MyCart::class,'storeInCart'])->name('storeInCart');
Route::post('storeInCartOneProduct',[App\Http\Controllers\MyCart::class,'storeInCartOneProduct'])->name('storeInCartOneProduct');
Route::post('DeleteInCart',[App\Http\Controllers\MyCart::class,'DeleteInCart'])->name('DeleteInCart');
Route::post('UpdateInCart',[App\Http\Controllers\MyCart::class,'UpdateInCart'])->name('UpdateInCart');
Route::get('checkout',[App\Http\Controllers\checkoutController::class,'index'])->name('checkout');
Route::post('sendOrder',[App\Http\Controllers\checkoutController::class,'sendOrder'])->name('sendOrder');
Route::get('about-us',[App\Http\Controllers\AboutUs::class,'index'])->name('about-us');
Route::post('rating',[App\Http\Controllers\Rating::class,'rating'])->name('rating');

Route::prefix('admin')->middleware('admin')->name('admin.')->group(function(){
    Route::get('/',[App\Http\Controllers\Admin\AdminIndex::class,'dashboard'])->name('index');
    Route::resource('insertion',App\Http\Controllers\Admin\CategoriesController::class);
    Route::resource('subcatinsert',App\Http\Controllers\Admin\SubCatController::class);
    Route::post('ajax_sub_cat',[App\Http\Controllers\Admin\SubCatController::class,'show_sub_cat'])->name('ajax_sub_cat');
    Route::resource('product', App\Http\Controllers\Admin\ProductController::class);
    Route::get('editing',[App\Http\Controllers\Admin\EditController::class,'index'])->name('edit.index');
    Route::post('updateCategory',[App\Http\Controllers\Admin\EditController::class,'updateCategory'])->name('edit.updateCategory');
    Route::post('update_Sub_Category',[App\Http\Controllers\Admin\EditController::class,'update_Sub_Category'])->name('edit.update_Sub_Category');
    Route::post('update_product',[App\Http\Controllers\Admin\EditController::class,'update_product'])->name('edit.update_product');
    Route::post('ajax_edit_product',[App\Http\Controllers\Admin\EditController::class,'ajax_edit_product'])->name('ajax_edit_product');
    Route::post('ajax_product_sub_cat',[App\Http\Controllers\Admin\EditController::class,'ajax_product_sub_cat'])->name('ajax_product_sub_cat');
    Route::get('order_list',[App\Http\Controllers\Admin\orderlistController::class,'index'])->name('orderlist');
    Route::get('delete',[App\Http\Controllers\Admin\DeleteController::class,'index'])->name('delete');
    Route::post('delete_categories',[App\Http\Controllers\Admin\DeleteController::class,'delete_categories'])->name('delete_categories');
    Route::post('delete_products',[App\Http\Controllers\Admin\DeleteController::class,'delete_products'])->name('delete_products');
    Route::post('delete_sub_categories',[App\Http\Controllers\Admin\DeleteController::class,'delete_sub_categories'])->name('delete_sub_categories');
    Route::get('products_order/{id}',[App\Http\Controllers\Admin\orderlistController::class,'show_orderd_products'])->name('show_orderd_products');
    Route::post('porducts_order_confirmed/{id}',[App\Http\Controllers\Admin\orderlistController::class,'confirm_orderd_products'])->name('porducts_order_confirmed');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');
