<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $items = Item::offset(9)->limit(10)->get();
        $data = ['items' => $items];
        return view('home', $data);

    }
}
