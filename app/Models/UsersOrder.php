<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersOrder extends Model
{
    protected $table = 'users_has_product';
    protected $fillable = [
        'id','users_id','product_id','quantity','total','created_at','updated_at'
    ];
}
