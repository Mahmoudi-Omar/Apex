<?php

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

Route::get('/',[App\Http\Controllers\indexController::class,'index']);

Route::prefix('admin')->middleware('admin')->name('admin.')->group(function(){
    Route::get('/',function(){
        return view('admin.dashboard');
    })->name('index');
    Route::resource('insertion',App\Http\Controllers\Admin\CategoriesController::class);
    Route::resource('subcatinsert',App\Http\Controllers\Admin\SubCatController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
