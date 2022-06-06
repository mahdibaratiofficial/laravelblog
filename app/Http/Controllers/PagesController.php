<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        session()->flush();
        // session(['name'=>'mahdi','family'=>'barati']);
        // session()->put(['name'=>'mahdi']);
        return view('index');
    }
    public function shop()
    {
        $products = DB::table('products')->get();
        return view('shop',['products'=>$products]);
    }
    public function singleProduct(Products $Products)
    {
        return view('showPost', ['product' => $Products->getOriginal()]);
    }
    public function Content()
    {
        return view('content');
    }
    public function Cart()
    {
        return view('cart');
    }

    public function Checkout()
    {
        return view('checkout');
    }

    public function Test()
    {
        // return view('test', ['name' => $name]);
    }
}
