<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;

class PagesController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->getOriginal());
        return view('admin.index');
    }

    public function addProductPage()
    {
        // dd(session()->all());
        return view('admin.pages.addproduct');
    }

    public function Edit(Products $Products)
    {
        if ($Products) {
            return view('admin.pages.update', [
                'product' => $Products->getOriginal()
            ]);
        }
        abort(404);
    }

    public function Products()
    {
        $products = DB::table('products')->get();
        return view('admin.pages.products', [
            'products' => $products
        ]);
    }
}
