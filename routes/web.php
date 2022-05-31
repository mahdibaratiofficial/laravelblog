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

// use Illuminate\Routing\Route;
/*
PagesController : this Controller used For Open Pages
*/
Route::get('/', "PagesController@index");
Route::get('content',"PagesController@Content");
Route::get('cart', "PagesController@Cart");
Route::get('checkout', "PagesController@Checkout");
Route::get('test', "PagesController@Test");
Route::prefix('shop')->group(function () {
    Route::get('/', "PagesController@shop");
    Route::get('show/{ProductSlug}', "PagesController@singleProduct");
});
Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', "PagesController@index");
    Route::get('/addproduct', "PagesController@addProductPage");
    Route::post('/product/insert', "ProductController@Insert");
    Route::get('edit/{ProductSlug}', "PagesController@Edit");
    Route::post('/update/{product}', "ProductController@Update");
    Route::get('products',"PagesController@Products");
    Route::delete('delete/{id}',"ProductController@Delete");
});
