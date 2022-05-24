<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        "product_name",
        "product_description",
        "price",
        "photos",
        "size",
        "color",
        "count",
        "type",
        "rate",
        "created_at",
        "updated_at",
    ];
}
