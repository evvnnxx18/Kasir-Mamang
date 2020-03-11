<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Item;

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
        $items = DB::table('items')->where('stock','>',0)->get()->sortBy('name');
        // $itemCarts = Item::has('cart')->get()->sortBy('created_at');

        return view('home', ['items'=>$items]);
    }

    public function dashboard()
    {
        return view('layouts\dashboard');
    }

   

}
