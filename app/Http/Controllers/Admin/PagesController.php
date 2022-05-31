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
        return view('admin.index');
    }

    public function addProductPage()
    {
        return view('admin.pages.addproduct');
    }

    public function Edit(Products $Products)
    {
        
        if ($Products) {
            return view('admin.pages.update', [
                'product' => $Products->toArray()
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
