<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Products;
use PDO;

class ProductController extends Controller
{
    public function Insert(ProductRequest $request){
        $validator=$request->validated();
        $validator['slug']=preg_replace('/\s/',"_",$validator['product']);
        Products::create($validator);
        return back();
    }

    public function Update(ProductRequest $request,$product){
        $pro = Products::findOrFail($product);
        $validator =$request->validated();
        $validator['slug']=preg_replace('/\s/',"_",$validator['product']);
        $pro->update($validator);
        return redirect()->back();
    }

    public function Delete($id){
        $pro=Products::findOrFail($id);
        if($pro){
            $pro->delete();
            return back();
        }
        abort(404);
    }
}
