<?php

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

Route::get('/', function () {
    return view('index');
});

Route::prefix('shop')->group(function (){
    Route::get('/',function (){return view('shop');});
    Route::get('show/{slug}',function ($slug){return view('showPost',['slug'=>$slug]);});
});

Route::get('content',function (){ return view('content'); });
Route::get('cart',function (){ return view('cart'); });
Route::get('checkout',function (){ return view('checkout'); });
Route::get('test',function (){
    return view('test',['name'=>"Mahdi"]);
});

