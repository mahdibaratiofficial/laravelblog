<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table='comments';
    protected $fillable=[
        'userid',
        'product_id',
        'body',
        'rate'
    ];
}
