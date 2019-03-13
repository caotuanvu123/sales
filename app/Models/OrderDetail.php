<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_has_product';
    protected $fillable = [
        'id','order_id','product_id','quantity','price','created_at','updated_at'
    ];
}
