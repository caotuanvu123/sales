<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable   = [
        'id','name','sex','tel','mobile','address','email','link_fb','link_zalo','link_instagram','created_at','updated_at'
    ];
}
