<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    } 
    public function test() {
        $date = Carbon::parse('2021-04-02');
        $now = Carbon::now();
        $diff = $date->diffInDays($now);
        echo 'now is :' . $now . '<br>';
        echo '$date is : '.$date . '<br>';
        echo 'differnece is :' .$diff;
    }
}
