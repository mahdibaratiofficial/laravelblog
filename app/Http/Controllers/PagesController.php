<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function shop()
    {
        return view('shop');
    }
    public function singleProduct(Products $Products)
    {
        return view('showPost', ['slug' => $Products->getOriginal()]);
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
        $name = DB::table('users')->select('name')->where('id', 2)->dd();
        return view('test', ['name' => $name]);
    }
}
