<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AboutUs extends Controller
{
    public function index() {
        $categories = Category::all();
        $side_categories = Category::take(9)->get();

        return view('about_us',compact(['categories','side_categories']));
    }
}
