<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        "product" , 
        "product_description" ,
        "price" ,
        "gender" ,
        "photos" ,
        "size" ,
        "color" ,
        "count" ,
        "type" ,
        "rate",
        "created_at",
        "updated_at",
    ];
}
