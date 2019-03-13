<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = [
        'id','name','quantity','price_buy','price_sell','description','picture','post','video','created_at','updated_at'
    ];
}
