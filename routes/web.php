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

use App\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Process\Process;

Route::get('/', function () {
    return view('index');
});

Route::prefix('shop')->group(function () {
    Route::get('/', function () {
        return view('shop');
    });
    Route::get('show/{slug}', function ($slug) {
        return view('showPost', ['slug' => $slug]);
    });
});

Route::get('content', function () {
    return view('content');
});
Route::get('cart', function () {
    return view('cart');
});
Route::get('checkout', function () {
    return view('checkout');
});
Route::get('test', function () {
    /* $name=DB::table('products')->select('product_name','product_description')->groupBy('product_name','product_description')->get();
    dd($name);*/

    /* $name=DB::table('users')->insertOrIgnore(
        [
            'name'=>"mahdi",
            'email'=>"mahdibarati".rand(rand(1,4),rand(4,9))."@gmail.com",
            'password'=>'123456'
        ]
    );*/
    // $name=DB::table('users')->where('email','mahdibarati696@gmail.com')->update(['name'=>'Mahdi Barati']);
    $name = DB::table('users')->select('name')->where('id', 2)->dd();
    return view('test', ['name' => $name]);
});


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::get('/addproduct', function () {
        return view('admin.pages.addproduct', ['insert' => true]);
    });

    Route::post('/product/insert', function () {

        $validator = Validator::make(request()->all(), [
            'product' => 'required|min:5|max:50',
            'types' => 'required|min:5|max:20',
            "product_description" => "required",
            "price" => 'between:3,7',
            "gender" => "required",
            "photos" => "required",
            "size" => "required|min:1|max:5",
            "colors" => "required|min:2|max:10",
            "count" => 'required|numeric',
        ])->validated();

        Products::create([
            'product' => $validator['product'],
            'slug' => $validator['product'],
            'type' => $validator['types'],
            'product_description' => $validator['product_description'],
            'price' => $validator['price'],
            'photos' => $validator['photos'],
            'gender' => $validator['gender'],
            'size' => $validator['size'],
            "color" => $validator['colors'],
            'count' => $validator['count'],
        ]);
    });

    Route::get('edit/{product}', function ($product) {
        $pro = Products::findOrFail($product)->first();

        dd($pro);
        return view('admin.pages.addproduct', [
            'product' => $pro,
            'edit' => true
        ]);
    });

    Route::post('/update/{product}', function ($product) {
        $pro = Products::findOrFail($product);
        $validator = Validator::make(request()->all(), [
            'product' => 'required|min:5|max:50',
            'types' => 'required|min:5|max:20',
            "product_description" => "required",
            "price" => 'between:3,7',
            "gender" => "required",
            "photos" => "required",
            "size" => "required|min:1|max:5",
            "colors" => "required|min:2|max:10",
            "count" => 'required|numeric',
        ]);

        $pro->update([
            'product' => $validator['product'],
            'slug' => $validator['product'],
            'type' => $validator['types'],
            'product_description' => $validator['product_description'],
            'price' => $validator['price'],
            'photos' => $validator['photos'],
            'gender' => $validator['gender'],
            'size' => $validator['size'],
            "color" => $validator['colors'],
            'count' => $validator['count'],
        ]);
        return redirect()->back();
    });
});
